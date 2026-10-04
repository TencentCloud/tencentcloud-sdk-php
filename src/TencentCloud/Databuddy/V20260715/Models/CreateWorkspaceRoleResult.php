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
 * 创建工作空间角色结果
 *
 * @method string getRoleId() 获取角色id
 * @method void setRoleId(string $RoleId) 设置角色id
 * @method boolean getStatus() 获取创建工作空间角色是否成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(boolean $Status) 设置创建工作空间角色是否成功
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateWorkspaceRoleResult extends AbstractModel
{
    /**
     * @var string 角色id
     */
    public $RoleId;

    /**
     * @var boolean 创建工作空间角色是否成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $RoleId 角色id
     * @param boolean $Status 创建工作空间角色是否成功
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
