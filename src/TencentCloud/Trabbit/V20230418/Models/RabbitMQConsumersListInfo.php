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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 队列消费者列表信息
 *
 * @method string getClientIp() 获取客户端Ip
 * @method void setClientIp(string $ClientIp) 设置客户端Ip
 * @method string getConsumerTag() 获取消费者Tag
 * @method void setConsumerTag(string $ConsumerTag) 设置消费者Tag
 * @method string getQueueName() 获取消费目标队列
 * @method void setQueueName(string $QueueName) 设置消费目标队列
 * @method boolean getAckRequired() 获取是否需要消费者手动 ack
 * @method void setAckRequired(boolean $AckRequired) 设置是否需要消费者手动 ack
 * @method integer getPrefetchCount() 获取消费者 qos 值
 * @method void setPrefetchCount(integer $PrefetchCount) 设置消费者 qos 值
 * @method string getActive() 获取消费者状态
 * @method void setActive(string $Active) 设置消费者状态
 * @method string getLastDeliveredTime() 获取最后一次投递消息时间
 * @method void setLastDeliveredTime(string $LastDeliveredTime) 设置最后一次投递消息时间
 * @method integer getUnAckMsgCount() 获取消费者未确认消息数
 * @method void setUnAckMsgCount(integer $UnAckMsgCount) 设置消费者未确认消息数
 * @method string getChannelName() 获取consumer 所属的 channel 
 * @method void setChannelName(string $ChannelName) 设置consumer 所属的 channel 
 */
class RabbitMQConsumersListInfo extends AbstractModel
{
    /**
     * @var string 客户端Ip
     */
    public $ClientIp;

    /**
     * @var string 消费者Tag
     */
    public $ConsumerTag;

    /**
     * @var string 消费目标队列
     */
    public $QueueName;

    /**
     * @var boolean 是否需要消费者手动 ack
     */
    public $AckRequired;

    /**
     * @var integer 消费者 qos 值
     */
    public $PrefetchCount;

    /**
     * @var string 消费者状态
     */
    public $Active;

    /**
     * @var string 最后一次投递消息时间
     */
    public $LastDeliveredTime;

    /**
     * @var integer 消费者未确认消息数
     */
    public $UnAckMsgCount;

    /**
     * @var string consumer 所属的 channel 
     */
    public $ChannelName;

    /**
     * @param string $ClientIp 客户端Ip
     * @param string $ConsumerTag 消费者Tag
     * @param string $QueueName 消费目标队列
     * @param boolean $AckRequired 是否需要消费者手动 ack
     * @param integer $PrefetchCount 消费者 qos 值
     * @param string $Active 消费者状态
     * @param string $LastDeliveredTime 最后一次投递消息时间
     * @param integer $UnAckMsgCount 消费者未确认消息数
     * @param string $ChannelName consumer 所属的 channel 
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ConsumerTag",$param) and $param["ConsumerTag"] !== null) {
            $this->ConsumerTag = $param["ConsumerTag"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("AckRequired",$param) and $param["AckRequired"] !== null) {
            $this->AckRequired = $param["AckRequired"];
        }

        if (array_key_exists("PrefetchCount",$param) and $param["PrefetchCount"] !== null) {
            $this->PrefetchCount = $param["PrefetchCount"];
        }

        if (array_key_exists("Active",$param) and $param["Active"] !== null) {
            $this->Active = $param["Active"];
        }

        if (array_key_exists("LastDeliveredTime",$param) and $param["LastDeliveredTime"] !== null) {
            $this->LastDeliveredTime = $param["LastDeliveredTime"];
        }

        if (array_key_exists("UnAckMsgCount",$param) and $param["UnAckMsgCount"] !== null) {
            $this->UnAckMsgCount = $param["UnAckMsgCount"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }
    }
}
