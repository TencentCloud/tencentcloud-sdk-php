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
 * 死信源队列信息
 *
 * @method string getQueueId() 获取消息队列ID。
 * @method void setQueueId(string $QueueId) 设置消息队列ID。
 * @method string getQueueName() 获取消息队列名字。
 * @method void setQueueName(string $QueueName) 设置消息队列名字。
 */
class DeadLetterSource extends AbstractModel
{
    /**
     * @var string 消息队列ID。
     */
    public $QueueId;

    /**
     * @var string 消息队列名字。
     */
    public $QueueName;

    /**
     * @param string $QueueId 消息队列ID。
     * @param string $QueueName 消息队列名字。
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
        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            $this->QueueId = $param["QueueId"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }
    }
}
