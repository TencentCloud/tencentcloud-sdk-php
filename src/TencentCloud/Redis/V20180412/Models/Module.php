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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redis 支持的扩展模块信息。
 *
 * @method string getName() 获取<p>Redis 支持的扩展模块，包括 Bloom、JSON、Search 和 TimeSeries，可以为 Redis 提供额外的功能支持。</p><ul><li>Bloom：指 RedisBloom 模块，可以高效地判断一个元素是否存在于集合中。</li><li>JSON：指 RedisJSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>Search：指 RediSearch 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li><li>TimeSeries：指 RedisTimeSeries 模块，专门用于处理时间序列数据，适合存储和查询时间相关的数据。</li><li>ValkeyBloom：指Valkey引擎的RedisBloom 模块，可以高效地判断一个元素是否存在于集合中。</li><li>ValkeyJSON：指Valkey引擎的RedisJSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>ValkeySearch：指Valkey引擎的RediSearch 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li></ul>
 * @method void setName(string $Name) 设置<p>Redis 支持的扩展模块，包括 Bloom、JSON、Search 和 TimeSeries，可以为 Redis 提供额外的功能支持。</p><ul><li>Bloom：指 RedisBloom 模块，可以高效地判断一个元素是否存在于集合中。</li><li>JSON：指 RedisJSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>Search：指 RediSearch 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li><li>TimeSeries：指 RedisTimeSeries 模块，专门用于处理时间序列数据，适合存储和查询时间相关的数据。</li><li>ValkeyBloom：指Valkey引擎的RedisBloom 模块，可以高效地判断一个元素是否存在于集合中。</li><li>ValkeyJSON：指Valkey引擎的RedisJSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>ValkeySearch：指Valkey引擎的RediSearch 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li></ul>
 * @method string getStatus() 获取<p>扩展模块的启用状态。</p><ul><li>ON：启用。</li><li>OFF：关闭。</li></ul>
 * @method void setStatus(string $Status) 设置<p>扩展模块的启用状态。</p><ul><li>ON：启用。</li><li>OFF：关闭。</li></ul>
 * @method boolean getIsSupport() 获取<p>实例是否支持参数 Name 对应的扩展模块。</p><ul><li>true：支持。</li><li>false：不支持。</li></ul>
 * @method void setIsSupport(boolean $IsSupport) 设置<p>实例是否支持参数 Name 对应的扩展模块。</p><ul><li>true：支持。</li><li>false：不支持。</li></ul>
 */
class Module extends AbstractModel
{
    /**
     * @var string <p>Redis 支持的扩展模块，包括 Bloom、JSON、Search 和 TimeSeries，可以为 Redis 提供额外的功能支持。</p><ul><li>Bloom：指 RedisBloom 模块，可以高效地判断一个元素是否存在于集合中。</li><li>JSON：指 RedisJSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>Search：指 RediSearch 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li><li>TimeSeries：指 RedisTimeSeries 模块，专门用于处理时间序列数据，适合存储和查询时间相关的数据。</li><li>ValkeyBloom：指Valkey引擎的RedisBloom 模块，可以高效地判断一个元素是否存在于集合中。</li><li>ValkeyJSON：指Valkey引擎的RedisJSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>ValkeySearch：指Valkey引擎的RediSearch 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li></ul>
     */
    public $Name;

    /**
     * @var string <p>扩展模块的启用状态。</p><ul><li>ON：启用。</li><li>OFF：关闭。</li></ul>
     */
    public $Status;

    /**
     * @var boolean <p>实例是否支持参数 Name 对应的扩展模块。</p><ul><li>true：支持。</li><li>false：不支持。</li></ul>
     */
    public $IsSupport;

    /**
     * @param string $Name <p>Redis 支持的扩展模块，包括 Bloom、JSON、Search 和 TimeSeries，可以为 Redis 提供额外的功能支持。</p><ul><li>Bloom：指 RedisBloom 模块，可以高效地判断一个元素是否存在于集合中。</li><li>JSON：指 RedisJSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>Search：指 RediSearch 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li><li>TimeSeries：指 RedisTimeSeries 模块，专门用于处理时间序列数据，适合存储和查询时间相关的数据。</li><li>ValkeyBloom：指Valkey引擎的RedisBloom 模块，可以高效地判断一个元素是否存在于集合中。</li><li>ValkeyJSON：指Valkey引擎的RedisJSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>ValkeySearch：指Valkey引擎的RediSearch 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li></ul>
     * @param string $Status <p>扩展模块的启用状态。</p><ul><li>ON：启用。</li><li>OFF：关闭。</li></ul>
     * @param boolean $IsSupport <p>实例是否支持参数 Name 对应的扩展模块。</p><ul><li>true：支持。</li><li>false：不支持。</li></ul>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsSupport",$param) and $param["IsSupport"] !== null) {
            $this->IsSupport = $param["IsSupport"];
        }
    }
}
