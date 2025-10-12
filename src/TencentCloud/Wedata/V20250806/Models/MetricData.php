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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控指标
 *
 * @method string getMetricName() 获取指标名称

- ConcurrencyUsage --- 并发使用率
- CpuCoreUsage --- cpu使用率
- CpuLoad --- cpu负载
- DevelopQueueTask --- 正在队列中的开发任务数量
- DevelopRunningTask --- 正在运行的开发任务数量
- DevelopSchedulingTask --- 正在调度的开发任务数量
- DiskUsage --- 磁盘使用情况
- DiskUsed --- 磁盘已用量
- MaximumConcurrency --- 最大并发
- MemoryLoad --- 内存负载
- MemoryUsage --- 内存使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置指标名称

- ConcurrencyUsage --- 并发使用率
- CpuCoreUsage --- cpu使用率
- CpuLoad --- cpu负载
- DevelopQueueTask --- 正在队列中的开发任务数量
- DevelopRunningTask --- 正在运行的开发任务数量
- DevelopSchedulingTask --- 正在调度的开发任务数量
- DiskUsage --- 磁盘使用情况
- DiskUsed --- 磁盘已用量
- MaximumConcurrency --- 最大并发
- MemoryLoad --- 内存负载
- MemoryUsage --- 内存使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSnapshotValue() 获取当前值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotValue(integer $SnapshotValue) 设置当前值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTrendList() 获取指标趋势
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrendList(array $TrendList) 设置指标趋势
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetricData extends AbstractModel
{
    /**
     * @var string 指标名称

- ConcurrencyUsage --- 并发使用率
- CpuCoreUsage --- cpu使用率
- CpuLoad --- cpu负载
- DevelopQueueTask --- 正在队列中的开发任务数量
- DevelopRunningTask --- 正在运行的开发任务数量
- DevelopSchedulingTask --- 正在调度的开发任务数量
- DiskUsage --- 磁盘使用情况
- DiskUsed --- 磁盘已用量
- MaximumConcurrency --- 最大并发
- MemoryLoad --- 内存负载
- MemoryUsage --- 内存使用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var integer 当前值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotValue;

    /**
     * @var array 指标趋势
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrendList;

    /**
     * @param string $MetricName 指标名称

- ConcurrencyUsage --- 并发使用率
- CpuCoreUsage --- cpu使用率
- CpuLoad --- cpu负载
- DevelopQueueTask --- 正在队列中的开发任务数量
- DevelopRunningTask --- 正在运行的开发任务数量
- DevelopSchedulingTask --- 正在调度的开发任务数量
- DiskUsage --- 磁盘使用情况
- DiskUsed --- 磁盘已用量
- MaximumConcurrency --- 最大并发
- MemoryLoad --- 内存负载
- MemoryUsage --- 内存使用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SnapshotValue 当前值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TrendList 指标趋势
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("SnapshotValue",$param) and $param["SnapshotValue"] !== null) {
            $this->SnapshotValue = $param["SnapshotValue"];
        }

        if (array_key_exists("TrendList",$param) and $param["TrendList"] !== null) {
            $this->TrendList = [];
            foreach ($param["TrendList"] as $key => $value){
                $obj = new TrendData();
                $obj->deserialize($value);
                array_push($this->TrendList, $obj);
            }
        }
    }
}
