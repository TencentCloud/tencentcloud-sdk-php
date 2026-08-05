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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务监控指标
 *
 * @method string getServiceId() 获取<p>服务 UID，服务唯一标识</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务 UID，服务唯一标识</p>
 * @method string getServiceName() 获取<p>服务显示名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务显示名称</p>
 * @method string getStatus() 获取<p>服务状态</p>
 * @method void setStatus(string $Status) 设置<p>服务状态</p>
 * @method string getEngine() 获取<p>推理引擎</p>
 * @method void setEngine(string $Engine) 设置<p>推理引擎</p>
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method string getModelIdentifier() 获取<p>OpenAI 兼容的模型标识符</p>
 * @method void setModelIdentifier(string $ModelIdentifier) 设置<p>OpenAI 兼容的模型标识符</p>
 * @method ReplicaInfo getReplicas() 获取<p>副本信息</p>
 * @method void setReplicas(ReplicaInfo $Replicas) 设置<p>副本信息</p>
 * @method MetricsData getMetrics() 获取<p>监控指标数据</p>
 * @method void setMetrics(MetricsData $Metrics) 设置<p>监控指标数据</p>
 */
class ServiceMetricsItem extends AbstractModel
{
    /**
     * @var string <p>服务 UID，服务唯一标识</p>
     */
    public $ServiceId;

    /**
     * @var string <p>服务显示名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>服务状态</p>
     */
    public $Status;

    /**
     * @var string <p>推理引擎</p>
     */
    public $Engine;

    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var string <p>OpenAI 兼容的模型标识符</p>
     */
    public $ModelIdentifier;

    /**
     * @var ReplicaInfo <p>副本信息</p>
     */
    public $Replicas;

    /**
     * @var MetricsData <p>监控指标数据</p>
     */
    public $Metrics;

    /**
     * @param string $ServiceId <p>服务 UID，服务唯一标识</p>
     * @param string $ServiceName <p>服务显示名称</p>
     * @param string $Status <p>服务状态</p>
     * @param string $Engine <p>推理引擎</p>
     * @param string $ModelName <p>模型名称</p>
     * @param string $ModelIdentifier <p>OpenAI 兼容的模型标识符</p>
     * @param ReplicaInfo $Replicas <p>副本信息</p>
     * @param MetricsData $Metrics <p>监控指标数据</p>
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelIdentifier",$param) and $param["ModelIdentifier"] !== null) {
            $this->ModelIdentifier = $param["ModelIdentifier"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = new ReplicaInfo();
            $this->Replicas->deserialize($param["Replicas"]);
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = new MetricsData();
            $this->Metrics->deserialize($param["Metrics"]);
        }
    }
}
