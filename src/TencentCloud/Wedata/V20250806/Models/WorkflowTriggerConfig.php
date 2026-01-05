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
 * 工作流调度配置
 *
 * @method string getTriggerMode() 获取触发方式，
- 定时触发：TIME_TRIGGER
- 持续运行：CONTINUE_RUN
- 文件到达：FILE_ARRIVAL

注意：
- TIME_TRIGGER 和 CONTINUE_RUN 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；
- FILE_ARRIVAL 模式下，FileArrivalPath、TriggerMinimumIntervalSecond、TriggerWaitTimeSecond 必填；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerMode(string $TriggerMode) 设置触发方式，
- 定时触发：TIME_TRIGGER
- 持续运行：CONTINUE_RUN
- 文件到达：FILE_ARRIVAL

注意：
- TIME_TRIGGER 和 CONTINUE_RUN 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；
- FILE_ARRIVAL 模式下，FileArrivalPath、TriggerMinimumIntervalSecond、TriggerWaitTimeSecond 必填；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInfo() 获取WorkflowTriggerConfig转换成Json格式，对账使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置WorkflowTriggerConfig转换成Json格式，对账使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取调度时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置调度时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取调度生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置调度生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取调度结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置调度结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigMode() 获取配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigMode(string $ConfigMode) 设置配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION
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
 * @method string getCrontabExpression() 获取cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerId() 获取triggerId, uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerId(string $TriggerId) 设置triggerId, uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileArrivalPath() 获取文件到达模式下	存储系统中的监听路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileArrivalPath(string $FileArrivalPath) 设置文件到达模式下	存储系统中的监听路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTriggerMinimumIntervalSecond() 获取文件到达模式下	触发最短间隔时间（单位：秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerMinimumIntervalSecond(integer $TriggerMinimumIntervalSecond) 设置文件到达模式下	触发最短间隔时间（单位：秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTriggerWaitTimeSecond() 获取文件到达模式下	触发等待时间（单位：秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerWaitTimeSecond(integer $TriggerWaitTimeSecond) 设置文件到达模式下	触发等待时间（单位：秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerStatus() 获取Trigger 状态 启动ACTIVE，暂停PAUSED
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerStatus(string $SchedulerStatus) 设置Trigger 状态 启动ACTIVE，暂停PAUSED
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowTriggerConfig extends AbstractModel
{
    /**
     * @var string 触发方式，
- 定时触发：TIME_TRIGGER
- 持续运行：CONTINUE_RUN
- 文件到达：FILE_ARRIVAL

注意：
- TIME_TRIGGER 和 CONTINUE_RUN 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；
- FILE_ARRIVAL 模式下，FileArrivalPath、TriggerMinimumIntervalSecond、TriggerWaitTimeSecond 必填；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerMode;

    /**
     * @var string WorkflowTriggerConfig转换成Json格式，对账使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var string 调度时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @var string 调度生效时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 调度结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigMode;

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
     * @var string cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var string triggerId, uuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerId;

    /**
     * @var string 文件到达模式下	存储系统中的监听路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileArrivalPath;

    /**
     * @var integer 文件到达模式下	触发最短间隔时间（单位：秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerMinimumIntervalSecond;

    /**
     * @var integer 文件到达模式下	触发等待时间（单位：秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerWaitTimeSecond;

    /**
     * @var string Trigger 状态 启动ACTIVE，暂停PAUSED
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerStatus;

    /**
     * @param string $TriggerMode 触发方式，
- 定时触发：TIME_TRIGGER
- 持续运行：CONTINUE_RUN
- 文件到达：FILE_ARRIVAL

注意：
- TIME_TRIGGER 和 CONTINUE_RUN 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；
- FILE_ARRIVAL 模式下，FileArrivalPath、TriggerMinimumIntervalSecond、TriggerWaitTimeSecond 必填；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInfo WorkflowTriggerConfig转换成Json格式，对账使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone 调度时区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 调度生效时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 调度结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigMode 配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION
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
     * @param string $CrontabExpression cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerId triggerId, uuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileArrivalPath 文件到达模式下	存储系统中的监听路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TriggerMinimumIntervalSecond 文件到达模式下	触发最短间隔时间（单位：秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TriggerWaitTimeSecond 文件到达模式下	触发等待时间（单位：秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerStatus Trigger 状态 启动ACTIVE，暂停PAUSED
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
        if (array_key_exists("TriggerMode",$param) and $param["TriggerMode"] !== null) {
            $this->TriggerMode = $param["TriggerMode"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ConfigMode",$param) and $param["ConfigMode"] !== null) {
            $this->ConfigMode = $param["ConfigMode"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("FileArrivalPath",$param) and $param["FileArrivalPath"] !== null) {
            $this->FileArrivalPath = $param["FileArrivalPath"];
        }

        if (array_key_exists("TriggerMinimumIntervalSecond",$param) and $param["TriggerMinimumIntervalSecond"] !== null) {
            $this->TriggerMinimumIntervalSecond = $param["TriggerMinimumIntervalSecond"];
        }

        if (array_key_exists("TriggerWaitTimeSecond",$param) and $param["TriggerWaitTimeSecond"] !== null) {
            $this->TriggerWaitTimeSecond = $param["TriggerWaitTimeSecond"];
        }

        if (array_key_exists("SchedulerStatus",$param) and $param["SchedulerStatus"] !== null) {
            $this->SchedulerStatus = $param["SchedulerStatus"];
        }
    }
}
