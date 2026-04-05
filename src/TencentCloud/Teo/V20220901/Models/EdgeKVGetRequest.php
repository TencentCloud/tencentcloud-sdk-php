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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EdgeKVGet请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getNamespace() 获取命名空间名称。可通过 DescribeEdgeKVNamespaces 接口获取站点下的命名空间列表。
 * @method void setNamespace(string $Namespace) 设置命名空间名称。可通过 DescribeEdgeKVNamespaces 接口获取站点下的命名空间列表。
 * @method array getKeys() 获取键名列表。数组长度上限为 20。每个键名不能为空，长度为 1-512 个字符，允许的字符为字母、数字、中划线和下划线。查询单个键时传入包含一个元素的数组。
 * @method void setKeys(array $Keys) 设置键名列表。数组长度上限为 20。每个键名不能为空，长度为 1-512 个字符，允许的字符为字母、数字、中划线和下划线。查询单个键时传入包含一个元素的数组。
 */
class EdgeKVGetRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 命名空间名称。可通过 DescribeEdgeKVNamespaces 接口获取站点下的命名空间列表。
     */
    public $Namespace;

    /**
     * @var array 键名列表。数组长度上限为 20。每个键名不能为空，长度为 1-512 个字符，允许的字符为字母、数字、中划线和下划线。查询单个键时传入包含一个元素的数组。
     */
    public $Keys;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $Namespace 命名空间名称。可通过 DescribeEdgeKVNamespaces 接口获取站点下的命名空间列表。
     * @param array $Keys 键名列表。数组长度上限为 20。每个键名不能为空，长度为 1-512 个字符，允许的字符为字母、数字、中划线和下划线。查询单个键时传入包含一个元素的数组。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }
    }
}
