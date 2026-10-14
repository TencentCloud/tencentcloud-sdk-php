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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例描述信息
 *
 * @method string getInstanceId() 获取<p>集群实例ID, &quot;cdwdoris-xxxx&quot; 字符串类型</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群实例ID, &quot;cdwdoris-xxxx&quot; 字符串类型</p>
 * @method string getInstanceName() 获取<p>集群实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>集群实例名称</p>
 * @method string getStatus() 获取<p>状态,<br>Init  创建中<br>Serving   运行中<br>Isolated   已隔离<br>Changing  变更中</p>
 * @method void setStatus(string $Status) 设置<p>状态,<br>Init  创建中<br>Serving   运行中<br>Isolated   已隔离<br>Changing  变更中</p>
 * @method string getVersion() 获取<p>版本</p>
 * @method void setVersion(string $Version) 设置<p>版本</p>
 * @method string getRegion() 获取<p>地域, ap-guangzhou</p>
 * @method void setRegion(string $Region) 设置<p>地域, ap-guangzhou</p>
 * @method string getZone() 获取<p>可用区， ap-guangzhou-3</p>
 * @method void setZone(string $Zone) 设置<p>可用区， ap-guangzhou-3</p>
 * @method string getVpcId() 获取<p>私有网络名称</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络名称</p>
 * @method string getSubnetId() 获取<p>子网名称</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网名称</p>
 * @method string getPayMode() 获取<p>付费类型，&quot;hour&quot;, &quot;prepay&quot;</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费类型，&quot;hour&quot;, &quot;prepay&quot;</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getExpireTime() 获取<p>过期时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间</p>
 * @method NodesSummary getMasterSummary() 获取<p>数据节点描述信息</p>
 * @method void setMasterSummary(NodesSummary $MasterSummary) 设置<p>数据节点描述信息</p>
 * @method NodesSummary getCoreSummary() 获取<p>zookeeper节点描述信息</p>
 * @method void setCoreSummary(NodesSummary $CoreSummary) 设置<p>zookeeper节点描述信息</p>
 * @method string getHA() 获取<p>高可用，&quot;true&quot; &quot;false&quot;</p>
 * @method void setHA(string $HA) 设置<p>高可用，&quot;true&quot; &quot;false&quot;</p>
 * @method integer getHaType() 获取<p>高可用类型：<br>0：非高可用<br>1：读高可用<br>2：读写高可用。</p>
 * @method void setHaType(integer $HaType) 设置<p>高可用类型：<br>0：非高可用<br>1：读高可用<br>2：读写高可用。</p>
 * @method string getAccessInfo() 获取<p>访问地址，例如 &quot;10.0.0.1:9000&quot;</p>
 * @method void setAccessInfo(string $AccessInfo) 设置<p>访问地址，例如 &quot;10.0.0.1:9000&quot;</p>
 * @method integer getId() 获取<p>记录ID，数值型</p>
 * @method void setId(integer $Id) 设置<p>记录ID，数值型</p>
 * @method integer getRegionId() 获取<p>regionId, 表示地域</p>
 * @method void setRegionId(integer $RegionId) 设置<p>regionId, 表示地域</p>
 * @method string getZoneDesc() 获取<p>可用区说明，例如 &quot;广州三区&quot;</p>
 * @method void setZoneDesc(string $ZoneDesc) 设置<p>可用区说明，例如 &quot;广州三区&quot;</p>
 * @method string getFlowMsg() 获取<p>错误流程说明信息</p>
 * @method void setFlowMsg(string $FlowMsg) 设置<p>错误流程说明信息</p>
 * @method string getStatusDesc() 获取<p>状态描述，例如“运行中”等</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>状态描述，例如“运行中”等</p>
 * @method boolean getRenewFlag() 获取<p>自动续费标记</p>
 * @method void setRenewFlag(boolean $RenewFlag) 设置<p>自动续费标记</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method string getMonitor() 获取<p>监控信息</p>
 * @method void setMonitor(string $Monitor) 设置<p>监控信息</p>
 * @method boolean getHasClsTopic() 获取<p>是否开通日志</p>
 * @method void setHasClsTopic(boolean $HasClsTopic) 设置<p>是否开通日志</p>
 * @method string getClsTopicId() 获取<p>日志主题ID</p>
 * @method void setClsTopicId(string $ClsTopicId) 设置<p>日志主题ID</p>
 * @method string getClsLogSetId() 获取<p>日志集ID</p>
 * @method void setClsLogSetId(string $ClsLogSetId) 设置<p>日志集ID</p>
 * @method integer getEnableXMLConfig() 获取<p>是否支持xml配置管理</p>
 * @method void setEnableXMLConfig(integer $EnableXMLConfig) 设置<p>是否支持xml配置管理</p>
 * @method string getRegionDesc() 获取<p>区域</p>
 * @method void setRegionDesc(string $RegionDesc) 设置<p>区域</p>
 * @method string getEip() 获取<p>弹性网卡地址</p>
 * @method void setEip(string $Eip) 设置<p>弹性网卡地址</p>
 * @method integer getCosMoveFactor() 获取<p>冷热分层系数</p>
 * @method void setCosMoveFactor(integer $CosMoveFactor) 设置<p>冷热分层系数</p>
 * @method string getKind() 获取<p>external/local/yunti</p>
 * @method void setKind(string $Kind) 设置<p>external/local/yunti</p>
 * @method string getCosBucketName() 获取<p>cos桶</p>
 * @method void setCosBucketName(string $CosBucketName) 设置<p>cos桶</p>
 * @method boolean getCanAttachCbs() 获取<p>cbs</p>
 * @method void setCanAttachCbs(boolean $CanAttachCbs) 设置<p>cbs</p>
 * @method string getBuildVersion() 获取<p>小版本</p>
 * @method void setBuildVersion(string $BuildVersion) 设置<p>小版本</p>
 * @method string getComponents() 获取<p>组件信息<br>注：这里返回类型实际为map[string]struct类型，并非显示的string类型，可以参考“示例值”进行数据的解析。</p>
 * @method void setComponents(string $Components) 设置<p>组件信息<br>注：这里返回类型实际为map[string]struct类型，并非显示的string类型，可以参考“示例值”进行数据的解析。</p>
 * @method integer getIfExistCatalog() 获取<p>判断审计日志表是否有catalog字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIfExistCatalog(integer $IfExistCatalog) 设置<p>判断审计日志表是否有catalog字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCharacteristic() 获取<p>页面特性，用于前端屏蔽一些页面入口</p>
 * @method void setCharacteristic(array $Characteristic) 设置<p>页面特性，用于前端屏蔽一些页面入口</p>
 * @method string getRestartTimeout() 获取<p>超时时间 单位s</p>
 * @method void setRestartTimeout(string $RestartTimeout) 设置<p>超时时间 单位s</p>
 * @method string getGraceShutdownWaitSeconds() 获取<p>内核优雅重启超时时间，如果为-1说明未设置</p>
 * @method void setGraceShutdownWaitSeconds(string $GraceShutdownWaitSeconds) 设置<p>内核优雅重启超时时间，如果为-1说明未设置</p>
 * @method integer getCaseSensitive() 获取<p>表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储</p>
 * @method void setCaseSensitive(integer $CaseSensitive) 设置<p>表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储</p>
 * @method boolean getIsWhiteSGs() 获取<p>用户是否可以绑定安全组</p>
 * @method void setIsWhiteSGs(boolean $IsWhiteSGs) 设置<p>用户是否可以绑定安全组</p>
 * @method array getBindSGs() 获取<p>已绑定的安全组信息</p>
 * @method void setBindSGs(array $BindSGs) 设置<p>已绑定的安全组信息</p>
 * @method boolean getEnableMultiZones() 获取<p>是否为多可用区</p>
 * @method void setEnableMultiZones(boolean $EnableMultiZones) 设置<p>是否为多可用区</p>
 * @method string getUserNetworkInfos() 获取<p>用户可用区和子网信息</p>
 * @method void setUserNetworkInfos(string $UserNetworkInfos) 设置<p>用户可用区和子网信息</p>
 * @method integer getEnableCoolDown() 获取<p>是否启用冷热分层。0：未开启 1：已开启</p>
 * @method void setEnableCoolDown(integer $EnableCoolDown) 设置<p>是否启用冷热分层。0：未开启 1：已开启</p>
 * @method string getCoolDownBucket() 获取<p>冷热分层使用COS桶</p>
 * @method void setCoolDownBucket(string $CoolDownBucket) 设置<p>冷热分层使用COS桶</p>
 * @method InstanceDetail getDetails() 获取<p>实例扩展信息</p>
 * @method void setDetails(InstanceDetail $Details) 设置<p>实例扩展信息</p>
 * @method integer getEnableDlc() 获取<p>是否启用DLC 0:关闭 1:开启</p>
 * @method void setEnableDlc(integer $EnableDlc) 设置<p>是否启用DLC 0:关闭 1:开启</p>
 * @method integer getAccountType() 获取<p>账户类型 0:普通用户 1:CAM用户</p>
 * @method void setAccountType(integer $AccountType) 设置<p>账户类型 0:普通用户 1:CAM用户</p>
 * @method integer getMonitorMode() 获取<p>监控模式 0: 老监控 1：新监控</p>
 * @method void setMonitorMode(integer $MonitorMode) 设置<p>监控模式 0: 老监控 1：新监控</p>
 * @method NodesSummary getCNSummary() 获取<p>cn节点信息</p>
 * @method void setCNSummary(NodesSummary $CNSummary) 设置<p>cn节点信息</p>
 * @method integer getComputeGroupCount() 获取<p>计算组个数</p>
 * @method void setComputeGroupCount(integer $ComputeGroupCount) 设置<p>计算组个数</p>
 * @method float getCosStorageSize() 获取<p>存算分离cos存储数据</p>
 * @method void setCosStorageSize(float $CosStorageSize) 设置<p>存算分离cos存储数据</p>
 * @method boolean getIsMasterNonVM() 获取<p>存算分离的指标 当是true 不支持新建计算组</p>
 * @method void setIsMasterNonVM(boolean $IsMasterNonVM) 设置<p>存算分离的指标 当是true 不支持新建计算组</p>
 * @method integer getCosPkgCapacity() 获取<p>Cos容量包大小</p>
 * @method void setCosPkgCapacity(integer $CosPkgCapacity) 设置<p>Cos容量包大小</p>
 * @method boolean getUseManagedBucket() 获取<p>集群是否使用托管桶</p>
 * @method void setUseManagedBucket(boolean $UseManagedBucket) 设置<p>集群是否使用托管桶</p>
 * @method string getInstanceType() 获取<p>集群类型</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>集群类型</p>
 * @method string getMasterInstance() 获取<p>对应主集群</p>
 * @method void setMasterInstance(string $MasterInstance) 设置<p>对应主集群</p>
 * @method array getSlaveInstances() 获取<p>对应备集群</p>
 * @method void setSlaveInstances(array $SlaveInstances) 设置<p>对应备集群</p>
 * @method string getSyncerIp() 获取<p>ccr服务部署节点ip</p>
 * @method void setSyncerIp(string $SyncerIp) 设置<p>ccr服务部署节点ip</p>
 * @method integer getEnableSqlConv() 获取<p>是否支持sql convertor</p>
 * @method void setEnableSqlConv(integer $EnableSqlConv) 设置<p>是否支持sql convertor</p>
 * @method string getTimeZone() 获取<p>集群时区，默认+08:00</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>集群时区，默认+08:00</p>
 * @method string getCacheDiskType() 获取<p>缓存盘介质：任一计算组为单副本SSD即ELASTIC_REMOTE_SSD（不支持变配多可用区部署等），否则为默认计算组介质；非存算分离为空</p>
 * @method void setCacheDiskType(string $CacheDiskType) 设置<p>缓存盘介质：任一计算组为单副本SSD即ELASTIC_REMOTE_SSD（不支持变配多可用区部署等），否则为默认计算组介质；非存算分离为空</p>
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string <p>集群实例ID, &quot;cdwdoris-xxxx&quot; 字符串类型</p>
     */
    public $InstanceId;

    /**
     * @var string <p>集群实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>状态,<br>Init  创建中<br>Serving   运行中<br>Isolated   已隔离<br>Changing  变更中</p>
     */
    public $Status;

    /**
     * @var string <p>版本</p>
     */
    public $Version;

    /**
     * @var string <p>地域, ap-guangzhou</p>
     */
    public $Region;

    /**
     * @var string <p>可用区， ap-guangzhou-3</p>
     */
    public $Zone;

    /**
     * @var string <p>私有网络名称</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网名称</p>
     */
    public $SubnetId;

    /**
     * @var string <p>付费类型，&quot;hour&quot;, &quot;prepay&quot;</p>
     */
    public $PayMode;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var NodesSummary <p>数据节点描述信息</p>
     */
    public $MasterSummary;

    /**
     * @var NodesSummary <p>zookeeper节点描述信息</p>
     */
    public $CoreSummary;

    /**
     * @var string <p>高可用，&quot;true&quot; &quot;false&quot;</p>
     */
    public $HA;

    /**
     * @var integer <p>高可用类型：<br>0：非高可用<br>1：读高可用<br>2：读写高可用。</p>
     */
    public $HaType;

    /**
     * @var string <p>访问地址，例如 &quot;10.0.0.1:9000&quot;</p>
     */
    public $AccessInfo;

    /**
     * @var integer <p>记录ID，数值型</p>
     */
    public $Id;

    /**
     * @var integer <p>regionId, 表示地域</p>
     */
    public $RegionId;

    /**
     * @var string <p>可用区说明，例如 &quot;广州三区&quot;</p>
     */
    public $ZoneDesc;

    /**
     * @var string <p>错误流程说明信息</p>
     */
    public $FlowMsg;

    /**
     * @var string <p>状态描述，例如“运行中”等</p>
     */
    public $StatusDesc;

    /**
     * @var boolean <p>自动续费标记</p>
     */
    public $RenewFlag;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>监控信息</p>
     */
    public $Monitor;

    /**
     * @var boolean <p>是否开通日志</p>
     */
    public $HasClsTopic;

    /**
     * @var string <p>日志主题ID</p>
     */
    public $ClsTopicId;

    /**
     * @var string <p>日志集ID</p>
     */
    public $ClsLogSetId;

    /**
     * @var integer <p>是否支持xml配置管理</p>
     */
    public $EnableXMLConfig;

    /**
     * @var string <p>区域</p>
     */
    public $RegionDesc;

    /**
     * @var string <p>弹性网卡地址</p>
     */
    public $Eip;

    /**
     * @var integer <p>冷热分层系数</p>
     */
    public $CosMoveFactor;

    /**
     * @var string <p>external/local/yunti</p>
     */
    public $Kind;

    /**
     * @var string <p>cos桶</p>
     */
    public $CosBucketName;

    /**
     * @var boolean <p>cbs</p>
     */
    public $CanAttachCbs;

    /**
     * @var string <p>小版本</p>
     */
    public $BuildVersion;

    /**
     * @var string <p>组件信息<br>注：这里返回类型实际为map[string]struct类型，并非显示的string类型，可以参考“示例值”进行数据的解析。</p>
     */
    public $Components;

    /**
     * @var integer <p>判断审计日志表是否有catalog字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $IfExistCatalog;

    /**
     * @var array <p>页面特性，用于前端屏蔽一些页面入口</p>
     */
    public $Characteristic;

    /**
     * @var string <p>超时时间 单位s</p>
     */
    public $RestartTimeout;

    /**
     * @var string <p>内核优雅重启超时时间，如果为-1说明未设置</p>
     */
    public $GraceShutdownWaitSeconds;

    /**
     * @var integer <p>表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储</p>
     */
    public $CaseSensitive;

    /**
     * @var boolean <p>用户是否可以绑定安全组</p>
     */
    public $IsWhiteSGs;

    /**
     * @var array <p>已绑定的安全组信息</p>
     */
    public $BindSGs;

    /**
     * @var boolean <p>是否为多可用区</p>
     */
    public $EnableMultiZones;

    /**
     * @var string <p>用户可用区和子网信息</p>
     */
    public $UserNetworkInfos;

    /**
     * @var integer <p>是否启用冷热分层。0：未开启 1：已开启</p>
     */
    public $EnableCoolDown;

    /**
     * @var string <p>冷热分层使用COS桶</p>
     */
    public $CoolDownBucket;

    /**
     * @var InstanceDetail <p>实例扩展信息</p>
     */
    public $Details;

    /**
     * @var integer <p>是否启用DLC 0:关闭 1:开启</p>
     */
    public $EnableDlc;

    /**
     * @var integer <p>账户类型 0:普通用户 1:CAM用户</p>
     */
    public $AccountType;

    /**
     * @var integer <p>监控模式 0: 老监控 1：新监控</p>
     */
    public $MonitorMode;

    /**
     * @var NodesSummary <p>cn节点信息</p>
     */
    public $CNSummary;

    /**
     * @var integer <p>计算组个数</p>
     */
    public $ComputeGroupCount;

    /**
     * @var float <p>存算分离cos存储数据</p>
     */
    public $CosStorageSize;

    /**
     * @var boolean <p>存算分离的指标 当是true 不支持新建计算组</p>
     */
    public $IsMasterNonVM;

    /**
     * @var integer <p>Cos容量包大小</p>
     */
    public $CosPkgCapacity;

    /**
     * @var boolean <p>集群是否使用托管桶</p>
     */
    public $UseManagedBucket;

    /**
     * @var string <p>集群类型</p>
     */
    public $InstanceType;

    /**
     * @var string <p>对应主集群</p>
     */
    public $MasterInstance;

    /**
     * @var array <p>对应备集群</p>
     */
    public $SlaveInstances;

    /**
     * @var string <p>ccr服务部署节点ip</p>
     */
    public $SyncerIp;

    /**
     * @var integer <p>是否支持sql convertor</p>
     */
    public $EnableSqlConv;

    /**
     * @var string <p>集群时区，默认+08:00</p>
     */
    public $TimeZone;

    /**
     * @var string <p>缓存盘介质：任一计算组为单副本SSD即ELASTIC_REMOTE_SSD（不支持变配多可用区部署等），否则为默认计算组介质；非存算分离为空</p>
     */
    public $CacheDiskType;

    /**
     * @param string $InstanceId <p>集群实例ID, &quot;cdwdoris-xxxx&quot; 字符串类型</p>
     * @param string $InstanceName <p>集群实例名称</p>
     * @param string $Status <p>状态,<br>Init  创建中<br>Serving   运行中<br>Isolated   已隔离<br>Changing  变更中</p>
     * @param string $Version <p>版本</p>
     * @param string $Region <p>地域, ap-guangzhou</p>
     * @param string $Zone <p>可用区， ap-guangzhou-3</p>
     * @param string $VpcId <p>私有网络名称</p>
     * @param string $SubnetId <p>子网名称</p>
     * @param string $PayMode <p>付费类型，&quot;hour&quot;, &quot;prepay&quot;</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ExpireTime <p>过期时间</p>
     * @param NodesSummary $MasterSummary <p>数据节点描述信息</p>
     * @param NodesSummary $CoreSummary <p>zookeeper节点描述信息</p>
     * @param string $HA <p>高可用，&quot;true&quot; &quot;false&quot;</p>
     * @param integer $HaType <p>高可用类型：<br>0：非高可用<br>1：读高可用<br>2：读写高可用。</p>
     * @param string $AccessInfo <p>访问地址，例如 &quot;10.0.0.1:9000&quot;</p>
     * @param integer $Id <p>记录ID，数值型</p>
     * @param integer $RegionId <p>regionId, 表示地域</p>
     * @param string $ZoneDesc <p>可用区说明，例如 &quot;广州三区&quot;</p>
     * @param string $FlowMsg <p>错误流程说明信息</p>
     * @param string $StatusDesc <p>状态描述，例如“运行中”等</p>
     * @param boolean $RenewFlag <p>自动续费标记</p>
     * @param array $Tags <p>标签列表</p>
     * @param string $Monitor <p>监控信息</p>
     * @param boolean $HasClsTopic <p>是否开通日志</p>
     * @param string $ClsTopicId <p>日志主题ID</p>
     * @param string $ClsLogSetId <p>日志集ID</p>
     * @param integer $EnableXMLConfig <p>是否支持xml配置管理</p>
     * @param string $RegionDesc <p>区域</p>
     * @param string $Eip <p>弹性网卡地址</p>
     * @param integer $CosMoveFactor <p>冷热分层系数</p>
     * @param string $Kind <p>external/local/yunti</p>
     * @param string $CosBucketName <p>cos桶</p>
     * @param boolean $CanAttachCbs <p>cbs</p>
     * @param string $BuildVersion <p>小版本</p>
     * @param string $Components <p>组件信息<br>注：这里返回类型实际为map[string]struct类型，并非显示的string类型，可以参考“示例值”进行数据的解析。</p>
     * @param integer $IfExistCatalog <p>判断审计日志表是否有catalog字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Characteristic <p>页面特性，用于前端屏蔽一些页面入口</p>
     * @param string $RestartTimeout <p>超时时间 单位s</p>
     * @param string $GraceShutdownWaitSeconds <p>内核优雅重启超时时间，如果为-1说明未设置</p>
     * @param integer $CaseSensitive <p>表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储</p>
     * @param boolean $IsWhiteSGs <p>用户是否可以绑定安全组</p>
     * @param array $BindSGs <p>已绑定的安全组信息</p>
     * @param boolean $EnableMultiZones <p>是否为多可用区</p>
     * @param string $UserNetworkInfos <p>用户可用区和子网信息</p>
     * @param integer $EnableCoolDown <p>是否启用冷热分层。0：未开启 1：已开启</p>
     * @param string $CoolDownBucket <p>冷热分层使用COS桶</p>
     * @param InstanceDetail $Details <p>实例扩展信息</p>
     * @param integer $EnableDlc <p>是否启用DLC 0:关闭 1:开启</p>
     * @param integer $AccountType <p>账户类型 0:普通用户 1:CAM用户</p>
     * @param integer $MonitorMode <p>监控模式 0: 老监控 1：新监控</p>
     * @param NodesSummary $CNSummary <p>cn节点信息</p>
     * @param integer $ComputeGroupCount <p>计算组个数</p>
     * @param float $CosStorageSize <p>存算分离cos存储数据</p>
     * @param boolean $IsMasterNonVM <p>存算分离的指标 当是true 不支持新建计算组</p>
     * @param integer $CosPkgCapacity <p>Cos容量包大小</p>
     * @param boolean $UseManagedBucket <p>集群是否使用托管桶</p>
     * @param string $InstanceType <p>集群类型</p>
     * @param string $MasterInstance <p>对应主集群</p>
     * @param array $SlaveInstances <p>对应备集群</p>
     * @param string $SyncerIp <p>ccr服务部署节点ip</p>
     * @param integer $EnableSqlConv <p>是否支持sql convertor</p>
     * @param string $TimeZone <p>集群时区，默认+08:00</p>
     * @param string $CacheDiskType <p>缓存盘介质：任一计算组为单副本SSD即ELASTIC_REMOTE_SSD（不支持变配多可用区部署等），否则为默认计算组介质；非存算分离为空</p>
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

        if (array_key_exists("CoreSummary",$param) and $param["CoreSummary"] !== null) {
            $this->CoreSummary = new NodesSummary();
            $this->CoreSummary->deserialize($param["CoreSummary"]);
        }

        if (array_key_exists("HA",$param) and $param["HA"] !== null) {
            $this->HA = $param["HA"];
        }

        if (array_key_exists("HaType",$param) and $param["HaType"] !== null) {
            $this->HaType = $param["HaType"];
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

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CanAttachCbs",$param) and $param["CanAttachCbs"] !== null) {
            $this->CanAttachCbs = $param["CanAttachCbs"];
        }

        if (array_key_exists("BuildVersion",$param) and $param["BuildVersion"] !== null) {
            $this->BuildVersion = $param["BuildVersion"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = $param["Components"];
        }

        if (array_key_exists("IfExistCatalog",$param) and $param["IfExistCatalog"] !== null) {
            $this->IfExistCatalog = $param["IfExistCatalog"];
        }

        if (array_key_exists("Characteristic",$param) and $param["Characteristic"] !== null) {
            $this->Characteristic = $param["Characteristic"];
        }

        if (array_key_exists("RestartTimeout",$param) and $param["RestartTimeout"] !== null) {
            $this->RestartTimeout = $param["RestartTimeout"];
        }

        if (array_key_exists("GraceShutdownWaitSeconds",$param) and $param["GraceShutdownWaitSeconds"] !== null) {
            $this->GraceShutdownWaitSeconds = $param["GraceShutdownWaitSeconds"];
        }

        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("IsWhiteSGs",$param) and $param["IsWhiteSGs"] !== null) {
            $this->IsWhiteSGs = $param["IsWhiteSGs"];
        }

        if (array_key_exists("BindSGs",$param) and $param["BindSGs"] !== null) {
            $this->BindSGs = $param["BindSGs"];
        }

        if (array_key_exists("EnableMultiZones",$param) and $param["EnableMultiZones"] !== null) {
            $this->EnableMultiZones = $param["EnableMultiZones"];
        }

        if (array_key_exists("UserNetworkInfos",$param) and $param["UserNetworkInfos"] !== null) {
            $this->UserNetworkInfos = $param["UserNetworkInfos"];
        }

        if (array_key_exists("EnableCoolDown",$param) and $param["EnableCoolDown"] !== null) {
            $this->EnableCoolDown = $param["EnableCoolDown"];
        }

        if (array_key_exists("CoolDownBucket",$param) and $param["CoolDownBucket"] !== null) {
            $this->CoolDownBucket = $param["CoolDownBucket"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = new InstanceDetail();
            $this->Details->deserialize($param["Details"]);
        }

        if (array_key_exists("EnableDlc",$param) and $param["EnableDlc"] !== null) {
            $this->EnableDlc = $param["EnableDlc"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("MonitorMode",$param) and $param["MonitorMode"] !== null) {
            $this->MonitorMode = $param["MonitorMode"];
        }

        if (array_key_exists("CNSummary",$param) and $param["CNSummary"] !== null) {
            $this->CNSummary = new NodesSummary();
            $this->CNSummary->deserialize($param["CNSummary"]);
        }

        if (array_key_exists("ComputeGroupCount",$param) and $param["ComputeGroupCount"] !== null) {
            $this->ComputeGroupCount = $param["ComputeGroupCount"];
        }

        if (array_key_exists("CosStorageSize",$param) and $param["CosStorageSize"] !== null) {
            $this->CosStorageSize = $param["CosStorageSize"];
        }

        if (array_key_exists("IsMasterNonVM",$param) and $param["IsMasterNonVM"] !== null) {
            $this->IsMasterNonVM = $param["IsMasterNonVM"];
        }

        if (array_key_exists("CosPkgCapacity",$param) and $param["CosPkgCapacity"] !== null) {
            $this->CosPkgCapacity = $param["CosPkgCapacity"];
        }

        if (array_key_exists("UseManagedBucket",$param) and $param["UseManagedBucket"] !== null) {
            $this->UseManagedBucket = $param["UseManagedBucket"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MasterInstance",$param) and $param["MasterInstance"] !== null) {
            $this->MasterInstance = $param["MasterInstance"];
        }

        if (array_key_exists("SlaveInstances",$param) and $param["SlaveInstances"] !== null) {
            $this->SlaveInstances = $param["SlaveInstances"];
        }

        if (array_key_exists("SyncerIp",$param) and $param["SyncerIp"] !== null) {
            $this->SyncerIp = $param["SyncerIp"];
        }

        if (array_key_exists("EnableSqlConv",$param) and $param["EnableSqlConv"] !== null) {
            $this->EnableSqlConv = $param["EnableSqlConv"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("CacheDiskType",$param) and $param["CacheDiskType"] !== null) {
            $this->CacheDiskType = $param["CacheDiskType"];
        }
    }
}
