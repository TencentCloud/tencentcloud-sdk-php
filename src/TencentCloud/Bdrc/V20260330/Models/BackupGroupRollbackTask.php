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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份组回滚任务
 *
 * @method string getTaskId() 获取备份组回滚任务
 * @method void setTaskId(string $TaskId) 设置备份组回滚任务
 * @method string getSourceInstanceId() 获取源实例ID
 * @method void setSourceInstanceId(string $SourceInstanceId) 设置源实例ID
 * @method string getTargetInstanceId() 获取目标实例ID
 * @method void setTargetInstanceId(string $TargetInstanceId) 设置目标实例ID
 * @method string getBackupGroupId() 获取备份组ID
 * @method void setBackupGroupId(string $BackupGroupId) 设置备份组ID
 * @method string getRollbackType() 获取恢复类型：ORIGINAL-原实例恢复，NEW-新实例恢复
 * @method void setRollbackType(string $RollbackType) 设置恢复类型：ORIGINAL-原实例恢复，NEW-新实例恢复
 * @method string getStatus() 获取任务状态。取值包括"init"、"migrating"、"done"、"failed"。
 * @method void setStatus(string $Status) 设置任务状态。取值包括"init"、"migrating"、"done"、"failed"。
 * @method integer getPercent() 获取进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(integer $Percent) 设置进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取APP ID
 * @method void setAppId(integer $AppId) 设置APP ID
 * @method string getBackupGroupName() 获取备份点名称
 * @method void setBackupGroupName(string $BackupGroupName) 设置备份点名称
 * @method string getFailReason() 获取恢复失败原因
 * @method void setFailReason(string $FailReason) 设置恢复失败原因
 */
class BackupGroupRollbackTask extends AbstractModel
{
    /**
     * @var string 备份组回滚任务
     */
    public $TaskId;

    /**
     * @var string 源实例ID
     */
    public $SourceInstanceId;

    /**
     * @var string 目标实例ID
     */
    public $TargetInstanceId;

    /**
     * @var string 备份组ID
     */
    public $BackupGroupId;

    /**
     * @var string 恢复类型：ORIGINAL-原实例恢复，NEW-新实例恢复
     */
    public $RollbackType;

    /**
     * @var string 任务状态。取值包括"init"、"migrating"、"done"、"failed"。
     */
    public $Status;

    /**
     * @var integer 进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer APP ID
     */
    public $AppId;

    /**
     * @var string 备份点名称
     */
    public $BackupGroupName;

    /**
     * @var string 恢复失败原因
     */
    public $FailReason;

    /**
     * @param string $TaskId 备份组回滚任务
     * @param string $SourceInstanceId 源实例ID
     * @param string $TargetInstanceId 目标实例ID
     * @param string $BackupGroupId 备份组ID
     * @param string $RollbackType 恢复类型：ORIGINAL-原实例恢复，NEW-新实例恢复
     * @param string $Status 任务状态。取值包括"init"、"migrating"、"done"、"failed"。
     * @param integer $Percent 进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId APP ID
     * @param string $BackupGroupName 备份点名称
     * @param string $FailReason 恢复失败原因
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }

        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }

        if (array_key_exists("BackupGroupId",$param) and $param["BackupGroupId"] !== null) {
            $this->BackupGroupId = $param["BackupGroupId"];
        }

        if (array_key_exists("RollbackType",$param) and $param["RollbackType"] !== null) {
            $this->RollbackType = $param["RollbackType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BackupGroupName",$param) and $param["BackupGroupName"] !== null) {
            $this->BackupGroupName = $param["BackupGroupName"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }
    }
}
