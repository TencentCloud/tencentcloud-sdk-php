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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询
 *
 * @method string getMetricName() 获取<p>指标名</p>
 * @method void setMetricName(string $MetricName) 设置<p>指标名</p>
 * @method array getCompares() 获取<p>同比，现支持 CompareByYesterday (与昨天相比)和CompareByLastWeek (与上周相比)</p>
 * @method void setCompares(array $Compares) 设置<p>同比，现支持 CompareByYesterday (与昨天相比)和CompareByLastWeek (与上周相比)</p>
 * @method string getCompare() 获取<p>同比，已弃用，不建议使用</p>
 * @method void setCompare(string $Compare) 设置<p>同比，已弃用，不建议使用</p>
 */
class QueryMetricItem extends AbstractModel
{
    /**
     * @var string <p>指标名</p>
     */
    public $MetricName;

    /**
     * @var array <p>同比，现支持 CompareByYesterday (与昨天相比)和CompareByLastWeek (与上周相比)</p>
     */
    public $Compares;

    /**
     * @var string <p>同比，已弃用，不建议使用</p>
     */
    public $Compare;

    /**
     * @param string $MetricName <p>指标名</p>
     * @param array $Compares <p>同比，现支持 CompareByYesterday (与昨天相比)和CompareByLastWeek (与上周相比)</p>
     * @param string $Compare <p>同比，已弃用，不建议使用</p>
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

        if (array_key_exists("Compares",$param) and $param["Compares"] !== null) {
            $this->Compares = $param["Compares"];
        }

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = $param["Compare"];
        }
    }
}
