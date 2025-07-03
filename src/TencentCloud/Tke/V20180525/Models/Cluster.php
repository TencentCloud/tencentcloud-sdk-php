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
 * 集群信息结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterDescription() 获取集群描述
 * @method void setClusterDescription(string $ClusterDescription) 设置集群描述
 * @method string getClusterVersion() 获取集群版本（默认值为1.10.5）
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本（默认值为1.10.5）
 * @method string getClusterOs() 获取集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
 * @method void setClusterOs(string $ClusterOs) 设置集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
 * @method string getClusterType() 获取集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
 * @method void setClusterType(string $ClusterType) 设置集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
 * @method ClusterNetworkSettings getClusterNetworkSettings() 获取集群网络相关参数
 * @method void setClusterNetworkSettings(ClusterNetworkSettings $ClusterNetworkSettings) 设置集群网络相关参数
 * @method integer getClusterNodeNum() 获取集群当前node数量
 * @method void setClusterNodeNum(integer $ClusterNodeNum) 设置集群当前node数量
 * @method integer getProjectId() 获取集群所属的项目ID
 * @method void setProjectId(integer $ProjectId) 设置集群所属的项目ID
 * @method array getTagSpecification() 获取标签描述列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterStatus() 获取集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Scaling 规模调整中,Upgrading 升级中,WaittingForConnect 等待注册,Trading 集群开通中,Isolated 欠费隔离中,Pause 集群升级暂停,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 隔离中,ResourceIsolated 已隔离,ResourceReverse 冲正中,Abnormal 异常)
 * @method void setClusterStatus(string $ClusterStatus) 设置集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Scaling 规模调整中,Upgrading 升级中,WaittingForConnect 等待注册,Trading 集群开通中,Isolated 欠费隔离中,Pause 集群升级暂停,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 隔离中,ResourceIsolated 已隔离,ResourceReverse 冲正中,Abnormal 异常)
 * @method string getProperty() 获取集群属性(包括集群不同属性的MAP，属性字段包括NodeNameType (lan-ip模式和hostname 模式，默认无lan-ip模式))
 * @method void setProperty(string $Property) 设置集群属性(包括集群不同属性的MAP，属性字段包括NodeNameType (lan-ip模式和hostname 模式，默认无lan-ip模式))
 * @method integer getClusterMaterNodeNum() 获取集群当前master数量
 * @method void setClusterMaterNodeNum(integer $ClusterMaterNodeNum) 设置集群当前master数量
 * @method string getImageId() 获取集群使用镜像id
 * @method void setImageId(string $ImageId) 设置集群使用镜像id
 * @method string getOsCustomizeType() 获取OsCustomizeType 系统定制类型
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置OsCustomizeType 系统定制类型
 * @method string getContainerRuntime() 获取集群运行环境docker或container
 * @method void setContainerRuntime(string $ContainerRuntime) 设置集群运行环境docker或container
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method boolean getDeletionProtection() 获取删除保护开关
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置删除保护开关
 * @method boolean getEnableExternalNode() 获取集群是否开启第三方节点支持
 * @method void setEnableExternalNode(boolean $EnableExternalNode) 设置集群是否开启第三方节点支持
 * @method string getClusterLevel() 获取集群等级，针对托管集群生效
 * @method void setClusterLevel(string $ClusterLevel) 设置集群等级，针对托管集群生效
 * @method boolean getAutoUpgradeClusterLevel() 获取自动变配集群等级，针对托管集群生效
 * @method void setAutoUpgradeClusterLevel(boolean $AutoUpgradeClusterLevel) 设置自动变配集群等级，针对托管集群生效
 * @method boolean getQGPUShareEnable() 获取是否开启QGPU共享
 * @method void setQGPUShareEnable(boolean $QGPUShareEnable) 设置是否开启QGPU共享
 * @method string getRuntimeVersion() 获取运行时版本
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行时版本
 * @method integer getClusterEtcdNodeNum() 获取集群当前etcd数量
 * @method void setClusterEtcdNodeNum(integer $ClusterEtcdNodeNum) 设置集群当前etcd数量
 * @method string getCdcId() 获取本地专用集群Id
 * @method void setCdcId(string $CdcId) 设置本地专用集群Id
 */
class Cluster extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群描述
     */
    public $ClusterDescription;

    /**
     * @var string 集群版本（默认值为1.10.5）
     */
    public $ClusterVersion;

    /**
     * @var string 集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
     */
    public $ClusterOs;

    /**
     * @var string 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
     */
    public $ClusterType;

    /**
     * @var ClusterNetworkSettings 集群网络相关参数
     */
    public $ClusterNetworkSettings;

    /**
     * @var integer 集群当前node数量
     */
    public $ClusterNodeNum;

    /**
     * @var integer 集群所属的项目ID
     */
    public $ProjectId;

    /**
     * @var array 标签描述列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSpecification;

    /**
     * @var string 集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Scaling 规模调整中,Upgrading 升级中,WaittingForConnect 等待注册,Trading 集群开通中,Isolated 欠费隔离中,Pause 集群升级暂停,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 隔离中,ResourceIsolated 已隔离,ResourceReverse 冲正中,Abnormal 异常)
     */
    public $ClusterStatus;

    /**
     * @var string 集群属性(包括集群不同属性的MAP，属性字段包括NodeNameType (lan-ip模式和hostname 模式，默认无lan-ip模式))
     */
    public $Property;

    /**
     * @var integer 集群当前master数量
     */
    public $ClusterMaterNodeNum;

    /**
     * @var string 集群使用镜像id
     */
    public $ImageId;

    /**
     * @var string OsCustomizeType 系统定制类型
     */
    public $OsCustomizeType;

    /**
     * @var string 集群运行环境docker或container
     */
    public $ContainerRuntime;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var boolean 删除保护开关
     */
    public $DeletionProtection;

    /**
     * @var boolean 集群是否开启第三方节点支持
     */
    public $EnableExternalNode;

    /**
     * @var string 集群等级，针对托管集群生效
     */
    public $ClusterLevel;

    /**
     * @var boolean 自动变配集群等级，针对托管集群生效
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @var boolean 是否开启QGPU共享
     */
    public $QGPUShareEnable;

    /**
     * @var string 运行时版本
     */
    public $RuntimeVersion;

    /**
     * @var integer 集群当前etcd数量
     */
    public $ClusterEtcdNodeNum;

    /**
     * @var string 本地专用集群Id
     */
    public $CdcId;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $ClusterDescription 集群描述
     * @param string $ClusterVersion 集群版本（默认值为1.10.5）
     * @param string $ClusterOs 集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
     * @param string $ClusterType 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
     * @param ClusterNetworkSettings $ClusterNetworkSettings 集群网络相关参数
     * @param integer $ClusterNodeNum 集群当前node数量
     * @param integer $ProjectId 集群所属的项目ID
     * @param array $TagSpecification 标签描述列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterStatus 集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Scaling 规模调整中,Upgrading 升级中,WaittingForConnect 等待注册,Trading 集群开通中,Isolated 欠费隔离中,Pause 集群升级暂停,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 隔离中,ResourceIsolated 已隔离,ResourceReverse 冲正中,Abnormal 异常)
     * @param string $Property 集群属性(包括集群不同属性的MAP，属性字段包括NodeNameType (lan-ip模式和hostname 模式，默认无lan-ip模式))
     * @param integer $ClusterMaterNodeNum 集群当前master数量
     * @param string $ImageId 集群使用镜像id
     * @param string $OsCustomizeType OsCustomizeType 系统定制类型
     * @param string $ContainerRuntime 集群运行环境docker或container
     * @param string $CreatedTime 创建时间
     * @param boolean $DeletionProtection 删除保护开关
     * @param boolean $EnableExternalNode 集群是否开启第三方节点支持
     * @param string $ClusterLevel 集群等级，针对托管集群生效
     * @param boolean $AutoUpgradeClusterLevel 自动变配集群等级，针对托管集群生效
     * @param boolean $QGPUShareEnable 是否开启QGPU共享
     * @param string $RuntimeVersion 运行时版本
     * @param integer $ClusterEtcdNodeNum 集群当前etcd数量
     * @param string $CdcId 本地专用集群Id
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

        if (array_key_exists("ClusterDescription",$param) and $param["ClusterDescription"] !== null) {
            $this->ClusterDescription = $param["ClusterDescription"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterOs",$param) and $param["ClusterOs"] !== null) {
            $this->ClusterOs = $param["ClusterOs"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterNetworkSettings",$param) and $param["ClusterNetworkSettings"] !== null) {
            $this->ClusterNetworkSettings = new ClusterNetworkSettings();
            $this->ClusterNetworkSettings->deserialize($param["ClusterNetworkSettings"]);
        }

        if (array_key_exists("ClusterNodeNum",$param) and $param["ClusterNodeNum"] !== null) {
            $this->ClusterNodeNum = $param["ClusterNodeNum"];
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

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("Property",$param) and $param["Property"] !== null) {
            $this->Property = $param["Property"];
        }

        if (array_key_exists("ClusterMaterNodeNum",$param) and $param["ClusterMaterNodeNum"] !== null) {
            $this->ClusterMaterNodeNum = $param["ClusterMaterNodeNum"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("EnableExternalNode",$param) and $param["EnableExternalNode"] !== null) {
            $this->EnableExternalNode = $param["EnableExternalNode"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("AutoUpgradeClusterLevel",$param) and $param["AutoUpgradeClusterLevel"] !== null) {
            $this->AutoUpgradeClusterLevel = $param["AutoUpgradeClusterLevel"];
        }

        if (array_key_exists("QGPUShareEnable",$param) and $param["QGPUShareEnable"] !== null) {
            $this->QGPUShareEnable = $param["QGPUShareEnable"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("ClusterEtcdNodeNum",$param) and $param["ClusterEtcdNodeNum"] !== null) {
            $this->ClusterEtcdNodeNum = $param["ClusterEtcdNodeNum"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
