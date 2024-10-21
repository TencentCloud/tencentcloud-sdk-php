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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目的用户对象
 *
 * @method array getRoles() 获取用户角色对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoles(array $Roles) 设置用户角色对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取mc
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置mc
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCreator() 获取是否创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(boolean $Creator) 设置是否创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取显示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置显示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsProjectAdmin() 获取是否项目管理员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsProjectAdmin(boolean $IsProjectAdmin) 设置是否项目管理员
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProjectUserRole extends AbstractModel
{
    /**
     * @var array 用户角色对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Roles;

    /**
     * @var string mc
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var boolean 是否创建者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string 显示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var boolean 是否项目管理员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsProjectAdmin;

    /**
     * @param array $Roles 用户角色对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName mc
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Creator 是否创建者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 显示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsProjectAdmin 是否项目管理员
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
        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new SystemRole();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("IsProjectAdmin",$param) and $param["IsProjectAdmin"] !== null) {
            $this->IsProjectAdmin = $param["IsProjectAdmin"];
        }
    }
}
