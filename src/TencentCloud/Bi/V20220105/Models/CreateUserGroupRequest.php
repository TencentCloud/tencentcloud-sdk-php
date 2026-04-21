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
 * @method string getGroupName() 获取用户组名称
 * @method void setGroupName(string $GroupName) 设置用户组名称
 * @method integer getLocation() 获取位置
 * @method void setLocation(integer $Location) 设置位置
 * @method integer getParentId() 获取父用户组id
 * @method void setParentId(integer $ParentId) 设置父用户组id
 */
class CreateUserGroupRequest extends AbstractModel
{
    /**
     * @var string 用户组名称
     */
    public $GroupName;

    /**
     * @var integer 位置
     */
    public $Location;

    /**
     * @var integer 父用户组id
     */
    public $ParentId;

    /**
     * @param string $GroupName 用户组名称
     * @param integer $Location 位置
     * @param integer $ParentId 父用户组id
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

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }
    }
}
