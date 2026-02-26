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
 * @method string getAppId() 获取用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionId() 获取工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionId(string $ExecutionId) 设置工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerId() 获取触发器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerId(string $TriggerId) 设置触发器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取触发方式:调度触发Scheduler、手动触发ManualTrigger、事件触发Event
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置触发方式:调度触发Scheduler、手动触发ManualTrigger、事件触发Event
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取工作流触发时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置工作流触发时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTime() 获取计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTime(string $ScheduleTime) 设置计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取执行开始时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置执行开始时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取执行结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置执行结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionCostTime() 获取运行时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionCostTime(string $ExecutionCostTime) 设置运行时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueCostTime() 获取并发排队花费时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueCostTime(string $QueueCostTime) 设置并发排队花费时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPendingCostTime() 获取等待资源花费时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPendingCostTime(string $PendingCostTime) 设置等待资源花费时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionState() 获取执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIPED、运行中:RUNNING
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionState(string $ExecutionState) 设置执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIPED、运行中:RUNNING
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserUin() 获取运行用户UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserUin(string $ExecuteUserUin) 设置运行用户UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserName() 获取运行用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserName(string $ExecuteUserName) 设置运行用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCodeStr() 获取错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodeStr(string $ErrorCodeStr) 设置错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowParams() 获取运行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowParams(string $WorkflowParams) 设置运行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowVersionId() 获取工作流版本信息ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowVersionId(string $WorkflowVersionId) 设置工作流版本信息ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportRerun() 获取是否支持重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportRerun(boolean $SupportRerun) 设置是否支持重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRerunTimes() 获取重跑次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRerunTimes(integer $RerunTimes) 设置重跑次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSelectedTaskIds() 获取运行的任务范围,逗号分隔的任务ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectedTaskIds(array $SelectedTaskIds) 设置运行的任务范围,逗号分隔的任务ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPendingStartTime() 获取等待并发开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPendingStartTime(string $PendingStartTime) 设置等待并发开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueStartTime() 获取排队等待开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueStartTime(string $QueueStartTime) 设置排队等待开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlannedSchedulingTime() 获取计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlannedSchedulingTime(string $PlannedSchedulingTime) 设置计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserNameInCharge() 获取责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserNameInCharge(string $UserNameInCharge) 设置责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUinInCharge() 获取责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUinInCharge(string $UserUinInCharge) 设置责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerWorkflowRunBrief extends AbstractModel
{
    /**
     * @var string 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionId;

    /**
     * @var string 触发器ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerId;

    /**
     * @var string 触发方式:调度触发Scheduler、手动触发ManualTrigger、事件触发Event
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string 工作流触发时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTime;

    /**
     * @var string 执行开始时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string 执行结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string 运行时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionCostTime;

    /**
     * @var string 并发排队花费时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueCostTime;

    /**
     * @var string 等待资源花费时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PendingCostTime;

    /**
     * @var string 执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIPED、运行中:RUNNING
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionState;

    /**
     * @var string 运行用户UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserUin;

    /**
     * @var string 运行用户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserName;

    /**
     * @var string 错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodeStr;

    /**
     * @var string 运行参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowParams;

    /**
     * @var string 工作流版本信息ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowVersionId;

    /**
     * @var boolean 是否支持重跑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportRerun;

    /**
     * @var integer 重跑次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RerunTimes;

    /**
     * @var array 运行的任务范围,逗号分隔的任务ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectedTaskIds;

    /**
     * @var string 等待并发开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PendingStartTime;

    /**
     * @var string 排队等待开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueStartTime;

    /**
     * @var string 运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string 计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlannedSchedulingTime;

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
     * @var string 责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUinInCharge;

    /**
     * @param string $AppId 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionId 工作流运行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerId 触发器ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType 触发方式:调度触发Scheduler、手动触发ManualTrigger、事件触发Event
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 工作流触发时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTime 计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime 执行开始时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime 执行结束时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionCostTime 运行时长，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueCostTime 并发排队花费时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PendingCostTime 等待资源花费时间，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionState 执行状态，运行失败:FAILED、运行成功:SUCCESS、等待中:PENDING、跳过运行:SKIPED、运行中:RUNNING
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserUin 运行用户UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserName 运行用户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCodeStr 错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowParams 运行参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowVersionId 工作流版本信息ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportRerun 是否支持重跑
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RerunTimes 重跑次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SelectedTaskIds 运行的任务范围,逗号分隔的任务ID列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PendingStartTime 等待并发开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueStartTime 排队等待开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlannedSchedulingTime 计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserNameInCharge 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUinInCharge 责任人ID
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
    }
}
