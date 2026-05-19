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
 * @method string getRuleName() 获取<p>规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
 * @method integer getRiskLevel() 获取<p>风险等级</p>
 * @method void setRiskLevel(integer $RiskLevel) 设置<p>风险等级</p>
 * @method array getInputParameter() 获取<p>入参</p>
 * @method void setInputParameter(array $InputParameter) 设置<p>入参</p>
 * @method string getIdentifier() 获取<p>规则身份标识</p>
 * @method void setIdentifier(string $Identifier) 设置<p>规则身份标识</p>
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManagedRuleIdentifier() 获取<p>预设规则身份标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagedRuleIdentifier(string $ManagedRuleIdentifier) 设置<p>预设规则身份标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigRuleId() 获取<p>规则ID</p>
 * @method void setConfigRuleId(string $ConfigRuleId) 设置<p>规则ID</p>
 * @method string getCompliancePackId() 获取<p>合规包ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompliancePackId(string $CompliancePackId) 设置<p>合规包ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompliancePackRule extends AbstractModel
{
    /**
     * @var string <p>规则名称</p>
     */
    public $RuleName;

    /**
     * @var integer <p>风险等级</p>
     */
    public $RiskLevel;

    /**
     * @var array <p>入参</p>
     */
    public $InputParameter;

    /**
     * @var string <p>规则身份标识</p>
     */
    public $Identifier;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>预设规则身份标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagedRuleIdentifier;

    /**
     * @var string <p>规则ID</p>
     */
    public $ConfigRuleId;

    /**
     * @var string <p>合规包ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompliancePackId;

    /**
     * @param string $RuleName <p>规则名称</p>
     * @param integer $RiskLevel <p>风险等级</p>
     * @param array $InputParameter <p>入参</p>
     * @param string $Identifier <p>规则身份标识</p>
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManagedRuleIdentifier <p>预设规则身份标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigRuleId <p>规则ID</p>
     * @param string $CompliancePackId <p>合规包ID</p>
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
