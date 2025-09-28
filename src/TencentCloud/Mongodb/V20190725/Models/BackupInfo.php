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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份信息。
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method integer getBackupType() 获取备份方式。
- 0：自动备份。
- 1：手动备份。
 * @method void setBackupType(integer $BackupType) 设置备份方式。
- 0：自动备份。
- 1：手动备份。
 * @method string getBackupName() 获取备份文件名称。
 * @method void setBackupName(string $BackupName) 设置备份文件名称。
 * @method string getBackupDesc() 获取备份任务备注信息。
 * @method void setBackupDesc(string $BackupDesc) 设置备份任务备注信息。
 * @method integer getBackupSize() 获取备份文件大小，单位：KB。
 * @method void setBackupSize(integer $BackupSize) 设置备份文件大小，单位：KB。
 * @method string getStartTime() 获取备份开始时间。
 * @method void setStartTime(string $StartTime) 设置备份开始时间。
 * @method string getEndTime() 获取备份结束时间。
 * @method void setEndTime(string $EndTime) 设置备份结束时间。
 * @method integer getStatus() 获取备份状态。
- 1：备份中。
- 2：备份成功。
 * @method void setStatus(integer $Status) 设置备份状态。
- 1：备份中。
- 2：备份成功。
 * @method integer getBackupMethod() 获取备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明:**
- 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
- 实例开通存储加密，则备份方式不能为物理备份。
 * @method void setBackupMethod(integer $BackupMethod) 设置备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明:**
- 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
- 实例开通存储加密，则备份方式不能为物理备份。
 * @method integer getBackId() 获取备份记录 ID。
 * @method void setBackId(integer $BackId) 设置备份记录 ID。
 * @method string getDeleteTime() 获取备份删除时间。
 * @method void setDeleteTime(string $DeleteTime) 设置备份删除时间。
 * @method string getBackupRegion() 获取异地备份地域。
 * @method void setBackupRegion(string $BackupRegion) 设置异地备份地域。
 * @method string getRestoreTime() 获取备份支持的回档时间。
 * @method void setRestoreTime(string $RestoreTime) 设置备份支持的回档时间。
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 备份方式。
- 0：自动备份。
- 1：手动备份。
     */
    public $BackupType;

    /**
     * @var string 备份文件名称。
     */
    public $BackupName;

    /**
     * @var string 备份任务备注信息。
     */
    public $BackupDesc;

    /**
     * @var integer 备份文件大小，单位：KB。
     */
    public $BackupSize;

    /**
     * @var string 备份开始时间。
     */
    public $StartTime;

    /**
     * @var string 备份结束时间。
     */
    public $EndTime;

    /**
     * @var integer 备份状态。
- 1：备份中。
- 2：备份成功。
     */
    public $Status;

    /**
     * @var integer 备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明:**
- 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
- 实例开通存储加密，则备份方式不能为物理备份。
     */
    public $BackupMethod;

    /**
     * @var integer 备份记录 ID。
     */
    public $BackId;

    /**
     * @var string 备份删除时间。
     */
    public $DeleteTime;

    /**
     * @var string 异地备份地域。
     */
    public $BackupRegion;

    /**
     * @var string 备份支持的回档时间。
     */
    public $RestoreTime;

    /**
     * @param string $InstanceId 实例ID。
     * @param integer $BackupType 备份方式。
- 0：自动备份。
- 1：手动备份。
     * @param string $BackupName 备份文件名称。
     * @param string $BackupDesc 备份任务备注信息。
     * @param integer $BackupSize 备份文件大小，单位：KB。
     * @param string $StartTime 备份开始时间。
     * @param string $EndTime 备份结束时间。
     * @param integer $Status 备份状态。
- 1：备份中。
- 2：备份成功。
     * @param integer $BackupMethod 备份方式。
- 0：逻辑备份。
- 1：物理备份。
- 3：快照备份。
**说明:**
- 通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。
- 实例开通存储加密，则备份方式不能为物理备份。
     * @param integer $BackId 备份记录 ID。
     * @param string $DeleteTime 备份删除时间。
     * @param string $BackupRegion 异地备份地域。
     * @param string $RestoreTime 备份支持的回档时间。
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

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("BackupDesc",$param) and $param["BackupDesc"] !== null) {
            $this->BackupDesc = $param["BackupDesc"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackId",$param) and $param["BackId"] !== null) {
            $this->BackId = $param["BackId"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("BackupRegion",$param) and $param["BackupRegion"] !== null) {
            $this->BackupRegion = $param["BackupRegion"];
        }

        if (array_key_exists("RestoreTime",$param) and $param["RestoreTime"] !== null) {
            $this->RestoreTime = $param["RestoreTime"];
        }
    }
}
