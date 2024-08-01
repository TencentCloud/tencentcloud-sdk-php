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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份任务的进度详情
 *
 * @method integer getJobId() 获取备份任务id
 * @method void setJobId(integer $JobId) 设置备份任务id
 * @method string getSnapshotName() 获取快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
 * @method string getDbName() 获取库名
 * @method void setDbName(string $DbName) 设置库名
 * @method string getState() 获取状态
 * @method void setState(string $State) 设置状态
 * @method string getBackupObjects() 获取备份对象
 * @method void setBackupObjects(string $BackupObjects) 设置备份对象
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getSnapshotFinishedTime() 获取快照结束时间
 * @method void setSnapshotFinishedTime(string $SnapshotFinishedTime) 设置快照结束时间
 * @method string getUploadFinishedTime() 获取上传结束时间
 * @method void setUploadFinishedTime(string $UploadFinishedTime) 设置上传结束时间
 * @method string getFinishedTime() 获取结束时间
 * @method void setFinishedTime(string $FinishedTime) 设置结束时间
 * @method string getUnfinishedTasks() 获取未完成任务
 * @method void setUnfinishedTasks(string $UnfinishedTasks) 设置未完成任务
 * @method string getProgress() 获取进度
 * @method void setProgress(string $Progress) 设置进度
 * @method string getTaskErrMsg() 获取错误信息
 * @method void setTaskErrMsg(string $TaskErrMsg) 设置错误信息
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method integer getTimeout() 获取超时信息
 * @method void setTimeout(integer $Timeout) 设置超时信息
 * @method integer getBackupJobId() 获取备份实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupJobId(integer $BackupJobId) 设置备份实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskId() 获取实例对应snapshoit的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(integer $TaskId) 设置实例对应snapshoit的id
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupStatus extends AbstractModel
{
    /**
     * @var integer 备份任务id
     */
    public $JobId;

    /**
     * @var string 快照名称
     */
    public $SnapshotName;

    /**
     * @var string 库名
     */
    public $DbName;

    /**
     * @var string 状态
     */
    public $State;

    /**
     * @var string 备份对象
     */
    public $BackupObjects;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 快照结束时间
     */
    public $SnapshotFinishedTime;

    /**
     * @var string 上传结束时间
     */
    public $UploadFinishedTime;

    /**
     * @var string 结束时间
     */
    public $FinishedTime;

    /**
     * @var string 未完成任务
     */
    public $UnfinishedTasks;

    /**
     * @var string 进度
     */
    public $Progress;

    /**
     * @var string 错误信息
     */
    public $TaskErrMsg;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var integer 超时信息
     */
    public $Timeout;

    /**
     * @var integer 备份实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupJobId;

    /**
     * @var integer 实例对应snapshoit的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @param integer $JobId 备份任务id
     * @param string $SnapshotName 快照名称
     * @param string $DbName 库名
     * @param string $State 状态
     * @param string $BackupObjects 备份对象
     * @param string $CreateTime 创建时间
     * @param string $SnapshotFinishedTime 快照结束时间
     * @param string $UploadFinishedTime 上传结束时间
     * @param string $FinishedTime 结束时间
     * @param string $UnfinishedTasks 未完成任务
     * @param string $Progress 进度
     * @param string $TaskErrMsg 错误信息
     * @param string $Status 状态
     * @param integer $Timeout 超时信息
     * @param integer $BackupJobId 备份实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskId 实例对应snapshoit的id
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("BackupObjects",$param) and $param["BackupObjects"] !== null) {
            $this->BackupObjects = $param["BackupObjects"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SnapshotFinishedTime",$param) and $param["SnapshotFinishedTime"] !== null) {
            $this->SnapshotFinishedTime = $param["SnapshotFinishedTime"];
        }

        if (array_key_exists("UploadFinishedTime",$param) and $param["UploadFinishedTime"] !== null) {
            $this->UploadFinishedTime = $param["UploadFinishedTime"];
        }

        if (array_key_exists("FinishedTime",$param) and $param["FinishedTime"] !== null) {
            $this->FinishedTime = $param["FinishedTime"];
        }

        if (array_key_exists("UnfinishedTasks",$param) and $param["UnfinishedTasks"] !== null) {
            $this->UnfinishedTasks = $param["UnfinishedTasks"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("TaskErrMsg",$param) and $param["TaskErrMsg"] !== null) {
            $this->TaskErrMsg = $param["TaskErrMsg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("BackupJobId",$param) and $param["BackupJobId"] !== null) {
            $this->BackupJobId = $param["BackupJobId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
