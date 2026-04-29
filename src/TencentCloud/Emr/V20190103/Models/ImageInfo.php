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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像信息
 *
 * @method string getRegion() 获取镜像所属地域
 * @method void setRegion(string $Region) 设置镜像所属地域
 * @method string getRegistryId() 获取tcr实例Id
 * @method void setRegistryId(string $RegistryId) 设置tcr实例Id
 * @method string getDomainName() 获取域名
 * @method void setDomainName(string $DomainName) 设置域名
 * @method string getNamespaceName() 获取命名空间
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间
 * @method string getRepositoryName() 获取镜像仓库名称
 * @method void setRepositoryName(string $RepositoryName) 设置镜像仓库名称
 * @method string getImageVersion() 获取镜像版本
 * @method void setImageVersion(string $ImageVersion) 设置镜像版本
 * @method string getImagePullPolicy() 获取镜像拉取策略
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置镜像拉取策略
 * @method string getImage() 获取镜像地址
 * @method void setImage(string $Image) 设置镜像地址
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var string 镜像所属地域
     */
    public $Region;

    /**
     * @var string tcr实例Id
     */
    public $RegistryId;

    /**
     * @var string 域名
     */
    public $DomainName;

    /**
     * @var string 命名空间
     */
    public $NamespaceName;

    /**
     * @var string 镜像仓库名称
     */
    public $RepositoryName;

    /**
     * @var string 镜像版本
     */
    public $ImageVersion;

    /**
     * @var string 镜像拉取策略
     */
    public $ImagePullPolicy;

    /**
     * @var string 镜像地址
     */
    public $Image;

    /**
     * @param string $Region 镜像所属地域
     * @param string $RegistryId tcr实例Id
     * @param string $DomainName 域名
     * @param string $NamespaceName 命名空间
     * @param string $RepositoryName 镜像仓库名称
     * @param string $ImageVersion 镜像版本
     * @param string $ImagePullPolicy 镜像拉取策略
     * @param string $Image 镜像地址
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }
    }
}
