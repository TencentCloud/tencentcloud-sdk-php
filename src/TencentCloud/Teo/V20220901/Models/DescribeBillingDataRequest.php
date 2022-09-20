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
 * DescribeBillingData请求参数结构体
 *
 * @method string getStartTime() 获取起始时间。
 * @method void setStartTime(string $StartTime) 设置起始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method string getInterval() 获取时间粒度, 支持指定以下几种粒度：
<ul>
<li>min：1分钟粒度；</li>
<li>5min：5分钟粒度；</li>
<li>hour：1小时粒度；</li>
<li>day：天粒度；</li>
</ul>
 * @method void setInterval(string $Interval) 设置时间粒度, 支持指定以下几种粒度：
<ul>
<li>min：1分钟粒度；</li>
<li>5min：5分钟粒度；</li>
<li>hour：1小时粒度；</li>
<li>day：天粒度；</li>
</ul>
 * @method string getMetricName() 获取指标名,支持:
<ul>
<li>acc_flux: 内容加速流量用量；</li>
<li>quic_request: QUIC 请求数用量；</li>
<li>sec_flux: 安全流量用量；</li>
<li>sec_request_clean: 安全干净流量请求数；</li>
</ul>
 * @method void setMetricName(string $MetricName) 设置指标名,支持:
<ul>
<li>acc_flux: 内容加速流量用量；</li>
<li>quic_request: QUIC 请求数用量；</li>
<li>sec_flux: 安全流量用量；</li>
<li>sec_request_clean: 安全干净流量请求数；</li>
</ul>
 * @method array getFilters() 获取筛选条件. 支持:
<ul>
<li>zone: 站点级数据；</li>
<li>plan: 套餐级数据；</li>
<li>service: l4 / l7分别筛选四七层数据；</li>
<li>tagKey: 标签Key；</li>
<li>tagValue: 标签Value。</li>
</ul>
 * @method void setFilters(array $Filters) 设置筛选条件. 支持:
<ul>
<li>zone: 站点级数据；</li>
<li>plan: 套餐级数据；</li>
<li>service: l4 / l7分别筛选四七层数据；</li>
<li>tagKey: 标签Key；</li>
<li>tagValue: 标签Value。</li>
</ul>
 */
class DescribeBillingDataRequest extends AbstractModel
{
    /**
     * @var string 起始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var string 时间粒度, 支持指定以下几种粒度：
<ul>
<li>min：1分钟粒度；</li>
<li>5min：5分钟粒度；</li>
<li>hour：1小时粒度；</li>
<li>day：天粒度；</li>
</ul>
     */
    public $Interval;

    /**
     * @var string 指标名,支持:
<ul>
<li>acc_flux: 内容加速流量用量；</li>
<li>quic_request: QUIC 请求数用量；</li>
<li>sec_flux: 安全流量用量；</li>
<li>sec_request_clean: 安全干净流量请求数；</li>
</ul>
     */
    public $MetricName;

    /**
     * @var array 筛选条件. 支持:
<ul>
<li>zone: 站点级数据；</li>
<li>plan: 套餐级数据；</li>
<li>service: l4 / l7分别筛选四七层数据；</li>
<li>tagKey: 标签Key；</li>
<li>tagValue: 标签Value。</li>
</ul>
     */
    public $Filters;

    /**
     * @param string $StartTime 起始时间。
     * @param string $EndTime 结束时间。
     * @param string $Interval 时间粒度, 支持指定以下几种粒度：
<ul>
<li>min：1分钟粒度；</li>
<li>5min：5分钟粒度；</li>
<li>hour：1小时粒度；</li>
<li>day：天粒度；</li>
</ul>
     * @param string $MetricName 指标名,支持:
<ul>
<li>acc_flux: 内容加速流量用量；</li>
<li>quic_request: QUIC 请求数用量；</li>
<li>sec_flux: 安全流量用量；</li>
<li>sec_request_clean: 安全干净流量请求数；</li>
</ul>
     * @param array $Filters 筛选条件. 支持:
<ul>
<li>zone: 站点级数据；</li>
<li>plan: 套餐级数据；</li>
<li>service: l4 / l7分别筛选四七层数据；</li>
<li>tagKey: 标签Key；</li>
<li>tagValue: 标签Value。</li>
</ul>
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

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new BillingDataFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
