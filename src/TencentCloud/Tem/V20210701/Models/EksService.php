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
 * eks service info
 *
 * @method string getName() 获取service name
 * @method void setName(string $Name) 设置service name
 * @method array getPorts() 获取可用端口
 * @method void setPorts(array $Ports) 设置可用端口
 * @method string getYaml() 获取yaml 内容
 * @method void setYaml(string $Yaml) 设置yaml 内容
 * @method string getApplicationName() 获取服务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置服务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionName() 获取版本名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionName(string $VersionName) 设置版本名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClusterIp() 获取内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIp(array $ClusterIp) 设置内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalIp() 获取外网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalIp(string $ExternalIp) 设置外网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取访问类型，可选值：
- EXTERNAL（公网访问）
- VPC（vpc内访问）
- CLUSTER（集群内访问）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置访问类型，可选值：
- EXTERNAL（公网访问）
- VPC（vpc内访问）
- CLUSTER（集群内访问）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID，只在类型为vpc访问时才有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID，只在类型为vpc访问时才有值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalanceId() 获取负载均衡ID，只在外网访问和vpc内访问才有值，默认自动创建
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalanceId(string $LoadBalanceId) 设置负载均衡ID，只在外网访问和vpc内访问才有值，默认自动创建
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPortMappings() 获取端口映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPortMappings(array $PortMappings) 设置端口映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServicePortMappingList() 获取每种类型访问配置详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServicePortMappingList(array $ServicePortMappingList) 设置每种类型访问配置详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getFlushAll() 获取刷新复写所有类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlushAll(boolean $FlushAll) 设置刷新复写所有类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableRegistryNextDeploy() 获取1: 下次部署自动注入注册中心信息；0：不注入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableRegistryNextDeploy(integer $EnableRegistryNextDeploy) 设置1: 下次部署自动注入注册中心信息；0：不注入
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取返回应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置返回应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAllIpDone() 获取所有服务IP是否已经ready
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllIpDone(boolean $AllIpDone) 设置所有服务IP是否已经ready
注意：此字段可能返回 null，表示取不到有效值。
 */
class EksService extends AbstractModel
{
    /**
     * @var string service name
     */
    public $Name;

    /**
     * @var array 可用端口
     */
    public $Ports;

    /**
     * @var string yaml 内容
     */
    public $Yaml;

    /**
     * @var string 服务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var string 版本名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionName;

    /**
     * @var array 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIp;

    /**
     * @var string 外网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalIp;

    /**
     * @var string 访问类型，可选值：
- EXTERNAL（公网访问）
- VPC（vpc内访问）
- CLUSTER（集群内访问）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 子网ID，只在类型为vpc访问时才有值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 负载均衡ID，只在外网访问和vpc内访问才有值，默认自动创建
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalanceId;

    /**
     * @var array 端口映射
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PortMappings;

    /**
     * @var array 每种类型访问配置详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServicePortMappingList;

    /**
     * @var boolean 刷新复写所有类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlushAll;

    /**
     * @var integer 1: 下次部署自动注入注册中心信息；0：不注入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableRegistryNextDeploy;

    /**
     * @var string 返回应用id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var boolean 所有服务IP是否已经ready
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllIpDone;

    /**
     * @param string $Name service name
     * @param array $Ports 可用端口
     * @param string $Yaml yaml 内容
     * @param string $ApplicationName 服务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionName 版本名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClusterIp 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalIp 外网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 访问类型，可选值：
- EXTERNAL（公网访问）
- VPC（vpc内访问）
- CLUSTER（集群内访问）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID，只在类型为vpc访问时才有值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalanceId 负载均衡ID，只在外网访问和vpc内访问才有值，默认自动创建
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PortMappings 端口映射
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServicePortMappingList 每种类型访问配置详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $FlushAll 刷新复写所有类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableRegistryNextDeploy 1: 下次部署自动注入注册中心信息；0：不注入
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 返回应用id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AllIpDone 所有服务IP是否已经ready
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("ClusterIp",$param) and $param["ClusterIp"] !== null) {
            $this->ClusterIp = $param["ClusterIp"];
        }

        if (array_key_exists("ExternalIp",$param) and $param["ExternalIp"] !== null) {
            $this->ExternalIp = $param["ExternalIp"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("LoadBalanceId",$param) and $param["LoadBalanceId"] !== null) {
            $this->LoadBalanceId = $param["LoadBalanceId"];
        }

        if (array_key_exists("PortMappings",$param) and $param["PortMappings"] !== null) {
            $this->PortMappings = [];
            foreach ($param["PortMappings"] as $key => $value){
                $obj = new PortMapping();
                $obj->deserialize($value);
                array_push($this->PortMappings, $obj);
            }
        }

        if (array_key_exists("ServicePortMappingList",$param) and $param["ServicePortMappingList"] !== null) {
            $this->ServicePortMappingList = [];
            foreach ($param["ServicePortMappingList"] as $key => $value){
                $obj = new ServicePortMapping();
                $obj->deserialize($value);
                array_push($this->ServicePortMappingList, $obj);
            }
        }

        if (array_key_exists("FlushAll",$param) and $param["FlushAll"] !== null) {
            $this->FlushAll = $param["FlushAll"];
        }

        if (array_key_exists("EnableRegistryNextDeploy",$param) and $param["EnableRegistryNextDeploy"] !== null) {
            $this->EnableRegistryNextDeploy = $param["EnableRegistryNextDeploy"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("AllIpDone",$param) and $param["AllIpDone"] !== null) {
            $this->AllIpDone = $param["AllIpDone"];
        }
    }
}
