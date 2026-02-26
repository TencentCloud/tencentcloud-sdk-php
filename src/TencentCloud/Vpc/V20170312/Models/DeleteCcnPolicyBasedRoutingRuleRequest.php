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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCcnPolicyBasedRoutingRule请求参数结构体
 *
 * @method string getCcnId() 获取云联网ID
 * @method void setCcnId(string $CcnId) 设置云联网ID
 * @method array getPolicyBasedRoutingRuleIds() 获取策略路由匹配规则ID
 * @method void setPolicyBasedRoutingRuleIds(array $PolicyBasedRoutingRuleIds) 设置策略路由匹配规则ID
 */
class DeleteCcnPolicyBasedRoutingRuleRequest extends AbstractModel
{
    /**
     * @var string 云联网ID
     */
    public $CcnId;

    /**
     * @var array 策略路由匹配规则ID
     */
    public $PolicyBasedRoutingRuleIds;

    /**
     * @param string $CcnId 云联网ID
     * @param array $PolicyBasedRoutingRuleIds 策略路由匹配规则ID
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("PolicyBasedRoutingRuleIds",$param) and $param["PolicyBasedRoutingRuleIds"] !== null) {
            $this->PolicyBasedRoutingRuleIds = $param["PolicyBasedRoutingRuleIds"];
        }
    }
}
