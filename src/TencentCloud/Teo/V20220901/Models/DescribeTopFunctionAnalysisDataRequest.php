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
 * DescribeTopFunctionAnalysisData请求参数结构体
 *
 * @method array getZoneIds() 获取<p>站点 ID 集合，至少填入1个站点 ID。</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>站点 ID 集合，至少填入1个站点 ID。</p>
 * @method string getStartTime() 获取<p>开始时间。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间。</p>
 * @method string getEndTime() 获取<p>结束时间。查询时间范围（<code>EndTime</code> - <code>StartTime</code>）需小于等于 7 天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间。查询时间范围（<code>EndTime</code> - <code>StartTime</code>）需小于等于 7 天。</p>
 * @method string getMetricName() 获取<p>查询的指标，取值有：</p><li>function_requestCount_functionResult: 按照执行结果的维度统计边缘函数的请求数；</li><li>function_requestCount_functionName: 按照函数名称的维度统计边缘函数的请求数；</li><li>function_requestCount_domain: 按照域名的维度统计边缘函数的请求数。</li>
 * @method void setMetricName(string $MetricName) 设置<p>查询的指标，取值有：</p><li>function_requestCount_functionResult: 按照执行结果的维度统计边缘函数的请求数；</li><li>function_requestCount_functionName: 按照函数名称的维度统计边缘函数的请求数；</li><li>function_requestCount_domain: 按照域名的维度统计边缘函数的请求数。</li>
 * @method integer getLimit() 获取<p>查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。</p>
 * @method void setLimit(integer $Limit) 设置<p>查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。</p>
 * @method array getFilters() 获取<p>过滤条件，Filters.Value 的集合数量上限为20，详细的过滤条件 Key 值如下：</p><li>domain：按照子域名进行过滤，示例值： www.example.com。</li><li>function-name：按照边缘函数名称进行过滤，示例值： test051301-zone-2r2fdoxxxx-130000000。</li><li>function-result：按照边缘函数执行结果进行过滤。对应 Value 的可选项如下：<br>   success：成功；<br>   fail：失败。</li>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，Filters.Value 的集合数量上限为20，详细的过滤条件 Key 值如下：</p><li>domain：按照子域名进行过滤，示例值： www.example.com。</li><li>function-name：按照边缘函数名称进行过滤，示例值： test051301-zone-2r2fdoxxxx-130000000。</li><li>function-result：按照边缘函数执行结果进行过滤。对应 Value 的可选项如下：<br>   success：成功；<br>   fail：失败。</li>
 * @method string getInterval() 获取<p>查询时间粒度，取值有：</p><li>min: 1分钟；</li><li>5min: 5分钟；</li><li>hour: 1小时；</li><li>day: 1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
 * @method void setInterval(string $Interval) 设置<p>查询时间粒度，取值有：</p><li>min: 1分钟；</li><li>5min: 5分钟；</li><li>hour: 1小时；</li><li>day: 1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
 * @method string getArea() 获取<p>数据归属地区，取值有：</p><li>overseas：全球（除中国大陆地区）数据；</li><li>mainland：中国大陆地区数据；</li><li>global：全球数据。</li>不填默认取值为global。
 * @method void setArea(string $Area) 设置<p>数据归属地区，取值有：</p><li>overseas：全球（除中国大陆地区）数据；</li><li>mainland：中国大陆地区数据；</li><li>global：全球数据。</li>不填默认取值为global。
 */
class DescribeTopFunctionAnalysisDataRequest extends AbstractModel
{
    /**
     * @var array <p>站点 ID 集合，至少填入1个站点 ID。</p>
     */
    public $ZoneIds;

    /**
     * @var string <p>开始时间。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间。查询时间范围（<code>EndTime</code> - <code>StartTime</code>）需小于等于 7 天。</p>
     */
    public $EndTime;

    /**
     * @var string <p>查询的指标，取值有：</p><li>function_requestCount_functionResult: 按照执行结果的维度统计边缘函数的请求数；</li><li>function_requestCount_functionName: 按照函数名称的维度统计边缘函数的请求数；</li><li>function_requestCount_domain: 按照域名的维度统计边缘函数的请求数。</li>
     */
    public $MetricName;

    /**
     * @var integer <p>查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件，Filters.Value 的集合数量上限为20，详细的过滤条件 Key 值如下：</p><li>domain：按照子域名进行过滤，示例值： www.example.com。</li><li>function-name：按照边缘函数名称进行过滤，示例值： test051301-zone-2r2fdoxxxx-130000000。</li><li>function-result：按照边缘函数执行结果进行过滤。对应 Value 的可选项如下：<br>   success：成功；<br>   fail：失败。</li>
     */
    public $Filters;

    /**
     * @var string <p>查询时间粒度，取值有：</p><li>min: 1分钟；</li><li>5min: 5分钟；</li><li>hour: 1小时；</li><li>day: 1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
     */
    public $Interval;

    /**
     * @var string <p>数据归属地区，取值有：</p><li>overseas：全球（除中国大陆地区）数据；</li><li>mainland：中国大陆地区数据；</li><li>global：全球数据。</li>不填默认取值为global。
     */
    public $Area;

    /**
     * @param array $ZoneIds <p>站点 ID 集合，至少填入1个站点 ID。</p>
     * @param string $StartTime <p>开始时间。</p>
     * @param string $EndTime <p>结束时间。查询时间范围（<code>EndTime</code> - <code>StartTime</code>）需小于等于 7 天。</p>
     * @param string $MetricName <p>查询的指标，取值有：</p><li>function_requestCount_functionResult: 按照执行结果的维度统计边缘函数的请求数；</li><li>function_requestCount_functionName: 按照函数名称的维度统计边缘函数的请求数；</li><li>function_requestCount_domain: 按照域名的维度统计边缘函数的请求数。</li>
     * @param integer $Limit <p>查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。</p>
     * @param array $Filters <p>过滤条件，Filters.Value 的集合数量上限为20，详细的过滤条件 Key 值如下：</p><li>domain：按照子域名进行过滤，示例值： www.example.com。</li><li>function-name：按照边缘函数名称进行过滤，示例值： test051301-zone-2r2fdoxxxx-130000000。</li><li>function-result：按照边缘函数执行结果进行过滤。对应 Value 的可选项如下：<br>   success：成功；<br>   fail：失败。</li>
     * @param string $Interval <p>查询时间粒度，取值有：</p><li>min: 1分钟；</li><li>5min: 5分钟；</li><li>hour: 1小时；</li><li>day: 1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
     * @param string $Area <p>数据归属地区，取值有：</p><li>overseas：全球（除中国大陆地区）数据；</li><li>mainland：中国大陆地区数据；</li><li>global：全球数据。</li>不填默认取值为global。
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
        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
