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
 * 云服务器登录方式
 *
 * @method string getLoginType() 获取登录方式。扫码登录时指定为 SCAN_LOGIN
 * @method void setLoginType(string $LoginType) 设置登录方式。扫码登录时指定为 SCAN_LOGIN
 * @method string getAutoGeneratePassword() 获取是否自动生成密码
 * @method void setAutoGeneratePassword(string $AutoGeneratePassword) 设置是否自动生成密码
 * @method string getPassword() 获取指定密码登录
 * @method void setPassword(string $Password) 设置指定密码登录
 * @method array getKeyIds() 获取绑定密钥ID
 * @method void setKeyIds(array $KeyIds) 设置绑定密钥ID
 */
class VMLoginConfiguration extends AbstractModel
{
    /**
     * @var string 登录方式。扫码登录时指定为 SCAN_LOGIN
     */
    public $LoginType;

    /**
     * @var string 是否自动生成密码
     */
    public $AutoGeneratePassword;

    /**
     * @var string 指定密码登录
     */
    public $Password;

    /**
     * @var array 绑定密钥ID
     */
    public $KeyIds;

    /**
     * @param string $LoginType 登录方式。扫码登录时指定为 SCAN_LOGIN
     * @param string $AutoGeneratePassword 是否自动生成密码
     * @param string $Password 指定密码登录
     * @param array $KeyIds 绑定密钥ID
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
        if (array_key_exists("LoginType",$param) and $param["LoginType"] !== null) {
            $this->LoginType = $param["LoginType"];
        }

        if (array_key_exists("AutoGeneratePassword",$param) and $param["AutoGeneratePassword"] !== null) {
            $this->AutoGeneratePassword = $param["AutoGeneratePassword"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }
    }
}
