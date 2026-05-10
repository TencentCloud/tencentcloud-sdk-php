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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例详细信息
 *
 * @method integer getWanStatus() 获取<p>外网状态，可能的返回值为：0-未开通外网；1-已开通外网；2-已关闭外网</p>
 * @method void setWanStatus(integer $WanStatus) 设置<p>外网状态，可能的返回值为：0-未开通外网；1-已开通外网；2-已关闭外网</p>
 * @method string getZone() 获取<p>可用区信息</p>
 * @method void setZone(string $Zone) 设置<p>可用区信息</p>
 * @method integer getInitFlag() 获取<p>初始化标志，可能的返回值为：0-未初始化；1-已初始化</p>
 * @method void setInitFlag(integer $InitFlag) 设置<p>初始化标志，可能的返回值为：0-未初始化；1-已初始化</p>
 * @method RoVipInfo getRoVipInfo() 获取<p>只读vip信息。单独开通只读实例访问的只读实例才有该字段</p>
 * @method void setRoVipInfo(RoVipInfo $RoVipInfo) 设置<p>只读vip信息。单独开通只读实例访问的只读实例才有该字段</p>
 * @method integer getMemory() 获取<p>内存容量，单位为 MB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存容量，单位为 MB</p>
 * @method integer getStatus() 获取<p>实例状态，可能的返回值：0-创建中；1-运行中；4-正在进行隔离操作；5-已隔离</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态，可能的返回值：0-创建中；1-运行中；4-正在进行隔离操作；5-已隔离</p>
 * @method integer getVpcId() 获取<p>私有网络 ID，例如：51102</p>
 * @method void setVpcId(integer $VpcId) 设置<p>私有网络 ID，例如：51102</p>
 * @method SlaveInfo getSlaveInfo() 获取<p>备机信息</p>
 * @method void setSlaveInfo(SlaveInfo $SlaveInfo) 设置<p>备机信息</p>
 * @method string getInstanceId() 获取<p>实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID</p>
 * @method integer getVolume() 获取<p>硬盘容量，单位为 GB</p>
 * @method void setVolume(integer $Volume) 设置<p>硬盘容量，单位为 GB</p>
 * @method integer getAutoRenew() 获取<p>自动续费标志，可能的返回值：0-未开通自动续费；1-已开通自动续费；2-已关闭自动续费</p>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>自动续费标志，可能的返回值：0-未开通自动续费；1-已开通自动续费；2-已关闭自动续费</p>
 * @method integer getProtectMode() 获取<p>数据复制方式。0 - 异步复制；1 - 半同步复制；2 - 强同步复制</p>
 * @method void setProtectMode(integer $ProtectMode) 设置<p>数据复制方式。0 - 异步复制；1 - 半同步复制；2 - 强同步复制</p>
 * @method array getRoGroups() 获取<p>只读组详细信息</p>
 * @method void setRoGroups(array $RoGroups) 设置<p>只读组详细信息</p>
 * @method integer getSubnetId() 获取<p>子网 ID，例如：2333</p>
 * @method void setSubnetId(integer $SubnetId) 设置<p>子网 ID，例如：2333</p>
 * @method integer getInstanceType() 获取<p>实例类型，可能的返回值：1-主实例；2-灾备实例；3-只读实例</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>实例类型，可能的返回值：1-主实例；2-灾备实例；3-只读实例</p>
 * @method integer getProjectId() 获取<p>项目 ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 ID</p>
 * @method string getRegion() 获取<p>地域信息</p>
 * @method void setRegion(string $Region) 设置<p>地域信息</p>
 * @method string getDeadlineTime() 获取<p>实例到期时间</p>
 * @method void setDeadlineTime(string $DeadlineTime) 设置<p>实例到期时间</p>
 * @method integer getDeployMode() 获取<p>可用区部署方式。可能的值为：0 - 单可用区；1 - 多可用区</p>
 * @method void setDeployMode(integer $DeployMode) 设置<p>可用区部署方式。可能的值为：0 - 单可用区；1 - 多可用区</p>
 * @method integer getTaskStatus() 获取<p>实例任务状态。0 - 没有任务 ,1 - 升级中,2 - 数据导入中,3 - 开放Slave中,4 - 外网访问开通中,5 - 批量操作执行中,6 - 回档中,7 - 外网访问关闭中,8 - 密码修改中,9 - 实例名修改中,10 - 重启中,12 - 自建迁移中,13 - 删除库表中,14 - 灾备实例创建同步中,15 - 升级待切换,16 - 升级切换中,17 - 升级切换完成</p>
 * @method void setTaskStatus(integer $TaskStatus) 设置<p>实例任务状态。0 - 没有任务 ,1 - 升级中,2 - 数据导入中,3 - 开放Slave中,4 - 外网访问开通中,5 - 批量操作执行中,6 - 回档中,7 - 外网访问关闭中,8 - 密码修改中,9 - 实例名修改中,10 - 重启中,12 - 自建迁移中,13 - 删除库表中,14 - 灾备实例创建同步中,15 - 升级待切换,16 - 升级切换中,17 - 升级切换完成</p>
 * @method MasterInfo getMasterInfo() 获取<p>主实例详细信息</p>
 * @method void setMasterInfo(MasterInfo $MasterInfo) 设置<p>主实例详细信息</p>
 * @method string getDeviceType() 获取<p>实例类型</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>实例类型</p>
 * @method string getEngineVersion() 获取<p>内核版本</p>
 * @method void setEngineVersion(string $EngineVersion) 设置<p>内核版本</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method array getDrInfo() 获取<p>灾备实例详细信息</p>
 * @method void setDrInfo(array $DrInfo) 设置<p>灾备实例详细信息</p>
 * @method string getWanDomain() 获取<p>外网域名</p>
 * @method void setWanDomain(string $WanDomain) 设置<p>外网域名</p>
 * @method integer getWanPort() 获取<p>外网端口号</p>
 * @method void setWanPort(integer $WanPort) 设置<p>外网端口号</p>
 * @method integer getPayType() 获取<p>付费类型，可能的返回值：0-包年包月；1-按量计费</p>
 * @method void setPayType(integer $PayType) 设置<p>付费类型，可能的返回值：0-包年包月；1-按量计费</p>
 * @method string getCreateTime() 获取<p>实例创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>实例创建时间</p>
 * @method string getVip() 获取<p>实例 IP</p>
 * @method void setVip(string $Vip) 设置<p>实例 IP</p>
 * @method integer getVport() 获取<p>端口号</p>
 * @method void setVport(integer $Vport) 设置<p>端口号</p>
 * @method integer getCdbError() 获取<p>磁盘写入是否被锁定（实例数据写入量已经超过磁盘配额）。0 -未被锁定 1 -已被锁定</p>
 * @method void setCdbError(integer $CdbError) 设置<p>磁盘写入是否被锁定（实例数据写入量已经超过磁盘配额）。0 -未被锁定 1 -已被锁定</p>
 * @method string getUniqVpcId() 获取<p>私有网络描述符，例如：“vpc-5v8wn9mg”</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>私有网络描述符，例如：“vpc-5v8wn9mg”</p>
 * @method string getUniqSubnetId() 获取<p>子网描述符，例如：“subnet-1typ0s7d”</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置<p>子网描述符，例如：“subnet-1typ0s7d”</p>
 * @method string getPhysicalId() 获取<p>物理 ID</p>
 * @method void setPhysicalId(string $PhysicalId) 设置<p>物理 ID</p>
 * @method integer getCpu() 获取<p>核心数</p>
 * @method void setCpu(integer $Cpu) 设置<p>核心数</p>
 * @method integer getQps() 获取<p>每秒查询数量</p>
 * @method void setQps(integer $Qps) 设置<p>每秒查询数量</p>
 * @method string getZoneName() 获取<p>可用区中文名称</p>
 * @method void setZoneName(string $ZoneName) 设置<p>可用区中文名称</p>
 * @method string getDeviceClass() 获取<p>物理机型</p>
 * @method void setDeviceClass(string $DeviceClass) 设置<p>物理机型</p>
 * @method string getDeployGroupId() 获取<p>置放群组 ID</p>
 * @method void setDeployGroupId(string $DeployGroupId) 设置<p>置放群组 ID</p>
 * @method integer getZoneId() 获取<p>可用区 ID</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区 ID</p>
 * @method integer getInstanceNodes() 获取<p>节点数</p>
 * @method void setInstanceNodes(integer $InstanceNodes) 设置<p>节点数</p>
 * @method array getTagList() 获取<p>标签列表</p>
 * @method void setTagList(array $TagList) 设置<p>标签列表</p>
 * @method string getEngineType() 获取<p>引擎类型</p>
 * @method void setEngineType(string $EngineType) 设置<p>引擎类型</p>
 * @method integer getMaxDelayTime() 获取<p>最大延迟阈值</p>
 * @method void setMaxDelayTime(integer $MaxDelayTime) 设置<p>最大延迟阈值</p>
 * @method string getDiskType() 获取<p>实例磁盘类型，仅云盘版和单节点（云盘）实例才会返回有效值。<br>说明：</p><ol><li>若返回：&quot;DiskType&quot;: &quot;CLOUD_HSSD&quot;，则表示该实例磁盘类型为增强型 SSD 云硬盘。</li><li>若返回：&quot;DiskType&quot;: &quot;CLOUD_SSD&quot;，则表示该实例磁盘类型为 SSD 云硬盘。</li><li>若返回：&quot;DiskType&quot;: &quot;&quot;，且参数 DeviceType 值为 UNIVERSAL 或 EXCLUSIVE，则表示该实例采用的是本地 SSD 盘。</li></ol>
 * @method void setDiskType(string $DiskType) 设置<p>实例磁盘类型，仅云盘版和单节点（云盘）实例才会返回有效值。<br>说明：</p><ol><li>若返回：&quot;DiskType&quot;: &quot;CLOUD_HSSD&quot;，则表示该实例磁盘类型为增强型 SSD 云硬盘。</li><li>若返回：&quot;DiskType&quot;: &quot;CLOUD_SSD&quot;，则表示该实例磁盘类型为 SSD 云硬盘。</li><li>若返回：&quot;DiskType&quot;: &quot;&quot;，且参数 DeviceType 值为 UNIVERSAL 或 EXCLUSIVE，则表示该实例采用的是本地 SSD 盘。</li></ol>
 * @method integer getExpandCpu() 获取<p>当前扩容的CPU核心数。</p>
 * @method void setExpandCpu(integer $ExpandCpu) 设置<p>当前扩容的CPU核心数。</p>
 * @method array getClusterInfo() 获取<p>云盘版实例节点信息</p>
 * @method void setClusterInfo(array $ClusterInfo) 设置<p>云盘版实例节点信息</p>
 * @method array getAnalysisNodeInfos() 获取<p>分析引擎节点列表</p>
 * @method void setAnalysisNodeInfos(array $AnalysisNodeInfos) 设置<p>分析引擎节点列表</p>
 * @method integer getDeviceBandwidth() 获取<p>设备带宽，单位G。当DeviceClass不为空时此参数才有效。例：25-表示当前设备带宽为25G；10-表示当前设备带宽为10G。</p>
 * @method void setDeviceBandwidth(integer $DeviceBandwidth) 设置<p>设备带宽，单位G。当DeviceClass不为空时此参数才有效。例：25-表示当前设备带宽为25G；10-表示当前设备带宽为10G。</p>
 * @method string getDestroyProtect() 获取<p>实例销毁保护状态，on表示开启保护，否则为关闭保护</p>
 * @method void setDestroyProtect(string $DestroyProtect) 设置<p>实例销毁保护状态，on表示开启保护，否则为关闭保护</p>
 * @method string getCpuModel() 获取<p>TDSQL引擎参数</p>
 * @method void setCpuModel(string $CpuModel) 设置<p>TDSQL引擎参数</p>
 * @method UpgradeAnalysisInstanceVersionInfo getAnalysisUpgradeVersionInfo() 获取<p>分析引擎实例版本升级信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisUpgradeVersionInfo(UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo) 设置<p>分析引擎实例版本升级信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var integer <p>外网状态，可能的返回值为：0-未开通外网；1-已开通外网；2-已关闭外网</p>
     */
    public $WanStatus;

    /**
     * @var string <p>可用区信息</p>
     */
    public $Zone;

    /**
     * @var integer <p>初始化标志，可能的返回值为：0-未初始化；1-已初始化</p>
     */
    public $InitFlag;

    /**
     * @var RoVipInfo <p>只读vip信息。单独开通只读实例访问的只读实例才有该字段</p>
     */
    public $RoVipInfo;

    /**
     * @var integer <p>内存容量，单位为 MB</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例状态，可能的返回值：0-创建中；1-运行中；4-正在进行隔离操作；5-已隔离</p>
     */
    public $Status;

    /**
     * @var integer <p>私有网络 ID，例如：51102</p>
     */
    public $VpcId;

    /**
     * @var SlaveInfo <p>备机信息</p>
     */
    public $SlaveInfo;

    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>硬盘容量，单位为 GB</p>
     */
    public $Volume;

    /**
     * @var integer <p>自动续费标志，可能的返回值：0-未开通自动续费；1-已开通自动续费；2-已关闭自动续费</p>
     */
    public $AutoRenew;

    /**
     * @var integer <p>数据复制方式。0 - 异步复制；1 - 半同步复制；2 - 强同步复制</p>
     */
    public $ProtectMode;

    /**
     * @var array <p>只读组详细信息</p>
     */
    public $RoGroups;

    /**
     * @var integer <p>子网 ID，例如：2333</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>实例类型，可能的返回值：1-主实例；2-灾备实例；3-只读实例</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>项目 ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>地域信息</p>
     */
    public $Region;

    /**
     * @var string <p>实例到期时间</p>
     */
    public $DeadlineTime;

    /**
     * @var integer <p>可用区部署方式。可能的值为：0 - 单可用区；1 - 多可用区</p>
     */
    public $DeployMode;

    /**
     * @var integer <p>实例任务状态。0 - 没有任务 ,1 - 升级中,2 - 数据导入中,3 - 开放Slave中,4 - 外网访问开通中,5 - 批量操作执行中,6 - 回档中,7 - 外网访问关闭中,8 - 密码修改中,9 - 实例名修改中,10 - 重启中,12 - 自建迁移中,13 - 删除库表中,14 - 灾备实例创建同步中,15 - 升级待切换,16 - 升级切换中,17 - 升级切换完成</p>
     */
    public $TaskStatus;

    /**
     * @var MasterInfo <p>主实例详细信息</p>
     */
    public $MasterInfo;

    /**
     * @var string <p>实例类型</p>
     */
    public $DeviceType;

    /**
     * @var string <p>内核版本</p>
     */
    public $EngineVersion;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var array <p>灾备实例详细信息</p>
     */
    public $DrInfo;

    /**
     * @var string <p>外网域名</p>
     */
    public $WanDomain;

    /**
     * @var integer <p>外网端口号</p>
     */
    public $WanPort;

    /**
     * @var integer <p>付费类型，可能的返回值：0-包年包月；1-按量计费</p>
     */
    public $PayType;

    /**
     * @var string <p>实例创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>实例 IP</p>
     */
    public $Vip;

    /**
     * @var integer <p>端口号</p>
     */
    public $Vport;

    /**
     * @var integer <p>磁盘写入是否被锁定（实例数据写入量已经超过磁盘配额）。0 -未被锁定 1 -已被锁定</p>
     */
    public $CdbError;

    /**
     * @var string <p>私有网络描述符，例如：“vpc-5v8wn9mg”</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>子网描述符，例如：“subnet-1typ0s7d”</p>
     */
    public $UniqSubnetId;

    /**
     * @var string <p>物理 ID</p>
     */
    public $PhysicalId;

    /**
     * @var integer <p>核心数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>每秒查询数量</p>
     */
    public $Qps;

    /**
     * @var string <p>可用区中文名称</p>
     */
    public $ZoneName;

    /**
     * @var string <p>物理机型</p>
     */
    public $DeviceClass;

    /**
     * @var string <p>置放群组 ID</p>
     */
    public $DeployGroupId;

    /**
     * @var integer <p>可用区 ID</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>节点数</p>
     */
    public $InstanceNodes;

    /**
     * @var array <p>标签列表</p>
     */
    public $TagList;

    /**
     * @var string <p>引擎类型</p>
     */
    public $EngineType;

    /**
     * @var integer <p>最大延迟阈值</p>
     */
    public $MaxDelayTime;

    /**
     * @var string <p>实例磁盘类型，仅云盘版和单节点（云盘）实例才会返回有效值。<br>说明：</p><ol><li>若返回：&quot;DiskType&quot;: &quot;CLOUD_HSSD&quot;，则表示该实例磁盘类型为增强型 SSD 云硬盘。</li><li>若返回：&quot;DiskType&quot;: &quot;CLOUD_SSD&quot;，则表示该实例磁盘类型为 SSD 云硬盘。</li><li>若返回：&quot;DiskType&quot;: &quot;&quot;，且参数 DeviceType 值为 UNIVERSAL 或 EXCLUSIVE，则表示该实例采用的是本地 SSD 盘。</li></ol>
     */
    public $DiskType;

    /**
     * @var integer <p>当前扩容的CPU核心数。</p>
     */
    public $ExpandCpu;

    /**
     * @var array <p>云盘版实例节点信息</p>
     */
    public $ClusterInfo;

    /**
     * @var array <p>分析引擎节点列表</p>
     */
    public $AnalysisNodeInfos;

    /**
     * @var integer <p>设备带宽，单位G。当DeviceClass不为空时此参数才有效。例：25-表示当前设备带宽为25G；10-表示当前设备带宽为10G。</p>
     */
    public $DeviceBandwidth;

    /**
     * @var string <p>实例销毁保护状态，on表示开启保护，否则为关闭保护</p>
     */
    public $DestroyProtect;

    /**
     * @var string <p>TDSQL引擎参数</p>
     */
    public $CpuModel;

    /**
     * @var UpgradeAnalysisInstanceVersionInfo <p>分析引擎实例版本升级信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisUpgradeVersionInfo;

    /**
     * @param integer $WanStatus <p>外网状态，可能的返回值为：0-未开通外网；1-已开通外网；2-已关闭外网</p>
     * @param string $Zone <p>可用区信息</p>
     * @param integer $InitFlag <p>初始化标志，可能的返回值为：0-未初始化；1-已初始化</p>
     * @param RoVipInfo $RoVipInfo <p>只读vip信息。单独开通只读实例访问的只读实例才有该字段</p>
     * @param integer $Memory <p>内存容量，单位为 MB</p>
     * @param integer $Status <p>实例状态，可能的返回值：0-创建中；1-运行中；4-正在进行隔离操作；5-已隔离</p>
     * @param integer $VpcId <p>私有网络 ID，例如：51102</p>
     * @param SlaveInfo $SlaveInfo <p>备机信息</p>
     * @param string $InstanceId <p>实例 ID</p>
     * @param integer $Volume <p>硬盘容量，单位为 GB</p>
     * @param integer $AutoRenew <p>自动续费标志，可能的返回值：0-未开通自动续费；1-已开通自动续费；2-已关闭自动续费</p>
     * @param integer $ProtectMode <p>数据复制方式。0 - 异步复制；1 - 半同步复制；2 - 强同步复制</p>
     * @param array $RoGroups <p>只读组详细信息</p>
     * @param integer $SubnetId <p>子网 ID，例如：2333</p>
     * @param integer $InstanceType <p>实例类型，可能的返回值：1-主实例；2-灾备实例；3-只读实例</p>
     * @param integer $ProjectId <p>项目 ID</p>
     * @param string $Region <p>地域信息</p>
     * @param string $DeadlineTime <p>实例到期时间</p>
     * @param integer $DeployMode <p>可用区部署方式。可能的值为：0 - 单可用区；1 - 多可用区</p>
     * @param integer $TaskStatus <p>实例任务状态。0 - 没有任务 ,1 - 升级中,2 - 数据导入中,3 - 开放Slave中,4 - 外网访问开通中,5 - 批量操作执行中,6 - 回档中,7 - 外网访问关闭中,8 - 密码修改中,9 - 实例名修改中,10 - 重启中,12 - 自建迁移中,13 - 删除库表中,14 - 灾备实例创建同步中,15 - 升级待切换,16 - 升级切换中,17 - 升级切换完成</p>
     * @param MasterInfo $MasterInfo <p>主实例详细信息</p>
     * @param string $DeviceType <p>实例类型</p>
     * @param string $EngineVersion <p>内核版本</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param array $DrInfo <p>灾备实例详细信息</p>
     * @param string $WanDomain <p>外网域名</p>
     * @param integer $WanPort <p>外网端口号</p>
     * @param integer $PayType <p>付费类型，可能的返回值：0-包年包月；1-按量计费</p>
     * @param string $CreateTime <p>实例创建时间</p>
     * @param string $Vip <p>实例 IP</p>
     * @param integer $Vport <p>端口号</p>
     * @param integer $CdbError <p>磁盘写入是否被锁定（实例数据写入量已经超过磁盘配额）。0 -未被锁定 1 -已被锁定</p>
     * @param string $UniqVpcId <p>私有网络描述符，例如：“vpc-5v8wn9mg”</p>
     * @param string $UniqSubnetId <p>子网描述符，例如：“subnet-1typ0s7d”</p>
     * @param string $PhysicalId <p>物理 ID</p>
     * @param integer $Cpu <p>核心数</p>
     * @param integer $Qps <p>每秒查询数量</p>
     * @param string $ZoneName <p>可用区中文名称</p>
     * @param string $DeviceClass <p>物理机型</p>
     * @param string $DeployGroupId <p>置放群组 ID</p>
     * @param integer $ZoneId <p>可用区 ID</p>
     * @param integer $InstanceNodes <p>节点数</p>
     * @param array $TagList <p>标签列表</p>
     * @param string $EngineType <p>引擎类型</p>
     * @param integer $MaxDelayTime <p>最大延迟阈值</p>
     * @param string $DiskType <p>实例磁盘类型，仅云盘版和单节点（云盘）实例才会返回有效值。<br>说明：</p><ol><li>若返回：&quot;DiskType&quot;: &quot;CLOUD_HSSD&quot;，则表示该实例磁盘类型为增强型 SSD 云硬盘。</li><li>若返回：&quot;DiskType&quot;: &quot;CLOUD_SSD&quot;，则表示该实例磁盘类型为 SSD 云硬盘。</li><li>若返回：&quot;DiskType&quot;: &quot;&quot;，且参数 DeviceType 值为 UNIVERSAL 或 EXCLUSIVE，则表示该实例采用的是本地 SSD 盘。</li></ol>
     * @param integer $ExpandCpu <p>当前扩容的CPU核心数。</p>
     * @param array $ClusterInfo <p>云盘版实例节点信息</p>
     * @param array $AnalysisNodeInfos <p>分析引擎节点列表</p>
     * @param integer $DeviceBandwidth <p>设备带宽，单位G。当DeviceClass不为空时此参数才有效。例：25-表示当前设备带宽为25G；10-表示当前设备带宽为10G。</p>
     * @param string $DestroyProtect <p>实例销毁保护状态，on表示开启保护，否则为关闭保护</p>
     * @param string $CpuModel <p>TDSQL引擎参数</p>
     * @param UpgradeAnalysisInstanceVersionInfo $AnalysisUpgradeVersionInfo <p>分析引擎实例版本升级信息</p>
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
        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InitFlag",$param) and $param["InitFlag"] !== null) {
            $this->InitFlag = $param["InitFlag"];
        }

        if (array_key_exists("RoVipInfo",$param) and $param["RoVipInfo"] !== null) {
            $this->RoVipInfo = new RoVipInfo();
            $this->RoVipInfo->deserialize($param["RoVipInfo"]);
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SlaveInfo",$param) and $param["SlaveInfo"] !== null) {
            $this->SlaveInfo = new SlaveInfo();
            $this->SlaveInfo->deserialize($param["SlaveInfo"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("RoGroups",$param) and $param["RoGroups"] !== null) {
            $this->RoGroups = [];
            foreach ($param["RoGroups"] as $key => $value){
                $obj = new RoGroup();
                $obj->deserialize($value);
                array_push($this->RoGroups, $obj);
            }
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("MasterInfo",$param) and $param["MasterInfo"] !== null) {
            $this->MasterInfo = new MasterInfo();
            $this->MasterInfo->deserialize($param["MasterInfo"]);
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("DrInfo",$param) and $param["DrInfo"] !== null) {
            $this->DrInfo = [];
            foreach ($param["DrInfo"] as $key => $value){
                $obj = new DrInfo();
                $obj->deserialize($value);
                array_push($this->DrInfo, $obj);
            }
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("CdbError",$param) and $param["CdbError"] !== null) {
            $this->CdbError = $param["CdbError"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("PhysicalId",$param) and $param["PhysicalId"] !== null) {
            $this->PhysicalId = $param["PhysicalId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("DeviceClass",$param) and $param["DeviceClass"] !== null) {
            $this->DeviceClass = $param["DeviceClass"];
        }

        if (array_key_exists("DeployGroupId",$param) and $param["DeployGroupId"] !== null) {
            $this->DeployGroupId = $param["DeployGroupId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("InstanceNodes",$param) and $param["InstanceNodes"] !== null) {
            $this->InstanceNodes = $param["InstanceNodes"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfoItem();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("ExpandCpu",$param) and $param["ExpandCpu"] !== null) {
            $this->ExpandCpu = $param["ExpandCpu"];
        }

        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = [];
            foreach ($param["ClusterInfo"] as $key => $value){
                $obj = new ClusterInfo();
                $obj->deserialize($value);
                array_push($this->ClusterInfo, $obj);
            }
        }

        if (array_key_exists("AnalysisNodeInfos",$param) and $param["AnalysisNodeInfos"] !== null) {
            $this->AnalysisNodeInfos = [];
            foreach ($param["AnalysisNodeInfos"] as $key => $value){
                $obj = new AnalysisNodeInfo();
                $obj->deserialize($value);
                array_push($this->AnalysisNodeInfos, $obj);
            }
        }

        if (array_key_exists("DeviceBandwidth",$param) and $param["DeviceBandwidth"] !== null) {
            $this->DeviceBandwidth = $param["DeviceBandwidth"];
        }

        if (array_key_exists("DestroyProtect",$param) and $param["DestroyProtect"] !== null) {
            $this->DestroyProtect = $param["DestroyProtect"];
        }

        if (array_key_exists("CpuModel",$param) and $param["CpuModel"] !== null) {
            $this->CpuModel = $param["CpuModel"];
        }

        if (array_key_exists("AnalysisUpgradeVersionInfo",$param) and $param["AnalysisUpgradeVersionInfo"] !== null) {
            $this->AnalysisUpgradeVersionInfo = new UpgradeAnalysisInstanceVersionInfo();
            $this->AnalysisUpgradeVersionInfo->deserialize($param["AnalysisUpgradeVersionInfo"]);
        }
    }
}
