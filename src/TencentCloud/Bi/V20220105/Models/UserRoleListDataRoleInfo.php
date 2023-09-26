<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 用户角色列表角色信息
 *
 * @method string getRoleName() 获取角色名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleName(string $RoleName) 设置角色名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoleId() 获取角色ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleId(integer $RoleId) 设置角色ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScopeType() 获取是否为全局角色（0 不是 1 是）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScopeType(integer $ScopeType) 设置是否为全局角色（0 不是 1 是）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModuleCollection() 获取角色key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModuleCollection(string $ModuleCollection) 设置角色key
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserRoleListDataRoleInfo extends AbstractModel
{
    /**
     * @var string 角色名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleName;

    /**
     * @var integer 角色ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleId;

    /**
     * @var integer 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var integer 是否为全局角色（0 不是 1 是）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScopeType;

    /**
     * @var string 角色key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModuleCollection;

    /**
     * @param string $RoleName 角色名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoleId 角色ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScopeType 是否为全局角色（0 不是 1 是）
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }

        if (array_key_exists("ModuleCollection",$param) and $param["ModuleCollection"] !== null) {
            $this->ModuleCollection = $param["ModuleCollection"];
        }
    }
}
