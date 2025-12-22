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
 * @method string getInstanceId() 获取集群实例ID, "cdwdoris-xxxx" 字符串类型
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID, "cdwdoris-xxxx" 字符串类型
 * @method string getInstanceName() 获取集群实例名称
 * @method void setInstanceName(string $InstanceName) 设置集群实例名称
 * @method string getStatus() 获取状态,
Init  创建中
Serving   运行中
Isolated   已隔离
Changing  变更中
 * @method void setStatus(string $Status) 设置状态,
Init  创建中
Serving   运行中
Isolated   已隔离
Changing  变更中
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 * @method string getRegion() 获取地域, ap-guangzhou
 * @method void setRegion(string $Region) 设置地域, ap-guangzhou
 * @method string getZone() 获取可用区， ap-guangzhou-3
 * @method void setZone(string $Zone) 设置可用区， ap-guangzhou-3
 * @method string getVpcId() 获取私有网络名称
 * @method void setVpcId(string $VpcId) 设置私有网络名称
 * @method string getSubnetId() 获取子网名称
 * @method void setSubnetId(string $SubnetId) 设置子网名称
 * @method string getPayMode() 获取付费类型，"hour", "prepay"
 * @method void setPayMode(string $PayMode) 设置付费类型，"hour", "prepay"
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method NodesSummary getMasterSummary() 获取数据节点描述信息
 * @method void setMasterSummary(NodesSummary $MasterSummary) 设置数据节点描述信息
 * @method NodesSummary getCoreSummary() 获取zookeeper节点描述信息
 * @method void setCoreSummary(NodesSummary $CoreSummary) 设置zookeeper节点描述信息
 * @method string getHA() 获取高可用，"true" "false"
 * @method void setHA(string $HA) 设置高可用，"true" "false"
 * @method integer getHaType() 获取高可用类型：
0：非高可用
1：读高可用
2：读写高可用。
 * @method void setHaType(integer $HaType) 设置高可用类型：
0：非高可用
1：读高可用
2：读写高可用。
 * @method string getAccessInfo() 获取访问地址，例如 "10.0.0.1:9000"
 * @method void setAccessInfo(string $AccessInfo) 设置访问地址，例如 "10.0.0.1:9000"
 * @method integer getId() 获取记录ID，数值型
 * @method void setId(integer $Id) 设置记录ID，数值型
 * @method integer getRegionId() 获取regionId, 表示地域
 * @method void setRegionId(integer $RegionId) 设置regionId, 表示地域
 * @method string getZoneDesc() 获取可用区说明，例如 "广州三区"
 * @method void setZoneDesc(string $ZoneDesc) 设置可用区说明，例如 "广州三区"
 * @method string getFlowMsg() 获取错误流程说明信息
 * @method void setFlowMsg(string $FlowMsg) 设置错误流程说明信息
 * @method string getStatusDesc() 获取状态描述，例如“运行中”等
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述，例如“运行中”等
 * @method boolean getRenewFlag() 获取自动续费标记
 * @method void setRenewFlag(boolean $RenewFlag) 设置自动续费标记
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method string getMonitor() 获取监控信息
 * @method void setMonitor(string $Monitor) 设置监控信息
 * @method boolean getHasClsTopic() 获取是否开通日志
 * @method void setHasClsTopic(boolean $HasClsTopic) 设置是否开通日志
 * @method string getClsTopicId() 获取日志主题ID
 * @method void setClsTopicId(string $ClsTopicId) 设置日志主题ID
 * @method string getClsLogSetId() 获取日志集ID
 * @method void setClsLogSetId(string $ClsLogSetId) 设置日志集ID
 * @method integer getEnableXMLConfig() 获取是否支持xml配置管理
 * @method void setEnableXMLConfig(integer $EnableXMLConfig) 设置是否支持xml配置管理
 * @method string getRegionDesc() 获取区域
 * @method void setRegionDesc(string $RegionDesc) 设置区域
 * @method string getEip() 获取弹性网卡地址
 * @method void setEip(string $Eip) 设置弹性网卡地址
 * @method integer getCosMoveFactor() 获取冷热分层系数
 * @method void setCosMoveFactor(integer $CosMoveFactor) 设置冷热分层系数
 * @method string getKind() 获取external/local/yunti
 * @method void setKind(string $Kind) 设置external/local/yunti
 * @method string getCosBucketName() 获取cos桶
 * @method void setCosBucketName(string $CosBucketName) 设置cos桶
 * @method boolean getCanAttachCbs() 获取cbs
 * @method void setCanAttachCbs(boolean $CanAttachCbs) 设置cbs
 * @method string getBuildVersion() 获取小版本
 * @method void setBuildVersion(string $BuildVersion) 设置小版本
 * @method string getComponents() 获取组件信息
注：这里返回类型实际为map[string]struct类型，并非显示的string类型，可以参考“示例值”进行数据的解析。
 * @method void setComponents(string $Components) 设置组件信息
注：这里返回类型实际为map[string]struct类型，并非显示的string类型，可以参考“示例值”进行数据的解析。
 * @method integer getIfExistCatalog() 获取判断审计日志表是否有catalog字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIfExistCatalog(integer $IfExistCatalog) 设置判断审计日志表是否有catalog字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCharacteristic() 获取页面特性，用于前端屏蔽一些页面入口
 * @method void setCharacteristic(array $Characteristic) 设置页面特性，用于前端屏蔽一些页面入口
 * @method string getRestartTimeout() 获取超时时间 单位s
 * @method void setRestartTimeout(string $RestartTimeout) 设置超时时间 单位s
 * @method string getGraceShutdownWaitSeconds() 获取内核优雅重启超时时间，如果为-1说明未设置
 * @method void setGraceShutdownWaitSeconds(string $GraceShutdownWaitSeconds) 设置内核优雅重启超时时间，如果为-1说明未设置
 * @method integer getCaseSensitive() 获取表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储
 * @method void setCaseSensitive(integer $CaseSensitive) 设置表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储
 * @method boolean getIsWhiteSGs() 获取用户是否可以绑定安全组
 * @method void setIsWhiteSGs(boolean $IsWhiteSGs) 设置用户是否可以绑定安全组
 * @method array getBindSGs() 获取已绑定的安全组信息
 * @method void setBindSGs(array $BindSGs) 设置已绑定的安全组信息
 * @method boolean getEnableMultiZones() 获取是否为多可用区
 * @method void setEnableMultiZones(boolean $EnableMultiZones) 设置是否为多可用区
 * @method string getUserNetworkInfos() 获取用户可用区和子网信息
 * @method void setUserNetworkInfos(string $UserNetworkInfos) 设置用户可用区和子网信息
 * @method integer getEnableCoolDown() 获取是否启用冷热分层。0：未开启 1：已开启
 * @method void setEnableCoolDown(integer $EnableCoolDown) 设置是否启用冷热分层。0：未开启 1：已开启
 * @method string getCoolDownBucket() 获取冷热分层使用COS桶
 * @method void setCoolDownBucket(string $CoolDownBucket) 设置冷热分层使用COS桶
 * @method InstanceDetail getDetails() 获取实例扩展信息
 * @method void setDetails(InstanceDetail $Details) 设置实例扩展信息
 * @method integer getEnableDlc() 获取是否启用DLC 0:关闭 1:开启
 * @method void setEnableDlc(integer $EnableDlc) 设置是否启用DLC 0:关闭 1:开启
 * @method integer getAccountType() 获取账户类型 0:普通用户 1:CAM用户
 * @method void setAccountType(integer $AccountType) 设置账户类型 0:普通用户 1:CAM用户
 * @method integer getMonitorMode() 获取监控模式 0: 老监控 1：新监控
 * @method void setMonitorMode(integer $MonitorMode) 设置监控模式 0: 老监控 1：新监控
 * @method NodesSummary getCNSummary() 获取cn节点信息
 * @method void setCNSummary(NodesSummary $CNSummary) 设置cn节点信息
 * @method integer getComputeGroupCount() 获取计算组个数
 * @method void setComputeGroupCount(integer $ComputeGroupCount) 设置计算组个数
 * @method float getCosStorageSize() 获取存算分离cos存储数据
 * @method void setCosStorageSize(float $CosStorageSize) 设置存算分离cos存储数据
 * @method boolean getIsMasterNonVM() 获取存算分离的指标 当是true 不支持新建计算组
 * @method void setIsMasterNonVM(boolean $IsMasterNonVM) 设置存算分离的指标 当是true 不支持新建计算组
 * @method integer getCosPkgCapacity() 获取Cos容量包大小
 * @method void setCosPkgCapacity(integer $CosPkgCapacity) 设置Cos容量包大小
 * @method boolean getUseManagedBucket() 获取集群是否使用托管桶
 * @method void setUseManagedBucket(boolean $UseManagedBucket) 设置集群是否使用托管桶
 * @method string getInstanceType() 获取集群类型
 * @method void setInstanceType(string $InstanceType) 设置集群类型
 * @method string getMasterInstance() 获取对应主集群
 * @method void setMasterInstance(string $MasterInstance) 设置对应主集群
 * @method array getSlaveInstances() 获取对应备集群
 * @method void setSlaveInstances(array $SlaveInstances) 设置对应备集群
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string 集群实例ID, "cdwdoris-xxxx" 字符串类型
     */
    public $InstanceId;

    /**
     * @var string 集群实例名称
     */
    public $InstanceName;

    /**
     * @var string 状态,
Init  创建中
Serving   运行中
Isolated   已隔离
Changing  变更中
     */
    public $Status;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @var string 地域, ap-guangzhou
     */
    public $Region;

    /**
     * @var string 可用区， ap-guangzhou-3
     */
    public $Zone;

    /**
     * @var string 私有网络名称
     */
    public $VpcId;

    /**
     * @var string 子网名称
     */
    public $SubnetId;

    /**
     * @var string 付费类型，"hour", "prepay"
     */
    public $PayMode;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var NodesSummary 数据节点描述信息
     */
    public $MasterSummary;

    /**
     * @var NodesSummary zookeeper节点描述信息
     */
    public $CoreSummary;

    /**
     * @var string 高可用，"true" "false"
     */
    public $HA;

    /**
     * @var integer 高可用类型：
0：非高可用
1：读高可用
2：读写高可用。
     */
    public $HaType;

    /**
     * @var string 访问地址，例如 "10.0.0.1:9000"
     */
    public $AccessInfo;

    /**
     * @var integer 记录ID，数值型
     */
    public $Id;

    /**
     * @var integer regionId, 表示地域
     */
    public $RegionId;

    /**
     * @var string 可用区说明，例如 "广州三区"
     */
    public $ZoneDesc;

    /**
     * @var string 错误流程说明信息
     */
    public $FlowMsg;

    /**
     * @var string 状态描述，例如“运行中”等
     */
    public $StatusDesc;

    /**
     * @var boolean 自动续费标记
     */
    public $RenewFlag;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var string 监控信息
     */
    public $Monitor;

    /**
     * @var boolean 是否开通日志
     */
    public $HasClsTopic;

    /**
     * @var string 日志主题ID
     */
    public $ClsTopicId;

    /**
     * @var string 日志集ID
     */
    public $ClsLogSetId;

    /**
     * @var integer 是否支持xml配置管理
     */
    public $EnableXMLConfig;

    /**
     * @var string 区域
     */
    public $RegionDesc;

    /**
     * @var string 弹性网卡地址
     */
    public $Eip;

    /**
     * @var integer 冷热分层系数
     */
    public $CosMoveFactor;

    /**
     * @var string external/local/yunti
     */
    public $Kind;

    /**
     * @var string cos桶
     */
    public $CosBucketName;

    /**
     * @var boolean cbs
     */
    public $CanAttachCbs;

    /**
     * @var string 小版本
     */
    public $BuildVersion;

    /**
     * @var string 组件信息
注：这里返回类型实际为map[string]struct类型，并非显示的string类型，可以参考“示例值”进行数据的解析。
     */
    public $Components;

    /**
     * @var integer 判断审计日志表是否有catalog字段
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $IfExistCatalog;

    /**
     * @var array 页面特性，用于前端屏蔽一些页面入口
     */
    public $Characteristic;

    /**
     * @var string 超时时间 单位s
     */
    public $RestartTimeout;

    /**
     * @var string 内核优雅重启超时时间，如果为-1说明未设置
     */
    public $GraceShutdownWaitSeconds;

    /**
     * @var integer 表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储
     */
    public $CaseSensitive;

    /**
     * @var boolean 用户是否可以绑定安全组
     */
    public $IsWhiteSGs;

    /**
     * @var array 已绑定的安全组信息
     */
    public $BindSGs;

    /**
     * @var boolean 是否为多可用区
     */
    public $EnableMultiZones;

    /**
     * @var string 用户可用区和子网信息
     */
    public $UserNetworkInfos;

    /**
     * @var integer 是否启用冷热分层。0：未开启 1：已开启
     */
    public $EnableCoolDown;

    /**
     * @var string 冷热分层使用COS桶
     */
    public $CoolDownBucket;

    /**
     * @var InstanceDetail 实例扩展信息
     */
    public $Details;

    /**
     * @var integer 是否启用DLC 0:关闭 1:开启
     */
    public $EnableDlc;

    /**
     * @var integer 账户类型 0:普通用户 1:CAM用户
     */
    public $AccountType;

    /**
     * @var integer 监控模式 0: 老监控 1：新监控
     */
    public $MonitorMode;

    /**
     * @var NodesSummary cn节点信息
     */
    public $CNSummary;

    /**
     * @var integer 计算组个数
     */
    public $ComputeGroupCount;

    /**
     * @var float 存算分离cos存储数据
     */
    public $CosStorageSize;

    /**
     * @var boolean 存算分离的指标 当是true 不支持新建计算组
     */
    public $IsMasterNonVM;

    /**
     * @var integer Cos容量包大小
     */
    public $CosPkgCapacity;

    /**
     * @var boolean 集群是否使用托管桶
     */
    public $UseManagedBucket;

    /**
     * @var string 集群类型
     */
    public $InstanceType;

    /**
     * @var string 对应主集群
     */
    public $MasterInstance;

    /**
     * @var array 对应备集群
     */
    public $SlaveInstances;

    /**
     * @param string $InstanceId 集群实例ID, "cdwdoris-xxxx" 字符串类型
     * @param string $InstanceName 集群实例名称
     * @param string $Status 状态,
Init  创建中
Serving   运行中
Isolated   已隔离
Changing  变更中
     * @param string $Version 版本
     * @param string $Region 地域, ap-guangzhou
     * @param string $Zone 可用区， ap-guangzhou-3
     * @param string $VpcId 私有网络名称
     * @param string $SubnetId 子网名称
     * @param string $PayMode 付费类型，"hour", "prepay"
     * @param string $CreateTime 创建时间
     * @param string $ExpireTime 过期时间
     * @param NodesSummary $MasterSummary 数据节点描述信息
     * @param NodesSummary $CoreSummary zookeeper节点描述信息
     * @param string $HA 高可用，"true" "false"
     * @param integer $HaType 高可用类型：
0：非高可用
1：读高可用
2：读写高可用。
     * @param string $AccessInfo 访问地址，例如 "10.0.0.1:9000"
     * @param integer $Id 记录ID，数值型
     * @param integer $RegionId regionId, 表示地域
     * @param string $ZoneDesc 可用区说明，例如 "广州三区"
     * @param string $FlowMsg 错误流程说明信息
     * @param string $StatusDesc 状态描述，例如“运行中”等
     * @param boolean $RenewFlag 自动续费标记
     * @param array $Tags 标签列表
     * @param string $Monitor 监控信息
     * @param boolean $HasClsTopic 是否开通日志
     * @param string $ClsTopicId 日志主题ID
     * @param string $ClsLogSetId 日志集ID
     * @param integer $EnableXMLConfig 是否支持xml配置管理
     * @param string $RegionDesc 区域
     * @param string $Eip 弹性网卡地址
     * @param integer $CosMoveFactor 冷热分层系数
     * @param string $Kind external/local/yunti
     * @param string $CosBucketName cos桶
     * @param boolean $CanAttachCbs cbs
     * @param string $BuildVersion 小版本
     * @param string $Components 组件信息
注：这里返回类型实际为map[string]struct类型，并非显示的string类型，可以参考“示例值”进行数据的解析。
     * @param integer $IfExistCatalog 判断审计日志表是否有catalog字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Characteristic 页面特性，用于前端屏蔽一些页面入口
     * @param string $RestartTimeout 超时时间 单位s
     * @param string $GraceShutdownWaitSeconds 内核优雅重启超时时间，如果为-1说明未设置
     * @param integer $CaseSensitive 表名大小写是否敏感，0：敏感；1：不敏感，以小写进行比较；2：不敏感，表名改为以小写存储
     * @param boolean $IsWhiteSGs 用户是否可以绑定安全组
     * @param array $BindSGs 已绑定的安全组信息
     * @param boolean $EnableMultiZones 是否为多可用区
     * @param string $UserNetworkInfos 用户可用区和子网信息
     * @param integer $EnableCoolDown 是否启用冷热分层。0：未开启 1：已开启
     * @param string $CoolDownBucket 冷热分层使用COS桶
     * @param InstanceDetail $Details 实例扩展信息
     * @param integer $EnableDlc 是否启用DLC 0:关闭 1:开启
     * @param integer $AccountType 账户类型 0:普通用户 1:CAM用户
     * @param integer $MonitorMode 监控模式 0: 老监控 1：新监控
     * @param NodesSummary $CNSummary cn节点信息
     * @param integer $ComputeGroupCount 计算组个数
     * @param float $CosStorageSize 存算分离cos存储数据
     * @param boolean $IsMasterNonVM 存算分离的指标 当是true 不支持新建计算组
     * @param integer $CosPkgCapacity Cos容量包大小
     * @param boolean $UseManagedBucket 集群是否使用托管桶
     * @param string $InstanceType 集群类型
     * @param string $MasterInstance 对应主集群
     * @param array $SlaveInstances 对应备集群
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
    }
}
