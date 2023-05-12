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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * topic消息堆积、占用磁盘排行
 *
 * @method string getTopicId() 获取主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicName() 获取主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionNum() 获取分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionNum(integer $PartitionNum) 设置分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicaNum() 获取副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicaNum(integer $ReplicaNum) 设置副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicTraffic() 获取Topic 流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicTraffic(string $TopicTraffic) 设置Topic 流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMessageHeap() 获取topic消息堆积/占用磁盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageHeap(integer $MessageHeap) 设置topic消息堆积/占用磁盘
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicMessageHeapRanking extends AbstractModel
{
    /**
     * @var string 主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string 主题名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @var integer 分区数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionNum;

    /**
     * @var integer 副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicaNum;

    /**
     * @var string Topic 流量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicTraffic;

    /**
     * @var integer topic消息堆积/占用磁盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageHeap;

    /**
     * @param string $TopicId 主题ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicName 主题名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionNum 分区数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplicaNum 副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicTraffic Topic 流量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MessageHeap topic消息堆积/占用磁盘
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("TopicTraffic",$param) and $param["TopicTraffic"] !== null) {
            $this->TopicTraffic = $param["TopicTraffic"];
        }

        if (array_key_exists("MessageHeap",$param) and $param["MessageHeap"] !== null) {
            $this->MessageHeap = $param["MessageHeap"];
        }
    }
}
