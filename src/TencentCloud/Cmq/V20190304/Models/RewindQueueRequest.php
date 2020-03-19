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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getQueueName() 获取QueueName
 * @method void setQueueName(string $QueueName) 设置QueueName
 * @method integer getStartConsumeTime() 获取设定该时间，则（Batch）receiveMessage接口，会按照生产消息的先后顺序消费该时间戳以后的消息。
 * @method void setStartConsumeTime(integer $StartConsumeTime) 设置设定该时间，则（Batch）receiveMessage接口，会按照生产消息的先后顺序消费该时间戳以后的消息。
 */

/**
 *RewindQueue请求参数结构体
 */
class RewindQueueRequest extends AbstractModel
{
    /**
     * @var string QueueName
     */
    public $QueueName;

    /**
     * @var integer 设定该时间，则（Batch）receiveMessage接口，会按照生产消息的先后顺序消费该时间戳以后的消息。
     */
    public $StartConsumeTime;
    /**
     * @param string $QueueName QueueName
     * @param integer $StartConsumeTime 设定该时间，则（Batch）receiveMessage接口，会按照生产消息的先后顺序消费该时间戳以后的消息。
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("StartConsumeTime",$param) and $param["StartConsumeTime"] !== null) {
            $this->StartConsumeTime = $param["StartConsumeTime"];
        }
    }
}
