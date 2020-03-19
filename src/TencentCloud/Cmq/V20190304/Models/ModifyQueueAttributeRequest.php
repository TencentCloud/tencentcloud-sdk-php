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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getQueueName() 获取QueueName
 * @method void setQueueName(string $QueueName) 设置QueueName
 * @method integer getMaxMsgHeapNum() 获取MaxMsgHeapNum
 * @method void setMaxMsgHeapNum(integer $MaxMsgHeapNum) 设置MaxMsgHeapNum
 * @method integer getPollingWaitSeconds() 获取PollingWaitSeconds
 * @method void setPollingWaitSeconds(integer $PollingWaitSeconds) 设置PollingWaitSeconds
 * @method integer getVisibilityTimeout() 获取VisibilityTimeout
 * @method void setVisibilityTimeout(integer $VisibilityTimeout) 设置VisibilityTimeout
 * @method integer getMaxMsgSize() 获取MaxMsgSize
 * @method void setMaxMsgSize(integer $MaxMsgSize) 设置MaxMsgSize
 * @method integer getMsgRetentionSeconds() 获取MsgRetentionSeconds
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) 设置MsgRetentionSeconds
 * @method integer getRewindSeconds() 获取RewindSeconds
 * @method void setRewindSeconds(integer $RewindSeconds) 设置RewindSeconds
 * @method integer getFirstQueryInterval() 获取FirstQueryInterval
 * @method void setFirstQueryInterval(integer $FirstQueryInterval) 设置FirstQueryInterval
 * @method integer getMaxQueryCount() 获取MaxQueryCount
 * @method void setMaxQueryCount(integer $MaxQueryCount) 设置MaxQueryCount
 * @method string getDeadLetterQueueName() 获取DeadLetterQueueName
 * @method void setDeadLetterQueueName(string $DeadLetterQueueName) 设置DeadLetterQueueName
 * @method integer getMaxTimeToLive() 获取MaxTimeToLive
 * @method void setMaxTimeToLive(integer $MaxTimeToLive) 设置MaxTimeToLive
 * @method integer getMaxReceiveCount() 获取MaxReceiveCount
 * @method void setMaxReceiveCount(integer $MaxReceiveCount) 设置MaxReceiveCount
 * @method integer getPolicy() 获取Policy
 * @method void setPolicy(integer $Policy) 设置Policy
 * @method boolean getTrace() 获取是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
 * @method void setTrace(boolean $Trace) 设置是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
 */

/**
 *ModifyQueueAttribute请求参数结构体
 */
class ModifyQueueAttributeRequest extends AbstractModel
{
    /**
     * @var string QueueName
     */
    public $QueueName;

    /**
     * @var integer MaxMsgHeapNum
     */
    public $MaxMsgHeapNum;

    /**
     * @var integer PollingWaitSeconds
     */
    public $PollingWaitSeconds;

    /**
     * @var integer VisibilityTimeout
     */
    public $VisibilityTimeout;

    /**
     * @var integer MaxMsgSize
     */
    public $MaxMsgSize;

    /**
     * @var integer MsgRetentionSeconds
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer RewindSeconds
     */
    public $RewindSeconds;

    /**
     * @var integer FirstQueryInterval
     */
    public $FirstQueryInterval;

    /**
     * @var integer MaxQueryCount
     */
    public $MaxQueryCount;

    /**
     * @var string DeadLetterQueueName
     */
    public $DeadLetterQueueName;

    /**
     * @var integer MaxTimeToLive
     */
    public $MaxTimeToLive;

    /**
     * @var integer MaxReceiveCount
     */
    public $MaxReceiveCount;

    /**
     * @var integer Policy
     */
    public $Policy;

    /**
     * @var boolean 是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
     */
    public $Trace;
    /**
     * @param string $QueueName QueueName
     * @param integer $MaxMsgHeapNum MaxMsgHeapNum
     * @param integer $PollingWaitSeconds PollingWaitSeconds
     * @param integer $VisibilityTimeout VisibilityTimeout
     * @param integer $MaxMsgSize MaxMsgSize
     * @param integer $MsgRetentionSeconds MsgRetentionSeconds
     * @param integer $RewindSeconds RewindSeconds
     * @param integer $FirstQueryInterval FirstQueryInterval
     * @param integer $MaxQueryCount MaxQueryCount
     * @param string $DeadLetterQueueName DeadLetterQueueName
     * @param integer $MaxTimeToLive MaxTimeToLive
     * @param integer $MaxReceiveCount MaxReceiveCount
     * @param integer $Policy Policy
     * @param boolean $Trace 是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
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
    }
}
