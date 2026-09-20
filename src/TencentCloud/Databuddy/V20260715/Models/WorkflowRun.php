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
 * 工作流运行信息
 *
 * @method string getAppId() 获取<p>主账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置<p>主账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowRunId() 获取<p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置<p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceId() 获取<p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取<p>触发方式，Scheduler、ManualTrigger、Event (参考SchedulerTriggerType)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置<p>触发方式，Scheduler、ManualTrigger、Event (参考SchedulerTriggerType)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunStartTime() 获取<p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunStartTime(string $RunStartTime) 设置<p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPendingStartTime() 获取<p>pending 状态开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPendingStartTime(string $PendingStartTime) 设置<p>pending 状态开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueStartTime() 获取<p>queue 状态开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueStartTime(string $QueueStartTime) 设置<p>queue 状态开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunEndTime() 获取<p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunEndTime(string $RunEndTime) 设置<p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>终态时间，运行进入终态时都有值，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>终态时间，运行进入终态时都有值，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunCostTime() 获取<p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunCostTime(string $RunCostTime) 设置<p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueCostTime() 获取<p>并发排队花费时间，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueCostTime(string $QueueCostTime) 设置<p>并发排队花费时间，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPendingCostTime() 获取<p>等待资源花费时间，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPendingCostTime(string $PendingCostTime) 设置<p>等待资源花费时间，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunState() 获取<p>运行状态。取值参考工作流运行状态枚举，如 Pending / Running / Succeeded / Failed / Killed</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunState(string $RunState) 设置<p>运行状态。取值参考工作流运行状态枚举，如 Pending / Running / Succeeded / Failed / Killed</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceGroupIds() 获取<p>计算资源（任务的资源组ID集合）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupIds(array $ResourceGroupIds) 设置<p>计算资源（任务的资源组ID集合）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunUserUin() 获取<p>运行用户UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunUserUin(string $RunUserUin) 设置<p>运行用户UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunUserName() 获取<p>运行用户名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunUserName(string $RunUserName) 设置<p>运行用户名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCodeString() 获取<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodeString(string $ErrorCodeString) 设置<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowParams() 获取<p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowParams(string $WorkflowParams) 设置<p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowVersionId() 获取<p>工作流版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowVersionId(string $WorkflowVersionId) 设置<p>工作流版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportRerun() 获取<p>当前工作流是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportRerun(boolean $SupportRerun) 设置<p>当前工作流是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>工作流运行创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>工作流运行创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRerunTimes() 获取<p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRerunTimes(integer $RerunTimes) 设置<p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSelectedTaskIds() 获取<p>运行的任务范围，任务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectedTaskIds(array $SelectedTaskIds) 设置<p>运行的任务范围，任务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceGroupInfoList() 获取<p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupInfoList(array $ResourceGroupInfoList) 设置<p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelList() 获取<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelList(array $LabelList) 设置<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentWorkflowRunId() 获取<p>父工作流运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentWorkflowRunId(string $ParentWorkflowRunId) 设置<p>父工作流运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentWorkflowTaskRunId() 获取<p>父工作流任务运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentWorkflowTaskRunId(string $ParentWorkflowTaskRunId) 设置<p>父工作流任务运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentWorkflowTaskRunName() 获取<p>父工作流任务运行名称 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentWorkflowTaskRunName(string $ParentWorkflowTaskRunName) 设置<p>父工作流任务运行名称 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPermission() 获取<p>授权权限类型<br>PERMISSION_TYPE_UNSPECIFIED：未指定权限<br>MANAGE : 管理权限：包含所有操作权限<br>RUN : 运行权限：可执行实体<br>VIEW : 查看权限：可查看实体内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermission(string $Permission) 设置<p>授权权限类型<br>PERMISSION_TYPE_UNSPECIFIED：未指定权限<br>MANAGE : 管理权限：包含所有操作权限<br>RUN : 运行权限：可执行实体<br>VIEW : 查看权限：可查看实体内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAdvancedParameters() 获取<p>工作流高级运行时用户填入的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedParameters(array $AdvancedParameters) 设置<p>工作流高级运行时用户填入的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduledTime() 获取<p>计划调度时间</p><p>参数格式：毫秒时间戳（UTC）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduledTime(string $ScheduledTime) 设置<p>计划调度时间</p><p>参数格式：毫秒时间戳（UTC）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowRun extends AbstractModel
{
    /**
     * @var string <p>主账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

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
     * @var string <p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var string <p>触发方式，Scheduler、ManualTrigger、Event (参考SchedulerTriggerType)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string <p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunStartTime;

    /**
     * @var string <p>pending 状态开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PendingStartTime;

    /**
     * @var string <p>queue 状态开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueStartTime;

    /**
     * @var string <p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunEndTime;

    /**
     * @var string <p>终态时间，运行进入终态时都有值，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunCostTime;

    /**
     * @var string <p>并发排队花费时间，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueCostTime;

    /**
     * @var string <p>等待资源花费时间，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PendingCostTime;

    /**
     * @var string <p>运行状态。取值参考工作流运行状态枚举，如 Pending / Running / Succeeded / Failed / Killed</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunState;

    /**
     * @var array <p>计算资源（任务的资源组ID集合）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupIds;

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
     * @var string <p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodeString;

    /**
     * @var string <p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowParams;

    /**
     * @var string <p>工作流版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowVersionId;

    /**
     * @var boolean <p>当前工作流是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportRerun;

    /**
     * @var string <p>工作流运行创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RerunTimes;

    /**
     * @var array <p>运行的任务范围，任务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectedTaskIds;

    /**
     * @var array <p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupInfoList;

    /**
     * @var array <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelList;

    /**
     * @var string <p>父工作流运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentWorkflowRunId;

    /**
     * @var string <p>父工作流任务运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentWorkflowTaskRunId;

    /**
     * @var string <p>父工作流任务运行名称 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentWorkflowTaskRunName;

    /**
     * @var string <p>授权权限类型<br>PERMISSION_TYPE_UNSPECIFIED：未指定权限<br>MANAGE : 管理权限：包含所有操作权限<br>RUN : 运行权限：可执行实体<br>VIEW : 查看权限：可查看实体内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Permission;

    /**
     * @var array <p>工作流高级运行时用户填入的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedParameters;

    /**
     * @var string <p>计划调度时间</p><p>参数格式：毫秒时间戳（UTC）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduledTime;

    /**
     * @param string $AppId <p>主账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowRunId <p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceId <p>工作空间ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType <p>触发方式，Scheduler、ManualTrigger、Event (参考SchedulerTriggerType)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunStartTime <p>运行开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PendingStartTime <p>pending 状态开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueStartTime <p>queue 状态开始时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunEndTime <p>运行结束时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>终态时间，运行进入终态时都有值，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunCostTime <p>运行时长，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueCostTime <p>并发排队花费时间，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PendingCostTime <p>等待资源花费时间，单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunState <p>运行状态。取值参考工作流运行状态枚举，如 Pending / Running / Succeeded / Failed / Killed</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceGroupIds <p>计算资源（任务的资源组ID集合）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunUserUin <p>运行用户UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunUserName <p>运行用户名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCodeString <p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowParams <p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowVersionId <p>工作流版本ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportRerun <p>当前工作流是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>工作流运行创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RerunTimes <p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SelectedTaskIds <p>运行的任务范围，任务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceGroupInfoList <p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelList <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentWorkflowRunId <p>父工作流运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentWorkflowTaskRunId <p>父工作流任务运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentWorkflowTaskRunName <p>父工作流任务运行名称 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Permission <p>授权权限类型<br>PERMISSION_TYPE_UNSPECIFIED：未指定权限<br>MANAGE : 管理权限：包含所有操作权限<br>RUN : 运行权限：可执行实体<br>VIEW : 查看权限：可查看实体内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AdvancedParameters <p>工作流高级运行时用户填入的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduledTime <p>计划调度时间</p><p>参数格式：毫秒时间戳（UTC）</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("RunStartTime",$param) and $param["RunStartTime"] !== null) {
            $this->RunStartTime = $param["RunStartTime"];
        }

        if (array_key_exists("PendingStartTime",$param) and $param["PendingStartTime"] !== null) {
            $this->PendingStartTime = $param["PendingStartTime"];
        }

        if (array_key_exists("QueueStartTime",$param) and $param["QueueStartTime"] !== null) {
            $this->QueueStartTime = $param["QueueStartTime"];
        }

        if (array_key_exists("RunEndTime",$param) and $param["RunEndTime"] !== null) {
            $this->RunEndTime = $param["RunEndTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RunCostTime",$param) and $param["RunCostTime"] !== null) {
            $this->RunCostTime = $param["RunCostTime"];
        }

        if (array_key_exists("QueueCostTime",$param) and $param["QueueCostTime"] !== null) {
            $this->QueueCostTime = $param["QueueCostTime"];
        }

        if (array_key_exists("PendingCostTime",$param) and $param["PendingCostTime"] !== null) {
            $this->PendingCostTime = $param["PendingCostTime"];
        }

        if (array_key_exists("RunState",$param) and $param["RunState"] !== null) {
            $this->RunState = $param["RunState"];
        }

        if (array_key_exists("ResourceGroupIds",$param) and $param["ResourceGroupIds"] !== null) {
            $this->ResourceGroupIds = $param["ResourceGroupIds"];
        }

        if (array_key_exists("RunUserUin",$param) and $param["RunUserUin"] !== null) {
            $this->RunUserUin = $param["RunUserUin"];
        }

        if (array_key_exists("RunUserName",$param) and $param["RunUserName"] !== null) {
            $this->RunUserName = $param["RunUserName"];
        }

        if (array_key_exists("ErrorCodeString",$param) and $param["ErrorCodeString"] !== null) {
            $this->ErrorCodeString = $param["ErrorCodeString"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = $param["WorkflowParams"];
        }

        if (array_key_exists("WorkflowVersionId",$param) and $param["WorkflowVersionId"] !== null) {
            $this->WorkflowVersionId = $param["WorkflowVersionId"];
        }

        if (array_key_exists("SupportRerun",$param) and $param["SupportRerun"] !== null) {
            $this->SupportRerun = $param["SupportRerun"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RerunTimes",$param) and $param["RerunTimes"] !== null) {
            $this->RerunTimes = $param["RerunTimes"];
        }

        if (array_key_exists("SelectedTaskIds",$param) and $param["SelectedTaskIds"] !== null) {
            $this->SelectedTaskIds = $param["SelectedTaskIds"];
        }

        if (array_key_exists("ResourceGroupInfoList",$param) and $param["ResourceGroupInfoList"] !== null) {
            $this->ResourceGroupInfoList = [];
            foreach ($param["ResourceGroupInfoList"] as $key => $value){
                $obj = new ResourceGroupInfo();
                $obj->deserialize($value);
                array_push($this->ResourceGroupInfoList, $obj);
            }
        }

        if (array_key_exists("LabelList",$param) and $param["LabelList"] !== null) {
            $this->LabelList = [];
            foreach ($param["LabelList"] as $key => $value){
                $obj = new LabelBrief();
                $obj->deserialize($value);
                array_push($this->LabelList, $obj);
            }
        }

        if (array_key_exists("ParentWorkflowRunId",$param) and $param["ParentWorkflowRunId"] !== null) {
            $this->ParentWorkflowRunId = $param["ParentWorkflowRunId"];
        }

        if (array_key_exists("ParentWorkflowTaskRunId",$param) and $param["ParentWorkflowTaskRunId"] !== null) {
            $this->ParentWorkflowTaskRunId = $param["ParentWorkflowTaskRunId"];
        }

        if (array_key_exists("ParentWorkflowTaskRunName",$param) and $param["ParentWorkflowTaskRunName"] !== null) {
            $this->ParentWorkflowTaskRunName = $param["ParentWorkflowTaskRunName"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("AdvancedParameters",$param) and $param["AdvancedParameters"] !== null) {
            $this->AdvancedParameters = [];
            foreach ($param["AdvancedParameters"] as $key => $value){
                $obj = new AdvancedParameter();
                $obj->deserialize($value);
                array_push($this->AdvancedParameters, $obj);
            }
        }

        if (array_key_exists("ScheduledTime",$param) and $param["ScheduledTime"] !== null) {
            $this->ScheduledTime = $param["ScheduledTime"];
        }
    }
}
