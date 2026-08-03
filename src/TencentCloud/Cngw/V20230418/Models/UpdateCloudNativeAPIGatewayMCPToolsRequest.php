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
 * UpdateCloudNativeAPIGatewayMCPTools请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例ID</p>
 * @method string getMCPServerId() 获取<p>MCP Server ID</p>
 * @method void setMCPServerId(string $MCPServerId) 设置<p>MCP Server ID</p>
 * @method array getTools() 获取<p>待导入的MCP Tools列表</p>
 * @method void setTools(array $Tools) 设置<p>待导入的MCP Tools列表</p>
 */
class UpdateCloudNativeAPIGatewayMCPToolsRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>MCP Server ID</p>
     */
    public $MCPServerId;

    /**
     * @var array <p>待导入的MCP Tools列表</p>
     */
    public $Tools;

    /**
     * @param string $GatewayId <p>网关实例ID</p>
     * @param string $MCPServerId <p>MCP Server ID</p>
     * @param array $Tools <p>待导入的MCP Tools列表</p>
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

        if (array_key_exists("MCPServerId",$param) and $param["MCPServerId"] !== null) {
            $this->MCPServerId = $param["MCPServerId"];
        }

        if (array_key_exists("Tools",$param) and $param["Tools"] !== null) {
            $this->Tools = [];
            foreach ($param["Tools"] as $key => $value){
                $obj = new CNAPIGwMCPTool();
                $obj->deserialize($value);
                array_push($this->Tools, $obj);
            }
        }
    }
}
