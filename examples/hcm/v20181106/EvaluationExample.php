<?php
require_once '../TCloudAutoLoader.php';
// 导入对应产品模块的client
use TencentCloud\Hcm\V20181106\HcmClient;
// 导入要请求接口对应的Request类
use TencentCloud\Hcm\V20181106\Models\EvaluationRequest;
use TencentCloud\Hcm\V20181106\Models\EvaluationResponse;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// 导入可选配置类
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
    // 实例化一个证书对象，入参需要传入腾讯云账户secretId，secretKey
    //$cred = new Credential("secretId", "secretKey");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));

    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("get");  // post请求(默认为post请求)
    $httpProfile->setReqTimeout(30);    // 请求超时时间，单位为秒(默认60秒)
    $httpProfile->setEndpoint("hcm.ap-shanghai.tencentcloudapi.com");  // 指定接入地域域名(默认就近接入)

    // 实例化一个client选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("HmacSHA256");  // 指定签名算法(默认为HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // 实例化要请求产品(以cvm为例)的client对象,clientProfile是可选的
    $client = new HcmClient($cred, "ap-shanghai", $clientProfile);

    // 实例化一个cvm实例信息查询请求对象,每个接口都会对应一个request对象。
    $req = new EvaluationRequest();

    // 填充请求参数,这里request对象的成员变量即对应接口的入参
    // 你可以通过官网接口文档或跳转到request对象的定义处查看请求参数的定义
    // $respFilter = new Filter();  // 创建Filter对象, 以zone的维度来查询cvm实例
    // $respFilter->Name = "zone";
    // $respFilter->Values = ["ap-shanghai-1", "ap-shanghai-2"];
    // $req->Filters = [$respFilter];  // Filters 是成员为Filter对象的列表

    // 这里还支持以标准json格式的string来赋值请求参数的方式。下面的代码跟上面的参数赋值是等效的
    $params = [
        "Filters" => [
            [
                "SessionId" => "123456",
                "Image" => "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",
                "HcmAppid" => "",
                "Url" => "",
            ]
        ]
    ];

    $req->fromJsonString(json_encode($params));

    // 通过client对象调用DescribeInstances方法发起请求。注意请求方法名与请求对象是对应的
    // 返回的resp是一个DescribeInstancesResponse类的实例，与请求对象对应
    $resp = $client->Evaluation($req);

    // 输出json格式的字符串回包
    print_r($resp->toJsonString());

    // 也可以取出单个值。
    // 你可以通过官网接口文档或跳转到response对象的定义处查看返回字段的定义
    print_r($resp->TotalCount);
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
