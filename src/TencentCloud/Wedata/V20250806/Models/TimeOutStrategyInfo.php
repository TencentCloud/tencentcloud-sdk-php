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
 * 告警超时配置规则信息
 *
 * @method integer getRuleType() 获取超时告警超时配置：

1.预计运行耗时超时，2.预计完成时间超时，3.预计等待调度耗时超时，4.预计周期内完成但实际未完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(integer $RuleType) 设置超时告警超时配置：

1.预计运行耗时超时，2.预计完成时间超时，3.预计等待调度耗时超时，4.预计周期内完成但实际未完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取超时值配置类型

1--指定值
2--平均值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置超时值配置类型

1--指定值
2--平均值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHour() 获取超时指定值小时， 默认 为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHour(integer $Hour) 设置超时指定值小时， 默认 为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMin() 获取超时指定值分钟， 默认为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMin(integer $Min) 设置超时指定值分钟， 默认为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取超时时间对应的时区配置， 如 UTC+7, 默认为UTC+8
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置超时时间对应的时区配置， 如 UTC+7, 默认为UTC+8
注意：此字段可能返回 null，表示取不到有效值。
 */
class TimeOutStrategyInfo extends AbstractModel
{
    /**
     * @var integer 超时告警超时配置：

1.预计运行耗时超时，2.预计完成时间超时，3.预计等待调度耗时超时，4.预计周期内完成但实际未完成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var integer 超时值配置类型

1--指定值
2--平均值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 超时指定值小时， 默认 为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hour;

    /**
     * @var integer 超时指定值分钟， 默认为1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Min;

    /**
     * @var string 超时时间对应的时区配置， 如 UTC+7, 默认为UTC+8
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @param integer $RuleType 超时告警超时配置：

1.预计运行耗时超时，2.预计完成时间超时，3.预计等待调度耗时超时，4.预计周期内完成但实际未完成
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 超时值配置类型

1--指定值
2--平均值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Hour 超时指定值小时， 默认 为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Min 超时指定值分钟， 默认为1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone 超时时间对应的时区配置， 如 UTC+7, 默认为UTC+8
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }
    }
}
