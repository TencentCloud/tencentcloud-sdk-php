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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteForwardingRule请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取全球加速实例ID。
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置全球加速实例ID。
 * @method string getListenerId() 获取监听器ID。
 * @method void setListenerId(string $ListenerId) 设置监听器ID。
 * @method string getForwardingPolicyId() 获取策略ID。
 * @method void setForwardingPolicyId(string $ForwardingPolicyId) 设置策略ID。
 * @method string getForwardingRuleId() 获取七层转发规则ID。
 * @method void setForwardingRuleId(string $ForwardingRuleId) 设置七层转发规则ID。
 */
class DeleteForwardingRuleRequest extends AbstractModel
{
    /**
     * @var string 全球加速实例ID。
     */
    public $GlobalAcceleratorId;

    /**
     * @var string 监听器ID。
     */
    public $ListenerId;

    /**
     * @var string 策略ID。
     */
    public $ForwardingPolicyId;

    /**
     * @var string 七层转发规则ID。
     */
    public $ForwardingRuleId;

    /**
     * @param string $GlobalAcceleratorId 全球加速实例ID。
     * @param string $ListenerId 监听器ID。
     * @param string $ForwardingPolicyId 策略ID。
     * @param string $ForwardingRuleId 七层转发规则ID。
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ForwardingPolicyId",$param) and $param["ForwardingPolicyId"] !== null) {
            $this->ForwardingPolicyId = $param["ForwardingPolicyId"];
        }

        if (array_key_exists("ForwardingRuleId",$param) and $param["ForwardingRuleId"] !== null) {
            $this->ForwardingRuleId = $param["ForwardingRuleId"];
        }
    }
}
