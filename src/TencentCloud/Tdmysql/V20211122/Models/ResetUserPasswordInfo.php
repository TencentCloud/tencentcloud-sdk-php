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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 重置密码的用户类型
 *
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getHost() 获取<p>host</p>
 * @method void setHost(string $Host) 设置<p>host</p>
 * @method string getPassword() 获取<p>明文密码</p>
 * @method void setPassword(string $Password) 设置<p>明文密码</p>
 * @method string getEncryptedPassword() 获取<p>加密密码</p>
 * @method void setEncryptedPassword(string $EncryptedPassword) 设置<p>加密密码</p>
 */
class ResetUserPasswordInfo extends AbstractModel
{
    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>host</p>
     */
    public $Host;

    /**
     * @var string <p>明文密码</p>
     */
    public $Password;

    /**
     * @var string <p>加密密码</p>
     */
    public $EncryptedPassword;

    /**
     * @param string $UserName <p>用户名</p>
     * @param string $Host <p>host</p>
     * @param string $Password <p>明文密码</p>
     * @param string $EncryptedPassword <p>加密密码</p>
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptedPassword",$param) and $param["EncryptedPassword"] !== null) {
            $this->EncryptedPassword = $param["EncryptedPassword"];
        }
    }
}
