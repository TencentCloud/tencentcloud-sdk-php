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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 七层转发规则行为信息
 *
 * @method string getRuleActionType() 获取七层转发规则行为类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleActionType(string $RuleActionType) 设置七层转发规则行为类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleActionValue() 获取七层转发规则行为值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleActionValue(string $RuleActionValue) 设置七层转发规则行为值
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleAction extends AbstractModel
{
    /**
     * @var string 七层转发规则行为类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleActionType;

    /**
     * @var string 七层转发规则行为值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleActionValue;

    /**
     * @param string $RuleActionType 七层转发规则行为类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleActionValue 七层转发规则行为值
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
        if (array_key_exists("RuleActionType",$param) and $param["RuleActionType"] !== null) {
            $this->RuleActionType = $param["RuleActionType"];
        }

        if (array_key_exists("RuleActionValue",$param) and $param["RuleActionValue"] !== null) {
            $this->RuleActionValue = $param["RuleActionValue"];
        }
    }
}
