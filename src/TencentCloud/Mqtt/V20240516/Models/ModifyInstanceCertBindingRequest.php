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
 * ModifyInstanceCertBinding请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getX509Mode() 获取加密通信方式
TLS：单向证书认证
mTLS：双向证书认证
BYOC：一设备一证书认证
 * @method void setX509Mode(string $X509Mode) 设置加密通信方式
TLS：单向证书认证
mTLS：双向证书认证
BYOC：一设备一证书认证
 * @method string getSSLServerCertId() 获取服务端证书id，从 [获取证书列表](https://cloud.tencent.com/document/api/400/41671) 或者腾讯云证书服务控制台获取。X509Mode为mTLS或BYOC时为必填。
 * @method void setSSLServerCertId(string $SSLServerCertId) 设置服务端证书id，从 [获取证书列表](https://cloud.tencent.com/document/api/400/41671) 或者腾讯云证书服务控制台获取。X509Mode为mTLS或BYOC时为必填。
 * @method string getSSLCaCertId() 获取CA证书id，从 [获取证书列表](https://cloud.tencent.com/document/api/400/41671) 或者腾讯云证书服务控制台获取。X509Mode为mTLS时为必填
 * @method void setSSLCaCertId(string $SSLCaCertId) 设置CA证书id，从 [获取证书列表](https://cloud.tencent.com/document/api/400/41671) 或者腾讯云证书服务控制台获取。X509Mode为mTLS时为必填
 * @method string getDeviceCertificateProvisionType() 获取设备证书注册类型：
JITP：自动注册；
API：手动注册
默认值：API
 * @method void setDeviceCertificateProvisionType(string $DeviceCertificateProvisionType) 设置设备证书注册类型：
JITP：自动注册；
API：手动注册
默认值：API
 * @method boolean getAutomaticActivation() 获取是否自动激活，默认为false
 * @method void setAutomaticActivation(boolean $AutomaticActivation) 设置是否自动激活，默认为false
 */
class ModifyInstanceCertBindingRequest extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 加密通信方式
TLS：单向证书认证
mTLS：双向证书认证
BYOC：一设备一证书认证
     */
    public $X509Mode;

    /**
     * @var string 服务端证书id，从 [获取证书列表](https://cloud.tencent.com/document/api/400/41671) 或者腾讯云证书服务控制台获取。X509Mode为mTLS或BYOC时为必填。
     */
    public $SSLServerCertId;

    /**
     * @var string CA证书id，从 [获取证书列表](https://cloud.tencent.com/document/api/400/41671) 或者腾讯云证书服务控制台获取。X509Mode为mTLS时为必填
     */
    public $SSLCaCertId;

    /**
     * @var string 设备证书注册类型：
JITP：自动注册；
API：手动注册
默认值：API
     */
    public $DeviceCertificateProvisionType;

    /**
     * @var boolean 是否自动激活，默认为false
     */
    public $AutomaticActivation;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $X509Mode 加密通信方式
TLS：单向证书认证
mTLS：双向证书认证
BYOC：一设备一证书认证
     * @param string $SSLServerCertId 服务端证书id，从 [获取证书列表](https://cloud.tencent.com/document/api/400/41671) 或者腾讯云证书服务控制台获取。X509Mode为mTLS或BYOC时为必填。
     * @param string $SSLCaCertId CA证书id，从 [获取证书列表](https://cloud.tencent.com/document/api/400/41671) 或者腾讯云证书服务控制台获取。X509Mode为mTLS时为必填
     * @param string $DeviceCertificateProvisionType 设备证书注册类型：
JITP：自动注册；
API：手动注册
默认值：API
     * @param boolean $AutomaticActivation 是否自动激活，默认为false
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

        if (array_key_exists("X509Mode",$param) and $param["X509Mode"] !== null) {
            $this->X509Mode = $param["X509Mode"];
        }

        if (array_key_exists("SSLServerCertId",$param) and $param["SSLServerCertId"] !== null) {
            $this->SSLServerCertId = $param["SSLServerCertId"];
        }

        if (array_key_exists("SSLCaCertId",$param) and $param["SSLCaCertId"] !== null) {
            $this->SSLCaCertId = $param["SSLCaCertId"];
        }

        if (array_key_exists("DeviceCertificateProvisionType",$param) and $param["DeviceCertificateProvisionType"] !== null) {
            $this->DeviceCertificateProvisionType = $param["DeviceCertificateProvisionType"];
        }

        if (array_key_exists("AutomaticActivation",$param) and $param["AutomaticActivation"] !== null) {
            $this->AutomaticActivation = $param["AutomaticActivation"];
        }
    }
}
