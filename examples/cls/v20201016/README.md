CLS Demo
---

## Log Upload Demo

```
<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// Import the client for the corresponding product module
use TencentCloud\Cls\V20201016\ClsClient;
// Import the Request class for the interface to be requested
use TencentCloud\Cls\V20201016\Models\UploadLogRequest;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// Import the optional configuration class
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

use Cls\LogGroup;
use Cls\Log\Content;
use Cls\Log;
use Cls\LogGroupList;

$logGroupList =  new LogGroupList();

$logGroup = new LogGroup();

$log = new Log();

$content = new Content();
$content ->setKey("name");
$content ->setValue("zhangsan");
$log->setContents([$content]);
$log->setTime(time());

$logGroup->setLogs([$log]);
$logGroupList ->setLogGroupList([$logGroup]);

$pb_str = $logGroupList->serializeToString();

try {
    // Create a credential object. You need to pass in the Tencent Cloud account secretId and secretKey.
    $cred = new Credential("【secretId】", "【secretKey】");

    // Create an HTTP option. This is optional. You can skip it if you have no special needs.
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // POST request (default is POST)
    $httpProfile->setReqTimeout(60);    // Request timeout in seconds (default is 60 seconds)
    $httpProfile->setEndpoint("cls.tencentcloudapi.com");  // Specify the regional domain (default is nearest access)

    // Create a client option. This is optional. You can skip it if you have no special needs.
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // Specify the signature algorithm (default is HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // Create the client object for the product to be requested (take cls as an example), clientProfile is optional
    $client = new ClsClient($cred, "ap-guangzhou", $clientProfile);

    $resp = $client->call_octet_stream("UploadLog", array(
        "X-CLS-TopicId" => "[TopicID]",
    ), $pb_str);

    // Output the response as a JSON string
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}


```

## How to use protobuf in PHP projects

1. Download and install the latest version of protoc from the official website: https://github.com/protocolbuffers/protobuf/releases (Choose according to your operating system)

Generate corresponding PHP implementation code based on pb files


```
protoc --php_out=./ cls.proto

```

2. Include the pb-generated files in composer.json

```
{
    ...omitted here
    "autoload": {
        ...omitted here
        "psr-4": {
            "GPBMetadata\\": "./examples/cls/v20201016/proto/GPBMetadata",
            "Cls\\": "./examples/cls/v20201016/proto/Cls"
        }
    }
}

```

3. Include google protobuf dependency

```
composer require "google/protobuf"

```


## protoc files

php protoc only supports pb3.0 syntax


```
syntax = "proto3";

package cls;

message Log
{
    int64 time = 1;
    message Content
    {
        string key = 1;
        string value = 2;
    }
    repeated Content contents= 2;
}

message LogTag
{
    string key       = 1;
    string value     = 2;
}

message LogGroup
{
    repeated Log logs= 1;
    optional string contextFlow = 2;
    optional string filename = 3;
    optional string source = 4;
    repeated LogTag logTags = 5;
}

message LogGroupList
{
    repeated LogGroup logGroupList = 1;
}

```



