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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 阈值波动预警信息
 *
 * @method string getWarnType() 获取ACTUAL 实际金额，FORECAST 预测金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarnType(string $WarnType) 设置ACTUAL 实际金额，FORECAST 预测金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThreshold() 获取波动阈值（大于等于0）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreshold(string $Threshold) 设置波动阈值（大于等于0）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetaType() 获取告警类型：chain 环比，yoy 同比，fix 固定值
（支持类型：日环比 chain day，日同比周维度 chain weekday，日同比月维度 yoy  day，日固定值 fix day，月环比 chain month，月固定值 fix month）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaType(string $MetaType) 设置告警类型：chain 环比，yoy 同比，fix 固定值
（支持类型：日环比 chain day，日同比周维度 chain weekday，日同比月维度 yoy  day，日固定值 fix day，月环比 chain month，月固定值 fix month）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPeriodType() 获取告警维度：day 日，month 月，weekday 周
（支持类型：日环比 chain day，日同比周维度 chain weekday，日同比月维度 yoy  day，日固定值 fix day，月环比 chain month，月固定值 fix month）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodType(string $PeriodType) 设置告警维度：day 日，month 月，weekday 周
（支持类型：日环比 chain day，日同比周维度 chain weekday，日同比月维度 yoy  day，日固定值 fix day，月环比 chain month，月固定值 fix month）
注意：此字段可能返回 null，表示取不到有效值。
 */
class WaveThresholdForm extends AbstractModel
{
    /**
     * @var string ACTUAL 实际金额，FORECAST 预测金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarnType;

    /**
     * @var string 波动阈值（大于等于0）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Threshold;

    /**
     * @var string 告警类型：chain 环比，yoy 同比，fix 固定值
（支持类型：日环比 chain day，日同比周维度 chain weekday，日同比月维度 yoy  day，日固定值 fix day，月环比 chain month，月固定值 fix month）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaType;

    /**
     * @var string 告警维度：day 日，month 月，weekday 周
（支持类型：日环比 chain day，日同比周维度 chain weekday，日同比月维度 yoy  day，日固定值 fix day，月环比 chain month，月固定值 fix month）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodType;

    /**
     * @param string $WarnType ACTUAL 实际金额，FORECAST 预测金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Threshold 波动阈值（大于等于0）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetaType 告警类型：chain 环比，yoy 同比，fix 固定值
（支持类型：日环比 chain day，日同比周维度 chain weekday，日同比月维度 yoy  day，日固定值 fix day，月环比 chain month，月固定值 fix month）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PeriodType 告警维度：day 日，month 月，weekday 周
（支持类型：日环比 chain day，日同比周维度 chain weekday，日同比月维度 yoy  day，日固定值 fix day，月环比 chain month，月固定值 fix month）
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
        if (array_key_exists("WarnType",$param) and $param["WarnType"] !== null) {
            $this->WarnType = $param["WarnType"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }
    }
}
