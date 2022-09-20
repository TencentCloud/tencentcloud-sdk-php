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
 * DescribeWebProtectionTopData请求参数结构体
 *
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method string getMetricName() 获取统计指标列表，取值有：
<li>ccRate_requestNum_url：速率限制规则请求次数url分布排行；</li>
<li>ccRate_cipRequestNum_region：速率限制规则请求次数区域客户端ip分布排行；</li>
<li>ccAcl_requestNum_url：自定义规则请求次数url分布排行；</li>
<li>ccAcl_requestNum_cip：自定义规则请求次数客户端ip分布排行；</li>
<li>ccAcl_cipRequestNum_region：自定义规则请求次数客户端区域分布排行。</li>
 * @method void setMetricName(string $MetricName) 设置统计指标列表，取值有：
<li>ccRate_requestNum_url：速率限制规则请求次数url分布排行；</li>
<li>ccRate_cipRequestNum_region：速率限制规则请求次数区域客户端ip分布排行；</li>
<li>ccAcl_requestNum_url：自定义规则请求次数url分布排行；</li>
<li>ccAcl_requestNum_cip：自定义规则请求次数客户端ip分布排行；</li>
<li>ccAcl_cipRequestNum_region：自定义规则请求次数客户端区域分布排行。</li>
 * @method string getInterval() 获取查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
 * @method void setInterval(string $Interval) 设置查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
 * @method array getZoneIds() 获取站点集合，不填默认选择全部站点。
 * @method void setZoneIds(array $ZoneIds) 设置站点集合，不填默认选择全部站点。
 * @method array getDomains() 获取域名集合，不填默认选择全部子域名。
 * @method void setDomains(array $Domains) 设置域名集合，不填默认选择全部子域名。
 * @method integer getLimit() 获取查询前多少个数据，不填默认默认为10， 表示查询前top 10的数据。
 * @method void setLimit(integer $Limit) 设置查询前多少个数据，不填默认默认为10， 表示查询前top 10的数据。
 * @method array getQueryCondition() 获取筛选条件，key可选的值有：
<li>action：执行动作 。</li>
 * @method void setQueryCondition(array $QueryCondition) 设置筛选条件，key可选的值有：
<li>action：执行动作 。</li>
 * @method string getArea() 获取数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
 * @method void setArea(string $Area) 设置数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
 */
class DescribeWebProtectionTopDataRequest extends AbstractModel
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
     * @var string 统计指标列表，取值有：
<li>ccRate_requestNum_url：速率限制规则请求次数url分布排行；</li>
<li>ccRate_cipRequestNum_region：速率限制规则请求次数区域客户端ip分布排行；</li>
<li>ccAcl_requestNum_url：自定义规则请求次数url分布排行；</li>
<li>ccAcl_requestNum_cip：自定义规则请求次数客户端ip分布排行；</li>
<li>ccAcl_cipRequestNum_region：自定义规则请求次数客户端区域分布排行。</li>
     */
    public $MetricName;

    /**
     * @var string 查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
     */
    public $Interval;

    /**
     * @var array 站点集合，不填默认选择全部站点。
     */
    public $ZoneIds;

    /**
     * @var array 域名集合，不填默认选择全部子域名。
     */
    public $Domains;

    /**
     * @var integer 查询前多少个数据，不填默认默认为10， 表示查询前top 10的数据。
     */
    public $Limit;

    /**
     * @var array 筛选条件，key可选的值有：
<li>action：执行动作 。</li>
     */
    public $QueryCondition;

    /**
     * @var string 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
     */
    public $Area;

    /**
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。
     * @param string $MetricName 统计指标列表，取值有：
<li>ccRate_requestNum_url：速率限制规则请求次数url分布排行；</li>
<li>ccRate_cipRequestNum_region：速率限制规则请求次数区域客户端ip分布排行；</li>
<li>ccAcl_requestNum_url：自定义规则请求次数url分布排行；</li>
<li>ccAcl_requestNum_cip：自定义规则请求次数客户端ip分布排行；</li>
<li>ccAcl_cipRequestNum_region：自定义规则请求次数客户端区域分布排行。</li>
     * @param string $Interval 查询时间粒度，取值有：
<li>min：1分钟；</li>
<li>5min：5分钟；</li>
<li>hour：1小时；</li>
<li>day：1天。</li>不填将根据开始时间跟结束时间的间距自动推算粒度，具体为：一小时范围内以min粒度查询，两天范围内以5min粒度查询，七天范围内以hour粒度查询，超过七天以day粒度查询。
     * @param array $ZoneIds 站点集合，不填默认选择全部站点。
     * @param array $Domains 域名集合，不填默认选择全部子域名。
     * @param integer $Limit 查询前多少个数据，不填默认默认为10， 表示查询前top 10的数据。
     * @param array $QueryCondition 筛选条件，key可选的值有：
<li>action：执行动作 。</li>
     * @param string $Area 数据归属地区，取值有：
<li>overseas：全球（除中国大陆地区）数据；</li>
<li>mainland：中国大陆地区数据。</li>不填将根据用户所在地智能选择地区。
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

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QueryCondition",$param) and $param["QueryCondition"] !== null) {
            $this->QueryCondition = [];
            foreach ($param["QueryCondition"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->QueryCondition, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
