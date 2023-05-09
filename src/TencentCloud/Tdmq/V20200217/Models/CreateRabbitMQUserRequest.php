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
 * CreateRabbitMQUser请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置集群实例Id
 * @method string getUser() 获取用户名，登录时使用
 * @method void setUser(string $User) 设置用户名，登录时使用
 * @method string getPassword() 获取密码，登录时使用
 * @method void setPassword(string $Password) 设置密码，登录时使用
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method array getTags() 获取用户标签，用于决定改用户访问RabbitMQ Management的权限范围
management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户
 * @method void setTags(array $Tags) 设置用户标签，用于决定改用户访问RabbitMQ Management的权限范围
management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户
 * @method integer getMaxConnections() 获取该用户的最大连接数，不填写则不限制
 * @method void setMaxConnections(integer $MaxConnections) 设置该用户的最大连接数，不填写则不限制
 * @method integer getMaxChannels() 获取该用户的最大channel数，不填写则不限制
 * @method void setMaxChannels(integer $MaxChannels) 设置该用户的最大channel数，不填写则不限制
 */
class CreateRabbitMQUserRequest extends AbstractModel
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
     * @var string 描述
     */
    public $Description;

    /**
     * @var array 用户标签，用于决定改用户访问RabbitMQ Management的权限范围
management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户
     */
    public $Tags;

    /**
     * @var integer 该用户的最大连接数，不填写则不限制
     */
    public $MaxConnections;

    /**
     * @var integer 该用户的最大channel数，不填写则不限制
     */
    public $MaxChannels;

    /**
     * @param string $InstanceId 集群实例Id
     * @param string $User 用户名，登录时使用
     * @param string $Password 密码，登录时使用
     * @param string $Description 描述
     * @param array $Tags 用户标签，用于决定改用户访问RabbitMQ Management的权限范围
management：普通控制台用户，monitoring：管理型控制台用户，其他值：非控制台用户
     * @param integer $MaxConnections 该用户的最大连接数，不填写则不限制
     * @param integer $MaxChannels 该用户的最大channel数，不填写则不限制
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

        if (array_key_exists("MaxConnections",$param) and $param["MaxConnections"] !== null) {
            $this->MaxConnections = $param["MaxConnections"];
        }

        if (array_key_exists("MaxChannels",$param) and $param["MaxChannels"] !== null) {
            $this->MaxChannels = $param["MaxChannels"];
        }
    }
}
