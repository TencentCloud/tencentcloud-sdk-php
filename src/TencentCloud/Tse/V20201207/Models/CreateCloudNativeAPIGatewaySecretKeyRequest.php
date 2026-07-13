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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGatewaySecretKey请求参数结构体
 *
 * @method string getGatewayId() 获取<p>实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>实例 ID</p>
 * @method string getSecretType() 获取<p>密钥协议类型。</p><p>枚举值：</p><ul><li>ApiKey</li><li>Basic</li><li>Hmac</li><li>OAuth2</li><li>JWT</li></ul>
 * @method void setSecretType(string $SecretType) 设置<p>密钥协议类型。</p><p>枚举值：</p><ul><li>ApiKey</li><li>Basic</li><li>Hmac</li><li>OAuth2</li><li>JWT</li></ul>
 * @method string getName() 获取<p>密钥名称，2-60 字符。</p>
 * @method void setName(string $Name) 设置<p>密钥名称，2-60 字符。</p>
 * @method string getGenerateType() 获取<p>密钥生成方式。</p><p>枚举值：</p><ul><li>System：系统自动生成</li><li>Custom：用户自定义（需传 SecretValue）</li><li>KMS：使用 KMS 密钥（需传 KmsKeyName 与 KmsKeyVersion）</li></ul>
 * @method void setGenerateType(string $GenerateType) 设置<p>密钥生成方式。</p><p>枚举值：</p><ul><li>System：系统自动生成</li><li>Custom：用户自定义（需传 SecretValue）</li><li>KMS：使用 KMS 密钥（需传 KmsKeyName 与 KmsKeyVersion）</li></ul>
 * @method string getResourceType() 获取<p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer：消费者</li><li>ModelService：模型服务</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer：消费者</li><li>ModelService：模型服务</li></ul>
 * @method string getKmsKeyName() 获取<p>KMS 密钥名称。GenerateType=KMS 时必填。</p>
 * @method void setKmsKeyName(string $KmsKeyName) 设置<p>KMS 密钥名称。GenerateType=KMS 时必填。</p>
 * @method string getKmsKeyVersion() 获取<p>KMS 密钥版本。GenerateType=KMS 时必填。</p>
 * @method void setKmsKeyVersion(string $KmsKeyVersion) 设置<p>KMS 密钥版本。GenerateType=KMS 时必填。</p>
 * @method string getSecretValue() 获取<p>密钥值，长度 8-256。GenerateType=Custom 时必填。</p>
 * @method void setSecretValue(string $SecretValue) 设置<p>密钥值，长度 8-256。GenerateType=Custom 时必填。</p>
 * @method string getDescription() 获取<p>密钥描述。最长 200 字符。</p>
 * @method void setDescription(string $Description) 设置<p>密钥描述。最长 200 字符。</p>
 * @method AIGWJWTCredentialConfig getJWTCredentialConfig() 获取<p>JWT凭证配置</p>
 * @method void setJWTCredentialConfig(AIGWJWTCredentialConfig $JWTCredentialConfig) 设置<p>JWT凭证配置</p>
 * @method AIGWOAuthCredentialConfig getOAuthCredentialConfig() 获取<p>OAuth2.0凭证配置</p>
 * @method void setOAuthCredentialConfig(AIGWOAuthCredentialConfig $OAuthCredentialConfig) 设置<p>OAuth2.0凭证配置</p>
 * @method AIGWOIDCCredentialConfig getOIDCCredentialConfig() 获取<p>OIDC凭证配置</p>
 * @method void setOIDCCredentialConfig(AIGWOIDCCredentialConfig $OIDCCredentialConfig) 设置<p>OIDC凭证配置</p>
 * @method string getProvider() 获取<p>第三方平台类型</p><p>枚举值：</p><ul><li>Dify： Dify平台</li></ul>
 * @method void setProvider(string $Provider) 设置<p>第三方平台类型</p><p>枚举值：</p><ul><li>Dify： Dify平台</li></ul>
 */
class CreateCloudNativeAPIGatewaySecretKeyRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>密钥协议类型。</p><p>枚举值：</p><ul><li>ApiKey</li><li>Basic</li><li>Hmac</li><li>OAuth2</li><li>JWT</li></ul>
     */
    public $SecretType;

    /**
     * @var string <p>密钥名称，2-60 字符。</p>
     */
    public $Name;

    /**
     * @var string <p>密钥生成方式。</p><p>枚举值：</p><ul><li>System：系统自动生成</li><li>Custom：用户自定义（需传 SecretValue）</li><li>KMS：使用 KMS 密钥（需传 KmsKeyName 与 KmsKeyVersion）</li></ul>
     */
    public $GenerateType;

    /**
     * @var string <p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer：消费者</li><li>ModelService：模型服务</li></ul>
     */
    public $ResourceType;

    /**
     * @var string <p>KMS 密钥名称。GenerateType=KMS 时必填。</p>
     */
    public $KmsKeyName;

    /**
     * @var string <p>KMS 密钥版本。GenerateType=KMS 时必填。</p>
     */
    public $KmsKeyVersion;

    /**
     * @var string <p>密钥值，长度 8-256。GenerateType=Custom 时必填。</p>
     */
    public $SecretValue;

    /**
     * @var string <p>密钥描述。最长 200 字符。</p>
     */
    public $Description;

    /**
     * @var AIGWJWTCredentialConfig <p>JWT凭证配置</p>
     */
    public $JWTCredentialConfig;

    /**
     * @var AIGWOAuthCredentialConfig <p>OAuth2.0凭证配置</p>
     */
    public $OAuthCredentialConfig;

    /**
     * @var AIGWOIDCCredentialConfig <p>OIDC凭证配置</p>
     */
    public $OIDCCredentialConfig;

    /**
     * @var string <p>第三方平台类型</p><p>枚举值：</p><ul><li>Dify： Dify平台</li></ul>
     */
    public $Provider;

    /**
     * @param string $GatewayId <p>实例 ID</p>
     * @param string $SecretType <p>密钥协议类型。</p><p>枚举值：</p><ul><li>ApiKey</li><li>Basic</li><li>Hmac</li><li>OAuth2</li><li>JWT</li></ul>
     * @param string $Name <p>密钥名称，2-60 字符。</p>
     * @param string $GenerateType <p>密钥生成方式。</p><p>枚举值：</p><ul><li>System：系统自动生成</li><li>Custom：用户自定义（需传 SecretValue）</li><li>KMS：使用 KMS 密钥（需传 KmsKeyName 与 KmsKeyVersion）</li></ul>
     * @param string $ResourceType <p>密钥归属资源类型。</p><p>枚举值：</p><ul><li>Consumer：消费者</li><li>ModelService：模型服务</li></ul>
     * @param string $KmsKeyName <p>KMS 密钥名称。GenerateType=KMS 时必填。</p>
     * @param string $KmsKeyVersion <p>KMS 密钥版本。GenerateType=KMS 时必填。</p>
     * @param string $SecretValue <p>密钥值，长度 8-256。GenerateType=Custom 时必填。</p>
     * @param string $Description <p>密钥描述。最长 200 字符。</p>
     * @param AIGWJWTCredentialConfig $JWTCredentialConfig <p>JWT凭证配置</p>
     * @param AIGWOAuthCredentialConfig $OAuthCredentialConfig <p>OAuth2.0凭证配置</p>
     * @param AIGWOIDCCredentialConfig $OIDCCredentialConfig <p>OIDC凭证配置</p>
     * @param string $Provider <p>第三方平台类型</p><p>枚举值：</p><ul><li>Dify： Dify平台</li></ul>
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

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("KmsKeyName",$param) and $param["KmsKeyName"] !== null) {
            $this->KmsKeyName = $param["KmsKeyName"];
        }

        if (array_key_exists("KmsKeyVersion",$param) and $param["KmsKeyVersion"] !== null) {
            $this->KmsKeyVersion = $param["KmsKeyVersion"];
        }

        if (array_key_exists("SecretValue",$param) and $param["SecretValue"] !== null) {
            $this->SecretValue = $param["SecretValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("JWTCredentialConfig",$param) and $param["JWTCredentialConfig"] !== null) {
            $this->JWTCredentialConfig = new AIGWJWTCredentialConfig();
            $this->JWTCredentialConfig->deserialize($param["JWTCredentialConfig"]);
        }

        if (array_key_exists("OAuthCredentialConfig",$param) and $param["OAuthCredentialConfig"] !== null) {
            $this->OAuthCredentialConfig = new AIGWOAuthCredentialConfig();
            $this->OAuthCredentialConfig->deserialize($param["OAuthCredentialConfig"]);
        }

        if (array_key_exists("OIDCCredentialConfig",$param) and $param["OIDCCredentialConfig"] !== null) {
            $this->OIDCCredentialConfig = new AIGWOIDCCredentialConfig();
            $this->OIDCCredentialConfig->deserialize($param["OIDCCredentialConfig"]);
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }
    }
}
