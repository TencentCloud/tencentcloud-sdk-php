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
 * 系统合规包信息
 *
 * @method string getCompliancePackId() 获取合规包ID
 * @method void setCompliancePackId(string $CompliancePackId) 设置合规包ID
 * @method string getCompliancePackName() 获取名称
 * @method void setCompliancePackName(string $CompliancePackName) 设置名称
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskLevel() 获取合规包风险等级1：高风险。
2：中风险。
3：低风险。
 * @method void setRiskLevel(integer $RiskLevel) 设置合规包风险等级1：高风险。
2：中风险。
3：低风险。
 * @method array getConfigRules() 获取合规包规则信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigRules(array $ConfigRules) 设置合规包规则信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class SystemCompliancePack extends AbstractModel
{
    /**
     * @var string 合规包ID
     */
    public $CompliancePackId;

    /**
     * @var string 名称
     */
    public $CompliancePackName;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 合规包风险等级1：高风险。
2：中风险。
3：低风险。
     */
    public $RiskLevel;

    /**
     * @var array 合规包规则信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigRules;

    /**
     * @param string $CompliancePackId 合规包ID
     * @param string $CompliancePackName 名称
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskLevel 合规包风险等级1：高风险。
2：中风险。
3：低风险。
     * @param array $ConfigRules 合规包规则信息
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
        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ConfigRules",$param) and $param["ConfigRules"] !== null) {
            $this->ConfigRules = [];
            foreach ($param["ConfigRules"] as $key => $value){
                $obj = new CompliancePackRuleForManage();
                $obj->deserialize($value);
                array_push($this->ConfigRules, $obj);
            }
        }
    }
}
