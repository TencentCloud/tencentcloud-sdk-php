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
 * @method string getCycleType() 获取<p>周期类型：默认为 DAY_CYCLE</p><p>支持的类型为 </p><ul><li>ONEOFF_CYCLE: 一次性</li><li>YEAR_CYCLE: 年</li><li>MONTH_CYCLE: 月</li><li>WEEK_CYCLE: 周</li><li>DAY_CYCLE: 天</li><li>HOUR_CYCLE: 小时</li><li>MINUTE_CYCLE: 分钟</li><li>CRONTAB_CYCLE: crontab表达式类型</li></ul>
 * @method void setCycleType(string $CycleType) 设置<p>周期类型：默认为 DAY_CYCLE</p><p>支持的类型为 </p><ul><li>ONEOFF_CYCLE: 一次性</li><li>YEAR_CYCLE: 年</li><li>MONTH_CYCLE: 月</li><li>WEEK_CYCLE: 周</li><li>DAY_CYCLE: 天</li><li>HOUR_CYCLE: 小时</li><li>MINUTE_CYCLE: 分钟</li><li>CRONTAB_CYCLE: crontab表达式类型</li></ul>
 * @method string getScheduleTimeZone() 获取<p>时区，默认为 UTC+8</p>
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>时区，默认为 UTC+8</p>
 * @method string getCrontabExpression() 获取<p>Cron表达式，默认为 0 0 0 * * ? *</p>
 * @method void setCrontabExpression(string $CrontabExpression) 设置<p>Cron表达式，默认为 0 0 0 * * ? *</p>
 * @method string getStartTime() 获取<p>生效日期，默认为当前日期的 00:00:00</p>
 * @method void setStartTime(string $StartTime) 设置<p>生效日期，默认为当前日期的 00:00:00</p>
 * @method string getEndTime() 获取<p>结束日期，默认为 2099-12-31 23:59:59</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束日期，默认为 2099-12-31 23:59:59</p>
 * @method string getExecutionStartTime() 获取<p>执行时间 左闭区间，默认 00:00</p>
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>执行时间 左闭区间，默认 00:00</p>
 * @method string getExecutionEndTime() 获取<p>执行时间 右闭区间，默认 23:59</p>
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置<p>执行时间 右闭区间，默认 23:59</p>
 * @method string getCalendarOpen() 获取<p>日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0</p>
 * @method void setCalendarOpen(string $CalendarOpen) 设置<p>日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0</p>
 * @method string getCalendarId() 获取<p>日历调度 日历 ID</p>
 * @method void setCalendarId(string $CalendarId) 设置<p>日历调度 日历 ID</p>
 * @method string getSelfDepend() 获取<p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
 * @method void setSelfDepend(string $SelfDepend) 设置<p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
 * @method array getUpstreamDependencyConfigList() 获取<p>上游依赖数组</p>
 * @method void setUpstreamDependencyConfigList(array $UpstreamDependencyConfigList) 设置<p>上游依赖数组</p>
 * @method array getEventListenerList() 获取<p>事件数组</p>
 * @method void setEventListenerList(array $EventListenerList) 设置<p>事件数组</p>
 * @method string getAllowRedoType() 获取<p>重跑&amp;补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;</p>
 * @method void setAllowRedoType(string $AllowRedoType) 设置<p>重跑&amp;补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;</p>
 * @method array getParamTaskOutList() 获取<p>输出参数数组</p>
 * @method void setParamTaskOutList(array $ParamTaskOutList) 设置<p>输出参数数组</p>
 * @method array getParamTaskInList() 获取<p>输入参数数组</p>
 * @method void setParamTaskInList(array $ParamTaskInList) 设置<p>输入参数数组</p>
 * @method array getTaskOutputRegistryList() 获取<p>产出登记</p>
 * @method void setTaskOutputRegistryList(array $TaskOutputRegistryList) 设置<p>产出登记</p>
 * @method string getInitStrategy() 获取<p><strong>实例生成策略</strong></p><ul><li>T_PLUS_0: T+0生成,默认策略</li><li>T_PLUS_1: T+1生成</li></ul>
 * @method void setInitStrategy(string $InitStrategy) 设置<p><strong>实例生成策略</strong></p><ul><li>T_PLUS_0: T+0生成,默认策略</li><li>T_PLUS_1: T+1生成</li></ul>
 * @method string getScheduleRunType() 获取<p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
 * @method void setScheduleRunType(string $ScheduleRunType) 设置<p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
 * @method string getRunPriority() 获取<p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
 * @method void setRunPriority(string $RunPriority) 设置<p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
 * @method string getRetryWait() 获取<p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
 * @method void setRetryWait(string $RetryWait) 设置<p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
 * @method string getMaxRetryAttempts() 获取<p>重试策略 最大尝试次数, 默认: 4</p>
 * @method void setMaxRetryAttempts(string $MaxRetryAttempts) 设置<p>重试策略 最大尝试次数, 默认: 4</p>
 * @method string getExecutionTTL() 获取<p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
 * @method void setExecutionTTL(string $ExecutionTTL) 设置<p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
 * @method string getWaitExecutionTotalTTL() 获取<p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
 * @method void setWaitExecutionTotalTTL(string $WaitExecutionTotalTTL) 设置<p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
 * @method integer getScheduleType() 获取<p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
 * @method void setScheduleType(integer $ScheduleType) 设置<p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
 * @method integer getRunPriorityType() 获取<p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
 * @method void setRunPriorityType(integer $RunPriorityType) 设置<p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
 * @method integer getRetryWaitMinute() 获取<p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
 * @method void setRetryWaitMinute(integer $RetryWaitMinute) 设置<p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
 * @method integer getMaxRetryNumber() 获取<p>重试策略 最大尝试次数, 默认: 4</p>
 * @method void setMaxRetryNumber(integer $MaxRetryNumber) 设置<p>重试策略 最大尝试次数, 默认: 4</p>
 * @method integer getExecutionTTLMinute() 获取<p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
 * @method void setExecutionTTLMinute(integer $ExecutionTTLMinute) 设置<p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
 * @method integer getWaitExecutionTotalTTLMinute() 获取<p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
 * @method void setWaitExecutionTotalTTLMinute(integer $WaitExecutionTotalTTLMinute) 设置<p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
 * @method string getDependencyTriggerPolicy() 获取<ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
 * @method void setDependencyTriggerPolicy(string $DependencyTriggerPolicy) 设置<ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
 * @method integer getAllowDownstreamDependency() 获取<p>是否允许下游依赖 1允许 0不允许</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
 * @method void setAllowDownstreamDependency(integer $AllowDownstreamDependency) 设置<p>是否允许下游依赖 1允许 0不允许</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
 */
class CreateTaskSchedulerConfiguration extends AbstractModel
{
    /**
     * @var string <p>周期类型：默认为 DAY_CYCLE</p><p>支持的类型为 </p><ul><li>ONEOFF_CYCLE: 一次性</li><li>YEAR_CYCLE: 年</li><li>MONTH_CYCLE: 月</li><li>WEEK_CYCLE: 周</li><li>DAY_CYCLE: 天</li><li>HOUR_CYCLE: 小时</li><li>MINUTE_CYCLE: 分钟</li><li>CRONTAB_CYCLE: crontab表达式类型</li></ul>
     */
    public $CycleType;

    /**
     * @var string <p>时区，默认为 UTC+8</p>
     */
    public $ScheduleTimeZone;

    /**
     * @var string <p>Cron表达式，默认为 0 0 0 * * ? *</p>
     */
    public $CrontabExpression;

    /**
     * @var string <p>生效日期，默认为当前日期的 00:00:00</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束日期，默认为 2099-12-31 23:59:59</p>
     */
    public $EndTime;

    /**
     * @var string <p>执行时间 左闭区间，默认 00:00</p>
     */
    public $ExecutionStartTime;

    /**
     * @var string <p>执行时间 右闭区间，默认 23:59</p>
     */
    public $ExecutionEndTime;

    /**
     * @var string <p>日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0</p>
     */
    public $CalendarOpen;

    /**
     * @var string <p>日历调度 日历 ID</p>
     */
    public $CalendarId;

    /**
     * @var string <p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
     */
    public $SelfDepend;

    /**
     * @var array <p>上游依赖数组</p>
     */
    public $UpstreamDependencyConfigList;

    /**
     * @var array <p>事件数组</p>
     */
    public $EventListenerList;

    /**
     * @var string <p>重跑&amp;补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;</p>
     */
    public $AllowRedoType;

    /**
     * @var array <p>输出参数数组</p>
     */
    public $ParamTaskOutList;

    /**
     * @var array <p>输入参数数组</p>
     */
    public $ParamTaskInList;

    /**
     * @var array <p>产出登记</p>
     */
    public $TaskOutputRegistryList;

    /**
     * @var string <p><strong>实例生成策略</strong></p><ul><li>T_PLUS_0: T+0生成,默认策略</li><li>T_PLUS_1: T+1生成</li></ul>
     */
    public $InitStrategy;

    /**
     * @var string <p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
     * @deprecated
     */
    public $ScheduleRunType;

    /**
     * @var string <p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
     * @deprecated
     */
    public $RunPriority;

    /**
     * @var string <p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
     * @deprecated
     */
    public $RetryWait;

    /**
     * @var string <p>重试策略 最大尝试次数, 默认: 4</p>
     * @deprecated
     */
    public $MaxRetryAttempts;

    /**
     * @var string <p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
     * @deprecated
     */
    public $ExecutionTTL;

    /**
     * @var string <p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
     * @deprecated
     */
    public $WaitExecutionTotalTTL;

    /**
     * @var integer <p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
     */
    public $ScheduleType;

    /**
     * @var integer <p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
     */
    public $RunPriorityType;

    /**
     * @var integer <p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
     */
    public $RetryWaitMinute;

    /**
     * @var integer <p>重试策略 最大尝试次数, 默认: 4</p>
     */
    public $MaxRetryNumber;

    /**
     * @var integer <p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
     */
    public $ExecutionTTLMinute;

    /**
     * @var integer <p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
     */
    public $WaitExecutionTotalTTLMinute;

    /**
     * @var string <ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
     */
    public $DependencyTriggerPolicy;

    /**
     * @var integer <p>是否允许下游依赖 1允许 0不允许</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
     * @deprecated
     */
    public $AllowDownstreamDependency;

    /**
     * @param string $CycleType <p>周期类型：默认为 DAY_CYCLE</p><p>支持的类型为 </p><ul><li>ONEOFF_CYCLE: 一次性</li><li>YEAR_CYCLE: 年</li><li>MONTH_CYCLE: 月</li><li>WEEK_CYCLE: 周</li><li>DAY_CYCLE: 天</li><li>HOUR_CYCLE: 小时</li><li>MINUTE_CYCLE: 分钟</li><li>CRONTAB_CYCLE: crontab表达式类型</li></ul>
     * @param string $ScheduleTimeZone <p>时区，默认为 UTC+8</p>
     * @param string $CrontabExpression <p>Cron表达式，默认为 0 0 0 * * ? *</p>
     * @param string $StartTime <p>生效日期，默认为当前日期的 00:00:00</p>
     * @param string $EndTime <p>结束日期，默认为 2099-12-31 23:59:59</p>
     * @param string $ExecutionStartTime <p>执行时间 左闭区间，默认 00:00</p>
     * @param string $ExecutionEndTime <p>执行时间 右闭区间，默认 23:59</p>
     * @param string $CalendarOpen <p>日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0</p>
     * @param string $CalendarId <p>日历调度 日历 ID</p>
     * @param string $SelfDepend <p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
     * @param array $UpstreamDependencyConfigList <p>上游依赖数组</p>
     * @param array $EventListenerList <p>事件数组</p>
     * @param string $AllowRedoType <p>重跑&amp;补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;</p>
     * @param array $ParamTaskOutList <p>输出参数数组</p>
     * @param array $ParamTaskInList <p>输入参数数组</p>
     * @param array $TaskOutputRegistryList <p>产出登记</p>
     * @param string $InitStrategy <p><strong>实例生成策略</strong></p><ul><li>T_PLUS_0: T+0生成,默认策略</li><li>T_PLUS_1: T+1生成</li></ul>
     * @param string $ScheduleRunType <p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
     * @param string $RunPriority <p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
     * @param string $RetryWait <p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
     * @param string $MaxRetryAttempts <p>重试策略 最大尝试次数, 默认: 4</p>
     * @param string $ExecutionTTL <p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
     * @param string $WaitExecutionTotalTTL <p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
     * @param integer $ScheduleType <p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
     * @param integer $RunPriorityType <p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
     * @param integer $RetryWaitMinute <p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
     * @param integer $MaxRetryNumber <p>重试策略 最大尝试次数, 默认: 4</p>
     * @param integer $ExecutionTTLMinute <p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
     * @param integer $WaitExecutionTotalTTLMinute <p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
     * @param string $DependencyTriggerPolicy <ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
     * @param integer $AllowDownstreamDependency <p>是否允许下游依赖 1允许 0不允许</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
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

        if (array_key_exists("DependencyTriggerPolicy",$param) and $param["DependencyTriggerPolicy"] !== null) {
            $this->DependencyTriggerPolicy = $param["DependencyTriggerPolicy"];
        }

        if (array_key_exists("AllowDownstreamDependency",$param) and $param["AllowDownstreamDependency"] !== null) {
            $this->AllowDownstreamDependency = $param["AllowDownstreamDependency"];
        }
    }
}
