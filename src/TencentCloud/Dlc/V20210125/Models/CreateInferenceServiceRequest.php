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
 * CreateInferenceService请求参数结构体
 *
 * @method string getName() 获取<p>推理服务名称</p>
 * @method void setName(string $Name) 设置<p>推理服务名称</p>
 * @method string getModelUid() 获取<p>模型 UID（业务级唯一标识）</p>
 * @method void setModelUid(string $ModelUid) 设置<p>模型 UID（业务级唯一标识）</p>
 * @method string getEngine() 获取<p>推理引擎（vllm / xgboost）</p>
 * @method void setEngine(string $Engine) 设置<p>推理引擎（vllm / xgboost）</p>
 * @method integer getReplicas() 获取<p>副本数</p>
 * @method void setReplicas(integer $Replicas) 设置<p>副本数</p>
 * @method string getResourcePartitionId() 获取<p>资源分区 ID（目标 K8s 集群分区）</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>资源分区 ID（目标 K8s 集群分区）</p>
 * @method string getImage() 获取<p>Ray Serve 部署镜像</p>
 * @method void setImage(string $Image) 设置<p>Ray Serve 部署镜像</p>
 * @method string getModelIdentifier() 获取<p>模型标识符（OpenAI 兼容 API 中的 model 字段）</p>
 * @method void setModelIdentifier(string $ModelIdentifier) 设置<p>模型标识符（OpenAI 兼容 API 中的 model 字段）</p>
 * @method string getQueue() 获取<p>队列名（K8s namespace）</p>
 * @method void setQueue(string $Queue) 设置<p>队列名（K8s namespace）</p>
 * @method string getDeploymentName() 获取<p>部署名称（可选，未提供时自动生成）</p>
 * @method void setDeploymentName(string $DeploymentName) 设置<p>部署名称（可选，未提供时自动生成）</p>
 * @method string getModelVersion() 获取<p>模型版本（如 v1, v2），未提供时使用最新版本</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本（如 v1, v2），未提供时使用最新版本</p>
 * @method boolean getHeadHighAvailabilityEnabled() 获取<p>ray head 是否开始高可用（是否申请 redis 实例用于 head 连接）</p>
 * @method void setHeadHighAvailabilityEnabled(boolean $HeadHighAvailabilityEnabled) 设置<p>ray head 是否开始高可用（是否申请 redis 实例用于 head 连接）</p>
 * @method string getAdvancedParams() 获取<p>高级参数（JSON 字符串，可选）</p>
 * @method void setAdvancedParams(string $AdvancedParams) 设置<p>高级参数（JSON 字符串，可选）</p>
 * @method string getImagePullPolicy() 获取<p>镜像拉取策略（默认 IfNotPresent）</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置<p>镜像拉取策略（默认 IfNotPresent）</p>
 * @method boolean getAutoscalingEnabled() 获取<p>是否启用弹性伸缩</p>
 * @method void setAutoscalingEnabled(boolean $AutoscalingEnabled) 设置<p>是否启用弹性伸缩</p>
 * @method integer getMinReplicas() 获取<p>最小副本数（启用弹性伸缩时生效，0 表示缩容到 0）</p>
 * @method void setMinReplicas(integer $MinReplicas) 设置<p>最小副本数（启用弹性伸缩时生效，0 表示缩容到 0）</p>
 * @method integer getMaxReplicas() 获取<p>最大副本数（启用弹性伸缩时生效）</p>
 * @method void setMaxReplicas(integer $MaxReplicas) 设置<p>最大副本数（启用弹性伸缩时生效）</p>
 * @method string getAutoscalerOptions() 获取<p>Autoscaler 配置（JSON 字符串）</p>
 * @method void setAutoscalerOptions(string $AutoscalerOptions) 设置<p>Autoscaler 配置（JSON 字符串）</p>
 * @method array getApiKeyIds() 获取<p>ApiKeyIds</p>
 * @method void setApiKeyIds(array $ApiKeyIds) 设置<p>ApiKeyIds</p>
 * @method string getAdvancedOptions() 获取<p>AdvancedOptions 高级参数 JSON 字符串（可选），扁平 KV 结构，作用于 K8s RayService CR YAML 字段级</p>
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>AdvancedOptions 高级参数 JSON 字符串（可选），扁平 KV 结构，作用于 K8s RayService CR YAML 字段级</p>
 * @method array getResourceTags() 获取<p>系统标签列表（TagKey-TagValue）</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>系统标签列表（TagKey-TagValue）</p>
 * @method boolean getIsCustom() 获取<p>自定义RayServe提交</p>
 * @method void setIsCustom(boolean $IsCustom) 设置<p>自定义RayServe提交</p>
 * @method string getRuntimeEnv() 获取<p>python runtime env</p>
 * @method void setRuntimeEnv(string $RuntimeEnv) 设置<p>python runtime env</p>
 */
class CreateInferenceServiceRequest extends AbstractModel
{
    /**
     * @var string <p>推理服务名称</p>
     */
    public $Name;

    /**
     * @var string <p>模型 UID（业务级唯一标识）</p>
     */
    public $ModelUid;

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
     * @var string <p>Ray Serve 部署镜像</p>
     */
    public $Image;

    /**
     * @var string <p>模型标识符（OpenAI 兼容 API 中的 model 字段）</p>
     */
    public $ModelIdentifier;

    /**
     * @var string <p>队列名（K8s namespace）</p>
     */
    public $Queue;

    /**
     * @var string <p>部署名称（可选，未提供时自动生成）</p>
     */
    public $DeploymentName;

    /**
     * @var string <p>模型版本（如 v1, v2），未提供时使用最新版本</p>
     */
    public $ModelVersion;

    /**
     * @var boolean <p>ray head 是否开始高可用（是否申请 redis 实例用于 head 连接）</p>
     */
    public $HeadHighAvailabilityEnabled;

    /**
     * @var string <p>高级参数（JSON 字符串，可选）</p>
     */
    public $AdvancedParams;

    /**
     * @var string <p>镜像拉取策略（默认 IfNotPresent）</p>
     */
    public $ImagePullPolicy;

    /**
     * @var boolean <p>是否启用弹性伸缩</p>
     */
    public $AutoscalingEnabled;

    /**
     * @var integer <p>最小副本数（启用弹性伸缩时生效，0 表示缩容到 0）</p>
     */
    public $MinReplicas;

    /**
     * @var integer <p>最大副本数（启用弹性伸缩时生效）</p>
     */
    public $MaxReplicas;

    /**
     * @var string <p>Autoscaler 配置（JSON 字符串）</p>
     */
    public $AutoscalerOptions;

    /**
     * @var array <p>ApiKeyIds</p>
     */
    public $ApiKeyIds;

    /**
     * @var string <p>AdvancedOptions 高级参数 JSON 字符串（可选），扁平 KV 结构，作用于 K8s RayService CR YAML 字段级</p>
     */
    public $AdvancedOptions;

    /**
     * @var array <p>系统标签列表（TagKey-TagValue）</p>
     */
    public $ResourceTags;

    /**
     * @var boolean <p>自定义RayServe提交</p>
     */
    public $IsCustom;

    /**
     * @var string <p>python runtime env</p>
     */
    public $RuntimeEnv;

    /**
     * @param string $Name <p>推理服务名称</p>
     * @param string $ModelUid <p>模型 UID（业务级唯一标识）</p>
     * @param string $Engine <p>推理引擎（vllm / xgboost）</p>
     * @param integer $Replicas <p>副本数</p>
     * @param string $ResourcePartitionId <p>资源分区 ID（目标 K8s 集群分区）</p>
     * @param string $Image <p>Ray Serve 部署镜像</p>
     * @param string $ModelIdentifier <p>模型标识符（OpenAI 兼容 API 中的 model 字段）</p>
     * @param string $Queue <p>队列名（K8s namespace）</p>
     * @param string $DeploymentName <p>部署名称（可选，未提供时自动生成）</p>
     * @param string $ModelVersion <p>模型版本（如 v1, v2），未提供时使用最新版本</p>
     * @param boolean $HeadHighAvailabilityEnabled <p>ray head 是否开始高可用（是否申请 redis 实例用于 head 连接）</p>
     * @param string $AdvancedParams <p>高级参数（JSON 字符串，可选）</p>
     * @param string $ImagePullPolicy <p>镜像拉取策略（默认 IfNotPresent）</p>
     * @param boolean $AutoscalingEnabled <p>是否启用弹性伸缩</p>
     * @param integer $MinReplicas <p>最小副本数（启用弹性伸缩时生效，0 表示缩容到 0）</p>
     * @param integer $MaxReplicas <p>最大副本数（启用弹性伸缩时生效）</p>
     * @param string $AutoscalerOptions <p>Autoscaler 配置（JSON 字符串）</p>
     * @param array $ApiKeyIds <p>ApiKeyIds</p>
     * @param string $AdvancedOptions <p>AdvancedOptions 高级参数 JSON 字符串（可选），扁平 KV 结构，作用于 K8s RayService CR YAML 字段级</p>
     * @param array $ResourceTags <p>系统标签列表（TagKey-TagValue）</p>
     * @param boolean $IsCustom <p>自定义RayServe提交</p>
     * @param string $RuntimeEnv <p>python runtime env</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ModelUid",$param) and $param["ModelUid"] !== null) {
            $this->ModelUid = $param["ModelUid"];
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

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("ModelIdentifier",$param) and $param["ModelIdentifier"] !== null) {
            $this->ModelIdentifier = $param["ModelIdentifier"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("DeploymentName",$param) and $param["DeploymentName"] !== null) {
            $this->DeploymentName = $param["DeploymentName"];
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

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }

        if (array_key_exists("AutoscalingEnabled",$param) and $param["AutoscalingEnabled"] !== null) {
            $this->AutoscalingEnabled = $param["AutoscalingEnabled"];
        }

        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("AutoscalerOptions",$param) and $param["AutoscalerOptions"] !== null) {
            $this->AutoscalerOptions = $param["AutoscalerOptions"];
        }

        if (array_key_exists("ApiKeyIds",$param) and $param["ApiKeyIds"] !== null) {
            $this->ApiKeyIds = $param["ApiKeyIds"];
        }

        if (array_key_exists("AdvancedOptions",$param) and $param["AdvancedOptions"] !== null) {
            $this->AdvancedOptions = $param["AdvancedOptions"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("IsCustom",$param) and $param["IsCustom"] !== null) {
            $this->IsCustom = $param["IsCustom"];
        }

        if (array_key_exists("RuntimeEnv",$param) and $param["RuntimeEnv"] !== null) {
            $this->RuntimeEnv = $param["RuntimeEnv"];
        }
    }
}
