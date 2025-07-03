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


 * @method array getZoneIds() 获取站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method void setZoneIds(array $ZoneIds) 设置站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method integer getLimit() 获取查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。
 * @method void setLimit(integer $Limit) 设置查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。
 * @method array getFilters() 获取过滤条件，详细的过滤条件 Key 值如下：
<li>country：按照国家/地区进行过滤，国家/地区遵循 <a href="https://baike.baidu.com/item/ISO%203166-1/5269555">ISO 3166-1 alpha-2</a> 规范。示例值：CN。</li>
<li>province：按照省份进行过滤，此参数只支持服务区域为中国大陆。省份代码参考<a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">境内省份映射表</a>，示例值：22。</li>
<li>isp：按照运营商进行过滤，此参数只支持服务区域为中国大陆。对应的 Value 可选项如下：<br>   2：中国电信；<br>   26：中国联通；<br>   1046：中国移动；<br>   3947：中国铁通；<br>   38：教育网；<br>   43：长城宽带；<br>   0：其他运营商。</li>
<li>domain：按照子域名进行过滤，示例值： www.example.com。</li>
<li>url：按照 URL Path 进行过滤，示例值：/content 或 /content/test.jpg。若填写 url 参数，则最多可查询近 30 天的数据。</li>
<li>referer：按照 Referer 请求头部进行过滤，示例值：http://www.example.com/。若填写 referer 参数，则最多可查询近 30 天的数据；</li>
<li>resourceType：按照资源类型进行过滤，资源类型一般是文件后缀，示例值：.jpg。若填写 resourceType 参数，则最多可查询近 30 天的数据；</li>
<li>protocol：按照 HTTP 协议版本进行过滤。对应的 Value 可选项如下：<br>   HTTP/1.0；<br>   HTTP/1.1；<br>   HTTP/2.0；<br>   HTTP/3；<br>   WebSocket。</li>
<li>socket：按照 HTTP协议类型进行过滤。对应的 Value 可选项如下：<br>   HTTP：HTTP 协议；<br>   HTTPS：HTTPS 协议；<br>   QUIC：QUIC 协议。</li>
<li>statusCode：按照边缘状态码进行过滤。若填写 statusCode 参数，则最多可查询近 30 天的数据。对应的 Value 可选项如下：<br>   1XX：1xx类型的状态码；<br>   2XX：2xx类型的状态码；<br>   3XX：3xx类型的状态码；<br>   4XX：4xx类型的状态码；<br>   5XX：5xx类型的状态码；<br>   在 [0,600) 范围内的整数。</li>
<li>browserType：按照浏览器类型进行过滤。若填写 browserType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   Firefox：Firefox浏览器；<br>   Chrome：Chrome浏览器；<br>   Safari：Safari浏览器；<br>   Other：其他浏览器类型；<br>   Empty：浏览器类型为空；<br>   Bot：搜索引擎爬虫；<br>   MicrosoftEdge：MicrosoftEdge浏览器；<br>   IE：IE浏览器；<br>   Opera：Opera浏览器；<br>   QQBrowser：QQ浏览器；<br>   LBBrowser：LB浏览器；<br>   MaxthonBrowser：Maxthon浏览器；<br>   SouGouBrowser：搜狗浏览器；<br>   BIDUBrowser：百度浏览器；<br>   TaoBrowser：淘浏览器；<br>   UBrowser：UC浏览器。</li>
<li>deviceType：按照设备类型进行过滤。若填写 deviceType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   TV：TV设备；<br>   Tablet：Tablet设备；<br>   Mobile：Mobile设备；<br>   Desktop：Desktop设备；<br>   Other：其他设备类型；<br>   Empty：设备类型为空。</li>
<li>operatingSystemType：按照操作系统类型进行过滤。若填写 operatingSystemType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   Linux：Linux操作系统；<br>   MacOS：MacOs操作系统；<br>   Android：Android操作系统；<br>   IOS：IOS操作系统；<br>   Windows：Windows操作系统；<br>   NetBSD：NetBSD；<br>   ChromiumOS：ChromiumOS；<br>   Bot：搜索引擎爬虫；<br>   Other：其他类型的操作系统；<br>   Empty：操作系统为空。</li>
<li>tlsVersion：按照 TLS 版本进行过滤。若填写 tlsVersion 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   TLS1.0；<br>   TLS1.1；<br>   TLS1.2；<br>   TLS1.3。</li>
<li>ipVersion：按照 IP 版本进行过滤。对应 Value 的可选项如下：<br>   4：IPv4；<br>   6：IPv6。</li>
<li>cacheType：按照缓存状态进行过滤。对应 Value 的可选项如下：<br>   hit：请求命中 EdgeOne 节点缓存，资源由节点缓存提供。资源部分命中缓存也会记录为 hit。<br>   miss：请求未命中 EdgeOne 节点缓存，资源由源站提供。<br>   dynamic：请求的资源无法缓存/未配置被节点缓存，资源由源站提供。<br>   other：无法被识别的缓存状态。边缘函数响应的请求会记录为 other。</li>
<li>clientIp：按照客户端 IP 进行过滤。若填写 clientIp 参数，则最多可查询近 30 天的数据。</li>
<li>userAgent：按照 User-Agent 请求头部进行过滤。若填写 userAgent 参数，则最多可查询近 30 天的数据。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，详细的过滤条件 Key 值如下：
<li>country：按照国家/地区进行过滤，国家/地区遵循 <a href="https://baike.baidu.com/item/ISO%203166-1/5269555">ISO 3166-1 alpha-2</a> 规范。示例值：CN。</li>
<li>province：按照省份进行过滤，此参数只支持服务区域为中国大陆。省份代码参考<a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">境内省份映射表</a>，示例值：22。</li>
<li>isp：按照运营商进行过滤，此参数只支持服务区域为中国大陆。对应的 Value 可选项如下：<br>   2：中国电信；<br>   26：中国联通；<br>   1046：中国移动；<br>   3947：中国铁通；<br>   38：教育网；<br>   43：长城宽带；<br>   0：其他运营商。</li>
<li>domain：按照子域名进行过滤，示例值： www.example.com。</li>
<li>url：按照 URL Path 进行过滤，示例值：/content 或 /content/test.jpg。若填写 url 参数，则最多可查询近 30 天的数据。</li>
<li>referer：按照 Referer 请求头部进行过滤，示例值：http://www.example.com/。若填写 referer 参数，则最多可查询近 30 天的数据；</li>
<li>resourceType：按照资源类型进行过滤，资源类型一般是文件后缀，示例值：.jpg。若填写 resourceType 参数，则最多可查询近 30 天的数据；</li>
<li>protocol：按照 HTTP 协议版本进行过滤。对应的 Value 可选项如下：<br>   HTTP/1.0；<br>   HTTP/1.1；<br>   HTTP/2.0；<br>   HTTP/3；<br>   WebSocket。</li>
<li>socket：按照 HTTP协议类型进行过滤。对应的 Value 可选项如下：<br>   HTTP：HTTP 协议；<br>   HTTPS：HTTPS 协议；<br>   QUIC：QUIC 协议。</li>
<li>statusCode：按照边缘状态码进行过滤。若填写 statusCode 参数，则最多可查询近 30 天的数据。对应的 Value 可选项如下：<br>   1XX：1xx类型的状态码；<br>   2XX：2xx类型的状态码；<br>   3XX：3xx类型的状态码；<br>   4XX：4xx类型的状态码；<br>   5XX：5xx类型的状态码；<br>   在 [0,600) 范围内的整数。</li>
<li>browserType：按照浏览器类型进行过滤。若填写 browserType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   Firefox：Firefox浏览器；<br>   Chrome：Chrome浏览器；<br>   Safari：Safari浏览器；<br>   Other：其他浏览器类型；<br>   Empty：浏览器类型为空；<br>   Bot：搜索引擎爬虫；<br>   MicrosoftEdge：MicrosoftEdge浏览器；<br>   IE：IE浏览器；<br>   Opera：Opera浏览器；<br>   QQBrowser：QQ浏览器；<br>   LBBrowser：LB浏览器；<br>   MaxthonBrowser：Maxthon浏览器；<br>   SouGouBrowser：搜狗浏览器；<br>   BIDUBrowser：百度浏览器；<br>   TaoBrowser：淘浏览器；<br>   UBrowser：UC浏览器。</li>
<li>deviceType：按照设备类型进行过滤。若填写 deviceType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   TV：TV设备；<br>   Tablet：Tablet设备；<br>   Mobile：Mobile设备；<br>   Desktop：Desktop设备；<br>   Other：其他设备类型；<br>   Empty：设备类型为空。</li>
<li>operatingSystemType：按照操作系统类型进行过滤。若填写 operatingSystemType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   Linux：Linux操作系统；<br>   MacOS：MacOs操作系统；<br>   Android：Android操作系统；<br>   IOS：IOS操作系统；<br>   Windows：Windows操作系统；<br>   NetBSD：NetBSD；<br>   ChromiumOS：ChromiumOS；<br>   Bot：搜索引擎爬虫；<br>   Other：其他类型的操作系统；<br>   Empty：操作系统为空。</li>
<li>tlsVersion：按照 TLS 版本进行过滤。若填写 tlsVersion 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   TLS1.0；<br>   TLS1.1；<br>   TLS1.2；<br>   TLS1.3。</li>
<li>ipVersion：按照 IP 版本进行过滤。对应 Value 的可选项如下：<br>   4：IPv4；<br>   6：IPv6。</li>
<li>cacheType：按照缓存状态进行过滤。对应 Value 的可选项如下：<br>   hit：请求命中 EdgeOne 节点缓存，资源由节点缓存提供。资源部分命中缓存也会记录为 hit。<br>   miss：请求未命中 EdgeOne 节点缓存，资源由源站提供。<br>   dynamic：请求的资源无法缓存/未配置被节点缓存，资源由源站提供。<br>   other：无法被识别的缓存状态。边缘函数响应的请求会记录为 other。</li>
<li>clientIp：按照客户端 IP 进行过滤。若填写 clientIp 参数，则最多可查询近 30 天的数据。</li>
<li>userAgent：按照 User-Agent 请求头部进行过滤。若填写 userAgent 参数，则最多可查询近 30 天的数据。</li>
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
 * @method string getArea() 获取数据归属地区。该参数已废弃。请在 Filters.country 中按客户端地域过滤数据。
 * @method void setArea(string $Area) 设置数据归属地区。该参数已废弃。请在 Filters.country 中按客户端地域过滤数据。
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
     * @var array 站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     */
    public $ZoneIds;

    /**
     * @var integer 查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。
     */
    public $Limit;

    /**
     * @var array 过滤条件，详细的过滤条件 Key 值如下：
<li>country：按照国家/地区进行过滤，国家/地区遵循 <a href="https://baike.baidu.com/item/ISO%203166-1/5269555">ISO 3166-1 alpha-2</a> 规范。示例值：CN。</li>
<li>province：按照省份进行过滤，此参数只支持服务区域为中国大陆。省份代码参考<a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">境内省份映射表</a>，示例值：22。</li>
<li>isp：按照运营商进行过滤，此参数只支持服务区域为中国大陆。对应的 Value 可选项如下：<br>   2：中国电信；<br>   26：中国联通；<br>   1046：中国移动；<br>   3947：中国铁通；<br>   38：教育网；<br>   43：长城宽带；<br>   0：其他运营商。</li>
<li>domain：按照子域名进行过滤，示例值： www.example.com。</li>
<li>url：按照 URL Path 进行过滤，示例值：/content 或 /content/test.jpg。若填写 url 参数，则最多可查询近 30 天的数据。</li>
<li>referer：按照 Referer 请求头部进行过滤，示例值：http://www.example.com/。若填写 referer 参数，则最多可查询近 30 天的数据；</li>
<li>resourceType：按照资源类型进行过滤，资源类型一般是文件后缀，示例值：.jpg。若填写 resourceType 参数，则最多可查询近 30 天的数据；</li>
<li>protocol：按照 HTTP 协议版本进行过滤。对应的 Value 可选项如下：<br>   HTTP/1.0；<br>   HTTP/1.1；<br>   HTTP/2.0；<br>   HTTP/3；<br>   WebSocket。</li>
<li>socket：按照 HTTP协议类型进行过滤。对应的 Value 可选项如下：<br>   HTTP：HTTP 协议；<br>   HTTPS：HTTPS 协议；<br>   QUIC：QUIC 协议。</li>
<li>statusCode：按照边缘状态码进行过滤。若填写 statusCode 参数，则最多可查询近 30 天的数据。对应的 Value 可选项如下：<br>   1XX：1xx类型的状态码；<br>   2XX：2xx类型的状态码；<br>   3XX：3xx类型的状态码；<br>   4XX：4xx类型的状态码；<br>   5XX：5xx类型的状态码；<br>   在 [0,600) 范围内的整数。</li>
<li>browserType：按照浏览器类型进行过滤。若填写 browserType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   Firefox：Firefox浏览器；<br>   Chrome：Chrome浏览器；<br>   Safari：Safari浏览器；<br>   Other：其他浏览器类型；<br>   Empty：浏览器类型为空；<br>   Bot：搜索引擎爬虫；<br>   MicrosoftEdge：MicrosoftEdge浏览器；<br>   IE：IE浏览器；<br>   Opera：Opera浏览器；<br>   QQBrowser：QQ浏览器；<br>   LBBrowser：LB浏览器；<br>   MaxthonBrowser：Maxthon浏览器；<br>   SouGouBrowser：搜狗浏览器；<br>   BIDUBrowser：百度浏览器；<br>   TaoBrowser：淘浏览器；<br>   UBrowser：UC浏览器。</li>
<li>deviceType：按照设备类型进行过滤。若填写 deviceType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   TV：TV设备；<br>   Tablet：Tablet设备；<br>   Mobile：Mobile设备；<br>   Desktop：Desktop设备；<br>   Other：其他设备类型；<br>   Empty：设备类型为空。</li>
<li>operatingSystemType：按照操作系统类型进行过滤。若填写 operatingSystemType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   Linux：Linux操作系统；<br>   MacOS：MacOs操作系统；<br>   Android：Android操作系统；<br>   IOS：IOS操作系统；<br>   Windows：Windows操作系统；<br>   NetBSD：NetBSD；<br>   ChromiumOS：ChromiumOS；<br>   Bot：搜索引擎爬虫；<br>   Other：其他类型的操作系统；<br>   Empty：操作系统为空。</li>
<li>tlsVersion：按照 TLS 版本进行过滤。若填写 tlsVersion 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   TLS1.0；<br>   TLS1.1；<br>   TLS1.2；<br>   TLS1.3。</li>
<li>ipVersion：按照 IP 版本进行过滤。对应 Value 的可选项如下：<br>   4：IPv4；<br>   6：IPv6。</li>
<li>cacheType：按照缓存状态进行过滤。对应 Value 的可选项如下：<br>   hit：请求命中 EdgeOne 节点缓存，资源由节点缓存提供。资源部分命中缓存也会记录为 hit。<br>   miss：请求未命中 EdgeOne 节点缓存，资源由源站提供。<br>   dynamic：请求的资源无法缓存/未配置被节点缓存，资源由源站提供。<br>   other：无法被识别的缓存状态。边缘函数响应的请求会记录为 other。</li>
<li>clientIp：按照客户端 IP 进行过滤。若填写 clientIp 参数，则最多可查询近 30 天的数据。</li>
<li>userAgent：按照 User-Agent 请求头部进行过滤。若填写 userAgent 参数，则最多可查询近 30 天的数据。</li>
     */
    public $Filters;

    /**
     * @var string 查询时间粒度，取值有：
<li>min: 1分钟；</li>
<li>5min: 5分钟；</li>
<li>hour: 1小时；</li>
<li>day: 1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
     */
    public $Interval;

    /**
     * @var string 数据归属地区。该参数已废弃。请在 Filters.country 中按客户端地域过滤数据。
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


     * @param array $ZoneIds 站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     * @param integer $Limit 查询前多少个 top 数据，最大值为1000。不填默认为10，表示查询 top10 的数据。
     * @param array $Filters 过滤条件，详细的过滤条件 Key 值如下：
<li>country：按照国家/地区进行过滤，国家/地区遵循 <a href="https://baike.baidu.com/item/ISO%203166-1/5269555">ISO 3166-1 alpha-2</a> 规范。示例值：CN。</li>
<li>province：按照省份进行过滤，此参数只支持服务区域为中国大陆。省份代码参考<a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">境内省份映射表</a>，示例值：22。</li>
<li>isp：按照运营商进行过滤，此参数只支持服务区域为中国大陆。对应的 Value 可选项如下：<br>   2：中国电信；<br>   26：中国联通；<br>   1046：中国移动；<br>   3947：中国铁通；<br>   38：教育网；<br>   43：长城宽带；<br>   0：其他运营商。</li>
<li>domain：按照子域名进行过滤，示例值： www.example.com。</li>
<li>url：按照 URL Path 进行过滤，示例值：/content 或 /content/test.jpg。若填写 url 参数，则最多可查询近 30 天的数据。</li>
<li>referer：按照 Referer 请求头部进行过滤，示例值：http://www.example.com/。若填写 referer 参数，则最多可查询近 30 天的数据；</li>
<li>resourceType：按照资源类型进行过滤，资源类型一般是文件后缀，示例值：.jpg。若填写 resourceType 参数，则最多可查询近 30 天的数据；</li>
<li>protocol：按照 HTTP 协议版本进行过滤。对应的 Value 可选项如下：<br>   HTTP/1.0；<br>   HTTP/1.1；<br>   HTTP/2.0；<br>   HTTP/3；<br>   WebSocket。</li>
<li>socket：按照 HTTP协议类型进行过滤。对应的 Value 可选项如下：<br>   HTTP：HTTP 协议；<br>   HTTPS：HTTPS 协议；<br>   QUIC：QUIC 协议。</li>
<li>statusCode：按照边缘状态码进行过滤。若填写 statusCode 参数，则最多可查询近 30 天的数据。对应的 Value 可选项如下：<br>   1XX：1xx类型的状态码；<br>   2XX：2xx类型的状态码；<br>   3XX：3xx类型的状态码；<br>   4XX：4xx类型的状态码；<br>   5XX：5xx类型的状态码；<br>   在 [0,600) 范围内的整数。</li>
<li>browserType：按照浏览器类型进行过滤。若填写 browserType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   Firefox：Firefox浏览器；<br>   Chrome：Chrome浏览器；<br>   Safari：Safari浏览器；<br>   Other：其他浏览器类型；<br>   Empty：浏览器类型为空；<br>   Bot：搜索引擎爬虫；<br>   MicrosoftEdge：MicrosoftEdge浏览器；<br>   IE：IE浏览器；<br>   Opera：Opera浏览器；<br>   QQBrowser：QQ浏览器；<br>   LBBrowser：LB浏览器；<br>   MaxthonBrowser：Maxthon浏览器；<br>   SouGouBrowser：搜狗浏览器；<br>   BIDUBrowser：百度浏览器；<br>   TaoBrowser：淘浏览器；<br>   UBrowser：UC浏览器。</li>
<li>deviceType：按照设备类型进行过滤。若填写 deviceType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   TV：TV设备；<br>   Tablet：Tablet设备；<br>   Mobile：Mobile设备；<br>   Desktop：Desktop设备；<br>   Other：其他设备类型；<br>   Empty：设备类型为空。</li>
<li>operatingSystemType：按照操作系统类型进行过滤。若填写 operatingSystemType 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   Linux：Linux操作系统；<br>   MacOS：MacOs操作系统；<br>   Android：Android操作系统；<br>   IOS：IOS操作系统；<br>   Windows：Windows操作系统；<br>   NetBSD：NetBSD；<br>   ChromiumOS：ChromiumOS；<br>   Bot：搜索引擎爬虫；<br>   Other：其他类型的操作系统；<br>   Empty：操作系统为空。</li>
<li>tlsVersion：按照 TLS 版本进行过滤。若填写 tlsVersion 参数，则最多可查询近 30 天的数据。对应 Value 的可选项如下：<br>   TLS1.0；<br>   TLS1.1；<br>   TLS1.2；<br>   TLS1.3。</li>
<li>ipVersion：按照 IP 版本进行过滤。对应 Value 的可选项如下：<br>   4：IPv4；<br>   6：IPv6。</li>
<li>cacheType：按照缓存状态进行过滤。对应 Value 的可选项如下：<br>   hit：请求命中 EdgeOne 节点缓存，资源由节点缓存提供。资源部分命中缓存也会记录为 hit。<br>   miss：请求未命中 EdgeOne 节点缓存，资源由源站提供。<br>   dynamic：请求的资源无法缓存/未配置被节点缓存，资源由源站提供。<br>   other：无法被识别的缓存状态。边缘函数响应的请求会记录为 other。</li>
<li>clientIp：按照客户端 IP 进行过滤。若填写 clientIp 参数，则最多可查询近 30 天的数据。</li>
<li>userAgent：按照 User-Agent 请求头部进行过滤。若填写 userAgent 参数，则最多可查询近 30 天的数据。</li>
     * @param string $Interval 查询时间粒度，取值有：
<li>min: 1分钟；</li>
<li>5min: 5分钟；</li>
<li>hour: 1小时；</li>
<li>day: 1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：2 小时范围内以 min 粒度查询，2 天范围内以 5min 粒度查询，7 天范围内以 hour 粒度查询，超过 7 天以 day 粒度查询。
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
