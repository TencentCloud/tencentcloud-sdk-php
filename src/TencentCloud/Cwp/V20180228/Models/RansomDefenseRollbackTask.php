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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防勒索回滚任务
 *
 * @method integer getId() 获取任务ID
 * @method void setId(integer $Id) 设置任务ID
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getMachineName() 获取主机名称
 * @method void setMachineName(string $MachineName) 设置主机名称
 * @method integer getStatus() 获取回滚任务状态：0进行中，1成功，2失败
 * @method void setStatus(integer $Status) 设置回滚任务状态：0进行中，1成功，2失败
 * @method string getDisks() 获取硬盘id列表，;分隔
 * @method void setDisks(string $Disks) 设置硬盘id列表，;分隔
 * @method string getCreateTime() 获取操作时间
 * @method void setCreateTime(string $CreateTime) 设置操作时间
 * @method string getBackupTime() 获取快照时间
 * @method void setBackupTime(string $BackupTime) 设置快照时间
 * @method string getModifyTime() 获取Status!=0时为完成时间
 * @method void setModifyTime(string $ModifyTime) 设置Status!=0时为完成时间
 * @method RegionInfo getRegionInfo() 获取可用区信息
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置可用区信息
 * @method string getInstanceId() 获取主机示例ID
 * @method void setInstanceId(string $InstanceId) 设置主机示例ID
 * @method string getMachineType() 获取主机类型
 * @method void setMachineType(string $MachineType) 设置主机类型
 */
class RansomDefenseRollbackTask extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $Id;

    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 主机名称
     */
    public $MachineName;

    /**
     * @var integer 回滚任务状态：0进行中，1成功，2失败
     */
    public $Status;

    /**
     * @var string 硬盘id列表，;分隔
     */
    public $Disks;

    /**
     * @var string 操作时间
     */
    public $CreateTime;

    /**
     * @var string 快照时间
     */
    public $BackupTime;

    /**
     * @var string Status!=0时为完成时间
     */
    public $ModifyTime;

    /**
     * @var RegionInfo 可用区信息
     */
    public $RegionInfo;

    /**
     * @var string 主机示例ID
     */
    public $InstanceId;

    /**
     * @var string 主机类型
     */
    public $MachineType;

    /**
     * @param integer $Id 任务ID
     * @param string $Uuid 主机Uuid
     * @param string $Quuid 主机Quuid
     * @param string $MachineName 主机名称
     * @param integer $Status 回滚任务状态：0进行中，1成功，2失败
     * @param string $Disks 硬盘id列表，;分隔
     * @param string $CreateTime 操作时间
     * @param string $BackupTime 快照时间
     * @param string $ModifyTime Status!=0时为完成时间
     * @param RegionInfo $RegionInfo 可用区信息
     * @param string $InstanceId 主机示例ID
     * @param string $MachineType 主机类型
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Disks",$param) and $param["Disks"] !== null) {
            $this->Disks = $param["Disks"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }
    }
}
