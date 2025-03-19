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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EditAuthConfig请求参数结构体
 *
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getPhoneNumberLogin() 获取手机号登录配置 "TRUE",  "FALSE", "LOGIN_ONLY"
 * @method void setPhoneNumberLogin(string $PhoneNumberLogin) 设置手机号登录配置 "TRUE",  "FALSE", "LOGIN_ONLY"
 * @method string getAnonymousLogin() 获取匿名登录配置 "TRUE",  "FALSE"
 * @method void setAnonymousLogin(string $AnonymousLogin) 设置匿名登录配置 "TRUE",  "FALSE"
 * @method string getUsernameLogin() 获取用户名密码登录配置 "TRUE",  "FALSE"
 * @method void setUsernameLogin(string $UsernameLogin) 设置用户名密码登录配置 "TRUE",  "FALSE"
 */
class EditAuthConfigRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 手机号登录配置 "TRUE",  "FALSE", "LOGIN_ONLY"
     */
    public $PhoneNumberLogin;

    /**
     * @var string 匿名登录配置 "TRUE",  "FALSE"
     */
    public $AnonymousLogin;

    /**
     * @var string 用户名密码登录配置 "TRUE",  "FALSE"
     */
    public $UsernameLogin;

    /**
     * @param string $EnvId 环境id
     * @param string $PhoneNumberLogin 手机号登录配置 "TRUE",  "FALSE", "LOGIN_ONLY"
     * @param string $AnonymousLogin 匿名登录配置 "TRUE",  "FALSE"
     * @param string $UsernameLogin 用户名密码登录配置 "TRUE",  "FALSE"
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

        if (array_key_exists("AnonymousLogin",$param) and $param["AnonymousLogin"] !== null) {
            $this->AnonymousLogin = $param["AnonymousLogin"];
        }

        if (array_key_exists("UsernameLogin",$param) and $param["UsernameLogin"] !== null) {
            $this->UsernameLogin = $param["UsernameLogin"];
        }
    }
}
