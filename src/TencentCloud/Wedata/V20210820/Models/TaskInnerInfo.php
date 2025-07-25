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
 * 任务属性
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getTaskName() 获取任务名
 * @method void setTaskName(string $TaskName) 设置任务名
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method integer getCycleType() 获取周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
 * @method void setCycleType(integer $CycleType) 设置周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
 * @method string getVirtualTaskId() 获取虚拟任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTaskId(string $VirtualTaskId) 设置虚拟任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getVirtualFlag() 获取虚拟任务标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualFlag(boolean $VirtualFlag) 设置虚拟任务标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealWorkflowId() 获取真实任务工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealWorkflowId(string $RealWorkflowId) 设置真实任务工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取步长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置步长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为 0,3,4。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为 0,3,4。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyRel() 获取分支，依赖关系，and/or, 默认and
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyRel(string $DependencyRel) 设置分支，依赖关系，and/or, 默认and
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyWorkflow() 获取是否支持工作流依赖 yes / no 默认 no
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置是否支持工作流依赖 yes / no 默认 no
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskInnerInfo extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务名
     */
    public $TaskName;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var integer 周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
     */
    public $CycleType;

    /**
     * @var string 虚拟任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualTaskId;

    /**
     * @var boolean 虚拟任务标记
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualFlag;

    /**
     * @var string 真实任务工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealWorkflowId;

    /**
     * @var integer 步长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleStep;

    /**
     * @var string 调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为 0,3,4。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAction;

    /**
     * @var string 分支，依赖关系，and/or, 默认and
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyRel;

    /**
     * @var string 是否支持工作流依赖 yes / no 默认 no
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyWorkflow;

    /**
     * @param string $TaskId 任务ID
     * @param string $TaskName 任务名
     * @param string $WorkflowId 工作流id
     * @param integer $CycleType 周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
     * @param string $VirtualTaskId 虚拟任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $VirtualFlag 虚拟任务标记
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealWorkflowId 真实任务工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep 步长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction 调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为 0,3,4。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyRel 分支，依赖关系，and/or, 默认and
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyWorkflow 是否支持工作流依赖 yes / no 默认 no
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

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("VirtualTaskId",$param) and $param["VirtualTaskId"] !== null) {
            $this->VirtualTaskId = $param["VirtualTaskId"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("RealWorkflowId",$param) and $param["RealWorkflowId"] !== null) {
            $this->RealWorkflowId = $param["RealWorkflowId"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("DependencyRel",$param) and $param["DependencyRel"] !== null) {
            $this->DependencyRel = $param["DependencyRel"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }
    }
}
