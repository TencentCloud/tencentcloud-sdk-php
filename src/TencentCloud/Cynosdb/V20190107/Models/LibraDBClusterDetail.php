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
 * libra集群详情
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method integer getStorage() 获取存储大小
 * @method void setStorage(integer $Storage) 设置存储大小
 * @method string getVpcName() 获取VPC名称
 * @method void setVpcName(string $VpcName) 设置VPC名称
 * @method string getVpcId() 获取vpc唯一id
 * @method void setVpcId(string $VpcId) 设置vpc唯一id
 * @method string getSubnetName() 获取子网名称
 * @method void setSubnetName(string $SubnetName) 设置子网名称
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getDbVersion() 获取数据库版本
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
 * @method integer getUsedStorage() 获取使用容量
 * @method void setUsedStorage(integer $UsedStorage) 设置使用容量
 * @method string getVip() 获取vip地址
 * @method void setVip(string $Vip) 设置vip地址
 * @method integer getVport() 获取vport端口
 * @method void setVport(integer $Vport) 设置vport端口
 * @method array getRoAddr() 获取集群只读实例的vip地址和vport端口
 * @method void setRoAddr(array $RoAddr) 设置集群只读实例的vip地址和vport端口
 * @method string getCynosVersion() 获取cynos版本
 * @method void setCynosVersion(string $CynosVersion) 设置cynos版本
 * @method string getIsFreeze() 获取是否冻结
 * @method void setIsFreeze(string $IsFreeze) 设置是否冻结
 * @method array getTasks() 获取任务列表
 * @method void setTasks(array $Tasks) 设置任务列表
 * @method string getMasterZone() 获取主可用区
 * @method void setMasterZone(string $MasterZone) 设置主可用区
 * @method array getInstanceSet() 获取实例集合
 * @method void setInstanceSet(array $InstanceSet) 设置实例集合
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method string getPeriodEndTime() 获取到期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置到期时间
 * @method integer getProjectID() 获取项目id
 * @method void setProjectID(integer $ProjectID) 设置项目id
 * @method integer getRenewFlag() 获取自动续费标识
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费标识
 * @method string getCynosVersionTag() 获取版本标签
 * @method void setCynosVersionTag(string $CynosVersionTag) 设置版本标签
 * @method string getNoSupportAddRo() 获取不支持添加ro yes-不支持添加ro， no/null/"" 支持添加ro
 * @method void setNoSupportAddRo(string $NoSupportAddRo) 设置不支持添加ro yes-不支持添加ro， no/null/"" 支持添加ro
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getPhysicalZone() 获取物理可用区
 * @method void setPhysicalZone(string $PhysicalZone) 设置物理可用区
 */
class LibraDBClusterDetail extends AbstractModel
{
    /**
     * @var string 集群id
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
     * @var integer 存储大小
     */
    public $Storage;

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
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 数据库版本
     */
    public $DbVersion;

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
     * @var string cynos版本
     */
    public $CynosVersion;

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
     * @var array 实例集合
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
     * @var integer 自动续费标识
     */
    public $RenewFlag;

    /**
     * @var string 版本标签
     */
    public $CynosVersionTag;

    /**
     * @var string 不支持添加ro yes-不支持添加ro， no/null/"" 支持添加ro
     */
    public $NoSupportAddRo;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 物理可用区
     */
    public $PhysicalZone;

    /**
     * @param string $ClusterId 集群id
     * @param string $ClusterName 集群名称
     * @param string $Region 地域
     * @param string $Status 状态
     * @param string $StatusDesc 状态描述
     * @param integer $Storage 存储大小
     * @param string $VpcName VPC名称
     * @param string $VpcId vpc唯一id
     * @param string $SubnetName 子网名称
     * @param string $SubnetId 子网ID
     * @param string $CreateTime 创建时间
     * @param string $DbVersion 数据库版本
     * @param integer $UsedStorage 使用容量
     * @param string $Vip vip地址
     * @param integer $Vport vport端口
     * @param array $RoAddr 集群只读实例的vip地址和vport端口
     * @param string $CynosVersion cynos版本
     * @param string $IsFreeze 是否冻结
     * @param array $Tasks 任务列表
     * @param string $MasterZone 主可用区
     * @param array $InstanceSet 实例集合
     * @param integer $PayMode 付费模式
     * @param string $PeriodEndTime 到期时间
     * @param integer $ProjectID 项目id
     * @param integer $RenewFlag 自动续费标识
     * @param string $CynosVersionTag 版本标签
     * @param string $NoSupportAddRo 不支持添加ro yes-不支持添加ro， no/null/"" 支持添加ro
     * @param string $Zone 可用区
     * @param string $PhysicalZone 物理可用区
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

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
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
                $obj = new RoAddr();
                $obj->deserialize($value);
                array_push($this->RoAddr, $obj);
            }
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
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

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new InstanceSet();
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CynosVersionTag",$param) and $param["CynosVersionTag"] !== null) {
            $this->CynosVersionTag = $param["CynosVersionTag"];
        }

        if (array_key_exists("NoSupportAddRo",$param) and $param["NoSupportAddRo"] !== null) {
            $this->NoSupportAddRo = $param["NoSupportAddRo"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }
    }
}
