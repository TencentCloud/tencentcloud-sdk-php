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
 * CreateSandboxDLPRule请求参数结构体
 *
 * @method string getRuleName() 获取<p>规则名称<br>入参限制：长度 1-128</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称<br>入参限制：长度 1-128</p>
 * @method string getLevel() 获取<p>规则级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
 * @method void setLevel(string $Level) 设置<p>规则级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
 * @method string getRuleAction() 获取<p>规则动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
 * @method void setRuleAction(string $RuleAction) 设置<p>规则动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
 * @method string getBelongAssetType() 获取<p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
 * @method void setBelongAssetType(string $BelongAssetType) 设置<p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
 * @method TrafficSandboxEffectScope getEffectScope() 获取<p>生效范围</p>
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) 设置<p>生效范围</p>
 * @method string getStatus() 获取<p>初始状态<br>枚举值：<br>ON：启用<br>OFF：禁用</p>
 * @method void setStatus(string $Status) 设置<p>初始状态<br>枚举值：<br>ON：启用<br>OFF：禁用</p>
 * @method array getSystemRuleIDList() 获取<p>引用的系统规则 ID 列表<br>入参限制：最多 1000 个；与 UserRuleContent 至少提供其一</p>
 * @method void setSystemRuleIDList(array $SystemRuleIDList) 设置<p>引用的系统规则 ID 列表<br>入参限制：最多 1000 个；与 UserRuleContent 至少提供其一</p>
 * @method array getUserRuleContent() 获取<p>用户自定义规则内容<br>入参限制：最多 100 条子规则；与 UserRuleInfo 二选一传入即可，二者同时传入时以 UserRuleInfo 为准</p>
 * @method void setUserRuleContent(array $UserRuleContent) 设置<p>用户自定义规则内容<br>入参限制：最多 100 条子规则；与 UserRuleInfo 二选一传入即可，二者同时传入时以 UserRuleInfo 为准</p>
 * @method TrafficSandboxDLPUserRuleInfo getUserRuleInfo() 获取<p>新增可选的结构化入参，支持 5 个检测维度（文件名称/文件大小/文件格式/外发域名/外发内容），各维度可选、至少命中一项。与 UserRuleContent 同时传入时优先生效</p>
 * @method void setUserRuleInfo(TrafficSandboxDLPUserRuleInfo $UserRuleInfo) 设置<p>新增可选的结构化入参，支持 5 个检测维度（文件名称/文件大小/文件格式/外发域名/外发内容），各维度可选、至少命中一项。与 UserRuleContent 同时传入时优先生效</p>
 */
class CreateSandboxDLPRuleRequest extends AbstractModel
{
    /**
     * @var string <p>规则名称<br>入参限制：长度 1-128</p>
     */
    public $RuleName;

    /**
     * @var string <p>规则级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
     */
    public $Level;

    /**
     * @var string <p>规则动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
     */
    public $RuleAction;

    /**
     * @var string <p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
     */
    public $BelongAssetType;

    /**
     * @var TrafficSandboxEffectScope <p>生效范围</p>
     */
    public $EffectScope;

    /**
     * @var string <p>初始状态<br>枚举值：<br>ON：启用<br>OFF：禁用</p>
     */
    public $Status;

    /**
     * @var array <p>引用的系统规则 ID 列表<br>入参限制：最多 1000 个；与 UserRuleContent 至少提供其一</p>
     */
    public $SystemRuleIDList;

    /**
     * @var array <p>用户自定义规则内容<br>入参限制：最多 100 条子规则；与 UserRuleInfo 二选一传入即可，二者同时传入时以 UserRuleInfo 为准</p>
     */
    public $UserRuleContent;

    /**
     * @var TrafficSandboxDLPUserRuleInfo <p>新增可选的结构化入参，支持 5 个检测维度（文件名称/文件大小/文件格式/外发域名/外发内容），各维度可选、至少命中一项。与 UserRuleContent 同时传入时优先生效</p>
     */
    public $UserRuleInfo;

    /**
     * @param string $RuleName <p>规则名称<br>入参限制：长度 1-128</p>
     * @param string $Level <p>规则级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
     * @param string $RuleAction <p>规则动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
     * @param string $BelongAssetType <p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
     * @param TrafficSandboxEffectScope $EffectScope <p>生效范围</p>
     * @param string $Status <p>初始状态<br>枚举值：<br>ON：启用<br>OFF：禁用</p>
     * @param array $SystemRuleIDList <p>引用的系统规则 ID 列表<br>入参限制：最多 1000 个；与 UserRuleContent 至少提供其一</p>
     * @param array $UserRuleContent <p>用户自定义规则内容<br>入参限制：最多 100 条子规则；与 UserRuleInfo 二选一传入即可，二者同时传入时以 UserRuleInfo 为准</p>
     * @param TrafficSandboxDLPUserRuleInfo $UserRuleInfo <p>新增可选的结构化入参，支持 5 个检测维度（文件名称/文件大小/文件格式/外发域名/外发内容），各维度可选、至少命中一项。与 UserRuleContent 同时传入时优先生效</p>
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

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
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

        if (array_key_exists("SystemRuleIDList",$param) and $param["SystemRuleIDList"] !== null) {
            $this->SystemRuleIDList = $param["SystemRuleIDList"];
        }

        if (array_key_exists("UserRuleContent",$param) and $param["UserRuleContent"] !== null) {
            $this->UserRuleContent = [];
            foreach ($param["UserRuleContent"] as $key => $value){
                $obj = new TrafficSandboxDLPRuleContentItem();
                $obj->deserialize($value);
                array_push($this->UserRuleContent, $obj);
            }
        }

        if (array_key_exists("UserRuleInfo",$param) and $param["UserRuleInfo"] !== null) {
            $this->UserRuleInfo = new TrafficSandboxDLPUserRuleInfo();
            $this->UserRuleInfo->deserialize($param["UserRuleInfo"]);
        }
    }
}
