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
 * AssociateNatGatewayAddress请求参数结构体
 *
 * @method string getNatGatewayId() 获取NAT网关的ID，形如：`nat-df45454`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关的ID，形如：`nat-df45454`。
 * @method integer getAddressCount() 获取需要申请的弹性IP个数，系统会按您的要求生产N个弹性IP, 其中AddressCount和PublicAddresses至少传递一个。
 * @method void setAddressCount(integer $AddressCount) 设置需要申请的弹性IP个数，系统会按您的要求生产N个弹性IP, 其中AddressCount和PublicAddresses至少传递一个。
 * @method array getPublicIpAddresses() 获取绑定NAT网关的弹性IP数组，其中AddressCount和PublicAddresses至少传递一个。
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置绑定NAT网关的弹性IP数组，其中AddressCount和PublicAddresses至少传递一个。
 * @method string getZone() 获取弹性IP可用区，自动分配弹性IP时传递。
 * @method void setZone(string $Zone) 设置弹性IP可用区，自动分配弹性IP时传递。
 * @method integer getStockPublicIpAddressesBandwidthOut() 获取绑定NAT网关的弹性IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
 * @method void setStockPublicIpAddressesBandwidthOut(integer $StockPublicIpAddressesBandwidthOut) 设置绑定NAT网关的弹性IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
 * @method integer getPublicIpAddressesBandwidthOut() 获取需要申请公网IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
 * @method void setPublicIpAddressesBandwidthOut(integer $PublicIpAddressesBandwidthOut) 设置需要申请公网IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
 * @method boolean getPublicIpFromSameZone() 获取公网IP是否强制与NAT网关来自同可用区，true表示需要与NAT网关同可用区；false表示可与NAT网关不是同一个可用区。此参数只有当参数Zone存在时才能生效。
 * @method void setPublicIpFromSameZone(boolean $PublicIpFromSameZone) 设置公网IP是否强制与NAT网关来自同可用区，true表示需要与NAT网关同可用区；false表示可与NAT网关不是同一个可用区。此参数只有当参数Zone存在时才能生效。
 */
class AssociateNatGatewayAddressRequest extends AbstractModel
{
    /**
     * @var string NAT网关的ID，形如：`nat-df45454`。
     */
    public $NatGatewayId;

    /**
     * @var integer 需要申请的弹性IP个数，系统会按您的要求生产N个弹性IP, 其中AddressCount和PublicAddresses至少传递一个。
     */
    public $AddressCount;

    /**
     * @var array 绑定NAT网关的弹性IP数组，其中AddressCount和PublicAddresses至少传递一个。
     */
    public $PublicIpAddresses;

    /**
     * @var string 弹性IP可用区，自动分配弹性IP时传递。
     */
    public $Zone;

    /**
     * @var integer 绑定NAT网关的弹性IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
     */
    public $StockPublicIpAddressesBandwidthOut;

    /**
     * @var integer 需要申请公网IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
     */
    public $PublicIpAddressesBandwidthOut;

    /**
     * @var boolean 公网IP是否强制与NAT网关来自同可用区，true表示需要与NAT网关同可用区；false表示可与NAT网关不是同一个可用区。此参数只有当参数Zone存在时才能生效。
     */
    public $PublicIpFromSameZone;

    /**
     * @param string $NatGatewayId NAT网关的ID，形如：`nat-df45454`。
     * @param integer $AddressCount 需要申请的弹性IP个数，系统会按您的要求生产N个弹性IP, 其中AddressCount和PublicAddresses至少传递一个。
     * @param array $PublicIpAddresses 绑定NAT网关的弹性IP数组，其中AddressCount和PublicAddresses至少传递一个。
     * @param string $Zone 弹性IP可用区，自动分配弹性IP时传递。
     * @param integer $StockPublicIpAddressesBandwidthOut 绑定NAT网关的弹性IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
     * @param integer $PublicIpAddressesBandwidthOut 需要申请公网IP带宽大小（单位Mbps），默认为当前用户类型所能使用的最大值。
     * @param boolean $PublicIpFromSameZone 公网IP是否强制与NAT网关来自同可用区，true表示需要与NAT网关同可用区；false表示可与NAT网关不是同一个可用区。此参数只有当参数Zone存在时才能生效。
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

        if (array_key_exists("AddressCount",$param) and $param["AddressCount"] !== null) {
            $this->AddressCount = $param["AddressCount"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("StockPublicIpAddressesBandwidthOut",$param) and $param["StockPublicIpAddressesBandwidthOut"] !== null) {
            $this->StockPublicIpAddressesBandwidthOut = $param["StockPublicIpAddressesBandwidthOut"];
        }

        if (array_key_exists("PublicIpAddressesBandwidthOut",$param) and $param["PublicIpAddressesBandwidthOut"] !== null) {
            $this->PublicIpAddressesBandwidthOut = $param["PublicIpAddressesBandwidthOut"];
        }

        if (array_key_exists("PublicIpFromSameZone",$param) and $param["PublicIpFromSameZone"] !== null) {
            $this->PublicIpFromSameZone = $param["PublicIpFromSameZone"];
        }
    }
}
