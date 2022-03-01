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
 * 多值数据点集合
 *
 * @method array getPoints() 获取多值数据点
 * @method void setPoints(array $Points) 设置多值数据点
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method array getPointKeys() 获取多值数据点key列表，每个值表示当前数据点所在区域的下限
 * @method void setPointKeys(array $PointKeys) 设置多值数据点key列表，每个值表示当前数据点所在区域的下限
 */
class MultiValueDataPoints extends AbstractModel
{
    /**
     * @var array 多值数据点
     */
    public $Points;

    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var array 多值数据点key列表，每个值表示当前数据点所在区域的下限
     */
    public $PointKeys;

    /**
     * @param array $Points 多值数据点
     * @param string $MetricName 指标名称
     * @param array $PointKeys 多值数据点key列表，每个值表示当前数据点所在区域的下限
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
        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new MultiValue();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("PointKeys",$param) and $param["PointKeys"] !== null) {
            $this->PointKeys = $param["PointKeys"];
        }
    }
}
