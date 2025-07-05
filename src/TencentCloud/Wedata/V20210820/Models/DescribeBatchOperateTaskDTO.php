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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量操作任务列表
 *
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeDesc() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeDesc(string $TaskTypeDesc) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取文件夹名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置文件夹名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInCharge() 获取负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCharge(string $InCharge) 设置负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubmit() 获取是否提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmit(integer $Submit) 设置是否提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataEngine() 获取引擎：
presto\SparkJob\SparkSql
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngine(string $DataEngine) 设置引擎：
presto\SparkJob\SparkSql
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创造时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创造时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleUnit() 获取周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleUnit(string $CycleUnit) 设置周期类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleDesc() 获取调度计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleDesc(string $ScheduleDesc) 设置调度计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceType(string $DatasourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeBatchOperateTaskDTO extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 工作流Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeId;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeDesc;

    /**
     * @var string 文件夹名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCharge;

    /**
     * @var integer 是否提交
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Submit;

    /**
     * @var string 引擎：
presto\SparkJob\SparkSql
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngine;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 创造时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleUnit;

    /**
     * @var string 调度计划
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleDesc;

    /**
     * @var string 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceType;

    /**
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeDesc 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName 文件夹名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InCharge 负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Submit 是否提交
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataEngine 引擎：
presto\SparkJob\SparkSql
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创造时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleUnit 周期类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleDesc 调度计划
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceType 数据源类型
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("DataEngine",$param) and $param["DataEngine"] !== null) {
            $this->DataEngine = $param["DataEngine"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }
    }
}
