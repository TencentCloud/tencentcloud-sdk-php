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
 * DeleteVpnGatewaySslClient请求参数结构体
 *
 * @method string getSslVpnClientId() 获取SSL-VPN-CLIENT 实例ID。不可和SslVpnClientIds同时使用。
 * @method void setSslVpnClientId(string $SslVpnClientId) 设置SSL-VPN-CLIENT 实例ID。不可和SslVpnClientIds同时使用。
 * @method array getSslVpnClientIds() 获取SSL-VPN-CLIENT 实例ID列表。批量删除时使用。不可和SslVpnClientId同时使用。
 * @method void setSslVpnClientIds(array $SslVpnClientIds) 设置SSL-VPN-CLIENT 实例ID列表。批量删除时使用。不可和SslVpnClientId同时使用。
 */
class DeleteVpnGatewaySslClientRequest extends AbstractModel
{
    /**
     * @var string SSL-VPN-CLIENT 实例ID。不可和SslVpnClientIds同时使用。
     */
    public $SslVpnClientId;

    /**
     * @var array SSL-VPN-CLIENT 实例ID列表。批量删除时使用。不可和SslVpnClientId同时使用。
     */
    public $SslVpnClientIds;

    /**
     * @param string $SslVpnClientId SSL-VPN-CLIENT 实例ID。不可和SslVpnClientIds同时使用。
     * @param array $SslVpnClientIds SSL-VPN-CLIENT 实例ID列表。批量删除时使用。不可和SslVpnClientId同时使用。
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
        if (array_key_exists("SslVpnClientId",$param) and $param["SslVpnClientId"] !== null) {
            $this->SslVpnClientId = $param["SslVpnClientId"];
        }

        if (array_key_exists("SslVpnClientIds",$param) and $param["SslVpnClientIds"] !== null) {
            $this->SslVpnClientIds = $param["SslVpnClientIds"];
        }
    }
}
