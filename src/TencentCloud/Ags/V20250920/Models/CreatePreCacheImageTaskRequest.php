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
 * @method string getImage() 获取<p>镜像地址</p>
 * @method void setImage(string $Image) 设置<p>镜像地址</p>
 * @method string getImageRegistryType() 获取<p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>、<code>custom</code></p><p>枚举值：</p><ul><li>enterprise： tcr 企业容器镜像服务</li><li>personal： ccr 个人容器镜像服务</li></ul>
 * @method void setImageRegistryType(string $ImageRegistryType) 设置<p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>、<code>custom</code></p><p>枚举值：</p><ul><li>enterprise： tcr 企业容器镜像服务</li><li>personal： ccr 个人容器镜像服务</li></ul>
 * @method integer getTimeoutMinutes() 获取<p>预热超时时长</p>
 * @method void setTimeoutMinutes(integer $TimeoutMinutes) 设置<p>预热超时时长</p>
 */
class CreatePreCacheImageTaskRequest extends AbstractModel
{
    /**
     * @var string <p>镜像地址</p>
     */
    public $Image;

    /**
     * @var string <p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>、<code>custom</code></p><p>枚举值：</p><ul><li>enterprise： tcr 企业容器镜像服务</li><li>personal： ccr 个人容器镜像服务</li></ul>
     */
    public $ImageRegistryType;

    /**
     * @var integer <p>预热超时时长</p>
     */
    public $TimeoutMinutes;

    /**
     * @param string $Image <p>镜像地址</p>
     * @param string $ImageRegistryType <p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>、<code>custom</code></p><p>枚举值：</p><ul><li>enterprise： tcr 企业容器镜像服务</li><li>personal： ccr 个人容器镜像服务</li></ul>
     * @param integer $TimeoutMinutes <p>预热超时时长</p>
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

        if (array_key_exists("TimeoutMinutes",$param) and $param["TimeoutMinutes"] !== null) {
            $this->TimeoutMinutes = $param["TimeoutMinutes"];
        }
    }
}
