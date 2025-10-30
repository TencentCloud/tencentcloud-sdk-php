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
 * Topic状态
 *
 * @method string getBrokerName() 获取所属Broker节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerName(string $BrokerName) 设置所属Broker节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueueId() 获取队列编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueId(integer $QueueId) 设置队列编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinOffset() 获取最小位点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinOffset(integer $MinOffset) 设置最小位点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxOffset() 获取最大位点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxOffset(integer $MaxOffset) 设置最大位点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMessageCount() 获取消息条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageCount(integer $MessageCount) 设置消息条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastUpdateTimestamp() 获取消息最后写入时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTimestamp(integer $LastUpdateTimestamp) 设置消息最后写入时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicStats extends AbstractModel
{
    /**
     * @var string 所属Broker节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerName;

    /**
     * @var integer 队列编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueId;

    /**
     * @var integer 最小位点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinOffset;

    /**
     * @var integer 最大位点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxOffset;

    /**
     * @var integer 消息条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageCount;

    /**
     * @var integer 消息最后写入时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTimestamp;

    /**
     * @param string $BrokerName 所属Broker节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueueId 队列编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinOffset 最小位点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxOffset 最大位点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MessageCount 消息条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastUpdateTimestamp 消息最后写入时间
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
        if (array_key_exists("BrokerName",$param) and $param["BrokerName"] !== null) {
            $this->BrokerName = $param["BrokerName"];
        }

        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            $this->QueueId = $param["QueueId"];
        }

        if (array_key_exists("MinOffset",$param) and $param["MinOffset"] !== null) {
            $this->MinOffset = $param["MinOffset"];
        }

        if (array_key_exists("MaxOffset",$param) and $param["MaxOffset"] !== null) {
            $this->MaxOffset = $param["MaxOffset"];
        }

        if (array_key_exists("MessageCount",$param) and $param["MessageCount"] !== null) {
            $this->MessageCount = $param["MessageCount"];
        }

        if (array_key_exists("LastUpdateTimestamp",$param) and $param["LastUpdateTimestamp"] !== null) {
            $this->LastUpdateTimestamp = $param["LastUpdateTimestamp"];
        }
    }
}
