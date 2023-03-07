<?php
require_once __DIR__.'/../../vendor/autoload.php';
use TencentCloud\Common\CommonClient;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;

try {
    $cred = new Credential(
        getenv("TENCENTCLOUD_SECRET_ID"),
        getenv("TENCENTCLOUD_SECRET_KEY")
    );
    // 和各产品 Client 相比，CommonClient 需要先指定产品名和版本号
    $client = new CommonClient("cvm", "2017-03-12", $cred, "ap-guangzhou");
    $headers = array();
    $body =  [
        "Filters" => [
            [
	            "Name" => "zone",
                "Values" => ["ap-guangzhou-1", "ap-guangzhou-2"]
            ]
        ]
    ];
    // 返回的是 array 对象，如请求失败则抛出异常
    $resp = $client->callJson(
        // 接口名
        "DescribeInstances",
        // 请求体，目前必须为 array 对象
        $body,
        // 请求头，可留空
        //$headers,
    );
    echo $resp["TotalCount"].PHP_EOL;
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
