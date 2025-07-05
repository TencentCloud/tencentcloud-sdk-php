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
 * 消费者详情中的主题信息
 *
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method string getType() 获取主题类型，Normal表示普通，GlobalOrder表示全局顺序，PartitionedOrder表示局部顺序，Transaction表示事务，Retry表示重试，DeadLetter表示死信
 * @method void setType(string $Type) 设置主题类型，Normal表示普通，GlobalOrder表示全局顺序，PartitionedOrder表示局部顺序，Transaction表示事务，Retry表示重试，DeadLetter表示死信
 * @method integer getPartitionNum() 获取分区数
 * @method void setPartitionNum(integer $PartitionNum) 设置分区数
 * @method integer getAccumulative() 获取消息堆积数
 * @method void setAccumulative(integer $Accumulative) 设置消息堆积数
 * @method integer getLastConsumptionTime() 获取最后消费时间，以毫秒为单位
 * @method void setLastConsumptionTime(integer $LastConsumptionTime) 设置最后消费时间，以毫秒为单位
 * @method string getSubRule() 获取订阅规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubRule(string $SubRule) 设置订阅规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQConsumerTopic extends AbstractModel
{
    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var string 主题类型，Normal表示普通，GlobalOrder表示全局顺序，PartitionedOrder表示局部顺序，Transaction表示事务，Retry表示重试，DeadLetter表示死信
     */
    public $Type;

    /**
     * @var integer 分区数
     */
    public $PartitionNum;

    /**
     * @var integer 消息堆积数
     */
    public $Accumulative;

    /**
     * @var integer 最后消费时间，以毫秒为单位
     */
    public $LastConsumptionTime;

    /**
     * @var string 订阅规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubRule;

    /**
     * @param string $Topic 主题名称
     * @param string $Type 主题类型，Normal表示普通，GlobalOrder表示全局顺序，PartitionedOrder表示局部顺序，Transaction表示事务，Retry表示重试，DeadLetter表示死信
     * @param integer $PartitionNum 分区数
     * @param integer $Accumulative 消息堆积数
     * @param integer $LastConsumptionTime 最后消费时间，以毫秒为单位
     * @param string $SubRule 订阅规则
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("Accumulative",$param) and $param["Accumulative"] !== null) {
            $this->Accumulative = $param["Accumulative"];
        }

        if (array_key_exists("LastConsumptionTime",$param) and $param["LastConsumptionTime"] !== null) {
            $this->LastConsumptionTime = $param["LastConsumptionTime"];
        }

        if (array_key_exists("SubRule",$param) and $param["SubRule"] !== null) {
            $this->SubRule = $param["SubRule"];
        }
    }
}
