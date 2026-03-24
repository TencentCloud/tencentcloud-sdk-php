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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskLevel() 获取风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取规则状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置规则状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigRuleId() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigRuleId(string $ConfigRuleId) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComplianceResult() 获取评估结果
合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplianceResult(string $ComplianceResult) 设置评估结果
合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取关键字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置关键字
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInputParameter() 获取入参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputParameter(array $InputParameter) 设置入参
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSourceCondition() 获取参数格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceCondition(array $SourceCondition) 设置参数格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentifier() 获取规则标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentifier(string $Identifier) 设置规则标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateByType() 获取创建方式 user、compliancePack、system
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateByType(string $CreateByType) 设置创建方式 user、compliancePack、system
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getManageInputParameter() 获取参数描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManageInputParameter(array $ManageInputParameter) 设置参数描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComplianceConfigRule extends AbstractModel
{
    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var string 规则状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigRuleId;

    /**
     * @var string 评估结果
合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplianceResult;

    /**
     * @var array 关键字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var array 入参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputParameter;

    /**
     * @var array 参数格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceCondition;

    /**
     * @var string 规则标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Identifier;

    /**
     * @var string 创建方式 user、compliancePack、system
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateByType;

    /**
     * @var string 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 参数描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManageInputParameter;

    /**
     * @param string $RuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskLevel 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 规则状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigRuleId 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComplianceResult 评估结果
合规： 'COMPLIANT'
不合规： 'NON_COMPLIANT'
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 关键字
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InputParameter 入参
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SourceCondition 参数格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Identifier 规则标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateByType 创建方式 user、compliancePack、system
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ManageInputParameter 参数描述
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("InputParameter",$param) and $param["InputParameter"] !== null) {
            $this->InputParameter = [];
            foreach ($param["InputParameter"] as $key => $value){
                $obj = new InputParameter();
                $obj->deserialize($value);
                array_push($this->InputParameter, $obj);
            }
        }

        if (array_key_exists("SourceCondition",$param) and $param["SourceCondition"] !== null) {
            $this->SourceCondition = [];
            foreach ($param["SourceCondition"] as $key => $value){
                $obj = new SourceConditionForManage();
                $obj->deserialize($value);
                array_push($this->SourceCondition, $obj);
            }
        }

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("CreateByType",$param) and $param["CreateByType"] !== null) {
            $this->CreateByType = $param["CreateByType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ManageInputParameter",$param) and $param["ManageInputParameter"] !== null) {
            $this->ManageInputParameter = [];
            foreach ($param["ManageInputParameter"] as $key => $value){
                $obj = new InputParameterForManage();
                $obj->deserialize($value);
                array_push($this->ManageInputParameter, $obj);
            }
        }
    }
}
