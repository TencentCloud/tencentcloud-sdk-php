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
 * @method integer getAddressCount() 获取申请 EIP 数量，默认值为1。
 * @method void setAddressCount(integer $AddressCount) 设置申请 EIP 数量，默认值为1。
 * @method string getInternetServiceProvider() 获取运营商名称，可选值[BGP|CTCC|CMCC|CUCC]，默认BGP。
 * @method void setInternetServiceProvider(string $InternetServiceProvider) 设置运营商名称，可选值[BGP|CTCC|CMCC|CUCC]，默认BGP。
 * @method string getAddressType() 获取EIP类型，EIP|AnycastEIP，默认EIP。
 * @method void setAddressType(string $AddressType) 设置EIP类型，EIP|AnycastEIP，默认EIP。
 * @method string getAnycastZone() 获取Anycast发布域，ANYCAST_ZONE_A|ANYCAST_ZONE_B，默认为当前地域可选的任一发布域。
 * @method void setAnycastZone(string $AnycastZone) 设置Anycast发布域，ANYCAST_ZONE_A|ANYCAST_ZONE_B，默认为当前地域可选的任一发布域。
 */

/**
 *AllocateAddresses请求参数结构体
 */
class AllocateAddressesRequest extends AbstractModel
{
    /**
     * @var integer 申请 EIP 数量，默认值为1。
     */
    public $AddressCount;

    /**
     * @var string 运营商名称，可选值[BGP|CTCC|CMCC|CUCC]，默认BGP。
     */
    public $InternetServiceProvider;

    /**
     * @var string EIP类型，EIP|AnycastEIP，默认EIP。
     */
    public $AddressType;

    /**
     * @var string Anycast发布域，ANYCAST_ZONE_A|ANYCAST_ZONE_B，默认为当前地域可选的任一发布域。
     */
    public $AnycastZone;
    /**
     * @param integer $AddressCount 申请 EIP 数量，默认值为1。
     * @param string $InternetServiceProvider 运营商名称，可选值[BGP|CTCC|CMCC|CUCC]，默认BGP。
     * @param string $AddressType EIP类型，EIP|AnycastEIP，默认EIP。
     * @param string $AnycastZone Anycast发布域，ANYCAST_ZONE_A|ANYCAST_ZONE_B，默认为当前地域可选的任一发布域。
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
        if (array_key_exists("AddressCount",$param) and $param["AddressCount"] !== null) {
            $this->AddressCount = $param["AddressCount"];
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("AnycastZone",$param) and $param["AnycastZone"] !== null) {
            $this->AnycastZone = $param["AnycastZone"];
        }
    }
}
