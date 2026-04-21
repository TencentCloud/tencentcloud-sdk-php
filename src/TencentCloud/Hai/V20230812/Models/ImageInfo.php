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
 * @method string getImageRegistryUrl() 获取<p>tcr仓库地址</p>
 * @method void setImageRegistryUrl(string $ImageRegistryUrl) 设置<p>tcr仓库地址</p>
 * @method string getImageRegistryUsername() 获取<p>仓库用户名</p>
 * @method void setImageRegistryUsername(string $ImageRegistryUsername) 设置<p>仓库用户名</p>
 * @method string getImageRegistryPassword() 获取<p>仓库密码</p>
 * @method void setImageRegistryPassword(string $ImageRegistryPassword) 设置<p>仓库密码</p>
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var string <p>tcr仓库地址</p>
     */
    public $ImageRegistryUrl;

    /**
     * @var string <p>仓库用户名</p>
     */
    public $ImageRegistryUsername;

    /**
     * @var string <p>仓库密码</p>
     */
    public $ImageRegistryPassword;

    /**
     * @param string $ImageRegistryUrl <p>tcr仓库地址</p>
     * @param string $ImageRegistryUsername <p>仓库用户名</p>
     * @param string $ImageRegistryPassword <p>仓库密码</p>
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

        if (array_key_exists("ImageRegistryUsername",$param) and $param["ImageRegistryUsername"] !== null) {
            $this->ImageRegistryUsername = $param["ImageRegistryUsername"];
        }

        if (array_key_exists("ImageRegistryPassword",$param) and $param["ImageRegistryPassword"] !== null) {
            $this->ImageRegistryPassword = $param["ImageRegistryPassword"];
        }
    }
}
