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
 * DescribeCloudNativeAPIGatewayMCPToolsFromFile请求参数结构体
 *
 * @method string getContent() 获取<p>OpenAPI文件内容</p>
 * @method void setContent(string $Content) 设置<p>OpenAPI文件内容</p>
 * @method string getFormat() 获取<p>文件内容格式</p>
 * @method void setFormat(string $Format) 设置<p>文件内容格式</p>
 * @method string getGatewayId() 获取<p>网关实例ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例ID</p>
 * @method string getMCPServerId() 获取<p>MCP Server ID</p>
 * @method void setMCPServerId(string $MCPServerId) 设置<p>MCP Server ID</p>
 */
class DescribeCloudNativeAPIGatewayMCPToolsFromFileRequest extends AbstractModel
{
    /**
     * @var string <p>OpenAPI文件内容</p>
     */
    public $Content;

    /**
     * @var string <p>文件内容格式</p>
     */
    public $Format;

    /**
     * @var string <p>网关实例ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>MCP Server ID</p>
     */
    public $MCPServerId;

    /**
     * @param string $Content <p>OpenAPI文件内容</p>
     * @param string $Format <p>文件内容格式</p>
     * @param string $GatewayId <p>网关实例ID</p>
     * @param string $MCPServerId <p>MCP Server ID</p>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("MCPServerId",$param) and $param["MCPServerId"] !== null) {
            $this->MCPServerId = $param["MCPServerId"];
        }
    }
}
