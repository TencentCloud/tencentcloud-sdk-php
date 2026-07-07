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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityPolicyCapabilities返回参数结构体
 *
 * @method array getSecurityPolicyCapabilities() 获取安全策略配置能力列表。返回当前地域支持的所有 TLS 版本及其对应的加密套件信息。

**返回内容包含：**
- 支持的 TLS 协议版本（如 TLSv1.0、TLSv1.1、TLSv1.2、TLSv1.3）。
- 每个 TLS 版本支持的加密套件列表。

**使用场景：**
- 在创建安全策略（CreateSecurityPolicy）前，调用此接口获取可选的加密套件。
- 在修改安全策略（ModifySecurityPolicyAttributes）前，确认新配置的有效性。

 * @method void setSecurityPolicyCapabilities(array $SecurityPolicyCapabilities) 设置安全策略配置能力列表。返回当前地域支持的所有 TLS 版本及其对应的加密套件信息。

**返回内容包含：**
- 支持的 TLS 协议版本（如 TLSv1.0、TLSv1.1、TLSv1.2、TLSv1.3）。
- 每个 TLS 版本支持的加密套件列表。

**使用场景：**
- 在创建安全策略（CreateSecurityPolicy）前，调用此接口获取可选的加密套件。
- 在修改安全策略（ModifySecurityPolicyAttributes）前，确认新配置的有效性。

 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityPolicyCapabilitiesResponse extends AbstractModel
{
    /**
     * @var array 安全策略配置能力列表。返回当前地域支持的所有 TLS 版本及其对应的加密套件信息。

**返回内容包含：**
- 支持的 TLS 协议版本（如 TLSv1.0、TLSv1.1、TLSv1.2、TLSv1.3）。
- 每个 TLS 版本支持的加密套件列表。

**使用场景：**
- 在创建安全策略（CreateSecurityPolicy）前，调用此接口获取可选的加密套件。
- 在修改安全策略（ModifySecurityPolicyAttributes）前，确认新配置的有效性。

     */
    public $SecurityPolicyCapabilities;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SecurityPolicyCapabilities 安全策略配置能力列表。返回当前地域支持的所有 TLS 版本及其对应的加密套件信息。

**返回内容包含：**
- 支持的 TLS 协议版本（如 TLSv1.0、TLSv1.1、TLSv1.2、TLSv1.3）。
- 每个 TLS 版本支持的加密套件列表。

**使用场景：**
- 在创建安全策略（CreateSecurityPolicy）前，调用此接口获取可选的加密套件。
- 在修改安全策略（ModifySecurityPolicyAttributes）前，确认新配置的有效性。

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
        if (array_key_exists("SecurityPolicyCapabilities",$param) and $param["SecurityPolicyCapabilities"] !== null) {
            $this->SecurityPolicyCapabilities = [];
            foreach ($param["SecurityPolicyCapabilities"] as $key => $value){
                $obj = new SecurityPolicyCapability();
                $obj->deserialize($value);
                array_push($this->SecurityPolicyCapabilities, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
