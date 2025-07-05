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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ServerlessSpaceUser
 *
 * @method string getUsername() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsername(string $Username) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取用户密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置用户密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取用户状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置用户状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndicesScope() 获取有权限的索引数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicesScope(array $IndicesScope) 设置有权限的索引数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPrivilegeType() 获取权限类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilegeType(integer $PrivilegeType) 设置权限类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServerlessSpaceUser extends AbstractModel
{
    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Username;

    /**
     * @var string 用户密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 用户状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 有权限的索引数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndicesScope;

    /**
     * @var integer 权限类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivilegeType;

    /**
     * @param string $Username 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 用户密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 用户状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IndicesScope 有权限的索引数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PrivilegeType 权限类型
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IndicesScope",$param) and $param["IndicesScope"] !== null) {
            $this->IndicesScope = $param["IndicesScope"];
        }

        if (array_key_exists("PrivilegeType",$param) and $param["PrivilegeType"] !== null) {
            $this->PrivilegeType = $param["PrivilegeType"];
        }
    }
}
