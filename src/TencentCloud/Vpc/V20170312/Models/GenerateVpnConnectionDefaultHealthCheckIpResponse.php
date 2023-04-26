<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * GenerateVpnConnectionDefaultHealthCheckIp返回参数结构体
 *
 * @method string getHealthCheckLocalIp() 获取VPN通道健康检查本端ip
 * @method void setHealthCheckLocalIp(string $HealthCheckLocalIp) 设置VPN通道健康检查本端ip
 * @method string getHealthCheckRemoteIp() 获取VPN通道健康检查对端ip
 * @method void setHealthCheckRemoteIp(string $HealthCheckRemoteIp) 设置VPN通道健康检查对端ip
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GenerateVpnConnectionDefaultHealthCheckIpResponse extends AbstractModel
{
    /**
     * @var string VPN通道健康检查本端ip
     */
    public $HealthCheckLocalIp;

    /**
     * @var string VPN通道健康检查对端ip
     */
    public $HealthCheckRemoteIp;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $HealthCheckLocalIp VPN通道健康检查本端ip
     * @param string $HealthCheckRemoteIp VPN通道健康检查对端ip
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HealthCheckLocalIp",$param) and $param["HealthCheckLocalIp"] !== null) {
            $this->HealthCheckLocalIp = $param["HealthCheckLocalIp"];
        }

        if (array_key_exists("HealthCheckRemoteIp",$param) and $param["HealthCheckRemoteIp"] !== null) {
            $this->HealthCheckRemoteIp = $param["HealthCheckRemoteIp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
