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
 * AddWorkspaceUsers请求参数结构体
 *
 * @method array getUserUins() 获取<p>用户ID</p>
 * @method void setUserUins(array $UserUins) 设置<p>用户ID</p>
 * @method string getWorkspaceId() 获取<p>工作空间ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID</p>
 * @method array getRoleIds() 获取<p>角色ID，可通过 ListWorkspaceRoles 接口获取</p>
 * @method void setRoleIds(array $RoleIds) 设置<p>角色ID，可通过 ListWorkspaceRoles 接口获取</p>
 */
class AddWorkspaceUsersRequest extends AbstractModel
{
    /**
     * @var array <p>用户ID</p>
     */
    public $UserUins;

    /**
     * @var string <p>工作空间ID</p>
     */
    public $WorkspaceId;

    /**
     * @var array <p>角色ID，可通过 ListWorkspaceRoles 接口获取</p>
     */
    public $RoleIds;

    /**
     * @param array $UserUins <p>用户ID</p>
     * @param string $WorkspaceId <p>工作空间ID</p>
     * @param array $RoleIds <p>角色ID，可通过 ListWorkspaceRoles 接口获取</p>
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
        if (array_key_exists("UserUins",$param) and $param["UserUins"] !== null) {
            $this->UserUins = $param["UserUins"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }
    }
}
