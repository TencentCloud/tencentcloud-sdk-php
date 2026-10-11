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
 * UpdateInstanceRole请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getRoleName() 获取<p>角色名称</p>
 * @method void setRoleName(string $RoleName) 设置<p>角色名称</p>
 * @method string getDatabase() 获取<p>角色所属数据库</p>
 * @method void setDatabase(string $Database) 设置<p>角色所属数据库</p>
 * @method array getPrivileges() 获取<p>角色权限列表，不传则不修改</p>
 * @method void setPrivileges(array $Privileges) 设置<p>角色权限列表，不传则不修改</p>
 * @method array getInheritedRoles() 获取<p>角色列表，不传则不修改</p>
 * @method void setInheritedRoles(array $InheritedRoles) 设置<p>角色列表，不传则不修改</p>
 */
class UpdateInstanceRoleRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>角色名称</p>
     */
    public $RoleName;

    /**
     * @var string <p>角色所属数据库</p>
     */
    public $Database;

    /**
     * @var array <p>角色权限列表，不传则不修改</p>
     */
    public $Privileges;

    /**
     * @var array <p>角色列表，不传则不修改</p>
     */
    public $InheritedRoles;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $RoleName <p>角色名称</p>
     * @param string $Database <p>角色所属数据库</p>
     * @param array $Privileges <p>角色权限列表，不传则不修改</p>
     * @param array $InheritedRoles <p>角色列表，不传则不修改</p>
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

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
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
