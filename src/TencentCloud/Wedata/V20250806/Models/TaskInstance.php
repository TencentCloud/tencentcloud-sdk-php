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
 * 调度任务实例实体
 *
 * @method string getProjectId() 获取所属项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置所属项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceKey() 获取**实例唯一标识**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceKey(string $InstanceKey) 设置**实例唯一标识**
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurRunDate() 获取实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurRunDate(string $CurRunDate) 设置实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceState() 获取**实例状态**
- WAIT_EVENT: 等待事件
- WAIT_UPSTREAM: 等待上游
- WAIT_RUN: 等待运行
- RUNNING: 运行中
- SKIP_RUNNING: 跳过运行
- FAILED_RETRY: 失败重试
- EXPIRED: 失败
- COMPLETED: 成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceState(string $InstanceState) 设置**实例状态**
- WAIT_EVENT: 等待事件
- WAIT_UPSTREAM: 等待上游
- WAIT_RUN: 等待运行
- RUNNING: 运行中
- SKIP_RUNNING: 跳过运行
- FAILED_RETRY: 失败重试
- EXPIRED: 失败
- COMPLETED: 成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceType() 获取**实例类型**

- 0 表示补录类型
- 1 表示周期实例
- 2 表示非周期实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(integer $InstanceType) 设置**实例类型**

- 0 表示补录类型
- 1 表示周期实例
- 2 表示非周期实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOwnerUinList() 获取负责人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUinList(array $OwnerUinList) 设置负责人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalRunNum() 获取累计运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRunNum(integer $TotalRunNum) 设置累计运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取任务类型描述
 * @method void setTaskType(string $TaskType) 设置任务类型描述
 * @method integer getTaskTypeId() 获取任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取**任务周期类型**
支持过滤多个，条件间为 或 的过滤关系
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置**任务周期类型**
支持过滤多个，条件间为 或 的过滤关系
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTryLimit() 获取每次运行失败，下发重试次数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTryLimit(integer $TryLimit) 设置每次运行失败，下发重试次数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTries() 获取**失败重试次数**
再次使用 手动重跑 或 补录实例等方式触发运行时，会被重置为 0 后重新计数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTries(integer $Tries) 设置**失败重试次数**
再次使用 手动重跑 或 补录实例等方式触发运行时，会被重置为 0 后重新计数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCostTime() 获取耗费时间, 单位ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostTime(integer $CostTime) 设置耗费时间, 单位ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerTime() 获取计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerTime(string $SchedulerTime) 设置计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateTime() 获取实例最近更新时间, 时间格式为 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置实例最近更新时间, 时间格式为 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置资源组名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskInstance extends AbstractModel
{
    /**
     * @var string 所属项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string **实例唯一标识**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceKey;

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
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurRunDate;

    /**
     * @var string **实例状态**
- WAIT_EVENT: 等待事件
- WAIT_UPSTREAM: 等待上游
- WAIT_RUN: 等待运行
- RUNNING: 运行中
- SKIP_RUNNING: 跳过运行
- FAILED_RETRY: 失败重试
- EXPIRED: 失败
- COMPLETED: 成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceState;

    /**
     * @var integer **实例类型**

- 0 表示补录类型
- 1 表示周期实例
- 2 表示非周期实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var array 负责人列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUinList;

    /**
     * @var integer 累计运行次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRunNum;

    /**
     * @var string 任务类型描述
     */
    public $TaskType;

    /**
     * @var integer 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string **任务周期类型**
支持过滤多个，条件间为 或 的过滤关系
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var integer 每次运行失败，下发重试次数限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TryLimit;

    /**
     * @var integer **失败重试次数**
再次使用 手动重跑 或 补录实例等方式触发运行时，会被重置为 0 后重新计数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tries;

    /**
     * @var string 运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 耗费时间, 单位ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostTime;

    /**
     * @var string 计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerTime;

    /**
     * @var string 实例最近更新时间, 时间格式为 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var string 执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string 资源组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @param string $ProjectId 所属项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceKey **实例唯一标识**
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurRunDate 实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceState **实例状态**
- WAIT_EVENT: 等待事件
- WAIT_UPSTREAM: 等待上游
- WAIT_RUN: 等待运行
- RUNNING: 运行中
- SKIP_RUNNING: 跳过运行
- FAILED_RETRY: 失败重试
- EXPIRED: 失败
- COMPLETED: 成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceType **实例类型**

- 0 表示补录类型
- 1 表示周期实例
- 2 表示非周期实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OwnerUinList 负责人列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalRunNum 累计运行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType 任务类型描述
     * @param integer $TaskTypeId 任务类型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType **任务周期类型**
支持过滤多个，条件间为 或 的过滤关系
* O: ONEOFF_CYCLE
* Y: YEAR_CYCLE
* M: MONTH_CYCLE
* W: WEEK_CYCLE
* D: DAY_CYCLE
* H: HOUR_CYCLE
* I: MINUTE_CYCLE
* C: CRONTAB_CYCLE
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TryLimit 每次运行失败，下发重试次数限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Tries **失败重试次数**
再次使用 手动重跑 或 补录实例等方式触发运行时，会被重置为 0 后重新计数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CostTime 耗费时间, 单位ms
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerTime 计划调度时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateTime 实例最近更新时间, 时间格式为 yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId 执行资源组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName 资源组名称
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

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
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

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("OwnerUinList",$param) and $param["OwnerUinList"] !== null) {
            $this->OwnerUinList = $param["OwnerUinList"];
        }

        if (array_key_exists("TotalRunNum",$param) and $param["TotalRunNum"] !== null) {
            $this->TotalRunNum = $param["TotalRunNum"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("SchedulerTime",$param) and $param["SchedulerTime"] !== null) {
            $this->SchedulerTime = $param["SchedulerTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }
    }
}
