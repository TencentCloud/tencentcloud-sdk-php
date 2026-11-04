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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色简要信息
 *
 * @method string getRoleId() 获取<p>角色id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleId(string $RoleId) 设置<p>角色id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleName() 获取<p>角色名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleName(string $RoleName) 设置<p>角色名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RoleBriefInfo extends AbstractModel
{
    /**
     * @var string <p>角色id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleId;

    /**
     * @var string <p>角色名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleName;

    /**
     * @param string $RoleId <p>角色id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleName <p>角色名称</p>
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

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }
    }
}
