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
 * DescribeTimingL4Data请求参数结构体
 *
 * @method string getStartTime() 获取RFC3339格式，客户端时间
 * @method void setStartTime(string $StartTime) 设置RFC3339格式，客户端时间
 * @method string getEndTime() 获取RFC3339格式，客户端时间
 * @method void setEndTime(string $EndTime) 设置RFC3339格式，客户端时间
 * @method array getMetricNames() 获取支持的指标：
l4Flow_connections: 访问连接数
l4Flow_flux: 访问总流量
l4Flow_inFlux: 访问入流量
l4Flow_outFlux: 访问出流量
 * @method void setMetricNames(array $MetricNames) 设置支持的指标：
l4Flow_connections: 访问连接数
l4Flow_flux: 访问总流量
l4Flow_inFlux: 访问入流量
l4Flow_outFlux: 访问出流量
 * @method array getZoneIds() 获取站点id列表
 * @method void setZoneIds(array $ZoneIds) 设置站点id列表
 * @method array getInstanceIds() 获取该字段已废弃，请使用ProxyIds字段
 * @method void setInstanceIds(array $InstanceIds) 设置该字段已废弃，请使用ProxyIds字段
 * @method string getProtocol() 获取该字段当前无效
 * @method void setProtocol(string $Protocol) 设置该字段当前无效
 * @method string getInterval() 获取时间间隔，选填{min, 5min, hour, day}
 * @method void setInterval(string $Interval) 设置时间间隔，选填{min, 5min, hour, day}
 * @method string getRuleId() 获取该字段当前无效，请使用Filter筛选
 * @method void setRuleId(string $RuleId) 设置该字段当前无效，请使用Filter筛选
 * @method array getFilters() 获取支持的 Filter：proxyd,ruleId
 * @method void setFilters(array $Filters) 设置支持的 Filter：proxyd,ruleId
 * @method array getProxyIds() 获取四层实例列表
 * @method void setProxyIds(array $ProxyIds) 设置四层实例列表
 * @method string getArea() 获取加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 * @method void setArea(string $Area) 设置加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 */
class DescribeTimingL4DataRequest extends AbstractModel
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
     * @var array 支持的指标：
l4Flow_connections: 访问连接数
l4Flow_flux: 访问总流量
l4Flow_inFlux: 访问入流量
l4Flow_outFlux: 访问出流量
     */
    public $MetricNames;

    /**
     * @var array 站点id列表
     */
    public $ZoneIds;

    /**
     * @var array 该字段已废弃，请使用ProxyIds字段
     */
    public $InstanceIds;

    /**
     * @var string 该字段当前无效
     */
    public $Protocol;

    /**
     * @var string 时间间隔，选填{min, 5min, hour, day}
     */
    public $Interval;

    /**
     * @var string 该字段当前无效，请使用Filter筛选
     */
    public $RuleId;

    /**
     * @var array 支持的 Filter：proxyd,ruleId
     */
    public $Filters;

    /**
     * @var array 四层实例列表
     */
    public $ProxyIds;

    /**
     * @var string 加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
     */
    public $Area;

    /**
     * @param string $StartTime RFC3339格式，客户端时间
     * @param string $EndTime RFC3339格式，客户端时间
     * @param array $MetricNames 支持的指标：
l4Flow_connections: 访问连接数
l4Flow_flux: 访问总流量
l4Flow_inFlux: 访问入流量
l4Flow_outFlux: 访问出流量
     * @param array $ZoneIds 站点id列表
     * @param array $InstanceIds 该字段已废弃，请使用ProxyIds字段
     * @param string $Protocol 该字段当前无效
     * @param string $Interval 时间间隔，选填{min, 5min, hour, day}
     * @param string $RuleId 该字段当前无效，请使用Filter筛选
     * @param array $Filters 支持的 Filter：proxyd,ruleId
     * @param array $ProxyIds 四层实例列表
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

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
