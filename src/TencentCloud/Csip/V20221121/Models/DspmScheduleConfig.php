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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调度任务配置
 *
 * @method string getScheduleType() 获取调度类型: daily(按天), weekly(按周), monthly(按月)
 * @method void setScheduleType(string $ScheduleType) 设置调度类型: daily(按天), weekly(按周), monthly(按月)
 * @method integer getDay() 获取按天不传，按周调度配置（星期几 (1=周一, ..., 7=周日)），按月调度配置（每月第几天 (1-31)）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDay(integer $Day) 设置按天不传，按周调度配置（星期几 (1=周一, ..., 7=周日)），按月调度配置（每月第几天 (1-31)）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTime() 获取调度时间配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置调度时间配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeZone() 获取时区,默认东八区（Asia/Shanghai）
 * @method void setTimeZone(string $TimeZone) 设置时区,默认东八区（Asia/Shanghai）
 */
class DspmScheduleConfig extends AbstractModel
{
    /**
     * @var string 调度类型: daily(按天), weekly(按周), monthly(按月)
     */
    public $ScheduleType;

    /**
     * @var integer 按天不传，按周调度配置（星期几 (1=周一, ..., 7=周日)），按月调度配置（每月第几天 (1-31)）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Day;

    /**
     * @var string 调度时间配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var string 时区,默认东八区（Asia/Shanghai）
     */
    public $TimeZone;

    /**
     * @param string $ScheduleType 调度类型: daily(按天), weekly(按周), monthly(按月)
     * @param integer $Day 按天不传，按周调度配置（星期几 (1=周一, ..., 7=周日)），按月调度配置（每月第几天 (1-31)）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Time 调度时间配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeZone 时区,默认东八区（Asia/Shanghai）
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
        if (array_key_exists("ScheduleType",$param) and $param["ScheduleType"] !== null) {
            $this->ScheduleType = $param["ScheduleType"];
        }

        if (array_key_exists("Day",$param) and $param["Day"] !== null) {
            $this->Day = $param["Day"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
