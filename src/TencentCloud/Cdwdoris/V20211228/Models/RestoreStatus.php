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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 恢复任务信息
 *
 * @method integer getJobId() 获取恢复任务id
 * @method void setJobId(integer $JobId) 设置恢复任务id
 * @method string getLabel() 获取恢复任务标签
 * @method void setLabel(string $Label) 设置恢复任务标签
 * @method string getTimestamp() 获取恢复任务时间戳
 * @method void setTimestamp(string $Timestamp) 设置恢复任务时间戳
 * @method string getDbName() 获取恢复任务所在库
 * @method void setDbName(string $DbName) 设置恢复任务所在库
 * @method string getState() 获取恢复任务状态
 * @method void setState(string $State) 设置恢复任务状态
 * @method boolean getAllowLoad() 获取恢复时是否允许导入
 * @method void setAllowLoad(boolean $AllowLoad) 设置恢复时是否允许导入
 * @method string getReplicationNum() 获取副本数
 * @method void setReplicationNum(string $ReplicationNum) 设置副本数
 * @method string getReplicaAllocation() 获取副本数
 * @method void setReplicaAllocation(string $ReplicaAllocation) 设置副本数
 * @method string getRestoreObjects() 获取恢复对象
 * @method void setRestoreObjects(string $RestoreObjects) 设置恢复对象
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getMetaPreparedTime() 获取元数据准备时间
 * @method void setMetaPreparedTime(string $MetaPreparedTime) 设置元数据准备时间
 * @method string getSnapshotFinishedTime() 获取快照结束时间
 * @method void setSnapshotFinishedTime(string $SnapshotFinishedTime) 设置快照结束时间
 * @method string getDownloadFinishedTime() 获取下载结束时间
 * @method void setDownloadFinishedTime(string $DownloadFinishedTime) 设置下载结束时间
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
 * @method integer getTimeout() 获取作业超时时间
 * @method void setTimeout(integer $Timeout) 设置作业超时时间
 * @method boolean getReserveReplica() 获取是否保持源表中的副本数
 * @method void setReserveReplica(boolean $ReserveReplica) 设置是否保持源表中的副本数
 * @method boolean getReserveDynamicPartitionEnable() 获取是否保持源表中的动态分区
 * @method void setReserveDynamicPartitionEnable(boolean $ReserveDynamicPartitionEnable) 设置是否保持源表中的动态分区
 * @method integer getBackupJobId() 获取备份实例id
 * @method void setBackupJobId(integer $BackupJobId) 设置备份实例id
 * @method integer getTaskId() 获取实例对应snapshot的id
 * @method void setTaskId(integer $TaskId) 设置实例对应snapshot的id
 */
class RestoreStatus extends AbstractModel
{
    /**
     * @var integer 恢复任务id
     */
    public $JobId;

    /**
     * @var string 恢复任务标签
     */
    public $Label;

    /**
     * @var string 恢复任务时间戳
     */
    public $Timestamp;

    /**
     * @var string 恢复任务所在库
     */
    public $DbName;

    /**
     * @var string 恢复任务状态
     */
    public $State;

    /**
     * @var boolean 恢复时是否允许导入
     */
    public $AllowLoad;

    /**
     * @var string 副本数
     */
    public $ReplicationNum;

    /**
     * @var string 副本数
     */
    public $ReplicaAllocation;

    /**
     * @var string 恢复对象
     */
    public $RestoreObjects;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 元数据准备时间
     */
    public $MetaPreparedTime;

    /**
     * @var string 快照结束时间
     */
    public $SnapshotFinishedTime;

    /**
     * @var string 下载结束时间
     */
    public $DownloadFinishedTime;

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
     * @var integer 作业超时时间
     */
    public $Timeout;

    /**
     * @var boolean 是否保持源表中的副本数
     */
    public $ReserveReplica;

    /**
     * @var boolean 是否保持源表中的动态分区
     */
    public $ReserveDynamicPartitionEnable;

    /**
     * @var integer 备份实例id
     */
    public $BackupJobId;

    /**
     * @var integer 实例对应snapshot的id
     */
    public $TaskId;

    /**
     * @param integer $JobId 恢复任务id
     * @param string $Label 恢复任务标签
     * @param string $Timestamp 恢复任务时间戳
     * @param string $DbName 恢复任务所在库
     * @param string $State 恢复任务状态
     * @param boolean $AllowLoad 恢复时是否允许导入
     * @param string $ReplicationNum 副本数
     * @param string $ReplicaAllocation 副本数
     * @param string $RestoreObjects 恢复对象
     * @param string $CreateTime 创建时间
     * @param string $MetaPreparedTime 元数据准备时间
     * @param string $SnapshotFinishedTime 快照结束时间
     * @param string $DownloadFinishedTime 下载结束时间
     * @param string $FinishedTime 结束时间
     * @param string $UnfinishedTasks 未完成任务
     * @param string $Progress 进度
     * @param string $TaskErrMsg 错误信息
     * @param string $Status 状态
     * @param integer $Timeout 作业超时时间
     * @param boolean $ReserveReplica 是否保持源表中的副本数
     * @param boolean $ReserveDynamicPartitionEnable 是否保持源表中的动态分区
     * @param integer $BackupJobId 备份实例id
     * @param integer $TaskId 实例对应snapshot的id
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

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AllowLoad",$param) and $param["AllowLoad"] !== null) {
            $this->AllowLoad = $param["AllowLoad"];
        }

        if (array_key_exists("ReplicationNum",$param) and $param["ReplicationNum"] !== null) {
            $this->ReplicationNum = $param["ReplicationNum"];
        }

        if (array_key_exists("ReplicaAllocation",$param) and $param["ReplicaAllocation"] !== null) {
            $this->ReplicaAllocation = $param["ReplicaAllocation"];
        }

        if (array_key_exists("RestoreObjects",$param) and $param["RestoreObjects"] !== null) {
            $this->RestoreObjects = $param["RestoreObjects"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MetaPreparedTime",$param) and $param["MetaPreparedTime"] !== null) {
            $this->MetaPreparedTime = $param["MetaPreparedTime"];
        }

        if (array_key_exists("SnapshotFinishedTime",$param) and $param["SnapshotFinishedTime"] !== null) {
            $this->SnapshotFinishedTime = $param["SnapshotFinishedTime"];
        }

        if (array_key_exists("DownloadFinishedTime",$param) and $param["DownloadFinishedTime"] !== null) {
            $this->DownloadFinishedTime = $param["DownloadFinishedTime"];
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

        if (array_key_exists("ReserveReplica",$param) and $param["ReserveReplica"] !== null) {
            $this->ReserveReplica = $param["ReserveReplica"];
        }

        if (array_key_exists("ReserveDynamicPartitionEnable",$param) and $param["ReserveDynamicPartitionEnable"] !== null) {
            $this->ReserveDynamicPartitionEnable = $param["ReserveDynamicPartitionEnable"];
        }

        if (array_key_exists("BackupJobId",$param) and $param["BackupJobId"] !== null) {
            $this->BackupJobId = $param["BackupJobId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
