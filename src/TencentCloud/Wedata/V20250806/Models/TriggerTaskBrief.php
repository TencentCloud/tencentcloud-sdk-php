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
 * 任务概要信息
 *
 * @method string getProjectId() 获取<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取<p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取<p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置<p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUinInCharge() 获取<p>责任人user UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUinInCharge(string $UserUinInCharge) 设置<p>责任人user UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserNameInCharge() 获取<p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserNameInCharge(string $UserNameInCharge) 设置<p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取<p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置<p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取<p>任务类型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置<p>任务类型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionState() 获取<p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionState(string $ExecutionState) 设置<p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取<p>运行开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>运行开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyTriggerPolicy() 获取<p>依赖策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyTriggerPolicy(string $DependencyTriggerPolicy) 设置<p>依赖策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserUin() 获取<p>运行账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserUin(string $ExecuteUserUin) 设置<p>运行账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置<p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerTaskBrief extends AbstractModel
{
    /**
     * @var string <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string <p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string <p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string <p>责任人user UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUinInCharge;

    /**
     * @var string <p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserNameInCharge;

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
     * @var integer <p>任务类型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string <p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionState;

    /**
     * @var string <p>运行开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string <p>依赖策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyTriggerPolicy;

    /**
     * @var string <p>运行账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserUin;

    /**
     * @var string <p>周期类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @param string $ProjectId <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId <p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId <p>任务id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName <p>任务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType <p>任务类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUinInCharge <p>责任人user UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserNameInCharge <p>责任人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId <p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName <p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId <p>任务类型ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionState <p>任务状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime <p>运行开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyTriggerPolicy <p>依赖策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserUin <p>运行账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType <p>周期类型</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("UserUinInCharge",$param) and $param["UserUinInCharge"] !== null) {
            $this->UserUinInCharge = $param["UserUinInCharge"];
        }

        if (array_key_exists("UserNameInCharge",$param) and $param["UserNameInCharge"] !== null) {
            $this->UserNameInCharge = $param["UserNameInCharge"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("ExecutionState",$param) and $param["ExecutionState"] !== null) {
            $this->ExecutionState = $param["ExecutionState"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("DependencyTriggerPolicy",$param) and $param["DependencyTriggerPolicy"] !== null) {
            $this->DependencyTriggerPolicy = $param["DependencyTriggerPolicy"];
        }

        if (array_key_exists("ExecuteUserUin",$param) and $param["ExecuteUserUin"] !== null) {
            $this->ExecuteUserUin = $param["ExecuteUserUin"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }
    }
}
