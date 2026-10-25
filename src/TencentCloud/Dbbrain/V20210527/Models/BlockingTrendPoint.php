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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 阻塞趋势时序点，表示某个粒度 bucket 的阻塞聚合统计。
 *
 * @method string getStartTime() 获取<p>该 bucket 的实际聚合区间左端（含），格式：yyyy-MM-dd HH:mm:ss。聚合区间为前闭后开 [StartTime, EndTime)。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>该 bucket 的实际聚合区间左端（含），格式：yyyy-MM-dd HH:mm:ss。聚合区间为前闭后开 [StartTime, EndTime)。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>该 bucket 的实际聚合区间右端（不含），格式：yyyy-MM-dd HH:mm:ss。即 StartTime + GranularityMs。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>该 bucket 的实际聚合区间右端（不含），格式：yyyy-MM-dd HH:mm:ss。即 StartTime + GranularityMs。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLockCount() 获取<p>该 bucket 内的阻塞 report 行数（底层 blocked_process_report 事件数），无数据 bucket 返回 0。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockCount(integer $LockCount) 设置<p>该 bucket 内的阻塞 report 行数（底层 blocked_process_report 事件数），无数据 bucket 返回 0。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonitorLoopCount() 获取<p>该 bucket 内观测到的不同 monitorLoop 数量（lock monitor 扫描快照数），无数据 bucket 返回 0。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitorLoopCount(integer $MonitorLoopCount) 设置<p>该 bucket 内观测到的不同 monitorLoop 数量（lock monitor 扫描快照数），无数据 bucket 返回 0。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BlockingTrendPoint extends AbstractModel
{
    /**
     * @var string <p>该 bucket 的实际聚合区间左端（含），格式：yyyy-MM-dd HH:mm:ss。聚合区间为前闭后开 [StartTime, EndTime)。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>该 bucket 的实际聚合区间右端（不含），格式：yyyy-MM-dd HH:mm:ss。即 StartTime + GranularityMs。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer <p>该 bucket 内的阻塞 report 行数（底层 blocked_process_report 事件数），无数据 bucket 返回 0。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockCount;

    /**
     * @var integer <p>该 bucket 内观测到的不同 monitorLoop 数量（lock monitor 扫描快照数），无数据 bucket 返回 0。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonitorLoopCount;

    /**
     * @param string $StartTime <p>该 bucket 的实际聚合区间左端（含），格式：yyyy-MM-dd HH:mm:ss。聚合区间为前闭后开 [StartTime, EndTime)。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>该 bucket 的实际聚合区间右端（不含），格式：yyyy-MM-dd HH:mm:ss。即 StartTime + GranularityMs。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LockCount <p>该 bucket 内的阻塞 report 行数（底层 blocked_process_report 事件数），无数据 bucket 返回 0。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonitorLoopCount <p>该 bucket 内观测到的不同 monitorLoop 数量（lock monitor 扫描快照数），无数据 bucket 返回 0。</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LockCount",$param) and $param["LockCount"] !== null) {
            $this->LockCount = $param["LockCount"];
        }

        if (array_key_exists("MonitorLoopCount",$param) and $param["MonitorLoopCount"] !== null) {
            $this->MonitorLoopCount = $param["MonitorLoopCount"];
        }
    }
}
