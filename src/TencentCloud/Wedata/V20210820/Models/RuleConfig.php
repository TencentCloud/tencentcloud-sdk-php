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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则配置
 *
 * @method integer getRuleId() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConditionType() 获取规则检测范围类型 1.全表  2.条件扫描
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionType(integer $ConditionType) 设置规则检测范围类型 1.全表  2.条件扫描
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCondition() 获取检测范围表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCondition(string $Condition) 设置检测范围表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetCondition() 获取目标检测范围表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetCondition(string $TargetCondition) 设置目标检测范围表达式
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleConfig extends AbstractModel
{
    /**
     * @var integer 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var integer 规则检测范围类型 1.全表  2.条件扫描
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionType;

    /**
     * @var string 检测范围表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Condition;

    /**
     * @var string 目标检测范围表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetCondition;

    /**
     * @param integer $RuleId 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConditionType 规则检测范围类型 1.全表  2.条件扫描
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Condition 检测范围表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetCondition 目标检测范围表达式
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ConditionType",$param) and $param["ConditionType"] !== null) {
            $this->ConditionType = $param["ConditionType"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("TargetCondition",$param) and $param["TargetCondition"] !== null) {
            $this->TargetCondition = $param["TargetCondition"];
        }
    }
}
