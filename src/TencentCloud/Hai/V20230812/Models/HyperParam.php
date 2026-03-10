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
 * 描述了服务的超参数配置
 *
 * @method HiCacheInfo getHiCache() 获取HiCache缓存
 * @method void setHiCache(HiCacheInfo $HiCache) 设置HiCache缓存
 */
class HyperParam extends AbstractModel
{
    /**
     * @var HiCacheInfo HiCache缓存
     */
    public $HiCache;

    /**
     * @param HiCacheInfo $HiCache HiCache缓存
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
        if (array_key_exists("HiCache",$param) and $param["HiCache"] !== null) {
            $this->HiCache = new HiCacheInfo();
            $this->HiCache->deserialize($param["HiCache"]);
        }
    }
}
