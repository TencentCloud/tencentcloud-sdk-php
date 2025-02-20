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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 队列消费者列表信息
 *
 * @method string getClientIp() 获取客户端Ip
 * @method void setClientIp(string $ClientIp) 设置客户端Ip
 * @method string getConsumerTag() 获取消费者Tag
 * @method void setConsumerTag(string $ConsumerTag) 设置消费者Tag
 */
class RabbitMQConsumersListInfo extends AbstractModel
{
    /**
     * @var string 客户端Ip
     */
    public $ClientIp;

    /**
     * @var string 消费者Tag
     */
    public $ConsumerTag;

    /**
     * @param string $ClientIp 客户端Ip
     * @param string $ConsumerTag 消费者Tag
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ConsumerTag",$param) and $param["ConsumerTag"] !== null) {
            $this->ConsumerTag = $param["ConsumerTag"];
        }
    }
}
