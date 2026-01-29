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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时序类型详细数据
 *
 * @method float getSum() 获取数据和。
 * @method void setSum(float $Sum) 设置数据和。
 * @method float getMax() 获取最大值。
 * @method void setMax(float $Max) 设置最大值。
 * @method float getAvg() 获取平均值。
 * @method void setAvg(float $Avg) 设置平均值。
 * @method string getMetricName() 获取指标名。
 * @method void setMetricName(string $MetricName) 设置指标名。
 * @method array getDetail() 获取详细数据。
 * @method void setDetail(array $Detail) 设置详细数据。
 */
class FloatTimingTypeValue extends AbstractModel
{
    /**
     * @var float 数据和。
     */
    public $Sum;

    /**
     * @var float 最大值。
     */
    public $Max;

    /**
     * @var float 平均值。
     */
    public $Avg;

    /**
     * @var string 指标名。
     */
    public $MetricName;

    /**
     * @var array 详细数据。
     */
    public $Detail;

    /**
     * @param float $Sum 数据和。
     * @param float $Max 最大值。
     * @param float $Avg 平均值。
     * @param string $MetricName 指标名。
     * @param array $Detail 详细数据。
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
        if (array_key_exists("Sum",$param) and $param["Sum"] !== null) {
            $this->Sum = $param["Sum"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Avg",$param) and $param["Avg"] !== null) {
            $this->Avg = $param["Avg"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new FloatTimingDataItem();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }
    }
}
