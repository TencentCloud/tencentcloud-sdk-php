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
 * 轻量应用服务器防火墙规则
 *
 * @method string getAppType() 获取<p>应用类型</p>
 * @method void setAppType(string $AppType) 设置<p>应用类型</p>
 * @method string getProtocol() 获取<p>协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议</p>
 * @method string getPort() 获取<p>端口</p>
 * @method void setPort(string $Port) 设置<p>端口</p>
 * @method string getCidrBlock() 获取<p>地址</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>地址</p>
 * @method string getIpv6CidrBlock() 获取<p>ipv6地址</p>
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置<p>ipv6地址</p>
 * @method string getAction() 获取<p>状态</p>
 * @method void setAction(string $Action) 设置<p>状态</p>
 * @method string getFirewallRuleDescription() 获取<p>描述</p>
 * @method void setFirewallRuleDescription(string $FirewallRuleDescription) 设置<p>描述</p>
 */
class LighthouseFirewallRule extends AbstractModel
{
    /**
     * @var string <p>应用类型</p>
     */
    public $AppType;

    /**
     * @var string <p>协议</p>
     */
    public $Protocol;

    /**
     * @var string <p>端口</p>
     */
    public $Port;

    /**
     * @var string <p>地址</p>
     */
    public $CidrBlock;

    /**
     * @var string <p>ipv6地址</p>
     */
    public $Ipv6CidrBlock;

    /**
     * @var string <p>状态</p>
     */
    public $Action;

    /**
     * @var string <p>描述</p>
     */
    public $FirewallRuleDescription;

    /**
     * @param string $AppType <p>应用类型</p>
     * @param string $Protocol <p>协议</p>
     * @param string $Port <p>端口</p>
     * @param string $CidrBlock <p>地址</p>
     * @param string $Ipv6CidrBlock <p>ipv6地址</p>
     * @param string $Action <p>状态</p>
     * @param string $FirewallRuleDescription <p>描述</p>
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
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
