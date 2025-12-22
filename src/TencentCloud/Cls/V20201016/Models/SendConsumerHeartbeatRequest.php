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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendConsumerHeartbeat请求参数结构体
 *
 * @method string getConsumerGroup() 获取上报心跳的消费组标识
 * @method void setConsumerGroup(string $ConsumerGroup) 设置上报心跳的消费组标识
 * @method string getConsumer() 获取上报心跳的消费者名称
（字母数字下划线，不允许数字、_开头， 长度小于256）
 * @method void setConsumer(string $Consumer) 设置上报心跳的消费者名称
（字母数字下划线，不允许数字、_开头， 长度小于256）
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method array getTopicPartitionsInfo() 获取topic 分区信息
 * @method void setTopicPartitionsInfo(array $TopicPartitionsInfo) 设置topic 分区信息
 */
class SendConsumerHeartbeatRequest extends AbstractModel
{
    /**
     * @var string 上报心跳的消费组标识
     */
    public $ConsumerGroup;

    /**
     * @var string 上报心跳的消费者名称
（字母数字下划线，不允许数字、_开头， 长度小于256）
     */
    public $Consumer;

    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var array topic 分区信息
     */
    public $TopicPartitionsInfo;

    /**
     * @param string $ConsumerGroup 上报心跳的消费组标识
     * @param string $Consumer 上报心跳的消费者名称
（字母数字下划线，不允许数字、_开头， 长度小于256）
     * @param string $LogsetId 日志集ID
     * @param array $TopicPartitionsInfo topic 分区信息
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
        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("Consumer",$param) and $param["Consumer"] !== null) {
            $this->Consumer = $param["Consumer"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicPartitionsInfo",$param) and $param["TopicPartitionsInfo"] !== null) {
            $this->TopicPartitionsInfo = [];
            foreach ($param["TopicPartitionsInfo"] as $key => $value){
                $obj = new TopicPartitionInfo();
                $obj->deserialize($value);
                array_push($this->TopicPartitionsInfo, $obj);
            }
        }
    }
}
