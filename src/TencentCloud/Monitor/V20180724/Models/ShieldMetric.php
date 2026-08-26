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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警屏蔽的指标
 *
 * @method string getMetric() 获取屏蔽指标
 * @method void setMetric(string $Metric) 设置屏蔽指标
 * @method string getMetricShowName() 获取屏蔽指标展示名称
 * @method void setMetricShowName(string $MetricShowName) 设置屏蔽指标展示名称
 */
class ShieldMetric extends AbstractModel
{
    /**
     * @var string 屏蔽指标
     */
    public $Metric;

    /**
     * @var string 屏蔽指标展示名称
     */
    public $MetricShowName;

    /**
     * @param string $Metric 屏蔽指标
     * @param string $MetricShowName 屏蔽指标展示名称
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

        if (array_key_exists("MetricShowName",$param) and $param["MetricShowName"] !== null) {
            $this->MetricShowName = $param["MetricShowName"];
        }
    }
}
