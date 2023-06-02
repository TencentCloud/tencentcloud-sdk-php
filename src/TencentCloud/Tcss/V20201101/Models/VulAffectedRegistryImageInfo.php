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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞影响的仓库镜像列表
 *
 * @method string getImageID() 获取镜像ID
 * @method void setImageID(string $ImageID) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageTag() 获取镜像版本
 * @method void setImageTag(string $ImageTag) 设置镜像版本
 * @method string getNamespace() 获取镜像命名空间
 * @method void setNamespace(string $Namespace) 设置镜像命名空间
 * @method string getImageRepoAddress() 获取镜像地址
 * @method void setImageRepoAddress(string $ImageRepoAddress) 设置镜像地址
 * @method array getComponentList() 获取组件列表
 * @method void setComponentList(array $ComponentList) 设置组件列表
 * @method boolean getIsLatestImage() 获取是否为镜像的最新版本
 * @method void setIsLatestImage(boolean $IsLatestImage) 设置是否为镜像的最新版本
 * @method integer getImageAssetId() 获取内部镜像资产ID
 * @method void setImageAssetId(integer $ImageAssetId) 设置内部镜像资产ID
 */
class VulAffectedRegistryImageInfo extends AbstractModel
{
    /**
     * @var string 镜像ID
     */
    public $ImageID;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像版本
     */
    public $ImageTag;

    /**
     * @var string 镜像命名空间
     */
    public $Namespace;

    /**
     * @var string 镜像地址
     */
    public $ImageRepoAddress;

    /**
     * @var array 组件列表
     */
    public $ComponentList;

    /**
     * @var boolean 是否为镜像的最新版本
     */
    public $IsLatestImage;

    /**
     * @var integer 内部镜像资产ID
     */
    public $ImageAssetId;

    /**
     * @param string $ImageID 镜像ID
     * @param string $ImageName 镜像名称
     * @param string $ImageTag 镜像版本
     * @param string $Namespace 镜像命名空间
     * @param string $ImageRepoAddress 镜像地址
     * @param array $ComponentList 组件列表
     * @param boolean $IsLatestImage 是否为镜像的最新版本
     * @param integer $ImageAssetId 内部镜像资产ID
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

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }

        if (array_key_exists("ComponentList",$param) and $param["ComponentList"] !== null) {
            $this->ComponentList = [];
            foreach ($param["ComponentList"] as $key => $value){
                $obj = new VulAffectedImageComponentInfo();
                $obj->deserialize($value);
                array_push($this->ComponentList, $obj);
            }
        }

        if (array_key_exists("IsLatestImage",$param) and $param["IsLatestImage"] !== null) {
            $this->IsLatestImage = $param["IsLatestImage"];
        }

        if (array_key_exists("ImageAssetId",$param) and $param["ImageAssetId"] !== null) {
            $this->ImageAssetId = $param["ImageAssetId"];
        }
    }
}
