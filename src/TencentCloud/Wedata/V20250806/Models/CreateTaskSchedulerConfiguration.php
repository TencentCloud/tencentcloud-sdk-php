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
 * 创建任务调度配置信息
 *
 * @method string getCycleType() 获取周期类型：默认为 DAY_CYCLE

支持的类型为 

* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
 * @method void setCycleType(string $CycleType) 设置周期类型：默认为 DAY_CYCLE

支持的类型为 

* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
 * @method string getScheduleTimeZone() 获取时区，默认为 UTC+8
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置时区，默认为 UTC+8
 * @method string getCrontabExpression() 获取Cron表达式，默认为 0 0 0 * * ? * 
 * @method void setCrontabExpression(string $CrontabExpression) 设置Cron表达式，默认为 0 0 0 * * ? * 
 * @method string getStartTime() 获取生效日期，默认为当前日期的 00:00:00
 * @method void setStartTime(string $StartTime) 设置生效日期，默认为当前日期的 00:00:00
 * @method string getEndTime() 获取结束日期，默认为 2099-12-31 23:59:59
 * @method void setEndTime(string $EndTime) 设置结束日期，默认为 2099-12-31 23:59:59
 * @method string getExecutionStartTime() 获取执行时间 左闭区间，默认 00:00
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置执行时间 左闭区间，默认 00:00
 * @method string getExecutionEndTime() 获取执行时间 右闭区间，默认 23:59
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置执行时间 右闭区间，默认 23:59
 * @method string getCalendarOpen() 获取日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0
 * @method void setCalendarOpen(string $CalendarOpen) 设置日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0
 * @method string getCalendarId() 获取日历调度 日历 ID
 * @method void setCalendarId(string $CalendarId) 设置日历调度 日历 ID
 * @method string getSelfDepend() 获取自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
 * @method void setSelfDepend(string $SelfDepend) 设置自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
 * @method array getUpstreamDependencyConfigList() 获取上游依赖数组
 * @method void setUpstreamDependencyConfigList(array $UpstreamDependencyConfigList) 设置上游依赖数组
 * @method array getEventListenerList() 获取事件数组
 * @method void setEventListenerList(array $EventListenerList) 设置事件数组
 * @method string getAllowRedoType() 获取重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
 * @method void setAllowRedoType(string $AllowRedoType) 设置重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
 * @method array getParamTaskOutList() 获取输出参数数组
 * @method void setParamTaskOutList(array $ParamTaskOutList) 设置输出参数数组
 * @method array getParamTaskInList() 获取输入参数数组
 * @method void setParamTaskInList(array $ParamTaskInList) 设置输入参数数组
 * @method array getTaskOutputRegistryList() 获取产出登记
 * @method void setTaskOutputRegistryList(array $TaskOutputRegistryList) 设置产出登记
 * @method string getInitStrategy() 获取**实例生成策略**
* T_PLUS_0: T+0生成,默认策略
* T_PLUS_1: T+1生成
 * @method void setInitStrategy(string $InitStrategy) 设置**实例生成策略**
* T_PLUS_0: T+0生成,默认策略
* T_PLUS_1: T+1生成
 * @method string getScheduleRunType() 获取调度类型: 0 正常调度 1 空跑调度，默认为 0
 * @method void setScheduleRunType(string $ScheduleRunType) 设置调度类型: 0 正常调度 1 空跑调度，默认为 0
 * @method string getRunPriority() 获取任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
 * @method void setRunPriority(string $RunPriority) 设置任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
 * @method string getRetryWait() 获取重试策略 重试等待时间,单位分钟: 默认: 5
 * @method void setRetryWait(string $RetryWait) 设置重试策略 重试等待时间,单位分钟: 默认: 5
 * @method string getMaxRetryAttempts() 获取重试策略 最大尝试次数, 默认: 4
 * @method void setMaxRetryAttempts(string $MaxRetryAttempts) 设置重试策略 最大尝试次数, 默认: 4
 * @method string getExecutionTTL() 获取超时处理策略 运行耗时超时（单位：分钟）默认为 -1
 * @method void setExecutionTTL(string $ExecutionTTL) 设置超时处理策略 运行耗时超时（单位：分钟）默认为 -1
 * @method string getWaitExecutionTotalTTL() 获取超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
 * @method void setWaitExecutionTotalTTL(string $WaitExecutionTotalTTL) 设置超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
 * @method integer getScheduleType() 获取调度类型: 0 正常调度 1 空跑调度，默认为 0
 * @method void setScheduleType(integer $ScheduleType) 设置调度类型: 0 正常调度 1 空跑调度，默认为 0
 * @method integer getRunPriorityType() 获取任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
 * @method void setRunPriorityType(integer $RunPriorityType) 设置任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
 * @method integer getRetryWaitMinute() 获取重试策略 重试等待时间,单位分钟: 默认: 5
 * @method void setRetryWaitMinute(integer $RetryWaitMinute) 设置重试策略 重试等待时间,单位分钟: 默认: 5
 * @method integer getMaxRetryNumber() 获取重试策略 最大尝试次数, 默认: 4
 * @method void setMaxRetryNumber(integer $MaxRetryNumber) 设置重试策略 最大尝试次数, 默认: 4
 * @method integer getExecutionTTLMinute() 获取超时处理策略 运行耗时超时（单位：分钟）默认为 -1
 * @method void setExecutionTTLMinute(integer $ExecutionTTLMinute) 设置超时处理策略 运行耗时超时（单位：分钟）默认为 -1
 * @method integer getWaitExecutionTotalTTLMinute() 获取超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
 * @method void setWaitExecutionTotalTTLMinute(integer $WaitExecutionTotalTTLMinute) 设置超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
 */
class CreateTaskSchedulerConfiguration extends AbstractModel
{
    /**
     * @var string 周期类型：默认为 DAY_CYCLE

支持的类型为 

* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
     */
    public $CycleType;

    /**
     * @var string 时区，默认为 UTC+8
     */
    public $ScheduleTimeZone;

    /**
     * @var string Cron表达式，默认为 0 0 0 * * ? * 
     */
    public $CrontabExpression;

    /**
     * @var string 生效日期，默认为当前日期的 00:00:00
     */
    public $StartTime;

    /**
     * @var string 结束日期，默认为 2099-12-31 23:59:59
     */
    public $EndTime;

    /**
     * @var string 执行时间 左闭区间，默认 00:00
     */
    public $ExecutionStartTime;

    /**
     * @var string 执行时间 右闭区间，默认 23:59
     */
    public $ExecutionEndTime;

    /**
     * @var string 日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0
     */
    public $CalendarOpen;

    /**
     * @var string 日历调度 日历 ID
     */
    public $CalendarId;

    /**
     * @var string 自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
     */
    public $SelfDepend;

    /**
     * @var array 上游依赖数组
     */
    public $UpstreamDependencyConfigList;

    /**
     * @var array 事件数组
     */
    public $EventListenerList;

    /**
     * @var string 重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
     */
    public $AllowRedoType;

    /**
     * @var array 输出参数数组
     */
    public $ParamTaskOutList;

    /**
     * @var array 输入参数数组
     */
    public $ParamTaskInList;

    /**
     * @var array 产出登记
     */
    public $TaskOutputRegistryList;

    /**
     * @var string **实例生成策略**
* T_PLUS_0: T+0生成,默认策略
* T_PLUS_1: T+1生成
     */
    public $InitStrategy;

    /**
     * @var string 调度类型: 0 正常调度 1 空跑调度，默认为 0
     * @deprecated
     */
    public $ScheduleRunType;

    /**
     * @var string 任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
     * @deprecated
     */
    public $RunPriority;

    /**
     * @var string 重试策略 重试等待时间,单位分钟: 默认: 5
     * @deprecated
     */
    public $RetryWait;

    /**
     * @var string 重试策略 最大尝试次数, 默认: 4
     * @deprecated
     */
    public $MaxRetryAttempts;

    /**
     * @var string 超时处理策略 运行耗时超时（单位：分钟）默认为 -1
     * @deprecated
     */
    public $ExecutionTTL;

    /**
     * @var string 超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
     * @deprecated
     */
    public $WaitExecutionTotalTTL;

    /**
     * @var integer 调度类型: 0 正常调度 1 空跑调度，默认为 0
     */
    public $ScheduleType;

    /**
     * @var integer 任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
     */
    public $RunPriorityType;

    /**
     * @var integer 重试策略 重试等待时间,单位分钟: 默认: 5
     */
    public $RetryWaitMinute;

    /**
     * @var integer 重试策略 最大尝试次数, 默认: 4
     */
    public $MaxRetryNumber;

    /**
     * @var integer 超时处理策略 运行耗时超时（单位：分钟）默认为 -1
     */
    public $ExecutionTTLMinute;

    /**
     * @var integer 超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
     */
    public $WaitExecutionTotalTTLMinute;

    /**
     * @param string $CycleType 周期类型：默认为 DAY_CYCLE

支持的类型为 

* ONEOFF_CYCLE: 一次性
* YEAR_CYCLE: 年
* MONTH_CYCLE: 月
* WEEK_CYCLE: 周
* DAY_CYCLE: 天
* HOUR_CYCLE: 小时
* MINUTE_CYCLE: 分钟
* CRONTAB_CYCLE: crontab表达式类型
     * @param string $ScheduleTimeZone 时区，默认为 UTC+8
     * @param string $CrontabExpression Cron表达式，默认为 0 0 0 * * ? * 
     * @param string $StartTime 生效日期，默认为当前日期的 00:00:00
     * @param string $EndTime 结束日期，默认为 2099-12-31 23:59:59
     * @param string $ExecutionStartTime 执行时间 左闭区间，默认 00:00
     * @param string $ExecutionEndTime 执行时间 右闭区间，默认 23:59
     * @param string $CalendarOpen 日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0
     * @param string $CalendarId 日历调度 日历 ID
     * @param string $SelfDepend 自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
     * @param array $UpstreamDependencyConfigList 上游依赖数组
     * @param array $EventListenerList 事件数组
     * @param string $AllowRedoType 重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
     * @param array $ParamTaskOutList 输出参数数组
     * @param array $ParamTaskInList 输入参数数组
     * @param array $TaskOutputRegistryList 产出登记
     * @param string $InitStrategy **实例生成策略**
* T_PLUS_0: T+0生成,默认策略
* T_PLUS_1: T+1生成
     * @param string $ScheduleRunType 调度类型: 0 正常调度 1 空跑调度，默认为 0
     * @param string $RunPriority 任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
     * @param string $RetryWait 重试策略 重试等待时间,单位分钟: 默认: 5
     * @param string $MaxRetryAttempts 重试策略 最大尝试次数, 默认: 4
     * @param string $ExecutionTTL 超时处理策略 运行耗时超时（单位：分钟）默认为 -1
     * @param string $WaitExecutionTotalTTL 超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
     * @param integer $ScheduleType 调度类型: 0 正常调度 1 空跑调度，默认为 0
     * @param integer $RunPriorityType 任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
     * @param integer $RetryWaitMinute 重试策略 重试等待时间,单位分钟: 默认: 5
     * @param integer $MaxRetryNumber 重试策略 最大尝试次数, 默认: 4
     * @param integer $ExecutionTTLMinute 超时处理策略 运行耗时超时（单位：分钟）默认为 -1
     * @param integer $WaitExecutionTotalTTLMinute 超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
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
        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("CalendarOpen",$param) and $param["CalendarOpen"] !== null) {
            $this->CalendarOpen = $param["CalendarOpen"];
        }

        if (array_key_exists("CalendarId",$param) and $param["CalendarId"] !== null) {
            $this->CalendarId = $param["CalendarId"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("UpstreamDependencyConfigList",$param) and $param["UpstreamDependencyConfigList"] !== null) {
            $this->UpstreamDependencyConfigList = [];
            foreach ($param["UpstreamDependencyConfigList"] as $key => $value){
                $obj = new DependencyTaskBrief();
                $obj->deserialize($value);
                array_push($this->UpstreamDependencyConfigList, $obj);
            }
        }

        if (array_key_exists("EventListenerList",$param) and $param["EventListenerList"] !== null) {
            $this->EventListenerList = [];
            foreach ($param["EventListenerList"] as $key => $value){
                $obj = new EventListener();
                $obj->deserialize($value);
                array_push($this->EventListenerList, $obj);
            }
        }

        if (array_key_exists("AllowRedoType",$param) and $param["AllowRedoType"] !== null) {
            $this->AllowRedoType = $param["AllowRedoType"];
        }

        if (array_key_exists("ParamTaskOutList",$param) and $param["ParamTaskOutList"] !== null) {
            $this->ParamTaskOutList = [];
            foreach ($param["ParamTaskOutList"] as $key => $value){
                $obj = new OutTaskParameter();
                $obj->deserialize($value);
                array_push($this->ParamTaskOutList, $obj);
            }
        }

        if (array_key_exists("ParamTaskInList",$param) and $param["ParamTaskInList"] !== null) {
            $this->ParamTaskInList = [];
            foreach ($param["ParamTaskInList"] as $key => $value){
                $obj = new InTaskParameter();
                $obj->deserialize($value);
                array_push($this->ParamTaskInList, $obj);
            }
        }

        if (array_key_exists("TaskOutputRegistryList",$param) and $param["TaskOutputRegistryList"] !== null) {
            $this->TaskOutputRegistryList = [];
            foreach ($param["TaskOutputRegistryList"] as $key => $value){
                $obj = new TaskDataRegistry();
                $obj->deserialize($value);
                array_push($this->TaskOutputRegistryList, $obj);
            }
        }

        if (array_key_exists("InitStrategy",$param) and $param["InitStrategy"] !== null) {
            $this->InitStrategy = $param["InitStrategy"];
        }

        if (array_key_exists("ScheduleRunType",$param) and $param["ScheduleRunType"] !== null) {
            $this->ScheduleRunType = $param["ScheduleRunType"];
        }

        if (array_key_exists("RunPriority",$param) and $param["RunPriority"] !== null) {
            $this->RunPriority = $param["RunPriority"];
        }

        if (array_key_exists("RetryWait",$param) and $param["RetryWait"] !== null) {
            $this->RetryWait = $param["RetryWait"];
        }

        if (array_key_exists("MaxRetryAttempts",$param) and $param["MaxRetryAttempts"] !== null) {
            $this->MaxRetryAttempts = $param["MaxRetryAttempts"];
        }

        if (array_key_exists("ExecutionTTL",$param) and $param["ExecutionTTL"] !== null) {
            $this->ExecutionTTL = $param["ExecutionTTL"];
        }

        if (array_key_exists("WaitExecutionTotalTTL",$param) and $param["WaitExecutionTotalTTL"] !== null) {
            $this->WaitExecutionTotalTTL = $param["WaitExecutionTotalTTL"];
        }

        if (array_key_exists("ScheduleType",$param) and $param["ScheduleType"] !== null) {
            $this->ScheduleType = $param["ScheduleType"];
        }

        if (array_key_exists("RunPriorityType",$param) and $param["RunPriorityType"] !== null) {
            $this->RunPriorityType = $param["RunPriorityType"];
        }

        if (array_key_exists("RetryWaitMinute",$param) and $param["RetryWaitMinute"] !== null) {
            $this->RetryWaitMinute = $param["RetryWaitMinute"];
        }

        if (array_key_exists("MaxRetryNumber",$param) and $param["MaxRetryNumber"] !== null) {
            $this->MaxRetryNumber = $param["MaxRetryNumber"];
        }

        if (array_key_exists("ExecutionTTLMinute",$param) and $param["ExecutionTTLMinute"] !== null) {
            $this->ExecutionTTLMinute = $param["ExecutionTTLMinute"];
        }

        if (array_key_exists("WaitExecutionTotalTTLMinute",$param) and $param["WaitExecutionTotalTTLMinute"] !== null) {
            $this->WaitExecutionTotalTTLMinute = $param["WaitExecutionTotalTTLMinute"];
        }
    }
}
