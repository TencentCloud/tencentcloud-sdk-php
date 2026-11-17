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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用量趋势点
 *
 * @method string getTime() 获取<p>时间 YYYY-MM-DD HH:00:00</p>
 * @method void setTime(string $Time) 设置<p>时间 YYYY-MM-DD HH:00:00</p>
 * @method integer getReportVolume() 获取<p>上报量</p>
 * @method void setReportVolume(integer $ReportVolume) 设置<p>上报量</p>
 * @method string getDatetime() 获取<p>聚合桶时间。与旧字段 Time 同源，保留 Time 及其格式；按查询服务运行时区输出。</p><p>参数格式：RFC3339，带数值时区偏移，例如 2026-10-01T00:00:00+08:00。</p>
 * @method void setDatetime(string $Datetime) 设置<p>聚合桶时间。与旧字段 Time 同源，保留 Time 及其格式；按查询服务运行时区输出。</p><p>参数格式：RFC3339，带数值时区偏移，例如 2026-10-01T00:00:00+08:00。</p>
 */
class UsageTimePoint extends AbstractModel
{
    /**
     * @var string <p>时间 YYYY-MM-DD HH:00:00</p>
     */
    public $Time;

    /**
     * @var integer <p>上报量</p>
     */
    public $ReportVolume;

    /**
     * @var string <p>聚合桶时间。与旧字段 Time 同源，保留 Time 及其格式；按查询服务运行时区输出。</p><p>参数格式：RFC3339，带数值时区偏移，例如 2026-10-01T00:00:00+08:00。</p>
     */
    public $Datetime;

    /**
     * @param string $Time <p>时间 YYYY-MM-DD HH:00:00</p>
     * @param integer $ReportVolume <p>上报量</p>
     * @param string $Datetime <p>聚合桶时间。与旧字段 Time 同源，保留 Time 及其格式；按查询服务运行时区输出。</p><p>参数格式：RFC3339，带数值时区偏移，例如 2026-10-01T00:00:00+08:00。</p>
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("ReportVolume",$param) and $param["ReportVolume"] !== null) {
            $this->ReportVolume = $param["ReportVolume"];
        }

        if (array_key_exists("Datetime",$param) and $param["Datetime"] !== null) {
            $this->Datetime = $param["Datetime"];
        }
    }
}
