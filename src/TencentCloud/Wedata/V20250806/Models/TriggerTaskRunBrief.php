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
 * @method string getExecutionId() 获取<p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionId(string $ExecutionId) 设置<p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionState() 获取<p>执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIP、运行中:RUNNING</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionState(string $ExecutionState) 设置<p>执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIP、运行中:RUNNING</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowExecutionId() 获取<p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowExecutionId(string $WorkflowExecutionId) 设置<p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取<p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskVersionId() 获取<p>任务版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskVersionId(string $TaskVersionId) 设置<p>任务版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取<p>触发类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置<p>触发类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWaitTime() 获取<p>等待时长，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitTime(string $WaitTime) 设置<p>等待时长，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取<p>所属资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置<p>所属资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCode() 获取<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(string $ErrorCode) 设置<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserUin() 获取<p>运行账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserUin(string $ExecuteUserUin) 设置<p>运行账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreaterUin() 获取<p>创建人 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreaterUin(string $CreaterUin) 设置<p>创建人 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobId() 获取<p>执行平台执行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置<p>执行平台执行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTime() 获取<p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTime(string $ScheduleTime) 设置<p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependenceFinishedTime() 获取<p>依赖任务完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependenceFinishedTime(string $DependenceFinishedTime) 设置<p>依赖任务完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueStartTime() 获取<p>任务下发执行平台时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueStartTime(string $QueueStartTime) 设置<p>任务下发执行平台时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPendingStartTime() 获取<p>开始等待资源时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPendingStartTime(string $PendingStartTime) 设置<p>开始等待资源时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取<p>运行开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>运行开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取<p>运行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置<p>运行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueCostTime() 获取<p>排队时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueCostTime(string $QueueCostTime) 设置<p>排队时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionTime() 获取<p>运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionTime(string $ExecutionTime) 设置<p>运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllCostTime() 获取<p>总花费时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllCostTime(string $AllCostTime) 设置<p>总花费时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeZone() 获取<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeZone(string $TimeZone) 设置<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDependOnList() 获取<p>依赖上游任务 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependOnList(array $DependOnList) 设置<p>依赖上游任务 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunParams() 获取<p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunParams(string $RunParams) 设置<p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeExtensions() 获取<p>任务扩展信息，包含脚本路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeExtensions(string $TaskTypeExtensions) 设置<p>任务扩展信息，包含脚本路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryTimes() 获取<p>重试次数，为 0 则表示首次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryTimes(integer $RetryTimes) 设置<p>重试次数，为 0 则表示首次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLeftCoordinate() 获取<p>左侧坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置<p>左侧坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopCoordinate() 获取<p>顶部坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopCoordinate(float $TopCoordinate) 设置<p>顶部坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupId() 获取<p>资源组 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>资源组 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCodeStr() 获取<p>错误码描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodeStr(string $ErrorCodeStr) 设置<p>错误码描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUin() 获取<p>创建人 UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUin(string $CreateUin) 设置<p>创建人 UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIssueTime() 获取<p>下发执行平台时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssueTime(string $IssueTime) 设置<p>下发执行平台时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserName() 获取<p>运行人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserName(string $ExecuteUserName) 设置<p>运行人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRerunTimes() 获取<p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRerunTimes(integer $RerunTimes) 设置<p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLatestExecution() 获取<p>是否是最新一次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLatestExecution(boolean $IsLatestExecution) 设置<p>是否是最新一次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskExecutionState() 获取<p>任务运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskExecutionState(string $TaskExecutionState) 设置<p>任务运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserNameInCharge() 获取<p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserNameInCharge(string $UserNameInCharge) 设置<p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUinInCharge() 获取<p>责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUinInCharge(string $UserUinInCharge) 设置<p>责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取<p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimezone() 获取<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimezone(string $Timezone) 设置<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取<p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置<p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取<p>任务类型id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置<p>任务类型id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowParams() 获取<p>工作流运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowParams(string $WorkflowParams) 设置<p>工作流运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportRerun() 获取<p>是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportRerun(boolean $SupportRerun) 设置<p>是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowExecutionState() 获取<p>工作流运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowExecutionState(string $WorkflowExecutionState) 设置<p>工作流运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionResult() 获取<p>任务执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionResult(string $ExecutionResult) 设置<p>任务执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyTriggerPolicy() 获取<p>依赖策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyTriggerPolicy(string $DependencyTriggerPolicy) 设置<p>依赖策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAssociatedEntityExist() 获取<p>关联实体是否存在，true表示任务/工作流等实体存在，false表示实体已被删除</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedEntityExist(boolean $AssociatedEntityExist) 设置<p>关联实体是否存在，true表示任务/工作流等实体存在，false表示实体已被删除</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleRunType() 获取<p>调度执行类型</p><p>枚举值：</p><ul><li>0： 正常调度</li><li>1： 空跑调度</li><li>2： 用户驱动，手动触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleRunType(string $ScheduleRunType) 设置<p>调度执行类型</p><p>枚举值：</p><ul><li>0： 正常调度</li><li>1： 空跑调度</li><li>2： 用户驱动，手动触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivilege() 获取<p>权限</p><p>枚举值：</p><ul><li>CAN_MANAGE： 可管理</li><li>CAN_VIEW： 可见</li><li>NO_PERMISSION： 无权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilege(string $Privilege) 设置<p>权限</p><p>枚举值：</p><ul><li>CAN_MANAGE： 可管理</li><li>CAN_VIEW： 可见</li><li>NO_PERMISSION： 无权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerTaskRunBrief extends AbstractModel
{
    /**
     * @var string <p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionId;

    /**
     * @var string <p>执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIP、运行中:RUNNING</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionState;

    /**
     * @var string <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string <p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowExecutionId;

    /**
     * @var string <p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string <p>任务版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskVersionId;

    /**
     * @var string <p>触发类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string <p>等待时长，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitTime;

    /**
     * @var string <p>所属资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var string <p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string <p>运行账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserUin;

    /**
     * @var string <p>创建人 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreaterUin;

    /**
     * @var string <p>执行平台执行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string <p>创建时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTime;

    /**
     * @var string <p>更新时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>依赖任务完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependenceFinishedTime;

    /**
     * @var string <p>任务下发执行平台时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueStartTime;

    /**
     * @var string <p>开始等待资源时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PendingStartTime;

    /**
     * @var string <p>运行开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string <p>运行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string <p>排队时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueCostTime;

    /**
     * @var string <p>运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionTime;

    /**
     * @var string <p>总花费时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllCostTime;

    /**
     * @var string <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeZone;

    /**
     * @var array <p>依赖上游任务 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependOnList;

    /**
     * @var string <p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunParams;

    /**
     * @var string <p>任务扩展信息，包含脚本路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeExtensions;

    /**
     * @var integer <p>重试次数，为 0 则表示首次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryTimes;

    /**
     * @var float <p>左侧坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftCoordinate;

    /**
     * @var float <p>顶部坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopCoordinate;

    /**
     * @var string <p>资源组 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var string <p>错误码描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodeStr;

    /**
     * @var string <p>创建人 UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUin;

    /**
     * @var string <p>下发执行平台时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IssueTime;

    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string <p>运行人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserName;

    /**
     * @var integer <p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RerunTimes;

    /**
     * @var boolean <p>是否是最新一次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLatestExecution;

    /**
     * @var string <p>任务运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskExecutionState;

    /**
     * @var string <p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string <p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserNameInCharge;

    /**
     * @var string <p>责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUinInCharge;

    /**
     * @var string <p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var string <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timezone;

    /**
     * @var string <p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string <p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var integer <p>任务类型id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string <p>工作流运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowParams;

    /**
     * @var boolean <p>是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportRerun;

    /**
     * @var string <p>工作流运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowExecutionState;

    /**
     * @var string <p>任务执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionResult;

    /**
     * @var string <p>依赖策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyTriggerPolicy;

    /**
     * @var boolean <p>关联实体是否存在，true表示任务/工作流等实体存在，false表示实体已被删除</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociatedEntityExist;

    /**
     * @var string <p>调度执行类型</p><p>枚举值：</p><ul><li>0： 正常调度</li><li>1： 空跑调度</li><li>2： 用户驱动，手动触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleRunType;

    /**
     * @var string <p>权限</p><p>枚举值：</p><ul><li>CAN_MANAGE： 可管理</li><li>CAN_VIEW： 可见</li><li>NO_PERMISSION： 无权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privilege;

    /**
     * @param string $ExecutionId <p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionState <p>执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIP、运行中:RUNNING</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowExecutionId <p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId <p>任务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskVersionId <p>任务版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType <p>触发类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WaitTime <p>等待时长，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup <p>所属资源组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCode <p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserUin <p>运行账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreaterUin <p>创建人 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobId <p>执行平台执行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTime <p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependenceFinishedTime <p>依赖任务完成时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueStartTime <p>任务下发执行平台时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PendingStartTime <p>开始等待资源时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime <p>运行开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime <p>运行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueCostTime <p>排队时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionTime <p>运行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllCostTime <p>总花费时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeZone <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DependOnList <p>依赖上游任务 ID 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunParams <p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeExtensions <p>任务扩展信息，包含脚本路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryTimes <p>重试次数，为 0 则表示首次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LeftCoordinate <p>左侧坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopCoordinate <p>顶部坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupId <p>资源组 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCodeStr <p>错误码描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUin <p>创建人 UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IssueTime <p>下发执行平台时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserName <p>运行人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RerunTimes <p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLatestExecution <p>是否是最新一次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskExecutionState <p>任务运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType <p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserNameInCharge <p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUinInCharge <p>责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName <p>资源组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Timezone <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId <p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName <p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId <p>任务类型id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowParams <p>工作流运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportRerun <p>是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowExecutionState <p>工作流运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionResult <p>任务执行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyTriggerPolicy <p>依赖策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AssociatedEntityExist <p>关联实体是否存在，true表示任务/工作流等实体存在，false表示实体已被删除</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleRunType <p>调度执行类型</p><p>枚举值：</p><ul><li>0： 正常调度</li><li>1： 空跑调度</li><li>2： 用户驱动，手动触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Privilege <p>权限</p><p>枚举值：</p><ul><li>CAN_MANAGE： 可管理</li><li>CAN_VIEW： 可见</li><li>NO_PERMISSION： 无权限</li></ul>
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

        if (array_key_exists("ScheduleTime",$param) and $param["ScheduleTime"] !== null) {
            $this->ScheduleTime = $param["ScheduleTime"];
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

        if (array_key_exists("DependencyTriggerPolicy",$param) and $param["DependencyTriggerPolicy"] !== null) {
            $this->DependencyTriggerPolicy = $param["DependencyTriggerPolicy"];
        }

        if (array_key_exists("AssociatedEntityExist",$param) and $param["AssociatedEntityExist"] !== null) {
            $this->AssociatedEntityExist = $param["AssociatedEntityExist"];
        }

        if (array_key_exists("ScheduleRunType",$param) and $param["ScheduleRunType"] !== null) {
            $this->ScheduleRunType = $param["ScheduleRunType"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }
    }
}
