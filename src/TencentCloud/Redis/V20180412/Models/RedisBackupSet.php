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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例的备份数组
 *
 * @method string getStartTime() 获取备份开始时间。
 * @method void setStartTime(string $StartTime) 设置备份开始时间。
 * @method string getBackupId() 获取备份ID。
 * @method void setBackupId(string $BackupId) 设置备份ID。
 * @method string getBackupType() 获取备份类型。

- 1：用户发起的手动备份。
- 0：凌晨系统发起的备份。
 * @method void setBackupType(string $BackupType) 设置备份类型。

- 1：用户发起的手动备份。
- 0：凌晨系统发起的备份。
 * @method integer getStatus() 获取备份状态。 

- 1：备份被其它流程锁定。
- 2：备份正常，没有被任何流程锁定。
- -1：备份已过期。
- 3：备份正在被导出。
- 4：备份导出成功。
 * @method void setStatus(integer $Status) 设置备份状态。 

- 1：备份被其它流程锁定。
- 2：备份正常，没有被任何流程锁定。
- -1：备份已过期。
- 3：备份正在被导出。
- 4：备份导出成功。
 * @method string getRemark() 获取备份的备注信息。
 * @method void setRemark(string $Remark) 设置备份的备注信息。
 * @method integer getLocked() 获取备份是否被锁定。

- 0：未被锁定。
- 1：已被锁定。
 * @method void setLocked(integer $Locked) 设置备份是否被锁定。

- 0：未被锁定。
- 1：已被锁定。
 * @method integer getBackupSize() 获取内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupSize(integer $BackupSize) 设置内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFullBackup() 获取内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullBackup(integer $FullBackup) 设置内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceType() 获取内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(integer $InstanceType) 设置内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getRegion() 获取本地备份所在地域。
 * @method void setRegion(string $Region) 设置本地备份所在地域。
 * @method string getEndTime() 获取备份结束时间。
 * @method void setEndTime(string $EndTime) 设置备份结束时间。
 * @method string getFileType() 获取备份文件类型。
 * @method void setFileType(string $FileType) 设置备份文件类型。
 * @method string getExpireTime() 获取备份文件过期时间。
 * @method void setExpireTime(string $ExpireTime) 设置备份文件过期时间。
 */
class RedisBackupSet extends AbstractModel
{
    /**
     * @var string 备份开始时间。
     */
    public $StartTime;

    /**
     * @var string 备份ID。
     */
    public $BackupId;

    /**
     * @var string 备份类型。

- 1：用户发起的手动备份。
- 0：凌晨系统发起的备份。
     */
    public $BackupType;

    /**
     * @var integer 备份状态。 

- 1：备份被其它流程锁定。
- 2：备份正常，没有被任何流程锁定。
- -1：备份已过期。
- 3：备份正在被导出。
- 4：备份导出成功。
     */
    public $Status;

    /**
     * @var string 备份的备注信息。
     */
    public $Remark;

    /**
     * @var integer 备份是否被锁定。

- 0：未被锁定。
- 1：已被锁定。
     */
    public $Locked;

    /**
     * @var integer 内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupSize;

    /**
     * @var integer 内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullBackup;

    /**
     * @var integer 内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 本地备份所在地域。
     */
    public $Region;

    /**
     * @var string 备份结束时间。
     */
    public $EndTime;

    /**
     * @var string 备份文件类型。
     */
    public $FileType;

    /**
     * @var string 备份文件过期时间。
     */
    public $ExpireTime;

    /**
     * @param string $StartTime 备份开始时间。
     * @param string $BackupId 备份ID。
     * @param string $BackupType 备份类型。

- 1：用户发起的手动备份。
- 0：凌晨系统发起的备份。
     * @param integer $Status 备份状态。 

- 1：备份被其它流程锁定。
- 2：备份正常，没有被任何流程锁定。
- -1：备份已过期。
- 3：备份正在被导出。
- 4：备份导出成功。
     * @param string $Remark 备份的备注信息。
     * @param integer $Locked 备份是否被锁定。

- 0：未被锁定。
- 1：已被锁定。
     * @param integer $BackupSize 内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FullBackup 内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceType 内部字段，用户可忽略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例 ID。
     * @param string $InstanceName 实例名称。
     * @param string $Region 本地备份所在地域。
     * @param string $EndTime 备份结束时间。
     * @param string $FileType 备份文件类型。
     * @param string $ExpireTime 备份文件过期时间。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("FullBackup",$param) and $param["FullBackup"] !== null) {
            $this->FullBackup = $param["FullBackup"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
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

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
