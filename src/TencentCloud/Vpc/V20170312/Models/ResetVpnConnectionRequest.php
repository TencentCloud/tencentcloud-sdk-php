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
 * ResetVpnConnection请求参数结构体
 *
 * @method string getVpnGatewayId() 获取VPN网关实例ID。
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置VPN网关实例ID。
 * @method string getVpnConnectionId() 获取VPN通道实例ID。形如：vpnx-f49l6u0z。
 * @method void setVpnConnectionId(string $VpnConnectionId) 设置VPN通道实例ID。形如：vpnx-f49l6u0z。
 */
class ResetVpnConnectionRequest extends AbstractModel
{
    /**
     * @var string VPN网关实例ID。
     */
    public $VpnGatewayId;

    /**
     * @var string VPN通道实例ID。形如：vpnx-f49l6u0z。
     */
    public $VpnConnectionId;

    /**
     * @param string $VpnGatewayId VPN网关实例ID。
     * @param string $VpnConnectionId VPN通道实例ID。形如：vpnx-f49l6u0z。
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("VpnConnectionId",$param) and $param["VpnConnectionId"] !== null) {
            $this->VpnConnectionId = $param["VpnConnectionId"];
        }
    }
}
