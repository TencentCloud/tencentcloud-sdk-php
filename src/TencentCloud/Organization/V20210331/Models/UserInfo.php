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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息
 *
 * @method string getUserName() 获取查询username。
 * @method void setUserName(string $UserName) 设置查询username。
 * @method string getFirstName() 获取用户的名。
 * @method void setFirstName(string $FirstName) 设置用户的名。
 * @method string getLastName() 获取用户的姓。
 * @method void setLastName(string $LastName) 设置用户的姓。
 * @method string getDisplayName() 获取用户的显示名称。
 * @method void setDisplayName(string $DisplayName) 设置用户的显示名称。
 * @method string getDescription() 获取用户的描述。
 * @method void setDescription(string $Description) 设置用户的描述。
 * @method string getEmail() 获取用户的电子邮箱。目录内必须唯一。
 * @method void setEmail(string $Email) 设置用户的电子邮箱。目录内必须唯一。
 * @method string getUserStatus() 获取用户状态 Enabled：启用， Disabled：禁用。
 * @method void setUserStatus(string $UserStatus) 设置用户状态 Enabled：启用， Disabled：禁用。
 * @method string getUserType() 获取用户类型  Manual：手动创建，Synchronized：外部导入。
 * @method void setUserType(string $UserType) 设置用户类型  Manual：手动创建，Synchronized：外部导入。
 * @method string getUserId() 获取用户 ID
 * @method void setUserId(string $UserId) 设置用户 ID
 * @method string getCreateTime() 获取用户的创建时间
 * @method void setCreateTime(string $CreateTime) 设置用户的创建时间
 * @method string getUpdateTime() 获取用户的修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置用户的修改时间
 * @method boolean getIsSelected() 获取是否选中
 * @method void setIsSelected(boolean $IsSelected) 设置是否选中
 * @method string getPassword() 获取用户密码
 * @method void setPassword(string $Password) 设置用户密码
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string 查询username。
     */
    public $UserName;

    /**
     * @var string 用户的名。
     */
    public $FirstName;

    /**
     * @var string 用户的姓。
     */
    public $LastName;

    /**
     * @var string 用户的显示名称。
     */
    public $DisplayName;

    /**
     * @var string 用户的描述。
     */
    public $Description;

    /**
     * @var string 用户的电子邮箱。目录内必须唯一。
     */
    public $Email;

    /**
     * @var string 用户状态 Enabled：启用， Disabled：禁用。
     */
    public $UserStatus;

    /**
     * @var string 用户类型  Manual：手动创建，Synchronized：外部导入。
     */
    public $UserType;

    /**
     * @var string 用户 ID
     */
    public $UserId;

    /**
     * @var string 用户的创建时间
     */
    public $CreateTime;

    /**
     * @var string 用户的修改时间
     */
    public $UpdateTime;

    /**
     * @var boolean 是否选中
     */
    public $IsSelected;

    /**
     * @var string 用户密码
     */
    public $Password;

    /**
     * @param string $UserName 查询username。
     * @param string $FirstName 用户的名。
     * @param string $LastName 用户的姓。
     * @param string $DisplayName 用户的显示名称。
     * @param string $Description 用户的描述。
     * @param string $Email 用户的电子邮箱。目录内必须唯一。
     * @param string $UserStatus 用户状态 Enabled：启用， Disabled：禁用。
     * @param string $UserType 用户类型  Manual：手动创建，Synchronized：外部导入。
     * @param string $UserId 用户 ID
     * @param string $CreateTime 用户的创建时间
     * @param string $UpdateTime 用户的修改时间
     * @param boolean $IsSelected 是否选中
     * @param string $Password 用户密码
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

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("UserStatus",$param) and $param["UserStatus"] !== null) {
            $this->UserStatus = $param["UserStatus"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsSelected",$param) and $param["IsSelected"] !== null) {
            $this->IsSelected = $param["IsSelected"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
