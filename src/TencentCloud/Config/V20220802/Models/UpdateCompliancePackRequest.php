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
 * UpdateCompliancePack请求参数结构体
 *
 * @method string getCompliancePackName() 获取合规包名称
 * @method void setCompliancePackName(string $CompliancePackName) 设置合规包名称
 * @method integer getRiskLevel() 获取风险等级
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级
 * @method string getCompliancePackId() 获取合规包ID
 * @method void setCompliancePackId(string $CompliancePackId) 设置合规包ID
 * @method array getConfigRules() 获取合规包规则
 * @method void setConfigRules(array $ConfigRules) 设置合规包规则
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class UpdateCompliancePackRequest extends AbstractModel
{
    /**
     * @var string 合规包名称
     */
    public $CompliancePackName;

    /**
     * @var integer 风险等级
     */
    public $RiskLevel;

    /**
     * @var string 合规包ID
     */
    public $CompliancePackId;

    /**
     * @var array 合规包规则
     */
    public $ConfigRules;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param string $CompliancePackName 合规包名称
     * @param integer $RiskLevel 风险等级
     * @param string $CompliancePackId 合规包ID
     * @param array $ConfigRules 合规包规则
     * @param string $Description 描述
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
        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("ConfigRules",$param) and $param["ConfigRules"] !== null) {
            $this->ConfigRules = [];
            foreach ($param["ConfigRules"] as $key => $value){
                $obj = new CompliancePackRule();
                $obj->deserialize($value);
                array_push($this->ConfigRules, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
