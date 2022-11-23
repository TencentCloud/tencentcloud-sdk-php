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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机详情
 *
 * @method string getHostId() 获取主机Id
 * @method void setHostId(string $HostId) 设置主机Id
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getStatus() 获取主机状态
 * @method void setStatus(integer $Status) 设置主机状态
 * @method integer getAssignStatus() 获取分配DB实例状态,0:可分配,1:不可分配
 * @method void setAssignStatus(integer $AssignStatus) 设置分配DB实例状态,0:可分配,1:不可分配
 * @method integer getHostType() 获取主机类型, 0:物理机, 1:cvm本地盘, 2:cvm云盘
 * @method void setHostType(integer $HostType) 设置主机类型, 0:物理机, 1:cvm本地盘, 2:cvm云盘
 * @method integer getDbNum() 获取DB实例数
 * @method void setDbNum(integer $DbNum) 设置DB实例数
 * @method integer getCpuSpec() 获取主机CPU(单位:核数)
 * @method void setCpuSpec(integer $CpuSpec) 设置主机CPU(单位:核数)
 * @method integer getCpuAssigned() 获取已分配CPU(单位:核数)
 * @method void setCpuAssigned(integer $CpuAssigned) 设置已分配CPU(单位:核数)
 * @method integer getCpuAssignable() 获取可分配CPU(单位:核数)
 * @method void setCpuAssignable(integer $CpuAssignable) 设置可分配CPU(单位:核数)
 * @method integer getMemorySpec() 获取主机内存(单位:GB)
 * @method void setMemorySpec(integer $MemorySpec) 设置主机内存(单位:GB)
 * @method integer getMemoryAssigned() 获取已分配内存(单位:GB)
 * @method void setMemoryAssigned(integer $MemoryAssigned) 设置已分配内存(单位:GB)
 * @method integer getMemoryAssignable() 获取可分配内存(单位:GB)
 * @method void setMemoryAssignable(integer $MemoryAssignable) 设置可分配内存(单位:GB)
 * @method integer getDiskSpec() 获取主机磁盘(单位:GB)
 * @method void setDiskSpec(integer $DiskSpec) 设置主机磁盘(单位:GB)
 * @method integer getDiskAssigned() 获取已分配磁盘(单位:GB)
 * @method void setDiskAssigned(integer $DiskAssigned) 设置已分配磁盘(单位:GB)
 * @method integer getDiskAssignable() 获取可分配磁盘(GB)
 * @method void setDiskAssignable(integer $DiskAssignable) 设置可分配磁盘(GB)
 * @method float getCpuRatio() 获取CPU分配比
 * @method void setCpuRatio(float $CpuRatio) 设置CPU分配比
 * @method float getMemoryRatio() 获取内存分配比
 * @method void setMemoryRatio(float $MemoryRatio) 设置内存分配比
 * @method float getDiskRatio() 获取磁盘分配比
 * @method void setDiskRatio(float $DiskRatio) 设置磁盘分配比
 * @method string getMachineName() 获取机型名称
 * @method void setMachineName(string $MachineName) 设置机型名称
 * @method string getMachineType() 获取机型类别
 * @method void setMachineType(string $MachineType) 设置机型类别
 * @method string getPidTag() 获取计费标签
 * @method void setPidTag(string $PidTag) 设置计费标签
 * @method integer getPid() 获取计费ID
 * @method void setPid(integer $Pid) 设置计费ID
 * @method string getInstanceId() 获取独享集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置独享集群实例Id
 */
class HostDetail extends AbstractModel
{
    /**
     * @var string 主机Id
     */
    public $HostId;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 主机状态
     */
    public $Status;

    /**
     * @var integer 分配DB实例状态,0:可分配,1:不可分配
     */
    public $AssignStatus;

    /**
     * @var integer 主机类型, 0:物理机, 1:cvm本地盘, 2:cvm云盘
     */
    public $HostType;

    /**
     * @var integer DB实例数
     */
    public $DbNum;

    /**
     * @var integer 主机CPU(单位:核数)
     */
    public $CpuSpec;

    /**
     * @var integer 已分配CPU(单位:核数)
     */
    public $CpuAssigned;

    /**
     * @var integer 可分配CPU(单位:核数)
     */
    public $CpuAssignable;

    /**
     * @var integer 主机内存(单位:GB)
     */
    public $MemorySpec;

    /**
     * @var integer 已分配内存(单位:GB)
     */
    public $MemoryAssigned;

    /**
     * @var integer 可分配内存(单位:GB)
     */
    public $MemoryAssignable;

    /**
     * @var integer 主机磁盘(单位:GB)
     */
    public $DiskSpec;

    /**
     * @var integer 已分配磁盘(单位:GB)
     */
    public $DiskAssigned;

    /**
     * @var integer 可分配磁盘(GB)
     */
    public $DiskAssignable;

    /**
     * @var float CPU分配比
     */
    public $CpuRatio;

    /**
     * @var float 内存分配比
     */
    public $MemoryRatio;

    /**
     * @var float 磁盘分配比
     */
    public $DiskRatio;

    /**
     * @var string 机型名称
     */
    public $MachineName;

    /**
     * @var string 机型类别
     */
    public $MachineType;

    /**
     * @var string 计费标签
     */
    public $PidTag;

    /**
     * @var integer 计费ID
     */
    public $Pid;

    /**
     * @var string 独享集群实例Id
     */
    public $InstanceId;

    /**
     * @param string $HostId 主机Id
     * @param string $HostName 主机名称
     * @param string $Zone 可用区
     * @param integer $Status 主机状态
     * @param integer $AssignStatus 分配DB实例状态,0:可分配,1:不可分配
     * @param integer $HostType 主机类型, 0:物理机, 1:cvm本地盘, 2:cvm云盘
     * @param integer $DbNum DB实例数
     * @param integer $CpuSpec 主机CPU(单位:核数)
     * @param integer $CpuAssigned 已分配CPU(单位:核数)
     * @param integer $CpuAssignable 可分配CPU(单位:核数)
     * @param integer $MemorySpec 主机内存(单位:GB)
     * @param integer $MemoryAssigned 已分配内存(单位:GB)
     * @param integer $MemoryAssignable 可分配内存(单位:GB)
     * @param integer $DiskSpec 主机磁盘(单位:GB)
     * @param integer $DiskAssigned 已分配磁盘(单位:GB)
     * @param integer $DiskAssignable 可分配磁盘(GB)
     * @param float $CpuRatio CPU分配比
     * @param float $MemoryRatio 内存分配比
     * @param float $DiskRatio 磁盘分配比
     * @param string $MachineName 机型名称
     * @param string $MachineType 机型类别
     * @param string $PidTag 计费标签
     * @param integer $Pid 计费ID
     * @param string $InstanceId 独享集群实例Id
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AssignStatus",$param) and $param["AssignStatus"] !== null) {
            $this->AssignStatus = $param["AssignStatus"];
        }

        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("DbNum",$param) and $param["DbNum"] !== null) {
            $this->DbNum = $param["DbNum"];
        }

        if (array_key_exists("CpuSpec",$param) and $param["CpuSpec"] !== null) {
            $this->CpuSpec = $param["CpuSpec"];
        }

        if (array_key_exists("CpuAssigned",$param) and $param["CpuAssigned"] !== null) {
            $this->CpuAssigned = $param["CpuAssigned"];
        }

        if (array_key_exists("CpuAssignable",$param) and $param["CpuAssignable"] !== null) {
            $this->CpuAssignable = $param["CpuAssignable"];
        }

        if (array_key_exists("MemorySpec",$param) and $param["MemorySpec"] !== null) {
            $this->MemorySpec = $param["MemorySpec"];
        }

        if (array_key_exists("MemoryAssigned",$param) and $param["MemoryAssigned"] !== null) {
            $this->MemoryAssigned = $param["MemoryAssigned"];
        }

        if (array_key_exists("MemoryAssignable",$param) and $param["MemoryAssignable"] !== null) {
            $this->MemoryAssignable = $param["MemoryAssignable"];
        }

        if (array_key_exists("DiskSpec",$param) and $param["DiskSpec"] !== null) {
            $this->DiskSpec = $param["DiskSpec"];
        }

        if (array_key_exists("DiskAssigned",$param) and $param["DiskAssigned"] !== null) {
            $this->DiskAssigned = $param["DiskAssigned"];
        }

        if (array_key_exists("DiskAssignable",$param) and $param["DiskAssignable"] !== null) {
            $this->DiskAssignable = $param["DiskAssignable"];
        }

        if (array_key_exists("CpuRatio",$param) and $param["CpuRatio"] !== null) {
            $this->CpuRatio = $param["CpuRatio"];
        }

        if (array_key_exists("MemoryRatio",$param) and $param["MemoryRatio"] !== null) {
            $this->MemoryRatio = $param["MemoryRatio"];
        }

        if (array_key_exists("DiskRatio",$param) and $param["DiskRatio"] !== null) {
            $this->DiskRatio = $param["DiskRatio"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("PidTag",$param) and $param["PidTag"] !== null) {
            $this->PidTag = $param["PidTag"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
