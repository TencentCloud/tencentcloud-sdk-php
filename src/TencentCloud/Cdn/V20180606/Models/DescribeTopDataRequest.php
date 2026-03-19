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
 * DescribeTopData请求参数结构体
 *
 * @method string getStartTime() 获取<p>查询起始日期：yyyy-MM-dd<br>仅支持按天粒度的数据查询，取入参中的天信息作为起始日期<br>返回大于等于起始日期当天 00:00:00 点产生的数据，如 StartTime为2018-09-04，返回数据的起始时间为2018-09-04 00:00:00<br>仅支持 90 天内数据查询</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询起始日期：yyyy-MM-dd<br>仅支持按天粒度的数据查询，取入参中的天信息作为起始日期<br>返回大于等于起始日期当天 00:00:00 点产生的数据，如 StartTime为2018-09-04，返回数据的起始时间为2018-09-04 00:00:00<br>仅支持 90 天内数据查询</p>
 * @method string getEndTime() 获取<p>查询结束日期：yyyy-MM-dd<br>仅支持按天粒度的数据查询，取入参中的天信息作为结束日期<br>返回小于等于结束日期当天 23:59:59 产生的数据，如EndTime为2018-09-05，返回数据的结束时间为2018-09-05 23:59:59<br>EndTime 需要大于等于 StartTime</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束日期：yyyy-MM-dd<br>仅支持按天粒度的数据查询，取入参中的天信息作为结束日期<br>返回小于等于结束日期当天 23:59:59 产生的数据，如EndTime为2018-09-05，返回数据的结束时间为2018-09-05 23:59:59<br>EndTime 需要大于等于 StartTime</p>
 * @method string getMetric() 获取<p>排序对象，支持以下几种形式：<br>ip、ua_device、ua_browser、ua_os、referer</p>
 * @method void setMetric(string $Metric) 设置<p>排序对象，支持以下几种形式：<br>ip、ua_device、ua_browser、ua_os、referer</p>
 * @method string getFilter() 获取<p>排序使用的指标名称：<br>flux：Metric 为 host 时指代访问流量<br>request：Metric 为 host 时指代访问请求数</p>
 * @method void setFilter(string $Filter) 设置<p>排序使用的指标名称：<br>flux：Metric 为 host 时指代访问流量<br>request：Metric 为 host 时指代访问请求数</p>
 * @method array getDomains() 获取<p>指定查询域名列表，最多可一次性查询 30 个加速域名明细</p>
 * @method void setDomains(array $Domains) 设置<p>指定查询域名列表，最多可一次性查询 30 个加速域名明细</p>
 * @method integer getProject() 获取<p>未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主</p>
 * @method void setProject(integer $Project) 设置<p>未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主</p>
 * @method boolean getDetail() 获取<p>是否详细显示每个域名的的具体数值</p>
 * @method void setDetail(boolean $Detail) 设置<p>是否详细显示每个域名的的具体数值</p>
 * @method string getArea() 获取<p>指定服务地域查询，不填充表示查询中国境内 CDN 数据<br>mainland：指定查询中国境内 CDN 数据<br>overseas：指定查询中国境外 CDN 数据</p>
 * @method void setArea(string $Area) 设置<p>指定服务地域查询，不填充表示查询中国境内 CDN 数据<br>mainland：指定查询中国境内 CDN 数据<br>overseas：指定查询中国境外 CDN 数据</p>
 * @method string getProduct() 获取<p>指定查询的产品数据，目前仅可使用cdn</p>
 * @method void setProduct(string $Product) 设置<p>指定查询的产品数据，目前仅可使用cdn</p>
 */
class DescribeTopDataRequest extends AbstractModel
{
    /**
     * @var string <p>查询起始日期：yyyy-MM-dd<br>仅支持按天粒度的数据查询，取入参中的天信息作为起始日期<br>返回大于等于起始日期当天 00:00:00 点产生的数据，如 StartTime为2018-09-04，返回数据的起始时间为2018-09-04 00:00:00<br>仅支持 90 天内数据查询</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束日期：yyyy-MM-dd<br>仅支持按天粒度的数据查询，取入参中的天信息作为结束日期<br>返回小于等于结束日期当天 23:59:59 产生的数据，如EndTime为2018-09-05，返回数据的结束时间为2018-09-05 23:59:59<br>EndTime 需要大于等于 StartTime</p>
     */
    public $EndTime;

    /**
     * @var string <p>排序对象，支持以下几种形式：<br>ip、ua_device、ua_browser、ua_os、referer</p>
     */
    public $Metric;

    /**
     * @var string <p>排序使用的指标名称：<br>flux：Metric 为 host 时指代访问流量<br>request：Metric 为 host 时指代访问请求数</p>
     */
    public $Filter;

    /**
     * @var array <p>指定查询域名列表，最多可一次性查询 30 个加速域名明细</p>
     */
    public $Domains;

    /**
     * @var integer <p>未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主</p>
     */
    public $Project;

    /**
     * @var boolean <p>是否详细显示每个域名的的具体数值</p>
     */
    public $Detail;

    /**
     * @var string <p>指定服务地域查询，不填充表示查询中国境内 CDN 数据<br>mainland：指定查询中国境内 CDN 数据<br>overseas：指定查询中国境外 CDN 数据</p>
     */
    public $Area;

    /**
     * @var string <p>指定查询的产品数据，目前仅可使用cdn</p>
     */
    public $Product;

    /**
     * @param string $StartTime <p>查询起始日期：yyyy-MM-dd<br>仅支持按天粒度的数据查询，取入参中的天信息作为起始日期<br>返回大于等于起始日期当天 00:00:00 点产生的数据，如 StartTime为2018-09-04，返回数据的起始时间为2018-09-04 00:00:00<br>仅支持 90 天内数据查询</p>
     * @param string $EndTime <p>查询结束日期：yyyy-MM-dd<br>仅支持按天粒度的数据查询，取入参中的天信息作为结束日期<br>返回小于等于结束日期当天 23:59:59 产生的数据，如EndTime为2018-09-05，返回数据的结束时间为2018-09-05 23:59:59<br>EndTime 需要大于等于 StartTime</p>
     * @param string $Metric <p>排序对象，支持以下几种形式：<br>ip、ua_device、ua_browser、ua_os、referer</p>
     * @param string $Filter <p>排序使用的指标名称：<br>flux：Metric 为 host 时指代访问流量<br>request：Metric 为 host 时指代访问请求数</p>
     * @param array $Domains <p>指定查询域名列表，最多可一次性查询 30 个加速域名明细</p>
     * @param integer $Project <p>未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主</p>
     * @param boolean $Detail <p>是否详细显示每个域名的的具体数值</p>
     * @param string $Area <p>指定服务地域查询，不填充表示查询中国境内 CDN 数据<br>mainland：指定查询中国境内 CDN 数据<br>overseas：指定查询中国境外 CDN 数据</p>
     * @param string $Product <p>指定查询的产品数据，目前仅可使用cdn</p>
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

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = $param["Project"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
