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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveMemberProjectRole请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getUserUin() 获取用户id
 * @method void setUserUin(string $UserUin) 设置用户id
 * @method array getRoleIds() 获取角色id列表，目前支持的项目角色有
- 308335260274237440 (项目管理员)
- 308335260676890624 (数据工程师)
- 308335260844662784 (运维工程师)
- 308335260945326080 (普通成员)
 * @method void setRoleIds(array $RoleIds) 设置角色id列表，目前支持的项目角色有
- 308335260274237440 (项目管理员)
- 308335260676890624 (数据工程师)
- 308335260844662784 (运维工程师)
- 308335260945326080 (普通成员)
 */
class RemoveMemberProjectRoleRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 用户id
     */
    public $UserUin;

    /**
     * @var array 角色id列表，目前支持的项目角色有
- 308335260274237440 (项目管理员)
- 308335260676890624 (数据工程师)
- 308335260844662784 (运维工程师)
- 308335260945326080 (普通成员)
     */
    public $RoleIds;

    /**
     * @param string $ProjectId 项目id
     * @param string $UserUin 用户id
     * @param array $RoleIds 角色id列表，目前支持的项目角色有
- 308335260274237440 (项目管理员)
- 308335260676890624 (数据工程师)
- 308335260844662784 (运维工程师)
- 308335260945326080 (普通成员)
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }
    }
}
