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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 最高Token用量消费者
 *
 * @method string getConsumerId() 获取<p>消费者Id</p>
 * @method void setConsumerId(string $ConsumerId) 设置<p>消费者Id</p>
 * @method string getConsumerName() 获取<p>消费者名称</p>
 * @method void setConsumerName(string $ConsumerName) 设置<p>消费者名称</p>
 * @method integer getTotalTokens() 获取<p>该消费者花费的Token数</p>
 * @method void setTotalTokens(integer $TotalTokens) 设置<p>该消费者花费的Token数</p>
 */
class AIGWTopConsumersItem extends AbstractModel
{
    /**
     * @var string <p>消费者Id</p>
     */
    public $ConsumerId;

    /**
     * @var string <p>消费者名称</p>
     */
    public $ConsumerName;

    /**
     * @var integer <p>该消费者花费的Token数</p>
     */
    public $TotalTokens;

    /**
     * @param string $ConsumerId <p>消费者Id</p>
     * @param string $ConsumerName <p>消费者名称</p>
     * @param integer $TotalTokens <p>该消费者花费的Token数</p>
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
        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("ConsumerName",$param) and $param["ConsumerName"] !== null) {
            $this->ConsumerName = $param["ConsumerName"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
