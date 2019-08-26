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
 * @method string getNatGatewayName() 获取NAT网关的名称，形如：`test_nat`。
 * @method void setNatGatewayName(string $NatGatewayName) 设置NAT网关的名称，形如：`test_nat`。
 * @method integer getInternetMaxBandwidthOut() 获取NAT网关最大外网出带宽(单位:Mbps)。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置NAT网关最大外网出带宽(单位:Mbps)。
 */

/**
 *ModifyNatGatewayAttribute请求参数结构体
 */
class ModifyNatGatewayAttributeRequest extends AbstractModel
{
    /**
     * @var string NAT网关的ID，形如：`nat-df45454`。
     */
    public $NatGatewayId;

    /**
     * @var string NAT网关的名称，形如：`test_nat`。
     */
    public $NatGatewayName;

    /**
     * @var integer NAT网关最大外网出带宽(单位:Mbps)。
     */
    public $InternetMaxBandwidthOut;
    /**
     * @param string $NatGatewayId NAT网关的ID，形如：`nat-df45454`。
     * @param string $NatGatewayName NAT网关的名称，形如：`test_nat`。
     * @param integer $InternetMaxBandwidthOut NAT网关最大外网出带宽(单位:Mbps)。
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

        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
