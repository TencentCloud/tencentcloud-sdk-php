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
 * 集群列表信息
 *
 * @method integer getAppId() 获取用户id
 * @method void setAppId(integer $AppId) 设置用户id
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getCynosVersion() 获取cynos版本
 * @method void setCynosVersion(string $CynosVersion) 设置cynos版本
 * @method string getCynosVersionTag() 获取版本标签
 * @method void setCynosVersionTag(string $CynosVersionTag) 设置版本标签
 * @method string getDbVersion() 获取数据库版本
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
 * @method integer getInstanceNum() 获取实例数量
 * @method void setInstanceNum(integer $InstanceNum) 设置实例数量
 * @method string getIsFreeze() 获取是否冻结
 * @method void setIsFreeze(string $IsFreeze) 设置是否冻结
 * @method array getNetAddrs() 获取网络地址
 * @method void setNetAddrs(array $NetAddrs) 设置网络地址
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method string getPeriodEndTime() 获取到期时间

 * @method void setPeriodEndTime(string $PeriodEndTime) 设置到期时间

 * @method integer getProjectID() 获取项目id
 * @method void setProjectID(integer $ProjectID) 设置项目id
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getRenewFlag() 获取自动续费标识，1为自动续费，0为到期不续
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费标识，1为自动续费，0为到期不续
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method integer getStorage() 获取存储大小，单位为G
 * @method void setStorage(integer $Storage) 设置存储大小，单位为G
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method array getTasks() 获取任务列表
 * @method void setTasks(array $Tasks) 设置任务列表
 * @method string getUin() 获取账户id
 * @method void setUin(string $Uin) 设置账户id
 * @method string getVip() 获取vip地址
 * @method void setVip(string $Vip) 设置vip地址
 * @method string getVpcId() 获取vpc唯一id
 * @method void setVpcId(string $VpcId) 设置vpc唯一id
 * @method integer getVport() 获取vport端口
 * @method void setVport(integer $Vport) 设置vport端口
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getMasterZone() 获取主可用区
 * @method void setMasterZone(string $MasterZone) 设置主可用区
 * @method string getPhysicalZone() 获取物理可用区
 * @method void setPhysicalZone(string $PhysicalZone) 设置物理可用区
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 */
class LibraDBClusterSet extends AbstractModel
{
    /**
     * @var integer 用户id
     */
    public $AppId;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string cynos版本
     */
    public $CynosVersion;

    /**
     * @var string 版本标签
     */
    public $CynosVersionTag;

    /**
     * @var string 数据库版本
     */
    public $DbVersion;

    /**
     * @var integer 实例数量
     */
    public $InstanceNum;

    /**
     * @var string 是否冻结
     */
    public $IsFreeze;

    /**
     * @var array 网络地址
     */
    public $NetAddrs;

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
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 自动续费标识，1为自动续费，0为到期不续
     */
    public $RenewFlag;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var integer 存储大小，单位为G
     */
    public $Storage;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var array 任务列表
     */
    public $Tasks;

    /**
     * @var string 账户id
     */
    public $Uin;

    /**
     * @var string vip地址
     */
    public $Vip;

    /**
     * @var string vpc唯一id
     */
    public $VpcId;

    /**
     * @var integer vport端口
     */
    public $Vport;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 主可用区
     */
    public $MasterZone;

    /**
     * @var string 物理可用区
     */
    public $PhysicalZone;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @param integer $AppId 用户id
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $CreateTime 创建时间
     * @param string $CynosVersion cynos版本
     * @param string $CynosVersionTag 版本标签
     * @param string $DbVersion 数据库版本
     * @param integer $InstanceNum 实例数量
     * @param string $IsFreeze 是否冻结
     * @param array $NetAddrs 网络地址
     * @param integer $PayMode 付费模式
     * @param string $PeriodEndTime 到期时间

     * @param integer $ProjectID 项目id
     * @param string $Region 地域
     * @param integer $RenewFlag 自动续费标识，1为自动续费，0为到期不续
     * @param string $Status 状态
     * @param string $StatusDesc 状态描述
     * @param integer $Storage 存储大小，单位为G
     * @param string $SubnetId 子网ID
     * @param array $Tasks 任务列表
     * @param string $Uin 账户id
     * @param string $Vip vip地址
     * @param string $VpcId vpc唯一id
     * @param integer $Vport vport端口
     * @param string $UpdateTime 更新时间
     * @param string $MasterZone 主可用区
     * @param string $PhysicalZone 物理可用区
     * @param string $Zone 可用区
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("CynosVersionTag",$param) and $param["CynosVersionTag"] !== null) {
            $this->CynosVersionTag = $param["CynosVersionTag"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("IsFreeze",$param) and $param["IsFreeze"] !== null) {
            $this->IsFreeze = $param["IsFreeze"];
        }

        if (array_key_exists("NetAddrs",$param) and $param["NetAddrs"] !== null) {
            $this->NetAddrs = [];
            foreach ($param["NetAddrs"] as $key => $value){
                $obj = new NetAddr();
                $obj->deserialize($value);
                array_push($this->NetAddrs, $obj);
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
