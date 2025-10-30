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
 * DescribeTopL7AnalysisData请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method void setEndTime(string $EndTime) 设置结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method string getMetricName() 获取查询的指标，取值有：
<li> l7Flow_outFlux_country：按国家/地区维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_province：按中国大陆境内省份维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_statusCode：按状态码维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_domain：按域名维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_url：按 URL Path 维度统计 L7 EdgeOne 响应流量指标; </li>
<li> l7Flow_outFlux_resourceType：按资源类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_sip：按客户端 IP 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_referers：按 Referer 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua_device：按设备类型维度统计 L7 EdgeOne 响应流量指标; </li>
<li> l7Flow_outFlux_ua_browser：按浏览器类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua_os：按操作系统类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua：按 User-Agent 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_request_country：按国家/地区维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_province：按中国大陆境内省份维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_statusCode：按状态码维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_domain：按域名维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_url：按 URL Path 维度统计 L7 访问请求数指标; </li>
<li> l7Flow_request_resourceType：按资源类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_sip：按客户端 IP 维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_referer：按 Referer 维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua_device：按设备类型维度统计 L7 访问请求数指标; </li>
<li> l7Flow_request_ua_browser：按浏览器类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua_os：按操作系统类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua：按 User-Agent 维度统计 L7 访问请求数指标。</li>
 * @method void setMetricName(string $MetricName) 设置查询的指标，取值有：
<li> l7Flow_outFlux_country：按国家/地区维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_province：按中国大陆境内省份维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_statusCode：按状态码维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_domain：按域名维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_url：按 URL Path 维度统计 L7 EdgeOne 响应流量指标; </li>
<li> l7Flow_outFlux_resourceType：按资源类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_sip：按客户端 IP 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_referers：按 Referer 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua_device：按设备类型维度统计 L7 EdgeOne 响应流量指标; </li>
<li> l7Flow_outFlux_ua_browser：按浏览器类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua_os：按操作系统类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua：按 User-Agent 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_request_country：按国家/地区维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_province：按中国大陆境内省份维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_statusCode：按状态码维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_domain：按域名维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_url：按 URL Path 维度统计 L7 访问请求数指标; </li>
<li> l7Flow_request_resourceType：按资源类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_sip：按客户端 IP 维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_referer：按 Referer 维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua_device：按设备类型维度统计 L7 访问请求数指标; </li>
<li> l7Flow_request_ua_browser：按浏览器类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua_os：按操作系统类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua：按 User-Agent 维度统计 L7 访问请求数指标。</li>
 * @method array getZoneIds() 获取站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method void setZoneIds(array $ZoneIds) 设置站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method integer getLimit() 获取查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。
 * @method void setLimit(integer $Limit) 设置查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。
 * @method array getFilters() 获取筛选数据时使用的过滤条件，取值参考 [指标分析筛选条件说明](https://cloud.tencent.com/document/product/1552/98219#1aaf1150-55a4-4b4d-b103-3a8317ac7945) 中针对 L7 访问流量、带宽、请求数的可用筛选项。
如需限定站点或内容标识符，请在 `ZoneIds.N` 参数中另行传入对应的值。
 * @method void setFilters(array $Filters) 设置筛选数据时使用的过滤条件，取值参考 [指标分析筛选条件说明](https://cloud.tencent.com/document/product/1552/98219#1aaf1150-55a4-4b4d-b103-3a8317ac7945) 中针对 L7 访问流量、带宽、请求数的可用筛选项。
如需限定站点或内容标识符，请在 `ZoneIds.N` 参数中另行传入对应的值。
 * @method string getInterval() 获取查询时间粒度，该参数无效，待废弃。
 * @method void setInterval(string $Interval) 设置查询时间粒度，该参数无效，待废弃。
 * @method string getArea() 获取数据归属地区。该参数已废弃。请在 `Filters.country` 中按客户端地域过滤数据。
 * @method void setArea(string $Area) 设置数据归属地区。该参数已废弃。请在 `Filters.country` 中按客户端地域过滤数据。
 */
class DescribeTopL7AnalysisDataRequest extends AbstractModel
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
     * @var string 查询的指标，取值有：
<li> l7Flow_outFlux_country：按国家/地区维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_province：按中国大陆境内省份维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_statusCode：按状态码维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_domain：按域名维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_url：按 URL Path 维度统计 L7 EdgeOne 响应流量指标; </li>
<li> l7Flow_outFlux_resourceType：按资源类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_sip：按客户端 IP 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_referers：按 Referer 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua_device：按设备类型维度统计 L7 EdgeOne 响应流量指标; </li>
<li> l7Flow_outFlux_ua_browser：按浏览器类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua_os：按操作系统类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua：按 User-Agent 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_request_country：按国家/地区维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_province：按中国大陆境内省份维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_statusCode：按状态码维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_domain：按域名维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_url：按 URL Path 维度统计 L7 访问请求数指标; </li>
<li> l7Flow_request_resourceType：按资源类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_sip：按客户端 IP 维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_referer：按 Referer 维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua_device：按设备类型维度统计 L7 访问请求数指标; </li>
<li> l7Flow_request_ua_browser：按浏览器类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua_os：按操作系统类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua：按 User-Agent 维度统计 L7 访问请求数指标。</li>
     */
    public $MetricName;

    /**
     * @var array 站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     */
    public $ZoneIds;

    /**
     * @var integer 查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。
     */
    public $Limit;

    /**
     * @var array 筛选数据时使用的过滤条件，取值参考 [指标分析筛选条件说明](https://cloud.tencent.com/document/product/1552/98219#1aaf1150-55a4-4b4d-b103-3a8317ac7945) 中针对 L7 访问流量、带宽、请求数的可用筛选项。
如需限定站点或内容标识符，请在 `ZoneIds.N` 参数中另行传入对应的值。
     */
    public $Filters;

    /**
     * @var string 查询时间粒度，该参数无效，待废弃。
     */
    public $Interval;

    /**
     * @var string 数据归属地区。该参数已废弃。请在 `Filters.country` 中按客户端地域过滤数据。
     */
    public $Area;

    /**
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
     * @param string $MetricName 查询的指标，取值有：
<li> l7Flow_outFlux_country：按国家/地区维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_province：按中国大陆境内省份维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_statusCode：按状态码维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_domain：按域名维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_url：按 URL Path 维度统计 L7 EdgeOne 响应流量指标; </li>
<li> l7Flow_outFlux_resourceType：按资源类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_sip：按客户端 IP 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_referers：按 Referer 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua_device：按设备类型维度统计 L7 EdgeOne 响应流量指标; </li>
<li> l7Flow_outFlux_ua_browser：按浏览器类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua_os：按操作系统类型维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_outFlux_ua：按 User-Agent 维度统计 L7 EdgeOne 响应流量指标；</li>
<li> l7Flow_request_country：按国家/地区维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_province：按中国大陆境内省份维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_statusCode：按状态码维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_domain：按域名维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_url：按 URL Path 维度统计 L7 访问请求数指标; </li>
<li> l7Flow_request_resourceType：按资源类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_sip：按客户端 IP 维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_referer：按 Referer 维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua_device：按设备类型维度统计 L7 访问请求数指标; </li>
<li> l7Flow_request_ua_browser：按浏览器类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua_os：按操作系统类型维度统计 L7 访问请求数指标；</li>
<li> l7Flow_request_ua：按 User-Agent 维度统计 L7 访问请求数指标。</li>
     * @param array $ZoneIds 站点 ID 集合，此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     * @param integer $Limit 查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。
     * @param array $Filters 筛选数据时使用的过滤条件，取值参考 [指标分析筛选条件说明](https://cloud.tencent.com/document/product/1552/98219#1aaf1150-55a4-4b4d-b103-3a8317ac7945) 中针对 L7 访问流量、带宽、请求数的可用筛选项。
如需限定站点或内容标识符，请在 `ZoneIds.N` 参数中另行传入对应的值。
     * @param string $Interval 查询时间粒度，该参数无效，待废弃。
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

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
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
