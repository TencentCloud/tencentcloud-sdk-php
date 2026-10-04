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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实体权限信息，用于在get/list接口中返回当前用户对实体的权限列表
 *
 * @method array getPermissions() 获取当前用户对该实体拥有的权限列表
 * @method void setPermissions(array $Permissions) 设置当前用户对该实体拥有的权限列表
 * @method string getCatalogWorkspacePrivilege() 获取catalog在工作空间上的权限信息（可选）。取值：WORKSPACE_READONLY（只读）或WORKSPACE_READWRITE（读写）
 * @method void setCatalogWorkspacePrivilege(string $CatalogWorkspacePrivilege) 设置catalog在工作空间上的权限信息（可选）。取值：WORKSPACE_READONLY（只读）或WORKSPACE_READWRITE（读写）
 * @method array getDenyPrivilegeList() 获取deny权限总列表（用户deny ∪ 角色deny ∪ 继承deny，已去重，已从Permissions中排除）
 * @method void setDenyPrivilegeList(array $DenyPrivilegeList) 设置deny权限总列表（用户deny ∪ 角色deny ∪ 继承deny，已去重，已从Permissions中排除）
 */
class PermissionDetail extends AbstractModel
{
    /**
     * @var array 当前用户对该实体拥有的权限列表
     */
    public $Permissions;

    /**
     * @var string catalog在工作空间上的权限信息（可选）。取值：WORKSPACE_READONLY（只读）或WORKSPACE_READWRITE（读写）
     */
    public $CatalogWorkspacePrivilege;

    /**
     * @var array deny权限总列表（用户deny ∪ 角色deny ∪ 继承deny，已去重，已从Permissions中排除）
     */
    public $DenyPrivilegeList;

    /**
     * @param array $Permissions 当前用户对该实体拥有的权限列表
     * @param string $CatalogWorkspacePrivilege catalog在工作空间上的权限信息（可选）。取值：WORKSPACE_READONLY（只读）或WORKSPACE_READWRITE（读写）
     * @param array $DenyPrivilegeList deny权限总列表（用户deny ∪ 角色deny ∪ 继承deny，已去重，已从Permissions中排除）
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
        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("CatalogWorkspacePrivilege",$param) and $param["CatalogWorkspacePrivilege"] !== null) {
            $this->CatalogWorkspacePrivilege = $param["CatalogWorkspacePrivilege"];
        }

        if (array_key_exists("DenyPrivilegeList",$param) and $param["DenyPrivilegeList"] !== null) {
            $this->DenyPrivilegeList = $param["DenyPrivilegeList"];
        }
    }
}
