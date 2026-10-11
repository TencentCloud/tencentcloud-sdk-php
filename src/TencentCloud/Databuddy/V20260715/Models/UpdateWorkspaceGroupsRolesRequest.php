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
 * UpdateWorkspaceGroupsRoles请求参数结构体
 *
 * @method array getGroupIds() 获取用户组ID，可通过 ListWorkspaceGroups 接口获取
 * @method void setGroupIds(array $GroupIds) 设置用户组ID，可通过 ListWorkspaceGroups 接口获取
 * @method string getWorkspaceId() 获取工作空间ID
 * @method void setWorkspaceId(string $WorkspaceId) 设置工作空间ID
 * @method array getRoleIds() 获取角色ID，可通过 ListWorkspaceRoles 接口获取
 * @method void setRoleIds(array $RoleIds) 设置角色ID，可通过 ListWorkspaceRoles 接口获取
 */
class UpdateWorkspaceGroupsRolesRequest extends AbstractModel
{
    /**
     * @var array 用户组ID，可通过 ListWorkspaceGroups 接口获取
     */
    public $GroupIds;

    /**
     * @var string 工作空间ID
     */
    public $WorkspaceId;

    /**
     * @var array 角色ID，可通过 ListWorkspaceRoles 接口获取
     */
    public $RoleIds;

    /**
     * @param array $GroupIds 用户组ID，可通过 ListWorkspaceGroups 接口获取
     * @param string $WorkspaceId 工作空间ID
     * @param array $RoleIds 角色ID，可通过 ListWorkspaceRoles 接口获取
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
        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }
    }
}
