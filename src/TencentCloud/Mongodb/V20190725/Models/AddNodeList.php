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
 * 修改实例节点详情。
 *
 * @method string getRole() 获取需要新增的节点角色。
- SECONDARY：Mongod 节点。
- READONLY：只读节点。
- MONGOS：Mongos 节点。
 * @method void setRole(string $Role) 设置需要新增的节点角色。
- SECONDARY：Mongod 节点。
- READONLY：只读节点。
- MONGOS：Mongos 节点。
 * @method string getZone() 获取节点所对应的可用区。当前支持的可用区，请参见[地域和可用区](https://cloud.tencent.com/document/product/240/3637)。
- 单可用区，所有节点在同一可用区。
- 多可用区：当前标准规格是三可用区分布，主从节点不在同一可用区，需注意配置新增节点对应的可用区，且新增后必须满足任意2个可用区节点数大于第3个可用区原则。
 * @method void setZone(string $Zone) 设置节点所对应的可用区。当前支持的可用区，请参见[地域和可用区](https://cloud.tencent.com/document/product/240/3637)。
- 单可用区，所有节点在同一可用区。
- 多可用区：当前标准规格是三可用区分布，主从节点不在同一可用区，需注意配置新增节点对应的可用区，且新增后必须满足任意2个可用区节点数大于第3个可用区原则。
 */
class AddNodeList extends AbstractModel
{
    /**
     * @var string 需要新增的节点角色。
- SECONDARY：Mongod 节点。
- READONLY：只读节点。
- MONGOS：Mongos 节点。
     */
    public $Role;

    /**
     * @var string 节点所对应的可用区。当前支持的可用区，请参见[地域和可用区](https://cloud.tencent.com/document/product/240/3637)。
- 单可用区，所有节点在同一可用区。
- 多可用区：当前标准规格是三可用区分布，主从节点不在同一可用区，需注意配置新增节点对应的可用区，且新增后必须满足任意2个可用区节点数大于第3个可用区原则。
     */
    public $Zone;

    /**
     * @param string $Role 需要新增的节点角色。
- SECONDARY：Mongod 节点。
- READONLY：只读节点。
- MONGOS：Mongos 节点。
     * @param string $Zone 节点所对应的可用区。当前支持的可用区，请参见[地域和可用区](https://cloud.tencent.com/document/product/240/3637)。
- 单可用区，所有节点在同一可用区。
- 多可用区：当前标准规格是三可用区分布，主从节点不在同一可用区，需注意配置新增节点对应的可用区，且新增后必须满足任意2个可用区节点数大于第3个可用区原则。
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
