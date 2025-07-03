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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群详情详细信息
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getPhysicalZone() 获取物理可用区
 * @method void setPhysicalZone(string $PhysicalZone) 设置物理可用区
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method string getServerlessStatus() 获取当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
resuming
pause
pausing
 * @method void setServerlessStatus(string $ServerlessStatus) 设置当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
resuming
pause
pausing
 * @method string getStorageId() 获取存储Id
 * @method void setStorageId(string $StorageId) 设置存储Id
 * @method integer getStorage() 获取存储大小，单位为G
 * @method void setStorage(integer $Storage) 设置存储大小，单位为G
 * @method integer getMaxStorageSize() 获取最大存储规格，单位为G
 * @method void setMaxStorageSize(integer $MaxStorageSize) 设置最大存储规格，单位为G
 * @method integer getMinStorageSize() 获取最小存储规格，单位为G
 * @method void setMinStorageSize(integer $MinStorageSize) 设置最小存储规格，单位为G
 * @method integer getStoragePayMode() 获取存储付费类型，1为包年包月，0为按量计费
 * @method void setStoragePayMode(integer $StoragePayMode) 设置存储付费类型，1为包年包月，0为按量计费
 * @method string getVpcName() 获取VPC名称
 * @method void setVpcName(string $VpcName) 设置VPC名称
 * @method string getVpcId() 获取vpc唯一id
 * @method void setVpcId(string $VpcId) 设置vpc唯一id
 * @method string getSubnetName() 获取子网名称
 * @method void setSubnetName(string $SubnetName) 设置子网名称
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getCharset() 获取字符集
 * @method void setCharset(string $Charset) 设置字符集
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getDbType() 获取数据库类型
 * @method void setDbType(string $DbType) 设置数据库类型
 * @method string getDbMode() 获取Db类型：<li>NORMAL</li><li>SERVERLESS</li>
 * @method void setDbMode(string $DbMode) 设置Db类型：<li>NORMAL</li><li>SERVERLESS</li>
 * @method string getDbVersion() 获取数据库版本
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
 * @method integer getStorageLimit() 获取存储空间上限
 * @method void setStorageLimit(integer $StorageLimit) 设置存储空间上限
 * @method integer getUsedStorage() 获取使用容量
 * @method void setUsedStorage(integer $UsedStorage) 设置使用容量
 * @method string getVip() 获取vip地址
 * @method void setVip(string $Vip) 设置vip地址
 * @method integer getVport() 获取vport端口
 * @method void setVport(integer $Vport) 设置vport端口
 * @method array getRoAddr() 获取集群只读实例的vip地址和vport端口
 * @method void setRoAddr(array $RoAddr) 设置集群只读实例的vip地址和vport端口
 * @method Ability getAbility() 获取集群支持的功能
 * @method void setAbility(Ability $Ability) 设置集群支持的功能
 * @method string getCynosVersion() 获取cynos版本
 * @method void setCynosVersion(string $CynosVersion) 设置cynos版本
 * @method string getBusinessType() 获取商业类型
 * @method void setBusinessType(string $BusinessType) 设置商业类型
 * @method string getHasSlaveZone() 获取是否有从可用区
 * @method void setHasSlaveZone(string $HasSlaveZone) 设置是否有从可用区
 * @method string getIsFreeze() 获取是否冻结
 * @method void setIsFreeze(string $IsFreeze) 设置是否冻结
 * @method array getTasks() 获取任务列表
 * @method void setTasks(array $Tasks) 设置任务列表
 * @method string getMasterZone() 获取主可用区
 * @method void setMasterZone(string $MasterZone) 设置主可用区
 * @method array getSlaveZones() 获取从可用区列表
 * @method void setSlaveZones(array $SlaveZones) 设置从可用区列表
 * @method array getInstanceSet() 获取实例信息
 * @method void setInstanceSet(array $InstanceSet) 设置实例信息
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method string getPeriodEndTime() 获取到期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置到期时间
 * @method integer getProjectID() 获取项目id
 * @method void setProjectID(integer $ProjectID) 设置项目id
 * @method array getResourceTags() 获取实例绑定的tag数组信息
 * @method void setResourceTags(array $ResourceTags) 设置实例绑定的tag数组信息
 * @method string getProxyStatus() 获取Proxy状态
 * @method void setProxyStatus(string $ProxyStatus) 设置Proxy状态
 * @method string getLogBin() 获取binlog开关，可选值：ON, OFF
 * @method void setLogBin(string $LogBin) 设置binlog开关，可选值：ON, OFF
 * @method string getIsSkipTrade() 获取是否跳过交易
 * @method void setIsSkipTrade(string $IsSkipTrade) 设置是否跳过交易
 * @method string getPitrType() 获取pitr类型，可选值：normal, redo_pitr
 * @method void setPitrType(string $PitrType) 设置pitr类型，可选值：normal, redo_pitr
 * @method string getIsOpenPasswordComplexity() 获取是否打开密码复杂度
 * @method void setIsOpenPasswordComplexity(string $IsOpenPasswordComplexity) 设置是否打开密码复杂度
 * @method string getNetworkStatus() 获取网络类型
 * @method void setNetworkStatus(string $NetworkStatus) 设置网络类型
 * @method array getResourcePackages() 获取集群绑定的资源包信息	
 * @method void setResourcePackages(array $ResourcePackages) 设置集群绑定的资源包信息	
 * @method integer getRenewFlag() 获取自动续费标识，1为自动续费，0为到期不续
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费标识，1为自动续费，0为到期不续
 * @method string getNetworkType() 获取节点网络类型
 * @method void setNetworkType(string $NetworkType) 设置节点网络类型
 * @method array getSlaveZoneAttr() 获取备可用区属性
 * @method void setSlaveZoneAttr(array $SlaveZoneAttr) 设置备可用区属性
 * @method string getCynosVersionTag() 获取版本标签
 * @method void setCynosVersionTag(string $CynosVersionTag) 设置版本标签
 * @method string getGdnId() 获取全球数据库网络唯一标识
 * @method void setGdnId(string $GdnId) 设置全球数据库网络唯一标识
 * @method string getGdnRole() 获取集群在全球数据网络中的角色。
主集群- primary
从集群 - standby
如为空，该字段无效
 * @method void setGdnRole(string $GdnRole) 设置集群在全球数据网络中的角色。
主集群- primary
从集群 - standby
如为空，该字段无效
 * @method integer getUsedArchiveStorage() 获取二级存储使用量，单位：G
 * @method void setUsedArchiveStorage(integer $UsedArchiveStorage) 设置二级存储使用量，单位：G
 * @method string getArchiveStatus() 获取归档状态，枚举值<li>normal:正常</li><li>archiving:归档中</li><li>resuming:恢复中</li><li>archived :已归档</li>
 * @method void setArchiveStatus(string $ArchiveStatus) 设置归档状态，枚举值<li>normal:正常</li><li>archiving:归档中</li><li>resuming:恢复中</li><li>archived :已归档</li>
 * @method integer getArchiveProgress() 获取归档进度，百分比。
 * @method void setArchiveProgress(integer $ArchiveProgress) 设置归档进度，百分比。
 */
class CynosdbClusterDetail extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 物理可用区
     */
    public $PhysicalZone;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var string 当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
resuming
pause
pausing
     */
    public $ServerlessStatus;

    /**
     * @var string 存储Id
     */
    public $StorageId;

    /**
     * @var integer 存储大小，单位为G
     */
    public $Storage;

    /**
     * @var integer 最大存储规格，单位为G
     */
    public $MaxStorageSize;

    /**
     * @var integer 最小存储规格，单位为G
     */
    public $MinStorageSize;

    /**
     * @var integer 存储付费类型，1为包年包月，0为按量计费
     */
    public $StoragePayMode;

    /**
     * @var string VPC名称
     */
    public $VpcName;

    /**
     * @var string vpc唯一id
     */
    public $VpcId;

    /**
     * @var string 子网名称
     */
    public $SubnetName;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 字符集
     */
    public $Charset;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 数据库类型
     */
    public $DbType;

    /**
     * @var string Db类型：<li>NORMAL</li><li>SERVERLESS</li>
     */
    public $DbMode;

    /**
     * @var string 数据库版本
     */
    public $DbVersion;

    /**
     * @var integer 存储空间上限
     */
    public $StorageLimit;

    /**
     * @var integer 使用容量
     */
    public $UsedStorage;

    /**
     * @var string vip地址
     */
    public $Vip;

    /**
     * @var integer vport端口
     */
    public $Vport;

    /**
     * @var array 集群只读实例的vip地址和vport端口
     */
    public $RoAddr;

    /**
     * @var Ability 集群支持的功能
     */
    public $Ability;

    /**
     * @var string cynos版本
     */
    public $CynosVersion;

    /**
     * @var string 商业类型
     */
    public $BusinessType;

    /**
     * @var string 是否有从可用区
     */
    public $HasSlaveZone;

    /**
     * @var string 是否冻结
     */
    public $IsFreeze;

    /**
     * @var array 任务列表
     */
    public $Tasks;

    /**
     * @var string 主可用区
     */
    public $MasterZone;

    /**
     * @var array 从可用区列表
     */
    public $SlaveZones;

    /**
     * @var array 实例信息
     */
    public $InstanceSet;

    /**
     * @var integer 付费模式
     */
    public $PayMode;

    /**
     * @var string 到期时间
     */
    public $PeriodEndTime;

    /**
     * @var integer 项目id
     */
    public $ProjectID;

    /**
     * @var array 实例绑定的tag数组信息
     */
    public $ResourceTags;

    /**
     * @var string Proxy状态
     */
    public $ProxyStatus;

    /**
     * @var string binlog开关，可选值：ON, OFF
     */
    public $LogBin;

    /**
     * @var string 是否跳过交易
     */
    public $IsSkipTrade;

    /**
     * @var string pitr类型，可选值：normal, redo_pitr
     */
    public $PitrType;

    /**
     * @var string 是否打开密码复杂度
     */
    public $IsOpenPasswordComplexity;

    /**
     * @var string 网络类型
     */
    public $NetworkStatus;

    /**
     * @var array 集群绑定的资源包信息	
     */
    public $ResourcePackages;

    /**
     * @var integer 自动续费标识，1为自动续费，0为到期不续
     */
    public $RenewFlag;

    /**
     * @var string 节点网络类型
     */
    public $NetworkType;

    /**
     * @var array 备可用区属性
     */
    public $SlaveZoneAttr;

    /**
     * @var string 版本标签
     */
    public $CynosVersionTag;

    /**
     * @var string 全球数据库网络唯一标识
     */
    public $GdnId;

    /**
     * @var string 集群在全球数据网络中的角色。
主集群- primary
从集群 - standby
如为空，该字段无效
     */
    public $GdnRole;

    /**
     * @var integer 二级存储使用量，单位：G
     */
    public $UsedArchiveStorage;

    /**
     * @var string 归档状态，枚举值<li>normal:正常</li><li>archiving:归档中</li><li>resuming:恢复中</li><li>archived :已归档</li>
     */
    public $ArchiveStatus;

    /**
     * @var integer 归档进度，百分比。
     */
    public $ArchiveProgress;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param string $PhysicalZone 物理可用区
     * @param string $Status 状态
     * @param string $StatusDesc 状态描述
     * @param string $ServerlessStatus 当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
resuming
pause
pausing
     * @param string $StorageId 存储Id
     * @param integer $Storage 存储大小，单位为G
     * @param integer $MaxStorageSize 最大存储规格，单位为G
     * @param integer $MinStorageSize 最小存储规格，单位为G
     * @param integer $StoragePayMode 存储付费类型，1为包年包月，0为按量计费
     * @param string $VpcName VPC名称
     * @param string $VpcId vpc唯一id
     * @param string $SubnetName 子网名称
     * @param string $SubnetId 子网ID
     * @param string $Charset 字符集
     * @param string $CreateTime 创建时间
     * @param string $DbType 数据库类型
     * @param string $DbMode Db类型：<li>NORMAL</li><li>SERVERLESS</li>
     * @param string $DbVersion 数据库版本
     * @param integer $StorageLimit 存储空间上限
     * @param integer $UsedStorage 使用容量
     * @param string $Vip vip地址
     * @param integer $Vport vport端口
     * @param array $RoAddr 集群只读实例的vip地址和vport端口
     * @param Ability $Ability 集群支持的功能
     * @param string $CynosVersion cynos版本
     * @param string $BusinessType 商业类型
     * @param string $HasSlaveZone 是否有从可用区
     * @param string $IsFreeze 是否冻结
     * @param array $Tasks 任务列表
     * @param string $MasterZone 主可用区
     * @param array $SlaveZones 从可用区列表
     * @param array $InstanceSet 实例信息
     * @param integer $PayMode 付费模式
     * @param string $PeriodEndTime 到期时间
     * @param integer $ProjectID 项目id
     * @param array $ResourceTags 实例绑定的tag数组信息
     * @param string $ProxyStatus Proxy状态
     * @param string $LogBin binlog开关，可选值：ON, OFF
     * @param string $IsSkipTrade 是否跳过交易
     * @param string $PitrType pitr类型，可选值：normal, redo_pitr
     * @param string $IsOpenPasswordComplexity 是否打开密码复杂度
     * @param string $NetworkStatus 网络类型
     * @param array $ResourcePackages 集群绑定的资源包信息	
     * @param integer $RenewFlag 自动续费标识，1为自动续费，0为到期不续
     * @param string $NetworkType 节点网络类型
     * @param array $SlaveZoneAttr 备可用区属性
     * @param string $CynosVersionTag 版本标签
     * @param string $GdnId 全球数据库网络唯一标识
     * @param string $GdnRole 集群在全球数据网络中的角色。
主集群- primary
从集群 - standby
如为空，该字段无效
     * @param integer $UsedArchiveStorage 二级存储使用量，单位：G
     * @param string $ArchiveStatus 归档状态，枚举值<li>normal:正常</li><li>archiving:归档中</li><li>resuming:恢复中</li><li>archived :已归档</li>
     * @param integer $ArchiveProgress 归档进度，百分比。
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
    }
}
