<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadCustomerGatewayConfiguration请求参数结构体
 *
 * @method string getVpnConnectionId() 获取VPN通道实例ID。形如：bmvpnx-f49l6u0z。
 * @method void setVpnConnectionId(string $VpnConnectionId) 设置VPN通道实例ID。形如：bmvpnx-f49l6u0z。
 * @method string getVendorName() 获取厂商,取值 h3c，cisco
 * @method void setVendorName(string $VendorName) 设置厂商,取值 h3c，cisco
 */
class DownloadCustomerGatewayConfigurationRequest extends AbstractModel
{
    /**
     * @var string VPN通道实例ID。形如：bmvpnx-f49l6u0z。
     */
    public $VpnConnectionId;

    /**
     * @var string 厂商,取值 h3c，cisco
     */
    public $VendorName;

    /**
     * @param string $VpnConnectionId VPN通道实例ID。形如：bmvpnx-f49l6u0z。
     * @param string $VendorName 厂商,取值 h3c，cisco
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
        if (array_key_exists('VpnConnectionId',$param) and $param['VpnConnectionId'] !== null) {
            $this->VpnConnectionId = $param['VpnConnectionId'];
        }

        if (array_key_exists('VendorName',$param) and $param['VendorName'] !== null) {
            $this->VendorName = $param['VendorName'];
        }
    }
}
