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
 * RemoveCloudNativeAPIGatewayConsumerGroupAuth请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例id</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例id</p>
 * @method string getResourceType() 获取<p>授权资源类型。</p><p>枚举值：</p><ul><li>ModelAPI：模型 API</li><li>MCPServer：MCP Server</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>授权资源类型。</p><p>枚举值：</p><ul><li>ModelAPI：模型 API</li><li>MCPServer：MCP Server</li></ul>
 * @method string getResourceId() 获取<p>对应资源的 ID。</p><ul><li>ResourceType=ModelAPI 时是模型 API ID</li><li>ResourceType=MCPServer 时是 MCP Server ID</li></ul>
 * @method void setResourceId(string $ResourceId) 设置<p>对应资源的 ID。</p><ul><li>ResourceType=ModelAPI 时是模型 API ID</li><li>ResourceType=MCPServer 时是 MCP Server ID</li></ul>
 * @method array getConsumerGroupIds() 获取<p>消费者组 ID 列表（每个 ID 以 cg- 开头），长度 1-10。</p>
 * @method void setConsumerGroupIds(array $ConsumerGroupIds) 设置<p>消费者组 ID 列表（每个 ID 以 cg- 开头），长度 1-10。</p>
 */
class RemoveCloudNativeAPIGatewayConsumerGroupAuthRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例id</p>
     */
    public $GatewayId;

    /**
     * @var string <p>授权资源类型。</p><p>枚举值：</p><ul><li>ModelAPI：模型 API</li><li>MCPServer：MCP Server</li></ul>
     */
    public $ResourceType;

    /**
     * @var string <p>对应资源的 ID。</p><ul><li>ResourceType=ModelAPI 时是模型 API ID</li><li>ResourceType=MCPServer 时是 MCP Server ID</li></ul>
     */
    public $ResourceId;

    /**
     * @var array <p>消费者组 ID 列表（每个 ID 以 cg- 开头），长度 1-10。</p>
     */
    public $ConsumerGroupIds;

    /**
     * @param string $GatewayId <p>网关实例id</p>
     * @param string $ResourceType <p>授权资源类型。</p><p>枚举值：</p><ul><li>ModelAPI：模型 API</li><li>MCPServer：MCP Server</li></ul>
     * @param string $ResourceId <p>对应资源的 ID。</p><ul><li>ResourceType=ModelAPI 时是模型 API ID</li><li>ResourceType=MCPServer 时是 MCP Server ID</li></ul>
     * @param array $ConsumerGroupIds <p>消费者组 ID 列表（每个 ID 以 cg- 开头），长度 1-10。</p>
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ConsumerGroupIds",$param) and $param["ConsumerGroupIds"] !== null) {
            $this->ConsumerGroupIds = $param["ConsumerGroupIds"];
        }
    }
}
