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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopData请求参数结构体
 *
 * @method string getStartTime() 获取查询起始日期：yyyy-MM-dd HH:mm:ss
仅支持按天粒度的数据查询，取入参中的天信息作为起始日期
返回大于等于起始日期当天 00:00:00 点产生的数据，如 StartTime为2018-09-04 10:40:00，返回数据的起始时间为2018-09-04 00:00:00
仅支持 90 天内数据查询
 * @method void setStartTime(string $StartTime) 设置查询起始日期：yyyy-MM-dd HH:mm:ss
仅支持按天粒度的数据查询，取入参中的天信息作为起始日期
返回大于等于起始日期当天 00:00:00 点产生的数据，如 StartTime为2018-09-04 10:40:00，返回数据的起始时间为2018-09-04 00:00:00
仅支持 90 天内数据查询
 * @method string getEndTime() 获取查询结束日期：yyyy-MM-dd HH:mm:ss
仅支持按天粒度的数据查询，取入参中的天信息作为结束日期
返回小于等于结束日期当天 23:59:59 产生的数据，如EndTime为2018-09-05 22:40:00，返回数据的结束时间为2018-09-05 23:59:59
EndTime 需要大于等于 StartTime
 * @method void setEndTime(string $EndTime) 设置查询结束日期：yyyy-MM-dd HH:mm:ss
仅支持按天粒度的数据查询，取入参中的天信息作为结束日期
返回小于等于结束日期当天 23:59:59 产生的数据，如EndTime为2018-09-05 22:40:00，返回数据的结束时间为2018-09-05 23:59:59
EndTime 需要大于等于 StartTime
 * @method string getMetric() 获取排序对象，支持以下几种形式：
ip、ua_device、ua_browser、ua_os、referer
 * @method void setMetric(string $Metric) 设置排序对象，支持以下几种形式：
ip、ua_device、ua_browser、ua_os、referer
 * @method string getFilter() 获取排序使用的指标名称：
flux：Metric 为 host 时指代访问流量
request：Metric 为 host 时指代访问请求数
 * @method void setFilter(string $Filter) 设置排序使用的指标名称：
flux：Metric 为 host 时指代访问流量
request：Metric 为 host 时指代访问请求数
 * @method array getDomains() 获取指定查询域名列表，最多可一次性查询 30 个加速域名明细
 * @method void setDomains(array $Domains) 设置指定查询域名列表，最多可一次性查询 30 个加速域名明细
 * @method integer getProject() 获取未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
 * @method void setProject(integer $Project) 设置未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
 * @method boolean getDetail() 获取是否详细显示每个域名的的具体数值
 * @method void setDetail(boolean $Detail) 设置是否详细显示每个域名的的具体数值
 * @method string getArea() 获取指定服务地域查询，不填充表示查询中国境内 CDN 数据
mainland：指定查询中国境内 CDN 数据
overseas：指定查询中国境外 CDN 数据
 * @method void setArea(string $Area) 设置指定服务地域查询，不填充表示查询中国境内 CDN 数据
mainland：指定查询中国境内 CDN 数据
overseas：指定查询中国境外 CDN 数据
 * @method string getProduct() 获取指定查询的产品数据，目前仅可使用cdn
 * @method void setProduct(string $Product) 设置指定查询的产品数据，目前仅可使用cdn
 */
class DescribeTopDataRequest extends AbstractModel
{
    /**
     * @var string 查询起始日期：yyyy-MM-dd HH:mm:ss
仅支持按天粒度的数据查询，取入参中的天信息作为起始日期
返回大于等于起始日期当天 00:00:00 点产生的数据，如 StartTime为2018-09-04 10:40:00，返回数据的起始时间为2018-09-04 00:00:00
仅支持 90 天内数据查询
     */
    public $StartTime;

    /**
     * @var string 查询结束日期：yyyy-MM-dd HH:mm:ss
仅支持按天粒度的数据查询，取入参中的天信息作为结束日期
返回小于等于结束日期当天 23:59:59 产生的数据，如EndTime为2018-09-05 22:40:00，返回数据的结束时间为2018-09-05 23:59:59
EndTime 需要大于等于 StartTime
     */
    public $EndTime;

    /**
     * @var string 排序对象，支持以下几种形式：
ip、ua_device、ua_browser、ua_os、referer
     */
    public $Metric;

    /**
     * @var string 排序使用的指标名称：
flux：Metric 为 host 时指代访问流量
request：Metric 为 host 时指代访问请求数
     */
    public $Filter;

    /**
     * @var array 指定查询域名列表，最多可一次性查询 30 个加速域名明细
     */
    public $Domains;

    /**
     * @var integer 未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
     */
    public $Project;

    /**
     * @var boolean 是否详细显示每个域名的的具体数值
     */
    public $Detail;

    /**
     * @var string 指定服务地域查询，不填充表示查询中国境内 CDN 数据
mainland：指定查询中国境内 CDN 数据
overseas：指定查询中国境外 CDN 数据
     */
    public $Area;

    /**
     * @var string 指定查询的产品数据，目前仅可使用cdn
     */
    public $Product;

    /**
     * @param string $StartTime 查询起始日期：yyyy-MM-dd HH:mm:ss
仅支持按天粒度的数据查询，取入参中的天信息作为起始日期
返回大于等于起始日期当天 00:00:00 点产生的数据，如 StartTime为2018-09-04 10:40:00，返回数据的起始时间为2018-09-04 00:00:00
仅支持 90 天内数据查询
     * @param string $EndTime 查询结束日期：yyyy-MM-dd HH:mm:ss
仅支持按天粒度的数据查询，取入参中的天信息作为结束日期
返回小于等于结束日期当天 23:59:59 产生的数据，如EndTime为2018-09-05 22:40:00，返回数据的结束时间为2018-09-05 23:59:59
EndTime 需要大于等于 StartTime
     * @param string $Metric 排序对象，支持以下几种形式：
ip、ua_device、ua_browser、ua_os、referer
     * @param string $Filter 排序使用的指标名称：
flux：Metric 为 host 时指代访问流量
request：Metric 为 host 时指代访问请求数
     * @param array $Domains 指定查询域名列表，最多可一次性查询 30 个加速域名明细
     * @param integer $Project 未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
     * @param boolean $Detail 是否详细显示每个域名的的具体数值
     * @param string $Area 指定服务地域查询，不填充表示查询中国境内 CDN 数据
mainland：指定查询中国境内 CDN 数据
overseas：指定查询中国境外 CDN 数据
     * @param string $Product 指定查询的产品数据，目前仅可使用cdn
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
