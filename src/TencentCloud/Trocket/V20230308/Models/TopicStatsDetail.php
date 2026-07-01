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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主题队列级别的消费详情
 *
 * @method string getBrokerName() 获取<p>Broker节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerName(string $BrokerName) 设置<p>Broker节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueueId() 获取<p>队列编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueId(integer $QueueId) 设置<p>队列编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBrokerOffset() 获取<p>生产消息位点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerOffset(integer $BrokerOffset) 设置<p>生产消息位点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCommitOffset() 获取<p>最新消费位点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommitOffset(integer $CommitOffset) 设置<p>最新消费位点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMessageCount() 获取<p>堆积总数</p><p>单位：条</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageCount(integer $MessageCount) 设置<p>堆积总数</p><p>单位：条</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastUpdateTimestamp() 获取<p>最后消费时间</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTimestamp(integer $LastUpdateTimestamp) 设置<p>最后消费时间</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicStatsDetail extends AbstractModel
{
    /**
     * @var string <p>Broker节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerName;

    /**
     * @var integer <p>队列编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueId;

    /**
     * @var integer <p>生产消息位点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerOffset;

    /**
     * @var integer <p>最新消费位点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommitOffset;

    /**
     * @var integer <p>堆积总数</p><p>单位：条</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageCount;

    /**
     * @var integer <p>最后消费时间</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTimestamp;

    /**
     * @param string $BrokerName <p>Broker节点名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueueId <p>队列编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BrokerOffset <p>生产消息位点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CommitOffset <p>最新消费位点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MessageCount <p>堆积总数</p><p>单位：条</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastUpdateTimestamp <p>最后消费时间</p><p>单位：毫秒</p>
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

        if (array_key_exists("BrokerOffset",$param) and $param["BrokerOffset"] !== null) {
            $this->BrokerOffset = $param["BrokerOffset"];
        }

        if (array_key_exists("CommitOffset",$param) and $param["CommitOffset"] !== null) {
            $this->CommitOffset = $param["CommitOffset"];
        }

        if (array_key_exists("MessageCount",$param) and $param["MessageCount"] !== null) {
            $this->MessageCount = $param["MessageCount"];
        }

        if (array_key_exists("LastUpdateTimestamp",$param) and $param["LastUpdateTimestamp"] !== null) {
            $this->LastUpdateTimestamp = $param["LastUpdateTimestamp"];
        }
    }
}
