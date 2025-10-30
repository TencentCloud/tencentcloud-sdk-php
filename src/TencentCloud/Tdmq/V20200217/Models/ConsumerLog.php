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
 * 消费日志
 *
 * @method string getMsgId() 获取消息ID。
 * @method void setMsgId(string $MsgId) 设置消息ID。
 * @method string getConsumerGroup() 获取消费组。
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组。
 * @method string getConsumerName() 获取消费者名称。
 * @method void setConsumerName(string $ConsumerName) 设置消费者名称。
 * @method string getConsumeTime() 获取消费时间。
 * @method void setConsumeTime(string $ConsumeTime) 设置消费时间。
 * @method string getConsumerAddr() 获取消费者客户端地址。
 * @method void setConsumerAddr(string $ConsumerAddr) 设置消费者客户端地址。
 * @method integer getConsumeUseTime() 获取消费耗时（毫秒）。
 * @method void setConsumeUseTime(integer $ConsumeUseTime) 设置消费耗时（毫秒）。
 * @method string getStatus() 获取消费状态。
 * @method void setStatus(string $Status) 设置消费状态。
 */
class ConsumerLog extends AbstractModel
{
    /**
     * @var string 消息ID。
     */
    public $MsgId;

    /**
     * @var string 消费组。
     */
    public $ConsumerGroup;

    /**
     * @var string 消费者名称。
     */
    public $ConsumerName;

    /**
     * @var string 消费时间。
     */
    public $ConsumeTime;

    /**
     * @var string 消费者客户端地址。
     */
    public $ConsumerAddr;

    /**
     * @var integer 消费耗时（毫秒）。
     */
    public $ConsumeUseTime;

    /**
     * @var string 消费状态。
     */
    public $Status;

    /**
     * @param string $MsgId 消息ID。
     * @param string $ConsumerGroup 消费组。
     * @param string $ConsumerName 消费者名称。
     * @param string $ConsumeTime 消费时间。
     * @param string $ConsumerAddr 消费者客户端地址。
     * @param integer $ConsumeUseTime 消费耗时（毫秒）。
     * @param string $Status 消费状态。
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
        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("ConsumerName",$param) and $param["ConsumerName"] !== null) {
            $this->ConsumerName = $param["ConsumerName"];
        }

        if (array_key_exists("ConsumeTime",$param) and $param["ConsumeTime"] !== null) {
            $this->ConsumeTime = $param["ConsumeTime"];
        }

        if (array_key_exists("ConsumerAddr",$param) and $param["ConsumerAddr"] !== null) {
            $this->ConsumerAddr = $param["ConsumerAddr"];
        }

        if (array_key_exists("ConsumeUseTime",$param) and $param["ConsumeUseTime"] !== null) {
            $this->ConsumeUseTime = $param["ConsumeUseTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
