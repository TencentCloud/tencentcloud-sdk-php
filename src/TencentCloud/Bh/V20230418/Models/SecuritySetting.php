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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 系统安全设置
 *
 * @method AuthModeSetting getAuthMode() 获取认证方式设置
 * @method void setAuthMode(AuthModeSetting $AuthMode) 设置认证方式设置
 * @method PasswordSetting getPassword() 获取密码安全设置
 * @method void setPassword(PasswordSetting $Password) 设置密码安全设置
 * @method LoginSetting getLogin() 获取登录安全设置
 * @method void setLogin(LoginSetting $Login) 设置登录安全设置
 * @method LDAPSetting getLDAP() 获取LDAP配置信息
 * @method void setLDAP(LDAPSetting $LDAP) 设置LDAP配置信息
 * @method OAuthSetting getOAuth() 获取OAuth配置信息
 * @method void setOAuth(OAuthSetting $OAuth) 设置OAuth配置信息
 * @method AuthModeSetting getAuthModeGM() 获取国密认证方式设置
 * @method void setAuthModeGM(AuthModeSetting $AuthModeGM) 设置国密认证方式设置
 * @method ReconnectionSetting getReconnection() 获取资产重连次数
 * @method void setReconnection(ReconnectionSetting $Reconnection) 设置资产重连次数
 * @method EnvInternetAccessSetting getEnvInternetAccess() 获取大区环境网络设置
 * @method void setEnvInternetAccess(EnvInternetAccessSetting $EnvInternetAccess) 设置大区环境网络设置
 */
class SecuritySetting extends AbstractModel
{
    /**
     * @var AuthModeSetting 认证方式设置
     */
    public $AuthMode;

    /**
     * @var PasswordSetting 密码安全设置
     */
    public $Password;

    /**
     * @var LoginSetting 登录安全设置
     */
    public $Login;

    /**
     * @var LDAPSetting LDAP配置信息
     */
    public $LDAP;

    /**
     * @var OAuthSetting OAuth配置信息
     */
    public $OAuth;

    /**
     * @var AuthModeSetting 国密认证方式设置
     */
    public $AuthModeGM;

    /**
     * @var ReconnectionSetting 资产重连次数
     */
    public $Reconnection;

    /**
     * @var EnvInternetAccessSetting 大区环境网络设置
     */
    public $EnvInternetAccess;

    /**
     * @param AuthModeSetting $AuthMode 认证方式设置
     * @param PasswordSetting $Password 密码安全设置
     * @param LoginSetting $Login 登录安全设置
     * @param LDAPSetting $LDAP LDAP配置信息
     * @param OAuthSetting $OAuth OAuth配置信息
     * @param AuthModeSetting $AuthModeGM 国密认证方式设置
     * @param ReconnectionSetting $Reconnection 资产重连次数
     * @param EnvInternetAccessSetting $EnvInternetAccess 大区环境网络设置
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
        if (array_key_exists("AuthMode",$param) and $param["AuthMode"] !== null) {
            $this->AuthMode = new AuthModeSetting();
            $this->AuthMode->deserialize($param["AuthMode"]);
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = new PasswordSetting();
            $this->Password->deserialize($param["Password"]);
        }

        if (array_key_exists("Login",$param) and $param["Login"] !== null) {
            $this->Login = new LoginSetting();
            $this->Login->deserialize($param["Login"]);
        }

        if (array_key_exists("LDAP",$param) and $param["LDAP"] !== null) {
            $this->LDAP = new LDAPSetting();
            $this->LDAP->deserialize($param["LDAP"]);
        }

        if (array_key_exists("OAuth",$param) and $param["OAuth"] !== null) {
            $this->OAuth = new OAuthSetting();
            $this->OAuth->deserialize($param["OAuth"]);
        }

        if (array_key_exists("AuthModeGM",$param) and $param["AuthModeGM"] !== null) {
            $this->AuthModeGM = new AuthModeSetting();
            $this->AuthModeGM->deserialize($param["AuthModeGM"]);
        }

        if (array_key_exists("Reconnection",$param) and $param["Reconnection"] !== null) {
            $this->Reconnection = new ReconnectionSetting();
            $this->Reconnection->deserialize($param["Reconnection"]);
        }

        if (array_key_exists("EnvInternetAccess",$param) and $param["EnvInternetAccess"] !== null) {
            $this->EnvInternetAccess = new EnvInternetAccessSetting();
            $this->EnvInternetAccess->deserialize($param["EnvInternetAccess"]);
        }
    }
}
