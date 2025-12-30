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
 * @method string getRiskLevel() 获取风险等级别名。

等级描述如下：
<ul>
    <li>**HIGH** - 高风险</li> 
    <li>**NORMAL** - 风险</li>   
</ul>
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级别名。

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
 * @method integer getRiskLevelId() 获取风险等级id。1 为最高风险等级，0 为最低风险等级，从[2,n]数字越大风险等级逐渐降低。
 * @method void setRiskLevelId(integer $RiskLevelId) 设置风险等级id。1 为最高风险等级，0 为最低风险等级，从[2,n]数字越大风险等级逐渐降低。
 * @method array getRiskLabels() 获取风险标签
 * @method void setRiskLabels(array $RiskLabels) 设置风险标签
 * @method integer getRiskOrigin() 获取风险来源 0:模型标注的风险 1:人工标注的风险
 * @method void setRiskOrigin(integer $RiskOrigin) 设置风险来源 0:模型标注的风险 1:人工标注的风险
 * @method string getCreator() 获取创建人
 * @method void setCreator(string $Creator) 设置创建人
 * @method string getCreatorId() 获取创建人ID
 * @method void setCreatorId(string $CreatorId) 设置创建人ID
 * @method integer getCreatedOn() 获取创建时间
 * @method void setCreatedOn(integer $CreatedOn) 设置创建时间
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
     * @var string 风险等级别名。

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
     * @var integer 风险等级id。1 为最高风险等级，0 为最低风险等级，从[2,n]数字越大风险等级逐渐降低。
     */
    public $RiskLevelId;

    /**
     * @var array 风险标签
     */
    public $RiskLabels;

    /**
     * @var integer 风险来源 0:模型标注的风险 1:人工标注的风险
     */
    public $RiskOrigin;

    /**
     * @var string 创建人
     */
    public $Creator;

    /**
     * @var string 创建人ID
     */
    public $CreatorId;

    /**
     * @var integer 创建时间
     */
    public $CreatedOn;

    /**
     * @param string $RiskId 合同审查风险结果ID
     * @param string $RiskName 风险名称
     * @param string $RiskDescription 风险描述
     * @param string $RiskLevel 风险等级别名。

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
     * @param integer $RiskLevelId 风险等级id。1 为最高风险等级，0 为最低风险等级，从[2,n]数字越大风险等级逐渐降低。
     * @param array $RiskLabels 风险标签
     * @param integer $RiskOrigin 风险来源 0:模型标注的风险 1:人工标注的风险
     * @param string $Creator 创建人
     * @param string $CreatorId 创建人ID
     * @param integer $CreatedOn 创建时间
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

        if (array_key_exists("RiskLevelId",$param) and $param["RiskLevelId"] !== null) {
            $this->RiskLevelId = $param["RiskLevelId"];
        }

        if (array_key_exists("RiskLabels",$param) and $param["RiskLabels"] !== null) {
            $this->RiskLabels = $param["RiskLabels"];
        }

        if (array_key_exists("RiskOrigin",$param) and $param["RiskOrigin"] !== null) {
            $this->RiskOrigin = $param["RiskOrigin"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }
    }
}
