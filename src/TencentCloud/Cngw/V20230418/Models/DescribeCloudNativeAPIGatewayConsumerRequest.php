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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewayConsumer请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例id</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例id</p>
 * @method string getConsumerId() 获取<p>消费者ID</p>
 * @method void setConsumerId(string $ConsumerId) 设置<p>消费者ID</p>
 */
class DescribeCloudNativeAPIGatewayConsumerRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例id</p>
     */
    public $GatewayId;

    /**
     * @var string <p>消费者ID</p>
     */
    public $ConsumerId;

    /**
     * @param string $GatewayId <p>网关实例id</p>
     * @param string $ConsumerId <p>消费者ID</p>
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
    }
}
