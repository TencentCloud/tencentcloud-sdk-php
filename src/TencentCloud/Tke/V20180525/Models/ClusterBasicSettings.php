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
 * 描述集群的基本配置信息
 *
 * @method string getClusterOs() 获取集群操作系统，支持设置公共镜像(字段传相应镜像Name)和自定义镜像(字段传相应镜像ID)，详情参考：https://cloud.tencent.com/document/product/457/68289
 * @method void setClusterOs(string $ClusterOs) 设置集群操作系统，支持设置公共镜像(字段传相应镜像Name)和自定义镜像(字段传相应镜像ID)，详情参考：https://cloud.tencent.com/document/product/457/68289
 * @method string getClusterVersion() 获取集群版本,默认值为1.10.5
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本,默认值为1.10.5
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterDescription() 获取集群描述
 * @method void setClusterDescription(string $ClusterDescription) 设置集群描述
 * @method string getVpcId() 获取私有网络ID，形如vpc-xxx。创建托管空集群时必传。
 * @method void setVpcId(string $VpcId) 设置私有网络ID，形如vpc-xxx。创建托管空集群时必传。
 * @method integer getProjectId() 获取集群内新增资源所属项目ID。
 * @method void setProjectId(integer $ProjectId) 设置集群内新增资源所属项目ID。
 * @method array getTagSpecification() 获取标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
 * @method string getOsCustomizeType() 获取容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
 * @method boolean getNeedWorkSecurityGroup() 获取是否开启节点的默认安全组(默认: 否，Alpha特性)
 * @method void setNeedWorkSecurityGroup(boolean $NeedWorkSecurityGroup) 设置是否开启节点的默认安全组(默认: 否，Alpha特性)
 * @method string getSubnetId() 获取当选择Cilium Overlay网络插件时，TKE会从该子网获取2个IP用来创建内网负载均衡
 * @method void setSubnetId(string $SubnetId) 设置当选择Cilium Overlay网络插件时，TKE会从该子网获取2个IP用来创建内网负载均衡
 * @method string getClusterLevel() 获取集群等级，针对托管集群生效
 * @method void setClusterLevel(string $ClusterLevel) 设置集群等级，针对托管集群生效
 * @method AutoUpgradeClusterLevel getAutoUpgradeClusterLevel() 获取自动变配集群等级，针对托管集群生效
 * @method void setAutoUpgradeClusterLevel(AutoUpgradeClusterLevel $AutoUpgradeClusterLevel) 设置自动变配集群等级，针对托管集群生效
 */
class ClusterBasicSettings extends AbstractModel
{
    /**
     * @var string 集群操作系统，支持设置公共镜像(字段传相应镜像Name)和自定义镜像(字段传相应镜像ID)，详情参考：https://cloud.tencent.com/document/product/457/68289
     */
    public $ClusterOs;

    /**
     * @var string 集群版本,默认值为1.10.5
     */
    public $ClusterVersion;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群描述
     */
    public $ClusterDescription;

    /**
     * @var string 私有网络ID，形如vpc-xxx。创建托管空集群时必传。
     */
    public $VpcId;

    /**
     * @var integer 集群内新增资源所属项目ID。
     */
    public $ProjectId;

    /**
     * @var array 标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
     */
    public $TagSpecification;

    /**
     * @var string 容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
     */
    public $OsCustomizeType;

    /**
     * @var boolean 是否开启节点的默认安全组(默认: 否，Alpha特性)
     */
    public $NeedWorkSecurityGroup;

    /**
     * @var string 当选择Cilium Overlay网络插件时，TKE会从该子网获取2个IP用来创建内网负载均衡
     */
    public $SubnetId;

    /**
     * @var string 集群等级，针对托管集群生效
     */
    public $ClusterLevel;

    /**
     * @var AutoUpgradeClusterLevel 自动变配集群等级，针对托管集群生效
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @param string $ClusterOs 集群操作系统，支持设置公共镜像(字段传相应镜像Name)和自定义镜像(字段传相应镜像ID)，详情参考：https://cloud.tencent.com/document/product/457/68289
     * @param string $ClusterVersion 集群版本,默认值为1.10.5
     * @param string $ClusterName 集群名称
     * @param string $ClusterDescription 集群描述
     * @param string $VpcId 私有网络ID，形如vpc-xxx。创建托管空集群时必传。
     * @param integer $ProjectId 集群内新增资源所属项目ID。
     * @param array $TagSpecification 标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
     * @param string $OsCustomizeType 容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
     * @param boolean $NeedWorkSecurityGroup 是否开启节点的默认安全组(默认: 否，Alpha特性)
     * @param string $SubnetId 当选择Cilium Overlay网络插件时，TKE会从该子网获取2个IP用来创建内网负载均衡
     * @param string $ClusterLevel 集群等级，针对托管集群生效
     * @param AutoUpgradeClusterLevel $AutoUpgradeClusterLevel 自动变配集群等级，针对托管集群生效
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
        if (array_key_exists("ClusterOs",$param) and $param["ClusterOs"] !== null) {
            $this->ClusterOs = $param["ClusterOs"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDescription",$param) and $param["ClusterDescription"] !== null) {
            $this->ClusterDescription = $param["ClusterDescription"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("NeedWorkSecurityGroup",$param) and $param["NeedWorkSecurityGroup"] !== null) {
            $this->NeedWorkSecurityGroup = $param["NeedWorkSecurityGroup"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("AutoUpgradeClusterLevel",$param) and $param["AutoUpgradeClusterLevel"] !== null) {
            $this->AutoUpgradeClusterLevel = new AutoUpgradeClusterLevel();
            $this->AutoUpgradeClusterLevel->deserialize($param["AutoUpgradeClusterLevel"]);
        }
    }
}
