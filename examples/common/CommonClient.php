<?php
require_once __DIR__.'/../../vendor/autoload.php';
use TencentCloud\Common\CommonClient;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;

try {
    // Create a credential object using the Tencent Cloud account secretId and secretKey
    $cred = new Credential(
        getenv("TENCENTCLOUD_SECRET_ID"),
        getenv("TENCENTCLOUD_SECRET_KEY")
    );
    // Unlike other product clients, CommonClient needs to specify the product name and version first
    $client = new CommonClient("cvm", "2017-03-12", $cred, "ap-guangzhou");
    // Define the headers (can be left empty)
    $headers = array();
    // Define the request body
    $body =  [
        "Filters" => [
            [
	            "Name" => "zone",
                "Values" => ["ap-guangzhou-1", "ap-guangzhou-2"]
            ]
        ]
    ];
    // The response is an array object. If the request fails, an exception will be thrown
    $resp = $client->callJson(
        // The name of the API
        "DescribeInstances",
        // The request body, which must be an array object
        $body,
        // The request headers, which can be left empty
        //$headers,
    );
    // Output the total count of instances
    echo $resp["TotalCount"].PHP_EOL;
}
catch(TencentCloudSDKException $e) {
    // Output the exception message if an error occurs
    echo $e;
}