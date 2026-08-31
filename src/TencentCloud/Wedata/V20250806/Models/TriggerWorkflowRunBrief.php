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
 * 工作流运行概要信息
 *
 * @method string getAppId() 获取<p>用户AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置<p>用户AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionId() 获取<p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionId(string $ExecutionId) 设置<p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerId() 获取<p>触发器ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerId(string $TriggerId) 设置<p>触发器ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取<p>触发方式:调度触发Scheduler、手动触发ManualTrigger、事件触发Event</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置<p>触发方式:调度触发Scheduler、手动触发ManualTrigger、事件触发Event</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>工作流触发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>工作流触发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTime() 获取<p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTime(string $ScheduleTime) 设置<p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取<p>执行开始时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>执行开始时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取<p>执行结束时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置<p>执行结束时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionCostTime() 获取<p>运行时长，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionCostTime(string $ExecutionCostTime) 设置<p>运行时长，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueCostTime() 获取<p>并发排队花费时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueCostTime(string $QueueCostTime) 设置<p>并发排队花费时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPendingCostTime() 获取<p>等待资源花费时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPendingCostTime(string $PendingCostTime) 设置<p>等待资源花费时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionState() 获取<p>执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIPED、运行中:RUNNING</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionState(string $ExecutionState) 设置<p>执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIPED、运行中:RUNNING</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserUin() 获取<p>运行用户UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserUin(string $ExecuteUserUin) 设置<p>运行用户UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserName() 获取<p>运行用户名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserName(string $ExecuteUserName) 设置<p>运行用户名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCodeStr() 获取<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodeStr(string $ErrorCodeStr) 设置<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowParams() 获取<p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowParams(string $WorkflowParams) 设置<p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowVersionId() 获取<p>工作流版本信息ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowVersionId(string $WorkflowVersionId) 设置<p>工作流版本信息ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportRerun() 获取<p>是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportRerun(boolean $SupportRerun) 设置<p>是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRerunTimes() 获取<p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRerunTimes(integer $RerunTimes) 设置<p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSelectedTaskIds() 获取<p>运行的任务范围,逗号分隔的任务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectedTaskIds(array $SelectedTaskIds) 设置<p>运行的任务范围,逗号分隔的任务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPendingStartTime() 获取<p>等待并发开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPendingStartTime(string $PendingStartTime) 设置<p>等待并发开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueStartTime() 获取<p>排队等待开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueStartTime(string $QueueStartTime) 设置<p>排队等待开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>运行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>运行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取<p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置<p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlannedSchedulingTime() 获取<p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlannedSchedulingTime(string $PlannedSchedulingTime) 设置<p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserNameInCharge() 获取<p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserNameInCharge(string $UserNameInCharge) 设置<p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUinInCharge() 获取<p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUinInCharge(string $UserUinInCharge) 设置<p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAssociatedEntityExist() 获取<p>关联实体是否存在</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedEntityExist(boolean $AssociatedEntityExist) 设置<p>关联实体是否存在</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentWorkflowExecutionId() 获取<p>父工作流运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentWorkflowExecutionId(string $ParentWorkflowExecutionId) 设置<p>父工作流运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentTaskExecutionId() 获取<p>父任务运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentTaskExecutionId(string $ParentTaskExecutionId) 设置<p>父任务运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentTaskExecutionName() 获取<p>父任务运行名称 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentTaskExecutionName(string $ParentTaskExecutionName) 设置<p>父任务运行名称 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivilege() 获取<p>权限</p><p>枚举值：</p><ul><li>CAN_MANAGE： 可管理</li><li>CAN_VIEW： 可见</li><li>NO_PERMISSION： 无权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilege(string $Privilege) 设置<p>权限</p><p>枚举值：</p><ul><li>CAN_MANAGE： 可管理</li><li>CAN_VIEW： 可见</li><li>NO_PERMISSION： 无权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerWorkflowRunBrief extends AbstractModel
{
    /**
     * @var string <p>用户AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

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
    public $ExecutionId;

    /**
     * @var string <p>触发器ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerId;

    /**
     * @var string <p>触发方式:调度触发Scheduler、手动触发ManualTrigger、事件触发Event</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string <p>工作流触发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTime;

    /**
     * @var string <p>执行开始时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string <p>执行结束时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string <p>运行时长，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionCostTime;

    /**
     * @var string <p>并发排队花费时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueCostTime;

    /**
     * @var string <p>等待资源花费时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PendingCostTime;

    /**
     * @var string <p>执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIPED、运行中:RUNNING</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionState;

    /**
     * @var string <p>运行用户UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserUin;

    /**
     * @var string <p>运行用户名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserName;

    /**
     * @var string <p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodeStr;

    /**
     * @var string <p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowParams;

    /**
     * @var string <p>工作流版本信息ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowVersionId;

    /**
     * @var boolean <p>是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportRerun;

    /**
     * @var integer <p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RerunTimes;

    /**
     * @var array <p>运行的任务范围,逗号分隔的任务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectedTaskIds;

    /**
     * @var string <p>等待并发开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PendingStartTime;

    /**
     * @var string <p>排队等待开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueStartTime;

    /**
     * @var string <p>运行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string <p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string <p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlannedSchedulingTime;

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
     * @var string <p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUinInCharge;

    /**
     * @var boolean <p>关联实体是否存在</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociatedEntityExist;

    /**
     * @var string <p>父工作流运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentWorkflowExecutionId;

    /**
     * @var string <p>父任务运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentTaskExecutionId;

    /**
     * @var string <p>父任务运行名称 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentTaskExecutionName;

    /**
     * @var string <p>权限</p><p>枚举值：</p><ul><li>CAN_MANAGE： 可管理</li><li>CAN_VIEW： 可见</li><li>NO_PERMISSION： 无权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privilege;

    /**
     * @param string $AppId <p>用户AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionId <p>工作流运行ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerId <p>触发器ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType <p>触发方式:调度触发Scheduler、手动触发ManualTrigger、事件触发Event</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>工作流触发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTime <p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime <p>执行开始时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime <p>执行结束时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionCostTime <p>运行时长，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueCostTime <p>并发排队花费时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PendingCostTime <p>等待资源花费时间，单位秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionState <p>执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIPED、运行中:RUNNING</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserUin <p>运行用户UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserName <p>运行用户名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCodeStr <p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowParams <p>运行参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowVersionId <p>工作流版本信息ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportRerun <p>是否支持重跑</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RerunTimes <p>重跑次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SelectedTaskIds <p>运行的任务范围,逗号分隔的任务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PendingStartTime <p>等待并发开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueStartTime <p>排队等待开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>运行结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId <p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName <p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlannedSchedulingTime <p>计划调度时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType <p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserNameInCharge <p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUinInCharge <p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AssociatedEntityExist <p>关联实体是否存在</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentWorkflowExecutionId <p>父工作流运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentTaskExecutionId <p>父任务运行ID 【由嵌套工作流触发独有】</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentTaskExecutionName <p>父任务运行名称 【由嵌套工作流触发独有】</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

        if (array_key_exists("ExecutionCostTime",$param) and $param["ExecutionCostTime"] !== null) {
            $this->ExecutionCostTime = $param["ExecutionCostTime"];
        }

        if (array_key_exists("QueueCostTime",$param) and $param["QueueCostTime"] !== null) {
            $this->QueueCostTime = $param["QueueCostTime"];
        }

        if (array_key_exists("PendingCostTime",$param) and $param["PendingCostTime"] !== null) {
            $this->PendingCostTime = $param["PendingCostTime"];
        }

        if (array_key_exists("ExecutionState",$param) and $param["ExecutionState"] !== null) {
            $this->ExecutionState = $param["ExecutionState"];
        }

        if (array_key_exists("ExecuteUserUin",$param) and $param["ExecuteUserUin"] !== null) {
            $this->ExecuteUserUin = $param["ExecuteUserUin"];
        }

        if (array_key_exists("ExecuteUserName",$param) and $param["ExecuteUserName"] !== null) {
            $this->ExecuteUserName = $param["ExecuteUserName"];
        }

        if (array_key_exists("ErrorCodeStr",$param) and $param["ErrorCodeStr"] !== null) {
            $this->ErrorCodeStr = $param["ErrorCodeStr"];
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

        if (array_key_exists("RerunTimes",$param) and $param["RerunTimes"] !== null) {
            $this->RerunTimes = $param["RerunTimes"];
        }

        if (array_key_exists("SelectedTaskIds",$param) and $param["SelectedTaskIds"] !== null) {
            $this->SelectedTaskIds = $param["SelectedTaskIds"];
        }

        if (array_key_exists("PendingStartTime",$param) and $param["PendingStartTime"] !== null) {
            $this->PendingStartTime = $param["PendingStartTime"];
        }

        if (array_key_exists("QueueStartTime",$param) and $param["QueueStartTime"] !== null) {
            $this->QueueStartTime = $param["QueueStartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("PlannedSchedulingTime",$param) and $param["PlannedSchedulingTime"] !== null) {
            $this->PlannedSchedulingTime = $param["PlannedSchedulingTime"];
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

        if (array_key_exists("AssociatedEntityExist",$param) and $param["AssociatedEntityExist"] !== null) {
            $this->AssociatedEntityExist = $param["AssociatedEntityExist"];
        }

        if (array_key_exists("ParentWorkflowExecutionId",$param) and $param["ParentWorkflowExecutionId"] !== null) {
            $this->ParentWorkflowExecutionId = $param["ParentWorkflowExecutionId"];
        }

        if (array_key_exists("ParentTaskExecutionId",$param) and $param["ParentTaskExecutionId"] !== null) {
            $this->ParentTaskExecutionId = $param["ParentTaskExecutionId"];
        }

        if (array_key_exists("ParentTaskExecutionName",$param) and $param["ParentTaskExecutionName"] !== null) {
            $this->ParentTaskExecutionName = $param["ParentTaskExecutionName"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }
    }
}
