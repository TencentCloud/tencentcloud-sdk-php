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
 * ModifyCloudNativeAPIGatewayMCPServer请求参数结构体
 *
 * @method string getGatewayId() 获取<p>实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>实例 ID</p>
 * @method string getDisplayName() 获取<p>展示名字</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>展示名字</p>
 * @method string getServerId() 获取<p>服务 id</p>
 * @method void setServerId(string $ServerId) 设置<p>服务 id</p>
 * @method string getUpstreamType() 获取<p>后端类型</p><p>枚举值：</p><ul><li>HostIP： 域名 ip</li><li>MCPRegistry： MCP 注册中心</li><li>VirtualMCPServer： 虚拟MCP 服务</li></ul>
 * @method void setUpstreamType(string $UpstreamType) 设置<p>后端类型</p><p>枚举值：</p><ul><li>HostIP： 域名 ip</li><li>MCPRegistry： MCP 注册中心</li><li>VirtualMCPServer： 虚拟MCP 服务</li></ul>
 * @method integer getTimeout() 获取<p>超时时间，单位ms，最大60000</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间，单位ms，最大60000</p>
 * @method integer getRetryCount() 获取<p>重试次数，最大3次</p>
 * @method void setRetryCount(integer $RetryCount) 设置<p>重试次数，最大3次</p>
 * @method AIGWMCPUpstreamInfo getUpstreamInfo() 获取<p>注册中心来源信息</p>
 * @method void setUpstreamInfo(AIGWMCPUpstreamInfo $UpstreamInfo) 设置<p>注册中心来源信息</p>
 * @method AIGWMCPSessionConfig getSessionConfig() 获取<p>会话配置</p>
 * @method void setSessionConfig(AIGWMCPSessionConfig $SessionConfig) 设置<p>会话配置</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method boolean getEnableHealthCheck() 获取<p>是否启用健康检查</p>
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置<p>是否启用健康检查</p>
 * @method AIGWHealthCheckSetting getHealthCheck() 获取<p>健康检查配置</p>
 * @method void setHealthCheck(AIGWHealthCheckSetting $HealthCheck) 设置<p>健康检查配置</p>
 */
class ModifyCloudNativeAPIGatewayMCPServerRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>展示名字</p>
     */
    public $DisplayName;

    /**
     * @var string <p>服务 id</p>
     */
    public $ServerId;

    /**
     * @var string <p>后端类型</p><p>枚举值：</p><ul><li>HostIP： 域名 ip</li><li>MCPRegistry： MCP 注册中心</li><li>VirtualMCPServer： 虚拟MCP 服务</li></ul>
     */
    public $UpstreamType;

    /**
     * @var integer <p>超时时间，单位ms，最大60000</p>
     */
    public $Timeout;

    /**
     * @var integer <p>重试次数，最大3次</p>
     */
    public $RetryCount;

    /**
     * @var AIGWMCPUpstreamInfo <p>注册中心来源信息</p>
     */
    public $UpstreamInfo;

    /**
     * @var AIGWMCPSessionConfig <p>会话配置</p>
     */
    public $SessionConfig;

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
     * @param string $DisplayName <p>展示名字</p>
     * @param string $ServerId <p>服务 id</p>
     * @param string $UpstreamType <p>后端类型</p><p>枚举值：</p><ul><li>HostIP： 域名 ip</li><li>MCPRegistry： MCP 注册中心</li><li>VirtualMCPServer： 虚拟MCP 服务</li></ul>
     * @param integer $Timeout <p>超时时间，单位ms，最大60000</p>
     * @param integer $RetryCount <p>重试次数，最大3次</p>
     * @param AIGWMCPUpstreamInfo $UpstreamInfo <p>注册中心来源信息</p>
     * @param AIGWMCPSessionConfig $SessionConfig <p>会话配置</p>
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("UpstreamInfo",$param) and $param["UpstreamInfo"] !== null) {
            $this->UpstreamInfo = new AIGWMCPUpstreamInfo();
            $this->UpstreamInfo->deserialize($param["UpstreamInfo"]);
        }

        if (array_key_exists("SessionConfig",$param) and $param["SessionConfig"] !== null) {
            $this->SessionConfig = new AIGWMCPSessionConfig();
            $this->SessionConfig->deserialize($param["SessionConfig"]);
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
