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
 * 权限用户项目信息
 *
 * @method array getAuthProjectIds() 获取授权给的目标项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthProjectIds(array $AuthProjectIds) 设置授权给的目标项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAuthUsers() 获取授权给的项目下用户列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthUsers(array $AuthUsers) 设置授权给的项目下用户列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuthInfo extends AbstractModel
{
    /**
     * @var array 授权给的目标项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthProjectIds;

    /**
     * @var array 授权给的项目下用户列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthUsers;

    /**
     * @param array $AuthProjectIds 授权给的目标项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AuthUsers 授权给的项目下用户列表
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
        if (array_key_exists("AuthProjectIds",$param) and $param["AuthProjectIds"] !== null) {
            $this->AuthProjectIds = $param["AuthProjectIds"];
        }

        if (array_key_exists("AuthUsers",$param) and $param["AuthUsers"] !== null) {
            $this->AuthUsers = $param["AuthUsers"];
        }
    }
}
