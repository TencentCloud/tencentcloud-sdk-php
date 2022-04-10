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
 * AMQP 队列信息
 *
 * @method string getName() 获取Queue名称
 * @method void setName(string $Name) 设置Queue名称
 * @method string getRemark() 获取说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDestBindedNum() 获取被绑定数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestBindedNum(integer $DestBindedNum) 设置被绑定数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间，以毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，以毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取创建时间，以毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置创建时间，以毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOnlineConsumerNum() 获取在线消费者数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnlineConsumerNum(integer $OnlineConsumerNum) 设置在线消费者数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTps() 获取每秒钟的事务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTps(integer $Tps) 设置每秒钟的事务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccumulativeMsgNum() 获取消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccumulativeMsgNum(integer $AccumulativeMsgNum) 设置消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoDelete() 获取是否自动删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoDelete(boolean $AutoDelete) 设置是否自动删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeadLetterExchange() 获取死信交换机
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadLetterExchange(string $DeadLetterExchange) 设置死信交换机
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeadLetterRoutingKey() 获取死信交换机路由键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadLetterRoutingKey(string $DeadLetterRoutingKey) 设置死信交换机路由键
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicName() 获取Queue对应的Topic名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置Queue对应的Topic名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AMQPQueueDetail extends AbstractModel
{
    /**
     * @var string Queue名称
     */
    public $Name;

    /**
     * @var string 说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 被绑定数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestBindedNum;

    /**
     * @var integer 创建时间，以毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 创建时间，以毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 在线消费者数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnlineConsumerNum;

    /**
     * @var integer 每秒钟的事务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tps;

    /**
     * @var integer 消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccumulativeMsgNum;

    /**
     * @var boolean 是否自动删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoDelete;

    /**
     * @var string 死信交换机
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadLetterExchange;

    /**
     * @var string 死信交换机路由键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadLetterRoutingKey;

    /**
     * @var string Queue对应的Topic名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @param string $Name Queue名称
     * @param string $Remark 说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DestBindedNum 被绑定数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间，以毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 创建时间，以毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OnlineConsumerNum 在线消费者数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Tps 每秒钟的事务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccumulativeMsgNum 消息堆积数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoDelete 是否自动删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeadLetterExchange 死信交换机
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeadLetterRoutingKey 死信交换机路由键
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicName Queue对应的Topic名称
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DestBindedNum",$param) and $param["DestBindedNum"] !== null) {
            $this->DestBindedNum = $param["DestBindedNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OnlineConsumerNum",$param) and $param["OnlineConsumerNum"] !== null) {
            $this->OnlineConsumerNum = $param["OnlineConsumerNum"];
        }

        if (array_key_exists("Tps",$param) and $param["Tps"] !== null) {
            $this->Tps = $param["Tps"];
        }

        if (array_key_exists("AccumulativeMsgNum",$param) and $param["AccumulativeMsgNum"] !== null) {
            $this->AccumulativeMsgNum = $param["AccumulativeMsgNum"];
        }

        if (array_key_exists("AutoDelete",$param) and $param["AutoDelete"] !== null) {
            $this->AutoDelete = $param["AutoDelete"];
        }

        if (array_key_exists("DeadLetterExchange",$param) and $param["DeadLetterExchange"] !== null) {
            $this->DeadLetterExchange = $param["DeadLetterExchange"];
        }

        if (array_key_exists("DeadLetterRoutingKey",$param) and $param["DeadLetterRoutingKey"] !== null) {
            $this->DeadLetterRoutingKey = $param["DeadLetterRoutingKey"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
