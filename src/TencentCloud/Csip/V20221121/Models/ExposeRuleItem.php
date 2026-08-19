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
 * 云边界规则信息
 *
 * @method string getRuleType() 获取规则类型
 * @method void setRuleType(string $RuleType) 设置规则类型
 * @method string getSeverity() 获取风险等级
 * @method void setSeverity(string $Severity) 设置风险等级
 * @method string getTitle() 获取规则名称
 * @method void setTitle(string $Title) 设置规则名称
 * @method string getFixAdvice() 获取修复建议
 * @method void setFixAdvice(string $FixAdvice) 设置修复建议
 */
class ExposeRuleItem extends AbstractModel
{
    /**
     * @var string 规则类型
     */
    public $RuleType;

    /**
     * @var string 风险等级
     */
    public $Severity;

    /**
     * @var string 规则名称
     */
    public $Title;

    /**
     * @var string 修复建议
     */
    public $FixAdvice;

    /**
     * @param string $RuleType 规则类型
     * @param string $Severity 风险等级
     * @param string $Title 规则名称
     * @param string $FixAdvice 修复建议
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("FixAdvice",$param) and $param["FixAdvice"] !== null) {
            $this->FixAdvice = $param["FixAdvice"];
        }
    }
}
