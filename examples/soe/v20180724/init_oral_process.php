<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// Import the client for the corresponding product module
use TencentCloud\Soe\V20180724\SoeClient;

// Import the Request class for the interface to be requested
use TencentCloud\Soe\V20180724\Models\InitOralProcessRequest;
use TencentCloud\Soe\V20180724\Models\InitOralProcess;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// Import the optional configuration class
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
    // Create a credential object. You need to pass in the Tencent Cloud account secretId and secretKey.
    // To protect the security of the keys, it is recommended to set the keys in environment variables or configuration files.
    // Hardcoding keys into the code may expose them if the code is leaked, which is a security risk and is not recommended.
    // $cred = new Credential("", "");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));

    // Create an HTTP option. This is optional. You can skip it if you have no special needs.
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // POST request (default is POST)
    $httpProfile->setReqTimeout(30);    // Request timeout in seconds (default is 60 seconds)
    $httpProfile->setEndpoint("soe.tencentcloudapi.com");  // Specify the regional domain (default is nearest access)

    // Create a client option. This is optional. You can skip it if you have no special needs.
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // Specify the signature algorithm (default is HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    $client = new SoeClient($cred, "", $clientProfile);

    // Create a request object for initializing the oral process. Each interface corresponds to a request object.
    $req = new InitOralProcessRequest();
    $req->RefText = "since";
    $req->WorkMode = 0;
    $req->EvalMode = 1;
    $req->ScoreCoeff = 3.5;
    $req->SessionId = "stress_test_956938";

    $resp = $client->InitOralProcess($req);

    // Output the response as a JSON string
    print_r($resp->toJsonString());

    // You can also extract a single value.
    // You can check the definition of the return fields by referring to the official interface documentation or jumping to the definition of the response object.
}
catch(TencentCloudSDKException $e) {
    echo $e;
}