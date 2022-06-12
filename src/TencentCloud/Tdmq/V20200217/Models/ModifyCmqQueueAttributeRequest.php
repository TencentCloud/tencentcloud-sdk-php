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
 * ModifyCmqQueueAttribute请求参数结构体
 *
 * @method string getQueueName() 获取队列名字，在单个地域同一帐号下唯一。队列名称是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。
 * @method void setQueueName(string $QueueName) 设置队列名字，在单个地域同一帐号下唯一。队列名称是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。
 * @method integer getMaxMsgHeapNum() 获取最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
 * @method void setMaxMsgHeapNum(integer $MaxMsgHeapNum) 设置最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
 * @method integer getPollingWaitSeconds() 获取消息接收长轮询等待时间。取值范围 0-30 秒，默认值 0。
 * @method void setPollingWaitSeconds(integer $PollingWaitSeconds) 设置消息接收长轮询等待时间。取值范围 0-30 秒，默认值 0。
 * @method integer getVisibilityTimeout() 获取消息可见性超时。取值范围 1-43200 秒（即12小时内），默认值 30。
 * @method void setVisibilityTimeout(integer $VisibilityTimeout) 设置消息可见性超时。取值范围 1-43200 秒（即12小时内），默认值 30。
 * @method integer getMaxMsgSize() 获取消息最大长度，新版CMQ新建的队列默认1024KB，不支持修改
 * @method void setMaxMsgSize(integer $MaxMsgSize) 设置消息最大长度，新版CMQ新建的队列默认1024KB，不支持修改
 * @method integer getMsgRetentionSeconds() 获取消息最长未确认时间。取值范围 30-43200 秒（30秒~12小时），默认值 3600 (1 小时)。
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) 设置消息最长未确认时间。取值范围 30-43200 秒（30秒~12小时），默认值 3600 (1 小时)。
 * @method integer getRewindSeconds() 获取队列是否开启回溯消息能力，该参数取值范围0-1296000，0表示不开启。
 * @method void setRewindSeconds(integer $RewindSeconds) 设置队列是否开启回溯消息能力，该参数取值范围0-1296000，0表示不开启。
 * @method integer getFirstQueryInterval() 获取第一次查询时间
 * @method void setFirstQueryInterval(integer $FirstQueryInterval) 设置第一次查询时间
 * @method integer getMaxQueryCount() 获取最大查询次数
 * @method void setMaxQueryCount(integer $MaxQueryCount) 设置最大查询次数
 * @method string getDeadLetterQueueName() 获取死信队列名称
 * @method void setDeadLetterQueueName(string $DeadLetterQueueName) 设置死信队列名称
 * @method integer getMaxTimeToLive() 获取MaxTimeToLivepolicy为1时必选。最大未消费过期时间。范围300-43200，单位秒，需要小于消息最大保留时间MsgRetentionSeconds
 * @method void setMaxTimeToLive(integer $MaxTimeToLive) 设置MaxTimeToLivepolicy为1时必选。最大未消费过期时间。范围300-43200，单位秒，需要小于消息最大保留时间MsgRetentionSeconds
 * @method integer getMaxReceiveCount() 获取最大接收次数
 * @method void setMaxReceiveCount(integer $MaxReceiveCount) 设置最大接收次数
 * @method integer getPolicy() 获取死信队列策略
 * @method void setPolicy(integer $Policy) 设置死信队列策略
 * @method boolean getTrace() 获取是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
 * @method void setTrace(boolean $Trace) 设置是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
 * @method integer getTransaction() 获取是否开启事务，1开启，0不开启
 * @method void setTransaction(integer $Transaction) 设置是否开启事务，1开启，0不开启
 * @method integer getRetentionSizeInMB() 获取队列可回溯存储空间：若开启消息回溯，取值范围：10240MB - 512000MB，若不开启消息回溯，取值：0
 * @method void setRetentionSizeInMB(integer $RetentionSizeInMB) 设置队列可回溯存储空间：若开启消息回溯，取值范围：10240MB - 512000MB，若不开启消息回溯，取值：0
 */
class ModifyCmqQueueAttributeRequest extends AbstractModel
{
    /**
     * @var string 队列名字，在单个地域同一帐号下唯一。队列名称是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。
     */
    public $QueueName;

    /**
     * @var integer 最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
     */
    public $MaxMsgHeapNum;

    /**
     * @var integer 消息接收长轮询等待时间。取值范围 0-30 秒，默认值 0。
     */
    public $PollingWaitSeconds;

    /**
     * @var integer 消息可见性超时。取值范围 1-43200 秒（即12小时内），默认值 30。
     */
    public $VisibilityTimeout;

    /**
     * @var integer 消息最大长度，新版CMQ新建的队列默认1024KB，不支持修改
     */
    public $MaxMsgSize;

    /**
     * @var integer 消息最长未确认时间。取值范围 30-43200 秒（30秒~12小时），默认值 3600 (1 小时)。
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer 队列是否开启回溯消息能力，该参数取值范围0-1296000，0表示不开启。
     */
    public $RewindSeconds;

    /**
     * @var integer 第一次查询时间
     */
    public $FirstQueryInterval;

    /**
     * @var integer 最大查询次数
     */
    public $MaxQueryCount;

    /**
     * @var string 死信队列名称
     */
    public $DeadLetterQueueName;

    /**
     * @var integer MaxTimeToLivepolicy为1时必选。最大未消费过期时间。范围300-43200，单位秒，需要小于消息最大保留时间MsgRetentionSeconds
     */
    public $MaxTimeToLive;

    /**
     * @var integer 最大接收次数
     */
    public $MaxReceiveCount;

    /**
     * @var integer 死信队列策略
     */
    public $Policy;

    /**
     * @var boolean 是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
     */
    public $Trace;

    /**
     * @var integer 是否开启事务，1开启，0不开启
     */
    public $Transaction;

    /**
     * @var integer 队列可回溯存储空间：若开启消息回溯，取值范围：10240MB - 512000MB，若不开启消息回溯，取值：0
     */
    public $RetentionSizeInMB;

    /**
     * @param string $QueueName 队列名字，在单个地域同一帐号下唯一。队列名称是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。
     * @param integer $MaxMsgHeapNum 最大堆积消息数。取值范围在公测期间为 1,000,000 - 10,000,000，正式上线后范围可达到 1000,000-1000,000,000。默认取值在公测期间为 10,000,000，正式上线后为 100,000,000。
     * @param integer $PollingWaitSeconds 消息接收长轮询等待时间。取值范围 0-30 秒，默认值 0。
     * @param integer $VisibilityTimeout 消息可见性超时。取值范围 1-43200 秒（即12小时内），默认值 30。
     * @param integer $MaxMsgSize 消息最大长度，新版CMQ新建的队列默认1024KB，不支持修改
     * @param integer $MsgRetentionSeconds 消息最长未确认时间。取值范围 30-43200 秒（30秒~12小时），默认值 3600 (1 小时)。
     * @param integer $RewindSeconds 队列是否开启回溯消息能力，该参数取值范围0-1296000，0表示不开启。
     * @param integer $FirstQueryInterval 第一次查询时间
     * @param integer $MaxQueryCount 最大查询次数
     * @param string $DeadLetterQueueName 死信队列名称
     * @param integer $MaxTimeToLive MaxTimeToLivepolicy为1时必选。最大未消费过期时间。范围300-43200，单位秒，需要小于消息最大保留时间MsgRetentionSeconds
     * @param integer $MaxReceiveCount 最大接收次数
     * @param integer $Policy 死信队列策略
     * @param boolean $Trace 是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
     * @param integer $Transaction 是否开启事务，1开启，0不开启
     * @param integer $RetentionSizeInMB 队列可回溯存储空间：若开启消息回溯，取值范围：10240MB - 512000MB，若不开启消息回溯，取值：0
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("MaxMsgHeapNum",$param) and $param["MaxMsgHeapNum"] !== null) {
            $this->MaxMsgHeapNum = $param["MaxMsgHeapNum"];
        }

        if (array_key_exists("PollingWaitSeconds",$param) and $param["PollingWaitSeconds"] !== null) {
            $this->PollingWaitSeconds = $param["PollingWaitSeconds"];
        }

        if (array_key_exists("VisibilityTimeout",$param) and $param["VisibilityTimeout"] !== null) {
            $this->VisibilityTimeout = $param["VisibilityTimeout"];
        }

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("RewindSeconds",$param) and $param["RewindSeconds"] !== null) {
            $this->RewindSeconds = $param["RewindSeconds"];
        }

        if (array_key_exists("FirstQueryInterval",$param) and $param["FirstQueryInterval"] !== null) {
            $this->FirstQueryInterval = $param["FirstQueryInterval"];
        }

        if (array_key_exists("MaxQueryCount",$param) and $param["MaxQueryCount"] !== null) {
            $this->MaxQueryCount = $param["MaxQueryCount"];
        }

        if (array_key_exists("DeadLetterQueueName",$param) and $param["DeadLetterQueueName"] !== null) {
            $this->DeadLetterQueueName = $param["DeadLetterQueueName"];
        }

        if (array_key_exists("MaxTimeToLive",$param) and $param["MaxTimeToLive"] !== null) {
            $this->MaxTimeToLive = $param["MaxTimeToLive"];
        }

        if (array_key_exists("MaxReceiveCount",$param) and $param["MaxReceiveCount"] !== null) {
            $this->MaxReceiveCount = $param["MaxReceiveCount"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }

        if (array_key_exists("Transaction",$param) and $param["Transaction"] !== null) {
            $this->Transaction = $param["Transaction"];
        }

        if (array_key_exists("RetentionSizeInMB",$param) and $param["RetentionSizeInMB"] !== null) {
            $this->RetentionSizeInMB = $param["RetentionSizeInMB"];
        }
    }
}
