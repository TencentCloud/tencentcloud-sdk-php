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
 * CreateVpnGatewaySslClient请求参数结构体
 *
 * @method string getSslVpnServerId() 获取SSL-VPN-SERVER 实例ID。
 * @method void setSslVpnServerId(string $SslVpnServerId) 设置SSL-VPN-SERVER 实例ID。
 * @method string getSslVpnClientName() 获取SSL-VPN-CLIENT实例Name。不可和SslVpnClientNames同时使用。
 * @method void setSslVpnClientName(string $SslVpnClientName) 设置SSL-VPN-CLIENT实例Name。不可和SslVpnClientNames同时使用。
 * @method array getSslVpnClientNames() 获取SSL-VPN-CLIENT实例Name数字。批量创建时使用。不可和SslVpnClientName同时使用。
 * @method void setSslVpnClientNames(array $SslVpnClientNames) 设置SSL-VPN-CLIENT实例Name数字。批量创建时使用。不可和SslVpnClientName同时使用。
 */
class CreateVpnGatewaySslClientRequest extends AbstractModel
{
    /**
     * @var string SSL-VPN-SERVER 实例ID。
     */
    public $SslVpnServerId;

    /**
     * @var string SSL-VPN-CLIENT实例Name。不可和SslVpnClientNames同时使用。
     */
    public $SslVpnClientName;

    /**
     * @var array SSL-VPN-CLIENT实例Name数字。批量创建时使用。不可和SslVpnClientName同时使用。
     */
    public $SslVpnClientNames;

    /**
     * @param string $SslVpnServerId SSL-VPN-SERVER 实例ID。
     * @param string $SslVpnClientName SSL-VPN-CLIENT实例Name。不可和SslVpnClientNames同时使用。
     * @param array $SslVpnClientNames SSL-VPN-CLIENT实例Name数字。批量创建时使用。不可和SslVpnClientName同时使用。
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
        if (array_key_exists("SslVpnServerId",$param) and $param["SslVpnServerId"] !== null) {
            $this->SslVpnServerId = $param["SslVpnServerId"];
        }

        if (array_key_exists("SslVpnClientName",$param) and $param["SslVpnClientName"] !== null) {
            $this->SslVpnClientName = $param["SslVpnClientName"];
        }

        if (array_key_exists("SslVpnClientNames",$param) and $param["SslVpnClientNames"] !== null) {
            $this->SslVpnClientNames = $param["SslVpnClientNames"];
        }
    }
}
