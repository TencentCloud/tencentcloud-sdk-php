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
 * DescribeTimingL4Data请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method void setEndTime(string $EndTime) 设置结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method array getMetricNames() 获取查询指标，取值有：
<li>l4Flow_connections: 访问并发连接数；</li>
<li>l4Flow_flux: 访问总流量；</li>
<li>l4Flow_inFlux: 访问入流量；</li>
<li>l4Flow_outFlux: 访问出流量；</li>
<li>l4Flow_inBandwidth: 访问入向带宽峰值；</li>
<li>l4Flow_outBandwidth: 访问出向带宽峰值。</li>
 * @method void setMetricNames(array $MetricNames) 设置查询指标，取值有：
<li>l4Flow_connections: 访问并发连接数；</li>
<li>l4Flow_flux: 访问总流量；</li>
<li>l4Flow_inFlux: 访问入流量；</li>
<li>l4Flow_outFlux: 访问出流量；</li>
<li>l4Flow_inBandwidth: 访问入向带宽峰值；</li>
<li>l4Flow_outBandwidth: 访问出向带宽峰值。</li>
 * @method array getZoneIds() 获取站点ID，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。
最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method void setZoneIds(array $ZoneIds) 设置站点ID，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。
最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method array getProxyIds() 获取四层实例列表, 不填表示选择全部实例。
 * @method void setProxyIds(array $ProxyIds) 设置四层实例列表, 不填表示选择全部实例。
 * @method string getInterval() 获取查询时间粒度，取值有：
<li>min: 1分钟 ；</li>
<li>5min: 5分钟 ；</li>
<li>hour: 1小时 ；</li>
<li>day: 1天 。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
 * @method void setInterval(string $Interval) 设置查询时间粒度，取值有：
<li>min: 1分钟 ；</li>
<li>5min: 5分钟 ；</li>
<li>hour: 1小时 ；</li>
<li>day: 1天 。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
 * @method array getFilters() 获取过滤条件，详细的过滤条件Key值如下：
<li>ruleId：按照转发规则 ID 进行过滤。</li>
<li>proxyId：按照四层代理实例 ID 进行过滤。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，详细的过滤条件Key值如下：
<li>ruleId：按照转发规则 ID 进行过滤。</li>
<li>proxyId：按照四层代理实例 ID 进行过滤。</li>
 * @method string getArea() 获取数据归属地区。该参数已废弃。请在 Filters.country 中按客户端地域过滤数据。
 * @method void setArea(string $Area) 设置数据归属地区。该参数已废弃。请在 Filters.country 中按客户端地域过滤数据。
 */
class DescribeTimingL4DataRequest extends AbstractModel
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
     * @var array 查询指标，取值有：
<li>l4Flow_connections: 访问并发连接数；</li>
<li>l4Flow_flux: 访问总流量；</li>
<li>l4Flow_inFlux: 访问入流量；</li>
<li>l4Flow_outFlux: 访问出流量；</li>
<li>l4Flow_inBandwidth: 访问入向带宽峰值；</li>
<li>l4Flow_outBandwidth: 访问出向带宽峰值。</li>
     */
    public $MetricNames;

    /**
     * @var array 站点ID，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。
最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     */
    public $ZoneIds;

    /**
     * @var array 四层实例列表, 不填表示选择全部实例。
     */
    public $ProxyIds;

    /**
     * @var string 查询时间粒度，取值有：
<li>min: 1分钟 ；</li>
<li>5min: 5分钟 ；</li>
<li>hour: 1小时 ；</li>
<li>day: 1天 。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
     */
    public $Interval;

    /**
     * @var array 过滤条件，详细的过滤条件Key值如下：
<li>ruleId：按照转发规则 ID 进行过滤。</li>
<li>proxyId：按照四层代理实例 ID 进行过滤。</li>
     */
    public $Filters;

    /**
     * @var string 数据归属地区。该参数已废弃。请在 Filters.country 中按客户端地域过滤数据。
     */
    public $Area;

    /**
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
     * @param array $MetricNames 查询指标，取值有：
<li>l4Flow_connections: 访问并发连接数；</li>
<li>l4Flow_flux: 访问总流量；</li>
<li>l4Flow_inFlux: 访问入流量；</li>
<li>l4Flow_outFlux: 访问出流量；</li>
<li>l4Flow_inBandwidth: 访问入向带宽峰值；</li>
<li>l4Flow_outBandwidth: 访问出向带宽峰值。</li>
     * @param array $ZoneIds 站点ID，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。
最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     * @param array $ProxyIds 四层实例列表, 不填表示选择全部实例。
     * @param string $Interval 查询时间粒度，取值有：
<li>min: 1分钟 ；</li>
<li>5min: 5分钟 ；</li>
<li>hour: 1小时 ；</li>
<li>day: 1天 。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
     * @param array $Filters 过滤条件，详细的过滤条件Key值如下：
<li>ruleId：按照转发规则 ID 进行过滤。</li>
<li>proxyId：按照四层代理实例 ID 进行过滤。</li>
     * @param string $Area 数据归属地区。该参数已废弃。请在 Filters.country 中按客户端地域过滤数据。
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

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
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
