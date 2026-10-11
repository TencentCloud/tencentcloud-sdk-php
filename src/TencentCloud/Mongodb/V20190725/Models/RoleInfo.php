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
 * 角色详细信息
 *
 * @method string getRoleName() 获取<p>角色名称</p>
 * @method void setRoleName(string $RoleName) 设置<p>角色名称</p>
 * @method string getDatabase() 获取<p>角色所属数据库</p>
 * @method void setDatabase(string $Database) 设置<p>角色所属数据库</p>
 * @method string getRoleType() 获取<p>角色类型：builtin_database-内置数据库角色，builtin_cluster-内置集群角色，custom-自定义角色</p>
 * @method void setRoleType(string $RoleType) 设置<p>角色类型：builtin_database-内置数据库角色，builtin_cluster-内置集群角色，custom-自定义角色</p>
 * @method array getPrivileges() 获取<p>授予的权限</p>
 * @method void setPrivileges(array $Privileges) 设置<p>授予的权限</p>
 * @method array getInheritedRoles() 获取<p>继承的角色</p>
 * @method void setInheritedRoles(array $InheritedRoles) 设置<p>继承的角色</p>
 */
class RoleInfo extends AbstractModel
{
    /**
     * @var string <p>角色名称</p>
     */
    public $RoleName;

    /**
     * @var string <p>角色所属数据库</p>
     */
    public $Database;

    /**
     * @var string <p>角色类型：builtin_database-内置数据库角色，builtin_cluster-内置集群角色，custom-自定义角色</p>
     */
    public $RoleType;

    /**
     * @var array <p>授予的权限</p>
     */
    public $Privileges;

    /**
     * @var array <p>继承的角色</p>
     */
    public $InheritedRoles;

    /**
     * @param string $RoleName <p>角色名称</p>
     * @param string $Database <p>角色所属数据库</p>
     * @param string $RoleType <p>角色类型：builtin_database-内置数据库角色，builtin_cluster-内置集群角色，custom-自定义角色</p>
     * @param array $Privileges <p>授予的权限</p>
     * @param array $InheritedRoles <p>继承的角色</p>
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = [];
            foreach ($param["Privileges"] as $key => $value){
                $obj = new RolePrivilege();
                $obj->deserialize($value);
                array_push($this->Privileges, $obj);
            }
        }

        if (array_key_exists("InheritedRoles",$param) and $param["InheritedRoles"] !== null) {
            $this->InheritedRoles = [];
            foreach ($param["InheritedRoles"] as $key => $value){
                $obj = new Role();
                $obj->deserialize($value);
                array_push($this->InheritedRoles, $obj);
            }
        }
    }
}
