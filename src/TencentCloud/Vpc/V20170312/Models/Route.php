<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getRouteId() 获取路由策略ID。
 * @method void setRouteId(integer $RouteId) 设置路由策略ID。
 * @method string getDestinationCidrBlock() 获取目的网段，取值不能在私有网络网段内，例如：112.20.51.0/24。
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置目的网段，取值不能在私有网络网段内，例如：112.20.51.0/24。
 * @method string getGatewayType() 获取下一跳类型，目前我们支持的类型有：CVM：公网网关类型的云主机；VPN：vpn网关； DIRECTCONNECT：专线网关；PEERCONNECTION：对等连接；SSLVPN：sslvpn网关；NAT：nat网关; NORMAL_CVM：普通云主机。
 * @method void setGatewayType(string $GatewayType) 设置下一跳类型，目前我们支持的类型有：CVM：公网网关类型的云主机；VPN：vpn网关； DIRECTCONNECT：专线网关；PEERCONNECTION：对等连接；SSLVPN：sslvpn网关；NAT：nat网关; NORMAL_CVM：普通云主机。
 * @method string getGatewayId() 获取下一跳地址，这里只需要指定不同下一跳类型的网关ID，系统会自动匹配到下一跳地址。
 * @method void setGatewayId(string $GatewayId) 设置下一跳地址，这里只需要指定不同下一跳类型的网关ID，系统会自动匹配到下一跳地址。
 * @method string getRouteDescription() 获取路由策略描述。
 * @method void setRouteDescription(string $RouteDescription) 设置路由策略描述。
 */

/**
 *路由策略对象
 */
class Route extends AbstractModel
{
    /**
     * @var integer 路由策略ID。
     */
    public $RouteId;

    /**
     * @var string 目的网段，取值不能在私有网络网段内，例如：112.20.51.0/24。
     */
    public $DestinationCidrBlock;

    /**
     * @var string 下一跳类型，目前我们支持的类型有：CVM：公网网关类型的云主机；VPN：vpn网关； DIRECTCONNECT：专线网关；PEERCONNECTION：对等连接；SSLVPN：sslvpn网关；NAT：nat网关; NORMAL_CVM：普通云主机。
     */
    public $GatewayType;

    /**
     * @var string 下一跳地址，这里只需要指定不同下一跳类型的网关ID，系统会自动匹配到下一跳地址。
     */
    public $GatewayId;

    /**
     * @var string 路由策略描述。
     */
    public $RouteDescription;
    /**
     * @param integer $RouteId 路由策略ID。
     * @param string $DestinationCidrBlock 目的网段，取值不能在私有网络网段内，例如：112.20.51.0/24。
     * @param string $GatewayType 下一跳类型，目前我们支持的类型有：CVM：公网网关类型的云主机；VPN：vpn网关； DIRECTCONNECT：专线网关；PEERCONNECTION：对等连接；SSLVPN：sslvpn网关；NAT：nat网关; NORMAL_CVM：普通云主机。
     * @param string $GatewayId 下一跳地址，这里只需要指定不同下一跳类型的网关ID，系统会自动匹配到下一跳地址。
     * @param string $RouteDescription 路由策略描述。
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
        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("RouteDescription",$param) and $param["RouteDescription"] !== null) {
            $this->RouteDescription = $param["RouteDescription"];
        }
    }
}
