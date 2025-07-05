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
 * 离线任务新增参数
 *
 * @method string getWorkflowName() 获取名称
 * @method void setWorkflowName(string $WorkflowName) 设置名称
 * @method string getDependencyWorkflow() 获取依赖：yes、no
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置依赖：yes、no
 * @method string getStartTime() 获取任务开始数据时间。非空。默认当前时间
 * @method void setStartTime(string $StartTime) 设置任务开始数据时间。非空。默认当前时间
 * @method string getEndTime() 获取任务结束数据时间。非空。默认当前时间
 * @method void setEndTime(string $EndTime) 设置任务结束数据时间。非空。默认当前时间
 * @method integer getCycleType() 获取周期类型。一次性任务:6、分钟任务：1、小时任务：2、天任务：3、周任务：4、月任务：5、crontab任务：0
 * @method void setCycleType(integer $CycleType) 设置周期类型。一次性任务:6、分钟任务：1、小时任务：2、天任务：3、周任务：4、月任务：5、crontab任务：0
 * @method integer getCycleStep() 获取间隔，可选，默认1。非空。默认 1
 * @method void setCycleStep(integer $CycleStep) 设置间隔，可选，默认1。非空。默认 1
 * @method integer getDelayTime() 获取延时执行时间，单位分钟
 * @method void setDelayTime(integer $DelayTime) 设置延时执行时间，单位分钟
 * @method string getCrontabExpression() 获取任务cron表达式，仅cron任务使用，其他时候默认为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置任务cron表达式，仅cron任务使用，其他时候默认为空
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
 * @method string getTaskAction() 获取时间指定，如月任务指定1，3号，则填入 1，3。非空。默认 ""
月任务：如具体1，3号则写 "1,3"，指定月末不可和具体号数一起输入，仅能为 "L"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAction(string $TaskAction) 设置时间指定，如月任务指定1，3号，则填入 1，3。非空。默认 ""
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
 * @method boolean getTaskAutoSubmit() 获取是否自动提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskAutoSubmit(boolean $TaskAutoSubmit) 设置是否自动提交
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceInitStrategy() 获取实例生成方式，T_PLUS_0 当天任务当天调度 / T_PLUS_1 当天任务后一天调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置实例生成方式，T_PLUS_0 当天任务当天调度 / T_PLUS_1 当天任务后一天调度
注意：此字段可能返回 null，表示取不到有效值。
 */
class OfflineTaskAddParam extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $WorkflowName;

    /**
     * @var string 依赖：yes、no
     */
    public $DependencyWorkflow;

    /**
     * @var string 任务开始数据时间。非空。默认当前时间
     */
    public $StartTime;

    /**
     * @var string 任务结束数据时间。非空。默认当前时间
     */
    public $EndTime;

    /**
     * @var integer 周期类型。一次性任务:6、分钟任务：1、小时任务：2、天任务：3、周任务：4、月任务：5、crontab任务：0
     */
    public $CycleType;

    /**
     * @var integer 间隔，可选，默认1。非空。默认 1
     */
    public $CycleStep;

    /**
     * @var integer 延时执行时间，单位分钟
     */
    public $DelayTime;

    /**
     * @var string 任务cron表达式，仅cron任务使用，其他时候默认为空
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
     * @var string 时间指定，如月任务指定1，3号，则填入 1，3。非空。默认 ""
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
     * @var boolean 是否自动提交
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskAutoSubmit;

    /**
     * @var string 实例生成方式，T_PLUS_0 当天任务当天调度 / T_PLUS_1 当天任务后一天调度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceInitStrategy;

    /**
     * @param string $WorkflowName 名称
     * @param string $DependencyWorkflow 依赖：yes、no
     * @param string $StartTime 任务开始数据时间。非空。默认当前时间
     * @param string $EndTime 任务结束数据时间。非空。默认当前时间
     * @param integer $CycleType 周期类型。一次性任务:6、分钟任务：1、小时任务：2、天任务：3、周任务：4、月任务：5、crontab任务：0
     * @param integer $CycleStep 间隔，可选，默认1。非空。默认 1
     * @param integer $DelayTime 延时执行时间，单位分钟
     * @param string $CrontabExpression 任务cron表达式，仅cron任务使用，其他时候默认为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryWait 重试等待
     * @param integer $Retriable 是否可以重试
     * @param integer $TryLimit 重试限制
     * @param integer $RunPriority 优先级
     * @param string $ProductName 产品名称
     * @param integer $SelfDepend 1 有序串行 一次一个，排队 orderly 
2 无序串行 一次一个，不排队 serial  
3 并行 一次多个 parallel
     * @param string $TaskAction 时间指定，如月任务指定1，3号，则填入 1，3。非空。默认 ""
月任务：如具体1，3号则写 "1,3"，指定月末不可和具体号数一起输入，仅能为 "L"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime 调度执行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime 调度执行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $TaskAutoSubmit 是否自动提交
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceInitStrategy 实例生成方式，T_PLUS_0 当天任务当天调度 / T_PLUS_1 当天任务后一天调度
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

        if (array_key_exists("TaskAutoSubmit",$param) and $param["TaskAutoSubmit"] !== null) {
            $this->TaskAutoSubmit = $param["TaskAutoSubmit"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }
    }
}
