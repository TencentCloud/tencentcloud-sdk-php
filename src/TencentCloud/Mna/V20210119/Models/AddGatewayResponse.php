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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddGateway返回参数结构体
 *
 * @method string getGatewayId() 获取<p>网关ID。</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关ID。</p>
 * @method string getToken() 获取<p>网关鉴权 Token。</p>
 * @method void setToken(string $Token) 设置<p>网关鉴权 Token。</p>
 * @method string getRegisterCenterUrl() 获取<p>网关注册地址。</p>
 * @method void setRegisterCenterUrl(string $RegisterCenterUrl) 设置<p>网关注册地址。</p>
 * @method string getTelemetryUrl() 获取<p>网关上报地址。</p>
 * @method void setTelemetryUrl(string $TelemetryUrl) 设置<p>网关上报地址。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class AddGatewayResponse extends AbstractModel
{
    /**
     * @var string <p>网关ID。</p>
     */
    public $GatewayId;

    /**
     * @var string <p>网关鉴权 Token。</p>
     */
    public $Token;

    /**
     * @var string <p>网关注册地址。</p>
     */
    public $RegisterCenterUrl;

    /**
     * @var string <p>网关上报地址。</p>
     */
    public $TelemetryUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $GatewayId <p>网关ID。</p>
     * @param string $Token <p>网关鉴权 Token。</p>
     * @param string $RegisterCenterUrl <p>网关注册地址。</p>
     * @param string $TelemetryUrl <p>网关上报地址。</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("RegisterCenterUrl",$param) and $param["RegisterCenterUrl"] !== null) {
            $this->RegisterCenterUrl = $param["RegisterCenterUrl"];
        }

        if (array_key_exists("TelemetryUrl",$param) and $param["TelemetryUrl"] !== null) {
            $this->TelemetryUrl = $param["TelemetryUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
