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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 概览数据项，用于监控
 *
 * @method string getChartType() 获取<p>图表类型（与请求中的 ChartTypes 对应）</p>
 * @method void setChartType(string $ChartType) 设置<p>图表类型（与请求中的 ChartTypes 对应）</p>
 * @method float getValue() 获取<p>当前瞬时值（如 QPS=15.2、延迟=120.5ms、利用率=85.0%）。查询失败或无数据时为 null</p>
 * @method void setValue(float $Value) 设置<p>当前瞬时值（如 QPS=15.2、延迟=120.5ms、利用率=85.0%）。查询失败或无数据时为 null</p>
 */
class OverviewItem extends AbstractModel
{
    /**
     * @var string <p>图表类型（与请求中的 ChartTypes 对应）</p>
     */
    public $ChartType;

    /**
     * @var float <p>当前瞬时值（如 QPS=15.2、延迟=120.5ms、利用率=85.0%）。查询失败或无数据时为 null</p>
     */
    public $Value;

    /**
     * @param string $ChartType <p>图表类型（与请求中的 ChartTypes 对应）</p>
     * @param float $Value <p>当前瞬时值（如 QPS=15.2、延迟=120.5ms、利用率=85.0%）。查询失败或无数据时为 null</p>
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
        if (array_key_exists("ChartType",$param) and $param["ChartType"] !== null) {
            $this->ChartType = $param["ChartType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
