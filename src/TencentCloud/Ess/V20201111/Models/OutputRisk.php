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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同审查任务识别出的风险结果信息
 *
 * @method string getRiskId() 获取合同审查风险结果ID
 * @method void setRiskId(string $RiskId) 设置合同审查风险结果ID
 * @method string getRiskName() 获取风险名称
 * @method void setRiskName(string $RiskName) 设置风险名称
 * @method string getRiskDescription() 获取风险描述
 * @method void setRiskDescription(string $RiskDescription) 设置风险描述
 * @method string getRiskLevel() 获取风险等级。

等级描述如下：
<ul>
    <li>**HIGH** - 高风险</li> 
    <li>**NORMAL** - 风险</li>   
</ul>
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级。

等级描述如下：
<ul>
    <li>**HIGH** - 高风险</li> 
    <li>**NORMAL** - 风险</li>   
</ul>
 * @method string getRiskAdvice() 获取风险建议
 * @method void setRiskAdvice(string $RiskAdvice) 设置风险建议
 * @method array getRiskPresentation() 获取风险评估
 * @method void setRiskPresentation(array $RiskPresentation) 设置风险评估
 * @method string getContent() 获取PDF风险原文内容
 * @method void setContent(string $Content) 设置PDF风险原文内容
 * @method array getPositions() 获取审查出的PDF段落位置信息
 * @method void setPositions(array $Positions) 设置审查出的PDF段落位置信息
 * @method string getRiskBasis() 获取审查依据
 * @method void setRiskBasis(string $RiskBasis) 设置审查依据
 */
class OutputRisk extends AbstractModel
{
    /**
     * @var string 合同审查风险结果ID
     */
    public $RiskId;

    /**
     * @var string 风险名称
     */
    public $RiskName;

    /**
     * @var string 风险描述
     */
    public $RiskDescription;

    /**
     * @var string 风险等级。

等级描述如下：
<ul>
    <li>**HIGH** - 高风险</li> 
    <li>**NORMAL** - 风险</li>   
</ul>
     */
    public $RiskLevel;

    /**
     * @var string 风险建议
     */
    public $RiskAdvice;

    /**
     * @var array 风险评估
     */
    public $RiskPresentation;

    /**
     * @var string PDF风险原文内容
     */
    public $Content;

    /**
     * @var array 审查出的PDF段落位置信息
     */
    public $Positions;

    /**
     * @var string 审查依据
     */
    public $RiskBasis;

    /**
     * @param string $RiskId 合同审查风险结果ID
     * @param string $RiskName 风险名称
     * @param string $RiskDescription 风险描述
     * @param string $RiskLevel 风险等级。

等级描述如下：
<ul>
    <li>**HIGH** - 高风险</li> 
    <li>**NORMAL** - 风险</li>   
</ul>
     * @param string $RiskAdvice 风险建议
     * @param array $RiskPresentation 风险评估
     * @param string $Content PDF风险原文内容
     * @param array $Positions 审查出的PDF段落位置信息
     * @param string $RiskBasis 审查依据
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
        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskDescription",$param) and $param["RiskDescription"] !== null) {
            $this->RiskDescription = $param["RiskDescription"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskAdvice",$param) and $param["RiskAdvice"] !== null) {
            $this->RiskAdvice = $param["RiskAdvice"];
        }

        if (array_key_exists("RiskPresentation",$param) and $param["RiskPresentation"] !== null) {
            $this->RiskPresentation = $param["RiskPresentation"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Positions",$param) and $param["Positions"] !== null) {
            $this->Positions = [];
            foreach ($param["Positions"] as $key => $value){
                $obj = new PositionInfo();
                $obj->deserialize($value);
                array_push($this->Positions, $obj);
            }
        }

        if (array_key_exists("RiskBasis",$param) and $param["RiskBasis"] !== null) {
            $this->RiskBasis = $param["RiskBasis"];
        }
    }
}
