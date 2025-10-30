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
 * prometheus集成指标详情
 *
 * @method string getMetricName() 获取指标名
 * @method void setMetricName(string $MetricName) 设置指标名
 * @method string getName() 获取指标名称
 * @method void setName(string $Name) 设置指标名称
 * @method string getMetricType() 获取统计类型
 * @method void setMetricType(string $MetricType) 设置统计类型
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 * @method string getDescription() 获取指标详细描述
 * @method void setDescription(string $Description) 设置指标详细描述
 */
class IntegrationMetric extends AbstractModel
{
    /**
     * @var string 指标名
     */
    public $MetricName;

    /**
     * @var string 指标名称
     */
    public $Name;

    /**
     * @var string 统计类型
     */
    public $MetricType;

    /**
     * @var string 单位
     */
    public $Unit;

    /**
     * @var string 指标详细描述
     */
    public $Description;

    /**
     * @param string $MetricName 指标名
     * @param string $Name 指标名称
     * @param string $MetricType 统计类型
     * @param string $Unit 单位
     * @param string $Description 指标详细描述
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
