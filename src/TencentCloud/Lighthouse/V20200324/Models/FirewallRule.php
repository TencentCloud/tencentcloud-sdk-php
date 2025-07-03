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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述防火墙规则信息。
 *
 * @method string getProtocol() 获取协议，取值：TCP，UDP，ICMP，ALL，ICMPv6。

- 使用ICMP协议时，只支持CidrBlock，不支持使用Port、Ipv6CidrBlock参数；
- 使用ICMPv6协议时，只支持Ipv6CidrBlock，不支持使用Port、Ipv6CidrBlock参数；
 * @method void setProtocol(string $Protocol) 设置协议，取值：TCP，UDP，ICMP，ALL，ICMPv6。

- 使用ICMP协议时，只支持CidrBlock，不支持使用Port、Ipv6CidrBlock参数；
- 使用ICMPv6协议时，只支持Ipv6CidrBlock，不支持使用Port、Ipv6CidrBlock参数；
 * @method string getPort() 获取端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。注意：单独的端口与离散端口不能同时存在。
 * @method void setPort(string $Port) 设置端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。注意：单独的端口与离散端口不能同时存在。
 * @method string getCidrBlock() 获取IPv4网段或 IPv4地址(互斥)。
示例值：0.0.0.0/0。

和Ipv6CidrBlock互斥，两者都不指定时，如果Protocol不是ICMPv6，则取默认值0.0.0.0/0。
 * @method void setCidrBlock(string $CidrBlock) 设置IPv4网段或 IPv4地址(互斥)。
示例值：0.0.0.0/0。

和Ipv6CidrBlock互斥，两者都不指定时，如果Protocol不是ICMPv6，则取默认值0.0.0.0/0。
 * @method string getIpv6CidrBlock() 获取IPv6网段或IPv6地址(互斥)。
示例值：::/0。

和CidrBlock互斥，两者都不指定时，如果Protocol是ICMPv6，则取默认值::/0。
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置IPv6网段或IPv6地址(互斥)。
示例值：::/0。

和CidrBlock互斥，两者都不指定时，如果Protocol是ICMPv6，则取默认值::/0。
 * @method string getAction() 获取取值：ACCEPT（允许），DROP（拒绝）。默认为 ACCEPT。
 * @method void setAction(string $Action) 设置取值：ACCEPT（允许），DROP（拒绝）。默认为 ACCEPT。
 * @method string getFirewallRuleDescription() 获取防火墙规则描述。
 * @method void setFirewallRuleDescription(string $FirewallRuleDescription) 设置防火墙规则描述。
 */
class FirewallRule extends AbstractModel
{
    /**
     * @var string 协议，取值：TCP，UDP，ICMP，ALL，ICMPv6。

- 使用ICMP协议时，只支持CidrBlock，不支持使用Port、Ipv6CidrBlock参数；
- 使用ICMPv6协议时，只支持Ipv6CidrBlock，不支持使用Port、Ipv6CidrBlock参数；
     */
    public $Protocol;

    /**
     * @var string 端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。注意：单独的端口与离散端口不能同时存在。
     */
    public $Port;

    /**
     * @var string IPv4网段或 IPv4地址(互斥)。
示例值：0.0.0.0/0。

和Ipv6CidrBlock互斥，两者都不指定时，如果Protocol不是ICMPv6，则取默认值0.0.0.0/0。
     */
    public $CidrBlock;

    /**
     * @var string IPv6网段或IPv6地址(互斥)。
示例值：::/0。

和CidrBlock互斥，两者都不指定时，如果Protocol是ICMPv6，则取默认值::/0。
     */
    public $Ipv6CidrBlock;

    /**
     * @var string 取值：ACCEPT（允许），DROP（拒绝）。默认为 ACCEPT。
     */
    public $Action;

    /**
     * @var string 防火墙规则描述。
     */
    public $FirewallRuleDescription;

    /**
     * @param string $Protocol 协议，取值：TCP，UDP，ICMP，ALL，ICMPv6。

- 使用ICMP协议时，只支持CidrBlock，不支持使用Port、Ipv6CidrBlock参数；
- 使用ICMPv6协议时，只支持Ipv6CidrBlock，不支持使用Port、Ipv6CidrBlock参数；
     * @param string $Port 端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。注意：单独的端口与离散端口不能同时存在。
     * @param string $CidrBlock IPv4网段或 IPv4地址(互斥)。
示例值：0.0.0.0/0。

和Ipv6CidrBlock互斥，两者都不指定时，如果Protocol不是ICMPv6，则取默认值0.0.0.0/0。
     * @param string $Ipv6CidrBlock IPv6网段或IPv6地址(互斥)。
示例值：::/0。

和CidrBlock互斥，两者都不指定时，如果Protocol是ICMPv6，则取默认值::/0。
     * @param string $Action 取值：ACCEPT（允许），DROP（拒绝）。默认为 ACCEPT。
     * @param string $FirewallRuleDescription 防火墙规则描述。
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("FirewallRuleDescription",$param) and $param["FirewallRuleDescription"] !== null) {
            $this->FirewallRuleDescription = $param["FirewallRuleDescription"];
        }
    }
}
