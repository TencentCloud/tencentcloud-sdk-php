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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCloudNativeAPIGatewayConsumer请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例id</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例id</p>
 * @method string getConsumerId() 获取<p>消费者 ID。</p>
 * @method void setConsumerId(string $ConsumerId) 设置<p>消费者 ID。</p>
 * @method string getName() 获取<p>消费者名称，最长 60 字符。</p>
 * @method void setName(string $Name) 设置<p>消费者名称，最长 60 字符。</p>
 * @method string getPriority() 获取<p>优先级，默认Medium</p><p>枚举值：</p><ul><li>Low： 低优先级</li><li>Medium： 中优先级</li><li>High： 高优先级</li></ul>
 * @method void setPriority(string $Priority) 设置<p>优先级，默认Medium</p><p>枚举值：</p><ul><li>Low： 低优先级</li><li>Medium： 中优先级</li><li>High： 高优先级</li></ul>
 * @method string getDescription() 获取<p>消费者描述。最长 200 字符。</p>
 * @method void setDescription(string $Description) 设置<p>消费者描述。最长 200 字符。</p>
 */
class ModifyCloudNativeAPIGatewayConsumerRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例id</p>
     */
    public $GatewayId;

    /**
     * @var string <p>消费者 ID。</p>
     */
    public $ConsumerId;

    /**
     * @var string <p>消费者名称，最长 60 字符。</p>
     */
    public $Name;

    /**
     * @var string <p>优先级，默认Medium</p><p>枚举值：</p><ul><li>Low： 低优先级</li><li>Medium： 中优先级</li><li>High： 高优先级</li></ul>
     */
    public $Priority;

    /**
     * @var string <p>消费者描述。最长 200 字符。</p>
     */
    public $Description;

    /**
     * @param string $GatewayId <p>网关实例id</p>
     * @param string $ConsumerId <p>消费者 ID。</p>
     * @param string $Name <p>消费者名称，最长 60 字符。</p>
     * @param string $Priority <p>优先级，默认Medium</p><p>枚举值：</p><ul><li>Low： 低优先级</li><li>Medium： 中优先级</li><li>High： 高优先级</li></ul>
     * @param string $Description <p>消费者描述。最长 200 字符。</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
