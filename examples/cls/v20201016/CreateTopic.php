<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// Import the client for the corresponding product module
use TencentCloud\Cls\V20201016\ClsClient;
// Import the Request class for the API to be called
use TencentCloud\Cls\V20201016\Models\CreateTopicRequest;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// Import optional configuration classes
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
    // Instantiate a credential object; secretId and secretKey of your Tencent Cloud account are required
    // $cred = new Credential("【secretId】", "【secretKey】");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"),
                           getenv("TENCENTCLOUD_SECRET_KEY"));

    // Instantiate an HTTP profile (optional; can be skipped if no special requirements)
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // POST request (default is POST)
    $httpProfile->setReqTimeout(60);     // Request timeout in seconds (default 60s)
    $httpProfile->setEndpoint("cls.tencentcloudapi.com");  // Specify regional endpoint (defaults to nearest)

    // Instantiate a client profile (optional; can be skipped if no special requirements)
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // Specify signature algorithm (default HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // Instantiate the client object for the product (CLS in this example); clientProfile is optional
    $client = new ClsClient($cred, "ap-guangzhou", $clientProfile);

    $req = new CreateTopicRequest();
    $req->setLogsetId("【LogSetID】");
    $req->setAutoSplit(true);
    $req->setTopicName("cls_php_test_demo");
    $resp = $client->CreateTopic($req);

    // Print the JSON-formatted response
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}