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
 * 云原生网关MCP后端信息，用于展示
 *
 * @method string getSourceId() 获取<p>注册中心来源ID</p>
 * @method void setSourceId(string $SourceId) 设置<p>注册中心来源ID</p>
 * @method string getSourceName() 获取<p>注册中心来源名称, 入参不传，用于返回</p>
 * @method void setSourceName(string $SourceName) 设置<p>注册中心来源名称, 入参不传，用于返回</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getMCPServerId() 获取<p>服务 id</p>
 * @method void setMCPServerId(string $MCPServerId) 设置<p>服务 id</p>
 * @method string getProtocol() 获取<p>协议，UpstreamType是Registry 时必传</p><ul><li>http</li><li>https</li></ul>
 * @method void setProtocol(string $Protocol) 设置<p>协议，UpstreamType是Registry 时必传</p><ul><li>http</li><li>https</li></ul>
 * @method string getHost() 获取<p>域名或ip</p>
 * @method void setHost(string $Host) 设置<p>域名或ip</p>
 * @method integer getPort() 获取<p>端口</p>
 * @method void setPort(integer $Port) 设置<p>端口</p>
 * @method string getServiceId() 获取<p>服务 id</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务 id</p>
 * @method string getServiceName() 获取<p>服务名字</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名字</p>
 * @method string getServiceGroup() 获取<p>服务分组</p>
 * @method void setServiceGroup(string $ServiceGroup) 设置<p>服务分组</p>
 * @method string getMCPEndpoint() 获取<p>mcp endpoint</p>
 * @method void setMCPEndpoint(string $MCPEndpoint) 设置<p>mcp endpoint</p>
 * @method string getMessageEndpoint() 获取<p>SSE message路径</p>
 * @method void setMessageEndpoint(string $MessageEndpoint) 设置<p>SSE message路径</p>
 */
class AIGWMCPUpstreamInfoDetail extends AbstractModel
{
    /**
     * @var string <p>注册中心来源ID</p>
     */
    public $SourceId;

    /**
     * @var string <p>注册中心来源名称, 入参不传，用于返回</p>
     */
    public $SourceName;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>服务 id</p>
     */
    public $MCPServerId;

    /**
     * @var string <p>协议，UpstreamType是Registry 时必传</p><ul><li>http</li><li>https</li></ul>
     */
    public $Protocol;

    /**
     * @var string <p>域名或ip</p>
     */
    public $Host;

    /**
     * @var integer <p>端口</p>
     */
    public $Port;

    /**
     * @var string <p>服务 id</p>
     */
    public $ServiceId;

    /**
     * @var string <p>服务名字</p>
     */
    public $ServiceName;

    /**
     * @var string <p>服务分组</p>
     */
    public $ServiceGroup;

    /**
     * @var string <p>mcp endpoint</p>
     */
    public $MCPEndpoint;

    /**
     * @var string <p>SSE message路径</p>
     */
    public $MessageEndpoint;

    /**
     * @param string $SourceId <p>注册中心来源ID</p>
     * @param string $SourceName <p>注册中心来源名称, 入参不传，用于返回</p>
     * @param string $Namespace <p>命名空间</p>
     * @param string $MCPServerId <p>服务 id</p>
     * @param string $Protocol <p>协议，UpstreamType是Registry 时必传</p><ul><li>http</li><li>https</li></ul>
     * @param string $Host <p>域名或ip</p>
     * @param integer $Port <p>端口</p>
     * @param string $ServiceId <p>服务 id</p>
     * @param string $ServiceName <p>服务名字</p>
     * @param string $ServiceGroup <p>服务分组</p>
     * @param string $MCPEndpoint <p>mcp endpoint</p>
     * @param string $MessageEndpoint <p>SSE message路径</p>
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
        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MCPServerId",$param) and $param["MCPServerId"] !== null) {
            $this->MCPServerId = $param["MCPServerId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceGroup",$param) and $param["ServiceGroup"] !== null) {
            $this->ServiceGroup = $param["ServiceGroup"];
        }

        if (array_key_exists("MCPEndpoint",$param) and $param["MCPEndpoint"] !== null) {
            $this->MCPEndpoint = $param["MCPEndpoint"];
        }

        if (array_key_exists("MessageEndpoint",$param) and $param["MessageEndpoint"] !== null) {
            $this->MessageEndpoint = $param["MessageEndpoint"];
        }
    }
}
