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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUsers请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method array getUsers() 获取<p>新增用户列表</p>
 * @method void setUsers(array $Users) 设置<p>新增用户列表</p>
 * @method string getPassword() 获取<p>未加密密码</p>
 * @method void setPassword(string $Password) 设置<p>未加密密码</p>
 * @method string getEncryptedPassword() 获取<p>加密密码</p>
 * @method void setEncryptedPassword(string $EncryptedPassword) 设置<p>加密密码</p>
 * @method string getDescription() 获取<p>用户描述</p>
 * @method void setDescription(string $Description) 设置<p>用户描述</p>
 */
class CreateUsersRequest extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var array <p>新增用户列表</p>
     */
    public $Users;

    /**
     * @var string <p>未加密密码</p>
     */
    public $Password;

    /**
     * @var string <p>加密密码</p>
     */
    public $EncryptedPassword;

    /**
     * @var string <p>用户描述</p>
     */
    public $Description;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param array $Users <p>新增用户列表</p>
     * @param string $Password <p>未加密密码</p>
     * @param string $EncryptedPassword <p>加密密码</p>
     * @param string $Description <p>用户描述</p>
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

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new User();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptedPassword",$param) and $param["EncryptedPassword"] !== null) {
            $this->EncryptedPassword = $param["EncryptedPassword"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
