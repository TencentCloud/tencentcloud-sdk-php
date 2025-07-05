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
 * CreateJWTAuthenticator请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getAlgorithm() 获取签名方式：hmac-based，public-key
 * @method void setAlgorithm(string $Algorithm) 设置签名方式：hmac-based，public-key
 * @method string getFrom() 获取认证字段
password：对应 MQTT CONNECT Packet 中 password 字段，
username：对应 MQTT CONNECT Packet 中 username 字段
默认username

 * @method void setFrom(string $From) 设置认证字段
password：对应 MQTT CONNECT Packet 中 password 字段，
username：对应 MQTT CONNECT Packet 中 username 字段
默认username

 * @method string getSecret() 获取密钥，Algorithm为hmac-based需要传递该字段。
 * @method void setSecret(string $Secret) 设置密钥，Algorithm为hmac-based需要传递该字段。
 * @method string getPublicKey() 获取公钥，Algorithm为public-key时需要传递该字段。
 * @method void setPublicKey(string $PublicKey) 设置公钥，Algorithm为public-key时需要传递该字段。
 * @method string getStatus() 获取认证器是否开启：open-启用；close-关闭，默认：open-启用
 * @method void setStatus(string $Status) 设置认证器是否开启：open-启用；close-关闭，默认：open-启用
 * @method string getRemark() 获取说明，不能超过 128 个字符。
 * @method void setRemark(string $Remark) 设置说明，不能超过 128 个字符。
 */
class CreateJWTAuthenticatorRequest extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 签名方式：hmac-based，public-key
     */
    public $Algorithm;

    /**
     * @var string 认证字段
password：对应 MQTT CONNECT Packet 中 password 字段，
username：对应 MQTT CONNECT Packet 中 username 字段
默认username

     */
    public $From;

    /**
     * @var string 密钥，Algorithm为hmac-based需要传递该字段。
     */
    public $Secret;

    /**
     * @var string 公钥，Algorithm为public-key时需要传递该字段。
     */
    public $PublicKey;

    /**
     * @var string 认证器是否开启：open-启用；close-关闭，默认：open-启用
     */
    public $Status;

    /**
     * @var string 说明，不能超过 128 个字符。
     */
    public $Remark;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $Algorithm 签名方式：hmac-based，public-key
     * @param string $From 认证字段
password：对应 MQTT CONNECT Packet 中 password 字段，
username：对应 MQTT CONNECT Packet 中 username 字段
默认username

     * @param string $Secret 密钥，Algorithm为hmac-based需要传递该字段。
     * @param string $PublicKey 公钥，Algorithm为public-key时需要传递该字段。
     * @param string $Status 认证器是否开启：open-启用；close-关闭，默认：open-启用
     * @param string $Remark 说明，不能超过 128 个字符。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = $param["Secret"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
