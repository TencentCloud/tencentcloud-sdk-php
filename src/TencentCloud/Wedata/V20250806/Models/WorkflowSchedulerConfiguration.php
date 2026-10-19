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
 * 工作流统一调度出参
 *
 * @method string getScheduleTimeZone() 获取<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取<p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置<p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelfDepend() 获取<p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfDepend(string $SelfDepend) 设置<p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>生效开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>生效开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>生效结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>生效结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyWorkflow() 获取<p>工作流依赖，yes or no</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置<p>工作流依赖，yes or no</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取<p>执行时间左闭区间，示例：00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>执行时间左闭区间，示例：00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取<p>执行时间右闭区间，示例：23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置<p>执行时间右闭区间，示例：23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取<p>cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置<p>cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarOpen() 获取<p>是否开启日历调度 1 开启 0关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarOpen(string $CalendarOpen) 设置<p>是否开启日历调度 1 开启 0关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarName() 获取<p>日历名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarName(string $CalendarName) 设置<p>日历名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarId() 获取<p>日历id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarId(string $CalendarId) 设置<p>日历id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinuteOffset() 获取<p>分钟任务相位偏移</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinuteOffset(integer $MinuteOffset) 设置<p>分钟任务相位偏移</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowSchedulerConfiguration extends AbstractModel
{
    /**
     * @var string <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @var string <p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string <p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfDepend;

    /**
     * @var string <p>生效开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>生效结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>工作流依赖，yes or no</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyWorkflow;

    /**
     * @var string <p>执行时间左闭区间，示例：00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string <p>执行时间右闭区间，示例：23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string <p>cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var string <p>是否开启日历调度 1 开启 0关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarOpen;

    /**
     * @var string <p>日历名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarName;

    /**
     * @var string <p>日历id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarId;

    /**
     * @var integer <p>分钟任务相位偏移</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinuteOffset;

    /**
     * @param string $ScheduleTimeZone <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType <p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelfDepend <p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>生效开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>生效结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyWorkflow <p>工作流依赖，yes or no</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime <p>执行时间左闭区间，示例：00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime <p>执行时间右闭区间，示例：23:59</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression <p>cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarOpen <p>是否开启日历调度 1 开启 0关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarName <p>日历名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarId <p>日历id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinuteOffset <p>分钟任务相位偏移</p>
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
        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
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

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
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

        if (array_key_exists("MinuteOffset",$param) and $param["MinuteOffset"] !== null) {
            $this->MinuteOffset = $param["MinuteOffset"];
        }
    }
}
