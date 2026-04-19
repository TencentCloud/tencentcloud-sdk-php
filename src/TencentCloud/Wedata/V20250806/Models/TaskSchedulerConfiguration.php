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
 * @method string getCycleType() 获取<p>周期类型：支持的类型为</p><p>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置<p>周期类型：支持的类型为</p><p>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取<p>0 2 3 1,L,2 * ?</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置<p>0 2 3 1,L,2 * ?</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取<p>执行时间 左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>执行时间 左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取<p>执行时间 右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置<p>执行时间 右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarOpen() 获取<p>日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarOpen(string $CalendarOpen) 设置<p>日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarId() 获取<p>日历调度 日历 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarId(string $CalendarId) 设置<p>日历调度 日历 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarName() 获取<p>日历调度 日历名称, 需要从 DescribeScheduleCalendarPageList 中获取</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarName(string $CalendarName) 设置<p>日历调度 日历名称, 需要从 DescribeScheduleCalendarPageList 中获取</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelfDepend() 获取<p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfDepend(string $SelfDepend) 设置<p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUpstreamDependencyConfigList() 获取<p>上游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamDependencyConfigList(array $UpstreamDependencyConfigList) 设置<p>上游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDownstreamDependencyConfigList() 获取<p>下游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownstreamDependencyConfigList(array $DownstreamDependencyConfigList) 设置<p>下游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventListenerList() 获取<p>事件数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventListenerList(array $EventListenerList) 设置<p>事件数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllowRedoType() 获取<p>重跑&amp;补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowRedoType(string $AllowRedoType) 设置<p>重跑&amp;补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParamTaskOutList() 获取<p>输出参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTaskOutList(array $ParamTaskOutList) 设置<p>输出参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParamTaskInList() 获取<p>输入参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTaskInList(array $ParamTaskInList) 设置<p>输入参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskOutputRegistryList() 获取<p>产出登记</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskOutputRegistryList(array $TaskOutputRegistryList) 设置<p>产出登记</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInitStrategy() 获取<p><strong>实例生成策略</strong></p><ul><li>T_PLUS_0: T+0生成,默认策略</li><li>T_PLUS_1: T+1生成</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitStrategy(string $InitStrategy) 设置<p><strong>实例生成策略</strong></p><ul><li>T_PLUS_0: T+0生成,默认策略</li><li>T_PLUS_1: T+1生成</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScheduleRunType() 获取<p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleRunType(integer $ScheduleRunType) 设置<p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDownStreamDependencyConfigList() 获取<p>（废弃，建议使用 DownstreamDependencyConfigList）下游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownStreamDependencyConfigList(array $DownStreamDependencyConfigList) 设置<p>（废弃，建议使用 DownstreamDependencyConfigList）下游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunPriority() 获取<p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunPriority(integer $RunPriority) 设置<p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryWait() 获取<p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryWait(integer $RetryWait) 设置<p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRetryAttempts() 获取<p>重试策略 最大尝试次数, 默认: 4</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRetryAttempts(integer $MaxRetryAttempts) 设置<p>重试策略 最大尝试次数, 默认: 4</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutionTTL() 获取<p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionTTL(integer $ExecutionTTL) 设置<p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWaitExecutionTotalTTL() 获取<p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitExecutionTotalTTL(string $WaitExecutionTotalTTL) 设置<p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScheduleType() 获取<p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleType(integer $ScheduleType) 设置<p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunPriorityType() 获取<p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunPriorityType(integer $RunPriorityType) 设置<p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryWaitMinute() 获取<p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryWaitMinute(integer $RetryWaitMinute) 设置<p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRetryNumber() 获取<p>重试策略 最大尝试次数, 默认: 4</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRetryNumber(integer $MaxRetryNumber) 设置<p>重试策略 最大尝试次数, 默认: 4</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutionTTLMinute() 获取<p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionTTLMinute(integer $ExecutionTTLMinute) 设置<p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaitExecutionTotalTTLMinute() 获取<p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitExecutionTotalTTLMinute(integer $WaitExecutionTotalTTLMinute) 设置<p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyTriggerPolicy() 获取<ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyTriggerPolicy(string $DependencyTriggerPolicy) 设置<ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAllowDownstreamDependency() 获取<p>是否允许下游依赖 1允许 0不允许</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowDownstreamDependency(integer $AllowDownstreamDependency) 设置<p>是否允许下游依赖 1允许 0不允许</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskSchedulerConfiguration extends AbstractModel
{
    /**
     * @var string <p>周期类型：支持的类型为</p><p>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @var string <p>0 2 3 1,L,2 * ?</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var string <p>生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>执行时间 左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string <p>执行时间 右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string <p>日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarOpen;

    /**
     * @var string <p>日历调度 日历 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarId;

    /**
     * @var string <p>日历调度 日历名称, 需要从 DescribeScheduleCalendarPageList 中获取</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarName;

    /**
     * @var string <p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfDepend;

    /**
     * @var array <p>上游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamDependencyConfigList;

    /**
     * @var array <p>下游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownstreamDependencyConfigList;

    /**
     * @var array <p>事件数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventListenerList;

    /**
     * @var string <p>重跑&amp;补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowRedoType;

    /**
     * @var array <p>输出参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamTaskOutList;

    /**
     * @var array <p>输入参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamTaskInList;

    /**
     * @var array <p>产出登记</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskOutputRegistryList;

    /**
     * @var string <p><strong>实例生成策略</strong></p><ul><li>T_PLUS_0: T+0生成,默认策略</li><li>T_PLUS_1: T+1生成</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitStrategy;

    /**
     * @var integer <p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ScheduleRunType;

    /**
     * @var array <p>（废弃，建议使用 DownstreamDependencyConfigList）下游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $DownStreamDependencyConfigList;

    /**
     * @var integer <p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $RunPriority;

    /**
     * @var integer <p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $RetryWait;

    /**
     * @var integer <p>重试策略 最大尝试次数, 默认: 4</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $MaxRetryAttempts;

    /**
     * @var integer <p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ExecutionTTL;

    /**
     * @var string <p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $WaitExecutionTotalTTL;

    /**
     * @var integer <p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleType;

    /**
     * @var integer <p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunPriorityType;

    /**
     * @var integer <p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryWaitMinute;

    /**
     * @var integer <p>重试策略 最大尝试次数, 默认: 4</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRetryNumber;

    /**
     * @var integer <p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionTTLMinute;

    /**
     * @var integer <p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitExecutionTotalTTLMinute;

    /**
     * @var string <ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyTriggerPolicy;

    /**
     * @var integer <p>是否允许下游依赖 1允许 0不允许</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowDownstreamDependency;

    /**
     * @param string $CycleType <p>周期类型：支持的类型为</p><p>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression <p>0 2 3 1,L,2 * ?</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>生效日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>结束日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime <p>执行时间 左闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime <p>执行时间 右闭区间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarOpen <p>日历调度 取值为 0 和 1， 1为打开，0为关闭，默认为0</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarId <p>日历调度 日历 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarName <p>日历调度 日历名称, 需要从 DescribeScheduleCalendarPageList 中获取</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelfDepend <p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UpstreamDependencyConfigList <p>上游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DownstreamDependencyConfigList <p>下游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventListenerList <p>事件数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllowRedoType <p>重跑&amp;补录配置, 默认为 ALL; , ALL 运行成功或失败后皆可重跑或补录, FAILURE 运行成功后不可重跑或补录，运行失败后可重跑或补录, NONE 运行成功或失败后皆不可重跑或补录;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParamTaskOutList <p>输出参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParamTaskInList <p>输入参数数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskOutputRegistryList <p>产出登记</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InitStrategy <p><strong>实例生成策略</strong></p><ul><li>T_PLUS_0: T+0生成,默认策略</li><li>T_PLUS_1: T+1生成</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScheduleRunType <p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DownStreamDependencyConfigList <p>（废弃，建议使用 DownstreamDependencyConfigList）下游依赖数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunPriority <p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryWait <p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRetryAttempts <p>重试策略 最大尝试次数, 默认: 4</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutionTTL <p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WaitExecutionTotalTTL <p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScheduleType <p>调度类型: 0 正常调度 1 空跑调度，默认为 0</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunPriorityType <p>任务调度优先级 运行优先级 4高 5中 6低 , 默认:6</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryWaitMinute <p>重试策略 重试等待时间,单位分钟: 默认: 5</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRetryNumber <p>重试策略 最大尝试次数, 默认: 4</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutionTTLMinute <p>超时处理策略 运行耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaitExecutionTotalTTLMinute <p>超时处理策略 等待总时长耗时超时（单位：分钟）默认为 -1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyTriggerPolicy <ul><li>任务依赖运行条件，默认为ALL_SUCCESS，暂时只支持工作流调度项目下配置</li><li>ALL_SUCCESS： 全部成功：所有上游依赖任务都达到终态时，进行依赖判断，如果上游全部都成功，则依赖判断成功，否则如果上游有一个跳过运行，则标记为跳过运行，其余情况标记为上游失败</li><li>ALL_FAILED：全部失败：所有上游依赖任务都达到终态时，进行依赖判断，如果上游状态都是失败或者上游失败，则依赖判断成功，否则就标记为跳过运行</li><li>ALL_DONE：全部完成：所有上游依赖任务都达到终态时，进行依赖判断，直接是依赖判断成功</li><li>ALL_DONE_AT_LEAST_ONE_SUCCESS：上游全部完成至少一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个成功，则依赖判断成功，否则就是跳过运行</li><li>ALL_SKIPPED：上游全部都跳过: 所有上游依赖任务都达到终态时，进行依赖判断，所有的上游都是跳过状态才算依赖判断成功，否则当前节点就是跳过运行</li><li>ONE_FAILED：至少一个失败: 上游只要有一个失败了，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有失败，则跳过运行</li><li>ONE_SUCCESS：至少一个成功：上游只要有一个成功，就进行依赖判断，且依赖判断成功，如果上游全部完成但是没有成功，则跳过运行</li><li>ONE_DONE：至少一个完成：上游只要有一个完成了，就进行依赖判断，且依赖判断成功，否则还是等待上游</li><li>NONE_FAILED：上游全部完成，没有失败: 所有上游依赖任务都达到终态时，进行依赖判断，如果上游都是成功或者跳过运行，则依赖判断成功，否则标记为上游失败</li><li>ALL_DONE_NONE_FAILED_AT_LEAST_ONE_SUCCESS：上游全部完成，没有失败，至少有一个成功: 所有上游依赖任务都达到终态时，进行依赖判断，上游没有一个失败且至少有一个成功的情况下，依赖判断成功，否则就是跳过运行</li><li>NONE_SKIPPED：上游全部完成，没有跳过运行: 所有上游依赖任务都达到终态时，进行依赖判断, 如果上游状态全部都是成功、失败、上游失败状态，则依赖判断成功，否则为跳过运行</li><li>ALL_DONE_AT_LEAST_ONE_FAILED：上游全部完成至少一个失败: 所有上游依赖任务都达到终态时，进行依赖判断，至少有一个失败，则依赖判断成功，否则就是跳过运行</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AllowDownstreamDependency <p>是否允许下游依赖 1允许 0不允许</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
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

        if (array_key_exists("DependencyTriggerPolicy",$param) and $param["DependencyTriggerPolicy"] !== null) {
            $this->DependencyTriggerPolicy = $param["DependencyTriggerPolicy"];
        }

        if (array_key_exists("AllowDownstreamDependency",$param) and $param["AllowDownstreamDependency"] !== null) {
            $this->AllowDownstreamDependency = $param["AllowDownstreamDependency"];
        }
    }
}
