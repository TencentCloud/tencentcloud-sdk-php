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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询任务运行列表返回参数
 *
 * @method string getExecutionId() 获取任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionId(string $ExecutionId) 设置任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowExecutionId() 获取工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowExecutionId(string $WorkflowExecutionId) 设置工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWaitTime() 获取等待时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitTime(string $WaitTime) 设置等待时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserUin() 获取运行账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserUin(string $ExecuteUserUin) 设置运行账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTime() 获取计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTime(string $ScheduleTime) 设置计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionTime() 获取运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionTime(string $ExecutionTime) 设置运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryTimes() 获取系统自动重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryTimes(integer $RetryTimes) 设置系统自动重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCodeStr() 获取错误码描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodeStr(string $ErrorCodeStr) 设置错误码描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRerunTimes() 获取用户手动重跑次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRerunTimes(integer $RerunTimes) 设置用户手动重跑次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskExecutionState() 获取任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskExecutionState(string $TaskExecutionState) 设置任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLatestExecution() 获取是否是最新一次运行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLatestExecution(boolean $IsLatestExecution) 设置是否是最新一次运行
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListTriggerTaskRunBrief extends AbstractModel
{
    /**
     * @var string 任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionId;

    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowExecutionId;

    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 触发类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string 等待时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitTime;

    /**
     * @var string 运行账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserUin;

    /**
     * @var string 计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTime;

    /**
     * @var string 运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string 运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionTime;

    /**
     * @var integer 系统自动重试次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryTimes;

    /**
     * @var string 错误码描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodeStr;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var integer 用户手动重跑次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RerunTimes;

    /**
     * @var string 任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskExecutionState;

    /**
     * @var boolean 是否是最新一次运行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLatestExecution;

    /**
     * @param string $ExecutionId 任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowExecutionId 工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType 触发类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WaitTime 等待时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserUin 运行账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTime 计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime 运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime 运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionTime 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryTimes 系统自动重试次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCodeStr 错误码描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RerunTimes 用户手动重跑次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskExecutionState 任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLatestExecution 是否是最新一次运行
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
        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowExecutionId",$param) and $param["WorkflowExecutionId"] !== null) {
            $this->WorkflowExecutionId = $param["WorkflowExecutionId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("WaitTime",$param) and $param["WaitTime"] !== null) {
            $this->WaitTime = $param["WaitTime"];
        }

        if (array_key_exists("ExecuteUserUin",$param) and $param["ExecuteUserUin"] !== null) {
            $this->ExecuteUserUin = $param["ExecuteUserUin"];
        }

        if (array_key_exists("ScheduleTime",$param) and $param["ScheduleTime"] !== null) {
            $this->ScheduleTime = $param["ScheduleTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = $param["ExecutionTime"];
        }

        if (array_key_exists("RetryTimes",$param) and $param["RetryTimes"] !== null) {
            $this->RetryTimes = $param["RetryTimes"];
        }

        if (array_key_exists("ErrorCodeStr",$param) and $param["ErrorCodeStr"] !== null) {
            $this->ErrorCodeStr = $param["ErrorCodeStr"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("RerunTimes",$param) and $param["RerunTimes"] !== null) {
            $this->RerunTimes = $param["RerunTimes"];
        }

        if (array_key_exists("TaskExecutionState",$param) and $param["TaskExecutionState"] !== null) {
            $this->TaskExecutionState = $param["TaskExecutionState"];
        }

        if (array_key_exists("IsLatestExecution",$param) and $param["IsLatestExecution"] !== null) {
            $this->IsLatestExecution = $param["IsLatestExecution"];
        }
    }
}
