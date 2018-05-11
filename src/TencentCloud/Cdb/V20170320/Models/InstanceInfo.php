<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getWanStatus() 获取外网状态
 * @method void setWanStatus(integer $WanStatus) 设置外网状态
 * @method string getZone() 获取可用区信息
 * @method void setZone(string $Zone) 设置可用区信息
 * @method integer getInitFlag() 获取初始化标志
 * @method void setInitFlag(integer $InitFlag) 设置初始化标志
 * @method array getRoVipInfo() 获取只读vip信息
 * @method void setRoVipInfo(array $RoVipInfo) 设置只读vip信息
 * @method integer getMemory() 获取内存容量
 * @method void setMemory(integer $Memory) 设置内存容量
 * @method integer getStatus() 获取实例状态
 * @method void setStatus(integer $Status) 设置实例状态
 * @method integer getVpcId() 获取私有网络ID
 * @method void setVpcId(integer $VpcId) 设置私有网络ID
 * @method SlaveInfo getSlaveInfo() 获取备机信息
 * @method void setSlaveInfo(SlaveInfo $SlaveInfo) 设置备机信息
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getVolume() 获取硬盘容量
 * @method void setVolume(integer $Volume) 设置硬盘容量
 * @method integer getAutoRenew() 获取自动续费标志
 * @method void setAutoRenew(integer $AutoRenew) 设置自动续费标志
 * @method integer getProtectMode() 获取数据复制方式
 * @method void setProtectMode(integer $ProtectMode) 设置数据复制方式
 * @method array getRoGroups() 获取只读组信息
 * @method void setRoGroups(array $RoGroups) 设置只读组信息
 * @method integer getSubnetId() 获取子网ID
 * @method void setSubnetId(integer $SubnetId) 设置子网ID
 * @method integer getInstanceType() 获取实例类型
 * @method void setInstanceType(integer $InstanceType) 设置实例类型
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method string getDeadlineTime() 获取到期时间
 * @method void setDeadlineTime(string $DeadlineTime) 设置到期时间
 * @method integer getDeployMode() 获取可用区部署方式
 * @method void setDeployMode(integer $DeployMode) 设置可用区部署方式
 * @method integer getTaskStatus() 获取实例任务状态
 * @method void setTaskStatus(integer $TaskStatus) 设置实例任务状态
 * @method MasterInfo getMasterInfo() 获取主实例信息
 * @method void setMasterInfo(MasterInfo $MasterInfo) 设置主实例信息
 * @method string getDeviceType() 获取实例售卖机型
 * @method void setDeviceType(string $DeviceType) 设置实例售卖机型
 * @method string getEngineVersion() 获取内核版本
 * @method void setEngineVersion(string $EngineVersion) 设置内核版本
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method array getDrInfo() 获取灾备实例信息
 * @method void setDrInfo(array $DrInfo) 设置灾备实例信息
 * @method string getWanDomain() 获取外网域名
 * @method void setWanDomain(string $WanDomain) 设置外网域名
 * @method integer getWanPort() 获取外网端口号
 * @method void setWanPort(integer $WanPort) 设置外网端口号
 * @method integer getPayType() 获取付费类型
 * @method void setPayType(integer $PayType) 设置付费类型
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getVip() 获取实例IP
 * @method void setVip(string $Vip) 设置实例IP
 * @method integer getVport() 获取端口号
 * @method void setVport(integer $Vport) 设置端口号
 * @method integer getCdbError() 获取实例状态
 * @method void setCdbError(integer $CdbError) 设置实例状态
 * @method string getUniqVpcId() 获取私有网络描述符
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络描述符
 * @method string getUniqSubnetId() 获取子网描述符
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置子网描述符
 */

/**
 *实例详细信息
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var integer 外网状态
     */
    public $WanStatus;

    /**
     * @var string 可用区信息
     */
    public $Zone;

    /**
     * @var integer 初始化标志
     */
    public $InitFlag;

    /**
     * @var array 只读vip信息
     */
    public $RoVipInfo;

    /**
     * @var integer 内存容量
     */
    public $Memory;

    /**
     * @var integer 实例状态
     */
    public $Status;

    /**
     * @var integer 私有网络ID
     */
    public $VpcId;

    /**
     * @var SlaveInfo 备机信息
     */
    public $SlaveInfo;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 硬盘容量
     */
    public $Volume;

    /**
     * @var integer 自动续费标志
     */
    public $AutoRenew;

    /**
     * @var integer 数据复制方式
     */
    public $ProtectMode;

    /**
     * @var array 只读组信息
     */
    public $RoGroups;

    /**
     * @var integer 子网ID
     */
    public $SubnetId;

    /**
     * @var integer 实例类型
     */
    public $InstanceType;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var string 到期时间
     */
    public $DeadlineTime;

    /**
     * @var integer 可用区部署方式
     */
    public $DeployMode;

    /**
     * @var integer 实例任务状态
     */
    public $TaskStatus;

    /**
     * @var MasterInfo 主实例信息
     */
    public $MasterInfo;

    /**
     * @var string 实例售卖机型
     */
    public $DeviceType;

    /**
     * @var string 内核版本
     */
    public $EngineVersion;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var array 灾备实例信息
     */
    public $DrInfo;

    /**
     * @var string 外网域名
     */
    public $WanDomain;

    /**
     * @var integer 外网端口号
     */
    public $WanPort;

    /**
     * @var integer 付费类型
     */
    public $PayType;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例IP
     */
    public $Vip;

    /**
     * @var integer 端口号
     */
    public $Vport;

    /**
     * @var integer 实例状态
     */
    public $CdbError;

    /**
     * @var string 私有网络描述符
     */
    public $UniqVpcId;

    /**
     * @var string 子网描述符
     */
    public $UniqSubnetId;
    /**
     * @param integer $WanStatus 外网状态
     * @param string $Zone 可用区信息
     * @param integer $InitFlag 初始化标志
     * @param array $RoVipInfo 只读vip信息
     * @param integer $Memory 内存容量
     * @param integer $Status 实例状态
     * @param integer $VpcId 私有网络ID
     * @param SlaveInfo $SlaveInfo 备机信息
     * @param string $InstanceId 实例ID
     * @param integer $Volume 硬盘容量
     * @param integer $AutoRenew 自动续费标志
     * @param integer $ProtectMode 数据复制方式
     * @param array $RoGroups 只读组信息
     * @param integer $SubnetId 子网ID
     * @param integer $InstanceType 实例类型
     * @param integer $ProjectId 项目ID
     * @param string $Region 地域信息
     * @param string $DeadlineTime 到期时间
     * @param integer $DeployMode 可用区部署方式
     * @param integer $TaskStatus 实例任务状态
     * @param MasterInfo $MasterInfo 主实例信息
     * @param string $DeviceType 实例售卖机型
     * @param string $EngineVersion 内核版本
     * @param string $InstanceName 实例名称
     * @param array $DrInfo 灾备实例信息
     * @param string $WanDomain 外网域名
     * @param integer $WanPort 外网端口号
     * @param integer $PayType 付费类型
     * @param string $CreateTime 创建时间
     * @param string $Vip 实例IP
     * @param integer $Vport 端口号
     * @param integer $CdbError 实例状态
     * @param string $UniqVpcId 私有网络描述符
     * @param string $UniqSubnetId 子网描述符
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
            $this->RoVipInfo = [];
            foreach ($param["RoVipInfo"] as $key => $value){
                $obj = new RoVipInfo();
                $obj->deserialize($value);
                array_push($this->RoVipInfo, $obj);
            }
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
    }
}
