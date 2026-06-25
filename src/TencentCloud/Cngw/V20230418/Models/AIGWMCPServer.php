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
 * MCP Server详情
 *
 * @method string getServerId() 获取<p>MCP Server ID</p>
 * @method void setServerId(string $ServerId) 设置<p>MCP Server ID</p>
 * @method string getName() 获取<p>MCP Server名称</p>
 * @method void setName(string $Name) 设置<p>MCP Server名称</p>
 * @method string getServerType() 获取<p>MCP Server类型，取值：MCP/Rest2MCP</p>
 * @method void setServerType(string $ServerType) 设置<p>MCP Server类型，取值：MCP/Rest2MCP</p>
 * @method string getTransport() 获取<p>协议类型，取值: StreamableHttp</p>
 * @method void setTransport(string $Transport) 设置<p>协议类型，取值: StreamableHttp</p>
 * @method string getUpstreamType() 获取<p>服务类型：</p><ul><li>Registry  </li><li>HostIP</li></ul>
 * @method void setUpstreamType(string $UpstreamType) 设置<p>服务类型：</p><ul><li>Registry  </li><li>HostIP</li></ul>
 * @method string getDisplayName() 获取<p>展示名字</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>展示名字</p>
 * @method string getMCPEndpoint() 获取<p>MCP提供给客户端的Endpoint</p>
 * @method void setMCPEndpoint(string $MCPEndpoint) 设置<p>MCP提供给客户端的Endpoint</p>
 * @method AIGWMCPUpstreamInfoDetail getUpstreamInfo() 获取<p>注册中心来源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamInfo(AIGWMCPUpstreamInfoDetail $UpstreamInfo) 设置<p>注册中心来源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AIGWMCPSessionConfig getSessionConfig() 获取<p>会话配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionConfig(AIGWMCPSessionConfig $SessionConfig) 设置<p>会话配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取<p>超时时间，单位ms</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间，单位ms</p>
 * @method integer getRetryCount() 获取<p>失败重试次数</p>
 * @method void setRetryCount(integer $RetryCount) 设置<p>失败重试次数</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getStatus() 获取<p>运行状态</p><p>枚举值：</p><ul><li>Online： 在线</li><li>Offline： 离线</li><li>Error： 错误</li></ul>
 * @method void setStatus(string $Status) 设置<p>运行状态</p><p>枚举值：</p><ul><li>Online： 在线</li><li>Offline： 离线</li><li>Error： 错误</li></ul>
 * @method boolean getEnableHealthCheck() 获取<p>是否启用健康检查</p>
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置<p>是否启用健康检查</p>
 * @method AIGWHealthCheckSetting getHealthCheck() 获取<p>健康检查配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheck(AIGWHealthCheckSetting $HealthCheck) 设置<p>健康检查配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getToolCountLimit() 获取<p>Tool分组内工具数量限制</p>
 * @method void setToolCountLimit(integer $ToolCountLimit) 设置<p>Tool分组内工具数量限制</p>
 * @method string getConflictStrategy() 获取<p>Tool分组内工具命名冲突策略</p><p>枚举值：</p><ul><li>AutoPrefix： 自动前缀</li><li>Reject： 拒绝</li></ul>
 * @method void setConflictStrategy(string $ConflictStrategy) 设置<p>Tool分组内工具命名冲突策略</p><p>枚举值：</p><ul><li>AutoPrefix： 自动前缀</li><li>Reject： 拒绝</li></ul>
 * @method string getMarketStatus() 获取<p>MCP 市场发布状态</p><p>枚举值：</p><ul><li>None： 未发布</li><li>Published： 已发布</li></ul>
 * @method void setMarketStatus(string $MarketStatus) 设置<p>MCP 市场发布状态</p><p>枚举值：</p><ul><li>None： 未发布</li><li>Published： 已发布</li></ul>
 */
class AIGWMCPServer extends AbstractModel
{
    /**
     * @var string <p>MCP Server ID</p>
     */
    public $ServerId;

    /**
     * @var string <p>MCP Server名称</p>
     */
    public $Name;

    /**
     * @var string <p>MCP Server类型，取值：MCP/Rest2MCP</p>
     */
    public $ServerType;

    /**
     * @var string <p>协议类型，取值: StreamableHttp</p>
     */
    public $Transport;

    /**
     * @var string <p>服务类型：</p><ul><li>Registry  </li><li>HostIP</li></ul>
     */
    public $UpstreamType;

    /**
     * @var string <p>展示名字</p>
     */
    public $DisplayName;

    /**
     * @var string <p>MCP提供给客户端的Endpoint</p>
     */
    public $MCPEndpoint;

    /**
     * @var AIGWMCPUpstreamInfoDetail <p>注册中心来源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamInfo;

    /**
     * @var AIGWMCPSessionConfig <p>会话配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionConfig;

    /**
     * @var integer <p>超时时间，单位ms</p>
     */
    public $Timeout;

    /**
     * @var integer <p>失败重试次数</p>
     */
    public $RetryCount;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>运行状态</p><p>枚举值：</p><ul><li>Online： 在线</li><li>Offline： 离线</li><li>Error： 错误</li></ul>
     */
    public $Status;

    /**
     * @var boolean <p>是否启用健康检查</p>
     */
    public $EnableHealthCheck;

    /**
     * @var AIGWHealthCheckSetting <p>健康检查配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheck;

    /**
     * @var integer <p>Tool分组内工具数量限制</p>
     */
    public $ToolCountLimit;

    /**
     * @var string <p>Tool分组内工具命名冲突策略</p><p>枚举值：</p><ul><li>AutoPrefix： 自动前缀</li><li>Reject： 拒绝</li></ul>
     */
    public $ConflictStrategy;

    /**
     * @var string <p>MCP 市场发布状态</p><p>枚举值：</p><ul><li>None： 未发布</li><li>Published： 已发布</li></ul>
     */
    public $MarketStatus;

    /**
     * @param string $ServerId <p>MCP Server ID</p>
     * @param string $Name <p>MCP Server名称</p>
     * @param string $ServerType <p>MCP Server类型，取值：MCP/Rest2MCP</p>
     * @param string $Transport <p>协议类型，取值: StreamableHttp</p>
     * @param string $UpstreamType <p>服务类型：</p><ul><li>Registry  </li><li>HostIP</li></ul>
     * @param string $DisplayName <p>展示名字</p>
     * @param string $MCPEndpoint <p>MCP提供给客户端的Endpoint</p>
     * @param AIGWMCPUpstreamInfoDetail $UpstreamInfo <p>注册中心来源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AIGWMCPSessionConfig $SessionConfig <p>会话配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout <p>超时时间，单位ms</p>
     * @param integer $RetryCount <p>失败重试次数</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $Description <p>描述</p>
     * @param string $Status <p>运行状态</p><p>枚举值：</p><ul><li>Online： 在线</li><li>Offline： 离线</li><li>Error： 错误</li></ul>
     * @param boolean $EnableHealthCheck <p>是否启用健康检查</p>
     * @param AIGWHealthCheckSetting $HealthCheck <p>健康检查配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ToolCountLimit <p>Tool分组内工具数量限制</p>
     * @param string $ConflictStrategy <p>Tool分组内工具命名冲突策略</p><p>枚举值：</p><ul><li>AutoPrefix： 自动前缀</li><li>Reject： 拒绝</li></ul>
     * @param string $MarketStatus <p>MCP 市场发布状态</p><p>枚举值：</p><ul><li>None： 未发布</li><li>Published： 已发布</li></ul>
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
        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("MCPEndpoint",$param) and $param["MCPEndpoint"] !== null) {
            $this->MCPEndpoint = $param["MCPEndpoint"];
        }

        if (array_key_exists("UpstreamInfo",$param) and $param["UpstreamInfo"] !== null) {
            $this->UpstreamInfo = new AIGWMCPUpstreamInfoDetail();
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new AIGWHealthCheckSetting();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("ToolCountLimit",$param) and $param["ToolCountLimit"] !== null) {
            $this->ToolCountLimit = $param["ToolCountLimit"];
        }

        if (array_key_exists("ConflictStrategy",$param) and $param["ConflictStrategy"] !== null) {
            $this->ConflictStrategy = $param["ConflictStrategy"];
        }

        if (array_key_exists("MarketStatus",$param) and $param["MarketStatus"] !== null) {
            $this->MarketStatus = $param["MarketStatus"];
        }
    }
}
