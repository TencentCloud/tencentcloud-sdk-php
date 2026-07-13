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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例的备份数组
 *
 * @method string getStartTime() 获取<p>备份开始时间。</p>
 * @method void setStartTime(string $StartTime) 设置<p>备份开始时间。</p>
 * @method string getBackupId() 获取<p>备份任务ID。</p>
 * @method void setBackupId(string $BackupId) 设置<p>备份任务ID。</p>
 * @method string getBackupType() 获取<p>备份类型。</p><ul><li>1：凌晨系统发起的自动备份。</li><li>0：用户发起的手动备份。</li></ul>
 * @method void setBackupType(string $BackupType) 设置<p>备份类型。</p><ul><li>1：凌晨系统发起的自动备份。</li><li>0：用户发起的手动备份。</li></ul>
 * @method integer getStatus() 获取<p>备份状态。 </p><ul><li>1：备份被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li><li>-1：备份已过期。</li><li>3：备份正在被导出。</li><li>4：备份导出成功。</li></ul>
 * @method void setStatus(integer $Status) 设置<p>备份状态。 </p><ul><li>1：备份被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li><li>-1：备份已过期。</li><li>3：备份正在被导出。</li><li>4：备份导出成功。</li></ul>
 * @method string getRemark() 获取<p>备份的备注信息。</p>
 * @method void setRemark(string $Remark) 设置<p>备份的备注信息。</p>
 * @method integer getLocked() 获取<p>备份是否被锁定。</p><ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
 * @method void setLocked(integer $Locked) 设置<p>备份是否被锁定。</p><ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
 * @method integer getBackupSize() 获取<p>内部字段，用户可忽略。</p>
 * @method void setBackupSize(integer $BackupSize) 设置<p>内部字段，用户可忽略。</p>
 * @method integer getFullBackup() 获取<p>内部字段，用户可忽略。</p>
 * @method void setFullBackup(integer $FullBackup) 设置<p>内部字段，用户可忽略。</p>
 * @method integer getInstanceType() 获取<p>内部字段，用户可忽略。</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>内部字段，用户可忽略。</p>
 * @method string getInstanceId() 获取<p>实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。</p>
 * @method string getInstanceName() 获取<p>实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p>
 * @method string getRegion() 获取<p>本地备份所在地域。</p>
 * @method void setRegion(string $Region) 设置<p>本地备份所在地域。</p>
 * @method string getEndTime() 获取<p>备份结束时间。</p>
 * @method void setEndTime(string $EndTime) 设置<p>备份结束时间。</p>
 * @method string getFileType() 获取<p>备份文件类型。</p>
 * @method void setFileType(string $FileType) 设置<p>备份文件类型。</p>
 * @method string getExpireTime() 获取<p>备份文件过期时间。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>备份文件过期时间。</p>
 * @method boolean getEncrypted() 获取<p>备份文件是否加密</p>
 * @method void setEncrypted(boolean $Encrypted) 设置<p>备份文件是否加密</p>
 */
class RedisBackupSet extends AbstractModel
{
    /**
     * @var string <p>备份开始时间。</p>
     */
    public $StartTime;

    /**
     * @var string <p>备份任务ID。</p>
     */
    public $BackupId;

    /**
     * @var string <p>备份类型。</p><ul><li>1：凌晨系统发起的自动备份。</li><li>0：用户发起的手动备份。</li></ul>
     */
    public $BackupType;

    /**
     * @var integer <p>备份状态。 </p><ul><li>1：备份被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li><li>-1：备份已过期。</li><li>3：备份正在被导出。</li><li>4：备份导出成功。</li></ul>
     */
    public $Status;

    /**
     * @var string <p>备份的备注信息。</p>
     */
    public $Remark;

    /**
     * @var integer <p>备份是否被锁定。</p><ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
     */
    public $Locked;

    /**
     * @var integer <p>内部字段，用户可忽略。</p>
     */
    public $BackupSize;

    /**
     * @var integer <p>内部字段，用户可忽略。</p>
     */
    public $FullBackup;

    /**
     * @var integer <p>内部字段，用户可忽略。</p>
     */
    public $InstanceType;

    /**
     * @var string <p>实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称。</p>
     */
    public $InstanceName;

    /**
     * @var string <p>本地备份所在地域。</p>
     */
    public $Region;

    /**
     * @var string <p>备份结束时间。</p>
     */
    public $EndTime;

    /**
     * @var string <p>备份文件类型。</p>
     */
    public $FileType;

    /**
     * @var string <p>备份文件过期时间。</p>
     */
    public $ExpireTime;

    /**
     * @var boolean <p>备份文件是否加密</p>
     */
    public $Encrypted;

    /**
     * @param string $StartTime <p>备份开始时间。</p>
     * @param string $BackupId <p>备份任务ID。</p>
     * @param string $BackupType <p>备份类型。</p><ul><li>1：凌晨系统发起的自动备份。</li><li>0：用户发起的手动备份。</li></ul>
     * @param integer $Status <p>备份状态。 </p><ul><li>1：备份被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li><li>-1：备份已过期。</li><li>3：备份正在被导出。</li><li>4：备份导出成功。</li></ul>
     * @param string $Remark <p>备份的备注信息。</p>
     * @param integer $Locked <p>备份是否被锁定。</p><ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
     * @param integer $BackupSize <p>内部字段，用户可忽略。</p>
     * @param integer $FullBackup <p>内部字段，用户可忽略。</p>
     * @param integer $InstanceType <p>内部字段，用户可忽略。</p>
     * @param string $InstanceId <p>实例 ID。</p>
     * @param string $InstanceName <p>实例名称。</p>
     * @param string $Region <p>本地备份所在地域。</p>
     * @param string $EndTime <p>备份结束时间。</p>
     * @param string $FileType <p>备份文件类型。</p>
     * @param string $ExpireTime <p>备份文件过期时间。</p>
     * @param boolean $Encrypted <p>备份文件是否加密</p>
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

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }
    }
}
