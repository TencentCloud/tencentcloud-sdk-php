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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTPService缓存动作（Type + 具体子字段的标签联合，Type 与被设置的子字段必须一一对应）
 *
 * @method string getType() 获取<p>HTTPService 缓存动作类型</p><p>枚举值：</p><ul><li>Cache： 节点缓存 + 浏览器缓存统一动作（节点秒数 CacheTime、浏览器秒数 MaxAgeTime）</li><li>CacheKey： 仅开启EO边缘加速通道下发</li></ul>
 * @method void setType(string $Type) 设置<p>HTTPService 缓存动作类型</p><p>枚举值：</p><ul><li>Cache： 节点缓存 + 浏览器缓存统一动作（节点秒数 CacheTime、浏览器秒数 MaxAgeTime）</li><li>CacheKey： 仅开启EO边缘加速通道下发</li></ul>
 * @method HTTPServiceCacheParams getCache() 获取<p>节点缓存配置。Type=Cache 时必填</p>
 * @method void setCache(HTTPServiceCacheParams $Cache) 设置<p>节点缓存配置。Type=Cache 时必填</p>
 * @method HTTPServiceCacheKeyParams getCacheKey() 获取<p>自定义缓存键。Type=CacheKey 时必填</p>
 * @method void setCacheKey(HTTPServiceCacheKeyParams $CacheKey) 设置<p>自定义缓存键。Type=CacheKey 时必填</p>
 */
class HTTPServiceCacheAction extends AbstractModel
{
    /**
     * @var string <p>HTTPService 缓存动作类型</p><p>枚举值：</p><ul><li>Cache： 节点缓存 + 浏览器缓存统一动作（节点秒数 CacheTime、浏览器秒数 MaxAgeTime）</li><li>CacheKey： 仅开启EO边缘加速通道下发</li></ul>
     */
    public $Type;

    /**
     * @var HTTPServiceCacheParams <p>节点缓存配置。Type=Cache 时必填</p>
     */
    public $Cache;

    /**
     * @var HTTPServiceCacheKeyParams <p>自定义缓存键。Type=CacheKey 时必填</p>
     */
    public $CacheKey;

    /**
     * @param string $Type <p>HTTPService 缓存动作类型</p><p>枚举值：</p><ul><li>Cache： 节点缓存 + 浏览器缓存统一动作（节点秒数 CacheTime、浏览器秒数 MaxAgeTime）</li><li>CacheKey： 仅开启EO边缘加速通道下发</li></ul>
     * @param HTTPServiceCacheParams $Cache <p>节点缓存配置。Type=Cache 时必填</p>
     * @param HTTPServiceCacheKeyParams $CacheKey <p>自定义缓存键。Type=CacheKey 时必填</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new HTTPServiceCacheParams();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new HTTPServiceCacheKeyParams();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }
    }
}
