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
 * CreateJWKSAuthenticator请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getEndpoint() 获取JWKS服务地址，（Text字段和Endpoint字段必须选择一个填写）
 * @method void setEndpoint(string $Endpoint) 设置JWKS服务地址，（Text字段和Endpoint字段必须选择一个填写）
 * @method integer getRefreshInterval() 获取认证文本刷新间隔时间，单位：秒，最小值60，默认值60，最大值1000。填写认证服务器地址（Endpoint）时生效。
 * @method void setRefreshInterval(integer $RefreshInterval) 设置认证文本刷新间隔时间，单位：秒，最小值60，默认值60，最大值1000。填写认证服务器地址（Endpoint）时生效。
 * @method string getText() 获取jwks文本，（Text字段和Endpoint字段必须选择一个填写）
 * @method void setText(string $Text) 设置jwks文本，（Text字段和Endpoint字段必须选择一个填写）
 * @method string getStatus() 获取认证器是否开启：open-启用；close-关闭，默认open-启用
 * @method void setStatus(string $Status) 设置认证器是否开启：open-启用；close-关闭，默认open-启用
 * @method string getRemark() 获取说明，不能超过 128 个字符
 * @method void setRemark(string $Remark) 设置说明，不能超过 128 个字符
 * @method string getFrom() 获取认证字段；
username-对应 MQTT CONNECT Packet 中 username 字段，
password-对应 MQTT CONNECT Packet 中 password 字段。

默认username
 * @method void setFrom(string $From) 设置认证字段；
username-对应 MQTT CONNECT Packet 中 username 字段，
password-对应 MQTT CONNECT Packet 中 password 字段。

默认username
 */
class CreateJWKSAuthenticatorRequest extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string JWKS服务地址，（Text字段和Endpoint字段必须选择一个填写）
     */
    public $Endpoint;

    /**
     * @var integer 认证文本刷新间隔时间，单位：秒，最小值60，默认值60，最大值1000。填写认证服务器地址（Endpoint）时生效。
     */
    public $RefreshInterval;

    /**
     * @var string jwks文本，（Text字段和Endpoint字段必须选择一个填写）
     */
    public $Text;

    /**
     * @var string 认证器是否开启：open-启用；close-关闭，默认open-启用
     */
    public $Status;

    /**
     * @var string 说明，不能超过 128 个字符
     */
    public $Remark;

    /**
     * @var string 认证字段；
username-对应 MQTT CONNECT Packet 中 username 字段，
password-对应 MQTT CONNECT Packet 中 password 字段。

默认username
     */
    public $From;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $Endpoint JWKS服务地址，（Text字段和Endpoint字段必须选择一个填写）
     * @param integer $RefreshInterval 认证文本刷新间隔时间，单位：秒，最小值60，默认值60，最大值1000。填写认证服务器地址（Endpoint）时生效。
     * @param string $Text jwks文本，（Text字段和Endpoint字段必须选择一个填写）
     * @param string $Status 认证器是否开启：open-启用；close-关闭，默认open-启用
     * @param string $Remark 说明，不能超过 128 个字符
     * @param string $From 认证字段；
username-对应 MQTT CONNECT Packet 中 username 字段，
password-对应 MQTT CONNECT Packet 中 password 字段。

默认username
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

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("RefreshInterval",$param) and $param["RefreshInterval"] !== null) {
            $this->RefreshInterval = $param["RefreshInterval"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }
    }
}
