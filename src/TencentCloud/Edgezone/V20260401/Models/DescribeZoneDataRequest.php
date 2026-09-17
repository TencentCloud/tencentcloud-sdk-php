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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneData请求参数结构体
 *
 * @method string getZone() 获取区id
 * @method void setZone(string $Zone) 设置区id
 * @method string getMetricName() 获取指标名(inbw:入带宽，outbw:出带宽)
 * @method void setMetricName(string $MetricName) 设置指标名(inbw:入带宽，outbw:出带宽)
 * @method string getStartTime() 获取开始时间（UTC时间:0时区）
 * @method void setStartTime(string $StartTime) 设置开始时间（UTC时间:0时区）
 * @method string getEndTime() 获取结束时间（UTC时间:0时区）,最多查询2天时间
 * @method void setEndTime(string $EndTime) 设置结束时间（UTC时间:0时区）,最多查询2天时间
 */
class DescribeZoneDataRequest extends AbstractModel
{
    /**
     * @var string 区id
     */
    public $Zone;

    /**
     * @var string 指标名(inbw:入带宽，outbw:出带宽)
     */
    public $MetricName;

    /**
     * @var string 开始时间（UTC时间:0时区）
     */
    public $StartTime;

    /**
     * @var string 结束时间（UTC时间:0时区）,最多查询2天时间
     */
    public $EndTime;

    /**
     * @param string $Zone 区id
     * @param string $MetricName 指标名(inbw:入带宽，outbw:出带宽)
     * @param string $StartTime 开始时间（UTC时间:0时区）
     * @param string $EndTime 结束时间（UTC时间:0时区）,最多查询2天时间
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
