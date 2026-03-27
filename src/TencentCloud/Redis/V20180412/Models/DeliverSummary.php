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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递信息
 *
 * @method string getDeliverType() 获取<p>投递类型，store（存储类），mq（消息通道）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverType(string $DeliverType) 设置<p>投递类型，store（存储类），mq（消息通道）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeliverSubType() 获取<p>投递子类型：cls，ckafka。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverSubType(string $DeliverSubType) 设置<p>投递子类型：cls，ckafka。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeliverConsumer() 获取<p>投递订阅者</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverConsumer(string $DeliverConsumer) 设置<p>投递订阅者</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeliverConsumerName() 获取<p>投递订阅者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverConsumerName(string $DeliverConsumerName) 设置<p>投递订阅者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeliverError() 获取<p>投递</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliverError(string $DeliverError) 设置<p>投递</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeliverSummary extends AbstractModel
{
    /**
     * @var string <p>投递类型，store（存储类），mq（消息通道）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverType;

    /**
     * @var string <p>投递子类型：cls，ckafka。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverSubType;

    /**
     * @var string <p>投递订阅者</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverConsumer;

    /**
     * @var string <p>投递订阅者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverConsumerName;

    /**
     * @var string <p>投递</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliverError;

    /**
     * @param string $DeliverType <p>投递类型，store（存储类），mq（消息通道）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeliverSubType <p>投递子类型：cls，ckafka。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeliverConsumer <p>投递订阅者</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeliverConsumerName <p>投递订阅者名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeliverError <p>投递</p>
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
        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("DeliverSubType",$param) and $param["DeliverSubType"] !== null) {
            $this->DeliverSubType = $param["DeliverSubType"];
        }

        if (array_key_exists("DeliverConsumer",$param) and $param["DeliverConsumer"] !== null) {
            $this->DeliverConsumer = $param["DeliverConsumer"];
        }

        if (array_key_exists("DeliverConsumerName",$param) and $param["DeliverConsumerName"] !== null) {
            $this->DeliverConsumerName = $param["DeliverConsumerName"];
        }

        if (array_key_exists("DeliverError",$param) and $param["DeliverError"] !== null) {
            $this->DeliverError = $param["DeliverError"];
        }
    }
}
