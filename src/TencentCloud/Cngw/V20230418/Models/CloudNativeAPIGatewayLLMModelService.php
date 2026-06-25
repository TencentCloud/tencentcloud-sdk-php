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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LLM 模型服务
 *
 * @method string getId() 获取<p>模型服务 ID。</p>
 * @method void setId(string $Id) 设置<p>模型服务 ID。</p>
 * @method string getName() 获取<p>模型服务名称。</p>
 * @method void setName(string $Name) 设置<p>模型服务名称。</p>
 * @method string getCreateTime() 获取<p>创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p>
 * @method string getModifyTime() 获取<p>修改时间。</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间。</p>
 * @method string getServiceType() 获取<p>服务类型，目前只支持xa0LLMService。</p>
 * @method void setServiceType(string $ServiceType) 设置<p>服务类型，目前只支持xa0LLMService。</p>
 * @method string getModelProvider() 获取<p>选择模型提供商, 选项：OpenAI、Anthropic、Azure OpenAI、自定义HTTP。</p>
 * @method void setModelProvider(string $ModelProvider) 设置<p>选择模型提供商, 选项：OpenAI、Anthropic、Azure OpenAI、自定义HTTP。</p>
 * @method string getModelProtocol() 获取<p>API协议标准，根据供应商动态变化：OpenAI→OpenAI/v1，Anthropic→Anthropic/v1等</p>
 * @method void setModelProtocol(string $ModelProtocol) 设置<p>API协议标准，根据供应商动态变化：OpenAI→OpenAI/v1，Anthropic→Anthropic/v1等</p>
 * @method string getUpstreamURL() 获取<p>自定义的模型请求 URL。</p>
 * @method void setUpstreamURL(string $UpstreamURL) 设置<p>自定义的模型请求 URL。</p>
 * @method string getModelSelector() 获取<p>模型选择方式，选项：Specify（指定模型）、PassThrough（透传请求模型）。</p>
 * @method void setModelSelector(string $ModelSelector) 设置<p>模型选择方式，选项：Specify（指定模型）、PassThrough（透传请求模型）。</p>
 * @method string getDefaultModel() 获取<p>默认模型，模型选择方式为 Specify 时必填。</p>
 * @method void setDefaultModel(string $DefaultModel) 设置<p>默认模型，模型选择方式为 Specify 时必填。</p>
 * @method boolean getEnableModelFallback() 获取<p>开启模型降级，模型选择方式为 Specify 时必填。</p>
 * @method void setEnableModelFallback(boolean $EnableModelFallback) 设置<p>开启模型降级，模型选择方式为 Specify 时必填。</p>
 * @method CloudNativeAPIGatewayLLMModelFallbackRule getModelFallbackRule() 获取<p>可以配置备用模型规则，EnableSpecifyModelFallbackxa0为 true 时必填。</p>
 * @method void setModelFallbackRule(CloudNativeAPIGatewayLLMModelFallbackRule $ModelFallbackRule) 设置<p>可以配置备用模型规则，EnableSpecifyModelFallbackxa0为 true 时必填。</p>
 * @method boolean getEnableModelParamCheck() 获取<p>开启模型参数校验，是否校验客户端传递的 model 参数,xa0模型选择方式为 PassThrough 时必填。</p>
 * @method void setEnableModelParamCheck(boolean $EnableModelParamCheck) 设置<p>开启模型参数校验，是否校验客户端传递的 model 参数,xa0模型选择方式为 PassThrough 时必填。</p>
 * @method CloudNativeAPIGatewayLLMModelParamCheckInfo getModelParamCheckRule() 获取<p>模型检验信息，EnableModelParamCheckxa0为 true 时必填。</p>
 * @method void setModelParamCheckRule(CloudNativeAPIGatewayLLMModelParamCheckInfo $ModelParamCheckRule) 设置<p>模型检验信息，EnableModelParamCheckxa0为 true 时必填。</p>
 * @method string getDescription() 获取<p>描述。</p>
 * @method void setDescription(string $Description) 设置<p>描述。</p>
 * @method integer getConnectTimeout() 获取<p>连接超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：10000</p>
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置<p>连接超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：10000</p>
 * @method integer getWriteTimeout() 获取<p>写入超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
 * @method void setWriteTimeout(integer $WriteTimeout) 设置<p>写入超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
 * @method integer getReadTimeout() 获取<p>读取超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p>
 * @method void setReadTimeout(integer $ReadTimeout) 设置<p>读取超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p>
 * @method integer getRetries() 获取<p>重试次数</p><p>取值范围：[0, 5]</p><p>单位：次</p><p>默认值：0</p>
 * @method void setRetries(integer $Retries) 设置<p>重试次数</p><p>取值范围：[0, 5]</p><p>单位：次</p><p>默认值：0</p>
 * @method string getUpstreamUrlMode() 获取<p>路径拼接模式</p><p>枚举值：</p><ul><li>FixedPath： 固定路径</li><li>AutoConcat： 自动拼接</li></ul>
 * @method void setUpstreamUrlMode(string $UpstreamUrlMode) 设置<p>路径拼接模式</p><p>枚举值：</p><ul><li>FixedPath： 固定路径</li><li>AutoConcat： 自动拼接</li></ul>
 * @method string getSNI() 获取<p>sni</p>
 * @method void setSNI(string $SNI) 设置<p>sni</p>
 * @method AIGWLLMQuotaLimit getQuotaLimit() 获取<p>配额限制</p>
 * @method void setQuotaLimit(AIGWLLMQuotaLimit $QuotaLimit) 设置<p>配额限制</p>
 * @method string getTags() 获取<p>标签</p>
 * @method void setTags(string $Tags) 设置<p>标签</p>
 * @method array getSecretKeyIds() 获取<p>绑定的模型服务秘钥</p>
 * @method void setSecretKeyIds(array $SecretKeyIds) 设置<p>绑定的模型服务秘钥</p>
 */
class CloudNativeAPIGatewayLLMModelService extends AbstractModel
{
    /**
     * @var string <p>模型服务 ID。</p>
     */
    public $Id;

    /**
     * @var string <p>模型服务名称。</p>
     */
    public $Name;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间。</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>服务类型，目前只支持xa0LLMService。</p>
     */
    public $ServiceType;

    /**
     * @var string <p>选择模型提供商, 选项：OpenAI、Anthropic、Azure OpenAI、自定义HTTP。</p>
     */
    public $ModelProvider;

    /**
     * @var string <p>API协议标准，根据供应商动态变化：OpenAI→OpenAI/v1，Anthropic→Anthropic/v1等</p>
     */
    public $ModelProtocol;

    /**
     * @var string <p>自定义的模型请求 URL。</p>
     */
    public $UpstreamURL;

    /**
     * @var string <p>模型选择方式，选项：Specify（指定模型）、PassThrough（透传请求模型）。</p>
     */
    public $ModelSelector;

    /**
     * @var string <p>默认模型，模型选择方式为 Specify 时必填。</p>
     */
    public $DefaultModel;

    /**
     * @var boolean <p>开启模型降级，模型选择方式为 Specify 时必填。</p>
     */
    public $EnableModelFallback;

    /**
     * @var CloudNativeAPIGatewayLLMModelFallbackRule <p>可以配置备用模型规则，EnableSpecifyModelFallbackxa0为 true 时必填。</p>
     */
    public $ModelFallbackRule;

    /**
     * @var boolean <p>开启模型参数校验，是否校验客户端传递的 model 参数,xa0模型选择方式为 PassThrough 时必填。</p>
     */
    public $EnableModelParamCheck;

    /**
     * @var CloudNativeAPIGatewayLLMModelParamCheckInfo <p>模型检验信息，EnableModelParamCheckxa0为 true 时必填。</p>
     */
    public $ModelParamCheckRule;

    /**
     * @var string <p>描述。</p>
     */
    public $Description;

    /**
     * @var integer <p>连接超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：10000</p>
     */
    public $ConnectTimeout;

    /**
     * @var integer <p>写入超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
     */
    public $WriteTimeout;

    /**
     * @var integer <p>读取超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p>
     */
    public $ReadTimeout;

    /**
     * @var integer <p>重试次数</p><p>取值范围：[0, 5]</p><p>单位：次</p><p>默认值：0</p>
     */
    public $Retries;

    /**
     * @var string <p>路径拼接模式</p><p>枚举值：</p><ul><li>FixedPath： 固定路径</li><li>AutoConcat： 自动拼接</li></ul>
     */
    public $UpstreamUrlMode;

    /**
     * @var string <p>sni</p>
     */
    public $SNI;

    /**
     * @var AIGWLLMQuotaLimit <p>配额限制</p>
     */
    public $QuotaLimit;

    /**
     * @var string <p>标签</p>
     */
    public $Tags;

    /**
     * @var array <p>绑定的模型服务秘钥</p>
     */
    public $SecretKeyIds;

    /**
     * @param string $Id <p>模型服务 ID。</p>
     * @param string $Name <p>模型服务名称。</p>
     * @param string $CreateTime <p>创建时间。</p>
     * @param string $ModifyTime <p>修改时间。</p>
     * @param string $ServiceType <p>服务类型，目前只支持xa0LLMService。</p>
     * @param string $ModelProvider <p>选择模型提供商, 选项：OpenAI、Anthropic、Azure OpenAI、自定义HTTP。</p>
     * @param string $ModelProtocol <p>API协议标准，根据供应商动态变化：OpenAI→OpenAI/v1，Anthropic→Anthropic/v1等</p>
     * @param string $UpstreamURL <p>自定义的模型请求 URL。</p>
     * @param string $ModelSelector <p>模型选择方式，选项：Specify（指定模型）、PassThrough（透传请求模型）。</p>
     * @param string $DefaultModel <p>默认模型，模型选择方式为 Specify 时必填。</p>
     * @param boolean $EnableModelFallback <p>开启模型降级，模型选择方式为 Specify 时必填。</p>
     * @param CloudNativeAPIGatewayLLMModelFallbackRule $ModelFallbackRule <p>可以配置备用模型规则，EnableSpecifyModelFallbackxa0为 true 时必填。</p>
     * @param boolean $EnableModelParamCheck <p>开启模型参数校验，是否校验客户端传递的 model 参数,xa0模型选择方式为 PassThrough 时必填。</p>
     * @param CloudNativeAPIGatewayLLMModelParamCheckInfo $ModelParamCheckRule <p>模型检验信息，EnableModelParamCheckxa0为 true 时必填。</p>
     * @param string $Description <p>描述。</p>
     * @param integer $ConnectTimeout <p>连接超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：10000</p>
     * @param integer $WriteTimeout <p>写入超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
     * @param integer $ReadTimeout <p>读取超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p>
     * @param integer $Retries <p>重试次数</p><p>取值范围：[0, 5]</p><p>单位：次</p><p>默认值：0</p>
     * @param string $UpstreamUrlMode <p>路径拼接模式</p><p>枚举值：</p><ul><li>FixedPath： 固定路径</li><li>AutoConcat： 自动拼接</li></ul>
     * @param string $SNI <p>sni</p>
     * @param AIGWLLMQuotaLimit $QuotaLimit <p>配额限制</p>
     * @param string $Tags <p>标签</p>
     * @param array $SecretKeyIds <p>绑定的模型服务秘钥</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ModelProvider",$param) and $param["ModelProvider"] !== null) {
            $this->ModelProvider = $param["ModelProvider"];
        }

        if (array_key_exists("ModelProtocol",$param) and $param["ModelProtocol"] !== null) {
            $this->ModelProtocol = $param["ModelProtocol"];
        }

        if (array_key_exists("UpstreamURL",$param) and $param["UpstreamURL"] !== null) {
            $this->UpstreamURL = $param["UpstreamURL"];
        }

        if (array_key_exists("ModelSelector",$param) and $param["ModelSelector"] !== null) {
            $this->ModelSelector = $param["ModelSelector"];
        }

        if (array_key_exists("DefaultModel",$param) and $param["DefaultModel"] !== null) {
            $this->DefaultModel = $param["DefaultModel"];
        }

        if (array_key_exists("EnableModelFallback",$param) and $param["EnableModelFallback"] !== null) {
            $this->EnableModelFallback = $param["EnableModelFallback"];
        }

        if (array_key_exists("ModelFallbackRule",$param) and $param["ModelFallbackRule"] !== null) {
            $this->ModelFallbackRule = new CloudNativeAPIGatewayLLMModelFallbackRule();
            $this->ModelFallbackRule->deserialize($param["ModelFallbackRule"]);
        }

        if (array_key_exists("EnableModelParamCheck",$param) and $param["EnableModelParamCheck"] !== null) {
            $this->EnableModelParamCheck = $param["EnableModelParamCheck"];
        }

        if (array_key_exists("ModelParamCheckRule",$param) and $param["ModelParamCheckRule"] !== null) {
            $this->ModelParamCheckRule = new CloudNativeAPIGatewayLLMModelParamCheckInfo();
            $this->ModelParamCheckRule->deserialize($param["ModelParamCheckRule"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("WriteTimeout",$param) and $param["WriteTimeout"] !== null) {
            $this->WriteTimeout = $param["WriteTimeout"];
        }

        if (array_key_exists("ReadTimeout",$param) and $param["ReadTimeout"] !== null) {
            $this->ReadTimeout = $param["ReadTimeout"];
        }

        if (array_key_exists("Retries",$param) and $param["Retries"] !== null) {
            $this->Retries = $param["Retries"];
        }

        if (array_key_exists("UpstreamUrlMode",$param) and $param["UpstreamUrlMode"] !== null) {
            $this->UpstreamUrlMode = $param["UpstreamUrlMode"];
        }

        if (array_key_exists("SNI",$param) and $param["SNI"] !== null) {
            $this->SNI = $param["SNI"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = new AIGWLLMQuotaLimit();
            $this->QuotaLimit->deserialize($param["QuotaLimit"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("SecretKeyIds",$param) and $param["SecretKeyIds"] !== null) {
            $this->SecretKeyIds = $param["SecretKeyIds"];
        }
    }
}
