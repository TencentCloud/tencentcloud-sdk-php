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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWorkflowTaskRunRsp
 *
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowTaskRunId() 获取任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowTaskRunId(string $WorkflowTaskRunId) 设置任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunState() 获取运行状态。取值参考工作流任务运行状态枚举，如 Pending / Running / Succeeded / Failed / Killed
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunState(string $RunState) 设置运行状态。取值参考工作流任务运行状态枚举，如 Pending / Running / Succeeded / Failed / Killed
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceId() 获取工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(string $WorkspaceId) 设置工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowRunId() 获取工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeName() 获取任务类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeName(string $TaskTypeName) 设置任务类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskVersionId() 获取任务版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskVersionId(string $TaskVersionId) 设置任务版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取触发类型 (参考SchedulerTriggerType枚举)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置触发类型 (参考SchedulerTriggerType枚举)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupId() 获取所属资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置所属资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCodeString() 获取错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodeString(string $ErrorCodeString) 设置错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunUserUin() 获取运行用户UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunUserUin(string $RunUserUin) 设置运行用户UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunUserName() 获取运行用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunUserName(string $RunUserName) 设置运行用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建人UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobId() 获取执行平台执行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置执行平台执行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependenceFinishedTime() 获取依赖任务完成时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependenceFinishedTime(string $DependenceFinishedTime) 设置依赖任务完成时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunStartTime() 获取运行开始时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunStartTime(string $RunStartTime) 设置运行开始时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunEndTime() 获取运行结束时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunEndTime(string $RunEndTime) 设置运行结束时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunCostTime() 获取运行时长，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunCostTime(string $RunCostTime) 设置运行时长，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWaitTime() 获取等待时长（依赖就绪到开始运行的等待耗时），单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitTime(string $WaitTime) 设置等待时长（依赖就绪到开始运行的等待耗时），单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIssueTime() 获取下发执行平台时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssueTime(string $IssueTime) 设置下发执行平台时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeZone() 获取时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeZone(string $TimeZone) 设置时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDependOnList() 获取依赖上游任务ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependOnList(array $DependOnList) 设置依赖上游任务ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunParams() 获取运行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunParams(string $RunParams) 设置运行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeExtensions() 获取任务扩展信息，包含脚本路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeExtensions(string $TaskTypeExtensions) 设置任务扩展信息，包含脚本路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLeftCoordinate() 获取任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopCoordinate() 获取任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopCoordinate(float $TopCoordinate) 设置任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryTimes() 获取重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryTimes(integer $RetryTimes) 设置重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRerunTimes() 获取重跑次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRerunTimes(integer $RerunTimes) 设置重跑次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLatestRun() 获取是否最新一次运行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLatestRun(boolean $IsLatestRun) 设置是否最新一次运行
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceGroupInfoList() 获取资源组信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupInfoList(array $ResourceGroupInfoList) 设置资源组信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取错误消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置错误消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunResult() 获取运行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunResult(string $RunResult) 设置运行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method InnerWorkflowTaskRun getInnerWorkflowTaskRun() 获取内嵌工作流任务运行详情（仅限 FOR_EACH 任务，其他任务类型不返回该字段）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerWorkflowTaskRun(InnerWorkflowTaskRun $InnerWorkflowTaskRun) 设置内嵌工作流任务运行详情（仅限 FOR_EACH 任务，其他任务类型不返回该字段）
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetWorkflowTaskRunRsp extends AbstractModel
{
    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowTaskRunId;

    /**
     * @var string 运行状态。取值参考工作流任务运行状态枚举，如 Pending / Running / Succeeded / Failed / Killed
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunState;

    /**
     * @var string 工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowRunId;

    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeName;

    /**
     * @var string 任务版本ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskVersionId;

    /**
     * @var string 触发类型 (参考SchedulerTriggerType枚举)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string 所属资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var string 错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodeString;

    /**
     * @var string 运行用户UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunUserUin;

    /**
     * @var string 运行用户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunUserName;

    /**
     * @var string 创建人UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string 执行平台执行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 创建时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 依赖任务完成时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependenceFinishedTime;

    /**
     * @var string 运行开始时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunStartTime;

    /**
     * @var string 运行结束时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunEndTime;

    /**
     * @var string 运行时长，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunCostTime;

    /**
     * @var string 等待时长（依赖就绪到开始运行的等待耗时），单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitTime;

    /**
     * @var string 下发执行平台时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IssueTime;

    /**
     * @var string 时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeZone;

    /**
     * @var array 依赖上游任务ID列表
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
     * @var float 任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftCoordinate;

    /**
     * @var float 任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopCoordinate;

    /**
     * @var integer 重试次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryTimes;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var integer 重跑次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RerunTimes;

    /**
     * @var boolean 是否最新一次运行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLatestRun;

    /**
     * @var array 资源组信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupInfoList;

    /**
     * @var string 错误消息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string 运行结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunResult;

    /**
     * @var InnerWorkflowTaskRun 内嵌工作流任务运行详情（仅限 FOR_EACH 任务，其他任务类型不返回该字段）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerWorkflowTaskRun;

    /**
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowTaskRunId 任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunState 运行状态。取值参考工作流任务运行状态枚举，如 Pending / Running / Succeeded / Failed / Killed
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceId 工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowRunId 工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeName 任务类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskVersionId 任务版本ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType 触发类型 (参考SchedulerTriggerType枚举)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupId 所属资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCodeString 错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunUserUin 运行用户UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunUserName 运行用户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建人UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobId 执行平台执行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependenceFinishedTime 依赖任务完成时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunStartTime 运行开始时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunEndTime 运行结束时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunCostTime 运行时长，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WaitTime 等待时长（依赖就绪到开始运行的等待耗时），单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IssueTime 下发执行平台时间，单位：毫秒时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeZone 时区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DependOnList 依赖上游任务ID列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunParams 运行参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeExtensions 任务扩展信息，包含脚本路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LeftCoordinate 任务X坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopCoordinate 任务Y坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryTimes 重试次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RerunTimes 重跑次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLatestRun 是否最新一次运行
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceGroupInfoList 资源组信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 错误消息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunResult 运行结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param InnerWorkflowTaskRun $InnerWorkflowTaskRun 内嵌工作流任务运行详情（仅限 FOR_EACH 任务，其他任务类型不返回该字段）
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowTaskRunId",$param) and $param["WorkflowTaskRunId"] !== null) {
            $this->WorkflowTaskRunId = $param["WorkflowTaskRunId"];
        }

        if (array_key_exists("RunState",$param) and $param["RunState"] !== null) {
            $this->RunState = $param["RunState"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskTypeName",$param) and $param["TaskTypeName"] !== null) {
            $this->TaskTypeName = $param["TaskTypeName"];
        }

        if (array_key_exists("TaskVersionId",$param) and $param["TaskVersionId"] !== null) {
            $this->TaskVersionId = $param["TaskVersionId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ErrorCodeString",$param) and $param["ErrorCodeString"] !== null) {
            $this->ErrorCodeString = $param["ErrorCodeString"];
        }

        if (array_key_exists("RunUserUin",$param) and $param["RunUserUin"] !== null) {
            $this->RunUserUin = $param["RunUserUin"];
        }

        if (array_key_exists("RunUserName",$param) and $param["RunUserName"] !== null) {
            $this->RunUserName = $param["RunUserName"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
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

        if (array_key_exists("RunStartTime",$param) and $param["RunStartTime"] !== null) {
            $this->RunStartTime = $param["RunStartTime"];
        }

        if (array_key_exists("RunEndTime",$param) and $param["RunEndTime"] !== null) {
            $this->RunEndTime = $param["RunEndTime"];
        }

        if (array_key_exists("RunCostTime",$param) and $param["RunCostTime"] !== null) {
            $this->RunCostTime = $param["RunCostTime"];
        }

        if (array_key_exists("WaitTime",$param) and $param["WaitTime"] !== null) {
            $this->WaitTime = $param["WaitTime"];
        }

        if (array_key_exists("IssueTime",$param) and $param["IssueTime"] !== null) {
            $this->IssueTime = $param["IssueTime"];
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

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("RetryTimes",$param) and $param["RetryTimes"] !== null) {
            $this->RetryTimes = $param["RetryTimes"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("RerunTimes",$param) and $param["RerunTimes"] !== null) {
            $this->RerunTimes = $param["RerunTimes"];
        }

        if (array_key_exists("IsLatestRun",$param) and $param["IsLatestRun"] !== null) {
            $this->IsLatestRun = $param["IsLatestRun"];
        }

        if (array_key_exists("ResourceGroupInfoList",$param) and $param["ResourceGroupInfoList"] !== null) {
            $this->ResourceGroupInfoList = [];
            foreach ($param["ResourceGroupInfoList"] as $key => $value){
                $obj = new ResourceGroupInfo();
                $obj->deserialize($value);
                array_push($this->ResourceGroupInfoList, $obj);
            }
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("RunResult",$param) and $param["RunResult"] !== null) {
            $this->RunResult = $param["RunResult"];
        }

        if (array_key_exists("InnerWorkflowTaskRun",$param) and $param["InnerWorkflowTaskRun"] !== null) {
            $this->InnerWorkflowTaskRun = new InnerWorkflowTaskRun();
            $this->InnerWorkflowTaskRun->deserialize($param["InnerWorkflowTaskRun"]);
        }
    }
}
