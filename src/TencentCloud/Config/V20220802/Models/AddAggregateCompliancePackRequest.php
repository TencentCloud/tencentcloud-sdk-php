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
 * AddAggregateCompliancePack请求参数结构体
 *
 * @method array getConfigRules() 获取<p>合规包规则</p>
 * @method void setConfigRules(array $ConfigRules) 设置<p>合规包规则</p>
 * @method integer getRiskLevel() 获取<p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
 * @method void setRiskLevel(integer $RiskLevel) 设置<p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
 * @method string getCompliancePackName() 获取<p>合规包名称</p>
 * @method void setCompliancePackName(string $CompliancePackName) 设置<p>合规包名称</p>
 * @method string getAccountGroupId() 获取<p>账号组ID</p>
 * @method void setAccountGroupId(string $AccountGroupId) 设置<p>账号组ID</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 */
class AddAggregateCompliancePackRequest extends AbstractModel
{
    /**
     * @var array <p>合规包规则</p>
     */
    public $ConfigRules;

    /**
     * @var integer <p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>合规包名称</p>
     */
    public $CompliancePackName;

    /**
     * @var string <p>账号组ID</p>
     */
    public $AccountGroupId;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @param array $ConfigRules <p>合规包规则</p>
     * @param integer $RiskLevel <p>风险等级<br>1：高风险。<br>2：中风险。<br>3：低风险。</p>
     * @param string $CompliancePackName <p>合规包名称</p>
     * @param string $AccountGroupId <p>账号组ID</p>
     * @param string $Description <p>描述</p>
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
        if (array_key_exists("ConfigRules",$param) and $param["ConfigRules"] !== null) {
            $this->ConfigRules = [];
            foreach ($param["ConfigRules"] as $key => $value){
                $obj = new CompliancePackRule();
                $obj->deserialize($value);
                array_push($this->ConfigRules, $obj);
            }
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("CompliancePackName",$param) and $param["CompliancePackName"] !== null) {
            $this->CompliancePackName = $param["CompliancePackName"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
