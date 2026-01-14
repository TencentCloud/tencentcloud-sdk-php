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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户权限项，定义用户在集群中的 RBAC 权限绑定
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method string getRoleName() 获取角色名称。预置角色包括：tke:admin（集群管理员）、tke:ops（运维人员）、tke:dev（开发人员）、tke:ro（只读用户）、tke:ns:dev（命名空间开发人员）、tke:ns:ro（命名空间只读用户），其余为用户自定义角色
 * @method void setRoleName(string $RoleName) 设置角色名称。预置角色包括：tke:admin（集群管理员）、tke:ops（运维人员）、tke:dev（开发人员）、tke:ro（只读用户）、tke:ns:dev（命名空间开发人员）、tke:ns:ro（命名空间只读用户），其余为用户自定义角色
 * @method string getRoleType() 获取授权类型。枚举值：cluster（集群级别权限，对应 ClusterRoleBinding）、namespace（命名空间级别权限，对应 RoleBinding）
 * @method void setRoleType(string $RoleType) 设置授权类型。枚举值：cluster（集群级别权限，对应 ClusterRoleBinding）、namespace（命名空间级别权限，对应 RoleBinding）
 * @method boolean getIsCustom() 获取是否为自定义角色，默认 false
 * @method void setIsCustom(boolean $IsCustom) 设置是否为自定义角色，默认 false
 * @method string getNamespace() 获取命名空间。当 RoleType 为 namespace 时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间。当 RoleType 为 namespace 时必填
注意：此字段可能返回 null，表示取不到有效值。
 */
class PermissionItem extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var string 角色名称。预置角色包括：tke:admin（集群管理员）、tke:ops（运维人员）、tke:dev（开发人员）、tke:ro（只读用户）、tke:ns:dev（命名空间开发人员）、tke:ns:ro（命名空间只读用户），其余为用户自定义角色
     */
    public $RoleName;

    /**
     * @var string 授权类型。枚举值：cluster（集群级别权限，对应 ClusterRoleBinding）、namespace（命名空间级别权限，对应 RoleBinding）
     */
    public $RoleType;

    /**
     * @var boolean 是否为自定义角色，默认 false
     */
    public $IsCustom;

    /**
     * @var string 命名空间。当 RoleType 为 namespace 时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @param string $ClusterId 集群 ID
     * @param string $RoleName 角色名称。预置角色包括：tke:admin（集群管理员）、tke:ops（运维人员）、tke:dev（开发人员）、tke:ro（只读用户）、tke:ns:dev（命名空间开发人员）、tke:ns:ro（命名空间只读用户），其余为用户自定义角色
     * @param string $RoleType 授权类型。枚举值：cluster（集群级别权限，对应 ClusterRoleBinding）、namespace（命名空间级别权限，对应 RoleBinding）
     * @param boolean $IsCustom 是否为自定义角色，默认 false
     * @param string $Namespace 命名空间。当 RoleType 为 namespace 时必填
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("IsCustom",$param) and $param["IsCustom"] !== null) {
            $this->IsCustom = $param["IsCustom"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
