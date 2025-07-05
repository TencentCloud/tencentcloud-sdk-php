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
 * 主题消费进度
 *
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method string getTopicType() 获取主题类型，枚举值如下：

- UNSPECIFIED：未指定
- NORMAL：普通消息
- FIFO：顺序消息
- DELAY：延时消息
- TRANSACTION：事务消息
 * @method void setTopicType(string $TopicType) 设置主题类型，枚举值如下：

- UNSPECIFIED：未指定
- NORMAL：普通消息
- FIFO：顺序消息
- DELAY：延时消息
- TRANSACTION：事务消息
 * @method integer getQueueNum() 获取单节点主题队列数量
 * @method void setQueueNum(integer $QueueNum) 设置单节点主题队列数量
 * @method integer getConsumerLag() 获取消费堆积
 * @method void setConsumerLag(integer $ConsumerLag) 设置消费堆积
 * @method string getSubString() 获取订阅规则，`*`表示订阅全部TAG
 * @method void setSubString(string $SubString) 设置订阅规则，`*`表示订阅全部TAG
 * @method integer getLastUpdateTime() 获取最后消费进度更新时间，**Unix时间戳（毫秒）**
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置最后消费进度更新时间，**Unix时间戳（毫秒）**
 */
class TopicConsumeStats extends AbstractModel
{
    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var string 主题类型，枚举值如下：

- UNSPECIFIED：未指定
- NORMAL：普通消息
- FIFO：顺序消息
- DELAY：延时消息
- TRANSACTION：事务消息
     */
    public $TopicType;

    /**
     * @var integer 单节点主题队列数量
     */
    public $QueueNum;

    /**
     * @var integer 消费堆积
     */
    public $ConsumerLag;

    /**
     * @var string 订阅规则，`*`表示订阅全部TAG
     */
    public $SubString;

    /**
     * @var integer 最后消费进度更新时间，**Unix时间戳（毫秒）**
     */
    public $LastUpdateTime;

    /**
     * @param string $Topic 主题名称
     * @param string $TopicType 主题类型，枚举值如下：

- UNSPECIFIED：未指定
- NORMAL：普通消息
- FIFO：顺序消息
- DELAY：延时消息
- TRANSACTION：事务消息
     * @param integer $QueueNum 单节点主题队列数量
     * @param integer $ConsumerLag 消费堆积
     * @param string $SubString 订阅规则，`*`表示订阅全部TAG
     * @param integer $LastUpdateTime 最后消费进度更新时间，**Unix时间戳（毫秒）**
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

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("QueueNum",$param) and $param["QueueNum"] !== null) {
            $this->QueueNum = $param["QueueNum"];
        }

        if (array_key_exists("ConsumerLag",$param) and $param["ConsumerLag"] !== null) {
            $this->ConsumerLag = $param["ConsumerLag"];
        }

        if (array_key_exists("SubString",$param) and $param["SubString"] !== null) {
            $this->SubString = $param["SubString"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }
    }
}
