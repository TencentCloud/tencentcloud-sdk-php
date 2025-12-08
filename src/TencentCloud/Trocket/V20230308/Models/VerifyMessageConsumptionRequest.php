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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyMessageConsumption请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getTopic() 获取主题
 * @method void setTopic(string $Topic) 设置主题
 * @method string getClientId() 获取客户端ID
 * @method void setClientId(string $ClientId) 设置客户端ID
 * @method string getMsgId() 获取消息ID
 * @method void setMsgId(string $MsgId) 设置消息ID
 * @method string getConsumerGroup() 获取消费组名称
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组名称
 */
class VerifyMessageConsumptionRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 主题
     */
    public $Topic;

    /**
     * @var string 客户端ID
     */
    public $ClientId;

    /**
     * @var string 消息ID
     */
    public $MsgId;

    /**
     * @var string 消费组名称
     */
    public $ConsumerGroup;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Topic 主题
     * @param string $ClientId 客户端ID
     * @param string $MsgId 消息ID
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }
    }
}
