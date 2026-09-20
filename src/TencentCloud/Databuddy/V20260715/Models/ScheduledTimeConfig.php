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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计划调度时间配置
 *
 * @method string getScheduledTimeZone() 获取<p>调度时区，IANA 时区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduledTimeZone(string $ScheduledTimeZone) 设置<p>调度时区，IANA 时区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>调度生效开始时间</p><p>参数格式：毫秒时间戳（UTC）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>调度生效开始时间</p><p>参数格式：毫秒时间戳（UTC）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>调度生效结束时间</p><p>参数格式：毫秒时间戳（UTC）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>调度生效结束时间</p><p>参数格式：毫秒时间戳（UTC）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取<p>周期类型</p><p>枚举值：</p><ul><li>DAY_CYCLE： 天</li><li>HOUR_CYCLE： 小时</li><li>MINUTE_CYCLE： 分钟</li><li>WEEK_CYCLE： 周</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置<p>周期类型</p><p>枚举值：</p><ul><li>DAY_CYCLE： 天</li><li>HOUR_CYCLE： 小时</li><li>MINUTE_CYCLE： 分钟</li><li>WEEK_CYCLE： 周</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleNum() 获取<p>周期步长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleNum(integer $CycleNum) 设置<p>周期步长</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScheduledTimeConfig extends AbstractModel
{
    /**
     * @var string <p>调度时区，IANA 时区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduledTimeZone;

    /**
     * @var string <p>调度生效开始时间</p><p>参数格式：毫秒时间戳（UTC）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>调度生效结束时间</p><p>参数格式：毫秒时间戳（UTC）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>周期类型</p><p>枚举值：</p><ul><li>DAY_CYCLE： 天</li><li>HOUR_CYCLE： 小时</li><li>MINUTE_CYCLE： 分钟</li><li>WEEK_CYCLE： 周</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var integer <p>周期步长</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleNum;

    /**
     * @param string $ScheduledTimeZone <p>调度时区，IANA 时区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>调度生效开始时间</p><p>参数格式：毫秒时间戳（UTC）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>调度生效结束时间</p><p>参数格式：毫秒时间戳（UTC）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType <p>周期类型</p><p>枚举值：</p><ul><li>DAY_CYCLE： 天</li><li>HOUR_CYCLE： 小时</li><li>MINUTE_CYCLE： 分钟</li><li>WEEK_CYCLE： 周</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleNum <p>周期步长</p>
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
        if (array_key_exists("ScheduledTimeZone",$param) and $param["ScheduledTimeZone"] !== null) {
            $this->ScheduledTimeZone = $param["ScheduledTimeZone"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleNum",$param) and $param["CycleNum"] !== null) {
            $this->CycleNum = $param["CycleNum"];
        }
    }
}
