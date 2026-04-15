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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 归档日志对象
 *
 * @method integer getArchiveLogId() 获取归档日志ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArchiveLogId(integer $ArchiveLogId) 设置归档日志ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBackupDuration() 获取备份耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupDuration(integer $BackupDuration) 设置备份耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupStatus() 获取备份集状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupStatus(string $BackupStatus) 设置备份集状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取备份结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置备份结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpiredTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(string $ExpiredTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取备份文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置备份文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileSize() 获取备份集文件大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置备份集文件大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取备份开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置备份开始时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ArchiveLogModel extends AbstractModel
{
    /**
     * @var integer 归档日志ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArchiveLogId;

    /**
     * @var integer 备份耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupDuration;

    /**
     * @var string 备份集状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupStatus;

    /**
     * @var string 备份结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var string 备份文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var integer 备份集文件大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 备份开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @param integer $ArchiveLogId 归档日志ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BackupDuration 备份耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupStatus 备份集状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 备份结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpiredTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 备份文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileSize 备份集文件大小，单位Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 备份开始时间
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
        if (array_key_exists("ArchiveLogId",$param) and $param["ArchiveLogId"] !== null) {
            $this->ArchiveLogId = $param["ArchiveLogId"];
        }

        if (array_key_exists("BackupDuration",$param) and $param["BackupDuration"] !== null) {
            $this->BackupDuration = $param["BackupDuration"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
