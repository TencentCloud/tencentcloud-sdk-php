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
 * DescribeTimingL4Data请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method array getMetricNames() 获取查询指标，取值有：
<li>l4Flow_connections: 访问连接数；</li>
<li>l4Flow_flux: 访问总流量；</li>
<li>l4Flow_inFlux: 访问入流量；</li>
<li>l4Flow_outFlux: 访问出流量；</li>
<li> l4Flow_outPkt: 访问出包量。</li>
 * @method void setMetricNames(array $MetricNames) 设置查询指标，取值有：
<li>l4Flow_connections: 访问连接数；</li>
<li>l4Flow_flux: 访问总流量；</li>
<li>l4Flow_inFlux: 访问入流量；</li>
<li>l4Flow_outFlux: 访问出流量；</li>
<li> l4Flow_outPkt: 访问出包量。</li>
 * @method array getZoneIds() 获取站点集合。
若不填写，默认选择全部站点，且最多只能查询近30天的数据；
若填写，则可查询站点绑定套餐支持的<a href="https://cloud.tencent.com/document/product/1552/77380#edgeone-.E5.A5.97.E9.A4.90">数据分析最大查询范围</a>。
 * @method void setZoneIds(array $ZoneIds) 设置站点集合。
若不填写，默认选择全部站点，且最多只能查询近30天的数据；
若填写，则可查询站点绑定套餐支持的<a href="https://cloud.tencent.com/document/product/1552/77380#edgeone-.E5.A5.97.E9.A4.90">数据分析最大查询范围</a>。
 * @method array getProxyIds() 获取四层实例列表, 不填表示选择全部实例。
 * @method void setProxyIds(array $ProxyIds) 设置四层实例列表, 不填表示选择全部实例。
 * @method string getInterval() 获取查询时间粒度，取值有：
<li>min: 1分钟 ；</li>
<li>5min: 5分钟 ；</li>
<li>hour: 1小时 ；</li>
<li>day: 1天 。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
 * @method void setInterval(string $Interval) 设置查询时间粒度，取值有：
<li>min: 1分钟 ；</li>
<li>5min: 5分钟 ；</li>
<li>hour: 1小时 ；</li>
<li>day: 1天 。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
 * @method array getFilters() 获取过滤条件，详细的过滤条件Key值如下：
<li>ruleId<br>   按照【<strong>转发规则ID</strong>】进行过滤。</li>
<li>proxyId<br>   按照【<strong>四层代理实例ID</strong>】进行过滤。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，详细的过滤条件Key值如下：
<li>ruleId<br>   按照【<strong>转发规则ID</strong>】进行过滤。</li>
<li>proxyId<br>   按照【<strong>四层代理实例ID</strong>】进行过滤。</li>
 * @method string getArea() 获取数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
 * @method void setArea(string $Area) 设置数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
 */
class DescribeTimingL4DataRequest extends AbstractModel
{
    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var array 查询指标，取值有：
<li>l4Flow_connections: 访问连接数；</li>
<li>l4Flow_flux: 访问总流量；</li>
<li>l4Flow_inFlux: 访问入流量；</li>
<li>l4Flow_outFlux: 访问出流量；</li>
<li> l4Flow_outPkt: 访问出包量。</li>
     */
    public $MetricNames;

    /**
     * @var array 站点集合。
若不填写，默认选择全部站点，且最多只能查询近30天的数据；
若填写，则可查询站点绑定套餐支持的<a href="https://cloud.tencent.com/document/product/1552/77380#edgeone-.E5.A5.97.E9.A4.90">数据分析最大查询范围</a>。
     */
    public $ZoneIds;

    /**
     * @var array 四层实例列表, 不填表示选择全部实例。
     */
    public $ProxyIds;

    /**
     * @var string 查询时间粒度，取值有：
<li>min: 1分钟 ；</li>
<li>5min: 5分钟 ；</li>
<li>hour: 1小时 ；</li>
<li>day: 1天 。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
     */
    public $Interval;

    /**
     * @var array 过滤条件，详细的过滤条件Key值如下：
<li>ruleId<br>   按照【<strong>转发规则ID</strong>】进行过滤。</li>
<li>proxyId<br>   按照【<strong>四层代理实例ID</strong>】进行过滤。</li>
     */
    public $Filters;

    /**
     * @var string 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
     */
    public $Area;

    /**
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。
     * @param array $MetricNames 查询指标，取值有：
<li>l4Flow_connections: 访问连接数；</li>
<li>l4Flow_flux: 访问总流量；</li>
<li>l4Flow_inFlux: 访问入流量；</li>
<li>l4Flow_outFlux: 访问出流量；</li>
<li> l4Flow_outPkt: 访问出包量。</li>
     * @param array $ZoneIds 站点集合。
若不填写，默认选择全部站点，且最多只能查询近30天的数据；
若填写，则可查询站点绑定套餐支持的<a href="https://cloud.tencent.com/document/product/1552/77380#edgeone-.E5.A5.97.E9.A4.90">数据分析最大查询范围</a>。
     * @param array $ProxyIds 四层实例列表, 不填表示选择全部实例。
     * @param string $Interval 查询时间粒度，取值有：
<li>min: 1分钟 ；</li>
<li>5min: 5分钟 ；</li>
<li>hour: 1小时 ；</li>
<li>day: 1天 。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：1小时范围内以min粒度查询，2天范围内以5min粒度查询，7天范围内以hour粒度查询，超过7天以day粒度查询。
     * @param array $Filters 过滤条件，详细的过滤条件Key值如下：
<li>ruleId<br>   按照【<strong>转发规则ID</strong>】进行过滤。</li>
<li>proxyId<br>   按照【<strong>四层代理实例ID</strong>】进行过滤。</li>
     * @param string $Area 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据；</li>
<li>global：全球数据。</li>不填默认取值为global。
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

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
