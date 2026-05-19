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
 * @method string getStatus() 获取<p>合规包状态</p>
 * @method void setStatus(string $Status) 设置<p>合规包状态</p>
 * @method string getCompliancePackId() 获取<p>合规包ID</p>
 * @method void setCompliancePackId(string $CompliancePackId) 设置<p>合规包ID</p>
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompliancePackName() 获取<p>合规包名称</p>
 * @method void setCompliancePackName(string $CompliancePackName) 设置<p>合规包名称</p>
 * @method integer getRiskLevel() 获取<p>风险等级</p>
 * @method void setRiskLevel(integer $RiskLevel) 设置<p>风险等级</p>
 * @method string getComplianceResult() 获取<p>评估结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplianceResult(string $ComplianceResult) 设置<p>评估结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method array getNoCompliantNames() 获取<p>不合规规则名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoCompliantNames(array $NoCompliantNames) 设置<p>不合规规则名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleCount() 获取<p>合规包规则数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleCount(integer $RuleCount) 设置<p>合规包规则数</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConfigCompliancePack extends AbstractModel
{
    /**
     * @var string <p>合规包状态</p>
     */
    public $Status;

    /**
     * @var string <p>合规包ID</p>
     */
    public $CompliancePackId;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>合规包名称</p>
     */
    public $CompliancePackName;

    /**
     * @var integer <p>风险等级</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>评估结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplianceResult;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var array <p>不合规规则名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoCompliantNames;

    /**
     * @var integer <p>合规包规则数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleCount;

    /**
     * @param string $Status <p>合规包状态</p>
     * @param string $CompliancePackId <p>合规包ID</p>
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompliancePackName <p>合规包名称</p>
     * @param integer $RiskLevel <p>风险等级</p>
     * @param string $ComplianceResult <p>评估结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param array $NoCompliantNames <p>不合规规则名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleCount <p>合规包规则数</p>
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
