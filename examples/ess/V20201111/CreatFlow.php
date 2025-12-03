<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use TencentCloud\Ess\V20201111\EssClient;
use TencentCloud\Ess\V20201111\Models\UserInfo;
use TencentCloud\Ess\V20201111\Models\FlowCreateApprover;
use TencentCloud\Ess\V20201111\Models\CreateFlowRequest;
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
    $httpProfile->setEndpoint("ess.tencentcloudapi.com");  // Specify the regional domain (default is nearest access)

    // Create a client option. This is optional. You can skip it if you have no special needs.
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // Specify the signature algorithm (default is HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    $client = new EssClient($cred, "ap-guangzhou", $clientProfile);

    $req = new CreateFlowRequest();

    $userInfo = new UserInfo();
    $userInfo->setUserId("********************************");
    $req->setOperator($userInfo);

    // Company side: When silent signing, type is 3 / non-silent signing type is 0
    $enterpriseInfo = new FlowCreateApprover();
    $enterpriseInfo->setApproverType(3);
    $enterpriseInfo->setOrganizationName("********************************");
    $enterpriseInfo->setApproverName("********************************");
    $enterpriseInfo->setApproverMobile("********************************");
    $enterpriseInfo->setRequired(true);

    // Individual customer
    $clientInfo = new FlowCreateApprover();
    $clientInfo->setApproverType(1);
    $clientInfo->setApproverName("********************************");
    $clientInfo->setApproverMobile("********************************");
    $clientInfo->setRequired(true);

    // Company side 2 (When doing B2B scenarios, it allows pointing to unregistered companies, signers can view the contract and register the company according to the guidelines)
    $req->Approvers = [];
    array_push($req->Approvers, $enterpriseInfo);
    array_push($req->Approvers, $clientInfo);

    $req->setFlowName("********************************");
    // Please set a reasonable time, otherwise the contract may expire easily
    $req->setDeadLine(time() + 7 * 24 * 3600);

    $resp = $client->CreateFlow($req);

    // Output the response as a JSON string
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}