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
 * 终端节点组配置
 *
 * @method string getName() 获取<p>名称，最大长度不能超过60个字节。</p>
 * @method void setName(string $Name) 设置<p>名称，最大长度不能超过60个字节。</p>
 * @method string getEndpointGroupRegion() 获取<p>地域。</p>
 * @method void setEndpointGroupRegion(string $EndpointGroupRegion) 设置<p>地域。</p>
 * @method array getEndpointConfigurations() 获取<p>终端节点配置。</p>
 * @method void setEndpointConfigurations(array $EndpointConfigurations) 设置<p>终端节点配置。</p>
 * @method string getCheckType() 获取<p>检查协议。支持&#39;TCP&#39;, &#39;HTTP&#39;, &#39;HTTPS&#39;, &#39;PING&#39;, &#39;CUSTOM&#39;。</p>
 * @method void setCheckType(string $CheckType) 设置<p>检查协议。支持&#39;TCP&#39;, &#39;HTTP&#39;, &#39;HTTPS&#39;, &#39;PING&#39;, &#39;CUSTOM&#39;。</p>
 * @method string getDescription() 获取<p>描述信息，最大长度不能超过100个字节。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息，最大长度不能超过100个字节。</p>
 * @method string getCheckPort() 获取<p>检查端口。</p>
 * @method void setCheckPort(string $CheckPort) 设置<p>检查端口。</p>
 * @method string getContextType() 获取<p>检查内容。</p>
 * @method void setContextType(string $ContextType) 设置<p>检查内容。</p>
 * @method string getCheckSendContext() 获取<p>检查请求。</p>
 * @method void setCheckSendContext(string $CheckSendContext) 设置<p>检查请求。</p>
 * @method string getCheckRecvContext() 获取<p>检查返回结果。</p>
 * @method void setCheckRecvContext(string $CheckRecvContext) 设置<p>检查返回结果。</p>
 * @method boolean getEnableHealthCheck() 获取<p>是否开启健康检查。</p>
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置<p>是否开启健康检查。</p>
 * @method integer getConnectTimeout() 获取<p>响应超时时间。</p>
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置<p>响应超时时间。</p>
 * @method integer getHealthCheckInterval() 获取<p>健康检查间隔。</p>
 * @method void setHealthCheckInterval(integer $HealthCheckInterval) 设置<p>健康检查间隔。</p>
 * @method integer getUnhealthyThreshold() 获取<p>不健康阀值。</p>
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) 设置<p>不健康阀值。</p>
 * @method integer getHealthyThreshold() 获取<p>健康阈值。</p>
 * @method void setHealthyThreshold(integer $HealthyThreshold) 设置<p>健康阈值。</p>
 * @method string getForwardProtocol() 获取<p>回源协议。</p>
 * @method void setForwardProtocol(string $ForwardProtocol) 设置<p>回源协议。</p>
 * @method string getCheckDomain() 获取<p>检查域名。</p>
 * @method void setCheckDomain(string $CheckDomain) 设置<p>检查域名。</p>
 * @method string getCheckPath() 获取<p>检查URL。</p>
 * @method void setCheckPath(string $CheckPath) 设置<p>检查URL。</p>
 * @method string getCheckMethod() 获取<p>请求方式。</p>
 * @method void setCheckMethod(string $CheckMethod) 设置<p>请求方式。</p>
 * @method array getStatusMask() 获取<p>状态检测码。</p>
 * @method void setStatusMask(array $StatusMask) 设置<p>状态检测码。</p>
 * @method array getPortOverrides() 获取<p>端口映射。</p>
 * @method void setPortOverrides(array $PortOverrides) 设置<p>端口映射。</p>
 * @method string getIspType() 获取<p>运用商类型。</p>
 * @method void setIspType(string $IspType) 设置<p>运用商类型。</p>
 * @method string getCipherPolicyId() 获取<p>HPPTS加密算法套件</p>
 * @method void setCipherPolicyId(string $CipherPolicyId) 设置<p>HPPTS加密算法套件</p>
 */
class EndpointGroupConfiguration extends AbstractModel
{
    /**
     * @var string <p>名称，最大长度不能超过60个字节。</p>
     */
    public $Name;

    /**
     * @var string <p>地域。</p>
     */
    public $EndpointGroupRegion;

    /**
     * @var array <p>终端节点配置。</p>
     */
    public $EndpointConfigurations;

    /**
     * @var string <p>检查协议。支持&#39;TCP&#39;, &#39;HTTP&#39;, &#39;HTTPS&#39;, &#39;PING&#39;, &#39;CUSTOM&#39;。</p>
     */
    public $CheckType;

    /**
     * @var string <p>描述信息，最大长度不能超过100个字节。</p>
     */
    public $Description;

    /**
     * @var string <p>检查端口。</p>
     */
    public $CheckPort;

    /**
     * @var string <p>检查内容。</p>
     */
    public $ContextType;

    /**
     * @var string <p>检查请求。</p>
     */
    public $CheckSendContext;

    /**
     * @var string <p>检查返回结果。</p>
     */
    public $CheckRecvContext;

    /**
     * @var boolean <p>是否开启健康检查。</p>
     */
    public $EnableHealthCheck;

    /**
     * @var integer <p>响应超时时间。</p>
     */
    public $ConnectTimeout;

    /**
     * @var integer <p>健康检查间隔。</p>
     */
    public $HealthCheckInterval;

    /**
     * @var integer <p>不健康阀值。</p>
     */
    public $UnhealthyThreshold;

    /**
     * @var integer <p>健康阈值。</p>
     */
    public $HealthyThreshold;

    /**
     * @var string <p>回源协议。</p>
     */
    public $ForwardProtocol;

    /**
     * @var string <p>检查域名。</p>
     */
    public $CheckDomain;

    /**
     * @var string <p>检查URL。</p>
     */
    public $CheckPath;

    /**
     * @var string <p>请求方式。</p>
     */
    public $CheckMethod;

    /**
     * @var array <p>状态检测码。</p>
     */
    public $StatusMask;

    /**
     * @var array <p>端口映射。</p>
     */
    public $PortOverrides;

    /**
     * @var string <p>运用商类型。</p>
     */
    public $IspType;

    /**
     * @var string <p>HPPTS加密算法套件</p>
     */
    public $CipherPolicyId;

    /**
     * @param string $Name <p>名称，最大长度不能超过60个字节。</p>
     * @param string $EndpointGroupRegion <p>地域。</p>
     * @param array $EndpointConfigurations <p>终端节点配置。</p>
     * @param string $CheckType <p>检查协议。支持&#39;TCP&#39;, &#39;HTTP&#39;, &#39;HTTPS&#39;, &#39;PING&#39;, &#39;CUSTOM&#39;。</p>
     * @param string $Description <p>描述信息，最大长度不能超过100个字节。</p>
     * @param string $CheckPort <p>检查端口。</p>
     * @param string $ContextType <p>检查内容。</p>
     * @param string $CheckSendContext <p>检查请求。</p>
     * @param string $CheckRecvContext <p>检查返回结果。</p>
     * @param boolean $EnableHealthCheck <p>是否开启健康检查。</p>
     * @param integer $ConnectTimeout <p>响应超时时间。</p>
     * @param integer $HealthCheckInterval <p>健康检查间隔。</p>
     * @param integer $UnhealthyThreshold <p>不健康阀值。</p>
     * @param integer $HealthyThreshold <p>健康阈值。</p>
     * @param string $ForwardProtocol <p>回源协议。</p>
     * @param string $CheckDomain <p>检查域名。</p>
     * @param string $CheckPath <p>检查URL。</p>
     * @param string $CheckMethod <p>请求方式。</p>
     * @param array $StatusMask <p>状态检测码。</p>
     * @param array $PortOverrides <p>端口映射。</p>
     * @param string $IspType <p>运用商类型。</p>
     * @param string $CipherPolicyId <p>HPPTS加密算法套件</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EndpointGroupRegion",$param) and $param["EndpointGroupRegion"] !== null) {
            $this->EndpointGroupRegion = $param["EndpointGroupRegion"];
        }

        if (array_key_exists("EndpointConfigurations",$param) and $param["EndpointConfigurations"] !== null) {
            $this->EndpointConfigurations = [];
            foreach ($param["EndpointConfigurations"] as $key => $value){
                $obj = new EndpointConfigurations();
                $obj->deserialize($value);
                array_push($this->EndpointConfigurations, $obj);
            }
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CheckPort",$param) and $param["CheckPort"] !== null) {
            $this->CheckPort = $param["CheckPort"];
        }

        if (array_key_exists("ContextType",$param) and $param["ContextType"] !== null) {
            $this->ContextType = $param["ContextType"];
        }

        if (array_key_exists("CheckSendContext",$param) and $param["CheckSendContext"] !== null) {
            $this->CheckSendContext = $param["CheckSendContext"];
        }

        if (array_key_exists("CheckRecvContext",$param) and $param["CheckRecvContext"] !== null) {
            $this->CheckRecvContext = $param["CheckRecvContext"];
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("HealthCheckInterval",$param) and $param["HealthCheckInterval"] !== null) {
            $this->HealthCheckInterval = $param["HealthCheckInterval"];
        }

        if (array_key_exists("UnhealthyThreshold",$param) and $param["UnhealthyThreshold"] !== null) {
            $this->UnhealthyThreshold = $param["UnhealthyThreshold"];
        }

        if (array_key_exists("HealthyThreshold",$param) and $param["HealthyThreshold"] !== null) {
            $this->HealthyThreshold = $param["HealthyThreshold"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("CheckDomain",$param) and $param["CheckDomain"] !== null) {
            $this->CheckDomain = $param["CheckDomain"];
        }

        if (array_key_exists("CheckPath",$param) and $param["CheckPath"] !== null) {
            $this->CheckPath = $param["CheckPath"];
        }

        if (array_key_exists("CheckMethod",$param) and $param["CheckMethod"] !== null) {
            $this->CheckMethod = $param["CheckMethod"];
        }

        if (array_key_exists("StatusMask",$param) and $param["StatusMask"] !== null) {
            $this->StatusMask = $param["StatusMask"];
        }

        if (array_key_exists("PortOverrides",$param) and $param["PortOverrides"] !== null) {
            $this->PortOverrides = [];
            foreach ($param["PortOverrides"] as $key => $value){
                $obj = new PortOverride();
                $obj->deserialize($value);
                array_push($this->PortOverrides, $obj);
            }
        }

        if (array_key_exists("IspType",$param) and $param["IspType"] !== null) {
            $this->IspType = $param["IspType"];
        }

        if (array_key_exists("CipherPolicyId",$param) and $param["CipherPolicyId"] !== null) {
            $this->CipherPolicyId = $param["CipherPolicyId"];
        }
    }
}
