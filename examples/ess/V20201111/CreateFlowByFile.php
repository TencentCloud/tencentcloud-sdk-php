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
    // 实例化一个证书对象，入参需要传入腾讯云账户secretId，secretKey
    $cred = new Credential("********************************", "********************************");

    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // post请求(默认为post请求)
    $httpProfile->setReqTimeout(30);    // 请求超时时间，单位为秒(默认60秒)
    $httpProfile->setEndpoint("ess.tencentcloudapi.com");  // 指定接入地域域名(默认就近接入)

    // 实例化一个client选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // 指定签名算法(默认为HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    $client = new EssClient($cred, "ap-guangzhou", $clientProfile);

    $req = new CreateFlowByFilesRequest();

    $userInfo = new UserInfo();
    $userInfo->setUserId("********************************");
    $req->setOperator($userInfo);

    $req->FileIds = [];
    array_push($req->FileIds, "********************************");

    // 企业方 静默签署时type为3/非静默签署type为0
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

    // 客户个人
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

    // 注：当进行B2B签署时，允许指向未注册的企业，此时签署人可以查看合同并按照指引注册企业
    $req->Approvers = [];
    array_push($req->Approvers, $approver1);
    array_push($req->Approvers, $approver2);

    $req->setFlowName("********************************");
    // 请设置合理的时间，否则容易造成合同过期
    $req->setDeadLine(time() + 7 * 24 * 3600);

    $resp = $client->CreateFlowByFiles($req);

    // 输出json格式的字符串回包
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}

