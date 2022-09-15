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

    $req = new CreateFlowRequest();

    $userInfo = new UserInfo();
    $userInfo->setUserId("********************************");
    $req->setOperator($userInfo);

    // 企业方 静默签署时type为3/非静默签署type为0
    $enterpriseInfo = new FlowCreateApprover();
    $enterpriseInfo->setApproverType(3);
    $enterpriseInfo->setOrganizationName("********************************");
    $enterpriseInfo->setApproverName("********************************");
    $enterpriseInfo->setApproverMobile("********************************");
    $enterpriseInfo->setRequired(true);

    // 客户个人
    $clientInfo = new FlowCreateApprover();
    $clientInfo->setApproverType(1);
    $clientInfo->setApproverName("********************************");
    $clientInfo->setApproverMobile("********************************");
    $clientInfo->setRequired(true);

    // 企业方2 （当进行B2B场景时，允许指向未注册的企业，签署人可以查看合同并按照指引注册企业）
    $req->Approvers = [];
    array_push($req->Approvers, $enterpriseInfo);
    array_push($req->Approvers, $clientInfo);

    $req->setFlowName("********************************");
    // 请设置合理的时间，否则容易造成合同过期
    $req->setDeadLine(time() + 7 * 24 * 3600);

    $resp = $client->CreateFlow($req);

    // 输出json格式的字符串回包
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}