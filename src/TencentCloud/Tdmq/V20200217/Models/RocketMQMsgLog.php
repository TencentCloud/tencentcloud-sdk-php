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
 * rocketmq消息日志
 *
 * @method string getMsgId() 获取消息id
 * @method void setMsgId(string $MsgId) 设置消息id
 * @method string getMsgTag() 获取消息tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgTag(string $MsgTag) 设置消息tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgKey() 获取消息key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgKey(string $MsgKey) 设置消息key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProducerAddr() 获取客户端地址
 * @method void setProducerAddr(string $ProducerAddr) 设置客户端地址
 * @method string getProduceTime() 获取消息发送时间
 * @method void setProduceTime(string $ProduceTime) 设置消息发送时间
 * @method string getPulsarMsgId() 获取pulsar消息id
 * @method void setPulsarMsgId(string $PulsarMsgId) 设置pulsar消息id
 * @method integer getDeadLetterResendTimes() 获取死信重发次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadLetterResendTimes(integer $DeadLetterResendTimes) 设置死信重发次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResendSuccessCount() 获取死信重发成功次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResendSuccessCount(integer $ResendSuccessCount) 设置死信重发成功次数
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQMsgLog extends AbstractModel
{
    /**
     * @var string 消息id
     */
    public $MsgId;

    /**
     * @var string 消息tag
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgTag;

    /**
     * @var string 消息key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgKey;

    /**
     * @var string 客户端地址
     */
    public $ProducerAddr;

    /**
     * @var string 消息发送时间
     */
    public $ProduceTime;

    /**
     * @var string pulsar消息id
     */
    public $PulsarMsgId;

    /**
     * @var integer 死信重发次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadLetterResendTimes;

    /**
     * @var integer 死信重发成功次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResendSuccessCount;

    /**
     * @param string $MsgId 消息id
     * @param string $MsgTag 消息tag
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgKey 消息key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProducerAddr 客户端地址
     * @param string $ProduceTime 消息发送时间
     * @param string $PulsarMsgId pulsar消息id
     * @param integer $DeadLetterResendTimes 死信重发次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResendSuccessCount 死信重发成功次数
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
        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("MsgTag",$param) and $param["MsgTag"] !== null) {
            $this->MsgTag = $param["MsgTag"];
        }

        if (array_key_exists("MsgKey",$param) and $param["MsgKey"] !== null) {
            $this->MsgKey = $param["MsgKey"];
        }

        if (array_key_exists("ProducerAddr",$param) and $param["ProducerAddr"] !== null) {
            $this->ProducerAddr = $param["ProducerAddr"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("PulsarMsgId",$param) and $param["PulsarMsgId"] !== null) {
            $this->PulsarMsgId = $param["PulsarMsgId"];
        }

        if (array_key_exists("DeadLetterResendTimes",$param) and $param["DeadLetterResendTimes"] !== null) {
            $this->DeadLetterResendTimes = $param["DeadLetterResendTimes"];
        }

        if (array_key_exists("ResendSuccessCount",$param) and $param["ResendSuccessCount"] !== null) {
            $this->ResendSuccessCount = $param["ResendSuccessCount"];
        }
    }
}
