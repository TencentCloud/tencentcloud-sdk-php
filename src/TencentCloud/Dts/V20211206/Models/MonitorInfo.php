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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kafka消费者组的分区详情
 *
 * @method integer getPartitionNo() 获取当前分区的编号，从0开始
 * @method void setPartitionNo(integer $PartitionNo) 设置当前分区的编号，从0开始
 * @method integer getConsumerGroupOffset() 获取当前分区的偏移量
 * @method void setConsumerGroupOffset(integer $ConsumerGroupOffset) 设置当前分区的偏移量
 * @method integer getConsumerGroupLag() 获取当前分区未消费的数据量
 * @method void setConsumerGroupLag(integer $ConsumerGroupLag) 设置当前分区未消费的数据量
 * @method integer getLatency() 获取当前分区的消费延迟(单位为秒)
 * @method void setLatency(integer $Latency) 设置当前分区的消费延迟(单位为秒)
 */
class MonitorInfo extends AbstractModel
{
    /**
     * @var integer 当前分区的编号，从0开始
     */
    public $PartitionNo;

    /**
     * @var integer 当前分区的偏移量
     */
    public $ConsumerGroupOffset;

    /**
     * @var integer 当前分区未消费的数据量
     */
    public $ConsumerGroupLag;

    /**
     * @var integer 当前分区的消费延迟(单位为秒)
     */
    public $Latency;

    /**
     * @param integer $PartitionNo 当前分区的编号，从0开始
     * @param integer $ConsumerGroupOffset 当前分区的偏移量
     * @param integer $ConsumerGroupLag 当前分区未消费的数据量
     * @param integer $Latency 当前分区的消费延迟(单位为秒)
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
        if (array_key_exists("PartitionNo",$param) and $param["PartitionNo"] !== null) {
            $this->PartitionNo = $param["PartitionNo"];
        }

        if (array_key_exists("ConsumerGroupOffset",$param) and $param["ConsumerGroupOffset"] !== null) {
            $this->ConsumerGroupOffset = $param["ConsumerGroupOffset"];
        }

        if (array_key_exists("ConsumerGroupLag",$param) and $param["ConsumerGroupLag"] !== null) {
            $this->ConsumerGroupLag = $param["ConsumerGroupLag"];
        }

        if (array_key_exists("Latency",$param) and $param["Latency"] !== null) {
            $this->Latency = $param["Latency"];
        }
    }
}
