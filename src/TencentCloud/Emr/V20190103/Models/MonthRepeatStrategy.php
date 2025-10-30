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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时伸缩每月重复任务策略
 *
 * @method string getExecuteAtTimeOfDay() 获取重复任务执行的具体时刻，例如"01:02:00"
 * @method void setExecuteAtTimeOfDay(string $ExecuteAtTimeOfDay) 设置重复任务执行的具体时刻，例如"01:02:00"
 * @method array getDaysOfMonthRange() 获取每月中的天数时间段描述，长度只能为2，例如[2,10]表示每月2-10号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDaysOfMonthRange(array $DaysOfMonthRange) 设置每月中的天数时间段描述，长度只能为2，例如[2,10]表示每月2-10号。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MonthRepeatStrategy extends AbstractModel
{
    /**
     * @var string 重复任务执行的具体时刻，例如"01:02:00"
     */
    public $ExecuteAtTimeOfDay;

    /**
     * @var array 每月中的天数时间段描述，长度只能为2，例如[2,10]表示每月2-10号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DaysOfMonthRange;

    /**
     * @param string $ExecuteAtTimeOfDay 重复任务执行的具体时刻，例如"01:02:00"
     * @param array $DaysOfMonthRange 每月中的天数时间段描述，长度只能为2，例如[2,10]表示每月2-10号。
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
        if (array_key_exists("ExecuteAtTimeOfDay",$param) and $param["ExecuteAtTimeOfDay"] !== null) {
            $this->ExecuteAtTimeOfDay = $param["ExecuteAtTimeOfDay"];
        }

        if (array_key_exists("DaysOfMonthRange",$param) and $param["DaysOfMonthRange"] !== null) {
            $this->DaysOfMonthRange = $param["DaysOfMonthRange"];
        }
    }
}
