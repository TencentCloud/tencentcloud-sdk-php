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
 * DescribeTimingL7OriginPullData请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method void setEndTime(string $EndTime) 设置结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method array getMetricNames() 获取指标列表，取值有:
<li>l7Flow_outFlux_hy: EdgeOne 节点至源站方向的请求流量，单位：Byte；</li>
<li>l7Flow_outBandwidth_hy: EdgeOne 节点至源站方向的请求带宽，单位：bps；</li>
<li>l7Flow_request_hy: EdgeOne 节点至源站方向的请求数，单位：次。</li>
<li>l7Flow_inFlux_hy: 源站至 EdgeOne 节点方向的响应流量，单位：Byte；</li>
<li>l7Flow_inBandwidth_hy: 源站至 EdgeOne 节点方向的响应带宽，单位：bps；</li>

 * @method void setMetricNames(array $MetricNames) 设置指标列表，取值有:
<li>l7Flow_outFlux_hy: EdgeOne 节点至源站方向的请求流量，单位：Byte；</li>
<li>l7Flow_outBandwidth_hy: EdgeOne 节点至源站方向的请求带宽，单位：bps；</li>
<li>l7Flow_request_hy: EdgeOne 节点至源站方向的请求数，单位：次。</li>
<li>l7Flow_inFlux_hy: 源站至 EdgeOne 节点方向的响应流量，单位：Byte；</li>
<li>l7Flow_inBandwidth_hy: 源站至 EdgeOne 节点方向的响应带宽，单位：bps；</li>

 * @method array getZoneIds() 获取站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method void setZoneIds(array $ZoneIds) 设置站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method string getInterval() 获取查询时间粒度，取值有：
<li>min: 1分钟；</li>
<li>5min: 5分钟；</li>
<li>hour: 1小时；</li>
<li>day: 1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
 * @method void setInterval(string $Interval) 设置查询时间粒度，取值有：
<li>min: 1分钟；</li>
<li>5min: 5分钟；</li>
<li>hour: 1小时；</li>
<li>day: 1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
 * @method array getFilters() 获取过滤条件，详细的过滤条件如下：
<li>domain：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名，而不是具体域名。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，详细的过滤条件如下：
<li>domain：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名，而不是具体域名。</li>
 */
class DescribeTimingL7OriginPullDataRequest extends AbstractModel
{
    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
     */
    public $EndTime;

    /**
     * @var array 指标列表，取值有:
<li>l7Flow_outFlux_hy: EdgeOne 节点至源站方向的请求流量，单位：Byte；</li>
<li>l7Flow_outBandwidth_hy: EdgeOne 节点至源站方向的请求带宽，单位：bps；</li>
<li>l7Flow_request_hy: EdgeOne 节点至源站方向的请求数，单位：次。</li>
<li>l7Flow_inFlux_hy: 源站至 EdgeOne 节点方向的响应流量，单位：Byte；</li>
<li>l7Flow_inBandwidth_hy: 源站至 EdgeOne 节点方向的响应带宽，单位：bps；</li>

     */
    public $MetricNames;

    /**
     * @var array 站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     */
    public $ZoneIds;

    /**
     * @var string 查询时间粒度，取值有：
<li>min: 1分钟；</li>
<li>5min: 5分钟；</li>
<li>hour: 1小时；</li>
<li>day: 1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
     */
    public $Interval;

    /**
     * @var array 过滤条件，详细的过滤条件如下：
<li>domain：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名，而不是具体域名。</li>
     */
    public $Filters;

    /**
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
     * @param array $MetricNames 指标列表，取值有:
<li>l7Flow_outFlux_hy: EdgeOne 节点至源站方向的请求流量，单位：Byte；</li>
<li>l7Flow_outBandwidth_hy: EdgeOne 节点至源站方向的请求带宽，单位：bps；</li>
<li>l7Flow_request_hy: EdgeOne 节点至源站方向的请求数，单位：次。</li>
<li>l7Flow_inFlux_hy: 源站至 EdgeOne 节点方向的响应流量，单位：Byte；</li>
<li>l7Flow_inBandwidth_hy: 源站至 EdgeOne 节点方向的响应带宽，单位：bps；</li>

     * @param array $ZoneIds 站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     * @param string $Interval 查询时间粒度，取值有：
<li>min: 1分钟；</li>
<li>5min: 5分钟；</li>
<li>hour: 1小时；</li>
<li>day: 1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
     * @param array $Filters 过滤条件，详细的过滤条件如下：
<li>domain：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名，而不是具体域名。</li>
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

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
