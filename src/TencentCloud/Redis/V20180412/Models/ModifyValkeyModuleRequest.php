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
 * ModifyValkeyModule请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method string getName() 获取<p>指定待修改的扩展模块。</p><p>枚举值：</p><ul><li>ValkeyBloom： 指 Bloom 模块，可以高效地判断一个元素是否存在于集合中</li><li>ValkeyJSON： 指 JSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>ValkeySearch： 指 Search 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li></ul>
 * @method void setName(string $Name) 设置<p>指定待修改的扩展模块。</p><p>枚举值：</p><ul><li>ValkeyBloom： 指 Bloom 模块，可以高效地判断一个元素是否存在于集合中</li><li>ValkeyJSON： 指 JSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>ValkeySearch： 指 Search 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li></ul>
 * @method string getStatus() 获取<p>设置扩展模块的启用状态。仅支持设置为 ON，启用扩展模块。</p>
 * @method void setStatus(string $Status) 设置<p>设置扩展模块的启用状态。仅支持设置为 ON，启用扩展模块。</p>
 */
class ModifyValkeyModuleRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>指定待修改的扩展模块。</p><p>枚举值：</p><ul><li>ValkeyBloom： 指 Bloom 模块，可以高效地判断一个元素是否存在于集合中</li><li>ValkeyJSON： 指 JSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>ValkeySearch： 指 Search 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li></ul>
     */
    public $Name;

    /**
     * @var string <p>设置扩展模块的启用状态。仅支持设置为 ON，启用扩展模块。</p>
     */
    public $Status;

    /**
     * @param string $InstanceId <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param string $Name <p>指定待修改的扩展模块。</p><p>枚举值：</p><ul><li>ValkeyBloom： 指 Bloom 模块，可以高效地判断一个元素是否存在于集合中</li><li>ValkeyJSON： 指 JSON 模块，允许 Redis 原生支持 JSON 数据格式，方便存储和操作 JSON 对象。</li><li>ValkeySearch： 指 Search 模块，提供全文搜索功能，可以对存储在 Redis 中的数据进行高效的搜索操作。</li></ul>
     * @param string $Status <p>设置扩展模块的启用状态。仅支持设置为 ON，启用扩展模块。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
