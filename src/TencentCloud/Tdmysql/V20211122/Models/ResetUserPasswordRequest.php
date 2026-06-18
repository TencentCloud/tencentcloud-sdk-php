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
 * ResetUserPassword请求参数结构体
 *
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getHost() 获取主机IP，IP段以%结尾，表示允许该IP段的所有IP
 * @method void setHost(string $Host) 设置主机IP，IP段以%结尾，表示允许该IP段的所有IP
 * @method string getPassword() 获取新密码，要求长度8-32，至少包含英文、数字和符号中的两种
 * @method void setPassword(string $Password) 设置新密码，要求长度8-32，至少包含英文、数字和符号中的两种
 * @method string getEncryptedPassword() 获取加密密码
 * @method void setEncryptedPassword(string $EncryptedPassword) 设置加密密码
 */
class ResetUserPasswordRequest extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 主机IP，IP段以%结尾，表示允许该IP段的所有IP
     */
    public $Host;

    /**
     * @var string 新密码，要求长度8-32，至少包含英文、数字和符号中的两种
     */
    public $Password;

    /**
     * @var string 加密密码
     */
    public $EncryptedPassword;

    /**
     * @param string $UserName 用户名
     * @param string $InstanceId 实例ID
     * @param string $Host 主机IP，IP段以%结尾，表示允许该IP段的所有IP
     * @param string $Password 新密码，要求长度8-32，至少包含英文、数字和符号中的两种
     * @param string $EncryptedPassword 加密密码
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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
