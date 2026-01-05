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
 * 工作流调度模式下的任务运行概要信息
 *
 * @method string getExecutionId() 获取任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionId(string $ExecutionId) 设置任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionState() 获取执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIP、运行中:RUNNING
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionState(string $ExecutionState) 设置执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIP、运行中:RUNNING
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowExecutionId() 获取工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowExecutionId(string $WorkflowExecutionId) 设置工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskVersionId() 获取任务版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskVersionId(string $TaskVersionId) 设置任务版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWaitTime() 获取等待时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitTime(string $WaitTime) 设置等待时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取所属资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置所属资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCode() 获取错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(string $ErrorCode) 设置错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserUin() 获取运行账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserUin(string $ExecuteUserUin) 设置运行账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreaterUin() 获取创建人 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreaterUin(string $CreaterUin) 设置创建人 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobId() 获取执行平台执行 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置执行平台执行 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependenceFinishedTime() 获取依赖任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependenceFinishedTime(string $DependenceFinishedTime) 设置依赖任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueStartTime() 获取任务下发执行平台时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueStartTime(string $QueueStartTime) 设置任务下发执行平台时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPendingStartTime() 获取开始等待资源时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPendingStartTime(string $PendingStartTime) 设置开始等待资源时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueCostTime() 获取排队时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueCostTime(string $QueueCostTime) 设置排队时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionTime() 获取运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionTime(string $ExecutionTime) 设置运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllCostTime() 获取总花费时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllCostTime(string $AllCostTime) 设置总花费时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeZone() 获取时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeZone(string $TimeZone) 设置时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDependOnList() 获取依赖上游任务 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependOnList(array $DependOnList) 设置依赖上游任务 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunParams() 获取运行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunParams(string $RunParams) 设置运行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeExtensions() 获取任务扩展信息，包含脚本路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeExtensions(string $TaskTypeExtensions) 设置任务扩展信息，包含脚本路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryTimes() 获取重试次数，为 0 则表示首次运行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryTimes(integer $RetryTimes) 设置重试次数，为 0 则表示首次运行
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLeftCoordinate() 获取左侧坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置左侧坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopCoordinate() 获取顶部坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopCoordinate(float $TopCoordinate) 设置顶部坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupId() 获取资源组 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCodeStr() 获取错误码描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodeStr(string $ErrorCodeStr) 设置错误码描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUin() 获取创建人 UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUin(string $CreateUin) 设置创建人 UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIssueTime() 获取下发执行平台时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssueTime(string $IssueTime) 设置下发执行平台时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserName() 获取运行人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserName(string $ExecuteUserName) 设置运行人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRerunTimes() 获取重跑次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRerunTimes(integer $RerunTimes) 设置重跑次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLatestExecution() 获取是否是最新一次运行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLatestExecution(boolean $IsLatestExecution) 设置是否是最新一次运行
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskExecutionState() 获取任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskExecutionState(string $TaskExecutionState) 设置任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserNameInCharge() 获取责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserNameInCharge(string $UserNameInCharge) 设置责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUinInCharge() 获取责任人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUinInCharge(string $UserUinInCharge) 设置责任人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimezone() 获取时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimezone(string $Timezone) 设置时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowParams() 获取工作流运行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowParams(string $WorkflowParams) 设置工作流运行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportRerun() 获取是否支持重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportRerun(boolean $SupportRerun) 设置是否支持重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowExecutionState() 获取工作流运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowExecutionState(string $WorkflowExecutionState) 设置工作流运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionResult() 获取任务执行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionResult(string $ExecutionResult) 设置任务执行结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerTaskRunBrief extends AbstractModel
{
    /**
     * @var string 任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionId;

    /**
     * @var string 执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIP、运行中:RUNNING
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionState;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

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
     * @var string 任务 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 任务版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskVersionId;

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
     * @var string 所属资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var string 错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string 运行账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserUin;

    /**
     * @var string 创建人 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreaterUin;

    /**
     * @var string 执行平台执行 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 创建时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 依赖任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependenceFinishedTime;

    /**
     * @var string 任务下发执行平台时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueStartTime;

    /**
     * @var string 开始等待资源时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PendingStartTime;

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
     * @var string 排队时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueCostTime;

    /**
     * @var string 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionTime;

    /**
     * @var string 总花费时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllCostTime;

    /**
     * @var string 时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeZone;

    /**
     * @var array 依赖上游任务 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependOnList;

    /**
     * @var string 运行参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunParams;

    /**
     * @var string 任务扩展信息，包含脚本路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeExtensions;

    /**
     * @var integer 重试次数，为 0 则表示首次运行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryTimes;

    /**
     * @var float 左侧坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftCoordinate;

    /**
     * @var float 顶部坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopCoordinate;

    /**
     * @var string 资源组 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var string 错误码描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodeStr;

    /**
     * @var string 创建人 UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUin;

    /**
     * @var string 下发执行平台时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IssueTime;

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
     * @var string 运行人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserName;

    /**
     * @var integer 重跑次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RerunTimes;

    /**
     * @var boolean 是否是最新一次运行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLatestExecution;

    /**
     * @var string 任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskExecutionState;

    /**
     * @var string 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserNameInCharge;

    /**
     * @var string 责任人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUinInCharge;

    /**
     * @var string 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string 时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timezone;

    /**
     * @var string 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var integer 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string 工作流运行参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowParams;

    /**
     * @var boolean 是否支持重跑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportRerun;

    /**
     * @var string 工作流运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowExecutionState;

    /**
     * @var string 任务执行结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionResult;

    /**
     * @param string $ExecutionId 任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionState 执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIP、运行中:RUNNING
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowExecutionId 工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskVersionId 任务版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType 触发类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WaitTime 等待时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup 所属资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCode 错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserUin 运行账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreaterUin 创建人 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobId 执行平台执行 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependenceFinishedTime 依赖任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueStartTime 任务下发执行平台时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PendingStartTime 开始等待资源时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime 运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime 运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueCostTime 排队时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionTime 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllCostTime 总花费时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeZone 时区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DependOnList 依赖上游任务 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunParams 运行参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeExtensions 任务扩展信息，包含脚本路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryTimes 重试次数，为 0 则表示首次运行
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LeftCoordinate 左侧坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopCoordinate 顶部坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupId 资源组 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCodeStr 错误码描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUin 创建人 UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IssueTime 下发执行平台时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserName 运行人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RerunTimes 重跑次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLatestExecution 是否是最新一次运行
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskExecutionState 任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserNameInCharge 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUinInCharge 责任人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Timezone 时区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowParams 工作流运行参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportRerun 是否支持重跑
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowExecutionState 工作流运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionResult 任务执行结果
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

        if (array_key_exists("ExecutionState",$param) and $param["ExecutionState"] !== null) {
            $this->ExecutionState = $param["ExecutionState"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskVersionId",$param) and $param["TaskVersionId"] !== null) {
            $this->TaskVersionId = $param["TaskVersionId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("WaitTime",$param) and $param["WaitTime"] !== null) {
            $this->WaitTime = $param["WaitTime"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ExecuteUserUin",$param) and $param["ExecuteUserUin"] !== null) {
            $this->ExecuteUserUin = $param["ExecuteUserUin"];
        }

        if (array_key_exists("CreaterUin",$param) and $param["CreaterUin"] !== null) {
            $this->CreaterUin = $param["CreaterUin"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DependenceFinishedTime",$param) and $param["DependenceFinishedTime"] !== null) {
            $this->DependenceFinishedTime = $param["DependenceFinishedTime"];
        }

        if (array_key_exists("QueueStartTime",$param) and $param["QueueStartTime"] !== null) {
            $this->QueueStartTime = $param["QueueStartTime"];
        }

        if (array_key_exists("PendingStartTime",$param) and $param["PendingStartTime"] !== null) {
            $this->PendingStartTime = $param["PendingStartTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("QueueCostTime",$param) and $param["QueueCostTime"] !== null) {
            $this->QueueCostTime = $param["QueueCostTime"];
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = $param["ExecutionTime"];
        }

        if (array_key_exists("AllCostTime",$param) and $param["AllCostTime"] !== null) {
            $this->AllCostTime = $param["AllCostTime"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("DependOnList",$param) and $param["DependOnList"] !== null) {
            $this->DependOnList = $param["DependOnList"];
        }

        if (array_key_exists("RunParams",$param) and $param["RunParams"] !== null) {
            $this->RunParams = $param["RunParams"];
        }

        if (array_key_exists("TaskTypeExtensions",$param) and $param["TaskTypeExtensions"] !== null) {
            $this->TaskTypeExtensions = $param["TaskTypeExtensions"];
        }

        if (array_key_exists("RetryTimes",$param) and $param["RetryTimes"] !== null) {
            $this->RetryTimes = $param["RetryTimes"];
        }

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ErrorCodeStr",$param) and $param["ErrorCodeStr"] !== null) {
            $this->ErrorCodeStr = $param["ErrorCodeStr"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("IssueTime",$param) and $param["IssueTime"] !== null) {
            $this->IssueTime = $param["IssueTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("ExecuteUserName",$param) and $param["ExecuteUserName"] !== null) {
            $this->ExecuteUserName = $param["ExecuteUserName"];
        }

        if (array_key_exists("RerunTimes",$param) and $param["RerunTimes"] !== null) {
            $this->RerunTimes = $param["RerunTimes"];
        }

        if (array_key_exists("IsLatestExecution",$param) and $param["IsLatestExecution"] !== null) {
            $this->IsLatestExecution = $param["IsLatestExecution"];
        }

        if (array_key_exists("TaskExecutionState",$param) and $param["TaskExecutionState"] !== null) {
            $this->TaskExecutionState = $param["TaskExecutionState"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("UserNameInCharge",$param) and $param["UserNameInCharge"] !== null) {
            $this->UserNameInCharge = $param["UserNameInCharge"];
        }

        if (array_key_exists("UserUinInCharge",$param) and $param["UserUinInCharge"] !== null) {
            $this->UserUinInCharge = $param["UserUinInCharge"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            $this->Timezone = $param["Timezone"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = $param["WorkflowParams"];
        }

        if (array_key_exists("SupportRerun",$param) and $param["SupportRerun"] !== null) {
            $this->SupportRerun = $param["SupportRerun"];
        }

        if (array_key_exists("WorkflowExecutionState",$param) and $param["WorkflowExecutionState"] !== null) {
            $this->WorkflowExecutionState = $param["WorkflowExecutionState"];
        }

        if (array_key_exists("ExecutionResult",$param) and $param["ExecutionResult"] !== null) {
            $this->ExecutionResult = $param["ExecutionResult"];
        }
    }
}
