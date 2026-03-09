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
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method boolean getIsQueryApiExtractRule() 获取是否查询api提取规则策略，true表示查询
 * @method void setIsQueryApiExtractRule(boolean $IsQueryApiExtractRule) 设置是否查询api提取规则策略，true表示查询
 * @method boolean getIsQueryApiPrivilegeRule() 获取是否查询api鉴权规则
 * @method void setIsQueryApiPrivilegeRule(boolean $IsQueryApiPrivilegeRule) 设置是否查询api鉴权规则
 * @method boolean getIsQueryApiSceneRule() 获取是否查询api场景规则
 * @method void setIsQueryApiSceneRule(boolean $IsQueryApiSceneRule) 设置是否查询api场景规则
 * @method string getRuleName() 获取查询鉴权配置的时候，该rule只返回鉴权配置的规则
 * @method void setRuleName(string $RuleName) 设置查询鉴权配置的时候，该rule只返回鉴权配置的规则
 * @method boolean getIsQueryApiCustomEventRule() 获取是否查询api自定义事件规则
 * @method void setIsQueryApiCustomEventRule(boolean $IsQueryApiCustomEventRule) 设置是否查询api自定义事件规则
 * @method boolean getIsQueryApiExcludeRule() 获取是否查询无效api排除策略
 * @method void setIsQueryApiExcludeRule(boolean $IsQueryApiExcludeRule) 设置是否查询无效api排除策略
 */
class DescribeApiSecSensitiveRuleListRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var boolean 是否查询api提取规则策略，true表示查询
     */
    public $IsQueryApiExtractRule;

    /**
     * @var boolean 是否查询api鉴权规则
     */
    public $IsQueryApiPrivilegeRule;

    /**
     * @var boolean 是否查询api场景规则
     */
    public $IsQueryApiSceneRule;

    /**
     * @var string 查询鉴权配置的时候，该rule只返回鉴权配置的规则
     */
    public $RuleName;

    /**
     * @var boolean 是否查询api自定义事件规则
     */
    public $IsQueryApiCustomEventRule;

    /**
     * @var boolean 是否查询无效api排除策略
     */
    public $IsQueryApiExcludeRule;

    /**
     * @param string $Domain 域名
     * @param boolean $IsQueryApiExtractRule 是否查询api提取规则策略，true表示查询
     * @param boolean $IsQueryApiPrivilegeRule 是否查询api鉴权规则
     * @param boolean $IsQueryApiSceneRule 是否查询api场景规则
     * @param string $RuleName 查询鉴权配置的时候，该rule只返回鉴权配置的规则
     * @param boolean $IsQueryApiCustomEventRule 是否查询api自定义事件规则
     * @param boolean $IsQueryApiExcludeRule 是否查询无效api排除策略
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
    }
}
