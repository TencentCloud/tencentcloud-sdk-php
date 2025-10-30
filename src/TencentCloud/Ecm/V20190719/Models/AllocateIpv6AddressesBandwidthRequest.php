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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AllocateIpv6AddressesBandwidth请求参数结构体
 *
 * @method string getEcmRegion() 获取ECM 地域。
 * @method void setEcmRegion(string $EcmRegion) 设置ECM 地域。
 * @method array getIpv6Addresses() 获取需要开通公网访问能力的IPV6地址。
 * @method void setIpv6Addresses(array $Ipv6Addresses) 设置需要开通公网访问能力的IPV6地址。
 * @method integer getInternetMaxBandwidthOut() 获取带宽，单位Mbps，默认是1Mbps。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置带宽，单位Mbps，默认是1Mbps。
 * @method string getInternetChargeType() 获取网络计费模式，当前支持 BANDWIDTH_PACKAGE。
 * @method void setInternetChargeType(string $InternetChargeType) 设置网络计费模式，当前支持 BANDWIDTH_PACKAGE。
 */
class AllocateIpv6AddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var string ECM 地域。
     */
    public $EcmRegion;

    /**
     * @var array 需要开通公网访问能力的IPV6地址。
     */
    public $Ipv6Addresses;

    /**
     * @var integer 带宽，单位Mbps，默认是1Mbps。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 网络计费模式，当前支持 BANDWIDTH_PACKAGE。
     */
    public $InternetChargeType;

    /**
     * @param string $EcmRegion ECM 地域。
     * @param array $Ipv6Addresses 需要开通公网访问能力的IPV6地址。
     * @param integer $InternetMaxBandwidthOut 带宽，单位Mbps，默认是1Mbps。
     * @param string $InternetChargeType 网络计费模式，当前支持 BANDWIDTH_PACKAGE。
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

        if (array_key_exists("Ipv6Addresses",$param) and $param["Ipv6Addresses"] !== null) {
            $this->Ipv6Addresses = $param["Ipv6Addresses"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }
    }
}
