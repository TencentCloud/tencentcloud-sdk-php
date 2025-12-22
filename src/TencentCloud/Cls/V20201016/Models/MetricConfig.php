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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标配置信息
 *
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method array getPeriods() 获取统计周期,单位:秒（s）
 * @method void setPeriods(array $Periods) 设置统计周期,单位:秒（s）
 * @method array getMetricLabels() 获取自定义指标标签
 * @method void setMetricLabels(array $MetricLabels) 设置自定义指标标签
 */
class MetricConfig extends AbstractModel
{
    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var array 统计周期,单位:秒（s）
     */
    public $Periods;

    /**
     * @var array 自定义指标标签
     */
    public $MetricLabels;

    /**
     * @param string $MetricName 指标名称
     * @param array $Periods 统计周期,单位:秒（s）
     * @param array $MetricLabels 自定义指标标签
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

        if (array_key_exists("Periods",$param) and $param["Periods"] !== null) {
            $this->Periods = $param["Periods"];
        }

        if (array_key_exists("MetricLabels",$param) and $param["MetricLabels"] !== null) {
            $this->MetricLabels = [];
            foreach ($param["MetricLabels"] as $key => $value){
                $obj = new MetricLabel();
                $obj->deserialize($value);
                array_push($this->MetricLabels, $obj);
            }
        }
    }
}
