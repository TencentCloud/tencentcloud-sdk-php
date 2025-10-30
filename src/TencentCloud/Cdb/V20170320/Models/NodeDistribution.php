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
 * 独享集群CDB实例的节点分布情况
 *
 * @method string getNode() 获取主实例Master节点所在主机ID或者只读实例所在主机ID
 * @method void setNode(string $Node) 设置主实例Master节点所在主机ID或者只读实例所在主机ID
 * @method string getSlaveNodeOne() 获取主实例第一Slave节点所在主机ID
 * @method void setSlaveNodeOne(string $SlaveNodeOne) 设置主实例第一Slave节点所在主机ID
 * @method string getSlaveNodeTwo() 获取主实例第二Slave节点所在主机ID
 * @method void setSlaveNodeTwo(string $SlaveNodeTwo) 设置主实例第二Slave节点所在主机ID
 */
class NodeDistribution extends AbstractModel
{
    /**
     * @var string 主实例Master节点所在主机ID或者只读实例所在主机ID
     */
    public $Node;

    /**
     * @var string 主实例第一Slave节点所在主机ID
     */
    public $SlaveNodeOne;

    /**
     * @var string 主实例第二Slave节点所在主机ID
     */
    public $SlaveNodeTwo;

    /**
     * @param string $Node 主实例Master节点所在主机ID或者只读实例所在主机ID
     * @param string $SlaveNodeOne 主实例第一Slave节点所在主机ID
     * @param string $SlaveNodeTwo 主实例第二Slave节点所在主机ID
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
        if (array_key_exists("Node",$param) and $param["Node"] !== null) {
            $this->Node = $param["Node"];
        }

        if (array_key_exists("SlaveNodeOne",$param) and $param["SlaveNodeOne"] !== null) {
            $this->SlaveNodeOne = $param["SlaveNodeOne"];
        }

        if (array_key_exists("SlaveNodeTwo",$param) and $param["SlaveNodeTwo"] !== null) {
            $this->SlaveNodeTwo = $param["SlaveNodeTwo"];
        }
    }
}
