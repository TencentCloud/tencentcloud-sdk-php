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
 * @method string getTaskId() 获取<p>恢复任务 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>恢复任务 ID</p>
 * @method string getBackupId() 获取<p>关联备份点 ID</p>
 * @method void setBackupId(string $BackupId) 设置<p>关联备份点 ID</p>
 * @method string getResourceId() 获取<p>源实例 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>源实例 ID</p>
 * @method string getTargetResourceId() 获取<p>目标实例 ID</p>
 * @method void setTargetResourceId(string $TargetResourceId) 设置<p>目标实例 ID</p>
 * @method array getRestorePaths() 获取<p>恢复路径列表</p>
 * @method void setRestorePaths(array $RestorePaths) 设置<p>恢复路径列表</p>
 * @method string getTargetLocation() 获取<p>目标恢复位置</p>
 * @method void setTargetLocation(string $TargetLocation) 设置<p>目标恢复位置</p>
 * @method string getStatus() 获取<p>任务状态</p>
 * @method void setStatus(string $Status) 设置<p>任务状态</p>
 * @method integer getTotalFileCount() 获取<p>需恢复文件总数</p>
 * @method void setTotalFileCount(integer $TotalFileCount) 设置<p>需恢复文件总数</p>
 * @method integer getTotalSize() 获取<p>需恢复数据总量（字节）</p>
 * @method void setTotalSize(integer $TotalSize) 设置<p>需恢复数据总量（字节）</p>
 * @method string getTotalSizeFormatted() 获取<p>需恢复数据总量（格式化：1024 进制，保留两位小数，单位 B/KiB/MiB/GiB/TiB/PiB，如 &quot;1.50 GiB&quot;）</p>
 * @method void setTotalSizeFormatted(string $TotalSizeFormatted) 设置<p>需恢复数据总量（格式化：1024 进制，保留两位小数，单位 B/KiB/MiB/GiB/TiB/PiB，如 &quot;1.50 GiB&quot;）</p>
 * @method integer getRestoreFileCount() 获取<p>已恢复文件数</p>
 * @method void setRestoreFileCount(integer $RestoreFileCount) 设置<p>已恢复文件数</p>
 * @method integer getRestoreSize() 获取<p>已恢复数据量（字节）</p>
 * @method void setRestoreSize(integer $RestoreSize) 设置<p>已恢复数据量（字节）</p>
 * @method string getRestoreSizeFormatted() 获取<p>已恢复数据量（格式化，口径同 TotalSizeFormatted，如 &quot;512.00 MiB&quot;）</p>
 * @method void setRestoreSizeFormatted(string $RestoreSizeFormatted) 设置<p>已恢复数据量（格式化，口径同 TotalSizeFormatted，如 &quot;512.00 MiB&quot;）</p>
 * @method float getProgress() 获取<p>恢复进度（0-100）</p>
 * @method void setProgress(float $Progress) 设置<p>恢复进度（0-100）</p>
 * @method string getJobId() 获取<p>关联 Job ID</p>
 * @method void setJobId(string $JobId) 设置<p>关联 Job ID</p>
 * @method string getStartTime() 获取<p>任务开始时间（ISO 格式）</p>
 * @method void setStartTime(string $StartTime) 设置<p>任务开始时间（ISO 格式）</p>
 * @method string getEndTime() 获取<p>任务结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>任务结束时间</p>
 * @method string getCreatedTime() 获取<p>任务创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>任务创建时间</p>
 * @method string getFailReason() 获取<p>恢复任务失败原因</p>
 * @method void setFailReason(string $FailReason) 设置<p>恢复任务失败原因</p>
 * @method string getConflictStrategy() 获取<p>冲突处理策略：skip-跳过/overwrite-覆盖/newer-保留最新版本/if_changed-内容变化时覆盖</p>
 * @method void setConflictStrategy(string $ConflictStrategy) 设置<p>冲突处理策略：skip-跳过/overwrite-覆盖/newer-保留最新版本/if_changed-内容变化时覆盖</p>
 * @method boolean getIsOriginalPath() 获取<p>是否为原路径恢复</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOriginalPath(boolean $IsOriginalPath) 设置<p>是否为原路径恢复</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloudResourceId() 获取<p>源端腾讯云资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudResourceId(string $CloudResourceId) 设置<p>源端腾讯云资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetCloudResourceId() 获取<p>目标端腾讯云资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetCloudResourceId(string $TargetCloudResourceId) 设置<p>目标端腾讯云资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RestoreTask extends AbstractModel
{
    /**
     * @var string <p>恢复任务 ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>关联备份点 ID</p>
     */
    public $BackupId;

    /**
     * @var string <p>源实例 ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>目标实例 ID</p>
     */
    public $TargetResourceId;

    /**
     * @var array <p>恢复路径列表</p>
     */
    public $RestorePaths;

    /**
     * @var string <p>目标恢复位置</p>
     */
    public $TargetLocation;

    /**
     * @var string <p>任务状态</p>
     */
    public $Status;

    /**
     * @var integer <p>需恢复文件总数</p>
     */
    public $TotalFileCount;

    /**
     * @var integer <p>需恢复数据总量（字节）</p>
     */
    public $TotalSize;

    /**
     * @var string <p>需恢复数据总量（格式化：1024 进制，保留两位小数，单位 B/KiB/MiB/GiB/TiB/PiB，如 &quot;1.50 GiB&quot;）</p>
     */
    public $TotalSizeFormatted;

    /**
     * @var integer <p>已恢复文件数</p>
     */
    public $RestoreFileCount;

    /**
     * @var integer <p>已恢复数据量（字节）</p>
     */
    public $RestoreSize;

    /**
     * @var string <p>已恢复数据量（格式化，口径同 TotalSizeFormatted，如 &quot;512.00 MiB&quot;）</p>
     */
    public $RestoreSizeFormatted;

    /**
     * @var float <p>恢复进度（0-100）</p>
     */
    public $Progress;

    /**
     * @var string <p>关联 Job ID</p>
     */
    public $JobId;

    /**
     * @var string <p>任务开始时间（ISO 格式）</p>
     */
    public $StartTime;

    /**
     * @var string <p>任务结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>恢复任务失败原因</p>
     */
    public $FailReason;

    /**
     * @var string <p>冲突处理策略：skip-跳过/overwrite-覆盖/newer-保留最新版本/if_changed-内容变化时覆盖</p>
     */
    public $ConflictStrategy;

    /**
     * @var boolean <p>是否为原路径恢复</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsOriginalPath;

    /**
     * @var string <p>源端腾讯云资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudResourceId;

    /**
     * @var string <p>目标端腾讯云资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetCloudResourceId;

    /**
     * @param string $TaskId <p>恢复任务 ID</p>
     * @param string $BackupId <p>关联备份点 ID</p>
     * @param string $ResourceId <p>源实例 ID</p>
     * @param string $TargetResourceId <p>目标实例 ID</p>
     * @param array $RestorePaths <p>恢复路径列表</p>
     * @param string $TargetLocation <p>目标恢复位置</p>
     * @param string $Status <p>任务状态</p>
     * @param integer $TotalFileCount <p>需恢复文件总数</p>
     * @param integer $TotalSize <p>需恢复数据总量（字节）</p>
     * @param string $TotalSizeFormatted <p>需恢复数据总量（格式化：1024 进制，保留两位小数，单位 B/KiB/MiB/GiB/TiB/PiB，如 &quot;1.50 GiB&quot;）</p>
     * @param integer $RestoreFileCount <p>已恢复文件数</p>
     * @param integer $RestoreSize <p>已恢复数据量（字节）</p>
     * @param string $RestoreSizeFormatted <p>已恢复数据量（格式化，口径同 TotalSizeFormatted，如 &quot;512.00 MiB&quot;）</p>
     * @param float $Progress <p>恢复进度（0-100）</p>
     * @param string $JobId <p>关联 Job ID</p>
     * @param string $StartTime <p>任务开始时间（ISO 格式）</p>
     * @param string $EndTime <p>任务结束时间</p>
     * @param string $CreatedTime <p>任务创建时间</p>
     * @param string $FailReason <p>恢复任务失败原因</p>
     * @param string $ConflictStrategy <p>冲突处理策略：skip-跳过/overwrite-覆盖/newer-保留最新版本/if_changed-内容变化时覆盖</p>
     * @param boolean $IsOriginalPath <p>是否为原路径恢复</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloudResourceId <p>源端腾讯云资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetCloudResourceId <p>目标端腾讯云资源ID</p>
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

        if (array_key_exists("IsOriginalPath",$param) and $param["IsOriginalPath"] !== null) {
            $this->IsOriginalPath = $param["IsOriginalPath"];
        }

        if (array_key_exists("CloudResourceId",$param) and $param["CloudResourceId"] !== null) {
            $this->CloudResourceId = $param["CloudResourceId"];
        }

        if (array_key_exists("TargetCloudResourceId",$param) and $param["TargetCloudResourceId"] !== null) {
            $this->TargetCloudResourceId = $param["TargetCloudResourceId"];
        }
    }
}
