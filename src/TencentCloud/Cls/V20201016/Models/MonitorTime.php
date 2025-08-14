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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警策略中监控任务的执行时间点
 *
 * @method string getType() 获取执行周期， 可选值：`Period`、`Fixed`、`Cron`。

- Period：固定频率
- Fixed：固定时间
- Cron：Cron表达式
 * @method void setType(string $Type) 设置执行周期， 可选值：`Period`、`Fixed`、`Cron`。

- Period：固定频率
- Fixed：固定时间
- Cron：Cron表达式
 * @method integer getTime() 获取执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。
当type为`Period`,`Fixed`时，time字段生效。
 * @method void setTime(integer $Time) 设置执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。
当type为`Period`,`Fixed`时，time字段生效。
 * @method string getCronExpression() 获取执行的周期cron表达式。示例：`"*/1 * * * *"` 从左到右每个field的含义 Minutes field(分钟), Hours field(小时),Day of month field(日期),Month field(月份),Day of week field(星期)， 不支持秒级别。
当type为`Cron`时，CronExpression字段生效。
 * @method void setCronExpression(string $CronExpression) 设置执行的周期cron表达式。示例：`"*/1 * * * *"` 从左到右每个field的含义 Minutes field(分钟), Hours field(小时),Day of month field(日期),Month field(月份),Day of week field(星期)， 不支持秒级别。
当type为`Cron`时，CronExpression字段生效。
 */
class MonitorTime extends AbstractModel
{
    /**
     * @var string 执行周期， 可选值：`Period`、`Fixed`、`Cron`。

- Period：固定频率
- Fixed：固定时间
- Cron：Cron表达式
     */
    public $Type;

    /**
     * @var integer 执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。
当type为`Period`,`Fixed`时，time字段生效。
     */
    public $Time;

    /**
     * @var string 执行的周期cron表达式。示例：`"*/1 * * * *"` 从左到右每个field的含义 Minutes field(分钟), Hours field(小时),Day of month field(日期),Month field(月份),Day of week field(星期)， 不支持秒级别。
当type为`Cron`时，CronExpression字段生效。
     */
    public $CronExpression;

    /**
     * @param string $Type 执行周期， 可选值：`Period`、`Fixed`、`Cron`。

- Period：固定频率
- Fixed：固定时间
- Cron：Cron表达式
     * @param integer $Time 执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。
当type为`Period`,`Fixed`时，time字段生效。
     * @param string $CronExpression 执行的周期cron表达式。示例：`"*/1 * * * *"` 从左到右每个field的含义 Minutes field(分钟), Hours field(小时),Day of month field(日期),Month field(月份),Day of week field(星期)， 不支持秒级别。
当type为`Cron`时，CronExpression字段生效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("CronExpression",$param) and $param["CronExpression"] !== null) {
            $this->CronExpression = $param["CronExpression"];
        }
    }
}
