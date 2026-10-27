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
 * DescribeCloudNativeAPIGatewayLLMTokenUsageList请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例Id</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例Id</p>
 * @method integer getStartTime() 获取<p>查询起始时间戳</p><p>单位：秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>查询起始时间戳</p><p>单位：秒</p>
 * @method integer getEndTime() 获取<p>查询结束时间戳</p><p>单位：秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>查询结束时间戳</p><p>单位：秒</p>
 * @method string getDimension() 获取<p>聚合维度。枚举值：</p><ul><li>SecretKey：密钥</li><li>Model：模型</li><li>ModelAPI：模型 API</li><li>ModelService：模型服务</li><li>Consumer：消费者</li><li>ConsumerGroup：消费者组（组织节点）</li></ul><p>网关版本不低于 3.9.8 时，ConsumerGroup 表示消费者组（组织节点），按请求发生时的组织归属查询，包含节点自身及全部下属，仅支持 CLS。更早版本的 ConsumerGroup 保留原消费者组查询。OrganizationNode 已移除，传入返回 InvalidParameterValue。</p><p>可选，未传时按消费者与模型服务二维聚合。</p>
 * @method void setDimension(string $Dimension) 设置<p>聚合维度。枚举值：</p><ul><li>SecretKey：密钥</li><li>Model：模型</li><li>ModelAPI：模型 API</li><li>ModelService：模型服务</li><li>Consumer：消费者</li><li>ConsumerGroup：消费者组（组织节点）</li></ul><p>网关版本不低于 3.9.8 时，ConsumerGroup 表示消费者组（组织节点），按请求发生时的组织归属查询，包含节点自身及全部下属，仅支持 CLS。更早版本的 ConsumerGroup 保留原消费者组查询。OrganizationNode 已移除，传入返回 InvalidParameterValue。</p><p>可选，未传时按消费者与模型服务二维聚合。</p>
 * @method array getFilters() 获取<p>传入 Dimension 时支持：SecretKeyId、SecretKeyName、ModelName、ModelAPIId、ModelAPIName、ModelServiceId、ModelServiceName、ConsumerId、ConsumerName、ConsumerGroupId、ConsumerGroupName。</p><p>网关版本不低于 3.9.8 时，所有支持的 Dimension（包括可选 Dimension 未传）均支持 ConsumerGroupId、ConsumerGroupName，按请求发生时的消费者组及全部下属归属筛选历史日志，仅支持 CLS；不按当前组成员重算历史。ConsumerGroupId 必须为 UUID，允许显式查询已删除节点历史；ConsumerGroupName 从 Kong CP 当前目录按名称子串解析，包含同步、自定义、禁用及保留中的软删节点。同名节点保留各自身份。OrganizationNodeId / OrganizationNodeName 已移除，旧名称返回 InvalidParameterValue。</p><p>最多 10 项，Name 不重复；新版组筛选的每项 Values 为 1～50 个非空字符串，同项多个值为 OR。名称无匹配返回空结果。</p><p>未传 Dimension 时支持 ConsumerId、ConsumerName、ConsumerGroupId、ConsumerGroupName、ModelServiceId、ModelServiceName；新版组筛选同样走历史归属。更早版本保留原筛选及当前成员算法。</p><p>Dimension=ConsumerGroup 时，组 ID 与名称对候选节点求交，名称展开数量不限 50 个；请求 Values 仍最多 50 个。其他维度按历史日志条件 AND，同一请求只计一次，名称展开每项最多 50 个节点，超过返回 InvalidParameterValue。</p><p>未传 Dimension 时也按日志条件 AND，名称展开每项最多 50 个节点。</p>
 * @method void setFilters(array $Filters) 设置<p>传入 Dimension 时支持：SecretKeyId、SecretKeyName、ModelName、ModelAPIId、ModelAPIName、ModelServiceId、ModelServiceName、ConsumerId、ConsumerName、ConsumerGroupId、ConsumerGroupName。</p><p>网关版本不低于 3.9.8 时，所有支持的 Dimension（包括可选 Dimension 未传）均支持 ConsumerGroupId、ConsumerGroupName，按请求发生时的消费者组及全部下属归属筛选历史日志，仅支持 CLS；不按当前组成员重算历史。ConsumerGroupId 必须为 UUID，允许显式查询已删除节点历史；ConsumerGroupName 从 Kong CP 当前目录按名称子串解析，包含同步、自定义、禁用及保留中的软删节点。同名节点保留各自身份。OrganizationNodeId / OrganizationNodeName 已移除，旧名称返回 InvalidParameterValue。</p><p>最多 10 项，Name 不重复；新版组筛选的每项 Values 为 1～50 个非空字符串，同项多个值为 OR。名称无匹配返回空结果。</p><p>未传 Dimension 时支持 ConsumerId、ConsumerName、ConsumerGroupId、ConsumerGroupName、ModelServiceId、ModelServiceName；新版组筛选同样走历史归属。更早版本保留原筛选及当前成员算法。</p><p>Dimension=ConsumerGroup 时，组 ID 与名称对候选节点求交，名称展开数量不限 50 个；请求 Values 仍最多 50 个。其他维度按历史日志条件 AND，同一请求只计一次，名称展开每项最多 50 个节点，超过返回 InvalidParameterValue。</p><p>未传 Dimension 时也按日志条件 AND，名称展开每项最多 50 个节点。</p>
 * @method integer getLimit() 获取<p>分页条件，每页条数</p>
 * @method void setLimit(integer $Limit) 设置<p>分页条件，每页条数</p>
 * @method integer getOffset() 获取<p>分页条件，分页偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>分页条件，分页偏移量</p>
 */
class DescribeCloudNativeAPIGatewayLLMTokenUsageListRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例Id</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>查询起始时间戳</p><p>单位：秒</p>
     */
    public $StartTime;

    /**
     * @var integer <p>查询结束时间戳</p><p>单位：秒</p>
     */
    public $EndTime;

    /**
     * @var string <p>聚合维度。枚举值：</p><ul><li>SecretKey：密钥</li><li>Model：模型</li><li>ModelAPI：模型 API</li><li>ModelService：模型服务</li><li>Consumer：消费者</li><li>ConsumerGroup：消费者组（组织节点）</li></ul><p>网关版本不低于 3.9.8 时，ConsumerGroup 表示消费者组（组织节点），按请求发生时的组织归属查询，包含节点自身及全部下属，仅支持 CLS。更早版本的 ConsumerGroup 保留原消费者组查询。OrganizationNode 已移除，传入返回 InvalidParameterValue。</p><p>可选，未传时按消费者与模型服务二维聚合。</p>
     */
    public $Dimension;

    /**
     * @var array <p>传入 Dimension 时支持：SecretKeyId、SecretKeyName、ModelName、ModelAPIId、ModelAPIName、ModelServiceId、ModelServiceName、ConsumerId、ConsumerName、ConsumerGroupId、ConsumerGroupName。</p><p>网关版本不低于 3.9.8 时，所有支持的 Dimension（包括可选 Dimension 未传）均支持 ConsumerGroupId、ConsumerGroupName，按请求发生时的消费者组及全部下属归属筛选历史日志，仅支持 CLS；不按当前组成员重算历史。ConsumerGroupId 必须为 UUID，允许显式查询已删除节点历史；ConsumerGroupName 从 Kong CP 当前目录按名称子串解析，包含同步、自定义、禁用及保留中的软删节点。同名节点保留各自身份。OrganizationNodeId / OrganizationNodeName 已移除，旧名称返回 InvalidParameterValue。</p><p>最多 10 项，Name 不重复；新版组筛选的每项 Values 为 1～50 个非空字符串，同项多个值为 OR。名称无匹配返回空结果。</p><p>未传 Dimension 时支持 ConsumerId、ConsumerName、ConsumerGroupId、ConsumerGroupName、ModelServiceId、ModelServiceName；新版组筛选同样走历史归属。更早版本保留原筛选及当前成员算法。</p><p>Dimension=ConsumerGroup 时，组 ID 与名称对候选节点求交，名称展开数量不限 50 个；请求 Values 仍最多 50 个。其他维度按历史日志条件 AND，同一请求只计一次，名称展开每项最多 50 个节点，超过返回 InvalidParameterValue。</p><p>未传 Dimension 时也按日志条件 AND，名称展开每项最多 50 个节点。</p>
     */
    public $Filters;

    /**
     * @var integer <p>分页条件，每页条数</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页条件，分页偏移量</p>
     */
    public $Offset;

    /**
     * @param string $GatewayId <p>网关实例Id</p>
     * @param integer $StartTime <p>查询起始时间戳</p><p>单位：秒</p>
     * @param integer $EndTime <p>查询结束时间戳</p><p>单位：秒</p>
     * @param string $Dimension <p>聚合维度。枚举值：</p><ul><li>SecretKey：密钥</li><li>Model：模型</li><li>ModelAPI：模型 API</li><li>ModelService：模型服务</li><li>Consumer：消费者</li><li>ConsumerGroup：消费者组（组织节点）</li></ul><p>网关版本不低于 3.9.8 时，ConsumerGroup 表示消费者组（组织节点），按请求发生时的组织归属查询，包含节点自身及全部下属，仅支持 CLS。更早版本的 ConsumerGroup 保留原消费者组查询。OrganizationNode 已移除，传入返回 InvalidParameterValue。</p><p>可选，未传时按消费者与模型服务二维聚合。</p>
     * @param array $Filters <p>传入 Dimension 时支持：SecretKeyId、SecretKeyName、ModelName、ModelAPIId、ModelAPIName、ModelServiceId、ModelServiceName、ConsumerId、ConsumerName、ConsumerGroupId、ConsumerGroupName。</p><p>网关版本不低于 3.9.8 时，所有支持的 Dimension（包括可选 Dimension 未传）均支持 ConsumerGroupId、ConsumerGroupName，按请求发生时的消费者组及全部下属归属筛选历史日志，仅支持 CLS；不按当前组成员重算历史。ConsumerGroupId 必须为 UUID，允许显式查询已删除节点历史；ConsumerGroupName 从 Kong CP 当前目录按名称子串解析，包含同步、自定义、禁用及保留中的软删节点。同名节点保留各自身份。OrganizationNodeId / OrganizationNodeName 已移除，旧名称返回 InvalidParameterValue。</p><p>最多 10 项，Name 不重复；新版组筛选的每项 Values 为 1～50 个非空字符串，同项多个值为 OR。名称无匹配返回空结果。</p><p>未传 Dimension 时支持 ConsumerId、ConsumerName、ConsumerGroupId、ConsumerGroupName、ModelServiceId、ModelServiceName；新版组筛选同样走历史归属。更早版本保留原筛选及当前成员算法。</p><p>Dimension=ConsumerGroup 时，组 ID 与名称对候选节点求交，名称展开数量不限 50 个；请求 Values 仍最多 50 个。其他维度按历史日志条件 AND，同一请求只计一次，名称展开每项最多 50 个节点，超过返回 InvalidParameterValue。</p><p>未传 Dimension 时也按日志条件 AND，名称展开每项最多 50 个节点。</p>
     * @param integer $Limit <p>分页条件，每页条数</p>
     * @param integer $Offset <p>分页条件，分页偏移量</p>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
