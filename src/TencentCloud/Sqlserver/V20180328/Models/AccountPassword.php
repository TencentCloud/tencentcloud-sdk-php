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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例账号密码信息
 *
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 * @method integer getEncryptedVersion() 获取加密密钥版本号，0表示不使用加密
 * @method void setEncryptedVersion(integer $EncryptedVersion) 设置加密密钥版本号，0表示不使用加密
 */
class AccountPassword extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @var integer 加密密钥版本号，0表示不使用加密
     */
    public $EncryptedVersion;

    /**
     * @param string $UserName 用户名
     * @param string $Password 密码
     * @param integer $EncryptedVersion 加密密钥版本号，0表示不使用加密
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptedVersion",$param) and $param["EncryptedVersion"] !== null) {
            $this->EncryptedVersion = $param["EncryptedVersion"];
        }
    }
}
