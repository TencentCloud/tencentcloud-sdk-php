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
 * DeleteCloudNativeAPIGatewayMCPTool请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例ID</p>
 * @method string getToolId() 获取<p>工具id</p>
 * @method void setToolId(string $ToolId) 设置<p>工具id</p>
 * @method string getServerId() 获取<p>MCP 服务 id</p>
 * @method void setServerId(string $ServerId) 设置<p>MCP 服务 id</p>
 */
class DeleteCloudNativeAPIGatewayMCPToolRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>工具id</p>
     */
    public $ToolId;

    /**
     * @var string <p>MCP 服务 id</p>
     */
    public $ServerId;

    /**
     * @param string $GatewayId <p>网关实例ID</p>
     * @param string $ToolId <p>工具id</p>
     * @param string $ServerId <p>MCP 服务 id</p>
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

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }
    }
}
