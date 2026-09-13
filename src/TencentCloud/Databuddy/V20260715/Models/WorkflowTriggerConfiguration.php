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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流调度配置。
 *
 * @method string getTriggerId() 获取调度配置ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerId(string $TriggerId) 设置调度配置ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerStatus() 获取调度状态 启动：START，暂停：PAUSE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerStatus(string $SchedulerStatus) 设置调度状态 启动：START，暂停：PAUSE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerMode() 获取触发方式，
- 定时触发：TIME_TRIGGER
- 持续运行：CONTINUE_RUN

注意：
- TIME_TRIGGER 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；
- CONTINUE_RUN 模式下，AdvancedConfig必填；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerMode(string $TriggerMode) 设置触发方式，
- 定时触发：TIME_TRIGGER
- 持续运行：CONTINUE_RUN

注意：
- TIME_TRIGGER 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；
- CONTINUE_RUN 模式下，AdvancedConfig必填；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerTimeZone() 获取调度时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerTimeZone(string $SchedulerTimeZone) 设置调度时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取调度生效时间，单位：毫秒时间戳。必须小于 EndTime
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置调度生效时间，单位：毫秒时间戳。必须小于 EndTime
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取调度结束时间，单位：毫秒时间戳。必须大于 StartTime
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置调度结束时间，单位：毫秒时间戳。必须大于 StartTime
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigMode() 获取配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigMode(string $ConfigMode) 设置配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取周期类型：支持的类型为 ONEOFF_CYCLE: 一次性 YEAR_CYCLE: 年 MONTH_CYCLE: 月 WEEK_CYCLE: 周 DAY_CYCLE: 天
HOUR_CYCLE: 小时 MINUTE_CYCLE: 分钟 CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置周期类型：支持的类型为 ONEOFF_CYCLE: 一次性 YEAR_CYCLE: 年 MONTH_CYCLE: 月 WEEK_CYCLE: 周 DAY_CYCLE: 天
HOUR_CYCLE: 小时 MINUTE_CYCLE: 分钟 CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置cron表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInfo() 获取Json格式，对账使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置Json格式，对账使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkflowTriggerAdvancedConfiguration getAdvancedConfig() 获取高级配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedConfig(WorkflowTriggerAdvancedConfiguration $AdvancedConfig) 设置高级配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowTriggerConfiguration extends AbstractModel
{
    /**
     * @var string 调度配置ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerId;

    /**
     * @var string 调度状态 启动：START，暂停：PAUSE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerStatus;

    /**
     * @var string 触发方式，
- 定时触发：TIME_TRIGGER
- 持续运行：CONTINUE_RUN

注意：
- TIME_TRIGGER 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；
- CONTINUE_RUN 模式下，AdvancedConfig必填；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerMode;

    /**
     * @var string 调度时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerTimeZone;

    /**
     * @var string 调度生效时间，单位：毫秒时间戳。必须小于 EndTime
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 调度结束时间，单位：毫秒时间戳。必须大于 StartTime
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigMode;

    /**
     * @var string 周期类型：支持的类型为 ONEOFF_CYCLE: 一次性 YEAR_CYCLE: 年 MONTH_CYCLE: 月 WEEK_CYCLE: 周 DAY_CYCLE: 天
HOUR_CYCLE: 小时 MINUTE_CYCLE: 分钟 CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var string Json格式，对账使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var WorkflowTriggerAdvancedConfiguration 高级配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedConfig;

    /**
     * @param string $TriggerId 调度配置ID，创建时无需传入，由服务端生成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerStatus 调度状态 启动：START，暂停：PAUSE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerMode 触发方式，
- 定时触发：TIME_TRIGGER
- 持续运行：CONTINUE_RUN

注意：
- TIME_TRIGGER 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；
- CONTINUE_RUN 模式下，AdvancedConfig必填；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerTimeZone 调度时区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 调度生效时间，单位：毫秒时间戳。必须小于 EndTime
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 调度结束时间，单位：毫秒时间戳。必须大于 StartTime
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigMode 配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType 周期类型：支持的类型为 ONEOFF_CYCLE: 一次性 YEAR_CYCLE: 年 MONTH_CYCLE: 月 WEEK_CYCLE: 周 DAY_CYCLE: 天
HOUR_CYCLE: 小时 MINUTE_CYCLE: 分钟 CRONTAB_CYCLE: crontab表达式类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression cron表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInfo Json格式，对账使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkflowTriggerAdvancedConfiguration $AdvancedConfig 高级配置
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
        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("SchedulerStatus",$param) and $param["SchedulerStatus"] !== null) {
            $this->SchedulerStatus = $param["SchedulerStatus"];
        }

        if (array_key_exists("TriggerMode",$param) and $param["TriggerMode"] !== null) {
            $this->TriggerMode = $param["TriggerMode"];
        }

        if (array_key_exists("SchedulerTimeZone",$param) and $param["SchedulerTimeZone"] !== null) {
            $this->SchedulerTimeZone = $param["SchedulerTimeZone"];
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

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = new WorkflowTriggerAdvancedConfiguration();
            $this->AdvancedConfig->deserialize($param["AdvancedConfig"]);
        }
    }
}
