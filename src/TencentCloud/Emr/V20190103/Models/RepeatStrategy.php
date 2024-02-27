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
 * 定时伸缩任务策略
 *
 * @method string getRepeatType() 获取取值范围"DAY","DOW","DOM","NONE"，分别表示按天重复、按周重复、按月重复和一次执行。
 * @method void setRepeatType(string $RepeatType) 设置取值范围"DAY","DOW","DOM","NONE"，分别表示按天重复、按周重复、按月重复和一次执行。
 * @method DayRepeatStrategy getDayRepeat() 获取按天重复规则，当RepeatType为"DAY"时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDayRepeat(DayRepeatStrategy $DayRepeat) 设置按天重复规则，当RepeatType为"DAY"时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method WeekRepeatStrategy getWeekRepeat() 获取按周重复规则，当RepeatType为"DOW"时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeekRepeat(WeekRepeatStrategy $WeekRepeat) 设置按周重复规则，当RepeatType为"DOW"时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method MonthRepeatStrategy getMonthRepeat() 获取按月重复规则，当RepeatType为"DOM"时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonthRepeat(MonthRepeatStrategy $MonthRepeat) 设置按月重复规则，当RepeatType为"DOM"时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method NotRepeatStrategy getNotRepeat() 获取一次执行规则，当RepeatType为"NONE"时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotRepeat(NotRepeatStrategy $NotRepeat) 设置一次执行规则，当RepeatType为"NONE"时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpire() 获取规则过期时间，超过该时间后，规则将自动置为暂停状态，形式为"2020-07-23 00:00:00"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpire(string $Expire) 设置规则过期时间，超过该时间后，规则将自动置为暂停状态，形式为"2020-07-23 00:00:00"。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RepeatStrategy extends AbstractModel
{
    /**
     * @var string 取值范围"DAY","DOW","DOM","NONE"，分别表示按天重复、按周重复、按月重复和一次执行。
     */
    public $RepeatType;

    /**
     * @var DayRepeatStrategy 按天重复规则，当RepeatType为"DAY"时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DayRepeat;

    /**
     * @var WeekRepeatStrategy 按周重复规则，当RepeatType为"DOW"时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeekRepeat;

    /**
     * @var MonthRepeatStrategy 按月重复规则，当RepeatType为"DOM"时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonthRepeat;

    /**
     * @var NotRepeatStrategy 一次执行规则，当RepeatType为"NONE"时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotRepeat;

    /**
     * @var string 规则过期时间，超过该时间后，规则将自动置为暂停状态，形式为"2020-07-23 00:00:00"。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expire;

    /**
     * @param string $RepeatType 取值范围"DAY","DOW","DOM","NONE"，分别表示按天重复、按周重复、按月重复和一次执行。
     * @param DayRepeatStrategy $DayRepeat 按天重复规则，当RepeatType为"DAY"时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param WeekRepeatStrategy $WeekRepeat 按周重复规则，当RepeatType为"DOW"时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param MonthRepeatStrategy $MonthRepeat 按月重复规则，当RepeatType为"DOM"时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param NotRepeatStrategy $NotRepeat 一次执行规则，当RepeatType为"NONE"时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Expire 规则过期时间，超过该时间后，规则将自动置为暂停状态，形式为"2020-07-23 00:00:00"。
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
        if (array_key_exists("RepeatType",$param) and $param["RepeatType"] !== null) {
            $this->RepeatType = $param["RepeatType"];
        }

        if (array_key_exists("DayRepeat",$param) and $param["DayRepeat"] !== null) {
            $this->DayRepeat = new DayRepeatStrategy();
            $this->DayRepeat->deserialize($param["DayRepeat"]);
        }

        if (array_key_exists("WeekRepeat",$param) and $param["WeekRepeat"] !== null) {
            $this->WeekRepeat = new WeekRepeatStrategy();
            $this->WeekRepeat->deserialize($param["WeekRepeat"]);
        }

        if (array_key_exists("MonthRepeat",$param) and $param["MonthRepeat"] !== null) {
            $this->MonthRepeat = new MonthRepeatStrategy();
            $this->MonthRepeat->deserialize($param["MonthRepeat"]);
        }

        if (array_key_exists("NotRepeat",$param) and $param["NotRepeat"] !== null) {
            $this->NotRepeat = new NotRepeatStrategy();
            $this->NotRepeat->deserialize($param["NotRepeat"]);
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }
    }
}
