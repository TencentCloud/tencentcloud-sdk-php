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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDistrictIspData请求参数结构体
 *
 * @method array getDomains() 获取<p>域名列表，最多支持20个域名</p>
 * @method void setDomains(array $Domains) 设置<p>域名列表，最多支持20个域名</p>
 * @method string getStartTime() 获取<p>查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间<br>支持近 60 天内的数据查询，每次查询时间区间为 3 小时</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间<br>支持近 60 天内的数据查询，每次查询时间区间为 3 小时</p>
 * @method string getEndTime() 获取<p>查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间<br>结束时间与起始时间区间最大为 3 小时</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间<br>结束时间与起始时间区间最大为 3 小时</p>
 * @method string getMetric() 获取<p>指定查询指标，支持:<br>bandwidth：带宽，单位为 bps<br>flux：流量，单位为 byte<br>request：请求数，单位为 次<br>statusCode：状态码，返回 0、2xx、3xx、4xx、5xx 汇总数据，单位为 次<br>2xx：返回 2xx 状态码汇总及各 2 开头状态码数据，单位为 次<br>3xx：返回 3xx 状态码汇总及各 3 开头状态码数据，单位为 次<br>4xx：返回 4xx 状态码汇总及各 4 开头状态码数据，单位为 次<br>5xx：返回 5xx 状态码汇总及各 5 开头状态码数据，单位为 次<br>支持指定具体状态码查询，若未产生过，则返回为空</p>
 * @method void setMetric(string $Metric) 设置<p>指定查询指标，支持:<br>bandwidth：带宽，单位为 bps<br>flux：流量，单位为 byte<br>request：请求数，单位为 次<br>statusCode：状态码，返回 0、2xx、3xx、4xx、5xx 汇总数据，单位为 次<br>2xx：返回 2xx 状态码汇总及各 2 开头状态码数据，单位为 次<br>3xx：返回 3xx 状态码汇总及各 3 开头状态码数据，单位为 次<br>4xx：返回 4xx 状态码汇总及各 4 开头状态码数据，单位为 次<br>5xx：返回 5xx 状态码汇总及各 5 开头状态码数据，单位为 次<br>支持指定具体状态码查询，若未产生过，则返回为空</p>
 * @method array getDistricts() 获取<p>指定省份查询，不填充表示查询所有省份（注：指定条件查询只支持映射表范围）<br>省份、国家/地区编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">省份编码映射</a></p>
 * @method void setDistricts(array $Districts) 设置<p>指定省份查询，不填充表示查询所有省份（注：指定条件查询只支持映射表范围）<br>省份、国家/地区编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">省份编码映射</a></p>
 * @method array getIsps() 获取<p>指定运营商查询，不填充表示查询所有运营商（注：指定条件查询只支持映射表范围）<br>运营商编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">运营商编码映射</a></p>
 * @method void setIsps(array $Isps) 设置<p>指定运营商查询，不填充表示查询所有运营商（注：指定条件查询只支持映射表范围）<br>运营商编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">运营商编码映射</a></p>
 * @method string getProtocol() 获取<p>指定协议查询，不填充表示查询所有协议<br>all：所有协议<br>http：指定查询 HTTP 对应指标<br>https：指定查询 HTTPS 对应指标</p>
 * @method void setProtocol(string $Protocol) 设置<p>指定协议查询，不填充表示查询所有协议<br>all：所有协议<br>http：指定查询 HTTP 对应指标<br>https：指定查询 HTTPS 对应指标</p>
 * @method string getIpProtocol() 获取<p>指定IP协议查询，不填充表示查询所有协议<br>all：所有协议<br>ipv4：指定查询 ipv4 对应指标<br>ipv6：指定查询 ipv6 对应指标<br>指定IP协议查询时，不可同时指定省份、运营商查询</p>
 * @method void setIpProtocol(string $IpProtocol) 设置<p>指定IP协议查询，不填充表示查询所有协议<br>all：所有协议<br>ipv4：指定查询 ipv4 对应指标<br>ipv6：指定查询 ipv6 对应指标<br>指定IP协议查询时，不可同时指定省份、运营商查询</p>
 * @method string getInterval() 获取<p>时间粒度，支持以下几种模式（默认5min）：<br>min：1 分钟粒度，支持近 60 天内的数据查询，每次查询时间区间不超过10分钟，可返回 1 分钟粒度明细数据<br>5min：5 分钟粒度，支持近 60 天内的数据查询，每次查询时间区间不超过3 小时，可返回 5 分钟粒度明细数据</p>
 * @method void setInterval(string $Interval) 设置<p>时间粒度，支持以下几种模式（默认5min）：<br>min：1 分钟粒度，支持近 60 天内的数据查询，每次查询时间区间不超过10分钟，可返回 1 分钟粒度明细数据<br>5min：5 分钟粒度，支持近 60 天内的数据查询，每次查询时间区间不超过3 小时，可返回 5 分钟粒度明细数据</p>
 */
class DescribeDistrictIspDataRequest extends AbstractModel
{
    /**
     * @var array <p>域名列表，最多支持20个域名</p>
     */
    public $Domains;

    /**
     * @var string <p>查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间<br>支持近 60 天内的数据查询，每次查询时间区间为 3 小时</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间<br>结束时间与起始时间区间最大为 3 小时</p>
     */
    public $EndTime;

    /**
     * @var string <p>指定查询指标，支持:<br>bandwidth：带宽，单位为 bps<br>flux：流量，单位为 byte<br>request：请求数，单位为 次<br>statusCode：状态码，返回 0、2xx、3xx、4xx、5xx 汇总数据，单位为 次<br>2xx：返回 2xx 状态码汇总及各 2 开头状态码数据，单位为 次<br>3xx：返回 3xx 状态码汇总及各 3 开头状态码数据，单位为 次<br>4xx：返回 4xx 状态码汇总及各 4 开头状态码数据，单位为 次<br>5xx：返回 5xx 状态码汇总及各 5 开头状态码数据，单位为 次<br>支持指定具体状态码查询，若未产生过，则返回为空</p>
     */
    public $Metric;

    /**
     * @var array <p>指定省份查询，不填充表示查询所有省份（注：指定条件查询只支持映射表范围）<br>省份、国家/地区编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">省份编码映射</a></p>
     */
    public $Districts;

    /**
     * @var array <p>指定运营商查询，不填充表示查询所有运营商（注：指定条件查询只支持映射表范围）<br>运营商编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">运营商编码映射</a></p>
     */
    public $Isps;

    /**
     * @var string <p>指定协议查询，不填充表示查询所有协议<br>all：所有协议<br>http：指定查询 HTTP 对应指标<br>https：指定查询 HTTPS 对应指标</p>
     */
    public $Protocol;

    /**
     * @var string <p>指定IP协议查询，不填充表示查询所有协议<br>all：所有协议<br>ipv4：指定查询 ipv4 对应指标<br>ipv6：指定查询 ipv6 对应指标<br>指定IP协议查询时，不可同时指定省份、运营商查询</p>
     */
    public $IpProtocol;

    /**
     * @var string <p>时间粒度，支持以下几种模式（默认5min）：<br>min：1 分钟粒度，支持近 60 天内的数据查询，每次查询时间区间不超过10分钟，可返回 1 分钟粒度明细数据<br>5min：5 分钟粒度，支持近 60 天内的数据查询，每次查询时间区间不超过3 小时，可返回 5 分钟粒度明细数据</p>
     */
    public $Interval;

    /**
     * @param array $Domains <p>域名列表，最多支持20个域名</p>
     * @param string $StartTime <p>查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间<br>支持近 60 天内的数据查询，每次查询时间区间为 3 小时</p>
     * @param string $EndTime <p>查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间<br>结束时间与起始时间区间最大为 3 小时</p>
     * @param string $Metric <p>指定查询指标，支持:<br>bandwidth：带宽，单位为 bps<br>flux：流量，单位为 byte<br>request：请求数，单位为 次<br>statusCode：状态码，返回 0、2xx、3xx、4xx、5xx 汇总数据，单位为 次<br>2xx：返回 2xx 状态码汇总及各 2 开头状态码数据，单位为 次<br>3xx：返回 3xx 状态码汇总及各 3 开头状态码数据，单位为 次<br>4xx：返回 4xx 状态码汇总及各 4 开头状态码数据，单位为 次<br>5xx：返回 5xx 状态码汇总及各 5 开头状态码数据，单位为 次<br>支持指定具体状态码查询，若未产生过，则返回为空</p>
     * @param array $Districts <p>指定省份查询，不填充表示查询所有省份（注：指定条件查询只支持映射表范围）<br>省份、国家/地区编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">省份编码映射</a></p>
     * @param array $Isps <p>指定运营商查询，不填充表示查询所有运营商（注：指定条件查询只支持映射表范围）<br>运营商编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E5.8C.BA.E5.9F.9F-.2F-.E8.BF.90.E8.90.A5.E5.95.86.E6.98.A0.E5.B0.84.E8.A1.A8">运营商编码映射</a></p>
     * @param string $Protocol <p>指定协议查询，不填充表示查询所有协议<br>all：所有协议<br>http：指定查询 HTTP 对应指标<br>https：指定查询 HTTPS 对应指标</p>
     * @param string $IpProtocol <p>指定IP协议查询，不填充表示查询所有协议<br>all：所有协议<br>ipv4：指定查询 ipv4 对应指标<br>ipv6：指定查询 ipv6 对应指标<br>指定IP协议查询时，不可同时指定省份、运营商查询</p>
     * @param string $Interval <p>时间粒度，支持以下几种模式（默认5min）：<br>min：1 分钟粒度，支持近 60 天内的数据查询，每次查询时间区间不超过10分钟，可返回 1 分钟粒度明细数据<br>5min：5 分钟粒度，支持近 60 天内的数据查询，每次查询时间区间不超过3 小时，可返回 5 分钟粒度明细数据</p>
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Districts",$param) and $param["Districts"] !== null) {
            $this->Districts = $param["Districts"];
        }

        if (array_key_exists("Isps",$param) and $param["Isps"] !== null) {
            $this->Isps = $param["Isps"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
