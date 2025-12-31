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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像卷挂载源配置
 *
 * @method string getReference() 获取镜像地址
 * @method void setReference(string $Reference) 设置镜像地址
 * @method string getImageRegistryType() 获取镜像仓库类型：`enterprise`、`personal`。
 * @method void setImageRegistryType(string $ImageRegistryType) 设置镜像仓库类型：`enterprise`、`personal`。
 * @method string getSubPath() 获取镜像内部的路径
 * @method void setSubPath(string $SubPath) 设置镜像内部的路径
 * @method string getDigest() 获取镜像 Digest，请求时无需传入
 * @method void setDigest(string $Digest) 设置镜像 Digest，请求时无需传入
 */
class ImageStorageSource extends AbstractModel
{
    /**
     * @var string 镜像地址
     */
    public $Reference;

    /**
     * @var string 镜像仓库类型：`enterprise`、`personal`。
     */
    public $ImageRegistryType;

    /**
     * @var string 镜像内部的路径
     */
    public $SubPath;

    /**
     * @var string 镜像 Digest，请求时无需传入
     */
    public $Digest;

    /**
     * @param string $Reference 镜像地址
     * @param string $ImageRegistryType 镜像仓库类型：`enterprise`、`personal`。
     * @param string $SubPath 镜像内部的路径
     * @param string $Digest 镜像 Digest，请求时无需传入
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
        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("ImageRegistryType",$param) and $param["ImageRegistryType"] !== null) {
            $this->ImageRegistryType = $param["ImageRegistryType"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }

        if (array_key_exists("Digest",$param) and $param["Digest"] !== null) {
            $this->Digest = $param["Digest"];
        }
    }
}
