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
 * DescribeTimingL7AnalysisData请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method void setEndTime(string $EndTime) 设置结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method array getMetricNames() 获取指标列表，取值有:
<li>l7Flow_outFlux: L7 EdgeOne 响应流量，单位：Byte；</li>
<li>l7Flow_inFlux: L7 客户端请求流量，单位：Byte；</li>
<li>l7Flow_flux: L7 访问总流量（EdgeOne 响应+客户端请求），单位：Byte；</li>
<li>l7Flow_outBandwidth: L7 EdgeOne 响应带宽，单位：bps；</li>
<li>l7Flow_inBandwidth：L7 客户端请求带宽，单位：bps；</li>
<li>l7Flow_bandwidth：L7 访问总带宽（EdgeOne 响应+客户端请求），单位：bps；</li>
<li>l7Flow_request: L7 访问请求数，单位：次；</li>
<li> l7Flow_avgResponseTime: L7 访问平均响应耗时，单位：ms；</li>
<li> l7Flow_avgFirstByteResponseTime: L7 访问平均首字节响应耗时，单位：ms。</li>
 * @method void setMetricNames(array $MetricNames) 设置指标列表，取值有:
<li>l7Flow_outFlux: L7 EdgeOne 响应流量，单位：Byte；</li>
<li>l7Flow_inFlux: L7 客户端请求流量，单位：Byte；</li>
<li>l7Flow_flux: L7 访问总流量（EdgeOne 响应+客户端请求），单位：Byte；</li>
<li>l7Flow_outBandwidth: L7 EdgeOne 响应带宽，单位：bps；</li>
<li>l7Flow_inBandwidth：L7 客户端请求带宽，单位：bps；</li>
<li>l7Flow_bandwidth：L7 访问总带宽（EdgeOne 响应+客户端请求），单位：bps；</li>
<li>l7Flow_request: L7 访问请求数，单位：次；</li>
<li> l7Flow_avgResponseTime: L7 访问平均响应耗时，单位：ms；</li>
<li> l7Flow_avgFirstByteResponseTime: L7 访问平均首字节响应耗时，单位：ms。</li>
 * @method array getZoneIds() 获取站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method void setZoneIds(array $ZoneIds) 设置站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
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
 * @method array getFilters() 获取筛选数据时使用的过滤条件，取值参考 [指标分析筛选条件说明](https://cloud.tencent.com/document/product/1552/98219#1aaf1150-55a4-4b4d-b103-3a8317ac7945) 中针对 L7 访问流量、带宽、请求数的可用筛选项。
如需限定站点或内容标识符，请在 `ZoneIds.N` 参数中另行传入对应的值。
 * @method void setFilters(array $Filters) 设置筛选数据时使用的过滤条件，取值参考 [指标分析筛选条件说明](https://cloud.tencent.com/document/product/1552/98219#1aaf1150-55a4-4b4d-b103-3a8317ac7945) 中针对 L7 访问流量、带宽、请求数的可用筛选项。
如需限定站点或内容标识符，请在 `ZoneIds.N` 参数中另行传入对应的值。
 * @method string getArea() 获取数据归属地区。该参数已废弃。请在 `Filters.country` 中按客户端地域过滤数据。
 * @method void setArea(string $Area) 设置数据归属地区。该参数已废弃。请在 `Filters.country` 中按客户端地域过滤数据。
 */
class DescribeTimingL7AnalysisDataRequest extends AbstractModel
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
<li>l7Flow_outFlux: L7 EdgeOne 响应流量，单位：Byte；</li>
<li>l7Flow_inFlux: L7 客户端请求流量，单位：Byte；</li>
<li>l7Flow_flux: L7 访问总流量（EdgeOne 响应+客户端请求），单位：Byte；</li>
<li>l7Flow_outBandwidth: L7 EdgeOne 响应带宽，单位：bps；</li>
<li>l7Flow_inBandwidth：L7 客户端请求带宽，单位：bps；</li>
<li>l7Flow_bandwidth：L7 访问总带宽（EdgeOne 响应+客户端请求），单位：bps；</li>
<li>l7Flow_request: L7 访问请求数，单位：次；</li>
<li> l7Flow_avgResponseTime: L7 访问平均响应耗时，单位：ms；</li>
<li> l7Flow_avgFirstByteResponseTime: L7 访问平均首字节响应耗时，单位：ms。</li>
     */
    public $MetricNames;

    /**
     * @var array 站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
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
     * @var array 筛选数据时使用的过滤条件，取值参考 [指标分析筛选条件说明](https://cloud.tencent.com/document/product/1552/98219#1aaf1150-55a4-4b4d-b103-3a8317ac7945) 中针对 L7 访问流量、带宽、请求数的可用筛选项。
如需限定站点或内容标识符，请在 `ZoneIds.N` 参数中另行传入对应的值。
     */
    public $Filters;

    /**
     * @var string 数据归属地区。该参数已废弃。请在 `Filters.country` 中按客户端地域过滤数据。
     */
    public $Area;

    /**
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
     * @param array $MetricNames 指标列表，取值有:
<li>l7Flow_outFlux: L7 EdgeOne 响应流量，单位：Byte；</li>
<li>l7Flow_inFlux: L7 客户端请求流量，单位：Byte；</li>
<li>l7Flow_flux: L7 访问总流量（EdgeOne 响应+客户端请求），单位：Byte；</li>
<li>l7Flow_outBandwidth: L7 EdgeOne 响应带宽，单位：bps；</li>
<li>l7Flow_inBandwidth：L7 客户端请求带宽，单位：bps；</li>
<li>l7Flow_bandwidth：L7 访问总带宽（EdgeOne 响应+客户端请求），单位：bps；</li>
<li>l7Flow_request: L7 访问请求数，单位：次；</li>
<li> l7Flow_avgResponseTime: L7 访问平均响应耗时，单位：ms；</li>
<li> l7Flow_avgFirstByteResponseTime: L7 访问平均首字节响应耗时，单位：ms。</li>
     * @param array $ZoneIds 站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     * @param string $Interval 查询时间粒度，取值有：
<li>min: 1分钟；</li>
<li>5min: 5分钟；</li>
<li>hour: 1小时；</li>
<li>day: 1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
     * @param array $Filters 筛选数据时使用的过滤条件，取值参考 [指标分析筛选条件说明](https://cloud.tencent.com/document/product/1552/98219#1aaf1150-55a4-4b4d-b103-3a8317ac7945) 中针对 L7 访问流量、带宽、请求数的可用筛选项。
如需限定站点或内容标识符，请在 `ZoneIds.N` 参数中另行传入对应的值。
     * @param string $Area 数据归属地区。该参数已废弃。请在 `Filters.country` 中按客户端地域过滤数据。
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
