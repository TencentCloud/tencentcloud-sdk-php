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
 * ModifyGlobalAcceleratorAclPolicy请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取<p>全球加速实例ID。</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>全球加速实例ID。</p>
 * @method string getGlobalAcceleratorAclPolicyId() 获取<p>访问控制策略ID。</p>
 * @method void setGlobalAcceleratorAclPolicyId(string $GlobalAcceleratorAclPolicyId) 设置<p>访问控制策略ID。</p>
 * @method string getStatus() 获取<p>访问控制策略状态。</p><p>枚举值：</p><ul><li>OPEN： 打开。</li><li>CLOSE： 关闭。</li></ul>
 * @method void setStatus(string $Status) 设置<p>访问控制策略状态。</p><p>枚举值：</p><ul><li>OPEN： 打开。</li><li>CLOSE： 关闭。</li></ul>
 */
class ModifyGlobalAcceleratorAclPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>全球加速实例ID。</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>访问控制策略ID。</p>
     */
    public $GlobalAcceleratorAclPolicyId;

    /**
     * @var string <p>访问控制策略状态。</p><p>枚举值：</p><ul><li>OPEN： 打开。</li><li>CLOSE： 关闭。</li></ul>
     */
    public $Status;

    /**
     * @param string $GlobalAcceleratorId <p>全球加速实例ID。</p>
     * @param string $GlobalAcceleratorAclPolicyId <p>访问控制策略ID。</p>
     * @param string $Status <p>访问控制策略状态。</p><p>枚举值：</p><ul><li>OPEN： 打开。</li><li>CLOSE： 关闭。</li></ul>
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

        if (array_key_exists("GlobalAcceleratorAclPolicyId",$param) and $param["GlobalAcceleratorAclPolicyId"] !== null) {
            $this->GlobalAcceleratorAclPolicyId = $param["GlobalAcceleratorAclPolicyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
