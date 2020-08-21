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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了镜像信息。
 *
 * @method string getBlueprintId() 获取镜像 ID  ，是 blueprint 的唯一标识。
 * @method void setBlueprintId(string $BlueprintId) 设置镜像 ID  ，是 blueprint 的唯一标识。
 * @method string getDisplayTitle() 获取镜像对外展示标题。
 * @method void setDisplayTitle(string $DisplayTitle) 设置镜像对外展示标题。
 * @method string getDisplayVersion() 获取镜像对外展示版本。
 * @method void setDisplayVersion(string $DisplayVersion) 设置镜像对外展示版本。
 * @method string getDescription() 获取镜像描述信息。
 * @method void setDescription(string $Description) 设置镜像描述信息。
 * @method string getOsName() 获取操作系统名称。
 * @method void setOsName(string $OsName) 设置操作系统名称。
 * @method string getPlatform() 获取操作系统平台。
 * @method void setPlatform(string $Platform) 设置操作系统平台。
 * @method string getPlatformType() 获取操作系统平台类型，如 LINUX_UNIX、WINDOWS。
 * @method void setPlatformType(string $PlatformType) 设置操作系统平台类型，如 LINUX_UNIX、WINDOWS。
 * @method string getBlueprintType() 获取镜像类型，如 APP_OS、PURE_OS。
 * @method void setBlueprintType(string $BlueprintType) 设置镜像类型，如 APP_OS、PURE_OS。
 * @method string getImageUrl() 获取镜像图片 URL。
 * @method void setImageUrl(string $ImageUrl) 设置镜像图片 URL。
 */
class Blueprint extends AbstractModel
{
    /**
     * @var string 镜像 ID  ，是 blueprint 的唯一标识。
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
     * @var string 镜像类型，如 APP_OS、PURE_OS。
     */
    public $BlueprintType;

    /**
     * @var string 镜像图片 URL。
     */
    public $ImageUrl;

    /**
     * @param string $BlueprintId 镜像 ID  ，是 blueprint 的唯一标识。
     * @param string $DisplayTitle 镜像对外展示标题。
     * @param string $DisplayVersion 镜像对外展示版本。
     * @param string $Description 镜像描述信息。
     * @param string $OsName 操作系统名称。
     * @param string $Platform 操作系统平台。
     * @param string $PlatformType 操作系统平台类型，如 LINUX_UNIX、WINDOWS。
     * @param string $BlueprintType 镜像类型，如 APP_OS、PURE_OS。
     * @param string $ImageUrl 镜像图片 URL。
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
    }
}
