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
 * HTTPService 路由扩展字段
 *
 * @method HTTPServiceHeadersHandler getHeadersHandler() 获取<p>添加请求头列表</p>
 * @method void setHeadersHandler(HTTPServiceHeadersHandler $HeadersHandler) 设置<p>添加请求头列表</p>
 * @method HTTPServiceCacheSet getCache() 获取<p>HTTPService 缓存配置，包含Cache 节点缓存 / MaxAge 浏览器缓存 / CacheKey 自定义缓存键</p>
 * @method void setCache(HTTPServiceCacheSet $Cache) 设置<p>HTTPService 缓存配置，包含Cache 节点缓存 / MaxAge 浏览器缓存 / CacheKey 自定义缓存键</p>
 */
class HTTPServiceExtension extends AbstractModel
{
    /**
     * @var HTTPServiceHeadersHandler <p>添加请求头列表</p>
     */
    public $HeadersHandler;

    /**
     * @var HTTPServiceCacheSet <p>HTTPService 缓存配置，包含Cache 节点缓存 / MaxAge 浏览器缓存 / CacheKey 自定义缓存键</p>
     */
    public $Cache;

    /**
     * @param HTTPServiceHeadersHandler $HeadersHandler <p>添加请求头列表</p>
     * @param HTTPServiceCacheSet $Cache <p>HTTPService 缓存配置，包含Cache 节点缓存 / MaxAge 浏览器缓存 / CacheKey 自定义缓存键</p>
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
        if (array_key_exists("HeadersHandler",$param) and $param["HeadersHandler"] !== null) {
            $this->HeadersHandler = new HTTPServiceHeadersHandler();
            $this->HeadersHandler->deserialize($param["HeadersHandler"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new HTTPServiceCacheSet();
            $this->Cache->deserialize($param["Cache"]);
        }
    }
}
