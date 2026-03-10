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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像相关配置
 *
 * @method string getImageRegistryUrl() 获取tcr仓库地址
 * @method void setImageRegistryUrl(string $ImageRegistryUrl) 设置tcr仓库地址
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var string tcr仓库地址
     */
    public $ImageRegistryUrl;

    /**
     * @param string $ImageRegistryUrl tcr仓库地址
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
        if (array_key_exists("ImageRegistryUrl",$param) and $param["ImageRegistryUrl"] !== null) {
            $this->ImageRegistryUrl = $param["ImageRegistryUrl"];
        }
    }
}
