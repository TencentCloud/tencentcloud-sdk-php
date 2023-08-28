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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询复杂任务详情返回结果
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method integer getStatus() 获取任务状态1:NEW,2:RUNNING,3:COMPLETED ,4:FAILED
 * @method void setStatus(integer $Status) 设置任务状态1:NEW,2:RUNNING,3:COMPLETED ,4:FAILED
 * @method string getFailReason() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getProgress() 获取进度（0-1）
 * @method void setProgress(float $Progress) 设置进度（0-1）
 * @method string getAction() 获取任务操作类型，批量任务类型以Batch开头
 * @method void setAction(string $Action) 设置任务操作类型，批量任务类型以Batch开头
 * @method string getActionZhDesc() 获取操作类型中文描述
 * @method void setActionZhDesc(string $ActionZhDesc) 设置操作类型中文描述
 * @method integer getTaskType() 获取任务类型 1.简单 2.复杂 3.子任务
 * @method void setTaskType(integer $TaskType) 设置任务类型 1.简单 2.复杂 3.子任务
 * @method string getResourceId() 获取任务资源id（复杂任务该字段无效）
 * @method void setResourceId(string $ResourceId) 设置任务资源id（复杂任务该字段无效）
 * @method integer getTotal() 获取总任务数（仅复杂任务有效）
 * @method void setTotal(integer $Total) 设置总任务数（仅复杂任务有效）
 * @method integer getSuccessCount() 获取成功任务数（仅复杂任务有效）
 * @method void setSuccessCount(integer $SuccessCount) 设置成功任务数（仅复杂任务有效）
 * @method integer getFailCount() 获取失败任务数（仅复杂任务有效）
 * @method void setFailCount(integer $FailCount) 设置失败任务数（仅复杂任务有效）
 * @method integer getRunningCount() 获取运行任务数（仅复杂任务有效）
 * @method void setRunningCount(integer $RunningCount) 设置运行任务数（仅复杂任务有效）
 * @method string getStartedAt() 获取启动任务时间
 * @method void setStartedAt(string $StartedAt) 设置启动任务时间
 * @method string getCreatedAt() 获取创建任务时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建任务时间
 * @method string getUpdatedAt() 获取更新任务时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新任务时间
 * @method integer getRuntime() 获取任务运行时间，单位ms
 * @method void setRuntime(integer $Runtime) 设置任务运行时间，单位ms
 */
class TaskData extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var integer 任务状态1:NEW,2:RUNNING,3:COMPLETED ,4:FAILED
     */
    public $Status;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @var float 进度（0-1）
     */
    public $Progress;

    /**
     * @var string 任务操作类型，批量任务类型以Batch开头
     */
    public $Action;

    /**
     * @var string 操作类型中文描述
     */
    public $ActionZhDesc;

    /**
     * @var integer 任务类型 1.简单 2.复杂 3.子任务
     */
    public $TaskType;

    /**
     * @var string 任务资源id（复杂任务该字段无效）
     */
    public $ResourceId;

    /**
     * @var integer 总任务数（仅复杂任务有效）
     */
    public $Total;

    /**
     * @var integer 成功任务数（仅复杂任务有效）
     */
    public $SuccessCount;

    /**
     * @var integer 失败任务数（仅复杂任务有效）
     */
    public $FailCount;

    /**
     * @var integer 运行任务数（仅复杂任务有效）
     */
    public $RunningCount;

    /**
     * @var string 启动任务时间
     */
    public $StartedAt;

    /**
     * @var string 创建任务时间
     */
    public $CreatedAt;

    /**
     * @var string 更新任务时间
     */
    public $UpdatedAt;

    /**
     * @var integer 任务运行时间，单位ms
     */
    public $Runtime;

    /**
     * @param string $TaskId 任务ID
     * @param integer $Status 任务状态1:NEW,2:RUNNING,3:COMPLETED ,4:FAILED
     * @param string $FailReason 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Progress 进度（0-1）
     * @param string $Action 任务操作类型，批量任务类型以Batch开头
     * @param string $ActionZhDesc 操作类型中文描述
     * @param integer $TaskType 任务类型 1.简单 2.复杂 3.子任务
     * @param string $ResourceId 任务资源id（复杂任务该字段无效）
     * @param integer $Total 总任务数（仅复杂任务有效）
     * @param integer $SuccessCount 成功任务数（仅复杂任务有效）
     * @param integer $FailCount 失败任务数（仅复杂任务有效）
     * @param integer $RunningCount 运行任务数（仅复杂任务有效）
     * @param string $StartedAt 启动任务时间
     * @param string $CreatedAt 创建任务时间
     * @param string $UpdatedAt 更新任务时间
     * @param integer $Runtime 任务运行时间，单位ms
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionZhDesc",$param) and $param["ActionZhDesc"] !== null) {
            $this->ActionZhDesc = $param["ActionZhDesc"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("RunningCount",$param) and $param["RunningCount"] !== null) {
            $this->RunningCount = $param["RunningCount"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }
    }
}
