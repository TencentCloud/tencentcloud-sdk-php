<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// Import the client for the corresponding product module
use TencentCloud\Cls\V20201016\ClsClient;
// Import the Request class for the interface to be requested
use TencentCloud\Cls\V20201016\Models\UploadLogRequest;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// Import the optional configuration class
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
    // Create a credential object. You need to pass in the Tencent Cloud account secretId and secretKey.
    // $cred = new Credential("【secretId】", "【secretKey】");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"),
                           getenv("TENCENTCLOUD_SECRET_KEY"));

    // Create an HTTP option. This is optional. You can skip it if you have no special needs.
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // POST request (default is POST)
    $httpProfile->setReqTimeout(60);    // Request timeout in seconds (default is 60 seconds)
    $httpProfile->setEndpoint("cls.tencentcloudapi.com");  // Specify the regional domain (default is nearest access)

    // Create a client option. This is optional. You can skip it if you have no special needs.
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // Specify the signature algorithm (default is HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // Create the client object for the product to be requested (CLS in this case). The clientProfile is optional.
    $client = new ClsClient($cred, "ap-guangzhou", $clientProfile);

    $resp = $client->call_octet_stream("UploadLog", array(
        "X-CLS-TopicId" => "[TopicID]",
    ), $pb_str);

    // Output the response as a JSON string
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}