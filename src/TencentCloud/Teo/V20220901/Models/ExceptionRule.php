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
 * @method string getId() 获取例外规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：ExceptionRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
 * @method void setId(string $Id) 设置例外规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：ExceptionRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
 * @method string getName() 获取例外规则的名称。
 * @method void setName(string $Name) 设置例外规则的名称。
 * @method string getCondition() 获取例外规则的具体内容，需符合表达式语法，详细规范参见产品文档。
 * @method void setCondition(string $Condition) 设置例外规则的具体内容，需符合表达式语法，详细规范参见产品文档。
 * @method string getSkipScope() 获取例外规则执行选项，取值有：<li>WebSecurityModules: 指定例外规则的安全防护模块。</li><li>ManagedRules：指定托管规则。</li>
 * @method void setSkipScope(string $SkipScope) 设置例外规则执行选项，取值有：<li>WebSecurityModules: 指定例外规则的安全防护模块。</li><li>ManagedRules：指定托管规则。</li>
 * @method string getSkipOption() 获取跳过请求的具体类型，取值有：<li>SkipOnAllRequestFields: 跳过所有请求；</li><li>SkipOnSpecifiedRequestFields: 跳过指定请求字段。</li>仅当 SkipScope 为 ManagedRules 时有效。
 * @method void setSkipOption(string $SkipOption) 设置跳过请求的具体类型，取值有：<li>SkipOnAllRequestFields: 跳过所有请求；</li><li>SkipOnSpecifiedRequestFields: 跳过指定请求字段。</li>仅当 SkipScope 为 ManagedRules 时有效。
 * @method array getWebSecurityModulesForException() 获取指定例外规则的安全防护模块，仅当 SkipScope 为 WebSecurityModules 时有效。取值有：<li>websec-mod-managed-rules：托管规则；</li><li>websec-mod-rate-limiting：速率限制；</li><li>websec-mod-custom-rules：自定义规则；</li><li>websec-mod-adaptive-control：自适应频控、智能客户端过滤、慢速攻击防护、流量盗刷防护；</li><li>websec-mod-bot：Bot管理。</li>
 * @method void setWebSecurityModulesForException(array $WebSecurityModulesForException) 设置指定例外规则的安全防护模块，仅当 SkipScope 为 WebSecurityModules 时有效。取值有：<li>websec-mod-managed-rules：托管规则；</li><li>websec-mod-rate-limiting：速率限制；</li><li>websec-mod-custom-rules：自定义规则；</li><li>websec-mod-adaptive-control：自适应频控、智能客户端过滤、慢速攻击防护、流量盗刷防护；</li><li>websec-mod-bot：Bot管理。</li>
 * @method array getManagedRulesForException() 获取指定例外规则的具体托管规则，仅当 SkipScope 为 ManagedRules 时有效，且此时不能指定 ManagedRuleGroupsForException 。
 * @method void setManagedRulesForException(array $ManagedRulesForException) 设置指定例外规则的具体托管规则，仅当 SkipScope 为 ManagedRules 时有效，且此时不能指定 ManagedRuleGroupsForException 。
 * @method array getManagedRuleGroupsForException() 获取指定例外规则的托管规则组，仅当 SkipScope 为 ManagedRules 时有效，且此时不能指定 ManagedRulesForException 。
 * @method void setManagedRuleGroupsForException(array $ManagedRuleGroupsForException) 设置指定例外规则的托管规则组，仅当 SkipScope 为 ManagedRules 时有效，且此时不能指定 ManagedRulesForException 。
 * @method array getRequestFieldsForException() 获取指定例外规则跳过指定请求字段的具体配置，仅当 SkipScope 为 ManagedRules 并且 SkipOption 为 SkipOnSpecifiedRequestFields 时有效。
 * @method void setRequestFieldsForException(array $RequestFieldsForException) 设置指定例外规则跳过指定请求字段的具体配置，仅当 SkipScope 为 ManagedRules 并且 SkipOption 为 SkipOnSpecifiedRequestFields 时有效。
 * @method string getEnabled() 获取例外规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li>
 * @method void setEnabled(string $Enabled) 设置例外规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li>
 */
class ExceptionRule extends AbstractModel
{
    /**
     * @var string 例外规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：ExceptionRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
     */
    public $Id;

    /**
     * @var string 例外规则的名称。
     */
    public $Name;

    /**
     * @var string 例外规则的具体内容，需符合表达式语法，详细规范参见产品文档。
     */
    public $Condition;

    /**
     * @var string 例外规则执行选项，取值有：<li>WebSecurityModules: 指定例外规则的安全防护模块。</li><li>ManagedRules：指定托管规则。</li>
     */
    public $SkipScope;

    /**
     * @var string 跳过请求的具体类型，取值有：<li>SkipOnAllRequestFields: 跳过所有请求；</li><li>SkipOnSpecifiedRequestFields: 跳过指定请求字段。</li>仅当 SkipScope 为 ManagedRules 时有效。
     */
    public $SkipOption;

    /**
     * @var array 指定例外规则的安全防护模块，仅当 SkipScope 为 WebSecurityModules 时有效。取值有：<li>websec-mod-managed-rules：托管规则；</li><li>websec-mod-rate-limiting：速率限制；</li><li>websec-mod-custom-rules：自定义规则；</li><li>websec-mod-adaptive-control：自适应频控、智能客户端过滤、慢速攻击防护、流量盗刷防护；</li><li>websec-mod-bot：Bot管理。</li>
     */
    public $WebSecurityModulesForException;

    /**
     * @var array 指定例外规则的具体托管规则，仅当 SkipScope 为 ManagedRules 时有效，且此时不能指定 ManagedRuleGroupsForException 。
     */
    public $ManagedRulesForException;

    /**
     * @var array 指定例外规则的托管规则组，仅当 SkipScope 为 ManagedRules 时有效，且此时不能指定 ManagedRulesForException 。
     */
    public $ManagedRuleGroupsForException;

    /**
     * @var array 指定例外规则跳过指定请求字段的具体配置，仅当 SkipScope 为 ManagedRules 并且 SkipOption 为 SkipOnSpecifiedRequestFields 时有效。
     */
    public $RequestFieldsForException;

    /**
     * @var string 例外规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li>
     */
    public $Enabled;

    /**
     * @param string $Id 例外规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li> <b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li> <b>删除</b>已有规则：ExceptionRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
     * @param string $Name 例外规则的名称。
     * @param string $Condition 例外规则的具体内容，需符合表达式语法，详细规范参见产品文档。
     * @param string $SkipScope 例外规则执行选项，取值有：<li>WebSecurityModules: 指定例外规则的安全防护模块。</li><li>ManagedRules：指定托管规则。</li>
     * @param string $SkipOption 跳过请求的具体类型，取值有：<li>SkipOnAllRequestFields: 跳过所有请求；</li><li>SkipOnSpecifiedRequestFields: 跳过指定请求字段。</li>仅当 SkipScope 为 ManagedRules 时有效。
     * @param array $WebSecurityModulesForException 指定例外规则的安全防护模块，仅当 SkipScope 为 WebSecurityModules 时有效。取值有：<li>websec-mod-managed-rules：托管规则；</li><li>websec-mod-rate-limiting：速率限制；</li><li>websec-mod-custom-rules：自定义规则；</li><li>websec-mod-adaptive-control：自适应频控、智能客户端过滤、慢速攻击防护、流量盗刷防护；</li><li>websec-mod-bot：Bot管理。</li>
     * @param array $ManagedRulesForException 指定例外规则的具体托管规则，仅当 SkipScope 为 ManagedRules 时有效，且此时不能指定 ManagedRuleGroupsForException 。
     * @param array $ManagedRuleGroupsForException 指定例外规则的托管规则组，仅当 SkipScope 为 ManagedRules 时有效，且此时不能指定 ManagedRulesForException 。
     * @param array $RequestFieldsForException 指定例外规则跳过指定请求字段的具体配置，仅当 SkipScope 为 ManagedRules 并且 SkipOption 为 SkipOnSpecifiedRequestFields 时有效。
     * @param string $Enabled 例外规则是否开启。取值有：<li>on：开启</li><li>off：关闭</li>
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
