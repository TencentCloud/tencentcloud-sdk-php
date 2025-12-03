<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// Import the client of the corresponding product module
use TencentCloud\Cvm\V20170312\CvmClient;
// Import the Request class of the interface to be requested
use TencentCloud\Cvm\V20170312\Models\DescribeZonesRequest;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
try {
    // Create a credential object. You need to pass in the Tencent Cloud account secretId and secretKey.
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));
    $clientProfile = new ClientProfile();
    //$clientProfile->setLanguage(ClientProfile::$ZH_CN);
    $clientProfile->setSignMethod(ClientProfile::$SIGN_HMAC_SHA256);
    // # Create a client object for the product to be requested (take cvm as an example)
    $client = new CvmClient($cred, "ap-guangzhou", $clientProfile);

    // Create a request object
    $req = new DescribeZonesRequest();

    // Call the interface you want to access through the client object. You need to pass in the request object.
    $resp = $client->DescribeZones($req);

    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}