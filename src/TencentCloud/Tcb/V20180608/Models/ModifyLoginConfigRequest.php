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
 * @method string getEnvId() 获取环境 ID，用于指定需要修改登录策略的云开发环境。
 * @method void setEnvId(string $EnvId) 设置环境 ID，用于指定需要修改登录策略的云开发环境。
 * @method boolean getPhoneNumberLogin() 获取手机号短信登录开关。设置为 true 开启手机号短信登录，允许用户使用手机号和短信验证码进行登录和注册；设置为 false 关闭手机号短信登录。
 * @method void setPhoneNumberLogin(boolean $PhoneNumberLogin) 设置手机号短信登录开关。设置为 true 开启手机号短信登录，允许用户使用手机号和短信验证码进行登录和注册；设置为 false 关闭手机号短信登录。
 * @method boolean getEmailLogin() 获取邮箱登录开关。设置为 true 开启邮箱登录，允许用户使用邮箱和密码进行登录和注册；设置为 false 关闭邮箱登录。
 * @method void setEmailLogin(boolean $EmailLogin) 设置邮箱登录开关。设置为 true 开启邮箱登录，允许用户使用邮箱和密码进行登录和注册；设置为 false 关闭邮箱登录。
 * @method boolean getUserNameLogin() 获取用户名密码登录开关。设置为 true 开启用户名密码登录，允许用户使用用户名和密码进行登录和注册；设置为 false 关闭用户名密码登录。
 * @method void setUserNameLogin(boolean $UserNameLogin) 设置用户名密码登录开关。设置为 true 开启用户名密码登录，允许用户使用用户名和密码进行登录和注册；设置为 false 关闭用户名密码登录。
 * @method boolean getAnonymousLogin() 获取匿名登录开关。设置为 true 开启匿名登录，允许用户无需注册即可以匿名身份访问应用；设置为 false 关闭匿名登录。
 * @method void setAnonymousLogin(boolean $AnonymousLogin) 设置匿名登录开关。设置为 true 开启匿名登录，允许用户无需注册即可以匿名身份访问应用；设置为 false 关闭匿名登录。
 * @method VerificationConfig getSmsVerificationConfig() 获取短信验证码发送配置，用于设置短信验证码的发送通道类型和日发送限额。不传则不修改当前配置。
 * @method void setSmsVerificationConfig(VerificationConfig $SmsVerificationConfig) 设置短信验证码发送配置，用于设置短信验证码的发送通道类型和日发送限额。不传则不修改当前配置。
 * @method MFALoginConfig getMfaConfig() 获取MFA 多因子认证登录配置，用于设置多因子认证开关及验证方式（短信、邮箱、TOTP、强制绑定手机号）。不传则不修改当前配置。
 * @method void setMfaConfig(MFALoginConfig $MfaConfig) 设置MFA 多因子认证登录配置，用于设置多因子认证开关及验证方式（短信、邮箱、TOTP、强制绑定手机号）。不传则不修改当前配置。
 * @method PasswordUpdateLoginConfig getPwdUpdateStrategy() 获取密码更新策略配置，用于设置首次登录强制修改密码和定期强制修改密码策略。不传则不修改当前配置。
 * @method void setPwdUpdateStrategy(PasswordUpdateLoginConfig $PwdUpdateStrategy) 设置密码更新策略配置，用于设置首次登录强制修改密码和定期强制修改密码策略。不传则不修改当前配置。
 */
class ModifyLoginConfigRequest extends AbstractModel
{
    /**
     * @var string 环境 ID，用于指定需要修改登录策略的云开发环境。
     */
    public $EnvId;

    /**
     * @var boolean 手机号短信登录开关。设置为 true 开启手机号短信登录，允许用户使用手机号和短信验证码进行登录和注册；设置为 false 关闭手机号短信登录。
     */
    public $PhoneNumberLogin;

    /**
     * @var boolean 邮箱登录开关。设置为 true 开启邮箱登录，允许用户使用邮箱和密码进行登录和注册；设置为 false 关闭邮箱登录。
     */
    public $EmailLogin;

    /**
     * @var boolean 用户名密码登录开关。设置为 true 开启用户名密码登录，允许用户使用用户名和密码进行登录和注册；设置为 false 关闭用户名密码登录。
     */
    public $UserNameLogin;

    /**
     * @var boolean 匿名登录开关。设置为 true 开启匿名登录，允许用户无需注册即可以匿名身份访问应用；设置为 false 关闭匿名登录。
     */
    public $AnonymousLogin;

    /**
     * @var VerificationConfig 短信验证码发送配置，用于设置短信验证码的发送通道类型和日发送限额。不传则不修改当前配置。
     */
    public $SmsVerificationConfig;

    /**
     * @var MFALoginConfig MFA 多因子认证登录配置，用于设置多因子认证开关及验证方式（短信、邮箱、TOTP、强制绑定手机号）。不传则不修改当前配置。
     */
    public $MfaConfig;

    /**
     * @var PasswordUpdateLoginConfig 密码更新策略配置，用于设置首次登录强制修改密码和定期强制修改密码策略。不传则不修改当前配置。
     */
    public $PwdUpdateStrategy;

    /**
     * @param string $EnvId 环境 ID，用于指定需要修改登录策略的云开发环境。
     * @param boolean $PhoneNumberLogin 手机号短信登录开关。设置为 true 开启手机号短信登录，允许用户使用手机号和短信验证码进行登录和注册；设置为 false 关闭手机号短信登录。
     * @param boolean $EmailLogin 邮箱登录开关。设置为 true 开启邮箱登录，允许用户使用邮箱和密码进行登录和注册；设置为 false 关闭邮箱登录。
     * @param boolean $UserNameLogin 用户名密码登录开关。设置为 true 开启用户名密码登录，允许用户使用用户名和密码进行登录和注册；设置为 false 关闭用户名密码登录。
     * @param boolean $AnonymousLogin 匿名登录开关。设置为 true 开启匿名登录，允许用户无需注册即可以匿名身份访问应用；设置为 false 关闭匿名登录。
     * @param VerificationConfig $SmsVerificationConfig 短信验证码发送配置，用于设置短信验证码的发送通道类型和日发送限额。不传则不修改当前配置。
     * @param MFALoginConfig $MfaConfig MFA 多因子认证登录配置，用于设置多因子认证开关及验证方式（短信、邮箱、TOTP、强制绑定手机号）。不传则不修改当前配置。
     * @param PasswordUpdateLoginConfig $PwdUpdateStrategy 密码更新策略配置，用于设置首次登录强制修改密码和定期强制修改密码策略。不传则不修改当前配置。
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
