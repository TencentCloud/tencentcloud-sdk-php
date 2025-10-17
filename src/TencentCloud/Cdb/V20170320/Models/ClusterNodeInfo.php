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
 * 云盘版实例节点信息
 *
 * @method string getNodeId() 获取节点id。
 * @method void setNodeId(string $NodeId) 设置节点id。
 * @method string getRole() 获取节点的角色。
 * @method void setRole(string $Role) 设置节点的角色。
 * @method string getZone() 获取节点所在可用区。
 * @method void setZone(string $Zone) 设置节点所在可用区。
 * @method integer getWeight() 获取节点的权重
 * @method void setWeight(integer $Weight) 设置节点的权重
 * @method string getStatus() 获取节点状态。
 * @method void setStatus(string $Status) 设置节点状态。
 */
class ClusterNodeInfo extends AbstractModel
{
    /**
     * @var string 节点id。
     */
    public $NodeId;

    /**
     * @var string 节点的角色。
     */
    public $Role;

    /**
     * @var string 节点所在可用区。
     */
    public $Zone;

    /**
     * @var integer 节点的权重
     */
    public $Weight;

    /**
     * @var string 节点状态。
     */
    public $Status;

    /**
     * @param string $NodeId 节点id。
     * @param string $Role 节点的角色。
     * @param string $Zone 节点所在可用区。
     * @param integer $Weight 节点的权重
     * @param string $Status 节点状态。
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
