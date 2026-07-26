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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TimerScheduleConfig
 *
 * @method CronSchedule getCron() 获取cron配置
 * @method void setCron(CronSchedule $Cron) 设置cron配置
 * @method DailySchedule getDaily() 获取每日触发
 * @method void setDaily(DailySchedule $Daily) 设置每日触发
 * @method IntervalSchedule getInterval() 获取固定间隔
 * @method void setInterval(IntervalSchedule $Interval) 设置固定间隔
 * @method ManualOnlySchedule getManualOnly() 获取仅手动
 * @method void setManualOnly(ManualOnlySchedule $ManualOnly) 设置仅手动
 * @method OnceSchedule getOnce() 获取单次
 * @method void setOnce(OnceSchedule $Once) 设置单次
 * @method integer getScheduleType() 获取
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 仅手动 |
| 2 | 每天 |
| 3 | 每周 |
| 4 | 按间隔 |
| 5 | 一次性 |
| 6 | Cron |
 * @method void setScheduleType(integer $ScheduleType) 设置
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 仅手动 |
| 2 | 每天 |
| 3 | 每周 |
| 4 | 按间隔 |
| 5 | 一次性 |
| 6 | Cron |
 * @method string getTimezone() 获取时区
 * @method void setTimezone(string $Timezone) 设置时区
 * @method WeeklySchedule getWeekly() 获取每周固定时间触发
 * @method void setWeekly(WeeklySchedule $Weekly) 设置每周固定时间触发
 */
class TimerScheduleConfig extends AbstractModel
{
    /**
     * @var CronSchedule cron配置
     */
    public $Cron;

    /**
     * @var DailySchedule 每日触发
     */
    public $Daily;

    /**
     * @var IntervalSchedule 固定间隔
     */
    public $Interval;

    /**
     * @var ManualOnlySchedule 仅手动
     */
    public $ManualOnly;

    /**
     * @var OnceSchedule 单次
     */
    public $Once;

    /**
     * @var integer 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 仅手动 |
| 2 | 每天 |
| 3 | 每周 |
| 4 | 按间隔 |
| 5 | 一次性 |
| 6 | Cron |
     */
    public $ScheduleType;

    /**
     * @var string 时区
     */
    public $Timezone;

    /**
     * @var WeeklySchedule 每周固定时间触发
     */
    public $Weekly;

    /**
     * @param CronSchedule $Cron cron配置
     * @param DailySchedule $Daily 每日触发
     * @param IntervalSchedule $Interval 固定间隔
     * @param ManualOnlySchedule $ManualOnly 仅手动
     * @param OnceSchedule $Once 单次
     * @param integer $ScheduleType 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 仅手动 |
| 2 | 每天 |
| 3 | 每周 |
| 4 | 按间隔 |
| 5 | 一次性 |
| 6 | Cron |
     * @param string $Timezone 时区
     * @param WeeklySchedule $Weekly 每周固定时间触发
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
        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = new CronSchedule();
            $this->Cron->deserialize($param["Cron"]);
        }

        if (array_key_exists("Daily",$param) and $param["Daily"] !== null) {
            $this->Daily = new DailySchedule();
            $this->Daily->deserialize($param["Daily"]);
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = new IntervalSchedule();
            $this->Interval->deserialize($param["Interval"]);
        }

        if (array_key_exists("ManualOnly",$param) and $param["ManualOnly"] !== null) {
            $this->ManualOnly = new ManualOnlySchedule();
            $this->ManualOnly->deserialize($param["ManualOnly"]);
        }

        if (array_key_exists("Once",$param) and $param["Once"] !== null) {
            $this->Once = new OnceSchedule();
            $this->Once->deserialize($param["Once"]);
        }

        if (array_key_exists("ScheduleType",$param) and $param["ScheduleType"] !== null) {
            $this->ScheduleType = $param["ScheduleType"];
        }

        if (array_key_exists("Timezone",$param) and $param["Timezone"] !== null) {
            $this->Timezone = $param["Timezone"];
        }

        if (array_key_exists("Weekly",$param) and $param["Weekly"] !== null) {
            $this->Weekly = new WeeklySchedule();
            $this->Weekly->deserialize($param["Weekly"]);
        }
    }
}
