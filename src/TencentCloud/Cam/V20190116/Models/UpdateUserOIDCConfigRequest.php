<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUserOIDCConfig请求参数结构体
 *
 * @method string getIdentityUrl() 获取身份提供商URL。OpenID Connect身份提供商标识。
对应企业IdP提供的Openid-configuration中"issuer"字段的值，该URL必须以https开头，符合标准URL格式，不允许带有query参数（以?标识）、fragment片段（以#标识）和登录信息（以@标识）。
 * @method void setIdentityUrl(string $IdentityUrl) 设置身份提供商URL。OpenID Connect身份提供商标识。
对应企业IdP提供的Openid-configuration中"issuer"字段的值，该URL必须以https开头，符合标准URL格式，不允许带有query参数（以?标识）、fragment片段（以#标识）和登录信息（以@标识）。
 * @method string getIdentityKey() 获取RSA签名公钥，JWKS格式，需要进行base64_encode。验证OpenID Connect身份提供商ID Token签名的公钥。为了您的账号安全，建议您定期轮换签名公钥。
 * @method void setIdentityKey(string $IdentityKey) 设置RSA签名公钥，JWKS格式，需要进行base64_encode。验证OpenID Connect身份提供商ID Token签名的公钥。为了您的账号安全，建议您定期轮换签名公钥。
 * @method string getClientId() 获取客户端ID，在OpenID Connect身份提供商注册的客户端ID，允许英文字母、数字、特殊字符.-_:/，不能以特殊字符.-_:/开头，单个客户端ID最大64个字符。
 * @method void setClientId(string $ClientId) 设置客户端ID，在OpenID Connect身份提供商注册的客户端ID，允许英文字母、数字、特殊字符.-_:/，不能以特殊字符.-_:/开头，单个客户端ID最大64个字符。
 * @method string getAuthorizationEndpoint() 获取授权请求Endpoint，OpenID Connect身份提供商授权地址。对应企业IdP提供的Openid-configuration中"authorization_endpoint"字段的值，该URL必须以https开头，符合标准URL格式，不允许带有query参数（以?标识）、fragment片段（以#标识）和登录信息（以@标识）。
 * @method void setAuthorizationEndpoint(string $AuthorizationEndpoint) 设置授权请求Endpoint，OpenID Connect身份提供商授权地址。对应企业IdP提供的Openid-configuration中"authorization_endpoint"字段的值，该URL必须以https开头，符合标准URL格式，不允许带有query参数（以?标识）、fragment片段（以#标识）和登录信息（以@标识）。
 * @method string getResponseType() 获取授权请求Response type，有code，id_token，固定值id_token。
 * @method void setResponseType(string $ResponseType) 设置授权请求Response type，有code，id_token，固定值id_token。
 * @method string getResponseMode() 获取授权请求Response mode。授权请求返回模式，有form_post和fragment两种可选模式，推荐选择form_post模式。
 * @method void setResponseMode(string $ResponseMode) 设置授权请求Response mode。授权请求返回模式，有form_post和fragment两种可选模式，推荐选择form_post模式。
 * @method string getMappingFiled() 获取映射字段名称。IdP的id_token中哪一个字段映射到子用户的用户名，通常是sub或者name字段,仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-255个中文或英文字符
 * @method void setMappingFiled(string $MappingFiled) 设置映射字段名称。IdP的id_token中哪一个字段映射到子用户的用户名，通常是sub或者name字段,仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-255个中文或英文字符
 * @method array getScope() 获取授权请求Scope。有openid; email;profile三种。代表授权请求信息范围openid表示请求访问用户的身份信息，email表示请求访问用户的电子邮件地址，profile表示请求访问用户的基本信息。默认必选openid。
 * @method void setScope(array $Scope) 设置授权请求Scope。有openid; email;profile三种。代表授权请求信息范围openid表示请求访问用户的身份信息，email表示请求访问用户的电子邮件地址，profile表示请求访问用户的基本信息。默认必选openid。
 * @method string getDescription() 获取描述，长度为1~255个英文或中文字符，默认值为空。
 * @method void setDescription(string $Description) 设置描述，长度为1~255个英文或中文字符，默认值为空。
 */
class UpdateUserOIDCConfigRequest extends AbstractModel
{
    /**
     * @var string 身份提供商URL。OpenID Connect身份提供商标识。
对应企业IdP提供的Openid-configuration中"issuer"字段的值，该URL必须以https开头，符合标准URL格式，不允许带有query参数（以?标识）、fragment片段（以#标识）和登录信息（以@标识）。
     */
    public $IdentityUrl;

    /**
     * @var string RSA签名公钥，JWKS格式，需要进行base64_encode。验证OpenID Connect身份提供商ID Token签名的公钥。为了您的账号安全，建议您定期轮换签名公钥。
     */
    public $IdentityKey;

    /**
     * @var string 客户端ID，在OpenID Connect身份提供商注册的客户端ID，允许英文字母、数字、特殊字符.-_:/，不能以特殊字符.-_:/开头，单个客户端ID最大64个字符。
     */
    public $ClientId;

    /**
     * @var string 授权请求Endpoint，OpenID Connect身份提供商授权地址。对应企业IdP提供的Openid-configuration中"authorization_endpoint"字段的值，该URL必须以https开头，符合标准URL格式，不允许带有query参数（以?标识）、fragment片段（以#标识）和登录信息（以@标识）。
     */
    public $AuthorizationEndpoint;

    /**
     * @var string 授权请求Response type，有code，id_token，固定值id_token。
     */
    public $ResponseType;

    /**
     * @var string 授权请求Response mode。授权请求返回模式，有form_post和fragment两种可选模式，推荐选择form_post模式。
     */
    public $ResponseMode;

    /**
     * @var string 映射字段名称。IdP的id_token中哪一个字段映射到子用户的用户名，通常是sub或者name字段,仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-255个中文或英文字符
     */
    public $MappingFiled;

    /**
     * @var array 授权请求Scope。有openid; email;profile三种。代表授权请求信息范围openid表示请求访问用户的身份信息，email表示请求访问用户的电子邮件地址，profile表示请求访问用户的基本信息。默认必选openid。
     */
    public $Scope;

    /**
     * @var string 描述，长度为1~255个英文或中文字符，默认值为空。
     */
    public $Description;

    /**
     * @param string $IdentityUrl 身份提供商URL。OpenID Connect身份提供商标识。
对应企业IdP提供的Openid-configuration中"issuer"字段的值，该URL必须以https开头，符合标准URL格式，不允许带有query参数（以?标识）、fragment片段（以#标识）和登录信息（以@标识）。
     * @param string $IdentityKey RSA签名公钥，JWKS格式，需要进行base64_encode。验证OpenID Connect身份提供商ID Token签名的公钥。为了您的账号安全，建议您定期轮换签名公钥。
     * @param string $ClientId 客户端ID，在OpenID Connect身份提供商注册的客户端ID，允许英文字母、数字、特殊字符.-_:/，不能以特殊字符.-_:/开头，单个客户端ID最大64个字符。
     * @param string $AuthorizationEndpoint 授权请求Endpoint，OpenID Connect身份提供商授权地址。对应企业IdP提供的Openid-configuration中"authorization_endpoint"字段的值，该URL必须以https开头，符合标准URL格式，不允许带有query参数（以?标识）、fragment片段（以#标识）和登录信息（以@标识）。
     * @param string $ResponseType 授权请求Response type，有code，id_token，固定值id_token。
     * @param string $ResponseMode 授权请求Response mode。授权请求返回模式，有form_post和fragment两种可选模式，推荐选择form_post模式。
     * @param string $MappingFiled 映射字段名称。IdP的id_token中哪一个字段映射到子用户的用户名，通常是sub或者name字段,仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-255个中文或英文字符
     * @param array $Scope 授权请求Scope。有openid; email;profile三种。代表授权请求信息范围openid表示请求访问用户的身份信息，email表示请求访问用户的电子邮件地址，profile表示请求访问用户的基本信息。默认必选openid。
     * @param string $Description 描述，长度为1~255个英文或中文字符，默认值为空。
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
        if (array_key_exists("IdentityUrl",$param) and $param["IdentityUrl"] !== null) {
            $this->IdentityUrl = $param["IdentityUrl"];
        }

        if (array_key_exists("IdentityKey",$param) and $param["IdentityKey"] !== null) {
            $this->IdentityKey = $param["IdentityKey"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("AuthorizationEndpoint",$param) and $param["AuthorizationEndpoint"] !== null) {
            $this->AuthorizationEndpoint = $param["AuthorizationEndpoint"];
        }

        if (array_key_exists("ResponseType",$param) and $param["ResponseType"] !== null) {
            $this->ResponseType = $param["ResponseType"];
        }

        if (array_key_exists("ResponseMode",$param) and $param["ResponseMode"] !== null) {
            $this->ResponseMode = $param["ResponseMode"];
        }

        if (array_key_exists("MappingFiled",$param) and $param["MappingFiled"] !== null) {
            $this->MappingFiled = $param["MappingFiled"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
