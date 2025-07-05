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
 * DeleteCustomRule请求参数结构体
 *
 * @method string getDomain() 获取删除的域名
 * @method void setDomain(string $Domain) 设置删除的域名
 * @method string getRuleId() 获取删除的规则ID
 * @method void setRuleId(string $RuleId) 设置删除的规则ID
 * @method string getEdition() 获取WAF的版本，clb-waf代表负载均衡WAF、sparta-waf代表SaaS WAF，默认是sparta-waf。
 * @method void setEdition(string $Edition) 设置WAF的版本，clb-waf代表负载均衡WAF、sparta-waf代表SaaS WAF，默认是sparta-waf。
 * @method array getDomainRuleIdList() 获取批量删除的规则列表
 * @method void setDomainRuleIdList(array $DomainRuleIdList) 设置批量删除的规则列表
 */
class DeleteCustomRuleRequest extends AbstractModel
{
    /**
     * @var string 删除的域名
     */
    public $Domain;

    /**
     * @var string 删除的规则ID
     */
    public $RuleId;

    /**
     * @var string WAF的版本，clb-waf代表负载均衡WAF、sparta-waf代表SaaS WAF，默认是sparta-waf。
     */
    public $Edition;

    /**
     * @var array 批量删除的规则列表
     */
    public $DomainRuleIdList;

    /**
     * @param string $Domain 删除的域名
     * @param string $RuleId 删除的规则ID
     * @param string $Edition WAF的版本，clb-waf代表负载均衡WAF、sparta-waf代表SaaS WAF，默认是sparta-waf。
     * @param array $DomainRuleIdList 批量删除的规则列表
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("DomainRuleIdList",$param) and $param["DomainRuleIdList"] !== null) {
            $this->DomainRuleIdList = [];
            foreach ($param["DomainRuleIdList"] as $key => $value){
                $obj = new DomainRuleId();
                $obj->deserialize($value);
                array_push($this->DomainRuleIdList, $obj);
            }
        }
    }
}
