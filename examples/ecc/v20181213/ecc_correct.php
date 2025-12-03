<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// Import the client for the corresponding product module
use TencentCloud\Ecc\V20181213\EccClient;

// Import the Request class for the interface to be requested
use TencentCloud\Ecc\V20181213\Models\ECCRequest;
use TencentCloud\Ecc\V20181213\Models\ECCResponse;

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
    //$httpProfile->setReqMethod("post");  // POST request (default is POST)
    $httpProfile->setReqTimeout(30);    // Request timeout in seconds (default is 60 seconds)
    $httpProfile->setEndpoint("ecc.ap-shanghai.tencentcloudapi.com");  // Specify the regional domain (default is nearest access)

    // Create a client option. This is optional. You can skip it if you have no special needs.
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("HmacSHA256");  // Specify the signature algorithm (default is HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    $client = new EccClient($cred, "ap-shanghai", $clientProfile);

    // Create a request object for querying ECC instance information. Each interface corresponds to a request object.
    $req = new ECCRequest();
    $req->Content = "this composition content";

    $resp = $client->ECC($req);

    // Output the response as a JSON string
    print_r($resp->toJsonString());

    // You can also extract a single value.
    // You can check the definition of the return fields by referring to the official interface documentation or jumping to the definition of the response object.
    print_r($resp->TotalCount);
}
catch(TencentCloudSDKException $e) {
    echo $e;
}