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
 * @method string getTriggerMode() 获取<p>触发方式，非必填，外部结构的TriggerMode字段优先级比当前字段高</p><ul><li>定时触发：TIME_TRIGGER</li><li>持续运行：CONTINUE_RUN（暂不支持）</li><li>文件到达：FILE_ARRIVAL（暂不支持）</li></ul><p>注意：</p><ul><li>TIME_TRIGGER 和 CONTINUE_RUN 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；</li><li>FILE_ARRIVAL 模式下，FileArrivalPath、TriggerMinimumIntervalSecond、TriggerWaitTimeSecond 必填；</li></ul><p>枚举值：</p><ul><li>TIME_TRIGGER： 定时触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerMode(string $TriggerMode) 设置<p>触发方式，非必填，外部结构的TriggerMode字段优先级比当前字段高</p><ul><li>定时触发：TIME_TRIGGER</li><li>持续运行：CONTINUE_RUN（暂不支持）</li><li>文件到达：FILE_ARRIVAL（暂不支持）</li></ul><p>注意：</p><ul><li>TIME_TRIGGER 和 CONTINUE_RUN 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；</li><li>FILE_ARRIVAL 模式下，FileArrivalPath、TriggerMinimumIntervalSecond、TriggerWaitTimeSecond 必填；</li></ul><p>枚举值：</p><ul><li>TIME_TRIGGER： 定时触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInfo() 获取<p>WorkflowTriggerConfig转换成Json格式，对账使用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置<p>WorkflowTriggerConfig转换成Json格式，对账使用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleTimeZone() 获取<p>调度时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>调度时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>调度生效时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>调度生效时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>调度结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>调度结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigMode() 获取<p>配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigMode(string $ConfigMode) 设置<p>配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycleType() 获取<p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleType(string $CycleType) 设置<p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCrontabExpression() 获取<p>cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabExpression(string $CrontabExpression) 设置<p>cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerId() 获取<p>triggerId, uuid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerId(string $TriggerId) 设置<p>triggerId, uuid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileArrivalPath() 获取<p>文件到达模式下    存储系统中的监听路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileArrivalPath(string $FileArrivalPath) 设置<p>文件到达模式下    存储系统中的监听路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTriggerMinimumIntervalSecond() 获取<p>文件到达模式下    触发最短间隔时间（单位：秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerMinimumIntervalSecond(integer $TriggerMinimumIntervalSecond) 设置<p>文件到达模式下    触发最短间隔时间（单位：秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTriggerWaitTimeSecond() 获取<p>文件到达模式下    触发等待时间（单位：秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerWaitTimeSecond(integer $TriggerWaitTimeSecond) 设置<p>文件到达模式下    触发等待时间（单位：秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerStatus() 获取<p>Trigger 状态 启动ACTIVE，暂停PAUSED。外部的TriggerStatus优先级大于当前值</p><p>枚举值：</p><ul><li>ACTIVE： 启动</li><li>PAUSED： 暂停</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerStatus(string $SchedulerStatus) 设置<p>Trigger 状态 启动ACTIVE，暂停PAUSED。外部的TriggerStatus优先级大于当前值</p><p>枚举值：</p><ul><li>ACTIVE： 启动</li><li>PAUSED： 暂停</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowTriggerConfig extends AbstractModel
{
    /**
     * @var string <p>触发方式，非必填，外部结构的TriggerMode字段优先级比当前字段高</p><ul><li>定时触发：TIME_TRIGGER</li><li>持续运行：CONTINUE_RUN（暂不支持）</li><li>文件到达：FILE_ARRIVAL（暂不支持）</li></ul><p>注意：</p><ul><li>TIME_TRIGGER 和 CONTINUE_RUN 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；</li><li>FILE_ARRIVAL 模式下，FileArrivalPath、TriggerMinimumIntervalSecond、TriggerWaitTimeSecond 必填；</li></ul><p>枚举值：</p><ul><li>TIME_TRIGGER： 定时触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerMode;

    /**
     * @var string <p>WorkflowTriggerConfig转换成Json格式，对账使用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var string <p>调度时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleTimeZone;

    /**
     * @var string <p>调度生效时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>调度结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigMode;

    /**
     * @var string <p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleType;

    /**
     * @var string <p>cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabExpression;

    /**
     * @var string <p>triggerId, uuid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerId;

    /**
     * @var string <p>文件到达模式下    存储系统中的监听路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileArrivalPath;

    /**
     * @var integer <p>文件到达模式下    触发最短间隔时间（单位：秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerMinimumIntervalSecond;

    /**
     * @var integer <p>文件到达模式下    触发等待时间（单位：秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerWaitTimeSecond;

    /**
     * @var string <p>Trigger 状态 启动ACTIVE，暂停PAUSED。外部的TriggerStatus优先级大于当前值</p><p>枚举值：</p><ul><li>ACTIVE： 启动</li><li>PAUSED： 暂停</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerStatus;

    /**
     * @param string $TriggerMode <p>触发方式，非必填，外部结构的TriggerMode字段优先级比当前字段高</p><ul><li>定时触发：TIME_TRIGGER</li><li>持续运行：CONTINUE_RUN（暂不支持）</li><li>文件到达：FILE_ARRIVAL（暂不支持）</li></ul><p>注意：</p><ul><li>TIME_TRIGGER 和 CONTINUE_RUN 模式下，SchedulerStatus、SchedulerTimeZone、StartTime、EndTime、ConfigMode、CycleType、CrontabExpression 必填；</li><li>FILE_ARRIVAL 模式下，FileArrivalPath、TriggerMinimumIntervalSecond、TriggerWaitTimeSecond 必填；</li></ul><p>枚举值：</p><ul><li>TIME_TRIGGER： 定时触发</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInfo <p>WorkflowTriggerConfig转换成Json格式，对账使用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleTimeZone <p>调度时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>调度生效时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>调度结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigMode <p>配置方式，常规：COMMON，CRON表达式：CRON_EXPRESSION</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CycleType <p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CrontabExpression <p>cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerId <p>triggerId, uuid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileArrivalPath <p>文件到达模式下    存储系统中的监听路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TriggerMinimumIntervalSecond <p>文件到达模式下    触发最短间隔时间（单位：秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TriggerWaitTimeSecond <p>文件到达模式下    触发等待时间（单位：秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerStatus <p>Trigger 状态 启动ACTIVE，暂停PAUSED。外部的TriggerStatus优先级大于当前值</p><p>枚举值：</p><ul><li>ACTIVE： 启动</li><li>PAUSED： 暂停</li></ul>
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
