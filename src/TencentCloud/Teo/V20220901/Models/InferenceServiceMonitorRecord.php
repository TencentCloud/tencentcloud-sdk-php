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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务监控数据记录。
 *
 * @method string getServiceId() 获取推理服务 ID。
 * @method void setServiceId(string $ServiceId) 设置推理服务 ID。
 * @method string getMetricName() 获取指标名称。
 * @method void setMetricName(string $MetricName) 设置指标名称。
 * @method array getInferenceServiceMonitorItems() 获取详细推理服务监控数据。
 * @method void setInferenceServiceMonitorItems(array $InferenceServiceMonitorItems) 设置详细推理服务监控数据。
 */
class InferenceServiceMonitorRecord extends AbstractModel
{
    /**
     * @var string 推理服务 ID。
     */
    public $ServiceId;

    /**
     * @var string 指标名称。
     */
    public $MetricName;

    /**
     * @var array 详细推理服务监控数据。
     */
    public $InferenceServiceMonitorItems;

    /**
     * @param string $ServiceId 推理服务 ID。
     * @param string $MetricName 指标名称。
     * @param array $InferenceServiceMonitorItems 详细推理服务监控数据。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("InferenceServiceMonitorItems",$param) and $param["InferenceServiceMonitorItems"] !== null) {
            $this->InferenceServiceMonitorItems = [];
            foreach ($param["InferenceServiceMonitorItems"] as $key => $value){
                $obj = new InferenceServiceMonitorItem();
                $obj->deserialize($value);
                array_push($this->InferenceServiceMonitorItems, $obj);
            }
        }
    }
}
