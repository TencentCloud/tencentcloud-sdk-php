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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBizMonitorTrend请求参数结构体
 *
 * @method string getBusiness() 获取DDoS防护子产品代号（bgpip表示高防IP）
 * @method void setBusiness(string $Business) 设置DDoS防护子产品代号（bgpip表示高防IP）
 * @method string getStartTime() 获取统计开始时间。 例：“2020-09-22 00:00:00”
 * @method void setStartTime(string $StartTime) 设置统计开始时间。 例：“2020-09-22 00:00:00”
 * @method string getEndTime() 获取统计结束时间。 例：“2020-09-22 00:00:00”
 * @method void setEndTime(string $EndTime) 设置统计结束时间。 例：“2020-09-22 00:00:00”
 * @method string getId() 获取资源实例ID
 * @method void setId(string $Id) 设置资源实例ID
 * @method string getMetricName() 获取统计纬度，可取值intraffic outtraffic inpkg outpkg
 * @method void setMetricName(string $MetricName) 设置统计纬度，可取值intraffic outtraffic inpkg outpkg
 * @method integer getPeriod() 获取时间粒度 60 300 3600 21600 86400
 * @method void setPeriod(integer $Period) 设置时间粒度 60 300 3600 21600 86400
 */
class DescribeBizMonitorTrendRequest extends AbstractModel
{
    /**
     * @var string DDoS防护子产品代号（bgpip表示高防IP）
     */
    public $Business;

    /**
     * @var string 统计开始时间。 例：“2020-09-22 00:00:00”
     */
    public $StartTime;

    /**
     * @var string 统计结束时间。 例：“2020-09-22 00:00:00”
     */
    public $EndTime;

    /**
     * @var string 资源实例ID
     */
    public $Id;

    /**
     * @var string 统计纬度，可取值intraffic outtraffic inpkg outpkg
     */
    public $MetricName;

    /**
     * @var integer 时间粒度 60 300 3600 21600 86400
     */
    public $Period;

    /**
     * @param string $Business DDoS防护子产品代号（bgpip表示高防IP）
     * @param string $StartTime 统计开始时间。 例：“2020-09-22 00:00:00”
     * @param string $EndTime 统计结束时间。 例：“2020-09-22 00:00:00”
     * @param string $Id 资源实例ID
     * @param string $MetricName 统计纬度，可取值intraffic outtraffic inpkg outpkg
     * @param integer $Period 时间粒度 60 300 3600 21600 86400
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
