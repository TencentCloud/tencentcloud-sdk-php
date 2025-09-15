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
 * 权限组
 *
 * @method integer getId() 获取权限组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置权限组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取权限组名称
 * @method void setName(string $Name) 设置权限组名称
 * @method string getGroupIdentity() 获取权限组标识
 * @method void setGroupIdentity(string $GroupIdentity) 设置权限组标识
 * @method string getGroupDesc() 获取权限组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupDesc(string $GroupDesc) 设置权限组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRoleList() 获取角色数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleList(array $RoleList) 设置角色数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class RoleGroup extends AbstractModel
{
    /**
     * @var integer 权限组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 权限组名称
     */
    public $Name;

    /**
     * @var string 权限组标识
     */
    public $GroupIdentity;

    /**
     * @var string 权限组描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupDesc;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 角色数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleList;

    /**
     * @param integer $Id 权限组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 权限组名称
     * @param string $GroupIdentity 权限组标识
     * @param string $GroupDesc 权限组描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RoleList 角色数组
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("GroupIdentity",$param) and $param["GroupIdentity"] !== null) {
            $this->GroupIdentity = $param["GroupIdentity"];
        }

        if (array_key_exists("GroupDesc",$param) and $param["GroupDesc"] !== null) {
            $this->GroupDesc = $param["GroupDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RoleList",$param) and $param["RoleList"] !== null) {
            $this->RoleList = [];
            foreach ($param["RoleList"] as $key => $value){
                $obj = new WedaRole();
                $obj->deserialize($value);
                array_push($this->RoleList, $obj);
            }
        }
    }
}
