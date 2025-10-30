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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExecutorGroupMetric请求参数结构体
 *
 * @method string getExecutorGroupId() 获取执行资源组id
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行资源组id
 * @method integer getTrendStartTime() 获取使用趋势开始时间(毫秒)
 * @method void setTrendStartTime(integer $TrendStartTime) 设置使用趋势开始时间(毫秒)
 * @method integer getTrendEndTime() 获取使用趋势结束时间(毫秒)
 * @method void setTrendEndTime(integer $TrendEndTime) 设置使用趋势结束时间(毫秒)
 * @method string getExecutorGroupType() 获取执行资源组类型
 * @method void setExecutorGroupType(string $ExecutorGroupType) 设置执行资源组类型
 * @method string getExecutorResourceType() 获取执行资源类型
 * @method void setExecutorResourceType(string $ExecutorResourceType) 设置执行资源类型
 * @method string getLoaderId() 获取执行机ID
 * @method void setLoaderId(string $LoaderId) 设置执行机ID
 * @method string getMetricType() 获取指标维度
 * @method void setMetricType(string $MetricType) 设置指标维度
 * @method integer getGranularity() 获取指标采集粒度
 * @method void setGranularity(integer $Granularity) 设置指标采集粒度
 */
class DescribeExecutorGroupMetricRequest extends AbstractModel
{
    /**
     * @var string 执行资源组id
     */
    public $ExecutorGroupId;

    /**
     * @var integer 使用趋势开始时间(毫秒)
     */
    public $TrendStartTime;

    /**
     * @var integer 使用趋势结束时间(毫秒)
     */
    public $TrendEndTime;

    /**
     * @var string 执行资源组类型
     */
    public $ExecutorGroupType;

    /**
     * @var string 执行资源类型
     */
    public $ExecutorResourceType;

    /**
     * @var string 执行机ID
     */
    public $LoaderId;

    /**
     * @var string 指标维度
     */
    public $MetricType;

    /**
     * @var integer 指标采集粒度
     */
    public $Granularity;

    /**
     * @param string $ExecutorGroupId 执行资源组id
     * @param integer $TrendStartTime 使用趋势开始时间(毫秒)
     * @param integer $TrendEndTime 使用趋势结束时间(毫秒)
     * @param string $ExecutorGroupType 执行资源组类型
     * @param string $ExecutorResourceType 执行资源类型
     * @param string $LoaderId 执行机ID
     * @param string $MetricType 指标维度
     * @param integer $Granularity 指标采集粒度
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
        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("TrendStartTime",$param) and $param["TrendStartTime"] !== null) {
            $this->TrendStartTime = $param["TrendStartTime"];
        }

        if (array_key_exists("TrendEndTime",$param) and $param["TrendEndTime"] !== null) {
            $this->TrendEndTime = $param["TrendEndTime"];
        }

        if (array_key_exists("ExecutorGroupType",$param) and $param["ExecutorGroupType"] !== null) {
            $this->ExecutorGroupType = $param["ExecutorGroupType"];
        }

        if (array_key_exists("ExecutorResourceType",$param) and $param["ExecutorResourceType"] !== null) {
            $this->ExecutorResourceType = $param["ExecutorResourceType"];
        }

        if (array_key_exists("LoaderId",$param) and $param["LoaderId"] !== null) {
            $this->LoaderId = $param["LoaderId"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
