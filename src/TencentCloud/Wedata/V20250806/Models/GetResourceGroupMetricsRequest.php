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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetResourceGroupMetrics请求参数结构体
 *
 * @method string getResourceGroupId() 获取执行资源组id
 * @method void setResourceGroupId(string $ResourceGroupId) 设置执行资源组id
 * @method integer getStartTime() 获取使用趋势开始时间(毫秒)，默认最近一小时
 * @method void setStartTime(integer $StartTime) 设置使用趋势开始时间(毫秒)，默认最近一小时
 * @method integer getEndTime() 获取使用趋势结束时间(毫秒)，默认当前
 * @method void setEndTime(integer $EndTime) 设置使用趋势结束时间(毫秒)，默认当前
 * @method string getMetricType() 获取指标维度

- all --- 全部
- task --- 任务指标
- system --- 系统指标
 * @method void setMetricType(string $MetricType) 设置指标维度

- all --- 全部
- task --- 任务指标
- system --- 系统指标
 * @method integer getGranularity() 获取指标采集粒度，单位分钟，默认 1分钟
 * @method void setGranularity(integer $Granularity) 设置指标采集粒度，单位分钟，默认 1分钟
 */
class GetResourceGroupMetricsRequest extends AbstractModel
{
    /**
     * @var string 执行资源组id
     */
    public $ResourceGroupId;

    /**
     * @var integer 使用趋势开始时间(毫秒)，默认最近一小时
     */
    public $StartTime;

    /**
     * @var integer 使用趋势结束时间(毫秒)，默认当前
     */
    public $EndTime;

    /**
     * @var string 指标维度

- all --- 全部
- task --- 任务指标
- system --- 系统指标
     */
    public $MetricType;

    /**
     * @var integer 指标采集粒度，单位分钟，默认 1分钟
     */
    public $Granularity;

    /**
     * @param string $ResourceGroupId 执行资源组id
     * @param integer $StartTime 使用趋势开始时间(毫秒)，默认最近一小时
     * @param integer $EndTime 使用趋势结束时间(毫秒)，默认当前
     * @param string $MetricType 指标维度

- all --- 全部
- task --- 任务指标
- system --- 系统指标
     * @param integer $Granularity 指标采集粒度，单位分钟，默认 1分钟
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
