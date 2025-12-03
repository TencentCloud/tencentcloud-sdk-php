<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// Import the client for the corresponding product module
use TencentCloud\Tci\V20190318\TciClient;

// Import the Request class for the interface to be requested
use TencentCloud\Tci\V20190318\Models\SubmitTraditionalClassTaskRequest;
use TencentCloud\Tci\V20190318\Models\SubmitTraditionalClassTask;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// Import the optional configuration class
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
    // Create a credential object. You need to pass in the Tencent Cloud account secretId and secretKey.
    // To protect key security, it is recommended to set the key in environment variables or configuration files.
    // Hardcoding the key into code may expose it if code is leaked, which is a security risk and not recommended.
    // $cred = new Credential("", "");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));

    // Create an HTTP option. This is optional. You can skip it if you have no special needs.
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // POST request (default is POST)
    $httpProfile->setReqTimeout(30);    // Request timeout in seconds (default is 60 seconds)
    $httpProfile->setEndpoint("tci.tencentcloudapi.com");  // Specify the regional domain (default is nearest access)


    // Create a client option. This is optional. You can skip it if you have no special needs.
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // Specify the signature algorithm (default is HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);
    $client = new TciClient($cred, "", $clientProfile);

    // Create a tci instance information query request object, each interface corresponds to a request object.
    $req = new SubmitTraditionalClassTaskRequest();
    $req->FileContent="https://edu-test-1253131631.cos.ap-guangzhou.myqcloud.com/aieduautotest/autotest_vedio.mp4";
    $req->FileType="vod_url";
    $req->LibrarySet=["library_15603955264181591716"];
    $resp = $client->SubmitTraditionalClassTask($req);

    // Output the response as a JSON string
    print_r($resp->toJsonString());

    // You can also extract a single value.
    // You can check the definition of return fields through the official interface documentation or jump to the definition of the response object
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
