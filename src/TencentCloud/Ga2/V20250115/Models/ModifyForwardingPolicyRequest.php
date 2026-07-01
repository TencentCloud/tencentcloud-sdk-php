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
 * ModifyForwardingPolicy请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取<p>全球加速实例ID。</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>全球加速实例ID。</p>
 * @method string getListenerId() 获取<p>监听器ID。</p>
 * @method void setListenerId(string $ListenerId) 设置<p>监听器ID。</p>
 * @method string getForwardingPolicyId() 获取<p>策略ID。</p>
 * @method void setForwardingPolicyId(string $ForwardingPolicyId) 设置<p>策略ID。</p>
 * @method string getHost() 获取<p>域名。</p><p>入参限制：长度范围在1-80。</p><p>格式必须满足正则表达式：^(<a href="?:[a-z0-9-]{0,61}[a-z0-9]">a-z0-9</a>?.)+[a-z]{2,}$</p>
 * @method void setHost(string $Host) 设置<p>域名。</p><p>入参限制：长度范围在1-80。</p><p>格式必须满足正则表达式：^(<a href="?:[a-z0-9-]{0,61}[a-z0-9]">a-z0-9</a>?.)+[a-z]{2,}$</p>
 */
class ModifyForwardingPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>全球加速实例ID。</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>监听器ID。</p>
     */
    public $ListenerId;

    /**
     * @var string <p>策略ID。</p>
     */
    public $ForwardingPolicyId;

    /**
     * @var string <p>域名。</p><p>入参限制：长度范围在1-80。</p><p>格式必须满足正则表达式：^(<a href="?:[a-z0-9-]{0,61}[a-z0-9]">a-z0-9</a>?.)+[a-z]{2,}$</p>
     */
    public $Host;

    /**
     * @param string $GlobalAcceleratorId <p>全球加速实例ID。</p>
     * @param string $ListenerId <p>监听器ID。</p>
     * @param string $ForwardingPolicyId <p>策略ID。</p>
     * @param string $Host <p>域名。</p><p>入参限制：长度范围在1-80。</p><p>格式必须满足正则表达式：^(<a href="?:[a-z0-9-]{0,61}[a-z0-9]">a-z0-9</a>?.)+[a-z]{2,}$</p>
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
