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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全数据维度值信息
 *
 * @method string getMetric() 获取指标名称。
 * @method void setMetric(string $Metric) 设置指标名称。
 * @method array getDetail() 获取时序数据详情。
 * @method void setDetail(array $Detail) 设置时序数据详情。
 * @method integer getMax() 获取最大值。
 * @method void setMax(integer $Max) 设置最大值。
 * @method float getAvg() 获取平均值。
 * @method void setAvg(float $Avg) 设置平均值。
 * @method float getSum() 获取数据总和。
 * @method void setSum(float $Sum) 设置数据总和。
 */
class SecEntryValue extends AbstractModel
{
    /**
     * @var string 指标名称。
     */
    public $Metric;

    /**
     * @var array 时序数据详情。
     */
    public $Detail;

    /**
     * @var integer 最大值。
     */
    public $Max;

    /**
     * @var float 平均值。
     */
    public $Avg;

    /**
     * @var float 数据总和。
     */
    public $Sum;

    /**
     * @param string $Metric 指标名称。
     * @param array $Detail 时序数据详情。
     * @param integer $Max 最大值。
     * @param float $Avg 平均值。
     * @param float $Sum 数据总和。
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new TimingDataItem();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Avg",$param) and $param["Avg"] !== null) {
            $this->Avg = $param["Avg"];
        }

        if (array_key_exists("Sum",$param) and $param["Sum"] !== null) {
            $this->Sum = $param["Sum"];
        }
    }
}
