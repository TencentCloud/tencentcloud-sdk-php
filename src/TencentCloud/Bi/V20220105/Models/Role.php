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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色
 *
 * @method integer getId() 获取角色ID
 * @method void setId(integer $Id) 设置角色ID
 * @method string getRoleName() 获取角色名称
 * @method void setRoleName(string $RoleName) 设置角色名称
 * @method string getCorpId() 获取企业ID
 * @method void setCorpId(string $CorpId) 设置企业ID
 * @method string getRoleType() 获取角色类型
 * @method void setRoleType(string $RoleType) 设置角色类型
 * @method string getScope() 获取范围
 * @method void setScope(string $Scope) 设置范围
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedUser() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedUser(string $CreatedUser) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedUser() 获取更新人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedUser(string $UpdatedUser) 设置更新人
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScopeType() 获取是否为全局角色（0 不是， 1 是）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScopeType(integer $ScopeType) 设置是否为全局角色（0 不是， 1 是）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanChoose() 获取是否可被选
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanChoose(boolean $CanChoose) 设置是否可被选
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModuleCollection() 获取角色key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModuleCollection(string $ModuleCollection) 设置角色key
注意：此字段可能返回 null，表示取不到有效值。
 */
class Role extends AbstractModel
{
    /**
     * @var integer 角色ID
     */
    public $Id;

    /**
     * @var string 角色名称
     */
    public $RoleName;

    /**
     * @var string 企业ID
     */
    public $CorpId;

    /**
     * @var string 角色类型
     */
    public $RoleType;

    /**
     * @var string 范围
     */
    public $Scope;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedUser;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 更新人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedUser;

    /**
     * @var integer 是否为全局角色（0 不是， 1 是）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScopeType;

    /**
     * @var boolean 是否可被选
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanChoose;

    /**
     * @var string 角色key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModuleCollection;

    /**
     * @param integer $Id 角色ID
     * @param string $RoleName 角色名称
     * @param string $CorpId 企业ID
     * @param string $RoleType 角色类型
     * @param string $Scope 范围
     * @param string $Description 描述
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedUser 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedUser 更新人
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScopeType 是否为全局角色（0 不是， 1 是）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanChoose 是否可被选
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModuleCollection 角色key
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("CreatedUser",$param) and $param["CreatedUser"] !== null) {
            $this->CreatedUser = $param["CreatedUser"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }

        if (array_key_exists("CanChoose",$param) and $param["CanChoose"] !== null) {
            $this->CanChoose = $param["CanChoose"];
        }

        if (array_key_exists("ModuleCollection",$param) and $param["ModuleCollection"] !== null) {
            $this->ModuleCollection = $param["ModuleCollection"];
        }
    }
}
