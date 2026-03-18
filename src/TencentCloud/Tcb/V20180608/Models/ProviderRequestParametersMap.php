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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 三方认证入参映射。如果您的对接方不标准，则可以使用这个参数。默认情况下，该参数可以为空。比如：github,google,apple 接入，这些参数为空，但是国内的腾讯，新浪等则需要配置该参数。原因主要是：腾讯等公司在实现oauth时，未能完全遵循oauth标准。
 *
 * @method string getClientId() 获取OAuth 标准协议中的 client_id。不同第三方平台的字段名称可能不同，例如微信平台对应 appid、新浪微博对应 app_id。
 * @method void setClientId(string $ClientId) 设置OAuth 标准协议中的 client_id。不同第三方平台的字段名称可能不同，例如微信平台对应 appid、新浪微博对应 app_id。
 * @method string getClientSecret() 获取OAuth 标准协议中的 client_secret，用于身份认证源的密钥鉴权。请妥善保管，避免泄露。
 * @method void setClientSecret(string $ClientSecret) 设置OAuth 标准协议中的 client_secret，用于身份认证源的密钥鉴权。请妥善保管，避免泄露。
 * @method string getRedirectUri() 获取OAuth 标准协议中的 redirect_uri，即授权回调地址。用户完成第三方认证后将重定向至该地址。
 * @method void setRedirectUri(string $RedirectUri) 设置OAuth 标准协议中的 redirect_uri，即授权回调地址。用户完成第三方认证后将重定向至该地址。
 * @method string getRegisterUserRoleId() 获取身份源注册用户时自动绑定的角色 ID。配置后，通过该身份源注册的新用户将自动关联指定角色。
 * @method void setRegisterUserRoleId(string $RegisterUserRoleId) 设置身份源注册用户时自动绑定的角色 ID。配置后，通过该身份源注册的新用户将自动关联指定角色。
 * @method string getRegisterUserAutoLicense() 获取身份源注册用户时是否自动授予许可证。取值范围：
TRUE：自动授权许可证
FALSE：不自动授权（默认值）
 * @method void setRegisterUserAutoLicense(string $RegisterUserAutoLicense) 设置身份源注册用户时是否自动授予许可证。取值范围：
TRUE：自动授权许可证
FALSE：不自动授权（默认值）
 * @method string getAuthPosition() 获取OAuth 获取 Token 时认证信息的请求位置。取值范围：
URL：将认证信息放在请求 URL 参数中
Headers：将认证信息放在请求 Header 中
Body：将认证信息放在请求 Body 中
 * @method void setAuthPosition(string $AuthPosition) 设置OAuth 获取 Token 时认证信息的请求位置。取值范围：
URL：将认证信息放在请求 URL 参数中
Headers：将认证信息放在请求 Header 中
Body：将认证信息放在请求 Body 中
 * @method string getGrantType() 获取OAuth 授权模式匹配的参数字段名。用于指定获取 Token 请求中 grant_type 参数对应的字段名称。
 * @method void setGrantType(string $GrantType) 设置OAuth 授权模式匹配的参数字段名。用于指定获取 Token 请求中 grant_type 参数对应的字段名称。
 * @method string getClientCredentials() 获取OAuth 授权模式类型。用于指定 grant_type 的值，例如 client_credentials 表示客户端凭证模式。
 * @method void setClientCredentials(string $ClientCredentials) 设置OAuth 授权模式类型。用于指定 grant_type 的值，例如 client_credentials 表示客户端凭证模式。
 * @method string getAccessToken() 获取OAuth 返回中 access_token 的映射字段名。若第三方平台返回的 Token 字段名不是标准的 access_token，可通过此字段指定实际字段名。
 * @method void setAccessToken(string $AccessToken) 设置OAuth 返回中 access_token 的映射字段名。若第三方平台返回的 Token 字段名不是标准的 access_token，可通过此字段指定实际字段名。
 * @method string getExpiresIn() 获取OAuth 返回中 Token 有效期的映射字段名。若第三方平台返回的有效期字段名不是标准的 expires_in，可通过此字段指定实际字段名。
 * @method void setExpiresIn(string $ExpiresIn) 设置OAuth 返回中 Token 有效期的映射字段名。若第三方平台返回的有效期字段名不是标准的 expires_in，可通过此字段指定实际字段名。
 * @method string getRegisterUserType() 获取身份源注册用户时的用户类型。取值范围：
externalUser：外部用户
internalUser：内部用户
默认值为 externalUser。
 * @method void setRegisterUserType(string $RegisterUserType) 设置身份源注册用户时的用户类型。取值范围：
externalUser：外部用户
internalUser：内部用户
默认值为 externalUser。
 */
class ProviderRequestParametersMap extends AbstractModel
{
    /**
     * @var string OAuth 标准协议中的 client_id。不同第三方平台的字段名称可能不同，例如微信平台对应 appid、新浪微博对应 app_id。
     */
    public $ClientId;

    /**
     * @var string OAuth 标准协议中的 client_secret，用于身份认证源的密钥鉴权。请妥善保管，避免泄露。
     */
    public $ClientSecret;

    /**
     * @var string OAuth 标准协议中的 redirect_uri，即授权回调地址。用户完成第三方认证后将重定向至该地址。
     */
    public $RedirectUri;

    /**
     * @var string 身份源注册用户时自动绑定的角色 ID。配置后，通过该身份源注册的新用户将自动关联指定角色。
     */
    public $RegisterUserRoleId;

    /**
     * @var string 身份源注册用户时是否自动授予许可证。取值范围：
TRUE：自动授权许可证
FALSE：不自动授权（默认值）
     */
    public $RegisterUserAutoLicense;

    /**
     * @var string OAuth 获取 Token 时认证信息的请求位置。取值范围：
URL：将认证信息放在请求 URL 参数中
Headers：将认证信息放在请求 Header 中
Body：将认证信息放在请求 Body 中
     */
    public $AuthPosition;

    /**
     * @var string OAuth 授权模式匹配的参数字段名。用于指定获取 Token 请求中 grant_type 参数对应的字段名称。
     */
    public $GrantType;

    /**
     * @var string OAuth 授权模式类型。用于指定 grant_type 的值，例如 client_credentials 表示客户端凭证模式。
     */
    public $ClientCredentials;

    /**
     * @var string OAuth 返回中 access_token 的映射字段名。若第三方平台返回的 Token 字段名不是标准的 access_token，可通过此字段指定实际字段名。
     */
    public $AccessToken;

    /**
     * @var string OAuth 返回中 Token 有效期的映射字段名。若第三方平台返回的有效期字段名不是标准的 expires_in，可通过此字段指定实际字段名。
     */
    public $ExpiresIn;

    /**
     * @var string 身份源注册用户时的用户类型。取值范围：
externalUser：外部用户
internalUser：内部用户
默认值为 externalUser。
     */
    public $RegisterUserType;

    /**
     * @param string $ClientId OAuth 标准协议中的 client_id。不同第三方平台的字段名称可能不同，例如微信平台对应 appid、新浪微博对应 app_id。
     * @param string $ClientSecret OAuth 标准协议中的 client_secret，用于身份认证源的密钥鉴权。请妥善保管，避免泄露。
     * @param string $RedirectUri OAuth 标准协议中的 redirect_uri，即授权回调地址。用户完成第三方认证后将重定向至该地址。
     * @param string $RegisterUserRoleId 身份源注册用户时自动绑定的角色 ID。配置后，通过该身份源注册的新用户将自动关联指定角色。
     * @param string $RegisterUserAutoLicense 身份源注册用户时是否自动授予许可证。取值范围：
TRUE：自动授权许可证
FALSE：不自动授权（默认值）
     * @param string $AuthPosition OAuth 获取 Token 时认证信息的请求位置。取值范围：
URL：将认证信息放在请求 URL 参数中
Headers：将认证信息放在请求 Header 中
Body：将认证信息放在请求 Body 中
     * @param string $GrantType OAuth 授权模式匹配的参数字段名。用于指定获取 Token 请求中 grant_type 参数对应的字段名称。
     * @param string $ClientCredentials OAuth 授权模式类型。用于指定 grant_type 的值，例如 client_credentials 表示客户端凭证模式。
     * @param string $AccessToken OAuth 返回中 access_token 的映射字段名。若第三方平台返回的 Token 字段名不是标准的 access_token，可通过此字段指定实际字段名。
     * @param string $ExpiresIn OAuth 返回中 Token 有效期的映射字段名。若第三方平台返回的有效期字段名不是标准的 expires_in，可通过此字段指定实际字段名。
     * @param string $RegisterUserType 身份源注册用户时的用户类型。取值范围：
externalUser：外部用户
internalUser：内部用户
默认值为 externalUser。
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

        if (array_key_exists("RedirectUri",$param) and $param["RedirectUri"] !== null) {
            $this->RedirectUri = $param["RedirectUri"];
        }

        if (array_key_exists("RegisterUserRoleId",$param) and $param["RegisterUserRoleId"] !== null) {
            $this->RegisterUserRoleId = $param["RegisterUserRoleId"];
        }

        if (array_key_exists("RegisterUserAutoLicense",$param) and $param["RegisterUserAutoLicense"] !== null) {
            $this->RegisterUserAutoLicense = $param["RegisterUserAutoLicense"];
        }

        if (array_key_exists("AuthPosition",$param) and $param["AuthPosition"] !== null) {
            $this->AuthPosition = $param["AuthPosition"];
        }

        if (array_key_exists("GrantType",$param) and $param["GrantType"] !== null) {
            $this->GrantType = $param["GrantType"];
        }

        if (array_key_exists("ClientCredentials",$param) and $param["ClientCredentials"] !== null) {
            $this->ClientCredentials = $param["ClientCredentials"];
        }

        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }

        if (array_key_exists("ExpiresIn",$param) and $param["ExpiresIn"] !== null) {
            $this->ExpiresIn = $param["ExpiresIn"];
        }

        if (array_key_exists("RegisterUserType",$param) and $param["RegisterUserType"] !== null) {
            $this->RegisterUserType = $param["RegisterUserType"];
        }
    }
}
