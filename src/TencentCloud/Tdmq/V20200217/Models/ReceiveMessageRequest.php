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
 * ReceiveMessage请求参数结构体
 *
 * @method string getTopic() 获取接收消息的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，即：tenant/namespace/topic。默认使用的是：public/default
 * @method void setTopic(string $Topic) 设置接收消息的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，即：tenant/namespace/topic。默认使用的是：public/default
 * @method string getSubscriptionName() 获取订阅者的名字
 * @method void setSubscriptionName(string $SubscriptionName) 设置订阅者的名字
 * @method integer getReceiverQueueSize() 获取默认值为1000，consumer接收的消息会首先存储到receiverQueueSize这个队列中，用作调优接收消息的速率
 * @method void setReceiverQueueSize(integer $ReceiverQueueSize) 设置默认值为1000，consumer接收的消息会首先存储到receiverQueueSize这个队列中，用作调优接收消息的速率
 * @method string getSubInitialPosition() 获取默认值为：Earliest。用作判定consumer初始接收消息的位置，可选参数为：Earliest, Latest
 * @method void setSubInitialPosition(string $SubInitialPosition) 设置默认值为：Earliest。用作判定consumer初始接收消息的位置，可选参数为：Earliest, Latest
 * @method integer getMaxNumMessages() 获取用于设置BatchReceivePolicy，指在一次batch中最多接收多少条消息，默认是 0。即不开启BatchReceivePolicy
 * @method void setMaxNumMessages(integer $MaxNumMessages) 设置用于设置BatchReceivePolicy，指在一次batch中最多接收多少条消息，默认是 0。即不开启BatchReceivePolicy
 * @method integer getMaxNumBytes() 获取用于设置BatchReceivePolicy，指在一次batch中最多接收的消息体有多大，单位是 bytes。默认是 0，即不开启BatchReceivePolicy
 * @method void setMaxNumBytes(integer $MaxNumBytes) 设置用于设置BatchReceivePolicy，指在一次batch中最多接收的消息体有多大，单位是 bytes。默认是 0，即不开启BatchReceivePolicy
 * @method integer getTimeout() 获取用于设置BatchReceivePolicy，指在一次batch消息的接收z中最多等待的超时时间，单位是毫秒。默认是 0，即不开启BatchReceivePolicy
 * @method void setTimeout(integer $Timeout) 设置用于设置BatchReceivePolicy，指在一次batch消息的接收z中最多等待的超时时间，单位是毫秒。默认是 0，即不开启BatchReceivePolicy
 */
class ReceiveMessageRequest extends AbstractModel
{
    /**
     * @var string 接收消息的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，即：tenant/namespace/topic。默认使用的是：public/default
     */
    public $Topic;

    /**
     * @var string 订阅者的名字
     */
    public $SubscriptionName;

    /**
     * @var integer 默认值为1000，consumer接收的消息会首先存储到receiverQueueSize这个队列中，用作调优接收消息的速率
     */
    public $ReceiverQueueSize;

    /**
     * @var string 默认值为：Earliest。用作判定consumer初始接收消息的位置，可选参数为：Earliest, Latest
     */
    public $SubInitialPosition;

    /**
     * @var integer 用于设置BatchReceivePolicy，指在一次batch中最多接收多少条消息，默认是 0。即不开启BatchReceivePolicy
     */
    public $MaxNumMessages;

    /**
     * @var integer 用于设置BatchReceivePolicy，指在一次batch中最多接收的消息体有多大，单位是 bytes。默认是 0，即不开启BatchReceivePolicy
     */
    public $MaxNumBytes;

    /**
     * @var integer 用于设置BatchReceivePolicy，指在一次batch消息的接收z中最多等待的超时时间，单位是毫秒。默认是 0，即不开启BatchReceivePolicy
     */
    public $Timeout;

    /**
     * @param string $Topic 接收消息的topic的名字, 这里尽量需要使用topic的全路径，如果不指定，即：tenant/namespace/topic。默认使用的是：public/default
     * @param string $SubscriptionName 订阅者的名字
     * @param integer $ReceiverQueueSize 默认值为1000，consumer接收的消息会首先存储到receiverQueueSize这个队列中，用作调优接收消息的速率
     * @param string $SubInitialPosition 默认值为：Earliest。用作判定consumer初始接收消息的位置，可选参数为：Earliest, Latest
     * @param integer $MaxNumMessages 用于设置BatchReceivePolicy，指在一次batch中最多接收多少条消息，默认是 0。即不开启BatchReceivePolicy
     * @param integer $MaxNumBytes 用于设置BatchReceivePolicy，指在一次batch中最多接收的消息体有多大，单位是 bytes。默认是 0，即不开启BatchReceivePolicy
     * @param integer $Timeout 用于设置BatchReceivePolicy，指在一次batch消息的接收z中最多等待的超时时间，单位是毫秒。默认是 0，即不开启BatchReceivePolicy
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

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("ReceiverQueueSize",$param) and $param["ReceiverQueueSize"] !== null) {
            $this->ReceiverQueueSize = $param["ReceiverQueueSize"];
        }

        if (array_key_exists("SubInitialPosition",$param) and $param["SubInitialPosition"] !== null) {
            $this->SubInitialPosition = $param["SubInitialPosition"];
        }

        if (array_key_exists("MaxNumMessages",$param) and $param["MaxNumMessages"] !== null) {
            $this->MaxNumMessages = $param["MaxNumMessages"];
        }

        if (array_key_exists("MaxNumBytes",$param) and $param["MaxNumBytes"] !== null) {
            $this->MaxNumBytes = $param["MaxNumBytes"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
