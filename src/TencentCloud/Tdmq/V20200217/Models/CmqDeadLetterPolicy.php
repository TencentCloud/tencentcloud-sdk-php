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
 * cmq DeadLetterPolicy
 *
 * @method string getDeadLetterQueue() 获取死信队列。
 * @method void setDeadLetterQueue(string $DeadLetterQueue) 设置死信队列。
 * @method integer getPolicy() 获取死信队列策略。0:最大接收次数;1:最大未消费时间
 * @method void setPolicy(integer $Policy) 设置死信队列策略。0:最大接收次数;1:最大未消费时间
 * @method integer getMaxTimeToLive() 获取最大未消费过期时间。Policy为1时必选。范围300-43200，单位秒，需要小于消息最大保留时间MsgRetentionSeconds。
 * @method void setMaxTimeToLive(integer $MaxTimeToLive) 设置最大未消费过期时间。Policy为1时必选。范围300-43200，单位秒，需要小于消息最大保留时间MsgRetentionSeconds。
 * @method integer getMaxReceiveCount() 获取最大接收次数。Policy为0时必选，范围在1到1000。
 * @method void setMaxReceiveCount(integer $MaxReceiveCount) 设置最大接收次数。Policy为0时必选，范围在1到1000。
 */
class CmqDeadLetterPolicy extends AbstractModel
{
    /**
     * @var string 死信队列。
     */
    public $DeadLetterQueue;

    /**
     * @var integer 死信队列策略。0:最大接收次数;1:最大未消费时间
     */
    public $Policy;

    /**
     * @var integer 最大未消费过期时间。Policy为1时必选。范围300-43200，单位秒，需要小于消息最大保留时间MsgRetentionSeconds。
     */
    public $MaxTimeToLive;

    /**
     * @var integer 最大接收次数。Policy为0时必选，范围在1到1000。
     */
    public $MaxReceiveCount;

    /**
     * @param string $DeadLetterQueue 死信队列。
     * @param integer $Policy 死信队列策略。0:最大接收次数;1:最大未消费时间
     * @param integer $MaxTimeToLive 最大未消费过期时间。Policy为1时必选。范围300-43200，单位秒，需要小于消息最大保留时间MsgRetentionSeconds。
     * @param integer $MaxReceiveCount 最大接收次数。Policy为0时必选，范围在1到1000。
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
        if (array_key_exists("DeadLetterQueue",$param) and $param["DeadLetterQueue"] !== null) {
            $this->DeadLetterQueue = $param["DeadLetterQueue"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("MaxTimeToLive",$param) and $param["MaxTimeToLive"] !== null) {
            $this->MaxTimeToLive = $param["MaxTimeToLive"];
        }

        if (array_key_exists("MaxReceiveCount",$param) and $param["MaxReceiveCount"] !== null) {
            $this->MaxReceiveCount = $param["MaxReceiveCount"];
        }
    }
}
