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
 * 工作流调度详情
 *
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayTime() 获取延迟时间, unit=minute
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayTime(integer $DelayTime) 设置延迟时间, unit=minute
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartupTime() 获取启动时间,unit=minute
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartupTime(integer $StartupTime) 设置启动时间,unit=minute
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelfDepend() 获取任务自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfDepend(string $SelfDepend) 设置任务自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskAction() 获取指定运行时间, 指定时间：如周一：1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置指定运行时间, 指定时间：如周一：1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取调度周期类型，时间单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置调度周期类型，时间单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCycleStep() 获取调度周期，间隔步长 unit=minute
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleStep(integer $CycleStep) 设置调度周期，间隔步长 unit=minute
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取调度cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置调度cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取执行时间右闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置执行时间右闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceInitStrategy() 获取任务实例初始化策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置任务实例初始化策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyWorkflow() 获取工作流自依赖
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置工作流自依赖
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDesc() 获取调度计划释义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDesc(string $SchedulerDesc) 设置调度计划释义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstSubmitTime() 获取工作流首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstSubmitTime(string $FirstSubmitTime) 设置工作流首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestSubmitTime() 获取工作流最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestSubmitTime(string $LatestSubmitTime) 设置工作流最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowSchedulerOpsDto extends AbstractModel
{
    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var integer 延迟时间, unit=minute
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayTime;

    /**
     * @var integer 启动时间,unit=minute
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartupTime;

    /**
     * @var string 任务自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfDepend;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 指定运行时间, 指定时间：如周一：1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAction;

    /**
     * @var string 调度周期类型，时间单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var integer 调度周期，间隔步长 unit=minute
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleStep;

    /**
     * @var string 调度cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var string 执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string 执行时间右闭区间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string 任务实例初始化策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceInitStrategy;

    /**
     * @var string 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流自依赖
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyWorkflow;

    /**
     * @var string 调度计划释义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDesc;

    /**
     * @var string 工作流首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstSubmitTime;

    /**
     * @var string 工作流最近提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestSubmitTime;

    /**
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayTime 延迟时间, unit=minute
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartupTime 启动时间,unit=minute
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelfDepend 任务自依赖类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskAction 指定运行时间, 指定时间：如周一：1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 调度周期类型，时间单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CycleStep 调度周期，间隔步长 unit=minute
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression 调度cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime 执行时间左闭区间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime 执行时间右闭区间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceInitStrategy 任务实例初始化策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId 工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyWorkflow 工作流自依赖
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDesc 调度计划释义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstSubmitTime 工作流首次提交时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestSubmitTime 工作流最近提交时间
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("StartupTime",$param) and $param["StartupTime"] !== null) {
            $this->StartupTime = $param["StartupTime"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("SchedulerDesc",$param) and $param["SchedulerDesc"] !== null) {
            $this->SchedulerDesc = $param["SchedulerDesc"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("LatestSubmitTime",$param) and $param["LatestSubmitTime"] !== null) {
            $this->LatestSubmitTime = $param["LatestSubmitTime"];
        }
    }
}
