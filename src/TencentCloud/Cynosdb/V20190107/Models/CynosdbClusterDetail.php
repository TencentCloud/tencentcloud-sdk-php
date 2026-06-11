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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群详情详细信息
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getPhysicalZone() 获取<p>物理可用区</p>
 * @method void setPhysicalZone(string $PhysicalZone) 设置<p>物理可用区</p>
 * @method string getStatus() 获取<p>状态，支持的值如下：</p><ul><li>creating：创建中</li><li>running：运行中</li><li>isolating：隔离中</li><li>isolated：已隔离</li><li>activating：从回收站重新恢复</li><li>offlining：下线中</li><li>offlined：已下线</li><li>deleting：删除中</li><li>deleted：已删除</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态，支持的值如下：</p><ul><li>creating：创建中</li><li>running：运行中</li><li>isolating：隔离中</li><li>isolated：已隔离</li><li>activating：从回收站重新恢复</li><li>offlining：下线中</li><li>offlined：已下线</li><li>deleting：删除中</li><li>deleted：已删除</li></ul>
 * @method string getStatusDesc() 获取<p>状态描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>状态描述</p>
 * @method string getServerlessStatus() 获取<p>当Db类型为SERVERLESS时，serverless集群状态，可选值:<br>resume<br>resuming<br>pause<br>pausing</p>
 * @method void setServerlessStatus(string $ServerlessStatus) 设置<p>当Db类型为SERVERLESS时，serverless集群状态，可选值:<br>resume<br>resuming<br>pause<br>pausing</p>
 * @method string getStorageId() 获取<p>存储Id</p>
 * @method void setStorageId(string $StorageId) 设置<p>存储Id</p>
 * @method integer getStorage() 获取<p>存储大小，单位为G</p>
 * @method void setStorage(integer $Storage) 设置<p>存储大小，单位为G</p>
 * @method integer getMaxStorageSize() 获取<p>最大存储规格，单位为G</p>
 * @method void setMaxStorageSize(integer $MaxStorageSize) 设置<p>最大存储规格，单位为G</p>
 * @method integer getMinStorageSize() 获取<p>最小存储规格，单位为G</p>
 * @method void setMinStorageSize(integer $MinStorageSize) 设置<p>最小存储规格，单位为G</p>
 * @method integer getStoragePayMode() 获取<p>存储付费类型，1为包年包月，0为按量计费</p>
 * @method void setStoragePayMode(integer $StoragePayMode) 设置<p>存储付费类型，1为包年包月，0为按量计费</p>
 * @method string getVpcName() 获取<p>VPC名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>VPC名称</p>
 * @method string getVpcId() 获取<p>vpc唯一id</p>
 * @method void setVpcId(string $VpcId) 设置<p>vpc唯一id</p>
 * @method string getSubnetName() 获取<p>子网名称</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>子网名称</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method string getCharset() 获取<p>字符集</p>
 * @method void setCharset(string $Charset) 设置<p>字符集</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getDbType() 获取<p>数据库类型</p>
 * @method void setDbType(string $DbType) 设置<p>数据库类型</p>
 * @method string getDbMode() 获取<p>Db类型：<li>NORMAL</li><li>SERVERLESS</li></p>
 * @method void setDbMode(string $DbMode) 设置<p>Db类型：<li>NORMAL</li><li>SERVERLESS</li></p>
 * @method string getDbVersion() 获取<p>数据库版本</p>
 * @method void setDbVersion(string $DbVersion) 设置<p>数据库版本</p>
 * @method integer getStorageLimit() 获取<p>存储空间上限</p>
 * @method void setStorageLimit(integer $StorageLimit) 设置<p>存储空间上限</p>
 * @method integer getUsedStorage() 获取<p>使用容量</p>
 * @method void setUsedStorage(integer $UsedStorage) 设置<p>使用容量</p>
 * @method string getVip() 获取<p>vip地址</p>
 * @method void setVip(string $Vip) 设置<p>vip地址</p>
 * @method integer getVport() 获取<p>vport端口</p>
 * @method void setVport(integer $Vport) 设置<p>vport端口</p>
 * @method array getRoAddr() 获取<p>集群只读实例的vip地址和vport端口</p>
 * @method void setRoAddr(array $RoAddr) 设置<p>集群只读实例的vip地址和vport端口</p>
 * @method Ability getAbility() 获取<p>集群支持的功能</p>
 * @method void setAbility(Ability $Ability) 设置<p>集群支持的功能</p>
 * @method string getCynosVersion() 获取<p>cynos版本</p>
 * @method void setCynosVersion(string $CynosVersion) 设置<p>cynos版本</p>
 * @method string getBusinessType() 获取<p>商业类型</p>
 * @method void setBusinessType(string $BusinessType) 设置<p>商业类型</p>
 * @method string getHasSlaveZone() 获取<p>是否有从可用区</p>
 * @method void setHasSlaveZone(string $HasSlaveZone) 设置<p>是否有从可用区</p>
 * @method string getIsFreeze() 获取<p>是否冻结</p>
 * @method void setIsFreeze(string $IsFreeze) 设置<p>是否冻结</p>
 * @method array getTasks() 获取<p>任务列表</p>
 * @method void setTasks(array $Tasks) 设置<p>任务列表</p>
 * @method string getMasterZone() 获取<p>主可用区</p>
 * @method void setMasterZone(string $MasterZone) 设置<p>主可用区</p>
 * @method array getSlaveZones() 获取<p>从可用区列表</p>
 * @method void setSlaveZones(array $SlaveZones) 设置<p>从可用区列表</p>
 * @method array getInstanceSet() 获取<p>实例信息</p>
 * @method void setInstanceSet(array $InstanceSet) 设置<p>实例信息</p>
 * @method integer getPayMode() 获取<p>付费模式</p>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式</p>
 * @method string getPeriodEndTime() 获取<p>到期时间</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置<p>到期时间</p>
 * @method integer getProjectID() 获取<p>项目id</p>
 * @method void setProjectID(integer $ProjectID) 设置<p>项目id</p>
 * @method array getResourceTags() 获取<p>实例绑定的tag数组信息</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>实例绑定的tag数组信息</p>
 * @method string getProxyStatus() 获取<p>Proxy状态</p>
 * @method void setProxyStatus(string $ProxyStatus) 设置<p>Proxy状态</p>
 * @method string getLogBin() 获取<p>binlog开关，可选值：ON, OFF</p>
 * @method void setLogBin(string $LogBin) 设置<p>binlog开关，可选值：ON, OFF</p>
 * @method string getIsSkipTrade() 获取<p>是否跳过交易</p>
 * @method void setIsSkipTrade(string $IsSkipTrade) 设置<p>是否跳过交易</p>
 * @method string getPitrType() 获取<p>pitr类型，可选值：normal, redo_pitr</p>
 * @method void setPitrType(string $PitrType) 设置<p>pitr类型，可选值：normal, redo_pitr</p>
 * @method string getIsOpenPasswordComplexity() 获取<p>是否打开密码复杂度</p>
 * @method void setIsOpenPasswordComplexity(string $IsOpenPasswordComplexity) 设置<p>是否打开密码复杂度</p>
 * @method string getNetworkStatus() 获取<p>网络类型</p>
 * @method void setNetworkStatus(string $NetworkStatus) 设置<p>网络类型</p>
 * @method array getResourcePackages() 获取<p>集群绑定的资源包信息</p>
 * @method void setResourcePackages(array $ResourcePackages) 设置<p>集群绑定的资源包信息</p>
 * @method integer getRenewFlag() 获取<p>自动续费标识，1为自动续费，0为到期不续</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>自动续费标识，1为自动续费，0为到期不续</p>
 * @method string getNetworkType() 获取<p>节点网络类型</p>
 * @method void setNetworkType(string $NetworkType) 设置<p>节点网络类型</p>
 * @method array getSlaveZoneAttr() 获取<p>备可用区属性</p>
 * @method void setSlaveZoneAttr(array $SlaveZoneAttr) 设置<p>备可用区属性</p>
 * @method string getCynosVersionTag() 获取<p>版本标签</p>
 * @method void setCynosVersionTag(string $CynosVersionTag) 设置<p>版本标签</p>
 * @method string getGdnId() 获取<p>全球数据库网络唯一标识</p>
 * @method void setGdnId(string $GdnId) 设置<p>全球数据库网络唯一标识</p>
 * @method string getGdnRole() 获取<p>集群在全球数据网络中的角色。<br>主集群- primary<br>从集群 - standby<br>如为空，该字段无效</p>
 * @method void setGdnRole(string $GdnRole) 设置<p>集群在全球数据网络中的角色。<br>主集群- primary<br>从集群 - standby<br>如为空，该字段无效</p>
 * @method integer getUsedArchiveStorage() 获取<p>二级存储使用量，单位：G</p>
 * @method void setUsedArchiveStorage(integer $UsedArchiveStorage) 设置<p>二级存储使用量，单位：G</p>
 * @method string getArchiveStatus() 获取<p>归档状态，枚举值<li>normal:正常</li><li>archiving:归档中</li><li>resuming:恢复中</li><li>archived :已归档</li></p>
 * @method void setArchiveStatus(string $ArchiveStatus) 设置<p>归档状态，枚举值<li>normal:正常</li><li>archiving:归档中</li><li>resuming:恢复中</li><li>archived :已归档</li></p>
 * @method integer getArchiveProgress() 获取<p>归档进度，百分比。</p>
 * @method void setArchiveProgress(integer $ArchiveProgress) 设置<p>归档进度，百分比。</p>
 * @method string getClusterLevel() 获取<p>集群级别。例如 P0, P1</p>
 * @method void setClusterLevel(string $ClusterLevel) 设置<p>集群级别。例如 P0, P1</p>
 * @method boolean getIsOpenTDE() 获取<p>是否开启透明加密</p>
 * @method void setIsOpenTDE(boolean $IsOpenTDE) 设置<p>是否开启透明加密</p>
 */
class CynosdbClusterDetail extends AbstractModel
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
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>物理可用区</p>
     */
    public $PhysicalZone;

    /**
     * @var string <p>状态，支持的值如下：</p><ul><li>creating：创建中</li><li>running：运行中</li><li>isolating：隔离中</li><li>isolated：已隔离</li><li>activating：从回收站重新恢复</li><li>offlining：下线中</li><li>offlined：已下线</li><li>deleting：删除中</li><li>deleted：已删除</li></ul>
     */
    public $Status;

    /**
     * @var string <p>状态描述</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>当Db类型为SERVERLESS时，serverless集群状态，可选值:<br>resume<br>resuming<br>pause<br>pausing</p>
     */
    public $ServerlessStatus;

    /**
     * @var string <p>存储Id</p>
     */
    public $StorageId;

    /**
     * @var integer <p>存储大小，单位为G</p>
     */
    public $Storage;

    /**
     * @var integer <p>最大存储规格，单位为G</p>
     */
    public $MaxStorageSize;

    /**
     * @var integer <p>最小存储规格，单位为G</p>
     */
    public $MinStorageSize;

    /**
     * @var integer <p>存储付费类型，1为包年包月，0为按量计费</p>
     */
    public $StoragePayMode;

    /**
     * @var string <p>VPC名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>vpc唯一id</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网名称</p>
     */
    public $SubnetName;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>字符集</p>
     */
    public $Charset;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>数据库类型</p>
     */
    public $DbType;

    /**
     * @var string <p>Db类型：<li>NORMAL</li><li>SERVERLESS</li></p>
     */
    public $DbMode;

    /**
     * @var string <p>数据库版本</p>
     */
    public $DbVersion;

    /**
     * @var integer <p>存储空间上限</p>
     */
    public $StorageLimit;

    /**
     * @var integer <p>使用容量</p>
     */
    public $UsedStorage;

    /**
     * @var string <p>vip地址</p>
     */
    public $Vip;

    /**
     * @var integer <p>vport端口</p>
     */
    public $Vport;

    /**
     * @var array <p>集群只读实例的vip地址和vport端口</p>
     */
    public $RoAddr;

    /**
     * @var Ability <p>集群支持的功能</p>
     */
    public $Ability;

    /**
     * @var string <p>cynos版本</p>
     */
    public $CynosVersion;

    /**
     * @var string <p>商业类型</p>
     */
    public $BusinessType;

    /**
     * @var string <p>是否有从可用区</p>
     */
    public $HasSlaveZone;

    /**
     * @var string <p>是否冻结</p>
     */
    public $IsFreeze;

    /**
     * @var array <p>任务列表</p>
     */
    public $Tasks;

    /**
     * @var string <p>主可用区</p>
     */
    public $MasterZone;

    /**
     * @var array <p>从可用区列表</p>
     */
    public $SlaveZones;

    /**
     * @var array <p>实例信息</p>
     */
    public $InstanceSet;

    /**
     * @var integer <p>付费模式</p>
     */
    public $PayMode;

    /**
     * @var string <p>到期时间</p>
     */
    public $PeriodEndTime;

    /**
     * @var integer <p>项目id</p>
     */
    public $ProjectID;

    /**
     * @var array <p>实例绑定的tag数组信息</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Proxy状态</p>
     */
    public $ProxyStatus;

    /**
     * @var string <p>binlog开关，可选值：ON, OFF</p>
     */
    public $LogBin;

    /**
     * @var string <p>是否跳过交易</p>
     */
    public $IsSkipTrade;

    /**
     * @var string <p>pitr类型，可选值：normal, redo_pitr</p>
     */
    public $PitrType;

    /**
     * @var string <p>是否打开密码复杂度</p>
     */
    public $IsOpenPasswordComplexity;

    /**
     * @var string <p>网络类型</p>
     */
    public $NetworkStatus;

    /**
     * @var array <p>集群绑定的资源包信息</p>
     */
    public $ResourcePackages;

    /**
     * @var integer <p>自动续费标识，1为自动续费，0为到期不续</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>节点网络类型</p>
     */
    public $NetworkType;

    /**
     * @var array <p>备可用区属性</p>
     */
    public $SlaveZoneAttr;

    /**
     * @var string <p>版本标签</p>
     */
    public $CynosVersionTag;

    /**
     * @var string <p>全球数据库网络唯一标识</p>
     */
    public $GdnId;

    /**
     * @var string <p>集群在全球数据网络中的角色。<br>主集群- primary<br>从集群 - standby<br>如为空，该字段无效</p>
     */
    public $GdnRole;

    /**
     * @var integer <p>二级存储使用量，单位：G</p>
     */
    public $UsedArchiveStorage;

    /**
     * @var string <p>归档状态，枚举值<li>normal:正常</li><li>archiving:归档中</li><li>resuming:恢复中</li><li>archived :已归档</li></p>
     */
    public $ArchiveStatus;

    /**
     * @var integer <p>归档进度，百分比。</p>
     */
    public $ArchiveProgress;

    /**
     * @var string <p>集群级别。例如 P0, P1</p>
     */
    public $ClusterLevel;

    /**
     * @var boolean <p>是否开启透明加密</p>
     */
    public $IsOpenTDE;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $Region <p>地域</p>
     * @param string $Zone <p>可用区</p>
     * @param string $PhysicalZone <p>物理可用区</p>
     * @param string $Status <p>状态，支持的值如下：</p><ul><li>creating：创建中</li><li>running：运行中</li><li>isolating：隔离中</li><li>isolated：已隔离</li><li>activating：从回收站重新恢复</li><li>offlining：下线中</li><li>offlined：已下线</li><li>deleting：删除中</li><li>deleted：已删除</li></ul>
     * @param string $StatusDesc <p>状态描述</p>
     * @param string $ServerlessStatus <p>当Db类型为SERVERLESS时，serverless集群状态，可选值:<br>resume<br>resuming<br>pause<br>pausing</p>
     * @param string $StorageId <p>存储Id</p>
     * @param integer $Storage <p>存储大小，单位为G</p>
     * @param integer $MaxStorageSize <p>最大存储规格，单位为G</p>
     * @param integer $MinStorageSize <p>最小存储规格，单位为G</p>
     * @param integer $StoragePayMode <p>存储付费类型，1为包年包月，0为按量计费</p>
     * @param string $VpcName <p>VPC名称</p>
     * @param string $VpcId <p>vpc唯一id</p>
     * @param string $SubnetName <p>子网名称</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param string $Charset <p>字符集</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $DbType <p>数据库类型</p>
     * @param string $DbMode <p>Db类型：<li>NORMAL</li><li>SERVERLESS</li></p>
     * @param string $DbVersion <p>数据库版本</p>
     * @param integer $StorageLimit <p>存储空间上限</p>
     * @param integer $UsedStorage <p>使用容量</p>
     * @param string $Vip <p>vip地址</p>
     * @param integer $Vport <p>vport端口</p>
     * @param array $RoAddr <p>集群只读实例的vip地址和vport端口</p>
     * @param Ability $Ability <p>集群支持的功能</p>
     * @param string $CynosVersion <p>cynos版本</p>
     * @param string $BusinessType <p>商业类型</p>
     * @param string $HasSlaveZone <p>是否有从可用区</p>
     * @param string $IsFreeze <p>是否冻结</p>
     * @param array $Tasks <p>任务列表</p>
     * @param string $MasterZone <p>主可用区</p>
     * @param array $SlaveZones <p>从可用区列表</p>
     * @param array $InstanceSet <p>实例信息</p>
     * @param integer $PayMode <p>付费模式</p>
     * @param string $PeriodEndTime <p>到期时间</p>
     * @param integer $ProjectID <p>项目id</p>
     * @param array $ResourceTags <p>实例绑定的tag数组信息</p>
     * @param string $ProxyStatus <p>Proxy状态</p>
     * @param string $LogBin <p>binlog开关，可选值：ON, OFF</p>
     * @param string $IsSkipTrade <p>是否跳过交易</p>
     * @param string $PitrType <p>pitr类型，可选值：normal, redo_pitr</p>
     * @param string $IsOpenPasswordComplexity <p>是否打开密码复杂度</p>
     * @param string $NetworkStatus <p>网络类型</p>
     * @param array $ResourcePackages <p>集群绑定的资源包信息</p>
     * @param integer $RenewFlag <p>自动续费标识，1为自动续费，0为到期不续</p>
     * @param string $NetworkType <p>节点网络类型</p>
     * @param array $SlaveZoneAttr <p>备可用区属性</p>
     * @param string $CynosVersionTag <p>版本标签</p>
     * @param string $GdnId <p>全球数据库网络唯一标识</p>
     * @param string $GdnRole <p>集群在全球数据网络中的角色。<br>主集群- primary<br>从集群 - standby<br>如为空，该字段无效</p>
     * @param integer $UsedArchiveStorage <p>二级存储使用量，单位：G</p>
     * @param string $ArchiveStatus <p>归档状态，枚举值<li>normal:正常</li><li>archiving:归档中</li><li>resuming:恢复中</li><li>archived :已归档</li></p>
     * @param integer $ArchiveProgress <p>归档进度，百分比。</p>
     * @param string $ClusterLevel <p>集群级别。例如 P0, P1</p>
     * @param boolean $IsOpenTDE <p>是否开启透明加密</p>
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }

        if (array_key_exists("MinStorageSize",$param) and $param["MinStorageSize"] !== null) {
            $this->MinStorageSize = $param["MinStorageSize"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("RoAddr",$param) and $param["RoAddr"] !== null) {
            $this->RoAddr = [];
            foreach ($param["RoAddr"] as $key => $value){
                $obj = new Addr();
                $obj->deserialize($value);
                array_push($this->RoAddr, $obj);
            }
        }

        if (array_key_exists("Ability",$param) and $param["Ability"] !== null) {
            $this->Ability = new Ability();
            $this->Ability->deserialize($param["Ability"]);
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("HasSlaveZone",$param) and $param["HasSlaveZone"] !== null) {
            $this->HasSlaveZone = $param["HasSlaveZone"];
        }

        if (array_key_exists("IsFreeze",$param) and $param["IsFreeze"] !== null) {
            $this->IsFreeze = $param["IsFreeze"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = $param["SlaveZones"];
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new ClusterInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("ProxyStatus",$param) and $param["ProxyStatus"] !== null) {
            $this->ProxyStatus = $param["ProxyStatus"];
        }

        if (array_key_exists("LogBin",$param) and $param["LogBin"] !== null) {
            $this->LogBin = $param["LogBin"];
        }

        if (array_key_exists("IsSkipTrade",$param) and $param["IsSkipTrade"] !== null) {
            $this->IsSkipTrade = $param["IsSkipTrade"];
        }

        if (array_key_exists("PitrType",$param) and $param["PitrType"] !== null) {
            $this->PitrType = $param["PitrType"];
        }

        if (array_key_exists("IsOpenPasswordComplexity",$param) and $param["IsOpenPasswordComplexity"] !== null) {
            $this->IsOpenPasswordComplexity = $param["IsOpenPasswordComplexity"];
        }

        if (array_key_exists("NetworkStatus",$param) and $param["NetworkStatus"] !== null) {
            $this->NetworkStatus = $param["NetworkStatus"];
        }

        if (array_key_exists("ResourcePackages",$param) and $param["ResourcePackages"] !== null) {
            $this->ResourcePackages = [];
            foreach ($param["ResourcePackages"] as $key => $value){
                $obj = new ResourcePackage();
                $obj->deserialize($value);
                array_push($this->ResourcePackages, $obj);
            }
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("SlaveZoneAttr",$param) and $param["SlaveZoneAttr"] !== null) {
            $this->SlaveZoneAttr = [];
            foreach ($param["SlaveZoneAttr"] as $key => $value){
                $obj = new SlaveZoneAttrItem();
                $obj->deserialize($value);
                array_push($this->SlaveZoneAttr, $obj);
            }
        }

        if (array_key_exists("CynosVersionTag",$param) and $param["CynosVersionTag"] !== null) {
            $this->CynosVersionTag = $param["CynosVersionTag"];
        }

        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }

        if (array_key_exists("GdnRole",$param) and $param["GdnRole"] !== null) {
            $this->GdnRole = $param["GdnRole"];
        }

        if (array_key_exists("UsedArchiveStorage",$param) and $param["UsedArchiveStorage"] !== null) {
            $this->UsedArchiveStorage = $param["UsedArchiveStorage"];
        }

        if (array_key_exists("ArchiveStatus",$param) and $param["ArchiveStatus"] !== null) {
            $this->ArchiveStatus = $param["ArchiveStatus"];
        }

        if (array_key_exists("ArchiveProgress",$param) and $param["ArchiveProgress"] !== null) {
            $this->ArchiveProgress = $param["ArchiveProgress"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("IsOpenTDE",$param) and $param["IsOpenTDE"] !== null) {
            $this->IsOpenTDE = $param["IsOpenTDE"];
        }
    }
}
