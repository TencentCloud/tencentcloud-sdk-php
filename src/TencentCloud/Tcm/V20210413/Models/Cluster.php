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
 * Mesh集群信息
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getRole() 获取集群角色，取值范围：
- MASTER：控制面所在的主集群
- REMOTE：主集群管理的远端集群
 * @method void setRole(string $Role) 设置集群角色，取值范围：
- MASTER：控制面所在的主集群
- REMOTE：主集群管理的远端集群
 * @method string getVpcId() 获取私有网络Id
 * @method void setVpcId(string $VpcId) 设置私有网络Id
 * @method string getSubnetId() 获取子网Id
 * @method void setSubnetId(string $SubnetId) 设置子网Id
 * @method string getDisplayName() 获取名称，只读
 * @method void setDisplayName(string $DisplayName) 设置名称，只读
 * @method string getState() 获取状态，只读
 * @method void setState(string $State) 设置状态，只读
 * @method string getLinkedTime() 获取关联时间，只读
 * @method void setLinkedTime(string $LinkedTime) 设置关联时间，只读
 * @method ClusterConfig getConfig() 获取集群配置
 * @method void setConfig(ClusterConfig $Config) 设置集群配置
 * @method ClusterStatus getStatus() 获取详细状态，只读
 * @method void setStatus(ClusterStatus $Status) 设置详细状态，只读
 * @method string getType() 获取类型，取值范围：
- TKE
- EKS
 * @method void setType(string $Type) 设置类型，取值范围：
- TKE
- EKS
 * @method array getHostedNamespaces() 获取集群关联的 Namespace 列表
 * @method void setHostedNamespaces(array $HostedNamespaces) 设置集群关联的 Namespace 列表
 */
class Cluster extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 集群角色，取值范围：
- MASTER：控制面所在的主集群
- REMOTE：主集群管理的远端集群
     */
    public $Role;

    /**
     * @var string 私有网络Id
     */
    public $VpcId;

    /**
     * @var string 子网Id
     */
    public $SubnetId;

    /**
     * @var string 名称，只读
     */
    public $DisplayName;

    /**
     * @var string 状态，只读
     */
    public $State;

    /**
     * @var string 关联时间，只读
     */
    public $LinkedTime;

    /**
     * @var ClusterConfig 集群配置
     */
    public $Config;

    /**
     * @var ClusterStatus 详细状态，只读
     */
    public $Status;

    /**
     * @var string 类型，取值范围：
- TKE
- EKS
     */
    public $Type;

    /**
     * @var array 集群关联的 Namespace 列表
     */
    public $HostedNamespaces;

    /**
     * @param string $ClusterId 集群Id
     * @param string $Region 地域
     * @param string $Role 集群角色，取值范围：
- MASTER：控制面所在的主集群
- REMOTE：主集群管理的远端集群
     * @param string $VpcId 私有网络Id
     * @param string $SubnetId 子网Id
     * @param string $DisplayName 名称，只读
     * @param string $State 状态，只读
     * @param string $LinkedTime 关联时间，只读
     * @param ClusterConfig $Config 集群配置
     * @param ClusterStatus $Status 详细状态，只读
     * @param string $Type 类型，取值范围：
- TKE
- EKS
     * @param array $HostedNamespaces 集群关联的 Namespace 列表
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("LinkedTime",$param) and $param["LinkedTime"] !== null) {
            $this->LinkedTime = $param["LinkedTime"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new ClusterConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new ClusterStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("HostedNamespaces",$param) and $param["HostedNamespaces"] !== null) {
            $this->HostedNamespaces = $param["HostedNamespaces"];
        }
    }
}
