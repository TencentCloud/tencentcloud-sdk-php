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
 * @method string getGroupName() 获取用户组名称
 * @method void setGroupName(string $GroupName) 设置用户组名称
 * @method array getUsers() 获取用户名称列表
 * @method void setUsers(array $Users) 设置用户名称列表
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getGroupType() 获取用户组类型
 * @method void setGroupType(integer $GroupType) 设置用户组类型
 * @method string getGroupTypeDesc() 获取用户组类型描述
 * @method void setGroupTypeDesc(string $GroupTypeDesc) 设置用户组类型描述
 */
class GroupInfos extends AbstractModel
{
    /**
     * @var string 用户组名称
     */
    public $GroupName;

    /**
     * @var array 用户名称列表
     */
    public $Users;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 用户组类型
     */
    public $GroupType;

    /**
     * @var string 用户组类型描述
     */
    public $GroupTypeDesc;

    /**
     * @param string $GroupName 用户组名称
     * @param array $Users 用户名称列表
     * @param string $Description 备注
     * @param string $CreateTime 创建时间
     * @param integer $GroupType 用户组类型
     * @param string $GroupTypeDesc 用户组类型描述
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

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupTypeDesc",$param) and $param["GroupTypeDesc"] !== null) {
            $this->GroupTypeDesc = $param["GroupTypeDesc"];
        }
    }
}
