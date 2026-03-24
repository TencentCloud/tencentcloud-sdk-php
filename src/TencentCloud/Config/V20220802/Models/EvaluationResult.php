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
 * 评估结果
 *
 * @method string getResourceId() 获取资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceRegion() 获取资源地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceName() 获取资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigRuleId() 获取规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigRuleId(string $ConfigRuleId) 设置规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigRuleName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigRuleName(string $ConfigRuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompliancePackId() 获取合规包id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompliancePackId(string $CompliancePackId) 设置合规包id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskLevel() 获取风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method Annotation getAnnotation() 获取评估结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotation(Annotation $Annotation) 设置评估结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComplianceType() 获取合规类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplianceType(string $ComplianceType) 设置合规类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInvokingEventMessageType() 获取规则发起类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvokingEventMessageType(string $InvokingEventMessageType) 设置规则发起类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigRuleInvokedTime() 获取评估发起时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigRuleInvokedTime(string $ConfigRuleInvokedTime) 设置评估发起时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultRecordedTime() 获取评估实际时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultRecordedTime(string $ResultRecordedTime) 设置评估实际时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class EvaluationResult extends AbstractModel
{
    /**
     * @var string 资源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 资源地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRegion;

    /**
     * @var string 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @var string 规则id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigRuleId;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigRuleName;

    /**
     * @var string 合规包id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompliancePackId;

    /**
     * @var integer 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var Annotation 评估结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Annotation;

    /**
     * @var string 合规类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplianceType;

    /**
     * @var string 规则发起类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvokingEventMessageType;

    /**
     * @var string 评估发起时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigRuleInvokedTime;

    /**
     * @var string 评估实际时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultRecordedTime;

    /**
     * @param string $ResourceId 资源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceRegion 资源地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceName 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigRuleId 规则id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigRuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompliancePackId 合规包id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskLevel 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param Annotation $Annotation 评估结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComplianceType 合规类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InvokingEventMessageType 规则发起类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigRuleInvokedTime 评估发起时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultRecordedTime 评估实际时间
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
        }

        if (array_key_exists("ConfigRuleName",$param) and $param["ConfigRuleName"] !== null) {
            $this->ConfigRuleName = $param["ConfigRuleName"];
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Annotation",$param) and $param["Annotation"] !== null) {
            $this->Annotation = new Annotation();
            $this->Annotation->deserialize($param["Annotation"]);
        }

        if (array_key_exists("ComplianceType",$param) and $param["ComplianceType"] !== null) {
            $this->ComplianceType = $param["ComplianceType"];
        }

        if (array_key_exists("InvokingEventMessageType",$param) and $param["InvokingEventMessageType"] !== null) {
            $this->InvokingEventMessageType = $param["InvokingEventMessageType"];
        }

        if (array_key_exists("ConfigRuleInvokedTime",$param) and $param["ConfigRuleInvokedTime"] !== null) {
            $this->ConfigRuleInvokedTime = $param["ConfigRuleInvokedTime"];
        }

        if (array_key_exists("ResultRecordedTime",$param) and $param["ResultRecordedTime"] !== null) {
            $this->ResultRecordedTime = $param["ResultRecordedTime"];
        }
    }
}
