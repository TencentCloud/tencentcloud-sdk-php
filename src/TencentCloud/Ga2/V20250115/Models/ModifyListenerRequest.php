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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyListener请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取全球加速实例ID。
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置全球加速实例ID。
 * @method string getListenerId() 获取监听器ID。
 * @method void setListenerId(string $ListenerId) 设置监听器ID。
 * @method string getName() 获取名称，最大长度不能超过60个字节。
 * @method void setName(string $Name) 设置名称，最大长度不能超过60个字节。
 * @method string getDescription() 获取描述信息，最大长度不能超过100个字节。
 * @method void setDescription(string $Description) 设置描述信息，最大长度不能超过100个字节。
 * @method integer getIdleTimeout() 获取连接空闲等待时间。
 * @method void setIdleTimeout(integer $IdleTimeout) 设置连接空闲等待时间。
 * @method string getClientAffinity() 获取是否开启会话保持。
 * @method void setClientAffinity(string $ClientAffinity) 设置是否开启会话保持。
 * @method integer getClientAffinityTime() 获取会话保持时间。
 * @method void setClientAffinityTime(integer $ClientAffinityTime) 设置会话保持时间。
 * @method integer getRequestTimeout() 获取请求超时时间。
 * @method void setRequestTimeout(integer $RequestTimeout) 设置请求超时时间。
 * @method boolean getXForwardedForRealIp() 获取是否打开七层获取源IP方式。
 * @method void setXForwardedForRealIp(boolean $XForwardedForRealIp) 设置是否打开七层获取源IP方式。
 * @method string getCertificationType() 获取解析方式。UNIDIRECTIONAL：双向。MUTUAL：单向。
 * @method void setCertificationType(string $CertificationType) 设置解析方式。UNIDIRECTIONAL：双向。MUTUAL：单向。
 * @method string getCipherPolicyId() 获取加密算法套件。
 * @method void setCipherPolicyId(string $CipherPolicyId) 设置加密算法套件。
 * @method array getServerCertificates() 获取服务器证书。
 * @method void setServerCertificates(array $ServerCertificates) 设置服务器证书。
 * @method array getClientCaCertificates() 获取客户端证书。
 * @method void setClientCaCertificates(array $ClientCaCertificates) 设置客户端证书。
 * @method string getGetRealIpType() 获取四层获取源IP方式。
 * @method void setGetRealIpType(string $GetRealIpType) 设置四层获取源IP方式。
 */
class ModifyListenerRequest extends AbstractModel
{
    /**
     * @var string 全球加速实例ID。
     */
    public $GlobalAcceleratorId;

    /**
     * @var string 监听器ID。
     */
    public $ListenerId;

    /**
     * @var string 名称，最大长度不能超过60个字节。
     */
    public $Name;

    /**
     * @var string 描述信息，最大长度不能超过100个字节。
     */
    public $Description;

    /**
     * @var integer 连接空闲等待时间。
     */
    public $IdleTimeout;

    /**
     * @var string 是否开启会话保持。
     */
    public $ClientAffinity;

    /**
     * @var integer 会话保持时间。
     */
    public $ClientAffinityTime;

    /**
     * @var integer 请求超时时间。
     */
    public $RequestTimeout;

    /**
     * @var boolean 是否打开七层获取源IP方式。
     */
    public $XForwardedForRealIp;

    /**
     * @var string 解析方式。UNIDIRECTIONAL：双向。MUTUAL：单向。
     */
    public $CertificationType;

    /**
     * @var string 加密算法套件。
     */
    public $CipherPolicyId;

    /**
     * @var array 服务器证书。
     */
    public $ServerCertificates;

    /**
     * @var array 客户端证书。
     */
    public $ClientCaCertificates;

    /**
     * @var string 四层获取源IP方式。
     */
    public $GetRealIpType;

    /**
     * @param string $GlobalAcceleratorId 全球加速实例ID。
     * @param string $ListenerId 监听器ID。
     * @param string $Name 名称，最大长度不能超过60个字节。
     * @param string $Description 描述信息，最大长度不能超过100个字节。
     * @param integer $IdleTimeout 连接空闲等待时间。
     * @param string $ClientAffinity 是否开启会话保持。
     * @param integer $ClientAffinityTime 会话保持时间。
     * @param integer $RequestTimeout 请求超时时间。
     * @param boolean $XForwardedForRealIp 是否打开七层获取源IP方式。
     * @param string $CertificationType 解析方式。UNIDIRECTIONAL：双向。MUTUAL：单向。
     * @param string $CipherPolicyId 加密算法套件。
     * @param array $ServerCertificates 服务器证书。
     * @param array $ClientCaCertificates 客户端证书。
     * @param string $GetRealIpType 四层获取源IP方式。
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }

        if (array_key_exists("ClientAffinity",$param) and $param["ClientAffinity"] !== null) {
            $this->ClientAffinity = $param["ClientAffinity"];
        }

        if (array_key_exists("ClientAffinityTime",$param) and $param["ClientAffinityTime"] !== null) {
            $this->ClientAffinityTime = $param["ClientAffinityTime"];
        }

        if (array_key_exists("RequestTimeout",$param) and $param["RequestTimeout"] !== null) {
            $this->RequestTimeout = $param["RequestTimeout"];
        }

        if (array_key_exists("XForwardedForRealIp",$param) and $param["XForwardedForRealIp"] !== null) {
            $this->XForwardedForRealIp = $param["XForwardedForRealIp"];
        }

        if (array_key_exists("CertificationType",$param) and $param["CertificationType"] !== null) {
            $this->CertificationType = $param["CertificationType"];
        }

        if (array_key_exists("CipherPolicyId",$param) and $param["CipherPolicyId"] !== null) {
            $this->CipherPolicyId = $param["CipherPolicyId"];
        }

        if (array_key_exists("ServerCertificates",$param) and $param["ServerCertificates"] !== null) {
            $this->ServerCertificates = $param["ServerCertificates"];
        }

        if (array_key_exists("ClientCaCertificates",$param) and $param["ClientCaCertificates"] !== null) {
            $this->ClientCaCertificates = $param["ClientCaCertificates"];
        }

        if (array_key_exists("GetRealIpType",$param) and $param["GetRealIpType"] !== null) {
            $this->GetRealIpType = $param["GetRealIpType"];
        }
    }
}
