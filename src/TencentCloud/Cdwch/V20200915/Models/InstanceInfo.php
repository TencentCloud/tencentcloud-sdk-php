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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例描述信息
 *
 * @method string getInstanceId() 获取<p>集群实例ID, &quot;cdw-xxxx&quot; 字符串类型</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群实例ID, &quot;cdw-xxxx&quot; 字符串类型</p>
 * @method string getInstanceName() 获取<p>集群实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>集群实例名称</p>
 * @method string getStatus() 获取<p>状态,<br>Init 创建中; Serving 运行中；<br>Deleted已销毁；Deleting 销毁中；<br>Modify 集群变更中；</p>
 * @method void setStatus(string $Status) 设置<p>状态,<br>Init 创建中; Serving 运行中；<br>Deleted已销毁；Deleting 销毁中；<br>Modify 集群变更中；</p>
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
 * @method NodesSummary getCommonSummary() 获取<p>zookeeper节点描述信息</p>
 * @method void setCommonSummary(NodesSummary $CommonSummary) 设置<p>zookeeper节点描述信息</p>
 * @method string getHA() 获取<p>高可用,&quot;true&quot; &quot;false&quot;</p>
 * @method void setHA(string $HA) 设置<p>高可用,&quot;true&quot; &quot;false&quot;</p>
 * @method string getAccessInfo() 获取<p>访问地址，例如 &quot;10.0.0.1:9000&quot;</p>
 * @method void setAccessInfo(string $AccessInfo) 设置<p>访问地址，例如 &quot;10.0.0.1:9000&quot;</p>
 * @method integer getId() 获取<p>记录ID，数值型</p>
 * @method void setId(integer $Id) 设置<p>记录ID，数值型</p>
 * @method integer getRegionId() 获取<p>regionId, 表示地域</p>
 * @method void setRegionId(integer $RegionId) 设置<p>regionId, 表示地域</p>
 * @method string getZoneDesc() 获取<p>可用区说明，例如 &quot;广州二区&quot;</p>
 * @method void setZoneDesc(string $ZoneDesc) 设置<p>可用区说明，例如 &quot;广州二区&quot;</p>
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
 * @method boolean getIsElastic() 获取<p>是否弹性ck</p>
 * @method void setIsElastic(boolean $IsElastic) 设置<p>是否弹性ck</p>
 * @method InstanceStateInfo getInstanceStateInfo() 获取<p>集群详细状态</p>
 * @method void setInstanceStateInfo(InstanceStateInfo $InstanceStateInfo) 设置<p>集群详细状态</p>
 * @method boolean getHAZk() 获取<p>ZK高可用</p>
 * @method void setHAZk(boolean $HAZk) 设置<p>ZK高可用</p>
 * @method integer getMountDiskType() 获取<p>挂载盘,默认0:没有类型；1:裸盘;2:lvm</p>
 * @method void setMountDiskType(integer $MountDiskType) 设置<p>挂载盘,默认0:没有类型；1:裸盘;2:lvm</p>
 * @method string getCHProxyVip() 获取<p>chproxy连接ip</p>
 * @method void setCHProxyVip(string $CHProxyVip) 设置<p>chproxy连接ip</p>
 * @method string getCosBucketName() 获取<p>cos buket的名字</p>
 * @method void setCosBucketName(string $CosBucketName) 设置<p>cos buket的名字</p>
 * @method boolean getCanAttachCbs() 获取<p>是否可以挂载云盘</p>
 * @method void setCanAttachCbs(boolean $CanAttachCbs) 设置<p>是否可以挂载云盘</p>
 * @method boolean getCanAttachCbsLvm() 获取<p>是否可以挂载云盘阵列</p>
 * @method void setCanAttachCbsLvm(boolean $CanAttachCbsLvm) 设置<p>是否可以挂载云盘阵列</p>
 * @method boolean getCanAttachCos() 获取<p>是否可以挂载cos</p>
 * @method void setCanAttachCos(boolean $CanAttachCos) 设置<p>是否可以挂载cos</p>
 * @method array getComponents() 获取<p>服务信息</p>
 * @method void setComponents(array $Components) 设置<p>服务信息</p>
 * @method string getUpgradeVersions() 获取<p>可升级的内核版本</p>
 * @method void setUpgradeVersions(string $UpgradeVersions) 设置<p>可升级的内核版本</p>
 * @method string getEsIndexId() 获取<p>ex-index</p>
 * @method void setEsIndexId(string $EsIndexId) 设置<p>ex-index</p>
 * @method string getEsIndexUsername() 获取<p>username</p>
 * @method void setEsIndexUsername(string $EsIndexUsername) 设置<p>username</p>
 * @method string getEsIndexPassword() 获取<p>password</p>
 * @method void setEsIndexPassword(string $EsIndexPassword) 设置<p>password</p>
 * @method boolean getHasEsIndex() 获取<p>true</p>
 * @method void setHasEsIndex(boolean $HasEsIndex) 设置<p>true</p>
 * @method boolean getIsSecondaryZone() 获取<p>true</p>
 * @method void setIsSecondaryZone(boolean $IsSecondaryZone) 设置<p>true</p>
 * @method string getSecondaryZoneInfo() 获取<p>desc</p>
 * @method void setSecondaryZoneInfo(string $SecondaryZoneInfo) 设置<p>desc</p>
 * @method boolean getClickHouseKeeper() 获取<p>是否clickhouse-keeper</p>
 * @method void setClickHouseKeeper(boolean $ClickHouseKeeper) 设置<p>是否clickhouse-keeper</p>
 * @method InstanceDetail getDetails() 获取<p>实例扩展信息</p>
 * @method void setDetails(InstanceDetail $Details) 设置<p>实例扩展信息</p>
 * @method boolean getIsWhiteSGs() 获取<p>安全组白名单</p>
 * @method void setIsWhiteSGs(boolean $IsWhiteSGs) 设置<p>安全组白名单</p>
 * @method array getBindSGs() 获取<p>绑定的安全组</p>
 * @method void setBindSGs(array $BindSGs) 设置<p>绑定的安全组</p>
 * @method boolean getHasPublicCloudClb() 获取<p>是否开启公网clb</p>
 * @method void setHasPublicCloudClb(boolean $HasPublicCloudClb) 设置<p>是否开启公网clb</p>
 * @method string getUpgradeZkVersions() 获取<p>可升级的zk版本</p>
 * @method void setUpgradeZkVersions(string $UpgradeZkVersions) 设置<p>可升级的zk版本</p>
 * @method string getShowRip() 获取<p>是否显示rip</p>
 * @method void setShowRip(string $ShowRip) 设置<p>是否显示rip</p>
 * @method string getInstanceType() 获取<p>实例类型：标准型 standard，无keeper节点类型noKeeper；</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型：标准型 standard，无keeper节点类型noKeeper；</p>
 * @method string getEnableConfigKeyValue() 获取<p>keyvalue视图</p>
 * @method void setEnableConfigKeyValue(string $EnableConfigKeyValue) 设置<p>keyvalue视图</p>
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string <p>集群实例ID, &quot;cdw-xxxx&quot; 字符串类型</p>
     */
    public $InstanceId;

    /**
     * @var string <p>集群实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>状态,<br>Init 创建中; Serving 运行中；<br>Deleted已销毁；Deleting 销毁中；<br>Modify 集群变更中；</p>
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
    public $CommonSummary;

    /**
     * @var string <p>高可用,&quot;true&quot; &quot;false&quot;</p>
     */
    public $HA;

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
     * @var string <p>可用区说明，例如 &quot;广州二区&quot;</p>
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
     * @var boolean <p>是否弹性ck</p>
     */
    public $IsElastic;

    /**
     * @var InstanceStateInfo <p>集群详细状态</p>
     */
    public $InstanceStateInfo;

    /**
     * @var boolean <p>ZK高可用</p>
     */
    public $HAZk;

    /**
     * @var integer <p>挂载盘,默认0:没有类型；1:裸盘;2:lvm</p>
     */
    public $MountDiskType;

    /**
     * @var string <p>chproxy连接ip</p>
     */
    public $CHProxyVip;

    /**
     * @var string <p>cos buket的名字</p>
     */
    public $CosBucketName;

    /**
     * @var boolean <p>是否可以挂载云盘</p>
     */
    public $CanAttachCbs;

    /**
     * @var boolean <p>是否可以挂载云盘阵列</p>
     */
    public $CanAttachCbsLvm;

    /**
     * @var boolean <p>是否可以挂载cos</p>
     */
    public $CanAttachCos;

    /**
     * @var array <p>服务信息</p>
     */
    public $Components;

    /**
     * @var string <p>可升级的内核版本</p>
     */
    public $UpgradeVersions;

    /**
     * @var string <p>ex-index</p>
     */
    public $EsIndexId;

    /**
     * @var string <p>username</p>
     */
    public $EsIndexUsername;

    /**
     * @var string <p>password</p>
     */
    public $EsIndexPassword;

    /**
     * @var boolean <p>true</p>
     */
    public $HasEsIndex;

    /**
     * @var boolean <p>true</p>
     */
    public $IsSecondaryZone;

    /**
     * @var string <p>desc</p>
     */
    public $SecondaryZoneInfo;

    /**
     * @var boolean <p>是否clickhouse-keeper</p>
     */
    public $ClickHouseKeeper;

    /**
     * @var InstanceDetail <p>实例扩展信息</p>
     */
    public $Details;

    /**
     * @var boolean <p>安全组白名单</p>
     */
    public $IsWhiteSGs;

    /**
     * @var array <p>绑定的安全组</p>
     */
    public $BindSGs;

    /**
     * @var boolean <p>是否开启公网clb</p>
     */
    public $HasPublicCloudClb;

    /**
     * @var string <p>可升级的zk版本</p>
     */
    public $UpgradeZkVersions;

    /**
     * @var string <p>是否显示rip</p>
     */
    public $ShowRip;

    /**
     * @var string <p>实例类型：标准型 standard，无keeper节点类型noKeeper；</p>
     */
    public $InstanceType;

    /**
     * @var string <p>keyvalue视图</p>
     */
    public $EnableConfigKeyValue;

    /**
     * @param string $InstanceId <p>集群实例ID, &quot;cdw-xxxx&quot; 字符串类型</p>
     * @param string $InstanceName <p>集群实例名称</p>
     * @param string $Status <p>状态,<br>Init 创建中; Serving 运行中；<br>Deleted已销毁；Deleting 销毁中；<br>Modify 集群变更中；</p>
     * @param string $Version <p>版本</p>
     * @param string $Region <p>地域, ap-guangzhou</p>
     * @param string $Zone <p>可用区， ap-guangzhou-3</p>
     * @param string $VpcId <p>私有网络名称</p>
     * @param string $SubnetId <p>子网名称</p>
     * @param string $PayMode <p>付费类型，&quot;hour&quot;, &quot;prepay&quot;</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ExpireTime <p>过期时间</p>
     * @param NodesSummary $MasterSummary <p>数据节点描述信息</p>
     * @param NodesSummary $CommonSummary <p>zookeeper节点描述信息</p>
     * @param string $HA <p>高可用,&quot;true&quot; &quot;false&quot;</p>
     * @param string $AccessInfo <p>访问地址，例如 &quot;10.0.0.1:9000&quot;</p>
     * @param integer $Id <p>记录ID，数值型</p>
     * @param integer $RegionId <p>regionId, 表示地域</p>
     * @param string $ZoneDesc <p>可用区说明，例如 &quot;广州二区&quot;</p>
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
     * @param boolean $IsElastic <p>是否弹性ck</p>
     * @param InstanceStateInfo $InstanceStateInfo <p>集群详细状态</p>
     * @param boolean $HAZk <p>ZK高可用</p>
     * @param integer $MountDiskType <p>挂载盘,默认0:没有类型；1:裸盘;2:lvm</p>
     * @param string $CHProxyVip <p>chproxy连接ip</p>
     * @param string $CosBucketName <p>cos buket的名字</p>
     * @param boolean $CanAttachCbs <p>是否可以挂载云盘</p>
     * @param boolean $CanAttachCbsLvm <p>是否可以挂载云盘阵列</p>
     * @param boolean $CanAttachCos <p>是否可以挂载cos</p>
     * @param array $Components <p>服务信息</p>
     * @param string $UpgradeVersions <p>可升级的内核版本</p>
     * @param string $EsIndexId <p>ex-index</p>
     * @param string $EsIndexUsername <p>username</p>
     * @param string $EsIndexPassword <p>password</p>
     * @param boolean $HasEsIndex <p>true</p>
     * @param boolean $IsSecondaryZone <p>true</p>
     * @param string $SecondaryZoneInfo <p>desc</p>
     * @param boolean $ClickHouseKeeper <p>是否clickhouse-keeper</p>
     * @param InstanceDetail $Details <p>实例扩展信息</p>
     * @param boolean $IsWhiteSGs <p>安全组白名单</p>
     * @param array $BindSGs <p>绑定的安全组</p>
     * @param boolean $HasPublicCloudClb <p>是否开启公网clb</p>
     * @param string $UpgradeZkVersions <p>可升级的zk版本</p>
     * @param string $ShowRip <p>是否显示rip</p>
     * @param string $InstanceType <p>实例类型：标准型 standard，无keeper节点类型noKeeper；</p>
     * @param string $EnableConfigKeyValue <p>keyvalue视图</p>
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

        if (array_key_exists("EsIndexId",$param) and $param["EsIndexId"] !== null) {
            $this->EsIndexId = $param["EsIndexId"];
        }

        if (array_key_exists("EsIndexUsername",$param) and $param["EsIndexUsername"] !== null) {
            $this->EsIndexUsername = $param["EsIndexUsername"];
        }

        if (array_key_exists("EsIndexPassword",$param) and $param["EsIndexPassword"] !== null) {
            $this->EsIndexPassword = $param["EsIndexPassword"];
        }

        if (array_key_exists("HasEsIndex",$param) and $param["HasEsIndex"] !== null) {
            $this->HasEsIndex = $param["HasEsIndex"];
        }

        if (array_key_exists("IsSecondaryZone",$param) and $param["IsSecondaryZone"] !== null) {
            $this->IsSecondaryZone = $param["IsSecondaryZone"];
        }

        if (array_key_exists("SecondaryZoneInfo",$param) and $param["SecondaryZoneInfo"] !== null) {
            $this->SecondaryZoneInfo = $param["SecondaryZoneInfo"];
        }

        if (array_key_exists("ClickHouseKeeper",$param) and $param["ClickHouseKeeper"] !== null) {
            $this->ClickHouseKeeper = $param["ClickHouseKeeper"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = new InstanceDetail();
            $this->Details->deserialize($param["Details"]);
        }

        if (array_key_exists("IsWhiteSGs",$param) and $param["IsWhiteSGs"] !== null) {
            $this->IsWhiteSGs = $param["IsWhiteSGs"];
        }

        if (array_key_exists("BindSGs",$param) and $param["BindSGs"] !== null) {
            $this->BindSGs = $param["BindSGs"];
        }

        if (array_key_exists("HasPublicCloudClb",$param) and $param["HasPublicCloudClb"] !== null) {
            $this->HasPublicCloudClb = $param["HasPublicCloudClb"];
        }

        if (array_key_exists("UpgradeZkVersions",$param) and $param["UpgradeZkVersions"] !== null) {
            $this->UpgradeZkVersions = $param["UpgradeZkVersions"];
        }

        if (array_key_exists("ShowRip",$param) and $param["ShowRip"] !== null) {
            $this->ShowRip = $param["ShowRip"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("EnableConfigKeyValue",$param) and $param["EnableConfigKeyValue"] !== null) {
            $this->EnableConfigKeyValue = $param["EnableConfigKeyValue"];
        }
    }
}
