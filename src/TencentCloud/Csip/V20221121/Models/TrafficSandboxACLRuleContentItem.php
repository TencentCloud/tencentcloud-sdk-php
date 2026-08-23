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
 * ACL 规则内容，子规则 ID 由服务端内部管理不对外暴露
 *
 * @method TrafficSandboxACLDstRule getDstRule() 获取目标（IP/端口）匹配规则
 * @method void setDstRule(TrafficSandboxACLDstRule $DstRule) 设置目标（IP/端口）匹配规则
 * @method TrafficSandboxACLURLRule getURLRule() 获取URL/协议/方法匹配规则
 * @method void setURLRule(TrafficSandboxACLURLRule $URLRule) 设置URL/协议/方法匹配规则
 */
class TrafficSandboxACLRuleContentItem extends AbstractModel
{
    /**
     * @var TrafficSandboxACLDstRule 目标（IP/端口）匹配规则
     */
    public $DstRule;

    /**
     * @var TrafficSandboxACLURLRule URL/协议/方法匹配规则
     */
    public $URLRule;

    /**
     * @param TrafficSandboxACLDstRule $DstRule 目标（IP/端口）匹配规则
     * @param TrafficSandboxACLURLRule $URLRule URL/协议/方法匹配规则
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
        if (array_key_exists("DstRule",$param) and $param["DstRule"] !== null) {
            $this->DstRule = new TrafficSandboxACLDstRule();
            $this->DstRule->deserialize($param["DstRule"]);
        }

        if (array_key_exists("URLRule",$param) and $param["URLRule"] !== null) {
            $this->URLRule = new TrafficSandboxACLURLRule();
            $this->URLRule->deserialize($param["URLRule"]);
        }
    }
}
