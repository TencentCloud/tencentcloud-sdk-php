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
 * CreateRabbitMQServerlessBinding请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getVirtualHost() 获取Vhost参数
 * @method void setVirtualHost(string $VirtualHost) 设置Vhost参数
 * @method string getSource() 获取源exchange
 * @method void setSource(string $Source) 设置源exchange
 * @method string getDestinationType() 获取目标类型,取值queue或exchange
 * @method void setDestinationType(string $DestinationType) 设置目标类型,取值queue或exchange
 * @method string getDestination() 获取目标队列或者交换机
 * @method void setDestination(string $Destination) 设置目标队列或者交换机
 * @method string getRoutingKey() 获取绑定key
 * @method void setRoutingKey(string $RoutingKey) 设置绑定key
 */
class CreateRabbitMQServerlessBindingRequest extends AbstractModel
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
     * @var string 源exchange
     */
    public $Source;

    /**
     * @var string 目标类型,取值queue或exchange
     */
    public $DestinationType;

    /**
     * @var string 目标队列或者交换机
     */
    public $Destination;

    /**
     * @var string 绑定key
     */
    public $RoutingKey;

    /**
     * @param string $InstanceId 实例Id
     * @param string $VirtualHost Vhost参数
     * @param string $Source 源exchange
     * @param string $DestinationType 目标类型,取值queue或exchange
     * @param string $Destination 目标队列或者交换机
     * @param string $RoutingKey 绑定key
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("DestinationType",$param) and $param["DestinationType"] !== null) {
            $this->DestinationType = $param["DestinationType"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("RoutingKey",$param) and $param["RoutingKey"] !== null) {
            $this->RoutingKey = $param["RoutingKey"];
        }
    }
}
