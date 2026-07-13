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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewayConsumerList请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例id</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例id</p>
 * @method integer getLimit() 获取<p>页显示条数，最大20</p>
 * @method void setLimit(integer $Limit) 设置<p>页显示条数，最大20</p>
 * @method integer getOffset() 获取<p>起始位置</p>
 * @method void setOffset(integer $Offset) 设置<p>起始位置</p>
 * @method string getResourceType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>ModelAPI： 模型API</li><li>MCPServer： MCP服务</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p><p>枚举值：</p><ul><li>ModelAPI： 模型API</li><li>MCPServer： MCP服务</li></ul>
 * @method string getResourceId() 获取<p>资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
 */
class DescribeCloudNativeAPIGatewayConsumerListRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例id</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>页显示条数，最大20</p>
     */
    public $Limit;

    /**
     * @var integer <p>起始位置</p>
     */
    public $Offset;

    /**
     * @var string <p>资源类型</p><p>枚举值：</p><ul><li>ModelAPI： 模型API</li><li>MCPServer： MCP服务</li></ul>
     */
    public $ResourceType;

    /**
     * @var string <p>资源ID</p>
     */
    public $ResourceId;

    /**
     * @param string $GatewayId <p>网关实例id</p>
     * @param integer $Limit <p>页显示条数，最大20</p>
     * @param integer $Offset <p>起始位置</p>
     * @param string $ResourceType <p>资源类型</p><p>枚举值：</p><ul><li>ModelAPI： 模型API</li><li>MCPServer： MCP服务</li></ul>
     * @param string $ResourceId <p>资源ID</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
