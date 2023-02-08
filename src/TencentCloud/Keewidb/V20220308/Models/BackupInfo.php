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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例的备份信息
 *
 * @method string getStartTime() 获取备份开始时间。
 * @method void setStartTime(string $StartTime) 设置备份开始时间。
 * @method string getBackupId() 获取备份 ID。
 * @method void setBackupId(string $BackupId) 设置备份 ID。
 * @method string getBackupType() 获取备份类型。<ul><li>1：手动备份，指根据业务运维排障需求，立即执行备份任务的操作。</li> <li>0：自动备份，指根据自动备份策略定时自动发起的备份任务。</li></ul>
 * @method void setBackupType(string $BackupType) 设置备份类型。<ul><li>1：手动备份，指根据业务运维排障需求，立即执行备份任务的操作。</li> <li>0：自动备份，指根据自动备份策略定时自动发起的备份任务。</li></ul>
 * @method string getRemark() 获取备份的备注信息.
 * @method void setRemark(string $Remark) 设置备份的备注信息.
 * @method integer getStatus() 获取备份状态。  <ul><li>1：备份任务被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li> <li>-1：备份已过期。</li><li>3：备份正在被导出。</li> <li>4：备份导出成功。</li></ul>
 * @method void setStatus(integer $Status) 设置备份状态。  <ul><li>1：备份任务被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li> <li>-1：备份已过期。</li><li>3：备份正在被导出。</li> <li>4：备份导出成功。</li></ul>
 * @method integer getLocked() 获取备份是否被锁定。<ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
 * @method void setLocked(integer $Locked) 设置备份是否被锁定。<ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string 备份开始时间。
     */
    public $StartTime;

    /**
     * @var string 备份 ID。
     */
    public $BackupId;

    /**
     * @var string 备份类型。<ul><li>1：手动备份，指根据业务运维排障需求，立即执行备份任务的操作。</li> <li>0：自动备份，指根据自动备份策略定时自动发起的备份任务。</li></ul>
     */
    public $BackupType;

    /**
     * @var string 备份的备注信息.
     */
    public $Remark;

    /**
     * @var integer 备份状态。  <ul><li>1：备份任务被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li> <li>-1：备份已过期。</li><li>3：备份正在被导出。</li> <li>4：备份导出成功。</li></ul>
     */
    public $Status;

    /**
     * @var integer 备份是否被锁定。<ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
     */
    public $Locked;

    /**
     * @param string $StartTime 备份开始时间。
     * @param string $BackupId 备份 ID。
     * @param string $BackupType 备份类型。<ul><li>1：手动备份，指根据业务运维排障需求，立即执行备份任务的操作。</li> <li>0：自动备份，指根据自动备份策略定时自动发起的备份任务。</li></ul>
     * @param string $Remark 备份的备注信息.
     * @param integer $Status 备份状态。  <ul><li>1：备份任务被其它流程锁定。</li><li>2：备份正常，没有被任何流程锁定。</li> <li>-1：备份已过期。</li><li>3：备份正在被导出。</li> <li>4：备份导出成功。</li></ul>
     * @param integer $Locked 备份是否被锁定。<ul><li>0：未被锁定。</li><li>1：已被锁定。</li></ul>
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }
    }
}
