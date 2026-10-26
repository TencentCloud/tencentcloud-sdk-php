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
 * @method string getOrigin() 获取<p>消费者来源筛选：manual / sync（小写），与现有控制面校验一致。</p>
 * @method void setOrigin(string $Origin) 设置<p>消费者来源筛选：manual / sync（小写），与现有控制面校验一致。</p>
 * @method string getStatus() 获取<p>目录消费者状态筛选：active / disabled / soft_deleted（小写）。</p>
 * @method void setStatus(string $Status) 设置<p>目录消费者状态筛选：active / disabled / soft_deleted（小写）。</p>
 * @method string getSyncSourceId() 获取<p>仅查询指定同步源产生的消费者。</p>
 * @method void setSyncSourceId(string $SyncSourceId) 设置<p>仅查询指定同步源产生的消费者。</p>
 * @method boolean getWithoutSyncSource() 获取<p>仅查询不属于外部同步源的消费者；不能与 SyncSourceId 同时设置。</p>
 * @method void setWithoutSyncSource(boolean $WithoutSyncSource) 设置<p>仅查询不属于外部同步源的消费者；不能与 SyncSourceId 同时设置。</p>
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
     * @var string <p>消费者来源筛选：manual / sync（小写），与现有控制面校验一致。</p>
     */
    public $Origin;

    /**
     * @var string <p>目录消费者状态筛选：active / disabled / soft_deleted（小写）。</p>
     */
    public $Status;

    /**
     * @var string <p>仅查询指定同步源产生的消费者。</p>
     */
    public $SyncSourceId;

    /**
     * @var boolean <p>仅查询不属于外部同步源的消费者；不能与 SyncSourceId 同时设置。</p>
     */
    public $WithoutSyncSource;

    /**
     * @param string $GatewayId <p>网关实例id</p>
     * @param integer $Limit <p>页显示条数，最大20</p>
     * @param integer $Offset <p>起始位置</p>
     * @param string $ResourceType <p>资源类型</p><p>枚举值：</p><ul><li>ModelAPI： 模型API</li><li>MCPServer： MCP服务</li></ul>
     * @param string $ResourceId <p>资源ID</p>
     * @param string $Origin <p>消费者来源筛选：manual / sync（小写），与现有控制面校验一致。</p>
     * @param string $Status <p>目录消费者状态筛选：active / disabled / soft_deleted（小写）。</p>
     * @param string $SyncSourceId <p>仅查询指定同步源产生的消费者。</p>
     * @param boolean $WithoutSyncSource <p>仅查询不属于外部同步源的消费者；不能与 SyncSourceId 同时设置。</p>
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

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SyncSourceId",$param) and $param["SyncSourceId"] !== null) {
            $this->SyncSourceId = $param["SyncSourceId"];
        }

        if (array_key_exists("WithoutSyncSource",$param) and $param["WithoutSyncSource"] !== null) {
            $this->WithoutSyncSource = $param["WithoutSyncSource"];
        }
    }
}
