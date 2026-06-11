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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拓扑图节点状态
 *
 * @method TopologyNodeStats getServiceStats() 获取应用节点状态
 * @method void setServiceStats(TopologyNodeStats $ServiceStats) 设置应用节点状态
 * @method TopologyNodeStats getDatabaseStats() 获取数据库节点状态
 * @method void setDatabaseStats(TopologyNodeStats $DatabaseStats) 设置数据库节点状态
 * @method TopologyNodeStats getMQStats() 获取消息队列节点状态
 * @method void setMQStats(TopologyNodeStats $MQStats) 设置消息队列节点状态
 * @method integer getTotalNodes() 获取节点总数
 * @method void setTotalNodes(integer $TotalNodes) 设置节点总数
 * @method integer getHealthyNodes() 获取健康节点总数
 * @method void setHealthyNodes(integer $HealthyNodes) 设置健康节点总数
 * @method integer getWarningNodes() 获取警告节点总数
 * @method void setWarningNodes(integer $WarningNodes) 设置警告节点总数
 * @method integer getErrorNodes() 获取错误节点总数
 * @method void setErrorNodes(integer $ErrorNodes) 设置错误节点总数
 */
class OverviewStats extends AbstractModel
{
    /**
     * @var TopologyNodeStats 应用节点状态
     */
    public $ServiceStats;

    /**
     * @var TopologyNodeStats 数据库节点状态
     */
    public $DatabaseStats;

    /**
     * @var TopologyNodeStats 消息队列节点状态
     */
    public $MQStats;

    /**
     * @var integer 节点总数
     */
    public $TotalNodes;

    /**
     * @var integer 健康节点总数
     */
    public $HealthyNodes;

    /**
     * @var integer 警告节点总数
     */
    public $WarningNodes;

    /**
     * @var integer 错误节点总数
     */
    public $ErrorNodes;

    /**
     * @param TopologyNodeStats $ServiceStats 应用节点状态
     * @param TopologyNodeStats $DatabaseStats 数据库节点状态
     * @param TopologyNodeStats $MQStats 消息队列节点状态
     * @param integer $TotalNodes 节点总数
     * @param integer $HealthyNodes 健康节点总数
     * @param integer $WarningNodes 警告节点总数
     * @param integer $ErrorNodes 错误节点总数
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
        if (array_key_exists("ServiceStats",$param) and $param["ServiceStats"] !== null) {
            $this->ServiceStats = new TopologyNodeStats();
            $this->ServiceStats->deserialize($param["ServiceStats"]);
        }

        if (array_key_exists("DatabaseStats",$param) and $param["DatabaseStats"] !== null) {
            $this->DatabaseStats = new TopologyNodeStats();
            $this->DatabaseStats->deserialize($param["DatabaseStats"]);
        }

        if (array_key_exists("MQStats",$param) and $param["MQStats"] !== null) {
            $this->MQStats = new TopologyNodeStats();
            $this->MQStats->deserialize($param["MQStats"]);
        }

        if (array_key_exists("TotalNodes",$param) and $param["TotalNodes"] !== null) {
            $this->TotalNodes = $param["TotalNodes"];
        }

        if (array_key_exists("HealthyNodes",$param) and $param["HealthyNodes"] !== null) {
            $this->HealthyNodes = $param["HealthyNodes"];
        }

        if (array_key_exists("WarningNodes",$param) and $param["WarningNodes"] !== null) {
            $this->WarningNodes = $param["WarningNodes"];
        }

        if (array_key_exists("ErrorNodes",$param) and $param["ErrorNodes"] !== null) {
            $this->ErrorNodes = $param["ErrorNodes"];
        }
    }
}
