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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDDoSProtectionPolicy请求参数结构体
 *
 * @method string getProtectionId() 获取<p>防护实例 ID。</p>
 * @method void setProtectionId(string $ProtectionId) 设置<p>防护实例 ID。</p>
 * @method ProtectionPolicy getProtectionPolicy() 获取<p>防护策略。</p><p>支持部分修改：对于 <code>ProtectionPolicy</code> 下的各子策略，入参未传入的子策略保持原值不变。</p>
 * @method void setProtectionPolicy(ProtectionPolicy $ProtectionPolicy) 设置<p>防护策略。</p><p>支持部分修改：对于 <code>ProtectionPolicy</code> 下的各子策略，入参未传入的子策略保持原值不变。</p>
 */
class ModifyDDoSProtectionPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>防护实例 ID。</p>
     */
    public $ProtectionId;

    /**
     * @var ProtectionPolicy <p>防护策略。</p><p>支持部分修改：对于 <code>ProtectionPolicy</code> 下的各子策略，入参未传入的子策略保持原值不变。</p>
     */
    public $ProtectionPolicy;

    /**
     * @param string $ProtectionId <p>防护实例 ID。</p>
     * @param ProtectionPolicy $ProtectionPolicy <p>防护策略。</p><p>支持部分修改：对于 <code>ProtectionPolicy</code> 下的各子策略，入参未传入的子策略保持原值不变。</p>
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
        if (array_key_exists("ProtectionId",$param) and $param["ProtectionId"] !== null) {
            $this->ProtectionId = $param["ProtectionId"];
        }

        if (array_key_exists("ProtectionPolicy",$param) and $param["ProtectionPolicy"] !== null) {
            $this->ProtectionPolicy = new ProtectionPolicy();
            $this->ProtectionPolicy->deserialize($param["ProtectionPolicy"]);
        }
    }
}
