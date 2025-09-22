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
 * @method string getScheduleTimeZone() 获取时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置时区
注意：此字段可能返回 null，表示取不到有效值。
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
 * @method string getSelfDepend() 获取自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelfDepend(string $SelfDepend) 设置自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取生效开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置生效开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取生效结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置生效结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDependencyWorkflow() 获取工作流依赖，yes or no
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置工作流依赖，yes or no
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStartTime() 获取执行时间左闭区间，示例：00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置执行时间左闭区间，示例：00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionEndTime() 获取执行时间右闭区间，示例：23:59
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置执行时间右闭区间，示例：23:59
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarOpen() 获取是否开启日历调度 1 开启 0关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarOpen(string $CalendarOpen) 设置是否开启日历调度 1 开启 0关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarName() 获取日历名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarName(string $CalendarName) 设置日历名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalendarId() 获取日历id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalendarId(string $CalendarId) 设置日历id
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowSchedulerConfiguration extends AbstractModel
{
    /**
     * @var string 时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

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
     * @var string 自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelfDepend;

    /**
     * @var string 生效开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 生效结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 工作流依赖，yes or no
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependencyWorkflow;

    /**
     * @var string 执行时间左闭区间，示例：00:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStartTime;

    /**
     * @var string 执行时间右闭区间，示例：23:59
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionEndTime;

    /**
     * @var string cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var string 是否开启日历调度 1 开启 0关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarOpen;

    /**
     * @var string 日历名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarName;

    /**
     * @var string 日历id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalendarId;

    /**
     * @param string $ScheduleTimeZone 时区
注意：此字段可能返回 null，表示取不到有效值。
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
     * @param string $SelfDepend 自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 生效开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 生效结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DependencyWorkflow 工作流依赖，yes or no
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStartTime 执行时间左闭区间，示例：00:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionEndTime 执行时间右闭区间，示例：23:59
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarOpen 是否开启日历调度 1 开启 0关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarName 日历名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalendarId 日历id
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
    }
}
