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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例 / topic 维度限流策略
 *
 * @method integer getQuotaProducerByteRate() 获取生产限流大小，单位 MB/s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaProducerByteRate(integer $QuotaProducerByteRate) 设置生产限流大小，单位 MB/s
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQuotaConsumerByteRate() 获取消费限流大小，单位 MB/s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaConsumerByteRate(integer $QuotaConsumerByteRate) 设置消费限流大小，单位 MB/s
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceQuotaConfigResp extends AbstractModel
{
    /**
     * @var integer 生产限流大小，单位 MB/s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaProducerByteRate;

    /**
     * @var integer 消费限流大小，单位 MB/s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaConsumerByteRate;

    /**
     * @param integer $QuotaProducerByteRate 生产限流大小，单位 MB/s
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QuotaConsumerByteRate 消费限流大小，单位 MB/s
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
        if (array_key_exists("QuotaProducerByteRate",$param) and $param["QuotaProducerByteRate"] !== null) {
            $this->QuotaProducerByteRate = $param["QuotaProducerByteRate"];
        }

        if (array_key_exists("QuotaConsumerByteRate",$param) and $param["QuotaConsumerByteRate"] !== null) {
            $this->QuotaConsumerByteRate = $param["QuotaConsumerByteRate"];
        }
    }
}
