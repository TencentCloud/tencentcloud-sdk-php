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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInvocationMetricDataPoint请求参数结构体
 *
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method array getMetricDimensionValues() 获取维度
 * @method void setMetricDimensionValues(array $MetricDimensionValues) 设置维度
 * @method array getMetrics() 获取指标
 * @method void setMetrics(array $Metrics) 设置指标
 * @method string getKind() 获取调用视角。可选值：SERVER, CLIENT。默认为SERVER
 * @method void setKind(string $Kind) 设置调用视角。可选值：SERVER, CLIENT。默认为SERVER
 */
class DescribeInvocationMetricDataPointRequest extends AbstractModel
{
    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var array 维度
     */
    public $MetricDimensionValues;

    /**
     * @var array 指标
     */
    public $Metrics;

    /**
     * @var string 调用视角。可选值：SERVER, CLIENT。默认为SERVER
     */
    public $Kind;

    /**
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param array $MetricDimensionValues 维度
     * @param array $Metrics 指标
     * @param string $Kind 调用视角。可选值：SERVER, CLIENT。默认为SERVER
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

        if (array_key_exists("MetricDimensionValues",$param) and $param["MetricDimensionValues"] !== null) {
            $this->MetricDimensionValues = [];
            foreach ($param["MetricDimensionValues"] as $key => $value){
                $obj = new MetricDimensionValue();
                $obj->deserialize($value);
                array_push($this->MetricDimensionValues, $obj);
            }
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new Metric();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }
    }
}
