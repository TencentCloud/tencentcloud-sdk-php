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
 * libra实例信息
 *
 * @method string getDbMode() 获取数据库模式
 * @method void setDbMode(string $DbMode) 设置数据库模式
 * @method integer getInstanceCpu() 获取cpu核数
 * @method void setInstanceCpu(integer $InstanceCpu) 设置cpu核数
 * @method string getInstanceDeviceType() 获取实例类型
 * @method void setInstanceDeviceType(string $InstanceDeviceType) 设置实例类型
 * @method string getInstanceGroupId() 获取组id
 * @method void setInstanceGroupId(string $InstanceGroupId) 设置组id
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getInstanceMemory() 获取内存
 * @method void setInstanceMemory(integer $InstanceMemory) 设置内存
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getInstancePayMode() 获取付费模式
 * @method void setInstancePayMode(integer $InstancePayMode) 设置付费模式
 * @method string getInstancePeriodEndTime() 获取付费结束时间
 * @method void setInstancePeriodEndTime(string $InstancePeriodEndTime) 设置付费结束时间
 * @method string getInstanceRole() 获取实例角色
 * @method void setInstanceRole(string $InstanceRole) 设置实例角色
 * @method string getInstanceStatus() 获取实例状态
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态
 * @method string getInstanceStatusDesc() 获取实例状态描述
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) 设置实例状态描述
 * @method string getNetType() 获取网络类型
 * @method void setNetType(string $NetType) 设置网络类型
 * @method string getUniqSubnetId() 获取子网id
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置子网id
 * @method string getUniqVpcId() 获取vpcid
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpcid
 * @method string getVip() 获取虚拟ip
 * @method void setVip(string $Vip) 设置虚拟ip
 * @method integer getVport() 获取虚拟端口
 * @method void setVport(integer $Vport) 设置虚拟端口
 * @method string getWanDomain() 获取外网区域
 * @method void setWanDomain(string $WanDomain) 设置外网区域
 * @method string getWanIP() 获取外网ip
 * @method void setWanIP(string $WanIP) 设置外网ip
 * @method integer getWanPort() 获取外网port
 * @method void setWanPort(integer $WanPort) 设置外网port
 * @method string getWanStatus() 获取外网状态
 * @method void setWanStatus(string $WanStatus) 设置外网状态
 * @method integer getInstanceStorage() 获取硬盘
 * @method void setInstanceStorage(integer $InstanceStorage) 设置硬盘
 * @method string getInstanceStorageType() 获取硬盘类型
 * @method void setInstanceStorageType(string $InstanceStorageType) 设置硬盘类型
 */
class LibraInstanceSet extends AbstractModel
{
    /**
     * @var string 数据库模式
     */
    public $DbMode;

    /**
     * @var integer cpu核数
     */
    public $InstanceCpu;

    /**
     * @var string 实例类型
     */
    public $InstanceDeviceType;

    /**
     * @var string 组id
     */
    public $InstanceGroupId;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var integer 内存
     */
    public $InstanceMemory;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 付费模式
     */
    public $InstancePayMode;

    /**
     * @var string 付费结束时间
     */
    public $InstancePeriodEndTime;

    /**
     * @var string 实例角色
     */
    public $InstanceRole;

    /**
     * @var string 实例状态
     */
    public $InstanceStatus;

    /**
     * @var string 实例状态描述
     */
    public $InstanceStatusDesc;

    /**
     * @var string 网络类型
     */
    public $NetType;

    /**
     * @var string 子网id
     */
    public $UniqSubnetId;

    /**
     * @var string vpcid
     */
    public $UniqVpcId;

    /**
     * @var string 虚拟ip
     */
    public $Vip;

    /**
     * @var integer 虚拟端口
     */
    public $Vport;

    /**
     * @var string 外网区域
     */
    public $WanDomain;

    /**
     * @var string 外网ip
     */
    public $WanIP;

    /**
     * @var integer 外网port
     */
    public $WanPort;

    /**
     * @var string 外网状态
     */
    public $WanStatus;

    /**
     * @var integer 硬盘
     */
    public $InstanceStorage;

    /**
     * @var string 硬盘类型
     */
    public $InstanceStorageType;

    /**
     * @param string $DbMode 数据库模式
     * @param integer $InstanceCpu cpu核数
     * @param string $InstanceDeviceType 实例类型
     * @param string $InstanceGroupId 组id
     * @param string $InstanceId 实例id
     * @param integer $InstanceMemory 内存
     * @param string $InstanceName 实例名称
     * @param integer $InstancePayMode 付费模式
     * @param string $InstancePeriodEndTime 付费结束时间
     * @param string $InstanceRole 实例角色
     * @param string $InstanceStatus 实例状态
     * @param string $InstanceStatusDesc 实例状态描述
     * @param string $NetType 网络类型
     * @param string $UniqSubnetId 子网id
     * @param string $UniqVpcId vpcid
     * @param string $Vip 虚拟ip
     * @param integer $Vport 虚拟端口
     * @param string $WanDomain 外网区域
     * @param string $WanIP 外网ip
     * @param integer $WanPort 外网port
     * @param string $WanStatus 外网状态
     * @param integer $InstanceStorage 硬盘
     * @param string $InstanceStorageType 硬盘类型
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
        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("InstanceCpu",$param) and $param["InstanceCpu"] !== null) {
            $this->InstanceCpu = $param["InstanceCpu"];
        }

        if (array_key_exists("InstanceDeviceType",$param) and $param["InstanceDeviceType"] !== null) {
            $this->InstanceDeviceType = $param["InstanceDeviceType"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceMemory",$param) and $param["InstanceMemory"] !== null) {
            $this->InstanceMemory = $param["InstanceMemory"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstancePayMode",$param) and $param["InstancePayMode"] !== null) {
            $this->InstancePayMode = $param["InstancePayMode"];
        }

        if (array_key_exists("InstancePeriodEndTime",$param) and $param["InstancePeriodEndTime"] !== null) {
            $this->InstancePeriodEndTime = $param["InstancePeriodEndTime"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceStatusDesc",$param) and $param["InstanceStatusDesc"] !== null) {
            $this->InstanceStatusDesc = $param["InstanceStatusDesc"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("InstanceStorage",$param) and $param["InstanceStorage"] !== null) {
            $this->InstanceStorage = $param["InstanceStorage"];
        }

        if (array_key_exists("InstanceStorageType",$param) and $param["InstanceStorageType"] !== null) {
            $this->InstanceStorageType = $param["InstanceStorageType"];
        }
    }
}
