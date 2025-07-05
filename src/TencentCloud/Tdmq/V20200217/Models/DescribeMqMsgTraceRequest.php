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
 * DescribeMqMsgTrace请求参数结构体
 *
 * @method string getProtocol() 获取pulsar、rocketmq、rabbitmq、cmq
 * @method void setProtocol(string $Protocol) 设置pulsar、rocketmq、rabbitmq、cmq
 * @method string getMsgId() 获取消息id
 * @method void setMsgId(string $MsgId) 设置消息id
 * @method string getClusterId() 获取集群id，cmq为空
 * @method void setClusterId(string $ClusterId) 设置集群id，cmq为空
 * @method string getEnvironmentId() 获取命名空间，cmq为空
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间，cmq为空
 * @method string getTopicName() 获取主题，cmq为空，rocketmq查询死信时值为groupId
 * @method void setTopicName(string $TopicName) 设置主题，cmq为空，rocketmq查询死信时值为groupId
 * @method string getQueueName() 获取cmq必填，其他协议填空
 * @method void setQueueName(string $QueueName) 设置cmq必填，其他协议填空
 * @method string getGroupName() 获取消费组、订阅
 * @method void setGroupName(string $GroupName) 设置消费组、订阅
 * @method boolean getQueryDlqMsg() 获取查询死信时该值为true，只对Rocketmq有效
 * @method void setQueryDlqMsg(boolean $QueryDlqMsg) 设置查询死信时该值为true，只对Rocketmq有效
 * @method string getProduceTime() 获取生产时间
 * @method void setProduceTime(string $ProduceTime) 设置生产时间
 */
class DescribeMqMsgTraceRequest extends AbstractModel
{
    /**
     * @var string pulsar、rocketmq、rabbitmq、cmq
     */
    public $Protocol;

    /**
     * @var string 消息id
     */
    public $MsgId;

    /**
     * @var string 集群id，cmq为空
     */
    public $ClusterId;

    /**
     * @var string 命名空间，cmq为空
     */
    public $EnvironmentId;

    /**
     * @var string 主题，cmq为空，rocketmq查询死信时值为groupId
     */
    public $TopicName;

    /**
     * @var string cmq必填，其他协议填空
     */
    public $QueueName;

    /**
     * @var string 消费组、订阅
     */
    public $GroupName;

    /**
     * @var boolean 查询死信时该值为true，只对Rocketmq有效
     */
    public $QueryDlqMsg;

    /**
     * @var string 生产时间
     */
    public $ProduceTime;

    /**
     * @param string $Protocol pulsar、rocketmq、rabbitmq、cmq
     * @param string $MsgId 消息id
     * @param string $ClusterId 集群id，cmq为空
     * @param string $EnvironmentId 命名空间，cmq为空
     * @param string $TopicName 主题，cmq为空，rocketmq查询死信时值为groupId
     * @param string $QueueName cmq必填，其他协议填空
     * @param string $GroupName 消费组、订阅
     * @param boolean $QueryDlqMsg 查询死信时该值为true，只对Rocketmq有效
     * @param string $ProduceTime 生产时间
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("QueryDlqMsg",$param) and $param["QueryDlqMsg"] !== null) {
            $this->QueryDlqMsg = $param["QueryDlqMsg"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }
    }
}
