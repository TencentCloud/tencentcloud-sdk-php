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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间模板信息
 *
 * @method integer getId() 获取模板ID
 * @method void setId(integer $Id) 设置模板ID
 * @method string getCategory() 获取模板分类
 * @method void setCategory(string $Category) 设置模板分类
 * @method string getName() 获取模板名称
 * @method void setName(string $Name) 设置模板名称
 * @method string getDescription() 获取模板描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置模板描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescriptionEN() 获取中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescriptionEN(string $DescriptionEN) 设置中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTags() 获取模板标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(string $Tags) 设置模板标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIcon() 获取模板图标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIcon(string $Icon) 设置模板图标地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlType() 获取默认仓库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlType(string $VersionControlType) 设置默认仓库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlUrl() 获取默认仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlUrl(string $VersionControlUrl) 设置默认仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlDesc() 获取默认仓库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlDesc(string $VersionControlDesc) 设置默认仓库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlOwner() 获取默认仓库所属人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlOwner(string $VersionControlOwner) 设置默认仓库所属人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlRef() 获取默认仓库引用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlRef(string $VersionControlRef) 设置默认仓库引用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionControlRefType() 获取默认仓库引用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionControlRefType(string $VersionControlRefType) 设置默认仓库引用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserVersionControlUrl() 获取用户自定义仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserVersionControlUrl(string $UserVersionControlUrl) 设置用户自定义仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserVersionControlType() 获取用户自定义仓库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserVersionControlType(string $UserVersionControlType) 设置用户自定义仓库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserVersionControlRef() 获取用户自定义仓库引用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserVersionControlRef(string $UserVersionControlRef) 设置用户自定义仓库引用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserVersionControlRefType() 获取用户自定义仓库引用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserVersionControlRefType(string $UserVersionControlRefType) 设置用户自定义仓库引用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDevFile() 获取xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevFile(string $DevFile) 设置xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPluginFile() 获取xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPluginFile(string $PluginFile) 设置xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrebuildFile() 获取xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrebuildFile(string $PrebuildFile) 设置xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMarked() 获取是否标记
 * @method void setMarked(boolean $Marked) 设置是否标记
 * @method integer getMarkAt() 获取标记状态
 * @method void setMarkAt(integer $MarkAt) 设置标记状态
 * @method string getCreateDate() 获取创建时间
 * @method void setCreateDate(string $CreateDate) 设置创建时间
 * @method string getLastModified() 获取最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModified(string $LastModified) 设置最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSort() 获取编号
 * @method void setSort(integer $Sort) 设置编号
 * @method string getSnapshotUid() 获取xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotUid(string $SnapshotUid) 设置xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserId() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(integer $UserId) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthor() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthor(string $Author) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMe() 获取是否属于当前用户
 * @method void setMe(boolean $Me) 设置是否属于当前用户
 * @method string getAuthorAvatar() 获取xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorAvatar(string $AuthorAvatar) 设置xxx
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkspaceTemplateInfo extends AbstractModel
{
    /**
     * @var integer 模板ID
     */
    public $Id;

    /**
     * @var string 模板分类
     */
    public $Category;

    /**
     * @var string 模板名称
     */
    public $Name;

    /**
     * @var string 模板描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 中文描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescriptionEN;

    /**
     * @var string 模板标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 模板图标地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Icon;

    /**
     * @var string 默认仓库类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlType;

    /**
     * @var string 默认仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlUrl;

    /**
     * @var string 默认仓库描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlDesc;

    /**
     * @var string 默认仓库所属人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlOwner;

    /**
     * @var string 默认仓库引用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlRef;

    /**
     * @var string 默认仓库引用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionControlRefType;

    /**
     * @var string 用户自定义仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserVersionControlUrl;

    /**
     * @var string 用户自定义仓库类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserVersionControlType;

    /**
     * @var string 用户自定义仓库引用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserVersionControlRef;

    /**
     * @var string 用户自定义仓库引用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserVersionControlRefType;

    /**
     * @var string xxx
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DevFile;

    /**
     * @var string xxx
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PluginFile;

    /**
     * @var string xxx
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrebuildFile;

    /**
     * @var boolean 是否标记
     */
    public $Marked;

    /**
     * @var integer 标记状态
     */
    public $MarkAt;

    /**
     * @var string 创建时间
     */
    public $CreateDate;

    /**
     * @var string 最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModified;

    /**
     * @var integer 编号
     */
    public $Sort;

    /**
     * @var string xxx
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotUid;

    /**
     * @var integer 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Author;

    /**
     * @var boolean 是否属于当前用户
     */
    public $Me;

    /**
     * @var string xxx
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorAvatar;

    /**
     * @param integer $Id 模板ID
     * @param string $Category 模板分类
     * @param string $Name 模板名称
     * @param string $Description 模板描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DescriptionEN 中文描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tags 模板标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Icon 模板图标地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlType 默认仓库类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlUrl 默认仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlDesc 默认仓库描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlOwner 默认仓库所属人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlRef 默认仓库引用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionControlRefType 默认仓库引用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserVersionControlUrl 用户自定义仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserVersionControlType 用户自定义仓库类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserVersionControlRef 用户自定义仓库引用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserVersionControlRefType 用户自定义仓库引用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DevFile xxx
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PluginFile xxx
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrebuildFile xxx
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Marked 是否标记
     * @param integer $MarkAt 标记状态
     * @param string $CreateDate 创建时间
     * @param string $LastModified 最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Sort 编号
     * @param string $SnapshotUid xxx
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserId 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Author 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Me 是否属于当前用户
     * @param string $AuthorAvatar xxx
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DescriptionEN",$param) and $param["DescriptionEN"] !== null) {
            $this->DescriptionEN = $param["DescriptionEN"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("VersionControlType",$param) and $param["VersionControlType"] !== null) {
            $this->VersionControlType = $param["VersionControlType"];
        }

        if (array_key_exists("VersionControlUrl",$param) and $param["VersionControlUrl"] !== null) {
            $this->VersionControlUrl = $param["VersionControlUrl"];
        }

        if (array_key_exists("VersionControlDesc",$param) and $param["VersionControlDesc"] !== null) {
            $this->VersionControlDesc = $param["VersionControlDesc"];
        }

        if (array_key_exists("VersionControlOwner",$param) and $param["VersionControlOwner"] !== null) {
            $this->VersionControlOwner = $param["VersionControlOwner"];
        }

        if (array_key_exists("VersionControlRef",$param) and $param["VersionControlRef"] !== null) {
            $this->VersionControlRef = $param["VersionControlRef"];
        }

        if (array_key_exists("VersionControlRefType",$param) and $param["VersionControlRefType"] !== null) {
            $this->VersionControlRefType = $param["VersionControlRefType"];
        }

        if (array_key_exists("UserVersionControlUrl",$param) and $param["UserVersionControlUrl"] !== null) {
            $this->UserVersionControlUrl = $param["UserVersionControlUrl"];
        }

        if (array_key_exists("UserVersionControlType",$param) and $param["UserVersionControlType"] !== null) {
            $this->UserVersionControlType = $param["UserVersionControlType"];
        }

        if (array_key_exists("UserVersionControlRef",$param) and $param["UserVersionControlRef"] !== null) {
            $this->UserVersionControlRef = $param["UserVersionControlRef"];
        }

        if (array_key_exists("UserVersionControlRefType",$param) and $param["UserVersionControlRefType"] !== null) {
            $this->UserVersionControlRefType = $param["UserVersionControlRefType"];
        }

        if (array_key_exists("DevFile",$param) and $param["DevFile"] !== null) {
            $this->DevFile = $param["DevFile"];
        }

        if (array_key_exists("PluginFile",$param) and $param["PluginFile"] !== null) {
            $this->PluginFile = $param["PluginFile"];
        }

        if (array_key_exists("PrebuildFile",$param) and $param["PrebuildFile"] !== null) {
            $this->PrebuildFile = $param["PrebuildFile"];
        }

        if (array_key_exists("Marked",$param) and $param["Marked"] !== null) {
            $this->Marked = $param["Marked"];
        }

        if (array_key_exists("MarkAt",$param) and $param["MarkAt"] !== null) {
            $this->MarkAt = $param["MarkAt"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("LastModified",$param) and $param["LastModified"] !== null) {
            $this->LastModified = $param["LastModified"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("SnapshotUid",$param) and $param["SnapshotUid"] !== null) {
            $this->SnapshotUid = $param["SnapshotUid"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("Me",$param) and $param["Me"] !== null) {
            $this->Me = $param["Me"];
        }

        if (array_key_exists("AuthorAvatar",$param) and $param["AuthorAvatar"] !== null) {
            $this->AuthorAvatar = $param["AuthorAvatar"];
        }
    }
}
