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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器网络信息
 *
 * @method string getEndpointID() 获取endpoint id
 * @method void setEndpointID(string $EndpointID) 设置endpoint id
 * @method string getMode() 获取模式:bridge
 * @method void setMode(string $Mode) 设置模式:bridge
 * @method string getName() 获取网络名称
 * @method void setName(string $Name) 设置网络名称
 * @method string getNetworkID() 获取网络ID
 * @method void setNetworkID(string $NetworkID) 设置网络ID
 * @method string getGateway() 获取网关
 * @method void setGateway(string $Gateway) 设置网关
 * @method string getIpv4() 获取IPV4地址
 * @method void setIpv4(string $Ipv4) 设置IPV4地址
 * @method string getIpv6() 获取IPV6地址
 * @method void setIpv6(string $Ipv6) 设置IPV6地址
 * @method string getMAC() 获取MAC 地址
 * @method void setMAC(string $MAC) 设置MAC 地址
 */
class ContainerNetwork extends AbstractModel
{
    /**
     * @var string endpoint id
     */
    public $EndpointID;

    /**
     * @var string 模式:bridge
     */
    public $Mode;

    /**
     * @var string 网络名称
     */
    public $Name;

    /**
     * @var string 网络ID
     */
    public $NetworkID;

    /**
     * @var string 网关
     */
    public $Gateway;

    /**
     * @var string IPV4地址
     */
    public $Ipv4;

    /**
     * @var string IPV6地址
     */
    public $Ipv6;

    /**
     * @var string MAC 地址
     */
    public $MAC;

    /**
     * @param string $EndpointID endpoint id
     * @param string $Mode 模式:bridge
     * @param string $Name 网络名称
     * @param string $NetworkID 网络ID
     * @param string $Gateway 网关
     * @param string $Ipv4 IPV4地址
     * @param string $Ipv6 IPV6地址
     * @param string $MAC MAC 地址
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
        if (array_key_exists("EndpointID",$param) and $param["EndpointID"] !== null) {
            $this->EndpointID = $param["EndpointID"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NetworkID",$param) and $param["NetworkID"] !== null) {
            $this->NetworkID = $param["NetworkID"];
        }

        if (array_key_exists("Gateway",$param) and $param["Gateway"] !== null) {
            $this->Gateway = $param["Gateway"];
        }

        if (array_key_exists("Ipv4",$param) and $param["Ipv4"] !== null) {
            $this->Ipv4 = $param["Ipv4"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("MAC",$param) and $param["MAC"] !== null) {
            $this->MAC = $param["MAC"];
        }
    }
}
