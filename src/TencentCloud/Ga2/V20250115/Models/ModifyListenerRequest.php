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
 * @method string getGlobalAcceleratorId() 获取<p>全球加速实例ID。</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>全球加速实例ID。</p>
 * @method string getListenerId() 获取<p>监听器ID。</p>
 * @method void setListenerId(string $ListenerId) 设置<p>监听器ID。</p>
 * @method string getName() 获取<p>名称，最大长度不能超过60个字节。</p>
 * @method void setName(string $Name) 设置<p>名称，最大长度不能超过60个字节。</p>
 * @method string getDescription() 获取<p>描述信息，最大长度不能超过100个字节。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息，最大长度不能超过100个字节。</p>
 * @method integer getIdleTimeout() 获取<p>连接空闲等待时间。</p>
 * @method void setIdleTimeout(integer $IdleTimeout) 设置<p>连接空闲等待时间。</p>
 * @method string getClientAffinity() 获取<p>是否开启会话保持。</p>
 * @method void setClientAffinity(string $ClientAffinity) 设置<p>是否开启会话保持。</p>
 * @method integer getClientAffinityTime() 获取<p>会话保持时间。</p>
 * @method void setClientAffinityTime(integer $ClientAffinityTime) 设置<p>会话保持时间。</p>
 * @method integer getRequestTimeout() 获取<p>请求超时时间。</p>
 * @method void setRequestTimeout(integer $RequestTimeout) 设置<p>请求超时时间。</p>
 * @method boolean getXForwardedForRealIp() 获取<p>是否打开七层获取源IP方式。</p>
 * @method void setXForwardedForRealIp(boolean $XForwardedForRealIp) 设置<p>是否打开七层获取源IP方式。</p>
 * @method string getCertificationType() 获取<p>解析方式。UNIDIRECTIONAL：双向。MUTUAL：单向。</p>
 * @method void setCertificationType(string $CertificationType) 设置<p>解析方式。UNIDIRECTIONAL：双向。MUTUAL：单向。</p>
 * @method string getCipherPolicyId() 获取<p>加密算法套件。</p>
 * @method void setCipherPolicyId(string $CipherPolicyId) 设置<p>加密算法套件。</p>
 * @method array getServerCertificates() 获取<p>服务器证书。</p>
 * @method void setServerCertificates(array $ServerCertificates) 设置<p>服务器证书。</p>
 * @method array getClientCaCertificates() 获取<p>客户端证书。</p>
 * @method void setClientCaCertificates(array $ClientCaCertificates) 设置<p>客户端证书。</p>
 * @method string getGetRealIpType() 获取<p>四层获取源IP方式。</p>
 * @method void setGetRealIpType(string $GetRealIpType) 设置<p>四层获取源IP方式。</p>
 */
class ModifyListenerRequest extends AbstractModel
{
    /**
     * @var string <p>全球加速实例ID。</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>监听器ID。</p>
     */
    public $ListenerId;

    /**
     * @var string <p>名称，最大长度不能超过60个字节。</p>
     */
    public $Name;

    /**
     * @var string <p>描述信息，最大长度不能超过100个字节。</p>
     */
    public $Description;

    /**
     * @var integer <p>连接空闲等待时间。</p>
     */
    public $IdleTimeout;

    /**
     * @var string <p>是否开启会话保持。</p>
     */
    public $ClientAffinity;

    /**
     * @var integer <p>会话保持时间。</p>
     */
    public $ClientAffinityTime;

    /**
     * @var integer <p>请求超时时间。</p>
     */
    public $RequestTimeout;

    /**
     * @var boolean <p>是否打开七层获取源IP方式。</p>
     */
    public $XForwardedForRealIp;

    /**
     * @var string <p>解析方式。UNIDIRECTIONAL：双向。MUTUAL：单向。</p>
     */
    public $CertificationType;

    /**
     * @var string <p>加密算法套件。</p>
     */
    public $CipherPolicyId;

    /**
     * @var array <p>服务器证书。</p>
     */
    public $ServerCertificates;

    /**
     * @var array <p>客户端证书。</p>
     */
    public $ClientCaCertificates;

    /**
     * @var string <p>四层获取源IP方式。</p>
     */
    public $GetRealIpType;

    /**
     * @param string $GlobalAcceleratorId <p>全球加速实例ID。</p>
     * @param string $ListenerId <p>监听器ID。</p>
     * @param string $Name <p>名称，最大长度不能超过60个字节。</p>
     * @param string $Description <p>描述信息，最大长度不能超过100个字节。</p>
     * @param integer $IdleTimeout <p>连接空闲等待时间。</p>
     * @param string $ClientAffinity <p>是否开启会话保持。</p>
     * @param integer $ClientAffinityTime <p>会话保持时间。</p>
     * @param integer $RequestTimeout <p>请求超时时间。</p>
     * @param boolean $XForwardedForRealIp <p>是否打开七层获取源IP方式。</p>
     * @param string $CertificationType <p>解析方式。UNIDIRECTIONAL：双向。MUTUAL：单向。</p>
     * @param string $CipherPolicyId <p>加密算法套件。</p>
     * @param array $ServerCertificates <p>服务器证书。</p>
     * @param array $ClientCaCertificates <p>客户端证书。</p>
     * @param string $GetRealIpType <p>四层获取源IP方式。</p>
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
