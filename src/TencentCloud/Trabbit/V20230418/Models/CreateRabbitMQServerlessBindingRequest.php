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
 * @method string getInstanceId() 获取<p>实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例Id</p>
 * @method string getVirtualHost() 获取<p>Vhost参数</p>
 * @method void setVirtualHost(string $VirtualHost) 设置<p>Vhost参数</p>
 * @method string getSource() 获取<p>源exchange</p>
 * @method void setSource(string $Source) 设置<p>源exchange</p>
 * @method string getDestinationType() 获取<p>目标类型,取值queue或exchange</p>
 * @method void setDestinationType(string $DestinationType) 设置<p>目标类型,取值queue或exchange</p>
 * @method string getDestination() 获取<p>目标队列或者交换机</p>
 * @method void setDestination(string $Destination) 设置<p>目标队列或者交换机</p>
 * @method string getRoutingKey() 获取<p>绑定key</p>
 * @method void setRoutingKey(string $RoutingKey) 设置<p>绑定key</p>
 * @method array getArguments() 获取<p>创建 Header 类型 Exchange 的 Binding 时，可以传入参数。其它类型 Exchange 无需传入</p>
 * @method void setArguments(array $Arguments) 设置<p>创建 Header 类型 Exchange 的 Binding 时，可以传入参数。其它类型 Exchange 无需传入</p>
 */
class CreateRabbitMQServerlessBindingRequest extends AbstractModel
{
    /**
     * @var string <p>实例Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Vhost参数</p>
     */
    public $VirtualHost;

    /**
     * @var string <p>源exchange</p>
     */
    public $Source;

    /**
     * @var string <p>目标类型,取值queue或exchange</p>
     */
    public $DestinationType;

    /**
     * @var string <p>目标队列或者交换机</p>
     */
    public $Destination;

    /**
     * @var string <p>绑定key</p>
     */
    public $RoutingKey;

    /**
     * @var array <p>创建 Header 类型 Exchange 的 Binding 时，可以传入参数。其它类型 Exchange 无需传入</p>
     */
    public $Arguments;

    /**
     * @param string $InstanceId <p>实例Id</p>
     * @param string $VirtualHost <p>Vhost参数</p>
     * @param string $Source <p>源exchange</p>
     * @param string $DestinationType <p>目标类型,取值queue或exchange</p>
     * @param string $Destination <p>目标队列或者交换机</p>
     * @param string $RoutingKey <p>绑定key</p>
     * @param array $Arguments <p>创建 Header 类型 Exchange 的 Binding 时，可以传入参数。其它类型 Exchange 无需传入</p>
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

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = [];
            foreach ($param["Arguments"] as $key => $value){
                $obj = new RabbitMQServerlessKeyValuePair();
                $obj->deserialize($value);
                array_push($this->Arguments, $obj);
            }
        }
    }
}
