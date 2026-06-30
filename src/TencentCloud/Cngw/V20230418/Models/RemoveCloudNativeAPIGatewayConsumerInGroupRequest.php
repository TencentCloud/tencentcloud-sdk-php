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
 * RemoveCloudNativeAPIGatewayConsumerInGroup请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例id
 * @method void setGatewayId(string $GatewayId) 设置网关实例id
 * @method string getConsumerGroupId() 获取<p>消费者组 ID（以 cg- 开头）。</p>
 * @method void setConsumerGroupId(string $ConsumerGroupId) 设置<p>消费者组 ID（以 cg- 开头）。</p>
 * @method array getConsumerIds() 获取<p>消费者 ID 列表，长度 1-10。</p>
 * @method void setConsumerIds(array $ConsumerIds) 设置<p>消费者 ID 列表，长度 1-10。</p>
 */
class RemoveCloudNativeAPIGatewayConsumerInGroupRequest extends AbstractModel
{
    /**
     * @var string 网关实例id
     */
    public $GatewayId;

    /**
     * @var string <p>消费者组 ID（以 cg- 开头）。</p>
     */
    public $ConsumerGroupId;

    /**
     * @var array <p>消费者 ID 列表，长度 1-10。</p>
     */
    public $ConsumerIds;

    /**
     * @param string $GatewayId 网关实例id
     * @param string $ConsumerGroupId <p>消费者组 ID（以 cg- 开头）。</p>
     * @param array $ConsumerIds <p>消费者 ID 列表，长度 1-10。</p>
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

        if (array_key_exists("ConsumerGroupId",$param) and $param["ConsumerGroupId"] !== null) {
            $this->ConsumerGroupId = $param["ConsumerGroupId"];
        }

        if (array_key_exists("ConsumerIds",$param) and $param["ConsumerIds"] !== null) {
            $this->ConsumerIds = $param["ConsumerIds"];
        }
    }
}
