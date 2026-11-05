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
 * UpdateDeployment请求参数结构体
 *
 * @method string getDeploymentId() 获取<p>DeploymentId</p>
 * @method void setDeploymentId(string $DeploymentId) 设置<p>DeploymentId</p>
 * @method string getModelVersion() 获取<p>模型版本（如 v1, v2），未提供时保持当前版本</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本（如 v1, v2），未提供时保持当前版本</p>
 * @method string getEngine() 获取<p>推理引擎（vllm）</p>
 * @method void setEngine(string $Engine) 设置<p>推理引擎（vllm）</p>
 * @method integer getReplicas() 获取<p>副本数</p>
 * @method void setReplicas(integer $Replicas) 设置<p>副本数</p>
 * @method boolean getAutoscalingEnabled() 获取<p>是否启用弹性伸缩</p>
 * @method void setAutoscalingEnabled(boolean $AutoscalingEnabled) 设置<p>是否启用弹性伸缩</p>
 * @method string getCodePackageUri() 获取<p>代码包 URI（可选，未传时从 primary deployment 继承）</p>
 * @method void setCodePackageUri(string $CodePackageUri) 设置<p>代码包 URI（可选，未传时从 primary deployment 继承）</p>
 * @method string getCodePackageOriginalName() 获取<p>代码包原始文件名（可选，详情页「代码引用」回显用，仅记录不参与业务逻辑）</p>
 * @method void setCodePackageOriginalName(string $CodePackageOriginalName) 设置<p>代码包原始文件名（可选，详情页「代码引用」回显用，仅记录不参与业务逻辑）</p>
 * @method string getCrOverrides() 获取<p>CR / PodSpec overrides JSON（可选）</p>
 * @method void setCrOverrides(string $CrOverrides) 设置<p>CR / PodSpec overrides JSON（可选）</p>
 * @method boolean getHeadHighAvailabilityEnabled() 获取<p>Head 节点高可用开关（可选，不传或 true 为开启，仅 false 为关闭；与当前值不同会触发服务重建）</p>
 * @method void setHeadHighAvailabilityEnabled(boolean $HeadHighAvailabilityEnabled) 设置<p>Head 节点高可用开关（可选，不传或 true 为开启，仅 false 为关闭；与当前值不同会触发服务重建）</p>
 * @method array getLoraBindings() 获取<p>可选：创建时一并挂载的 LoRA 模型版本（首次启动即生效）</p>
 * @method void setLoraBindings(array $LoraBindings) 设置<p>可选：创建时一并挂载的 LoRA 模型版本（首次启动即生效）</p>
 * @method string getRuntimeEnv() 获取<p>ray runtime env 字段</p>
 * @method void setRuntimeEnv(string $RuntimeEnv) 设置<p>ray runtime env 字段</p>
 */
class UpdateDeploymentRequest extends AbstractModel
{
    /**
     * @var string <p>DeploymentId</p>
     */
    public $DeploymentId;

    /**
     * @var string <p>模型版本（如 v1, v2），未提供时保持当前版本</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>推理引擎（vllm）</p>
     */
    public $Engine;

    /**
     * @var integer <p>副本数</p>
     */
    public $Replicas;

    /**
     * @var boolean <p>是否启用弹性伸缩</p>
     */
    public $AutoscalingEnabled;

    /**
     * @var string <p>代码包 URI（可选，未传时从 primary deployment 继承）</p>
     */
    public $CodePackageUri;

    /**
     * @var string <p>代码包原始文件名（可选，详情页「代码引用」回显用，仅记录不参与业务逻辑）</p>
     */
    public $CodePackageOriginalName;

    /**
     * @var string <p>CR / PodSpec overrides JSON（可选）</p>
     */
    public $CrOverrides;

    /**
     * @var boolean <p>Head 节点高可用开关（可选，不传或 true 为开启，仅 false 为关闭；与当前值不同会触发服务重建）</p>
     */
    public $HeadHighAvailabilityEnabled;

    /**
     * @var array <p>可选：创建时一并挂载的 LoRA 模型版本（首次启动即生效）</p>
     */
    public $LoraBindings;

    /**
     * @var string <p>ray runtime env 字段</p>
     */
    public $RuntimeEnv;

    /**
     * @param string $DeploymentId <p>DeploymentId</p>
     * @param string $ModelVersion <p>模型版本（如 v1, v2），未提供时保持当前版本</p>
     * @param string $Engine <p>推理引擎（vllm）</p>
     * @param integer $Replicas <p>副本数</p>
     * @param boolean $AutoscalingEnabled <p>是否启用弹性伸缩</p>
     * @param string $CodePackageUri <p>代码包 URI（可选，未传时从 primary deployment 继承）</p>
     * @param string $CodePackageOriginalName <p>代码包原始文件名（可选，详情页「代码引用」回显用，仅记录不参与业务逻辑）</p>
     * @param string $CrOverrides <p>CR / PodSpec overrides JSON（可选）</p>
     * @param boolean $HeadHighAvailabilityEnabled <p>Head 节点高可用开关（可选，不传或 true 为开启，仅 false 为关闭；与当前值不同会触发服务重建）</p>
     * @param array $LoraBindings <p>可选：创建时一并挂载的 LoRA 模型版本（首次启动即生效）</p>
     * @param string $RuntimeEnv <p>ray runtime env 字段</p>
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
        if (array_key_exists("DeploymentId",$param) and $param["DeploymentId"] !== null) {
            $this->DeploymentId = $param["DeploymentId"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("AutoscalingEnabled",$param) and $param["AutoscalingEnabled"] !== null) {
            $this->AutoscalingEnabled = $param["AutoscalingEnabled"];
        }

        if (array_key_exists("CodePackageUri",$param) and $param["CodePackageUri"] !== null) {
            $this->CodePackageUri = $param["CodePackageUri"];
        }

        if (array_key_exists("CodePackageOriginalName",$param) and $param["CodePackageOriginalName"] !== null) {
            $this->CodePackageOriginalName = $param["CodePackageOriginalName"];
        }

        if (array_key_exists("CrOverrides",$param) and $param["CrOverrides"] !== null) {
            $this->CrOverrides = $param["CrOverrides"];
        }

        if (array_key_exists("HeadHighAvailabilityEnabled",$param) and $param["HeadHighAvailabilityEnabled"] !== null) {
            $this->HeadHighAvailabilityEnabled = $param["HeadHighAvailabilityEnabled"];
        }

        if (array_key_exists("LoraBindings",$param) and $param["LoraBindings"] !== null) {
            $this->LoraBindings = [];
            foreach ($param["LoraBindings"] as $key => $value){
                $obj = new LoraAdapterBinding();
                $obj->deserialize($value);
                array_push($this->LoraBindings, $obj);
            }
        }

        if (array_key_exists("RuntimeEnv",$param) and $param["RuntimeEnv"] !== null) {
            $this->RuntimeEnv = $param["RuntimeEnv"];
        }
    }
}
