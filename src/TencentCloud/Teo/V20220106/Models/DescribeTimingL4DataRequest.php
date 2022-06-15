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
 * @method array getMetricNames() 获取指标列表
 * @method void setMetricNames(array $MetricNames) 设置指标列表
 * @method array getZoneIds() 获取ZoneId列表，仅在zone/instance维度下查询时该参数有效
 * @method void setZoneIds(array $ZoneIds) 设置ZoneId列表，仅在zone/instance维度下查询时该参数有效
 * @method array getInstanceIds() 获取InstanceId列表，仅在Instance维度下查询时该参数有效
 * @method void setInstanceIds(array $InstanceIds) 设置InstanceId列表，仅在Instance维度下查询时该参数有效
 * @method string getProtocol() 获取协议类型， 该字段当前无效
 * @method void setProtocol(string $Protocol) 设置协议类型， 该字段当前无效
 * @method string getInterval() 获取时间间隔，选填{min, 5min, hour, day}
 * @method void setInterval(string $Interval) 设置时间间隔，选填{min, 5min, hour, day}
 * @method string getRuleId() 获取规则ID，仅在instance维度有效
 * @method void setRuleId(string $RuleId) 设置规则ID，仅在instance维度有效
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
     * @var array 指标列表
     */
    public $MetricNames;

    /**
     * @var array ZoneId列表，仅在zone/instance维度下查询时该参数有效
     */
    public $ZoneIds;

    /**
     * @var array InstanceId列表，仅在Instance维度下查询时该参数有效
     */
    public $InstanceIds;

    /**
     * @var string 协议类型， 该字段当前无效
     */
    public $Protocol;

    /**
     * @var string 时间间隔，选填{min, 5min, hour, day}
     */
    public $Interval;

    /**
     * @var string 规则ID，仅在instance维度有效
     */
    public $RuleId;

    /**
     * @param string $StartTime RFC3339格式，客户端时间
     * @param string $EndTime RFC3339格式，客户端时间
     * @param array $MetricNames 指标列表
     * @param array $ZoneIds ZoneId列表，仅在zone/instance维度下查询时该参数有效
     * @param array $InstanceIds InstanceId列表，仅在Instance维度下查询时该参数有效
     * @param string $Protocol 协议类型， 该字段当前无效
     * @param string $Interval 时间间隔，选填{min, 5min, hour, day}
     * @param string $RuleId 规则ID，仅在instance维度有效
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
    }
}
