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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了镜像信息。
 *
 * @method string getBlueprintId() 获取镜像 ID  ，是 Blueprint 的唯一标识。
 * @method void setBlueprintId(string $BlueprintId) 设置镜像 ID  ，是 Blueprint 的唯一标识。
 * @method string getDisplayTitle() 获取镜像对外展示标题。
 * @method void setDisplayTitle(string $DisplayTitle) 设置镜像对外展示标题。
 * @method string getDisplayVersion() 获取镜像对外展示版本。
 * @method void setDisplayVersion(string $DisplayVersion) 设置镜像对外展示版本。
 * @method string getDescription() 获取镜像描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置镜像描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOsName() 获取操作系统名称。
 * @method void setOsName(string $OsName) 设置操作系统名称。
 * @method string getPlatform() 获取操作系统平台。
 * @method void setPlatform(string $Platform) 设置操作系统平台。
 * @method string getPlatformType() 获取操作系统平台类型，如 LINUX_UNIX、WINDOWS。
 * @method void setPlatformType(string $PlatformType) 设置操作系统平台类型，如 LINUX_UNIX、WINDOWS。
 * @method string getBlueprintType() 获取镜像类型，如 APP_OS（应用镜像）, PURE_OS（系统镜像）, DOCKER（容器）, PRIVATE（私有镜像）, SHARED（共享镜像）, GAME_PORTAL（游戏专区镜像）。
 * @method void setBlueprintType(string $BlueprintType) 设置镜像类型，如 APP_OS（应用镜像）, PURE_OS（系统镜像）, DOCKER（容器）, PRIVATE（私有镜像）, SHARED（共享镜像）, GAME_PORTAL（游戏专区镜像）。
 * @method string getImageUrl() 获取镜像图片 URL。
 * @method void setImageUrl(string $ImageUrl) 设置镜像图片 URL。
 * @method integer getRequiredSystemDiskSize() 获取镜像所需系统盘大小，单位 GB。
 * @method void setRequiredSystemDiskSize(integer $RequiredSystemDiskSize) 设置镜像所需系统盘大小，单位 GB。
 * @method string getBlueprintState() 获取镜像状态。
可选值：
NORMAL（正常）、SYNCING（同步中）、OFFLINE（下线）、CREATEFAILED（创建失败）、SYNCING_FAILED（目的地域同步失败）、ISOLATING（隔离中）、ISOLATED（已隔离）、DELETING（删除中）、DESTROYING（销毁中）。
 * @method void setBlueprintState(string $BlueprintState) 设置镜像状态。
可选值：
NORMAL（正常）、SYNCING（同步中）、OFFLINE（下线）、CREATEFAILED（创建失败）、SYNCING_FAILED（目的地域同步失败）、ISOLATING（隔离中）、ISOLATED（已隔离）、DELETING（删除中）、DESTROYING（销毁中）。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBlueprintName() 获取镜像名称。
 * @method void setBlueprintName(string $BlueprintName) 设置镜像名称。
 * @method boolean getSupportAutomationTools() 获取镜像是否支持自动化助手。
 * @method void setSupportAutomationTools(boolean $SupportAutomationTools) 设置镜像是否支持自动化助手。
 * @method integer getRequiredMemorySize() 获取镜像所需内存大小, 单位: GB
 * @method void setRequiredMemorySize(integer $RequiredMemorySize) 设置镜像所需内存大小, 单位: GB
 * @method string getImageId() 获取CVM镜像共享到轻量应用服务器轻量应用服务器后的CVM镜像ID。
 * @method void setImageId(string $ImageId) 设置CVM镜像共享到轻量应用服务器轻量应用服务器后的CVM镜像ID。
 * @method string getCommunityUrl() 获取官方网站Url。
 * @method void setCommunityUrl(string $CommunityUrl) 设置官方网站Url。
 * @method string getGuideUrl() 获取指导文章Url。
 * @method void setGuideUrl(string $GuideUrl) 设置指导文章Url。
 * @method array getSceneIdSet() 获取镜像关联使用场景Id列表。
 * @method void setSceneIdSet(array $SceneIdSet) 设置镜像关联使用场景Id列表。
 * @method string getDockerVersion() 获取Docker版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDockerVersion(string $DockerVersion) 设置Docker版本号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getBlueprintShared() 获取镜像是否已共享。
 * @method void setBlueprintShared(boolean $BlueprintShared) 设置镜像是否已共享。
 * @method array getTags() 获取镜像绑定的标签列表。
 * @method void setTags(array $Tags) 设置镜像绑定的标签列表。
 */
class Blueprint extends AbstractModel
{
    /**
     * @var string 镜像 ID  ，是 Blueprint 的唯一标识。
     */
    public $BlueprintId;

    /**
     * @var string 镜像对外展示标题。
     */
    public $DisplayTitle;

    /**
     * @var string 镜像对外展示版本。
     */
    public $DisplayVersion;

    /**
     * @var string 镜像描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 操作系统名称。
     */
    public $OsName;

    /**
     * @var string 操作系统平台。
     */
    public $Platform;

    /**
     * @var string 操作系统平台类型，如 LINUX_UNIX、WINDOWS。
     */
    public $PlatformType;

    /**
     * @var string 镜像类型，如 APP_OS（应用镜像）, PURE_OS（系统镜像）, DOCKER（容器）, PRIVATE（私有镜像）, SHARED（共享镜像）, GAME_PORTAL（游戏专区镜像）。
     */
    public $BlueprintType;

    /**
     * @var string 镜像图片 URL。
     */
    public $ImageUrl;

    /**
     * @var integer 镜像所需系统盘大小，单位 GB。
     */
    public $RequiredSystemDiskSize;

    /**
     * @var string 镜像状态。
可选值：
NORMAL（正常）、SYNCING（同步中）、OFFLINE（下线）、CREATEFAILED（创建失败）、SYNCING_FAILED（目的地域同步失败）、ISOLATING（隔离中）、ISOLATED（已隔离）、DELETING（删除中）、DESTROYING（销毁中）。
     */
    public $BlueprintState;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 镜像名称。
     */
    public $BlueprintName;

    /**
     * @var boolean 镜像是否支持自动化助手。
     */
    public $SupportAutomationTools;

    /**
     * @var integer 镜像所需内存大小, 单位: GB
     */
    public $RequiredMemorySize;

    /**
     * @var string CVM镜像共享到轻量应用服务器轻量应用服务器后的CVM镜像ID。
     */
    public $ImageId;

    /**
     * @var string 官方网站Url。
     */
    public $CommunityUrl;

    /**
     * @var string 指导文章Url。
     */
    public $GuideUrl;

    /**
     * @var array 镜像关联使用场景Id列表。
     */
    public $SceneIdSet;

    /**
     * @var string Docker版本号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DockerVersion;

    /**
     * @var boolean 镜像是否已共享。
     */
    public $BlueprintShared;

    /**
     * @var array 镜像绑定的标签列表。
     */
    public $Tags;

    /**
     * @param string $BlueprintId 镜像 ID  ，是 Blueprint 的唯一标识。
     * @param string $DisplayTitle 镜像对外展示标题。
     * @param string $DisplayVersion 镜像对外展示版本。
     * @param string $Description 镜像描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OsName 操作系统名称。
     * @param string $Platform 操作系统平台。
     * @param string $PlatformType 操作系统平台类型，如 LINUX_UNIX、WINDOWS。
     * @param string $BlueprintType 镜像类型，如 APP_OS（应用镜像）, PURE_OS（系统镜像）, DOCKER（容器）, PRIVATE（私有镜像）, SHARED（共享镜像）, GAME_PORTAL（游戏专区镜像）。
     * @param string $ImageUrl 镜像图片 URL。
     * @param integer $RequiredSystemDiskSize 镜像所需系统盘大小，单位 GB。
     * @param string $BlueprintState 镜像状态。
可选值：
NORMAL（正常）、SYNCING（同步中）、OFFLINE（下线）、CREATEFAILED（创建失败）、SYNCING_FAILED（目的地域同步失败）、ISOLATING（隔离中）、ISOLATED（已隔离）、DELETING（删除中）、DESTROYING（销毁中）。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BlueprintName 镜像名称。
     * @param boolean $SupportAutomationTools 镜像是否支持自动化助手。
     * @param integer $RequiredMemorySize 镜像所需内存大小, 单位: GB
     * @param string $ImageId CVM镜像共享到轻量应用服务器轻量应用服务器后的CVM镜像ID。
     * @param string $CommunityUrl 官方网站Url。
     * @param string $GuideUrl 指导文章Url。
     * @param array $SceneIdSet 镜像关联使用场景Id列表。
     * @param string $DockerVersion Docker版本号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $BlueprintShared 镜像是否已共享。
     * @param array $Tags 镜像绑定的标签列表。
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
        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("DisplayTitle",$param) and $param["DisplayTitle"] !== null) {
            $this->DisplayTitle = $param["DisplayTitle"];
        }

        if (array_key_exists("DisplayVersion",$param) and $param["DisplayVersion"] !== null) {
            $this->DisplayVersion = $param["DisplayVersion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("PlatformType",$param) and $param["PlatformType"] !== null) {
            $this->PlatformType = $param["PlatformType"];
        }

        if (array_key_exists("BlueprintType",$param) and $param["BlueprintType"] !== null) {
            $this->BlueprintType = $param["BlueprintType"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("RequiredSystemDiskSize",$param) and $param["RequiredSystemDiskSize"] !== null) {
            $this->RequiredSystemDiskSize = $param["RequiredSystemDiskSize"];
        }

        if (array_key_exists("BlueprintState",$param) and $param["BlueprintState"] !== null) {
            $this->BlueprintState = $param["BlueprintState"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("BlueprintName",$param) and $param["BlueprintName"] !== null) {
            $this->BlueprintName = $param["BlueprintName"];
        }

        if (array_key_exists("SupportAutomationTools",$param) and $param["SupportAutomationTools"] !== null) {
            $this->SupportAutomationTools = $param["SupportAutomationTools"];
        }

        if (array_key_exists("RequiredMemorySize",$param) and $param["RequiredMemorySize"] !== null) {
            $this->RequiredMemorySize = $param["RequiredMemorySize"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("CommunityUrl",$param) and $param["CommunityUrl"] !== null) {
            $this->CommunityUrl = $param["CommunityUrl"];
        }

        if (array_key_exists("GuideUrl",$param) and $param["GuideUrl"] !== null) {
            $this->GuideUrl = $param["GuideUrl"];
        }

        if (array_key_exists("SceneIdSet",$param) and $param["SceneIdSet"] !== null) {
            $this->SceneIdSet = $param["SceneIdSet"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("BlueprintShared",$param) and $param["BlueprintShared"] !== null) {
            $this->BlueprintShared = $param["BlueprintShared"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
