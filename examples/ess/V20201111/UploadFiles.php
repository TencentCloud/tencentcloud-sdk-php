<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use TencentCloud\Essbasic\V20201222\EssbasicClient;
use TencentCloud\Essbasic\V20201222\Models\UploadFilesRequest;
use TencentCloud\Essbasic\V20201222\Models\Caller;
use TencentCloud\Essbasic\V20201222\Models\UploadFile;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
    // Create a credential object. You need to pass in the Tencent Cloud account secretId and secretKey.
    $cred = new Credential("********************************", "********************************");

    // Create an HTTP option. This is optional. You can skip it if you have no special needs.
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // POST request (default is POST)
    $httpProfile->setReqTimeout(30);    // Request timeout in seconds (default is 60 seconds)
    $httpProfile->setEndpoint("file.ess.tencent.cn");  // Specify the regional domain (default is nearest access)

    // Create a client option. This is optional. You can skip it if you have no special needs.
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // Specify the signature algorithm (default is HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    $client = new EssbasicClient($cred, "ap-guangzhou", $clientProfile);

    $req = new UploadFilesRequest();
    $req->setBusinessType("FLOW");

    $caller = new Caller();
    $caller->setOperatorId("********************************");
    $req->setCaller($caller);

    $file = new UploadFile();
    $base64_content = chunk_split(base64_encode(file_get_contents("/***/aaa.pdf")));
    $file->setFileBody($base64_content);
    $file->setFileName("aaa.pdf");

    $req->FileInfos = [];
    array_push($req->FileInfos, $file);

    $resp = $client->UploadFiles($req);

    // Output the response as a JSON string
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
