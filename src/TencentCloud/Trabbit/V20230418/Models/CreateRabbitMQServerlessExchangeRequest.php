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
 * CreateRabbitMQServerlessExchange请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getVirtualHost() 获取VHost参数
 * @method void setVirtualHost(string $VirtualHost) 设置VHost参数
 * @method string getExchangeName() 获取exchange 名称
 * @method void setExchangeName(string $ExchangeName) 设置exchange 名称
 * @method string getExchangeType() 获取exchange 类型, 支持 "fanout","direct","topic","headers"
 * @method void setExchangeType(string $ExchangeType) 设置exchange 类型, 支持 "fanout","direct","topic","headers"
 * @method string getRemark() 获取exchange 备注
 * @method void setRemark(string $Remark) 设置exchange 备注
 * @method boolean getDurable() 获取是否为持久化 exchange, 当集群重启时,将会清除所有该字段为"false"的 exchange
 * @method void setDurable(boolean $Durable) 设置是否为持久化 exchange, 当集群重启时,将会清除所有该字段为"false"的 exchange
 * @method boolean getAutoDelete() 获取是否自动删除该 exchange, 如果为 "true", 当解绑所有当前 exchange 上的路由关系时, 该 exchange 将会被自动删除
 * @method void setAutoDelete(boolean $AutoDelete) 设置是否自动删除该 exchange, 如果为 "true", 当解绑所有当前 exchange 上的路由关系时, 该 exchange 将会被自动删除
 * @method boolean getInternal() 获取是否为内部 exchange, 如果为 "true", 则无法直接投递消息到该 exchange, 需要在路由设置中通过其他 exchange 进行转发
 * @method void setInternal(boolean $Internal) 设置是否为内部 exchange, 如果为 "true", 则无法直接投递消息到该 exchange, 需要在路由设置中通过其他 exchange 进行转发
 * @method string getAlternateExchange() 获取替代 exchange, 如果消息无法发送到当前 exchange, 就会发送到该替代 exchange
 * @method void setAlternateExchange(string $AlternateExchange) 设置替代 exchange, 如果消息无法发送到当前 exchange, 就会发送到该替代 exchange
 * @method string getDelayedExchangeType() 获取延迟类型的exchange背后对应的exchange类型, 支持 "fanout","direct","topic","headers"
 * @method void setDelayedExchangeType(string $DelayedExchangeType) 设置延迟类型的exchange背后对应的exchange类型, 支持 "fanout","direct","topic","headers"
 */
class CreateRabbitMQServerlessExchangeRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string VHost参数
     */
    public $VirtualHost;

    /**
     * @var string exchange 名称
     */
    public $ExchangeName;

    /**
     * @var string exchange 类型, 支持 "fanout","direct","topic","headers"
     */
    public $ExchangeType;

    /**
     * @var string exchange 备注
     */
    public $Remark;

    /**
     * @var boolean 是否为持久化 exchange, 当集群重启时,将会清除所有该字段为"false"的 exchange
     */
    public $Durable;

    /**
     * @var boolean 是否自动删除该 exchange, 如果为 "true", 当解绑所有当前 exchange 上的路由关系时, 该 exchange 将会被自动删除
     */
    public $AutoDelete;

    /**
     * @var boolean 是否为内部 exchange, 如果为 "true", 则无法直接投递消息到该 exchange, 需要在路由设置中通过其他 exchange 进行转发
     */
    public $Internal;

    /**
     * @var string 替代 exchange, 如果消息无法发送到当前 exchange, 就会发送到该替代 exchange
     */
    public $AlternateExchange;

    /**
     * @var string 延迟类型的exchange背后对应的exchange类型, 支持 "fanout","direct","topic","headers"
     */
    public $DelayedExchangeType;

    /**
     * @param string $InstanceId 实例Id
     * @param string $VirtualHost VHost参数
     * @param string $ExchangeName exchange 名称
     * @param string $ExchangeType exchange 类型, 支持 "fanout","direct","topic","headers"
     * @param string $Remark exchange 备注
     * @param boolean $Durable 是否为持久化 exchange, 当集群重启时,将会清除所有该字段为"false"的 exchange
     * @param boolean $AutoDelete 是否自动删除该 exchange, 如果为 "true", 当解绑所有当前 exchange 上的路由关系时, 该 exchange 将会被自动删除
     * @param boolean $Internal 是否为内部 exchange, 如果为 "true", 则无法直接投递消息到该 exchange, 需要在路由设置中通过其他 exchange 进行转发
     * @param string $AlternateExchange 替代 exchange, 如果消息无法发送到当前 exchange, 就会发送到该替代 exchange
     * @param string $DelayedExchangeType 延迟类型的exchange背后对应的exchange类型, 支持 "fanout","direct","topic","headers"
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

        if (array_key_exists("ExchangeName",$param) and $param["ExchangeName"] !== null) {
            $this->ExchangeName = $param["ExchangeName"];
        }

        if (array_key_exists("ExchangeType",$param) and $param["ExchangeType"] !== null) {
            $this->ExchangeType = $param["ExchangeType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Durable",$param) and $param["Durable"] !== null) {
            $this->Durable = $param["Durable"];
        }

        if (array_key_exists("AutoDelete",$param) and $param["AutoDelete"] !== null) {
            $this->AutoDelete = $param["AutoDelete"];
        }

        if (array_key_exists("Internal",$param) and $param["Internal"] !== null) {
            $this->Internal = $param["Internal"];
        }

        if (array_key_exists("AlternateExchange",$param) and $param["AlternateExchange"] !== null) {
            $this->AlternateExchange = $param["AlternateExchange"];
        }

        if (array_key_exists("DelayedExchangeType",$param) and $param["DelayedExchangeType"] !== null) {
            $this->DelayedExchangeType = $param["DelayedExchangeType"];
        }
    }
}
