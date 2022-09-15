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
    // 实例化一个证书对象，入参需要传入腾讯云账户secretId，secretKey
    $cred = new Credential("********************************", "********************************");

    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // post请求(默认为post请求)
    $httpProfile->setReqTimeout(30);    // 请求超时时间，单位为秒(默认60秒)
    $httpProfile->setEndpoint("file.ess.tencent.cn");  // 指定接入地域域名(默认就近接入)

    // 实例化一个client选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // 指定签名算法(默认为HmacSHA256)
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

    // 输出json格式的字符串回包
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
