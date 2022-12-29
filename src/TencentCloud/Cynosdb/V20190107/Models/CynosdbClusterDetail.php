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
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
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
 * @method string getDbVersion() 获取数据库版本
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
 * @method integer getUsedStorage() 获取使用容量
 * @method void setUsedStorage(integer $UsedStorage) 设置使用容量
 * @method array getRoAddr() 获取读写分离Vport
 * @method void setRoAddr(array $RoAddr) 设置读写分离Vport
 * @method array getInstanceSet() 获取实例信息
 * @method void setInstanceSet(array $InstanceSet) 设置实例信息
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method string getPeriodEndTime() 获取到期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置到期时间
 * @method string getVip() 获取vip地址
 * @method void setVip(string $Vip) 设置vip地址
 * @method integer getVport() 获取vport端口
 * @method void setVport(integer $Vport) 设置vport端口
 * @method integer getProjectID() 获取项目id
 * @method void setProjectID(integer $ProjectID) 设置项目id
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method array getResourceTags() 获取实例绑定的tag数组信息
 * @method void setResourceTags(array $ResourceTags) 设置实例绑定的tag数组信息
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
 * @method string getLogBin() 获取binlog开关，可选值：ON, OFF
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogBin(string $LogBin) 设置binlog开关，可选值：ON, OFF
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPitrType() 获取pitr类型，可选值：normal, redo_pitr
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPitrType(string $PitrType) 设置pitr类型，可选值：normal, redo_pitr
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhysicalZone() 获取物理可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhysicalZone(string $PhysicalZone) 设置物理可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageId() 获取存储Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageId(string $StorageId) 设置存储Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorage() 获取存储大小，单位为G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorage(integer $Storage) 设置存储大小，单位为G
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxStorageSize() 获取最大存储规格，单位为G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxStorageSize(integer $MaxStorageSize) 设置最大存储规格，单位为G
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinStorageSize() 获取最小存储规格，单位为G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinStorageSize(integer $MinStorageSize) 设置最小存储规格，单位为G
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStoragePayMode() 获取存储付费类型，1为包年包月，0为按量计费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoragePayMode(integer $StoragePayMode) 设置存储付费类型，1为包年包月，0为按量计费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbMode() 获取数据库类型，normal，serverless
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbMode(string $DbMode) 设置数据库类型，normal，serverless
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageLimit() 获取存储空间上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageLimit(integer $StorageLimit) 设置存储空间上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method Ability getAbility() 获取集群支持的功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbility(Ability $Ability) 设置集群支持的功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCynosVersion() 获取cynos版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCynosVersion(string $CynosVersion) 设置cynos版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessType() 获取商业类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessType(string $BusinessType) 设置商业类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHasSlaveZone() 获取是否有从可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasSlaveZone(string $HasSlaveZone) 设置是否有从可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsFreeze() 获取是否冻结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsFreeze(string $IsFreeze) 设置是否冻结
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMasterZone() 获取主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterZone(string $MasterZone) 设置主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSlaveZones() 获取从可用区列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaveZones(array $SlaveZones) 设置从可用区列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyStatus() 获取Proxy状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyStatus(string $ProxyStatus) 设置Proxy状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsSkipTrade() 获取是否跳过交易
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSkipTrade(string $IsSkipTrade) 设置是否跳过交易
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsOpenPasswordComplexity() 获取是否打开密码复杂度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOpenPasswordComplexity(string $IsOpenPasswordComplexity) 设置是否打开密码复杂度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetworkStatus() 获取网络类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkStatus(string $NetworkStatus) 设置网络类型
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

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
     * @var string 数据库版本
     */
    public $DbVersion;

    /**
     * @var integer 使用容量
     */
    public $UsedStorage;

    /**
     * @var array 读写分离Vport
     */
    public $RoAddr;

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
     * @var string vip地址
     */
    public $Vip;

    /**
     * @var integer vport端口
     */
    public $Vport;

    /**
     * @var integer 项目id
     */
    public $ProjectID;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var array 实例绑定的tag数组信息
     */
    public $ResourceTags;

    /**
     * @var string 当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
resuming
pause
pausing
     */
    public $ServerlessStatus;

    /**
     * @var string binlog开关，可选值：ON, OFF
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogBin;

    /**
     * @var string pitr类型，可选值：normal, redo_pitr
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PitrType;

    /**
     * @var string 物理可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhysicalZone;

    /**
     * @var string 存储Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageId;

    /**
     * @var integer 存储大小，单位为G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Storage;

    /**
     * @var integer 最大存储规格，单位为G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxStorageSize;

    /**
     * @var integer 最小存储规格，单位为G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinStorageSize;

    /**
     * @var integer 存储付费类型，1为包年包月，0为按量计费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoragePayMode;

    /**
     * @var string 数据库类型，normal，serverless
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbMode;

    /**
     * @var integer 存储空间上限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageLimit;

    /**
     * @var Ability 集群支持的功能
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ability;

    /**
     * @var string cynos版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CynosVersion;

    /**
     * @var string 商业类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessType;

    /**
     * @var string 是否有从可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasSlaveZone;

    /**
     * @var string 是否冻结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsFreeze;

    /**
     * @var array 任务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var string 主可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterZone;

    /**
     * @var array 从可用区列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaveZones;

    /**
     * @var string Proxy状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyStatus;

    /**
     * @var string 是否跳过交易
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSkipTrade;

    /**
     * @var string 是否打开密码复杂度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsOpenPasswordComplexity;

    /**
     * @var string 网络类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkStatus;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $Region 地域
     * @param string $Status 状态
     * @param string $StatusDesc 状态描述
     * @param string $VpcName VPC名称
     * @param string $VpcId vpc唯一id
     * @param string $SubnetName 子网名称
     * @param string $SubnetId 子网ID
     * @param string $Charset 字符集
     * @param string $CreateTime 创建时间
     * @param string $DbType 数据库类型
     * @param string $DbVersion 数据库版本
     * @param integer $UsedStorage 使用容量
     * @param array $RoAddr 读写分离Vport
     * @param array $InstanceSet 实例信息
     * @param integer $PayMode 付费模式
     * @param string $PeriodEndTime 到期时间
     * @param string $Vip vip地址
     * @param integer $Vport vport端口
     * @param integer $ProjectID 项目id
     * @param string $Zone 可用区
     * @param array $ResourceTags 实例绑定的tag数组信息
     * @param string $ServerlessStatus 当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
resuming
pause
pausing
     * @param string $LogBin binlog开关，可选值：ON, OFF
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PitrType pitr类型，可选值：normal, redo_pitr
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhysicalZone 物理可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageId 存储Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Storage 存储大小，单位为G
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxStorageSize 最大存储规格，单位为G
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinStorageSize 最小存储规格，单位为G
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StoragePayMode 存储付费类型，1为包年包月，0为按量计费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbMode 数据库类型，normal，serverless
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageLimit 存储空间上限
注意：此字段可能返回 null，表示取不到有效值。
     * @param Ability $Ability 集群支持的功能
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CynosVersion cynos版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessType 商业类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HasSlaveZone 是否有从可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsFreeze 是否冻结
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks 任务列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MasterZone 主可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SlaveZones 从可用区列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyStatus Proxy状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsSkipTrade 是否跳过交易
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsOpenPasswordComplexity 是否打开密码复杂度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetworkStatus 网络类型
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
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

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("RoAddr",$param) and $param["RoAddr"] !== null) {
            $this->RoAddr = [];
            foreach ($param["RoAddr"] as $key => $value){
                $obj = new Addr();
                $obj->deserialize($value);
                array_push($this->RoAddr, $obj);
            }
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("LogBin",$param) and $param["LogBin"] !== null) {
            $this->LogBin = $param["LogBin"];
        }

        if (array_key_exists("PitrType",$param) and $param["PitrType"] !== null) {
            $this->PitrType = $param["PitrType"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
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

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
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

        if (array_key_exists("ProxyStatus",$param) and $param["ProxyStatus"] !== null) {
            $this->ProxyStatus = $param["ProxyStatus"];
        }

        if (array_key_exists("IsSkipTrade",$param) and $param["IsSkipTrade"] !== null) {
            $this->IsSkipTrade = $param["IsSkipTrade"];
        }

        if (array_key_exists("IsOpenPasswordComplexity",$param) and $param["IsOpenPasswordComplexity"] !== null) {
            $this->IsOpenPasswordComplexity = $param["IsOpenPasswordComplexity"];
        }

        if (array_key_exists("NetworkStatus",$param) and $param["NetworkStatus"] !== null) {
            $this->NetworkStatus = $param["NetworkStatus"];
        }
    }
}
