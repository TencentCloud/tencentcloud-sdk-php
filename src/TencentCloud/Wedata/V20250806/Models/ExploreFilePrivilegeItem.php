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
 * 探索文件权限详情
 *
 * @method array getPrivileges() 获取权限点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivileges(array $Privileges) 设置权限点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleType() 获取用户：user 角色： role 组：group
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleType(string $RoleType) 设置用户：user 角色： role 组：group
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleId() 获取用户或角色ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleId(string $RoleId) 设置用户或角色ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExploreFileResource getResource() 获取授权资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(ExploreFileResource $Resource) 设置授权资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteAble() 获取是否可以被删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteAble(boolean $DeleteAble) 设置是否可以被删除
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExploreFilePrivilegeItem extends AbstractModel
{
    /**
     * @var array 权限点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privileges;

    /**
     * @var string 用户：user 角色： role 组：group
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleType;

    /**
     * @var string 用户或角色ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleId;

    /**
     * @var ExploreFileResource 授权资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var boolean 是否可以被删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteAble;

    /**
     * @param array $Privileges 权限点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleType 用户：user 角色： role 组：group
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleId 用户或角色ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExploreFileResource $Resource 授权资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteAble 是否可以被删除
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
        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new ExploreFileResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("DeleteAble",$param) and $param["DeleteAble"] !== null) {
            $this->DeleteAble = $param["DeleteAble"];
        }
    }
}
