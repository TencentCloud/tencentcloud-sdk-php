<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 安全规则（cc/waf/bot）相关信息
 *
 * @method integer getRuleId() 获取规则ID。
 * @method void setRuleId(integer $RuleId) 设置规则ID。
 * @method string getAction() 获取执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
 * @method void setAction(string $Action) 设置执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
 * @method string getRiskLevel() 获取风险等级（waf日志中独有），取值有：
<li>high risk ：高危 ；</li>
<li>middle risk ：中危 ；</li>
<li>low risk ：低危 ；</li>
<li>unkonw ：未知 。</li>
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级（waf日志中独有），取值有：
<li>high risk ：高危 ；</li>
<li>middle risk ：中危 ；</li>
<li>low risk ：低危 ；</li>
<li>unkonw ：未知 。</li>
 * @method string getRuleLevel() 获取规则等级，取值有：
<li>normal  ：正常 。</li>
 * @method void setRuleLevel(string $RuleLevel) 设置规则等级，取值有：
<li>normal  ：正常 。</li>
 * @method string getDescription() 获取规则描述。
 * @method void setDescription(string $Description) 设置规则描述。
 * @method string getRuleTypeName() 获取规则类型名称。
 * @method void setRuleTypeName(string $RuleTypeName) 设置规则类型名称。
 * @method string getAttackContent() 获取攻击内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackContent(string $AttackContent) 设置攻击内容。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleType() 获取规则类型，取值有：
<li>waf: 托管规则；</li>
<li>acl：自定义规则；</li>
<li>rate：速率限制规则；</li>
<li>bot：bot防护规则。</li>
 * @method void setRuleType(string $RuleType) 设置规则类型，取值有：
<li>waf: 托管规则；</li>
<li>acl：自定义规则；</li>
<li>rate：速率限制规则；</li>
<li>bot：bot防护规则。</li>
 * @method boolean getRuleEnabled() 获取规则是否开启。
 * @method void setRuleEnabled(boolean $RuleEnabled) 设置规则是否开启。
 * @method boolean getRuleDeleted() 获取规则是否存在，取值有：
<li>true: 规则不存在；</li>
<li>false: 规则存在。</li>
 * @method void setRuleDeleted(boolean $RuleDeleted) 设置规则是否存在，取值有：
<li>true: 规则不存在；</li>
<li>false: 规则存在。</li>
 * @method boolean getAlarmEnabled() 获取规则是否启用监控告警。
 * @method void setAlarmEnabled(boolean $AlarmEnabled) 设置规则是否启用监控告警。
 */
class SecRuleRelatedInfo extends AbstractModel
{
    /**
     * @var integer 规则ID。
     */
    public $RuleId;

    /**
     * @var string 执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
     */
    public $Action;

    /**
     * @var string 风险等级（waf日志中独有），取值有：
<li>high risk ：高危 ；</li>
<li>middle risk ：中危 ；</li>
<li>low risk ：低危 ；</li>
<li>unkonw ：未知 。</li>
     */
    public $RiskLevel;

    /**
     * @var string 规则等级，取值有：
<li>normal  ：正常 。</li>
     */
    public $RuleLevel;

    /**
     * @var string 规则描述。
     */
    public $Description;

    /**
     * @var string 规则类型名称。
     */
    public $RuleTypeName;

    /**
     * @var string 攻击内容。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackContent;

    /**
     * @var string 规则类型，取值有：
<li>waf: 托管规则；</li>
<li>acl：自定义规则；</li>
<li>rate：速率限制规则；</li>
<li>bot：bot防护规则。</li>
     */
    public $RuleType;

    /**
     * @var boolean 规则是否开启。
     */
    public $RuleEnabled;

    /**
     * @var boolean 规则是否存在，取值有：
<li>true: 规则不存在；</li>
<li>false: 规则存在。</li>
     */
    public $RuleDeleted;

    /**
     * @var boolean 规则是否启用监控告警。
     */
    public $AlarmEnabled;

    /**
     * @param integer $RuleId 规则ID。
     * @param string $Action 执行动作（处置方式），取值有：
<li>trans ：通过 ；</li>
<li>alg ：算法挑战 ；</li>
<li>drop ：丢弃 ；</li>
<li>ban ：封禁源ip ；</li>
<li>redirect ：重定向 ；</li>
<li>page ：返回指定页面 ；</li>
<li>monitor ：观察 。</li>
     * @param string $RiskLevel 风险等级（waf日志中独有），取值有：
<li>high risk ：高危 ；</li>
<li>middle risk ：中危 ；</li>
<li>low risk ：低危 ；</li>
<li>unkonw ：未知 。</li>
     * @param string $RuleLevel 规则等级，取值有：
<li>normal  ：正常 。</li>
     * @param string $Description 规则描述。
     * @param string $RuleTypeName 规则类型名称。
     * @param string $AttackContent 攻击内容。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleType 规则类型，取值有：
<li>waf: 托管规则；</li>
<li>acl：自定义规则；</li>
<li>rate：速率限制规则；</li>
<li>bot：bot防护规则。</li>
     * @param boolean $RuleEnabled 规则是否开启。
     * @param boolean $RuleDeleted 规则是否存在，取值有：
<li>true: 规则不存在；</li>
<li>false: 规则存在。</li>
     * @param boolean $AlarmEnabled 规则是否启用监控告警。
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("AttackContent",$param) and $param["AttackContent"] !== null) {
            $this->AttackContent = $param["AttackContent"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleEnabled",$param) and $param["RuleEnabled"] !== null) {
            $this->RuleEnabled = $param["RuleEnabled"];
        }

        if (array_key_exists("RuleDeleted",$param) and $param["RuleDeleted"] !== null) {
            $this->RuleDeleted = $param["RuleDeleted"];
        }

        if (array_key_exists("AlarmEnabled",$param) and $param["AlarmEnabled"] !== null) {
            $this->AlarmEnabled = $param["AlarmEnabled"];
        }
    }
}
