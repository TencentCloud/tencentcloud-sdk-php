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
 * 用户组权限树
 *
 * @method integer getId() 获取当前实体ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置当前实体ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取用户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置用户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParentId() 获取父id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(integer $ParentId) 设置父id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentName() 获取父节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentName(string $ParentName) 设置父节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDefault() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefault(integer $IsDefault) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminUserId() 获取管理员账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminUserId(string $AdminUserId) 设置管理员账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserList() 获取用户集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserList(array $UserList) 设置用户集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLocation() 获取排序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(integer $Location) 设置排序
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildren() 获取孩子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildren(array $Children) 设置孩子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasChildren() 获取是否有孩子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasChildren(boolean $HasChildren) 设置是否有孩子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceList() 获取资源集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceList(array $ResourceList) 设置资源集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserGroupTreeVO extends AbstractModel
{
    /**
     * @var integer 当前实体ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 用户组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer 父id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var string 父节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentName;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefault;

    /**
     * @var string 管理员账号id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminUserId;

    /**
     * @var array 用户集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserList;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 排序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var array 孩子节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Children;

    /**
     * @var boolean 是否有孩子节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasChildren;

    /**
     * @var array 资源集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceList;

    /**
     * @param integer $Id 当前实体ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 用户组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ParentId 父id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentName 父节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDefault 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminUserId 管理员账号id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserList 用户集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Location 排序
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Children 孩子节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasChildren 是否有孩子节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceList 资源集合
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

        if (array_key_exists("UserList",$param) and $param["UserList"] !== null) {
            $this->UserList = [];
            foreach ($param["UserList"] as $key => $value){
                $obj = new UserVO();
                $obj->deserialize($value);
                array_push($this->UserList, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new UserGroupTreeVO();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("HasChildren",$param) and $param["HasChildren"] !== null) {
            $this->HasChildren = $param["HasChildren"];
        }

        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = [];
            foreach ($param["ResourceList"] as $key => $value){
                $obj = new ResourceDTO();
                $obj->deserialize($value);
                array_push($this->ResourceList, $obj);
            }
        }
    }
}
