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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时任务预览镜像信息
 *
 * @method integer getId() 获取<p>预览数据id</p>
 * @method void setId(integer $Id) 设置<p>预览数据id</p>
 * @method string getImageId() 获取<p>镜像id</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像id</p>
 * @method string getImageName() 获取<p>镜像名</p>
 * @method void setImageName(string $ImageName) 设置<p>镜像名</p>
 * @method string getImageTag() 获取<p>镜像tag</p>
 * @method void setImageTag(string $ImageTag) 设置<p>镜像tag</p>
 * @method string getRegistryType() 获取<p>镜像仓库类型</p>
 * @method void setRegistryType(string $RegistryType) 设置<p>镜像仓库类型</p>
 * @method string getOwnerAccountName() 获取<p>定时任务所属账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>定时任务所属账号名</p>
 * @method string getOwnerUin() 获取<p>定时任务所属账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>定时任务所属账号uin</p>
 * @method integer getOwnerAppId() 获取<p>定时任务所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>定时任务所属账号appid</p>
 * @method boolean getIsLatestImage() 获取<p>是否最新镜像</p>
 * @method void setIsLatestImage(boolean $IsLatestImage) 设置<p>是否最新镜像</p>
 * @method string getImageRepoAddress() 获取<p>镜像地址</p>
 * @method void setImageRepoAddress(string $ImageRepoAddress) 设置<p>镜像地址</p>
 */
class TimedScanTaskPreviewInfo extends AbstractModel
{
    /**
     * @var integer <p>预览数据id</p>
     */
    public $Id;

    /**
     * @var string <p>镜像id</p>
     */
    public $ImageId;

    /**
     * @var string <p>镜像名</p>
     */
    public $ImageName;

    /**
     * @var string <p>镜像tag</p>
     */
    public $ImageTag;

    /**
     * @var string <p>镜像仓库类型</p>
     */
    public $RegistryType;

    /**
     * @var string <p>定时任务所属账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>定时任务所属账号uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>定时任务所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var boolean <p>是否最新镜像</p>
     */
    public $IsLatestImage;

    /**
     * @var string <p>镜像地址</p>
     */
    public $ImageRepoAddress;

    /**
     * @param integer $Id <p>预览数据id</p>
     * @param string $ImageId <p>镜像id</p>
     * @param string $ImageName <p>镜像名</p>
     * @param string $ImageTag <p>镜像tag</p>
     * @param string $RegistryType <p>镜像仓库类型</p>
     * @param string $OwnerAccountName <p>定时任务所属账号名</p>
     * @param string $OwnerUin <p>定时任务所属账号uin</p>
     * @param integer $OwnerAppId <p>定时任务所属账号appid</p>
     * @param boolean $IsLatestImage <p>是否最新镜像</p>
     * @param string $ImageRepoAddress <p>镜像地址</p>
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

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("IsLatestImage",$param) and $param["IsLatestImage"] !== null) {
            $this->IsLatestImage = $param["IsLatestImage"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }
    }
}
