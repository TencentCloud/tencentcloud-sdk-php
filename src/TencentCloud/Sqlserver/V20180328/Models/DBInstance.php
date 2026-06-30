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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例详细信息
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getName() 获取<p>实例名称</p>
 * @method void setName(string $Name) 设置<p>实例名称</p>
 * @method integer getProjectId() 获取<p>实例所在项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>实例所在项目ID</p>
 * @method integer getRegionId() 获取<p>实例所在地域ID</p>
 * @method void setRegionId(integer $RegionId) 设置<p>实例所在地域ID</p>
 * @method integer getZoneId() 获取<p>实例所在可用区ID</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>实例所在可用区ID</p>
 * @method integer getVpcId() 获取<p>实例所在私有网络ID，基础网络时为 0</p>
 * @method void setVpcId(integer $VpcId) 设置<p>实例所在私有网络ID，基础网络时为 0</p>
 * @method integer getSubnetId() 获取<p>实例所在私有网络子网ID，基础网络时为 0</p>
 * @method void setSubnetId(integer $SubnetId) 设置<p>实例所在私有网络子网ID，基础网络时为 0</p>
 * @method integer getStatus() 获取<p>实例状态。取值范围： <li>1：申请中</li> <li>2：运行中</li> <li>3：受限运行中 (主备切换中)</li> <li>4：已隔离</li> <li>5：回收中</li> <li>6：已回收</li> <li>7：任务执行中 (实例做备份、回档等操作)</li> <li>8：已下线</li> <li>9：实例扩容中</li> <li>10：实例迁移中</li> <li>11：只读</li> <li>12：重启中</li>  <li>13：实例修改中且待切换</li> <li>14：订阅发布创建中</li> <li>15：订阅发布修改中</li> <li>16：实例修改中且切换中</li> <li>17：创建RO副本中</li></p>
 * @method void setStatus(integer $Status) 设置<p>实例状态。取值范围： <li>1：申请中</li> <li>2：运行中</li> <li>3：受限运行中 (主备切换中)</li> <li>4：已隔离</li> <li>5：回收中</li> <li>6：已回收</li> <li>7：任务执行中 (实例做备份、回档等操作)</li> <li>8：已下线</li> <li>9：实例扩容中</li> <li>10：实例迁移中</li> <li>11：只读</li> <li>12：重启中</li>  <li>13：实例修改中且待切换</li> <li>14：订阅发布创建中</li> <li>15：订阅发布修改中</li> <li>16：实例修改中且切换中</li> <li>17：创建RO副本中</li></p>
 * @method string getVip() 获取<p>实例访问IP</p>
 * @method void setVip(string $Vip) 设置<p>实例访问IP</p>
 * @method integer getVport() 获取<p>实例访问端口</p>
 * @method void setVport(integer $Vport) 设置<p>实例访问端口</p>
 * @method string getCreateTime() 获取<p>实例创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>实例创建时间</p>
 * @method string getUpdateTime() 获取<p>实例更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>实例更新时间</p>
 * @method string getStartTime() 获取<p>实例计费开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>实例计费开始时间</p>
 * @method string getEndTime() 获取<p>实例计费结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>实例计费结束时间</p>
 * @method string getIsolateTime() 获取<p>实例隔离时间</p>
 * @method void setIsolateTime(string $IsolateTime) 设置<p>实例隔离时间</p>
 * @method integer getMemory() 获取<p>实例内存大小，单位G</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存大小，单位G</p>
 * @method integer getUsedStorage() 获取<p>实例已经使用存储空间大小，单位G</p>
 * @method void setUsedStorage(integer $UsedStorage) 设置<p>实例已经使用存储空间大小，单位G</p>
 * @method integer getStorage() 获取<p>实例存储空间大小，单位G</p>
 * @method void setStorage(integer $Storage) 设置<p>实例存储空间大小，单位G</p>
 * @method string getVersionName() 获取<p>实例版本</p>
 * @method void setVersionName(string $VersionName) 设置<p>实例版本</p>
 * @method integer getRenewFlag() 获取<p>实例续费标记，0-正常续费，1-自动续费，2-到期不续费</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>实例续费标记，0-正常续费，1-自动续费，2-到期不续费</p>
 * @method integer getModel() 获取<p>实例高可用， 1-双机高可用，2-单机，3-跨可用区，4-集群跨可用区，5-集群，6-多节点集群，7-多节点集群跨可用区，9-自研机房</p>
 * @method void setModel(integer $Model) 设置<p>实例高可用， 1-双机高可用，2-单机，3-跨可用区，4-集群跨可用区，5-集群，6-多节点集群，7-多节点集群跨可用区，9-自研机房</p>
 * @method string getRegion() 获取<p>实例所在地域名称，如 ap-guangzhou</p>
 * @method void setRegion(string $Region) 设置<p>实例所在地域名称，如 ap-guangzhou</p>
 * @method string getZone() 获取<p>实例所在可用区名称，如 ap-guangzhou-1</p>
 * @method void setZone(string $Zone) 设置<p>实例所在可用区名称，如 ap-guangzhou-1</p>
 * @method string getBackupTime() 获取<p>备份时间点</p>
 * @method void setBackupTime(string $BackupTime) 设置<p>备份时间点</p>
 * @method integer getPayMode() 获取<p>实例付费模式， 0-按量计费，1-包年包月</p>
 * @method void setPayMode(integer $PayMode) 设置<p>实例付费模式， 0-按量计费，1-包年包月</p>
 * @method string getUid() 获取<p>实例唯一UID</p>
 * @method void setUid(string $Uid) 设置<p>实例唯一UID</p>
 * @method integer getCpu() 获取<p>实例cpu核心数</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例cpu核心数</p>
 * @method string getVersion() 获取<p>实例版本代号</p>
 * @method void setVersion(string $Version) 设置<p>实例版本代号</p>
 * @method string getType() 获取<p>实例类型代号：&quot;TS85&quot;-物理机，本地SSD硬盘；&quot;Z3&quot;-物理机早期版本，本地SSD硬盘；&quot;CLOUD_BASIC&quot;-虚拟机，普通云硬盘；&quot;CLOUD_PREMIUM&quot;-虚拟机，高性能云硬盘；&quot;CLOUD_SSD&quot;-虚拟机，云SSD硬盘；&quot;CLOUD_HSSD&quot;-虚拟机，增强型SSD云硬盘；&quot;CLOUD_TSSD&quot;-虚拟机，极速型SSD云硬盘；&quot;CLOUD_BSSD&quot;-虚拟机，通用型SSD云硬盘</p>
 * @method void setType(string $Type) 设置<p>实例类型代号：&quot;TS85&quot;-物理机，本地SSD硬盘；&quot;Z3&quot;-物理机早期版本，本地SSD硬盘；&quot;CLOUD_BASIC&quot;-虚拟机，普通云硬盘；&quot;CLOUD_PREMIUM&quot;-虚拟机，高性能云硬盘；&quot;CLOUD_SSD&quot;-虚拟机，云SSD硬盘；&quot;CLOUD_HSSD&quot;-虚拟机，增强型SSD云硬盘；&quot;CLOUD_TSSD&quot;-虚拟机，极速型SSD云硬盘；&quot;CLOUD_BSSD&quot;-虚拟机，通用型SSD云硬盘</p>
 * @method integer getPid() 获取<p>计费ID</p>
 * @method void setPid(integer $Pid) 设置<p>计费ID</p>
 * @method string getUniqVpcId() 获取<p>实例所属VPC的唯一字符串ID，格式如：vpc-xxx，基础网络时为空字符串</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>实例所属VPC的唯一字符串ID，格式如：vpc-xxx，基础网络时为空字符串</p>
 * @method string getUniqSubnetId() 获取<p>实例所属子网的唯一字符串ID，格式如： subnet-xxx，基础网络时为空字符串</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置<p>实例所属子网的唯一字符串ID，格式如： subnet-xxx，基础网络时为空字符串</p>
 * @method string getIsolateOperator() 获取<p>实例隔离操作</p>
 * @method void setIsolateOperator(string $IsolateOperator) 设置<p>实例隔离操作</p>
 * @method string getSubFlag() 获取<p>发布订阅标识，SUB-订阅实例，PUB-发布实例，空值-没有发布订阅的普通实例</p>
 * @method void setSubFlag(string $SubFlag) 设置<p>发布订阅标识，SUB-订阅实例，PUB-发布实例，空值-没有发布订阅的普通实例</p>
 * @method string getROFlag() 获取<p>只读标识，RO-只读实例，MASTER-有RO实例的主实例，空值-没有只读组的非RO实例</p>
 * @method void setROFlag(string $ROFlag) 设置<p>只读标识，RO-只读实例，MASTER-有RO实例的主实例，空值-没有只读组的非RO实例</p>
 * @method string getHAFlag() 获取<p>容灾类型，MIRROR-镜像，ALWAYSON-AlwaysOn, SINGLE-单例</p>
 * @method void setHAFlag(string $HAFlag) 设置<p>容灾类型，MIRROR-镜像，ALWAYSON-AlwaysOn, SINGLE-单例</p>
 * @method array getResourceTags() 获取<p>实例绑定的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTags(array $ResourceTags) 设置<p>实例绑定的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupModel() 获取<p>备份模式，master_pkg-主节点打包备份(默认) ；master_no_pkg-主节点不打包备份；slave_pkg-从节点打包备份(always on集群有效)；slave_no_pkg-从节点不打包备份(always on集群有效)；只读副本对该值无效。</p>
 * @method void setBackupModel(string $BackupModel) 设置<p>备份模式，master_pkg-主节点打包备份(默认) ；master_no_pkg-主节点不打包备份；slave_pkg-从节点打包备份(always on集群有效)；slave_no_pkg-从节点不打包备份(always on集群有效)；只读副本对该值无效。</p>
 * @method string getInstanceNote() 获取<p>实例备份信息</p>
 * @method void setInstanceNote(string $InstanceNote) 设置<p>实例备份信息</p>
 * @method array getBackupCycle() 获取<p>备份周期</p>
 * @method void setBackupCycle(array $BackupCycle) 设置<p>备份周期</p>
 * @method string getBackupCycleType() 获取<p>备份周期类型，[daily、weekly、monthly]</p>
 * @method void setBackupCycleType(string $BackupCycleType) 设置<p>备份周期类型，[daily、weekly、monthly]</p>
 * @method integer getBackupSaveDays() 获取<p>数据(日志)备份保留时间</p>
 * @method void setBackupSaveDays(integer $BackupSaveDays) 设置<p>数据(日志)备份保留时间</p>
 * @method string getInstanceType() 获取<p>实例类型 HA-高可用，RO-只读实例，SI-基础版，BI-商业智能服务，cvmHA-云盘高可用，cvmRO-云盘只读实例，MultiHA-多节点，cvmMultiHA-云盘多节点</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型 HA-高可用，RO-只读实例，SI-基础版，BI-商业智能服务，cvmHA-云盘高可用，cvmRO-云盘只读实例，MultiHA-多节点，cvmMultiHA-云盘多节点</p>
 * @method array getCrossRegions() 获取<p>跨地域备份目的地域，如果为空，则表示未开启跨地域备份</p>
 * @method void setCrossRegions(array $CrossRegions) 设置<p>跨地域备份目的地域，如果为空，则表示未开启跨地域备份</p>
 * @method string getCrossBackupEnabled() 获取<p>跨地域备份状态 enable-开启，disable-关闭</p>
 * @method void setCrossBackupEnabled(string $CrossBackupEnabled) 设置<p>跨地域备份状态 enable-开启，disable-关闭</p>
 * @method integer getCrossBackupSaveDays() 获取<p>跨地域备份保留天数，则默认7天</p>
 * @method void setCrossBackupSaveDays(integer $CrossBackupSaveDays) 设置<p>跨地域备份保留天数，则默认7天</p>
 * @method string getDnsPodDomain() 获取<p>外网地址域名</p>
 * @method void setDnsPodDomain(string $DnsPodDomain) 设置<p>外网地址域名</p>
 * @method integer getTgwWanVPort() 获取<p>外网端口号</p>
 * @method void setTgwWanVPort(integer $TgwWanVPort) 设置<p>外网端口号</p>
 * @method string getCollation() 获取<p>系统字符集排序规则，默认：Chinese_PRC_CI_AS</p>
 * @method void setCollation(string $Collation) 设置<p>系统字符集排序规则，默认：Chinese_PRC_CI_AS</p>
 * @method string getTimeZone() 获取<p>系统时区，默认：China Standard Time</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>系统时区，默认：China Standard Time</p>
 * @method boolean getIsDrZone() 获取<p>是否跨AZ</p>
 * @method void setIsDrZone(boolean $IsDrZone) 设置<p>是否跨AZ</p>
 * @method SlaveZones getSlaveZones() 获取<p>双节点实例备可用区信息</p>
 * @method void setSlaveZones(SlaveZones $SlaveZones) 设置<p>双节点实例备可用区信息</p>
 * @method string getArchitecture() 获取<p>架构标识，SINGLE-单节点 DOUBLE-双节点</p>
 * @method void setArchitecture(string $Architecture) 设置<p>架构标识，SINGLE-单节点 DOUBLE-双节点</p>
 * @method string getStyle() 获取<p>类型标识，EXCLUSIVE-独享型，SHARED-共享型</p>
 * @method void setStyle(string $Style) 设置<p>类型标识，EXCLUSIVE-独享型，SHARED-共享型</p>
 * @method array getMultiSlaveZones() 获取<p>多节点实例备可用区信息</p>
 * @method void setMultiSlaveZones(array $MultiSlaveZones) 设置<p>多节点实例备可用区信息</p>
 * @method integer getThroughputPerformance() 获取<p>额外IO吞吐量</p><p>单位：MB/s</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置<p>额外IO吞吐量</p><p>单位：MB/s</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DBInstance extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $Name;

    /**
     * @var integer <p>实例所在项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>实例所在地域ID</p>
     */
    public $RegionId;

    /**
     * @var integer <p>实例所在可用区ID</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>实例所在私有网络ID，基础网络时为 0</p>
     */
    public $VpcId;

    /**
     * @var integer <p>实例所在私有网络子网ID，基础网络时为 0</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>实例状态。取值范围： <li>1：申请中</li> <li>2：运行中</li> <li>3：受限运行中 (主备切换中)</li> <li>4：已隔离</li> <li>5：回收中</li> <li>6：已回收</li> <li>7：任务执行中 (实例做备份、回档等操作)</li> <li>8：已下线</li> <li>9：实例扩容中</li> <li>10：实例迁移中</li> <li>11：只读</li> <li>12：重启中</li>  <li>13：实例修改中且待切换</li> <li>14：订阅发布创建中</li> <li>15：订阅发布修改中</li> <li>16：实例修改中且切换中</li> <li>17：创建RO副本中</li></p>
     */
    public $Status;

    /**
     * @var string <p>实例访问IP</p>
     */
    public $Vip;

    /**
     * @var integer <p>实例访问端口</p>
     */
    public $Vport;

    /**
     * @var string <p>实例创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>实例更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>实例计费开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>实例计费结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>实例隔离时间</p>
     */
    public $IsolateTime;

    /**
     * @var integer <p>实例内存大小，单位G</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例已经使用存储空间大小，单位G</p>
     */
    public $UsedStorage;

    /**
     * @var integer <p>实例存储空间大小，单位G</p>
     */
    public $Storage;

    /**
     * @var string <p>实例版本</p>
     */
    public $VersionName;

    /**
     * @var integer <p>实例续费标记，0-正常续费，1-自动续费，2-到期不续费</p>
     */
    public $RenewFlag;

    /**
     * @var integer <p>实例高可用， 1-双机高可用，2-单机，3-跨可用区，4-集群跨可用区，5-集群，6-多节点集群，7-多节点集群跨可用区，9-自研机房</p>
     */
    public $Model;

    /**
     * @var string <p>实例所在地域名称，如 ap-guangzhou</p>
     */
    public $Region;

    /**
     * @var string <p>实例所在可用区名称，如 ap-guangzhou-1</p>
     */
    public $Zone;

    /**
     * @var string <p>备份时间点</p>
     */
    public $BackupTime;

    /**
     * @var integer <p>实例付费模式， 0-按量计费，1-包年包月</p>
     */
    public $PayMode;

    /**
     * @var string <p>实例唯一UID</p>
     */
    public $Uid;

    /**
     * @var integer <p>实例cpu核心数</p>
     */
    public $Cpu;

    /**
     * @var string <p>实例版本代号</p>
     */
    public $Version;

    /**
     * @var string <p>实例类型代号：&quot;TS85&quot;-物理机，本地SSD硬盘；&quot;Z3&quot;-物理机早期版本，本地SSD硬盘；&quot;CLOUD_BASIC&quot;-虚拟机，普通云硬盘；&quot;CLOUD_PREMIUM&quot;-虚拟机，高性能云硬盘；&quot;CLOUD_SSD&quot;-虚拟机，云SSD硬盘；&quot;CLOUD_HSSD&quot;-虚拟机，增强型SSD云硬盘；&quot;CLOUD_TSSD&quot;-虚拟机，极速型SSD云硬盘；&quot;CLOUD_BSSD&quot;-虚拟机，通用型SSD云硬盘</p>
     */
    public $Type;

    /**
     * @var integer <p>计费ID</p>
     */
    public $Pid;

    /**
     * @var string <p>实例所属VPC的唯一字符串ID，格式如：vpc-xxx，基础网络时为空字符串</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>实例所属子网的唯一字符串ID，格式如： subnet-xxx，基础网络时为空字符串</p>
     */
    public $UniqSubnetId;

    /**
     * @var string <p>实例隔离操作</p>
     */
    public $IsolateOperator;

    /**
     * @var string <p>发布订阅标识，SUB-订阅实例，PUB-发布实例，空值-没有发布订阅的普通实例</p>
     */
    public $SubFlag;

    /**
     * @var string <p>只读标识，RO-只读实例，MASTER-有RO实例的主实例，空值-没有只读组的非RO实例</p>
     */
    public $ROFlag;

    /**
     * @var string <p>容灾类型，MIRROR-镜像，ALWAYSON-AlwaysOn, SINGLE-单例</p>
     */
    public $HAFlag;

    /**
     * @var array <p>实例绑定的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTags;

    /**
     * @var string <p>备份模式，master_pkg-主节点打包备份(默认) ；master_no_pkg-主节点不打包备份；slave_pkg-从节点打包备份(always on集群有效)；slave_no_pkg-从节点不打包备份(always on集群有效)；只读副本对该值无效。</p>
     */
    public $BackupModel;

    /**
     * @var string <p>实例备份信息</p>
     */
    public $InstanceNote;

    /**
     * @var array <p>备份周期</p>
     */
    public $BackupCycle;

    /**
     * @var string <p>备份周期类型，[daily、weekly、monthly]</p>
     */
    public $BackupCycleType;

    /**
     * @var integer <p>数据(日志)备份保留时间</p>
     */
    public $BackupSaveDays;

    /**
     * @var string <p>实例类型 HA-高可用，RO-只读实例，SI-基础版，BI-商业智能服务，cvmHA-云盘高可用，cvmRO-云盘只读实例，MultiHA-多节点，cvmMultiHA-云盘多节点</p>
     */
    public $InstanceType;

    /**
     * @var array <p>跨地域备份目的地域，如果为空，则表示未开启跨地域备份</p>
     */
    public $CrossRegions;

    /**
     * @var string <p>跨地域备份状态 enable-开启，disable-关闭</p>
     */
    public $CrossBackupEnabled;

    /**
     * @var integer <p>跨地域备份保留天数，则默认7天</p>
     */
    public $CrossBackupSaveDays;

    /**
     * @var string <p>外网地址域名</p>
     */
    public $DnsPodDomain;

    /**
     * @var integer <p>外网端口号</p>
     */
    public $TgwWanVPort;

    /**
     * @var string <p>系统字符集排序规则，默认：Chinese_PRC_CI_AS</p>
     */
    public $Collation;

    /**
     * @var string <p>系统时区，默认：China Standard Time</p>
     */
    public $TimeZone;

    /**
     * @var boolean <p>是否跨AZ</p>
     */
    public $IsDrZone;

    /**
     * @var SlaveZones <p>双节点实例备可用区信息</p>
     */
    public $SlaveZones;

    /**
     * @var string <p>架构标识，SINGLE-单节点 DOUBLE-双节点</p>
     */
    public $Architecture;

    /**
     * @var string <p>类型标识，EXCLUSIVE-独享型，SHARED-共享型</p>
     */
    public $Style;

    /**
     * @var array <p>多节点实例备可用区信息</p>
     */
    public $MultiSlaveZones;

    /**
     * @var integer <p>额外IO吞吐量</p><p>单位：MB/s</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThroughputPerformance;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Name <p>实例名称</p>
     * @param integer $ProjectId <p>实例所在项目ID</p>
     * @param integer $RegionId <p>实例所在地域ID</p>
     * @param integer $ZoneId <p>实例所在可用区ID</p>
     * @param integer $VpcId <p>实例所在私有网络ID，基础网络时为 0</p>
     * @param integer $SubnetId <p>实例所在私有网络子网ID，基础网络时为 0</p>
     * @param integer $Status <p>实例状态。取值范围： <li>1：申请中</li> <li>2：运行中</li> <li>3：受限运行中 (主备切换中)</li> <li>4：已隔离</li> <li>5：回收中</li> <li>6：已回收</li> <li>7：任务执行中 (实例做备份、回档等操作)</li> <li>8：已下线</li> <li>9：实例扩容中</li> <li>10：实例迁移中</li> <li>11：只读</li> <li>12：重启中</li>  <li>13：实例修改中且待切换</li> <li>14：订阅发布创建中</li> <li>15：订阅发布修改中</li> <li>16：实例修改中且切换中</li> <li>17：创建RO副本中</li></p>
     * @param string $Vip <p>实例访问IP</p>
     * @param integer $Vport <p>实例访问端口</p>
     * @param string $CreateTime <p>实例创建时间</p>
     * @param string $UpdateTime <p>实例更新时间</p>
     * @param string $StartTime <p>实例计费开始时间</p>
     * @param string $EndTime <p>实例计费结束时间</p>
     * @param string $IsolateTime <p>实例隔离时间</p>
     * @param integer $Memory <p>实例内存大小，单位G</p>
     * @param integer $UsedStorage <p>实例已经使用存储空间大小，单位G</p>
     * @param integer $Storage <p>实例存储空间大小，单位G</p>
     * @param string $VersionName <p>实例版本</p>
     * @param integer $RenewFlag <p>实例续费标记，0-正常续费，1-自动续费，2-到期不续费</p>
     * @param integer $Model <p>实例高可用， 1-双机高可用，2-单机，3-跨可用区，4-集群跨可用区，5-集群，6-多节点集群，7-多节点集群跨可用区，9-自研机房</p>
     * @param string $Region <p>实例所在地域名称，如 ap-guangzhou</p>
     * @param string $Zone <p>实例所在可用区名称，如 ap-guangzhou-1</p>
     * @param string $BackupTime <p>备份时间点</p>
     * @param integer $PayMode <p>实例付费模式， 0-按量计费，1-包年包月</p>
     * @param string $Uid <p>实例唯一UID</p>
     * @param integer $Cpu <p>实例cpu核心数</p>
     * @param string $Version <p>实例版本代号</p>
     * @param string $Type <p>实例类型代号：&quot;TS85&quot;-物理机，本地SSD硬盘；&quot;Z3&quot;-物理机早期版本，本地SSD硬盘；&quot;CLOUD_BASIC&quot;-虚拟机，普通云硬盘；&quot;CLOUD_PREMIUM&quot;-虚拟机，高性能云硬盘；&quot;CLOUD_SSD&quot;-虚拟机，云SSD硬盘；&quot;CLOUD_HSSD&quot;-虚拟机，增强型SSD云硬盘；&quot;CLOUD_TSSD&quot;-虚拟机，极速型SSD云硬盘；&quot;CLOUD_BSSD&quot;-虚拟机，通用型SSD云硬盘</p>
     * @param integer $Pid <p>计费ID</p>
     * @param string $UniqVpcId <p>实例所属VPC的唯一字符串ID，格式如：vpc-xxx，基础网络时为空字符串</p>
     * @param string $UniqSubnetId <p>实例所属子网的唯一字符串ID，格式如： subnet-xxx，基础网络时为空字符串</p>
     * @param string $IsolateOperator <p>实例隔离操作</p>
     * @param string $SubFlag <p>发布订阅标识，SUB-订阅实例，PUB-发布实例，空值-没有发布订阅的普通实例</p>
     * @param string $ROFlag <p>只读标识，RO-只读实例，MASTER-有RO实例的主实例，空值-没有只读组的非RO实例</p>
     * @param string $HAFlag <p>容灾类型，MIRROR-镜像，ALWAYSON-AlwaysOn, SINGLE-单例</p>
     * @param array $ResourceTags <p>实例绑定的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupModel <p>备份模式，master_pkg-主节点打包备份(默认) ；master_no_pkg-主节点不打包备份；slave_pkg-从节点打包备份(always on集群有效)；slave_no_pkg-从节点不打包备份(always on集群有效)；只读副本对该值无效。</p>
     * @param string $InstanceNote <p>实例备份信息</p>
     * @param array $BackupCycle <p>备份周期</p>
     * @param string $BackupCycleType <p>备份周期类型，[daily、weekly、monthly]</p>
     * @param integer $BackupSaveDays <p>数据(日志)备份保留时间</p>
     * @param string $InstanceType <p>实例类型 HA-高可用，RO-只读实例，SI-基础版，BI-商业智能服务，cvmHA-云盘高可用，cvmRO-云盘只读实例，MultiHA-多节点，cvmMultiHA-云盘多节点</p>
     * @param array $CrossRegions <p>跨地域备份目的地域，如果为空，则表示未开启跨地域备份</p>
     * @param string $CrossBackupEnabled <p>跨地域备份状态 enable-开启，disable-关闭</p>
     * @param integer $CrossBackupSaveDays <p>跨地域备份保留天数，则默认7天</p>
     * @param string $DnsPodDomain <p>外网地址域名</p>
     * @param integer $TgwWanVPort <p>外网端口号</p>
     * @param string $Collation <p>系统字符集排序规则，默认：Chinese_PRC_CI_AS</p>
     * @param string $TimeZone <p>系统时区，默认：China Standard Time</p>
     * @param boolean $IsDrZone <p>是否跨AZ</p>
     * @param SlaveZones $SlaveZones <p>双节点实例备可用区信息</p>
     * @param string $Architecture <p>架构标识，SINGLE-单节点 DOUBLE-双节点</p>
     * @param string $Style <p>类型标识，EXCLUSIVE-独享型，SHARED-共享型</p>
     * @param array $MultiSlaveZones <p>多节点实例备可用区信息</p>
     * @param integer $ThroughputPerformance <p>额外IO吞吐量</p><p>单位：MB/s</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("IsolateOperator",$param) and $param["IsolateOperator"] !== null) {
            $this->IsolateOperator = $param["IsolateOperator"];
        }

        if (array_key_exists("SubFlag",$param) and $param["SubFlag"] !== null) {
            $this->SubFlag = $param["SubFlag"];
        }

        if (array_key_exists("ROFlag",$param) and $param["ROFlag"] !== null) {
            $this->ROFlag = $param["ROFlag"];
        }

        if (array_key_exists("HAFlag",$param) and $param["HAFlag"] !== null) {
            $this->HAFlag = $param["HAFlag"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("BackupModel",$param) and $param["BackupModel"] !== null) {
            $this->BackupModel = $param["BackupModel"];
        }

        if (array_key_exists("InstanceNote",$param) and $param["InstanceNote"] !== null) {
            $this->InstanceNote = $param["InstanceNote"];
        }

        if (array_key_exists("BackupCycle",$param) and $param["BackupCycle"] !== null) {
            $this->BackupCycle = $param["BackupCycle"];
        }

        if (array_key_exists("BackupCycleType",$param) and $param["BackupCycleType"] !== null) {
            $this->BackupCycleType = $param["BackupCycleType"];
        }

        if (array_key_exists("BackupSaveDays",$param) and $param["BackupSaveDays"] !== null) {
            $this->BackupSaveDays = $param["BackupSaveDays"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("CrossRegions",$param) and $param["CrossRegions"] !== null) {
            $this->CrossRegions = $param["CrossRegions"];
        }

        if (array_key_exists("CrossBackupEnabled",$param) and $param["CrossBackupEnabled"] !== null) {
            $this->CrossBackupEnabled = $param["CrossBackupEnabled"];
        }

        if (array_key_exists("CrossBackupSaveDays",$param) and $param["CrossBackupSaveDays"] !== null) {
            $this->CrossBackupSaveDays = $param["CrossBackupSaveDays"];
        }

        if (array_key_exists("DnsPodDomain",$param) and $param["DnsPodDomain"] !== null) {
            $this->DnsPodDomain = $param["DnsPodDomain"];
        }

        if (array_key_exists("TgwWanVPort",$param) and $param["TgwWanVPort"] !== null) {
            $this->TgwWanVPort = $param["TgwWanVPort"];
        }

        if (array_key_exists("Collation",$param) and $param["Collation"] !== null) {
            $this->Collation = $param["Collation"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("IsDrZone",$param) and $param["IsDrZone"] !== null) {
            $this->IsDrZone = $param["IsDrZone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = new SlaveZones();
            $this->SlaveZones->deserialize($param["SlaveZones"]);
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("MultiSlaveZones",$param) and $param["MultiSlaveZones"] !== null) {
            $this->MultiSlaveZones = [];
            foreach ($param["MultiSlaveZones"] as $key => $value){
                $obj = new SlaveZones();
                $obj->deserialize($value);
                array_push($this->MultiSlaveZones, $obj);
            }
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
