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
 * OIDC 凭证物料配置
 *
 * @method string getClientId() 获取<p>IdP 注册的 client_id</p>
 * @method void setClientId(string $ClientId) 设置<p>IdP 注册的 client_id</p>
 * @method string getClientSecret() 获取<p>客户端密钥</p><p>参数格式：IdP 注册的 client_secret</p>
 * @method void setClientSecret(string $ClientSecret) 设置<p>客户端密钥</p><p>参数格式：IdP 注册的 client_secret</p>
 * @method string getIssuerURL() 获取<p>IdP Issuer URL</p>
 * @method void setIssuerURL(string $IssuerURL) 设置<p>IdP Issuer URL</p>
 * @method string getConsumerClaimValue() 获取<p>IdP 中该用户的 claim 值</p>
 * @method void setConsumerClaimValue(string $ConsumerClaimValue) 设置<p>IdP 中该用户的 claim 值</p>
 */
class AIGWOIDCCredentialConfig extends AbstractModel
{
    /**
     * @var string <p>IdP 注册的 client_id</p>
     */
    public $ClientId;

    /**
     * @var string <p>客户端密钥</p><p>参数格式：IdP 注册的 client_secret</p>
     */
    public $ClientSecret;

    /**
     * @var string <p>IdP Issuer URL</p>
     */
    public $IssuerURL;

    /**
     * @var string <p>IdP 中该用户的 claim 值</p>
     */
    public $ConsumerClaimValue;

    /**
     * @param string $ClientId <p>IdP 注册的 client_id</p>
     * @param string $ClientSecret <p>客户端密钥</p><p>参数格式：IdP 注册的 client_secret</p>
     * @param string $IssuerURL <p>IdP Issuer URL</p>
     * @param string $ConsumerClaimValue <p>IdP 中该用户的 claim 值</p>
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientSecret",$param) and $param["ClientSecret"] !== null) {
            $this->ClientSecret = $param["ClientSecret"];
        }

        if (array_key_exists("IssuerURL",$param) and $param["IssuerURL"] !== null) {
            $this->IssuerURL = $param["IssuerURL"];
        }

        if (array_key_exists("ConsumerClaimValue",$param) and $param["ConsumerClaimValue"] !== null) {
            $this->ConsumerClaimValue = $param["ConsumerClaimValue"];
        }
    }
}
