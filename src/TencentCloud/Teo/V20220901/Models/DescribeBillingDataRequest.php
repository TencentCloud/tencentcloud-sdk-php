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
 * DescribeBillingData请求参数结构体
 *
 * @method string getStartTime() 获取起始时间。
 * @method void setStartTime(string $StartTime) 设置起始时间。
 * @method string getEndTime() 获取结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method void setEndTime(string $EndTime) 设置结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
 * @method array getZoneIds() 获取站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method void setZoneIds(array $ZoneIds) 设置站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
 * @method string getMetricName() 获取指标列表，取值如下：
<b>四/七层加速流量：</b><li>acc_flux: 内容加速流量，单位为 Byte；</li><li>smt_flux: 智能加速流量，单位为 Byte；</li><li>l4_flux: 四层加速流量，单位为 Byte；</li><li>sec_flux: 独立防护流量，单位为 Byte；</li><li>zxctg_flux: 中国大陆网络优化流量，单位为 Byte。</li><br><b>四/七层加速带宽:</b><li>acc_bandwidth: 内容加速带宽，单位为 bps；</li><li>smt_bandwidth: 智能加速带宽，单位为 bps；</li><li>l4_bandwidth: 四层加速带宽，单位为 bps；</li><li>sec_bandwidth: 独立防护带宽，单位为 bps；</li><li>zxctg_bandwidth: 中国大陆网络优化带宽，单位为 bps。</li><br><b>HTTP/HTTPS 安全请求数：</b><li>sec_request_clean: HTTP/HTTPS 请求，单位为次。</li><b><br>增值服务用量：</b><li>smt_request_clean: 智能加速请求，单位为次；</li><li>quic_request: QUIC 请求，单位为次；</li><li>bot_request_clean: Bot 请求，单位为次；</li><li>cls_count: 实时日志推送条数，单位为条；</li><li>ddos_bandwidth: 弹性 DDoS 防护带宽，单位为 bps。</li><br><b>边缘计算用量：</b><li>edgefunction_request：边缘函数请求数，单位为次；</li><li>edgefunction_cpu_time：边缘函数CPU处理时间，单位为毫秒。</li>
<b>媒体处理用量：</b><li>total_transcode：所有规格音频，视频即时转码，转封装时长，单位为秒；</li><li>remux：转封装时长，单位为秒；</li><li>transcode_audio：音频转码时长，单位为秒；</li><li>transcode_H264_SD：H.264 编码方式的标清视频（短边 <= 480 px）时长，单位为秒；</li><li>transcode_H264_HD：H.264 编码方式的高清视频（短边 <= 720 px）时长，单位为秒；</li><li>transcode_H264_FHD：H.264 编码方式的全高清视频（短边 <= 1080 px）时长，单位为秒；</li><li>transcode_H264_2K：H.264 编码方式的 2K 视频（短边 <= 1440 px）时长，单位为秒。</li>
 * @method void setMetricName(string $MetricName) 设置指标列表，取值如下：
<b>四/七层加速流量：</b><li>acc_flux: 内容加速流量，单位为 Byte；</li><li>smt_flux: 智能加速流量，单位为 Byte；</li><li>l4_flux: 四层加速流量，单位为 Byte；</li><li>sec_flux: 独立防护流量，单位为 Byte；</li><li>zxctg_flux: 中国大陆网络优化流量，单位为 Byte。</li><br><b>四/七层加速带宽:</b><li>acc_bandwidth: 内容加速带宽，单位为 bps；</li><li>smt_bandwidth: 智能加速带宽，单位为 bps；</li><li>l4_bandwidth: 四层加速带宽，单位为 bps；</li><li>sec_bandwidth: 独立防护带宽，单位为 bps；</li><li>zxctg_bandwidth: 中国大陆网络优化带宽，单位为 bps。</li><br><b>HTTP/HTTPS 安全请求数：</b><li>sec_request_clean: HTTP/HTTPS 请求，单位为次。</li><b><br>增值服务用量：</b><li>smt_request_clean: 智能加速请求，单位为次；</li><li>quic_request: QUIC 请求，单位为次；</li><li>bot_request_clean: Bot 请求，单位为次；</li><li>cls_count: 实时日志推送条数，单位为条；</li><li>ddos_bandwidth: 弹性 DDoS 防护带宽，单位为 bps。</li><br><b>边缘计算用量：</b><li>edgefunction_request：边缘函数请求数，单位为次；</li><li>edgefunction_cpu_time：边缘函数CPU处理时间，单位为毫秒。</li>
<b>媒体处理用量：</b><li>total_transcode：所有规格音频，视频即时转码，转封装时长，单位为秒；</li><li>remux：转封装时长，单位为秒；</li><li>transcode_audio：音频转码时长，单位为秒；</li><li>transcode_H264_SD：H.264 编码方式的标清视频（短边 <= 480 px）时长，单位为秒；</li><li>transcode_H264_HD：H.264 编码方式的高清视频（短边 <= 720 px）时长，单位为秒；</li><li>transcode_H264_FHD：H.264 编码方式的全高清视频（短边 <= 1080 px）时长，单位为秒；</li><li>transcode_H264_2K：H.264 编码方式的 2K 视频（短边 <= 1440 px）时长，单位为秒。</li>
 * @method string getInterval() 获取查询时间粒度，取值有：
<li>5min：5 分钟粒度；</li>
<li>hour：1 小时粒度；</li>
<li>day：1 天粒度。</li>
 * @method void setInterval(string $Interval) 设置查询时间粒度，取值有：
<li>5min：5 分钟粒度；</li>
<li>hour：1 小时粒度；</li>
<li>day：1 天粒度。</li>
 * @method array getFilters() 获取过滤条件，详细的过滤条件取值如下：
<li>host：按照域名进行过滤。示例值：test.example.com。<br></li>
<li>proxy-id：按照四层代理实例 ID 进行过滤。示例值：sid-2rugn89bkla9。<br></li>
<li>region-id：按照计费大区进行过滤。可选项如下：<br>  CH：中国大陆境内<br>  AF：非洲<br>  AS1：亚太一区<br>  AS2：亚太二区<br>  AS3：亚太三区<br>  EU：欧洲<br>  MidEast：中东<br>  NA：北美<br>  SA：南美</li>
说明：相同 `Type` 的 `BillingDataFilter` 之间为“或”关系，不同 `Type` 的 `BillingDataFilter` 之间为“且”关系。
 * @method void setFilters(array $Filters) 设置过滤条件，详细的过滤条件取值如下：
<li>host：按照域名进行过滤。示例值：test.example.com。<br></li>
<li>proxy-id：按照四层代理实例 ID 进行过滤。示例值：sid-2rugn89bkla9。<br></li>
<li>region-id：按照计费大区进行过滤。可选项如下：<br>  CH：中国大陆境内<br>  AF：非洲<br>  AS1：亚太一区<br>  AS2：亚太二区<br>  AS3：亚太三区<br>  EU：欧洲<br>  MidEast：中东<br>  NA：北美<br>  SA：南美</li>
说明：相同 `Type` 的 `BillingDataFilter` 之间为“或”关系，不同 `Type` 的 `BillingDataFilter` 之间为“且”关系。
 * @method array getGroupBy() 获取分组聚合维度。最多允许同时按照两种维度进行分组。取值如下：  <li>zone-id：按照站点 ID 进行分组，若使用了内容标识符功能，则优先按照内容标识符分组；<br></li><li>host：按照域名进行分组；<br></li> <li>proxy-id：按照四层代理实例 ID 进行分组；<br></li> <li>region-id：按照计费大区进行分组。</li> 
 * @method void setGroupBy(array $GroupBy) 设置分组聚合维度。最多允许同时按照两种维度进行分组。取值如下：  <li>zone-id：按照站点 ID 进行分组，若使用了内容标识符功能，则优先按照内容标识符分组；<br></li><li>host：按照域名进行分组；<br></li> <li>proxy-id：按照四层代理实例 ID 进行分组；<br></li> <li>region-id：按照计费大区进行分组。</li> 
 */
class DescribeBillingDataRequest extends AbstractModel
{
    /**
     * @var string 起始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
     */
    public $EndTime;

    /**
     * @var array 站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     */
    public $ZoneIds;

    /**
     * @var string 指标列表，取值如下：
<b>四/七层加速流量：</b><li>acc_flux: 内容加速流量，单位为 Byte；</li><li>smt_flux: 智能加速流量，单位为 Byte；</li><li>l4_flux: 四层加速流量，单位为 Byte；</li><li>sec_flux: 独立防护流量，单位为 Byte；</li><li>zxctg_flux: 中国大陆网络优化流量，单位为 Byte。</li><br><b>四/七层加速带宽:</b><li>acc_bandwidth: 内容加速带宽，单位为 bps；</li><li>smt_bandwidth: 智能加速带宽，单位为 bps；</li><li>l4_bandwidth: 四层加速带宽，单位为 bps；</li><li>sec_bandwidth: 独立防护带宽，单位为 bps；</li><li>zxctg_bandwidth: 中国大陆网络优化带宽，单位为 bps。</li><br><b>HTTP/HTTPS 安全请求数：</b><li>sec_request_clean: HTTP/HTTPS 请求，单位为次。</li><b><br>增值服务用量：</b><li>smt_request_clean: 智能加速请求，单位为次；</li><li>quic_request: QUIC 请求，单位为次；</li><li>bot_request_clean: Bot 请求，单位为次；</li><li>cls_count: 实时日志推送条数，单位为条；</li><li>ddos_bandwidth: 弹性 DDoS 防护带宽，单位为 bps。</li><br><b>边缘计算用量：</b><li>edgefunction_request：边缘函数请求数，单位为次；</li><li>edgefunction_cpu_time：边缘函数CPU处理时间，单位为毫秒。</li>
<b>媒体处理用量：</b><li>total_transcode：所有规格音频，视频即时转码，转封装时长，单位为秒；</li><li>remux：转封装时长，单位为秒；</li><li>transcode_audio：音频转码时长，单位为秒；</li><li>transcode_H264_SD：H.264 编码方式的标清视频（短边 <= 480 px）时长，单位为秒；</li><li>transcode_H264_HD：H.264 编码方式的高清视频（短边 <= 720 px）时长，单位为秒；</li><li>transcode_H264_FHD：H.264 编码方式的全高清视频（短边 <= 1080 px）时长，单位为秒；</li><li>transcode_H264_2K：H.264 编码方式的 2K 视频（短边 <= 1440 px）时长，单位为秒。</li>
     */
    public $MetricName;

    /**
     * @var string 查询时间粒度，取值有：
<li>5min：5 分钟粒度；</li>
<li>hour：1 小时粒度；</li>
<li>day：1 天粒度。</li>
     */
    public $Interval;

    /**
     * @var array 过滤条件，详细的过滤条件取值如下：
<li>host：按照域名进行过滤。示例值：test.example.com。<br></li>
<li>proxy-id：按照四层代理实例 ID 进行过滤。示例值：sid-2rugn89bkla9。<br></li>
<li>region-id：按照计费大区进行过滤。可选项如下：<br>  CH：中国大陆境内<br>  AF：非洲<br>  AS1：亚太一区<br>  AS2：亚太二区<br>  AS3：亚太三区<br>  EU：欧洲<br>  MidEast：中东<br>  NA：北美<br>  SA：南美</li>
说明：相同 `Type` 的 `BillingDataFilter` 之间为“或”关系，不同 `Type` 的 `BillingDataFilter` 之间为“且”关系。
     */
    public $Filters;

    /**
     * @var array 分组聚合维度。最多允许同时按照两种维度进行分组。取值如下：  <li>zone-id：按照站点 ID 进行分组，若使用了内容标识符功能，则优先按照内容标识符分组；<br></li><li>host：按照域名进行分组；<br></li> <li>proxy-id：按照四层代理实例 ID 进行分组；<br></li> <li>region-id：按照计费大区进行分组。</li> 
     */
    public $GroupBy;

    /**
     * @param string $StartTime 起始时间。
     * @param string $EndTime 结束时间。查询时间范围（`EndTime` - `StartTime`）需小于等于 31 天。
     * @param array $ZoneIds 站点 ID 集合，此参数必填。最多传入 100 个站点 ID。若需查询腾讯云主账号下所有站点数据，请用 `*` 代替，查询账号级别数据需具备本接口全部站点资源权限。
     * @param string $MetricName 指标列表，取值如下：
<b>四/七层加速流量：</b><li>acc_flux: 内容加速流量，单位为 Byte；</li><li>smt_flux: 智能加速流量，单位为 Byte；</li><li>l4_flux: 四层加速流量，单位为 Byte；</li><li>sec_flux: 独立防护流量，单位为 Byte；</li><li>zxctg_flux: 中国大陆网络优化流量，单位为 Byte。</li><br><b>四/七层加速带宽:</b><li>acc_bandwidth: 内容加速带宽，单位为 bps；</li><li>smt_bandwidth: 智能加速带宽，单位为 bps；</li><li>l4_bandwidth: 四层加速带宽，单位为 bps；</li><li>sec_bandwidth: 独立防护带宽，单位为 bps；</li><li>zxctg_bandwidth: 中国大陆网络优化带宽，单位为 bps。</li><br><b>HTTP/HTTPS 安全请求数：</b><li>sec_request_clean: HTTP/HTTPS 请求，单位为次。</li><b><br>增值服务用量：</b><li>smt_request_clean: 智能加速请求，单位为次；</li><li>quic_request: QUIC 请求，单位为次；</li><li>bot_request_clean: Bot 请求，单位为次；</li><li>cls_count: 实时日志推送条数，单位为条；</li><li>ddos_bandwidth: 弹性 DDoS 防护带宽，单位为 bps。</li><br><b>边缘计算用量：</b><li>edgefunction_request：边缘函数请求数，单位为次；</li><li>edgefunction_cpu_time：边缘函数CPU处理时间，单位为毫秒。</li>
<b>媒体处理用量：</b><li>total_transcode：所有规格音频，视频即时转码，转封装时长，单位为秒；</li><li>remux：转封装时长，单位为秒；</li><li>transcode_audio：音频转码时长，单位为秒；</li><li>transcode_H264_SD：H.264 编码方式的标清视频（短边 <= 480 px）时长，单位为秒；</li><li>transcode_H264_HD：H.264 编码方式的高清视频（短边 <= 720 px）时长，单位为秒；</li><li>transcode_H264_FHD：H.264 编码方式的全高清视频（短边 <= 1080 px）时长，单位为秒；</li><li>transcode_H264_2K：H.264 编码方式的 2K 视频（短边 <= 1440 px）时长，单位为秒。</li>
     * @param string $Interval 查询时间粒度，取值有：
<li>5min：5 分钟粒度；</li>
<li>hour：1 小时粒度；</li>
<li>day：1 天粒度。</li>
     * @param array $Filters 过滤条件，详细的过滤条件取值如下：
<li>host：按照域名进行过滤。示例值：test.example.com。<br></li>
<li>proxy-id：按照四层代理实例 ID 进行过滤。示例值：sid-2rugn89bkla9。<br></li>
<li>region-id：按照计费大区进行过滤。可选项如下：<br>  CH：中国大陆境内<br>  AF：非洲<br>  AS1：亚太一区<br>  AS2：亚太二区<br>  AS3：亚太三区<br>  EU：欧洲<br>  MidEast：中东<br>  NA：北美<br>  SA：南美</li>
说明：相同 `Type` 的 `BillingDataFilter` 之间为“或”关系，不同 `Type` 的 `BillingDataFilter` 之间为“且”关系。
     * @param array $GroupBy 分组聚合维度。最多允许同时按照两种维度进行分组。取值如下：  <li>zone-id：按照站点 ID 进行分组，若使用了内容标识符功能，则优先按照内容标识符分组；<br></li><li>host：按照域名进行分组；<br></li> <li>proxy-id：按照四层代理实例 ID 进行分组；<br></li> <li>region-id：按照计费大区进行分组。</li> 
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

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new BillingDataFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }
    }
}
