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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合规包规则信息
 *
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getRiskLevel() 获取风险等级
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级
 * @method array getInputParameter() 获取入参
 * @method void setInputParameter(array $InputParameter) 设置入参
 * @method string getIdentifier() 获取规则身份标识
 * @method void setIdentifier(string $Identifier) 设置规则身份标识
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManagedRuleIdentifier() 获取预设规则身份标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagedRuleIdentifier(string $ManagedRuleIdentifier) 设置预设规则身份标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigRuleId() 获取规则ID
 * @method void setConfigRuleId(string $ConfigRuleId) 设置规则ID
 * @method string getCompliancePackId() 获取合规包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompliancePackId(string $CompliancePackId) 设置合规包ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompliancePackRule extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 风险等级
     */
    public $RiskLevel;

    /**
     * @var array 入参
     */
    public $InputParameter;

    /**
     * @var string 规则身份标识
     */
    public $Identifier;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 预设规则身份标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagedRuleIdentifier;

    /**
     * @var string 规则ID
     */
    public $ConfigRuleId;

    /**
     * @var string 合规包ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompliancePackId;

    /**
     * @param string $RuleName 规则名称
     * @param integer $RiskLevel 风险等级
     * @param array $InputParameter 入参
     * @param string $Identifier 规则身份标识
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManagedRuleIdentifier 预设规则身份标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigRuleId 规则ID
     * @param string $CompliancePackId 合规包ID
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

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("InputParameter",$param) and $param["InputParameter"] !== null) {
            $this->InputParameter = [];
            foreach ($param["InputParameter"] as $key => $value){
                $obj = new InputParameter();
                $obj->deserialize($value);
                array_push($this->InputParameter, $obj);
            }
        }

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ManagedRuleIdentifier",$param) and $param["ManagedRuleIdentifier"] !== null) {
            $this->ManagedRuleIdentifier = $param["ManagedRuleIdentifier"];
        }

        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }
    }
}
