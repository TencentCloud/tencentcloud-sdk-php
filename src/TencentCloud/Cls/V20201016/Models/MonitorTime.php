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
 * @method string getType() 获取<p>执行周期， 可选值：<code>Period</code>、<code>Fixed</code>、<code>Cron</code>。</p><ul><li>Period：固定频率</li><li>Fixed：固定时间</li><li>Cron：Cron表达式</li></ul>
 * @method void setType(string $Type) 设置<p>执行周期， 可选值：<code>Period</code>、<code>Fixed</code>、<code>Cron</code>。</p><ul><li>Period：固定频率</li><li>Fixed：固定时间</li><li>Cron：Cron表达式</li></ul>
 * @method integer getTime() 获取<p>执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。<br>当type为<code>Period</code>,<code>Fixed</code>时，time字段生效。</p>
 * @method void setTime(integer $Time) 设置<p>执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。<br>当type为<code>Period</code>,<code>Fixed</code>时，time字段生效。</p>
 * @method string getCronExpression() 获取<p>执行的周期cron表达式。示例：<code>0/1 * * * *</code> 从左到右每个field的含义 Minutes field(分钟), Hours field(小时),Day of month field(日期),Month field(月份),Day of week field(星期)， 不支持秒级别。当type为<code>Cron</code>时，CronExpression字段生效。</p>
 * @method void setCronExpression(string $CronExpression) 设置<p>执行的周期cron表达式。示例：<code>0/1 * * * *</code> 从左到右每个field的含义 Minutes field(分钟), Hours field(小时),Day of month field(日期),Month field(月份),Day of week field(星期)， 不支持秒级别。当type为<code>Cron</code>时，CronExpression字段生效。</p>
 */
class MonitorTime extends AbstractModel
{
    /**
     * @var string <p>执行周期， 可选值：<code>Period</code>、<code>Fixed</code>、<code>Cron</code>。</p><ul><li>Period：固定频率</li><li>Fixed：固定时间</li><li>Cron：Cron表达式</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。<br>当type为<code>Period</code>,<code>Fixed</code>时，time字段生效。</p>
     */
    public $Time;

    /**
     * @var string <p>执行的周期cron表达式。示例：<code>0/1 * * * *</code> 从左到右每个field的含义 Minutes field(分钟), Hours field(小时),Day of month field(日期),Month field(月份),Day of week field(星期)， 不支持秒级别。当type为<code>Cron</code>时，CronExpression字段生效。</p>
     */
    public $CronExpression;

    /**
     * @param string $Type <p>执行周期， 可选值：<code>Period</code>、<code>Fixed</code>、<code>Cron</code>。</p><ul><li>Period：固定频率</li><li>Fixed：固定时间</li><li>Cron：Cron表达式</li></ul>
     * @param integer $Time <p>执行的周期，或者定制执行的时间节点。单位为分钟，取值范围为1~1440。<br>当type为<code>Period</code>,<code>Fixed</code>时，time字段生效。</p>
     * @param string $CronExpression <p>执行的周期cron表达式。示例：<code>0/1 * * * *</code> 从左到右每个field的含义 Minutes field(分钟), Hours field(小时),Day of month field(日期),Month field(月份),Day of week field(星期)， 不支持秒级别。当type为<code>Cron</code>时，CronExpression字段生效。</p>
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
