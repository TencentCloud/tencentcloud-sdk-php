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
 * CreateMcpServer请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method string getName() 获取MCP Server名称。最大长度：64
 * @method void setName(string $Name) 设置MCP Server名称。最大长度：64
 * @method string getCommand() 获取Base64编码后的MCP Server启动命令。最大长度：2048
 * @method void setCommand(string $Command) 设置Base64编码后的MCP Server启动命令。最大长度：2048
 * @method string getDescription() 获取MCP Server备注。最大长度：2048
 * @method void setDescription(string $Description) 设置MCP Server备注。最大长度：2048
 * @method array getEnvs() 获取MCP Server环境变量。最大长度：10
 * @method void setEnvs(array $Envs) 设置MCP Server环境变量。最大长度：10
 * @method string getTransportType() 获取传输类型。枚举值如下：

<li>STREAMABLE_HTTP：HTTP协议的流式传输方式。未传传输类型字段时，默认创建此类型的MCP Server</li>
<li>SSE：Server-Sent Events，服务器发送事件</li>
 * @method void setTransportType(string $TransportType) 设置传输类型。枚举值如下：

<li>STREAMABLE_HTTP：HTTP协议的流式传输方式。未传传输类型字段时，默认创建此类型的MCP Server</li>
<li>SSE：Server-Sent Events，服务器发送事件</li>
 */
class CreateMcpServerRequest extends AbstractModel
{
    /**
     * @var string 实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     */
    public $InstanceId;

    /**
     * @var string MCP Server名称。最大长度：64
     */
    public $Name;

    /**
     * @var string Base64编码后的MCP Server启动命令。最大长度：2048
     */
    public $Command;

    /**
     * @var string MCP Server备注。最大长度：2048
     */
    public $Description;

    /**
     * @var array MCP Server环境变量。最大长度：10
     */
    public $Envs;

    /**
     * @var string 传输类型。枚举值如下：

<li>STREAMABLE_HTTP：HTTP协议的流式传输方式。未传传输类型字段时，默认创建此类型的MCP Server</li>
<li>SSE：Server-Sent Events，服务器发送事件</li>
     */
    public $TransportType;

    /**
     * @param string $InstanceId 实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     * @param string $Name MCP Server名称。最大长度：64
     * @param string $Command Base64编码后的MCP Server启动命令。最大长度：2048
     * @param string $Description MCP Server备注。最大长度：2048
     * @param array $Envs MCP Server环境变量。最大长度：10
     * @param string $TransportType 传输类型。枚举值如下：

<li>STREAMABLE_HTTP：HTTP协议的流式传输方式。未传传输类型字段时，默认创建此类型的MCP Server</li>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new McpServerEnv();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("TransportType",$param) and $param["TransportType"] !== null) {
            $this->TransportType = $param["TransportType"];
        }
    }
}
