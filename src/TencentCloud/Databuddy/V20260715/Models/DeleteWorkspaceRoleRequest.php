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
 * DeleteWorkspaceRole请求参数结构体
 *
 * @method string getWorkspaceId() 获取工作空间ID
 * @method void setWorkspaceId(string $WorkspaceId) 设置工作空间ID
 * @method string getRoleId() 获取角色ID，可通过 ListWorkspaceRoles 接口获取
 * @method void setRoleId(string $RoleId) 设置角色ID，可通过 ListWorkspaceRoles 接口获取
 */
class DeleteWorkspaceRoleRequest extends AbstractModel
{
    /**
     * @var string 工作空间ID
     */
    public $WorkspaceId;

    /**
     * @var string 角色ID，可通过 ListWorkspaceRoles 接口获取
     */
    public $RoleId;

    /**
     * @param string $WorkspaceId 工作空间ID
     * @param string $RoleId 角色ID，可通过 ListWorkspaceRoles 接口获取
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }
    }
}
