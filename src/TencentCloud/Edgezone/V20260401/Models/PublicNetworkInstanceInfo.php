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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公网实例信息，包含实例ID、可用区ID、实例名称、线路、路由模式等信息
 *
 * @method string getNetworkInstanceId() 获取公网实例ID
 * @method void setNetworkInstanceId(string $NetworkInstanceId) 设置公网实例ID
 * @method string getZoneId() 获取可用区ID
 * @method void setZoneId(string $ZoneId) 设置可用区ID
 * @method string getNetworkInstanceName() 获取公网实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkInstanceName(string $NetworkInstanceName) 设置公网实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBandwidth() 获取带宽，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidth(integer $Bandwidth) 设置带宽，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLine() 获取线路信息
 * @method void setLine(string $Line) 设置线路信息
 * @method string getRouteMode() 获取路由模式，枚举值：STATIC、BGP、OSPF
 * @method void setRouteMode(string $RouteMode) 设置路由模式，枚举值：STATIC、BGP、OSPF
 * @method integer getServerCount() 获取关联的物理服务器数量
 * @method void setServerCount(integer $ServerCount) 设置关联的物理服务器数量
 * @method integer getIpv4Count() 获取已申请的Ipv4数量
 * @method void setIpv4Count(integer $Ipv4Count) 设置已申请的Ipv4数量
 * @method integer getIpv6Count() 获取已申请的Ipv6数量
 * @method void setIpv6Count(integer $Ipv6Count) 设置已申请的Ipv6数量
 * @method array getIpv4CidrSet() 获取关联的Ipv4网段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv4CidrSet(array $Ipv4CidrSet) 设置关联的Ipv4网段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIpv6CidrSet() 获取关联的Ipv6网段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6CidrSet(array $Ipv6CidrSet) 设置关联的Ipv6网段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取公网实例创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置公网实例创建时间
 * @method string getUpdatedAt() 获取公网实例修改时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置公网实例修改时间
 */
class PublicNetworkInstanceInfo extends AbstractModel
{
    /**
     * @var string 公网实例ID
     */
    public $NetworkInstanceId;

    /**
     * @var string 可用区ID
     */
    public $ZoneId;

    /**
     * @var string 公网实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkInstanceName;

    /**
     * @var integer 带宽，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bandwidth;

    /**
     * @var string 线路信息
     */
    public $Line;

    /**
     * @var string 路由模式，枚举值：STATIC、BGP、OSPF
     */
    public $RouteMode;

    /**
     * @var integer 关联的物理服务器数量
     */
    public $ServerCount;

    /**
     * @var integer 已申请的Ipv4数量
     */
    public $Ipv4Count;

    /**
     * @var integer 已申请的Ipv6数量
     */
    public $Ipv6Count;

    /**
     * @var array 关联的Ipv4网段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv4CidrSet;

    /**
     * @var array 关联的Ipv6网段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6CidrSet;

    /**
     * @var string 公网实例创建时间
     */
    public $CreatedAt;

    /**
     * @var string 公网实例修改时间
     */
    public $UpdatedAt;

    /**
     * @param string $NetworkInstanceId 公网实例ID
     * @param string $ZoneId 可用区ID
     * @param string $NetworkInstanceName 公网实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bandwidth 带宽，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Line 线路信息
     * @param string $RouteMode 路由模式，枚举值：STATIC、BGP、OSPF
     * @param integer $ServerCount 关联的物理服务器数量
     * @param integer $Ipv4Count 已申请的Ipv4数量
     * @param integer $Ipv6Count 已申请的Ipv6数量
     * @param array $Ipv4CidrSet 关联的Ipv4网段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Ipv6CidrSet 关联的Ipv6网段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 公网实例创建时间
     * @param string $UpdatedAt 公网实例修改时间
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("NetworkInstanceName",$param) and $param["NetworkInstanceName"] !== null) {
            $this->NetworkInstanceName = $param["NetworkInstanceName"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("RouteMode",$param) and $param["RouteMode"] !== null) {
            $this->RouteMode = $param["RouteMode"];
        }

        if (array_key_exists("ServerCount",$param) and $param["ServerCount"] !== null) {
            $this->ServerCount = $param["ServerCount"];
        }

        if (array_key_exists("Ipv4Count",$param) and $param["Ipv4Count"] !== null) {
            $this->Ipv4Count = $param["Ipv4Count"];
        }

        if (array_key_exists("Ipv6Count",$param) and $param["Ipv6Count"] !== null) {
            $this->Ipv6Count = $param["Ipv6Count"];
        }

        if (array_key_exists("Ipv4CidrSet",$param) and $param["Ipv4CidrSet"] !== null) {
            $this->Ipv4CidrSet = [];
            foreach ($param["Ipv4CidrSet"] as $key => $value){
                $obj = new PublicNetworkSegment();
                $obj->deserialize($value);
                array_push($this->Ipv4CidrSet, $obj);
            }
        }

        if (array_key_exists("Ipv6CidrSet",$param) and $param["Ipv6CidrSet"] !== null) {
            $this->Ipv6CidrSet = [];
            foreach ($param["Ipv6CidrSet"] as $key => $value){
                $obj = new PublicNetworkSegment();
                $obj->deserialize($value);
                array_push($this->Ipv6CidrSet, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
