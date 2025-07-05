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
 * 集群版的 RO 节点配置。
 *
 * @method string getIsRandomZone() 获取是否分布在随机可用区。传入YES表示随机可用区。否则使用Zone指定的可用区。
 * @method void setIsRandomZone(string $IsRandomZone) 设置是否分布在随机可用区。传入YES表示随机可用区。否则使用Zone指定的可用区。
 * @method string getZone() 获取指定该节点分布在哪个可用区。
 * @method void setZone(string $Zone) 设置指定该节点分布在哪个可用区。
 * @method string getNodeId() 获取升级集群版实例时，如果要调整只读节点可用区，需要指定节点id。
 * @method void setNodeId(string $NodeId) 设置升级集群版实例时，如果要调整只读节点可用区，需要指定节点id。
 */
class ReadonlyNode extends AbstractModel
{
    /**
     * @var string 是否分布在随机可用区。传入YES表示随机可用区。否则使用Zone指定的可用区。
     */
    public $IsRandomZone;

    /**
     * @var string 指定该节点分布在哪个可用区。
     */
    public $Zone;

    /**
     * @var string 升级集群版实例时，如果要调整只读节点可用区，需要指定节点id。
     */
    public $NodeId;

    /**
     * @param string $IsRandomZone 是否分布在随机可用区。传入YES表示随机可用区。否则使用Zone指定的可用区。
     * @param string $Zone 指定该节点分布在哪个可用区。
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
        if (array_key_exists("IsRandomZone",$param) and $param["IsRandomZone"] !== null) {
            $this->IsRandomZone = $param["IsRandomZone"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }
    }
}
