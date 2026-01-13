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
 * CreatePreCacheImageTask请求参数结构体
 *
 * @method string getImage() 获取镜像地址
 * @method void setImage(string $Image) 设置镜像地址
 * @method string getImageRegistryType() 获取镜像仓库类型：`enterprise`、`personal`。
 * @method void setImageRegistryType(string $ImageRegistryType) 设置镜像仓库类型：`enterprise`、`personal`。
 */
class CreatePreCacheImageTaskRequest extends AbstractModel
{
    /**
     * @var string 镜像地址
     */
    public $Image;

    /**
     * @var string 镜像仓库类型：`enterprise`、`personal`。
     */
    public $ImageRegistryType;

    /**
     * @param string $Image 镜像地址
     * @param string $ImageRegistryType 镜像仓库类型：`enterprise`、`personal`。
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("ImageRegistryType",$param) and $param["ImageRegistryType"] !== null) {
            $this->ImageRegistryType = $param["ImageRegistryType"];
        }
    }
}
