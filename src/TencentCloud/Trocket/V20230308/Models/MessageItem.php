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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息记录
 *
 * @method string getMsgId() 获取消息ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgId(string $MsgId) 设置消息ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTags() 获取消息tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(string $Tags) 设置消息tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeys() 获取消息key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeys(string $Keys) 设置消息key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProducerAddr() 获取客户端地址	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProducerAddr(string $ProducerAddr) 设置客户端地址	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProduceTime() 获取消息发送时间	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProduceTime(string $ProduceTime) 设置消息发送时间	
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeadLetterResendTimes() 获取死信重发次数	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadLetterResendTimes(integer $DeadLetterResendTimes) 设置死信重发次数	
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeadLetterResendSuccessTimes() 获取死信重发成功次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadLetterResendSuccessTimes(integer $DeadLetterResendSuccessTimes) 设置死信重发成功次数
注意：此字段可能返回 null，表示取不到有效值。
 */
class MessageItem extends AbstractModel
{
    /**
     * @var string 消息ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgId;

    /**
     * @var string 消息tag
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 消息key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keys;

    /**
     * @var string 客户端地址	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProducerAddr;

    /**
     * @var string 消息发送时间	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProduceTime;

    /**
     * @var integer 死信重发次数	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadLetterResendTimes;

    /**
     * @var integer 死信重发成功次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadLetterResendSuccessTimes;

    /**
     * @param string $MsgId 消息ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tags 消息tag
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Keys 消息key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProducerAddr 客户端地址	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProduceTime 消息发送时间	
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeadLetterResendTimes 死信重发次数	
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeadLetterResendSuccessTimes 死信重发成功次数
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("ProducerAddr",$param) and $param["ProducerAddr"] !== null) {
            $this->ProducerAddr = $param["ProducerAddr"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("DeadLetterResendTimes",$param) and $param["DeadLetterResendTimes"] !== null) {
            $this->DeadLetterResendTimes = $param["DeadLetterResendTimes"];
        }

        if (array_key_exists("DeadLetterResendSuccessTimes",$param) and $param["DeadLetterResendSuccessTimes"] !== null) {
            $this->DeadLetterResendSuccessTimes = $param["DeadLetterResendSuccessTimes"];
        }
    }
}
