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
 * 数据开发授权信息
 *
 * @method string getPermissionTargetType() 获取授权目标类型（用户：user，角色：role）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissionTargetType(string $PermissionTargetType) 设置授权目标类型（用户：user，角色：role）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPermissionTargetId() 获取授权目标id数组(userId/roleId)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissionTargetId(string $PermissionTargetId) 设置授权目标id数组(userId/roleId)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPermissionTypeList() 获取授权权限类型数组(CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE，当前仅支持CAN_MANAGE)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissionTypeList(array $PermissionTypeList) 设置授权权限类型数组(CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE，当前仅支持CAN_MANAGE)
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowPermission extends AbstractModel
{
    /**
     * @var string 授权目标类型（用户：user，角色：role）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PermissionTargetType;

    /**
     * @var string 授权目标id数组(userId/roleId)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PermissionTargetId;

    /**
     * @var array 授权权限类型数组(CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE，当前仅支持CAN_MANAGE)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PermissionTypeList;

    /**
     * @param string $PermissionTargetType 授权目标类型（用户：user，角色：role）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PermissionTargetId 授权目标id数组(userId/roleId)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PermissionTypeList 授权权限类型数组(CAN_VIEW/CAN_RUN/CAN_EDIT/CAN_MANAGE，当前仅支持CAN_MANAGE)
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
        if (array_key_exists("PermissionTargetType",$param) and $param["PermissionTargetType"] !== null) {
            $this->PermissionTargetType = $param["PermissionTargetType"];
        }

        if (array_key_exists("PermissionTargetId",$param) and $param["PermissionTargetId"] !== null) {
            $this->PermissionTargetId = $param["PermissionTargetId"];
        }

        if (array_key_exists("PermissionTypeList",$param) and $param["PermissionTypeList"] !== null) {
            $this->PermissionTypeList = $param["PermissionTypeList"];
        }
    }
}
