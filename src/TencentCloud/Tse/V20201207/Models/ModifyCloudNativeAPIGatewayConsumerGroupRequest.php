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
 * ModifyCloudNativeAPIGatewayConsumerGroup请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例id
 * @method void setGatewayId(string $GatewayId) 设置网关实例id
 * @method string getConsumerGroupId() 获取消费者组ID
 * @method void setConsumerGroupId(string $ConsumerGroupId) 设置消费者组ID
 * @method string getName() 获取新的消费者组名称
 * @method void setName(string $Name) 设置新的消费者组名称
 * @method string getStatus() 获取状态：
- Enable 启用
- Disable 禁用
 * @method void setStatus(string $Status) 设置状态：
- Enable 启用
- Disable 禁用
 * @method string getDescription() 获取新的消费者组描述
 * @method void setDescription(string $Description) 设置新的消费者组描述
 */
class ModifyCloudNativeAPIGatewayConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string 网关实例id
     */
    public $GatewayId;

    /**
     * @var string 消费者组ID
     */
    public $ConsumerGroupId;

    /**
     * @var string 新的消费者组名称
     */
    public $Name;

    /**
     * @var string 状态：
- Enable 启用
- Disable 禁用
     */
    public $Status;

    /**
     * @var string 新的消费者组描述
     */
    public $Description;

    /**
     * @param string $GatewayId 网关实例id
     * @param string $ConsumerGroupId 消费者组ID
     * @param string $Name 新的消费者组名称
     * @param string $Status 状态：
- Enable 启用
- Disable 禁用
     * @param string $Description 新的消费者组描述
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
