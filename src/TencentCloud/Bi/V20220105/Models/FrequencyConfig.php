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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时任务执行频率配置
 *
 * @method string getFrequency() 获取周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrequency(string $Frequency) 设置周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDates() 获取日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDates(array $Dates) 设置日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTime() 获取时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntervalTime() 获取间隔时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntervalTime(integer $IntervalTime) 设置间隔时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntervalTimeUnit() 获取1:SECOND,2:MINUTE,3:HOUR,4:DAY
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntervalTimeUnit(integer $IntervalTimeUnit) 设置1:SECOND,2:MINUTE,3:HOUR,4:DAY
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHours() 获取小时列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHours(array $Hours) 设置小时列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMinute() 获取分钟列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinute(array $Minute) 设置分钟列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class FrequencyConfig extends AbstractModel
{
    /**
     * @var string 周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Frequency;

    /**
     * @var array 日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dates;

    /**
     * @var string 时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var integer 间隔时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntervalTime;

    /**
     * @var integer 1:SECOND,2:MINUTE,3:HOUR,4:DAY
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntervalTimeUnit;

    /**
     * @var array 小时列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hours;

    /**
     * @var array 分钟列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Minute;

    /**
     * @param string $Frequency 周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Dates 日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Time 时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntervalTime 间隔时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntervalTimeUnit 1:SECOND,2:MINUTE,3:HOUR,4:DAY
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Hours 小时列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Minute 分钟列表
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
        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("Dates",$param) and $param["Dates"] !== null) {
            $this->Dates = $param["Dates"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("IntervalTimeUnit",$param) and $param["IntervalTimeUnit"] !== null) {
            $this->IntervalTimeUnit = $param["IntervalTimeUnit"];
        }

        if (array_key_exists("Hours",$param) and $param["Hours"] !== null) {
            $this->Hours = $param["Hours"];
        }

        if (array_key_exists("Minute",$param) and $param["Minute"] !== null) {
            $this->Minute = $param["Minute"];
        }
    }
}
