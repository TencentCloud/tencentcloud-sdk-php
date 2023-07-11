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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIpv6AddressesBandwidth请求参数结构体
 *
 * @method string getEcmRegion() 获取ECM 地域
 * @method void setEcmRegion(string $EcmRegion) 设置ECM 地域
 * @method integer getInternetMaxBandwidthOut() 获取修改的目标带宽，单位Mbps
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置修改的目标带宽，单位Mbps
 * @method array getIpv6Addresses() 获取IPV6地址。Ipv6Addresses和Ipv6AddressId必须且只能传一个
 * @method void setIpv6Addresses(array $Ipv6Addresses) 设置IPV6地址。Ipv6Addresses和Ipv6AddressId必须且只能传一个
 * @method array getIpv6AddressIds() 获取IPV6地址对应的唯一ID，形如eip-xxxxxxxx。Ipv6Addresses和Ipv6AddressId必须且只能传一个
 * @method void setIpv6AddressIds(array $Ipv6AddressIds) 设置IPV6地址对应的唯一ID，形如eip-xxxxxxxx。Ipv6Addresses和Ipv6AddressId必须且只能传一个
 */
class ModifyIpv6AddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var string ECM 地域
     */
    public $EcmRegion;

    /**
     * @var integer 修改的目标带宽，单位Mbps
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var array IPV6地址。Ipv6Addresses和Ipv6AddressId必须且只能传一个
     */
    public $Ipv6Addresses;

    /**
     * @var array IPV6地址对应的唯一ID，形如eip-xxxxxxxx。Ipv6Addresses和Ipv6AddressId必须且只能传一个
     */
    public $Ipv6AddressIds;

    /**
     * @param string $EcmRegion ECM 地域
     * @param integer $InternetMaxBandwidthOut 修改的目标带宽，单位Mbps
     * @param array $Ipv6Addresses IPV6地址。Ipv6Addresses和Ipv6AddressId必须且只能传一个
     * @param array $Ipv6AddressIds IPV6地址对应的唯一ID，形如eip-xxxxxxxx。Ipv6Addresses和Ipv6AddressId必须且只能传一个
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("Ipv6Addresses",$param) and $param["Ipv6Addresses"] !== null) {
            $this->Ipv6Addresses = [];
            foreach ($param["Ipv6Addresses"] as $key => $value){
                $obj = new Ipv6Address();
                $obj->deserialize($value);
                array_push($this->Ipv6Addresses, $obj);
            }
        }

        if (array_key_exists("Ipv6AddressIds",$param) and $param["Ipv6AddressIds"] !== null) {
            $this->Ipv6AddressIds = $param["Ipv6AddressIds"];
        }
    }
}
