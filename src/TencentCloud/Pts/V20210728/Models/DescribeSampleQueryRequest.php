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
 * DescribeSampleQuery请求参数结构体
 *
 * @method string getJobId() 获取job id
 * @method void setJobId(string $JobId) 设置job id
 * @method string getScenarioId() 获取场景Id
 * @method void setScenarioId(string $ScenarioId) 设置场景Id
 * @method string getMetric() 获取指标名。取值范围参见 DescribeMetricLabelWithValues 接口返回的所有指标名
 * @method void setMetric(string $Metric) 设置指标名。取值范围参见 DescribeMetricLabelWithValues 接口返回的所有指标名
 * @method string getAggregation() 获取聚合函数。取值范围：Rate,Count,Avg,P90,P95,P99,Gauge
 * @method void setAggregation(string $Aggregation) 设置聚合函数。取值范围：Rate,Count,Avg,P90,P95,P99,Gauge
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method array getLabels() 获取标签过滤条件。各指标支持的标签参见 DescribeMetricLabelWithValues 接口返回的所有指标及其支持的标签
 * @method void setLabels(array $Labels) 设置标签过滤条件。各指标支持的标签参见 DescribeMetricLabelWithValues 接口返回的所有指标及其支持的标签
 */
class DescribeSampleQueryRequest extends AbstractModel
{
    /**
     * @var string job id
     */
    public $JobId;

    /**
     * @var string 场景Id
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
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var array 标签过滤条件。各指标支持的标签参见 DescribeMetricLabelWithValues 接口返回的所有指标及其支持的标签
     */
    public $Labels;

    /**
     * @param string $JobId job id
     * @param string $ScenarioId 场景Id
     * @param string $Metric 指标名。取值范围参见 DescribeMetricLabelWithValues 接口返回的所有指标名
     * @param string $Aggregation 聚合函数。取值范围：Rate,Count,Avg,P90,P95,P99,Gauge
     * @param string $ProjectId 项目ID
     * @param array $Labels 标签过滤条件。各指标支持的标签参见 DescribeMetricLabelWithValues 接口返回的所有指标及其支持的标签
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

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Aggregation",$param) and $param["Aggregation"] !== null) {
            $this->Aggregation = $param["Aggregation"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
