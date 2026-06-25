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
 * ModifyCloudNativeAPIGatewayLLMModelService请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关 id。</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关 id。</p>
 * @method string getModelServiceId() 获取<p>模型服务 ID，全局唯一标识。</p>
 * @method void setModelServiceId(string $ModelServiceId) 设置<p>模型服务 ID，全局唯一标识。</p>
 * @method string getName() 获取<p>修改服务名称，长度2-50字符，支持中英文、数字、下划线。</p>
 * @method void setName(string $Name) 设置<p>修改服务名称，长度2-50字符，支持中英文、数字、下划线。</p>
 * @method string getDefaultModel() 获取<p>修改默认模型，模型选择方式为 Specify 时必填。</p>
 * @method void setDefaultModel(string $DefaultModel) 设置<p>修改默认模型，模型选择方式为 Specify 时必填。</p>
 * @method string getModelSelector() 获取<p>修改模型选择方式，选项：Specify（指定模型）、PassThrough（透传请求模型）。</p>
 * @method void setModelSelector(string $ModelSelector) 设置<p>修改模型选择方式，选项：Specify（指定模型）、PassThrough（透传请求模型）。</p>
 * @method boolean getEnableModelFallback() 获取<p>修改开启模型降级，模型选择方式为 Specify 时必填。</p>
 * @method void setEnableModelFallback(boolean $EnableModelFallback) 设置<p>修改开启模型降级，模型选择方式为 Specify 时必填。</p>
 * @method CloudNativeAPIGatewayLLMModelFallbackRule getModelFallbackRule() 获取<p>修改可以配置备用模型规则，EnableSpecifyModelFallback 为 true 时必填。</p>
 * @method void setModelFallbackRule(CloudNativeAPIGatewayLLMModelFallbackRule $ModelFallbackRule) 设置<p>修改可以配置备用模型规则，EnableSpecifyModelFallback 为 true 时必填。</p>
 * @method boolean getEnableModelParamCheck() 获取<p>修改开启模型参数校验，是否校验客户端传递的 model 参数, 模型选择方式为 PassThrough 时必填</p>
 * @method void setEnableModelParamCheck(boolean $EnableModelParamCheck) 设置<p>修改开启模型参数校验，是否校验客户端传递的 model 参数, 模型选择方式为 PassThrough 时必填</p>
 * @method CloudNativeAPIGatewayLLMModelParamCheckInfo getModelParamCheckRule() 获取<p>修改模型检验信息，EnableModelParamCheck 为 true 时必填。</p>
 * @method void setModelParamCheckRule(CloudNativeAPIGatewayLLMModelParamCheckInfo $ModelParamCheckRule) 设置<p>修改模型检验信息，EnableModelParamCheck 为 true 时必填。</p>
 * @method string getDescription() 获取<p>修改描述。</p>
 * @method void setDescription(string $Description) 设置<p>修改描述。</p>
 * @method string getUpstreamURL() 获取<p>修改模型服务地址</p>
 * @method void setUpstreamURL(string $UpstreamURL) 设置<p>修改模型服务地址</p>
 * @method integer getConnectTimeout() 获取<p>连接超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：10000</p>
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置<p>连接超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：10000</p>
 * @method integer getWriteTimeout() 获取<p>写入超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
 * @method void setWriteTimeout(integer $WriteTimeout) 设置<p>写入超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
 * @method integer getReadTimeout() 获取<p>读取超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
 * @method void setReadTimeout(integer $ReadTimeout) 设置<p>读取超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
 * @method integer getRetries() 获取<p>重试次数</p><p>取值范围：[0, 5]</p><p>单位：次</p><p>默认值：0</p>
 * @method void setRetries(integer $Retries) 设置<p>重试次数</p><p>取值范围：[0, 5]</p><p>单位：次</p><p>默认值：0</p>
 * @method string getUpstreamUrlMode() 获取<p>路径拼接模式</p><p>枚举值：</p><ul><li>FixedPath： 固定路径</li><li>AutoConcat： 自动拼接</li></ul>
 * @method void setUpstreamUrlMode(string $UpstreamUrlMode) 设置<p>路径拼接模式</p><p>枚举值：</p><ul><li>FixedPath： 固定路径</li><li>AutoConcat： 自动拼接</li></ul>
 * @method string getSNI() 获取<p>SNI</p>
 * @method void setSNI(string $SNI) 设置<p>SNI</p>
 * @method AIGWLLMQuotaLimit getQuotaLimit() 获取<p>模型服务级别的配额上限（RPM/TPM）。需要网关版本 ≥ 3.9.4。</p>
 * @method void setQuotaLimit(AIGWLLMQuotaLimit $QuotaLimit) 设置<p>模型服务级别的配额上限（RPM/TPM）。需要网关版本 ≥ 3.9.4。</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 */
class ModifyCloudNativeAPIGatewayLLMModelServiceRequest extends AbstractModel
{
    /**
     * @var string <p>网关 id。</p>
     */
    public $GatewayId;

    /**
     * @var string <p>模型服务 ID，全局唯一标识。</p>
     */
    public $ModelServiceId;

    /**
     * @var string <p>修改服务名称，长度2-50字符，支持中英文、数字、下划线。</p>
     */
    public $Name;

    /**
     * @var string <p>修改默认模型，模型选择方式为 Specify 时必填。</p>
     */
    public $DefaultModel;

    /**
     * @var string <p>修改模型选择方式，选项：Specify（指定模型）、PassThrough（透传请求模型）。</p>
     */
    public $ModelSelector;

    /**
     * @var boolean <p>修改开启模型降级，模型选择方式为 Specify 时必填。</p>
     */
    public $EnableModelFallback;

    /**
     * @var CloudNativeAPIGatewayLLMModelFallbackRule <p>修改可以配置备用模型规则，EnableSpecifyModelFallback 为 true 时必填。</p>
     */
    public $ModelFallbackRule;

    /**
     * @var boolean <p>修改开启模型参数校验，是否校验客户端传递的 model 参数, 模型选择方式为 PassThrough 时必填</p>
     */
    public $EnableModelParamCheck;

    /**
     * @var CloudNativeAPIGatewayLLMModelParamCheckInfo <p>修改模型检验信息，EnableModelParamCheck 为 true 时必填。</p>
     */
    public $ModelParamCheckRule;

    /**
     * @var string <p>修改描述。</p>
     */
    public $Description;

    /**
     * @var string <p>修改模型服务地址</p>
     */
    public $UpstreamURL;

    /**
     * @var integer <p>连接超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：10000</p>
     */
    public $ConnectTimeout;

    /**
     * @var integer <p>写入超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
     */
    public $WriteTimeout;

    /**
     * @var integer <p>读取超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
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
     * @var string <p>SNI</p>
     */
    public $SNI;

    /**
     * @var AIGWLLMQuotaLimit <p>模型服务级别的配额上限（RPM/TPM）。需要网关版本 ≥ 3.9.4。</p>
     */
    public $QuotaLimit;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @param string $GatewayId <p>网关 id。</p>
     * @param string $ModelServiceId <p>模型服务 ID，全局唯一标识。</p>
     * @param string $Name <p>修改服务名称，长度2-50字符，支持中英文、数字、下划线。</p>
     * @param string $DefaultModel <p>修改默认模型，模型选择方式为 Specify 时必填。</p>
     * @param string $ModelSelector <p>修改模型选择方式，选项：Specify（指定模型）、PassThrough（透传请求模型）。</p>
     * @param boolean $EnableModelFallback <p>修改开启模型降级，模型选择方式为 Specify 时必填。</p>
     * @param CloudNativeAPIGatewayLLMModelFallbackRule $ModelFallbackRule <p>修改可以配置备用模型规则，EnableSpecifyModelFallback 为 true 时必填。</p>
     * @param boolean $EnableModelParamCheck <p>修改开启模型参数校验，是否校验客户端传递的 model 参数, 模型选择方式为 PassThrough 时必填</p>
     * @param CloudNativeAPIGatewayLLMModelParamCheckInfo $ModelParamCheckRule <p>修改模型检验信息，EnableModelParamCheck 为 true 时必填。</p>
     * @param string $Description <p>修改描述。</p>
     * @param string $UpstreamURL <p>修改模型服务地址</p>
     * @param integer $ConnectTimeout <p>连接超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：10000</p>
     * @param integer $WriteTimeout <p>写入超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
     * @param integer $ReadTimeout <p>读取超时时间</p><p>取值范围：[1, 3600000]</p><p>单位：毫秒</p><p>默认值：60000</p>
     * @param integer $Retries <p>重试次数</p><p>取值范围：[0, 5]</p><p>单位：次</p><p>默认值：0</p>
     * @param string $UpstreamUrlMode <p>路径拼接模式</p><p>枚举值：</p><ul><li>FixedPath： 固定路径</li><li>AutoConcat： 自动拼接</li></ul>
     * @param string $SNI <p>SNI</p>
     * @param AIGWLLMQuotaLimit $QuotaLimit <p>模型服务级别的配额上限（RPM/TPM）。需要网关版本 ≥ 3.9.4。</p>
     * @param array $Tags <p>标签</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ModelServiceId",$param) and $param["ModelServiceId"] !== null) {
            $this->ModelServiceId = $param["ModelServiceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DefaultModel",$param) and $param["DefaultModel"] !== null) {
            $this->DefaultModel = $param["DefaultModel"];
        }

        if (array_key_exists("ModelSelector",$param) and $param["ModelSelector"] !== null) {
            $this->ModelSelector = $param["ModelSelector"];
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

        if (array_key_exists("UpstreamURL",$param) and $param["UpstreamURL"] !== null) {
            $this->UpstreamURL = $param["UpstreamURL"];
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
    }
}
