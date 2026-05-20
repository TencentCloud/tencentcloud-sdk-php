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
 * AddCloudNativeAPIGatewayConsumerGroupAuth请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例id
 * @method void setGatewayId(string $GatewayId) 设置网关实例id
 * @method string getResourceType() 获取资源类型:

- ModelAPI: 模型API
 * @method void setResourceType(string $ResourceType) 设置资源类型:

- ModelAPI: 模型API
 * @method string getResourceId() 获取对应资源的id
 * @method void setResourceId(string $ResourceId) 设置对应资源的id
 * @method array getConsumerGroupIds() 获取资源ID
 * @method void setConsumerGroupIds(array $ConsumerGroupIds) 设置资源ID
 */
class AddCloudNativeAPIGatewayConsumerGroupAuthRequest extends AbstractModel
{
    /**
     * @var string 网关实例id
     */
    public $GatewayId;

    /**
     * @var string 资源类型:

- ModelAPI: 模型API
     */
    public $ResourceType;

    /**
     * @var string 对应资源的id
     */
    public $ResourceId;

    /**
     * @var array 资源ID
     */
    public $ConsumerGroupIds;

    /**
     * @param string $GatewayId 网关实例id
     * @param string $ResourceType 资源类型:

- ModelAPI: 模型API
     * @param string $ResourceId 对应资源的id
     * @param array $ConsumerGroupIds 资源ID
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ConsumerGroupIds",$param) and $param["ConsumerGroupIds"] !== null) {
            $this->ConsumerGroupIds = $param["ConsumerGroupIds"];
        }
    }
}
