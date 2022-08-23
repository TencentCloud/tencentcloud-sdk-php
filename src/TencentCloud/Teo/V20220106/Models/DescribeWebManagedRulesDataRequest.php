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
 * DescribeWebManagedRulesData请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，RFC3339格式。
 * @method void setStartTime(string $StartTime) 设置开始时间，RFC3339格式。
 * @method string getEndTime() 获取结束时间，RFC3339格式。
 * @method void setEndTime(string $EndTime) 设置结束时间，RFC3339格式。
 * @method array getMetricNames() 获取统计指标列表，取值有：
<li>waf_interceptNum ：waf拦截次数 。</li>
 * @method void setMetricNames(array $MetricNames) 设置统计指标列表，取值有：
<li>waf_interceptNum ：waf拦截次数 。</li>
 * @method array getZoneIds() 获取站点id列表，不填默认选择全部站点。
 * @method void setZoneIds(array $ZoneIds) 设置站点id列表，不填默认选择全部站点。
 * @method array getDomains() 获取子域名列表，不填默认选择子域名。
 * @method void setDomains(array $Domains) 设置子域名列表，不填默认选择子域名。
 * @method string getProtocolType() 获取该字段已废弃，请勿传。
 * @method void setProtocolType(string $ProtocolType) 设置该字段已废弃，请勿传。
 * @method string getAttackType() 获取该字段已废弃，请勿传。
 * @method void setAttackType(string $AttackType) 设置该字段已废弃，请勿传。
 * @method string getInterval() 获取查询时间粒度，取值有：
<li>min ：1分钟 ；</li>
<li>5min ：5分钟 ；</li>
<li>hour ：1小时 ；</li>
<li>day ：1天 。</li>
 * @method void setInterval(string $Interval) 设置查询时间粒度，取值有：
<li>min ：1分钟 ；</li>
<li>5min ：5分钟 ；</li>
<li>hour ：1小时 ；</li>
<li>day ：1天 。</li>
 * @method array getQueryCondition() 获取筛选条件，取值有：
<li>action ：执行动作 。</li>
 * @method void setQueryCondition(array $QueryCondition) 设置筛选条件，取值有：
<li>action ：执行动作 。</li>
 * @method string getArea() 获取数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
 * @method void setArea(string $Area) 设置数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
 */
class DescribeWebManagedRulesDataRequest extends AbstractModel
{
    /**
     * @var string 开始时间，RFC3339格式。
     */
    public $StartTime;

    /**
     * @var string 结束时间，RFC3339格式。
     */
    public $EndTime;

    /**
     * @var array 统计指标列表，取值有：
<li>waf_interceptNum ：waf拦截次数 。</li>
     */
    public $MetricNames;

    /**
     * @var array 站点id列表，不填默认选择全部站点。
     */
    public $ZoneIds;

    /**
     * @var array 子域名列表，不填默认选择子域名。
     */
    public $Domains;

    /**
     * @var string 该字段已废弃，请勿传。
     */
    public $ProtocolType;

    /**
     * @var string 该字段已废弃，请勿传。
     */
    public $AttackType;

    /**
     * @var string 查询时间粒度，取值有：
<li>min ：1分钟 ；</li>
<li>5min ：5分钟 ；</li>
<li>hour ：1小时 ；</li>
<li>day ：1天 。</li>
     */
    public $Interval;

    /**
     * @var array 筛选条件，取值有：
<li>action ：执行动作 。</li>
     */
    public $QueryCondition;

    /**
     * @var string 数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
     */
    public $Area;

    /**
     * @param string $StartTime 开始时间，RFC3339格式。
     * @param string $EndTime 结束时间，RFC3339格式。
     * @param array $MetricNames 统计指标列表，取值有：
<li>waf_interceptNum ：waf拦截次数 。</li>
     * @param array $ZoneIds 站点id列表，不填默认选择全部站点。
     * @param array $Domains 子域名列表，不填默认选择子域名。
     * @param string $ProtocolType 该字段已废弃，请勿传。
     * @param string $AttackType 该字段已废弃，请勿传。
     * @param string $Interval 查询时间粒度，取值有：
<li>min ：1分钟 ；</li>
<li>5min ：5分钟 ；</li>
<li>hour ：1小时 ；</li>
<li>day ：1天 。</li>
     * @param array $QueryCondition 筛选条件，取值有：
<li>action ：执行动作 。</li>
     * @param string $Area 数据归属地区，取值有：
<li>overseas ：全球（除中国大陆地区）数据 ；</li>
<li>mainland ：中国大陆地区数据 。</li>不填默认查询overseas。
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

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
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
