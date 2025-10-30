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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例鉴权信息
 *
 * @method string getUsername() 获取用户名
 * @method void setUsername(string $Username) 设置用户名
 * @method string getPassword() 获取账户密码
 * @method void setPassword(string $Password) 设置账户密码
 * @method string getAccessToken() 获取访问凭据 token
 * @method void setAccessToken(string $AccessToken) 设置访问凭据 token
 */
class SourceInstanceAuth extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $Username;

    /**
     * @var string 账户密码
     */
    public $Password;

    /**
     * @var string 访问凭据 token
     */
    public $AccessToken;

    /**
     * @param string $Username 用户名
     * @param string $Password 账户密码
     * @param string $AccessToken 访问凭据 token
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }
    }
}
