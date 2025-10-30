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
 * RenewWorkflowSchedulerInfoDs请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method integer getDelayTime() 获取延迟时间
 * @method void setDelayTime(integer $DelayTime) 设置延迟时间
 * @method integer getStartupTime() 获取启动时间
 * @method void setStartupTime(integer $StartupTime) 设置启动时间
 * @method string getSelfDepend() 获取任务依赖
 * @method void setSelfDepend(string $SelfDepend) 设置任务依赖
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getTaskAction() 获取指定运行时间
 * @method void setTaskAction(string $TaskAction) 设置指定运行时间
 * @method string getCycleType() 获取调度周期时间单位
 * @method void setCycleType(string $CycleType) 设置调度周期时间单位
 * @method integer getCycleStep() 获取调度周期
 * @method void setCycleStep(integer $CycleStep) 设置调度周期
 * @method string getExecutionStartTime() 获取执行时间左闭区间
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置执行时间左闭区间
 * @method string getExecutionEndTime() 获取执行时间右闭区间
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置执行时间右闭区间
 * @method string getInstanceInitStrategy() 获取任务初始化策略，T_PLUS_1、T_PLUS_0、T_MINUS_1
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置任务初始化策略，T_PLUS_1、T_PLUS_0、T_MINUS_1
 * @method string getDependencyWorkflow() 获取工作流依赖，yes or no
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置工作流依赖，yes or no
 * @method string getCrontabExpression() 获取CrontabExpression
 * @method void setCrontabExpression(string $CrontabExpression) 设置CrontabExpression
 * @method string getModifyCycleValue() 获取0：不修改
1：将任务的上游依赖配置改为默认值 
 * @method void setModifyCycleValue(string $ModifyCycleValue) 设置0：不修改
1：将任务的上游依赖配置改为默认值 
 * @method string getCalendarOpen() 获取是否开启日历调度 1 开启 0关闭
 * @method void setCalendarOpen(string $CalendarOpen) 设置是否开启日历调度 1 开启 0关闭
 * @method string getCalendarName() 获取日历名称
 * @method void setCalendarName(string $CalendarName) 设置日历名称
 * @method string getCalendarId() 获取日历id
 * @method void setCalendarId(string $CalendarId) 设置日历id
 * @method string getScheduleTimeZone() 获取时区
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置时区
 * @method boolean getClearLink() 获取是否自动清理不支持的任务链接
 * @method void setClearLink(boolean $ClearLink) 设置是否自动清理不支持的任务链接
 * @method string getMainCyclicConfig() 获取ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度
 * @method void setMainCyclicConfig(string $MainCyclicConfig) 设置ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度
 * @method string getSubordinateCyclicConfig() 获取ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围
 * @method void setSubordinateCyclicConfig(string $SubordinateCyclicConfig) 设置ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围
 */
class RenewWorkflowSchedulerInfoDsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var integer 延迟时间
     */
    public $DelayTime;

    /**
     * @var integer 启动时间
     */
    public $StartupTime;

    /**
     * @var string 任务依赖
     */
    public $SelfDepend;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 指定运行时间
     */
    public $TaskAction;

    /**
     * @var string 调度周期时间单位
     */
    public $CycleType;

    /**
     * @var integer 调度周期
     */
    public $CycleStep;

    /**
     * @var string 执行时间左闭区间
     */
    public $ExecutionStartTime;

    /**
     * @var string 执行时间右闭区间
     */
    public $ExecutionEndTime;

    /**
     * @var string 任务初始化策略，T_PLUS_1、T_PLUS_0、T_MINUS_1
     */
    public $InstanceInitStrategy;

    /**
     * @var string 工作流依赖，yes or no
     */
    public $DependencyWorkflow;

    /**
     * @var string CrontabExpression
     */
    public $CrontabExpression;

    /**
     * @var string 0：不修改
1：将任务的上游依赖配置改为默认值 
     */
    public $ModifyCycleValue;

    /**
     * @var string 是否开启日历调度 1 开启 0关闭
     */
    public $CalendarOpen;

    /**
     * @var string 日历名称
     */
    public $CalendarName;

    /**
     * @var string 日历id
     */
    public $CalendarId;

    /**
     * @var string 时区
     */
    public $ScheduleTimeZone;

    /**
     * @var boolean 是否自动清理不支持的任务链接
     */
    public $ClearLink;

    /**
     * @var string ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度
     */
    public $MainCyclicConfig;

    /**
     * @var string ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围
     */
    public $SubordinateCyclicConfig;

    /**
     * @param string $ProjectId 项目ID
     * @param string $WorkflowId 工作流ID
     * @param integer $DelayTime 延迟时间
     * @param integer $StartupTime 启动时间
     * @param string $SelfDepend 任务依赖
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $TaskAction 指定运行时间
     * @param string $CycleType 调度周期时间单位
     * @param integer $CycleStep 调度周期
     * @param string $ExecutionStartTime 执行时间左闭区间
     * @param string $ExecutionEndTime 执行时间右闭区间
     * @param string $InstanceInitStrategy 任务初始化策略，T_PLUS_1、T_PLUS_0、T_MINUS_1
     * @param string $DependencyWorkflow 工作流依赖，yes or no
     * @param string $CrontabExpression CrontabExpression
     * @param string $ModifyCycleValue 0：不修改
1：将任务的上游依赖配置改为默认值 
     * @param string $CalendarOpen 是否开启日历调度 1 开启 0关闭
     * @param string $CalendarName 日历名称
     * @param string $CalendarId 日历id
     * @param string $ScheduleTimeZone 时区
     * @param boolean $ClearLink 是否自动清理不支持的任务链接
     * @param string $MainCyclicConfig ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度
     * @param string $SubordinateCyclicConfig ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围
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

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("ModifyCycleValue",$param) and $param["ModifyCycleValue"] !== null) {
            $this->ModifyCycleValue = $param["ModifyCycleValue"];
        }

        if (array_key_exists("CalendarOpen",$param) and $param["CalendarOpen"] !== null) {
            $this->CalendarOpen = $param["CalendarOpen"];
        }

        if (array_key_exists("CalendarName",$param) and $param["CalendarName"] !== null) {
            $this->CalendarName = $param["CalendarName"];
        }

        if (array_key_exists("CalendarId",$param) and $param["CalendarId"] !== null) {
            $this->CalendarId = $param["CalendarId"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("ClearLink",$param) and $param["ClearLink"] !== null) {
            $this->ClearLink = $param["ClearLink"];
        }

        if (array_key_exists("MainCyclicConfig",$param) and $param["MainCyclicConfig"] !== null) {
            $this->MainCyclicConfig = $param["MainCyclicConfig"];
        }

        if (array_key_exists("SubordinateCyclicConfig",$param) and $param["SubordinateCyclicConfig"] !== null) {
            $this->SubordinateCyclicConfig = $param["SubordinateCyclicConfig"];
        }
    }
}
