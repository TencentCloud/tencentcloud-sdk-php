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
 * CVM镜像信息。
 *
 * @method string getImageId() 获取CVM镜像 ID ，是Image的唯一标识。
 * @method void setImageId(string $ImageId) 设置CVM镜像 ID ，是Image的唯一标识。
 * @method string getImageName() 获取镜像名称。
 * @method void setImageName(string $ImageName) 设置镜像名称。
 * @method string getImageDescription() 获取镜像描述。
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述。
 * @method integer getImageSize() 获取镜像大小。单位GB。
 * @method void setImageSize(integer $ImageSize) 设置镜像大小。单位GB。
 * @method string getImageSource() 获取镜像来源。
<li>CREATE_IMAGE：自定义镜像</li>
<li>EXTERNAL_IMPORT：外部导入镜像</li>
 * @method void setImageSource(string $ImageSource) 设置镜像来源。
<li>CREATE_IMAGE：自定义镜像</li>
<li>EXTERNAL_IMPORT：外部导入镜像</li>
 * @method string getImageClass() 获取镜像分类
<li>SystemImage：系统盘镜像</li>
<li>InstanceImage：整机镜像</li>
 * @method void setImageClass(string $ImageClass) 设置镜像分类
<li>SystemImage：系统盘镜像</li>
<li>InstanceImage：整机镜像</li>
 * @method string getImageState() 获取镜像状态
CREATING:创建中
NORMAL:正常
CREATEFAILED:创建失败
USING:使用中
SYNCING:同步中
IMPORTING:导入中
IMPORTFAILED:导入失败
 * @method void setImageState(string $ImageState) 设置镜像状态
CREATING:创建中
NORMAL:正常
CREATEFAILED:创建失败
USING:使用中
SYNCING:同步中
IMPORTING:导入中
IMPORTFAILED:导入失败
 * @method boolean getIsSupportCloudinit() 获取镜像是否支持Cloudinit。
 * @method void setIsSupportCloudinit(boolean $IsSupportCloudinit) 设置镜像是否支持Cloudinit。
 * @method string getArchitecture() 获取镜像架构。
 * @method void setArchitecture(string $Architecture) 设置镜像架构。
 * @method string getOsName() 获取镜像操作系统。
 * @method void setOsName(string $OsName) 设置镜像操作系统。
 * @method string getPlatform() 获取镜像来源平台。
 * @method void setPlatform(string $Platform) 设置镜像来源平台。
 * @method string getCreatedTime() 获取镜像创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置镜像创建时间。
 * @method boolean getIsShareable() 获取镜像是否可共享到轻量应用服务器。
 * @method void setIsShareable(boolean $IsShareable) 设置镜像是否可共享到轻量应用服务器。
 * @method string getUnshareableReason() 获取不可共享的原因。
 * @method void setUnshareableReason(string $UnshareableReason) 设置不可共享的原因。
 */
class Image extends AbstractModel
{
    /**
     * @var string CVM镜像 ID ，是Image的唯一标识。
     */
    public $ImageId;

    /**
     * @var string 镜像名称。
     */
    public $ImageName;

    /**
     * @var string 镜像描述。
     */
    public $ImageDescription;

    /**
     * @var integer 镜像大小。单位GB。
     */
    public $ImageSize;

    /**
     * @var string 镜像来源。
<li>CREATE_IMAGE：自定义镜像</li>
<li>EXTERNAL_IMPORT：外部导入镜像</li>
     */
    public $ImageSource;

    /**
     * @var string 镜像分类
<li>SystemImage：系统盘镜像</li>
<li>InstanceImage：整机镜像</li>
     */
    public $ImageClass;

    /**
     * @var string 镜像状态
CREATING:创建中
NORMAL:正常
CREATEFAILED:创建失败
USING:使用中
SYNCING:同步中
IMPORTING:导入中
IMPORTFAILED:导入失败
     */
    public $ImageState;

    /**
     * @var boolean 镜像是否支持Cloudinit。
     */
    public $IsSupportCloudinit;

    /**
     * @var string 镜像架构。
     */
    public $Architecture;

    /**
     * @var string 镜像操作系统。
     */
    public $OsName;

    /**
     * @var string 镜像来源平台。
     */
    public $Platform;

    /**
     * @var string 镜像创建时间。
     */
    public $CreatedTime;

    /**
     * @var boolean 镜像是否可共享到轻量应用服务器。
     */
    public $IsShareable;

    /**
     * @var string 不可共享的原因。
     */
    public $UnshareableReason;

    /**
     * @param string $ImageId CVM镜像 ID ，是Image的唯一标识。
     * @param string $ImageName 镜像名称。
     * @param string $ImageDescription 镜像描述。
     * @param integer $ImageSize 镜像大小。单位GB。
     * @param string $ImageSource 镜像来源。
<li>CREATE_IMAGE：自定义镜像</li>
<li>EXTERNAL_IMPORT：外部导入镜像</li>
     * @param string $ImageClass 镜像分类
<li>SystemImage：系统盘镜像</li>
<li>InstanceImage：整机镜像</li>
     * @param string $ImageState 镜像状态
CREATING:创建中
NORMAL:正常
CREATEFAILED:创建失败
USING:使用中
SYNCING:同步中
IMPORTING:导入中
IMPORTFAILED:导入失败
     * @param boolean $IsSupportCloudinit 镜像是否支持Cloudinit。
     * @param string $Architecture 镜像架构。
     * @param string $OsName 镜像操作系统。
     * @param string $Platform 镜像来源平台。
     * @param string $CreatedTime 镜像创建时间。
     * @param boolean $IsShareable 镜像是否可共享到轻量应用服务器。
     * @param string $UnshareableReason 不可共享的原因。
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

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            $this->ImageSource = $param["ImageSource"];
        }

        if (array_key_exists("ImageClass",$param) and $param["ImageClass"] !== null) {
            $this->ImageClass = $param["ImageClass"];
        }

        if (array_key_exists("ImageState",$param) and $param["ImageState"] !== null) {
            $this->ImageState = $param["ImageState"];
        }

        if (array_key_exists("IsSupportCloudinit",$param) and $param["IsSupportCloudinit"] !== null) {
            $this->IsSupportCloudinit = $param["IsSupportCloudinit"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("IsShareable",$param) and $param["IsShareable"] !== null) {
            $this->IsShareable = $param["IsShareable"];
        }

        if (array_key_exists("UnshareableReason",$param) and $param["UnshareableReason"] !== null) {
            $this->UnshareableReason = $param["UnshareableReason"];
        }
    }
}
