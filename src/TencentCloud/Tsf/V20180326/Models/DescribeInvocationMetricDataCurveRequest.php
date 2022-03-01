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
 * DescribeInvocationMetricDataCurve请求参数结构体
 *
 * @method string getStartTime() 获取查询开始时间
 * @method void setStartTime(string $StartTime) 设置查询开始时间
 * @method string getEndTime() 获取查询结束时间
 * @method void setEndTime(string $EndTime) 设置查询结束时间
 * @method integer getPeriod() 获取查询时间粒度，单位秒可选值：60、3600、86400
 * @method void setPeriod(integer $Period) 设置查询时间粒度，单位秒可选值：60、3600、86400
 * @method array getMetricDimensions() 获取查询指标维度
 * @method void setMetricDimensions(array $MetricDimensions) 设置查询指标维度
 * @method array getMetrics() 获取查询指标名
 * @method void setMetrics(array $Metrics) 设置查询指标名
 * @method string getKind() 获取视图视角。可选值：SERVER, CLIENT。默认为SERVER
 * @method void setKind(string $Kind) 设置视图视角。可选值：SERVER, CLIENT。默认为SERVER
 * @method string getType() 获取类型。组件监控使用，可选值：SQL 或者 NoSQL
 * @method void setType(string $Type) 设置类型。组件监控使用，可选值：SQL 或者 NoSQL
 */
class DescribeInvocationMetricDataCurveRequest extends AbstractModel
{
    /**
     * @var string 查询开始时间
     */
    public $StartTime;

    /**
     * @var string 查询结束时间
     */
    public $EndTime;

    /**
     * @var integer 查询时间粒度，单位秒可选值：60、3600、86400
     */
    public $Period;

    /**
     * @var array 查询指标维度
     */
    public $MetricDimensions;

    /**
     * @var array 查询指标名
     */
    public $Metrics;

    /**
     * @var string 视图视角。可选值：SERVER, CLIENT。默认为SERVER
     */
    public $Kind;

    /**
     * @var string 类型。组件监控使用，可选值：SQL 或者 NoSQL
     */
    public $Type;

    /**
     * @param string $StartTime 查询开始时间
     * @param string $EndTime 查询结束时间
     * @param integer $Period 查询时间粒度，单位秒可选值：60、3600、86400
     * @param array $MetricDimensions 查询指标维度
     * @param array $Metrics 查询指标名
     * @param string $Kind 视图视角。可选值：SERVER, CLIENT。默认为SERVER
     * @param string $Type 类型。组件监控使用，可选值：SQL 或者 NoSQL
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

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("MetricDimensions",$param) and $param["MetricDimensions"] !== null) {
            $this->MetricDimensions = [];
            foreach ($param["MetricDimensions"] as $key => $value){
                $obj = new MetricDimension();
                $obj->deserialize($value);
                array_push($this->MetricDimensions, $obj);
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
