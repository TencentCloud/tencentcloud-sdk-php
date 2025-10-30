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
 * MQTT消息
 *
 * @method string getMessageId() 获取消息id
 * @method void setMessageId(string $MessageId) 设置消息id
 * @method string getClientId() 获取消息发送的客户端Id
 * @method void setClientId(string $ClientId) 设置消息发送的客户端Id
 * @method string getQos() 获取消息服务质量等级
 * @method void setQos(string $Qos) 设置消息服务质量等级
 * @method integer getStoreTimestamp() 获取消息在服务端的存储时间，毫秒级时间戳
 * @method void setStoreTimestamp(integer $StoreTimestamp) 设置消息在服务端的存储时间，毫秒级时间戳
 * @method string getOriginTopic() 获取源topic
 * @method void setOriginTopic(string $OriginTopic) 设置源topic
 */
class MQTTMessage extends AbstractModel
{
    /**
     * @var string 消息id
     */
    public $MessageId;

    /**
     * @var string 消息发送的客户端Id
     */
    public $ClientId;

    /**
     * @var string 消息服务质量等级
     */
    public $Qos;

    /**
     * @var integer 消息在服务端的存储时间，毫秒级时间戳
     */
    public $StoreTimestamp;

    /**
     * @var string 源topic
     */
    public $OriginTopic;

    /**
     * @param string $MessageId 消息id
     * @param string $ClientId 消息发送的客户端Id
     * @param string $Qos 消息服务质量等级
     * @param integer $StoreTimestamp 消息在服务端的存储时间，毫秒级时间戳
     * @param string $OriginTopic 源topic
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
        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("StoreTimestamp",$param) and $param["StoreTimestamp"] !== null) {
            $this->StoreTimestamp = $param["StoreTimestamp"];
        }

        if (array_key_exists("OriginTopic",$param) and $param["OriginTopic"] !== null) {
            $this->OriginTopic = $param["OriginTopic"];
        }
    }
}
