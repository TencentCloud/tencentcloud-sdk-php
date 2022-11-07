<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 离线任务新增参数
 *
 * @method string getWorkflowName() 获取名称
 * @method void setWorkflowName(string $WorkflowName) 设置名称
 * @method string getDependencyWorkflow() 获取依赖
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置依赖
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getCycleType() 获取周期
 * @method void setCycleType(integer $CycleType) 设置周期
 * @method integer getCycleStep() 获取周期间隔
 * @method void setCycleStep(integer $CycleStep) 设置周期间隔
 * @method integer getDelayTime() 获取延迟时间
 * @method void setDelayTime(integer $DelayTime) 设置延迟时间
 * @method string getCrontabExpression() 获取crontab
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置crontab
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryWait() 获取重试等待
 * @method void setRetryWait(integer $RetryWait) 设置重试等待
 * @method integer getRetriable() 获取是否可以重试
 * @method void setRetriable(integer $Retriable) 设置是否可以重试
 * @method integer getTryLimit() 获取重试限制
 * @method void setTryLimit(integer $TryLimit) 设置重试限制
 * @method integer getRunPriority() 获取优先级
 * @method void setRunPriority(integer $RunPriority) 设置优先级
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method integer getSelfDepend() 获取1 有序串行 一次一个，排队 orderly 
2 无序串行 一次一个，不排队 serial  
3 并行 一次多个 parallel
 * @method void setSelfDepend(integer $SelfDepend) 设置1 有序串行 一次一个，排队 orderly 
2 无序串行 一次一个，不排队 serial  
3 并行 一次多个 parallel
 * @method string getTaskAction() 获取周任务：1是周天，2是周1，7是周6 。
月任务：如具体1，3号则写 "1,3"，指定月末不可和具体号数一起输入，仅能为 "L"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置周任务：1是周天，2是周1，7是周6 。
月任务：如具体1，3号则写 "1,3"，指定月末不可和具体号数一起输入，仅能为 "L"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取调度执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置调度执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取调度执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置调度执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class OfflineTaskAddParam extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $WorkflowName;

    /**
     * @var string 依赖
     */
    public $DependencyWorkflow;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 周期
     */
    public $CycleType;

    /**
     * @var integer 周期间隔
     */
    public $CycleStep;

    /**
     * @var integer 延迟时间
     */
    public $DelayTime;

    /**
     * @var string crontab
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var integer 重试等待
     */
    public $RetryWait;

    /**
     * @var integer 是否可以重试
     */
    public $Retriable;

    /**
     * @var integer 重试限制
     */
    public $TryLimit;

    /**
     * @var integer 优先级
     */
    public $RunPriority;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var integer 1 有序串行 一次一个，排队 orderly 
2 无序串行 一次一个，不排队 serial  
3 并行 一次多个 parallel
     */
    public $SelfDepend;

    /**
     * @var string 周任务：1是周天，2是周1，7是周6 。
月任务：如具体1，3号则写 "1,3"，指定月末不可和具体号数一起输入，仅能为 "L"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAction;

    /**
     * @var string 调度执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string 调度执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @param string $WorkflowName 名称
     * @param string $DependencyWorkflow 依赖
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $CycleType 周期
     * @param integer $CycleStep 周期间隔
     * @param integer $DelayTime 延迟时间
     * @param string $CrontabExpression crontab
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryWait 重试等待
     * @param integer $Retriable 是否可以重试
     * @param integer $TryLimit 重试限制
     * @param integer $RunPriority 优先级
     * @param string $ProductName 产品名称
     * @param integer $SelfDepend 1 有序串行 一次一个，排队 orderly 
2 无序串行 一次一个，不排队 serial  
3 并行 一次多个 parallel
     * @param string $TaskAction 周任务：1是周天，2是周1，7是周6 。
月任务：如具体1，3号则写 "1,3"，指定月末不可和具体号数一起输入，仅能为 "L"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime 调度执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime 调度执行开始时间
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
        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("RetryWait",$param) and $param["RetryWait"] !== null) {
            $this->RetryWait = $param["RetryWait"];
        }

        if (array_key_exists("Retriable",$param) and $param["Retriable"] !== null) {
            $this->Retriable = $param["Retriable"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("RunPriority",$param) and $param["RunPriority"] !== null) {
            $this->RunPriority = $param["RunPriority"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }
    }
}
