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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎的初始管理帐号
 *
 * @method string getName() 获取控制台初始用户名
 * @method void setName(string $Name) 设置控制台初始用户名
 * @method string getPassword() 获取控制台初始密码
 * @method void setPassword(string $Password) 设置控制台初始密码
 * @method string getToken() 获取引擎接口的管理员 Token
 * @method void setToken(string $Token) 设置引擎接口的管理员 Token
 */
class EngineAdmin extends AbstractModel
{
    /**
     * @var string 控制台初始用户名
     */
    public $Name;

    /**
     * @var string 控制台初始密码
     */
    public $Password;

    /**
     * @var string 引擎接口的管理员 Token
     */
    public $Token;

    /**
     * @param string $Name 控制台初始用户名
     * @param string $Password 控制台初始密码
     * @param string $Token 引擎接口的管理员 Token
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
