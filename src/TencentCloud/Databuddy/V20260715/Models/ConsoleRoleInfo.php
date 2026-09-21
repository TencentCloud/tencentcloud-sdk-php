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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 控制台角色信息（对外标准版，与内部 Role 解耦）
 *
 * @method RoleBasicInfo getBasicInfo() 获取角色基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicInfo(RoleBasicInfo $BasicInfo) 设置角色基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method RoleMetaData getMetaData() 获取角色元信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(RoleMetaData $MetaData) 设置角色元信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPermissions() 获取角色权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissions(array $Permissions) 设置角色权限
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsoleRoleInfo extends AbstractModel
{
    /**
     * @var RoleBasicInfo 角色基本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicInfo;

    /**
     * @var RoleMetaData 角色元信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @var array 角色权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Permissions;

    /**
     * @param RoleBasicInfo $BasicInfo 角色基本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param RoleMetaData $MetaData 角色元信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Permissions 角色权限
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
        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = new RoleBasicInfo();
            $this->BasicInfo->deserialize($param["BasicInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new RoleMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = [];
            foreach ($param["Permissions"] as $key => $value){
                $obj = new RolePermission();
                $obj->deserialize($value);
                array_push($this->Permissions, $obj);
            }
        }
    }
}
