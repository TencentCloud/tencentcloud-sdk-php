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
 * DescribeApiSecSensitiveRuleList请求参数结构体
 *
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method boolean getIsQueryApiExtractRule() 获取<p>是否查询api提取规则策略，true表示查询</p>
 * @method void setIsQueryApiExtractRule(boolean $IsQueryApiExtractRule) 设置<p>是否查询api提取规则策略，true表示查询</p>
 * @method boolean getIsQueryApiPrivilegeRule() 获取<p>是否查询api鉴权规则</p>
 * @method void setIsQueryApiPrivilegeRule(boolean $IsQueryApiPrivilegeRule) 设置<p>是否查询api鉴权规则</p>
 * @method boolean getIsQueryApiSceneRule() 获取<p>是否查询api场景规则</p>
 * @method void setIsQueryApiSceneRule(boolean $IsQueryApiSceneRule) 设置<p>是否查询api场景规则</p>
 * @method string getRuleName() 获取<p>查询鉴权配置的时候，该rule只返回鉴权配置的规则</p>
 * @method void setRuleName(string $RuleName) 设置<p>查询鉴权配置的时候，该rule只返回鉴权配置的规则</p>
 * @method boolean getIsQueryApiCustomEventRule() 获取<p>是否查询api自定义事件规则</p>
 * @method void setIsQueryApiCustomEventRule(boolean $IsQueryApiCustomEventRule) 设置<p>是否查询api自定义事件规则</p>
 * @method boolean getIsQueryApiExcludeRule() 获取<p>是否查询无效api排除策略</p>
 * @method void setIsQueryApiExcludeRule(boolean $IsQueryApiExcludeRule) 设置<p>是否查询无效api排除策略</p>
 * @method boolean getIsQueryApiSensitiveWhiteRule() 获取<p>是否查询敏感数据加白规则</p>
 * @method void setIsQueryApiSensitiveWhiteRule(boolean $IsQueryApiSensitiveWhiteRule) 设置<p>是否查询敏感数据加白规则</p>
 */
class DescribeApiSecSensitiveRuleListRequest extends AbstractModel
{
    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var boolean <p>是否查询api提取规则策略，true表示查询</p>
     */
    public $IsQueryApiExtractRule;

    /**
     * @var boolean <p>是否查询api鉴权规则</p>
     */
    public $IsQueryApiPrivilegeRule;

    /**
     * @var boolean <p>是否查询api场景规则</p>
     */
    public $IsQueryApiSceneRule;

    /**
     * @var string <p>查询鉴权配置的时候，该rule只返回鉴权配置的规则</p>
     */
    public $RuleName;

    /**
     * @var boolean <p>是否查询api自定义事件规则</p>
     */
    public $IsQueryApiCustomEventRule;

    /**
     * @var boolean <p>是否查询无效api排除策略</p>
     */
    public $IsQueryApiExcludeRule;

    /**
     * @var boolean <p>是否查询敏感数据加白规则</p>
     */
    public $IsQueryApiSensitiveWhiteRule;

    /**
     * @param string $Domain <p>域名</p>
     * @param boolean $IsQueryApiExtractRule <p>是否查询api提取规则策略，true表示查询</p>
     * @param boolean $IsQueryApiPrivilegeRule <p>是否查询api鉴权规则</p>
     * @param boolean $IsQueryApiSceneRule <p>是否查询api场景规则</p>
     * @param string $RuleName <p>查询鉴权配置的时候，该rule只返回鉴权配置的规则</p>
     * @param boolean $IsQueryApiCustomEventRule <p>是否查询api自定义事件规则</p>
     * @param boolean $IsQueryApiExcludeRule <p>是否查询无效api排除策略</p>
     * @param boolean $IsQueryApiSensitiveWhiteRule <p>是否查询敏感数据加白规则</p>
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

        if (array_key_exists("IsQueryApiExtractRule",$param) and $param["IsQueryApiExtractRule"] !== null) {
            $this->IsQueryApiExtractRule = $param["IsQueryApiExtractRule"];
        }

        if (array_key_exists("IsQueryApiPrivilegeRule",$param) and $param["IsQueryApiPrivilegeRule"] !== null) {
            $this->IsQueryApiPrivilegeRule = $param["IsQueryApiPrivilegeRule"];
        }

        if (array_key_exists("IsQueryApiSceneRule",$param) and $param["IsQueryApiSceneRule"] !== null) {
            $this->IsQueryApiSceneRule = $param["IsQueryApiSceneRule"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("IsQueryApiCustomEventRule",$param) and $param["IsQueryApiCustomEventRule"] !== null) {
            $this->IsQueryApiCustomEventRule = $param["IsQueryApiCustomEventRule"];
        }

        if (array_key_exists("IsQueryApiExcludeRule",$param) and $param["IsQueryApiExcludeRule"] !== null) {
            $this->IsQueryApiExcludeRule = $param["IsQueryApiExcludeRule"];
        }

        if (array_key_exists("IsQueryApiSensitiveWhiteRule",$param) and $param["IsQueryApiSensitiveWhiteRule"] !== null) {
            $this->IsQueryApiSensitiveWhiteRule = $param["IsQueryApiSensitiveWhiteRule"];
        }
    }
}
