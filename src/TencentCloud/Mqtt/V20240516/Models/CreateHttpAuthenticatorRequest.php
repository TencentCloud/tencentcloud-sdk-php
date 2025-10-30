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
 * CreateHttpAuthenticator请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getEndpoint() 获取jwks服务地址
 * @method void setEndpoint(string $Endpoint) 设置jwks服务地址
 * @method integer getConcurrency() 获取最大并发连接数，默认8，范围：1-10
 * @method void setConcurrency(integer $Concurrency) 设置最大并发连接数，默认8，范围：1-10
 * @method string getMethod() 获取网络请求方法 GET 或 POST，默认POST
 * @method void setMethod(string $Method) 设置网络请求方法 GET 或 POST，默认POST
 * @method string getStatus() 获取认证器是否开启：open-启用；close-关闭，默认open-启用
 * @method void setStatus(string $Status) 设置认证器是否开启：open-启用；close-关闭，默认open-启用
 * @method string getRemark() 获取说明，最多支持128个字符。
 * @method void setRemark(string $Remark) 设置说明，最多支持128个字符。
 * @method integer getConnectTimeout() 获取连接超时时间，单位：秒，范围：1-30
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置连接超时时间，单位：秒，范围：1-30
 * @method integer getReadTimeout() 获取请求超时时间，单位：秒，范围：1-30
 * @method void setReadTimeout(integer $ReadTimeout) 设置请求超时时间，单位：秒，范围：1-30
 * @method array getHeader() 获取转发请求header
 * @method void setHeader(array $Header) 设置转发请求header
 * @method array getBody() 获取转发请求body
 * @method void setBody(array $Body) 设置转发请求body
 */
class CreateHttpAuthenticatorRequest extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string jwks服务地址
     */
    public $Endpoint;

    /**
     * @var integer 最大并发连接数，默认8，范围：1-10
     */
    public $Concurrency;

    /**
     * @var string 网络请求方法 GET 或 POST，默认POST
     */
    public $Method;

    /**
     * @var string 认证器是否开启：open-启用；close-关闭，默认open-启用
     */
    public $Status;

    /**
     * @var string 说明，最多支持128个字符。
     */
    public $Remark;

    /**
     * @var integer 连接超时时间，单位：秒，范围：1-30
     */
    public $ConnectTimeout;

    /**
     * @var integer 请求超时时间，单位：秒，范围：1-30
     */
    public $ReadTimeout;

    /**
     * @var array 转发请求header
     */
    public $Header;

    /**
     * @var array 转发请求body
     */
    public $Body;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $Endpoint jwks服务地址
     * @param integer $Concurrency 最大并发连接数，默认8，范围：1-10
     * @param string $Method 网络请求方法 GET 或 POST，默认POST
     * @param string $Status 认证器是否开启：open-启用；close-关闭，默认open-启用
     * @param string $Remark 说明，最多支持128个字符。
     * @param integer $ConnectTimeout 连接超时时间，单位：秒，范围：1-30
     * @param integer $ReadTimeout 请求超时时间，单位：秒，范围：1-30
     * @param array $Header 转发请求header
     * @param array $Body 转发请求body
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

        if (array_key_exists("Concurrency",$param) and $param["Concurrency"] !== null) {
            $this->Concurrency = $param["Concurrency"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("ReadTimeout",$param) and $param["ReadTimeout"] !== null) {
            $this->ReadTimeout = $param["ReadTimeout"];
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = [];
            foreach ($param["Header"] as $key => $value){
                $obj = new HeaderItem();
                $obj->deserialize($value);
                array_push($this->Header, $obj);
            }
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = [];
            foreach ($param["Body"] as $key => $value){
                $obj = new BodyItem();
                $obj->deserialize($value);
                array_push($this->Body, $obj);
            }
        }
    }
}
