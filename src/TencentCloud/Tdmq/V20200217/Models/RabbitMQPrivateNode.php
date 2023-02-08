<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ节点信息
 *
 * @method string getNodeName() 获取节点名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置节点名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeStatus() 获取节点状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeStatus(string $NodeStatus) 设置节点状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCPUUsage() 获取CPU使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPUUsage(string $CPUUsage) 设置CPU使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取内存使用情况，单位MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置内存使用情况，单位MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskUsage() 获取磁盘使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskUsage(string $DiskUsage) 设置磁盘使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProcessNumber() 获取Rabbitmq的Erlang进程数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessNumber(integer $ProcessNumber) 设置Rabbitmq的Erlang进程数
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQPrivateNode extends AbstractModel
{
    /**
     * @var string 节点名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var string 节点状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeStatus;

    /**
     * @var string CPU使用率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPUUsage;

    /**
     * @var integer 内存使用情况，单位MB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var string 磁盘使用率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskUsage;

    /**
     * @var integer Rabbitmq的Erlang进程数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessNumber;

    /**
     * @param string $NodeName 节点名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeStatus 节点状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CPUUsage CPU使用率
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory 内存使用情况，单位MB
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskUsage 磁盘使用率
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProcessNumber Rabbitmq的Erlang进程数
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeStatus",$param) and $param["NodeStatus"] !== null) {
            $this->NodeStatus = $param["NodeStatus"];
        }

        if (array_key_exists("CPUUsage",$param) and $param["CPUUsage"] !== null) {
            $this->CPUUsage = $param["CPUUsage"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("ProcessNumber",$param) and $param["ProcessNumber"] !== null) {
            $this->ProcessNumber = $param["ProcessNumber"];
        }
    }
}
