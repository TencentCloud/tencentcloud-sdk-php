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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * JavaScript 注入规则。
 *
 * @method string getRuleId() 获取规则 ID。
 * @method void setRuleId(string $RuleId) 设置规则 ID。
 * @method string getName() 获取规则名称。
 * @method void setName(string $Name) 设置规则名称。
 * @method integer getPriority() 获取规则优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。
 * @method void setPriority(integer $Priority) 设置规则优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。
 * @method string getCondition() 获取匹配条件内容。需符合表达式语法，详细规范参见产品文档。
 * @method void setCondition(string $Condition) 设置匹配条件内容。需符合表达式语法，详细规范参见产品文档。
 * @method string getInjectJS() 获取JavaScript 注入选项。默认值为 run-attestations，取值有：
<li> no-injection: 不注入 JavaScript;</li>
<li> inject-sdk-only: 注入当前支持的所有认证方式的 SDK，当前支持：TC-RCE 和 TC-CAPTCHA。注意：若需执行认证检测，请配置挑战规则。</li>

 * @method void setInjectJS(string $InjectJS) 设置JavaScript 注入选项。默认值为 run-attestations，取值有：
<li> no-injection: 不注入 JavaScript;</li>
<li> inject-sdk-only: 注入当前支持的所有认证方式的 SDK，当前支持：TC-RCE 和 TC-CAPTCHA。注意：若需执行认证检测，请配置挑战规则。</li>
 */
class JSInjectionRule extends AbstractModel
{
    /**
     * @var string 规则 ID。
     */
    public $RuleId;

    /**
     * @var string 规则名称。
     */
    public $Name;

    /**
     * @var integer 规则优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。
     */
    public $Priority;

    /**
     * @var string 匹配条件内容。需符合表达式语法，详细规范参见产品文档。
     */
    public $Condition;

    /**
     * @var string JavaScript 注入选项。默认值为 run-attestations，取值有：
<li> no-injection: 不注入 JavaScript;</li>
<li> inject-sdk-only: 注入当前支持的所有认证方式的 SDK，当前支持：TC-RCE 和 TC-CAPTCHA。注意：若需执行认证检测，请配置挑战规则。</li>

     */
    public $InjectJS;

    /**
     * @param string $RuleId 规则 ID。
     * @param string $Name 规则名称。
     * @param integer $Priority 规则优先级，数值越小越优先执行，范围是 0 ~ 100，默认为 0。
     * @param string $Condition 匹配条件内容。需符合表达式语法，详细规范参见产品文档。
     * @param string $InjectJS JavaScript 注入选项。默认值为 run-attestations，取值有：
<li> no-injection: 不注入 JavaScript;</li>
<li> inject-sdk-only: 注入当前支持的所有认证方式的 SDK，当前支持：TC-RCE 和 TC-CAPTCHA。注意：若需执行认证检测，请配置挑战规则。</li>
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("InjectJS",$param) and $param["InjectJS"] !== null) {
            $this->InjectJS = $param["InjectJS"];
        }
    }
}
