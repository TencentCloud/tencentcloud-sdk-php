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
 * 账号信息
 *
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getDatabase() 获取<p>认证数据库</p>
 * @method void setDatabase(string $Database) 设置<p>认证数据库</p>
 * @method array getRoles() 获取<p>角色列表（新方式）</p>
 * @method void setRoles(array $Roles) 设置<p>角色列表（新方式）</p>
 * @method array getAuthRole() 获取<p>权限列表（老方式）</p>
 * @method void setAuthRole(array $AuthRole) 设置<p>权限列表（老方式）</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getConsolePassUpdateTime() 获取<p>控制台密码更新时间</p>
 * @method void setConsolePassUpdateTime(string $ConsolePassUpdateTime) 设置<p>控制台密码更新时间</p>
 * @method integer getEnablePasswordRotation() 获取<p>是否开启密码轮转</p>
 * @method void setEnablePasswordRotation(integer $EnablePasswordRotation) 设置<p>是否开启密码轮转</p>
 * @method string getDescription() 获取<p>自定义描述</p>
 * @method void setDescription(string $Description) 设置<p>自定义描述</p>
 */
class InstanceUserInfo extends AbstractModel
{
    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>认证数据库</p>
     */
    public $Database;

    /**
     * @var array <p>角色列表（新方式）</p>
     */
    public $Roles;

    /**
     * @var array <p>权限列表（老方式）</p>
     */
    public $AuthRole;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>控制台密码更新时间</p>
     */
    public $ConsolePassUpdateTime;

    /**
     * @var integer <p>是否开启密码轮转</p>
     */
    public $EnablePasswordRotation;

    /**
     * @var string <p>自定义描述</p>
     */
    public $Description;

    /**
     * @param string $UserName <p>用户名</p>
     * @param string $Database <p>认证数据库</p>
     * @param array $Roles <p>角色列表（新方式）</p>
     * @param array $AuthRole <p>权限列表（老方式）</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $ConsolePassUpdateTime <p>控制台密码更新时间</p>
     * @param integer $EnablePasswordRotation <p>是否开启密码轮转</p>
     * @param string $Description <p>自定义描述</p>
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

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ConsolePassUpdateTime",$param) and $param["ConsolePassUpdateTime"] !== null) {
            $this->ConsolePassUpdateTime = $param["ConsolePassUpdateTime"];
        }

        if (array_key_exists("EnablePasswordRotation",$param) and $param["EnablePasswordRotation"] !== null) {
            $this->EnablePasswordRotation = $param["EnablePasswordRotation"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
