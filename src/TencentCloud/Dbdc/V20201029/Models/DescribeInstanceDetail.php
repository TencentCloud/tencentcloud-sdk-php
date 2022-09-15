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
 * 独享集群详情
 *
 * @method string getInstanceId() 获取独享集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置独享集群实例Id
 * @method string getInstanceName() 获取独享集群实例名称
 * @method void setInstanceName(string $InstanceName) 设置独享集群实例名称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getProductId() 获取产品ID, 0:CDB, 1:TDSQL
 * @method void setProductId(integer $ProductId) 设置产品ID, 0:CDB, 1:TDSQL
 * @method integer getType() 获取集群类型, 0:公有云, 1:金融围笼, 2:CDC集群
 * @method void setType(integer $Type) 设置集群类型, 0:公有云, 1:金融围笼, 2:CDC集群
 * @method integer getHostType() 获取主机类型, 0:物理机, 1:CVM机型, 2:CDC机型
 * @method void setHostType(integer $HostType) 设置主机类型, 0:物理机, 1:CVM机型, 2:CDC机型
 * @method integer getAutoRenewFlag() 获取自动续费标志, 0:未设置, 1:自动续费, 2:到期不续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志, 0:未设置, 1:自动续费, 2:到期不续费
 * @method integer getStatus() 获取集群状态
 * @method void setStatus(integer $Status) 设置集群状态
 * @method string getStatusDesc() 获取集群状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置集群状态描述
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getPeriodEndTime() 获取到期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置到期时间
 * @method integer getHostNum() 获取主机数
 * @method void setHostNum(integer $HostNum) 设置主机数
 * @method integer getDbNum() 获取DB实例数
 * @method void setDbNum(integer $DbNum) 设置DB实例数
 * @method integer getAssignStrategy() 获取分配策略, 0:紧凑, 1:均匀
 * @method void setAssignStrategy(integer $AssignStrategy) 设置分配策略, 0:紧凑, 1:均匀
 * @method integer getCpuSpec() 获取总主机CPU(单位:核数)
 * @method void setCpuSpec(integer $CpuSpec) 设置总主机CPU(单位:核数)
 * @method integer getCpuAssigned() 获取总已分配CPU(单位:核数)
 * @method void setCpuAssigned(integer $CpuAssigned) 设置总已分配CPU(单位:核数)
 * @method integer getCpuAssignable() 获取总可分配CPU(单位:核数)
 * @method void setCpuAssignable(integer $CpuAssignable) 设置总可分配CPU(单位:核数)
 * @method integer getMemorySpec() 获取总主机内存(单位:GB)
 * @method void setMemorySpec(integer $MemorySpec) 设置总主机内存(单位:GB)
 * @method integer getMemoryAssigned() 获取总已分配内存(单位:GB)
 * @method void setMemoryAssigned(integer $MemoryAssigned) 设置总已分配内存(单位:GB)
 * @method integer getMemoryAssignable() 获取总可分配内存(单位:GB)
 * @method void setMemoryAssignable(integer $MemoryAssignable) 设置总可分配内存(单位:GB)
 * @method integer getDiskSpec() 获取总机器磁盘(单位:GB)
 * @method void setDiskSpec(integer $DiskSpec) 设置总机器磁盘(单位:GB)
 * @method integer getDiskAssigned() 获取总已分配磁盘(单位:GB)
 * @method void setDiskAssigned(integer $DiskAssigned) 设置总已分配磁盘(单位:GB)
 * @method integer getDiskAssignable() 获取总可分配磁盘(单位:GB)
 * @method void setDiskAssignable(integer $DiskAssignable) 设置总可分配磁盘(单位:GB)
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getFenceId() 获取金融围笼ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFenceId(string $FenceId) 设置金融围笼ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取所属集群ID(默认集群为空)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置所属集群ID(默认集群为空)
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeInstanceDetail extends AbstractModel
{
    /**
     * @var string 独享集群实例Id
     */
    public $InstanceId;

    /**
     * @var string 独享集群实例名称
     */
    public $InstanceName;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 产品ID, 0:CDB, 1:TDSQL
     */
    public $ProductId;

    /**
     * @var integer 集群类型, 0:公有云, 1:金融围笼, 2:CDC集群
     */
    public $Type;

    /**
     * @var integer 主机类型, 0:物理机, 1:CVM机型, 2:CDC机型
     */
    public $HostType;

    /**
     * @var integer 自动续费标志, 0:未设置, 1:自动续费, 2:到期不续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer 集群状态
     */
    public $Status;

    /**
     * @var string 集群状态描述
     */
    public $StatusDesc;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 到期时间
     */
    public $PeriodEndTime;

    /**
     * @var integer 主机数
     */
    public $HostNum;

    /**
     * @var integer DB实例数
     */
    public $DbNum;

    /**
     * @var integer 分配策略, 0:紧凑, 1:均匀
     */
    public $AssignStrategy;

    /**
     * @var integer 总主机CPU(单位:核数)
     */
    public $CpuSpec;

    /**
     * @var integer 总已分配CPU(单位:核数)
     */
    public $CpuAssigned;

    /**
     * @var integer 总可分配CPU(单位:核数)
     */
    public $CpuAssignable;

    /**
     * @var integer 总主机内存(单位:GB)
     */
    public $MemorySpec;

    /**
     * @var integer 总已分配内存(单位:GB)
     */
    public $MemoryAssigned;

    /**
     * @var integer 总可分配内存(单位:GB)
     */
    public $MemoryAssignable;

    /**
     * @var integer 总机器磁盘(单位:GB)
     */
    public $DiskSpec;

    /**
     * @var integer 总已分配磁盘(单位:GB)
     */
    public $DiskAssigned;

    /**
     * @var integer 总可分配磁盘(单位:GB)
     */
    public $DiskAssignable;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 金融围笼ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FenceId;

    /**
     * @var string 所属集群ID(默认集群为空)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @param string $InstanceId 独享集群实例Id
     * @param string $InstanceName 独享集群实例名称
     * @param string $Region 地域
     * @param integer $ProductId 产品ID, 0:CDB, 1:TDSQL
     * @param integer $Type 集群类型, 0:公有云, 1:金融围笼, 2:CDC集群
     * @param integer $HostType 主机类型, 0:物理机, 1:CVM机型, 2:CDC机型
     * @param integer $AutoRenewFlag 自动续费标志, 0:未设置, 1:自动续费, 2:到期不续费
     * @param integer $Status 集群状态
     * @param string $StatusDesc 集群状态描述
     * @param string $CreateTime 创建时间
     * @param string $PeriodEndTime 到期时间
     * @param integer $HostNum 主机数
     * @param integer $DbNum DB实例数
     * @param integer $AssignStrategy 分配策略, 0:紧凑, 1:均匀
     * @param integer $CpuSpec 总主机CPU(单位:核数)
     * @param integer $CpuAssigned 总已分配CPU(单位:核数)
     * @param integer $CpuAssignable 总可分配CPU(单位:核数)
     * @param integer $MemorySpec 总主机内存(单位:GB)
     * @param integer $MemoryAssigned 总已分配内存(单位:GB)
     * @param integer $MemoryAssignable 总可分配内存(单位:GB)
     * @param integer $DiskSpec 总机器磁盘(单位:GB)
     * @param integer $DiskAssigned 总已分配磁盘(单位:GB)
     * @param integer $DiskAssignable 总可分配磁盘(单位:GB)
     * @param string $Zone 可用区
     * @param string $FenceId 金融围笼ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 所属集群ID(默认集群为空)
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("HostNum",$param) and $param["HostNum"] !== null) {
            $this->HostNum = $param["HostNum"];
        }

        if (array_key_exists("DbNum",$param) and $param["DbNum"] !== null) {
            $this->DbNum = $param["DbNum"];
        }

        if (array_key_exists("AssignStrategy",$param) and $param["AssignStrategy"] !== null) {
            $this->AssignStrategy = $param["AssignStrategy"];
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("FenceId",$param) and $param["FenceId"] !== null) {
            $this->FenceId = $param["FenceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
