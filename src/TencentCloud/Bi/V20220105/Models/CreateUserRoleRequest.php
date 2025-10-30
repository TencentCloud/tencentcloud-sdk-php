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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserRole请求参数结构体
 *
 * @method array getRoleIdList() 获取角色ID列表
 * @method void setRoleIdList(array $RoleIdList) 设置角色ID列表
 * @method array getUserList() 获取用户列表（废弃）
 * @method void setUserList(array $UserList) 设置用户列表（废弃）
 * @method array getUserInfoList() 获取用户列表（新）
 * @method void setUserInfoList(array $UserInfoList) 设置用户列表（新）
 * @method array getUserGroups() 获取用户组id列表
 * @method void setUserGroups(array $UserGroups) 设置用户组id列表
 */
class CreateUserRoleRequest extends AbstractModel
{
    /**
     * @var array 角色ID列表
     */
    public $RoleIdList;

    /**
     * @var array 用户列表（废弃）
     * @deprecated
     */
    public $UserList;

    /**
     * @var array 用户列表（新）
     */
    public $UserInfoList;

    /**
     * @var array 用户组id列表
     */
    public $UserGroups;

    /**
     * @param array $RoleIdList 角色ID列表
     * @param array $UserList 用户列表（废弃）
     * @param array $UserInfoList 用户列表（新）
     * @param array $UserGroups 用户组id列表
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
        if (array_key_exists("RoleIdList",$param) and $param["RoleIdList"] !== null) {
            $this->RoleIdList = $param["RoleIdList"];
        }

        if (array_key_exists("UserList",$param) and $param["UserList"] !== null) {
            $this->UserList = [];
            foreach ($param["UserList"] as $key => $value){
                $obj = new UserIdAndUserName();
                $obj->deserialize($value);
                array_push($this->UserList, $obj);
            }
        }

        if (array_key_exists("UserInfoList",$param) and $param["UserInfoList"] !== null) {
            $this->UserInfoList = [];
            foreach ($param["UserInfoList"] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->UserInfoList, $obj);
            }
        }

        if (array_key_exists("UserGroups",$param) and $param["UserGroups"] !== null) {
            $this->UserGroups = $param["UserGroups"];
        }
    }
}
