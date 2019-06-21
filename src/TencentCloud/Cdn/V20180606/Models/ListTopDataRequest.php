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
 * @method string getStartTime() 获取查询起始日期，如：2018-09-09 00:00:00
 * @method void setStartTime(string $StartTime) 设置查询起始日期，如：2018-09-09 00:00:00
 * @method string getEndTime() 获取查询结束日期，如：2018-09-10 00:00:00
 * @method void setEndTime(string $EndTime) 设置查询结束日期，如：2018-09-10 00:00:00
 * @method string getMetric() 获取排序对象，支持以下几种形式：
Url：访问 URL 排序，带参数统计，支持的 Filter 为 flux、request
Path：访问 URL 排序，不带参数统计，支持的 Filter 为 flux、request（白名单功能）
District：省份排序，支持的 Filter 为 flux、request
Isp：运营商排序，支持的 Filter 为 flux、request
Host：域名访问数据排序，支持的 Filter 为：flux, request, bandwidth, fluxHitRate, 2XX, 3XX, 4XX, 5XX，具体状态码统计
originHost：域名回源数据排序，支持的 Filter 为 flux， request，bandwidth，origin_2XX，origin_3XX，oringin_4XX，origin_5XX，具体回源状态码统计
 * @method void setMetric(string $Metric) 设置排序对象，支持以下几种形式：
Url：访问 URL 排序，带参数统计，支持的 Filter 为 flux、request
Path：访问 URL 排序，不带参数统计，支持的 Filter 为 flux、request（白名单功能）
District：省份排序，支持的 Filter 为 flux、request
Isp：运营商排序，支持的 Filter 为 flux、request
Host：域名访问数据排序，支持的 Filter 为：flux, request, bandwidth, fluxHitRate, 2XX, 3XX, 4XX, 5XX，具体状态码统计
originHost：域名回源数据排序，支持的 Filter 为 flux， request，bandwidth，origin_2XX，origin_3XX，oringin_4XX，origin_5XX，具体回源状态码统计
 * @method string getFilter() 获取排序使用的指标名称：
flux：Metric 为 host 时指代访问流量，originHost 时指代回源流量
bandwidth：Metric 为 host 时指代访问带宽，originHost 时指代回源带宽
request：Metric 为 host 时指代访问请求数，originHost 时指代回源请求数
fluxHitRate：平均流量命中率
2XX：访问 2XX 状态码
3XX：访问 3XX 状态码
4XX：访问 4XX 状态码
5XX：访问 5XX 状态码
origin_2XX：回源 2XX 状态码
origin_3XX：回源 3XX 状态码
origin_4XX：回源 4XX 状态码
origin_5XX：回源 5XX 状态码
statusCode：指定访问状态码统计，在 Code 参数中填充指定状态码
OriginStatusCode：指定回源状态码统计，在 Code 参数中填充指定状态码
 * @method void setFilter(string $Filter) 设置排序使用的指标名称：
flux：Metric 为 host 时指代访问流量，originHost 时指代回源流量
bandwidth：Metric 为 host 时指代访问带宽，originHost 时指代回源带宽
request：Metric 为 host 时指代访问请求数，originHost 时指代回源请求数
fluxHitRate：平均流量命中率
2XX：访问 2XX 状态码
3XX：访问 3XX 状态码
4XX：访问 4XX 状态码
5XX：访问 5XX 状态码
origin_2XX：回源 2XX 状态码
origin_3XX：回源 3XX 状态码
origin_4XX：回源 4XX 状态码
origin_5XX：回源 5XX 状态码
statusCode：指定访问状态码统计，在 Code 参数中填充指定状态码
OriginStatusCode：指定回源状态码统计，在 Code 参数中填充指定状态码
 * @method array getDomains() 获取指定查询域名列表，最多可一次性查询 30 个加速域名明细
 * @method void setDomains(array $Domains) 设置指定查询域名列表，最多可一次性查询 30 个加速域名明细
 * @method integer getProject() 获取指定要查询的项目 ID，[前往查看项目 ID](https://console.cloud.tencent.com/project)
未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
 * @method void setProject(integer $Project) 设置指定要查询的项目 ID，[前往查看项目 ID](https://console.cloud.tencent.com/project)
未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
 * @method boolean getDetail() 获取多域名查询时，默认（false)返回所有域名汇总排序结果
Metric 为 Url、Path、District、Isp，Filter 为 flux、reqeust 时，可设置为 true，返回每一个 Domain 的排序数据
 * @method void setDetail(boolean $Detail) 设置多域名查询时，默认（false)返回所有域名汇总排序结果
Metric 为 Url、Path、District、Isp，Filter 为 flux、reqeust 时，可设置为 true，返回每一个 Domain 的排序数据
 * @method string getCode() 获取Filter 为 statusCode、OriginStatusCode 时，填充指定状态码查询排序结果
 * @method void setCode(string $Code) 设置Filter 为 statusCode、OriginStatusCode 时，填充指定状态码查询排序结果
 */

/**
 *ListTopData请求参数结构体
 */
class ListTopDataRequest extends AbstractModel
{
    /**
     * @var string 查询起始日期，如：2018-09-09 00:00:00
     */
    public $StartTime;

    /**
     * @var string 查询结束日期，如：2018-09-10 00:00:00
     */
    public $EndTime;

    /**
     * @var string 排序对象，支持以下几种形式：
Url：访问 URL 排序，带参数统计，支持的 Filter 为 flux、request
Path：访问 URL 排序，不带参数统计，支持的 Filter 为 flux、request（白名单功能）
District：省份排序，支持的 Filter 为 flux、request
Isp：运营商排序，支持的 Filter 为 flux、request
Host：域名访问数据排序，支持的 Filter 为：flux, request, bandwidth, fluxHitRate, 2XX, 3XX, 4XX, 5XX，具体状态码统计
originHost：域名回源数据排序，支持的 Filter 为 flux， request，bandwidth，origin_2XX，origin_3XX，oringin_4XX，origin_5XX，具体回源状态码统计
     */
    public $Metric;

    /**
     * @var string 排序使用的指标名称：
flux：Metric 为 host 时指代访问流量，originHost 时指代回源流量
bandwidth：Metric 为 host 时指代访问带宽，originHost 时指代回源带宽
request：Metric 为 host 时指代访问请求数，originHost 时指代回源请求数
fluxHitRate：平均流量命中率
2XX：访问 2XX 状态码
3XX：访问 3XX 状态码
4XX：访问 4XX 状态码
5XX：访问 5XX 状态码
origin_2XX：回源 2XX 状态码
origin_3XX：回源 3XX 状态码
origin_4XX：回源 4XX 状态码
origin_5XX：回源 5XX 状态码
statusCode：指定访问状态码统计，在 Code 参数中填充指定状态码
OriginStatusCode：指定回源状态码统计，在 Code 参数中填充指定状态码
     */
    public $Filter;

    /**
     * @var array 指定查询域名列表，最多可一次性查询 30 个加速域名明细
     */
    public $Domains;

    /**
     * @var integer 指定要查询的项目 ID，[前往查看项目 ID](https://console.cloud.tencent.com/project)
未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
     */
    public $Project;

    /**
     * @var boolean 多域名查询时，默认（false)返回所有域名汇总排序结果
Metric 为 Url、Path、District、Isp，Filter 为 flux、reqeust 时，可设置为 true，返回每一个 Domain 的排序数据
     */
    public $Detail;

    /**
     * @var string Filter 为 statusCode、OriginStatusCode 时，填充指定状态码查询排序结果
     */
    public $Code;
    /**
     * @param string $StartTime 查询起始日期，如：2018-09-09 00:00:00
     * @param string $EndTime 查询结束日期，如：2018-09-10 00:00:00
     * @param string $Metric 排序对象，支持以下几种形式：
Url：访问 URL 排序，带参数统计，支持的 Filter 为 flux、request
Path：访问 URL 排序，不带参数统计，支持的 Filter 为 flux、request（白名单功能）
District：省份排序，支持的 Filter 为 flux、request
Isp：运营商排序，支持的 Filter 为 flux、request
Host：域名访问数据排序，支持的 Filter 为：flux, request, bandwidth, fluxHitRate, 2XX, 3XX, 4XX, 5XX，具体状态码统计
originHost：域名回源数据排序，支持的 Filter 为 flux， request，bandwidth，origin_2XX，origin_3XX，oringin_4XX，origin_5XX，具体回源状态码统计
     * @param string $Filter 排序使用的指标名称：
flux：Metric 为 host 时指代访问流量，originHost 时指代回源流量
bandwidth：Metric 为 host 时指代访问带宽，originHost 时指代回源带宽
request：Metric 为 host 时指代访问请求数，originHost 时指代回源请求数
fluxHitRate：平均流量命中率
2XX：访问 2XX 状态码
3XX：访问 3XX 状态码
4XX：访问 4XX 状态码
5XX：访问 5XX 状态码
origin_2XX：回源 2XX 状态码
origin_3XX：回源 3XX 状态码
origin_4XX：回源 4XX 状态码
origin_5XX：回源 5XX 状态码
statusCode：指定访问状态码统计，在 Code 参数中填充指定状态码
OriginStatusCode：指定回源状态码统计，在 Code 参数中填充指定状态码
     * @param array $Domains 指定查询域名列表，最多可一次性查询 30 个加速域名明细
     * @param integer $Project 指定要查询的项目 ID，[前往查看项目 ID](https://console.cloud.tencent.com/project)
未填充域名情况下，指定项目查询，若填充了具体域名信息，以域名为主
     * @param boolean $Detail 多域名查询时，默认（false)返回所有域名汇总排序结果
Metric 为 Url、Path、District、Isp，Filter 为 flux、reqeust 时，可设置为 true，返回每一个 Domain 的排序数据
     * @param string $Code Filter 为 statusCode、OriginStatusCode 时，填充指定状态码查询排序结果
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
