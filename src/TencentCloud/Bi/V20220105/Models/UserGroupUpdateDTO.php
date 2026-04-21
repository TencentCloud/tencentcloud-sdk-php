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
 * 用户组更新入参
 *
 * @method string getAdminUserId() 获取组管理员
 * @method void setAdminUserId(string $AdminUserId) 设置组管理员
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getGroupName() 获取用户组名称
 * @method void setGroupName(string $GroupName) 设置用户组名称
 * @method integer getLocation() 获取排序位置
 * @method void setLocation(integer $Location) 设置排序位置
 * @method integer getParentId() 获取父节点id
 * @method void setParentId(integer $ParentId) 设置父节点id
 * @method integer getId() 获取用户组id
 * @method void setId(integer $Id) 设置用户组id
 * @method string getParentName() 获取父节点名称
 * @method void setParentName(string $ParentName) 设置父节点名称
 */
class UserGroupUpdateDTO extends AbstractModel
{
    /**
     * @var string 组管理员
     */
    public $AdminUserId;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 用户组名称
     */
    public $GroupName;

    /**
     * @var integer 排序位置
     */
    public $Location;

    /**
     * @var integer 父节点id
     */
    public $ParentId;

    /**
     * @var integer 用户组id
     */
    public $Id;

    /**
     * @var string 父节点名称
     */
    public $ParentName;

    /**
     * @param string $AdminUserId 组管理员
     * @param string $Description 描述
     * @param string $GroupName 用户组名称
     * @param integer $Location 排序位置
     * @param integer $ParentId 父节点id
     * @param integer $Id 用户组id
     * @param string $ParentName 父节点名称
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ParentName",$param) and $param["ParentName"] !== null) {
            $this->ParentName = $param["ParentName"];
        }
    }
}
