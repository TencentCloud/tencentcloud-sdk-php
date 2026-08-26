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
 * LLM 审计用户规则数据结构
 *
 * @method integer getID() 获取规则 ID
 * @method void setID(integer $ID) 设置规则 ID
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getLevel() 获取规则级别
枚举值：
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
 * @method void setLevel(string $Level) 设置规则级别
枚举值：
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
 * @method string getStatus() 获取规则状态
枚举值：
ON：启用
OFF：禁用
 * @method void setStatus(string $Status) 设置规则状态
枚举值：
ON：启用
OFF：禁用
 * @method string getBelongAssetType() 获取归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
 * @method void setBelongAssetType(string $BelongAssetType) 设置归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
 * @method array getSystemRuleRefs() 获取引用的系统规则列表（含系统规则名称）
 * @method void setSystemRuleRefs(array $SystemRuleRefs) 设置引用的系统规则列表（含系统规则名称）
 * @method TrafficSandboxEffectScope getEffectScope() 获取规则的生效范围
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) 设置规则的生效范围
 * @method array getInactiveAssets() 获取未生效资产列表：策略目标生效资产中流量沙箱插件未已安装（TrafficPluginState.InstallStatus 不为 INSTALLED）的 AI Agent 资产，返回机器的 InstanceId / ContainerId 及 TrafficPluginState。无未生效资产时返回空数组
 * @method void setInactiveAssets(array $InactiveAssets) 设置未生效资产列表：策略目标生效资产中流量沙箱插件未已安装（TrafficPluginState.InstallStatus 不为 INSTALLED）的 AI Agent 资产，返回机器的 InstanceId / ContainerId 及 TrafficPluginState。无未生效资产时返回空数组
 * @method string getInsertTime() 获取创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setInsertTime(string $InsertTime) 设置创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getUpdateTime() 获取更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getRuleAction() 获取规则动作
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
 * @method void setRuleAction(string $RuleAction) 设置规则动作
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
 */
class TrafficSandboxLLMAuditRuleInfo extends AbstractModel
{
    /**
     * @var integer 规则 ID
     */
    public $ID;

    /**
     * @var string 规则名称
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
     */
    public $Level;

    /**
     * @var string 规则状态
枚举值：
ON：启用
OFF：禁用
     */
    public $Status;

    /**
     * @var string 归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
     */
    public $BelongAssetType;

    /**
     * @var array 引用的系统规则列表（含系统规则名称）
     */
    public $SystemRuleRefs;

    /**
     * @var TrafficSandboxEffectScope 规则的生效范围
     */
    public $EffectScope;

    /**
     * @var array 未生效资产列表：策略目标生效资产中流量沙箱插件未已安装（TrafficPluginState.InstallStatus 不为 INSTALLED）的 AI Agent 资产，返回机器的 InstanceId / ContainerId 及 TrafficPluginState。无未生效资产时返回空数组
     */
    public $InactiveAssets;

    /**
     * @var string 创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $InsertTime;

    /**
     * @var string 更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $UpdateTime;

    /**
     * @var string 规则动作
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
     */
    public $RuleAction;

    /**
     * @param integer $ID 规则 ID
     * @param string $RuleName 规则名称
     * @param string $Level 规则级别
枚举值：
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
     * @param string $Status 规则状态
枚举值：
ON：启用
OFF：禁用
     * @param string $BelongAssetType 归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
     * @param array $SystemRuleRefs 引用的系统规则列表（含系统规则名称）
     * @param TrafficSandboxEffectScope $EffectScope 规则的生效范围
     * @param array $InactiveAssets 未生效资产列表：策略目标生效资产中流量沙箱插件未已安装（TrafficPluginState.InstallStatus 不为 INSTALLED）的 AI Agent 资产，返回机器的 InstanceId / ContainerId 及 TrafficPluginState。无未生效资产时返回空数组
     * @param string $InsertTime 创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $UpdateTime 更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $RuleAction 规则动作
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("SystemRuleRefs",$param) and $param["SystemRuleRefs"] !== null) {
            $this->SystemRuleRefs = [];
            foreach ($param["SystemRuleRefs"] as $key => $value){
                $obj = new TrafficSandboxLLMAuditRuleRef();
                $obj->deserialize($value);
                array_push($this->SystemRuleRefs, $obj);
            }
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }

        if (array_key_exists("InactiveAssets",$param) and $param["InactiveAssets"] !== null) {
            $this->InactiveAssets = [];
            foreach ($param["InactiveAssets"] as $key => $value){
                $obj = new TrafficSandboxInactiveAsset();
                $obj->deserialize($value);
                array_push($this->InactiveAssets, $obj);
            }
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }
    }
}
