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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多网卡MAC地址等列表数据
 *
 * @method string getMacAddress() 获取<p>MAC地址</p>
 * @method void setMacAddress(string $MacAddress) 设置<p>MAC地址</p>
 * @method string getNetworkCardName() 获取<p>网卡名称</p>
 * @method void setNetworkCardName(string $NetworkCardName) 设置<p>网卡名称</p>
 * @method integer getNetworkCardType() 获取<p>网卡类型</p><p>枚举值：</p><ul><li>1： 物理网卡</li><li>2： 虚拟网卡</li></ul>
 * @method void setNetworkCardType(integer $NetworkCardType) 设置<p>网卡类型</p><p>枚举值：</p><ul><li>1： 物理网卡</li><li>2： 虚拟网卡</li></ul>
 * @method integer getNetworkCardStatus() 获取<p>网卡状态</p><p>枚举值：</p><ul><li>1： 启用中</li><li>2： 未启用</li></ul>
 * @method void setNetworkCardStatus(integer $NetworkCardStatus) 设置<p>网卡状态</p><p>枚举值：</p><ul><li>1： 启用中</li><li>2： 未启用</li></ul>
 * @method string getIpv4Address() 获取<p>IPv4地址</p>
 * @method void setIpv4Address(string $Ipv4Address) 设置<p>IPv4地址</p>
 * @method string getIpv6Address() 获取<p>IPv6地址</p>
 * @method void setIpv6Address(string $Ipv6Address) 设置<p>IPv6地址</p>
 */
class DeviceNetworkCardBrief extends AbstractModel
{
    /**
     * @var string <p>MAC地址</p>
     */
    public $MacAddress;

    /**
     * @var string <p>网卡名称</p>
     */
    public $NetworkCardName;

    /**
     * @var integer <p>网卡类型</p><p>枚举值：</p><ul><li>1： 物理网卡</li><li>2： 虚拟网卡</li></ul>
     */
    public $NetworkCardType;

    /**
     * @var integer <p>网卡状态</p><p>枚举值：</p><ul><li>1： 启用中</li><li>2： 未启用</li></ul>
     */
    public $NetworkCardStatus;

    /**
     * @var string <p>IPv4地址</p>
     */
    public $Ipv4Address;

    /**
     * @var string <p>IPv6地址</p>
     */
    public $Ipv6Address;

    /**
     * @param string $MacAddress <p>MAC地址</p>
     * @param string $NetworkCardName <p>网卡名称</p>
     * @param integer $NetworkCardType <p>网卡类型</p><p>枚举值：</p><ul><li>1： 物理网卡</li><li>2： 虚拟网卡</li></ul>
     * @param integer $NetworkCardStatus <p>网卡状态</p><p>枚举值：</p><ul><li>1： 启用中</li><li>2： 未启用</li></ul>
     * @param string $Ipv4Address <p>IPv4地址</p>
     * @param string $Ipv6Address <p>IPv6地址</p>
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
        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("NetworkCardName",$param) and $param["NetworkCardName"] !== null) {
            $this->NetworkCardName = $param["NetworkCardName"];
        }

        if (array_key_exists("NetworkCardType",$param) and $param["NetworkCardType"] !== null) {
            $this->NetworkCardType = $param["NetworkCardType"];
        }

        if (array_key_exists("NetworkCardStatus",$param) and $param["NetworkCardStatus"] !== null) {
            $this->NetworkCardStatus = $param["NetworkCardStatus"];
        }

        if (array_key_exists("Ipv4Address",$param) and $param["Ipv4Address"] !== null) {
            $this->Ipv4Address = $param["Ipv4Address"];
        }

        if (array_key_exists("Ipv6Address",$param) and $param["Ipv6Address"] !== null) {
            $this->Ipv6Address = $param["Ipv6Address"];
        }
    }
}
