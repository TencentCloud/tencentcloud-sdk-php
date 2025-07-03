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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQServerlessExchangeDetail返回参数结构体
 *
 * @method string getExchangeName() 获取exchange 名
 * @method void setExchangeName(string $ExchangeName) 设置exchange 名
 * @method string getRemark() 获取备注说明
 * @method void setRemark(string $Remark) 设置备注说明
 * @method boolean getDurable() 获取是否为持久化 exchange, 当集群重启时, 将会清除所有该字段为 "false" 的 exchange
 * @method void setDurable(boolean $Durable) 设置是否为持久化 exchange, 当集群重启时, 将会清除所有该字段为 "false" 的 exchange
 * @method boolean getAutoDelete() 获取是否自动删除该 exchange, 如果为 "true", 当解绑所有当前 exchange 上的路由关系时, 该 exchange 将会被自动删除
 * @method void setAutoDelete(boolean $AutoDelete) 设置是否自动删除该 exchange, 如果为 "true", 当解绑所有当前 exchange 上的路由关系时, 该 exchange 将会被自动删除
 * @method boolean getInternal() 获取是否为内部 exchange, 如果为 "true", 则无法直接投递消息到该 exchange, 需要在路由设置中通过其他 exchange 进行转发
 * @method void setInternal(boolean $Internal) 设置是否为内部 exchange, 如果为 "true", 则无法直接投递消息到该 exchange, 需要在路由设置中通过其他 exchange 进行转发
 * @method string getAlternateExchange() 获取替代 exchange, 如果消息没有匹配当前 exchange 绑定的所有 queue 或 exchange, 就会发送到该替代 exchange
 * @method void setAlternateExchange(string $AlternateExchange) 设置替代 exchange, 如果消息没有匹配当前 exchange 绑定的所有 queue 或 exchange, 就会发送到该替代 exchange
 * @method string getExchangeType() 获取exchange 类型, 支持 "fanout","direct","topic","headers"
 * @method void setExchangeType(string $ExchangeType) 设置exchange 类型, 支持 "fanout","direct","topic","headers"
 * @method string getVirtualHost() 获取VHost参数
 * @method void setVirtualHost(string $VirtualHost) 设置VHost参数
 * @method string getExchangeCreator() 获取exchange 创建者, "system":"系统创建", "user":"用户创建"
 * @method void setExchangeCreator(string $ExchangeCreator) 设置exchange 创建者, "system":"系统创建", "user":"用户创建"
 * @method string getArguments() 获取扩展参数 key-value 字符串
 * @method void setArguments(string $Arguments) 设置扩展参数 key-value 字符串
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRabbitMQServerlessExchangeDetailResponse extends AbstractModel
{
    /**
     * @var string exchange 名
     */
    public $ExchangeName;

    /**
     * @var string 备注说明
     */
    public $Remark;

    /**
     * @var boolean 是否为持久化 exchange, 当集群重启时, 将会清除所有该字段为 "false" 的 exchange
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
     * @var string 替代 exchange, 如果消息没有匹配当前 exchange 绑定的所有 queue 或 exchange, 就会发送到该替代 exchange
     */
    public $AlternateExchange;

    /**
     * @var string exchange 类型, 支持 "fanout","direct","topic","headers"
     */
    public $ExchangeType;

    /**
     * @var string VHost参数
     */
    public $VirtualHost;

    /**
     * @var string exchange 创建者, "system":"系统创建", "user":"用户创建"
     */
    public $ExchangeCreator;

    /**
     * @var string 扩展参数 key-value 字符串
     */
    public $Arguments;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ExchangeName exchange 名
     * @param string $Remark 备注说明
     * @param boolean $Durable 是否为持久化 exchange, 当集群重启时, 将会清除所有该字段为 "false" 的 exchange
     * @param boolean $AutoDelete 是否自动删除该 exchange, 如果为 "true", 当解绑所有当前 exchange 上的路由关系时, 该 exchange 将会被自动删除
     * @param boolean $Internal 是否为内部 exchange, 如果为 "true", 则无法直接投递消息到该 exchange, 需要在路由设置中通过其他 exchange 进行转发
     * @param string $AlternateExchange 替代 exchange, 如果消息没有匹配当前 exchange 绑定的所有 queue 或 exchange, 就会发送到该替代 exchange
     * @param string $ExchangeType exchange 类型, 支持 "fanout","direct","topic","headers"
     * @param string $VirtualHost VHost参数
     * @param string $ExchangeCreator exchange 创建者, "system":"系统创建", "user":"用户创建"
     * @param string $Arguments 扩展参数 key-value 字符串
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ExchangeName",$param) and $param["ExchangeName"] !== null) {
            $this->ExchangeName = $param["ExchangeName"];
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

        if (array_key_exists("ExchangeType",$param) and $param["ExchangeType"] !== null) {
            $this->ExchangeType = $param["ExchangeType"];
        }

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("ExchangeCreator",$param) and $param["ExchangeCreator"] !== null) {
            $this->ExchangeCreator = $param["ExchangeCreator"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = $param["Arguments"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
