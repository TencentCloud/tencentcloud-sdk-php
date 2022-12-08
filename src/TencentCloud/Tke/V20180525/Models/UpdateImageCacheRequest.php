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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateImageCache请求参数结构体
 *
 * @method string getImageCacheId() 获取镜像缓存Id
 * @method void setImageCacheId(string $ImageCacheId) 设置镜像缓存Id
 * @method string getImageCacheName() 获取镜像缓存名称
 * @method void setImageCacheName(string $ImageCacheName) 设置镜像缓存名称
 * @method array getImageRegistryCredentials() 获取镜像仓库凭证数组
 * @method void setImageRegistryCredentials(array $ImageRegistryCredentials) 设置镜像仓库凭证数组
 * @method array getImages() 获取用于制作镜像缓存的容器镜像列表
 * @method void setImages(array $Images) 设置用于制作镜像缓存的容器镜像列表
 * @method integer getImageCacheSize() 获取镜像缓存的大小。默认为20 GiB。取值范围参考[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)中的高性能云盘类型的大小限制。
 * @method void setImageCacheSize(integer $ImageCacheSize) 设置镜像缓存的大小。默认为20 GiB。取值范围参考[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)中的高性能云盘类型的大小限制。
 * @method integer getRetentionDays() 获取镜像缓存保留时间天数，过期将会自动清理，默认为0，永不过期。
 * @method void setRetentionDays(integer $RetentionDays) 设置镜像缓存保留时间天数，过期将会自动清理，默认为0，永不过期。
 * @method array getSecurityGroupIds() 获取安全组Id
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组Id
 */
class UpdateImageCacheRequest extends AbstractModel
{
    /**
     * @var string 镜像缓存Id
     */
    public $ImageCacheId;

    /**
     * @var string 镜像缓存名称
     */
    public $ImageCacheName;

    /**
     * @var array 镜像仓库凭证数组
     */
    public $ImageRegistryCredentials;

    /**
     * @var array 用于制作镜像缓存的容器镜像列表
     */
    public $Images;

    /**
     * @var integer 镜像缓存的大小。默认为20 GiB。取值范围参考[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)中的高性能云盘类型的大小限制。
     */
    public $ImageCacheSize;

    /**
     * @var integer 镜像缓存保留时间天数，过期将会自动清理，默认为0，永不过期。
     */
    public $RetentionDays;

    /**
     * @var array 安全组Id
     */
    public $SecurityGroupIds;

    /**
     * @param string $ImageCacheId 镜像缓存Id
     * @param string $ImageCacheName 镜像缓存名称
     * @param array $ImageRegistryCredentials 镜像仓库凭证数组
     * @param array $Images 用于制作镜像缓存的容器镜像列表
     * @param integer $ImageCacheSize 镜像缓存的大小。默认为20 GiB。取值范围参考[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)中的高性能云盘类型的大小限制。
     * @param integer $RetentionDays 镜像缓存保留时间天数，过期将会自动清理，默认为0，永不过期。
     * @param array $SecurityGroupIds 安全组Id
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
        if (array_key_exists("ImageCacheId",$param) and $param["ImageCacheId"] !== null) {
            $this->ImageCacheId = $param["ImageCacheId"];
        }

        if (array_key_exists("ImageCacheName",$param) and $param["ImageCacheName"] !== null) {
            $this->ImageCacheName = $param["ImageCacheName"];
        }

        if (array_key_exists("ImageRegistryCredentials",$param) and $param["ImageRegistryCredentials"] !== null) {
            $this->ImageRegistryCredentials = [];
            foreach ($param["ImageRegistryCredentials"] as $key => $value){
                $obj = new ImageRegistryCredential();
                $obj->deserialize($value);
                array_push($this->ImageRegistryCredentials, $obj);
            }
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("ImageCacheSize",$param) and $param["ImageCacheSize"] !== null) {
            $this->ImageCacheSize = $param["ImageCacheSize"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
