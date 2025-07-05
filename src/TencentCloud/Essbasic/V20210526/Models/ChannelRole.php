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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色信息
 *
 * @method string getRoleId() 获取角色ID,为32位字符串
 * @method void setRoleId(string $RoleId) 设置角色ID,为32位字符串
 * @method string getRoleName() 获取角色的名称
 * @method void setRoleName(string $RoleName) 设置角色的名称
 * @method integer getRoleStatus() 获取此角色状态
1: 已经启用
2: 已经禁用
 * @method void setRoleStatus(integer $RoleStatus) 设置此角色状态
1: 已经启用
2: 已经禁用
 * @method array getPermissionGroups() 获取此角色对应的权限列表
 * @method void setPermissionGroups(array $PermissionGroups) 设置此角色对应的权限列表
 */
class ChannelRole extends AbstractModel
{
    /**
     * @var string 角色ID,为32位字符串
     */
    public $RoleId;

    /**
     * @var string 角色的名称
     */
    public $RoleName;

    /**
     * @var integer 此角色状态
1: 已经启用
2: 已经禁用
     */
    public $RoleStatus;

    /**
     * @var array 此角色对应的权限列表
     */
    public $PermissionGroups;

    /**
     * @param string $RoleId 角色ID,为32位字符串
     * @param string $RoleName 角色的名称
     * @param integer $RoleStatus 此角色状态
1: 已经启用
2: 已经禁用
     * @param array $PermissionGroups 此角色对应的权限列表
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleStatus",$param) and $param["RoleStatus"] !== null) {
            $this->RoleStatus = $param["RoleStatus"];
        }

        if (array_key_exists("PermissionGroups",$param) and $param["PermissionGroups"] !== null) {
            $this->PermissionGroups = [];
            foreach ($param["PermissionGroups"] as $key => $value){
                $obj = new PermissionGroup();
                $obj->deserialize($value);
                array_push($this->PermissionGroups, $obj);
            }
        }
    }
}
