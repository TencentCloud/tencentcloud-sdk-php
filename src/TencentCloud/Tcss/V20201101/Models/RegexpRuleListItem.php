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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 正则规则列表Item
 *
 * @method string getRuleID() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleID(string $RuleID) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEffectiveExpression() 获取生效表达式个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffectiveExpression(integer $EffectiveExpression) 设置生效表达式个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最新编辑时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最新编辑时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorUin() 获取最近编辑账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUin(string $OperatorUin) 设置最近编辑账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStatus() 获取启用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(boolean $Status) 设置启用状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegexpRuleListItem extends AbstractModel
{
    /**
     * @var string 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleID;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 生效表达式个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EffectiveExpression;

    /**
     * @var string 最新编辑时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 最近编辑账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUin;

    /**
     * @var boolean 启用状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $RuleID 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EffectiveExpression 生效表达式个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最新编辑时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorUin 最近编辑账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Status 启用状态
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

        if (array_key_exists("EffectiveExpression",$param) and $param["EffectiveExpression"] !== null) {
            $this->EffectiveExpression = $param["EffectiveExpression"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
