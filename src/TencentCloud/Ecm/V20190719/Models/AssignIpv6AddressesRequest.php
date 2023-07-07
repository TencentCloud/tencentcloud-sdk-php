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
 * AssignIpv6Addresses请求参数结构体
 *
 * @method string getEcmRegion() 获取ECM 地域
 * @method void setEcmRegion(string $EcmRegion) 设置ECM 地域
 * @method string getNetworkInterfaceId() 获取弹性网卡实例ID，形如：eni-1snva0vd。目前只支持主网卡上分配。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置弹性网卡实例ID，形如：eni-1snva0vd。目前只支持主网卡上分配。
 * @method array getIpv6Addresses() 获取指定的IPv6地址列表，单次最多指定10个。与入参Ipv6AddressCount合并计算配额。与Ipv6AddressCount必填一个。
 * @method void setIpv6Addresses(array $Ipv6Addresses) 设置指定的IPv6地址列表，单次最多指定10个。与入参Ipv6AddressCount合并计算配额。与Ipv6AddressCount必填一个。
 * @method integer getIpv6AddressCount() 获取自动分配IPv6地址个数，内网IP地址个数总和不能超过配数。与入参Ipv6Addresses合并计算配额。与Ipv6Addresses必填一个。
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置自动分配IPv6地址个数，内网IP地址个数总和不能超过配数。与入参Ipv6Addresses合并计算配额。与Ipv6Addresses必填一个。
 * @method string getISPType() 获取ipv6运营商如下：
CTCC：中国电信
CUCC：中国联通
CMCC：中国移动
 * @method void setISPType(string $ISPType) 设置ipv6运营商如下：
CTCC：中国电信
CUCC：中国联通
CMCC：中国移动
 * @method boolean getSkipCheckIPv6Address() 获取是否跳过校验一个网卡只能分配一个IPv6 CIDR。该字段通常为true（用于兼容存量子机只有一个地址的情形）。
 * @method void setSkipCheckIPv6Address(boolean $SkipCheckIPv6Address) 设置是否跳过校验一个网卡只能分配一个IPv6 CIDR。该字段通常为true（用于兼容存量子机只有一个地址的情形）。
 * @method boolean getSkipAllocateBandwidth() 获取是否跳过自动开通公网带宽。通常为true(根据运营系统的用户配置来决定是否自动开通，以支持当前子机购买时的行为）。
 * @method void setSkipAllocateBandwidth(boolean $SkipAllocateBandwidth) 设置是否跳过自动开通公网带宽。通常为true(根据运营系统的用户配置来决定是否自动开通，以支持当前子机购买时的行为）。
 * @method string getIpv6ISP() 获取该字段没有使用（已过期）。
 * @method void setIpv6ISP(string $Ipv6ISP) 设置该字段没有使用（已过期）。
 */
class AssignIpv6AddressesRequest extends AbstractModel
{
    /**
     * @var string ECM 地域
     */
    public $EcmRegion;

    /**
     * @var string 弹性网卡实例ID，形如：eni-1snva0vd。目前只支持主网卡上分配。
     */
    public $NetworkInterfaceId;

    /**
     * @var array 指定的IPv6地址列表，单次最多指定10个。与入参Ipv6AddressCount合并计算配额。与Ipv6AddressCount必填一个。
     */
    public $Ipv6Addresses;

    /**
     * @var integer 自动分配IPv6地址个数，内网IP地址个数总和不能超过配数。与入参Ipv6Addresses合并计算配额。与Ipv6Addresses必填一个。
     */
    public $Ipv6AddressCount;

    /**
     * @var string ipv6运营商如下：
CTCC：中国电信
CUCC：中国联通
CMCC：中国移动
     */
    public $ISPType;

    /**
     * @var boolean 是否跳过校验一个网卡只能分配一个IPv6 CIDR。该字段通常为true（用于兼容存量子机只有一个地址的情形）。
     */
    public $SkipCheckIPv6Address;

    /**
     * @var boolean 是否跳过自动开通公网带宽。通常为true(根据运营系统的用户配置来决定是否自动开通，以支持当前子机购买时的行为）。
     */
    public $SkipAllocateBandwidth;

    /**
     * @var string 该字段没有使用（已过期）。
     */
    public $Ipv6ISP;

    /**
     * @param string $EcmRegion ECM 地域
     * @param string $NetworkInterfaceId 弹性网卡实例ID，形如：eni-1snva0vd。目前只支持主网卡上分配。
     * @param array $Ipv6Addresses 指定的IPv6地址列表，单次最多指定10个。与入参Ipv6AddressCount合并计算配额。与Ipv6AddressCount必填一个。
     * @param integer $Ipv6AddressCount 自动分配IPv6地址个数，内网IP地址个数总和不能超过配数。与入参Ipv6Addresses合并计算配额。与Ipv6Addresses必填一个。
     * @param string $ISPType ipv6运营商如下：
CTCC：中国电信
CUCC：中国联通
CMCC：中国移动
     * @param boolean $SkipCheckIPv6Address 是否跳过校验一个网卡只能分配一个IPv6 CIDR。该字段通常为true（用于兼容存量子机只有一个地址的情形）。
     * @param boolean $SkipAllocateBandwidth 是否跳过自动开通公网带宽。通常为true(根据运营系统的用户配置来决定是否自动开通，以支持当前子机购买时的行为）。
     * @param string $Ipv6ISP 该字段没有使用（已过期）。
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

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("Ipv6Addresses",$param) and $param["Ipv6Addresses"] !== null) {
            $this->Ipv6Addresses = [];
            foreach ($param["Ipv6Addresses"] as $key => $value){
                $obj = new Ipv6Address();
                $obj->deserialize($value);
                array_push($this->Ipv6Addresses, $obj);
            }
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }

        if (array_key_exists("ISPType",$param) and $param["ISPType"] !== null) {
            $this->ISPType = $param["ISPType"];
        }

        if (array_key_exists("SkipCheckIPv6Address",$param) and $param["SkipCheckIPv6Address"] !== null) {
            $this->SkipCheckIPv6Address = $param["SkipCheckIPv6Address"];
        }

        if (array_key_exists("SkipAllocateBandwidth",$param) and $param["SkipAllocateBandwidth"] !== null) {
            $this->SkipAllocateBandwidth = $param["SkipAllocateBandwidth"];
        }

        if (array_key_exists("Ipv6ISP",$param) and $param["Ipv6ISP"] !== null) {
            $this->Ipv6ISP = $param["Ipv6ISP"];
        }
    }
}
