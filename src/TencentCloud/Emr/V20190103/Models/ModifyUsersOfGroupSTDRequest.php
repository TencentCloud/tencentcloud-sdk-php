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
 * ModifyUsersOfGroupSTD请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群名称</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群名称</p>
 * @method string getGroup() 获取<p>用户组名</p>
 * @method void setGroup(string $Group) 设置<p>用户组名</p>
 * @method array getUsers() 获取<p>用户列表</p>
 * @method void setUsers(array $Users) 设置<p>用户列表</p>
 * @method string getDescription() 获取<p>用户组描述</p>
 * @method void setDescription(string $Description) 设置<p>用户组描述</p>
 * @method string getOperateAction() 获取<p>枚举类, ADD, DELETE, SYNC</p><p>枚举类说明:</p><ul><li>ADD: 新增的批量用户, 多次新增相同的用户不会报错</li><li>DELETE: 从用户组里删除的批量用户, 删除不存在的用户不会报错</li><li>SYNC: 用于同步整个用户组, 当列表为空时代表清空整个用户组<br>默认为SYNC</li></ul>
 * @method void setOperateAction(string $OperateAction) 设置<p>枚举类, ADD, DELETE, SYNC</p><p>枚举类说明:</p><ul><li>ADD: 新增的批量用户, 多次新增相同的用户不会报错</li><li>DELETE: 从用户组里删除的批量用户, 删除不存在的用户不会报错</li><li>SYNC: 用于同步整个用户组, 当列表为空时代表清空整个用户组<br>默认为SYNC</li></ul>
 */
class ModifyUsersOfGroupSTDRequest extends AbstractModel
{
    /**
     * @var string <p>集群名称</p>
     */
    public $InstanceId;

    /**
     * @var string <p>用户组名</p>
     */
    public $Group;

    /**
     * @var array <p>用户列表</p>
     */
    public $Users;

    /**
     * @var string <p>用户组描述</p>
     */
    public $Description;

    /**
     * @var string <p>枚举类, ADD, DELETE, SYNC</p><p>枚举类说明:</p><ul><li>ADD: 新增的批量用户, 多次新增相同的用户不会报错</li><li>DELETE: 从用户组里删除的批量用户, 删除不存在的用户不会报错</li><li>SYNC: 用于同步整个用户组, 当列表为空时代表清空整个用户组<br>默认为SYNC</li></ul>
     */
    public $OperateAction;

    /**
     * @param string $InstanceId <p>集群名称</p>
     * @param string $Group <p>用户组名</p>
     * @param array $Users <p>用户列表</p>
     * @param string $Description <p>用户组描述</p>
     * @param string $OperateAction <p>枚举类, ADD, DELETE, SYNC</p><p>枚举类说明:</p><ul><li>ADD: 新增的批量用户, 多次新增相同的用户不会报错</li><li>DELETE: 从用户组里删除的批量用户, 删除不存在的用户不会报错</li><li>SYNC: 用于同步整个用户组, 当列表为空时代表清空整个用户组<br>默认为SYNC</li></ul>
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
