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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一个关于镜像详细信息的结构体，主要包括镜像的主要状态与属性。
 *
 * @method string getImageId() 获取镜像ID
 * @method void setImageId(string $ImageId) 设置镜像ID
 * @method string getOsName() 获取镜像操作系统
 * @method void setOsName(string $OsName) 设置镜像操作系统
 * @method string getImageType() 获取镜像类型。镜像类型返回值包括：
* `PUBLIC_IMAGE` 公共镜像
* `PRIVATE_IMAGE` 自定义镜像
* `SHARED_IMAGE` 共享镜像
 * @method void setImageType(string $ImageType) 设置镜像类型。镜像类型返回值包括：
* `PUBLIC_IMAGE` 公共镜像
* `PRIVATE_IMAGE` 自定义镜像
* `SHARED_IMAGE` 共享镜像
 * @method string getCreatedTime() 获取镜像创建时间。
按照 ISO8601 标准表示，并且使用 UTC 时间，格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method void setCreatedTime(string $CreatedTime) 设置镜像创建时间。
按照 ISO8601 标准表示，并且使用 UTC 时间，格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageDescription() 获取镜像描述
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述
 * @method integer getImageSize() 获取镜像大小，单位 GiB。
 * @method void setImageSize(integer $ImageSize) 设置镜像大小，单位 GiB。
 * @method string getArchitecture() 获取镜像架构。镜像架构返回值包括：
* `x86_64`
* `arm`
* `i386`
 * @method void setArchitecture(string $Architecture) 设置镜像架构。镜像架构返回值包括：
* `x86_64`
* `arm`
* `i386`
 * @method string getImageState() 获取镜像状态:
CREATING-创建中
NORMAL-正常
CREATEFAILED-创建失败
SYNCING-复制中
IMPORTING-导入中
IMPORTFAILED-导入失败
 * @method void setImageState(string $ImageState) 设置镜像状态:
CREATING-创建中
NORMAL-正常
CREATEFAILED-创建失败
SYNCING-复制中
IMPORTING-导入中
IMPORTFAILED-导入失败
 * @method string getPlatform() 获取镜像来源平台，包括如TencentOS、 CentOS、 Windows、 Ubuntu、 Debian、Fedora等。
 * @method void setPlatform(string $Platform) 设置镜像来源平台，包括如TencentOS、 CentOS、 Windows、 Ubuntu、 Debian、Fedora等。
 * @method string getImageCreator() 获取镜像创建者
 * @method void setImageCreator(string $ImageCreator) 设置镜像创建者
 * @method string getImageSource() 获取镜像来源。镜像来源返回值包括：
* `OFFICIAL` 官方镜像
* `CREATE_IMAGE` 用户自建镜像
* `EXTERNAL_IMPORT` 用户外部导入镜像
 * @method void setImageSource(string $ImageSource) 设置镜像来源。镜像来源返回值包括：
* `OFFICIAL` 官方镜像
* `CREATE_IMAGE` 用户自建镜像
* `EXTERNAL_IMPORT` 用户外部导入镜像
 * @method integer getSyncPercent() 获取同步百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSyncPercent(integer $SyncPercent) 设置同步百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSupportCloudinit() 获取镜像是否支持cloud-init
 * @method void setIsSupportCloudinit(boolean $IsSupportCloudinit) 设置镜像是否支持cloud-init
 * @method array getSnapshotSet() 获取镜像关联的快照信息
 * @method void setSnapshotSet(array $SnapshotSet) 设置镜像关联的快照信息
 * @method array getTags() 获取镜像关联的标签列表。
 * @method void setTags(array $Tags) 设置镜像关联的标签列表。
 * @method string getLicenseType() 获取镜像许可类型。镜像许可类型返回值包括：
* `TencentCloud` 腾讯云官方许可
* `BYOL` 用户自带许可
 * @method void setLicenseType(string $LicenseType) 设置镜像许可类型。镜像许可类型返回值包括：
* `TencentCloud` 腾讯云官方许可
* `BYOL` 用户自带许可
 * @method string getImageFamily() 获取镜像族
 * @method void setImageFamily(string $ImageFamily) 设置镜像族
 * @method boolean getImageDeprecated() 获取镜像是否废弃
 * @method void setImageDeprecated(boolean $ImageDeprecated) 设置镜像是否废弃
 * @method string getCdcCacheStatus() 获取CDC镜像缓存状态
 * @method void setCdcCacheStatus(string $CdcCacheStatus) 设置CDC镜像缓存状态
 */
class Image extends AbstractModel
{
    /**
     * @var string 镜像ID
     */
    public $ImageId;

    /**
     * @var string 镜像操作系统
     */
    public $OsName;

    /**
     * @var string 镜像类型。镜像类型返回值包括：
* `PUBLIC_IMAGE` 公共镜像
* `PRIVATE_IMAGE` 自定义镜像
* `SHARED_IMAGE` 共享镜像
     */
    public $ImageType;

    /**
     * @var string 镜像创建时间。
按照 ISO8601 标准表示，并且使用 UTC 时间，格式为：YYYY-MM-DDThh:mm:ssZ。
     */
    public $CreatedTime;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像描述
     */
    public $ImageDescription;

    /**
     * @var integer 镜像大小，单位 GiB。
     */
    public $ImageSize;

    /**
     * @var string 镜像架构。镜像架构返回值包括：
* `x86_64`
* `arm`
* `i386`
     */
    public $Architecture;

    /**
     * @var string 镜像状态:
CREATING-创建中
NORMAL-正常
CREATEFAILED-创建失败
SYNCING-复制中
IMPORTING-导入中
IMPORTFAILED-导入失败
     */
    public $ImageState;

    /**
     * @var string 镜像来源平台，包括如TencentOS、 CentOS、 Windows、 Ubuntu、 Debian、Fedora等。
     */
    public $Platform;

    /**
     * @var string 镜像创建者
     */
    public $ImageCreator;

    /**
     * @var string 镜像来源。镜像来源返回值包括：
* `OFFICIAL` 官方镜像
* `CREATE_IMAGE` 用户自建镜像
* `EXTERNAL_IMPORT` 用户外部导入镜像
     */
    public $ImageSource;

    /**
     * @var integer 同步百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SyncPercent;

    /**
     * @var boolean 镜像是否支持cloud-init
     */
    public $IsSupportCloudinit;

    /**
     * @var array 镜像关联的快照信息
     */
    public $SnapshotSet;

    /**
     * @var array 镜像关联的标签列表。
     */
    public $Tags;

    /**
     * @var string 镜像许可类型。镜像许可类型返回值包括：
* `TencentCloud` 腾讯云官方许可
* `BYOL` 用户自带许可
     */
    public $LicenseType;

    /**
     * @var string 镜像族
     */
    public $ImageFamily;

    /**
     * @var boolean 镜像是否废弃
     */
    public $ImageDeprecated;

    /**
     * @var string CDC镜像缓存状态
     */
    public $CdcCacheStatus;

    /**
     * @param string $ImageId 镜像ID
     * @param string $OsName 镜像操作系统
     * @param string $ImageType 镜像类型。镜像类型返回值包括：
* `PUBLIC_IMAGE` 公共镜像
* `PRIVATE_IMAGE` 自定义镜像
* `SHARED_IMAGE` 共享镜像
     * @param string $CreatedTime 镜像创建时间。
按照 ISO8601 标准表示，并且使用 UTC 时间，格式为：YYYY-MM-DDThh:mm:ssZ。
     * @param string $ImageName 镜像名称
     * @param string $ImageDescription 镜像描述
     * @param integer $ImageSize 镜像大小，单位 GiB。
     * @param string $Architecture 镜像架构。镜像架构返回值包括：
* `x86_64`
* `arm`
* `i386`
     * @param string $ImageState 镜像状态:
CREATING-创建中
NORMAL-正常
CREATEFAILED-创建失败
SYNCING-复制中
IMPORTING-导入中
IMPORTFAILED-导入失败
     * @param string $Platform 镜像来源平台，包括如TencentOS、 CentOS、 Windows、 Ubuntu、 Debian、Fedora等。
     * @param string $ImageCreator 镜像创建者
     * @param string $ImageSource 镜像来源。镜像来源返回值包括：
* `OFFICIAL` 官方镜像
* `CREATE_IMAGE` 用户自建镜像
* `EXTERNAL_IMPORT` 用户外部导入镜像
     * @param integer $SyncPercent 同步百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSupportCloudinit 镜像是否支持cloud-init
     * @param array $SnapshotSet 镜像关联的快照信息
     * @param array $Tags 镜像关联的标签列表。
     * @param string $LicenseType 镜像许可类型。镜像许可类型返回值包括：
* `TencentCloud` 腾讯云官方许可
* `BYOL` 用户自带许可
     * @param string $ImageFamily 镜像族
     * @param boolean $ImageDeprecated 镜像是否废弃
     * @param string $CdcCacheStatus CDC镜像缓存状态
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("ImageState",$param) and $param["ImageState"] !== null) {
            $this->ImageState = $param["ImageState"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ImageCreator",$param) and $param["ImageCreator"] !== null) {
            $this->ImageCreator = $param["ImageCreator"];
        }

        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            $this->ImageSource = $param["ImageSource"];
        }

        if (array_key_exists("SyncPercent",$param) and $param["SyncPercent"] !== null) {
            $this->SyncPercent = $param["SyncPercent"];
        }

        if (array_key_exists("IsSupportCloudinit",$param) and $param["IsSupportCloudinit"] !== null) {
            $this->IsSupportCloudinit = $param["IsSupportCloudinit"];
        }

        if (array_key_exists("SnapshotSet",$param) and $param["SnapshotSet"] !== null) {
            $this->SnapshotSet = [];
            foreach ($param["SnapshotSet"] as $key => $value){
                $obj = new Snapshot();
                $obj->deserialize($value);
                array_push($this->SnapshotSet, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("ImageFamily",$param) and $param["ImageFamily"] !== null) {
            $this->ImageFamily = $param["ImageFamily"];
        }

        if (array_key_exists("ImageDeprecated",$param) and $param["ImageDeprecated"] !== null) {
            $this->ImageDeprecated = $param["ImageDeprecated"];
        }

        if (array_key_exists("CdcCacheStatus",$param) and $param["CdcCacheStatus"] !== null) {
            $this->CdcCacheStatus = $param["CdcCacheStatus"];
        }
    }
}
