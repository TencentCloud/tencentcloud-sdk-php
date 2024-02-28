<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// 导入对应产品模块的client
use TencentCloud\Hunyuan\V20230901\HunyuanClient;
// 导入要请求接口对应的Request类
use TencentCloud\Hunyuan\V20230901\Models\ChatStdRequest;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// 导入可选配置类
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;


function streamProcessResult($result)
{
    // 处理每个事件流
    echo $result;
}

try {
    // 实例化一个证书对象，入参需要传入腾讯云账户secretId，secretKey
    // $cred = new Credential("【secretId】", "【secretKey】");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"),
        getenv("TENCENTCLOUD_SECRET_KEY"));
    
    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // post请求(默认为post请求)
    $httpProfile->setReqTimeout(60);    // 请求超时时间，单位为秒(默认60秒)
    $httpProfile->setEndpoint("hunyuan.tencentcloudapi.com");  // 指定接入地域域名(默认就近接入)
    
    // 实例化一个client选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // 指定签名算法(默认为HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);
    
    // 实例化要请求产品的client对象,clientProfile是可选的
    $client = new HunyuanClient($cred, "ap-guangzhou", $clientProfile);
    
    // 如果响应是SSE-event流，可以设置回调函数逐个处理事件流，否则一次返回所有响应内容
    $client->setSseResponseCallbackFunc('streamProcessResult');
    
    
    // 实例化一个hunyuan实例信息查询请求对象,每个接口都会对应一个request对象。
    $req = new ChatStdRequest();
    $req->TopP = 0;
    $req->Temperature = 0;
    $reqMessage = new Message();
    $reqMessage->Role = "user";
    $reqMessage->Content = "计算1+1";
    $req->Messages = [$reqMessage];
    
    // 通过client对象调用ChatStd方法发起请求。注意请求方法名与请求对象是对应的
    $client->ChatStd($req);
    
}
catch(TencentCloudSDKException $e) {
    echo $e;
}

