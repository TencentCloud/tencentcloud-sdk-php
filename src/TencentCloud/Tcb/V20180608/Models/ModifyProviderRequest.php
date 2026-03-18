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
 * ModifyProvider请求参数结构体
 *
 * @method string getEnvId() 获取云开发环境 ID，用于唯一标识当前操作所属的云开发环境。
 * @method void setEnvId(string $EnvId) 设置云开发环境 ID，用于唯一标识当前操作所属的云开发环境。
 * @method string getId() 获取身份源的唯一标识符，用于指定需要修改的目标身份源。格式要求：2~32 位，仅支持小写英文字母和数字，不可包含空格或特殊字符。例如：github、google。
 * @method void setId(string $Id) 设置身份源的唯一标识符，用于指定需要修改的目标身份源。格式要求：2~32 位，仅支持小写英文字母和数字，不可包含空格或特殊字符。例如：github、google。
 * @method LocalizedMessage getName() 获取身份源的显示名称，支持国际化多语言配置。用户在登录页面看到的身份源名称将使用该字段，建议根据实际业务场景填写易于识别的名称，例如：GitHub、Google 等。
 * @method void setName(LocalizedMessage $Name) 设置身份源的显示名称，支持国际化多语言配置。用户在登录页面看到的身份源名称将使用该字段，建议根据实际业务场景填写易于识别的名称，例如：GitHub、Google 等。
 * @method string getPicture() 获取身份源图标的访问地址，将展示在登录页的身份源按钮上。建议使用 64×64 像素的 SVG 格式图片以保证清晰度，支持 HTTP/HTTPS 公网可访问的图片链接。
 * @method void setPicture(string $Picture) 设置身份源图标的访问地址，将展示在登录页的身份源按钮上。建议使用 64×64 像素的 SVG 格式图片以保证清晰度，支持 HTTP/HTTPS 公网可访问的图片链接。
 * @method string getHomepage() 获取身份源对应的官方主页地址。该信息将在用户查看自己的第三方账号绑定列表时展示，帮助用户识别已绑定的身份源来源。例如 GitHub 身份源可填写：https://github.com。
 * @method void setHomepage(string $Homepage) 设置身份源对应的官方主页地址。该信息将在用户查看自己的第三方账号绑定列表时展示，帮助用户识别已绑定的身份源来源。例如 GitHub 身份源可填写：https://github.com。
 * @method string getProviderType() 获取身份源协议类型，决定该身份源使用何种认证协议与第三方平台对接。可选值：
OAUTH：标准 OAuth 2.0 协议
OIDC：OpenID Connect 协议
SAML：SAML 2.0 协议
WX_MICRO_APP：微信小程序登录
WX_QRCODE_MICRO_APP：微信小程序扫码登录
WX_CLOUDBASE_MICRO_APP：云开发托管小程序登录
WX_MP：微信公众号网页授权登录
WX_OPEN：微信开放平台扫码登录
WX_WORK_INTERNAL：企业微信自建应用登录
WX_WORK_AGENT：企业微信代开发应用登录
WX_WORK_THIRD_PARTY：企业微信第三方应用登录
WX_WORK_THIRD_PARTY_ASSOCIATION：企业微信第三方应用关联登录
CUSTOM：自定义登录
EMAIL：邮箱登录
 * @method void setProviderType(string $ProviderType) 设置身份源协议类型，决定该身份源使用何种认证协议与第三方平台对接。可选值：
OAUTH：标准 OAuth 2.0 协议
OIDC：OpenID Connect 协议
SAML：SAML 2.0 协议
WX_MICRO_APP：微信小程序登录
WX_QRCODE_MICRO_APP：微信小程序扫码登录
WX_CLOUDBASE_MICRO_APP：云开发托管小程序登录
WX_MP：微信公众号网页授权登录
WX_OPEN：微信开放平台扫码登录
WX_WORK_INTERNAL：企业微信自建应用登录
WX_WORK_AGENT：企业微信代开发应用登录
WX_WORK_THIRD_PARTY：企业微信第三方应用登录
WX_WORK_THIRD_PARTY_ASSOCIATION：企业微信第三方应用关联登录
CUSTOM：自定义登录
EMAIL：邮箱登录
 * @method ProviderConfig getConfig() 获取身份认证源协议连接配置，包含与第三方平台对接所需的核心参数，如 ClientId、ClientSecret、授权端点、Token 端点、回调地址、Scope、SAML Metadata、请求和响应参数映射等。不同 ProviderType 对应不同的配置项要求。注意：CUSTOM 和 EMAIL 类型的身份源，其存储后端类型（StorageDb）不可修改。
 * @method void setConfig(ProviderConfig $Config) 设置身份认证源协议连接配置，包含与第三方平台对接所需的核心参数，如 ClientId、ClientSecret、授权端点、Token 端点、回调地址、Scope、SAML Metadata、请求和响应参数映射等。不同 ProviderType 对应不同的配置项要求。注意：CUSTOM 和 EMAIL 类型的身份源，其存储后端类型（StorageDb）不可修改。
 * @method string getTransparentMode() 获取是否开启透传登录模式。可选值：TRUE（开启）、FALSE（关闭，默认值）。开启后，平台不会持久化存储用户数据，仅将第三方身份源返回的用户信息透传给业务方，适用于不希望平台留存用户数据的场景。注意：开启透传模式时，ReuseUserId 将被强制设为 TRUE，AutoSignUpWithProviderUser 将被强制设为 FALSE。
 * @method void setTransparentMode(string $TransparentMode) 设置是否开启透传登录模式。可选值：TRUE（开启）、FALSE（关闭，默认值）。开启后，平台不会持久化存储用户数据，仅将第三方身份源返回的用户信息透传给业务方，适用于不希望平台留存用户数据的场景。注意：开启透传模式时，ReuseUserId 将被强制设为 TRUE，AutoSignUpWithProviderUser 将被强制设为 FALSE。
 * @method string getOn() 获取身份源的启用状态。可选值：TRUE（启用，用户可通过该身份源登录）、FALSE（禁用，登录入口将被隐藏，已有绑定关系不受影响）、UNSPECIFIED（默认为 TRUE）。
 * @method void setOn(string $On) 设置身份源的启用状态。可选值：TRUE（启用，用户可通过该身份源登录）、FALSE（禁用，登录入口将被隐藏，已有绑定关系不受影响）、UNSPECIFIED（默认为 TRUE）。
 * @method LocalizedMessage getDescription() 获取身份源的详细描述信息，支持国际化多语言配置。可用于向用户说明该身份源的用途或使用场景，例如：谷歌授权登录。
 * @method void setDescription(LocalizedMessage $Description) 设置身份源的详细描述信息，支持国际化多语言配置。可用于向用户说明该身份源的用途或使用场景，例如：谷歌授权登录。
 * @method string getReuseUserId() 获取是否直接复用第三方身份源的用户 ID 作为平台用户 ID。可选值：TRUE（开启，返回的用户 ID 将直接使用第三方身份源的用户 ID，适用于已有用户体系迁移场景）、FALSE（关闭，由平台生成独立用户 ID）、UNSPECIFIED（默认为 FALSE，但当 TransparentMode 为 TRUE 时将被强制设为 TRUE）。注意：开启后需确保第三方用户 ID 的全局唯一性，避免 ID 冲突。
 * @method void setReuseUserId(string $ReuseUserId) 设置是否直接复用第三方身份源的用户 ID 作为平台用户 ID。可选值：TRUE（开启，返回的用户 ID 将直接使用第三方身份源的用户 ID，适用于已有用户体系迁移场景）、FALSE（关闭，由平台生成独立用户 ID）、UNSPECIFIED（默认为 FALSE，但当 TransparentMode 为 TRUE 时将被强制设为 TRUE）。注意：开启后需确保第三方用户 ID 的全局唯一性，避免 ID 冲突。
 * @method EmailProviderConfig getEmailConfig() 获取邮箱身份源的专项配置，包含邮件服务商、发件人地址、SMTP 配置等参数，用于支持通过邮箱验证码或邮箱密码方式进行身份认证。仅当身份源 ID 为 email 时有效。若该身份源不存在，系统将自动创建一个默认关闭的邮箱身份源。
 * @method void setEmailConfig(EmailProviderConfig $EmailConfig) 设置邮箱身份源的专项配置，包含邮件服务商、发件人地址、SMTP 配置等参数，用于支持通过邮箱验证码或邮箱密码方式进行身份认证。仅当身份源 ID 为 email 时有效。若该身份源不存在，系统将自动创建一个默认关闭的邮箱身份源。
 * @method string getAutoSignInWhenEmailMatch() 获取是否开启邮箱自动关联登录。可选值：TRUE（开启）、FALSE（关闭）、UNSPECIFIED（默认为 FALSE）。开启后，若第三方身份源返回的邮箱与系统中已有用户的邮箱一致，则自动将该第三方账号与已有用户关联并完成登录，无需用户手动绑定。
 * @method void setAutoSignInWhenEmailMatch(string $AutoSignInWhenEmailMatch) 设置是否开启邮箱自动关联登录。可选值：TRUE（开启）、FALSE（关闭）、UNSPECIFIED（默认为 FALSE）。开启后，若第三方身份源返回的邮箱与系统中已有用户的邮箱一致，则自动将该第三方账号与已有用户关联并完成登录，无需用户手动绑定。
 * @method string getAutoSignInWhenPhoneNumberMatch() 获取是否开启手机号自动关联登录。可选值：TRUE（开启）、FALSE（关闭）、UNSPECIFIED（默认行为等同 TRUE）。开启后，若第三方身份源返回的手机号与系统中已有用户的手机号一致，则自动将该第三方账号与已有用户关联并完成登录，无需用户手动绑定。注意：该字段默认行为（UNSPECIFIED）与 AutoSignInWhenEmailMatch 不同，手机号匹配在未显式关闭时默认生效。
 * @method void setAutoSignInWhenPhoneNumberMatch(string $AutoSignInWhenPhoneNumberMatch) 设置是否开启手机号自动关联登录。可选值：TRUE（开启）、FALSE（关闭）、UNSPECIFIED（默认行为等同 TRUE）。开启后，若第三方身份源返回的手机号与系统中已有用户的手机号一致，则自动将该第三方账号与已有用户关联并完成登录，无需用户手动绑定。注意：该字段默认行为（UNSPECIFIED）与 AutoSignInWhenEmailMatch 不同，手机号匹配在未显式关闭时默认生效。
 */
class ModifyProviderRequest extends AbstractModel
{
    /**
     * @var string 云开发环境 ID，用于唯一标识当前操作所属的云开发环境。
     */
    public $EnvId;

    /**
     * @var string 身份源的唯一标识符，用于指定需要修改的目标身份源。格式要求：2~32 位，仅支持小写英文字母和数字，不可包含空格或特殊字符。例如：github、google。
     */
    public $Id;

    /**
     * @var LocalizedMessage 身份源的显示名称，支持国际化多语言配置。用户在登录页面看到的身份源名称将使用该字段，建议根据实际业务场景填写易于识别的名称，例如：GitHub、Google 等。
     */
    public $Name;

    /**
     * @var string 身份源图标的访问地址，将展示在登录页的身份源按钮上。建议使用 64×64 像素的 SVG 格式图片以保证清晰度，支持 HTTP/HTTPS 公网可访问的图片链接。
     */
    public $Picture;

    /**
     * @var string 身份源对应的官方主页地址。该信息将在用户查看自己的第三方账号绑定列表时展示，帮助用户识别已绑定的身份源来源。例如 GitHub 身份源可填写：https://github.com。
     */
    public $Homepage;

    /**
     * @var string 身份源协议类型，决定该身份源使用何种认证协议与第三方平台对接。可选值：
OAUTH：标准 OAuth 2.0 协议
OIDC：OpenID Connect 协议
SAML：SAML 2.0 协议
WX_MICRO_APP：微信小程序登录
WX_QRCODE_MICRO_APP：微信小程序扫码登录
WX_CLOUDBASE_MICRO_APP：云开发托管小程序登录
WX_MP：微信公众号网页授权登录
WX_OPEN：微信开放平台扫码登录
WX_WORK_INTERNAL：企业微信自建应用登录
WX_WORK_AGENT：企业微信代开发应用登录
WX_WORK_THIRD_PARTY：企业微信第三方应用登录
WX_WORK_THIRD_PARTY_ASSOCIATION：企业微信第三方应用关联登录
CUSTOM：自定义登录
EMAIL：邮箱登录
     */
    public $ProviderType;

    /**
     * @var ProviderConfig 身份认证源协议连接配置，包含与第三方平台对接所需的核心参数，如 ClientId、ClientSecret、授权端点、Token 端点、回调地址、Scope、SAML Metadata、请求和响应参数映射等。不同 ProviderType 对应不同的配置项要求。注意：CUSTOM 和 EMAIL 类型的身份源，其存储后端类型（StorageDb）不可修改。
     */
    public $Config;

    /**
     * @var string 是否开启透传登录模式。可选值：TRUE（开启）、FALSE（关闭，默认值）。开启后，平台不会持久化存储用户数据，仅将第三方身份源返回的用户信息透传给业务方，适用于不希望平台留存用户数据的场景。注意：开启透传模式时，ReuseUserId 将被强制设为 TRUE，AutoSignUpWithProviderUser 将被强制设为 FALSE。
     */
    public $TransparentMode;

    /**
     * @var string 身份源的启用状态。可选值：TRUE（启用，用户可通过该身份源登录）、FALSE（禁用，登录入口将被隐藏，已有绑定关系不受影响）、UNSPECIFIED（默认为 TRUE）。
     */
    public $On;

    /**
     * @var LocalizedMessage 身份源的详细描述信息，支持国际化多语言配置。可用于向用户说明该身份源的用途或使用场景，例如：谷歌授权登录。
     */
    public $Description;

    /**
     * @var string 是否直接复用第三方身份源的用户 ID 作为平台用户 ID。可选值：TRUE（开启，返回的用户 ID 将直接使用第三方身份源的用户 ID，适用于已有用户体系迁移场景）、FALSE（关闭，由平台生成独立用户 ID）、UNSPECIFIED（默认为 FALSE，但当 TransparentMode 为 TRUE 时将被强制设为 TRUE）。注意：开启后需确保第三方用户 ID 的全局唯一性，避免 ID 冲突。
     */
    public $ReuseUserId;

    /**
     * @var EmailProviderConfig 邮箱身份源的专项配置，包含邮件服务商、发件人地址、SMTP 配置等参数，用于支持通过邮箱验证码或邮箱密码方式进行身份认证。仅当身份源 ID 为 email 时有效。若该身份源不存在，系统将自动创建一个默认关闭的邮箱身份源。
     */
    public $EmailConfig;

    /**
     * @var string 是否开启邮箱自动关联登录。可选值：TRUE（开启）、FALSE（关闭）、UNSPECIFIED（默认为 FALSE）。开启后，若第三方身份源返回的邮箱与系统中已有用户的邮箱一致，则自动将该第三方账号与已有用户关联并完成登录，无需用户手动绑定。
     */
    public $AutoSignInWhenEmailMatch;

    /**
     * @var string 是否开启手机号自动关联登录。可选值：TRUE（开启）、FALSE（关闭）、UNSPECIFIED（默认行为等同 TRUE）。开启后，若第三方身份源返回的手机号与系统中已有用户的手机号一致，则自动将该第三方账号与已有用户关联并完成登录，无需用户手动绑定。注意：该字段默认行为（UNSPECIFIED）与 AutoSignInWhenEmailMatch 不同，手机号匹配在未显式关闭时默认生效。
     */
    public $AutoSignInWhenPhoneNumberMatch;

    /**
     * @param string $EnvId 云开发环境 ID，用于唯一标识当前操作所属的云开发环境。
     * @param string $Id 身份源的唯一标识符，用于指定需要修改的目标身份源。格式要求：2~32 位，仅支持小写英文字母和数字，不可包含空格或特殊字符。例如：github、google。
     * @param LocalizedMessage $Name 身份源的显示名称，支持国际化多语言配置。用户在登录页面看到的身份源名称将使用该字段，建议根据实际业务场景填写易于识别的名称，例如：GitHub、Google 等。
     * @param string $Picture 身份源图标的访问地址，将展示在登录页的身份源按钮上。建议使用 64×64 像素的 SVG 格式图片以保证清晰度，支持 HTTP/HTTPS 公网可访问的图片链接。
     * @param string $Homepage 身份源对应的官方主页地址。该信息将在用户查看自己的第三方账号绑定列表时展示，帮助用户识别已绑定的身份源来源。例如 GitHub 身份源可填写：https://github.com。
     * @param string $ProviderType 身份源协议类型，决定该身份源使用何种认证协议与第三方平台对接。可选值：
OAUTH：标准 OAuth 2.0 协议
OIDC：OpenID Connect 协议
SAML：SAML 2.0 协议
WX_MICRO_APP：微信小程序登录
WX_QRCODE_MICRO_APP：微信小程序扫码登录
WX_CLOUDBASE_MICRO_APP：云开发托管小程序登录
WX_MP：微信公众号网页授权登录
WX_OPEN：微信开放平台扫码登录
WX_WORK_INTERNAL：企业微信自建应用登录
WX_WORK_AGENT：企业微信代开发应用登录
WX_WORK_THIRD_PARTY：企业微信第三方应用登录
WX_WORK_THIRD_PARTY_ASSOCIATION：企业微信第三方应用关联登录
CUSTOM：自定义登录
EMAIL：邮箱登录
     * @param ProviderConfig $Config 身份认证源协议连接配置，包含与第三方平台对接所需的核心参数，如 ClientId、ClientSecret、授权端点、Token 端点、回调地址、Scope、SAML Metadata、请求和响应参数映射等。不同 ProviderType 对应不同的配置项要求。注意：CUSTOM 和 EMAIL 类型的身份源，其存储后端类型（StorageDb）不可修改。
     * @param string $TransparentMode 是否开启透传登录模式。可选值：TRUE（开启）、FALSE（关闭，默认值）。开启后，平台不会持久化存储用户数据，仅将第三方身份源返回的用户信息透传给业务方，适用于不希望平台留存用户数据的场景。注意：开启透传模式时，ReuseUserId 将被强制设为 TRUE，AutoSignUpWithProviderUser 将被强制设为 FALSE。
     * @param string $On 身份源的启用状态。可选值：TRUE（启用，用户可通过该身份源登录）、FALSE（禁用，登录入口将被隐藏，已有绑定关系不受影响）、UNSPECIFIED（默认为 TRUE）。
     * @param LocalizedMessage $Description 身份源的详细描述信息，支持国际化多语言配置。可用于向用户说明该身份源的用途或使用场景，例如：谷歌授权登录。
     * @param string $ReuseUserId 是否直接复用第三方身份源的用户 ID 作为平台用户 ID。可选值：TRUE（开启，返回的用户 ID 将直接使用第三方身份源的用户 ID，适用于已有用户体系迁移场景）、FALSE（关闭，由平台生成独立用户 ID）、UNSPECIFIED（默认为 FALSE，但当 TransparentMode 为 TRUE 时将被强制设为 TRUE）。注意：开启后需确保第三方用户 ID 的全局唯一性，避免 ID 冲突。
     * @param EmailProviderConfig $EmailConfig 邮箱身份源的专项配置，包含邮件服务商、发件人地址、SMTP 配置等参数，用于支持通过邮箱验证码或邮箱密码方式进行身份认证。仅当身份源 ID 为 email 时有效。若该身份源不存在，系统将自动创建一个默认关闭的邮箱身份源。
     * @param string $AutoSignInWhenEmailMatch 是否开启邮箱自动关联登录。可选值：TRUE（开启）、FALSE（关闭）、UNSPECIFIED（默认为 FALSE）。开启后，若第三方身份源返回的邮箱与系统中已有用户的邮箱一致，则自动将该第三方账号与已有用户关联并完成登录，无需用户手动绑定。
     * @param string $AutoSignInWhenPhoneNumberMatch 是否开启手机号自动关联登录。可选值：TRUE（开启）、FALSE（关闭）、UNSPECIFIED（默认行为等同 TRUE）。开启后，若第三方身份源返回的手机号与系统中已有用户的手机号一致，则自动将该第三方账号与已有用户关联并完成登录，无需用户手动绑定。注意：该字段默认行为（UNSPECIFIED）与 AutoSignInWhenEmailMatch 不同，手机号匹配在未显式关闭时默认生效。
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = new LocalizedMessage();
            $this->Name->deserialize($param["Name"]);
        }

        if (array_key_exists("Picture",$param) and $param["Picture"] !== null) {
            $this->Picture = $param["Picture"];
        }

        if (array_key_exists("Homepage",$param) and $param["Homepage"] !== null) {
            $this->Homepage = $param["Homepage"];
        }

        if (array_key_exists("ProviderType",$param) and $param["ProviderType"] !== null) {
            $this->ProviderType = $param["ProviderType"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new ProviderConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("TransparentMode",$param) and $param["TransparentMode"] !== null) {
            $this->TransparentMode = $param["TransparentMode"];
        }

        if (array_key_exists("On",$param) and $param["On"] !== null) {
            $this->On = $param["On"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = new LocalizedMessage();
            $this->Description->deserialize($param["Description"]);
        }

        if (array_key_exists("ReuseUserId",$param) and $param["ReuseUserId"] !== null) {
            $this->ReuseUserId = $param["ReuseUserId"];
        }

        if (array_key_exists("EmailConfig",$param) and $param["EmailConfig"] !== null) {
            $this->EmailConfig = new EmailProviderConfig();
            $this->EmailConfig->deserialize($param["EmailConfig"]);
        }

        if (array_key_exists("AutoSignInWhenEmailMatch",$param) and $param["AutoSignInWhenEmailMatch"] !== null) {
            $this->AutoSignInWhenEmailMatch = $param["AutoSignInWhenEmailMatch"];
        }

        if (array_key_exists("AutoSignInWhenPhoneNumberMatch",$param) and $param["AutoSignInWhenPhoneNumberMatch"] !== null) {
            $this->AutoSignInWhenPhoneNumberMatch = $param["AutoSignInWhenPhoneNumberMatch"];
        }
    }
}
