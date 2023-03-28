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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业角色数据信息
 *
 * @method string getRoleId() 获取角色id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleId(string $RoleId) 设置角色id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleName() 获取角色名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleName(string $RoleName) 设置角色名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoleStatus() 获取角色类型：1-系统角色，2-自定义角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleStatus(integer $RoleStatus) 设置角色类型：1-系统角色，2-自定义角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsGroupRole() 获取是否是集团角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsGroupRole(boolean $IsGroupRole) 设置是否是集团角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubOrgIdList() 获取管辖的子企业列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubOrgIdList(array $SubOrgIdList) 设置管辖的子企业列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntegrateRole extends AbstractModel
{
    /**
     * @var string 角色id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleId;

    /**
     * @var string 角色名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleName;

    /**
     * @var integer 角色类型：1-系统角色，2-自定义角色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleStatus;

    /**
     * @var boolean 是否是集团角色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsGroupRole;

    /**
     * @var array 管辖的子企业列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubOrgIdList;

    /**
     * @param string $RoleId 角色id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleName 角色名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoleStatus 角色类型：1-系统角色，2-自定义角色
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsGroupRole 是否是集团角色
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubOrgIdList 管辖的子企业列表
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

        if (array_key_exists("RoleStatus",$param) and $param["RoleStatus"] !== null) {
            $this->RoleStatus = $param["RoleStatus"];
        }

        if (array_key_exists("IsGroupRole",$param) and $param["IsGroupRole"] !== null) {
            $this->IsGroupRole = $param["IsGroupRole"];
        }

        if (array_key_exists("SubOrgIdList",$param) and $param["SubOrgIdList"] !== null) {
            $this->SubOrgIdList = $param["SubOrgIdList"];
        }
    }
}
