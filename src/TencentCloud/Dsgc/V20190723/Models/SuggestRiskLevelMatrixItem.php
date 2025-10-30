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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 建议生成的二位矩阵的第二层
 *
 * @method RiskMatrixLevel getSensitiveLevel() 获取分类分级等级
 * @method void setSensitiveLevel(RiskMatrixLevel $SensitiveLevel) 设置分类分级等级
 * @method RiskMatrixLevel getVulnerabilityLevel() 获取脆弱项等级
 * @method void setVulnerabilityLevel(RiskMatrixLevel $VulnerabilityLevel) 设置脆弱项等级
 * @method string getRiskName() 获取风险名
 * @method void setRiskName(string $RiskName) 设置风险名
 * @method float getRiskScore() 获取分数
 * @method void setRiskScore(float $RiskScore) 设置分数
 */
class SuggestRiskLevelMatrixItem extends AbstractModel
{
    /**
     * @var RiskMatrixLevel 分类分级等级
     */
    public $SensitiveLevel;

    /**
     * @var RiskMatrixLevel 脆弱项等级
     */
    public $VulnerabilityLevel;

    /**
     * @var string 风险名
     */
    public $RiskName;

    /**
     * @var float 分数
     */
    public $RiskScore;

    /**
     * @param RiskMatrixLevel $SensitiveLevel 分类分级等级
     * @param RiskMatrixLevel $VulnerabilityLevel 脆弱项等级
     * @param string $RiskName 风险名
     * @param float $RiskScore 分数
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
        if (array_key_exists("SensitiveLevel",$param) and $param["SensitiveLevel"] !== null) {
            $this->SensitiveLevel = new RiskMatrixLevel();
            $this->SensitiveLevel->deserialize($param["SensitiveLevel"]);
        }

        if (array_key_exists("VulnerabilityLevel",$param) and $param["VulnerabilityLevel"] !== null) {
            $this->VulnerabilityLevel = new RiskMatrixLevel();
            $this->VulnerabilityLevel->deserialize($param["VulnerabilityLevel"]);
        }

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskScore",$param) and $param["RiskScore"] !== null) {
            $this->RiskScore = $param["RiskScore"];
        }
    }
}
