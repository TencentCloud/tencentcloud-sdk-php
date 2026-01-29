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
 * CreateUser请求参数结构体
 *
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getName() 获取用户名，用户名规则：1. 长度1-64字符 2. 只能包含大小写英文字母、数字和符号 . _ - 3. 只能以字母或数字开头 4. 不能重复
 * @method void setName(string $Name) 设置用户名，用户名规则：1. 长度1-64字符 2. 只能包含大小写英文字母、数字和符号 . _ - 3. 只能以字母或数字开头 4. 不能重复
 * @method string getUid() 获取用户ID，最多64字符，如不传则系统自动生成
 * @method void setUid(string $Uid) 设置用户ID，最多64字符，如不传则系统自动生成
 * @method string getType() 获取用户类型：internalUser-内部用户、externalUser-外部用户，默认internalUser（内部用户）
 * @method void setType(string $Type) 设置用户类型：internalUser-内部用户、externalUser-外部用户，默认internalUser（内部用户）
 * @method string getPassword() 获取密码，传入Uid时密码可不传。密码规则：1. 长度8-32字符（推荐12位以上） 2. 不能以特殊字符开头 3. 至少包含以下四项中的三项：小写字母a-z、大写字母A-Z、数字0-9、特殊字符()!@#$%^&*\|?><_-
 * @method void setPassword(string $Password) 设置密码，传入Uid时密码可不传。密码规则：1. 长度8-32字符（推荐12位以上） 2. 不能以特殊字符开头 3. 至少包含以下四项中的三项：小写字母a-z、大写字母A-Z、数字0-9、特殊字符()!@#$%^&*\|?><_-
 * @method string getUserStatus() 获取用户状态：ACTIVE（激活）、BLOCKED（冻结），默认激活
 * @method void setUserStatus(string $UserStatus) 设置用户状态：ACTIVE（激活）、BLOCKED（冻结），默认激活
 * @method string getNickName() 获取用户昵称，长度2-64字符
 * @method void setNickName(string $NickName) 设置用户昵称，长度2-64字符
 * @method string getPhone() 获取手机号，不能重复
 * @method void setPhone(string $Phone) 设置手机号，不能重复
 * @method string getEmail() 获取邮箱地址，不能重复
 * @method void setEmail(string $Email) 设置邮箱地址，不能重复
 * @method string getAvatarUrl() 获取头像链接，可访问的公网URL
 * @method void setAvatarUrl(string $AvatarUrl) 设置头像链接，可访问的公网URL
 * @method string getDescription() 获取用户描述，最多200字符
 * @method void setDescription(string $Description) 设置用户描述，最多200字符
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 用户名，用户名规则：1. 长度1-64字符 2. 只能包含大小写英文字母、数字和符号 . _ - 3. 只能以字母或数字开头 4. 不能重复
     */
    public $Name;

    /**
     * @var string 用户ID，最多64字符，如不传则系统自动生成
     */
    public $Uid;

    /**
     * @var string 用户类型：internalUser-内部用户、externalUser-外部用户，默认internalUser（内部用户）
     */
    public $Type;

    /**
     * @var string 密码，传入Uid时密码可不传。密码规则：1. 长度8-32字符（推荐12位以上） 2. 不能以特殊字符开头 3. 至少包含以下四项中的三项：小写字母a-z、大写字母A-Z、数字0-9、特殊字符()!@#$%^&*\|?><_-
     */
    public $Password;

    /**
     * @var string 用户状态：ACTIVE（激活）、BLOCKED（冻结），默认激活
     */
    public $UserStatus;

    /**
     * @var string 用户昵称，长度2-64字符
     */
    public $NickName;

    /**
     * @var string 手机号，不能重复
     */
    public $Phone;

    /**
     * @var string 邮箱地址，不能重复
     */
    public $Email;

    /**
     * @var string 头像链接，可访问的公网URL
     */
    public $AvatarUrl;

    /**
     * @var string 用户描述，最多200字符
     */
    public $Description;

    /**
     * @param string $EnvId 环境id
     * @param string $Name 用户名，用户名规则：1. 长度1-64字符 2. 只能包含大小写英文字母、数字和符号 . _ - 3. 只能以字母或数字开头 4. 不能重复
     * @param string $Uid 用户ID，最多64字符，如不传则系统自动生成
     * @param string $Type 用户类型：internalUser-内部用户、externalUser-外部用户，默认internalUser（内部用户）
     * @param string $Password 密码，传入Uid时密码可不传。密码规则：1. 长度8-32字符（推荐12位以上） 2. 不能以特殊字符开头 3. 至少包含以下四项中的三项：小写字母a-z、大写字母A-Z、数字0-9、特殊字符()!@#$%^&*\|?><_-
     * @param string $UserStatus 用户状态：ACTIVE（激活）、BLOCKED（冻结），默认激活
     * @param string $NickName 用户昵称，长度2-64字符
     * @param string $Phone 手机号，不能重复
     * @param string $Email 邮箱地址，不能重复
     * @param string $AvatarUrl 头像链接，可访问的公网URL
     * @param string $Description 用户描述，最多200字符
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
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
