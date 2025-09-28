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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组规则
 *
 * @method string getAction() 获取执行策略。
- ACCEPT：允许，放行该端口相应的访问请求。
- DROP：拒绝，直接丢弃数据包，不返回任何回应信息。
 * @method void setAction(string $Action) 设置执行策略。
- ACCEPT：允许，放行该端口相应的访问请求。
- DROP：拒绝，直接丢弃数据包，不返回任何回应信息。
 * @method string getCidrIp() 获取访问数据库的入站 IP 或 IP 段。
 * @method void setCidrIp(string $CidrIp) 设置访问数据库的入站 IP 或 IP 段。
 * @method string getPortRange() 获取访问数据库的端口。
 * @method void setPortRange(string $PortRange) 设置访问数据库的端口。
 * @method string getIpProtocol() 获取传输层协议：tcp。
 * @method void setIpProtocol(string $IpProtocol) 设置传输层协议：tcp。
 * @method string getId() 获取安全组 ID。
 * @method void setId(string $Id) 设置安全组 ID。
 * @method string getAddressModule() 获取IP 地址或 IP 地址组参数模板 ID。请登录[参数模板控制台](https://console.cloud.tencent.com/vpc/template/ip)获取参数模板 IP 地址详情。
 * @method void setAddressModule(string $AddressModule) 设置IP 地址或 IP 地址组参数模板 ID。请登录[参数模板控制台](https://console.cloud.tencent.com/vpc/template/ip)获取参数模板 IP 地址详情。
 * @method string getServiceModule() 获取协议端口或协议端口组参数模板 ID。请登录[参数模板控制台](https://console.cloud.tencent.com/vpc/template/protoport)获取参数模板协议端口详情。
 * @method void setServiceModule(string $ServiceModule) 设置协议端口或协议端口组参数模板 ID。请登录[参数模板控制台](https://console.cloud.tencent.com/vpc/template/protoport)获取参数模板协议端口详情。
 * @method string getDesc() 获取安全组描述信息。
 * @method void setDesc(string $Desc) 设置安全组描述信息。
 */
class SecurityGroupBound extends AbstractModel
{
    /**
     * @var string 执行策略。
- ACCEPT：允许，放行该端口相应的访问请求。
- DROP：拒绝，直接丢弃数据包，不返回任何回应信息。
     */
    public $Action;

    /**
     * @var string 访问数据库的入站 IP 或 IP 段。
     */
    public $CidrIp;

    /**
     * @var string 访问数据库的端口。
     */
    public $PortRange;

    /**
     * @var string 传输层协议：tcp。
     */
    public $IpProtocol;

    /**
     * @var string 安全组 ID。
     */
    public $Id;

    /**
     * @var string IP 地址或 IP 地址组参数模板 ID。请登录[参数模板控制台](https://console.cloud.tencent.com/vpc/template/ip)获取参数模板 IP 地址详情。
     */
    public $AddressModule;

    /**
     * @var string 协议端口或协议端口组参数模板 ID。请登录[参数模板控制台](https://console.cloud.tencent.com/vpc/template/protoport)获取参数模板协议端口详情。
     */
    public $ServiceModule;

    /**
     * @var string 安全组描述信息。
     */
    public $Desc;

    /**
     * @param string $Action 执行策略。
- ACCEPT：允许，放行该端口相应的访问请求。
- DROP：拒绝，直接丢弃数据包，不返回任何回应信息。
     * @param string $CidrIp 访问数据库的入站 IP 或 IP 段。
     * @param string $PortRange 访问数据库的端口。
     * @param string $IpProtocol 传输层协议：tcp。
     * @param string $Id 安全组 ID。
     * @param string $AddressModule IP 地址或 IP 地址组参数模板 ID。请登录[参数模板控制台](https://console.cloud.tencent.com/vpc/template/ip)获取参数模板 IP 地址详情。
     * @param string $ServiceModule 协议端口或协议端口组参数模板 ID。请登录[参数模板控制台](https://console.cloud.tencent.com/vpc/template/protoport)获取参数模板协议端口详情。
     * @param string $Desc 安全组描述信息。
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AddressModule",$param) and $param["AddressModule"] !== null) {
            $this->AddressModule = $param["AddressModule"];
        }

        if (array_key_exists("ServiceModule",$param) and $param["ServiceModule"] !== null) {
            $this->ServiceModule = $param["ServiceModule"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
