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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘推理定时伸缩动作配置，用于描述一条具体的定时伸缩动作。
 *
 * @method string getCronExpression() 获取Cron 表达式，用于描述定时伸缩动作的触发时间。采用 5 字段标准 Cron 格式：分钟 小时 日期 月份 星期。不支持秒字段和年份字段。
 * @method void setCronExpression(string $CronExpression) 设置Cron 表达式，用于描述定时伸缩动作的触发时间。采用 5 字段标准 Cron 格式：分钟 小时 日期 月份 星期。不支持秒字段和年份字段。
 * @method integer getMinInstanceCount() 获取命中该定时伸缩动作后，推理服务需要调整到的最小实例数。若同一评估窗口内多个定时伸缩动作同时命中，则使用其中最大的 MinInstanceCount。
 * @method void setMinInstanceCount(integer $MinInstanceCount) 设置命中该定时伸缩动作后，推理服务需要调整到的最小实例数。若同一评估窗口内多个定时伸缩动作同时命中，则使用其中最大的 MinInstanceCount。
 */
class InferenceScheduledScalingAction extends AbstractModel
{
    /**
     * @var string Cron 表达式，用于描述定时伸缩动作的触发时间。采用 5 字段标准 Cron 格式：分钟 小时 日期 月份 星期。不支持秒字段和年份字段。
     */
    public $CronExpression;

    /**
     * @var integer 命中该定时伸缩动作后，推理服务需要调整到的最小实例数。若同一评估窗口内多个定时伸缩动作同时命中，则使用其中最大的 MinInstanceCount。
     */
    public $MinInstanceCount;

    /**
     * @param string $CronExpression Cron 表达式，用于描述定时伸缩动作的触发时间。采用 5 字段标准 Cron 格式：分钟 小时 日期 月份 星期。不支持秒字段和年份字段。
     * @param integer $MinInstanceCount 命中该定时伸缩动作后，推理服务需要调整到的最小实例数。若同一评估窗口内多个定时伸缩动作同时命中，则使用其中最大的 MinInstanceCount。
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
        if (array_key_exists("CronExpression",$param) and $param["CronExpression"] !== null) {
            $this->CronExpression = $param["CronExpression"];
        }

        if (array_key_exists("MinInstanceCount",$param) and $param["MinInstanceCount"] !== null) {
            $this->MinInstanceCount = $param["MinInstanceCount"];
        }
    }
}
