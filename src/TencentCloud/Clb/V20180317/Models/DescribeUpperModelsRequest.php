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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUpperModels请求参数结构体
 *
 * @method string getAccessType() 获取<p>接入类型：PublicBYOK/PublicCustom/PrivateCustom</p>
 * @method void setAccessType(string $AccessType) 设置<p>接入类型：PublicBYOK/PublicCustom/PrivateCustom</p>
 * @method string getApiBase() 获取<p>上游 Provider API 地址</p><p>示例：https://api.moonshot.cn</p>
 * @method void setApiBase(string $ApiBase) 设置<p>上游 Provider API 地址</p><p>示例：https://api.moonshot.cn</p>
 * @method string getApiKey() 获取<p>上游 Provider API Key</p><p>用于鉴权访问上游模型列表接口</p>
 * @method void setApiKey(string $ApiKey) 设置<p>上游 Provider API Key</p><p>用于鉴权访问上游模型列表接口</p>
 * @method string getHostHeader() 获取<p>自定义 Host Header，可选</p><p>仅 VPC 内网场景需要，用于指定请求的 Host 头</p>
 * @method void setHostHeader(string $HostHeader) 设置<p>自定义 Host Header，可选</p><p>仅 VPC 内网场景需要，用于指定请求的 Host 头</p>
 * @method string getKeyId() 获取<p>Key Id 配合ServiceProviderId一同输入，不指定则默认选用最近创建的Key</p>
 * @method void setKeyId(string $KeyId) 设置<p>Key Id 配合ServiceProviderId一同输入，不指定则默认选用最近创建的Key</p>
 * @method string getModelPath() 获取<p>模型列表端点路径，可选</p><p>默认值：/v1/models</p>
 * @method void setModelPath(string $ModelPath) 设置<p>模型列表端点路径，可选</p><p>默认值：/v1/models</p>
 * @method string getModelProtocol() 获取<p>模型协议</p>
 * @method void setModelProtocol(string $ModelProtocol) 设置<p>模型协议</p>
 * @method string getModelProvider() 获取<p>模型提供商</p>
 * @method void setModelProvider(string $ModelProvider) 设置<p>模型提供商</p>
 * @method string getServiceProviderId() 获取<p>BYOK 业务 ID，可选</p><p>格式：byok-xxxxxxxx</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>BYOK 业务 ID，可选</p><p>格式：byok-xxxxxxxx</p>
 */
class DescribeUpperModelsRequest extends AbstractModel
{
    /**
     * @var string <p>接入类型：PublicBYOK/PublicCustom/PrivateCustom</p>
     */
    public $AccessType;

    /**
     * @var string <p>上游 Provider API 地址</p><p>示例：https://api.moonshot.cn</p>
     */
    public $ApiBase;

    /**
     * @var string <p>上游 Provider API Key</p><p>用于鉴权访问上游模型列表接口</p>
     */
    public $ApiKey;

    /**
     * @var string <p>自定义 Host Header，可选</p><p>仅 VPC 内网场景需要，用于指定请求的 Host 头</p>
     */
    public $HostHeader;

    /**
     * @var string <p>Key Id 配合ServiceProviderId一同输入，不指定则默认选用最近创建的Key</p>
     */
    public $KeyId;

    /**
     * @var string <p>模型列表端点路径，可选</p><p>默认值：/v1/models</p>
     */
    public $ModelPath;

    /**
     * @var string <p>模型协议</p>
     */
    public $ModelProtocol;

    /**
     * @var string <p>模型提供商</p>
     */
    public $ModelProvider;

    /**
     * @var string <p>BYOK 业务 ID，可选</p><p>格式：byok-xxxxxxxx</p>
     */
    public $ServiceProviderId;

    /**
     * @param string $AccessType <p>接入类型：PublicBYOK/PublicCustom/PrivateCustom</p>
     * @param string $ApiBase <p>上游 Provider API 地址</p><p>示例：https://api.moonshot.cn</p>
     * @param string $ApiKey <p>上游 Provider API Key</p><p>用于鉴权访问上游模型列表接口</p>
     * @param string $HostHeader <p>自定义 Host Header，可选</p><p>仅 VPC 内网场景需要，用于指定请求的 Host 头</p>
     * @param string $KeyId <p>Key Id 配合ServiceProviderId一同输入，不指定则默认选用最近创建的Key</p>
     * @param string $ModelPath <p>模型列表端点路径，可选</p><p>默认值：/v1/models</p>
     * @param string $ModelProtocol <p>模型协议</p>
     * @param string $ModelProvider <p>模型提供商</p>
     * @param string $ServiceProviderId <p>BYOK 业务 ID，可选</p><p>格式：byok-xxxxxxxx</p>
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("ApiBase",$param) and $param["ApiBase"] !== null) {
            $this->ApiBase = $param["ApiBase"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("ModelPath",$param) and $param["ModelPath"] !== null) {
            $this->ModelPath = $param["ModelPath"];
        }

        if (array_key_exists("ModelProtocol",$param) and $param["ModelProtocol"] !== null) {
            $this->ModelProtocol = $param["ModelProtocol"];
        }

        if (array_key_exists("ModelProvider",$param) and $param["ModelProvider"] !== null) {
            $this->ModelProvider = $param["ModelProvider"];
        }

        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }
    }
}
