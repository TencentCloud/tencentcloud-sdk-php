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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MessageTrack
 *
 * @method string getConsumerGroup() 获取消费组名称
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组名称
 * @method string getConsumeStatus() 获取消费状态, CONSUMED: 已消费 CONSUMED_BUT_FILTERED: 已过滤 NOT_CONSUME: 未消费 ENTER_RETRY: 进入重试队列 ENTER_DLQ: 进入死信队列 UNKNOWN: 查询不到消费状态
 * @method void setConsumeStatus(string $ConsumeStatus) 设置消费状态, CONSUMED: 已消费 CONSUMED_BUT_FILTERED: 已过滤 NOT_CONSUME: 未消费 ENTER_RETRY: 进入重试队列 ENTER_DLQ: 进入死信队列 UNKNOWN: 查询不到消费状态
 * @method string getTrackType() 获取track类型
 * @method void setTrackType(string $TrackType) 设置track类型
 * @method string getExceptionDesc() 获取异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionDesc(string $ExceptionDesc) 设置异常信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class MessageTrackItem extends AbstractModel
{
    /**
     * @var string 消费组名称
     */
    public $ConsumerGroup;

    /**
     * @var string 消费状态, CONSUMED: 已消费 CONSUMED_BUT_FILTERED: 已过滤 NOT_CONSUME: 未消费 ENTER_RETRY: 进入重试队列 ENTER_DLQ: 进入死信队列 UNKNOWN: 查询不到消费状态
     */
    public $ConsumeStatus;

    /**
     * @var string track类型
     */
    public $TrackType;

    /**
     * @var string 异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionDesc;

    /**
     * @param string $ConsumerGroup 消费组名称
     * @param string $ConsumeStatus 消费状态, CONSUMED: 已消费 CONSUMED_BUT_FILTERED: 已过滤 NOT_CONSUME: 未消费 ENTER_RETRY: 进入重试队列 ENTER_DLQ: 进入死信队列 UNKNOWN: 查询不到消费状态
     * @param string $TrackType track类型
     * @param string $ExceptionDesc 异常信息
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ConsumeStatus",$param) and $param["ConsumeStatus"] !== null) {
            $this->ConsumeStatus = $param["ConsumeStatus"];
        }

        if (array_key_exists("TrackType",$param) and $param["TrackType"] !== null) {
            $this->TrackType = $param["TrackType"];
        }

        if (array_key_exists("ExceptionDesc",$param) and $param["ExceptionDesc"] !== null) {
            $this->ExceptionDesc = $param["ExceptionDesc"];
        }
    }
}
