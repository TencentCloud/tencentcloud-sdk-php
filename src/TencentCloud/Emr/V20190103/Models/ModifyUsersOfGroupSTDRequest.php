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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUsersOfGroupSTD请求参数结构体
 *
 * @method string getInstanceId() 获取集群名称
 * @method void setInstanceId(string $InstanceId) 设置集群名称
 * @method string getGroup() 获取用户组名
 * @method void setGroup(string $Group) 设置用户组名
 * @method array getUsers() 获取用户列表
 * @method void setUsers(array $Users) 设置用户列表
 * @method string getDescription() 获取用户组描述
 * @method void setDescription(string $Description) 设置用户组描述
 * @method string getOperateAction() 获取枚举类, ADD, DELETE, SYNC


枚举类说明:
- ADD: 新增的批量用户, 多次新增相同的用户不会报错
- DELETE: 从用户组里删除的批量用户, 删除不存在的用户不会报错
- SYNC: 用于同步整个用户组, 当列表为空时代表清空整个用户组
默认为SYNC

 * @method void setOperateAction(string $OperateAction) 设置枚举类, ADD, DELETE, SYNC


枚举类说明:
- ADD: 新增的批量用户, 多次新增相同的用户不会报错
- DELETE: 从用户组里删除的批量用户, 删除不存在的用户不会报错
- SYNC: 用于同步整个用户组, 当列表为空时代表清空整个用户组
默认为SYNC
 */
class ModifyUsersOfGroupSTDRequest extends AbstractModel
{
    /**
     * @var string 集群名称
     */
    public $InstanceId;

    /**
     * @var string 用户组名
     */
    public $Group;

    /**
     * @var array 用户列表
     */
    public $Users;

    /**
     * @var string 用户组描述
     */
    public $Description;

    /**
     * @var string 枚举类, ADD, DELETE, SYNC


枚举类说明:
- ADD: 新增的批量用户, 多次新增相同的用户不会报错
- DELETE: 从用户组里删除的批量用户, 删除不存在的用户不会报错
- SYNC: 用于同步整个用户组, 当列表为空时代表清空整个用户组
默认为SYNC

     */
    public $OperateAction;

    /**
     * @param string $InstanceId 集群名称
     * @param string $Group 用户组名
     * @param array $Users 用户列表
     * @param string $Description 用户组描述
     * @param string $OperateAction 枚举类, ADD, DELETE, SYNC


枚举类说明:
- ADD: 新增的批量用户, 多次新增相同的用户不会报错
- DELETE: 从用户组里删除的批量用户, 删除不存在的用户不会报错
- SYNC: 用于同步整个用户组, 当列表为空时代表清空整个用户组
默认为SYNC
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

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OperateAction",$param) and $param["OperateAction"] !== null) {
            $this->OperateAction = $param["OperateAction"];
        }
    }
}
