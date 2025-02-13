# 简介
欢迎使用腾讯云开发者工具套件（SDK）3.0，SDK3.0是云 API3.0 平台的配套工具。
为方便 PHP 开发者调试和接入腾讯云产品 API，这里向您介绍适用于 PHP 的腾讯云开发工具包，并提供首次使用开发工具包的简单示例。让您快速获取腾讯云 PHP SDK 并开始调用。
# 依赖环境
1. PHP 5.6.0 版本及以上
2. 从腾讯云控制台 开通相应产品
3. 获取 SecretID、SecretKey 以及调用地址（endpoint），endpoint 一般形式为 \*.tencentcloudapi.com，如CVM 的调用地址为 cvm.tencentcloudapi.com，具体参考各产品说明。

# 获取安装
安装 PHP SDK 前，先获取安全凭证。在第一次使用云API之前，用户首先需要在腾讯云控制台上申请安全凭证，安全凭证包括 SecretID 和 SecretKey， SecretID 是用于标识 API 调用者的身份，SecretKey是用于加密签名字符串和服务器端验证签名字符串的密钥。SecretKey 必须严格保管，避免泄露。
## 通过 Composer 安装
通过 Composer 获取安装是使用 PHP SDK 的推荐方法，Composer 是 PHP 的依赖管理工具，支持您项目所需的依赖项，并将其安装到项目中。关于 Composer 详细可参考 Composer 官网 。

安装Composer：
    windows环境请访问[Composer官网](https://getcomposer.org/download/)下载安装包安装。
    
    unix环境在命令行中执行以下命令安装。
    > curl -sS https://getcomposer.org/installer | php

    > sudo mv composer.phar /usr/local/bin/composer

### 安装指定产品 SDK（推荐）
例如：安装指定产品包
```bash
composer require tencentcloud/指定产品包名缩写  # 如 CVM 产品包：tencentcloud/cvm
```
具体产品的包名缩写请参考 [products.md](./products.md) 中的包名字段。

### 安装全产品 SDK
```bash
composer require tencentcloud/tencentcloud-sdk-php
```
全产品 SDK 包含了所有云产品的调用代码，体积偏大，对体积敏感的场景，推荐安装指定产品 SDK。

### 注意事项
- 安装全产品 SDK 和安装指定产品的 SDK 两种方式只能选择其中一种。
- 如果同时安装多个产品的包，建议多个产品的包和 common 包保持在同一个版本。
- 无法使用官方源的的用户可以设置镜像源，例如：`composer config -g repos.packagist composer https://mirrors.tencent.com/composer/`
- 推荐使用固定的 SDK 版本开发测试和发布应用，例如 `composer require tencentcloud/cvm=xx.yy.zz`。如果不需要 phpunit 等开发依赖，可以指定 `--update-no-dev` 选项。
- 在代码中添加以下引用代码。注意：如下仅为示例，composer 会在项目根目录下生成 vendor 目录，`/path/to/`为项目根目录的实际绝对路径，如果是在当前目录执行，可以省略绝对路径。
    
    > require '/path/to/vendor/autoload.php';

# 示例

推荐使用 [API 3.0 Explorer](https://console.cloud.tencent.com/api/explorer)，提供在线调用、签名验证、SDK 代码生成和快速检索接口等能力，能显著降低使用云 API 3.0 和 SDK 的难度。

还可以参考 SDK 仓库中 [examples](https://github.com/TencentCloud/tencentcloud-sdk-php/tree/master/examples) 目录中的示例，展示了更多的用法。

下面以查询实例接口DescribeInstances为例:

### 简略版

```php
<?php
require_once '/path/to/vendor/autoload.php';

use TencentCloud\Cvm\V20170312\CvmClient;
use TencentCloud\Cvm\V20170312\Models\DescribeInstancesRequest;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;

try {
    // 为了保护密钥安全，建议将密钥设置在环境变量中或者配置文件中。
    // 硬编码密钥到代码中有可能随代码泄露而暴露，有安全隐患，并不推荐。
    // $cred = new Credential("SecretId", "SecretKey");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"),
                           getenv("TENCENTCLOUD_SECRET_KEY"));
    $client = new CvmClient($cred, "ap-guangzhou");
    $req = new DescribeInstancesRequest();
    $resp = $client->DescribeInstances($req);
    print_r($resp->toJsonString());
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
```

### 详细版

```php
<?php
require_once '/path/to/vendor/autoload.php';
// 导入对应产品模块的client
use TencentCloud\Cvm\V20170312\CvmClient;
// 导入要请求接口对应的Request类
use TencentCloud\Cvm\V20170312\Models\DescribeInstancesRequest;
use TencentCloud\Cvm\V20170312\Models\Filter;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// 导入可选配置类
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
    // 实例化一个证书对象，入参需要传入腾讯云账户 SecretId，SecretKey
    // 为了保护密钥安全，建议将密钥设置在环境变量中或者配置文件中。
    // 硬编码密钥到代码中有可能随代码泄露而暴露，有安全隐患，并不推荐。
    // $cred = new Credential("SecretId", "SecretKey");
    $cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"),
                           getenv("TENCENTCLOUD_SECRET_KEY"));

    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    // 配置代理
    // $httpProfile->setProxy("https://ip:port");
    $httpProfile->setReqMethod("GET");  // post请求(默认为post请求)
    $httpProfile->setReqTimeout(30);    // 请求超时时间，单位为秒(默认60秒)
    $httpProfile->setEndpoint("cvm.ap-shanghai.tencentcloudapi.com");  // 指定接入地域域名(默认就近接入)

    // 实例化一个client选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // 指定签名算法(默认为HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // 实例化要请求产品(以cvm为例)的client对象,clientProfile是可选的
    $client = new CvmClient($cred, "ap-shanghai", $clientProfile);

    // 实例化一个cvm实例信息查询请求对象,每个接口都会对应一个request对象。
    $req = new DescribeInstancesRequest();

    // 填充请求参数,这里request对象的成员变量即对应接口的入参
    // 您可以通过官网接口文档或跳转到request对象的定义处查看请求参数的定义
    $respFilter = new Filter();  // 创建Filter对象, 以zone的维度来查询cvm实例
    $respFilter->Name = "zone";
    $respFilter->Values = ["ap-shanghai-1", "ap-shanghai-2"];
    $req->Filters = [$respFilter];  // Filters 是成员为Filter对象的列表

    // 通过client对象调用DescribeInstances方法发起请求。注意请求方法名与请求对象是对应的
    // 返回的resp是一个DescribeInstancesResponse类的实例，与请求对象对应
    $resp = $client->DescribeInstances($req);

    // 输出json格式的字符串回包
    print_r($resp->toJsonString());

    // 也可以取出单个值。
    // 您可以通过官网接口文档或跳转到response对象的定义处查看返回字段的定义
    print_r($resp->TotalCount);
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
```

## Common Client

从 3.0.839 版本起，支持通用请求方式 Common Client，可以发起 SDK 中未定义的接口请求。

注意：目前仅支持 POST 方法，签名方法仅支持签名方法 v3。

请参考 [调用示例](https://github.com/TencentCloud/tencentcloud-sdk-php/tree/master/examples/common/CommonClient.php)


# 常见问题

## 代理

如果是有代理的环境下，需要设置系统环境变量 `https_proxy` ，否则可能无法正常调用，抛出连接超时的异常。

或者使用 GuzzleHttp 代理配置:
```php
$httpProfile = new HttpProfile();
$httpProfile->setProxy('https://ip:port');

$clientProfile = new ClientProfile();
$clientProfile->setHttpProfile($httpProfile);

$client = new OcrClient($cred, 'ap-beijing', $this->clientProfile);
```

## 地域容灾

从`3.0.933`起 腾讯云 Php SDK 支持地域容灾，当某个域名请求失败时，会自动切换到容灾域名。使用方式如下：
使用地域时有三种状态相互转换：关闭、全开和半开状态
关闭：使用主要域名请求，如果出现错误时，会切换到全开状态
全开：使用容灾域名请求，当达到一定时间时，会切换到半开状态
半开：此时会放少量的请求到主要域名，如果请求失败，则切换到全开状态，当请求成功数达到一定的数量时，会切换到关闭状态

相关设置如下
```php
use TencentCloud\Common\Profile\RegionBreakerProfile;
// 开启地域容灾
$clientProfile->enableRegionBreaker=true;  
// 设置主备节点，以cvm产品为例，假设主节点在上海，备节点在北京，则配置如下
$regionBreakerProfile = new RegionBreakerProfile(
    "cvm.ap-shanghai.tencentcloudapi.com",	// 主节点
    "cvm.ap-beijing.tencentcloudapi.com"    // 备节点	
);
$clientProfile->setRegionBreakerProfile($regionBreakerProfile);		
```

## 证书问题

如果您的 PHP 环境证书有问题，可能会遇到报错，类似于 `cURL error 60: See http://curl.haxx.se/libcurl/c/libcurl-errors.html`，请尝试按如下步骤解决：

1. 到 [https://curl.haxx.se/ca/cacert.pem](https://curl.haxx.se/ca/cacert.pem) 下载证书文件 `cacert.pem`，将其保存到 PHP 安装路径下。
2. 编辑 `php.ini` 文件，删除 `curl.cainfo` 配置项前的分号注释符（;），值设置为保存的证书文件 `cacert.pem` 的绝对路径。
3. 重启依赖 PHP 的服务。

## php_curl 扩展

此 SDK 依赖的 GuzzleHttp 需要开启 php_curl 扩展，查看环境上的 php.ini 环境确认是否已启用，例如在 Linux 环境下，PHP 7.1 版本，托管在 apache 下的服务，可以打开 /etc/php/7.1/apache2/php.ini 中查看 extension=php_curl.dll 配置项是否已被注释，请删除此项配置前的注释符并重启 apache。

## Web 访问异常

命令行下执行正常，但是放在 Web 服务器执行则报错：

cURL error 0: The cURL request was retried 3 times and did not succeed. The most likely reason for the failure is that cURL was unable to rewind the body of the request and subsequent retries resulted in the same error. Turn on the debug option to see what went wrong. See https://bugs.php.net/bug.php?id=47204 for more information. (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)

此问题出现情况不一。可以运行 `php -r "echo sys_get_temp_dir();"` 打印系统默认临时目录绝对路径，然后在 `php.ini` 配置 `sys_temp_dir` 为这个值尝试是否能解决。

## 源码安装问题

为了支持部分源码安装的需要，我们将依赖的包文件放在 vendor 目录中，又考虑到不能造成对 composer 的不兼容，github 不得不设置禁止导出 vendor 目录，造成必须使用 `git clone` 命令才能拿到 vendor 目录的情况，对一些不熟悉 github 的用户造成了困扰。从 3.0.188 版本开始，我们暂时移除了源码安装，必须使用 composer 安装 SDK 和依赖的包。

## 关键字冲突问题

目前已知在 PHP 7.x 版本中，由于关键字冲突，弹性伸缩产品对应的 As 模块可能无法使用。可以考虑升级到 SDK 3.0.362 版本，使用 Autoscaling 模块。或者升级到 PHP 8 版本。

## 内存泄漏问题
如果使用 SDK 对接口进行循环调用，如：
```
while (true) {
    $resp = $client->DescribeInstances($req);
}
```
可以看到进程占用的内存持续少量上涨，这是 SDK 依赖的 GuzzleHttp 存在[内存泄漏的问题](https://github.com/guzzle/guzzle/issues/2830)，目前官方还未修复。

# 旧版SDK
新版 SDK 兼容旧版 SDK。旧版本的SDK存放于QcloudApi目录，但不再维护更新，推荐使用新版SDK。
