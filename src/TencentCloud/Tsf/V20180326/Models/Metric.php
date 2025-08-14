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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标
 *
 * @method string getName() 获取指标名称
 * @method void setName(string $Name) 设置指标名称
 * @method string getFunction() 获取指标计算方式，可选值： none：无，sum：求和，exclusive：独占值，avg：平均值，max：最大值，min：最小值，percentage_50：50分位数，percentage_75：75分位数，percentage_95：95分位数，percentage_99：99分位数，bucket_5：分桶统计。
 * @method void setFunction(string $Function) 设置指标计算方式，可选值： none：无，sum：求和，exclusive：独占值，avg：平均值，max：最大值，min：最小值，percentage_50：50分位数，percentage_75：75分位数，percentage_95：95分位数，percentage_99：99分位数，bucket_5：分桶统计。
 */
class Metric extends AbstractModel
{
    /**
     * @var string 指标名称
     */
    public $Name;

    /**
     * @var string 指标计算方式，可选值： none：无，sum：求和，exclusive：独占值，avg：平均值，max：最大值，min：最小值，percentage_50：50分位数，percentage_75：75分位数，percentage_95：95分位数，percentage_99：99分位数，bucket_5：分桶统计。
     */
    public $Function;

    /**
     * @param string $Name 指标名称
     * @param string $Function 指标计算方式，可选值： none：无，sum：求和，exclusive：独占值，avg：平均值，max：最大值，min：最小值，percentage_50：50分位数，percentage_75：75分位数，percentage_95：95分位数，percentage_99：99分位数，bucket_5：分桶统计。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = $param["Function"];
        }
    }
}
