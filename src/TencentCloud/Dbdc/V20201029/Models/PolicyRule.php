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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组规则
 *
 * @method string getAction() 获取<p>规则动作，</p><p>枚举值：</p><ul><li>ACCEPT： 允许</li><li>DROP： 拒绝</li></ul>
 * @method void setAction(string $Action) 设置<p>规则动作，</p><p>枚举值：</p><ul><li>ACCEPT： 允许</li><li>DROP： 拒绝</li></ul>
 * @method string getCidrIp() 获取<p>来源/目标 IP 或 CIDR，如 0.0.0.0/0</p>
 * @method void setCidrIp(string $CidrIp) 设置<p>来源/目标 IP 或 CIDR，如 0.0.0.0/0</p>
 * @method string getPortRange() 获取<p>端口范围，如 80、8080-8090、ALL</p>
 * @method void setPortRange(string $PortRange) 设置<p>端口范围，如 80、8080-8090、ALL</p>
 * @method string getIpProtocol() 获取<p>协议类型，如 tcp、udp、icmp、ALL</p>
 * @method void setIpProtocol(string $IpProtocol) 设置<p>协议类型，如 tcp、udp、icmp、ALL</p>
 * @method string getServiceModule() 获取<p>协议端口模板 ID</p>
 * @method void setServiceModule(string $ServiceModule) 设置<p>协议端口模板 ID</p>
 * @method string getAddressModule() 获取<p>IP 地址模板 ID</p>
 * @method void setAddressModule(string $AddressModule) 设置<p>IP 地址模板 ID</p>
 * @method string getId() 获取<p>规则 ID</p>
 * @method void setId(string $Id) 设置<p>规则 ID</p>
 * @method string getDesc() 获取<p>规则备注描述</p>
 * @method void setDesc(string $Desc) 设置<p>规则备注描述</p>
 */
class PolicyRule extends AbstractModel
{
    /**
     * @var string <p>规则动作，</p><p>枚举值：</p><ul><li>ACCEPT： 允许</li><li>DROP： 拒绝</li></ul>
     */
    public $Action;

    /**
     * @var string <p>来源/目标 IP 或 CIDR，如 0.0.0.0/0</p>
     */
    public $CidrIp;

    /**
     * @var string <p>端口范围，如 80、8080-8090、ALL</p>
     */
    public $PortRange;

    /**
     * @var string <p>协议类型，如 tcp、udp、icmp、ALL</p>
     */
    public $IpProtocol;

    /**
     * @var string <p>协议端口模板 ID</p>
     */
    public $ServiceModule;

    /**
     * @var string <p>IP 地址模板 ID</p>
     */
    public $AddressModule;

    /**
     * @var string <p>规则 ID</p>
     */
    public $Id;

    /**
     * @var string <p>规则备注描述</p>
     */
    public $Desc;

    /**
     * @param string $Action <p>规则动作，</p><p>枚举值：</p><ul><li>ACCEPT： 允许</li><li>DROP： 拒绝</li></ul>
     * @param string $CidrIp <p>来源/目标 IP 或 CIDR，如 0.0.0.0/0</p>
     * @param string $PortRange <p>端口范围，如 80、8080-8090、ALL</p>
     * @param string $IpProtocol <p>协议类型，如 tcp、udp、icmp、ALL</p>
     * @param string $ServiceModule <p>协议端口模板 ID</p>
     * @param string $AddressModule <p>IP 地址模板 ID</p>
     * @param string $Id <p>规则 ID</p>
     * @param string $Desc <p>规则备注描述</p>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CidrIp",$param) and $param["CidrIp"] !== null) {
            $this->CidrIp = $param["CidrIp"];
        }

        if (array_key_exists("PortRange",$param) and $param["PortRange"] !== null) {
            $this->PortRange = $param["PortRange"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("ServiceModule",$param) and $param["ServiceModule"] !== null) {
            $this->ServiceModule = $param["ServiceModule"];
        }

        if (array_key_exists("AddressModule",$param) and $param["AddressModule"] !== null) {
            $this->AddressModule = $param["AddressModule"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
