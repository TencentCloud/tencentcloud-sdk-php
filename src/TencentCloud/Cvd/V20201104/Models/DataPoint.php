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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控数据
 *
 * @method array getDimensions() 获取<p>实例对象维度组合</p>
 * @method void setDimensions(array $Dimensions) 设置<p>实例对象维度组合</p>
 * @method array getTimestamps() 获取<p>时间戳数组</p>
 * @method void setTimestamps(array $Timestamps) 设置<p>时间戳数组</p>
 * @method array getValues() 获取<p>监控值数组，与Timestamps一一对应</p>
 * @method void setValues(array $Values) 设置<p>监控值数组，与Timestamps一一对应</p>
 * @method array getMaxValues() 获取<p>MaxValues 最大值数组，与Timestamps一一对应</p>
 * @method void setMaxValues(array $MaxValues) 设置<p>MaxValues 最大值数组，与Timestamps一一对应</p>
 * @method array getMinValues() 获取<p>MinValues 最小值数组，与Timestamps一一对应</p>
 * @method void setMinValues(array $MinValues) 设置<p>MinValues 最小值数组，与Timestamps一一对应</p>
 * @method array getAvgValues() 获取<p>AvgValues 平均值数组，与Timestamps一一对应</p>
 * @method void setAvgValues(array $AvgValues) 设置<p>AvgValues 平均值数组，与Timestamps一一对应</p>
 */
class DataPoint extends AbstractModel
{
    /**
     * @var array <p>实例对象维度组合</p>
     */
    public $Dimensions;

    /**
     * @var array <p>时间戳数组</p>
     */
    public $Timestamps;

    /**
     * @var array <p>监控值数组，与Timestamps一一对应</p>
     */
    public $Values;

    /**
     * @var array <p>MaxValues 最大值数组，与Timestamps一一对应</p>
     */
    public $MaxValues;

    /**
     * @var array <p>MinValues 最小值数组，与Timestamps一一对应</p>
     */
    public $MinValues;

    /**
     * @var array <p>AvgValues 平均值数组，与Timestamps一一对应</p>
     */
    public $AvgValues;

    /**
     * @param array $Dimensions <p>实例对象维度组合</p>
     * @param array $Timestamps <p>时间戳数组</p>
     * @param array $Values <p>监控值数组，与Timestamps一一对应</p>
     * @param array $MaxValues <p>MaxValues 最大值数组，与Timestamps一一对应</p>
     * @param array $MinValues <p>MinValues 最小值数组，与Timestamps一一对应</p>
     * @param array $AvgValues <p>AvgValues 平均值数组，与Timestamps一一对应</p>
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
        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new Dimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("Timestamps",$param) and $param["Timestamps"] !== null) {
            $this->Timestamps = $param["Timestamps"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("MaxValues",$param) and $param["MaxValues"] !== null) {
            $this->MaxValues = $param["MaxValues"];
        }

        if (array_key_exists("MinValues",$param) and $param["MinValues"] !== null) {
            $this->MinValues = $param["MinValues"];
        }

        if (array_key_exists("AvgValues",$param) and $param["AvgValues"] !== null) {
            $this->AvgValues = $param["AvgValues"];
        }
    }
}
