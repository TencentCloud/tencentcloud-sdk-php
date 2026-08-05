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
 * StopInferenceService返回参数结构体
 *
 * @method string getServiceId() 获取<p>推理服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(string $ServiceId) 设置<p>推理服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelUid() 获取<p>关联的模型UID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelUid(string $ModelUid) 设置<p>关联的模型UID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelName() 获取<p>关联的模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelName(string $ModelName) 设置<p>关联的模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelVersion() 获取<p>关联的模型版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelVersion(string $ModelVersion) 设置<p>关联的模型版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelIdentifier() 获取<p>模型标识符（OpenAI 兼容 API 中的 model 字段）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelIdentifier(string $ModelIdentifier) 设置<p>模型标识符（OpenAI 兼容 API 中的 model 字段）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelType() 获取<p>关联模型的类型（LLM / VLM / Embedding / Reranker / TTS / ASR / CV / NLP / ML）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelType(string $ModelType) 设置<p>关联模型的类型（LLM / VLM / Embedding / Reranker / TTS / ASR / CV / NLP / ML）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>服务状态（Running/Stopped/Deploying/Failed）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>服务状态（Running/Stopped/Deploying/Failed）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndpointUrl() 获取<p>服务端点URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpointUrl(string $EndpointUrl) 设置<p>服务端点URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnifiedEndpointUrl() 获取<p>OpenAI 兼容统一入口 URL（通过 API-Key 路由，适用于 LLM/Embedding/Reranker）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnifiedEndpointUrl(string $UnifiedEndpointUrl) 设置<p>OpenAI 兼容统一入口 URL（通过 API-Key 路由，适用于 LLM/Embedding/Reranker）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnifiedV2EndpointUrl() 获取<p>KServe V2 协议统一入口 URL（通过 API-Key + model name 路由，适用于 XGBoost 等传统 ML 模型）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnifiedV2EndpointUrl(string $UnifiedV2EndpointUrl) 设置<p>KServe V2 协议统一入口 URL（通过 API-Key + model name 路由，适用于 XGBoost 等传统 ML 模型）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取<p>主账号UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置<p>主账号UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>创建时间（Unix 时间戳，毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（Unix 时间戳，毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>更新时间（Unix 时间戳，毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间（Unix 时间戳，毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeploymentCount() 获取<p>部署数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeploymentCount(integer $DeploymentCount) 设置<p>部署数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasRunningDeployment() 获取<p>是否存在至少一个运行中的部署</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasRunningDeployment(boolean $HasRunningDeployment) 设置<p>是否存在至少一个运行中的部署</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getApiKeyAuthEnabled() 获取<p>是否启用 API-Key 鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiKeyAuthEnabled(boolean $ApiKeyAuthEnabled) 设置<p>是否启用 API-Key 鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getApiKeyAuthForceEnabled() 获取<p>是否强制开启 API-Key 鉴权（生产环境为 true，不允许关闭）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiKeyAuthForceEnabled(boolean $ApiKeyAuthForceEnabled) 设置<p>是否强制开启 API-Key 鉴权（生产环境为 true，不允许关闭）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSkipTlsVerify() 获取<p>是否跳过 TLS 证书验证（自签证书场景，前端 curl 命令需加 -k 参数）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkipTlsVerify(boolean $SkipTlsVerify) 设置<p>是否跳过 TLS 证书验证（自签证书场景，前端 curl 命令需加 -k 参数）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取<p>子账号UIN（实际操作者）</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>子账号UIN（实际操作者）</p>
 * @method CpuSummaryItem getCpuResourceSummary() 获取<p>运行中部署的 CPU 资源汇总</p>
 * @method void setCpuResourceSummary(CpuSummaryItem $CpuResourceSummary) 设置<p>运行中部署的 CPU 资源汇总</p>
 * @method string getResourceConfig() 获取<p>资源配置（JSON 字符串，取自第一个部署）</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置（JSON 字符串，取自第一个部署）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class StopInferenceServiceResponse extends AbstractModel
{
    /**
     * @var string <p>推理服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string <p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>关联的模型UID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelUid;

    /**
     * @var string <p>关联的模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelName;

    /**
     * @var string <p>关联的模型版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelVersion;

    /**
     * @var string <p>模型标识符（OpenAI 兼容 API 中的 model 字段）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelIdentifier;

    /**
     * @var string <p>关联模型的类型（LLM / VLM / Embedding / Reranker / TTS / ASR / CV / NLP / ML）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelType;

    /**
     * @var string <p>服务状态（Running/Stopped/Deploying/Failed）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>服务端点URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndpointUrl;

    /**
     * @var string <p>OpenAI 兼容统一入口 URL（通过 API-Key 路由，适用于 LLM/Embedding/Reranker）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnifiedEndpointUrl;

    /**
     * @var string <p>KServe V2 协议统一入口 URL（通过 API-Key + model name 路由，适用于 XGBoost 等传统 ML 模型）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnifiedV2EndpointUrl;

    /**
     * @var integer <p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>主账号UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var integer <p>创建时间（Unix 时间戳，毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间（Unix 时间戳，毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer <p>部署数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeploymentCount;

    /**
     * @var boolean <p>是否存在至少一个运行中的部署</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasRunningDeployment;

    /**
     * @var boolean <p>是否启用 API-Key 鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiKeyAuthEnabled;

    /**
     * @var boolean <p>是否强制开启 API-Key 鉴权（生产环境为 true，不允许关闭）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiKeyAuthForceEnabled;

    /**
     * @var boolean <p>是否跳过 TLS 证书验证（自签证书场景，前端 curl 命令需加 -k 参数）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkipTlsVerify;

    /**
     * @var string <p>子账号UIN（实际操作者）</p>
     */
    public $SubAccountUin;

    /**
     * @var CpuSummaryItem <p>运行中部署的 CPU 资源汇总</p>
     */
    public $CpuResourceSummary;

    /**
     * @var string <p>资源配置（JSON 字符串，取自第一个部署）</p>
     */
    public $ResourceConfig;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ServiceId <p>推理服务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>服务名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelUid <p>关联的模型UID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelName <p>关联的模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelVersion <p>关联的模型版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelIdentifier <p>模型标识符（OpenAI 兼容 API 中的 model 字段）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelType <p>关联模型的类型（LLM / VLM / Embedding / Reranker / TTS / ASR / CV / NLP / ML）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>服务状态（Running/Stopped/Deploying/Failed）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndpointUrl <p>服务端点URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnifiedEndpointUrl <p>OpenAI 兼容统一入口 URL（通过 API-Key 路由，适用于 LLM/Embedding/Reranker）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnifiedV2EndpointUrl <p>KServe V2 协议统一入口 URL（通过 API-Key + model name 路由，适用于 XGBoost 等传统 ML 模型）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin <p>主账号UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>创建时间（Unix 时间戳，毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>更新时间（Unix 时间戳，毫秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeploymentCount <p>部署数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasRunningDeployment <p>是否存在至少一个运行中的部署</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ApiKeyAuthEnabled <p>是否启用 API-Key 鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ApiKeyAuthForceEnabled <p>是否强制开启 API-Key 鉴权（生产环境为 true，不允许关闭）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SkipTlsVerify <p>是否跳过 TLS 证书验证（自签证书场景，前端 curl 命令需加 -k 参数）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin <p>子账号UIN（实际操作者）</p>
     * @param CpuSummaryItem $CpuResourceSummary <p>运行中部署的 CPU 资源汇总</p>
     * @param string $ResourceConfig <p>资源配置（JSON 字符串，取自第一个部署）</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ModelUid",$param) and $param["ModelUid"] !== null) {
            $this->ModelUid = $param["ModelUid"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("ModelIdentifier",$param) and $param["ModelIdentifier"] !== null) {
            $this->ModelIdentifier = $param["ModelIdentifier"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EndpointUrl",$param) and $param["EndpointUrl"] !== null) {
            $this->EndpointUrl = $param["EndpointUrl"];
        }

        if (array_key_exists("UnifiedEndpointUrl",$param) and $param["UnifiedEndpointUrl"] !== null) {
            $this->UnifiedEndpointUrl = $param["UnifiedEndpointUrl"];
        }

        if (array_key_exists("UnifiedV2EndpointUrl",$param) and $param["UnifiedV2EndpointUrl"] !== null) {
            $this->UnifiedV2EndpointUrl = $param["UnifiedV2EndpointUrl"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DeploymentCount",$param) and $param["DeploymentCount"] !== null) {
            $this->DeploymentCount = $param["DeploymentCount"];
        }

        if (array_key_exists("HasRunningDeployment",$param) and $param["HasRunningDeployment"] !== null) {
            $this->HasRunningDeployment = $param["HasRunningDeployment"];
        }

        if (array_key_exists("ApiKeyAuthEnabled",$param) and $param["ApiKeyAuthEnabled"] !== null) {
            $this->ApiKeyAuthEnabled = $param["ApiKeyAuthEnabled"];
        }

        if (array_key_exists("ApiKeyAuthForceEnabled",$param) and $param["ApiKeyAuthForceEnabled"] !== null) {
            $this->ApiKeyAuthForceEnabled = $param["ApiKeyAuthForceEnabled"];
        }

        if (array_key_exists("SkipTlsVerify",$param) and $param["SkipTlsVerify"] !== null) {
            $this->SkipTlsVerify = $param["SkipTlsVerify"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("CpuResourceSummary",$param) and $param["CpuResourceSummary"] !== null) {
            $this->CpuResourceSummary = new CpuSummaryItem();
            $this->CpuResourceSummary->deserialize($param["CpuResourceSummary"]);
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
