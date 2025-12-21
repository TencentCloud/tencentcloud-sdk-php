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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HBase监控数据结构
 *
 * @method string getMetricName() 获取指标名称，如 read_request_rate
 * @method void setMetricName(string $MetricName) 设置指标名称，如 read_request_rate
 * @method string getMetricDesc() 获取指标描述，如 read request rate
 * @method void setMetricDesc(string $MetricDesc) 设置指标描述，如 read request rate
 * @method array getTimestamps() 获取时间戳数组
 * @method void setTimestamps(array $Timestamps) 设置时间戳数组
 * @method array getValues() 获取数值数组
 * @method void setValues(array $Values) 设置数值数组
 */
class HBaseMetricData extends AbstractModel
{
    /**
     * @var string 指标名称，如 read_request_rate
     */
    public $MetricName;

    /**
     * @var string 指标描述，如 read request rate
     */
    public $MetricDesc;

    /**
     * @var array 时间戳数组
     */
    public $Timestamps;

    /**
     * @var array 数值数组
     */
    public $Values;

    /**
     * @param string $MetricName 指标名称，如 read_request_rate
     * @param string $MetricDesc 指标描述，如 read request rate
     * @param array $Timestamps 时间戳数组
     * @param array $Values 数值数组
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

        if (array_key_exists("MetricDesc",$param) and $param["MetricDesc"] !== null) {
            $this->MetricDesc = $param["MetricDesc"];
        }

        if (array_key_exists("Timestamps",$param) and $param["Timestamps"] !== null) {
            $this->Timestamps = $param["Timestamps"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
