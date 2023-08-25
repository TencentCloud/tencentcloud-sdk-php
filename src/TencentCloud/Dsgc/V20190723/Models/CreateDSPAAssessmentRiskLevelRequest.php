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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDSPAAssessmentRiskLevel请求参数结构体
 *
 * @method string getDspaId() 获取dspa实例id
 * @method void setDspaId(string $DspaId) 设置dspa实例id
 * @method string getRiskLevelName() 获取风险等级名称
 * @method void setRiskLevelName(string $RiskLevelName) 设置风险等级名称
 * @method integer getIdentifyComplianceId() 获取识别模版
 * @method void setIdentifyComplianceId(integer $IdentifyComplianceId) 设置识别模版
 * @method array getRiskLevelRule() 获取风险等级矩阵
 * @method void setRiskLevelRule(array $RiskLevelRule) 设置风险等级矩阵
 * @method string getRiskLevelDescription() 获取风险等级的描述
 * @method void setRiskLevelDescription(string $RiskLevelDescription) 设置风险等级的描述
 */
class CreateDSPAAssessmentRiskLevelRequest extends AbstractModel
{
    /**
     * @var string dspa实例id
     */
    public $DspaId;

    /**
     * @var string 风险等级名称
     */
    public $RiskLevelName;

    /**
     * @var integer 识别模版
     */
    public $IdentifyComplianceId;

    /**
     * @var array 风险等级矩阵
     */
    public $RiskLevelRule;

    /**
     * @var string 风险等级的描述
     */
    public $RiskLevelDescription;

    /**
     * @param string $DspaId dspa实例id
     * @param string $RiskLevelName 风险等级名称
     * @param integer $IdentifyComplianceId 识别模版
     * @param array $RiskLevelRule 风险等级矩阵
     * @param string $RiskLevelDescription 风险等级的描述
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("RiskLevelName",$param) and $param["RiskLevelName"] !== null) {
            $this->RiskLevelName = $param["RiskLevelName"];
        }

        if (array_key_exists("IdentifyComplianceId",$param) and $param["IdentifyComplianceId"] !== null) {
            $this->IdentifyComplianceId = $param["IdentifyComplianceId"];
        }

        if (array_key_exists("RiskLevelRule",$param) and $param["RiskLevelRule"] !== null) {
            $this->RiskLevelRule = [];
            foreach ($param["RiskLevelRule"] as $key => $value){
                $obj = new RiskLevelMatrix();
                $obj->deserialize($value);
                array_push($this->RiskLevelRule, $obj);
            }
        }

        if (array_key_exists("RiskLevelDescription",$param) and $param["RiskLevelDescription"] !== null) {
            $this->RiskLevelDescription = $param["RiskLevelDescription"];
        }
    }
}
