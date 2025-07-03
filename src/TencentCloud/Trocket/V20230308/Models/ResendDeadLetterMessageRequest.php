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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResendDeadLetterMessage请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method array getMessageIds() 获取死信消息ID列表
 * @method void setMessageIds(array $MessageIds) 设置死信消息ID列表
 * @method string getConsumerGroup() 获取消费组名称
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组名称
 */
class ResendDeadLetterMessageRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var array 死信消息ID列表
     */
    public $MessageIds;

    /**
     * @var string 消费组名称
     */
    public $ConsumerGroup;

    /**
     * @param string $InstanceId 集群ID
     * @param array $MessageIds 死信消息ID列表
     * @param string $ConsumerGroup 消费组名称
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MessageIds",$param) and $param["MessageIds"] !== null) {
            $this->MessageIds = $param["MessageIds"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }
    }
}
