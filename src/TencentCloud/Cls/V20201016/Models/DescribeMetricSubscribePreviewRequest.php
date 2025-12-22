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
 * DescribeMetricSubscribePreview请求参数结构体
 *
 * @method string getNamespace() 获取云产品命名空间。
 * @method void setNamespace(string $Namespace) 设置云产品命名空间。
 * @method array getMetrics() 获取数据库配置信息。
 * @method void setMetrics(array $Metrics) 设置数据库配置信息。
 * @method InstanceConfig getInstanceInfo() 获取实例配置配置。
 * @method void setInstanceInfo(InstanceConfig $InstanceInfo) 设置实例配置配置。
 */
class DescribeMetricSubscribePreviewRequest extends AbstractModel
{
    /**
     * @var string 云产品命名空间。
     */
    public $Namespace;

    /**
     * @var array 数据库配置信息。
     */
    public $Metrics;

    /**
     * @var InstanceConfig 实例配置配置。
     */
    public $InstanceInfo;

    /**
     * @param string $Namespace 云产品命名空间。
     * @param array $Metrics 数据库配置信息。
     * @param InstanceConfig $InstanceInfo 实例配置配置。
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new MetricConfig();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new InstanceConfig();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }
    }
}
