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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组入站规则
 *
 * @method string getAction() 获取策略，ACCEPT 或者 DROP
 * @method void setAction(string $Action) 设置策略，ACCEPT 或者 DROP
 * @method string getCidrIp() 获取来源 IP 或 IP 段，例如192.168.0.0/16
 * @method void setCidrIp(string $CidrIp) 设置来源 IP 或 IP 段，例如192.168.0.0/16
 * @method string getPortRange() 获取端口
 * @method void setPortRange(string $PortRange) 设置端口
 * @method string getIpProtocol() 获取网络协议，支持 UDP、TCP 等
 * @method void setIpProtocol(string $IpProtocol) 设置网络协议，支持 UDP、TCP 等
 * @method string getDir() 获取规则限定的方向，进站规则为 INPUT
 * @method void setDir(string $Dir) 设置规则限定的方向，进站规则为 INPUT
 * @method string getAddressModule() 获取地址模块
 * @method void setAddressModule(string $AddressModule) 设置地址模块
 * @method string getId() 获取规则ID，嵌套安全组的规则ID
 * @method void setId(string $Id) 设置规则ID，嵌套安全组的规则ID
 * @method string getDesc() 获取规则描述
 * @method void setDesc(string $Desc) 设置规则描述
 */
class Inbound extends AbstractModel
{
    /**
     * @var string 策略，ACCEPT 或者 DROP
     */
    public $Action;

    /**
     * @var string 来源 IP 或 IP 段，例如192.168.0.0/16
     */
    public $CidrIp;

    /**
     * @var string 端口
     */
    public $PortRange;

    /**
     * @var string 网络协议，支持 UDP、TCP 等
     */
    public $IpProtocol;

    /**
     * @var string 规则限定的方向，进站规则为 INPUT
     */
    public $Dir;

    /**
     * @var string 地址模块
     */
    public $AddressModule;

    /**
     * @var string 规则ID，嵌套安全组的规则ID
     */
    public $Id;

    /**
     * @var string 规则描述
     */
    public $Desc;

    /**
     * @param string $Action 策略，ACCEPT 或者 DROP
     * @param string $CidrIp 来源 IP 或 IP 段，例如192.168.0.0/16
     * @param string $PortRange 端口
     * @param string $IpProtocol 网络协议，支持 UDP、TCP 等
     * @param string $Dir 规则限定的方向，进站规则为 INPUT
     * @param string $AddressModule 地址模块
     * @param string $Id 规则ID，嵌套安全组的规则ID
     * @param string $Desc 规则描述
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

        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            $this->Dir = $param["Dir"];
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
