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
 * 指标监控数据曲线
 *
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method string getMetricFunction() 获取指标计算方式
 * @method void setMetricFunction(string $MetricFunction) 设置指标计算方式
 * @method array getMetricDataPoints() 获取指标数据点集合
 * @method void setMetricDataPoints(array $MetricDataPoints) 设置指标数据点集合
 */
class MetricDataCurve extends AbstractModel
{
    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var string 指标计算方式
     */
    public $MetricFunction;

    /**
     * @var array 指标数据点集合
     */
    public $MetricDataPoints;

    /**
     * @param string $MetricName 指标名称
     * @param string $MetricFunction 指标计算方式
     * @param array $MetricDataPoints 指标数据点集合
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("MetricFunction",$param) and $param["MetricFunction"] !== null) {
            $this->MetricFunction = $param["MetricFunction"];
        }

        if (array_key_exists("MetricDataPoints",$param) and $param["MetricDataPoints"] !== null) {
            $this->MetricDataPoints = [];
            foreach ($param["MetricDataPoints"] as $key => $value){
                $obj = new MetricDataPoint();
                $obj->deserialize($value);
                array_push($this->MetricDataPoints, $obj);
            }
        }
    }
}
