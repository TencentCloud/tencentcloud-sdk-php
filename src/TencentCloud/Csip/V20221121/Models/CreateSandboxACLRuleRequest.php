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
 * CreateSandboxACLRule请求参数结构体
 *
 * @method string getRuleName() 获取规则名称
入参限制：长度 1-128
 * @method void setRuleName(string $RuleName) 设置规则名称
入参限制：长度 1-128
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
 * @method string getBelongAssetType() 获取归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
 * @method void setBelongAssetType(string $BelongAssetType) 设置归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
 * @method TrafficSandboxEffectScope getEffectScope() 获取生效范围
入参限制：EffectScope.EffectType=INCLUDE 时 EffectAssets 必须非空
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) 设置生效范围
入参限制：EffectScope.EffectType=INCLUDE 时 EffectAssets 必须非空
 * @method string getStatus() 获取初始状态
枚举值：
ON：启用
OFF：禁用
 * @method void setStatus(string $Status) 设置初始状态
枚举值：
ON：启用
OFF：禁用
 * @method string getRuleAction() 获取规则动作(RuleAction)
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
 * @method void setRuleAction(string $RuleAction) 设置规则动作(RuleAction)
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
 * @method array getSystemRuleIDList() 获取引用的系统规则 ID 列表
入参限制：最多 100 个；与 UserRuleContent 至少提供其一
 * @method void setSystemRuleIDList(array $SystemRuleIDList) 设置引用的系统规则 ID 列表
入参限制：最多 100 个；与 UserRuleContent 至少提供其一
 * @method array getUserRuleContent() 获取用户自定义规则内容
入参限制：最多 100 条子规则；与 SystemRuleIDList 至少提供其一
 * @method void setUserRuleContent(array $UserRuleContent) 设置用户自定义规则内容
入参限制：最多 100 条子规则；与 SystemRuleIDList 至少提供其一
 */
class CreateSandboxACLRuleRequest extends AbstractModel
{
    /**
     * @var string 规则名称
入参限制：长度 1-128
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
     * @var string 归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
     */
    public $BelongAssetType;

    /**
     * @var TrafficSandboxEffectScope 生效范围
入参限制：EffectScope.EffectType=INCLUDE 时 EffectAssets 必须非空
     */
    public $EffectScope;

    /**
     * @var string 初始状态
枚举值：
ON：启用
OFF：禁用
     */
    public $Status;

    /**
     * @var string 规则动作(RuleAction)
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
     */
    public $RuleAction;

    /**
     * @var array 引用的系统规则 ID 列表
入参限制：最多 100 个；与 UserRuleContent 至少提供其一
     */
    public $SystemRuleIDList;

    /**
     * @var array 用户自定义规则内容
入参限制：最多 100 条子规则；与 SystemRuleIDList 至少提供其一
     */
    public $UserRuleContent;

    /**
     * @param string $RuleName 规则名称
入参限制：长度 1-128
     * @param string $Level 规则级别
枚举值：
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
     * @param string $BelongAssetType 归属资产类型
枚举值：
HOST：主机
CONTAINER：容器
     * @param TrafficSandboxEffectScope $EffectScope 生效范围
入参限制：EffectScope.EffectType=INCLUDE 时 EffectAssets 必须非空
     * @param string $Status 初始状态
枚举值：
ON：启用
OFF：禁用
     * @param string $RuleAction 规则动作(RuleAction)
枚举值：
PASS：加白
BLOCK：拦截并告警
MONITOR：告警
     * @param array $SystemRuleIDList 引用的系统规则 ID 列表
入参限制：最多 100 个；与 UserRuleContent 至少提供其一
     * @param array $UserRuleContent 用户自定义规则内容
入参限制：最多 100 条子规则；与 SystemRuleIDList 至少提供其一
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("SystemRuleIDList",$param) and $param["SystemRuleIDList"] !== null) {
            $this->SystemRuleIDList = $param["SystemRuleIDList"];
        }

        if (array_key_exists("UserRuleContent",$param) and $param["UserRuleContent"] !== null) {
            $this->UserRuleContent = [];
            foreach ($param["UserRuleContent"] as $key => $value){
                $obj = new TrafficSandboxACLRuleContentItem();
                $obj->deserialize($value);
                array_push($this->UserRuleContent, $obj);
            }
        }
    }
}
