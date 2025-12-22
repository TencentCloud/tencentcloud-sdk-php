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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消费组信息
 *
 * @method string getConsumerGroup() 获取消费组标识
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组标识
 * @method integer getTimeout() 获取消费者心跳超时时间（秒）
 * @method void setTimeout(integer $Timeout) 设置消费者心跳超时时间（秒）
 * @method array getTopics() 获取topic列表
 * @method void setTopics(array $Topics) 设置topic列表
 */
class ConsumerGroupInfo extends AbstractModel
{
    /**
     * @var string 消费组标识
     */
    public $ConsumerGroup;

    /**
     * @var integer 消费者心跳超时时间（秒）
     */
    public $Timeout;

    /**
     * @var array topic列表
     */
    public $Topics;

    /**
     * @param string $ConsumerGroup 消费组标识
     * @param integer $Timeout 消费者心跳超时时间（秒）
     * @param array $Topics topic列表
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

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = $param["Topics"];
        }
    }
}
