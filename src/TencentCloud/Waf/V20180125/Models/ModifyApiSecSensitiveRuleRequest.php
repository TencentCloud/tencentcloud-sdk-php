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
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method integer getStatus() 获取<p>1表示开，0表示关，3表示删除</p>
 * @method void setStatus(integer $Status) 设置<p>1表示开，0表示关，3表示删除</p>
 * @method string getRuleName() 获取<p>规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
 * @method array getRuleNameList() 获取<p>rulename列表，批量操作的时候填改值</p>
 * @method void setRuleNameList(array $RuleNameList) 设置<p>rulename列表，批量操作的时候填改值</p>
 * @method ApiSecCustomSensitiveRule getCustomRule() 获取<p>客户自定义配置</p>
 * @method void setCustomRule(ApiSecCustomSensitiveRule $CustomRule) 设置<p>客户自定义配置</p>
 * @method array getApiExtractRuleName() 获取<p>批量操作的时候的api提取规则</p>
 * @method void setApiExtractRuleName(array $ApiExtractRuleName) 设置<p>批量操作的时候的api提取规则</p>
 * @method ApiSecExtractRule getCustomApiExtractRule() 获取<p>api提取规则内容</p>
 * @method void setCustomApiExtractRule(ApiSecExtractRule $CustomApiExtractRule) 设置<p>api提取规则内容</p>
 * @method array getApiSecPrivilegeRuleName() 获取<p>匹配操作时候的api鉴权规则</p>
 * @method void setApiSecPrivilegeRuleName(array $ApiSecPrivilegeRuleName) 设置<p>匹配操作时候的api鉴权规则</p>
 * @method ApiSecPrivilegeRule getApiSecPrivilegeRule() 获取<p>自定义api鉴权规则</p>
 * @method void setApiSecPrivilegeRule(ApiSecPrivilegeRule $ApiSecPrivilegeRule) 设置<p>自定义api鉴权规则</p>
 * @method array getApiSecSceneRuleNameList() 获取<p>批量操作的时候的自定义场景列表</p>
 * @method void setApiSecSceneRuleNameList(array $ApiSecSceneRuleNameList) 设置<p>批量操作的时候的自定义场景列表</p>
 * @method ApiSecSceneRule getApiSecSceneRule() 获取<p>单条自定义api场景规则</p>
 * @method void setApiSecSceneRule(ApiSecSceneRule $ApiSecSceneRule) 设置<p>单条自定义api场景规则</p>
 * @method array getApiSecCustomEventRuleNameList() 获取<p>批量操作的时候的自定义事件规则列表</p>
 * @method void setApiSecCustomEventRuleNameList(array $ApiSecCustomEventRuleNameList) 设置<p>批量操作的时候的自定义事件规则列表</p>
 * @method ApiSecCustomEventRule getApiSecCustomEventRuleRule() 获取<p>自定义事件规则</p>
 * @method void setApiSecCustomEventRuleRule(ApiSecCustomEventRule $ApiSecCustomEventRuleRule) 设置<p>自定义事件规则</p>
 * @method array getApiExcludeRuleName() 获取<p>批量操作的时候的无效api排除规则</p>
 * @method void setApiExcludeRuleName(array $ApiExcludeRuleName) 设置<p>批量操作的时候的无效api排除规则</p>
 * @method ApiSecExcludeRule getCustomApiExcludeRule() 获取<p>无效api排除规则</p>
 * @method void setCustomApiExcludeRule(ApiSecExcludeRule $CustomApiExcludeRule) 设置<p>无效api排除规则</p>
 * @method array getApiSecSensitiveWhiteRuleNameList() 获取<p>批量操作时的敏感数据加白规则名称列表</p>
 * @method void setApiSecSensitiveWhiteRuleNameList(array $ApiSecSensitiveWhiteRuleNameList) 设置<p>批量操作时的敏感数据加白规则名称列表</p>
 * @method ApiSecSensitiveWhiteRule getApiSecSensitiveWhiteRuleRule() 获取<p>敏感数据加白规则</p>
 * @method void setApiSecSensitiveWhiteRuleRule(ApiSecSensitiveWhiteRule $ApiSecSensitiveWhiteRuleRule) 设置<p>敏感数据加白规则</p>
 */
class ModifyApiSecSensitiveRuleRequest extends AbstractModel
{
    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var integer <p>1表示开，0表示关，3表示删除</p>
     */
    public $Status;

    /**
     * @var string <p>规则名称</p>
     */
    public $RuleName;

    /**
     * @var array <p>rulename列表，批量操作的时候填改值</p>
     */
    public $RuleNameList;

    /**
     * @var ApiSecCustomSensitiveRule <p>客户自定义配置</p>
     */
    public $CustomRule;

    /**
     * @var array <p>批量操作的时候的api提取规则</p>
     */
    public $ApiExtractRuleName;

    /**
     * @var ApiSecExtractRule <p>api提取规则内容</p>
     */
    public $CustomApiExtractRule;

    /**
     * @var array <p>匹配操作时候的api鉴权规则</p>
     */
    public $ApiSecPrivilegeRuleName;

    /**
     * @var ApiSecPrivilegeRule <p>自定义api鉴权规则</p>
     */
    public $ApiSecPrivilegeRule;

    /**
     * @var array <p>批量操作的时候的自定义场景列表</p>
     */
    public $ApiSecSceneRuleNameList;

    /**
     * @var ApiSecSceneRule <p>单条自定义api场景规则</p>
     */
    public $ApiSecSceneRule;

    /**
     * @var array <p>批量操作的时候的自定义事件规则列表</p>
     */
    public $ApiSecCustomEventRuleNameList;

    /**
     * @var ApiSecCustomEventRule <p>自定义事件规则</p>
     */
    public $ApiSecCustomEventRuleRule;

    /**
     * @var array <p>批量操作的时候的无效api排除规则</p>
     */
    public $ApiExcludeRuleName;

    /**
     * @var ApiSecExcludeRule <p>无效api排除规则</p>
     */
    public $CustomApiExcludeRule;

    /**
     * @var array <p>批量操作时的敏感数据加白规则名称列表</p>
     */
    public $ApiSecSensitiveWhiteRuleNameList;

    /**
     * @var ApiSecSensitiveWhiteRule <p>敏感数据加白规则</p>
     */
    public $ApiSecSensitiveWhiteRuleRule;

    /**
     * @param string $Domain <p>域名</p>
     * @param integer $Status <p>1表示开，0表示关，3表示删除</p>
     * @param string $RuleName <p>规则名称</p>
     * @param array $RuleNameList <p>rulename列表，批量操作的时候填改值</p>
     * @param ApiSecCustomSensitiveRule $CustomRule <p>客户自定义配置</p>
     * @param array $ApiExtractRuleName <p>批量操作的时候的api提取规则</p>
     * @param ApiSecExtractRule $CustomApiExtractRule <p>api提取规则内容</p>
     * @param array $ApiSecPrivilegeRuleName <p>匹配操作时候的api鉴权规则</p>
     * @param ApiSecPrivilegeRule $ApiSecPrivilegeRule <p>自定义api鉴权规则</p>
     * @param array $ApiSecSceneRuleNameList <p>批量操作的时候的自定义场景列表</p>
     * @param ApiSecSceneRule $ApiSecSceneRule <p>单条自定义api场景规则</p>
     * @param array $ApiSecCustomEventRuleNameList <p>批量操作的时候的自定义事件规则列表</p>
     * @param ApiSecCustomEventRule $ApiSecCustomEventRuleRule <p>自定义事件规则</p>
     * @param array $ApiExcludeRuleName <p>批量操作的时候的无效api排除规则</p>
     * @param ApiSecExcludeRule $CustomApiExcludeRule <p>无效api排除规则</p>
     * @param array $ApiSecSensitiveWhiteRuleNameList <p>批量操作时的敏感数据加白规则名称列表</p>
     * @param ApiSecSensitiveWhiteRule $ApiSecSensitiveWhiteRuleRule <p>敏感数据加白规则</p>
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

        if (array_key_exists("RuleNameList",$param) and $param["RuleNameList"] !== null) {
            $this->RuleNameList = $param["RuleNameList"];
        }

        if (array_key_exists("CustomRule",$param) and $param["CustomRule"] !== null) {
            $this->CustomRule = new ApiSecCustomSensitiveRule();
            $this->CustomRule->deserialize($param["CustomRule"]);
        }

        if (array_key_exists("ApiExtractRuleName",$param) and $param["ApiExtractRuleName"] !== null) {
            $this->ApiExtractRuleName = $param["ApiExtractRuleName"];
        }

        if (array_key_exists("CustomApiExtractRule",$param) and $param["CustomApiExtractRule"] !== null) {
            $this->CustomApiExtractRule = new ApiSecExtractRule();
            $this->CustomApiExtractRule->deserialize($param["CustomApiExtractRule"]);
        }

        if (array_key_exists("ApiSecPrivilegeRuleName",$param) and $param["ApiSecPrivilegeRuleName"] !== null) {
            $this->ApiSecPrivilegeRuleName = $param["ApiSecPrivilegeRuleName"];
        }

        if (array_key_exists("ApiSecPrivilegeRule",$param) and $param["ApiSecPrivilegeRule"] !== null) {
            $this->ApiSecPrivilegeRule = new ApiSecPrivilegeRule();
            $this->ApiSecPrivilegeRule->deserialize($param["ApiSecPrivilegeRule"]);
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

        if (array_key_exists("ApiExcludeRuleName",$param) and $param["ApiExcludeRuleName"] !== null) {
            $this->ApiExcludeRuleName = $param["ApiExcludeRuleName"];
        }

        if (array_key_exists("CustomApiExcludeRule",$param) and $param["CustomApiExcludeRule"] !== null) {
            $this->CustomApiExcludeRule = new ApiSecExcludeRule();
            $this->CustomApiExcludeRule->deserialize($param["CustomApiExcludeRule"]);
        }

        if (array_key_exists("ApiSecSensitiveWhiteRuleNameList",$param) and $param["ApiSecSensitiveWhiteRuleNameList"] !== null) {
            $this->ApiSecSensitiveWhiteRuleNameList = $param["ApiSecSensitiveWhiteRuleNameList"];
        }

        if (array_key_exists("ApiSecSensitiveWhiteRuleRule",$param) and $param["ApiSecSensitiveWhiteRuleRule"] !== null) {
            $this->ApiSecSensitiveWhiteRuleRule = new ApiSecSensitiveWhiteRule();
            $this->ApiSecSensitiveWhiteRuleRule->deserialize($param["ApiSecSensitiveWhiteRuleRule"]);
        }
    }
}
