<?php
require_once '../../../TCloudAutoLoader.php';
// 导入对应产品模块的client
use TencentCloud\Sms\v20190711\SmsClient;
// 导入要请求接口对应的Request类
use TencentCloud\Sms\v20190711\Models\SendSmsRequest;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// 导入可选配置类
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
    // 实例化一个证书对象，入参需要传入腾讯云账户secretId，secretKey
    $cred = new Credential("", "");
    //$cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));

    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("GET");  // post请求(默认为post请求)
    $httpProfile->setReqTimeout(30);    // 请求超时时间，单位为秒(默认60秒)
    $httpProfile->setEndpoint("sms.tencentcloudapi.com");  // 指定接入地域域名(默认就近接入)

    // 实例化一个client选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // 指定签名算法(默认为HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // 实例化要请求产品(以cvm为例)的client对象,clientProfile是可选的
    $client = new SmsClient($cred, "ap-shanghai", $clientProfile);

    // 实例化一个cvm实例信息查询请求对象,每个接口都会对应一个request对象。
    $req = new SendSmsRequest();

    // 填充请求参数,这里request对象的成员变量即对应接口的入参
    // 你可以通过官网接口文档或跳转到request对象的定义处查看请求参数的定义
    $req->SmsSdkAppid = "1400787878";
    $req->Sign = "xxx";
    $req->ExtendCode = "0";
    $req->PhoneNumberSet = array("+8615298898989");
    $req->SenderId = "xxx";
    $req->SessionContext = "xxx";
    $req->TemplateID = "449739";
    $req->TemplateParamSet = array("0");


    // 通过client对象调用DescribeInstances方法发起请求。注意请求方法名与请求对象是对应的
    // 返回的resp是一个DescribeInstancesResponse类的实例，与请求对象对应
    $resp = $client->SendSms($req);

    // 输出json格式的字符串回包
    print_r($resp->toJsonString());

    // 也可以取出单个值。
    // 你可以通过官网接口文档或跳转到response对象的定义处查看返回字段的定义
    print_r($resp->TotalCount);
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
