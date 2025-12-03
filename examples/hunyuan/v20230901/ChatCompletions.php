<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// Import the client for the corresponding product module
use TencentCloud\Hunyuan\V20230901\HunyuanClient;
// Import the Request class for the interface to be requested
use TencentCloud\Hunyuan\V20230901\Models\ChatCompletionsRequest;
use TencentCloud\Hunyuan\V20230901\Models\Message;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// Import the optional configuration class
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;


function streamProcessResult($result)
{
    // Process each event stream
    echo $result;
}

try {
    // Create a credential object. You need to pass in the Tencent Cloud account secretId and secretKey.
    // $cred = new Credential("【secretId】", "【secretKey】");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"),
        getenv("TENCENTCLOUD_SECRET_KEY"));

    // Create an HTTP option. This is optional. You can skip it if you have no special needs.
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // POST request (default is POST)
    $httpProfile->setReqTimeout(60);    // Request timeout in seconds (default is 60 seconds)
    $httpProfile->setEndpoint("hunyuan.tencentcloudapi.com");  // Specify the regional domain (default is nearest access)

    // Create a client option. This is optional. You can skip it if you have no special needs.
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // Specify the signature algorithm (default is HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // Create the client object for the product to be requested, clientProfile is optional
    $client = new HunyuanClient($cred, "ap-guangzhou", $clientProfile);

    // If the response is an SSE-event stream, you can set a callback function to process each event stream one by one, otherwise return all response content at once
    $client->setSseResponseCallbackFunc('streamProcessResult');


    // Create a hunyuan instance information query request object, each interface corresponds to a request object.
    $req = new ChatCompletionsRequest();
    $req->TopP = 0;
    $req->Temperature = 0;
    $req->Model = "hunyuan-standard";
    $reqMessage = new Message();
    $reqMessage->Role = "user";
    $reqMessage->Content = "Calculate 1+1";
    $req->Messages = [$reqMessage];

    // Call the ChatCompletions method through the client object to initiate the request. Note that the request method name corresponds to the request object.
    $client->ChatCompletions($req);

}
catch(TencentCloudSDKException $e) {
    echo $e;
}

