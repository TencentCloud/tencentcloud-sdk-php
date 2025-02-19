<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getSSLServerCertId() 获取服务端证书id
 * @method void setSSLServerCertId(string $SSLServerCertId) 设置服务端证书id
 * @method string getSSLCaCertId() 获取CA证书id
 * @method void setSSLCaCertId(string $SSLCaCertId) 设置CA证书id
 * @method string getX509Mode() 获取加密通信方式
TLS：单向证书认证
mTLS：双向证书认证
BYOC：一设备一证书认证
 * @method void setX509Mode(string $X509Mode) 设置加密通信方式
TLS：单向证书认证
mTLS：双向证书认证
BYOC：一设备一证书认证
 * @method string getDeviceCertificateProvisionType() 获取设备证书注册类型：
JITP，自动注册；
MANUAL 手动注册
 * @method void setDeviceCertificateProvisionType(string $DeviceCertificateProvisionType) 设置设备证书注册类型：
JITP，自动注册；
MANUAL 手动注册
 * @method boolean getAutomaticActivation() 获取是否自动激活，默认为false
 * @method void setAutomaticActivation(boolean $AutomaticActivation) 设置是否自动激活，默认为false
 */
class ModifyInstanceCertBindingRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 服务端证书id
     */
    public $SSLServerCertId;

    /**
     * @var string CA证书id
     */
    public $SSLCaCertId;

    /**
     * @var string 加密通信方式
TLS：单向证书认证
mTLS：双向证书认证
BYOC：一设备一证书认证
     */
    public $X509Mode;

    /**
     * @var string 设备证书注册类型：
JITP，自动注册；
MANUAL 手动注册
     */
    public $DeviceCertificateProvisionType;

    /**
     * @var boolean 是否自动激活，默认为false
     */
    public $AutomaticActivation;

    /**
     * @param string $InstanceId 实例ID
     * @param string $SSLServerCertId 服务端证书id
     * @param string $SSLCaCertId CA证书id
     * @param string $X509Mode 加密通信方式
TLS：单向证书认证
mTLS：双向证书认证
BYOC：一设备一证书认证
     * @param string $DeviceCertificateProvisionType 设备证书注册类型：
JITP，自动注册；
MANUAL 手动注册
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

        if (array_key_exists("SSLServerCertId",$param) and $param["SSLServerCertId"] !== null) {
            $this->SSLServerCertId = $param["SSLServerCertId"];
        }

        if (array_key_exists("SSLCaCertId",$param) and $param["SSLCaCertId"] !== null) {
            $this->SSLCaCertId = $param["SSLCaCertId"];
        }

        if (array_key_exists("X509Mode",$param) and $param["X509Mode"] !== null) {
            $this->X509Mode = $param["X509Mode"];
        }

        if (array_key_exists("DeviceCertificateProvisionType",$param) and $param["DeviceCertificateProvisionType"] !== null) {
            $this->DeviceCertificateProvisionType = $param["DeviceCertificateProvisionType"];
        }

        if (array_key_exists("AutomaticActivation",$param) and $param["AutomaticActivation"] !== null) {
            $this->AutomaticActivation = $param["AutomaticActivation"];
        }
    }
}
