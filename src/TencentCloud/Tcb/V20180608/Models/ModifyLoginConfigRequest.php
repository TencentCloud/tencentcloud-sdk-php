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
 * ModifyLoginConfig请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境 ID，用于指定需要修改登录策略的云开发环境。</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境 ID，用于指定需要修改登录策略的云开发环境。</p>
 * @method boolean getPhoneNumberLogin() 获取<p>手机号短信登录开关。设置为 true 开启手机号短信登录，允许用户使用手机号和短信验证码进行登录和注册；设置为 false 关闭手机号短信登录。</p>
 * @method void setPhoneNumberLogin(boolean $PhoneNumberLogin) 设置<p>手机号短信登录开关。设置为 true 开启手机号短信登录，允许用户使用手机号和短信验证码进行登录和注册；设置为 false 关闭手机号短信登录。</p>
 * @method boolean getEmailLogin() 获取<p>邮箱登录开关。设置为 true 开启邮箱登录，允许用户使用邮箱和密码进行登录和注册；设置为 false 关闭邮箱登录。</p>
 * @method void setEmailLogin(boolean $EmailLogin) 设置<p>邮箱登录开关。设置为 true 开启邮箱登录，允许用户使用邮箱和密码进行登录和注册；设置为 false 关闭邮箱登录。</p>
 * @method boolean getUserNameLogin() 获取<p>用户名密码登录开关。设置为 true 开启用户名密码登录，允许用户使用用户名和密码进行登录和注册；设置为 false 关闭用户名密码登录。</p>
 * @method void setUserNameLogin(boolean $UserNameLogin) 设置<p>用户名密码登录开关。设置为 true 开启用户名密码登录，允许用户使用用户名和密码进行登录和注册；设置为 false 关闭用户名密码登录。</p>
 * @method boolean getAnonymousLogin() 获取<p>匿名登录开关。设置为 true 开启匿名登录，允许用户无需注册即可以匿名身份访问应用；设置为 false 关闭匿名登录。</p>
 * @method void setAnonymousLogin(boolean $AnonymousLogin) 设置<p>匿名登录开关。设置为 true 开启匿名登录，允许用户无需注册即可以匿名身份访问应用；设置为 false 关闭匿名登录。</p>
 * @method VerificationConfig getSmsVerificationConfig() 获取<p>短信验证码发送配置，用于设置短信验证码的发送通道类型和日发送限额。不传则不修改当前配置。</p>
 * @method void setSmsVerificationConfig(VerificationConfig $SmsVerificationConfig) 设置<p>短信验证码发送配置，用于设置短信验证码的发送通道类型和日发送限额。不传则不修改当前配置。</p>
 * @method MFALoginConfig getMfaConfig() 获取<p>MFA 多因子认证登录配置，用于设置多因子认证开关及验证方式（短信、邮箱、TOTP、强制绑定手机号）。不传则不修改当前配置。</p>
 * @method void setMfaConfig(MFALoginConfig $MfaConfig) 设置<p>MFA 多因子认证登录配置，用于设置多因子认证开关及验证方式（短信、邮箱、TOTP、强制绑定手机号）。不传则不修改当前配置。</p>
 * @method PasswordUpdateLoginConfig getPwdUpdateStrategy() 获取<p>密码更新策略配置，用于设置首次登录强制修改密码和定期强制修改密码策略。不传则不修改当前配置。</p>
 * @method void setPwdUpdateStrategy(PasswordUpdateLoginConfig $PwdUpdateStrategy) 设置<p>密码更新策略配置，用于设置首次登录强制修改密码和定期强制修改密码策略。不传则不修改当前配置。</p>
 */
class ModifyLoginConfigRequest extends AbstractModel
{
    /**
     * @var string <p>环境 ID，用于指定需要修改登录策略的云开发环境。</p>
     */
    public $EnvId;

    /**
     * @var boolean <p>手机号短信登录开关。设置为 true 开启手机号短信登录，允许用户使用手机号和短信验证码进行登录和注册；设置为 false 关闭手机号短信登录。</p>
     */
    public $PhoneNumberLogin;

    /**
     * @var boolean <p>邮箱登录开关。设置为 true 开启邮箱登录，允许用户使用邮箱和密码进行登录和注册；设置为 false 关闭邮箱登录。</p>
     */
    public $EmailLogin;

    /**
     * @var boolean <p>用户名密码登录开关。设置为 true 开启用户名密码登录，允许用户使用用户名和密码进行登录和注册；设置为 false 关闭用户名密码登录。</p>
     */
    public $UserNameLogin;

    /**
     * @var boolean <p>匿名登录开关。设置为 true 开启匿名登录，允许用户无需注册即可以匿名身份访问应用；设置为 false 关闭匿名登录。</p>
     */
    public $AnonymousLogin;

    /**
     * @var VerificationConfig <p>短信验证码发送配置，用于设置短信验证码的发送通道类型和日发送限额。不传则不修改当前配置。</p>
     */
    public $SmsVerificationConfig;

    /**
     * @var MFALoginConfig <p>MFA 多因子认证登录配置，用于设置多因子认证开关及验证方式（短信、邮箱、TOTP、强制绑定手机号）。不传则不修改当前配置。</p>
     */
    public $MfaConfig;

    /**
     * @var PasswordUpdateLoginConfig <p>密码更新策略配置，用于设置首次登录强制修改密码和定期强制修改密码策略。不传则不修改当前配置。</p>
     */
    public $PwdUpdateStrategy;

    /**
     * @param string $EnvId <p>环境 ID，用于指定需要修改登录策略的云开发环境。</p>
     * @param boolean $PhoneNumberLogin <p>手机号短信登录开关。设置为 true 开启手机号短信登录，允许用户使用手机号和短信验证码进行登录和注册；设置为 false 关闭手机号短信登录。</p>
     * @param boolean $EmailLogin <p>邮箱登录开关。设置为 true 开启邮箱登录，允许用户使用邮箱和密码进行登录和注册；设置为 false 关闭邮箱登录。</p>
     * @param boolean $UserNameLogin <p>用户名密码登录开关。设置为 true 开启用户名密码登录，允许用户使用用户名和密码进行登录和注册；设置为 false 关闭用户名密码登录。</p>
     * @param boolean $AnonymousLogin <p>匿名登录开关。设置为 true 开启匿名登录，允许用户无需注册即可以匿名身份访问应用；设置为 false 关闭匿名登录。</p>
     * @param VerificationConfig $SmsVerificationConfig <p>短信验证码发送配置，用于设置短信验证码的发送通道类型和日发送限额。不传则不修改当前配置。</p>
     * @param MFALoginConfig $MfaConfig <p>MFA 多因子认证登录配置，用于设置多因子认证开关及验证方式（短信、邮箱、TOTP、强制绑定手机号）。不传则不修改当前配置。</p>
     * @param PasswordUpdateLoginConfig $PwdUpdateStrategy <p>密码更新策略配置，用于设置首次登录强制修改密码和定期强制修改密码策略。不传则不修改当前配置。</p>
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

        if (array_key_exists("PhoneNumberLogin",$param) and $param["PhoneNumberLogin"] !== null) {
            $this->PhoneNumberLogin = $param["PhoneNumberLogin"];
        }

        if (array_key_exists("EmailLogin",$param) and $param["EmailLogin"] !== null) {
            $this->EmailLogin = $param["EmailLogin"];
        }

        if (array_key_exists("UserNameLogin",$param) and $param["UserNameLogin"] !== null) {
            $this->UserNameLogin = $param["UserNameLogin"];
        }

        if (array_key_exists("AnonymousLogin",$param) and $param["AnonymousLogin"] !== null) {
            $this->AnonymousLogin = $param["AnonymousLogin"];
        }

        if (array_key_exists("SmsVerificationConfig",$param) and $param["SmsVerificationConfig"] !== null) {
            $this->SmsVerificationConfig = new VerificationConfig();
            $this->SmsVerificationConfig->deserialize($param["SmsVerificationConfig"]);
        }

        if (array_key_exists("MfaConfig",$param) and $param["MfaConfig"] !== null) {
            $this->MfaConfig = new MFALoginConfig();
            $this->MfaConfig->deserialize($param["MfaConfig"]);
        }

        if (array_key_exists("PwdUpdateStrategy",$param) and $param["PwdUpdateStrategy"] !== null) {
            $this->PwdUpdateStrategy = new PasswordUpdateLoginConfig();
            $this->PwdUpdateStrategy->deserialize($param["PwdUpdateStrategy"]);
        }
    }
}
