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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息类型
 *
 * @method integer getComputeNodeNum() 获取<p>计算节点数量</p>
 * @method void setComputeNodeNum(integer $ComputeNodeNum) 设置<p>计算节点数量</p>
 * @method string getZone() 获取<p>区域</p>
 * @method void setZone(string $Zone) 设置<p>区域</p>
 * @method string getCreateVersion() 获取<p>创建实例版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateVersion(string $CreateVersion) 设置<p>创建实例版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInitParams() 获取<p>初始化实例参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitParams(array $InitParams) 设置<p>初始化实例参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>实例状态：creating、created、initializing、running、modifying、isolating、isolated、destroying、destroyed</p>
 * @method void setStatus(string $Status) 设置<p>实例状态：creating、created、initializing、running、modifying、isolating、isolated、destroying、destroyed</p>
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method integer getStorageNodeNum() 获取<p>存储节点数量</p>
 * @method void setStorageNodeNum(integer $StorageNodeNum) 设置<p>存储节点数量</p>
 * @method array getResourceTags() 获取<p>实例标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTags(array $ResourceTags) 设置<p>实例标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取<p>计算节点cpu核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>计算节点cpu核数</p>
 * @method string getVpcId() 获取<p>字符型vpcid</p>
 * @method void setVpcId(string $VpcId) 设置<p>字符型vpcid</p>
 * @method integer getMem() 获取<p>计算节点mem，单位GB</p>
 * @method void setMem(integer $Mem) 设置<p>计算节点mem，单位GB</p>
 * @method string getVip() 获取<p>子网IP</p>
 * @method void setVip(string $Vip) 设置<p>子网IP</p>
 * @method string getSubnetId() 获取<p>字符型subnetid</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>字符型subnetid</p>
 * @method integer getVport() 获取<p>子网端口</p>
 * @method void setVport(integer $Vport) 设置<p>子网端口</p>
 * @method integer getDisk() 获取<p>存储节点磁盘容量，单位GB</p>
 * @method void setDisk(integer $Disk) 设置<p>存储节点磁盘容量，单位GB</p>
 * @method string getCreateTime() 获取<p>实例创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>实例创建时间</p>
 * @method string getRegion() 获取<p>实例所属地域</p>
 * @method void setRegion(string $Region) 设置<p>实例所属地域</p>
 * @method string getStatusDesc() 获取<p>实例状态中文描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>实例状态中文描述</p>
 * @method integer getMCCpu() 获取<p>管控节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMCCpu(integer $MCCpu) 设置<p>管控节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMCMem() 获取<p>管控节点CPU大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMCMem(integer $MCMem) 设置<p>管控节点CPU大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getComputerNodeCpu() 获取<p>计算节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputerNodeCpu(integer $ComputerNodeCpu) 设置<p>计算节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getComputerNodeMem() 获取<p>计算节点内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputerNodeMem(integer $ComputerNodeMem) 设置<p>计算节点内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageNodeCpu() 获取<p>存储节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) 设置<p>存储节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageNodeMem() 获取<p>存储节点内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageNodeMem(integer $StorageNodeMem) 设置<p>存储节点内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMCNum() 获取<p>管控节点数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMCNum(integer $MCNum) 设置<p>管控节点数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRenewFlag() 获取<p>续费标志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>续费标志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayMode() 获取<p>付费模式，0按量付费；1包年包月</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费模式，0按量付费；1包年包月</p>
 * @method string getAccountTag() 获取<p>用户标签，inner：内部用户；external：外部用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountTag(string $AccountTag) 设置<p>用户标签，inner：内部用户；external：外部用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取<p>实例架构类型，separate:分离架构；hyper:对等架构</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置<p>实例架构类型，separate:分离架构；hyper:对等架构</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageType() 获取<p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置<p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestroyedAt() 获取<p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestroyedAt(string $DestroyedAt) 设置<p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireAt() 获取<p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireAt(string $ExpireAt) 设置<p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedAt() 获取<p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedAt(string $IsolatedAt) 设置<p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedFrom() 获取<p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedFrom(string $IsolatedFrom) 设置<p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplications() 获取<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplications(integer $Replications) 设置<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFullReplications() 获取<p>全能型副本数</p>
 * @method void setFullReplications(integer $FullReplications) 设置<p>全能型副本数</p>
 * @method integer getAppId() 获取<p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取<p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取<p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置<p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZones() 获取<p>AZ信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZones(array $Zones) 设置<p>AZ信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodes() 获取<p>实例节点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodes(array $Nodes) 设置<p>实例节点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBinlogStatus() 获取<p>binlog是否打开</p>
 * @method void setBinlogStatus(integer $BinlogStatus) 设置<p>binlog是否打开</p>
 * @method integer getCdcNodeCpu() 获取<p>cdc节点核数</p>
 * @method void setCdcNodeCpu(integer $CdcNodeCpu) 设置<p>cdc节点核数</p>
 * @method integer getCdcNodeMem() 获取<p>cdc节点内存大小</p>
 * @method void setCdcNodeMem(integer $CdcNodeMem) 设置<p>cdc节点内存大小</p>
 * @method integer getCdcNodeNum() 获取<p>cdc节点数</p>
 * @method void setCdcNodeNum(integer $CdcNodeNum) 设置<p>cdc节点数</p>
 * @method integer getAZMode() 获取<p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAZMode(integer $AZMode) 设置<p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStandbyFlag() 获取<p>灾备标志位，1: 无灾备关系；2: 灾备主实例；3: 灾备备实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandbyFlag(integer $StandbyFlag) 设置<p>灾备标志位，1: 无灾备关系；2: 灾备主实例；3: 灾备备实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStandbySecondaryNum() 获取<p>连接的备实例数量（仅当 StandbyFlag == 2 时有效）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandbySecondaryNum(integer $StandbySecondaryNum) 设置<p>连接的备实例数量（仅当 StandbyFlag == 2 时有效）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColumnarNodeCpu() 获取<p>列存节点 cpu 核数</p>
 * @method void setColumnarNodeCpu(integer $ColumnarNodeCpu) 设置<p>列存节点 cpu 核数</p>
 * @method integer getColumnarNodeMem() 获取<p>列存节点内存大小</p>
 * @method void setColumnarNodeMem(integer $ColumnarNodeMem) 设置<p>列存节点内存大小</p>
 * @method integer getColumnarNodeNum() 获取<p>列存节点数</p>
 * @method void setColumnarNodeNum(integer $ColumnarNodeNum) 设置<p>列存节点数</p>
 * @method integer getColumnarNodeDisk() 获取<p>列存节点磁盘容量，单位GB</p>
 * @method void setColumnarNodeDisk(integer $ColumnarNodeDisk) 设置<p>列存节点磁盘容量，单位GB</p>
 * @method string getColumnarNodeStorageType() 获取<p>列存节点磁盘类型</p>
 * @method void setColumnarNodeStorageType(string $ColumnarNodeStorageType) 设置<p>列存节点磁盘类型</p>
 * @method integer getInstanceCategory() 获取<p>独享标志位，1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）</p>
 * @method void setInstanceCategory(integer $InstanceCategory) 设置<p>独享标志位，1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）</p>
 * @method string getExclusiveClusterId() 获取<p>dbdc-xxxxx</p>
 * @method void setExclusiveClusterId(string $ExclusiveClusterId) 设置<p>dbdc-xxxxx</p>
 * @method string getSQLMode() 获取<p>兼容模式</p>
 * @method void setSQLMode(string $SQLMode) 设置<p>兼容模式</p>
 * @method string getInstanceMode() 获取<p>实例模式</p>
 * @method void setInstanceMode(string $InstanceMode) 设置<p>实例模式</p>
 * @method string getClusterId() 获取<p>实例发货平台</p>
 * @method void setClusterId(string $ClusterId) 设置<p>实例发货平台</p>
 * @method AutoScalingConfig getAutoScaleConfig() 获取<p>自动扩容配置</p>
 * @method void setAutoScaleConfig(AutoScalingConfig $AutoScaleConfig) 设置<p>自动扩容配置</p>
 * @method string getAnalysisMode() 获取<p>分析引擎模式</p><p>枚举值：</p><ul><li>libra： LibraDB分析引擎模式</li></ul>
 * @method void setAnalysisMode(string $AnalysisMode) 设置<p>分析引擎模式</p><p>枚举值：</p><ul><li>libra： LibraDB分析引擎模式</li></ul>
 * @method array getAnalysisRelationInfos() 获取<p>分析引擎关系信息</p>
 * @method void setAnalysisRelationInfos(array $AnalysisRelationInfos) 设置<p>分析引擎关系信息</p>
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var integer <p>计算节点数量</p>
     * @deprecated
     */
    public $ComputeNodeNum;

    /**
     * @var string <p>区域</p>
     */
    public $Zone;

    /**
     * @var string <p>创建实例版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateVersion;

    /**
     * @var array <p>初始化实例参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitParams;

    /**
     * @var string <p>实例状态：creating、created、initializing、running、modifying、isolating、isolated、destroying、destroyed</p>
     */
    public $Status;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>存储节点数量</p>
     */
    public $StorageNodeNum;

    /**
     * @var array <p>实例标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTags;

    /**
     * @var string <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var integer <p>计算节点cpu核数</p>
     * @deprecated
     */
    public $Cpu;

    /**
     * @var string <p>字符型vpcid</p>
     */
    public $VpcId;

    /**
     * @var integer <p>计算节点mem，单位GB</p>
     * @deprecated
     */
    public $Mem;

    /**
     * @var string <p>子网IP</p>
     */
    public $Vip;

    /**
     * @var string <p>字符型subnetid</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>子网端口</p>
     */
    public $Vport;

    /**
     * @var integer <p>存储节点磁盘容量，单位GB</p>
     */
    public $Disk;

    /**
     * @var string <p>实例创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>实例所属地域</p>
     */
    public $Region;

    /**
     * @var string <p>实例状态中文描述</p>
     */
    public $StatusDesc;

    /**
     * @var integer <p>管控节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $MCCpu;

    /**
     * @var integer <p>管控节点CPU大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $MCMem;

    /**
     * @var integer <p>计算节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ComputerNodeCpu;

    /**
     * @var integer <p>计算节点内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ComputerNodeMem;

    /**
     * @var integer <p>存储节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>存储节点内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageNodeMem;

    /**
     * @var integer <p>管控节点数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $MCNum;

    /**
     * @var integer <p>续费标志</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var string <p>付费模式，0按量付费；1包年包月</p>
     */
    public $PayMode;

    /**
     * @var string <p>用户标签，inner：内部用户；external：外部用户</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountTag;

    /**
     * @var string <p>实例架构类型，separate:分离架构；hyper:对等架构</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string <p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestroyedAt;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireAt;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedAt;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedFrom;

    /**
     * @var integer <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replications;

    /**
     * @var integer <p>全能型副本数</p>
     */
    public $FullReplications;

    /**
     * @var integer <p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string <p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var array <p>AZ信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zones;

    /**
     * @var array <p>实例节点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nodes;

    /**
     * @var integer <p>binlog是否打开</p>
     */
    public $BinlogStatus;

    /**
     * @var integer <p>cdc节点核数</p>
     * @deprecated
     */
    public $CdcNodeCpu;

    /**
     * @var integer <p>cdc节点内存大小</p>
     * @deprecated
     */
    public $CdcNodeMem;

    /**
     * @var integer <p>cdc节点数</p>
     * @deprecated
     */
    public $CdcNodeNum;

    /**
     * @var integer <p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AZMode;

    /**
     * @var integer <p>灾备标志位，1: 无灾备关系；2: 灾备主实例；3: 灾备备实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandbyFlag;

    /**
     * @var integer <p>连接的备实例数量（仅当 StandbyFlag == 2 时有效）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandbySecondaryNum;

    /**
     * @var integer <p>列存节点 cpu 核数</p>
     */
    public $ColumnarNodeCpu;

    /**
     * @var integer <p>列存节点内存大小</p>
     */
    public $ColumnarNodeMem;

    /**
     * @var integer <p>列存节点数</p>
     */
    public $ColumnarNodeNum;

    /**
     * @var integer <p>列存节点磁盘容量，单位GB</p>
     */
    public $ColumnarNodeDisk;

    /**
     * @var string <p>列存节点磁盘类型</p>
     */
    public $ColumnarNodeStorageType;

    /**
     * @var integer <p>独享标志位，1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）</p>
     */
    public $InstanceCategory;

    /**
     * @var string <p>dbdc-xxxxx</p>
     */
    public $ExclusiveClusterId;

    /**
     * @var string <p>兼容模式</p>
     */
    public $SQLMode;

    /**
     * @var string <p>实例模式</p>
     */
    public $InstanceMode;

    /**
     * @var string <p>实例发货平台</p>
     * @deprecated
     */
    public $ClusterId;

    /**
     * @var AutoScalingConfig <p>自动扩容配置</p>
     */
    public $AutoScaleConfig;

    /**
     * @var string <p>分析引擎模式</p><p>枚举值：</p><ul><li>libra： LibraDB分析引擎模式</li></ul>
     */
    public $AnalysisMode;

    /**
     * @var array <p>分析引擎关系信息</p>
     */
    public $AnalysisRelationInfos;

    /**
     * @param integer $ComputeNodeNum <p>计算节点数量</p>
     * @param string $Zone <p>区域</p>
     * @param string $CreateVersion <p>创建实例版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InitParams <p>初始化实例参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>实例状态：creating、created、initializing、running、modifying、isolating、isolated、destroying、destroyed</p>
     * @param string $InstanceId <p>实例id</p>
     * @param integer $StorageNodeNum <p>存储节点数量</p>
     * @param array $ResourceTags <p>实例标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu <p>计算节点cpu核数</p>
     * @param string $VpcId <p>字符型vpcid</p>
     * @param integer $Mem <p>计算节点mem，单位GB</p>
     * @param string $Vip <p>子网IP</p>
     * @param string $SubnetId <p>字符型subnetid</p>
     * @param integer $Vport <p>子网端口</p>
     * @param integer $Disk <p>存储节点磁盘容量，单位GB</p>
     * @param string $CreateTime <p>实例创建时间</p>
     * @param string $Region <p>实例所属地域</p>
     * @param string $StatusDesc <p>实例状态中文描述</p>
     * @param integer $MCCpu <p>管控节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MCMem <p>管控节点CPU大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ComputerNodeCpu <p>计算节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ComputerNodeMem <p>计算节点内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageNodeCpu <p>存储节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageNodeMem <p>存储节点内存大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MCNum <p>管控节点数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenewFlag <p>续费标志</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayMode <p>付费模式，0按量付费；1包年包月</p>
     * @param string $AccountTag <p>用户标签，inner：内部用户；external：外部用户</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType <p>实例架构类型，separate:分离架构；hyper:对等架构</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageType <p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DestroyedAt <p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireAt <p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedAt <p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedFrom <p>&quot;0000-00-00 00:00:00&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Replications <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FullReplications <p>全能型副本数</p>
     * @param integer $AppId <p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin <p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin <p>账号信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Zones <p>AZ信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Nodes <p>实例节点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BinlogStatus <p>binlog是否打开</p>
     * @param integer $CdcNodeCpu <p>cdc节点核数</p>
     * @param integer $CdcNodeMem <p>cdc节点内存大小</p>
     * @param integer $CdcNodeNum <p>cdc节点数</p>
     * @param integer $AZMode <p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StandbyFlag <p>灾备标志位，1: 无灾备关系；2: 灾备主实例；3: 灾备备实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StandbySecondaryNum <p>连接的备实例数量（仅当 StandbyFlag == 2 时有效）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ColumnarNodeCpu <p>列存节点 cpu 核数</p>
     * @param integer $ColumnarNodeMem <p>列存节点内存大小</p>
     * @param integer $ColumnarNodeNum <p>列存节点数</p>
     * @param integer $ColumnarNodeDisk <p>列存节点磁盘容量，单位GB</p>
     * @param string $ColumnarNodeStorageType <p>列存节点磁盘类型</p>
     * @param integer $InstanceCategory <p>独享标志位，1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）</p>
     * @param string $ExclusiveClusterId <p>dbdc-xxxxx</p>
     * @param string $SQLMode <p>兼容模式</p>
     * @param string $InstanceMode <p>实例模式</p>
     * @param string $ClusterId <p>实例发货平台</p>
     * @param AutoScalingConfig $AutoScaleConfig <p>自动扩容配置</p>
     * @param string $AnalysisMode <p>分析引擎模式</p><p>枚举值：</p><ul><li>libra： LibraDB分析引擎模式</li></ul>
     * @param array $AnalysisRelationInfos <p>分析引擎关系信息</p>
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
        if (array_key_exists("ComputeNodeNum",$param) and $param["ComputeNodeNum"] !== null) {
            $this->ComputeNodeNum = $param["ComputeNodeNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CreateVersion",$param) and $param["CreateVersion"] !== null) {
            $this->CreateVersion = $param["CreateVersion"];
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new InstanceParam();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StorageNodeNum",$param) and $param["StorageNodeNum"] !== null) {
            $this->StorageNodeNum = $param["StorageNodeNum"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("MCCpu",$param) and $param["MCCpu"] !== null) {
            $this->MCCpu = $param["MCCpu"];
        }

        if (array_key_exists("MCMem",$param) and $param["MCMem"] !== null) {
            $this->MCMem = $param["MCMem"];
        }

        if (array_key_exists("ComputerNodeCpu",$param) and $param["ComputerNodeCpu"] !== null) {
            $this->ComputerNodeCpu = $param["ComputerNodeCpu"];
        }

        if (array_key_exists("ComputerNodeMem",$param) and $param["ComputerNodeMem"] !== null) {
            $this->ComputerNodeMem = $param["ComputerNodeMem"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("MCNum",$param) and $param["MCNum"] !== null) {
            $this->MCNum = $param["MCNum"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("AccountTag",$param) and $param["AccountTag"] !== null) {
            $this->AccountTag = $param["AccountTag"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("DestroyedAt",$param) and $param["DestroyedAt"] !== null) {
            $this->DestroyedAt = $param["DestroyedAt"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("IsolatedAt",$param) and $param["IsolatedAt"] !== null) {
            $this->IsolatedAt = $param["IsolatedAt"];
        }

        if (array_key_exists("IsolatedFrom",$param) and $param["IsolatedFrom"] !== null) {
            $this->IsolatedFrom = $param["IsolatedFrom"];
        }

        if (array_key_exists("Replications",$param) and $param["Replications"] !== null) {
            $this->Replications = $param["Replications"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new InstanceNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("BinlogStatus",$param) and $param["BinlogStatus"] !== null) {
            $this->BinlogStatus = $param["BinlogStatus"];
        }

        if (array_key_exists("CdcNodeCpu",$param) and $param["CdcNodeCpu"] !== null) {
            $this->CdcNodeCpu = $param["CdcNodeCpu"];
        }

        if (array_key_exists("CdcNodeMem",$param) and $param["CdcNodeMem"] !== null) {
            $this->CdcNodeMem = $param["CdcNodeMem"];
        }

        if (array_key_exists("CdcNodeNum",$param) and $param["CdcNodeNum"] !== null) {
            $this->CdcNodeNum = $param["CdcNodeNum"];
        }

        if (array_key_exists("AZMode",$param) and $param["AZMode"] !== null) {
            $this->AZMode = $param["AZMode"];
        }

        if (array_key_exists("StandbyFlag",$param) and $param["StandbyFlag"] !== null) {
            $this->StandbyFlag = $param["StandbyFlag"];
        }

        if (array_key_exists("StandbySecondaryNum",$param) and $param["StandbySecondaryNum"] !== null) {
            $this->StandbySecondaryNum = $param["StandbySecondaryNum"];
        }

        if (array_key_exists("ColumnarNodeCpu",$param) and $param["ColumnarNodeCpu"] !== null) {
            $this->ColumnarNodeCpu = $param["ColumnarNodeCpu"];
        }

        if (array_key_exists("ColumnarNodeMem",$param) and $param["ColumnarNodeMem"] !== null) {
            $this->ColumnarNodeMem = $param["ColumnarNodeMem"];
        }

        if (array_key_exists("ColumnarNodeNum",$param) and $param["ColumnarNodeNum"] !== null) {
            $this->ColumnarNodeNum = $param["ColumnarNodeNum"];
        }

        if (array_key_exists("ColumnarNodeDisk",$param) and $param["ColumnarNodeDisk"] !== null) {
            $this->ColumnarNodeDisk = $param["ColumnarNodeDisk"];
        }

        if (array_key_exists("ColumnarNodeStorageType",$param) and $param["ColumnarNodeStorageType"] !== null) {
            $this->ColumnarNodeStorageType = $param["ColumnarNodeStorageType"];
        }

        if (array_key_exists("InstanceCategory",$param) and $param["InstanceCategory"] !== null) {
            $this->InstanceCategory = $param["InstanceCategory"];
        }

        if (array_key_exists("ExclusiveClusterId",$param) and $param["ExclusiveClusterId"] !== null) {
            $this->ExclusiveClusterId = $param["ExclusiveClusterId"];
        }

        if (array_key_exists("SQLMode",$param) and $param["SQLMode"] !== null) {
            $this->SQLMode = $param["SQLMode"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AutoScaleConfig",$param) and $param["AutoScaleConfig"] !== null) {
            $this->AutoScaleConfig = new AutoScalingConfig();
            $this->AutoScaleConfig->deserialize($param["AutoScaleConfig"]);
        }

        if (array_key_exists("AnalysisMode",$param) and $param["AnalysisMode"] !== null) {
            $this->AnalysisMode = $param["AnalysisMode"];
        }

        if (array_key_exists("AnalysisRelationInfos",$param) and $param["AnalysisRelationInfos"] !== null) {
            $this->AnalysisRelationInfos = [];
            foreach ($param["AnalysisRelationInfos"] as $key => $value){
                $obj = new AnalysisRelationInfo();
                $obj->deserialize($value);
                array_push($this->AnalysisRelationInfos, $obj);
            }
        }
    }
}
