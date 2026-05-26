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
 * ModifyUserPrivileges请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，形如：tdsql3-5baee8df。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：tdsql3-5baee8df。
 * @method array getUsers() 获取登录用户名和主机信息
 * @method void setUsers(array $Users) 设置登录用户名和主机信息
 * @method array getGlobalPrivileges() 获取全局权限
 * @method void setGlobalPrivileges(array $GlobalPrivileges) 设置全局权限
 * @method array getDatabasePrivileges() 获取Database级别权限
 * @method void setDatabasePrivileges(array $DatabasePrivileges) 设置Database级别权限
 * @method array getTablePrivileges() 获取Table级别权限
 * @method void setTablePrivileges(array $TablePrivileges) 设置Table级别权限
 */
class ModifyUserPrivilegesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，形如：tdsql3-5baee8df。
     */
    public $InstanceId;

    /**
     * @var array 登录用户名和主机信息
     */
    public $Users;

    /**
     * @var array 全局权限
     */
    public $GlobalPrivileges;

    /**
     * @var array Database级别权限
     */
    public $DatabasePrivileges;

    /**
     * @var array Table级别权限
     */
    public $TablePrivileges;

    /**
     * @param string $InstanceId 实例 ID，形如：tdsql3-5baee8df。
     * @param array $Users 登录用户名和主机信息
     * @param array $GlobalPrivileges 全局权限
     * @param array $DatabasePrivileges Database级别权限
     * @param array $TablePrivileges Table级别权限
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

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new User();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }

        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivileges",$param) and $param["DatabasePrivileges"] !== null) {
            $this->DatabasePrivileges = [];
            foreach ($param["DatabasePrivileges"] as $key => $value){
                $obj = new DatabasePrivileges();
                $obj->deserialize($value);
                array_push($this->DatabasePrivileges, $obj);
            }
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->TablePrivileges = [];
            foreach ($param["TablePrivileges"] as $key => $value){
                $obj = new TablePrivileges();
                $obj->deserialize($value);
                array_push($this->TablePrivileges, $obj);
            }
        }
    }
}
