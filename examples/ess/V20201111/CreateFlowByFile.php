<?php
require_once __DIR__.'/../../../vendor/autoload.php';
use TencentCloud\Ess\V20201111\EssClient;
use TencentCloud\Ess\V20201111\Models\CreateFlowByFilesRequest;
use TencentCloud\Ess\V20201111\Models\UserInfo;
use TencentCloud\Ess\V20201111\Models\ApproverInfo;
use TencentCloud\Ess\V20201111\Models\Component;
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

    $req = new CreateFlowByFilesRequest();

    $userInfo = new UserInfo();
    $userInfo->setUserId("********************************");
    $req->setOperator($userInfo);

    $req->FileIds = [];
    array_push($req->FileIds, "********************************");

    // Company party: When silent signing, type is 3 / non-silent signing type is 0
    $approver1 = new ApproverInfo();
    $approver1->setApproverType(3);
    $approver1->setApproverName("********************************");
    $approver1->setApproverMobile("********************************");
    $approver1->setOrganizationName("********************************");

    $component1 = new Component();
    $component1->setComponentValue("********************************");
    $component1->setComponentPosY(497.61545);
    $component1->setComponentWidth(74);
    $component1->setFileIndex(0);
    $component1->setComponentType("SIGN_SEAL");
    $component1->setComponentPage(1);
    $component1->setComponentPosX(417.15625);
    $component1->setComponentHeight(70);

    $approver1->SignComponents = [];
    array_push($approver1->SignComponents, $component1);

    // Individual customer
    $approver2 = new ApproverInfo();
    $approver2->setApproverType(1);
    $approver2->setApproverName("********************************");
    $approver2->setApproverMobile("********************************");

    $component2 = new Component();
    $component2->setComponentPosY(472.78125);
    $component2->setComponentWidth(112);
    $component2->setFileIndex(0);
    $component2->setComponentType("SIGN_SIGNATURE");
    $component2->setComponentPage(1);
    $component2->setComponentPosX(146.15625);
    $component2->setComponentHeight(40);

    $approver2->SignComponents = [];
    array_push($approver2->SignComponents, $component2);

    // Note: When doing B2B signing, it allows pointing to unregistered companies, at which point signers can view the contract and register the company according to the guidance
    $req->Approvers = [];
    array_push($req->Approvers, $approver1);
    array_push($req->Approvers, $approver2);

    $req->setFlowName("********************************");
    // Please set a reasonable time, otherwise the contract may expire easily
    $req->setDeadLine(time() + 7 * 24 * 3600);

    $resp = $client->CreateFlowByFiles($req);

    // Output the response as a JSON string
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}

