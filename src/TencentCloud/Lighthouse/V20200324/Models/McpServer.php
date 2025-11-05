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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP Server信息
 *
 * @method string getMcpServerId() 获取MCP Server ID
 * @method void setMcpServerId(string $McpServerId) 设置MCP Server ID
 * @method string getName() 获取MCP Server名称。最大长度：64
 * @method void setName(string $Name) 设置MCP Server名称。最大长度：64
 * @method string getMcpServerType() 获取MCP Server类型。枚举值如下：

<li>PUBLIC_PACKAGE：公共包安装</li>
<li>AGENT_GENERATED：AI生成</li>
 * @method void setMcpServerType(string $McpServerType) 设置MCP Server类型。枚举值如下：

<li>PUBLIC_PACKAGE：公共包安装</li>
<li>AGENT_GENERATED：AI生成</li>
 * @method string getIconUrl() 获取MCP Server图标地址
 * @method void setIconUrl(string $IconUrl) 设置MCP Server图标地址
 * @method string getCommand() 获取Base64编码后的MCP Server启动命令。最大长度：2048
 * @method void setCommand(string $Command) 设置Base64编码后的MCP Server启动命令。最大长度：2048
 * @method string getState() 获取MCP Server状态。枚举值如下：

<li>PENDING：表示创建中</li>
<li>LAUNCH_FAILED：表示创建失败</li>
<li>RUNNING：表示运行中</li>
<li>STOPPED：表示关闭</li>
<li>STARTING：表示开启中</li>
<li>STOPPING：表示关闭中</li>
<li>RESTARTING：表示重启中</li>
<li>REMOVING：表示删除中</li>
<li>UNKNOWN：表示未知</li>
<li>ENV_ERROR：表示环境错误</li>
 * @method void setState(string $State) 设置MCP Server状态。枚举值如下：

<li>PENDING：表示创建中</li>
<li>LAUNCH_FAILED：表示创建失败</li>
<li>RUNNING：表示运行中</li>
<li>STOPPED：表示关闭</li>
<li>STARTING：表示开启中</li>
<li>STOPPING：表示关闭中</li>
<li>RESTARTING：表示重启中</li>
<li>REMOVING：表示删除中</li>
<li>UNKNOWN：表示未知</li>
<li>ENV_ERROR：表示环境错误</li>
 * @method string getServerUrl() 获取MCP Server访问地址。传输类型 TransportType 为 STREAMABLE_HTTP 时以 /mcp结尾，为 SSE 时以 /sse结尾。
 * @method void setServerUrl(string $ServerUrl) 设置MCP Server访问地址。传输类型 TransportType 为 STREAMABLE_HTTP 时以 /mcp结尾，为 SSE 时以 /sse结尾。
 * @method string getConfig() 获取MCP Server配置
 * @method void setConfig(string $Config) 设置MCP Server配置
 * @method string getDescription() 获取MCP Server备注
 * @method void setDescription(string $Description) 设置MCP Server备注
 * @method string getCreatedTime() 获取MCP Server创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
 * @method void setCreatedTime(string $CreatedTime) 设置MCP Server创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
 * @method string getUpdatedTime() 获取MCP Server修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
 * @method void setUpdatedTime(string $UpdatedTime) 设置MCP Server修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
 * @method array getEnvSet() 获取MCP Server环境变量
 * @method void setEnvSet(array $EnvSet) 设置MCP Server环境变量
 * @method string getTransportType() 获取传输类型。枚举值如下：

<li>STREAMABLE_HTTP：HTTP协议的流式传输方式</li>
<li>SSE：Server-Sent Events，服务器发送事件</li>
 * @method void setTransportType(string $TransportType) 设置传输类型。枚举值如下：

<li>STREAMABLE_HTTP：HTTP协议的流式传输方式</li>
<li>SSE：Server-Sent Events，服务器发送事件</li>
 */
class McpServer extends AbstractModel
{
    /**
     * @var string MCP Server ID
     */
    public $McpServerId;

    /**
     * @var string MCP Server名称。最大长度：64
     */
    public $Name;

    /**
     * @var string MCP Server类型。枚举值如下：

<li>PUBLIC_PACKAGE：公共包安装</li>
<li>AGENT_GENERATED：AI生成</li>
     */
    public $McpServerType;

    /**
     * @var string MCP Server图标地址
     */
    public $IconUrl;

    /**
     * @var string Base64编码后的MCP Server启动命令。最大长度：2048
     */
    public $Command;

    /**
     * @var string MCP Server状态。枚举值如下：

<li>PENDING：表示创建中</li>
<li>LAUNCH_FAILED：表示创建失败</li>
<li>RUNNING：表示运行中</li>
<li>STOPPED：表示关闭</li>
<li>STARTING：表示开启中</li>
<li>STOPPING：表示关闭中</li>
<li>RESTARTING：表示重启中</li>
<li>REMOVING：表示删除中</li>
<li>UNKNOWN：表示未知</li>
<li>ENV_ERROR：表示环境错误</li>
     */
    public $State;

    /**
     * @var string MCP Server访问地址。传输类型 TransportType 为 STREAMABLE_HTTP 时以 /mcp结尾，为 SSE 时以 /sse结尾。
     */
    public $ServerUrl;

    /**
     * @var string MCP Server配置
     */
    public $Config;

    /**
     * @var string MCP Server备注
     */
    public $Description;

    /**
     * @var string MCP Server创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
     */
    public $CreatedTime;

    /**
     * @var string MCP Server修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
     */
    public $UpdatedTime;

    /**
     * @var array MCP Server环境变量
     */
    public $EnvSet;

    /**
     * @var string 传输类型。枚举值如下：

<li>STREAMABLE_HTTP：HTTP协议的流式传输方式</li>
<li>SSE：Server-Sent Events，服务器发送事件</li>
     */
    public $TransportType;

    /**
     * @param string $McpServerId MCP Server ID
     * @param string $Name MCP Server名称。最大长度：64
     * @param string $McpServerType MCP Server类型。枚举值如下：

<li>PUBLIC_PACKAGE：公共包安装</li>
<li>AGENT_GENERATED：AI生成</li>
     * @param string $IconUrl MCP Server图标地址
     * @param string $Command Base64编码后的MCP Server启动命令。最大长度：2048
     * @param string $State MCP Server状态。枚举值如下：

<li>PENDING：表示创建中</li>
<li>LAUNCH_FAILED：表示创建失败</li>
<li>RUNNING：表示运行中</li>
<li>STOPPED：表示关闭</li>
<li>STARTING：表示开启中</li>
<li>STOPPING：表示关闭中</li>
<li>RESTARTING：表示重启中</li>
<li>REMOVING：表示删除中</li>
<li>UNKNOWN：表示未知</li>
<li>ENV_ERROR：表示环境错误</li>
     * @param string $ServerUrl MCP Server访问地址。传输类型 TransportType 为 STREAMABLE_HTTP 时以 /mcp结尾，为 SSE 时以 /sse结尾。
     * @param string $Config MCP Server配置
     * @param string $Description MCP Server备注
     * @param string $CreatedTime MCP Server创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
     * @param string $UpdatedTime MCP Server修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
     * @param array $EnvSet MCP Server环境变量
     * @param string $TransportType 传输类型。枚举值如下：

<li>STREAMABLE_HTTP：HTTP协议的流式传输方式</li>
<li>SSE：Server-Sent Events，服务器发送事件</li>
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
        if (array_key_exists("McpServerId",$param) and $param["McpServerId"] !== null) {
            $this->McpServerId = $param["McpServerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("McpServerType",$param) and $param["McpServerType"] !== null) {
            $this->McpServerType = $param["McpServerType"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ServerUrl",$param) and $param["ServerUrl"] !== null) {
            $this->ServerUrl = $param["ServerUrl"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("EnvSet",$param) and $param["EnvSet"] !== null) {
            $this->EnvSet = [];
            foreach ($param["EnvSet"] as $key => $value){
                $obj = new McpServerEnv();
                $obj->deserialize($value);
                array_push($this->EnvSet, $obj);
            }
        }

        if (array_key_exists("TransportType",$param) and $param["TransportType"] !== null) {
            $this->TransportType = $param["TransportType"];
        }
    }
}
