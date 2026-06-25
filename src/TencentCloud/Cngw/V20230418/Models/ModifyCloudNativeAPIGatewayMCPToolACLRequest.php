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
 * ModifyCloudNativeAPIGatewayMCPToolACL请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例ID</p>
 * @method string getServerId() 获取<p>MCP服务ID</p>
 * @method void setServerId(string $ServerId) 设置<p>MCP服务ID</p>
 * @method string getToolId() 获取<p>MCP工具ID</p>
 * @method void setToolId(string $ToolId) 设置<p>MCP工具ID</p>
 * @method string getACLType() 获取<p>鉴权类型</p><p>枚举值：</p><ul><li>None： 继承server鉴权类型</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
 * @method void setACLType(string $ACLType) 设置<p>鉴权类型</p><p>枚举值：</p><ul><li>None： 继承server鉴权类型</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
 * @method array getACLConsumerIds() 获取<p>需要关联的消费者ID列表</p>
 * @method void setACLConsumerIds(array $ACLConsumerIds) 设置<p>需要关联的消费者ID列表</p>
 * @method array getACLConsumerGroupIds() 获取<p>需要关联的消费者组ID列表</p>
 * @method void setACLConsumerGroupIds(array $ACLConsumerGroupIds) 设置<p>需要关联的消费者组ID列表</p>
 */
class ModifyCloudNativeAPIGatewayMCPToolACLRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>MCP服务ID</p>
     */
    public $ServerId;

    /**
     * @var string <p>MCP工具ID</p>
     */
    public $ToolId;

    /**
     * @var string <p>鉴权类型</p><p>枚举值：</p><ul><li>None： 继承server鉴权类型</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
     */
    public $ACLType;

    /**
     * @var array <p>需要关联的消费者ID列表</p>
     */
    public $ACLConsumerIds;

    /**
     * @var array <p>需要关联的消费者组ID列表</p>
     */
    public $ACLConsumerGroupIds;

    /**
     * @param string $GatewayId <p>网关实例ID</p>
     * @param string $ServerId <p>MCP服务ID</p>
     * @param string $ToolId <p>MCP工具ID</p>
     * @param string $ACLType <p>鉴权类型</p><p>枚举值：</p><ul><li>None： 继承server鉴权类型</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
     * @param array $ACLConsumerIds <p>需要关联的消费者ID列表</p>
     * @param array $ACLConsumerGroupIds <p>需要关联的消费者组ID列表</p>
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

        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ACLType",$param) and $param["ACLType"] !== null) {
            $this->ACLType = $param["ACLType"];
        }

        if (array_key_exists("ACLConsumerIds",$param) and $param["ACLConsumerIds"] !== null) {
            $this->ACLConsumerIds = $param["ACLConsumerIds"];
        }

        if (array_key_exists("ACLConsumerGroupIds",$param) and $param["ACLConsumerGroupIds"] !== null) {
            $this->ACLConsumerGroupIds = $param["ACLConsumerGroupIds"];
        }
    }
}
