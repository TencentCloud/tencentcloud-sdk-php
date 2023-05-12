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
 * Bot自定义规则
 *
 * @method string getRuleName() 获取规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
 * @method void setRuleName(string $RuleName) 设置规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
 * @method string getAction() 获取处置动作，取值有：
<li>drop：拦截；</li>
<li>monitor：观察；</li>
<li>trans：放行；</li>
<li>alg：JavaScript挑战；</li>
<li>captcha：托管挑战；</li>
<li>random：随机处置；</li>
<li>silence：静默；</li>
<li>shortdelay：短时响应；</li>
<li>longdelay：长时响应。</li>
 * @method void setAction(string $Action) 设置处置动作，取值有：
<li>drop：拦截；</li>
<li>monitor：观察；</li>
<li>trans：放行；</li>
<li>alg：JavaScript挑战；</li>
<li>captcha：托管挑战；</li>
<li>random：随机处置；</li>
<li>silence：静默；</li>
<li>shortdelay：短时响应；</li>
<li>longdelay：长时响应。</li>
 * @method string getRuleStatus() 获取规则状态，取值有：
<li>on：生效；</li>
<li>off：不生效。</li>默认on生效。
 * @method void setRuleStatus(string $RuleStatus) 设置规则状态，取值有：
<li>on：生效；</li>
<li>off：不生效。</li>默认on生效。
 * @method array getAclConditions() 获取规则详情。
 * @method void setAclConditions(array $AclConditions) 设置规则详情。
 * @method integer getRulePriority() 获取规则权重，取值范围0-100。
 * @method void setRulePriority(integer $RulePriority) 设置规则权重，取值范围0-100。
 * @method integer getRuleID() 获取规则id。仅出参使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleID(integer $RuleID) 设置规则id。仅出参使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtendActions() 获取随机处置的处置方式及占比，非随机处置可不填暂不支持。
 * @method void setExtendActions(array $ExtendActions) 设置随机处置的处置方式及占比，非随机处置可不填暂不支持。
 * @method array getFreqFields() 获取过滤词，取值有：
<li>sip：客户端ip。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreqFields(array $FreqFields) 设置过滤词，取值有：
<li>sip：客户端ip。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFreqScope() 获取统计范围，字段为null时，代表source_to_eo。取值有：
<li>source_to_eo：（响应）源站到EdgeOne。</li>
<li>client_to_eo：（请求）客户端到EdgeOne；</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreqScope(array $FreqScope) 设置统计范围，字段为null时，代表source_to_eo。取值有：
<li>source_to_eo：（响应）源站到EdgeOne。</li>
<li>client_to_eo：（请求）客户端到EdgeOne；</li>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BotUserRule extends AbstractModel
{
    /**
     * @var string 规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
     */
    public $RuleName;

    /**
     * @var string 处置动作，取值有：
<li>drop：拦截；</li>
<li>monitor：观察；</li>
<li>trans：放行；</li>
<li>alg：JavaScript挑战；</li>
<li>captcha：托管挑战；</li>
<li>random：随机处置；</li>
<li>silence：静默；</li>
<li>shortdelay：短时响应；</li>
<li>longdelay：长时响应。</li>
     */
    public $Action;

    /**
     * @var string 规则状态，取值有：
<li>on：生效；</li>
<li>off：不生效。</li>默认on生效。
     */
    public $RuleStatus;

    /**
     * @var array 规则详情。
     */
    public $AclConditions;

    /**
     * @var integer 规则权重，取值范围0-100。
     */
    public $RulePriority;

    /**
     * @var integer 规则id。仅出参使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleID;

    /**
     * @var array 随机处置的处置方式及占比，非随机处置可不填暂不支持。
     */
    public $ExtendActions;

    /**
     * @var array 过滤词，取值有：
<li>sip：客户端ip。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreqFields;

    /**
     * @var string 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 统计范围，字段为null时，代表source_to_eo。取值有：
<li>source_to_eo：（响应）源站到EdgeOne。</li>
<li>client_to_eo：（请求）客户端到EdgeOne；</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreqScope;

    /**
     * @param string $RuleName 规则名，只能以英文字符，数字，下划线组合，且不能以下划线开头。
     * @param string $Action 处置动作，取值有：
<li>drop：拦截；</li>
<li>monitor：观察；</li>
<li>trans：放行；</li>
<li>alg：JavaScript挑战；</li>
<li>captcha：托管挑战；</li>
<li>random：随机处置；</li>
<li>silence：静默；</li>
<li>shortdelay：短时响应；</li>
<li>longdelay：长时响应。</li>
     * @param string $RuleStatus 规则状态，取值有：
<li>on：生效；</li>
<li>off：不生效。</li>默认on生效。
     * @param array $AclConditions 规则详情。
     * @param integer $RulePriority 规则权重，取值范围0-100。
     * @param integer $RuleID 规则id。仅出参使用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtendActions 随机处置的处置方式及占比，非随机处置可不填暂不支持。
     * @param array $FreqFields 过滤词，取值有：
<li>sip：客户端ip。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FreqScope 统计范围，字段为null时，代表source_to_eo。取值有：
<li>source_to_eo：（响应）源站到EdgeOne。</li>
<li>client_to_eo：（请求）客户端到EdgeOne；</li>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("AclConditions",$param) and $param["AclConditions"] !== null) {
            $this->AclConditions = [];
            foreach ($param["AclConditions"] as $key => $value){
                $obj = new AclCondition();
                $obj->deserialize($value);
                array_push($this->AclConditions, $obj);
            }
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("ExtendActions",$param) and $param["ExtendActions"] !== null) {
            $this->ExtendActions = [];
            foreach ($param["ExtendActions"] as $key => $value){
                $obj = new BotExtendAction();
                $obj->deserialize($value);
                array_push($this->ExtendActions, $obj);
            }
        }

        if (array_key_exists("FreqFields",$param) and $param["FreqFields"] !== null) {
            $this->FreqFields = $param["FreqFields"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FreqScope",$param) and $param["FreqScope"] !== null) {
            $this->FreqScope = $param["FreqScope"];
        }
    }
}
