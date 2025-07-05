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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息记录
 *
 * @method string getMsgId() 获取消息ID
 * @method void setMsgId(string $MsgId) 设置消息ID
 * @method string getTags() 获取消息tag
 * @method void setTags(string $Tags) 设置消息tag
 * @method string getKeys() 获取消息key
 * @method void setKeys(string $Keys) 设置消息key
 * @method string getProducerAddr() 获取客户端地址	
 * @method void setProducerAddr(string $ProducerAddr) 设置客户端地址	
 * @method string getProduceTime() 获取消息发送时间，格式 日期时间：YYYY-MM-DD hh:mm:ss
 * @method void setProduceTime(string $ProduceTime) 设置消息发送时间，格式 日期时间：YYYY-MM-DD hh:mm:ss
 * @method integer getDeadLetterResendTimes() 获取死信重发次数	
 * @method void setDeadLetterResendTimes(integer $DeadLetterResendTimes) 设置死信重发次数	
 * @method integer getDeadLetterResendSuccessTimes() 获取死信重发成功次数
 * @method void setDeadLetterResendSuccessTimes(integer $DeadLetterResendSuccessTimes) 设置死信重发成功次数
 * @method string getSubTopic() 获取子topic
 * @method void setSubTopic(string $SubTopic) 设置子topic
 * @method string getQos() 获取消息质量等级
0：至多一次
1：至少一次
2：精确一次
 * @method void setQos(string $Qos) 设置消息质量等级
0：至多一次
1：至少一次
2：精确一次
 */
class MQTTMessageItem extends AbstractModel
{
    /**
     * @var string 消息ID
     */
    public $MsgId;

    /**
     * @var string 消息tag
     */
    public $Tags;

    /**
     * @var string 消息key
     */
    public $Keys;

    /**
     * @var string 客户端地址	
     */
    public $ProducerAddr;

    /**
     * @var string 消息发送时间，格式 日期时间：YYYY-MM-DD hh:mm:ss
     */
    public $ProduceTime;

    /**
     * @var integer 死信重发次数	
     * @deprecated
     */
    public $DeadLetterResendTimes;

    /**
     * @var integer 死信重发成功次数
     * @deprecated
     */
    public $DeadLetterResendSuccessTimes;

    /**
     * @var string 子topic
     * @deprecated
     */
    public $SubTopic;

    /**
     * @var string 消息质量等级
0：至多一次
1：至少一次
2：精确一次
     */
    public $Qos;

    /**
     * @param string $MsgId 消息ID
     * @param string $Tags 消息tag
     * @param string $Keys 消息key
     * @param string $ProducerAddr 客户端地址	
     * @param string $ProduceTime 消息发送时间，格式 日期时间：YYYY-MM-DD hh:mm:ss
     * @param integer $DeadLetterResendTimes 死信重发次数	
     * @param integer $DeadLetterResendSuccessTimes 死信重发成功次数
     * @param string $SubTopic 子topic
     * @param string $Qos 消息质量等级
0：至多一次
1：至少一次
2：精确一次
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

        if (array_key_exists("SubTopic",$param) and $param["SubTopic"] !== null) {
            $this->SubTopic = $param["SubTopic"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }
    }
}
