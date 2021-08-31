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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 忽略的基线检测项信息
 *
 * @method string getRuleName() 获取基线检测项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置基线检测项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取基线检测项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置基线检测项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFix() 获取修复建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFix(string $Fix) 设置修复建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEffectHostCount() 获取影响主机数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffectHostCount(integer $EffectHostCount) 设置影响主机数
注意：此字段可能返回 null，表示取不到有效值。
 */
class IgnoreBaselineRule extends AbstractModel
{
    /**
     * @var string 基线检测项名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 基线检测项id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 修复建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fix;

    /**
     * @var integer 影响主机数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EffectHostCount;

    /**
     * @param string $RuleName 基线检测项名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 基线检测项id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Fix 修复建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EffectHostCount 影响主机数
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("EffectHostCount",$param) and $param["EffectHostCount"] !== null) {
            $this->EffectHostCount = $param["EffectHostCount"];
        }
    }
}
