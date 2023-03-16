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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例描述信息
 *
 * @method string getInstanceId() 获取集群实例ID, "cdw-xxxx" 字符串类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID, "cdw-xxxx" 字符串类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取集群实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置集群实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态,
Init 创建中; Serving 运行中； 
Deleted已销毁；Deleting 销毁中；
Modify 集群变更中；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态,
Init 创建中; Serving 运行中； 
Deleted已销毁；Deleting 销毁中；
Modify 集群变更中；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域, ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域, ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区， ap-guangzhou-3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区， ap-guangzhou-3
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayMode() 获取付费类型，"hour", "prepay"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(string $PayMode) 设置付费类型，"hour", "prepay"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodesSummary getMasterSummary() 获取数据节点描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterSummary(NodesSummary $MasterSummary) 设置数据节点描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method NodesSummary getCommonSummary() 获取zookeeper节点描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommonSummary(NodesSummary $CommonSummary) 设置zookeeper节点描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHA() 获取高可用，“true" "false"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHA(string $HA) 设置高可用，“true" "false"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessInfo() 获取访问地址，例如 "10.0.0.1:9000"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessInfo(string $AccessInfo) 设置访问地址，例如 "10.0.0.1:9000"
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取记录ID，数值型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置记录ID，数值型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取regionId, 表示地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置regionId, 表示地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneDesc() 获取可用区说明，例如 "广州二区"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneDesc(string $ZoneDesc) 设置可用区说明，例如 "广州二区"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowMsg() 获取错误流程说明信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowMsg(string $FlowMsg) 设置错误流程说明信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDesc() 获取状态描述，例如“运行中”等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述，例如“运行中”等
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRenewFlag() 获取自动续费标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(boolean $RenewFlag) 设置自动续费标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMonitor() 获取监控信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonitor(string $Monitor) 设置监控信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasClsTopic() 获取是否开通日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasClsTopic(boolean $HasClsTopic) 设置是否开通日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClsTopicId() 获取日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClsTopicId(string $ClsTopicId) 设置日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClsLogSetId() 获取日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClsLogSetId(string $ClsLogSetId) 设置日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableXMLConfig() 获取是否支持xml配置管理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableXMLConfig(integer $EnableXMLConfig) 设置是否支持xml配置管理
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionDesc() 获取区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionDesc(string $RegionDesc) 设置区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEip() 获取弹性网卡地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEip(string $Eip) 设置弹性网卡地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCosMoveFactor() 获取冷热分层系数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosMoveFactor(integer $CosMoveFactor) 设置冷热分层系数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKind() 获取external/local/yunti
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKind(string $Kind) 设置external/local/yunti
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsElastic() 获取是否弹性ck
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsElastic(boolean $IsElastic) 设置是否弹性ck
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceStateInfo getInstanceStateInfo() 获取集群详细状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStateInfo(InstanceStateInfo $InstanceStateInfo) 设置集群详细状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHAZk() 获取ZK高可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHAZk(boolean $HAZk) 设置ZK高可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMountDiskType() 获取挂载盘,默认0:没有类型；1:裸盘;2:lvm
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMountDiskType(integer $MountDiskType) 设置挂载盘,默认0:没有类型；1:裸盘;2:lvm
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCHProxyVip() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCHProxyVip(string $CHProxyVip) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosBucketName() 获取cos buket的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucketName(string $CosBucketName) 设置cos buket的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanAttachCbs() 获取是否可以挂载云盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanAttachCbs(boolean $CanAttachCbs) 设置是否可以挂载云盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanAttachCbsLvm() 获取是否可以挂载云盘阵列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanAttachCbsLvm(boolean $CanAttachCbsLvm) 设置是否可以挂载云盘阵列
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanAttachCos() 获取是否可以挂载cos
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanAttachCos(boolean $CanAttachCos) 设置是否可以挂载cos
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComponents() 获取服务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponents(array $Components) 设置服务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpgradeVersions() 获取可升级的内核版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpgradeVersions(string $UpgradeVersions) 设置可升级的内核版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string 集群实例ID, "cdw-xxxx" 字符串类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 集群实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 状态,
Init 创建中; Serving 运行中； 
Deleted已销毁；Deleting 销毁中；
Modify 集群变更中；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 地域, ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 可用区， ap-guangzhou-3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 付费类型，"hour", "prepay"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var NodesSummary 数据节点描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterSummary;

    /**
     * @var NodesSummary zookeeper节点描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommonSummary;

    /**
     * @var string 高可用，“true" "false"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HA;

    /**
     * @var string 访问地址，例如 "10.0.0.1:9000"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessInfo;

    /**
     * @var integer 记录ID，数值型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer regionId, 表示地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var string 可用区说明，例如 "广州二区"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneDesc;

    /**
     * @var string 错误流程说明信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowMsg;

    /**
     * @var string 状态描述，例如“运行中”等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var boolean 自动续费标记
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 监控信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Monitor;

    /**
     * @var boolean 是否开通日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasClsTopic;

    /**
     * @var string 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClsTopicId;

    /**
     * @var string 日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClsLogSetId;

    /**
     * @var integer 是否支持xml配置管理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableXMLConfig;

    /**
     * @var string 区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionDesc;

    /**
     * @var string 弹性网卡地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Eip;

    /**
     * @var integer 冷热分层系数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosMoveFactor;

    /**
     * @var string external/local/yunti
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kind;

    /**
     * @var boolean 是否弹性ck
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsElastic;

    /**
     * @var InstanceStateInfo 集群详细状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStateInfo;

    /**
     * @var boolean ZK高可用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HAZk;

    /**
     * @var integer 挂载盘,默认0:没有类型；1:裸盘;2:lvm
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MountDiskType;

    /**
     * @var string 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CHProxyVip;

    /**
     * @var string cos buket的名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucketName;

    /**
     * @var boolean 是否可以挂载云盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanAttachCbs;

    /**
     * @var boolean 是否可以挂载云盘阵列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanAttachCbsLvm;

    /**
     * @var boolean 是否可以挂载cos
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanAttachCos;

    /**
     * @var array 服务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Components;

    /**
     * @var string 可升级的内核版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpgradeVersions;

    /**
     * @param string $InstanceId 集群实例ID, "cdw-xxxx" 字符串类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 集群实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态,
Init 创建中; Serving 运行中； 
Deleted已销毁；Deleting 销毁中；
Modify 集群变更中；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域, ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区， ap-guangzhou-3
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayMode 付费类型，"hour", "prepay"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodesSummary $MasterSummary 数据节点描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param NodesSummary $CommonSummary zookeeper节点描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HA 高可用，“true" "false"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessInfo 访问地址，例如 "10.0.0.1:9000"
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 记录ID，数值型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId regionId, 表示地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneDesc 可用区说明，例如 "广州二区"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowMsg 错误流程说明信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDesc 状态描述，例如“运行中”等
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RenewFlag 自动续费标记
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Monitor 监控信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasClsTopic 是否开通日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClsTopicId 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClsLogSetId 日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableXMLConfig 是否支持xml配置管理
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionDesc 区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Eip 弹性网卡地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CosMoveFactor 冷热分层系数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Kind external/local/yunti
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsElastic 是否弹性ck
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceStateInfo $InstanceStateInfo 集群详细状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HAZk ZK高可用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MountDiskType 挂载盘,默认0:没有类型；1:裸盘;2:lvm
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CHProxyVip 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosBucketName cos buket的名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanAttachCbs 是否可以挂载云盘
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanAttachCbsLvm 是否可以挂载云盘阵列
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanAttachCos 是否可以挂载cos
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Components 服务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpgradeVersions 可升级的内核版本
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("MasterSummary",$param) and $param["MasterSummary"] !== null) {
            $this->MasterSummary = new NodesSummary();
            $this->MasterSummary->deserialize($param["MasterSummary"]);
        }

        if (array_key_exists("CommonSummary",$param) and $param["CommonSummary"] !== null) {
            $this->CommonSummary = new NodesSummary();
            $this->CommonSummary->deserialize($param["CommonSummary"]);
        }

        if (array_key_exists("HA",$param) and $param["HA"] !== null) {
            $this->HA = $param["HA"];
        }

        if (array_key_exists("AccessInfo",$param) and $param["AccessInfo"] !== null) {
            $this->AccessInfo = $param["AccessInfo"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneDesc",$param) and $param["ZoneDesc"] !== null) {
            $this->ZoneDesc = $param["ZoneDesc"];
        }

        if (array_key_exists("FlowMsg",$param) and $param["FlowMsg"] !== null) {
            $this->FlowMsg = $param["FlowMsg"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Monitor",$param) and $param["Monitor"] !== null) {
            $this->Monitor = $param["Monitor"];
        }

        if (array_key_exists("HasClsTopic",$param) and $param["HasClsTopic"] !== null) {
            $this->HasClsTopic = $param["HasClsTopic"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("ClsLogSetId",$param) and $param["ClsLogSetId"] !== null) {
            $this->ClsLogSetId = $param["ClsLogSetId"];
        }

        if (array_key_exists("EnableXMLConfig",$param) and $param["EnableXMLConfig"] !== null) {
            $this->EnableXMLConfig = $param["EnableXMLConfig"];
        }

        if (array_key_exists("RegionDesc",$param) and $param["RegionDesc"] !== null) {
            $this->RegionDesc = $param["RegionDesc"];
        }

        if (array_key_exists("Eip",$param) and $param["Eip"] !== null) {
            $this->Eip = $param["Eip"];
        }

        if (array_key_exists("CosMoveFactor",$param) and $param["CosMoveFactor"] !== null) {
            $this->CosMoveFactor = $param["CosMoveFactor"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("IsElastic",$param) and $param["IsElastic"] !== null) {
            $this->IsElastic = $param["IsElastic"];
        }

        if (array_key_exists("InstanceStateInfo",$param) and $param["InstanceStateInfo"] !== null) {
            $this->InstanceStateInfo = new InstanceStateInfo();
            $this->InstanceStateInfo->deserialize($param["InstanceStateInfo"]);
        }

        if (array_key_exists("HAZk",$param) and $param["HAZk"] !== null) {
            $this->HAZk = $param["HAZk"];
        }

        if (array_key_exists("MountDiskType",$param) and $param["MountDiskType"] !== null) {
            $this->MountDiskType = $param["MountDiskType"];
        }

        if (array_key_exists("CHProxyVip",$param) and $param["CHProxyVip"] !== null) {
            $this->CHProxyVip = $param["CHProxyVip"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CanAttachCbs",$param) and $param["CanAttachCbs"] !== null) {
            $this->CanAttachCbs = $param["CanAttachCbs"];
        }

        if (array_key_exists("CanAttachCbsLvm",$param) and $param["CanAttachCbsLvm"] !== null) {
            $this->CanAttachCbsLvm = $param["CanAttachCbsLvm"];
        }

        if (array_key_exists("CanAttachCos",$param) and $param["CanAttachCos"] !== null) {
            $this->CanAttachCos = $param["CanAttachCos"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new ServiceInfo();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("UpgradeVersions",$param) and $param["UpgradeVersions"] !== null) {
            $this->UpgradeVersions = $param["UpgradeVersions"];
        }
    }
}
