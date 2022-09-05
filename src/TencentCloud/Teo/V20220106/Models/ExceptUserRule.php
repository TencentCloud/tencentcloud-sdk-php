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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 例外规则的配置，包含生效的条件，生效的范围
 *
 * @method integer getRuleID() 获取规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleID(integer $RuleID) 设置规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取规则名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取规则的处置方式。
1. skip 跳过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置规则的处置方式。
1. skip 跳过
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleStatus() 获取规则生效状态。
1. on 生效
2. off 失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleStatus(string $RuleStatus) 设置规则生效状态。
1. on 生效
2. off 失效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConditions() 获取匹配条件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditions(array $Conditions) 设置匹配条件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExceptUserRuleScope getScope() 获取规则生效的范围。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScope(ExceptUserRuleScope $Scope) 设置规则生效的范围。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRulePriority() 获取优先级。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRulePriority(integer $RulePriority) 设置优先级。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExceptUserRule extends AbstractModel
{
    /**
     * @var integer 规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleID;

    /**
     * @var string 规则名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var string 规则的处置方式。
1. skip 跳过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string 规则生效状态。
1. on 生效
2. off 失效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleStatus;

    /**
     * @var string 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 匹配条件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conditions;

    /**
     * @var ExceptUserRuleScope 规则生效的范围。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scope;

    /**
     * @var integer 优先级。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RulePriority;

    /**
     * @param integer $RuleID 规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 规则名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 规则的处置方式。
1. skip 跳过
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleStatus 规则生效状态。
1. on 生效
2. off 失效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Conditions 匹配条件。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExceptUserRuleScope $Scope 规则生效的范围。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RulePriority 优先级。
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new ExceptUserRuleCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = new ExceptUserRuleScope();
            $this->Scope->deserialize($param["Scope"]);
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }
    }
}
