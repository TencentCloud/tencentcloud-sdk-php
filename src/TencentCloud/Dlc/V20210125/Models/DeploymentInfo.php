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
 * 部署信息
 *
 * @method string getDeploymentId() 获取<p>部署 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeploymentId(string $DeploymentId) 设置<p>部署 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>部署名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>部署名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceId() 获取<p>关联的服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(string $ServiceId) 设置<p>关联的服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelVersion() 获取<p>部署使用的模型版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelVersion(string $ModelVersion) 设置<p>部署使用的模型版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>部署状态（Running/Stopped/Deploying/Failed）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>部署状态（Running/Stopped/Deploying/Failed）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngine() 获取<p>推理引擎（vLLM/SGLang 等）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngine(string $Engine) 设置<p>推理引擎（vLLM/SGLang 等）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicas() 获取<p>期望副本数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置<p>期望副本数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvailableReplicas() 获取<p>可用副本数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableReplicas(integer $AvailableReplicas) 设置<p>可用副本数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceConfig() 获取<p>资源配置（JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置（JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHeadHighAvailabilityEnabled() 获取<p>ray head 是否开启高可用</p>
 * @method void setHeadHighAvailabilityEnabled(boolean $HeadHighAvailabilityEnabled) 设置<p>ray head 是否开启高可用</p>
 * @method string getAdvancedParams() 获取<p>高级参数（JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedParams(string $AdvancedParams) 设置<p>高级参数（JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoscalingEnabled() 获取<p>是否开启自动伸缩</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoscalingEnabled(boolean $AutoscalingEnabled) 设置<p>是否开启自动伸缩</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelStorageConfig() 获取<p>模型存储配置（Catalog JSON，记录模型 COS 挂载信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelStorageConfig(string $ModelStorageConfig) 设置<p>模型存储配置（Catalog JSON，记录模型 COS 挂载信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNeutrinoServeId() 获取<p>Neutrino Serve ID (RayService CR name)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeutrinoServeId(string $NeutrinoServeId) 设置<p>Neutrino Serve ID (RayService CR name)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRayDashboardUrl() 获取<p>Ray Dashboard 访问地址（通过 Ingress 代理，仅 Running 状态的部署有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRayDashboardUrl(string $RayDashboardUrl) 设置<p>Ray Dashboard 访问地址（通过 Ingress 代理，仅 Running 状态的部署有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourcePartitionId() 获取<p>资源分区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>资源分区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueue() 获取<p>资源队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueue(string $Queue) 设置<p>资源队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>App id</p>
 * @method void setAppId(integer $AppId) 设置<p>App id</p>
 * @method string getUin() 获取<p>Uin</p>
 * @method void setUin(string $Uin) 设置<p>Uin</p>
 * @method string getSubAccountUin() 获取<p>SubAccountUin</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>SubAccountUin</p>
 * @method string getAdvancedOptions() 获取<p>AdvancedOptions 高级参数（JSON 字符串，扁平 KV 结构，key 形如 spec.rayClusterConfig.headGroupSpec.serviceType）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>AdvancedOptions 高级参数（JSON 字符串，扁平 KV 结构，key 形如 spec.rayClusterConfig.headGroupSpec.serviceType）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImage() 获取<p>自定义镜像地址（为空则使用引擎默认镜像）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(string $Image) 设置<p>自定义镜像地址（为空则使用引擎默认镜像）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourcePartitionName() 获取<p>资源分区名称（后端按 ResourcePartitionId 反查 ResourceService 填充；分区不存在或 ResourceManager 未启用时可能为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePartitionName(string $ResourcePartitionName) 设置<p>资源分区名称（后端按 ResourcePartitionId 反查 ResourceService 填充；分区不存在或 ResourceManager 未启用时可能为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeploymentInfo extends AbstractModel
{
    /**
     * @var string <p>部署 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeploymentId;

    /**
     * @var string <p>部署名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>关联的服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string <p>部署使用的模型版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelVersion;

    /**
     * @var string <p>部署状态（Running/Stopped/Deploying/Failed）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>推理引擎（vLLM/SGLang 等）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Engine;

    /**
     * @var integer <p>期望副本数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var integer <p>可用副本数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableReplicas;

    /**
     * @var string <p>资源配置（JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceConfig;

    /**
     * @var boolean <p>ray head 是否开启高可用</p>
     */
    public $HeadHighAvailabilityEnabled;

    /**
     * @var string <p>高级参数（JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedParams;

    /**
     * @var boolean <p>是否开启自动伸缩</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoscalingEnabled;

    /**
     * @var string <p>模型存储配置（Catalog JSON，记录模型 COS 挂载信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelStorageConfig;

    /**
     * @var integer <p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>Neutrino Serve ID (RayService CR name)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NeutrinoServeId;

    /**
     * @var string <p>Ray Dashboard 访问地址（通过 Ingress 代理，仅 Running 状态的部署有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RayDashboardUrl;

    /**
     * @var string <p>资源分区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>资源队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Queue;

    /**
     * @var integer <p>App id</p>
     */
    public $AppId;

    /**
     * @var string <p>Uin</p>
     */
    public $Uin;

    /**
     * @var string <p>SubAccountUin</p>
     */
    public $SubAccountUin;

    /**
     * @var string <p>AdvancedOptions 高级参数（JSON 字符串，扁平 KV 结构，key 形如 spec.rayClusterConfig.headGroupSpec.serviceType）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedOptions;

    /**
     * @var string <p>自定义镜像地址（为空则使用引擎默认镜像）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var string <p>资源分区名称（后端按 ResourcePartitionId 反查 ResourceService 填充；分区不存在或 ResourceManager 未启用时可能为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePartitionName;

    /**
     * @param string $DeploymentId <p>部署 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>部署名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceId <p>关联的服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelVersion <p>部署使用的模型版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>部署状态（Running/Stopped/Deploying/Failed）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Engine <p>推理引擎（vLLM/SGLang 等）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Replicas <p>期望副本数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvailableReplicas <p>可用副本数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceConfig <p>资源配置（JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HeadHighAvailabilityEnabled <p>ray head 是否开启高可用</p>
     * @param string $AdvancedParams <p>高级参数（JSON 字符串）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoscalingEnabled <p>是否开启自动伸缩</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelStorageConfig <p>模型存储配置（Catalog JSON，记录模型 COS 挂载信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NeutrinoServeId <p>Neutrino Serve ID (RayService CR name)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RayDashboardUrl <p>Ray Dashboard 访问地址（通过 Ingress 代理，仅 Running 状态的部署有值）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourcePartitionId <p>资源分区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Queue <p>资源队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>App id</p>
     * @param string $Uin <p>Uin</p>
     * @param string $SubAccountUin <p>SubAccountUin</p>
     * @param string $AdvancedOptions <p>AdvancedOptions 高级参数（JSON 字符串，扁平 KV 结构，key 形如 spec.rayClusterConfig.headGroupSpec.serviceType）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Image <p>自定义镜像地址（为空则使用引擎默认镜像）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourcePartitionName <p>资源分区名称（后端按 ResourcePartitionId 反查 ResourceService 填充；分区不存在或 ResourceManager 未启用时可能为 null）</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("AvailableReplicas",$param) and $param["AvailableReplicas"] !== null) {
            $this->AvailableReplicas = $param["AvailableReplicas"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
        }

        if (array_key_exists("HeadHighAvailabilityEnabled",$param) and $param["HeadHighAvailabilityEnabled"] !== null) {
            $this->HeadHighAvailabilityEnabled = $param["HeadHighAvailabilityEnabled"];
        }

        if (array_key_exists("AdvancedParams",$param) and $param["AdvancedParams"] !== null) {
            $this->AdvancedParams = $param["AdvancedParams"];
        }

        if (array_key_exists("AutoscalingEnabled",$param) and $param["AutoscalingEnabled"] !== null) {
            $this->AutoscalingEnabled = $param["AutoscalingEnabled"];
        }

        if (array_key_exists("ModelStorageConfig",$param) and $param["ModelStorageConfig"] !== null) {
            $this->ModelStorageConfig = $param["ModelStorageConfig"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("NeutrinoServeId",$param) and $param["NeutrinoServeId"] !== null) {
            $this->NeutrinoServeId = $param["NeutrinoServeId"];
        }

        if (array_key_exists("RayDashboardUrl",$param) and $param["RayDashboardUrl"] !== null) {
            $this->RayDashboardUrl = $param["RayDashboardUrl"];
        }

        if (array_key_exists("ResourcePartitionId",$param) and $param["ResourcePartitionId"] !== null) {
            $this->ResourcePartitionId = $param["ResourcePartitionId"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("AdvancedOptions",$param) and $param["AdvancedOptions"] !== null) {
            $this->AdvancedOptions = $param["AdvancedOptions"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("ResourcePartitionName",$param) and $param["ResourcePartitionName"] !== null) {
            $this->ResourcePartitionName = $param["ResourcePartitionName"];
        }
    }
}
