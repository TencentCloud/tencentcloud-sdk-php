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
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method integer getBackupType() 获取<p>备份方式。</p><ul><li>0：自动备份。</li><li>1：手动备份。</li></ul>
 * @method void setBackupType(integer $BackupType) 设置<p>备份方式。</p><ul><li>0：自动备份。</li><li>1：手动备份。</li></ul>
 * @method string getBackupName() 获取<p>备份文件名称。</p>
 * @method void setBackupName(string $BackupName) 设置<p>备份文件名称。</p>
 * @method string getBackupDesc() 获取<p>备份任务备注信息。</p>
 * @method void setBackupDesc(string $BackupDesc) 设置<p>备份任务备注信息。</p>
 * @method integer getBackupSize() 获取<p>备份文件大小，单位：KB。</p>
 * @method void setBackupSize(integer $BackupSize) 设置<p>备份文件大小，单位：KB。</p>
 * @method string getStartTime() 获取<p>备份开始时间。</p>
 * @method void setStartTime(string $StartTime) 设置<p>备份开始时间。</p>
 * @method string getEndTime() 获取<p>备份结束时间。</p>
 * @method void setEndTime(string $EndTime) 设置<p>备份结束时间。</p>
 * @method integer getStatus() 获取<p>备份状态。</p><ul><li>1：备份中。</li><li>2：备份成功。</li></ul>
 * @method void setStatus(integer $Status) 设置<p>备份状态。</p><ul><li>1：备份中。</li><li>2：备份成功。</li></ul>
 * @method integer getBackupMethod() 获取<p>备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明:</strong></li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
 * @method void setBackupMethod(integer $BackupMethod) 设置<p>备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明:</strong></li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
 * @method integer getBackId() 获取<p>备份记录 ID。</p>
 * @method void setBackId(integer $BackId) 设置<p>备份记录 ID。</p>
 * @method string getDeleteTime() 获取<p>备份删除时间。</p>
 * @method void setDeleteTime(string $DeleteTime) 设置<p>备份删除时间。</p>
 * @method string getBackupRegion() 获取<p>异地备份地域。</p>
 * @method void setBackupRegion(string $BackupRegion) 设置<p>异地备份地域。</p>
 * @method string getRestoreTime() 获取<p>备份支持的回档时间。</p>
 * @method void setRestoreTime(string $RestoreTime) 设置<p>备份支持的回档时间。</p>
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>备份方式。</p><ul><li>0：自动备份。</li><li>1：手动备份。</li></ul>
     */
    public $BackupType;

    /**
     * @var string <p>备份文件名称。</p>
     */
    public $BackupName;

    /**
     * @var string <p>备份任务备注信息。</p>
     */
    public $BackupDesc;

    /**
     * @var integer <p>备份文件大小，单位：KB。</p>
     */
    public $BackupSize;

    /**
     * @var string <p>备份开始时间。</p>
     */
    public $StartTime;

    /**
     * @var string <p>备份结束时间。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>备份状态。</p><ul><li>1：备份中。</li><li>2：备份成功。</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明:</strong></li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
     */
    public $BackupMethod;

    /**
     * @var integer <p>备份记录 ID。</p>
     */
    public $BackId;

    /**
     * @var string <p>备份删除时间。</p>
     */
    public $DeleteTime;

    /**
     * @var string <p>异地备份地域。</p>
     */
    public $BackupRegion;

    /**
     * @var string <p>备份支持的回档时间。</p>
     */
    public $RestoreTime;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param integer $BackupType <p>备份方式。</p><ul><li>0：自动备份。</li><li>1：手动备份。</li></ul>
     * @param string $BackupName <p>备份文件名称。</p>
     * @param string $BackupDesc <p>备份任务备注信息。</p>
     * @param integer $BackupSize <p>备份文件大小，单位：KB。</p>
     * @param string $StartTime <p>备份开始时间。</p>
     * @param string $EndTime <p>备份结束时间。</p>
     * @param integer $Status <p>备份状态。</p><ul><li>1：备份中。</li><li>2：备份成功。</li></ul>
     * @param integer $BackupMethod <p>备份方式。</p><ul><li>0：逻辑备份。</li><li>1：物理备份。</li><li>3：快照备份。<br><strong>说明:</strong></li><li>通用版实例支持逻辑备份与物理备份。云盘版实例支持物理备份与快照备份，暂不支持逻辑备份。</li><li>实例开通存储加密，则备份方式不能为物理备份。</li></ul>
     * @param integer $BackId <p>备份记录 ID。</p>
     * @param string $DeleteTime <p>备份删除时间。</p>
     * @param string $BackupRegion <p>异地备份地域。</p>
     * @param string $RestoreTime <p>备份支持的回档时间。</p>
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
