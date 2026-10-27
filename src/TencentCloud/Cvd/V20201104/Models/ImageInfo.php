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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云桌面镜像信息
 *
 * @method string getImageID() 获取<p>镜像id</p>
 * @method void setImageID(string $ImageID) 设置<p>镜像id</p>
 * @method string getImageName() 获取<p>镜像名称</p>
 * @method void setImageName(string $ImageName) 设置<p>镜像名称</p>
 * @method string getImageType() 获取<p>镜像类型：<br>PUBLIC_IMAGE-公共镜像<br>PRIVATE_IMAGE-自定义镜像<br>TENCENT_OFFICE_IMAGE-腾讯办公镜像</p>
 * @method void setImageType(string $ImageType) 设置<p>镜像类型：<br>PUBLIC_IMAGE-公共镜像<br>PRIVATE_IMAGE-自定义镜像<br>TENCENT_OFFICE_IMAGE-腾讯办公镜像</p>
 * @method string getImageState() 获取<p>镜像状态：<br>CREATING-创建中<br>NORMAL-正常<br>CREATEFAILED-创建失败<br>USING-使用中<br>SYNCING-同步中<br>IMPORTING-导入中<br>IMPORTFAILED-导入失败<br>INVISIBLE-淘汰的镜像<br>DELETIING-删除中<br>DELETED-删除的</p>
 * @method void setImageState(string $ImageState) 设置<p>镜像状态：<br>CREATING-创建中<br>NORMAL-正常<br>CREATEFAILED-创建失败<br>USING-使用中<br>SYNCING-同步中<br>IMPORTING-导入中<br>IMPORTFAILED-导入失败<br>INVISIBLE-淘汰的镜像<br>DELETIING-删除中<br>DELETED-删除的</p>
 * @method string getOsName() 获取<p>镜像操作系统</p>
 * @method void setOsName(string $OsName) 设置<p>镜像操作系统</p>
 * @method integer getImageSize() 获取<p>镜像大小（单位G）</p>
 * @method void setImageSize(integer $ImageSize) 设置<p>镜像大小（单位G）</p>
 * @method string getDescription() 获取<p>镜像描述</p>
 * @method void setDescription(string $Description) 设置<p>镜像描述</p>
 * @method string getRegion() 获取<p>镜像所在区域</p>
 * @method void setRegion(string $Region) 设置<p>镜像所在区域</p>
 * @method string getCoreType() 获取<p>内核类型：<br>CPU<br>GPU<br>GPU_A10<br>GPU_RTX6000<br>GPU_2080Ti<br>GPU_3080Ti</p>
 * @method void setCoreType(string $CoreType) 设置<p>内核类型：<br>CPU<br>GPU<br>GPU_A10<br>GPU_RTX6000<br>GPU_2080Ti<br>GPU_3080Ti</p>
 * @method string getCvmImageId() 获取<p>cvm侧镜像id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvmImageId(string $CvmImageId) 设置<p>cvm侧镜像id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsWhole() 获取<p>是否是整机镜像，整机镜像无法用于桌面重置<br>true：整机镜像<br>false: 不是整机镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsWhole(boolean $IsWhole) 设置<p>是否是整机镜像，整机镜像无法用于桌面重置<br>true：整机镜像<br>false: 不是整机镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataDiskSize() 获取<p>整机镜像中数据盘大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDiskSize(integer $DataDiskSize) 设置<p>整机镜像中数据盘大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>镜像创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>镜像创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var string <p>镜像id</p>
     */
    public $ImageID;

    /**
     * @var string <p>镜像名称</p>
     */
    public $ImageName;

    /**
     * @var string <p>镜像类型：<br>PUBLIC_IMAGE-公共镜像<br>PRIVATE_IMAGE-自定义镜像<br>TENCENT_OFFICE_IMAGE-腾讯办公镜像</p>
     */
    public $ImageType;

    /**
     * @var string <p>镜像状态：<br>CREATING-创建中<br>NORMAL-正常<br>CREATEFAILED-创建失败<br>USING-使用中<br>SYNCING-同步中<br>IMPORTING-导入中<br>IMPORTFAILED-导入失败<br>INVISIBLE-淘汰的镜像<br>DELETIING-删除中<br>DELETED-删除的</p>
     */
    public $ImageState;

    /**
     * @var string <p>镜像操作系统</p>
     */
    public $OsName;

    /**
     * @var integer <p>镜像大小（单位G）</p>
     */
    public $ImageSize;

    /**
     * @var string <p>镜像描述</p>
     */
    public $Description;

    /**
     * @var string <p>镜像所在区域</p>
     */
    public $Region;

    /**
     * @var string <p>内核类型：<br>CPU<br>GPU<br>GPU_A10<br>GPU_RTX6000<br>GPU_2080Ti<br>GPU_3080Ti</p>
     */
    public $CoreType;

    /**
     * @var string <p>cvm侧镜像id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CvmImageId;

    /**
     * @var boolean <p>是否是整机镜像，整机镜像无法用于桌面重置<br>true：整机镜像<br>false: 不是整机镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsWhole;

    /**
     * @var integer <p>整机镜像中数据盘大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDiskSize;

    /**
     * @var string <p>镜像创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $ImageID <p>镜像id</p>
     * @param string $ImageName <p>镜像名称</p>
     * @param string $ImageType <p>镜像类型：<br>PUBLIC_IMAGE-公共镜像<br>PRIVATE_IMAGE-自定义镜像<br>TENCENT_OFFICE_IMAGE-腾讯办公镜像</p>
     * @param string $ImageState <p>镜像状态：<br>CREATING-创建中<br>NORMAL-正常<br>CREATEFAILED-创建失败<br>USING-使用中<br>SYNCING-同步中<br>IMPORTING-导入中<br>IMPORTFAILED-导入失败<br>INVISIBLE-淘汰的镜像<br>DELETIING-删除中<br>DELETED-删除的</p>
     * @param string $OsName <p>镜像操作系统</p>
     * @param integer $ImageSize <p>镜像大小（单位G）</p>
     * @param string $Description <p>镜像描述</p>
     * @param string $Region <p>镜像所在区域</p>
     * @param string $CoreType <p>内核类型：<br>CPU<br>GPU<br>GPU_A10<br>GPU_RTX6000<br>GPU_2080Ti<br>GPU_3080Ti</p>
     * @param string $CvmImageId <p>cvm侧镜像id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsWhole <p>是否是整机镜像，整机镜像无法用于桌面重置<br>true：整机镜像<br>false: 不是整机镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataDiskSize <p>整机镜像中数据盘大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>镜像创建时间</p>
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
        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("ImageState",$param) and $param["ImageState"] !== null) {
            $this->ImageState = $param["ImageState"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CoreType",$param) and $param["CoreType"] !== null) {
            $this->CoreType = $param["CoreType"];
        }

        if (array_key_exists("CvmImageId",$param) and $param["CvmImageId"] !== null) {
            $this->CvmImageId = $param["CvmImageId"];
        }

        if (array_key_exists("IsWhole",$param) and $param["IsWhole"] !== null) {
            $this->IsWhole = $param["IsWhole"];
        }

        if (array_key_exists("DataDiskSize",$param) and $param["DataDiskSize"] !== null) {
            $this->DataDiskSize = $param["DataDiskSize"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
