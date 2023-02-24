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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 端口映射详细信息结构体
 *
 * @method string getType() 获取服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterIp() 获取集群内访问vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIp(string $ClusterIp) 设置集群内访问vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalIp() 获取集群外方位vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalIp(string $ExternalIp) 设置集群外方位vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalanceId() 获取LoadBalance Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalanceId(string $LoadBalanceId) 设置LoadBalance Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYaml() 获取yaml 内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYaml(string $Yaml) 设置yaml 内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPorts() 获取暴露端口列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPorts(array $Ports) 设置暴露端口列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPortMappingItemList() 获取端口映射数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPortMappingItemList(array $PortMappingItemList) 设置端口映射数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalDomain() 获取clb domain
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalDomain(string $ExternalDomain) 设置clb domain
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServicePortMapping extends AbstractModel
{
    /**
     * @var string 服务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string 集群内访问vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIp;

    /**
     * @var string 集群外方位vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalIp;

    /**
     * @var string 子网id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string vpc id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string LoadBalance Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalanceId;

    /**
     * @var string yaml 内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Yaml;

    /**
     * @var array 暴露端口列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ports;

    /**
     * @var array 端口映射数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PortMappingItemList;

    /**
     * @var string clb domain
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalDomain;

    /**
     * @param string $Type 服务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterIp 集群内访问vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalIp 集群外方位vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId vpc id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalanceId LoadBalance Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Yaml yaml 内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Ports 暴露端口列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PortMappingItemList 端口映射数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalDomain clb domain
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ClusterIp",$param) and $param["ClusterIp"] !== null) {
            $this->ClusterIp = $param["ClusterIp"];
        }

        if (array_key_exists("ExternalIp",$param) and $param["ExternalIp"] !== null) {
            $this->ExternalIp = $param["ExternalIp"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("LoadBalanceId",$param) and $param["LoadBalanceId"] !== null) {
            $this->LoadBalanceId = $param["LoadBalanceId"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("PortMappingItemList",$param) and $param["PortMappingItemList"] !== null) {
            $this->PortMappingItemList = [];
            foreach ($param["PortMappingItemList"] as $key => $value){
                $obj = new ServicePortMappingItem();
                $obj->deserialize($value);
                array_push($this->PortMappingItemList, $obj);
            }
        }

        if (array_key_exists("ExternalDomain",$param) and $param["ExternalDomain"] !== null) {
            $this->ExternalDomain = $param["ExternalDomain"];
        }
    }
}
