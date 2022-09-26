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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡配置
 *
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
只读。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
只读。
 * @method string getSubnetId() 获取负载均衡实例所在的子网（仅对内网VPC型LB有意义），只读。
 * @method void setSubnetId(string $SubnetId) 设置负载均衡实例所在的子网（仅对内网VPC型LB有意义），只读。
 * @method string getInternetChargeType() 获取TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;只读。
 * @method void setInternetChargeType(string $InternetChargeType) 设置TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;只读。
 * @method integer getInternetMaxBandwidthOut() 获取最大出带宽，单位Mbps，仅对公网属性的LB生效，默认值 10
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置最大出带宽，单位Mbps，仅对公网属性的LB生效，默认值 10
 * @method string getZoneID() 获取可用区 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneID(string $ZoneID) 设置可用区 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVipIsp() 获取运营商类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVipIsp(string $VipIsp) 设置运营商类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTgwGroupName() 获取TGW Group 名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTgwGroupName(string $TgwGroupName) 设置TGW Group 名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddressIPVersion() 获取IP 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressIPVersion(string $AddressIPVersion) 设置IP 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtensiveClusters getExtensiveClusters() 获取内网独占集群配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtensiveClusters(ExtensiveClusters $ExtensiveClusters) 设置内网独占集群配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method CrossRegionConfig getCrossRegionConfig() 获取负载均衡跨地域配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrossRegionConfig(CrossRegionConfig $CrossRegionConfig) 设置负载均衡跨地域配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
只读。
     */
    public $LoadBalancerType;

    /**
     * @var string 负载均衡实例所在的子网（仅对内网VPC型LB有意义），只读。
     */
    public $SubnetId;

    /**
     * @var string TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;只读。
     */
    public $InternetChargeType;

    /**
     * @var integer 最大出带宽，单位Mbps，仅对公网属性的LB生效，默认值 10
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 可用区 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneID;

    /**
     * @var string 运营商类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VipIsp;

    /**
     * @var string TGW Group 名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TgwGroupName;

    /**
     * @var string IP 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressIPVersion;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var ExtensiveClusters 内网独占集群配置列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtensiveClusters;

    /**
     * @var CrossRegionConfig 负载均衡跨地域配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrossRegionConfig;

    /**
     * @param string $LoadBalancerType 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
只读。
     * @param string $SubnetId 负载均衡实例所在的子网（仅对内网VPC型LB有意义），只读。
     * @param string $InternetChargeType TRAFFIC_POSTPAID_BY_HOUR 按流量按小时后计费 ; BANDWIDTH_POSTPAID_BY_HOUR 按带宽按小时后计费;只读。
     * @param integer $InternetMaxBandwidthOut 最大出带宽，单位Mbps，仅对公网属性的LB生效，默认值 10
     * @param string $ZoneID 可用区 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VipIsp 运营商类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TgwGroupName TGW Group 名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddressIPVersion IP 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtensiveClusters $ExtensiveClusters 内网独占集群配置列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param CrossRegionConfig $CrossRegionConfig 负载均衡跨地域配置
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
        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("ZoneID",$param) and $param["ZoneID"] !== null) {
            $this->ZoneID = $param["ZoneID"];
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }

        if (array_key_exists("TgwGroupName",$param) and $param["TgwGroupName"] !== null) {
            $this->TgwGroupName = $param["TgwGroupName"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ExtensiveClusters",$param) and $param["ExtensiveClusters"] !== null) {
            $this->ExtensiveClusters = new ExtensiveClusters();
            $this->ExtensiveClusters->deserialize($param["ExtensiveClusters"]);
        }

        if (array_key_exists("CrossRegionConfig",$param) and $param["CrossRegionConfig"] !== null) {
            $this->CrossRegionConfig = new CrossRegionConfig();
            $this->CrossRegionConfig->deserialize($param["CrossRegionConfig"]);
        }
    }
}
