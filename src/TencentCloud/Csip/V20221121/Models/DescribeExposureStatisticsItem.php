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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云边界风险待治理风险信息
 *
 * @method string getTitle() 获取风险标题
 * @method void setTitle(string $Title) 设置风险标题
 * @method string getSeverity() 获取风险等级
 * @method void setSeverity(string $Severity) 设置风险等级
 * @method string getRuleType() 获取风险类型
 * @method void setRuleType(string $RuleType) 设置风险类型
 * @method integer getRiskCount() 获取关联风险数量
 * @method void setRiskCount(integer $RiskCount) 设置关联风险数量
 */
class DescribeExposureStatisticsItem extends AbstractModel
{
    /**
     * @var string 风险标题
     */
    public $Title;

    /**
     * @var string 风险等级
     */
    public $Severity;

    /**
     * @var string 风险类型
     */
    public $RuleType;

    /**
     * @var integer 关联风险数量
     */
    public $RiskCount;

    /**
     * @param string $Title 风险标题
     * @param string $Severity 风险等级
     * @param string $RuleType 风险类型
     * @param integer $RiskCount 关联风险数量
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }
    }
}
