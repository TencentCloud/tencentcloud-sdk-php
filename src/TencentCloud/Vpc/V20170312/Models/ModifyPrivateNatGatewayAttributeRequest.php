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
 * ModifyPrivateNatGatewayAttribute请求参数结构体
 *
 * @method string getNatGatewayId() 获取私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
 * @method string getNatGatewayName() 获取私网网关名称，可任意命名，但不得超过60个字符。
 * @method void setNatGatewayName(string $NatGatewayName) 设置私网网关名称，可任意命名，但不得超过60个字符。
 * @method boolean getDeletionProtectionEnabled() 获取私网NAT实例是否开启删除保护
 * @method void setDeletionProtectionEnabled(boolean $DeletionProtectionEnabled) 设置私网NAT实例是否开启删除保护
 */
class ModifyPrivateNatGatewayAttributeRequest extends AbstractModel
{
    /**
     * @var string 私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
     */
    public $NatGatewayId;

    /**
     * @var string 私网网关名称，可任意命名，但不得超过60个字符。
     */
    public $NatGatewayName;

    /**
     * @var boolean 私网NAT实例是否开启删除保护
     */
    public $DeletionProtectionEnabled;

    /**
     * @param string $NatGatewayId 私网网关唯一`ID`，形如：`intranat-xxxxxxxx`。
     * @param string $NatGatewayName 私网网关名称，可任意命名，但不得超过60个字符。
     * @param boolean $DeletionProtectionEnabled 私网NAT实例是否开启删除保护
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("DeletionProtectionEnabled",$param) and $param["DeletionProtectionEnabled"] !== null) {
            $this->DeletionProtectionEnabled = $param["DeletionProtectionEnabled"];
        }
    }
}
