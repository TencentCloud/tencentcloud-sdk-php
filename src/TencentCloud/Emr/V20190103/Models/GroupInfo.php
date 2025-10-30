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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户组信息
 *
 * @method string getGroupName() 获取组名
 * @method void setGroupName(string $GroupName) 设置组名
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method array getUsers() 获取用户列表
 * @method void setUsers(array $Users) 设置用户列表
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 组名
     */
    public $GroupName;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var array 用户列表
     */
    public $Users;

    /**
     * @param string $GroupName 组名
     * @param string $Description 备注
     * @param array $Users 用户列表
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }
    }
}
