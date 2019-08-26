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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method array getMetricNames() 获取统计指标名称列表，支持["InBandwidth", "OutBandwidth", "Concurrent", "InPackets", "OutPackets"]
 * @method void setMetricNames(array $MetricNames) 设置统计指标名称列表，支持["InBandwidth", "OutBandwidth", "Concurrent", "InPackets", "OutPackets"]
 * @method integer getGranularity() 获取监控粒度，目前支持300，3600，86400，单位：秒。
当时间范围<=1d，支持最小粒度300s；
当时间范围<=7d，支持最小粒度3600s；
当时间范围>7d，支持最小粒度86400s。
 * @method void setGranularity(integer $Granularity) 设置监控粒度，目前支持300，3600，86400，单位：秒。
当时间范围<=1d，支持最小粒度300s；
当时间范围<=7d，支持最小粒度3600s；
当时间范围>7d，支持最小粒度86400s。
 */

/**
 *DescribeListenerStatistics请求参数结构体
 */
class DescribeListenerStatisticsRequest extends AbstractModel
{
    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var array 统计指标名称列表，支持["InBandwidth", "OutBandwidth", "Concurrent", "InPackets", "OutPackets"]
     */
    public $MetricNames;

    /**
     * @var integer 监控粒度，目前支持300，3600，86400，单位：秒。
当时间范围<=1d，支持最小粒度300s；
当时间范围<=7d，支持最小粒度3600s；
当时间范围>7d，支持最小粒度86400s。
     */
    public $Granularity;
    /**
     * @param string $ListenerId 监听器ID
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间
     * @param array $MetricNames 统计指标名称列表，支持["InBandwidth", "OutBandwidth", "Concurrent", "InPackets", "OutPackets"]
     * @param integer $Granularity 监控粒度，目前支持300，3600，86400，单位：秒。
当时间范围<=1d，支持最小粒度300s；
当时间范围<=7d，支持最小粒度3600s；
当时间范围>7d，支持最小粒度86400s。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
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

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
