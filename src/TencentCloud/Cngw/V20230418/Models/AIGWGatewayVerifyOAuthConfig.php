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
 * AI 网关 MCP Server OAuth2 验签配置
 *
 * @method string getVerifyMethod() 获取<p>令牌校验方式</p><p>枚举值：</p><ul><li>JWTJWKS： JWTJWKS</li><li>Introspection： Introspection</li></ul><p>切换方式后另一方式专属字段不生效</p>
 * @method void setVerifyMethod(string $VerifyMethod) 设置<p>令牌校验方式</p><p>枚举值：</p><ul><li>JWTJWKS： JWTJWKS</li><li>Introspection： Introspection</li></ul><p>切换方式后另一方式专属字段不生效</p>
 * @method string getIssuer() 获取<p>令牌签发者，校验 iss；VerifyMethod=JWTJWKS 时必填</p>
 * @method void setIssuer(string $Issuer) 设置<p>令牌签发者，校验 iss；VerifyMethod=JWTJWKS 时必填</p>
 * @method string getJwksUri() 获取<p>JWKS 地址</p><p>入参限制：VerifyMethod=JWTJWKS 时必填</p>
 * @method void setJwksUri(string $JwksUri) 设置<p>JWKS 地址</p><p>入参限制：VerifyMethod=JWTJWKS 时必填</p>
 * @method string getAudience() 获取<p>校验 aud</p>
 * @method void setAudience(string $Audience) 设置<p>校验 aud</p>
 * @method integer getJwksCacheTtl() 获取<p>JWKS 缓存秒数，默认 3600，必须大于 0</p><p>默认值：3600</p>
 * @method void setJwksCacheTtl(integer $JwksCacheTtl) 设置<p>JWKS 缓存秒数，默认 3600，必须大于 0</p><p>默认值：3600</p>
 * @method string getIntrospectionEndpoint() 获取<p>令牌内省端点</p><p>入参限制：VerifyMethod=Introspection 时必填</p>
 * @method void setIntrospectionEndpoint(string $IntrospectionEndpoint) 设置<p>令牌内省端点</p><p>入参限制：VerifyMethod=Introspection 时必填</p>
 * @method string getIntrospectionClientId() 获取<p>调用内省端点的 Client ID</p><p>入参限制：VerifyMethod=Introspection 时必填</p>
 * @method void setIntrospectionClientId(string $IntrospectionClientId) 设置<p>调用内省端点的 Client ID</p><p>入参限制：VerifyMethod=Introspection 时必填</p>
 * @method string getIntrospectionClientSecret() 获取<p>调用内省端点的 Client Secret</p><p>入参限制：VerifyMethod=Introspection 时必填</p><p>加密落库，查询时无论 Enable 状态均脱敏</p>
 * @method void setIntrospectionClientSecret(string $IntrospectionClientSecret) 设置<p>调用内省端点的 Client Secret</p><p>入参限制：VerifyMethod=Introspection 时必填</p><p>加密落库，查询时无论 Enable 状态均脱敏</p>
 * @method integer getIntrospectionCacheTtl() 获取<p>内省结果缓存秒数</p><p>默认值：60</p><p>0 表示不缓存</p>
 * @method void setIntrospectionCacheTtl(integer $IntrospectionCacheTtl) 设置<p>内省结果缓存秒数</p><p>默认值：60</p><p>0 表示不缓存</p>
 * @method string getScopeWhitelist() 获取<p>逗号分隔的 scope 白名单；令牌需命中其一，否则 401</p>
 * @method void setScopeWhitelist(string $ScopeWhitelist) 设置<p>逗号分隔的 scope 白名单；令牌需命中其一，否则 401</p>
 * @method string getTokenHeader() 获取<p>读取调用方令牌的 Header 名</p><p>默认值：Authorization</p>
 * @method void setTokenHeader(string $TokenHeader) 设置<p>读取调用方令牌的 Header 名</p><p>默认值：Authorization</p>
 */
class AIGWGatewayVerifyOAuthConfig extends AbstractModel
{
    /**
     * @var string <p>令牌校验方式</p><p>枚举值：</p><ul><li>JWTJWKS： JWTJWKS</li><li>Introspection： Introspection</li></ul><p>切换方式后另一方式专属字段不生效</p>
     */
    public $VerifyMethod;

    /**
     * @var string <p>令牌签发者，校验 iss；VerifyMethod=JWTJWKS 时必填</p>
     */
    public $Issuer;

    /**
     * @var string <p>JWKS 地址</p><p>入参限制：VerifyMethod=JWTJWKS 时必填</p>
     */
    public $JwksUri;

    /**
     * @var string <p>校验 aud</p>
     */
    public $Audience;

    /**
     * @var integer <p>JWKS 缓存秒数，默认 3600，必须大于 0</p><p>默认值：3600</p>
     */
    public $JwksCacheTtl;

    /**
     * @var string <p>令牌内省端点</p><p>入参限制：VerifyMethod=Introspection 时必填</p>
     */
    public $IntrospectionEndpoint;

    /**
     * @var string <p>调用内省端点的 Client ID</p><p>入参限制：VerifyMethod=Introspection 时必填</p>
     */
    public $IntrospectionClientId;

    /**
     * @var string <p>调用内省端点的 Client Secret</p><p>入参限制：VerifyMethod=Introspection 时必填</p><p>加密落库，查询时无论 Enable 状态均脱敏</p>
     */
    public $IntrospectionClientSecret;

    /**
     * @var integer <p>内省结果缓存秒数</p><p>默认值：60</p><p>0 表示不缓存</p>
     */
    public $IntrospectionCacheTtl;

    /**
     * @var string <p>逗号分隔的 scope 白名单；令牌需命中其一，否则 401</p>
     */
    public $ScopeWhitelist;

    /**
     * @var string <p>读取调用方令牌的 Header 名</p><p>默认值：Authorization</p>
     */
    public $TokenHeader;

    /**
     * @param string $VerifyMethod <p>令牌校验方式</p><p>枚举值：</p><ul><li>JWTJWKS： JWTJWKS</li><li>Introspection： Introspection</li></ul><p>切换方式后另一方式专属字段不生效</p>
     * @param string $Issuer <p>令牌签发者，校验 iss；VerifyMethod=JWTJWKS 时必填</p>
     * @param string $JwksUri <p>JWKS 地址</p><p>入参限制：VerifyMethod=JWTJWKS 时必填</p>
     * @param string $Audience <p>校验 aud</p>
     * @param integer $JwksCacheTtl <p>JWKS 缓存秒数，默认 3600，必须大于 0</p><p>默认值：3600</p>
     * @param string $IntrospectionEndpoint <p>令牌内省端点</p><p>入参限制：VerifyMethod=Introspection 时必填</p>
     * @param string $IntrospectionClientId <p>调用内省端点的 Client ID</p><p>入参限制：VerifyMethod=Introspection 时必填</p>
     * @param string $IntrospectionClientSecret <p>调用内省端点的 Client Secret</p><p>入参限制：VerifyMethod=Introspection 时必填</p><p>加密落库，查询时无论 Enable 状态均脱敏</p>
     * @param integer $IntrospectionCacheTtl <p>内省结果缓存秒数</p><p>默认值：60</p><p>0 表示不缓存</p>
     * @param string $ScopeWhitelist <p>逗号分隔的 scope 白名单；令牌需命中其一，否则 401</p>
     * @param string $TokenHeader <p>读取调用方令牌的 Header 名</p><p>默认值：Authorization</p>
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
        if (array_key_exists("VerifyMethod",$param) and $param["VerifyMethod"] !== null) {
            $this->VerifyMethod = $param["VerifyMethod"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("JwksUri",$param) and $param["JwksUri"] !== null) {
            $this->JwksUri = $param["JwksUri"];
        }

        if (array_key_exists("Audience",$param) and $param["Audience"] !== null) {
            $this->Audience = $param["Audience"];
        }

        if (array_key_exists("JwksCacheTtl",$param) and $param["JwksCacheTtl"] !== null) {
            $this->JwksCacheTtl = $param["JwksCacheTtl"];
        }

        if (array_key_exists("IntrospectionEndpoint",$param) and $param["IntrospectionEndpoint"] !== null) {
            $this->IntrospectionEndpoint = $param["IntrospectionEndpoint"];
        }

        if (array_key_exists("IntrospectionClientId",$param) and $param["IntrospectionClientId"] !== null) {
            $this->IntrospectionClientId = $param["IntrospectionClientId"];
        }

        if (array_key_exists("IntrospectionClientSecret",$param) and $param["IntrospectionClientSecret"] !== null) {
            $this->IntrospectionClientSecret = $param["IntrospectionClientSecret"];
        }

        if (array_key_exists("IntrospectionCacheTtl",$param) and $param["IntrospectionCacheTtl"] !== null) {
            $this->IntrospectionCacheTtl = $param["IntrospectionCacheTtl"];
        }

        if (array_key_exists("ScopeWhitelist",$param) and $param["ScopeWhitelist"] !== null) {
            $this->ScopeWhitelist = $param["ScopeWhitelist"];
        }

        if (array_key_exists("TokenHeader",$param) and $param["TokenHeader"] !== null) {
            $this->TokenHeader = $param["TokenHeader"];
        }
    }
}
