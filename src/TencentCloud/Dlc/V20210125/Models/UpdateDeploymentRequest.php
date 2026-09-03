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
     * @param string $DeploymentId <p>DeploymentId</p>
     * @param string $ModelVersion <p>模型版本（如 v1, v2），未提供时保持当前版本</p>
     * @param string $Engine <p>推理引擎（vllm）</p>
     * @param integer $Replicas <p>副本数</p>
     * @param boolean $AutoscalingEnabled <p>是否启用弹性伸缩</p>
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
    }
}
