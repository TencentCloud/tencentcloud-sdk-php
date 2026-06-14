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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserRoleProject请求参数结构体
 *
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method array getRoleIdList() 获取<p>角色ID列表</p>
 * @method void setRoleIdList(array $RoleIdList) 设置<p>角色ID列表</p>
 * @method array getUserList() 获取<p>用户列表（废弃）</p>
 * @method void setUserList(array $UserList) 设置<p>用户列表（废弃）</p>
 * @method array getUserInfoList() 获取<p>用户列表（新）</p>
 * @method void setUserInfoList(array $UserInfoList) 设置<p>用户列表（新）</p>
 */
class CreateUserRoleProjectRequest extends AbstractModel
{
    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var array <p>角色ID列表</p>
     */
    public $RoleIdList;

    /**
     * @var array <p>用户列表（废弃）</p>
     * @deprecated
     */
    public $UserList;

    /**
     * @var array <p>用户列表（新）</p>
     */
    public $UserInfoList;

    /**
     * @param integer $ProjectId <p>项目ID</p>
     * @param array $RoleIdList <p>角色ID列表</p>
     * @param array $UserList <p>用户列表（废弃）</p>
     * @param array $UserInfoList <p>用户列表（新）</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RoleIdList",$param) and $param["RoleIdList"] !== null) {
            $this->RoleIdList = $param["RoleIdList"];
        }

        if (array_key_exists("UserList",$param) and $param["UserList"] !== null) {
            $this->UserList = [];
            foreach ($param["UserList"] as $key => $value){
                $obj = new UserIdAndUserName();
                $obj->deserialize($value);
                array_push($this->UserList, $obj);
            }
        }

        if (array_key_exists("UserInfoList",$param) and $param["UserInfoList"] !== null) {
            $this->UserInfoList = [];
            foreach ($param["UserInfoList"] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->UserInfoList, $obj);
            }
        }
    }
}
