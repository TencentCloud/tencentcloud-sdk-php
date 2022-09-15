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
 * 门神规则
 *
 * @method integer getRuleId() 获取规则id
 * @method void setRuleId(integer $RuleId) 设置规则id
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method string getRuleTypeName() 获取规则类型名
 * @method void setRuleTypeName(string $RuleTypeName) 设置规则类型名
 * @method string getRuleLevelDesc() 获取策略规则防护等级
 * @method void setRuleLevelDesc(string $RuleLevelDesc) 设置策略规则防护等级
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getStatus() 获取规则当前状态  block, allow
 * @method void setStatus(string $Status) 设置规则当前状态  block, allow
 * @method array getRuleTags() 获取规则标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTags(array $RuleTags) 设置规则标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleTypeDesc() 获取规则类型详细描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTypeDesc(string $RuleTypeDesc) 设置规则类型详细描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleTypeId() 获取规则类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTypeId(integer $RuleTypeId) 设置规则类型id
注意：此字段可能返回 null，表示取不到有效值。
 */
class ManagedRule extends AbstractModel
{
    /**
     * @var integer 规则id
     */
    public $RuleId;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var string 规则类型名
     */
    public $RuleTypeName;

    /**
     * @var string 策略规则防护等级
     */
    public $RuleLevelDesc;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 规则当前状态  block, allow
     */
    public $Status;

    /**
     * @var array 规则标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTags;

    /**
     * @var string 规则类型详细描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTypeDesc;

    /**
     * @var integer 规则类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTypeId;

    /**
     * @param integer $RuleId 规则id
     * @param string $Description 规则描述
     * @param string $RuleTypeName 规则类型名
     * @param string $RuleLevelDesc 策略规则防护等级
     * @param string $UpdateTime 更新时间
     * @param string $Status 规则当前状态  block, allow
     * @param array $RuleTags 规则标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleTypeDesc 规则类型详细描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleTypeId 规则类型id
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("RuleLevelDesc",$param) and $param["RuleLevelDesc"] !== null) {
            $this->RuleLevelDesc = $param["RuleLevelDesc"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleTags",$param) and $param["RuleTags"] !== null) {
            $this->RuleTags = $param["RuleTags"];
        }

        if (array_key_exists("RuleTypeDesc",$param) and $param["RuleTypeDesc"] !== null) {
            $this->RuleTypeDesc = $param["RuleTypeDesc"];
        }

        if (array_key_exists("RuleTypeId",$param) and $param["RuleTypeId"] !== null) {
            $this->RuleTypeId = $param["RuleTypeId"];
        }
    }
}
