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
 * DescribeSecurityRuleId请求参数结构体
 *
 * @method string getRuleType() 获取规则类型，取值有：
<li>waf：web托管规则；</li>
<li>acl：自定义规则；</li>
<li>rate：速率限制规则；</li>
<li>bot：Bot基础规则。</li>
 * @method void setRuleType(string $RuleType) 设置规则类型，取值有：
<li>waf：web托管规则；</li>
<li>acl：自定义规则；</li>
<li>rate：速率限制规则；</li>
<li>bot：Bot基础规则。</li>
 * @method string getEntity() 获取子域名/应用名。
 * @method void setEntity(string $Entity) 设置子域名/应用名。
 * @method array getRuleIdList() 获取规则Id数组。 当为空时查询 子域名或者应用名下所有规则
 * @method void setRuleIdList(array $RuleIdList) 设置规则Id数组。 当为空时查询 子域名或者应用名下所有规则
 * @method array getDomains() 获取子域名数组。
 * @method void setDomains(array $Domains) 设置子域名数组。
 */
class DescribeSecurityRuleIdRequest extends AbstractModel
{
    /**
     * @var string 规则类型，取值有：
<li>waf：web托管规则；</li>
<li>acl：自定义规则；</li>
<li>rate：速率限制规则；</li>
<li>bot：Bot基础规则。</li>
     */
    public $RuleType;

    /**
     * @var string 子域名/应用名。
     */
    public $Entity;

    /**
     * @var array 规则Id数组。 当为空时查询 子域名或者应用名下所有规则
     */
    public $RuleIdList;

    /**
     * @var array 子域名数组。
     */
    public $Domains;

    /**
     * @param string $RuleType 规则类型，取值有：
<li>waf：web托管规则；</li>
<li>acl：自定义规则；</li>
<li>rate：速率限制规则；</li>
<li>bot：Bot基础规则。</li>
     * @param string $Entity 子域名/应用名。
     * @param array $RuleIdList 规则Id数组。 当为空时查询 子域名或者应用名下所有规则
     * @param array $Domains 子域名数组。
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("RuleIdList",$param) and $param["RuleIdList"] !== null) {
            $this->RuleIdList = $param["RuleIdList"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
    }
}
