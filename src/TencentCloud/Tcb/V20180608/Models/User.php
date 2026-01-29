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
 * 用户信息
 *
 * @method string getUid() 获取用户ID
 * @method void setUid(string $Uid) 设置用户ID
 * @method string getName() 获取用户名
 * @method void setName(string $Name) 设置用户名
 * @method string getType() 获取用户类型：internalUser-内部用户、externalUser-外部用户
 * @method void setType(string $Type) 设置用户类型：internalUser-内部用户、externalUser-外部用户
 * @method string getUserStatus() 获取用户状态：ACTIVE（激活）、BLOCKED（冻结）
 * @method void setUserStatus(string $UserStatus) 设置用户状态：ACTIVE（激活）、BLOCKED（冻结）
 * @method string getNickName() 获取用户昵称
 * @method void setNickName(string $NickName) 设置用户昵称
 * @method string getPhone() 获取手机号
 * @method void setPhone(string $Phone) 设置手机号
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method string getAvatarUrl() 获取头像链接
 * @method void setAvatarUrl(string $AvatarUrl) 设置头像链接
 * @method string getDescription() 获取用户描述
 * @method void setDescription(string $Description) 设置用户描述
 */
class User extends AbstractModel
{
    /**
     * @var string 用户ID
     */
    public $Uid;

    /**
     * @var string 用户名
     */
    public $Name;

    /**
     * @var string 用户类型：internalUser-内部用户、externalUser-外部用户
     */
    public $Type;

    /**
     * @var string 用户状态：ACTIVE（激活）、BLOCKED（冻结）
     */
    public $UserStatus;

    /**
     * @var string 用户昵称
     */
    public $NickName;

    /**
     * @var string 手机号
     */
    public $Phone;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var string 头像链接
     */
    public $AvatarUrl;

    /**
     * @var string 用户描述
     */
    public $Description;

    /**
     * @param string $Uid 用户ID
     * @param string $Name 用户名
     * @param string $Type 用户类型：internalUser-内部用户、externalUser-外部用户
     * @param string $UserStatus 用户状态：ACTIVE（激活）、BLOCKED（冻结）
     * @param string $NickName 用户昵称
     * @param string $Phone 手机号
     * @param string $Email 邮箱
     * @param string $AvatarUrl 头像链接
     * @param string $Description 用户描述
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UserStatus",$param) and $param["UserStatus"] !== null) {
            $this->UserStatus = $param["UserStatus"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("AvatarUrl",$param) and $param["AvatarUrl"] !== null) {
            $this->AvatarUrl = $param["AvatarUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
