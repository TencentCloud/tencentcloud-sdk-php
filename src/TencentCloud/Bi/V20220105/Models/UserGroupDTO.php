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
 * 用户组
 *
 * @method integer getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取用户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置用户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParentId() 获取父节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(integer $ParentId) 设置父节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDefault() 获取是否为默认
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefault(integer $IsDefault) 设置是否为默认
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminUserId() 获取管理员用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminUserId(string $AdminUserId) 设置管理员用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLocation() 获取定位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(integer $Location) 设置定位
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserGroupDTO extends AbstractModel
{
    /**
     * @var integer id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 用户组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer 父节点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var integer 是否为默认
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefault;

    /**
     * @var string 管理员用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminUserId;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 定位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @param integer $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 用户组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ParentId 父节点id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDefault 是否为默认
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminUserId 管理员用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Location 定位
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
    }
}
