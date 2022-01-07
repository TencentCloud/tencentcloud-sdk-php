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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用来描述ckafka投递目标
 *
 * @method string getTopicName() 获取要投递到的ckafka topic
 * @method void setTopicName(string $TopicName) 设置要投递到的ckafka topic
 * @method RetryPolicy getRetryPolicy() 获取重试策略
 * @method void setRetryPolicy(RetryPolicy $RetryPolicy) 设置重试策略
 */
class CkafkaTargetParams extends AbstractModel
{
    /**
     * @var string 要投递到的ckafka topic
     */
    public $TopicName;

    /**
     * @var RetryPolicy 重试策略
     */
    public $RetryPolicy;

    /**
     * @param string $TopicName 要投递到的ckafka topic
     * @param RetryPolicy $RetryPolicy 重试策略
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("RetryPolicy",$param) and $param["RetryPolicy"] !== null) {
            $this->RetryPolicy = new RetryPolicy();
            $this->RetryPolicy->deserialize($param["RetryPolicy"]);
        }
    }
}
