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
 * Web 防护功能下的自定义规则。
 *
 * @method string getName() 获取<p>自定义规则的名称。</p>
 * @method void setName(string $Name) 设置<p>自定义规则的名称。</p>
 * @method string getCondition() 获取<p>自定义规则的具体内容，需符合表达式语法，详细规范参见 <a href="https://cloud.tencent.com/document/product/1552/125343">产品文档</a> 。</p>
 * @method void setCondition(string $Condition) 设置<p>自定义规则的具体内容，需符合表达式语法，详细规范参见 <a href="https://cloud.tencent.com/document/product/1552/125343">产品文档</a> 。</p>
 * @method SecurityAction getAction() 获取<p>自定义规则的处置动作。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li></ul>
 * @method void setAction(SecurityAction $Action) 设置<p>自定义规则的处置动作。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li></ul>
 * @method string getEnabled() 获取<p>自定义规则是否开启。取值有：<ul><li>on：开启；</li><li>off：关闭。</li></ul></p>
 * @method void setEnabled(string $Enabled) 设置<p>自定义规则是否开启。取值有：<ul><li>on：开启；</li><li>off：关闭。</li></ul></p>
 * @method string getId() 获取<p>自定义规则的 ID。通过规则 ID 可支持不同的规则配置操作：<ul><li>增加新规则：ID 为空或不指定 ID 参数；</li><li>修改已有规则：指定需要更新/修改的规则 ID；</li><li>删除已有规则：CustomRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></ul></p>
 * @method void setId(string $Id) 设置<p>自定义规则的 ID。通过规则 ID 可支持不同的规则配置操作：<ul><li>增加新规则：ID 为空或不指定 ID 参数；</li><li>修改已有规则：指定需要更新/修改的规则 ID；</li><li>删除已有规则：CustomRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></ul></p>
 * @method string getRuleType() 获取<p>自定义规则的类型。取值有：<ul><li>BasicAccessRule：基础访问管控；</li><li>PreciseMatchRule：精准匹配规则；</li><li>ManagedAccessRule：专家定制规则，仅出参支持。</li></ul>说明：当未指定 RuleType 时，默认为 <code>PreciseMatchRule</code>。</p>
 * @method void setRuleType(string $RuleType) 设置<p>自定义规则的类型。取值有：<ul><li>BasicAccessRule：基础访问管控；</li><li>PreciseMatchRule：精准匹配规则；</li><li>ManagedAccessRule：专家定制规则，仅出参支持。</li></ul>说明：当未指定 RuleType 时，默认为 <code>PreciseMatchRule</code>。</p>
 * @method integer getPriority() 获取<p>自定义规则的优先级，范围是 0 ~ 100，默认为 0，仅支持精准匹配规则（<code>PreciseMatchRule</code>）。</p>
 * @method void setPriority(integer $Priority) 设置<p>自定义规则的优先级，范围是 0 ~ 100，默认为 0，仅支持精准匹配规则（<code>PreciseMatchRule</code>）。</p>
 */
class CustomRule extends AbstractModel
{
    /**
     * @var string <p>自定义规则的名称。</p>
     */
    public $Name;

    /**
     * @var string <p>自定义规则的具体内容，需符合表达式语法，详细规范参见 <a href="https://cloud.tencent.com/document/product/1552/125343">产品文档</a> 。</p>
     */
    public $Condition;

    /**
     * @var SecurityAction <p>自定义规则的处置动作。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li></ul>
     */
    public $Action;

    /**
     * @var string <p>自定义规则是否开启。取值有：<ul><li>on：开启；</li><li>off：关闭。</li></ul></p>
     */
    public $Enabled;

    /**
     * @var string <p>自定义规则的 ID。通过规则 ID 可支持不同的规则配置操作：<ul><li>增加新规则：ID 为空或不指定 ID 参数；</li><li>修改已有规则：指定需要更新/修改的规则 ID；</li><li>删除已有规则：CustomRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></ul></p>
     */
    public $Id;

    /**
     * @var string <p>自定义规则的类型。取值有：<ul><li>BasicAccessRule：基础访问管控；</li><li>PreciseMatchRule：精准匹配规则；</li><li>ManagedAccessRule：专家定制规则，仅出参支持。</li></ul>说明：当未指定 RuleType 时，默认为 <code>PreciseMatchRule</code>。</p>
     */
    public $RuleType;

    /**
     * @var integer <p>自定义规则的优先级，范围是 0 ~ 100，默认为 0，仅支持精准匹配规则（<code>PreciseMatchRule</code>）。</p>
     */
    public $Priority;

    /**
     * @param string $Name <p>自定义规则的名称。</p>
     * @param string $Condition <p>自定义规则的具体内容，需符合表达式语法，详细规范参见 <a href="https://cloud.tencent.com/document/product/1552/125343">产品文档</a> 。</p>
     * @param SecurityAction $Action <p>自定义规则的处置动作。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 BlockIp、ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li></ul>
     * @param string $Enabled <p>自定义规则是否开启。取值有：<ul><li>on：开启；</li><li>off：关闭。</li></ul></p>
     * @param string $Id <p>自定义规则的 ID。通过规则 ID 可支持不同的规则配置操作：<ul><li>增加新规则：ID 为空或不指定 ID 参数；</li><li>修改已有规则：指定需要更新/修改的规则 ID；</li><li>删除已有规则：CustomRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></ul></p>
     * @param string $RuleType <p>自定义规则的类型。取值有：<ul><li>BasicAccessRule：基础访问管控；</li><li>PreciseMatchRule：精准匹配规则；</li><li>ManagedAccessRule：专家定制规则，仅出参支持。</li></ul>说明：当未指定 RuleType 时，默认为 <code>PreciseMatchRule</code>。</p>
     * @param integer $Priority <p>自定义规则的优先级，范围是 0 ~ 100，默认为 0，仅支持精准匹配规则（<code>PreciseMatchRule</code>）。</p>
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
