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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志投递信息
 *
 * @method string getDeliverType() 获取投递类型，store（存储类），mq（消息通道）
 * @method void setDeliverType(string $DeliverType) 设置投递类型，store（存储类），mq（消息通道）
 * @method string getDeliverSubType() 获取投递子类型：cls，ckafka。
 * @method void setDeliverSubType(string $DeliverSubType) 设置投递子类型：cls，ckafka。
 */
class DeliverSummary extends AbstractModel
{
    /**
     * @var string 投递类型，store（存储类），mq（消息通道）
     */
    public $DeliverType;

    /**
     * @var string 投递子类型：cls，ckafka。
     */
    public $DeliverSubType;

    /**
     * @param string $DeliverType 投递类型，store（存储类），mq（消息通道）
     * @param string $DeliverSubType 投递子类型：cls，ckafka。
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
    }
}
