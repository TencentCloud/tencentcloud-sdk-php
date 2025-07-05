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
 * ModifyUserGroup请求参数结构体
 *
 * @method array getUsers() 获取用户信息列表
 * @method void setUsers(array $Users) 设置用户信息列表
 * @method string getUserGroup() 获取用户主组，cvm集群为必填参数，tke集群选填
 * @method void setUserGroup(string $UserGroup) 设置用户主组，cvm集群为必填参数，tke集群选填
 * @method array getGroups() 获取用户副组
 * @method void setGroups(array $Groups) 设置用户副组
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class ModifyUserGroupRequest extends AbstractModel
{
    /**
     * @var array 用户信息列表
     */
    public $Users;

    /**
     * @var string 用户主组，cvm集群为必填参数，tke集群选填
     */
    public $UserGroup;

    /**
     * @var array 用户副组
     */
    public $Groups;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param array $Users 用户信息列表
     * @param string $UserGroup 用户主组，cvm集群为必填参数，tke集群选填
     * @param array $Groups 用户副组
     * @param string $Remark 备注
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
        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = $param["Groups"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
