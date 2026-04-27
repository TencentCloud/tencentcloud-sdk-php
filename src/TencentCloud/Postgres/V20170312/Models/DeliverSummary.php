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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志投递信息
 *
 * @method string getDeliverConsumer() 获取<p>投递消费者，当前仅支持CLS</p>
 * @method void setDeliverConsumer(string $DeliverConsumer) 设置<p>投递消费者，当前仅支持CLS</p>
 * @method string getDeliverConsumerName() 获取<p>投递消费者名称，当前仅支持CLS</p>
 * @method void setDeliverConsumerName(string $DeliverConsumerName) 设置<p>投递消费者名称，当前仅支持CLS</p>
 * @method string getDeliverType() 获取<p>投递类型当前仅支持mq</p>
 * @method void setDeliverType(string $DeliverType) 设置<p>投递类型当前仅支持mq</p>
 * @method string getDeliverSubType() 获取<p>投递子类型，当前仅支持CLS</p>
 * @method void setDeliverSubType(string $DeliverSubType) 设置<p>投递子类型，当前仅支持CLS</p>
 * @method string getDeliverError() 获取<p>投递报错</p>
 * @method void setDeliverError(string $DeliverError) 设置<p>投递报错</p>
 */
class DeliverSummary extends AbstractModel
{
    /**
     * @var string <p>投递消费者，当前仅支持CLS</p>
     */
    public $DeliverConsumer;

    /**
     * @var string <p>投递消费者名称，当前仅支持CLS</p>
     */
    public $DeliverConsumerName;

    /**
     * @var string <p>投递类型当前仅支持mq</p>
     */
    public $DeliverType;

    /**
     * @var string <p>投递子类型，当前仅支持CLS</p>
     */
    public $DeliverSubType;

    /**
     * @var string <p>投递报错</p>
     */
    public $DeliverError;

    /**
     * @param string $DeliverConsumer <p>投递消费者，当前仅支持CLS</p>
     * @param string $DeliverConsumerName <p>投递消费者名称，当前仅支持CLS</p>
     * @param string $DeliverType <p>投递类型当前仅支持mq</p>
     * @param string $DeliverSubType <p>投递子类型，当前仅支持CLS</p>
     * @param string $DeliverError <p>投递报错</p>
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
        if (array_key_exists("DeliverConsumer",$param) and $param["DeliverConsumer"] !== null) {
            $this->DeliverConsumer = $param["DeliverConsumer"];
        }

        if (array_key_exists("DeliverConsumerName",$param) and $param["DeliverConsumerName"] !== null) {
            $this->DeliverConsumerName = $param["DeliverConsumerName"];
        }

        if (array_key_exists("DeliverType",$param) and $param["DeliverType"] !== null) {
            $this->DeliverType = $param["DeliverType"];
        }

        if (array_key_exists("DeliverSubType",$param) and $param["DeliverSubType"] !== null) {
            $this->DeliverSubType = $param["DeliverSubType"];
        }

        if (array_key_exists("DeliverError",$param) and $param["DeliverError"] !== null) {
            $this->DeliverError = $param["DeliverError"];
        }
    }
}
