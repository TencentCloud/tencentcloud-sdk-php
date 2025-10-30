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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageTrace请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method string getTopic() 获取主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
 * @method void setTopic(string $Topic) 设置主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
 * @method string getMsgId() 获取消息 ID，从 [DescribeMessageList](https://cloud.tencent.com/document/api/1493/114593) 接口返回的 [MessageItem](https://cloud.tencent.com/document/api/1493/96031#MessageItem) 或业务日志中获得。
 * @method void setMsgId(string $MsgId) 设置消息 ID，从 [DescribeMessageList](https://cloud.tencent.com/document/api/1493/114593) 接口返回的 [MessageItem](https://cloud.tencent.com/document/api/1493/96031#MessageItem) 或业务日志中获得。
 * @method boolean getQueryDeadLetterMessage() 获取是否是死信消息，默认为false
 * @method void setQueryDeadLetterMessage(boolean $QueryDeadLetterMessage) 设置是否是死信消息，默认为false
 * @method boolean getQueryDelayMessage() 获取是否是延时消息，默认为false
 * @method void setQueryDelayMessage(boolean $QueryDelayMessage) 设置是否是延时消息，默认为false
 */
class DescribeMessageTraceRequest extends AbstractModel
{
    /**
     * @var string 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
     */
    public $Topic;

    /**
     * @var string 消息 ID，从 [DescribeMessageList](https://cloud.tencent.com/document/api/1493/114593) 接口返回的 [MessageItem](https://cloud.tencent.com/document/api/1493/96031#MessageItem) 或业务日志中获得。
     */
    public $MsgId;

    /**
     * @var boolean 是否是死信消息，默认为false
     */
    public $QueryDeadLetterMessage;

    /**
     * @var boolean 是否是延时消息，默认为false
     */
    public $QueryDelayMessage;

    /**
     * @param string $InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     * @param string $Topic 主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
     * @param string $MsgId 消息 ID，从 [DescribeMessageList](https://cloud.tencent.com/document/api/1493/114593) 接口返回的 [MessageItem](https://cloud.tencent.com/document/api/1493/96031#MessageItem) 或业务日志中获得。
     * @param boolean $QueryDeadLetterMessage 是否是死信消息，默认为false
     * @param boolean $QueryDelayMessage 是否是延时消息，默认为false
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("QueryDeadLetterMessage",$param) and $param["QueryDeadLetterMessage"] !== null) {
            $this->QueryDeadLetterMessage = $param["QueryDeadLetterMessage"];
        }

        if (array_key_exists("QueryDelayMessage",$param) and $param["QueryDelayMessage"] !== null) {
            $this->QueryDelayMessage = $param["QueryDelayMessage"];
        }
    }
}
