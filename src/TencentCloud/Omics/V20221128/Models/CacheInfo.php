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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 缓存信息。
 *
 * @method integer getCacheClearDelay() 获取缓存清理时间(小时)。
 * @method void setCacheClearDelay(integer $CacheClearDelay) 设置缓存清理时间(小时)。
 * @method string getCacheClearTime() 获取缓存清理计划时间。
 * @method void setCacheClearTime(string $CacheClearTime) 设置缓存清理计划时间。
 * @method boolean getCacheCleared() 获取缓存是否已被清理。
 * @method void setCacheCleared(boolean $CacheCleared) 设置缓存是否已被清理。
 */
class CacheInfo extends AbstractModel
{
    /**
     * @var integer 缓存清理时间(小时)。
     */
    public $CacheClearDelay;

    /**
     * @var string 缓存清理计划时间。
     */
    public $CacheClearTime;

    /**
     * @var boolean 缓存是否已被清理。
     */
    public $CacheCleared;

    /**
     * @param integer $CacheClearDelay 缓存清理时间(小时)。
     * @param string $CacheClearTime 缓存清理计划时间。
     * @param boolean $CacheCleared 缓存是否已被清理。
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
        if (array_key_exists("CacheClearDelay",$param) and $param["CacheClearDelay"] !== null) {
            $this->CacheClearDelay = $param["CacheClearDelay"];
        }

        if (array_key_exists("CacheClearTime",$param) and $param["CacheClearTime"] !== null) {
            $this->CacheClearTime = $param["CacheClearTime"];
        }

        if (array_key_exists("CacheCleared",$param) and $param["CacheCleared"] !== null) {
            $this->CacheCleared = $param["CacheCleared"];
        }
    }
}
