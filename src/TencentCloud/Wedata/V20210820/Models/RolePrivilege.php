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
 * 角色权限对象
 *
 * @method string getPrivilegeId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilegeId(string $PrivilegeId) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivilegeName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilegeName(string $PrivilegeName) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRestPath() 获取路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestPath(string $RestPath) 设置路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRestMethod() 获取方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestMethod(string $RestMethod) 设置方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModuleId() 获取模块id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModuleId(string $ModuleId) 设置模块id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取权限类型 N、R、RW、RWD
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置权限类型 N、R、RW、RWD
注意：此字段可能返回 null，表示取不到有效值。
 */
class RolePrivilege extends AbstractModel
{
    /**
     * @var string id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivilegeId;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivilegeName;

    /**
     * @var string 路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestPath;

    /**
     * @var string 方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestMethod;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 模块id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModuleId;

    /**
     * @var string 权限类型 N、R、RW、RWD
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $PrivilegeId id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivilegeName 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RestPath 路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RestMethod 方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModuleId 模块id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 权限类型 N、R、RW、RWD
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
        if (array_key_exists("PrivilegeId",$param) and $param["PrivilegeId"] !== null) {
            $this->PrivilegeId = $param["PrivilegeId"];
        }

        if (array_key_exists("PrivilegeName",$param) and $param["PrivilegeName"] !== null) {
            $this->PrivilegeName = $param["PrivilegeName"];
        }

        if (array_key_exists("RestPath",$param) and $param["RestPath"] !== null) {
            $this->RestPath = $param["RestPath"];
        }

        if (array_key_exists("RestMethod",$param) and $param["RestMethod"] !== null) {
            $this->RestMethod = $param["RestMethod"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
