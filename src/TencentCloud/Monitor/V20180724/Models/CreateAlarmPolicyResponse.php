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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAlarmPolicy返回参数结构体
 *
 * @method string getPolicyId() 获取<p>告警策略 ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>告警策略 ID</p>
 * @method string getOriginId() 获取<p>可用于实例、实例组的绑定和解绑接口（<a href="https://cloud.tencent.com/document/product/248/40421">BindingPolicyObject</a>、<a href="https://cloud.tencent.com/document/product/248/40568">UnBindingAllPolicyObject</a>、<a href="https://cloud.tencent.com/document/product/248/40567">UnBindingPolicyObject</a>）的策略 ID</p>
 * @method void setOriginId(string $OriginId) 设置<p>可用于实例、实例组的绑定和解绑接口（<a href="https://cloud.tencent.com/document/product/248/40421">BindingPolicyObject</a>、<a href="https://cloud.tencent.com/document/product/248/40568">UnBindingAllPolicyObject</a>、<a href="https://cloud.tencent.com/document/product/248/40567">UnBindingPolicyObject</a>）的策略 ID</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAlarmPolicyResponse extends AbstractModel
{
    /**
     * @var string <p>告警策略 ID</p>
     */
    public $PolicyId;

    /**
     * @var string <p>可用于实例、实例组的绑定和解绑接口（<a href="https://cloud.tencent.com/document/product/248/40421">BindingPolicyObject</a>、<a href="https://cloud.tencent.com/document/product/248/40568">UnBindingAllPolicyObject</a>、<a href="https://cloud.tencent.com/document/product/248/40567">UnBindingPolicyObject</a>）的策略 ID</p>
     */
    public $OriginId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PolicyId <p>告警策略 ID</p>
     * @param string $OriginId <p>可用于实例、实例组的绑定和解绑接口（<a href="https://cloud.tencent.com/document/product/248/40421">BindingPolicyObject</a>、<a href="https://cloud.tencent.com/document/product/248/40568">UnBindingAllPolicyObject</a>、<a href="https://cloud.tencent.com/document/product/248/40567">UnBindingPolicyObject</a>）的策略 ID</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
