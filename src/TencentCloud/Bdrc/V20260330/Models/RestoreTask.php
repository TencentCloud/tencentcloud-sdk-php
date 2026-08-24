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
 * 恢复任务信息
 *
 * @method string getTaskId() 获取恢复任务 ID
 * @method void setTaskId(string $TaskId) 设置恢复任务 ID
 * @method string getBackupId() 获取关联备份点 ID
 * @method void setBackupId(string $BackupId) 设置关联备份点 ID
 * @method string getResourceId() 获取源实例 ID
 * @method void setResourceId(string $ResourceId) 设置源实例 ID
 * @method string getTargetResourceId() 获取目标实例 ID
 * @method void setTargetResourceId(string $TargetResourceId) 设置目标实例 ID
 * @method array getRestorePaths() 获取恢复路径列表
 * @method void setRestorePaths(array $RestorePaths) 设置恢复路径列表
 * @method string getTargetLocation() 获取目标恢复位置
 * @method void setTargetLocation(string $TargetLocation) 设置目标恢复位置
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method integer getTotalFileCount() 获取需恢复文件总数
 * @method void setTotalFileCount(integer $TotalFileCount) 设置需恢复文件总数
 * @method integer getTotalSize() 获取需恢复数据总量（字节）
 * @method void setTotalSize(integer $TotalSize) 设置需恢复数据总量（字节）
 * @method string getTotalSizeFormatted() 获取需恢复数据总量（格式化，如 "1.5 GB"）
 * @method void setTotalSizeFormatted(string $TotalSizeFormatted) 设置需恢复数据总量（格式化，如 "1.5 GB"）
 * @method integer getRestoreFileCount() 获取已恢复文件数
 * @method void setRestoreFileCount(integer $RestoreFileCount) 设置已恢复文件数
 * @method integer getRestoreSize() 获取已恢复数据量（字节）
 * @method void setRestoreSize(integer $RestoreSize) 设置已恢复数据量（字节）
 * @method string getRestoreSizeFormatted() 获取已恢复数据量（格式化）
 * @method void setRestoreSizeFormatted(string $RestoreSizeFormatted) 设置已恢复数据量（格式化）
 * @method float getProgress() 获取恢复进度（0-100）
 * @method void setProgress(float $Progress) 设置恢复进度（0-100）
 * @method string getJobId() 获取关联 Job ID
 * @method void setJobId(string $JobId) 设置关联 Job ID
 * @method string getStartTime() 获取任务开始时间（ISO 格式）
 * @method void setStartTime(string $StartTime) 设置任务开始时间（ISO 格式）
 * @method string getEndTime() 获取任务结束时间
 * @method void setEndTime(string $EndTime) 设置任务结束时间
 * @method string getCreatedTime() 获取任务创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置任务创建时间
 * @method string getFailReason() 获取恢复任务失败原因
 * @method void setFailReason(string $FailReason) 设置恢复任务失败原因
 * @method string getConflictStrategy() 获取冲突处理策略：skip-跳过/overwrite-覆盖/newer-保留最新版本/if_changed-内容变化时覆盖
 * @method void setConflictStrategy(string $ConflictStrategy) 设置冲突处理策略：skip-跳过/overwrite-覆盖/newer-保留最新版本/if_changed-内容变化时覆盖
 */
class RestoreTask extends AbstractModel
{
    /**
     * @var string 恢复任务 ID
     */
    public $TaskId;

    /**
     * @var string 关联备份点 ID
     */
    public $BackupId;

    /**
     * @var string 源实例 ID
     */
    public $ResourceId;

    /**
     * @var string 目标实例 ID
     */
    public $TargetResourceId;

    /**
     * @var array 恢复路径列表
     */
    public $RestorePaths;

    /**
     * @var string 目标恢复位置
     */
    public $TargetLocation;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var integer 需恢复文件总数
     */
    public $TotalFileCount;

    /**
     * @var integer 需恢复数据总量（字节）
     */
    public $TotalSize;

    /**
     * @var string 需恢复数据总量（格式化，如 "1.5 GB"）
     */
    public $TotalSizeFormatted;

    /**
     * @var integer 已恢复文件数
     */
    public $RestoreFileCount;

    /**
     * @var integer 已恢复数据量（字节）
     */
    public $RestoreSize;

    /**
     * @var string 已恢复数据量（格式化）
     */
    public $RestoreSizeFormatted;

    /**
     * @var float 恢复进度（0-100）
     */
    public $Progress;

    /**
     * @var string 关联 Job ID
     */
    public $JobId;

    /**
     * @var string 任务开始时间（ISO 格式）
     */
    public $StartTime;

    /**
     * @var string 任务结束时间
     */
    public $EndTime;

    /**
     * @var string 任务创建时间
     */
    public $CreatedTime;

    /**
     * @var string 恢复任务失败原因
     */
    public $FailReason;

    /**
     * @var string 冲突处理策略：skip-跳过/overwrite-覆盖/newer-保留最新版本/if_changed-内容变化时覆盖
     */
    public $ConflictStrategy;

    /**
     * @param string $TaskId 恢复任务 ID
     * @param string $BackupId 关联备份点 ID
     * @param string $ResourceId 源实例 ID
     * @param string $TargetResourceId 目标实例 ID
     * @param array $RestorePaths 恢复路径列表
     * @param string $TargetLocation 目标恢复位置
     * @param string $Status 任务状态
     * @param integer $TotalFileCount 需恢复文件总数
     * @param integer $TotalSize 需恢复数据总量（字节）
     * @param string $TotalSizeFormatted 需恢复数据总量（格式化，如 "1.5 GB"）
     * @param integer $RestoreFileCount 已恢复文件数
     * @param integer $RestoreSize 已恢复数据量（字节）
     * @param string $RestoreSizeFormatted 已恢复数据量（格式化）
     * @param float $Progress 恢复进度（0-100）
     * @param string $JobId 关联 Job ID
     * @param string $StartTime 任务开始时间（ISO 格式）
     * @param string $EndTime 任务结束时间
     * @param string $CreatedTime 任务创建时间
     * @param string $FailReason 恢复任务失败原因
     * @param string $ConflictStrategy 冲突处理策略：skip-跳过/overwrite-覆盖/newer-保留最新版本/if_changed-内容变化时覆盖
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

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TargetResourceId",$param) and $param["TargetResourceId"] !== null) {
            $this->TargetResourceId = $param["TargetResourceId"];
        }

        if (array_key_exists("RestorePaths",$param) and $param["RestorePaths"] !== null) {
            $this->RestorePaths = $param["RestorePaths"];
        }

        if (array_key_exists("TargetLocation",$param) and $param["TargetLocation"] !== null) {
            $this->TargetLocation = $param["TargetLocation"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TotalFileCount",$param) and $param["TotalFileCount"] !== null) {
            $this->TotalFileCount = $param["TotalFileCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("TotalSizeFormatted",$param) and $param["TotalSizeFormatted"] !== null) {
            $this->TotalSizeFormatted = $param["TotalSizeFormatted"];
        }

        if (array_key_exists("RestoreFileCount",$param) and $param["RestoreFileCount"] !== null) {
            $this->RestoreFileCount = $param["RestoreFileCount"];
        }

        if (array_key_exists("RestoreSize",$param) and $param["RestoreSize"] !== null) {
            $this->RestoreSize = $param["RestoreSize"];
        }

        if (array_key_exists("RestoreSizeFormatted",$param) and $param["RestoreSizeFormatted"] !== null) {
            $this->RestoreSizeFormatted = $param["RestoreSizeFormatted"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("ConflictStrategy",$param) and $param["ConflictStrategy"] !== null) {
            $this->ConflictStrategy = $param["ConflictStrategy"];
        }
    }
}
