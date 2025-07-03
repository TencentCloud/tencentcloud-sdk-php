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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户组信息。
 *
 * @method string getGroupName() 获取用户组的名称。
 * @method void setGroupName(string $GroupName) 设置用户组的名称。
 * @method string getDescription() 获取用户组的描述。
 * @method void setDescription(string $Description) 设置用户组的描述。
 * @method string getCreateTime() 获取用户组的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置用户组的创建时间。
 * @method string getGroupType() 获取用户组的类型  Manual：手动创建，Synchronized：外部导入。
 * @method void setGroupType(string $GroupType) 设置用户组的类型  Manual：手动创建，Synchronized：外部导入。
 * @method string getUpdateTime() 获取用户组的修改时间。
 * @method void setUpdateTime(string $UpdateTime) 设置用户组的修改时间。
 * @method string getGroupId() 获取用户组的 ID。
 * @method void setGroupId(string $GroupId) 设置用户组的 ID。
 * @method integer getMemberCount() 获取组员数量。
 * @method void setMemberCount(integer $MemberCount) 设置组员数量。
 * @method boolean getIsSelected() 获取如果有入参FilterUsers，用户在用户组返回true，否则返回false
 * @method void setIsSelected(boolean $IsSelected) 设置如果有入参FilterUsers，用户在用户组返回true，否则返回false
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 用户组的名称。
     */
    public $GroupName;

    /**
     * @var string 用户组的描述。
     */
    public $Description;

    /**
     * @var string 用户组的创建时间。
     */
    public $CreateTime;

    /**
     * @var string 用户组的类型  Manual：手动创建，Synchronized：外部导入。
     */
    public $GroupType;

    /**
     * @var string 用户组的修改时间。
     */
    public $UpdateTime;

    /**
     * @var string 用户组的 ID。
     */
    public $GroupId;

    /**
     * @var integer 组员数量。
     */
    public $MemberCount;

    /**
     * @var boolean 如果有入参FilterUsers，用户在用户组返回true，否则返回false
     */
    public $IsSelected;

    /**
     * @param string $GroupName 用户组的名称。
     * @param string $Description 用户组的描述。
     * @param string $CreateTime 用户组的创建时间。
     * @param string $GroupType 用户组的类型  Manual：手动创建，Synchronized：外部导入。
     * @param string $UpdateTime 用户组的修改时间。
     * @param string $GroupId 用户组的 ID。
     * @param integer $MemberCount 组员数量。
     * @param boolean $IsSelected 如果有入参FilterUsers，用户在用户组返回true，否则返回false
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("IsSelected",$param) and $param["IsSelected"] !== null) {
            $this->IsSelected = $param["IsSelected"];
        }
    }
}
