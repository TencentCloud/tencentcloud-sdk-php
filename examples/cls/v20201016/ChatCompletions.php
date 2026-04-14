<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// 导入对应产品模块的client
use TencentCloud\Cls\V20201016\ClsClient;
// 导入要请求接口对应的Request类
use TencentCloud\Cls\V20201016\Models\ChatCompletionsRequest;
use TencentCloud\Cls\V20201016\Models\Message;
use TencentCloud\Cls\V20201016\Models\MetadataItem;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// 导入可选配置类
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;


function streamProcessResult($chunk)
{
    // 解析原始 SSE 文本块，提取 event 和 data 字段
    $event = '';
    $data = '';
    foreach (explode("\n", trim($chunk)) as $line) {
        if (str_starts_with($line, 'event:')) {
            $event = trim(substr($line, 6));
        } elseif (str_starts_with($line, 'data:')) {
            $data = trim(substr($line, 5));
        }
    }

    // 跳过心跳等 data 为空的事件（如服务端每隔一段时间发送的 :heartbeat 注释）
    if (!$data) return;

    // 服务端通过 event: error 返回应用层错误
    if ($event === 'error') {
        $err = json_decode($data, true);
        fwrite(STDERR, "\n[流式] error " . json_encode($err['Response']['Error'], JSON_UNESCAPED_UNICODE) . PHP_EOL);
        return;
    }

    // 实时输出内容
    $parsed = json_decode($data, true);
    foreach (($parsed['Choices'] ?? []) as $choice) {
        // 实时输出思考过程（ReasoningContent）
        if (!empty($choice['Delta']['ReasoningContent'])) {
            echo $choice['Delta']['ReasoningContent'];
        }
        // 实时输出回复内容（Content）
        if (!empty($choice['Delta']['Content'])) {
            echo $choice['Delta']['Content'];
        }
    }
}

try {
    // 实例化一个证书对象，入参需要传入腾讯云账户secretId，secretKey
    // $cred = new Credential("【secretId】", "【secretKey】");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"),
        getenv("TENCENTCLOUD_SECRET_KEY"));

    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // post请求(默认为post请求)
    $httpProfile->setReqTimeout(300);   // 流式接口可能耗时较长，因此将请求超时时间设置为 300 秒
    // 通过SSE流式调用此接口时，请务必设置请求域名（Endpoint）为 cls.ai.tencentcloudapi.com
    $httpProfile->setEndpoint("cls.ai.tencentcloudapi.com");

    // 实例化一个client选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // 指定签名算法(默认为HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // 实例化要请求产品的client对象，clientProfile是可选的
    $client = new ClsClient($cred, "ap-guangzhou", $clientProfile);

    // 构造请求参数
    $req = new ChatCompletionsRequest();
    // 指定要使用的功能，例如 "text2sql"
    $req->Model = "text2sql";

    // 设置对话消息，角色为 "user"，内容为用户的提问
    $message = new Message();
    $message->Role = "user";
    $message->Content = "状态码200, 统计日志条数";
    $req->Messages = [$message];

    // 设置元数据，传递日志主题地域和日志主题 ID
    $metaRegion = new MetadataItem();
    $metaRegion->Key = "topic_region";
    $metaRegion->Value = "ap-guangzhou";

    $metaTopicId = new MetadataItem();
    $metaTopicId->Key = "topic_id";
    $metaTopicId->Value = "xxxxxxxx-xxxx";

    $req->Metadata = [$metaRegion, $metaTopicId];


    // 3. 流式调用
    // CLS ChatCompletions 同时支持流式和非流式两种模式。
    // 将 Stream 参数设置为 true，表示以流式方式获取响应。
    $req->Stream = true;
    // 如果响应是SSE-event流，可以设置回调函数逐个处理事件流，否则一次返回所有响应内容
    $client->setSseResponseCallbackFunc('streamProcessResult');
    $client->ChatCompletions($req);
    echo PHP_EOL;
    echo '[流式] 完成，开始非流式调用...' . PHP_EOL;

    // 4. 非流式调用
    // 通过 Stream=false 参数来指定非 stream 协议，一次性拿到结果。
    $client->setSseResponseCallbackFunc(null);
    $req->Stream = false;
    $resp = $client->ChatCompletions($req);
    if (!empty($resp->Choices[0]->Message->ReasoningContent)) {
        echo "思考过程：" . $resp->Choices[0]->Message->ReasoningContent . PHP_EOL;
    }
    echo "[非流式] 回复内容：" . PHP_EOL . $resp->Choices[0]->Message->Content . PHP_EOL;

} catch (TencentCloudSDKException $e) {
    echo $e;
}
