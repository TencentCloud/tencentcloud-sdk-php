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
 * DescribeBillingData请求参数结构体
 *
 * @method string getStartTime() 获取<p>查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间<br>根据指定时间粒度参数不同，会进行向前取整，如指定起始时间为 2018-09-04 10:40:00 按小时粒度查询，返回的第一个数据对应时间点为 2018-09-04 10:00:00<br>起始时间与结束时间间隔小于等于 90 天</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间<br>根据指定时间粒度参数不同，会进行向前取整，如指定起始时间为 2018-09-04 10:40:00 按小时粒度查询，返回的第一个数据对应时间点为 2018-09-04 10:00:00<br>起始时间与结束时间间隔小于等于 90 天</p>
 * @method string getEndTime() 获取<p>查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间<br>根据指定时间粒度参数不同，会进行向前取整，如指定结束时间为  2018-09-04 10:40:00 按小时粒度查询时，返回的最后一个数据对应时间点为 2018-09-04 10:00:00<br>起始时间与结束时间间隔小于等于 90 天</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间<br>根据指定时间粒度参数不同，会进行向前取整，如指定结束时间为  2018-09-04 10:40:00 按小时粒度查询时，返回的最后一个数据对应时间点为 2018-09-04 10:00:00<br>起始时间与结束时间间隔小于等于 90 天</p>
 * @method string getInterval() 获取<p>时间粒度，支持模式如下：<br>min：1 分钟粒度，查询区间需要小于等于 24 小时<br>5min：5 分钟粒度，查询区间需要小于等于 31 天(计费数据粒度)<br>hour：1 小时粒度，查询区间需要小于等于 31 天内<br>day：天粒度，查询区间需要大于 31 天</p><p>Area 字段为 overseas 时暂不支持1分钟粒度数据查询</p>
 * @method void setInterval(string $Interval) 设置<p>时间粒度，支持模式如下：<br>min：1 分钟粒度，查询区间需要小于等于 24 小时<br>5min：5 分钟粒度，查询区间需要小于等于 31 天(计费数据粒度)<br>hour：1 小时粒度，查询区间需要小于等于 31 天内<br>day：天粒度，查询区间需要大于 31 天</p><p>Area 字段为 overseas 时暂不支持1分钟粒度数据查询</p>
 * @method string getDomain() 获取<p>指定域名查询计费数据</p>
 * @method void setDomain(string $Domain) 设置<p>指定域名查询计费数据</p>
 * @method integer getProject() 获取<p>指定项目 ID 查询，<a href="https://console.cloud.tencent.com/project">前往查看项目 ID</a><br>若 Domain 参数填充了具体域名信息，则返回该域名的计费数据，而非指定项目计费数据</p>
 * @method void setProject(integer $Project) 设置<p>指定项目 ID 查询，<a href="https://console.cloud.tencent.com/project">前往查看项目 ID</a><br>若 Domain 参数填充了具体域名信息，则返回该域名的计费数据，而非指定项目计费数据</p>
 * @method string getArea() 获取<p>指定加速区域查询计费数据：<br>mainland：中国境内<br>overseas：中国境外<br>不填充时，默认为 mainland</p>
 * @method void setArea(string $Area) 设置<p>指定加速区域查询计费数据：<br>mainland：中国境内<br>overseas：中国境外<br>不填充时，默认为 mainland</p>
 * @method integer getDistrict() 获取<p>Area 为 overseas 时，指定国家/地区查询<br>省份、国家/地区编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84">省份编码映射</a><br>不填充时，查询所有国家/地区</p>
 * @method void setDistrict(integer $District) 设置<p>Area 为 overseas 时，指定国家/地区查询<br>省份、国家/地区编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84">省份编码映射</a><br>不填充时，查询所有国家/地区</p>
 * @method string getMetric() 获取<p>计费统计类型<br>flux：计费流量<br>bandwidth：计费带宽<br>https：https请求数<br>默认为 bandwidth</p>
 * @method void setMetric(string $Metric) 设置<p>计费统计类型<br>flux：计费流量<br>bandwidth：计费带宽<br>https：https请求数<br>默认为 bandwidth</p>
 * @method string getProduct() 获取<p>指定查询的产品数据，可选为cdn或者ecdn，默认为cdn</p>
 * @method void setProduct(string $Product) 设置<p>指定查询的产品数据，可选为cdn或者ecdn，默认为cdn</p>
 * @method string getTimeZone() 获取<p>指定查询时间的时区，默认UTC+08:00</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>指定查询时间的时区，默认UTC+08:00</p>
 */
class DescribeBillingDataRequest extends AbstractModel
{
    /**
     * @var string <p>查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间<br>根据指定时间粒度参数不同，会进行向前取整，如指定起始时间为 2018-09-04 10:40:00 按小时粒度查询，返回的第一个数据对应时间点为 2018-09-04 10:00:00<br>起始时间与结束时间间隔小于等于 90 天</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间<br>根据指定时间粒度参数不同，会进行向前取整，如指定结束时间为  2018-09-04 10:40:00 按小时粒度查询时，返回的最后一个数据对应时间点为 2018-09-04 10:00:00<br>起始时间与结束时间间隔小于等于 90 天</p>
     */
    public $EndTime;

    /**
     * @var string <p>时间粒度，支持模式如下：<br>min：1 分钟粒度，查询区间需要小于等于 24 小时<br>5min：5 分钟粒度，查询区间需要小于等于 31 天(计费数据粒度)<br>hour：1 小时粒度，查询区间需要小于等于 31 天内<br>day：天粒度，查询区间需要大于 31 天</p><p>Area 字段为 overseas 时暂不支持1分钟粒度数据查询</p>
     */
    public $Interval;

    /**
     * @var string <p>指定域名查询计费数据</p>
     */
    public $Domain;

    /**
     * @var integer <p>指定项目 ID 查询，<a href="https://console.cloud.tencent.com/project">前往查看项目 ID</a><br>若 Domain 参数填充了具体域名信息，则返回该域名的计费数据，而非指定项目计费数据</p>
     */
    public $Project;

    /**
     * @var string <p>指定加速区域查询计费数据：<br>mainland：中国境内<br>overseas：中国境外<br>不填充时，默认为 mainland</p>
     */
    public $Area;

    /**
     * @var integer <p>Area 为 overseas 时，指定国家/地区查询<br>省份、国家/地区编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84">省份编码映射</a><br>不填充时，查询所有国家/地区</p>
     */
    public $District;

    /**
     * @var string <p>计费统计类型<br>flux：计费流量<br>bandwidth：计费带宽<br>https：https请求数<br>默认为 bandwidth</p>
     */
    public $Metric;

    /**
     * @var string <p>指定查询的产品数据，可选为cdn或者ecdn，默认为cdn</p>
     */
    public $Product;

    /**
     * @var string <p>指定查询时间的时区，默认UTC+08:00</p>
     */
    public $TimeZone;

    /**
     * @param string $StartTime <p>查询起始时间，如：2018-09-04 10:40:00，返回结果大于等于指定时间<br>根据指定时间粒度参数不同，会进行向前取整，如指定起始时间为 2018-09-04 10:40:00 按小时粒度查询，返回的第一个数据对应时间点为 2018-09-04 10:00:00<br>起始时间与结束时间间隔小于等于 90 天</p>
     * @param string $EndTime <p>查询结束时间，如：2018-09-04 10:40:00，返回结果小于等于指定时间<br>根据指定时间粒度参数不同，会进行向前取整，如指定结束时间为  2018-09-04 10:40:00 按小时粒度查询时，返回的最后一个数据对应时间点为 2018-09-04 10:00:00<br>起始时间与结束时间间隔小于等于 90 天</p>
     * @param string $Interval <p>时间粒度，支持模式如下：<br>min：1 分钟粒度，查询区间需要小于等于 24 小时<br>5min：5 分钟粒度，查询区间需要小于等于 31 天(计费数据粒度)<br>hour：1 小时粒度，查询区间需要小于等于 31 天内<br>day：天粒度，查询区间需要大于 31 天</p><p>Area 字段为 overseas 时暂不支持1分钟粒度数据查询</p>
     * @param string $Domain <p>指定域名查询计费数据</p>
     * @param integer $Project <p>指定项目 ID 查询，<a href="https://console.cloud.tencent.com/project">前往查看项目 ID</a><br>若 Domain 参数填充了具体域名信息，则返回该域名的计费数据，而非指定项目计费数据</p>
     * @param string $Area <p>指定加速区域查询计费数据：<br>mainland：中国境内<br>overseas：中国境外<br>不填充时，默认为 mainland</p>
     * @param integer $District <p>Area 为 overseas 时，指定国家/地区查询<br>省份、国家/地区编码可以查看 <a href="https://cloud.tencent.com/document/product/228/6316#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84">省份编码映射</a><br>不填充时，查询所有国家/地区</p>
     * @param string $Metric <p>计费统计类型<br>flux：计费流量<br>bandwidth：计费带宽<br>https：https请求数<br>默认为 bandwidth</p>
     * @param string $Product <p>指定查询的产品数据，可选为cdn或者ecdn，默认为cdn</p>
     * @param string $TimeZone <p>指定查询时间的时区，默认UTC+08:00</p>
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

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = $param["Project"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
