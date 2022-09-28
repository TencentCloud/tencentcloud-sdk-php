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
 * CreateTKEEdgeCluster请求参数结构体
 *
 * @method string getK8SVersion() 获取k8s版本号
 * @method void setK8SVersion(string $K8SVersion) 设置k8s版本号
 * @method string getVpcId() 获取vpc 的Id
 * @method void setVpcId(string $VpcId) 设置vpc 的Id
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getPodCIDR() 获取集群pod cidr
 * @method void setPodCIDR(string $PodCIDR) 设置集群pod cidr
 * @method string getServiceCIDR() 获取集群service cidr
 * @method void setServiceCIDR(string $ServiceCIDR) 设置集群service cidr
 * @method string getClusterDesc() 获取集群描述信息
 * @method void setClusterDesc(string $ClusterDesc) 设置集群描述信息
 * @method EdgeClusterAdvancedSettings getClusterAdvancedSettings() 获取集群高级设置
 * @method void setClusterAdvancedSettings(EdgeClusterAdvancedSettings $ClusterAdvancedSettings) 设置集群高级设置
 * @method integer getMaxNodePodNum() 获取节点上最大Pod数量
 * @method void setMaxNodePodNum(integer $MaxNodePodNum) 设置节点上最大Pod数量
 * @method EdgeClusterPublicLB getPublicLB() 获取边缘计算集群公网访问LB信息
 * @method void setPublicLB(EdgeClusterPublicLB $PublicLB) 设置边缘计算集群公网访问LB信息
 * @method string getClusterLevel() 获取集群的级别
 * @method void setClusterLevel(string $ClusterLevel) 设置集群的级别
 * @method boolean getAutoUpgradeClusterLevel() 获取集群是否支持自动升配
 * @method void setAutoUpgradeClusterLevel(boolean $AutoUpgradeClusterLevel) 设置集群是否支持自动升配
 * @method string getChargeType() 获取集群计费方式
 * @method void setChargeType(string $ChargeType) 设置集群计费方式
 * @method string getEdgeVersion() 获取边缘集群版本，此版本区别于k8s版本，是整个集群各组件版本集合
 * @method void setEdgeVersion(string $EdgeVersion) 设置边缘集群版本，此版本区别于k8s版本，是整个集群各组件版本集合
 * @method string getRegistryPrefix() 获取边缘组件镜像仓库前缀
 * @method void setRegistryPrefix(string $RegistryPrefix) 设置边缘组件镜像仓库前缀
 */
class CreateTKEEdgeClusterRequest extends AbstractModel
{
    /**
     * @var string k8s版本号
     */
    public $K8SVersion;

    /**
     * @var string vpc 的Id
     */
    public $VpcId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群pod cidr
     */
    public $PodCIDR;

    /**
     * @var string 集群service cidr
     */
    public $ServiceCIDR;

    /**
     * @var string 集群描述信息
     */
    public $ClusterDesc;

    /**
     * @var EdgeClusterAdvancedSettings 集群高级设置
     */
    public $ClusterAdvancedSettings;

    /**
     * @var integer 节点上最大Pod数量
     */
    public $MaxNodePodNum;

    /**
     * @var EdgeClusterPublicLB 边缘计算集群公网访问LB信息
     */
    public $PublicLB;

    /**
     * @var string 集群的级别
     */
    public $ClusterLevel;

    /**
     * @var boolean 集群是否支持自动升配
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @var string 集群计费方式
     */
    public $ChargeType;

    /**
     * @var string 边缘集群版本，此版本区别于k8s版本，是整个集群各组件版本集合
     */
    public $EdgeVersion;

    /**
     * @var string 边缘组件镜像仓库前缀
     */
    public $RegistryPrefix;

    /**
     * @param string $K8SVersion k8s版本号
     * @param string $VpcId vpc 的Id
     * @param string $ClusterName 集群名称
     * @param string $PodCIDR 集群pod cidr
     * @param string $ServiceCIDR 集群service cidr
     * @param string $ClusterDesc 集群描述信息
     * @param EdgeClusterAdvancedSettings $ClusterAdvancedSettings 集群高级设置
     * @param integer $MaxNodePodNum 节点上最大Pod数量
     * @param EdgeClusterPublicLB $PublicLB 边缘计算集群公网访问LB信息
     * @param string $ClusterLevel 集群的级别
     * @param boolean $AutoUpgradeClusterLevel 集群是否支持自动升配
     * @param string $ChargeType 集群计费方式
     * @param string $EdgeVersion 边缘集群版本，此版本区别于k8s版本，是整个集群各组件版本集合
     * @param string $RegistryPrefix 边缘组件镜像仓库前缀
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
        if (array_key_exists("K8SVersion",$param) and $param["K8SVersion"] !== null) {
            $this->K8SVersion = $param["K8SVersion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("PodCIDR",$param) and $param["PodCIDR"] !== null) {
            $this->PodCIDR = $param["PodCIDR"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("ClusterAdvancedSettings",$param) and $param["ClusterAdvancedSettings"] !== null) {
            $this->ClusterAdvancedSettings = new EdgeClusterAdvancedSettings();
            $this->ClusterAdvancedSettings->deserialize($param["ClusterAdvancedSettings"]);
        }

        if (array_key_exists("MaxNodePodNum",$param) and $param["MaxNodePodNum"] !== null) {
            $this->MaxNodePodNum = $param["MaxNodePodNum"];
        }

        if (array_key_exists("PublicLB",$param) and $param["PublicLB"] !== null) {
            $this->PublicLB = new EdgeClusterPublicLB();
            $this->PublicLB->deserialize($param["PublicLB"]);
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("AutoUpgradeClusterLevel",$param) and $param["AutoUpgradeClusterLevel"] !== null) {
            $this->AutoUpgradeClusterLevel = $param["AutoUpgradeClusterLevel"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("EdgeVersion",$param) and $param["EdgeVersion"] !== null) {
            $this->EdgeVersion = $param["EdgeVersion"];
        }

        if (array_key_exists("RegistryPrefix",$param) and $param["RegistryPrefix"] !== null) {
            $this->RegistryPrefix = $param["RegistryPrefix"];
        }
    }
}
