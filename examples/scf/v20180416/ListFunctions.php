<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Scf\V20180416\ScfClient;
use TencentCloud\Scf\V20180416\Models\ListFunctionsRequest;
try {
    // Create a credential object using the Tencent Cloud account secretId and secretKey.
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));
    // Create an HTTP profile object.
    $httpProfile = new HttpProfile();
    // Set the endpoint for the HTTP profile.
    $httpProfile->setEndpoint("scf.tencentcloudapi.com");

    // Create a client profile object.
    $clientProfile = new ClientProfile();
    // Set the HTTP profile for the client profile.
    $clientProfile->setHttpProfile($httpProfile);
    // Create an SCF client object.
    $client = new ScfClient($cred, "ap-guangzhou", $clientProfile);

    // Create a request object for listing functions.
    $req = new ListFunctionsRequest();

    // Set the request parameters as an empty JSON string.
    $params = '{}';
    // Set the request parameters from a JSON string.
    $req->fromJsonString($params);

    // Call the ListFunctions method to get the list of functions.
    $resp = $client->ListFunctions($req);

    // Print the response as a JSON string.
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    // Print the exception message if an error occurs.
    echo $e;
}