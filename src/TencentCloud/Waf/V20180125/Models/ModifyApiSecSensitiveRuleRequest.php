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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApiSecSensitiveRule请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getStatus() 获取1表示开，0表示关，3表示删除
 * @method void setStatus(integer $Status) 设置1表示开，0表示关，3表示删除
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method ApiSecCustomSensitiveRule getCustomRule() 获取客户自定义配置
 * @method void setCustomRule(ApiSecCustomSensitiveRule $CustomRule) 设置客户自定义配置
 * @method array getRuleNameList() 获取rulename列表，批量操作的时候填改值
 * @method void setRuleNameList(array $RuleNameList) 设置rulename列表，批量操作的时候填改值
 * @method ApiSecExtractRule getCustomApiExtractRule() 获取api提取规则内容
 * @method void setCustomApiExtractRule(ApiSecExtractRule $CustomApiExtractRule) 设置api提取规则内容
 * @method array getApiExtractRuleName() 获取批量操作的时候的api提取规则
 * @method void setApiExtractRuleName(array $ApiExtractRuleName) 设置批量操作的时候的api提取规则
 * @method ApiSecPrivilegeRule getApiSecPrivilegeRule() 获取自定义api鉴权规则
 * @method void setApiSecPrivilegeRule(ApiSecPrivilegeRule $ApiSecPrivilegeRule) 设置自定义api鉴权规则
 * @method array getApiSecPrivilegeRuleName() 获取匹配操作时候的api鉴权规则
 * @method void setApiSecPrivilegeRuleName(array $ApiSecPrivilegeRuleName) 设置匹配操作时候的api鉴权规则
 * @method array getApiSecSceneRuleNameList() 获取批量操作的时候的自定义场景列表
 * @method void setApiSecSceneRuleNameList(array $ApiSecSceneRuleNameList) 设置批量操作的时候的自定义场景列表
 * @method ApiSecSceneRule getApiSecSceneRule() 获取单条自定义api场景规则
 * @method void setApiSecSceneRule(ApiSecSceneRule $ApiSecSceneRule) 设置单条自定义api场景规则
 * @method array getApiSecCustomEventRuleNameList() 获取批量操作的时候的自定义事件规则列表
 * @method void setApiSecCustomEventRuleNameList(array $ApiSecCustomEventRuleNameList) 设置批量操作的时候的自定义事件规则列表
 * @method ApiSecCustomEventRule getApiSecCustomEventRuleRule() 获取自定义事件规则
 * @method void setApiSecCustomEventRuleRule(ApiSecCustomEventRule $ApiSecCustomEventRuleRule) 设置自定义事件规则
 */
class ModifyApiSecSensitiveRuleRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 1表示开，0表示关，3表示删除
     */
    public $Status;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var ApiSecCustomSensitiveRule 客户自定义配置
     */
    public $CustomRule;

    /**
     * @var array rulename列表，批量操作的时候填改值
     */
    public $RuleNameList;

    /**
     * @var ApiSecExtractRule api提取规则内容
     */
    public $CustomApiExtractRule;

    /**
     * @var array 批量操作的时候的api提取规则
     */
    public $ApiExtractRuleName;

    /**
     * @var ApiSecPrivilegeRule 自定义api鉴权规则
     */
    public $ApiSecPrivilegeRule;

    /**
     * @var array 匹配操作时候的api鉴权规则
     */
    public $ApiSecPrivilegeRuleName;

    /**
     * @var array 批量操作的时候的自定义场景列表
     */
    public $ApiSecSceneRuleNameList;

    /**
     * @var ApiSecSceneRule 单条自定义api场景规则
     */
    public $ApiSecSceneRule;

    /**
     * @var array 批量操作的时候的自定义事件规则列表
     */
    public $ApiSecCustomEventRuleNameList;

    /**
     * @var ApiSecCustomEventRule 自定义事件规则
     */
    public $ApiSecCustomEventRuleRule;

    /**
     * @param string $Domain 域名
     * @param integer $Status 1表示开，0表示关，3表示删除
     * @param string $RuleName 规则名称
     * @param ApiSecCustomSensitiveRule $CustomRule 客户自定义配置
     * @param array $RuleNameList rulename列表，批量操作的时候填改值
     * @param ApiSecExtractRule $CustomApiExtractRule api提取规则内容
     * @param array $ApiExtractRuleName 批量操作的时候的api提取规则
     * @param ApiSecPrivilegeRule $ApiSecPrivilegeRule 自定义api鉴权规则
     * @param array $ApiSecPrivilegeRuleName 匹配操作时候的api鉴权规则
     * @param array $ApiSecSceneRuleNameList 批量操作的时候的自定义场景列表
     * @param ApiSecSceneRule $ApiSecSceneRule 单条自定义api场景规则
     * @param array $ApiSecCustomEventRuleNameList 批量操作的时候的自定义事件规则列表
     * @param ApiSecCustomEventRule $ApiSecCustomEventRuleRule 自定义事件规则
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("CustomRule",$param) and $param["CustomRule"] !== null) {
            $this->CustomRule = new ApiSecCustomSensitiveRule();
            $this->CustomRule->deserialize($param["CustomRule"]);
        }

        if (array_key_exists("RuleNameList",$param) and $param["RuleNameList"] !== null) {
            $this->RuleNameList = $param["RuleNameList"];
        }

        if (array_key_exists("CustomApiExtractRule",$param) and $param["CustomApiExtractRule"] !== null) {
            $this->CustomApiExtractRule = new ApiSecExtractRule();
            $this->CustomApiExtractRule->deserialize($param["CustomApiExtractRule"]);
        }

        if (array_key_exists("ApiExtractRuleName",$param) and $param["ApiExtractRuleName"] !== null) {
            $this->ApiExtractRuleName = $param["ApiExtractRuleName"];
        }

        if (array_key_exists("ApiSecPrivilegeRule",$param) and $param["ApiSecPrivilegeRule"] !== null) {
            $this->ApiSecPrivilegeRule = new ApiSecPrivilegeRule();
            $this->ApiSecPrivilegeRule->deserialize($param["ApiSecPrivilegeRule"]);
        }

        if (array_key_exists("ApiSecPrivilegeRuleName",$param) and $param["ApiSecPrivilegeRuleName"] !== null) {
            $this->ApiSecPrivilegeRuleName = $param["ApiSecPrivilegeRuleName"];
        }

        if (array_key_exists("ApiSecSceneRuleNameList",$param) and $param["ApiSecSceneRuleNameList"] !== null) {
            $this->ApiSecSceneRuleNameList = $param["ApiSecSceneRuleNameList"];
        }

        if (array_key_exists("ApiSecSceneRule",$param) and $param["ApiSecSceneRule"] !== null) {
            $this->ApiSecSceneRule = new ApiSecSceneRule();
            $this->ApiSecSceneRule->deserialize($param["ApiSecSceneRule"]);
        }

        if (array_key_exists("ApiSecCustomEventRuleNameList",$param) and $param["ApiSecCustomEventRuleNameList"] !== null) {
            $this->ApiSecCustomEventRuleNameList = $param["ApiSecCustomEventRuleNameList"];
        }

        if (array_key_exists("ApiSecCustomEventRuleRule",$param) and $param["ApiSecCustomEventRuleRule"] !== null) {
            $this->ApiSecCustomEventRuleRule = new ApiSecCustomEventRule();
            $this->ApiSecCustomEventRuleRule->deserialize($param["ApiSecCustomEventRuleRule"]);
        }
    }
}
