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
 * AI 网关 MCP Server 认证配置详情
 *
 * @method string getAuthType() 获取<p>MCP服务认证类型</p><p>枚举值：</p><ul><li>None： 无认证</li><li>ApiKey： API Key认证</li></ul>
 * @method void setAuthType(string $AuthType) 设置<p>MCP服务认证类型</p><p>枚举值：</p><ul><li>None： 无认证</li><li>ApiKey： API Key认证</li></ul>
 * @method AIGWJWTAuthPluginConfig getJWTAuthConfig() 获取<p>JWT认证配置</p>
 * @method void setJWTAuthConfig(AIGWJWTAuthPluginConfig $JWTAuthConfig) 设置<p>JWT认证配置</p>
 * @method AIGWOAuthAuthPluginConfig getOAuthAuthConfig() 获取<p>OAuth2认证配置</p>
 * @method void setOAuthAuthConfig(AIGWOAuthAuthPluginConfig $OAuthAuthConfig) 设置<p>OAuth2认证配置</p>
 * @method AIGWOIDCAuthPluginConfig getOIDCAuthConfig() 获取<p>OIDC认证配置</p>
 * @method void setOIDCAuthConfig(AIGWOIDCAuthPluginConfig $OIDCAuthConfig) 设置<p>OIDC认证配置</p>
 */
class AIGWMCPServerAuthResult extends AbstractModel
{
    /**
     * @var string <p>MCP服务认证类型</p><p>枚举值：</p><ul><li>None： 无认证</li><li>ApiKey： API Key认证</li></ul>
     */
    public $AuthType;

    /**
     * @var AIGWJWTAuthPluginConfig <p>JWT认证配置</p>
     */
    public $JWTAuthConfig;

    /**
     * @var AIGWOAuthAuthPluginConfig <p>OAuth2认证配置</p>
     */
    public $OAuthAuthConfig;

    /**
     * @var AIGWOIDCAuthPluginConfig <p>OIDC认证配置</p>
     */
    public $OIDCAuthConfig;

    /**
     * @param string $AuthType <p>MCP服务认证类型</p><p>枚举值：</p><ul><li>None： 无认证</li><li>ApiKey： API Key认证</li></ul>
     * @param AIGWJWTAuthPluginConfig $JWTAuthConfig <p>JWT认证配置</p>
     * @param AIGWOAuthAuthPluginConfig $OAuthAuthConfig <p>OAuth2认证配置</p>
     * @param AIGWOIDCAuthPluginConfig $OIDCAuthConfig <p>OIDC认证配置</p>
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
        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("JWTAuthConfig",$param) and $param["JWTAuthConfig"] !== null) {
            $this->JWTAuthConfig = new AIGWJWTAuthPluginConfig();
            $this->JWTAuthConfig->deserialize($param["JWTAuthConfig"]);
        }

        if (array_key_exists("OAuthAuthConfig",$param) and $param["OAuthAuthConfig"] !== null) {
            $this->OAuthAuthConfig = new AIGWOAuthAuthPluginConfig();
            $this->OAuthAuthConfig->deserialize($param["OAuthAuthConfig"]);
        }

        if (array_key_exists("OIDCAuthConfig",$param) and $param["OIDCAuthConfig"] !== null) {
            $this->OIDCAuthConfig = new AIGWOIDCAuthPluginConfig();
            $this->OIDCAuthConfig->deserialize($param["OIDCAuthConfig"]);
        }
    }
}
