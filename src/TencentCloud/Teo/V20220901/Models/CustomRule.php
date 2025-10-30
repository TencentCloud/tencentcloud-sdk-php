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
 * Web安全的自定义规则
 *
 * @method string getName() 获取自定义规则的名称。
 * @method void setName(string $Name) 设置自定义规则的名称。
 * @method string getCondition() 获取自定义规则的具体内容，需符合表达式语法，详细规范参见产品文档。
 * @method void setCondition(string $Condition) 设置自定义规则的具体内容，需符合表达式语法，详细规范参见产品文档。
 * @method SecurityAction getAction() 获取自定义规则的执行动作。	SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>ReturnCustomPage：使用指定页面拦截；</li><li>Redirect：重定向至 URL；</li><li>BlockIP：IP 封禁；</li><li>JSChallenge：JavaScript 挑战；</li><li>ManagedChallenge：托管挑战；</li><li>Allow：放行。</li>
 * @method void setAction(SecurityAction $Action) 设置自定义规则的执行动作。	SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>ReturnCustomPage：使用指定页面拦截；</li><li>Redirect：重定向至 URL；</li><li>BlockIP：IP 封禁；</li><li>JSChallenge：JavaScript 挑战；</li><li>ManagedChallenge：托管挑战；</li><li>Allow：放行。</li>
 * @method string getEnabled() 获取自定义规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li>
 * @method void setEnabled(string $Enabled) 设置自定义规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li>
 * @method string getId() 获取自定义规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> - 增加新规则：ID 为空或不指定 ID 参数；<br> - 修改已有规则：指定需要更新/修改的规则 ID；<br> - 删除已有规则：CustomRules 参数中，Rules 列表中未包含的已有规则将被删除。
 * @method void setId(string $Id) 设置自定义规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> - 增加新规则：ID 为空或不指定 ID 参数；<br> - 修改已有规则：指定需要更新/修改的规则 ID；<br> - 删除已有规则：CustomRules 参数中，Rules 列表中未包含的已有规则将被删除。
 * @method string getRuleType() 获取自定义规则的类型。取值有：<li>BasicAccessRule：基础访问管控；</li><li>PreciseMatchRule：精准匹配规则，默认；</li><li>ManagedAccessRule：专家定制规则，仅出参。</li><br/>默认为PreciseMatchRule。
 * @method void setRuleType(string $RuleType) 设置自定义规则的类型。取值有：<li>BasicAccessRule：基础访问管控；</li><li>PreciseMatchRule：精准匹配规则，默认；</li><li>ManagedAccessRule：专家定制规则，仅出参。</li><br/>默认为PreciseMatchRule。
 * @method integer getPriority() 获取自定义规则的优先级，范围是 0 ~ 100，默认为 0，仅支持精准匹配规则（PreciseMatchRule）。
 * @method void setPriority(integer $Priority) 设置自定义规则的优先级，范围是 0 ~ 100，默认为 0，仅支持精准匹配规则（PreciseMatchRule）。
 */
class CustomRule extends AbstractModel
{
    /**
     * @var string 自定义规则的名称。
     */
    public $Name;

    /**
     * @var string 自定义规则的具体内容，需符合表达式语法，详细规范参见产品文档。
     */
    public $Condition;

    /**
     * @var SecurityAction 自定义规则的执行动作。	SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>ReturnCustomPage：使用指定页面拦截；</li><li>Redirect：重定向至 URL；</li><li>BlockIP：IP 封禁；</li><li>JSChallenge：JavaScript 挑战；</li><li>ManagedChallenge：托管挑战；</li><li>Allow：放行。</li>
     */
    public $Action;

    /**
     * @var string 自定义规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li>
     */
    public $Enabled;

    /**
     * @var string 自定义规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> - 增加新规则：ID 为空或不指定 ID 参数；<br> - 修改已有规则：指定需要更新/修改的规则 ID；<br> - 删除已有规则：CustomRules 参数中，Rules 列表中未包含的已有规则将被删除。
     */
    public $Id;

    /**
     * @var string 自定义规则的类型。取值有：<li>BasicAccessRule：基础访问管控；</li><li>PreciseMatchRule：精准匹配规则，默认；</li><li>ManagedAccessRule：专家定制规则，仅出参。</li><br/>默认为PreciseMatchRule。
     */
    public $RuleType;

    /**
     * @var integer 自定义规则的优先级，范围是 0 ~ 100，默认为 0，仅支持精准匹配规则（PreciseMatchRule）。
     */
    public $Priority;

    /**
     * @param string $Name 自定义规则的名称。
     * @param string $Condition 自定义规则的具体内容，需符合表达式语法，详细规范参见产品文档。
     * @param SecurityAction $Action 自定义规则的执行动作。	SecurityAction 的 Name 取值支持：<li>Deny：拦截；</li><li>Monitor：观察；</li><li>ReturnCustomPage：使用指定页面拦截；</li><li>Redirect：重定向至 URL；</li><li>BlockIP：IP 封禁；</li><li>JSChallenge：JavaScript 挑战；</li><li>ManagedChallenge：托管挑战；</li><li>Allow：放行。</li>
     * @param string $Enabled 自定义规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li>
     * @param string $Id 自定义规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> - 增加新规则：ID 为空或不指定 ID 参数；<br> - 修改已有规则：指定需要更新/修改的规则 ID；<br> - 删除已有规则：CustomRules 参数中，Rules 列表中未包含的已有规则将被删除。
     * @param string $RuleType 自定义规则的类型。取值有：<li>BasicAccessRule：基础访问管控；</li><li>PreciseMatchRule：精准匹配规则，默认；</li><li>ManagedAccessRule：专家定制规则，仅出参。</li><br/>默认为PreciseMatchRule。
     * @param integer $Priority 自定义规则的优先级，范围是 0 ~ 100，默认为 0，仅支持精准匹配规则（PreciseMatchRule）。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
