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
 * @method string getInstanceId() 获取<p>集群字符串ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群字符串ID</p>
 * @method array getUsers() 获取<p>用户信息列表</p>
 * @method void setUsers(array $Users) 设置<p>用户信息列表</p>
 * @method string getUserGroup() 获取<p>用户主组，cvm集群为必填参数，tke集群选填</p>
 * @method void setUserGroup(string $UserGroup) 设置<p>用户主组，cvm集群为必填参数，tke集群选填</p>
 * @method array getGroups() 获取<p>用户副组</p>
 * @method void setGroups(array $Groups) 设置<p>用户副组</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 */
class ModifyUserGroupRequest extends AbstractModel
{
    /**
     * @var string <p>集群字符串ID</p>
     */
    public $InstanceId;

    /**
     * @var array <p>用户信息列表</p>
     */
    public $Users;

    /**
     * @var string <p>用户主组，cvm集群为必填参数，tke集群选填</p>
     */
    public $UserGroup;

    /**
     * @var array <p>用户副组</p>
     */
    public $Groups;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @param string $InstanceId <p>集群字符串ID</p>
     * @param array $Users <p>用户信息列表</p>
     * @param string $UserGroup <p>用户主组，cvm集群为必填参数，tke集群选填</p>
     * @param array $Groups <p>用户副组</p>
     * @param string $Remark <p>备注</p>
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
