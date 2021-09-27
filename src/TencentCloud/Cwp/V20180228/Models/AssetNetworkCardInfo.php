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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产管理网卡信息
 *
 * @method string getName() 获取网卡名称
 * @method void setName(string $Name) 设置网卡名称
 * @method string getIp() 获取Ipv4对应IP
 * @method void setIp(string $Ip) 设置Ipv4对应IP
 * @method string getGateWay() 获取网关
 * @method void setGateWay(string $GateWay) 设置网关
 * @method string getMac() 获取MAC地址
 * @method void setMac(string $Mac) 设置MAC地址
 * @method string getIpv6() 获取Ipv6对应IP
 * @method void setIpv6(string $Ipv6) 设置Ipv6对应IP
 * @method string getDnsServer() 获取DNS服务器
 * @method void setDnsServer(string $DnsServer) 设置DNS服务器
 */
class AssetNetworkCardInfo extends AbstractModel
{
    /**
     * @var string 网卡名称
     */
    public $Name;

    /**
     * @var string Ipv4对应IP
     */
    public $Ip;

    /**
     * @var string 网关
     */
    public $GateWay;

    /**
     * @var string MAC地址
     */
    public $Mac;

    /**
     * @var string Ipv6对应IP
     */
    public $Ipv6;

    /**
     * @var string DNS服务器
     */
    public $DnsServer;

    /**
     * @param string $Name 网卡名称
     * @param string $Ip Ipv4对应IP
     * @param string $GateWay 网关
     * @param string $Mac MAC地址
     * @param string $Ipv6 Ipv6对应IP
     * @param string $DnsServer DNS服务器
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("GateWay",$param) and $param["GateWay"] !== null) {
            $this->GateWay = $param["GateWay"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("DnsServer",$param) and $param["DnsServer"] !== null) {
            $this->DnsServer = $param["DnsServer"];
        }
    }
}
