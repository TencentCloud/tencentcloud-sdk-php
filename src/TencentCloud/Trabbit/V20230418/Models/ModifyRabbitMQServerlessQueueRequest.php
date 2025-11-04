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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRabbitMQServerlessQueue请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getVirtualHost() 获取Vhost参数
 * @method void setVirtualHost(string $VirtualHost) 设置Vhost参数
 * @method string getQueueName() 获取队列名称
 * @method void setQueueName(string $QueueName) 设置队列名称
 * @method string getRemark() 获取新修改的备注
 * @method void setRemark(string $Remark) 设置新修改的备注
 * @method integer getMessageTTL() 获取MessageTTL参数单位ms,classic类型专用	
 * @method void setMessageTTL(integer $MessageTTL) 设置MessageTTL参数单位ms,classic类型专用	
 * @method string getDeadLetterExchange() 获取DeadLetterExchange参数。可将过期或被拒绝的消息投往指定的死信 exchange。
 * @method void setDeadLetterExchange(string $DeadLetterExchange) 设置DeadLetterExchange参数。可将过期或被拒绝的消息投往指定的死信 exchange。
 * @method string getDeadLetterRoutingKey() 获取DeadLetterRoutingKey参数。只能包含字母、数字、"."、"-"，"@"，"_"
 * @method void setDeadLetterRoutingKey(string $DeadLetterRoutingKey) 设置DeadLetterRoutingKey参数。只能包含字母、数字、"."、"-"，"@"，"_"
 */
class ModifyRabbitMQServerlessQueueRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string Vhost参数
     */
    public $VirtualHost;

    /**
     * @var string 队列名称
     */
    public $QueueName;

    /**
     * @var string 新修改的备注
     */
    public $Remark;

    /**
     * @var integer MessageTTL参数单位ms,classic类型专用	
     */
    public $MessageTTL;

    /**
     * @var string DeadLetterExchange参数。可将过期或被拒绝的消息投往指定的死信 exchange。
     */
    public $DeadLetterExchange;

    /**
     * @var string DeadLetterRoutingKey参数。只能包含字母、数字、"."、"-"，"@"，"_"
     */
    public $DeadLetterRoutingKey;

    /**
     * @param string $InstanceId 实例Id
     * @param string $VirtualHost Vhost参数
     * @param string $QueueName 队列名称
     * @param string $Remark 新修改的备注
     * @param integer $MessageTTL MessageTTL参数单位ms,classic类型专用	
     * @param string $DeadLetterExchange DeadLetterExchange参数。可将过期或被拒绝的消息投往指定的死信 exchange。
     * @param string $DeadLetterRoutingKey DeadLetterRoutingKey参数。只能包含字母、数字、"."、"-"，"@"，"_"
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MessageTTL",$param) and $param["MessageTTL"] !== null) {
            $this->MessageTTL = $param["MessageTTL"];
        }

        if (array_key_exists("DeadLetterExchange",$param) and $param["DeadLetterExchange"] !== null) {
            $this->DeadLetterExchange = $param["DeadLetterExchange"];
        }

        if (array_key_exists("DeadLetterRoutingKey",$param) and $param["DeadLetterRoutingKey"] !== null) {
            $this->DeadLetterRoutingKey = $param["DeadLetterRoutingKey"];
        }
    }
}
