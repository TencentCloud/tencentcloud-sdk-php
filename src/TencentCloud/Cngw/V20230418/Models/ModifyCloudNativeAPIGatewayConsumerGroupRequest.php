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
 * ModifyCloudNativeAPIGatewayConsumerGroup请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例id
 * @method void setGatewayId(string $GatewayId) 设置网关实例id
 * @method string getConsumerGroupId() 获取<p>消费者组 ID（以 cg- 开头）。</p>
 * @method void setConsumerGroupId(string $ConsumerGroupId) 设置<p>消费者组 ID（以 cg- 开头）。</p>
 * @method string getName() 获取<p>消费者组名称，最长 60 字符。</p>
 * @method void setName(string $Name) 设置<p>消费者组名称，最长 60 字符。</p>
 * @method string getStatus() 获取<p>启用状态。</p><p>枚举值：</p><ul><li>Enable：启用</li><li>Disable：禁用</li></ul>
 * @method void setStatus(string $Status) 设置<p>启用状态。</p><p>枚举值：</p><ul><li>Enable：启用</li><li>Disable：禁用</li></ul>
 * @method string getDescription() 获取<p>消费者组描述。最长 200 字符。</p>
 * @method void setDescription(string $Description) 设置<p>消费者组描述。最长 200 字符。</p>
 */
class ModifyCloudNativeAPIGatewayConsumerGroupRequest extends AbstractModel
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
     * @var string <p>消费者组名称，最长 60 字符。</p>
     */
    public $Name;

    /**
     * @var string <p>启用状态。</p><p>枚举值：</p><ul><li>Enable：启用</li><li>Disable：禁用</li></ul>
     */
    public $Status;

    /**
     * @var string <p>消费者组描述。最长 200 字符。</p>
     */
    public $Description;

    /**
     * @param string $GatewayId 网关实例id
     * @param string $ConsumerGroupId <p>消费者组 ID（以 cg- 开头）。</p>
     * @param string $Name <p>消费者组名称，最长 60 字符。</p>
     * @param string $Status <p>启用状态。</p><p>枚举值：</p><ul><li>Enable：启用</li><li>Disable：禁用</li></ul>
     * @param string $Description <p>消费者组描述。最长 200 字符。</p>
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
