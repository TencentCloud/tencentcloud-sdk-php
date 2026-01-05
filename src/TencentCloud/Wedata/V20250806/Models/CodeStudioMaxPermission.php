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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户对CodeStudio文件/文件夹的递归最大权限类型
 *
 * @method string getPermissionType() 获取授权权限类型(CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissionType(string $PermissionType) 设置授权权限类型(CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE)
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodeStudioMaxPermission extends AbstractModel
{
    /**
     * @var string 授权权限类型(CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PermissionType;

    /**
     * @param string $PermissionType 授权权限类型(CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE)
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
        if (array_key_exists("PermissionType",$param) and $param["PermissionType"] !== null) {
            $this->PermissionType = $param["PermissionType"];
        }
    }
}
