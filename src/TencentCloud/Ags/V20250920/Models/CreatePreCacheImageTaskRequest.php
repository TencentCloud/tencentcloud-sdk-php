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
 * @method string getImage() 获取<p>镜像地址。仅支持 repository:tag、repository@sha256:&lt;64 位摘要&gt; 或 repository:tag@sha256:&lt;64 位摘要&gt;。</p>
 * @method void setImage(string $Image) 设置<p>镜像地址。仅支持 repository:tag、repository@sha256:&lt;64 位摘要&gt; 或 repository:tag@sha256:&lt;64 位摘要&gt;。</p>
 * @method string getImageRegistryType() 获取<p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>、<code>custom</code></p><p>枚举值：</p><ul><li>enterprise： tcr 企业容器镜像服务</li><li>personal： ccr 个人容器镜像服务</li></ul>
 * @method void setImageRegistryType(string $ImageRegistryType) 设置<p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>、<code>custom</code></p><p>枚举值：</p><ul><li>enterprise： tcr 企业容器镜像服务</li><li>personal： ccr 个人容器镜像服务</li></ul>
 * @method string getPreCacheType() 获取<p>镜像预热类型</p><p>枚举值：</p><ul><li>image： 镜像预热</li><li>image_volume： 镜像卷预热</li></ul><p>默认值：image</p>
 * @method void setPreCacheType(string $PreCacheType) 设置<p>镜像预热类型</p><p>枚举值：</p><ul><li>image： 镜像预热</li><li>image_volume： 镜像卷预热</li></ul><p>默认值：image</p>
 * @method string getIdleTTL() 获取<p>闲置清理时间</p><p>枚举值：</p><ul><li>inherit： 继承账号配置的自动清理策略</li><li>0： 永不自动清理</li><li>正整数加 m/h/d： 空闲相应时间后自动清理</li></ul><p>默认值：inherit</p>
 * @method void setIdleTTL(string $IdleTTL) 设置<p>闲置清理时间</p><p>枚举值：</p><ul><li>inherit： 继承账号配置的自动清理策略</li><li>0： 永不自动清理</li><li>正整数加 m/h/d： 空闲相应时间后自动清理</li></ul><p>默认值：inherit</p>
 */
class CreatePreCacheImageTaskRequest extends AbstractModel
{
    /**
     * @var string <p>镜像地址。仅支持 repository:tag、repository@sha256:&lt;64 位摘要&gt; 或 repository:tag@sha256:&lt;64 位摘要&gt;。</p>
     */
    public $Image;

    /**
     * @var string <p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>、<code>custom</code></p><p>枚举值：</p><ul><li>enterprise： tcr 企业容器镜像服务</li><li>personal： ccr 个人容器镜像服务</li></ul>
     */
    public $ImageRegistryType;

    /**
     * @var string <p>镜像预热类型</p><p>枚举值：</p><ul><li>image： 镜像预热</li><li>image_volume： 镜像卷预热</li></ul><p>默认值：image</p>
     */
    public $PreCacheType;

    /**
     * @var string <p>闲置清理时间</p><p>枚举值：</p><ul><li>inherit： 继承账号配置的自动清理策略</li><li>0： 永不自动清理</li><li>正整数加 m/h/d： 空闲相应时间后自动清理</li></ul><p>默认值：inherit</p>
     */
    public $IdleTTL;

    /**
     * @param string $Image <p>镜像地址。仅支持 repository:tag、repository@sha256:&lt;64 位摘要&gt; 或 repository:tag@sha256:&lt;64 位摘要&gt;。</p>
     * @param string $ImageRegistryType <p>镜像仓库类型：<code>enterprise</code>、<code>personal</code>、<code>custom</code></p><p>枚举值：</p><ul><li>enterprise： tcr 企业容器镜像服务</li><li>personal： ccr 个人容器镜像服务</li></ul>
     * @param string $PreCacheType <p>镜像预热类型</p><p>枚举值：</p><ul><li>image： 镜像预热</li><li>image_volume： 镜像卷预热</li></ul><p>默认值：image</p>
     * @param string $IdleTTL <p>闲置清理时间</p><p>枚举值：</p><ul><li>inherit： 继承账号配置的自动清理策略</li><li>0： 永不自动清理</li><li>正整数加 m/h/d： 空闲相应时间后自动清理</li></ul><p>默认值：inherit</p>
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

        if (array_key_exists("PreCacheType",$param) and $param["PreCacheType"] !== null) {
            $this->PreCacheType = $param["PreCacheType"];
        }

        if (array_key_exists("IdleTTL",$param) and $param["IdleTTL"] !== null) {
            $this->IdleTTL = $param["IdleTTL"];
        }
    }
}
