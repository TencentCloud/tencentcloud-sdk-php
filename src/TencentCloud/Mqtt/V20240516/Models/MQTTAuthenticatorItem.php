<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT认证器信息
 *
 * @method string getType() 获取认证器类型
JWT：JWT认证器
JWKS：JWKS认证器
HTTP：HTTP认证器
 * @method void setType(string $Type) 设置认证器类型
JWT：JWT认证器
JWKS：JWKS认证器
HTTP：HTTP认证器
 * @method string getConfig() 获取JWT认证器字段说明
from（认证字段）
    password：从password字段获取认证字段
    username：从username字段获取认证字段
secret（签名方式）
    hmac-based：hmac-based签名方式
    public-key：public-key签名方式
secret（密钥），hmac-based需要配置密钥
public-key（公钥），public-key签名方式需要配置
样例：{"from":"password","secret":"secret282698","algorithm":"hmac-based"}

JWKS认证器字段说明
endpoint（接入点）：公钥获取服务器接入地址
refreshInterval（认证内容）：公钥集合刷新周期
from（认证字段）
    password：从password字段获取认证字段
    username：从username字段获取认证字段
text：公钥集合
样例：{"endpoint":"127.0.0.1","refreshInterval":60,"from":"password"}

HTTP认证器
headers（请求头）：标准请求头和自定义请求头
endpoint（接入点）：认证服务器接入点
method（http请求方法）：POST/GET
readTimeout（读超时时间）：读取认证服务器数据超时时间，单位秒
connectTimeout（连接超时时间）：连接认证服务器超时时间，单位秒
body（请求体）：http请求体
concurrency（并发数）：最大并发请求数量
样例：{"headers":[{"key":"Content-type","value":"application/json"},{"key":"username","value":"${Username}"}],"endpoint":"https://127.0.0.1:443","method":"POST","readTimeout":10,"connectTimeout":10,"body":[{"key":"client-id","value":"${ClientId}"}],"concurrency":8}
参考 [认证管理概述](https://cloud.tencent.com/document/product/1778/114813)
 * @method void setConfig(string $Config) 设置JWT认证器字段说明
from（认证字段）
    password：从password字段获取认证字段
    username：从username字段获取认证字段
secret（签名方式）
    hmac-based：hmac-based签名方式
    public-key：public-key签名方式
secret（密钥），hmac-based需要配置密钥
public-key（公钥），public-key签名方式需要配置
样例：{"from":"password","secret":"secret282698","algorithm":"hmac-based"}

JWKS认证器字段说明
endpoint（接入点）：公钥获取服务器接入地址
refreshInterval（认证内容）：公钥集合刷新周期
from（认证字段）
    password：从password字段获取认证字段
    username：从username字段获取认证字段
text：公钥集合
样例：{"endpoint":"127.0.0.1","refreshInterval":60,"from":"password"}

HTTP认证器
headers（请求头）：标准请求头和自定义请求头
endpoint（接入点）：认证服务器接入点
method（http请求方法）：POST/GET
readTimeout（读超时时间）：读取认证服务器数据超时时间，单位秒
connectTimeout（连接超时时间）：连接认证服务器超时时间，单位秒
body（请求体）：http请求体
concurrency（并发数）：最大并发请求数量
样例：{"headers":[{"key":"Content-type","value":"application/json"},{"key":"username","value":"${Username}"}],"endpoint":"https://127.0.0.1:443","method":"POST","readTimeout":10,"connectTimeout":10,"body":[{"key":"client-id","value":"${ClientId}"}],"concurrency":8}
参考 [认证管理概述](https://cloud.tencent.com/document/product/1778/114813)
 * @method string getStatus() 获取认证器状态
open：认证器打开
close：认证器关闭
 * @method void setStatus(string $Status) 设置认证器状态
open：认证器打开
close：认证器关闭
 * @method integer getCreateTime() 获取创建时间，毫秒级时间戳 。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，毫秒级时间戳 。
 * @method string getRemark() 获取说明，最长 128 字符。
 * @method void setRemark(string $Remark) 设置说明，最长 128 字符。
 */
class MQTTAuthenticatorItem extends AbstractModel
{
    /**
     * @var string 认证器类型
JWT：JWT认证器
JWKS：JWKS认证器
HTTP：HTTP认证器
     */
    public $Type;

    /**
     * @var string JWT认证器字段说明
from（认证字段）
    password：从password字段获取认证字段
    username：从username字段获取认证字段
secret（签名方式）
    hmac-based：hmac-based签名方式
    public-key：public-key签名方式
secret（密钥），hmac-based需要配置密钥
public-key（公钥），public-key签名方式需要配置
样例：{"from":"password","secret":"secret282698","algorithm":"hmac-based"}

JWKS认证器字段说明
endpoint（接入点）：公钥获取服务器接入地址
refreshInterval（认证内容）：公钥集合刷新周期
from（认证字段）
    password：从password字段获取认证字段
    username：从username字段获取认证字段
text：公钥集合
样例：{"endpoint":"127.0.0.1","refreshInterval":60,"from":"password"}

HTTP认证器
headers（请求头）：标准请求头和自定义请求头
endpoint（接入点）：认证服务器接入点
method（http请求方法）：POST/GET
readTimeout（读超时时间）：读取认证服务器数据超时时间，单位秒
connectTimeout（连接超时时间）：连接认证服务器超时时间，单位秒
body（请求体）：http请求体
concurrency（并发数）：最大并发请求数量
样例：{"headers":[{"key":"Content-type","value":"application/json"},{"key":"username","value":"${Username}"}],"endpoint":"https://127.0.0.1:443","method":"POST","readTimeout":10,"connectTimeout":10,"body":[{"key":"client-id","value":"${ClientId}"}],"concurrency":8}
参考 [认证管理概述](https://cloud.tencent.com/document/product/1778/114813)
     */
    public $Config;

    /**
     * @var string 认证器状态
open：认证器打开
close：认证器关闭
     */
    public $Status;

    /**
     * @var integer 创建时间，毫秒级时间戳 。
     */
    public $CreateTime;

    /**
     * @var string 说明，最长 128 字符。
     */
    public $Remark;

    /**
     * @param string $Type 认证器类型
JWT：JWT认证器
JWKS：JWKS认证器
HTTP：HTTP认证器
     * @param string $Config JWT认证器字段说明
from（认证字段）
    password：从password字段获取认证字段
    username：从username字段获取认证字段
secret（签名方式）
    hmac-based：hmac-based签名方式
    public-key：public-key签名方式
secret（密钥），hmac-based需要配置密钥
public-key（公钥），public-key签名方式需要配置
样例：{"from":"password","secret":"secret282698","algorithm":"hmac-based"}

JWKS认证器字段说明
endpoint（接入点）：公钥获取服务器接入地址
refreshInterval（认证内容）：公钥集合刷新周期
from（认证字段）
    password：从password字段获取认证字段
    username：从username字段获取认证字段
text：公钥集合
样例：{"endpoint":"127.0.0.1","refreshInterval":60,"from":"password"}

HTTP认证器
headers（请求头）：标准请求头和自定义请求头
endpoint（接入点）：认证服务器接入点
method（http请求方法）：POST/GET
readTimeout（读超时时间）：读取认证服务器数据超时时间，单位秒
connectTimeout（连接超时时间）：连接认证服务器超时时间，单位秒
body（请求体）：http请求体
concurrency（并发数）：最大并发请求数量
样例：{"headers":[{"key":"Content-type","value":"application/json"},{"key":"username","value":"${Username}"}],"endpoint":"https://127.0.0.1:443","method":"POST","readTimeout":10,"connectTimeout":10,"body":[{"key":"client-id","value":"${ClientId}"}],"concurrency":8}
参考 [认证管理概述](https://cloud.tencent.com/document/product/1778/114813)
     * @param string $Status 认证器状态
open：认证器打开
close：认证器关闭
     * @param integer $CreateTime 创建时间，毫秒级时间戳 。
     * @param string $Remark 说明，最长 128 字符。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
