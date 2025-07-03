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
 * 角色对象
 *
 * @method string getRoleId() 获取角色id
 * @method void setRoleId(string $RoleId) 设置角色id
 * @method string getName() 获取角色名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置角色名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameCn() 获取角色昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameCn(string $NameCn) 设置角色昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivileges() 获取角色权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivileges(array $Privileges) 设置角色权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMethodPaths() 获取方法路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethodPaths(array $MethodPaths) 设置方法路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleType() 获取角色类型, 分为System,Tenant,Project,Commercial
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleType(string $RoleType) 设置角色类型, 分为System,Tenant,Project,Commercial
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSystemInit() 获取是否系统默认
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemInit(boolean $SystemInit) 设置是否系统默认
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置自定义参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class SystemRole extends AbstractModel
{
    /**
     * @var string 角色id
     */
    public $RoleId;

    /**
     * @var string 角色名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 角色昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameCn;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 角色权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privileges;

    /**
     * @var array 方法路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MethodPaths;

    /**
     * @var string 角色类型, 分为System,Tenant,Project,Commercial
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleType;

    /**
     * @var boolean 是否系统默认
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemInit;

    /**
     * @var string 自定义参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @param string $RoleId 角色id
     * @param string $Name 角色名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameCn 角色昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Privileges 角色权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MethodPaths 方法路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleType 角色类型, 分为System,Tenant,Project,Commercial
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SystemInit 是否系统默认
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 自定义参数
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NameCn",$param) and $param["NameCn"] !== null) {
            $this->NameCn = $param["NameCn"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = [];
            foreach ($param["Privileges"] as $key => $value){
                $obj = new RolePrivilege();
                $obj->deserialize($value);
                array_push($this->Privileges, $obj);
            }
        }

        if (array_key_exists("MethodPaths",$param) and $param["MethodPaths"] !== null) {
            $this->MethodPaths = $param["MethodPaths"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("SystemInit",$param) and $param["SystemInit"] !== null) {
            $this->SystemInit = $param["SystemInit"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
