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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOverviewCCTrend请求参数结构体
 *
 * @method integer getPeriod() 获取统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
 * @method void setPeriod(integer $Period) 设置统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
 * @method string getStartTime() 获取统计开始时间
 * @method void setStartTime(string $StartTime) 设置统计开始时间
 * @method string getEndTime() 获取统计结束时间
 * @method void setEndTime(string $EndTime) 设置统计结束时间
 * @method string getMetricName() 获取指标，取值[inqps(总请求峰值，dropqps(攻击请求峰值))，incount(请求次数), dropcount(攻击次数)]
 * @method void setMetricName(string $MetricName) 设置指标，取值[inqps(总请求峰值，dropqps(攻击请求峰值))，incount(请求次数), dropcount(攻击次数)]
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp-multip表示共享包；basic表示DDoS基础防护）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp-multip表示共享包；basic表示DDoS基础防护）
 * @method array getIpList() 获取资源的IP
 * @method void setIpList(array $IpList) 设置资源的IP
 * @method string getId() 获取资源实例ID
 * @method void setId(string $Id) 设置资源实例ID
 */
class DescribeOverviewCCTrendRequest extends AbstractModel
{
    /**
     * @var integer 统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
     */
    public $Period;

    /**
     * @var string 统计开始时间
     */
    public $StartTime;

    /**
     * @var string 统计结束时间
     */
    public $EndTime;

    /**
     * @var string 指标，取值[inqps(总请求峰值，dropqps(攻击请求峰值))，incount(请求次数), dropcount(攻击次数)]
     */
    public $MetricName;

    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp-multip表示共享包；basic表示DDoS基础防护）
     */
    public $Business;

    /**
     * @var array 资源的IP
     */
    public $IpList;

    /**
     * @var string 资源实例ID
     */
    public $Id;

    /**
     * @param integer $Period 统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
     * @param string $StartTime 统计开始时间
     * @param string $EndTime 统计结束时间
     * @param string $MetricName 指标，取值[inqps(总请求峰值，dropqps(攻击请求峰值))，incount(请求次数), dropcount(攻击次数)]
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp-multip表示共享包；basic表示DDoS基础防护）
     * @param array $IpList 资源的IP
     * @param string $Id 资源实例ID
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
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

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
