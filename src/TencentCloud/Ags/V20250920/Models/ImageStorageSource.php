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
 * @method string getReference() 获取<p>镜像地址</p>
 * @method void setReference(string $Reference) 设置<p>镜像地址</p>
 * @method string getImageRegistryType() 获取<p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>。</p>
 * @method void setImageRegistryType(string $ImageRegistryType) 设置<p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>。</p>
 * @method string getSubPath() 获取<p>镜像内部的路径</p>
 * @method void setSubPath(string $SubPath) 设置<p>镜像内部的路径</p>
 * @method string getDigest() 获取<p>镜像 Digest，请求时无需传入</p>
 * @method void setDigest(string $Digest) 设置<p>镜像 Digest，请求时无需传入</p>
 */
class ImageStorageSource extends AbstractModel
{
    /**
     * @var string <p>镜像地址</p>
     */
    public $Reference;

    /**
     * @var string <p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>。</p>
     */
    public $ImageRegistryType;

    /**
     * @var string <p>镜像内部的路径</p>
     */
    public $SubPath;

    /**
     * @var string <p>镜像 Digest，请求时无需传入</p>
     */
    public $Digest;

    /**
     * @param string $Reference <p>镜像地址</p>
     * @param string $ImageRegistryType <p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>。</p>
     * @param string $SubPath <p>镜像内部的路径</p>
     * @param string $Digest <p>镜像 Digest，请求时无需传入</p>
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
