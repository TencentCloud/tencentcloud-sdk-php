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
 * 正则规则详情
 *
 * @method string getRuleName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStatus() 获取启用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(boolean $Status) 设置启用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExpressionList() 获取正则表达式列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpressionList(array $ExpressionList) 设置正则表达式列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleID() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleID(string $RuleID) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorUIN() 获取最近操作账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUIN(string $OperatorUIN) 设置最近操作账号
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegexpRuleInfo extends AbstractModel
{
    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var boolean 启用状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 正则表达式列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpressionList;

    /**
     * @var string 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleID;

    /**
     * @var string 最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 最近操作账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUIN;

    /**
     * @param string $RuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Status 启用状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExpressionList 正则表达式列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleID 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorUIN 最近操作账号
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpressionList",$param) and $param["ExpressionList"] !== null) {
            $this->ExpressionList = [];
            foreach ($param["ExpressionList"] as $key => $value){
                $obj = new WhiteListRegexpExpressionInfo();
                $obj->deserialize($value);
                array_push($this->ExpressionList, $obj);
            }
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperatorUIN",$param) and $param["OperatorUIN"] !== null) {
            $this->OperatorUIN = $param["OperatorUIN"];
        }
    }
}
