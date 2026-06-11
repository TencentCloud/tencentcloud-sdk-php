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
 * DescribeDBInstanceDetail返回参数结构体
 *
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getZone() 获取<p>区域</p>
 * @method void setZone(string $Zone) 设置<p>区域</p>
 * @method string getVpcId() 获取<p>字符型vpcid</p>
 * @method void setVpcId(string $VpcId) 设置<p>字符型vpcid</p>
 * @method string getSubnetId() 获取<p>字符型subnetid</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>字符型subnetid</p>
 * @method string getCreateVersion() 获取<p>创建实例版本</p>
 * @method void setCreateVersion(string $CreateVersion) 设置<p>创建实例版本</p>
 * @method string getVip() 获取<p>子网IP</p>
 * @method void setVip(string $Vip) 设置<p>子网IP</p>
 * @method integer getVport() 获取<p>子网端口</p>
 * @method void setVport(integer $Vport) 设置<p>子网端口</p>
 * @method string getStatus() 获取<p>实例状态</p>
 * @method void setStatus(string $Status) 设置<p>实例状态</p>
 * @method integer getDisk() 获取<p>存储节点磁盘容量，单位GB</p>
 * @method void setDisk(integer $Disk) 设置<p>存储节点磁盘容量，单位GB</p>
 * @method integer getStorageNodeNum() 获取<p>存储节点数量</p>
 * @method void setStorageNodeNum(integer $StorageNodeNum) 设置<p>存储节点数量</p>
 * @method array getInitParams() 获取<p>初始化实例参数</p>
 * @method void setInitParams(array $InitParams) 设置<p>初始化实例参数</p>
 * @method array getResourceTags() 获取<p>实例标签信息</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>实例标签信息</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method integer getReplications() 获取<p>存储节点副本数量</p>
 * @method void setReplications(integer $Replications) 设置<p>存储节点副本数量</p>
 * @method integer getFullReplications() 获取<p>全能型副本数</p>
 * @method void setFullReplications(integer $FullReplications) 设置<p>全能型副本数</p>
 * @method string getCharSet() 获取<p>字符集</p>
 * @method void setCharSet(string $CharSet) 设置<p>字符集</p>
 * @method array getNode() 获取<p>节点信息</p>
 * @method void setNode(array $Node) 设置<p>节点信息</p>
 * @method string getRegion() 获取<p>实例所属地域</p>
 * @method void setRegion(string $Region) 设置<p>实例所属地域</p>
 * @method string getSpecCode() 获取<p>实例规格</p>
 * @method void setSpecCode(string $SpecCode) 设置<p>实例规格</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getStatusDesc() 获取<p>实例状态中文描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>实例状态中文描述</p>
 * @method integer getStorageNodeCpu() 获取<p>存储节点CPU核数</p>
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) 设置<p>存储节点CPU核数</p>
 * @method integer getStorageNodeMem() 获取<p>存储节点内存大小</p>
 * @method void setStorageNodeMem(integer $StorageNodeMem) 设置<p>存储节点内存大小</p>
 * @method integer getRenewFlag() 获取<p>续费标志</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>续费标志</p>
 * @method string getPayMode() 获取<p>付费模式，0后付费，1预付费</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费模式，0后付费，1预付费</p>
 * @method string getExpireAt() 获取<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireAt(string $ExpireAt) 设置<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedAt() 获取<p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedAt(string $IsolatedAt) 设置<p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取<p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置<p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageType() 获取<p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置<p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZones() 获取<p>实例节点可用区列表。Zones[0]表示主可用区</p>
 * @method void setZones(array $Zones) 设置<p>实例节点可用区列表。Zones[0]表示主可用区</p>
 * @method integer getDiskUsage() 获取<p>最大节点磁盘使用量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskUsage(integer $DiskUsage) 设置<p>最大节点磁盘使用量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBinlogStatus() 获取<p>binlog是否开启</p>
 * @method void setBinlogStatus(integer $BinlogStatus) 设置<p>binlog是否开启</p>
 * @method integer getAZMode() 获取<p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
 * @method void setAZMode(integer $AZMode) 设置<p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
 * @method integer getStandbyFlag() 获取<p>灾备标志位，1: 无灾备关系；2: 灾备主实例；3: 灾备备实例</p>
 * @method void setStandbyFlag(integer $StandbyFlag) 设置<p>灾备标志位，1: 无灾备关系；2: 灾备主实例；3: 灾备备实例</p>
 * @method string getBinlogType() 获取<p>cdc节点类型</p>
 * @method void setBinlogType(string $BinlogType) 设置<p>cdc节点类型</p>
 * @method integer getTimingModifyInstanceFlag() 获取<p>1表示支持，0表示不支持</p>
 * @method void setTimingModifyInstanceFlag(integer $TimingModifyInstanceFlag) 设置<p>1表示支持，0表示不支持</p>
 * @method integer getColumnarNodeCpu() 获取<p>列存节点cpu核数</p>
 * @method void setColumnarNodeCpu(integer $ColumnarNodeCpu) 设置<p>列存节点cpu核数</p>
 * @method integer getColumnarNodeMem() 获取<p>列存节点mem内存大小</p>
 * @method void setColumnarNodeMem(integer $ColumnarNodeMem) 设置<p>列存节点mem内存大小</p>
 * @method integer getColumnarNodeNum() 获取<p>列存节点个数</p>
 * @method void setColumnarNodeNum(integer $ColumnarNodeNum) 设置<p>列存节点个数</p>
 * @method integer getColumnarNodeDisk() 获取<p>列存节点磁盘大小</p>
 * @method void setColumnarNodeDisk(integer $ColumnarNodeDisk) 设置<p>列存节点磁盘大小</p>
 * @method string getColumnarNodeStorageType() 获取<p>列存节点磁盘类型</p>
 * @method void setColumnarNodeStorageType(string $ColumnarNodeStorageType) 设置<p>列存节点磁盘类型</p>
 * @method string getColumnarNodeSpecCode() 获取<p>列存节点规格</p>
 * @method void setColumnarNodeSpecCode(string $ColumnarNodeSpecCode) 设置<p>列存节点规格</p>
 * @method string getColumnarVip() 获取<p>列存 vip</p>
 * @method void setColumnarVip(string $ColumnarVip) 设置<p>列存 vip</p>
 * @method integer getColumnarVport() 获取<p>列存 vport</p>
 * @method void setColumnarVport(integer $ColumnarVport) 设置<p>列存 vport</p>
 * @method boolean getIsSupportColumnar() 获取<p>实例是否支持列存</p>
 * @method void setIsSupportColumnar(boolean $IsSupportColumnar) 设置<p>实例是否支持列存</p>
 * @method integer getInstanceCategory() 获取<p>实例类型</p>
 * @method void setInstanceCategory(integer $InstanceCategory) 设置<p>实例类型</p>
 * @method string getSQLMode() 获取<p>兼容模式</p>
 * @method void setSQLMode(string $SQLMode) 设置<p>兼容模式</p>
 * @method boolean getIsSwitchFullReplicationsEnable() 获取<p>是否支持修改全能型副本数量</p>
 * @method void setIsSwitchFullReplicationsEnable(boolean $IsSwitchFullReplicationsEnable) 设置<p>是否支持修改全能型副本数量</p>
 * @method string getInstanceMode() 获取<p>实例类型</p>
 * @method void setInstanceMode(string $InstanceMode) 设置<p>实例类型</p>
 * @method string getDumperVip() 获取<p>dumper vip</p>
 * @method void setDumperVip(string $DumperVip) 设置<p>dumper vip</p>
 * @method integer getDumperVport() 获取<p>dumper vport</p>
 * @method void setDumperVport(integer $DumperVport) 设置<p>dumper vport</p>
 * @method AutoScalingConfig getAutoScaleConfig() 获取<p>svls实例的ccu变配范围</p>
 * @method void setAutoScaleConfig(AutoScalingConfig $AutoScaleConfig) 设置<p>svls实例的ccu变配范围</p>
 * @method string getTemplateId() 获取<p>参数模板id</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>参数模板id</p>
 * @method string getTemplateName() 获取<p>参数模板名称</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>参数模板名称</p>
 * @method string getAnalysisMode() 获取<p>实例分析引擎模式</p><p>枚举值：</p><ul><li>libra： LibraDB分析引擎实例</li></ul>
 * @method void setAnalysisMode(string $AnalysisMode) 设置<p>实例分析引擎模式</p><p>枚举值：</p><ul><li>libra： LibraDB分析引擎实例</li></ul>
 * @method array getAnalysisRelationInfos() 获取<p>分析引擎实例关系</p>
 * @method void setAnalysisRelationInfos(array $AnalysisRelationInfos) 设置<p>分析引擎实例关系</p>
 * @method AnalysisInstanceInfo getAnalysisInstanceInfo() 获取<p>分析引擎实例信息</p><p>Cpu、Memory、Disk复用顶层字段</p>
 * @method void setAnalysisInstanceInfo(AnalysisInstanceInfo $AnalysisInstanceInfo) 设置<p>分析引擎实例信息</p><p>Cpu、Memory、Disk复用顶层字段</p>
 * @method MaintenanceWindowInfo getMaintenanceWindow() 获取<p>维护窗口配置</p>
 * @method void setMaintenanceWindow(MaintenanceWindowInfo $MaintenanceWindow) 设置<p>维护窗口配置</p>
 * @method integer getEncryptionEnable() 获取<p>是否开启透明加密，0：未开启；1：已开启</p>
 * @method void setEncryptionEnable(integer $EncryptionEnable) 设置<p>是否开启透明加密，0：未开启；1：已开启</p>
 * @method string getEncryptionKmsRegion() 获取<p>真实使用的kms地域，用于后续调用kms服务</p>
 * @method void setEncryptionKmsRegion(string $EncryptionKmsRegion) 设置<p>真实使用的kms地域，用于后续调用kms服务</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>区域</p>
     */
    public $Zone;

    /**
     * @var string <p>字符型vpcid</p>
     */
    public $VpcId;

    /**
     * @var string <p>字符型subnetid</p>
     */
    public $SubnetId;

    /**
     * @var string <p>创建实例版本</p>
     */
    public $CreateVersion;

    /**
     * @var string <p>子网IP</p>
     */
    public $Vip;

    /**
     * @var integer <p>子网端口</p>
     */
    public $Vport;

    /**
     * @var string <p>实例状态</p>
     */
    public $Status;

    /**
     * @var integer <p>存储节点磁盘容量，单位GB</p>
     */
    public $Disk;

    /**
     * @var integer <p>存储节点数量</p>
     */
    public $StorageNodeNum;

    /**
     * @var array <p>初始化实例参数</p>
     */
    public $InitParams;

    /**
     * @var array <p>实例标签信息</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>存储节点副本数量</p>
     */
    public $Replications;

    /**
     * @var integer <p>全能型副本数</p>
     */
    public $FullReplications;

    /**
     * @var string <p>字符集</p>
     */
    public $CharSet;

    /**
     * @var array <p>节点信息</p>
     */
    public $Node;

    /**
     * @var string <p>实例所属地域</p>
     */
    public $Region;

    /**
     * @var string <p>实例规格</p>
     */
    public $SpecCode;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例状态中文描述</p>
     */
    public $StatusDesc;

    /**
     * @var integer <p>存储节点CPU核数</p>
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>存储节点内存大小</p>
     */
    public $StorageNodeMem;

    /**
     * @var integer <p>续费标志</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>付费模式，0后付费，1预付费</p>
     */
    public $PayMode;

    /**
     * @var string <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireAt;

    /**
     * @var string <p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedAt;

    /**
     * @var string <p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string <p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var array <p>实例节点可用区列表。Zones[0]表示主可用区</p>
     */
    public $Zones;

    /**
     * @var integer <p>最大节点磁盘使用量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskUsage;

    /**
     * @var integer <p>binlog是否开启</p>
     */
    public $BinlogStatus;

    /**
     * @var integer <p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
     */
    public $AZMode;

    /**
     * @var integer <p>灾备标志位，1: 无灾备关系；2: 灾备主实例；3: 灾备备实例</p>
     */
    public $StandbyFlag;

    /**
     * @var string <p>cdc节点类型</p>
     */
    public $BinlogType;

    /**
     * @var integer <p>1表示支持，0表示不支持</p>
     */
    public $TimingModifyInstanceFlag;

    /**
     * @var integer <p>列存节点cpu核数</p>
     */
    public $ColumnarNodeCpu;

    /**
     * @var integer <p>列存节点mem内存大小</p>
     */
    public $ColumnarNodeMem;

    /**
     * @var integer <p>列存节点个数</p>
     */
    public $ColumnarNodeNum;

    /**
     * @var integer <p>列存节点磁盘大小</p>
     */
    public $ColumnarNodeDisk;

    /**
     * @var string <p>列存节点磁盘类型</p>
     */
    public $ColumnarNodeStorageType;

    /**
     * @var string <p>列存节点规格</p>
     */
    public $ColumnarNodeSpecCode;

    /**
     * @var string <p>列存 vip</p>
     */
    public $ColumnarVip;

    /**
     * @var integer <p>列存 vport</p>
     */
    public $ColumnarVport;

    /**
     * @var boolean <p>实例是否支持列存</p>
     */
    public $IsSupportColumnar;

    /**
     * @var integer <p>实例类型</p>
     */
    public $InstanceCategory;

    /**
     * @var string <p>兼容模式</p>
     */
    public $SQLMode;

    /**
     * @var boolean <p>是否支持修改全能型副本数量</p>
     */
    public $IsSwitchFullReplicationsEnable;

    /**
     * @var string <p>实例类型</p>
     */
    public $InstanceMode;

    /**
     * @var string <p>dumper vip</p>
     */
    public $DumperVip;

    /**
     * @var integer <p>dumper vport</p>
     */
    public $DumperVport;

    /**
     * @var AutoScalingConfig <p>svls实例的ccu变配范围</p>
     */
    public $AutoScaleConfig;

    /**
     * @var string <p>参数模板id</p>
     */
    public $TemplateId;

    /**
     * @var string <p>参数模板名称</p>
     */
    public $TemplateName;

    /**
     * @var string <p>实例分析引擎模式</p><p>枚举值：</p><ul><li>libra： LibraDB分析引擎实例</li></ul>
     */
    public $AnalysisMode;

    /**
     * @var array <p>分析引擎实例关系</p>
     */
    public $AnalysisRelationInfos;

    /**
     * @var AnalysisInstanceInfo <p>分析引擎实例信息</p><p>Cpu、Memory、Disk复用顶层字段</p>
     */
    public $AnalysisInstanceInfo;

    /**
     * @var MaintenanceWindowInfo <p>维护窗口配置</p>
     */
    public $MaintenanceWindow;

    /**
     * @var integer <p>是否开启透明加密，0：未开启；1：已开启</p>
     */
    public $EncryptionEnable;

    /**
     * @var string <p>真实使用的kms地域，用于后续调用kms服务</p>
     */
    public $EncryptionKmsRegion;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceName <p>实例名称</p>
     * @param string $Zone <p>区域</p>
     * @param string $VpcId <p>字符型vpcid</p>
     * @param string $SubnetId <p>字符型subnetid</p>
     * @param string $CreateVersion <p>创建实例版本</p>
     * @param string $Vip <p>子网IP</p>
     * @param integer $Vport <p>子网端口</p>
     * @param string $Status <p>实例状态</p>
     * @param integer $Disk <p>存储节点磁盘容量，单位GB</p>
     * @param integer $StorageNodeNum <p>存储节点数量</p>
     * @param array $InitParams <p>初始化实例参数</p>
     * @param array $ResourceTags <p>实例标签信息</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param integer $Replications <p>存储节点副本数量</p>
     * @param integer $FullReplications <p>全能型副本数</p>
     * @param string $CharSet <p>字符集</p>
     * @param array $Node <p>节点信息</p>
     * @param string $Region <p>实例所属地域</p>
     * @param string $SpecCode <p>实例规格</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $StatusDesc <p>实例状态中文描述</p>
     * @param integer $StorageNodeCpu <p>存储节点CPU核数</p>
     * @param integer $StorageNodeMem <p>存储节点内存大小</p>
     * @param integer $RenewFlag <p>续费标志</p>
     * @param string $PayMode <p>付费模式，0后付费，1预付费</p>
     * @param string $ExpireAt <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedAt <p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType <p>实例架构类型，separate:分离架构；hybrid:对等架构</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageType <p>磁盘类型，CLOUD_HSSD增强型SSD,CLOUD_TCS本地SSD盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Zones <p>实例节点可用区列表。Zones[0]表示主可用区</p>
     * @param integer $DiskUsage <p>最大节点磁盘使用量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BinlogStatus <p>binlog是否开启</p>
     * @param integer $AZMode <p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
     * @param integer $StandbyFlag <p>灾备标志位，1: 无灾备关系；2: 灾备主实例；3: 灾备备实例</p>
     * @param string $BinlogType <p>cdc节点类型</p>
     * @param integer $TimingModifyInstanceFlag <p>1表示支持，0表示不支持</p>
     * @param integer $ColumnarNodeCpu <p>列存节点cpu核数</p>
     * @param integer $ColumnarNodeMem <p>列存节点mem内存大小</p>
     * @param integer $ColumnarNodeNum <p>列存节点个数</p>
     * @param integer $ColumnarNodeDisk <p>列存节点磁盘大小</p>
     * @param string $ColumnarNodeStorageType <p>列存节点磁盘类型</p>
     * @param string $ColumnarNodeSpecCode <p>列存节点规格</p>
     * @param string $ColumnarVip <p>列存 vip</p>
     * @param integer $ColumnarVport <p>列存 vport</p>
     * @param boolean $IsSupportColumnar <p>实例是否支持列存</p>
     * @param integer $InstanceCategory <p>实例类型</p>
     * @param string $SQLMode <p>兼容模式</p>
     * @param boolean $IsSwitchFullReplicationsEnable <p>是否支持修改全能型副本数量</p>
     * @param string $InstanceMode <p>实例类型</p>
     * @param string $DumperVip <p>dumper vip</p>
     * @param integer $DumperVport <p>dumper vport</p>
     * @param AutoScalingConfig $AutoScaleConfig <p>svls实例的ccu变配范围</p>
     * @param string $TemplateId <p>参数模板id</p>
     * @param string $TemplateName <p>参数模板名称</p>
     * @param string $AnalysisMode <p>实例分析引擎模式</p><p>枚举值：</p><ul><li>libra： LibraDB分析引擎实例</li></ul>
     * @param array $AnalysisRelationInfos <p>分析引擎实例关系</p>
     * @param AnalysisInstanceInfo $AnalysisInstanceInfo <p>分析引擎实例信息</p><p>Cpu、Memory、Disk复用顶层字段</p>
     * @param MaintenanceWindowInfo $MaintenanceWindow <p>维护窗口配置</p>
     * @param integer $EncryptionEnable <p>是否开启透明加密，0：未开启；1：已开启</p>
     * @param string $EncryptionKmsRegion <p>真实使用的kms地域，用于后续调用kms服务</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("CreateVersion",$param) and $param["CreateVersion"] !== null) {
            $this->CreateVersion = $param["CreateVersion"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("StorageNodeNum",$param) and $param["StorageNodeNum"] !== null) {
            $this->StorageNodeNum = $param["StorageNodeNum"];
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new InstanceParam();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Replications",$param) and $param["Replications"] !== null) {
            $this->Replications = $param["Replications"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }

        if (array_key_exists("CharSet",$param) and $param["CharSet"] !== null) {
            $this->CharSet = $param["CharSet"];
        }

        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = [];
            foreach ($param["Node"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->Node, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("IsolatedAt",$param) and $param["IsolatedAt"] !== null) {
            $this->IsolatedAt = $param["IsolatedAt"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("BinlogStatus",$param) and $param["BinlogStatus"] !== null) {
            $this->BinlogStatus = $param["BinlogStatus"];
        }

        if (array_key_exists("AZMode",$param) and $param["AZMode"] !== null) {
            $this->AZMode = $param["AZMode"];
        }

        if (array_key_exists("StandbyFlag",$param) and $param["StandbyFlag"] !== null) {
            $this->StandbyFlag = $param["StandbyFlag"];
        }

        if (array_key_exists("BinlogType",$param) and $param["BinlogType"] !== null) {
            $this->BinlogType = $param["BinlogType"];
        }

        if (array_key_exists("TimingModifyInstanceFlag",$param) and $param["TimingModifyInstanceFlag"] !== null) {
            $this->TimingModifyInstanceFlag = $param["TimingModifyInstanceFlag"];
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

        if (array_key_exists("ColumnarNodeSpecCode",$param) and $param["ColumnarNodeSpecCode"] !== null) {
            $this->ColumnarNodeSpecCode = $param["ColumnarNodeSpecCode"];
        }

        if (array_key_exists("ColumnarVip",$param) and $param["ColumnarVip"] !== null) {
            $this->ColumnarVip = $param["ColumnarVip"];
        }

        if (array_key_exists("ColumnarVport",$param) and $param["ColumnarVport"] !== null) {
            $this->ColumnarVport = $param["ColumnarVport"];
        }

        if (array_key_exists("IsSupportColumnar",$param) and $param["IsSupportColumnar"] !== null) {
            $this->IsSupportColumnar = $param["IsSupportColumnar"];
        }

        if (array_key_exists("InstanceCategory",$param) and $param["InstanceCategory"] !== null) {
            $this->InstanceCategory = $param["InstanceCategory"];
        }

        if (array_key_exists("SQLMode",$param) and $param["SQLMode"] !== null) {
            $this->SQLMode = $param["SQLMode"];
        }

        if (array_key_exists("IsSwitchFullReplicationsEnable",$param) and $param["IsSwitchFullReplicationsEnable"] !== null) {
            $this->IsSwitchFullReplicationsEnable = $param["IsSwitchFullReplicationsEnable"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("DumperVip",$param) and $param["DumperVip"] !== null) {
            $this->DumperVip = $param["DumperVip"];
        }

        if (array_key_exists("DumperVport",$param) and $param["DumperVport"] !== null) {
            $this->DumperVport = $param["DumperVport"];
        }

        if (array_key_exists("AutoScaleConfig",$param) and $param["AutoScaleConfig"] !== null) {
            $this->AutoScaleConfig = new AutoScalingConfig();
            $this->AutoScaleConfig->deserialize($param["AutoScaleConfig"]);
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
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

        if (array_key_exists("AnalysisInstanceInfo",$param) and $param["AnalysisInstanceInfo"] !== null) {
            $this->AnalysisInstanceInfo = new AnalysisInstanceInfo();
            $this->AnalysisInstanceInfo->deserialize($param["AnalysisInstanceInfo"]);
        }

        if (array_key_exists("MaintenanceWindow",$param) and $param["MaintenanceWindow"] !== null) {
            $this->MaintenanceWindow = new MaintenanceWindowInfo();
            $this->MaintenanceWindow->deserialize($param["MaintenanceWindow"]);
        }

        if (array_key_exists("EncryptionEnable",$param) and $param["EncryptionEnable"] !== null) {
            $this->EncryptionEnable = $param["EncryptionEnable"];
        }

        if (array_key_exists("EncryptionKmsRegion",$param) and $param["EncryptionKmsRegion"] !== null) {
            $this->EncryptionKmsRegion = $param["EncryptionKmsRegion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
