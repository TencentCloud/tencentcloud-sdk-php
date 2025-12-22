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
 * 任务调度配置信息
 *
 * @method string getCycleType() 获取周期类型：支持的类型为

ONEOFF_CYCLE: 一次性
YEAR_CYCLE: 年
MONTH_CYCLE: 月
WEEK_CYCLE: 周
DAY_CYCLE: 天
HOUR_CYCLE: 小时
MINUTE_CYCLE: 分钟
CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置周期类型：支持的类型为

ONEOFF_CYCLE: 一次性
YEAR_CYCLE: 年
MONTH_CYCLE: 月
WEEK_CYCLE: 周
DAY_CYCLE: 天
HOUR_CYCLE: 小时
MINUTE_CYCLE: 分钟
CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取0 2 3 1,L,2 * ?	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置0 2 3 1,L,2 * ?	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取生效日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置生效日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取执行时间 左闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置执行时间 左闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取执行时间 右闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置执行时间 右闭区间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarOpen() 获取日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarOpen(string $CalendarOpen) 设置日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarId() 获取日历调度 日历 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarId(string $CalendarId) 设置日历调度 日历 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarName() 获取日历调度 日历名称, 需要从 DescribeScheduleCalendarPageList 中获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarName(string $CalendarName) 设置日历调度 日历名称, 需要从 DescribeScheduleCalendarPageList 中获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelfDepend() 获取自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfDepend(string $SelfDepend) 设置自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUpstreamDependencyConfigList() 获取上游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamDependencyConfigList(array $UpstreamDependencyConfigList) 设置上游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDownstreamDependencyConfigList() 获取下游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownstreamDependencyConfigList(array $DownstreamDependencyConfigList) 设置下游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventListenerList() 获取事件数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventListenerList(array $EventListenerList) 设置事件数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllowRedoType() 获取重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowRedoType(string $AllowRedoType) 设置重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParamTaskOutList() 获取输出参数数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTaskOutList(array $ParamTaskOutList) 设置输出参数数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParamTaskInList() 获取输入参数数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTaskInList(array $ParamTaskInList) 设置输入参数数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskOutputRegistryList() 获取产出登记
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskOutputRegistryList(array $TaskOutputRegistryList) 设置产出登记
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInitStrategy() 获取**实例生成策略**
* T_PLUS_0: T+0生成,默认策略
* T_PLUS_1: T+1生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitStrategy(string $InitStrategy) 设置**实例生成策略**
* T_PLUS_0: T+0生成,默认策略
* T_PLUS_1: T+1生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScheduleRunType() 获取调度类型: 0 正常调度 1 空跑调度，默认为 0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleRunType(integer $ScheduleRunType) 设置调度类型: 0 正常调度 1 空跑调度，默认为 0
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDownStreamDependencyConfigList() 获取（废弃，建议使用 DownstreamDependencyConfigList）下游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownStreamDependencyConfigList(array $DownStreamDependencyConfigList) 设置（废弃，建议使用 DownstreamDependencyConfigList）下游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunPriority() 获取任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunPriority(integer $RunPriority) 设置任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryWait() 获取重试策略 重试等待时间,单位分钟: 默认: 5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryWait(integer $RetryWait) 设置重试策略 重试等待时间,单位分钟: 默认: 5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRetryAttempts() 获取重试策略 最大尝试次数, 默认: 4
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRetryAttempts(integer $MaxRetryAttempts) 设置重试策略 最大尝试次数, 默认: 4
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutionTTL() 获取超时处理策略 运行耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionTTL(integer $ExecutionTTL) 设置超时处理策略 运行耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWaitExecutionTotalTTL() 获取超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitExecutionTotalTTL(string $WaitExecutionTotalTTL) 设置超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScheduleType() 获取调度类型: 0 正常调度 1 空跑调度，默认为 0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleType(integer $ScheduleType) 设置调度类型: 0 正常调度 1 空跑调度，默认为 0
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunPriorityType() 获取任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunPriorityType(integer $RunPriorityType) 设置任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryWaitMinute() 获取重试策略 重试等待时间,单位分钟: 默认: 5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryWaitMinute(integer $RetryWaitMinute) 设置重试策略 重试等待时间,单位分钟: 默认: 5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRetryNumber() 获取重试策略 最大尝试次数, 默认: 4
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRetryNumber(integer $MaxRetryNumber) 设置重试策略 最大尝试次数, 默认: 4
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutionTTLMinute() 获取超时处理策略 运行耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionTTLMinute(integer $ExecutionTTLMinute) 设置超时处理策略 运行耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaitExecutionTotalTTLMinute() 获取超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitExecutionTotalTTLMinute(integer $WaitExecutionTotalTTLMinute) 设置超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskSchedulerConfiguration extends AbstractModel
{
    /**
     * @var string 周期类型：支持的类型为

ONEOFF_CYCLE: 一次性
YEAR_CYCLE: 年
MONTH_CYCLE: 月
WEEK_CYCLE: 周
DAY_CYCLE: 天
HOUR_CYCLE: 小时
MINUTE_CYCLE: 分钟
CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string 时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @var string 0 2 3 1,L,2 * ?	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var string 生效日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 结束日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 执行时间 左闭区间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string 执行时间 右闭区间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string 日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarOpen;

    /**
     * @var string 日历调度 日历 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarId;

    /**
     * @var string 日历调度 日历名称, 需要从 DescribeScheduleCalendarPageList 中获取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarName;

    /**
     * @var string 自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfDepend;

    /**
     * @var array 上游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamDependencyConfigList;

    /**
     * @var array 下游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownstreamDependencyConfigList;

    /**
     * @var array 事件数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventListenerList;

    /**
     * @var string 重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowRedoType;

    /**
     * @var array 输出参数数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamTaskOutList;

    /**
     * @var array 输入参数数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamTaskInList;

    /**
     * @var array 产出登记
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskOutputRegistryList;

    /**
     * @var string **实例生成策略**
* T_PLUS_0: T+0生成,默认策略
* T_PLUS_1: T+1生成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitStrategy;

    /**
     * @var integer 调度类型: 0 正常调度 1 空跑调度，默认为 0
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ScheduleRunType;

    /**
     * @var array （废弃，建议使用 DownstreamDependencyConfigList）下游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $DownStreamDependencyConfigList;

    /**
     * @var integer 任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $RunPriority;

    /**
     * @var integer 重试策略 重试等待时间,单位分钟: 默认: 5
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $RetryWait;

    /**
     * @var integer 重试策略 最大尝试次数, 默认: 4
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $MaxRetryAttempts;

    /**
     * @var integer 超时处理策略 运行耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ExecutionTTL;

    /**
     * @var string 超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $WaitExecutionTotalTTL;

    /**
     * @var integer 调度类型: 0 正常调度 1 空跑调度，默认为 0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleType;

    /**
     * @var integer 任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunPriorityType;

    /**
     * @var integer 重试策略 重试等待时间,单位分钟: 默认: 5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryWaitMinute;

    /**
     * @var integer 重试策略 最大尝试次数, 默认: 4
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRetryNumber;

    /**
     * @var integer 超时处理策略 运行耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionTTLMinute;

    /**
     * @var integer 超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitExecutionTotalTTLMinute;

    /**
     * @param string $CycleType 周期类型：支持的类型为

ONEOFF_CYCLE: 一次性
YEAR_CYCLE: 年
MONTH_CYCLE: 月
WEEK_CYCLE: 周
DAY_CYCLE: 天
HOUR_CYCLE: 小时
MINUTE_CYCLE: 分钟
CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone 时区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression 0 2 3 1,L,2 * ?	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 生效日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime 执行时间 左闭区间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime 执行时间 右闭区间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarOpen 日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarId 日历调度 日历 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarName 日历调度 日历名称, 需要从 DescribeScheduleCalendarPageList 中获取
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelfDepend 自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UpstreamDependencyConfigList 上游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DownstreamDependencyConfigList 下游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventListenerList 事件数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllowRedoType 重跑&补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParamTaskOutList 输出参数数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParamTaskInList 输入参数数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskOutputRegistryList 产出登记
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InitStrategy **实例生成策略**
* T_PLUS_0: T+0生成,默认策略
* T_PLUS_1: T+1生成
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScheduleRunType 调度类型: 0 正常调度 1 空跑调度，默认为 0
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DownStreamDependencyConfigList （废弃，建议使用 DownstreamDependencyConfigList）下游依赖数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunPriority 任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryWait 重试策略 重试等待时间,单位分钟: 默认: 5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRetryAttempts 重试策略 最大尝试次数, 默认: 4
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutionTTL 超时处理策略 运行耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WaitExecutionTotalTTL 超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScheduleType 调度类型: 0 正常调度 1 空跑调度，默认为 0
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunPriorityType 任务调度优先级 运行优先级 4高 5中 6低 , 默认:6
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryWaitMinute 重试策略 重试等待时间,单位分钟: 默认: 5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRetryNumber 重试策略 最大尝试次数, 默认: 4
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutionTTLMinute 超时处理策略 运行耗时超时（单位：分钟）默认为 -1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaitExecutionTotalTTLMinute 超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1
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

        if (array_key_exists("CalendarName",$param) and $param["CalendarName"] !== null) {
            $this->CalendarName = $param["CalendarName"];
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

        if (array_key_exists("DownstreamDependencyConfigList",$param) and $param["DownstreamDependencyConfigList"] !== null) {
            $this->DownstreamDependencyConfigList = [];
            foreach ($param["DownstreamDependencyConfigList"] as $key => $value){
                $obj = new DependencyTaskBrief();
                $obj->deserialize($value);
                array_push($this->DownstreamDependencyConfigList, $obj);
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

        if (array_key_exists("DownStreamDependencyConfigList",$param) and $param["DownStreamDependencyConfigList"] !== null) {
            $this->DownStreamDependencyConfigList = [];
            foreach ($param["DownStreamDependencyConfigList"] as $key => $value){
                $obj = new DependencyTaskBrief();
                $obj->deserialize($value);
                array_push($this->DownStreamDependencyConfigList, $obj);
            }
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
