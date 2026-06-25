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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网卡信息
 *
 * @method string getDnsServer() 获取<p>DNS服务器</p>
 * @method void setDnsServer(string $DnsServer) 设置<p>DNS服务器</p>
 * @method string getGateway() 获取<p>网关</p>
 * @method void setGateway(string $Gateway) 设置<p>网关</p>
 * @method string getIp() 获取<p>IP地址</p>
 * @method void setIp(string $Ip) 设置<p>IP地址</p>
 * @method string getIpv6() 获取<p>IPv6地址</p>
 * @method void setIpv6(string $Ipv6) 设置<p>IPv6地址</p>
 * @method string getMac() 获取<p>MAC地址</p>
 * @method void setMac(string $Mac) 设置<p>MAC地址</p>
 * @method string getName() 获取<p>网卡名称</p>
 * @method void setName(string $Name) 设置<p>网卡名称</p>
 */
class NetworkCardInfo extends AbstractModel
{
    /**
     * @var string <p>DNS服务器</p>
     */
    public $DnsServer;

    /**
     * @var string <p>网关</p>
     */
    public $Gateway;

    /**
     * @var string <p>IP地址</p>
     */
    public $Ip;

    /**
     * @var string <p>IPv6地址</p>
     */
    public $Ipv6;

    /**
     * @var string <p>MAC地址</p>
     */
    public $Mac;

    /**
     * @var string <p>网卡名称</p>
     */
    public $Name;

    /**
     * @param string $DnsServer <p>DNS服务器</p>
     * @param string $Gateway <p>网关</p>
     * @param string $Ip <p>IP地址</p>
     * @param string $Ipv6 <p>IPv6地址</p>
     * @param string $Mac <p>MAC地址</p>
     * @param string $Name <p>网卡名称</p>
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
        if (array_key_exists("DnsServer",$param) and $param["DnsServer"] !== null) {
            $this->DnsServer = $param["DnsServer"];
        }

        if (array_key_exists("Gateway",$param) and $param["Gateway"] !== null) {
            $this->Gateway = $param["Gateway"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("Mac",$param) and $param["Mac"] !== null) {
            $this->Mac = $param["Mac"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
