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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群pod列表
 *
 * @method integer getAppId() 获取租户id
 * @method void setAppId(integer $AppId) 设置租户id
 * @method string getUin() 获取租户uin
 * @method void setUin(string $Uin) 设置租户uin
 * @method string getNick() 获取租户昵称
 * @method void setNick(string $Nick) 设置租户昵称
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetId() 获取pod id
 * @method void setAssetId(string $AssetId) 设置pod id
 * @method string getAssetName() 获取pod名称
 * @method void setAssetName(string $AssetName) 设置pod名称
 * @method string getInstanceCreateTime() 获取pod创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCreateTime(string $InstanceCreateTime) 设置pod创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineId() 获取主机id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineId(string $MachineId) 设置主机id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineName() 获取主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineName(string $MachineName) 设置主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodIp() 获取pod ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodIp(string $PodIp) 设置pod ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getServiceCount() 获取关联service数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCount(integer $ServiceCount) 设置关联service数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContainerCount() 获取关联容器数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerCount(integer $ContainerCount) 设置关联容器数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicIp() 获取公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIp(string $PublicIp) 设置公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIp() 获取内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsCore() 获取是否核心：1:核心，2:非核心
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCore(integer $IsCore) 设置是否核心：1:核心，2:非核心
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNewAsset() 获取是否新资产 1新
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNewAsset(integer $IsNewAsset) 设置是否新资产 1新
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetClusterPod extends AbstractModel
{
    /**
     * @var integer 租户id
     */
    public $AppId;

    /**
     * @var string 租户uin
     */
    public $Uin;

    /**
     * @var string 租户昵称
     */
    public $Nick;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string pod id
     */
    public $AssetId;

    /**
     * @var string pod名称
     */
    public $AssetName;

    /**
     * @var string pod创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCreateTime;

    /**
     * @var string 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 主机id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineId;

    /**
     * @var string 主机名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineName;

    /**
     * @var string pod ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodIp;

    /**
     * @var integer 关联service数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCount;

    /**
     * @var integer 关联容器数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerCount;

    /**
     * @var string 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIp;

    /**
     * @var string 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIp;

    /**
     * @var integer 是否核心：1:核心，2:非核心
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCore;

    /**
     * @var integer 是否新资产 1新
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNewAsset;

    /**
     * @param integer $AppId 租户id
     * @param string $Uin 租户uin
     * @param string $Nick 租户昵称
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetId pod id
     * @param string $AssetName pod名称
     * @param string $InstanceCreateTime pod创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineId 主机id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineName 主机名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodIp pod ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ServiceCount 关联service数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContainerCount 关联容器数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicIp 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIp 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsCore 是否核心：1:核心，2:非核心
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNewAsset 是否新资产 1新
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("InstanceCreateTime",$param) and $param["InstanceCreateTime"] !== null) {
            $this->InstanceCreateTime = $param["InstanceCreateTime"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("MachineId",$param) and $param["MachineId"] !== null) {
            $this->MachineId = $param["MachineId"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }
    }
}
