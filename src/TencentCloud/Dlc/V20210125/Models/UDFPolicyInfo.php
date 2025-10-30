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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UDF权限信息
 *
 * @method array getAccesses() 获取权限类型
示例：select，alter，drop
 * @method void setAccesses(array $Accesses) 设置权限类型
示例：select，alter，drop
 * @method array getUsers() 获取拥有权限的用户信息
 * @method void setUsers(array $Users) 设置拥有权限的用户信息
 * @method array getGroups() 获取拥有权限的工作组的信息
 * @method void setGroups(array $Groups) 设置拥有权限的工作组的信息
 */
class UDFPolicyInfo extends AbstractModel
{
    /**
     * @var array 权限类型
示例：select，alter，drop
     */
    public $Accesses;

    /**
     * @var array 拥有权限的用户信息
     */
    public $Users;

    /**
     * @var array 拥有权限的工作组的信息
     */
    public $Groups;

    /**
     * @param array $Accesses 权限类型
示例：select，alter，drop
     * @param array $Users 拥有权限的用户信息
     * @param array $Groups 拥有权限的工作组的信息
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
        if (array_key_exists("Accesses",$param) and $param["Accesses"] !== null) {
            $this->Accesses = $param["Accesses"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = $param["Groups"];
        }
    }
}
