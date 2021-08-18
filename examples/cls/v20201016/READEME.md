CLS Demo
---

## 日志上报demo

```
<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// 导入对应产品模块的client
use TencentCloud\Cls\V20201016\ClsClient;
// 导入要请求接口对应的Request类
use TencentCloud\Cls\V20201016\Models\UploadLogRequest;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// 导入可选配置类
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
    // 实例化一个证书对象，入参需要传入腾讯云账户secretId，secretKey
    $cred = new Credential("【secretId】", "【secretKey】");

    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // post请求(默认为post请求)
    $httpProfile->setReqTimeout(60);    // 请求超时时间，单位为秒(默认60秒)
    $httpProfile->setEndpoint("cls.tencentcloudapi.com");  // 指定接入地域域名(默认就近接入)

    // 实例化一个client选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // 指定签名算法(默认为HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // 实例化要请求产品(以cls为例)的client对象,clientProfile是可选的
    $client = new ClsClient($cred, "ap-guangzhou", $clientProfile);

    $resp = $client->call_octet_stream("UploadLog", array(
        "X-CLS-TopicId" => "[TopicID]",
    ), $pb_str);

    // 输出json格式的字符串回包
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}


```

## php项目中如何使用protobuf

1、官网下载安装最新版protoc： https://github.com/protocolbuffers/protobuf/releases （具体根据自己的操作系统去选择） 

根据pb文件，生成对应的php实现代码 


```
protoc --php_out=./ cls.proto

```

2、 composer.json中引入pb生成好的文件

```
{
    ...此处省略
    "autoload": {
        ...此处省略
        "psr-4": {
            "GPBMetadata\\": "./examples/cls/v20201016/proto/GPBMetadata",
            "Cls\\": "./examples/cls/v20201016/proto/Cls"
        }
    }
}

```

3、 引入google probuf 依赖

```
composer require "google/protobuf"

```


## protoc文件

php protoc 仅支持pb3.0语法


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




