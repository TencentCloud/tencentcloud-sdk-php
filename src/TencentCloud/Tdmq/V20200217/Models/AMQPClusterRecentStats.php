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
 * AMQP集群近期使用量
 *
 * @method integer getQueueNum() 获取Queue数量
 * @method void setQueueNum(integer $QueueNum) 设置Queue数量
 * @method integer getProducedMsgNum() 获取消息生产数
 * @method void setProducedMsgNum(integer $ProducedMsgNum) 设置消息生产数
 * @method integer getAccumulativeMsgNum() 获取消息堆积数
 * @method void setAccumulativeMsgNum(integer $AccumulativeMsgNum) 设置消息堆积数
 * @method integer getExchangeNum() 获取Exchange数量
 * @method void setExchangeNum(integer $ExchangeNum) 设置Exchange数量
 */
class AMQPClusterRecentStats extends AbstractModel
{
    /**
     * @var integer Queue数量
     */
    public $QueueNum;

    /**
     * @var integer 消息生产数
     */
    public $ProducedMsgNum;

    /**
     * @var integer 消息堆积数
     */
    public $AccumulativeMsgNum;

    /**
     * @var integer Exchange数量
     */
    public $ExchangeNum;

    /**
     * @param integer $QueueNum Queue数量
     * @param integer $ProducedMsgNum 消息生产数
     * @param integer $AccumulativeMsgNum 消息堆积数
     * @param integer $ExchangeNum Exchange数量
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
        if (array_key_exists("QueueNum",$param) and $param["QueueNum"] !== null) {
            $this->QueueNum = $param["QueueNum"];
        }

        if (array_key_exists("ProducedMsgNum",$param) and $param["ProducedMsgNum"] !== null) {
            $this->ProducedMsgNum = $param["ProducedMsgNum"];
        }

        if (array_key_exists("AccumulativeMsgNum",$param) and $param["AccumulativeMsgNum"] !== null) {
            $this->AccumulativeMsgNum = $param["AccumulativeMsgNum"];
        }

        if (array_key_exists("ExchangeNum",$param) and $param["ExchangeNum"] !== null) {
            $this->ExchangeNum = $param["ExchangeNum"];
        }
    }
}
