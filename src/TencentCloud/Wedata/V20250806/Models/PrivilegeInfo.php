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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权限信息
 *
 * @method string getName() 获取权限名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置权限名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取权限展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置权限展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取权限描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置权限描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsRead() 获取是否为读取权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRead(boolean $IsRead) 设置是否为读取权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsManage() 获取是否为管理权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsManage(boolean $IsManage) 设置是否为管理权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getGranted() 获取是否拥有此权限，检查权限时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGranted(boolean $Granted) 设置是否拥有此权限，检查权限时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrivilegeResource getInheritedObject() 获取继承自哪个资源，查询权限详情时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInheritedObject(PrivilegeResource $InheritedObject) 设置继承自哪个资源，查询权限详情时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInherited() 获取否继承获得，查询权限详情时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInherited(boolean $Inherited) 设置否继承获得，查询权限详情时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsEdit() 获取是否为编辑权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsEdit(boolean $IsEdit) 设置是否为编辑权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsMetaDataPermission() 获取是否元数据权限（前端展示）
 * @method void setIsMetaDataPermission(boolean $IsMetaDataPermission) 设置是否元数据权限（前端展示）
 * @method string getCatalogID() 获取CatalogID(废弃)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogID(string $CatalogID) 设置CatalogID(废弃)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取catalog名称(废弃)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置catalog名称(废弃)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkSpaceID() 获取空间ID(废弃)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkSpaceID(string $WorkSpaceID) 设置空间ID(废弃)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkSpaceName() 获取空间名称(废弃)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkSpaceName(string $WorkSpaceName) 设置空间名称(废弃)
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrivilegeInfo extends AbstractModel
{
    /**
     * @var string 权限名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 权限展示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 权限描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var boolean 是否为读取权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRead;

    /**
     * @var boolean 是否为管理权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsManage;

    /**
     * @var boolean 是否拥有此权限，检查权限时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Granted;

    /**
     * @var PrivilegeResource 继承自哪个资源，查询权限详情时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InheritedObject;

    /**
     * @var boolean 否继承获得，查询权限详情时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Inherited;

    /**
     * @var boolean 是否为编辑权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsEdit;

    /**
     * @var boolean 是否元数据权限（前端展示）
     */
    public $IsMetaDataPermission;

    /**
     * @var string CatalogID(废弃)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogID;

    /**
     * @var string catalog名称(废弃)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @var string 空间ID(废弃)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkSpaceID;

    /**
     * @var string 空间名称(废弃)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkSpaceName;

    /**
     * @param string $Name 权限名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 权限展示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 权限描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsRead 是否为读取权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsManage 是否为管理权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Granted 是否拥有此权限，检查权限时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrivilegeResource $InheritedObject 继承自哪个资源，查询权限详情时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Inherited 否继承获得，查询权限详情时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsEdit 是否为编辑权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsMetaDataPermission 是否元数据权限（前端展示）
     * @param string $CatalogID CatalogID(废弃)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogName catalog名称(废弃)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkSpaceID 空间ID(废弃)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkSpaceName 空间名称(废弃)
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsRead",$param) and $param["IsRead"] !== null) {
            $this->IsRead = $param["IsRead"];
        }

        if (array_key_exists("IsManage",$param) and $param["IsManage"] !== null) {
            $this->IsManage = $param["IsManage"];
        }

        if (array_key_exists("Granted",$param) and $param["Granted"] !== null) {
            $this->Granted = $param["Granted"];
        }

        if (array_key_exists("InheritedObject",$param) and $param["InheritedObject"] !== null) {
            $this->InheritedObject = new PrivilegeResource();
            $this->InheritedObject->deserialize($param["InheritedObject"]);
        }

        if (array_key_exists("Inherited",$param) and $param["Inherited"] !== null) {
            $this->Inherited = $param["Inherited"];
        }

        if (array_key_exists("IsEdit",$param) and $param["IsEdit"] !== null) {
            $this->IsEdit = $param["IsEdit"];
        }

        if (array_key_exists("IsMetaDataPermission",$param) and $param["IsMetaDataPermission"] !== null) {
            $this->IsMetaDataPermission = $param["IsMetaDataPermission"];
        }

        if (array_key_exists("CatalogID",$param) and $param["CatalogID"] !== null) {
            $this->CatalogID = $param["CatalogID"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("WorkSpaceID",$param) and $param["WorkSpaceID"] !== null) {
            $this->WorkSpaceID = $param["WorkSpaceID"];
        }

        if (array_key_exists("WorkSpaceName",$param) and $param["WorkSpaceName"] !== null) {
            $this->WorkSpaceName = $param["WorkSpaceName"];
        }
    }
}
