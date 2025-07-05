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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群版 RW 节点的配置。
 *
 * @method string getZone() 获取RW 节点所在可用区。
 * @method void setZone(string $Zone) 设置RW 节点所在可用区。
 * @method string getNodeId() 获取升级集群版实例时，如果要调整只读节点可用区，需要指定节点id。
 * @method void setNodeId(string $NodeId) 设置升级集群版实例时，如果要调整只读节点可用区，需要指定节点id。
 */
class ReadWriteNode extends AbstractModel
{
    /**
     * @var string RW 节点所在可用区。
     */
    public $Zone;

    /**
     * @var string 升级集群版实例时，如果要调整只读节点可用区，需要指定节点id。
     */
    public $NodeId;

    /**
     * @param string $Zone RW 节点所在可用区。
     * @param string $NodeId 升级集群版实例时，如果要调整只读节点可用区，需要指定节点id。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }
    }
}
