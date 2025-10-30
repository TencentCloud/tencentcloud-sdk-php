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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由接收策略条目。
 *
 * @method string getRoutePolicyEntryId() 获取路由策略条目IPv4唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutePolicyEntryId(string $RoutePolicyEntryId) 设置路由策略条目IPv4唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCidrBlock() 获取目标网段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCidrBlock(string $CidrBlock) 设置目标网段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取路由策略规则描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置路由策略规则描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRouteType() 获取路由类型。
USER：用户自定义类型。
NETD：网络探测下发的路由。
CCN：云联网路由。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRouteType(string $RouteType) 设置路由类型。
USER：用户自定义类型。
NETD：网络探测下发的路由。
CCN：云联网路由。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayType() 获取下一跳类型。目前我们支持的类型有：
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
EIP：云服务器的公网IP；
LOCAL_GATEWAY：本地网关;
PVGW：PVGW网关。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayType(string $GatewayType) 设置下一跳类型。目前我们支持的类型有：
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
EIP：云服务器的公网IP；
LOCAL_GATEWAY：本地网关;
PVGW：PVGW网关。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayId() 获取网关唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayId(string $GatewayId) 设置网关唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPriority() 获取优先级。数值越小，优先级越高。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置优先级。数值越小，优先级越高。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取动作。
DROP：丢弃。
DISABLE：接收且禁用。
ACCEPT：接收且启用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置动作。
DROP：丢弃。
DISABLE：接收且禁用。
ACCEPT：接收且启用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RoutePolicyEntry extends AbstractModel
{
    /**
     * @var string 路由策略条目IPv4唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoutePolicyEntryId;

    /**
     * @var string 目标网段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CidrBlock;

    /**
     * @var string 路由策略规则描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 路由类型。
USER：用户自定义类型。
NETD：网络探测下发的路由。
CCN：云联网路由。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RouteType;

    /**
     * @var string 下一跳类型。目前我们支持的类型有：
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
EIP：云服务器的公网IP；
LOCAL_GATEWAY：本地网关;
PVGW：PVGW网关。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayType;

    /**
     * @var string 网关唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayId;

    /**
     * @var integer 优先级。数值越小，优先级越高。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var string 动作。
DROP：丢弃。
DISABLE：接收且禁用。
ACCEPT：接收且启用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 地域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @param string $RoutePolicyEntryId 路由策略条目IPv4唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CidrBlock 目标网段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 路由策略规则描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RouteType 路由类型。
USER：用户自定义类型。
NETD：网络探测下发的路由。
CCN：云联网路由。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayType 下一跳类型。目前我们支持的类型有：
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
EIP：云服务器的公网IP；
LOCAL_GATEWAY：本地网关;
PVGW：PVGW网关。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayId 网关唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Priority 优先级。数值越小，优先级越高。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 动作。
DROP：丢弃。
DISABLE：接收且禁用。
ACCEPT：接收且启用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RoutePolicyEntryId",$param) and $param["RoutePolicyEntryId"] !== null) {
            $this->RoutePolicyEntryId = $param["RoutePolicyEntryId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
