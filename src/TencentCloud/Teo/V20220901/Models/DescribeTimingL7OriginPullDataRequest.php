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
 * @method array getZoneIds() 获取站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method void setZoneIds(array $ZoneIds) 设置站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method array getMetricNames() 获取指标列表，取值有:
<ul><li>l7Flow_outFlux_hy: EdgeOne 节点至源站方向的请求流量，单位：Byte；</li>
<li>l7Flow_outBandwidth_hy: EdgeOne 节点至源站方向的请求带宽，单位：bps；</li>
<li>l7Flow_request_hy: EdgeOne 节点至源站方向的请求数，单位：次。</li>
<li>l7Flow_inFlux_hy: 源站至 EdgeOne 节点方向的响应流量，单位：Byte；</li>
<li>l7Flow_inBandwidth_hy: 源站至 EdgeOne 节点方向的响应带宽，单位：bps。</li></ul>
 * @method void setMetricNames(array $MetricNames) 设置指标列表，取值有:
<ul><li>l7Flow_outFlux_hy: EdgeOne 节点至源站方向的请求流量，单位：Byte；</li>
<li>l7Flow_outBandwidth_hy: EdgeOne 节点至源站方向的请求带宽，单位：bps；</li>
<li>l7Flow_request_hy: EdgeOne 节点至源站方向的请求数，单位：次。</li>
<li>l7Flow_inFlux_hy: 源站至 EdgeOne 节点方向的响应流量，单位：Byte；</li>
<li>l7Flow_inBandwidth_hy: 源站至 EdgeOne 节点方向的响应带宽，单位：bps。</li></ul>
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method void setEndTime(string $EndTime) 设置结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method string getInterval() 获取查询时间粒度，取值有：
<ul><li>min: 1分钟；</li><li>5min: 5分钟；</li><li>hour: 1小时；</li><li>day: 1天。</li></ul>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
 * @method void setInterval(string $Interval) 设置查询时间粒度，取值有：
<ul><li>min: 1分钟；</li><li>5min: 5分钟；</li><li>hour: 1小时；</li><li>day: 1天。</li></ul>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
 * @method array getFilters() 获取过滤条件，详细的过滤条件如下：
<ul><li><strong>domain</strong>：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名，而不是具体域名。</li><li><strong>originStatusCode</strong>：回源状态码，仅当 <code>MetricNames = ["l7Flow_request_hy"]</code> 时支持本过滤项。<br>对应的 Value 可选项如下：<ul><li><code>1xx</code>：1xx 类型的状态码；</li><li><code>2xx</code>：2xx 类型的状态码；</li><li><code>3xx</code>：3xx 类型的状态码；</li><li><code>4xx</code>：4xx 类型的状态码；</li><li><code>5xx</code>：5xx 类型的状态码；</li><li>在 <code>[0, 600)</code> 范围内的整数（不包括 600）。</li></ul></li></ul>
**注意**：当 <code>DimensionName</code>  不为空时，仅支持 <code>equals</code> 运算符。
 * @method void setFilters(array $Filters) 设置过滤条件，详细的过滤条件如下：
<ul><li><strong>domain</strong>：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名，而不是具体域名。</li><li><strong>originStatusCode</strong>：回源状态码，仅当 <code>MetricNames = ["l7Flow_request_hy"]</code> 时支持本过滤项。<br>对应的 Value 可选项如下：<ul><li><code>1xx</code>：1xx 类型的状态码；</li><li><code>2xx</code>：2xx 类型的状态码；</li><li><code>3xx</code>：3xx 类型的状态码；</li><li><code>4xx</code>：4xx 类型的状态码；</li><li><code>5xx</code>：5xx 类型的状态码；</li><li>在 <code>[0, 600)</code> 范围内的整数（不包括 600）。</li></ul></li></ul>
**注意**：当 <code>DimensionName</code>  不为空时，仅支持 <code>equals</code> 运算符。
 * @method string getDimensionName() 获取<p>查询维度名称，取值有：</p><ul><li><strong>domain</strong>：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名。<br>使用 domain 维度时必须在 <code>Filters</code> 中包含 <code>domain</code> 过滤项，指定总数不超过 100 个需要查询的域名列表；</li><li><strong>origin-status-code</strong>：回源状态码，如 200、404，<br>仅当 <code>MetricNames = ["l7Flow_request_hy"]</code> 时支持本维度；</li><li><strong>origin-status-code-category</strong>：回源状态码类别，如 2xx、4xx，<br>仅当 <code>MetricNames =["l7Flow_request_hy"]</code> 时支持本维度。</li></ul><p>若 <code>DimensionName</code> 入参为空，默认按 <code>AppId</code> 维度汇总，只返回一组数据。</p><p>若 <code>DimensionName</code> 入参不为空，则按照传入的查询维度分组返回对应的时序数据。例如：</p><ul>当 <code>DimensionName = origin-status-code</code> 时：<ul><li>返回数据中 <code>TimingDataRecords.TypeKey</code> 为具体回源状态码，例如 200。</li><li>返回数据中 <code>TimingDataRecords.TypeValue</code> 是该状态码对应的时序数据。</li></ul></ul>
<strong>注意</strong>：当指定 DimensionName 查询时，禁止并发调用。若超出查询频率限制，会返回错误 <code><strong>InvalidParameter.ActionInProgress</strong></code> 。
 * @method void setDimensionName(string $DimensionName) 设置<p>查询维度名称，取值有：</p><ul><li><strong>domain</strong>：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名。<br>使用 domain 维度时必须在 <code>Filters</code> 中包含 <code>domain</code> 过滤项，指定总数不超过 100 个需要查询的域名列表；</li><li><strong>origin-status-code</strong>：回源状态码，如 200、404，<br>仅当 <code>MetricNames = ["l7Flow_request_hy"]</code> 时支持本维度；</li><li><strong>origin-status-code-category</strong>：回源状态码类别，如 2xx、4xx，<br>仅当 <code>MetricNames =["l7Flow_request_hy"]</code> 时支持本维度。</li></ul><p>若 <code>DimensionName</code> 入参为空，默认按 <code>AppId</code> 维度汇总，只返回一组数据。</p><p>若 <code>DimensionName</code> 入参不为空，则按照传入的查询维度分组返回对应的时序数据。例如：</p><ul>当 <code>DimensionName = origin-status-code</code> 时：<ul><li>返回数据中 <code>TimingDataRecords.TypeKey</code> 为具体回源状态码，例如 200。</li><li>返回数据中 <code>TimingDataRecords.TypeValue</code> 是该状态码对应的时序数据。</li></ul></ul>
<strong>注意</strong>：当指定 DimensionName 查询时，禁止并发调用。若超出查询频率限制，会返回错误 <code><strong>InvalidParameter.ActionInProgress</strong></code> 。
 */
class DescribeTimingL7OriginPullDataRequest extends AbstractModel
{
    /**
     * @var array 站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     */
    public $ZoneIds;

    /**
     * @var array 指标列表，取值有:
<ul><li>l7Flow_outFlux_hy: EdgeOne 节点至源站方向的请求流量，单位：Byte；</li>
<li>l7Flow_outBandwidth_hy: EdgeOne 节点至源站方向的请求带宽，单位：bps；</li>
<li>l7Flow_request_hy: EdgeOne 节点至源站方向的请求数，单位：次。</li>
<li>l7Flow_inFlux_hy: 源站至 EdgeOne 节点方向的响应流量，单位：Byte；</li>
<li>l7Flow_inBandwidth_hy: 源站至 EdgeOne 节点方向的响应带宽，单位：bps。</li></ul>
     */
    public $MetricNames;

    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
     */
    public $EndTime;

    /**
     * @var string 查询时间粒度，取值有：
<ul><li>min: 1分钟；</li><li>5min: 5分钟；</li><li>hour: 1小时；</li><li>day: 1天。</li></ul>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
     */
    public $Interval;

    /**
     * @var array 过滤条件，详细的过滤条件如下：
<ul><li><strong>domain</strong>：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名，而不是具体域名。</li><li><strong>originStatusCode</strong>：回源状态码，仅当 <code>MetricNames = ["l7Flow_request_hy"]</code> 时支持本过滤项。<br>对应的 Value 可选项如下：<ul><li><code>1xx</code>：1xx 类型的状态码；</li><li><code>2xx</code>：2xx 类型的状态码；</li><li><code>3xx</code>：3xx 类型的状态码；</li><li><code>4xx</code>：4xx 类型的状态码；</li><li><code>5xx</code>：5xx 类型的状态码；</li><li>在 <code>[0, 600)</code> 范围内的整数（不包括 600）。</li></ul></li></ul>
**注意**：当 <code>DimensionName</code>  不为空时，仅支持 <code>equals</code> 运算符。
     */
    public $Filters;

    /**
     * @var string <p>查询维度名称，取值有：</p><ul><li><strong>domain</strong>：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名。<br>使用 domain 维度时必须在 <code>Filters</code> 中包含 <code>domain</code> 过滤项，指定总数不超过 100 个需要查询的域名列表；</li><li><strong>origin-status-code</strong>：回源状态码，如 200、404，<br>仅当 <code>MetricNames = ["l7Flow_request_hy"]</code> 时支持本维度；</li><li><strong>origin-status-code-category</strong>：回源状态码类别，如 2xx、4xx，<br>仅当 <code>MetricNames =["l7Flow_request_hy"]</code> 时支持本维度。</li></ul><p>若 <code>DimensionName</code> 入参为空，默认按 <code>AppId</code> 维度汇总，只返回一组数据。</p><p>若 <code>DimensionName</code> 入参不为空，则按照传入的查询维度分组返回对应的时序数据。例如：</p><ul>当 <code>DimensionName = origin-status-code</code> 时：<ul><li>返回数据中 <code>TimingDataRecords.TypeKey</code> 为具体回源状态码，例如 200。</li><li>返回数据中 <code>TimingDataRecords.TypeValue</code> 是该状态码对应的时序数据。</li></ul></ul>
<strong>注意</strong>：当指定 DimensionName 查询时，禁止并发调用。若超出查询频率限制，会返回错误 <code><strong>InvalidParameter.ActionInProgress</strong></code> 。
     */
    public $DimensionName;

    /**
     * @param array $ZoneIds 站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     * @param array $MetricNames 指标列表，取值有:
<ul><li>l7Flow_outFlux_hy: EdgeOne 节点至源站方向的请求流量，单位：Byte；</li>
<li>l7Flow_outBandwidth_hy: EdgeOne 节点至源站方向的请求带宽，单位：bps；</li>
<li>l7Flow_request_hy: EdgeOne 节点至源站方向的请求数，单位：次。</li>
<li>l7Flow_inFlux_hy: 源站至 EdgeOne 节点方向的响应流量，单位：Byte；</li>
<li>l7Flow_inBandwidth_hy: 源站至 EdgeOne 节点方向的响应带宽，单位：bps。</li></ul>
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
     * @param string $Interval 查询时间粒度，取值有：
<ul><li>min: 1分钟；</li><li>5min: 5分钟；</li><li>hour: 1小时；</li><li>day: 1天。</li></ul>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
     * @param array $Filters 过滤条件，详细的过滤条件如下：
<ul><li><strong>domain</strong>：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名，而不是具体域名。</li><li><strong>originStatusCode</strong>：回源状态码，仅当 <code>MetricNames = ["l7Flow_request_hy"]</code> 时支持本过滤项。<br>对应的 Value 可选项如下：<ul><li><code>1xx</code>：1xx 类型的状态码；</li><li><code>2xx</code>：2xx 类型的状态码；</li><li><code>3xx</code>：3xx 类型的状态码；</li><li><code>4xx</code>：4xx 类型的状态码；</li><li><code>5xx</code>：5xx 类型的状态码；</li><li>在 <code>[0, 600)</code> 范围内的整数（不包括 600）。</li></ul></li></ul>
**注意**：当 <code>DimensionName</code>  不为空时，仅支持 <code>equals</code> 运算符。
     * @param string $DimensionName <p>查询维度名称，取值有：</p><ul><li><strong>domain</strong>：客户端请求的域名。若按泛域名接入 EdgeOne，则数据中记录为泛域名。<br>使用 domain 维度时必须在 <code>Filters</code> 中包含 <code>domain</code> 过滤项，指定总数不超过 100 个需要查询的域名列表；</li><li><strong>origin-status-code</strong>：回源状态码，如 200、404，<br>仅当 <code>MetricNames = ["l7Flow_request_hy"]</code> 时支持本维度；</li><li><strong>origin-status-code-category</strong>：回源状态码类别，如 2xx、4xx，<br>仅当 <code>MetricNames =["l7Flow_request_hy"]</code> 时支持本维度。</li></ul><p>若 <code>DimensionName</code> 入参为空，默认按 <code>AppId</code> 维度汇总，只返回一组数据。</p><p>若 <code>DimensionName</code> 入参不为空，则按照传入的查询维度分组返回对应的时序数据。例如：</p><ul>当 <code>DimensionName = origin-status-code</code> 时：<ul><li>返回数据中 <code>TimingDataRecords.TypeKey</code> 为具体回源状态码，例如 200。</li><li>返回数据中 <code>TimingDataRecords.TypeValue</code> 是该状态码对应的时序数据。</li></ul></ul>
<strong>注意</strong>：当指定 DimensionName 查询时，禁止并发调用。若超出查询频率限制，会返回错误 <code><strong>InvalidParameter.ActionInProgress</strong></code> 。
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("DimensionName",$param) and $param["DimensionName"] !== null) {
            $this->DimensionName = $param["DimensionName"];
        }
    }
}
