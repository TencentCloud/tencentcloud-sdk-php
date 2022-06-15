<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimingL7AnalysisData请求参数结构体
 *
 * @method string getStartTime() 获取RFC3339标准，客户端时间
 * @method void setStartTime(string $StartTime) 设置RFC3339标准，客户端时间
 * @method string getEndTime() 获取RFC3339标准，客户端时间
 * @method void setEndTime(string $EndTime) 设置RFC3339标准，客户端时间
 * @method array getMetricNames() 获取时序类访问流量指标
 * @method void setMetricNames(array $MetricNames) 设置时序类访问流量指标
 * @method string getInterval() 获取时间间隔，选填{min, 5min, hour, day, week}
 * @method void setInterval(string $Interval) 设置时间间隔，选填{min, 5min, hour, day, week}
 * @method array getZoneIds() 获取ZoneId数组
 * @method void setZoneIds(array $ZoneIds) 设置ZoneId数组
 * @method array getFilters() 获取筛选条件
 * @method void setFilters(array $Filters) 设置筛选条件
 */
class DescribeTimingL7AnalysisDataRequest extends AbstractModel
{
    /**
     * @var string RFC3339标准，客户端时间
     */
    public $StartTime;

    /**
     * @var string RFC3339标准，客户端时间
     */
    public $EndTime;

    /**
     * @var array 时序类访问流量指标
     */
    public $MetricNames;

    /**
     * @var string 时间间隔，选填{min, 5min, hour, day, week}
     */
    public $Interval;

    /**
     * @var array ZoneId数组
     */
    public $ZoneIds;

    /**
     * @var array 筛选条件
     */
    public $Filters;

    /**
     * @param string $StartTime RFC3339标准，客户端时间
     * @param string $EndTime RFC3339标准，客户端时间
     * @param array $MetricNames 时序类访问流量指标
     * @param string $Interval 时间间隔，选填{min, 5min, hour, day, week}
     * @param array $ZoneIds ZoneId数组
     * @param array $Filters 筛选条件
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
