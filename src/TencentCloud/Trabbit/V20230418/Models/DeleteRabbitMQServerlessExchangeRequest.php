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
 * DeleteRabbitMQServerlessExchange请求参数结构体
 *
 * @method string getInstanceId() 获取实例 id
 * @method void setInstanceId(string $InstanceId) 设置实例 id
 * @method string getVirtualHost() 获取vhost 参数
 * @method void setVirtualHost(string $VirtualHost) 设置vhost 参数
 * @method string getExchangeName() 获取exchange 名称
 * @method void setExchangeName(string $ExchangeName) 设置exchange 名称
 */
class DeleteRabbitMQServerlessExchangeRequest extends AbstractModel
{
    /**
     * @var string 实例 id
     */
    public $InstanceId;

    /**
     * @var string vhost 参数
     */
    public $VirtualHost;

    /**
     * @var string exchange 名称
     */
    public $ExchangeName;

    /**
     * @param string $InstanceId 实例 id
     * @param string $VirtualHost vhost 参数
     * @param string $ExchangeName exchange 名称
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
    }
}
