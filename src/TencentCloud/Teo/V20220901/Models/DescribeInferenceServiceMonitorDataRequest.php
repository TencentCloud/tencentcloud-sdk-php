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
 * DescribeInferenceServiceMonitorData请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method array getServiceIds() 获取<p>推理服务 ID。最多传入10个推理服务 ID。</p>
 * @method void setServiceIds(array $ServiceIds) 设置<p>推理服务 ID。最多传入10个推理服务 ID。</p>
 * @method array getMetricNames() 获取<p>指标列表，最多支持 10 个指标。取值有：<li>cpu_usage_average: CPU 平均使用率，单位：%，指标类型：Float；</li><li>cpu_usage_max: CPU 最大使用率，单位：%，指标类型：Float；</li><li>gpu_usage_average: GPU 平均使用率，单位：%，指标类型：Float；</li><li>gpu_usage_max: GPU 最大使用率，单位：%，指标类型：Float；</li><li>instance_num_average: 实例平均数量，单位：个，指标类型：Float；</li><li>instance_num_max: 实例最大数量，单位：个，指标类型：Float；</li><li>gpu_memory_usage_max: 显存最大使用率，单位：%，指标类型：Float；</li><li>memory_usage_average: 内存平均使用率，单位：%，指标类型：Float；</li><li>memory_usage_max: 内存最大使用率，单位：%，指标类型：Float；</li></p>
 * @method void setMetricNames(array $MetricNames) 设置<p>指标列表，最多支持 10 个指标。取值有：<li>cpu_usage_average: CPU 平均使用率，单位：%，指标类型：Float；</li><li>cpu_usage_max: CPU 最大使用率，单位：%，指标类型：Float；</li><li>gpu_usage_average: GPU 平均使用率，单位：%，指标类型：Float；</li><li>gpu_usage_max: GPU 最大使用率，单位：%，指标类型：Float；</li><li>instance_num_average: 实例平均数量，单位：个，指标类型：Float；</li><li>instance_num_max: 实例最大数量，单位：个，指标类型：Float；</li><li>gpu_memory_usage_max: 显存最大使用率，单位：%，指标类型：Float；</li><li>memory_usage_average: 内存平均使用率，单位：%，指标类型：Float；</li><li>memory_usage_max: 内存最大使用率，单位：%，指标类型：Float；</li></p>
 * @method string getStartTime() 获取<p>开始时间。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间。</p>
 * @method string getEndTime() 获取<p>结束时间。查询时间范围（<code>EndTime - StartTime</code>）需小于等于 30 天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间。查询时间范围（<code>EndTime - StartTime</code>）需小于等于 30 天。</p>
 * @method string getInterval() 获取<p>查询时间粒度，取值有：</p><li>min: 1分钟，支持1天范围内的查询；</li><li>5min: 5分钟，支持7天范围内的查询；</li><li>hour: 1小时，支持30天范围内的查询；</li><li>day: 1天，支持30天范围内的查询；</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2小时范围内以 min 粒度查询，2天范围内以 5min 粒度查询，7天范围内以 hour 粒度查询，超过7天以 day 粒度查询。
 * @method void setInterval(string $Interval) 设置<p>查询时间粒度，取值有：</p><li>min: 1分钟，支持1天范围内的查询；</li><li>5min: 5分钟，支持7天范围内的查询；</li><li>hour: 1小时，支持30天范围内的查询；</li><li>day: 1天，支持30天范围内的查询；</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2小时范围内以 min 粒度查询，2天范围内以 5min 粒度查询，7天范围内以 hour 粒度查询，超过7天以 day 粒度查询。
 */
class DescribeInferenceServiceMonitorDataRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var array <p>推理服务 ID。最多传入10个推理服务 ID。</p>
     */
    public $ServiceIds;

    /**
     * @var array <p>指标列表，最多支持 10 个指标。取值有：<li>cpu_usage_average: CPU 平均使用率，单位：%，指标类型：Float；</li><li>cpu_usage_max: CPU 最大使用率，单位：%，指标类型：Float；</li><li>gpu_usage_average: GPU 平均使用率，单位：%，指标类型：Float；</li><li>gpu_usage_max: GPU 最大使用率，单位：%，指标类型：Float；</li><li>instance_num_average: 实例平均数量，单位：个，指标类型：Float；</li><li>instance_num_max: 实例最大数量，单位：个，指标类型：Float；</li><li>gpu_memory_usage_max: 显存最大使用率，单位：%，指标类型：Float；</li><li>memory_usage_average: 内存平均使用率，单位：%，指标类型：Float；</li><li>memory_usage_max: 内存最大使用率，单位：%，指标类型：Float；</li></p>
     */
    public $MetricNames;

    /**
     * @var string <p>开始时间。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间。查询时间范围（<code>EndTime - StartTime</code>）需小于等于 30 天。</p>
     */
    public $EndTime;

    /**
     * @var string <p>查询时间粒度，取值有：</p><li>min: 1分钟，支持1天范围内的查询；</li><li>5min: 5分钟，支持7天范围内的查询；</li><li>hour: 1小时，支持30天范围内的查询；</li><li>day: 1天，支持30天范围内的查询；</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2小时范围内以 min 粒度查询，2天范围内以 5min 粒度查询，7天范围内以 hour 粒度查询，超过7天以 day 粒度查询。
     */
    public $Interval;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param array $ServiceIds <p>推理服务 ID。最多传入10个推理服务 ID。</p>
     * @param array $MetricNames <p>指标列表，最多支持 10 个指标。取值有：<li>cpu_usage_average: CPU 平均使用率，单位：%，指标类型：Float；</li><li>cpu_usage_max: CPU 最大使用率，单位：%，指标类型：Float；</li><li>gpu_usage_average: GPU 平均使用率，单位：%，指标类型：Float；</li><li>gpu_usage_max: GPU 最大使用率，单位：%，指标类型：Float；</li><li>instance_num_average: 实例平均数量，单位：个，指标类型：Float；</li><li>instance_num_max: 实例最大数量，单位：个，指标类型：Float；</li><li>gpu_memory_usage_max: 显存最大使用率，单位：%，指标类型：Float；</li><li>memory_usage_average: 内存平均使用率，单位：%，指标类型：Float；</li><li>memory_usage_max: 内存最大使用率，单位：%，指标类型：Float；</li></p>
     * @param string $StartTime <p>开始时间。</p>
     * @param string $EndTime <p>结束时间。查询时间范围（<code>EndTime - StartTime</code>）需小于等于 30 天。</p>
     * @param string $Interval <p>查询时间粒度，取值有：</p><li>min: 1分钟，支持1天范围内的查询；</li><li>5min: 5分钟，支持7天范围内的查询；</li><li>hour: 1小时，支持30天范围内的查询；</li><li>day: 1天，支持30天范围内的查询；</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2小时范围内以 min 粒度查询，2天范围内以 5min 粒度查询，7天范围内以 hour 粒度查询，超过7天以 day 粒度查询。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ServiceIds",$param) and $param["ServiceIds"] !== null) {
            $this->ServiceIds = $param["ServiceIds"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
