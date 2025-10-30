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
 * 下游任务列表
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getWorkflowId() 获取所属工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置所属工作流id
 * @method string getTaskName() 获取任务名
 * @method void setTaskName(string $TaskName) 设置任务名
 * @method integer getLayer() 获取层级，0表示当前任务
 * @method void setLayer(integer $Layer) 设置层级，0表示当前任务
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method integer getTaskTypeId() 获取任务类型，-1表示跨流任务
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务类型，-1表示跨流任务
 * @method string getInCharge() 获取责任人
 * @method void setInCharge(string $InCharge) 设置责任人
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getWorkflowName() 获取所属工作流名称
 * @method void setWorkflowName(string $WorkflowName) 设置所属工作流名称
 * @method string getCycleUnit() 获取周期单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleUnit(string $CycleUnit) 设置周期单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleDesc() 获取调度计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleDesc(string $ScheduleDesc) 设置调度计划
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTypeDesc() 获取任务类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeDesc(string $TaskTypeDesc) 设置任务类型描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class SuccessorTaskInfo extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 所属工作流id
     */
    public $WorkflowId;

    /**
     * @var string 任务名
     */
    public $TaskName;

    /**
     * @var integer 层级，0表示当前任务
     */
    public $Layer;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var integer 任务类型，-1表示跨流任务
     */
    public $TaskTypeId;

    /**
     * @var string 责任人
     */
    public $InCharge;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var string 所属工作流名称
     */
    public $WorkflowName;

    /**
     * @var string 周期单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleUnit;

    /**
     * @var string 调度计划
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleDesc;

    /**
     * @var string 任务类型描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeDesc;

    /**
     * @param string $TaskId 任务id
     * @param string $WorkflowId 所属工作流id
     * @param string $TaskName 任务名
     * @param integer $Layer 层级，0表示当前任务
     * @param string $Status 任务状态
     * @param integer $TaskTypeId 任务类型，-1表示跨流任务
     * @param string $InCharge 责任人
     * @param string $ProjectId 项目id
     * @param string $ProjectName 项目名称
     * @param string $WorkflowName 所属工作流名称
     * @param string $CycleUnit 周期单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleDesc 调度计划
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTypeDesc 任务类型描述
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Layer",$param) and $param["Layer"] !== null) {
            $this->Layer = $param["Layer"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }
    }
}
