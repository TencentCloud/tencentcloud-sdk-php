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
 * 批量创建规则时的单条数据创建结果
 *
 * @method string getMsg() 获取操作结果文案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置操作结果文案
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSuccess() 获取操作结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccess(boolean $Success) 设置操作结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取规则名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置规则名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupId() 获取规则组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleGroupTableId() 获取本地表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleGroupTableId(integer $RuleGroupTableId) 设置本地表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则id
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityRuleCreateResult extends AbstractModel
{
    /**
     * @var string 操作结果文案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var boolean 操作结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Success;

    /**
     * @var string 规则名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 规则组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupId;

    /**
     * @var integer 本地表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleGroupTableId;

    /**
     * @var integer 规则id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @param string $Msg 操作结果文案
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Success 操作结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 规则名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupId 规则组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleGroupTableId 本地表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 规则id
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
        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("RuleGroupTableId",$param) and $param["RuleGroupTableId"] !== null) {
            $this->RuleGroupTableId = $param["RuleGroupTableId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
