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
 * DescribeLabelValues请求参数结构体
 *
 * @method string getJobId() 获取任务ID
 * @method void setJobId(string $JobId) 设置任务ID
 * @method string getScenarioId() 获取场景ID
 * @method void setScenarioId(string $ScenarioId) 设置场景ID
 * @method string getMetric() 获取指标名。取值范围参见 DescribeMetricLabelWithValues 接口返回的所有指标名
 * @method void setMetric(string $Metric) 设置指标名。取值范围参见 DescribeMetricLabelWithValues 接口返回的所有指标名
 * @method string getLabelName() 获取标签名。取值范围参见 DescribeMetricLabelWithValues 接口返回的指标及其支持的标签名
 * @method void setLabelName(string $LabelName) 设置标签名。取值范围参见 DescribeMetricLabelWithValues 接口返回的指标及其支持的标签名
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 */
class DescribeLabelValuesRequest extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $JobId;

    /**
     * @var string 场景ID
     */
    public $ScenarioId;

    /**
     * @var string 指标名。取值范围参见 DescribeMetricLabelWithValues 接口返回的所有指标名
     */
    public $Metric;

    /**
     * @var string 标签名。取值范围参见 DescribeMetricLabelWithValues 接口返回的指标及其支持的标签名
     */
    public $LabelName;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @param string $JobId 任务ID
     * @param string $ScenarioId 场景ID
     * @param string $Metric 指标名。取值范围参见 DescribeMetricLabelWithValues 接口返回的所有指标名
     * @param string $LabelName 标签名。取值范围参见 DescribeMetricLabelWithValues 接口返回的指标及其支持的标签名
     * @param string $ProjectId 项目ID
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

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
