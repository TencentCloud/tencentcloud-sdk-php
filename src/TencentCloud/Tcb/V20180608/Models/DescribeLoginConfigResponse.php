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
 * DescribeLoginConfig返回参数结构体
 *
 * @method boolean getEmailLogin() 获取是否开启邮箱登录方式。true 表示已开启，允许用户使用邮箱和密码进行登录；false 表示已关闭。
 * @method void setEmailLogin(boolean $EmailLogin) 设置是否开启邮箱登录方式。true 表示已开启，允许用户使用邮箱和密码进行登录；false 表示已关闭。
 * @method boolean getAnonymousLogin() 获取是否开启匿名登录方式。true 表示已开启，允许用户无需注册即可以匿名身份登录；false 表示已关闭。
 * @method void setAnonymousLogin(boolean $AnonymousLogin) 设置是否开启匿名登录方式。true 表示已开启，允许用户无需注册即可以匿名身份登录；false 表示已关闭。
 * @method boolean getUserNameLogin() 获取是否开启用户名密码登录方式。true 表示已开启，允许用户使用用户名和密码进行登录；false 表示已关闭。
 * @method void setUserNameLogin(boolean $UserNameLogin) 设置是否开启用户名密码登录方式。true 表示已开启，允许用户使用用户名和密码进行登录；false 表示已关闭。
 * @method VerificationConfig getSmsVerificationConfig() 获取短信验证码发送配置，包含短信发送通道类型、自定义 APIs 数据源、调用方法及每日发送限额等信息。
 * @method void setSmsVerificationConfig(VerificationConfig $SmsVerificationConfig) 设置短信验证码发送配置，包含短信发送通道类型、自定义 APIs 数据源、调用方法及每日发送限额等信息。
 * @method boolean getPhoneNumberLogin() 获取是否开启手机号短信登录方式。true 表示已开启，允许用户使用手机号和短信验证码进行登录和注册；false 表示已关闭。
 * @method void setPhoneNumberLogin(boolean $PhoneNumberLogin) 设置是否开启手机号短信登录方式。true 表示已开启，允许用户使用手机号和短信验证码进行登录和注册；false 表示已关闭。
 * @method MFALoginConfig getMfaConfig() 获取MFA 多因子认证登录配置，包含 MFA 开关及各验证方式（短信、邮箱、TOTP、强制绑定手机号）的启用状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMfaConfig(MFALoginConfig $MfaConfig) 设置MFA 多因子认证登录配置，包含 MFA 开关及各验证方式（短信、邮箱、TOTP、强制绑定手机号）的启用状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PasswordUpdateLoginConfig getPwdUpdateStrategy() 获取密码修改策略配置，包含首次登录强制修改密码开关及定期修改密码策略（周期和时间单位）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPwdUpdateStrategy(PasswordUpdateLoginConfig $PwdUpdateStrategy) 设置密码修改策略配置，包含首次登录强制修改密码开关及定期修改密码策略（周期和时间单位）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLoginConfigResponse extends AbstractModel
{
    /**
     * @var boolean 是否开启邮箱登录方式。true 表示已开启，允许用户使用邮箱和密码进行登录；false 表示已关闭。
     */
    public $EmailLogin;

    /**
     * @var boolean 是否开启匿名登录方式。true 表示已开启，允许用户无需注册即可以匿名身份登录；false 表示已关闭。
     */
    public $AnonymousLogin;

    /**
     * @var boolean 是否开启用户名密码登录方式。true 表示已开启，允许用户使用用户名和密码进行登录；false 表示已关闭。
     */
    public $UserNameLogin;

    /**
     * @var VerificationConfig 短信验证码发送配置，包含短信发送通道类型、自定义 APIs 数据源、调用方法及每日发送限额等信息。
     */
    public $SmsVerificationConfig;

    /**
     * @var boolean 是否开启手机号短信登录方式。true 表示已开启，允许用户使用手机号和短信验证码进行登录和注册；false 表示已关闭。
     */
    public $PhoneNumberLogin;

    /**
     * @var MFALoginConfig MFA 多因子认证登录配置，包含 MFA 开关及各验证方式（短信、邮箱、TOTP、强制绑定手机号）的启用状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MfaConfig;

    /**
     * @var PasswordUpdateLoginConfig 密码修改策略配置，包含首次登录强制修改密码开关及定期修改密码策略（周期和时间单位）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PwdUpdateStrategy;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $EmailLogin 是否开启邮箱登录方式。true 表示已开启，允许用户使用邮箱和密码进行登录；false 表示已关闭。
     * @param boolean $AnonymousLogin 是否开启匿名登录方式。true 表示已开启，允许用户无需注册即可以匿名身份登录；false 表示已关闭。
     * @param boolean $UserNameLogin 是否开启用户名密码登录方式。true 表示已开启，允许用户使用用户名和密码进行登录；false 表示已关闭。
     * @param VerificationConfig $SmsVerificationConfig 短信验证码发送配置，包含短信发送通道类型、自定义 APIs 数据源、调用方法及每日发送限额等信息。
     * @param boolean $PhoneNumberLogin 是否开启手机号短信登录方式。true 表示已开启，允许用户使用手机号和短信验证码进行登录和注册；false 表示已关闭。
     * @param MFALoginConfig $MfaConfig MFA 多因子认证登录配置，包含 MFA 开关及各验证方式（短信、邮箱、TOTP、强制绑定手机号）的启用状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PasswordUpdateLoginConfig $PwdUpdateStrategy 密码修改策略配置，包含首次登录强制修改密码开关及定期修改密码策略（周期和时间单位）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("EmailLogin",$param) and $param["EmailLogin"] !== null) {
            $this->EmailLogin = $param["EmailLogin"];
        }

        if (array_key_exists("AnonymousLogin",$param) and $param["AnonymousLogin"] !== null) {
            $this->AnonymousLogin = $param["AnonymousLogin"];
        }

        if (array_key_exists("UserNameLogin",$param) and $param["UserNameLogin"] !== null) {
            $this->UserNameLogin = $param["UserNameLogin"];
        }

        if (array_key_exists("SmsVerificationConfig",$param) and $param["SmsVerificationConfig"] !== null) {
            $this->SmsVerificationConfig = new VerificationConfig();
            $this->SmsVerificationConfig->deserialize($param["SmsVerificationConfig"]);
        }

        if (array_key_exists("PhoneNumberLogin",$param) and $param["PhoneNumberLogin"] !== null) {
            $this->PhoneNumberLogin = $param["PhoneNumberLogin"];
        }

        if (array_key_exists("MfaConfig",$param) and $param["MfaConfig"] !== null) {
            $this->MfaConfig = new MFALoginConfig();
            $this->MfaConfig->deserialize($param["MfaConfig"]);
        }

        if (array_key_exists("PwdUpdateStrategy",$param) and $param["PwdUpdateStrategy"] !== null) {
            $this->PwdUpdateStrategy = new PasswordUpdateLoginConfig();
            $this->PwdUpdateStrategy->deserialize($param["PwdUpdateStrategy"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
