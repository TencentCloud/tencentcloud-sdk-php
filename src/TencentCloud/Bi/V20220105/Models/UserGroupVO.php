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
 * 用户组返回参数
 *
 * @method integer getId() 获取用户组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置用户组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取用户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置用户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParentId() 获取所属用户组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(integer $ParentId) 设置所属用户组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentName() 获取所属用户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentName(string $ParentName) 设置所属用户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDefault() 获取是否默认用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefault(integer $IsDefault) 设置是否默认用户组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminUserId() 获取用户组管理员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminUserId(string $AdminUserId) 设置用户组管理员
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLocation() 获取排序位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(integer $Location) 设置排序位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserList() 获取用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserList(array $UserList) 设置用户信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserGroupVO extends AbstractModel
{
    /**
     * @var integer 用户组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 用户组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer 所属用户组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var string 所属用户组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentName;

    /**
     * @var integer 是否默认用户组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefault;

    /**
     * @var string 用户组管理员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminUserId;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 排序位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var array 用户信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserList;

    /**
     * @param integer $Id 用户组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 用户组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ParentId 所属用户组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentName 所属用户组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDefault 是否默认用户组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminUserId 用户组管理员
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Location 排序位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserList 用户信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("ParentName",$param) and $param["ParentName"] !== null) {
            $this->ParentName = $param["ParentName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("AdminUserId",$param) and $param["AdminUserId"] !== null) {
            $this->AdminUserId = $param["AdminUserId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("UserList",$param) and $param["UserList"] !== null) {
            $this->UserList = [];
            foreach ($param["UserList"] as $key => $value){
                $obj = new UserGroupUserInfoVO();
                $obj->deserialize($value);
                array_push($this->UserList, $obj);
            }
        }
    }
}
