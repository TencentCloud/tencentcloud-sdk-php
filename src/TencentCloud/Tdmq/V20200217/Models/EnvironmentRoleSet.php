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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量绑定名字空间和角色权限关系
 *
 * @method string getEnvironmentId() 获取需要绑定的命名空间Id，不重复且存在资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironmentId(string $EnvironmentId) 设置需要绑定的命名空间Id，不重复且存在资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPermissions() 获取名字空间需要绑定的权限，枚举为 "consume" "produce" 组合，但是不为空

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissions(array $Permissions) 设置名字空间需要绑定的权限，枚举为 "consume" "produce" 组合，但是不为空

注意：此字段可能返回 null，表示取不到有效值。
 */
class EnvironmentRoleSet extends AbstractModel
{
    /**
     * @var string 需要绑定的命名空间Id，不重复且存在资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvironmentId;

    /**
     * @var array 名字空间需要绑定的权限，枚举为 "consume" "produce" 组合，但是不为空

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Permissions;

    /**
     * @param string $EnvironmentId 需要绑定的命名空间Id，不重复且存在资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Permissions 名字空间需要绑定的权限，枚举为 "consume" "produce" 组合，但是不为空

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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }
    }
}
