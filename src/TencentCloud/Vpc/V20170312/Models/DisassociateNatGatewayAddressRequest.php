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
 * @method string getNatGatewayId() 获取NAT网关的ID，形如：`nat-df45454`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关的ID，形如：`nat-df45454`。
 * @method array getPublicIpAddresses() 获取绑定NAT网关的弹性IP数组。
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置绑定NAT网关的弹性IP数组。
 */

/**
 *DisassociateNatGatewayAddress请求参数结构体
 */
class DisassociateNatGatewayAddressRequest extends AbstractModel
{
    /**
     * @var string NAT网关的ID，形如：`nat-df45454`。
     */
    public $NatGatewayId;

    /**
     * @var array 绑定NAT网关的弹性IP数组。
     */
    public $PublicIpAddresses;
    /**
     * @param string $NatGatewayId NAT网关的ID，形如：`nat-df45454`。
     * @param array $PublicIpAddresses 绑定NAT网关的弹性IP数组。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }
    }
}
