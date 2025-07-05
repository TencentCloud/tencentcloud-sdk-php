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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消费详情
 *
 * @method string getTopicName() 获取主题名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置主题名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerName() 获取所属Broker
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerName(string $BrokerName) 设置所属Broker
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueueId() 获取队列编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueId(integer $QueueId) 设置队列编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerClientId() 获取消费者ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerClientId(string $ConsumerClientId) 设置消费者ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConsumerOffset() 获取消费位点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerOffset(integer $ConsumerOffset) 设置消费位点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBrokerOffset() 获取服务端位点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerOffset(integer $BrokerOffset) 设置服务端位点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiffTotal() 获取消息堆积条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiffTotal(integer $DiffTotal) 设置消息堆积条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastTimestamp() 获取最近消费时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTimestamp(integer $LastTimestamp) 设置最近消费时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumerStats extends AbstractModel
{
    /**
     * @var string 主题名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @var string 所属Broker
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerName;

    /**
     * @var integer 队列编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueId;

    /**
     * @var string 消费者ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerClientId;

    /**
     * @var integer 消费位点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerOffset;

    /**
     * @var integer 服务端位点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerOffset;

    /**
     * @var integer 消息堆积条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiffTotal;

    /**
     * @var integer 最近消费时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTimestamp;

    /**
     * @param string $TopicName 主题名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerName 所属Broker
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueueId 队列编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerClientId 消费者ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConsumerOffset 消费位点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BrokerOffset 服务端位点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiffTotal 消息堆积条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastTimestamp 最近消费时间
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("BrokerName",$param) and $param["BrokerName"] !== null) {
            $this->BrokerName = $param["BrokerName"];
        }

        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            $this->QueueId = $param["QueueId"];
        }

        if (array_key_exists("ConsumerClientId",$param) and $param["ConsumerClientId"] !== null) {
            $this->ConsumerClientId = $param["ConsumerClientId"];
        }

        if (array_key_exists("ConsumerOffset",$param) and $param["ConsumerOffset"] !== null) {
            $this->ConsumerOffset = $param["ConsumerOffset"];
        }

        if (array_key_exists("BrokerOffset",$param) and $param["BrokerOffset"] !== null) {
            $this->BrokerOffset = $param["BrokerOffset"];
        }

        if (array_key_exists("DiffTotal",$param) and $param["DiffTotal"] !== null) {
            $this->DiffTotal = $param["DiffTotal"];
        }

        if (array_key_exists("LastTimestamp",$param) and $param["LastTimestamp"] !== null) {
            $this->LastTimestamp = $param["LastTimestamp"];
        }
    }
}
