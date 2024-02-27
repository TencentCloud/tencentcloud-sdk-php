<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 定时扩容每周重复任务策略
 *
 * @method string getExecuteAtTimeOfDay() 获取重复任务执行的具体时刻，例如"01:02:00"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteAtTimeOfDay(string $ExecuteAtTimeOfDay) 设置重复任务执行的具体时刻，例如"01:02:00"
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDaysOfWeek() 获取每周几的数字描述，例如，[1,3,4]表示每周周一、周三、周四。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDaysOfWeek(array $DaysOfWeek) 设置每周几的数字描述，例如，[1,3,4]表示每周周一、周三、周四。
注意：此字段可能返回 null，表示取不到有效值。
 */
class WeekRepeatStrategy extends AbstractModel
{
    /**
     * @var string 重复任务执行的具体时刻，例如"01:02:00"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteAtTimeOfDay;

    /**
     * @var array 每周几的数字描述，例如，[1,3,4]表示每周周一、周三、周四。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DaysOfWeek;

    /**
     * @param string $ExecuteAtTimeOfDay 重复任务执行的具体时刻，例如"01:02:00"
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DaysOfWeek 每周几的数字描述，例如，[1,3,4]表示每周周一、周三、周四。
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

        if (array_key_exists("DaysOfWeek",$param) and $param["DaysOfWeek"] !== null) {
            $this->DaysOfWeek = $param["DaysOfWeek"];
        }
    }
}
