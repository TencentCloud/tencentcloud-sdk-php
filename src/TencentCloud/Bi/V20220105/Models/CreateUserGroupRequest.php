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
 * CreateUserGroup请求参数结构体
 *
 * @method string getAdminUserId() 获取<p>组管理员</p>
 * @method void setAdminUserId(string $AdminUserId) 设置<p>组管理员</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getGroupName() 获取<p>用户组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>用户组名称</p>
 * @method integer getLocation() 获取<p>位置</p>
 * @method void setLocation(integer $Location) 设置<p>位置</p>
 * @method integer getParentId() 获取<p>父用户组id</p>
 * @method void setParentId(integer $ParentId) 设置<p>父用户组id</p>
 */
class CreateUserGroupRequest extends AbstractModel
{
    /**
     * @var string <p>组管理员</p>
     */
    public $AdminUserId;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>用户组名称</p>
     */
    public $GroupName;

    /**
     * @var integer <p>位置</p>
     */
    public $Location;

    /**
     * @var integer <p>父用户组id</p>
     */
    public $ParentId;

    /**
     * @param string $AdminUserId <p>组管理员</p>
     * @param string $Description <p>描述</p>
     * @param string $GroupName <p>用户组名称</p>
     * @param integer $Location <p>位置</p>
     * @param integer $ParentId <p>父用户组id</p>
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
        if (array_key_exists("AdminUserId",$param) and $param["AdminUserId"] !== null) {
            $this->AdminUserId = $param["AdminUserId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }
    }
}
