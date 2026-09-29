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
 * 角色权限
 *
 * @method string getModuleId() 获取<p>模块ID，须为当前租户已开通的功能模块（叶子节点）的模块ID（层级编码字符串，如 101=快速开始、109=工作流、116101103=工作空间管理_角色权限），非法值返回 InvalidParameterValue；模块清单可通过控制台「工作空间设置-角色权限」页面查看</p>
 * @method void setModuleId(string $ModuleId) 设置<p>模块ID，须为当前租户已开通的功能模块（叶子节点）的模块ID（层级编码字符串，如 101=快速开始、109=工作流、116101103=工作空间管理_角色权限），非法值返回 InvalidParameterValue；模块清单可通过控制台「工作空间设置-角色权限」页面查看</p>
 * @method string getPermissions() 获取<p>模块访问权限，单值：R=只读，RW=读写，RWD=读写删除，N=无权限</p>
 * @method void setPermissions(string $Permissions) 设置<p>模块访问权限，单值：R=只读，RW=读写，RWD=读写删除，N=无权限</p>
 */
class RolePermission extends AbstractModel
{
    /**
     * @var string <p>模块ID，须为当前租户已开通的功能模块（叶子节点）的模块ID（层级编码字符串，如 101=快速开始、109=工作流、116101103=工作空间管理_角色权限），非法值返回 InvalidParameterValue；模块清单可通过控制台「工作空间设置-角色权限」页面查看</p>
     */
    public $ModuleId;

    /**
     * @var string <p>模块访问权限，单值：R=只读，RW=读写，RWD=读写删除，N=无权限</p>
     */
    public $Permissions;

    /**
     * @param string $ModuleId <p>模块ID，须为当前租户已开通的功能模块（叶子节点）的模块ID（层级编码字符串，如 101=快速开始、109=工作流、116101103=工作空间管理_角色权限），非法值返回 InvalidParameterValue；模块清单可通过控制台「工作空间设置-角色权限」页面查看</p>
     * @param string $Permissions <p>模块访问权限，单值：R=只读，RW=读写，RWD=读写删除，N=无权限</p>
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }
    }
}
