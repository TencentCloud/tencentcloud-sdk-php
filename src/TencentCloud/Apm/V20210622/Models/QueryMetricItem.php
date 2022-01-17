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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询
 *
 * @method string getMetricName() 获取指标名
 * @method void setMetricName(string $MetricName) 设置指标名
 * @method string getCompare() 获取同比，已弃用，不建议使用
 * @method void setCompare(string $Compare) 设置同比，已弃用，不建议使用
 * @method array getCompares() 获取同比，支持多种同比方式
 * @method void setCompares(array $Compares) 设置同比，支持多种同比方式
 */
class QueryMetricItem extends AbstractModel
{
    /**
     * @var string 指标名
     */
    public $MetricName;

    /**
     * @var string 同比，已弃用，不建议使用
     */
    public $Compare;

    /**
     * @var array 同比，支持多种同比方式
     */
    public $Compares;

    /**
     * @param string $MetricName 指标名
     * @param string $Compare 同比，已弃用，不建议使用
     * @param array $Compares 同比，支持多种同比方式
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

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = $param["Compare"];
        }

        if (array_key_exists("Compares",$param) and $param["Compares"] !== null) {
            $this->Compares = $param["Compares"];
        }
    }
}
