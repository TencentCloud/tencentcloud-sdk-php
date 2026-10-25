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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量指标查询条目
 *
 * @method string getEventType() 获取<p>事件类型</p>
 * @method void setEventType(string $EventType) 设置<p>事件类型</p>
 * @method array getMetrics() 获取<p>指标名列表，如 count / rate</p>
 * @method void setMetrics(array $Metrics) 设置<p>指标名列表，如 count / rate</p>
 * @method string getKey() 获取<p>条目 Key，缺省为 EventType/SubType/MeasurementKey</p>
 * @method void setKey(string $Key) 设置<p>条目 Key，缺省为 EventType/SubType/MeasurementKey</p>
 * @method string getSubType() 获取<p>子类型</p>
 * @method void setSubType(string $SubType) 设置<p>子类型</p>
 * @method string getMeasurementKey() 获取<p>分位/均值测量键</p>
 * @method void setMeasurementKey(string $MeasurementKey) 设置<p>分位/均值测量键</p>
 */
class MetricQueryItem extends AbstractModel
{
    /**
     * @var string <p>事件类型</p>
     */
    public $EventType;

    /**
     * @var array <p>指标名列表，如 count / rate</p>
     */
    public $Metrics;

    /**
     * @var string <p>条目 Key，缺省为 EventType/SubType/MeasurementKey</p>
     */
    public $Key;

    /**
     * @var string <p>子类型</p>
     */
    public $SubType;

    /**
     * @var string <p>分位/均值测量键</p>
     */
    public $MeasurementKey;

    /**
     * @param string $EventType <p>事件类型</p>
     * @param array $Metrics <p>指标名列表，如 count / rate</p>
     * @param string $Key <p>条目 Key，缺省为 EventType/SubType/MeasurementKey</p>
     * @param string $SubType <p>子类型</p>
     * @param string $MeasurementKey <p>分位/均值测量键</p>
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("MeasurementKey",$param) and $param["MeasurementKey"] !== null) {
            $this->MeasurementKey = $param["MeasurementKey"];
        }
    }
}
