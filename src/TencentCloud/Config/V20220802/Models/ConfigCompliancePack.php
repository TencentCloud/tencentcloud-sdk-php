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
 * 用户合规包信息
 *
 * @method string getStatus() 获取合规包状态
 * @method void setStatus(string $Status) 设置合规包状态
 * @method string getCompliancePackId() 获取合规包ID
 * @method void setCompliancePackId(string $CompliancePackId) 设置合规包ID
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompliancePackName() 获取合规包名称
 * @method void setCompliancePackName(string $CompliancePackName) 设置合规包名称
 * @method integer getRiskLevel() 获取风险等级
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级
 * @method string getComplianceResult() 获取评估结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplianceResult(string $ComplianceResult) 设置评估结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method array getNoCompliantNames() 获取不合规规则名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoCompliantNames(array $NoCompliantNames) 设置不合规规则名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleCount() 获取合规包规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleCount(integer $RuleCount) 设置合规包规则数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConfigCompliancePack extends AbstractModel
{
    /**
     * @var string 合规包状态
     */
    public $Status;

    /**
     * @var string 合规包ID
     */
    public $CompliancePackId;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 合规包名称
     */
    public $CompliancePackName;

    /**
     * @var integer 风险等级
     */
    public $RiskLevel;

    /**
     * @var string 评估结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplianceResult;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var array 不合规规则名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoCompliantNames;

    /**
     * @var integer 合规包规则数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleCount;

    /**
     * @param string $Status 合规包状态
     * @param string $CompliancePackId 合规包ID
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompliancePackName 合规包名称
     * @param integer $RiskLevel 风险等级
     * @param string $ComplianceResult 评估结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param array $NoCompliantNames 不合规规则名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleCount 合规包规则数
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("NoCompliantNames",$param) and $param["NoCompliantNames"] !== null) {
            $this->NoCompliantNames = $param["NoCompliantNames"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }
    }
}
