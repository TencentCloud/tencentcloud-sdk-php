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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSampleMatrixQuery请求参数结构体
 *
 * @method string getJobId() 获取任务ID
 * @method void setJobId(string $JobId) 设置任务ID
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getScenarioId() 获取场景ID
 * @method void setScenarioId(string $ScenarioId) 设置场景ID
 * @method string getMetric() 获取指标名。取值范围参见 DescribeMetricLabelWithValues 接口返回的所有指标名
 * @method void setMetric(string $Metric) 设置指标名。取值范围参见 DescribeMetricLabelWithValues 接口返回的所有指标名
 * @method string getAggregation() 获取聚合函数。取值范围：Rate,Count,Avg,P90,P95,P99,Gauge
 * @method void setAggregation(string $Aggregation) 设置聚合函数。取值范围：Rate,Count,Avg,P90,P95,P99,Gauge
 * @method array getFilters() 获取用标签过滤规则来过滤指标，规则中包含标签名 LabelName、标签值 LabelValue、操作符 Operator（0代表相等，1代表不等）
 * @method void setFilters(array $Filters) 设置用标签过滤规则来过滤指标，规则中包含标签名 LabelName、标签值 LabelValue、操作符 Operator（0代表相等，1代表不等）
 * @method array getGroupBy() 获取分组；取值范围参见 DescribeMetricLabelWithValues 接口返回的指标及其支持的标签名
 * @method void setGroupBy(array $GroupBy) 设置分组；取值范围参见 DescribeMetricLabelWithValues 接口返回的指标及其支持的标签名
 * @method integer getMaxPoint() 获取返回的最大数据点个数
 * @method void setMaxPoint(integer $MaxPoint) 设置返回的最大数据点个数
 */
class DescribeSampleMatrixQueryRequest extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $JobId;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 场景ID
     */
    public $ScenarioId;

    /**
     * @var string 指标名。取值范围参见 DescribeMetricLabelWithValues 接口返回的所有指标名
     */
    public $Metric;

    /**
     * @var string 聚合函数。取值范围：Rate,Count,Avg,P90,P95,P99,Gauge
     */
    public $Aggregation;

    /**
     * @var array 用标签过滤规则来过滤指标，规则中包含标签名 LabelName、标签值 LabelValue、操作符 Operator（0代表相等，1代表不等）
     */
    public $Filters;

    /**
     * @var array 分组；取值范围参见 DescribeMetricLabelWithValues 接口返回的指标及其支持的标签名
     */
    public $GroupBy;

    /**
     * @var integer 返回的最大数据点个数
     */
    public $MaxPoint;

    /**
     * @param string $JobId 任务ID
     * @param string $ProjectId 项目ID
     * @param string $ScenarioId 场景ID
     * @param string $Metric 指标名。取值范围参见 DescribeMetricLabelWithValues 接口返回的所有指标名
     * @param string $Aggregation 聚合函数。取值范围：Rate,Count,Avg,P90,P95,P99,Gauge
     * @param array $Filters 用标签过滤规则来过滤指标，规则中包含标签名 LabelName、标签值 LabelValue、操作符 Operator（0代表相等，1代表不等）
     * @param array $GroupBy 分组；取值范围参见 DescribeMetricLabelWithValues 接口返回的指标及其支持的标签名
     * @param integer $MaxPoint 返回的最大数据点个数
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Aggregation",$param) and $param["Aggregation"] !== null) {
            $this->Aggregation = $param["Aggregation"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("MaxPoint",$param) and $param["MaxPoint"] !== null) {
            $this->MaxPoint = $param["MaxPoint"];
        }
    }
}
