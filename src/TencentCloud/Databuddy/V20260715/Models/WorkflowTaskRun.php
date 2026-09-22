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
 * 工作流任务运行信息
 *
 * @method string getTaskName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowTaskRunId() 获取<p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowTaskRunId(string $WorkflowTaskRunId) 设置<p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunState() 获取<p>运行状态。如CREATE("初始化"), QUEUED("等待中"), PENDING("准备中"), RUNNING("运行中"), SKIPPED("跳过运行"), SUCCESS("成功"), FAILED("失败"), TERMINATING("终止中"), TERMINATED("终止"), CANCELLED("被手动终止")等</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunState(string $RunState) 设置<p>运行状态。如CREATE("初始化"), QUEUED("等待中"), PENDING("准备中"), RUNNING("运行中"), SKIPPED("跳过运行"), SUCCESS("成功"), FAILED("失败"), TERMINATING("终止中"), TERMINATED("终止"), CANCELLED("被手动终止")等</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceId() 获取<p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowRunId() 获取<p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置<p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeName() 获取<p>任务类型名称，请参考数据结构TaskType中TaskTypeName字段描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeName(string $TaskTypeName) 设置<p>任务类型名称，请参考数据结构TaskType中TaskTypeName字段描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskVersionId() 获取<p>任务版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskVersionId(string $TaskVersionId) 设置<p>任务版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取<p>触发类型</p><p>枚举值：</p><ul><li>Manual： 手动触发</li><li>Scheduler： 调度触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置<p>触发类型</p><p>枚举值：</p><ul><li>Manual： 手动触发</li><li>Scheduler： 调度触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupId() 获取<p>所属资源组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>所属资源组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCodeString() 获取<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodeString(string $ErrorCodeString) 设置<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunUserUin() 获取<p>运行用户UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunUserUin(string $RunUserUin) 设置<p>运行用户UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunUserName() 获取<p>运行用户名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunUserName(string $RunUserName) 设置<p>运行用户名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取<p>创建人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置<p>创建人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobId() 获取<p>执行平台执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置<p>执行平台执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependenceFinishedTime() 获取<p>依赖任务完成时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependenceFinishedTime(string $DependenceFinishedTime) 设置<p>依赖任务完成时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunStartTime() 获取<p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunStartTime(string $RunStartTime) 设置<p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunEndTime() 获取<p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunEndTime(string $RunEndTime) 设置<p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunCostTime() 获取<p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunCostTime(string $RunCostTime) 设置<p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWaitTime() 获取<p>等待时长（依赖就绪到开始运行的等待耗时），单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitTime(string $WaitTime) 设置<p>等待时长（依赖就绪到开始运行的等待耗时），单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIssueTime() 获取<p>下发执行平台时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssueTime(string $IssueTime) 设置<p>下发执行平台时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeZone() 获取<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeZone(string $TimeZone) 设置<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDependOnList() 获取<p>依赖上游任务ID列表。保留字段，暂时返回为[]</p><p>保留字段，暂时返回为[]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependOnList(array $DependOnList) 设置<p>依赖上游任务ID列表。保留字段，暂时返回为[]</p><p>保留字段，暂时返回为[]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunParams() 获取<p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunParams(string $RunParams) 设置<p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeExtensions() 获取<p>任务扩展信息，包含脚本路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeExtensions(string $TaskTypeExtensions) 设置<p>任务扩展信息，包含脚本路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLeftCoordinate() 获取<p>任务X坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置<p>任务X坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTopCoordinate() 获取<p>任务Y坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopCoordinate(float $TopCoordinate) 设置<p>任务Y坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryTimes() 获取<p>重试次数，为 0 则表示首次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryTimes(integer $RetryTimes) 设置<p>重试次数，为 0 则表示首次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRerunTimes() 获取<p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRerunTimes(integer $RerunTimes) 设置<p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLatestRun() 获取<p>是否最新一次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLatestRun(boolean $IsLatestRun) 设置<p>是否最新一次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceGroupInfoList() 获取<p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupInfoList(array $ResourceGroupInfoList) 设置<p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunResult() 获取<p>运行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunResult(string $RunResult) 设置<p>运行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependOnRunCondition() 获取<p>任务依赖运行条件</p><p>ALL_SUCCESS: 全部成功：所有上游依赖任务均已执行并成功<br>ONE_SUCCESS: 至少一个成功：至少有一个上游依赖任务成功<br>NONE_FAILED: 目前没有失败：没有依赖任务失败，并且至少有一个依赖任务在运行中<br>ALL_DONE: 全部完成：所有上游依赖任务均已执行并完成（无论成功或失败<br>ONE_FAILED: 至少一个失败：至少有一个上游依赖任务失败<br>ALL_FAILED: 全部失败：所有上游依赖任务都失败<br>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行<br>ALL_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行<br>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行<br>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行<br>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行<br>ADVANCED:运行条件为高级模式时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependOnRunCondition(string $DependOnRunCondition) 设置<p>任务依赖运行条件</p><p>ALL_SUCCESS: 全部成功：所有上游依赖任务均已执行并成功<br>ONE_SUCCESS: 至少一个成功：至少有一个上游依赖任务成功<br>NONE_FAILED: 目前没有失败：没有依赖任务失败，并且至少有一个依赖任务在运行中<br>ALL_DONE: 全部完成：所有上游依赖任务均已执行并完成（无论成功或失败<br>ONE_FAILED: 至少一个失败：至少有一个上游依赖任务失败<br>ALL_FAILED: 全部失败：所有上游依赖任务都失败<br>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行<br>ALL_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行<br>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行<br>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行<br>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行<br>ADVANCED:运行条件为高级模式时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedDependencyConfig getAdvancedDependencyConfig() 获取<p>高级依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedDependencyConfig(AdvancedDependencyConfig $AdvancedDependencyConfig) 设置<p>高级依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method InnerWorkflowTaskBrief getInnerTask() 获取<p>内嵌工作流任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerTask(InnerWorkflowTaskBrief $InnerTask) 设置<p>内嵌工作流任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduledTime() 获取<p>计划调度时间</p><p>参数格式：毫秒时间戳，UTC</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduledTime(string $ScheduledTime) 设置<p>计划调度时间</p><p>参数格式：毫秒时间戳，UTC</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowTaskRun extends AbstractModel
{
    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowTaskRunId;

    /**
     * @var string <p>运行状态。如CREATE("初始化"), QUEUED("等待中"), PENDING("准备中"), RUNNING("运行中"), SKIPPED("跳过运行"), SUCCESS("成功"), FAILED("失败"), TERMINATING("终止中"), TERMINATED("终止"), CANCELLED("被手动终止")等</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunState;

    /**
     * @var string <p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var string <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string <p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowRunId;

    /**
     * @var string <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务类型名称，请参考数据结构TaskType中TaskTypeName字段描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeName;

    /**
     * @var string <p>任务版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskVersionId;

    /**
     * @var string <p>触发类型</p><p>枚举值：</p><ul><li>Manual： 手动触发</li><li>Scheduler： 调度触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string <p>所属资源组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var string <p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodeString;

    /**
     * @var string <p>运行用户UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunUserUin;

    /**
     * @var string <p>运行用户名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunUserName;

    /**
     * @var string <p>创建人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string <p>执行平台执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string <p>创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>依赖任务完成时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependenceFinishedTime;

    /**
     * @var string <p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunStartTime;

    /**
     * @var string <p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunEndTime;

    /**
     * @var string <p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunCostTime;

    /**
     * @var string <p>等待时长（依赖就绪到开始运行的等待耗时），单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitTime;

    /**
     * @var string <p>下发执行平台时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IssueTime;

    /**
     * @var string <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeZone;

    /**
     * @var array <p>依赖上游任务ID列表。保留字段，暂时返回为[]</p><p>保留字段，暂时返回为[]</p>
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
     * @var float <p>任务X坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftCoordinate;

    /**
     * @var float <p>任务Y坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopCoordinate;

    /**
     * @var integer <p>重试次数，为 0 则表示首次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryTimes;

    /**
     * @var string <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var integer <p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RerunTimes;

    /**
     * @var boolean <p>是否最新一次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLatestRun;

    /**
     * @var array <p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupInfoList;

    /**
     * @var string <p>运行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunResult;

    /**
     * @var string <p>任务依赖运行条件</p><p>ALL_SUCCESS: 全部成功：所有上游依赖任务均已执行并成功<br>ONE_SUCCESS: 至少一个成功：至少有一个上游依赖任务成功<br>NONE_FAILED: 目前没有失败：没有依赖任务失败，并且至少有一个依赖任务在运行中<br>ALL_DONE: 全部完成：所有上游依赖任务均已执行并完成（无论成功或失败<br>ONE_FAILED: 至少一个失败：至少有一个上游依赖任务失败<br>ALL_FAILED: 全部失败：所有上游依赖任务都失败<br>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行<br>ALL_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行<br>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行<br>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行<br>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行<br>ADVANCED:运行条件为高级模式时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependOnRunCondition;

    /**
     * @var AdvancedDependencyConfig <p>高级依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedDependencyConfig;

    /**
     * @var InnerWorkflowTaskBrief <p>内嵌工作流任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerTask;

    /**
     * @var string <p>计划调度时间</p><p>参数格式：毫秒时间戳，UTC</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduledTime;

    /**
     * @param string $TaskName <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowTaskRunId <p>任务运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunState <p>运行状态。如CREATE("初始化"), QUEUED("等待中"), PENDING("准备中"), RUNNING("运行中"), SKIPPED("跳过运行"), SUCCESS("成功"), FAILED("失败"), TERMINATING("终止中"), TERMINATED("终止"), CANCELLED("被手动终止")等</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceId <p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowRunId <p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId <p>任务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeName <p>任务类型名称，请参考数据结构TaskType中TaskTypeName字段描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskVersionId <p>任务版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType <p>触发类型</p><p>枚举值：</p><ul><li>Manual： 手动触发</li><li>Scheduler： 调度触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupId <p>所属资源组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCodeString <p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunUserUin <p>运行用户UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunUserName <p>运行用户名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin <p>创建人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobId <p>执行平台执行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependenceFinishedTime <p>依赖任务完成时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunStartTime <p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunEndTime <p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunCostTime <p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WaitTime <p>等待时长（依赖就绪到开始运行的等待耗时），单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IssueTime <p>下发执行平台时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeZone <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DependOnList <p>依赖上游任务ID列表。保留字段，暂时返回为[]</p><p>保留字段，暂时返回为[]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunParams <p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeExtensions <p>任务扩展信息，包含脚本路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LeftCoordinate <p>任务X坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TopCoordinate <p>任务Y坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryTimes <p>重试次数，为 0 则表示首次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RerunTimes <p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLatestRun <p>是否最新一次运行</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceGroupInfoList <p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunResult <p>运行结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependOnRunCondition <p>任务依赖运行条件</p><p>ALL_SUCCESS: 全部成功：所有上游依赖任务均已执行并成功<br>ONE_SUCCESS: 至少一个成功：至少有一个上游依赖任务成功<br>NONE_FAILED: 目前没有失败：没有依赖任务失败，并且至少有一个依赖任务在运行中<br>ALL_DONE: 全部完成：所有上游依赖任务均已执行并完成（无论成功或失败<br>ONE_FAILED: 至少一个失败：至少有一个上游依赖任务失败<br>ALL_FAILED: 全部失败：所有上游依赖任务都失败<br>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行<br>ALL_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行<br>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游<br>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行<br>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行<br>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行<br>ADVANCED:运行条件为高级模式时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedDependencyConfig $AdvancedDependencyConfig <p>高级依赖配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param InnerWorkflowTaskBrief $InnerTask <p>内嵌工作流任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduledTime <p>计划调度时间</p><p>参数格式：毫秒时间戳，UTC</p>
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

        if (array_key_exists("RunResult",$param) and $param["RunResult"] !== null) {
            $this->RunResult = $param["RunResult"];
        }

        if (array_key_exists("DependOnRunCondition",$param) and $param["DependOnRunCondition"] !== null) {
            $this->DependOnRunCondition = $param["DependOnRunCondition"];
        }

        if (array_key_exists("AdvancedDependencyConfig",$param) and $param["AdvancedDependencyConfig"] !== null) {
            $this->AdvancedDependencyConfig = new AdvancedDependencyConfig();
            $this->AdvancedDependencyConfig->deserialize($param["AdvancedDependencyConfig"]);
        }

        if (array_key_exists("InnerTask",$param) and $param["InnerTask"] !== null) {
            $this->InnerTask = new InnerWorkflowTaskBrief();
            $this->InnerTask->deserialize($param["InnerTask"]);
        }

        if (array_key_exists("ScheduledTime",$param) and $param["ScheduledTime"] !== null) {
            $this->ScheduledTime = $param["ScheduledTime"];
        }
    }
}
