<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// 导入对应产品模块的client
use TencentCloud\Cls\V20201016\ClsClient;
// 导入要请求接口对应的Request类
use TencentCloud\Cls\V20201016\Models\UploadLogRequest;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// 导入可选配置类
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

use Cls\LogGroup;
use Cls\Log\Content;
use Cls\Log;
use Cls\LogGroupList;



$logGroupList =  new LogGroupList();

$logGroup = new LogGroup();

$log = new Log();

$content = new Content();
$content ->setKey("name");
$content ->setValue("zhangsan");
$log->setContents([$content]);
$log->setTime(time());

$logGroup->setLogs([$log]);
$logGroupList ->setLogGroupList([$logGroup]);

$pb_str = $logGroupList->serializeToString();

try {
    // 实例化一个证书对象，入参需要传入腾讯云账户secretId，secretKey
    // $cred = new Credential("【secretId】", "【secretKey】");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"),
                           getenv("TENCENTCLOUD_SECRET_KEY"));

    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // post请求(默认为post请求)
    $httpProfile->setReqTimeout(60);    // 请求超时时间，单位为秒(默认60秒)
    $httpProfile->setEndpoint("cls.tencentcloudapi.com");  // 指定接入地域域名(默认就近接入)

    // 实例化一个client选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // 指定签名算法(默认为HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // 实例化要请求产品(以cls为例)的client对象,clientProfile是可选的
    $client = new ClsClient($cred, "ap-guangzhou", $clientProfile);

    $resp = $client->call_octet_stream("UploadLog", array(
        "X-CLS-TopicId" => "[TopicID]",
    ), $pb_str);

    // 输出json格式的字符串回包
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
