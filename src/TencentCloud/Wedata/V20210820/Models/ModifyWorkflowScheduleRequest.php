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
 * ModifyWorkflowSchedule请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method integer getDelayTime() 获取延迟时间，单位分钟
 * @method void setDelayTime(integer $DelayTime) 设置延迟时间，单位分钟
 * @method integer getStartupTime() 获取启动时间
 * @method void setStartupTime(integer $StartupTime) 设置启动时间
 * @method integer getSelfDepend() 获取自依赖类型  1:有序串行 一次一个 排队, 2: 无序串行 一次一个 不排队， 3:并行 一次多个
 * @method void setSelfDepend(integer $SelfDepend) 设置自依赖类型  1:有序串行 一次一个 排队, 2: 无序串行 一次一个 不排队， 3:并行 一次多个
 * @method integer getCycleType() 获取"周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
 * @method void setCycleType(integer $CycleType) 设置"周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
 * @method integer getCycleStep() 获取步长，间隔时间，最小1
 * @method void setCycleStep(integer $CycleStep) 设置步长，间隔时间，最小1
 * @method string getStartTime() 获取生效开始时间，格式 yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置生效开始时间，格式 yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取生效结束时间，格式 yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置生效结束时间，格式 yyyy-MM-dd HH:mm:ss
 * @method string getTaskAction() 获取调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'。
 * @method void setTaskAction(string $TaskAction) 设置调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'。
 * @method string getCrontabExpression() 获取cron表达式  周期类型为crontab调度才需要
 * @method void setCrontabExpression(string $CrontabExpression) 设置cron表达式  周期类型为crontab调度才需要
 * @method string getExecutionStartTime() 获取执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
 * @method string getExecutionEndTime() 获取执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
 * @method string getDependencyWorkflow() 获取工作流依赖 ,yes 或者no
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置工作流依赖 ,yes 或者no
 */
class ModifyWorkflowScheduleRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var integer 延迟时间，单位分钟
     */
    public $DelayTime;

    /**
     * @var integer 启动时间
     */
    public $StartupTime;

    /**
     * @var integer 自依赖类型  1:有序串行 一次一个 排队, 2: 无序串行 一次一个 不排队， 3:并行 一次多个
     */
    public $SelfDepend;

    /**
     * @var integer "周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
     */
    public $CycleType;

    /**
     * @var integer 步长，间隔时间，最小1
     */
    public $CycleStep;

    /**
     * @var string 生效开始时间，格式 yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 生效结束时间，格式 yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var string 调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'。
     */
    public $TaskAction;

    /**
     * @var string cron表达式  周期类型为crontab调度才需要
     */
    public $CrontabExpression;

    /**
     * @var string 执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
     */
    public $ExecutionStartTime;

    /**
     * @var string 执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
     */
    public $ExecutionEndTime;

    /**
     * @var string 工作流依赖 ,yes 或者no
     */
    public $DependencyWorkflow;

    /**
     * @param string $ProjectId 项目Id
     * @param string $WorkflowId 工作流id
     * @param integer $DelayTime 延迟时间，单位分钟
     * @param integer $StartupTime 启动时间
     * @param integer $SelfDepend 自依赖类型  1:有序串行 一次一个 排队, 2: 无序串行 一次一个 不排队， 3:并行 一次多个
     * @param integer $CycleType "周期类型  0:crontab类型, 1:分钟，2:小时，3:天，4:周，5:月，6:一次性，7:用户驱动，10:弹性周期 周,11:弹性周期 月,12:年,13:即时触发Instant类型，与正常周期调度任务逻辑隔离
     * @param integer $CycleStep 步长，间隔时间，最小1
     * @param string $StartTime 生效开始时间，格式 yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 生效结束时间，格式 yyyy-MM-dd HH:mm:ss
     * @param string $TaskAction 调度配置-弹性周期配置，小时/周/月/年调度才有，小时任务指定每天的0点3点4点跑，则为'0,3,4'。
     * @param string $CrontabExpression cron表达式  周期类型为crontab调度才需要
     * @param string $ExecutionStartTime 执行时间左闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
     * @param string $ExecutionEndTime 执行时间右闭区间，格式：HH:mm  小时调度才有，例如小时任务, 每日固定区间生效
     * @param string $DependencyWorkflow 工作流依赖 ,yes 或者no
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
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

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
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

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }
    }
}
