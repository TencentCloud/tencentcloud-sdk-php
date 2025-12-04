<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQPublicAccessMonitorData请求参数结构体
 *
 * @method string getInstanceId() 获取集群 ID
 * @method void setInstanceId(string $InstanceId) 设置集群 ID
 * @method string getMetricName() 获取指标名称，仅支持单指标拉取。指标枚举如下：

- ClientIntraffic：入流量
- ClientOuttraffic：出流量
 * @method void setMetricName(string $MetricName) 设置指标名称，仅支持单指标拉取。指标枚举如下：

- ClientIntraffic：入流量
- ClientOuttraffic：出流量
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间，默认为当前时间
 * @method void setEndTime(string $EndTime) 设置结束时间，默认为当前时间
 * @method integer getPeriod() 获取监控统计周期，如60。默认为取值为300，单位为s。
 * @method void setPeriod(integer $Period) 设置监控统计周期，如60。默认为取值为300，单位为s。
 */
class DescribeRocketMQPublicAccessMonitorDataRequest extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $InstanceId;

    /**
     * @var string 指标名称，仅支持单指标拉取。指标枚举如下：

- ClientIntraffic：入流量
- ClientOuttraffic：出流量
     */
    public $MetricName;

    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间，默认为当前时间
     */
    public $EndTime;

    /**
     * @var integer 监控统计周期，如60。默认为取值为300，单位为s。
     */
    public $Period;

    /**
     * @param string $InstanceId 集群 ID
     * @param string $MetricName 指标名称，仅支持单指标拉取。指标枚举如下：

- ClientIntraffic：入流量
- ClientOuttraffic：出流量
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间，默认为当前时间
     * @param integer $Period 监控统计周期，如60。默认为取值为300，单位为s。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
