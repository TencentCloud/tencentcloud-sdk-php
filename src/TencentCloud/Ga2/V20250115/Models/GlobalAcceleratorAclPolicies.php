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
 * 访问控制策略
 *
 * @method string getGlobalAcceleratorAclPolicyId() 获取访问控制策略ID。
 * @method void setGlobalAcceleratorAclPolicyId(string $GlobalAcceleratorAclPolicyId) 设置访问控制策略ID。
 * @method string getDefaultAction() 获取默认动作。
 * @method void setDefaultAction(string $DefaultAction) 设置默认动作。
 * @method string getStatus() 获取状态。
 * @method void setStatus(string $Status) 设置状态。
 */
class GlobalAcceleratorAclPolicies extends AbstractModel
{
    /**
     * @var string 访问控制策略ID。
     */
    public $GlobalAcceleratorAclPolicyId;

    /**
     * @var string 默认动作。
     */
    public $DefaultAction;

    /**
     * @var string 状态。
     */
    public $Status;

    /**
     * @param string $GlobalAcceleratorAclPolicyId 访问控制策略ID。
     * @param string $DefaultAction 默认动作。
     * @param string $Status 状态。
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
        if (array_key_exists("GlobalAcceleratorAclPolicyId",$param) and $param["GlobalAcceleratorAclPolicyId"] !== null) {
            $this->GlobalAcceleratorAclPolicyId = $param["GlobalAcceleratorAclPolicyId"];
        }

        if (array_key_exists("DefaultAction",$param) and $param["DefaultAction"] !== null) {
            $this->DefaultAction = $param["DefaultAction"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
