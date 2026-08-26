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
 * ModifySandboxLLMAuditRule请求参数结构体
 *
 * @method integer getID() 获取规则 ID
 * @method void setID(integer $ID) 设置规则 ID
 * @method string getRuleName() 获取规则名称
入参限制：长度 1-128
默认值：不传则不修改
 * @method void setRuleName(string $RuleName) 设置规则名称
入参限制：长度 1-128
默认值：不传则不修改
 * @method string getLevel() 获取规则级别
枚举值：
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
默认值：不传则不修改
 * @method void setLevel(string $Level) 设置规则级别
枚举值：
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
默认值：不传则不修改
 * @method array getSystemRuleIDList() 获取引用的 LLM 审计系统规则 ID 列表（字符串）
入参限制：不传表示不修改；传值则覆盖全量，长度 1-1000；单个元素长度 1-128
 * @method void setSystemRuleIDList(array $SystemRuleIDList) 设置引用的 LLM 审计系统规则 ID 列表（字符串）
入参限制：不传表示不修改；传值则覆盖全量，长度 1-1000；单个元素长度 1-128
 * @method TrafficSandboxEffectScope getEffectScope() 获取生效范围
默认值：不传则不修改
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) 设置生效范围
默认值：不传则不修改
 * @method string getRuleAction() 获取规则动作(RuleAction)
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
默认值：不传则不修改
 * @method void setRuleAction(string $RuleAction) 设置规则动作(RuleAction)
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
默认值：不传则不修改
 * @method string getStatus() 获取目标状态
枚举值：
ON：启用
OFF：禁用
默认值：不传则不修改
 * @method void setStatus(string $Status) 设置目标状态
枚举值：
ON：启用
OFF：禁用
默认值：不传则不修改
 */
class ModifySandboxLLMAuditRuleRequest extends AbstractModel
{
    /**
     * @var integer 规则 ID
     */
    public $ID;

    /**
     * @var string 规则名称
入参限制：长度 1-128
默认值：不传则不修改
     */
    public $RuleName;

    /**
     * @var string 规则级别
枚举值：
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
默认值：不传则不修改
     */
    public $Level;

    /**
     * @var array 引用的 LLM 审计系统规则 ID 列表（字符串）
入参限制：不传表示不修改；传值则覆盖全量，长度 1-1000；单个元素长度 1-128
     */
    public $SystemRuleIDList;

    /**
     * @var TrafficSandboxEffectScope 生效范围
默认值：不传则不修改
     */
    public $EffectScope;

    /**
     * @var string 规则动作(RuleAction)
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
默认值：不传则不修改
     */
    public $RuleAction;

    /**
     * @var string 目标状态
枚举值：
ON：启用
OFF：禁用
默认值：不传则不修改
     */
    public $Status;

    /**
     * @param integer $ID 规则 ID
     * @param string $RuleName 规则名称
入参限制：长度 1-128
默认值：不传则不修改
     * @param string $Level 规则级别
枚举值：
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
默认值：不传则不修改
     * @param array $SystemRuleIDList 引用的 LLM 审计系统规则 ID 列表（字符串）
入参限制：不传表示不修改；传值则覆盖全量，长度 1-1000；单个元素长度 1-128
     * @param TrafficSandboxEffectScope $EffectScope 生效范围
默认值：不传则不修改
     * @param string $RuleAction 规则动作(RuleAction)
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
默认值：不传则不修改
     * @param string $Status 目标状态
枚举值：
ON：启用
OFF：禁用
默认值：不传则不修改
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SystemRuleIDList",$param) and $param["SystemRuleIDList"] !== null) {
            $this->SystemRuleIDList = $param["SystemRuleIDList"];
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
