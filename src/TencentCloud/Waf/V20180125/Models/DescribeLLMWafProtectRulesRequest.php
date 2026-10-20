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
 * DescribeLLMWafProtectRules请求参数结构体
 *
 * @method string getServiceId() 获取<p>SDK 模式传 ServiceId（与 Domain 二选一）</p>
 * @method void setServiceId(string $ServiceId) 设置<p>SDK 模式传 ServiceId（与 Domain 二选一）</p>
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getRuleType() 获取<p>规则类型</p>
 * @method void setRuleType(string $RuleType) 设置<p>规则类型</p>
 * @method string getDomain() 获取<p>域名模式传 Domain（与 ServiceId 二选一）</p>
 * @method void setDomain(string $Domain) 设置<p>域名模式传 Domain（与 ServiceId 二选一）</p>
 */
class DescribeLLMWafProtectRulesRequest extends AbstractModel
{
    /**
     * @var string <p>SDK 模式传 ServiceId（与 Domain 二选一）</p>
     */
    public $ServiceId;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>规则类型</p>
     */
    public $RuleType;

    /**
     * @var string <p>域名模式传 Domain（与 ServiceId 二选一）</p>
     */
    public $Domain;

    /**
     * @param string $ServiceId <p>SDK 模式传 ServiceId（与 Domain 二选一）</p>
     * @param string $InstanceId <p>实例id</p>
     * @param string $RuleType <p>规则类型</p>
     * @param string $Domain <p>域名模式传 Domain（与 ServiceId 二选一）</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
