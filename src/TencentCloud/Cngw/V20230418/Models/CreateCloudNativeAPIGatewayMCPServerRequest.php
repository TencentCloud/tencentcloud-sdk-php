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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGatewayMCPServer请求参数结构体
 *
 * @method string getGatewayId() 获取<p>实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>实例 ID</p>
 * @method string getName() 获取<p>名字</p>
 * @method void setName(string $Name) 设置<p>名字</p>
 * @method string getDisplayName() 获取<p>展示名字</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>展示名字</p>
 * @method string getServerType() 获取<p>MCP服务类型</p><ul><li>MCP</li><li>Rest2MCP</li></ul>
 * @method void setServerType(string $ServerType) 设置<p>MCP服务类型</p><ul><li>MCP</li><li>Rest2MCP</li></ul>
 * @method string getTransport() 获取<p>传输协议：StreamableHttp或SSE</p><p>枚举值：</p><ul><li>StreamableHttp： Streamable HTTP</li><li>SSE： Server-Sent Events</li></ul>
 * @method void setTransport(string $Transport) 设置<p>传输协议：StreamableHttp或SSE</p><p>枚举值：</p><ul><li>StreamableHttp： Streamable HTTP</li><li>SSE： Server-Sent Events</li></ul>
 * @method string getUpstreamType() 获取<p>后端类型</p><p>枚举值：</p><ul><li>MCPRegistry： mcp 注册中心- Registry</li><li>Registry： 普通注册中心</li><li>HostIP： 域名或ip</li><li>VirtualMCPServer： 虚拟MCPServer</li></ul>
 * @method void setUpstreamType(string $UpstreamType) 设置<p>后端类型</p><p>枚举值：</p><ul><li>MCPRegistry： mcp 注册中心- Registry</li><li>Registry： 普通注册中心</li><li>HostIP： 域名或ip</li><li>VirtualMCPServer： 虚拟MCPServer</li></ul>
 * @method AIGWMCPUpstreamInfo getUpstreamInfo() 获取<p>注册中心来源信息</p>
 * @method void setUpstreamInfo(AIGWMCPUpstreamInfo $UpstreamInfo) 设置<p>注册中心来源信息</p>
 * @method AIGWMCPSessionConfig getSessionConfig() 获取<p>会话配置</p>
 * @method void setSessionConfig(AIGWMCPSessionConfig $SessionConfig) 设置<p>会话配置</p>
 * @method integer getTimeout() 获取<p>超时时间，单位ms，最大60000</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间，单位ms，最大60000</p>
 * @method integer getRetryCount() 获取<p>重试次数，最大3次</p>
 * @method void setRetryCount(integer $RetryCount) 设置<p>重试次数，最大3次</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method boolean getEnableHealthCheck() 获取<p>是否启用健康检查</p>
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置<p>是否启用健康检查</p>
 * @method AIGWHealthCheckSetting getHealthCheck() 获取<p>健康检查配置</p>
 * @method void setHealthCheck(AIGWHealthCheckSetting $HealthCheck) 设置<p>健康检查配置</p>
 */
class CreateCloudNativeAPIGatewayMCPServerRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>名字</p>
     */
    public $Name;

    /**
     * @var string <p>展示名字</p>
     */
    public $DisplayName;

    /**
     * @var string <p>MCP服务类型</p><ul><li>MCP</li><li>Rest2MCP</li></ul>
     */
    public $ServerType;

    /**
     * @var string <p>传输协议：StreamableHttp或SSE</p><p>枚举值：</p><ul><li>StreamableHttp： Streamable HTTP</li><li>SSE： Server-Sent Events</li></ul>
     */
    public $Transport;

    /**
     * @var string <p>后端类型</p><p>枚举值：</p><ul><li>MCPRegistry： mcp 注册中心- Registry</li><li>Registry： 普通注册中心</li><li>HostIP： 域名或ip</li><li>VirtualMCPServer： 虚拟MCPServer</li></ul>
     */
    public $UpstreamType;

    /**
     * @var AIGWMCPUpstreamInfo <p>注册中心来源信息</p>
     */
    public $UpstreamInfo;

    /**
     * @var AIGWMCPSessionConfig <p>会话配置</p>
     */
    public $SessionConfig;

    /**
     * @var integer <p>超时时间，单位ms，最大60000</p>
     */
    public $Timeout;

    /**
     * @var integer <p>重试次数，最大3次</p>
     */
    public $RetryCount;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var boolean <p>是否启用健康检查</p>
     */
    public $EnableHealthCheck;

    /**
     * @var AIGWHealthCheckSetting <p>健康检查配置</p>
     */
    public $HealthCheck;

    /**
     * @param string $GatewayId <p>实例 ID</p>
     * @param string $Name <p>名字</p>
     * @param string $DisplayName <p>展示名字</p>
     * @param string $ServerType <p>MCP服务类型</p><ul><li>MCP</li><li>Rest2MCP</li></ul>
     * @param string $Transport <p>传输协议：StreamableHttp或SSE</p><p>枚举值：</p><ul><li>StreamableHttp： Streamable HTTP</li><li>SSE： Server-Sent Events</li></ul>
     * @param string $UpstreamType <p>后端类型</p><p>枚举值：</p><ul><li>MCPRegistry： mcp 注册中心- Registry</li><li>Registry： 普通注册中心</li><li>HostIP： 域名或ip</li><li>VirtualMCPServer： 虚拟MCPServer</li></ul>
     * @param AIGWMCPUpstreamInfo $UpstreamInfo <p>注册中心来源信息</p>
     * @param AIGWMCPSessionConfig $SessionConfig <p>会话配置</p>
     * @param integer $Timeout <p>超时时间，单位ms，最大60000</p>
     * @param integer $RetryCount <p>重试次数，最大3次</p>
     * @param string $Description <p>描述</p>
     * @param boolean $EnableHealthCheck <p>是否启用健康检查</p>
     * @param AIGWHealthCheckSetting $HealthCheck <p>健康检查配置</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("ServerType",$param) and $param["ServerType"] !== null) {
            $this->ServerType = $param["ServerType"];
        }

        if (array_key_exists("Transport",$param) and $param["Transport"] !== null) {
            $this->Transport = $param["Transport"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("UpstreamInfo",$param) and $param["UpstreamInfo"] !== null) {
            $this->UpstreamInfo = new AIGWMCPUpstreamInfo();
            $this->UpstreamInfo->deserialize($param["UpstreamInfo"]);
        }

        if (array_key_exists("SessionConfig",$param) and $param["SessionConfig"] !== null) {
            $this->SessionConfig = new AIGWMCPSessionConfig();
            $this->SessionConfig->deserialize($param["SessionConfig"]);
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new AIGWHealthCheckSetting();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }
    }
}
