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
 * Web安全的例外规则
 *
 * @method string getId() 获取<p>例外规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：ExceptionRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></p>
 * @method void setId(string $Id) 设置<p>例外规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：ExceptionRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></p>
 * @method string getName() 获取<p>例外规则的名称。</p>
 * @method void setName(string $Name) 设置<p>例外规则的名称。</p>
 * @method string getCondition() 获取<p>例外规则的具体内容，需符合表达式语法，详细规范参见产品文档。</p>
 * @method void setCondition(string $Condition) 设置<p>例外规则的具体内容，需符合表达式语法，详细规范参见产品文档。</p>
 * @method string getSkipScope() 获取<p>例外规则执行选项，取值有：<li>WebSecurityModules: 指定例外规则的安全防护模块，需配合 WebSecurityModulesForException 使用；</li><li>WebSecuritySubmodules: 指定例外规则的安全防护子模块，需配合 WebSecuritySubmodulesForException 使用；</li><li>ManagedRules：指定例外规则的具体托管规则，需配合 ManagedRulesForException 使用；</li><li>ManagedRuleGroups：指定例外规则的托管规则组，需配合 ManagedRuleGroupsForException 使用。</li></p>
 * @method void setSkipScope(string $SkipScope) 设置<p>例外规则执行选项，取值有：<li>WebSecurityModules: 指定例外规则的安全防护模块，需配合 WebSecurityModulesForException 使用；</li><li>WebSecuritySubmodules: 指定例外规则的安全防护子模块，需配合 WebSecuritySubmodulesForException 使用；</li><li>ManagedRules：指定例外规则的具体托管规则，需配合 ManagedRulesForException 使用；</li><li>ManagedRuleGroups：指定例外规则的托管规则组，需配合 ManagedRuleGroupsForException 使用。</li></p>
 * @method string getSkipOption() 获取<p>跳过请求的具体类型，取值有：<li>SkipOnAllRequestFields: 跳过所有请求；</li><li>SkipOnSpecifiedRequestFields: 跳过指定请求字段。</li>仅当 SkipScope 为 ManagedRules 或 ManagedRuleGroups 时有效。</p>
 * @method void setSkipOption(string $SkipOption) 设置<p>跳过请求的具体类型，取值有：<li>SkipOnAllRequestFields: 跳过所有请求；</li><li>SkipOnSpecifiedRequestFields: 跳过指定请求字段。</li>仅当 SkipScope 为 ManagedRules 或 ManagedRuleGroups 时有效。</p>
 * @method array getWebSecurityModulesForException() 获取<p>指定例外规则的安全防护模块，仅当 SkipScope 为 WebSecurityModules 时有效，取值有：<li>websec-mod-managed-rules：托管规则；</li><li>websec-mod-rate-limiting：速率限制；</li><li>websec-mod-custom-rules：自定义规则；</li><li>websec-mod-adaptive-control：自适应频控、智能客户端过滤、慢速攻击防护、流量盗刷防护；</li><li>websec-mod-bot：Bot管理。</li></p>
 * @method void setWebSecurityModulesForException(array $WebSecurityModulesForException) 设置<p>指定例外规则的安全防护模块，仅当 SkipScope 为 WebSecurityModules 时有效，取值有：<li>websec-mod-managed-rules：托管规则；</li><li>websec-mod-rate-limiting：速率限制；</li><li>websec-mod-custom-rules：自定义规则；</li><li>websec-mod-adaptive-control：自适应频控、智能客户端过滤、慢速攻击防护、流量盗刷防护；</li><li>websec-mod-bot：Bot管理。</li></p>
 * @method array getWebSecuritySubmodulesForException() 获取<p>指定例外规则的安全防护子模块，仅当 SkipScope 为 WebSecuritySubmodules 时有效。</p><p>枚举值：</p><ul><li>websec-mod-managed-rules/semantic-analysis： 托管规则-深度分析</li><li>websec-mod-managed-rules/managed-rule-groups： 托管规则-规则集</li><li>websec-mod-managed-rules/frequent-scanning-protection： 托管规则-高频扫描防护</li><li>websec-mod-rate-limiting-rules： 速率限制规则</li><li>websec-mod-custom-rules： 自定义规则</li><li>websec-mod-http-ddos-protection/adaptive-frequency-control： HTTP DDoS 防护-自适应频控</li><li>websec-mod-http-ddos-protection/client-filtering： HTTP DDoS 防护-智能客户端过滤</li><li>websec-mod-http-ddos-protection/bandwidth-abuse-defense： HTTP DDoS 防护-流量盗刷防护</li><li>websec-mod-bot-management/basic-feature： 高级 Bot 管理-基础特征管理</li><li>websec-mod-bot-management/ip-reputation： 高级 Bot 管理-客户端画像分析</li><li>websec-mod-bot-management/bot-intelligence： 高级 Bot 管理-智能 Bot 分析</li><li>websec-mod-bot-management/custom-rules： 高级 Bot 管理-自定义规则</li><li>websec-mod-bot-management/browser-impersonation-detection： 高级 Bot 管理-主动特征识别</li><li>websec-mod-bot-management/client-attestation-rules： 高级 Bot 管理-客户端认证</li><li>websec-mod-bot-management-lite/ai-crawler-detection： 基础 Bot 管理-AI 爬虫处置</li><li>websec-mod-bot-management-lite/captcha-page-challenge： 基础 Bot 管理-人机校验页</li></ul>
 * @method void setWebSecuritySubmodulesForException(array $WebSecuritySubmodulesForException) 设置<p>指定例外规则的安全防护子模块，仅当 SkipScope 为 WebSecuritySubmodules 时有效。</p><p>枚举值：</p><ul><li>websec-mod-managed-rules/semantic-analysis： 托管规则-深度分析</li><li>websec-mod-managed-rules/managed-rule-groups： 托管规则-规则集</li><li>websec-mod-managed-rules/frequent-scanning-protection： 托管规则-高频扫描防护</li><li>websec-mod-rate-limiting-rules： 速率限制规则</li><li>websec-mod-custom-rules： 自定义规则</li><li>websec-mod-http-ddos-protection/adaptive-frequency-control： HTTP DDoS 防护-自适应频控</li><li>websec-mod-http-ddos-protection/client-filtering： HTTP DDoS 防护-智能客户端过滤</li><li>websec-mod-http-ddos-protection/bandwidth-abuse-defense： HTTP DDoS 防护-流量盗刷防护</li><li>websec-mod-bot-management/basic-feature： 高级 Bot 管理-基础特征管理</li><li>websec-mod-bot-management/ip-reputation： 高级 Bot 管理-客户端画像分析</li><li>websec-mod-bot-management/bot-intelligence： 高级 Bot 管理-智能 Bot 分析</li><li>websec-mod-bot-management/custom-rules： 高级 Bot 管理-自定义规则</li><li>websec-mod-bot-management/browser-impersonation-detection： 高级 Bot 管理-主动特征识别</li><li>websec-mod-bot-management/client-attestation-rules： 高级 Bot 管理-客户端认证</li><li>websec-mod-bot-management-lite/ai-crawler-detection： 基础 Bot 管理-AI 爬虫处置</li><li>websec-mod-bot-management-lite/captcha-page-challenge： 基础 Bot 管理-人机校验页</li></ul>
 * @method array getManagedRulesForException() 获取<p>指定例外规则的具体托管规则，仅当 SkipScope 为 ManagedRules 时有效。</p>
 * @method void setManagedRulesForException(array $ManagedRulesForException) 设置<p>指定例外规则的具体托管规则，仅当 SkipScope 为 ManagedRules 时有效。</p>
 * @method array getManagedRuleGroupsForException() 获取<p>指定例外规则的托管规则组，仅当 SkipScope 为 ManagedRuleGroups 时有效。</p>
 * @method void setManagedRuleGroupsForException(array $ManagedRuleGroupsForException) 设置<p>指定例外规则的托管规则组，仅当 SkipScope 为 ManagedRuleGroups 时有效。</p>
 * @method array getRequestFieldsForException() 获取<p>指定例外规则跳过指定请求字段的具体配置，仅当 SkipScope 为 ManagedRules 或 ManagedRuleGroups 并且 SkipOption 为 SkipOnSpecifiedRequestFields 时有效。</p>
 * @method void setRequestFieldsForException(array $RequestFieldsForException) 设置<p>指定例外规则跳过指定请求字段的具体配置，仅当 SkipScope 为 ManagedRules 或 ManagedRuleGroups 并且 SkipOption 为 SkipOnSpecifiedRequestFields 时有效。</p>
 * @method string getEnabled() 获取<p>例外规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li></p>
 * @method void setEnabled(string $Enabled) 设置<p>例外规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li></p>
 */
class ExceptionRule extends AbstractModel
{
    /**
     * @var string <p>例外规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：ExceptionRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></p>
     */
    public $Id;

    /**
     * @var string <p>例外规则的名称。</p>
     */
    public $Name;

    /**
     * @var string <p>例外规则的具体内容，需符合表达式语法，详细规范参见产品文档。</p>
     */
    public $Condition;

    /**
     * @var string <p>例外规则执行选项，取值有：<li>WebSecurityModules: 指定例外规则的安全防护模块，需配合 WebSecurityModulesForException 使用；</li><li>WebSecuritySubmodules: 指定例外规则的安全防护子模块，需配合 WebSecuritySubmodulesForException 使用；</li><li>ManagedRules：指定例外规则的具体托管规则，需配合 ManagedRulesForException 使用；</li><li>ManagedRuleGroups：指定例外规则的托管规则组，需配合 ManagedRuleGroupsForException 使用。</li></p>
     */
    public $SkipScope;

    /**
     * @var string <p>跳过请求的具体类型，取值有：<li>SkipOnAllRequestFields: 跳过所有请求；</li><li>SkipOnSpecifiedRequestFields: 跳过指定请求字段。</li>仅当 SkipScope 为 ManagedRules 或 ManagedRuleGroups 时有效。</p>
     */
    public $SkipOption;

    /**
     * @var array <p>指定例外规则的安全防护模块，仅当 SkipScope 为 WebSecurityModules 时有效，取值有：<li>websec-mod-managed-rules：托管规则；</li><li>websec-mod-rate-limiting：速率限制；</li><li>websec-mod-custom-rules：自定义规则；</li><li>websec-mod-adaptive-control：自适应频控、智能客户端过滤、慢速攻击防护、流量盗刷防护；</li><li>websec-mod-bot：Bot管理。</li></p>
     */
    public $WebSecurityModulesForException;

    /**
     * @var array <p>指定例外规则的安全防护子模块，仅当 SkipScope 为 WebSecuritySubmodules 时有效。</p><p>枚举值：</p><ul><li>websec-mod-managed-rules/semantic-analysis： 托管规则-深度分析</li><li>websec-mod-managed-rules/managed-rule-groups： 托管规则-规则集</li><li>websec-mod-managed-rules/frequent-scanning-protection： 托管规则-高频扫描防护</li><li>websec-mod-rate-limiting-rules： 速率限制规则</li><li>websec-mod-custom-rules： 自定义规则</li><li>websec-mod-http-ddos-protection/adaptive-frequency-control： HTTP DDoS 防护-自适应频控</li><li>websec-mod-http-ddos-protection/client-filtering： HTTP DDoS 防护-智能客户端过滤</li><li>websec-mod-http-ddos-protection/bandwidth-abuse-defense： HTTP DDoS 防护-流量盗刷防护</li><li>websec-mod-bot-management/basic-feature： 高级 Bot 管理-基础特征管理</li><li>websec-mod-bot-management/ip-reputation： 高级 Bot 管理-客户端画像分析</li><li>websec-mod-bot-management/bot-intelligence： 高级 Bot 管理-智能 Bot 分析</li><li>websec-mod-bot-management/custom-rules： 高级 Bot 管理-自定义规则</li><li>websec-mod-bot-management/browser-impersonation-detection： 高级 Bot 管理-主动特征识别</li><li>websec-mod-bot-management/client-attestation-rules： 高级 Bot 管理-客户端认证</li><li>websec-mod-bot-management-lite/ai-crawler-detection： 基础 Bot 管理-AI 爬虫处置</li><li>websec-mod-bot-management-lite/captcha-page-challenge： 基础 Bot 管理-人机校验页</li></ul>
     */
    public $WebSecuritySubmodulesForException;

    /**
     * @var array <p>指定例外规则的具体托管规则，仅当 SkipScope 为 ManagedRules 时有效。</p>
     */
    public $ManagedRulesForException;

    /**
     * @var array <p>指定例外规则的托管规则组，仅当 SkipScope 为 ManagedRuleGroups 时有效。</p>
     */
    public $ManagedRuleGroupsForException;

    /**
     * @var array <p>指定例外规则跳过指定请求字段的具体配置，仅当 SkipScope 为 ManagedRules 或 ManagedRuleGroups 并且 SkipOption 为 SkipOnSpecifiedRequestFields 时有效。</p>
     */
    public $RequestFieldsForException;

    /**
     * @var string <p>例外规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li></p>
     */
    public $Enabled;

    /**
     * @param string $Id <p>例外规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：ExceptionRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></p>
     * @param string $Name <p>例外规则的名称。</p>
     * @param string $Condition <p>例外规则的具体内容，需符合表达式语法，详细规范参见产品文档。</p>
     * @param string $SkipScope <p>例外规则执行选项，取值有：<li>WebSecurityModules: 指定例外规则的安全防护模块，需配合 WebSecurityModulesForException 使用；</li><li>WebSecuritySubmodules: 指定例外规则的安全防护子模块，需配合 WebSecuritySubmodulesForException 使用；</li><li>ManagedRules：指定例外规则的具体托管规则，需配合 ManagedRulesForException 使用；</li><li>ManagedRuleGroups：指定例外规则的托管规则组，需配合 ManagedRuleGroupsForException 使用。</li></p>
     * @param string $SkipOption <p>跳过请求的具体类型，取值有：<li>SkipOnAllRequestFields: 跳过所有请求；</li><li>SkipOnSpecifiedRequestFields: 跳过指定请求字段。</li>仅当 SkipScope 为 ManagedRules 或 ManagedRuleGroups 时有效。</p>
     * @param array $WebSecurityModulesForException <p>指定例外规则的安全防护模块，仅当 SkipScope 为 WebSecurityModules 时有效，取值有：<li>websec-mod-managed-rules：托管规则；</li><li>websec-mod-rate-limiting：速率限制；</li><li>websec-mod-custom-rules：自定义规则；</li><li>websec-mod-adaptive-control：自适应频控、智能客户端过滤、慢速攻击防护、流量盗刷防护；</li><li>websec-mod-bot：Bot管理。</li></p>
     * @param array $WebSecuritySubmodulesForException <p>指定例外规则的安全防护子模块，仅当 SkipScope 为 WebSecuritySubmodules 时有效。</p><p>枚举值：</p><ul><li>websec-mod-managed-rules/semantic-analysis： 托管规则-深度分析</li><li>websec-mod-managed-rules/managed-rule-groups： 托管规则-规则集</li><li>websec-mod-managed-rules/frequent-scanning-protection： 托管规则-高频扫描防护</li><li>websec-mod-rate-limiting-rules： 速率限制规则</li><li>websec-mod-custom-rules： 自定义规则</li><li>websec-mod-http-ddos-protection/adaptive-frequency-control： HTTP DDoS 防护-自适应频控</li><li>websec-mod-http-ddos-protection/client-filtering： HTTP DDoS 防护-智能客户端过滤</li><li>websec-mod-http-ddos-protection/bandwidth-abuse-defense： HTTP DDoS 防护-流量盗刷防护</li><li>websec-mod-bot-management/basic-feature： 高级 Bot 管理-基础特征管理</li><li>websec-mod-bot-management/ip-reputation： 高级 Bot 管理-客户端画像分析</li><li>websec-mod-bot-management/bot-intelligence： 高级 Bot 管理-智能 Bot 分析</li><li>websec-mod-bot-management/custom-rules： 高级 Bot 管理-自定义规则</li><li>websec-mod-bot-management/browser-impersonation-detection： 高级 Bot 管理-主动特征识别</li><li>websec-mod-bot-management/client-attestation-rules： 高级 Bot 管理-客户端认证</li><li>websec-mod-bot-management-lite/ai-crawler-detection： 基础 Bot 管理-AI 爬虫处置</li><li>websec-mod-bot-management-lite/captcha-page-challenge： 基础 Bot 管理-人机校验页</li></ul>
     * @param array $ManagedRulesForException <p>指定例外规则的具体托管规则，仅当 SkipScope 为 ManagedRules 时有效。</p>
     * @param array $ManagedRuleGroupsForException <p>指定例外规则的托管规则组，仅当 SkipScope 为 ManagedRuleGroups 时有效。</p>
     * @param array $RequestFieldsForException <p>指定例外规则跳过指定请求字段的具体配置，仅当 SkipScope 为 ManagedRules 或 ManagedRuleGroups 并且 SkipOption 为 SkipOnSpecifiedRequestFields 时有效。</p>
     * @param string $Enabled <p>例外规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li></p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("SkipScope",$param) and $param["SkipScope"] !== null) {
            $this->SkipScope = $param["SkipScope"];
        }

        if (array_key_exists("SkipOption",$param) and $param["SkipOption"] !== null) {
            $this->SkipOption = $param["SkipOption"];
        }

        if (array_key_exists("WebSecurityModulesForException",$param) and $param["WebSecurityModulesForException"] !== null) {
            $this->WebSecurityModulesForException = $param["WebSecurityModulesForException"];
        }

        if (array_key_exists("WebSecuritySubmodulesForException",$param) and $param["WebSecuritySubmodulesForException"] !== null) {
            $this->WebSecuritySubmodulesForException = $param["WebSecuritySubmodulesForException"];
        }

        if (array_key_exists("ManagedRulesForException",$param) and $param["ManagedRulesForException"] !== null) {
            $this->ManagedRulesForException = $param["ManagedRulesForException"];
        }

        if (array_key_exists("ManagedRuleGroupsForException",$param) and $param["ManagedRuleGroupsForException"] !== null) {
            $this->ManagedRuleGroupsForException = $param["ManagedRuleGroupsForException"];
        }

        if (array_key_exists("RequestFieldsForException",$param) and $param["RequestFieldsForException"] !== null) {
            $this->RequestFieldsForException = [];
            foreach ($param["RequestFieldsForException"] as $key => $value){
                $obj = new RequestFieldsForException();
                $obj->deserialize($value);
                array_push($this->RequestFieldsForException, $obj);
            }
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
