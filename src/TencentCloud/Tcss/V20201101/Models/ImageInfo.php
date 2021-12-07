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
 * 基本镜像信息
 *
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageTag() 获取镜像tag
 * @method void setImageTag(string $ImageTag) 设置镜像tag
 * @method string getForce() 获取强制扫描
 * @method void setForce(string $Force) 设置强制扫描
 * @method string getImageDigest() 获取镜像id
 * @method void setImageDigest(string $ImageDigest) 设置镜像id
 * @method string getRegistryType() 获取仓库类型
 * @method void setRegistryType(string $RegistryType) 设置仓库类型
 * @method string getImageRepoAddress() 获取镜像仓库地址
 * @method void setImageRepoAddress(string $ImageRepoAddress) 设置镜像仓库地址
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像tag
     */
    public $ImageTag;

    /**
     * @var string 强制扫描
     */
    public $Force;

    /**
     * @var string 镜像id
     */
    public $ImageDigest;

    /**
     * @var string 仓库类型
     */
    public $RegistryType;

    /**
     * @var string 镜像仓库地址
     */
    public $ImageRepoAddress;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @param string $InstanceName 实例名称
     * @param string $Namespace 命名空间
     * @param string $ImageName 镜像名称
     * @param string $ImageTag 镜像tag
     * @param string $Force 强制扫描
     * @param string $ImageDigest 镜像id
     * @param string $RegistryType 仓库类型
     * @param string $ImageRepoAddress 镜像仓库地址
     * @param string $InstanceId 实例id
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }

        if (array_key_exists("ImageDigest",$param) and $param["ImageDigest"] !== null) {
            $this->ImageDigest = $param["ImageDigest"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
