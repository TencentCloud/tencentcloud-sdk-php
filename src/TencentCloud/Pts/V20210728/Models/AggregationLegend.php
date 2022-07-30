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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 聚合函数
 *
 * @method string getAggregation() 获取指标支持的聚合函数
 * @method void setAggregation(string $Aggregation) 设置指标支持的聚合函数
 * @method string getLegend() 获取聚合函数作用于指标后对应的描述
 * @method void setLegend(string $Legend) 设置聚合函数作用于指标后对应的描述
 * @method string getUnit() 获取聚合之后的指标单位
 * @method void setUnit(string $Unit) 设置聚合之后的指标单位
 */
class AggregationLegend extends AbstractModel
{
    /**
     * @var string 指标支持的聚合函数
     */
    public $Aggregation;

    /**
     * @var string 聚合函数作用于指标后对应的描述
     */
    public $Legend;

    /**
     * @var string 聚合之后的指标单位
     */
    public $Unit;

    /**
     * @param string $Aggregation 指标支持的聚合函数
     * @param string $Legend 聚合函数作用于指标后对应的描述
     * @param string $Unit 聚合之后的指标单位
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
        if (array_key_exists("Aggregation",$param) and $param["Aggregation"] !== null) {
            $this->Aggregation = $param["Aggregation"];
        }

        if (array_key_exists("Legend",$param) and $param["Legend"] !== null) {
            $this->Legend = $param["Legend"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
