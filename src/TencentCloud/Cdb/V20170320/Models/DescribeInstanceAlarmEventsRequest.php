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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceAlarmEvents请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method string getStartTime() 获取事件查询范围开始时间，闭区间。
 * @method void setStartTime(string $StartTime) 设置事件查询范围开始时间，闭区间。
 * @method string getEndTime() 获取事件查询范围截止时间，闭区间。
 * @method void setEndTime(string $EndTime) 设置事件查询范围截止时间，闭区间。
 * @method array getEventName() 获取事件名称。 Outofmemory - 内存OOM（有状态事件）; Switch - 主从切换（有状态事件）; Roremove - 只读实例剔除（有状态事件）; MemoryUsedHigh - 内存使用率过高（有状态事件）; CPUExpansion - CPU性能扩容（无状态事件）; CPUExpansionFailed - CPU性能扩容失败（无状态事件）; CPUContraction - CPU性能回缩（无状态事件）; Restart - 实例重启（有状态事件）; ServerFailureNodeMigration - ServerFailureNodeMigration（有状态事件）; PlannedSwitch - 计划内主备切换（无状态事件）; OverusedReadonlySet - 实例将被锁定（无状态事件）; OverusedReadWriteSet - 实例解除锁定（无状态事件）。
 * @method void setEventName(array $EventName) 设置事件名称。 Outofmemory - 内存OOM（有状态事件）; Switch - 主从切换（有状态事件）; Roremove - 只读实例剔除（有状态事件）; MemoryUsedHigh - 内存使用率过高（有状态事件）; CPUExpansion - CPU性能扩容（无状态事件）; CPUExpansionFailed - CPU性能扩容失败（无状态事件）; CPUContraction - CPU性能回缩（无状态事件）; Restart - 实例重启（有状态事件）; ServerFailureNodeMigration - ServerFailureNodeMigration（有状态事件）; PlannedSwitch - 计划内主备切换（无状态事件）; OverusedReadonlySet - 实例将被锁定（无状态事件）; OverusedReadWriteSet - 实例解除锁定（无状态事件）。
 * @method string getEventStatus() 获取事件状态。"1" - 发生事件；"0" - 恢复事件；"-" - 无状态事件。
 * @method void setEventStatus(string $EventStatus) 设置事件状态。"1" - 发生事件；"0" - 恢复事件；"-" - 无状态事件。
 * @method string getOrder() 获取排序方式。按事件发生事件进行排序，"DESC"-倒排；”ASC“-正序，默认倒排。
 * @method void setOrder(string $Order) 设置排序方式。按事件发生事件进行排序，"DESC"-倒排；”ASC“-正序，默认倒排。
 * @method string getLimit() 获取事件展示数量。默认为100，最大为200。
 * @method void setLimit(string $Limit) 设置事件展示数量。默认为100，最大为200。
 * @method string getOffset() 获取偏移量。
 * @method void setOffset(string $Offset) 设置偏移量。
 * @method string getNodeId() 获取节点 ID。
 * @method void setNodeId(string $NodeId) 设置节点 ID。
 */
class DescribeInstanceAlarmEventsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 事件查询范围开始时间，闭区间。
     */
    public $StartTime;

    /**
     * @var string 事件查询范围截止时间，闭区间。
     */
    public $EndTime;

    /**
     * @var array 事件名称。 Outofmemory - 内存OOM（有状态事件）; Switch - 主从切换（有状态事件）; Roremove - 只读实例剔除（有状态事件）; MemoryUsedHigh - 内存使用率过高（有状态事件）; CPUExpansion - CPU性能扩容（无状态事件）; CPUExpansionFailed - CPU性能扩容失败（无状态事件）; CPUContraction - CPU性能回缩（无状态事件）; Restart - 实例重启（有状态事件）; ServerFailureNodeMigration - ServerFailureNodeMigration（有状态事件）; PlannedSwitch - 计划内主备切换（无状态事件）; OverusedReadonlySet - 实例将被锁定（无状态事件）; OverusedReadWriteSet - 实例解除锁定（无状态事件）。
     */
    public $EventName;

    /**
     * @var string 事件状态。"1" - 发生事件；"0" - 恢复事件；"-" - 无状态事件。
     */
    public $EventStatus;

    /**
     * @var string 排序方式。按事件发生事件进行排序，"DESC"-倒排；”ASC“-正序，默认倒排。
     */
    public $Order;

    /**
     * @var string 事件展示数量。默认为100，最大为200。
     */
    public $Limit;

    /**
     * @var string 偏移量。
     */
    public $Offset;

    /**
     * @var string 节点 ID。
     */
    public $NodeId;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param string $StartTime 事件查询范围开始时间，闭区间。
     * @param string $EndTime 事件查询范围截止时间，闭区间。
     * @param array $EventName 事件名称。 Outofmemory - 内存OOM（有状态事件）; Switch - 主从切换（有状态事件）; Roremove - 只读实例剔除（有状态事件）; MemoryUsedHigh - 内存使用率过高（有状态事件）; CPUExpansion - CPU性能扩容（无状态事件）; CPUExpansionFailed - CPU性能扩容失败（无状态事件）; CPUContraction - CPU性能回缩（无状态事件）; Restart - 实例重启（有状态事件）; ServerFailureNodeMigration - ServerFailureNodeMigration（有状态事件）; PlannedSwitch - 计划内主备切换（无状态事件）; OverusedReadonlySet - 实例将被锁定（无状态事件）; OverusedReadWriteSet - 实例解除锁定（无状态事件）。
     * @param string $EventStatus 事件状态。"1" - 发生事件；"0" - 恢复事件；"-" - 无状态事件。
     * @param string $Order 排序方式。按事件发生事件进行排序，"DESC"-倒排；”ASC“-正序，默认倒排。
     * @param string $Limit 事件展示数量。默认为100，最大为200。
     * @param string $Offset 偏移量。
     * @param string $NodeId 节点 ID。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }
    }
}
