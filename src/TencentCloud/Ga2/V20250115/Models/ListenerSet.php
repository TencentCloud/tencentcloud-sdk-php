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
 * 监听器信息
 *
 * @method string getGlobalAcceleratorId() 获取全球加速实例ID。
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置全球加速实例ID。
 * @method string getListenerId() 获取监听器ID。
 * @method void setListenerId(string $ListenerId) 设置监听器ID。
 * @method string getName() 获取监听器名称。
 * @method void setName(string $Name) 设置监听器名称。
 * @method string getDescription() 获取监听器描述。
 * @method void setDescription(string $Description) 设置监听器描述。
 * @method string getProtocol() 获取协议。
 * @method void setProtocol(string $Protocol) 设置协议。
 * @method PortRanges getPortRanges() 获取端口范围。
 * @method void setPortRanges(PortRanges $PortRanges) 设置端口范围。
 * @method boolean getXForwardedForRealIp() 获取是否打开七层获取源IP方式。
 * @method void setXForwardedForRealIp(boolean $XForwardedForRealIp) 设置是否打开七层获取源IP方式。
 * @method string getClientAffinity() 获取开启会话保持。
 * @method void setClientAffinity(string $ClientAffinity) 设置开启会话保持。
 * @method integer getClientAffinityTime() 获取会话保持时间。
 * @method void setClientAffinityTime(integer $ClientAffinityTime) 设置会话保持时间。
 * @method string getCertificationType() 获取SSL解析方式。
 * @method void setCertificationType(string $CertificationType) 设置SSL解析方式。
 * @method array getServerCertificates() 获取服务器证书。
 * @method void setServerCertificates(array $ServerCertificates) 设置服务器证书。
 * @method array getClientCaCertificates() 获取客户端证书。
 * @method void setClientCaCertificates(array $ClientCaCertificates) 设置客户端证书。
 * @method string getCipherPolicyId() 获取TLS密码套件包。
 * @method void setCipherPolicyId(string $CipherPolicyId) 设置TLS密码套件包。
 * @method string getHttpVersion() 获取HTTP版本。
 * @method void setHttpVersion(string $HttpVersion) 设置HTTP版本。
 * @method integer getRequestTimeout() 获取请求超时时间。
 * @method void setRequestTimeout(integer $RequestTimeout) 设置请求超时时间。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getListenerType() 获取监听路由类型。
 * @method void setListenerType(string $ListenerType) 设置监听路由类型。
 * @method string getStatus() 获取监听器状态。
 * @method void setStatus(string $Status) 设置监听器状态。
 * @method integer getEndpointGroupCounts() 获取所属监听器终端节点组个数。
 * @method void setEndpointGroupCounts(integer $EndpointGroupCounts) 设置所属监听器终端节点组个数。
 * @method string getGetRealIpType() 获取四层获取源IP方式。
 * @method void setGetRealIpType(string $GetRealIpType) 设置四层获取源IP方式。
 * @method integer getIdleTimeout() 获取连接超时时间。
 * @method void setIdleTimeout(integer $IdleTimeout) 设置连接超时时间。
 */
class ListenerSet extends AbstractModel
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
     * @var string 监听器名称。
     */
    public $Name;

    /**
     * @var string 监听器描述。
     */
    public $Description;

    /**
     * @var string 协议。
     */
    public $Protocol;

    /**
     * @var PortRanges 端口范围。
     */
    public $PortRanges;

    /**
     * @var boolean 是否打开七层获取源IP方式。
     */
    public $XForwardedForRealIp;

    /**
     * @var string 开启会话保持。
     */
    public $ClientAffinity;

    /**
     * @var integer 会话保持时间。
     */
    public $ClientAffinityTime;

    /**
     * @var string SSL解析方式。
     */
    public $CertificationType;

    /**
     * @var array 服务器证书。
     */
    public $ServerCertificates;

    /**
     * @var array 客户端证书。
     */
    public $ClientCaCertificates;

    /**
     * @var string TLS密码套件包。
     */
    public $CipherPolicyId;

    /**
     * @var string HTTP版本。
     */
    public $HttpVersion;

    /**
     * @var integer 请求超时时间。
     */
    public $RequestTimeout;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 监听路由类型。
     */
    public $ListenerType;

    /**
     * @var string 监听器状态。
     */
    public $Status;

    /**
     * @var integer 所属监听器终端节点组个数。
     */
    public $EndpointGroupCounts;

    /**
     * @var string 四层获取源IP方式。
     */
    public $GetRealIpType;

    /**
     * @var integer 连接超时时间。
     */
    public $IdleTimeout;

    /**
     * @param string $GlobalAcceleratorId 全球加速实例ID。
     * @param string $ListenerId 监听器ID。
     * @param string $Name 监听器名称。
     * @param string $Description 监听器描述。
     * @param string $Protocol 协议。
     * @param PortRanges $PortRanges 端口范围。
     * @param boolean $XForwardedForRealIp 是否打开七层获取源IP方式。
     * @param string $ClientAffinity 开启会话保持。
     * @param integer $ClientAffinityTime 会话保持时间。
     * @param string $CertificationType SSL解析方式。
     * @param array $ServerCertificates 服务器证书。
     * @param array $ClientCaCertificates 客户端证书。
     * @param string $CipherPolicyId TLS密码套件包。
     * @param string $HttpVersion HTTP版本。
     * @param integer $RequestTimeout 请求超时时间。
     * @param string $CreateTime 创建时间。
     * @param string $ListenerType 监听路由类型。
     * @param string $Status 监听器状态。
     * @param integer $EndpointGroupCounts 所属监听器终端节点组个数。
     * @param string $GetRealIpType 四层获取源IP方式。
     * @param integer $IdleTimeout 连接超时时间。
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PortRanges",$param) and $param["PortRanges"] !== null) {
            $this->PortRanges = new PortRanges();
            $this->PortRanges->deserialize($param["PortRanges"]);
        }

        if (array_key_exists("XForwardedForRealIp",$param) and $param["XForwardedForRealIp"] !== null) {
            $this->XForwardedForRealIp = $param["XForwardedForRealIp"];
        }

        if (array_key_exists("ClientAffinity",$param) and $param["ClientAffinity"] !== null) {
            $this->ClientAffinity = $param["ClientAffinity"];
        }

        if (array_key_exists("ClientAffinityTime",$param) and $param["ClientAffinityTime"] !== null) {
            $this->ClientAffinityTime = $param["ClientAffinityTime"];
        }

        if (array_key_exists("CertificationType",$param) and $param["CertificationType"] !== null) {
            $this->CertificationType = $param["CertificationType"];
        }

        if (array_key_exists("ServerCertificates",$param) and $param["ServerCertificates"] !== null) {
            $this->ServerCertificates = $param["ServerCertificates"];
        }

        if (array_key_exists("ClientCaCertificates",$param) and $param["ClientCaCertificates"] !== null) {
            $this->ClientCaCertificates = $param["ClientCaCertificates"];
        }

        if (array_key_exists("CipherPolicyId",$param) and $param["CipherPolicyId"] !== null) {
            $this->CipherPolicyId = $param["CipherPolicyId"];
        }

        if (array_key_exists("HttpVersion",$param) and $param["HttpVersion"] !== null) {
            $this->HttpVersion = $param["HttpVersion"];
        }

        if (array_key_exists("RequestTimeout",$param) and $param["RequestTimeout"] !== null) {
            $this->RequestTimeout = $param["RequestTimeout"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ListenerType",$param) and $param["ListenerType"] !== null) {
            $this->ListenerType = $param["ListenerType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EndpointGroupCounts",$param) and $param["EndpointGroupCounts"] !== null) {
            $this->EndpointGroupCounts = $param["EndpointGroupCounts"];
        }

        if (array_key_exists("GetRealIpType",$param) and $param["GetRealIpType"] !== null) {
            $this->GetRealIpType = $param["GetRealIpType"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }
    }
}
