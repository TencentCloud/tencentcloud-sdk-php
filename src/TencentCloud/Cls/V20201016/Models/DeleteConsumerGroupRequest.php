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
 * DeleteConsumerGroup请求参数结构体
 *
 * @method string getConsumerGroup() 获取需要删除的消费者组标识
 * @method void setConsumerGroup(string $ConsumerGroup) 设置需要删除的消费者组标识
 * @method string getLogsetId() 获取日志集id
 * @method void setLogsetId(string $LogsetId) 设置日志集id
 */
class DeleteConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string 需要删除的消费者组标识
     */
    public $ConsumerGroup;

    /**
     * @var string 日志集id
     */
    public $LogsetId;

    /**
     * @param string $ConsumerGroup 需要删除的消费者组标识
     * @param string $LogsetId 日志集id
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

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }
    }
}
