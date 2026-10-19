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
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getWorkflowId() 获取<p>工作流ID</p>
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID</p>
 * @method integer getDelayTime() 获取<p>延迟时间</p>
 * @method void setDelayTime(integer $DelayTime) 设置<p>延迟时间</p>
 * @method integer getStartupTime() 获取<p>启动时间</p>
 * @method void setStartupTime(integer $StartupTime) 设置<p>启动时间</p>
 * @method string getSelfDepend() 获取<p>任务依赖</p>
 * @method void setSelfDepend(string $SelfDepend) 设置<p>任务依赖</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method string getTaskAction() 获取<p>指定运行时间</p>
 * @method void setTaskAction(string $TaskAction) 设置<p>指定运行时间</p>
 * @method string getCycleType() 获取<p>调度周期时间单位</p>
 * @method void setCycleType(string $CycleType) 设置<p>调度周期时间单位</p>
 * @method integer getCycleStep() 获取<p>调度周期</p>
 * @method void setCycleStep(integer $CycleStep) 设置<p>调度周期</p>
 * @method string getExecutionStartTime() 获取<p>执行时间左闭区间</p>
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>执行时间左闭区间</p>
 * @method string getExecutionEndTime() 获取<p>执行时间右闭区间</p>
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置<p>执行时间右闭区间</p>
 * @method string getInstanceInitStrategy() 获取<p>任务初始化策略，T_PLUS_1、T_PLUS_0、T_MINUS_1</p>
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置<p>任务初始化策略，T_PLUS_1、T_PLUS_0、T_MINUS_1</p>
 * @method string getDependencyWorkflow() 获取<p>工作流依赖，yes or no</p>
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置<p>工作流依赖，yes or no</p>
 * @method string getCrontabExpression() 获取<p>CrontabExpression</p>
 * @method void setCrontabExpression(string $CrontabExpression) 设置<p>CrontabExpression</p>
 * @method string getModifyCycleValue() 获取<p>0：不修改<br>1：将任务的上游依赖配置改为默认值</p>
 * @method void setModifyCycleValue(string $ModifyCycleValue) 设置<p>0：不修改<br>1：将任务的上游依赖配置改为默认值</p>
 * @method string getCalendarOpen() 获取<p>是否开启日历调度 1 开启 0关闭</p>
 * @method void setCalendarOpen(string $CalendarOpen) 设置<p>是否开启日历调度 1 开启 0关闭</p>
 * @method string getCalendarName() 获取<p>日历名称</p>
 * @method void setCalendarName(string $CalendarName) 设置<p>日历名称</p>
 * @method string getCalendarId() 获取<p>日历id</p>
 * @method void setCalendarId(string $CalendarId) 设置<p>日历id</p>
 * @method string getScheduleTimeZone() 获取<p>时区</p>
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>时区</p>
 * @method boolean getClearLink() 获取<p>是否自动清理不支持的任务链接</p>
 * @method void setClearLink(boolean $ClearLink) 设置<p>是否自动清理不支持的任务链接</p>
 * @method string getMainCyclicConfig() 获取<p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度</p>
 * @method void setMainCyclicConfig(string $MainCyclicConfig) 设置<p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度</p>
 * @method string getSubordinateCyclicConfig() 获取<p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围</p>
 * @method void setSubordinateCyclicConfig(string $SubordinateCyclicConfig) 设置<p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围</p>
 * @method integer getMinuteOffset() 获取<p>分钟任务相位偏移</p>
 * @method void setMinuteOffset(integer $MinuteOffset) 设置<p>分钟任务相位偏移</p>
 */
class RenewWorkflowSchedulerInfoDsRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>工作流ID</p>
     */
    public $WorkflowId;

    /**
     * @var integer <p>延迟时间</p>
     */
    public $DelayTime;

    /**
     * @var integer <p>启动时间</p>
     */
    public $StartupTime;

    /**
     * @var string <p>任务依赖</p>
     */
    public $SelfDepend;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>指定运行时间</p>
     */
    public $TaskAction;

    /**
     * @var string <p>调度周期时间单位</p>
     */
    public $CycleType;

    /**
     * @var integer <p>调度周期</p>
     */
    public $CycleStep;

    /**
     * @var string <p>执行时间左闭区间</p>
     */
    public $ExecutionStartTime;

    /**
     * @var string <p>执行时间右闭区间</p>
     */
    public $ExecutionEndTime;

    /**
     * @var string <p>任务初始化策略，T_PLUS_1、T_PLUS_0、T_MINUS_1</p>
     */
    public $InstanceInitStrategy;

    /**
     * @var string <p>工作流依赖，yes or no</p>
     */
    public $DependencyWorkflow;

    /**
     * @var string <p>CrontabExpression</p>
     */
    public $CrontabExpression;

    /**
     * @var string <p>0：不修改<br>1：将任务的上游依赖配置改为默认值</p>
     */
    public $ModifyCycleValue;

    /**
     * @var string <p>是否开启日历调度 1 开启 0关闭</p>
     */
    public $CalendarOpen;

    /**
     * @var string <p>日历名称</p>
     */
    public $CalendarName;

    /**
     * @var string <p>日历id</p>
     */
    public $CalendarId;

    /**
     * @var string <p>时区</p>
     */
    public $ScheduleTimeZone;

    /**
     * @var boolean <p>是否自动清理不支持的任务链接</p>
     */
    public $ClearLink;

    /**
     * @var string <p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度</p>
     */
    public $MainCyclicConfig;

    /**
     * @var string <p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围</p>
     */
    public $SubordinateCyclicConfig;

    /**
     * @var integer <p>分钟任务相位偏移</p>
     */
    public $MinuteOffset;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param string $WorkflowId <p>工作流ID</p>
     * @param integer $DelayTime <p>延迟时间</p>
     * @param integer $StartupTime <p>启动时间</p>
     * @param string $SelfDepend <p>任务依赖</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param string $TaskAction <p>指定运行时间</p>
     * @param string $CycleType <p>调度周期时间单位</p>
     * @param integer $CycleStep <p>调度周期</p>
     * @param string $ExecutionStartTime <p>执行时间左闭区间</p>
     * @param string $ExecutionEndTime <p>执行时间右闭区间</p>
     * @param string $InstanceInitStrategy <p>任务初始化策略，T_PLUS_1、T_PLUS_0、T_MINUS_1</p>
     * @param string $DependencyWorkflow <p>工作流依赖，yes or no</p>
     * @param string $CrontabExpression <p>CrontabExpression</p>
     * @param string $ModifyCycleValue <p>0：不修改<br>1：将任务的上游依赖配置改为默认值</p>
     * @param string $CalendarOpen <p>是否开启日历调度 1 开启 0关闭</p>
     * @param string $CalendarName <p>日历名称</p>
     * @param string $CalendarId <p>日历id</p>
     * @param string $ScheduleTimeZone <p>时区</p>
     * @param boolean $ClearLink <p>是否自动清理不支持的任务链接</p>
     * @param string $MainCyclicConfig <p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度</p>
     * @param string $SubordinateCyclicConfig <p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围</p>
     * @param integer $MinuteOffset <p>分钟任务相位偏移</p>
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

        if (array_key_exists("MinuteOffset",$param) and $param["MinuteOffset"] !== null) {
            $this->MinuteOffset = $param["MinuteOffset"];
        }
    }
}
