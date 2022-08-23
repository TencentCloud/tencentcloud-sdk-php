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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOverviewL7Data请求参数结构体
 *
 * @method string getStartTime() 获取RFC3339格式，客户端时间
 * @method void setStartTime(string $StartTime) 设置RFC3339格式，客户端时间
 * @method string getEndTime() 获取RFC3339格式，客户端时间
 * @method void setEndTime(string $EndTime) 设置RFC3339格式，客户端时间
 * @method array getMetricNames() 获取指标列表，支持的指标
l7Flow_outFlux: 访问流量
l7Flow_request: 访问请求数
l7Flow_outBandwidth: 访问带宽
 l7Flow_hit_outFlux: 缓存命中流量
 * @method void setMetricNames(array $MetricNames) 设置指标列表，支持的指标
l7Flow_outFlux: 访问流量
l7Flow_request: 访问请求数
l7Flow_outBandwidth: 访问带宽
 l7Flow_hit_outFlux: 缓存命中流量
 * @method string getInterval() 获取时间间隔，选填{min, 5min, hour, day, week}
 * @method void setInterval(string $Interval) 设置时间间隔，选填{min, 5min, hour, day, week}
 * @method array getZoneIds() 获取ZoneId列表，仅在zone/domain维度下查询时该参数有效
 * @method void setZoneIds(array $ZoneIds) 设置ZoneId列表，仅在zone/domain维度下查询时该参数有效
 * @method array getDomains() 获取Domain列表，仅在domain维度下查询时该参数有效
 * @method void setDomains(array $Domains) 设置Domain列表，仅在domain维度下查询时该参数有效
 * @method string getProtocol() 获取协议类型， 选填{http,http2,https,all}
 * @method void setProtocol(string $Protocol) 设置协议类型， 选填{http,http2,https,all}
 * @method string getArea() 获取加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 * @method void setArea(string $Area) 设置加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 */
class DescribeOverviewL7DataRequest extends AbstractModel
{
    /**
     * @var string RFC3339格式，客户端时间
     */
    public $StartTime;

    /**
     * @var string RFC3339格式，客户端时间
     */
    public $EndTime;

    /**
     * @var array 指标列表，支持的指标
l7Flow_outFlux: 访问流量
l7Flow_request: 访问请求数
l7Flow_outBandwidth: 访问带宽
 l7Flow_hit_outFlux: 缓存命中流量
     */
    public $MetricNames;

    /**
     * @var string 时间间隔，选填{min, 5min, hour, day, week}
     */
    public $Interval;

    /**
     * @var array ZoneId列表，仅在zone/domain维度下查询时该参数有效
     */
    public $ZoneIds;

    /**
     * @var array Domain列表，仅在domain维度下查询时该参数有效
     */
    public $Domains;

    /**
     * @var string 协议类型， 选填{http,http2,https,all}
     */
    public $Protocol;

    /**
     * @var string 加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
     */
    public $Area;

    /**
     * @param string $StartTime RFC3339格式，客户端时间
     * @param string $EndTime RFC3339格式，客户端时间
     * @param array $MetricNames 指标列表，支持的指标
l7Flow_outFlux: 访问流量
l7Flow_request: 访问请求数
l7Flow_outBandwidth: 访问带宽
 l7Flow_hit_outFlux: 缓存命中流量
     * @param string $Interval 时间间隔，选填{min, 5min, hour, day, week}
     * @param array $ZoneIds ZoneId列表，仅在zone/domain维度下查询时该参数有效
     * @param array $Domains Domain列表，仅在domain维度下查询时该参数有效
     * @param string $Protocol 协议类型， 选填{http,http2,https,all}
     * @param string $Area 加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
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

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
