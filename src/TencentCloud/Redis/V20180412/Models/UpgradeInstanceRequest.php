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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstance请求参数结构体
 *
 * @method string getInstanceId() 获取待变更实例 ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置待变更实例 ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method integer getMemSize() 获取指实例每个分片内存变更后的大小。<ul><li>单位 MB。</li><li>每次只能修改参数MemSize、RedisShardNum和RedisReplicasNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li><li>缩容时，缩容后的规格务必要大于等于使用容量的1.3倍，否则将执行失败。</li></ul>
 * @method void setMemSize(integer $MemSize) 设置指实例每个分片内存变更后的大小。<ul><li>单位 MB。</li><li>每次只能修改参数MemSize、RedisShardNum和RedisReplicasNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li><li>缩容时，缩容后的规格务必要大于等于使用容量的1.3倍，否则将执行失败。</li></ul>
 * @method integer getRedisShardNum() 获取指实例变更后的分片数量。<ul><li>标准架构不需要配置该参数，集群架构为必填参数。</li><li>集群架构，每次只能修改参数RedisShardNum、MemSize和RedisReplicasNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li></ul>
 * @method void setRedisShardNum(integer $RedisShardNum) 设置指实例变更后的分片数量。<ul><li>标准架构不需要配置该参数，集群架构为必填参数。</li><li>集群架构，每次只能修改参数RedisShardNum、MemSize和RedisReplicasNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li></ul>
 * @method integer getRedisReplicasNum() 获取指实例变更后的副本数量。<ul><li>每次只能修改参数RedisReplicasNum、MemSize和RedisShardNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li><li>多AZ实例修改副本时必须要传入NodeSet。</li></ul>
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) 设置指实例变更后的副本数量。<ul><li>每次只能修改参数RedisReplicasNum、MemSize和RedisShardNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li><li>多AZ实例修改副本时必须要传入NodeSet。</li></ul>
 * @method array getNodeSet() 获取多AZ实例，增加副本时的节点信息，包括副本的 ID 编号及可用区信息。非多AZ实例不需要配置该参数。
 * @method void setNodeSet(array $NodeSet) 设置多AZ实例，增加副本时的节点信息，包括副本的 ID 编号及可用区信息。非多AZ实例不需要配置该参数。
 * @method integer getSwitchOption() 获取切换时间。 
- 1：维护时间窗操作：指升级规格在设置的维护时间窗内执行。请通过接口[DescribeMaintenanceWindow](https://cloud.tencent.com/document/product/239/46336)查询设置的维护时间窗时间段。增减副本、增减分片、扩缩内存均支持在维护时间窗执行操作。维护时间窗升级规格正在分地域逐步测试发布中，部分区域已支持，未覆盖地域若需紧急接入，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请白名单。
- 2：立即操作：操作将立即执行，无需等待维护时间窗。系统默认设置为立即操作。
 * @method void setSwitchOption(integer $SwitchOption) 设置切换时间。 
- 1：维护时间窗操作：指升级规格在设置的维护时间窗内执行。请通过接口[DescribeMaintenanceWindow](https://cloud.tencent.com/document/product/239/46336)查询设置的维护时间窗时间段。增减副本、增减分片、扩缩内存均支持在维护时间窗执行操作。维护时间窗升级规格正在分地域逐步测试发布中，部分区域已支持，未覆盖地域若需紧急接入，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请白名单。
- 2：立即操作：操作将立即执行，无需等待维护时间窗。系统默认设置为立即操作。
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string 待变更实例 ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 指实例每个分片内存变更后的大小。<ul><li>单位 MB。</li><li>每次只能修改参数MemSize、RedisShardNum和RedisReplicasNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li><li>缩容时，缩容后的规格务必要大于等于使用容量的1.3倍，否则将执行失败。</li></ul>
     */
    public $MemSize;

    /**
     * @var integer 指实例变更后的分片数量。<ul><li>标准架构不需要配置该参数，集群架构为必填参数。</li><li>集群架构，每次只能修改参数RedisShardNum、MemSize和RedisReplicasNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li></ul>
     */
    public $RedisShardNum;

    /**
     * @var integer 指实例变更后的副本数量。<ul><li>每次只能修改参数RedisReplicasNum、MemSize和RedisShardNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li><li>多AZ实例修改副本时必须要传入NodeSet。</li></ul>
     */
    public $RedisReplicasNum;

    /**
     * @var array 多AZ实例，增加副本时的节点信息，包括副本的 ID 编号及可用区信息。非多AZ实例不需要配置该参数。
     */
    public $NodeSet;

    /**
     * @var integer 切换时间。 
- 1：维护时间窗操作：指升级规格在设置的维护时间窗内执行。请通过接口[DescribeMaintenanceWindow](https://cloud.tencent.com/document/product/239/46336)查询设置的维护时间窗时间段。增减副本、增减分片、扩缩内存均支持在维护时间窗执行操作。维护时间窗升级规格正在分地域逐步测试发布中，部分区域已支持，未覆盖地域若需紧急接入，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请白名单。
- 2：立即操作：操作将立即执行，无需等待维护时间窗。系统默认设置为立即操作。
     */
    public $SwitchOption;

    /**
     * @param string $InstanceId 待变更实例 ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     * @param integer $MemSize 指实例每个分片内存变更后的大小。<ul><li>单位 MB。</li><li>每次只能修改参数MemSize、RedisShardNum和RedisReplicasNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li><li>缩容时，缩容后的规格务必要大于等于使用容量的1.3倍，否则将执行失败。</li></ul>
     * @param integer $RedisShardNum 指实例变更后的分片数量。<ul><li>标准架构不需要配置该参数，集群架构为必填参数。</li><li>集群架构，每次只能修改参数RedisShardNum、MemSize和RedisReplicasNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li></ul>
     * @param integer $RedisReplicasNum 指实例变更后的副本数量。<ul><li>每次只能修改参数RedisReplicasNum、MemSize和RedisShardNum其中的一个，不能同时修改。且修改其中一个参数时，其他两个参数需输入实例原有的配置规格。</li><li>多AZ实例修改副本时必须要传入NodeSet。</li></ul>
     * @param array $NodeSet 多AZ实例，增加副本时的节点信息，包括副本的 ID 编号及可用区信息。非多AZ实例不需要配置该参数。
     * @param integer $SwitchOption 切换时间。 
- 1：维护时间窗操作：指升级规格在设置的维护时间窗内执行。请通过接口[DescribeMaintenanceWindow](https://cloud.tencent.com/document/product/239/46336)查询设置的维护时间窗时间段。增减副本、增减分片、扩缩内存均支持在维护时间窗执行操作。维护时间窗升级规格正在分地域逐步测试发布中，部分区域已支持，未覆盖地域若需紧急接入，请[提交工单](https://console.cloud.tencent.com/workorder/category)申请白名单。
- 2：立即操作：操作将立即执行，无需等待维护时间窗。系统默认设置为立即操作。
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

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }

        if (array_key_exists("SwitchOption",$param) and $param["SwitchOption"] !== null) {
            $this->SwitchOption = $param["SwitchOption"];
        }
    }
}
