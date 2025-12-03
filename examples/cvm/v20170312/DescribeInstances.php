<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// Import the client for the corresponding product module
use TencentCloud\Cvm\V20170312\CvmClient;
// Import the Request class for the interface to be requested
use TencentCloud\Cvm\V20170312\Models\DescribeInstancesRequest;
use TencentCloud\Cvm\V20170312\Models\Filter;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// Import the optional configuration class
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
    // Create a credential object. You need to pass in the Tencent Cloud account secretId and secretKey.
    //$cred = new Credential("secretId", "secretKey");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));

    // Create an HTTP option. This is optional. You can skip it if you have no special needs.
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("GET");  // GET request (default is POST)
    $httpProfile->setReqTimeout(30);    // Request timeout in seconds (default is 60 seconds)
    $httpProfile->setEndpoint("cvm.ap-shanghai.tencentcloudapi.com");  // Specify the regional domain (default is nearest access)
    //$httpProfile->setRootDomain("ap-shanghai.tencentcloudapi.com");  // Specify the root domain, default is tencentcloudapi.com
    //$httpProfile->setKeepAlive(true);

    // Create a client option. This is optional. You can skip it if you have no special needs.
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // Specify the signature algorithm (default is HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // Create the client object for the product to be requested (CVM in this case). The clientProfile is optional.
    $client = new CvmClient($cred, "ap-shanghai", $clientProfile);

    // Create a request object for querying CVM instance information. Each interface corresponds to a request object.
    $req = new DescribeInstancesRequest();

    // Fill in the request parameters. The member variables of the request object correspond to the input parameters of the interface.
    // You can check the definition of the request parameters by referring to the official interface documentation or jumping to the definition of the request object.
    $respFilter = new Filter();  // Create a Filter object to query CVM instances by zone
    $respFilter->Name = "zone";
    $respFilter->Values = ["ap-shanghai-1", "ap-shanghai-2"];
    $req->Filters = [$respFilter];  // Filters is a list of Filter objects

    // You can also assign request parameters using a standard JSON formatted string. The following code is equivalent to the parameter assignment above.
    $params = [
        "Filters" => [
            [
                "Name" => "zone",
                "Values" => ["ap-shanghai-1", "ap-shanghai-2"]
            ]
        ]
    ];
    $req->fromJsonString(json_encode($params));

    // Call the DescribeInstances method through the client object to initiate the request. Note that the request method name corresponds to the request object.
    // The returned resp is an instance of the DescribeInstancesResponse class, which corresponds to the request object.
    $resp = $client->DescribeInstances($req);

    // Output the response as a JSON string
    print_r($resp->toJsonString());

    // You can also extract a single value.
    // You can check the definition of the return fields by referring to the official interface documentation or jumping to the definition of the response object.
    print_r($resp->TotalCount);
}
catch(TencentCloudSDKException $e) {
    echo $e;
}