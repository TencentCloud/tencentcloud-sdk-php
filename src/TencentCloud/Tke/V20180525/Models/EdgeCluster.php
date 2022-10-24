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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘计算集群信息
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getVpcId() 获取Vpc Id
 * @method void setVpcId(string $VpcId) 设置Vpc Id
 * @method string getPodCIDR() 获取集群pod cidr
 * @method void setPodCIDR(string $PodCIDR) 设置集群pod cidr
 * @method string getServiceCIDR() 获取集群 service cidr
 * @method void setServiceCIDR(string $ServiceCIDR) 设置集群 service cidr
 * @method string getK8SVersion() 获取k8s 版本号
 * @method void setK8SVersion(string $K8SVersion) 设置k8s 版本号
 * @method string getStatus() 获取集群状态
 * @method void setStatus(string $Status) 设置集群状态
 * @method string getClusterDesc() 获取集群描述信息
 * @method void setClusterDesc(string $ClusterDesc) 设置集群描述信息
 * @method string getCreatedTime() 获取集群创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置集群创建时间
 * @method string getEdgeClusterVersion() 获取边缘集群版本
 * @method void setEdgeClusterVersion(string $EdgeClusterVersion) 设置边缘集群版本
 * @method integer getMaxNodePodNum() 获取节点最大Pod数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxNodePodNum(integer $MaxNodePodNum) 设置节点最大Pod数
注意：此字段可能返回 null，表示取不到有效值。
 * @method EdgeClusterAdvancedSettings getClusterAdvancedSettings() 获取集群高级设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterAdvancedSettings(EdgeClusterAdvancedSettings $ClusterAdvancedSettings) 设置集群高级设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevel() 获取边缘容器集群级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(string $Level) 设置边缘容器集群级别
注意：此字段可能返回 null，表示取不到有效值。
 */
class EdgeCluster extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string Vpc Id
     */
    public $VpcId;

    /**
     * @var string 集群pod cidr
     */
    public $PodCIDR;

    /**
     * @var string 集群 service cidr
     */
    public $ServiceCIDR;

    /**
     * @var string k8s 版本号
     */
    public $K8SVersion;

    /**
     * @var string 集群状态
     */
    public $Status;

    /**
     * @var string 集群描述信息
     */
    public $ClusterDesc;

    /**
     * @var string 集群创建时间
     */
    public $CreatedTime;

    /**
     * @var string 边缘集群版本
     */
    public $EdgeClusterVersion;

    /**
     * @var integer 节点最大Pod数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxNodePodNum;

    /**
     * @var EdgeClusterAdvancedSettings 集群高级设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterAdvancedSettings;

    /**
     * @var string 边缘容器集群级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @param string $ClusterId 集群Id
     * @param string $ClusterName 集群名称
     * @param string $VpcId Vpc Id
     * @param string $PodCIDR 集群pod cidr
     * @param string $ServiceCIDR 集群 service cidr
     * @param string $K8SVersion k8s 版本号
     * @param string $Status 集群状态
     * @param string $ClusterDesc 集群描述信息
     * @param string $CreatedTime 集群创建时间
     * @param string $EdgeClusterVersion 边缘集群版本
     * @param integer $MaxNodePodNum 节点最大Pod数
注意：此字段可能返回 null，表示取不到有效值。
     * @param EdgeClusterAdvancedSettings $ClusterAdvancedSettings 集群高级设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Level 边缘容器集群级别
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("PodCIDR",$param) and $param["PodCIDR"] !== null) {
            $this->PodCIDR = $param["PodCIDR"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }

        if (array_key_exists("K8SVersion",$param) and $param["K8SVersion"] !== null) {
            $this->K8SVersion = $param["K8SVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("EdgeClusterVersion",$param) and $param["EdgeClusterVersion"] !== null) {
            $this->EdgeClusterVersion = $param["EdgeClusterVersion"];
        }

        if (array_key_exists("MaxNodePodNum",$param) and $param["MaxNodePodNum"] !== null) {
            $this->MaxNodePodNum = $param["MaxNodePodNum"];
        }

        if (array_key_exists("ClusterAdvancedSettings",$param) and $param["ClusterAdvancedSettings"] !== null) {
            $this->ClusterAdvancedSettings = new EdgeClusterAdvancedSettings();
            $this->ClusterAdvancedSettings->deserialize($param["ClusterAdvancedSettings"]);
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
