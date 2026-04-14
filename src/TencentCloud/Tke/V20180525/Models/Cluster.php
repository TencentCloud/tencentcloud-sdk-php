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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群信息结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getClusterDescription() 获取<p>集群描述</p>
 * @method void setClusterDescription(string $ClusterDescription) 设置<p>集群描述</p>
 * @method string getClusterVersion() 获取<p>集群版本（默认值为1.10.5）</p>
 * @method void setClusterVersion(string $ClusterVersion) 设置<p>集群版本（默认值为1.10.5）</p>
 * @method string getClusterOs() 获取<p>集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64</p>
 * @method void setClusterOs(string $ClusterOs) 设置<p>集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64</p>
 * @method string getClusterType() 获取<p>集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。</p>
 * @method ClusterNetworkSettings getClusterNetworkSettings() 获取<p>集群网络相关参数</p>
 * @method void setClusterNetworkSettings(ClusterNetworkSettings $ClusterNetworkSettings) 设置<p>集群网络相关参数</p>
 * @method integer getClusterNodeNum() 获取<p>集群当前node数量</p>
 * @method void setClusterNodeNum(integer $ClusterNodeNum) 设置<p>集群当前node数量</p>
 * @method integer getProjectId() 获取<p>集群所属的项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>集群所属的项目ID</p>
 * @method array getTagSpecification() 获取<p>标签描述列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSpecification(array $TagSpecification) 设置<p>标签描述列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterStatus() 获取<p>集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Scaling 规模调整中,Upgrading 升级中,WaittingForConnect 等待注册,Trading 集群开通中,Isolated 欠费隔离中,Pause 集群升级暂停,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 隔离中,ResourceIsolated 已隔离,ResourceReverse 冲正中,Abnormal 异常)</p>
 * @method void setClusterStatus(string $ClusterStatus) 设置<p>集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Scaling 规模调整中,Upgrading 升级中,WaittingForConnect 等待注册,Trading 集群开通中,Isolated 欠费隔离中,Pause 集群升级暂停,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 隔离中,ResourceIsolated 已隔离,ResourceReverse 冲正中,Abnormal 异常)</p>
 * @method string getProperty() 获取<p>集群属性(包括集群不同属性的MAP，属性字段包括NodeNameType (lan-ip模式和hostname 模式，默认无lan-ip模式))</p>
 * @method void setProperty(string $Property) 设置<p>集群属性(包括集群不同属性的MAP，属性字段包括NodeNameType (lan-ip模式和hostname 模式，默认无lan-ip模式))</p>
 * @method integer getClusterMaterNodeNum() 获取<p>集群当前master数量</p>
 * @method void setClusterMaterNodeNum(integer $ClusterMaterNodeNum) 设置<p>集群当前master数量</p>
 * @method string getImageId() 获取<p>集群使用镜像id</p>
 * @method void setImageId(string $ImageId) 设置<p>集群使用镜像id</p>
 * @method string getOsCustomizeType() 获取<p>OsCustomizeType 系统定制类型</p>
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置<p>OsCustomizeType 系统定制类型</p>
 * @method string getContainerRuntime() 获取<p>集群运行环境docker或container</p>
 * @method void setContainerRuntime(string $ContainerRuntime) 设置<p>集群运行环境docker或container</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method boolean getDeletionProtection() 获取<p>集群删除保护开关，打开：true，关闭：false</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>集群删除保护开关，打开：true，关闭：false</p>
 * @method boolean getEnableExternalNode() 获取<p>集群是否开启第三方节点支持，开启：true，关闭：false</p>
 * @method void setEnableExternalNode(boolean $EnableExternalNode) 设置<p>集群是否开启第三方节点支持，开启：true，关闭：false</p>
 * @method string getClusterLevel() 获取<p>集群等级，针对托管集群生效</p>
 * @method void setClusterLevel(string $ClusterLevel) 设置<p>集群等级，针对托管集群生效</p>
 * @method boolean getAutoUpgradeClusterLevel() 获取<p>自动变配集群等级，针对托管集群生效。开启：true，关闭：false</p>
 * @method void setAutoUpgradeClusterLevel(boolean $AutoUpgradeClusterLevel) 设置<p>自动变配集群等级，针对托管集群生效。开启：true，关闭：false</p>
 * @method boolean getQGPUShareEnable() 获取<p>是否开启QGPU共享，开启：true，关闭：false</p>
 * @method void setQGPUShareEnable(boolean $QGPUShareEnable) 设置<p>是否开启QGPU共享，开启：true，关闭：false</p>
 * @method string getRuntimeVersion() 获取<p>运行时版本</p>
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置<p>运行时版本</p>
 * @method integer getClusterEtcdNodeNum() 获取<p>集群当前etcd数量</p>
 * @method void setClusterEtcdNodeNum(integer $ClusterEtcdNodeNum) 设置<p>集群当前etcd数量</p>
 * @method string getCdcId() 获取<p>本地专用集群Id</p>
 * @method void setCdcId(string $CdcId) 设置<p>本地专用集群Id</p>
 * @method boolean getIsHighAvailability() 获取<p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行</p>
 * @method void setIsHighAvailability(boolean $IsHighAvailability) 设置<p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行</p>
 * @method SecurityModeConfig getSecurityModeConfig() 获取<p>开启后会下发Gatekeeper和网络策略</p>
 * @method void setSecurityModeConfig(SecurityModeConfig $SecurityModeConfig) 设置<p>开启后会下发Gatekeeper和网络策略</p>
 */
class Cluster extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群描述</p>
     */
    public $ClusterDescription;

    /**
     * @var string <p>集群版本（默认值为1.10.5）</p>
     */
    public $ClusterVersion;

    /**
     * @var string <p>集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64</p>
     */
    public $ClusterOs;

    /**
     * @var string <p>集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。</p>
     */
    public $ClusterType;

    /**
     * @var ClusterNetworkSettings <p>集群网络相关参数</p>
     */
    public $ClusterNetworkSettings;

    /**
     * @var integer <p>集群当前node数量</p>
     */
    public $ClusterNodeNum;

    /**
     * @var integer <p>集群所属的项目ID</p>
     */
    public $ProjectId;

    /**
     * @var array <p>标签描述列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSpecification;

    /**
     * @var string <p>集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Scaling 规模调整中,Upgrading 升级中,WaittingForConnect 等待注册,Trading 集群开通中,Isolated 欠费隔离中,Pause 集群升级暂停,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 隔离中,ResourceIsolated 已隔离,ResourceReverse 冲正中,Abnormal 异常)</p>
     */
    public $ClusterStatus;

    /**
     * @var string <p>集群属性(包括集群不同属性的MAP，属性字段包括NodeNameType (lan-ip模式和hostname 模式，默认无lan-ip模式))</p>
     */
    public $Property;

    /**
     * @var integer <p>集群当前master数量</p>
     */
    public $ClusterMaterNodeNum;

    /**
     * @var string <p>集群使用镜像id</p>
     */
    public $ImageId;

    /**
     * @var string <p>OsCustomizeType 系统定制类型</p>
     */
    public $OsCustomizeType;

    /**
     * @var string <p>集群运行环境docker或container</p>
     */
    public $ContainerRuntime;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var boolean <p>集群删除保护开关，打开：true，关闭：false</p>
     */
    public $DeletionProtection;

    /**
     * @var boolean <p>集群是否开启第三方节点支持，开启：true，关闭：false</p>
     */
    public $EnableExternalNode;

    /**
     * @var string <p>集群等级，针对托管集群生效</p>
     */
    public $ClusterLevel;

    /**
     * @var boolean <p>自动变配集群等级，针对托管集群生效。开启：true，关闭：false</p>
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @var boolean <p>是否开启QGPU共享，开启：true，关闭：false</p>
     */
    public $QGPUShareEnable;

    /**
     * @var string <p>运行时版本</p>
     */
    public $RuntimeVersion;

    /**
     * @var integer <p>集群当前etcd数量</p>
     */
    public $ClusterEtcdNodeNum;

    /**
     * @var string <p>本地专用集群Id</p>
     */
    public $CdcId;

    /**
     * @var boolean <p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行</p>
     */
    public $IsHighAvailability;

    /**
     * @var SecurityModeConfig <p>开启后会下发Gatekeeper和网络策略</p>
     */
    public $SecurityModeConfig;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $ClusterDescription <p>集群描述</p>
     * @param string $ClusterVersion <p>集群版本（默认值为1.10.5）</p>
     * @param string $ClusterOs <p>集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64</p>
     * @param string $ClusterType <p>集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。</p>
     * @param ClusterNetworkSettings $ClusterNetworkSettings <p>集群网络相关参数</p>
     * @param integer $ClusterNodeNum <p>集群当前node数量</p>
     * @param integer $ProjectId <p>集群所属的项目ID</p>
     * @param array $TagSpecification <p>标签描述列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterStatus <p>集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Scaling 规模调整中,Upgrading 升级中,WaittingForConnect 等待注册,Trading 集群开通中,Isolated 欠费隔离中,Pause 集群升级暂停,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 隔离中,ResourceIsolated 已隔离,ResourceReverse 冲正中,Abnormal 异常)</p>
     * @param string $Property <p>集群属性(包括集群不同属性的MAP，属性字段包括NodeNameType (lan-ip模式和hostname 模式，默认无lan-ip模式))</p>
     * @param integer $ClusterMaterNodeNum <p>集群当前master数量</p>
     * @param string $ImageId <p>集群使用镜像id</p>
     * @param string $OsCustomizeType <p>OsCustomizeType 系统定制类型</p>
     * @param string $ContainerRuntime <p>集群运行环境docker或container</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param boolean $DeletionProtection <p>集群删除保护开关，打开：true，关闭：false</p>
     * @param boolean $EnableExternalNode <p>集群是否开启第三方节点支持，开启：true，关闭：false</p>
     * @param string $ClusterLevel <p>集群等级，针对托管集群生效</p>
     * @param boolean $AutoUpgradeClusterLevel <p>自动变配集群等级，针对托管集群生效。开启：true，关闭：false</p>
     * @param boolean $QGPUShareEnable <p>是否开启QGPU共享，开启：true，关闭：false</p>
     * @param string $RuntimeVersion <p>运行时版本</p>
     * @param integer $ClusterEtcdNodeNum <p>集群当前etcd数量</p>
     * @param string $CdcId <p>本地专用集群Id</p>
     * @param boolean $IsHighAvailability <p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行</p>
     * @param SecurityModeConfig $SecurityModeConfig <p>开启后会下发Gatekeeper和网络策略</p>
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

        if (array_key_exists("IsHighAvailability",$param) and $param["IsHighAvailability"] !== null) {
            $this->IsHighAvailability = $param["IsHighAvailability"];
        }

        if (array_key_exists("SecurityModeConfig",$param) and $param["SecurityModeConfig"] !== null) {
            $this->SecurityModeConfig = new SecurityModeConfig();
            $this->SecurityModeConfig->deserialize($param["SecurityModeConfig"]);
        }
    }
}
