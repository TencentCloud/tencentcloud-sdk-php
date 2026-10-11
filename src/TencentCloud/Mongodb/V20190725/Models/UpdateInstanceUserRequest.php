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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateInstanceUser请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getDatabase() 获取<p>认证数据库</p>
 * @method void setDatabase(string $Database) 设置<p>认证数据库</p>
 * @method string getPassword() 获取<p>新密码（可选，为空则不修改密码）</p>
 * @method void setPassword(string $Password) 设置<p>新密码（可选，为空则不修改密码）</p>
 * @method string getEncryptedPassword() 获取<p>加密后的密码（可选，与Password二选一）</p>
 * @method void setEncryptedPassword(string $EncryptedPassword) 设置<p>加密后的密码（可选，与Password二选一）</p>
 * @method array getRoles() 获取<p>新的角色列表（可选，为空则不修改角色）</p>
 * @method void setRoles(array $Roles) 设置<p>新的角色列表（可选，为空则不修改角色）</p>
 * @method array getAuthRole() 获取<p>新的权限列表（可选，为空则不修改权限）</p>
 * @method void setAuthRole(array $AuthRole) 设置<p>新的权限列表（可选，为空则不修改权限）</p>
 * @method string getDescription() 获取<p>用户描述（可选，为空则不修改描述）</p>
 * @method void setDescription(string $Description) 设置<p>用户描述（可选，为空则不修改描述）</p>
 */
class UpdateInstanceUserRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>认证数据库</p>
     */
    public $Database;

    /**
     * @var string <p>新密码（可选，为空则不修改密码）</p>
     */
    public $Password;

    /**
     * @var string <p>加密后的密码（可选，与Password二选一）</p>
     */
    public $EncryptedPassword;

    /**
     * @var array <p>新的角色列表（可选，为空则不修改角色）</p>
     */
    public $Roles;

    /**
     * @var array <p>新的权限列表（可选，为空则不修改权限）</p>
     */
    public $AuthRole;

    /**
     * @var string <p>用户描述（可选，为空则不修改描述）</p>
     */
    public $Description;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $UserName <p>用户名</p>
     * @param string $Database <p>认证数据库</p>
     * @param string $Password <p>新密码（可选，为空则不修改密码）</p>
     * @param string $EncryptedPassword <p>加密后的密码（可选，与Password二选一）</p>
     * @param array $Roles <p>新的角色列表（可选，为空则不修改角色）</p>
     * @param array $AuthRole <p>新的权限列表（可选，为空则不修改权限）</p>
     * @param string $Description <p>用户描述（可选，为空则不修改描述）</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptedPassword",$param) and $param["EncryptedPassword"] !== null) {
            $this->EncryptedPassword = $param["EncryptedPassword"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new Role();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("AuthRole",$param) and $param["AuthRole"] !== null) {
            $this->AuthRole = [];
            foreach ($param["AuthRole"] as $key => $value){
                $obj = new Auth();
                $obj->deserialize($value);
                array_push($this->AuthRole, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
