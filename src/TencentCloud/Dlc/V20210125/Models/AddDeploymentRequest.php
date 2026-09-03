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
 * AddDeployment请求参数结构体
 *
 * @method string getServiceId() 获取<p>ServiceId</p>
 * @method void setServiceId(string $ServiceId) 设置<p>ServiceId</p>
 * @method string getDeploymentName() 获取<p>部署名称</p>
 * @method void setDeploymentName(string $DeploymentName) 设置<p>部署名称</p>
 * @method string getEngine() 获取<p>推理引擎（vllm / xgboost）</p>
 * @method void setEngine(string $Engine) 设置<p>推理引擎（vllm / xgboost）</p>
 * @method integer getReplicas() 获取<p>副本数</p>
 * @method void setReplicas(integer $Replicas) 设置<p>副本数</p>
 * @method string getResourcePartitionId() 获取<p>资源分区 ID（目标 K8s 集群分区）</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>资源分区 ID（目标 K8s 集群分区）</p>
 * @method string getModelVersion() 获取<p>模型版本（如 v1, v2），未提供时使用最新版本</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本（如 v1, v2），未提供时使用最新版本</p>
 * @method boolean getHeadHighAvailabilityEnabled() 获取<p>是否开启 ray head 高可用</p>
 * @method void setHeadHighAvailabilityEnabled(boolean $HeadHighAvailabilityEnabled) 设置<p>是否开启 ray head 高可用</p>
 * @method string getAdvancedParams() 获取<p>高级参数（JSON 字符串，可选）</p>
 * @method void setAdvancedParams(string $AdvancedParams) 设置<p>高级参数（JSON 字符串，可选）</p>
 * @method string getQueue() 获取<p>队列名（K8s namespace）</p>
 * @method void setQueue(string $Queue) 设置<p>队列名（K8s namespace）</p>
 * @method boolean getAutoscalingEnabled() 获取<p>是否启用弹性伸缩</p>
 * @method void setAutoscalingEnabled(boolean $AutoscalingEnabled) 设置<p>是否启用弹性伸缩</p>
 * @method string getImage() 获取<p>镜像名称</p>
 * @method void setImage(string $Image) 设置<p>镜像名称</p>
 * @method string getAdvancedOptions() 获取<p>高级参数</p>
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>高级参数</p>
 */
class AddDeploymentRequest extends AbstractModel
{
    /**
     * @var string <p>ServiceId</p>
     */
    public $ServiceId;

    /**
     * @var string <p>部署名称</p>
     */
    public $DeploymentName;

    /**
     * @var string <p>推理引擎（vllm / xgboost）</p>
     */
    public $Engine;

    /**
     * @var integer <p>副本数</p>
     */
    public $Replicas;

    /**
     * @var string <p>资源分区 ID（目标 K8s 集群分区）</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>模型版本（如 v1, v2），未提供时使用最新版本</p>
     */
    public $ModelVersion;

    /**
     * @var boolean <p>是否开启 ray head 高可用</p>
     */
    public $HeadHighAvailabilityEnabled;

    /**
     * @var string <p>高级参数（JSON 字符串，可选）</p>
     */
    public $AdvancedParams;

    /**
     * @var string <p>队列名（K8s namespace）</p>
     */
    public $Queue;

    /**
     * @var boolean <p>是否启用弹性伸缩</p>
     */
    public $AutoscalingEnabled;

    /**
     * @var string <p>镜像名称</p>
     */
    public $Image;

    /**
     * @var string <p>高级参数</p>
     */
    public $AdvancedOptions;

    /**
     * @param string $ServiceId <p>ServiceId</p>
     * @param string $DeploymentName <p>部署名称</p>
     * @param string $Engine <p>推理引擎（vllm / xgboost）</p>
     * @param integer $Replicas <p>副本数</p>
     * @param string $ResourcePartitionId <p>资源分区 ID（目标 K8s 集群分区）</p>
     * @param string $ModelVersion <p>模型版本（如 v1, v2），未提供时使用最新版本</p>
     * @param boolean $HeadHighAvailabilityEnabled <p>是否开启 ray head 高可用</p>
     * @param string $AdvancedParams <p>高级参数（JSON 字符串，可选）</p>
     * @param string $Queue <p>队列名（K8s namespace）</p>
     * @param boolean $AutoscalingEnabled <p>是否启用弹性伸缩</p>
     * @param string $Image <p>镜像名称</p>
     * @param string $AdvancedOptions <p>高级参数</p>
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

        if (array_key_exists("DeploymentName",$param) and $param["DeploymentName"] !== null) {
            $this->DeploymentName = $param["DeploymentName"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("ResourcePartitionId",$param) and $param["ResourcePartitionId"] !== null) {
            $this->ResourcePartitionId = $param["ResourcePartitionId"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("HeadHighAvailabilityEnabled",$param) and $param["HeadHighAvailabilityEnabled"] !== null) {
            $this->HeadHighAvailabilityEnabled = $param["HeadHighAvailabilityEnabled"];
        }

        if (array_key_exists("AdvancedParams",$param) and $param["AdvancedParams"] !== null) {
            $this->AdvancedParams = $param["AdvancedParams"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("AutoscalingEnabled",$param) and $param["AutoscalingEnabled"] !== null) {
            $this->AutoscalingEnabled = $param["AutoscalingEnabled"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("AdvancedOptions",$param) and $param["AdvancedOptions"] !== null) {
            $this->AdvancedOptions = $param["AdvancedOptions"];
        }
    }
}
