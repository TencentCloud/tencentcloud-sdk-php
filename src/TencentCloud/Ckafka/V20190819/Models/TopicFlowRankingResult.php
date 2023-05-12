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
 * topic 生产消息数据，消费者数据
 *
 * @method array getTopicFlow() 获取Topic 流量数组
 * @method void setTopicFlow(array $TopicFlow) 设置Topic 流量数组
 * @method array getConsumeSpeed() 获取消费者组消费速度排行速度
 * @method void setConsumeSpeed(array $ConsumeSpeed) 设置消费者组消费速度排行速度
 * @method array getTopicMessageHeap() 获取Topic 消息堆积/占用磁盘排行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicMessageHeap(array $TopicMessageHeap) 设置Topic 消息堆积/占用磁盘排行
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicFlowRankingResult extends AbstractModel
{
    /**
     * @var array Topic 流量数组
     */
    public $TopicFlow;

    /**
     * @var array 消费者组消费速度排行速度
     */
    public $ConsumeSpeed;

    /**
     * @var array Topic 消息堆积/占用磁盘排行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicMessageHeap;

    /**
     * @param array $TopicFlow Topic 流量数组
     * @param array $ConsumeSpeed 消费者组消费速度排行速度
     * @param array $TopicMessageHeap Topic 消息堆积/占用磁盘排行
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
        if (array_key_exists("TopicFlow",$param) and $param["TopicFlow"] !== null) {
            $this->TopicFlow = [];
            foreach ($param["TopicFlow"] as $key => $value){
                $obj = new TopicFlowRanking();
                $obj->deserialize($value);
                array_push($this->TopicFlow, $obj);
            }
        }

        if (array_key_exists("ConsumeSpeed",$param) and $param["ConsumeSpeed"] !== null) {
            $this->ConsumeSpeed = [];
            foreach ($param["ConsumeSpeed"] as $key => $value){
                $obj = new ConsumerGroupSpeed();
                $obj->deserialize($value);
                array_push($this->ConsumeSpeed, $obj);
            }
        }

        if (array_key_exists("TopicMessageHeap",$param) and $param["TopicMessageHeap"] !== null) {
            $this->TopicMessageHeap = [];
            foreach ($param["TopicMessageHeap"] as $key => $value){
                $obj = new TopicMessageHeapRanking();
                $obj->deserialize($value);
                array_push($this->TopicMessageHeap, $obj);
            }
        }
    }
}
