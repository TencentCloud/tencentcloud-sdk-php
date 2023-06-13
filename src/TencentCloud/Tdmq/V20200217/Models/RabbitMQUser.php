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
 * RabbitMQ用户实体详情
 *
 * @method string getInstanceId() 获取集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置集群实例Id
 * @method string getUser() 获取用户名，登录时使用
 * @method void setUser(string $User) 设置用户名，登录时使用
 * @method string getPassword() 获取密码，登录时使用
 * @method void setPassword(string $Password) 设置密码，登录时使用
 * @method string getDescription() 获取用户描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置用户描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取用户标签，用于决定改用户访问RabbitMQ Management的权限范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置用户标签，用于决定改用户访问RabbitMQ Management的权限范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取用户创建时间
 * @method void setCreateTime(string $CreateTime) 设置用户创建时间
 * @method string getModifyTime() 获取用户最后修改时间
 * @method void setModifyTime(string $ModifyTime) 设置用户最后修改时间
 * @method string getType() 获取用户类型，System：系统创建，User：用户创建
 * @method void setType(string $Type) 设置用户类型，System：系统创建，User：用户创建
 */
class RabbitMQUser extends AbstractModel
{
    /**
     * @var string 集群实例Id
     */
    public $InstanceId;

    /**
     * @var string 用户名，登录时使用
     */
    public $User;

    /**
     * @var string 密码，登录时使用
     */
    public $Password;

    /**
     * @var string 用户描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 用户标签，用于决定改用户访问RabbitMQ Management的权限范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 用户创建时间
     */
    public $CreateTime;

    /**
     * @var string 用户最后修改时间
     */
    public $ModifyTime;

    /**
     * @var string 用户类型，System：系统创建，User：用户创建
     */
    public $Type;

    /**
     * @param string $InstanceId 集群实例Id
     * @param string $User 用户名，登录时使用
     * @param string $Password 密码，登录时使用
     * @param string $Description 用户描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 用户标签，用于决定改用户访问RabbitMQ Management的权限范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 用户创建时间
     * @param string $ModifyTime 用户最后修改时间
     * @param string $Type 用户类型，System：系统创建，User：用户创建
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
