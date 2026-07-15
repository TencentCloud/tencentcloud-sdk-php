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
 * 资源端 OIDC 认证插件配置
 *
 * @method string getAudience() 获取<p>目标受众</p>
 * @method void setAudience(string $Audience) 设置<p>目标受众</p>
 * @method boolean getBearerOnly() 获取<p>是否BearerOnly</p><p>目前只能为true</p>
 * @method void setBearerOnly(boolean $BearerOnly) 设置<p>是否BearerOnly</p><p>目前只能为true</p>
 * @method array getScopes() 获取<p>授权范围</p>
 * @method void setScopes(array $Scopes) 设置<p>授权范围</p>
 * @method string getConsumerClaim() 获取<p>消费者标识</p>
 * @method void setConsumerClaim(string $ConsumerClaim) 设置<p>消费者标识</p>
 * @method string getRealm() 获取<p>认证域</p>
 * @method void setRealm(string $Realm) 设置<p>认证域</p>
 * @method integer getTimeout() 获取<p>超时时间</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间</p>
 * @method string getTokenEndpointAuthMethod() 获取<p>令牌端点认证方法</p><p>枚举值：</p><ul><li>client_secret_post： client_secret_post</li><li>client_secret_basic： client_secret_basic</li><li>private_key_jwt： private_key_jwt</li></ul>
 * @method void setTokenEndpointAuthMethod(string $TokenEndpointAuthMethod) 设置<p>令牌端点认证方法</p><p>枚举值：</p><ul><li>client_secret_post： client_secret_post</li><li>client_secret_basic： client_secret_basic</li><li>private_key_jwt： private_key_jwt</li></ul>
 * @method string getIntrospectionEndpoint() 获取<p>令牌内省端点</p>
 * @method void setIntrospectionEndpoint(string $IntrospectionEndpoint) 设置<p>令牌内省端点</p>
 * @method string getIntrospectionEndpointAuthMethod() 获取<p>令牌内省端点认证方法</p><p>枚举值：</p><ul><li>client_secret_basic： client_secret_basic</li><li>client_secret_post： client_secret_post</li></ul>
 * @method void setIntrospectionEndpointAuthMethod(string $IntrospectionEndpointAuthMethod) 设置<p>令牌内省端点认证方法</p><p>枚举值：</p><ul><li>client_secret_basic： client_secret_basic</li><li>client_secret_post： client_secret_post</li></ul>
 * @method string getIssuerURL() 获取<p>签发者地址</p>
 * @method void setIssuerURL(string $IssuerURL) 设置<p>签发者地址</p>
 * @method string getClientId() 获取<p>客户端 ID</p>
 * @method void setClientId(string $ClientId) 设置<p>客户端 ID</p>
 * @method string getClientSecret() 获取<p>客户端密钥</p>
 * @method void setClientSecret(string $ClientSecret) 设置<p>客户端密钥</p>
 */
class AIGWOIDCAuthPluginConfig extends AbstractModel
{
    /**
     * @var string <p>目标受众</p>
     */
    public $Audience;

    /**
     * @var boolean <p>是否BearerOnly</p><p>目前只能为true</p>
     */
    public $BearerOnly;

    /**
     * @var array <p>授权范围</p>
     */
    public $Scopes;

    /**
     * @var string <p>消费者标识</p>
     */
    public $ConsumerClaim;

    /**
     * @var string <p>认证域</p>
     */
    public $Realm;

    /**
     * @var integer <p>超时时间</p>
     */
    public $Timeout;

    /**
     * @var string <p>令牌端点认证方法</p><p>枚举值：</p><ul><li>client_secret_post： client_secret_post</li><li>client_secret_basic： client_secret_basic</li><li>private_key_jwt： private_key_jwt</li></ul>
     */
    public $TokenEndpointAuthMethod;

    /**
     * @var string <p>令牌内省端点</p>
     */
    public $IntrospectionEndpoint;

    /**
     * @var string <p>令牌内省端点认证方法</p><p>枚举值：</p><ul><li>client_secret_basic： client_secret_basic</li><li>client_secret_post： client_secret_post</li></ul>
     */
    public $IntrospectionEndpointAuthMethod;

    /**
     * @var string <p>签发者地址</p>
     */
    public $IssuerURL;

    /**
     * @var string <p>客户端 ID</p>
     */
    public $ClientId;

    /**
     * @var string <p>客户端密钥</p>
     */
    public $ClientSecret;

    /**
     * @param string $Audience <p>目标受众</p>
     * @param boolean $BearerOnly <p>是否BearerOnly</p><p>目前只能为true</p>
     * @param array $Scopes <p>授权范围</p>
     * @param string $ConsumerClaim <p>消费者标识</p>
     * @param string $Realm <p>认证域</p>
     * @param integer $Timeout <p>超时时间</p>
     * @param string $TokenEndpointAuthMethod <p>令牌端点认证方法</p><p>枚举值：</p><ul><li>client_secret_post： client_secret_post</li><li>client_secret_basic： client_secret_basic</li><li>private_key_jwt： private_key_jwt</li></ul>
     * @param string $IntrospectionEndpoint <p>令牌内省端点</p>
     * @param string $IntrospectionEndpointAuthMethod <p>令牌内省端点认证方法</p><p>枚举值：</p><ul><li>client_secret_basic： client_secret_basic</li><li>client_secret_post： client_secret_post</li></ul>
     * @param string $IssuerURL <p>签发者地址</p>
     * @param string $ClientId <p>客户端 ID</p>
     * @param string $ClientSecret <p>客户端密钥</p>
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
        if (array_key_exists("Audience",$param) and $param["Audience"] !== null) {
            $this->Audience = $param["Audience"];
        }

        if (array_key_exists("BearerOnly",$param) and $param["BearerOnly"] !== null) {
            $this->BearerOnly = $param["BearerOnly"];
        }

        if (array_key_exists("Scopes",$param) and $param["Scopes"] !== null) {
            $this->Scopes = $param["Scopes"];
        }

        if (array_key_exists("ConsumerClaim",$param) and $param["ConsumerClaim"] !== null) {
            $this->ConsumerClaim = $param["ConsumerClaim"];
        }

        if (array_key_exists("Realm",$param) and $param["Realm"] !== null) {
            $this->Realm = $param["Realm"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("TokenEndpointAuthMethod",$param) and $param["TokenEndpointAuthMethod"] !== null) {
            $this->TokenEndpointAuthMethod = $param["TokenEndpointAuthMethod"];
        }

        if (array_key_exists("IntrospectionEndpoint",$param) and $param["IntrospectionEndpoint"] !== null) {
            $this->IntrospectionEndpoint = $param["IntrospectionEndpoint"];
        }

        if (array_key_exists("IntrospectionEndpointAuthMethod",$param) and $param["IntrospectionEndpointAuthMethod"] !== null) {
            $this->IntrospectionEndpointAuthMethod = $param["IntrospectionEndpointAuthMethod"];
        }

        if (array_key_exists("IssuerURL",$param) and $param["IssuerURL"] !== null) {
            $this->IssuerURL = $param["IssuerURL"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientSecret",$param) and $param["ClientSecret"] !== null) {
            $this->ClientSecret = $param["ClientSecret"];
        }
    }
}
