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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloseAccountCAM请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID
 * @method string getUserName() 获取需要关闭CAM服务的账号名称
 * @method void setUserName(string $UserName) 设置需要关闭CAM服务的账号名称
 * @method string getPassword() 获取关闭CAM后，登录该账号所需要的新密码
 * @method void setPassword(string $Password) 设置关闭CAM后，登录该账号所需要的新密码
 * @method boolean getPasswordEncrypt() 获取密码是否加密
 * @method void setPasswordEncrypt(boolean $PasswordEncrypt) 设置密码是否加密
 */
class CloseAccountCAMRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $DBInstanceId;

    /**
     * @var string 需要关闭CAM服务的账号名称
     */
    public $UserName;

    /**
     * @var string 关闭CAM后，登录该账号所需要的新密码
     */
    public $Password;

    /**
     * @var boolean 密码是否加密
     */
    public $PasswordEncrypt;

    /**
     * @param string $DBInstanceId 实例ID
     * @param string $UserName 需要关闭CAM服务的账号名称
     * @param string $Password 关闭CAM后，登录该账号所需要的新密码
     * @param boolean $PasswordEncrypt 密码是否加密
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("PasswordEncrypt",$param) and $param["PasswordEncrypt"] !== null) {
            $this->PasswordEncrypt = $param["PasswordEncrypt"];
        }
    }
}
