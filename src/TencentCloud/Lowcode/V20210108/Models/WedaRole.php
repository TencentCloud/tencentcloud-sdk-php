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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * weda角色
 *
 * @method string getName() 获取角色名称
 * @method void setName(string $Name) 设置角色名称
 * @method string getRoleIdentity() 获取角色标识
 * @method void setRoleIdentity(string $RoleIdentity) 设置角色标识
 * @method integer getId() 获取角色id
 * @method void setId(integer $Id) 设置角色id
 * @method integer getParentRoleId() 获取父角色id
 * @method void setParentRoleId(integer $ParentRoleId) 设置父角色id
 * @method integer getChildRoleId() 获取子角色id
 * @method void setChildRoleId(integer $ChildRoleId) 设置子角色id
 * @method string getEnvIdentity() 获取环境标识
 * @method void setEnvIdentity(string $EnvIdentity) 设置环境标识
 * @method boolean getIsReleased() 获取是否已发布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsReleased(boolean $IsReleased) 设置是否已发布
注意：此字段可能返回 null，表示取不到有效值。
 */
class WedaRole extends AbstractModel
{
    /**
     * @var string 角色名称
     */
    public $Name;

    /**
     * @var string 角色标识
     */
    public $RoleIdentity;

    /**
     * @var integer 角色id
     */
    public $Id;

    /**
     * @var integer 父角色id
     */
    public $ParentRoleId;

    /**
     * @var integer 子角色id
     */
    public $ChildRoleId;

    /**
     * @var string 环境标识
     */
    public $EnvIdentity;

    /**
     * @var boolean 是否已发布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsReleased;

    /**
     * @param string $Name 角色名称
     * @param string $RoleIdentity 角色标识
     * @param integer $Id 角色id
     * @param integer $ParentRoleId 父角色id
     * @param integer $ChildRoleId 子角色id
     * @param string $EnvIdentity 环境标识
     * @param boolean $IsReleased 是否已发布
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RoleIdentity",$param) and $param["RoleIdentity"] !== null) {
            $this->RoleIdentity = $param["RoleIdentity"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ParentRoleId",$param) and $param["ParentRoleId"] !== null) {
            $this->ParentRoleId = $param["ParentRoleId"];
        }

        if (array_key_exists("ChildRoleId",$param) and $param["ChildRoleId"] !== null) {
            $this->ChildRoleId = $param["ChildRoleId"];
        }

        if (array_key_exists("EnvIdentity",$param) and $param["EnvIdentity"] !== null) {
            $this->EnvIdentity = $param["EnvIdentity"];
        }

        if (array_key_exists("IsReleased",$param) and $param["IsReleased"] !== null) {
            $this->IsReleased = $param["IsReleased"];
        }
    }
}
