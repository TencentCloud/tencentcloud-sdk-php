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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库实例 URI 形式的连接串访问地址示例。
 *
 * @method string getURLType() 获取指 URI 类别，包括：，
- CLUSTER_ALL：指通过该 URI 连接库实例的主节点，可读写。
- CLUSTER_READ_READONLY：指通过该 URI 连接实例只读节点。
- CLUSTER_READ_SECONDARY：指通过该 URI 连接实例从节点。
- CLUSTER_READ_SECONDARY_AND_READONLY：指通过该 URI 连接实例只读从节点。
- CLUSTER_PRIMARY_AND_SECONDARY：指通过该 URI 连接实例 主节点与从节点。
- MONGOS_ALL：指通过该  URI 连接每个 Mongos 节点，可读写。
- MONGOS_READ_READONLY：指通过该 URI 连接 Mongos 的只读节点。
- MONGOS_READ_SECONDARY：指通过该 URI 连接 Mongos 的从节点。
- MONGOS_READ_PRIMARY_AND_SECONDARY：指通过该URI 连接 Mongos 的主节点与从节点。
- MONGOS_READ_SECONDARY_AND_READONLY：指通过该URI 连接 Mongos 的从节点与只读节点。
 * @method void setURLType(string $URLType) 设置指 URI 类别，包括：，
- CLUSTER_ALL：指通过该 URI 连接库实例的主节点，可读写。
- CLUSTER_READ_READONLY：指通过该 URI 连接实例只读节点。
- CLUSTER_READ_SECONDARY：指通过该 URI 连接实例从节点。
- CLUSTER_READ_SECONDARY_AND_READONLY：指通过该 URI 连接实例只读从节点。
- CLUSTER_PRIMARY_AND_SECONDARY：指通过该 URI 连接实例 主节点与从节点。
- MONGOS_ALL：指通过该  URI 连接每个 Mongos 节点，可读写。
- MONGOS_READ_READONLY：指通过该 URI 连接 Mongos 的只读节点。
- MONGOS_READ_SECONDARY：指通过该 URI 连接 Mongos 的从节点。
- MONGOS_READ_PRIMARY_AND_SECONDARY：指通过该URI 连接 Mongos 的主节点与从节点。
- MONGOS_READ_SECONDARY_AND_READONLY：指通过该URI 连接 Mongos 的从节点与只读节点。
 * @method string getAddress() 获取实例 URI 形式的连接串访问地址示例。
 * @method void setAddress(string $Address) 设置实例 URI 形式的连接串访问地址示例。
 */
class DbURL extends AbstractModel
{
    /**
     * @var string 指 URI 类别，包括：，
- CLUSTER_ALL：指通过该 URI 连接库实例的主节点，可读写。
- CLUSTER_READ_READONLY：指通过该 URI 连接实例只读节点。
- CLUSTER_READ_SECONDARY：指通过该 URI 连接实例从节点。
- CLUSTER_READ_SECONDARY_AND_READONLY：指通过该 URI 连接实例只读从节点。
- CLUSTER_PRIMARY_AND_SECONDARY：指通过该 URI 连接实例 主节点与从节点。
- MONGOS_ALL：指通过该  URI 连接每个 Mongos 节点，可读写。
- MONGOS_READ_READONLY：指通过该 URI 连接 Mongos 的只读节点。
- MONGOS_READ_SECONDARY：指通过该 URI 连接 Mongos 的从节点。
- MONGOS_READ_PRIMARY_AND_SECONDARY：指通过该URI 连接 Mongos 的主节点与从节点。
- MONGOS_READ_SECONDARY_AND_READONLY：指通过该URI 连接 Mongos 的从节点与只读节点。
     */
    public $URLType;

    /**
     * @var string 实例 URI 形式的连接串访问地址示例。
     */
    public $Address;

    /**
     * @param string $URLType 指 URI 类别，包括：，
- CLUSTER_ALL：指通过该 URI 连接库实例的主节点，可读写。
- CLUSTER_READ_READONLY：指通过该 URI 连接实例只读节点。
- CLUSTER_READ_SECONDARY：指通过该 URI 连接实例从节点。
- CLUSTER_READ_SECONDARY_AND_READONLY：指通过该 URI 连接实例只读从节点。
- CLUSTER_PRIMARY_AND_SECONDARY：指通过该 URI 连接实例 主节点与从节点。
- MONGOS_ALL：指通过该  URI 连接每个 Mongos 节点，可读写。
- MONGOS_READ_READONLY：指通过该 URI 连接 Mongos 的只读节点。
- MONGOS_READ_SECONDARY：指通过该 URI 连接 Mongos 的从节点。
- MONGOS_READ_PRIMARY_AND_SECONDARY：指通过该URI 连接 Mongos 的主节点与从节点。
- MONGOS_READ_SECONDARY_AND_READONLY：指通过该URI 连接 Mongos 的从节点与只读节点。
     * @param string $Address 实例 URI 形式的连接串访问地址示例。
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
        if (array_key_exists("URLType",$param) and $param["URLType"] !== null) {
            $this->URLType = $param["URLType"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }
    }
}
