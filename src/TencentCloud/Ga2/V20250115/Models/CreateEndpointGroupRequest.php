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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEndpointGroup请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取<p>全球加速实例ID。</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>全球加速实例ID。</p>
 * @method string getListenerId() 获取<p>监听器ID。</p>
 * @method void setListenerId(string $ListenerId) 设置<p>监听器ID。</p>
 * @method string getEndpointGroupType() 获取<p>终端节点组类型。</p><p>枚举值：</p><ul><li>VIRTUAL： 自定义终端节点组</li><li>DEFAULT： 默认终端节点组</li></ul>
 * @method void setEndpointGroupType(string $EndpointGroupType) 设置<p>终端节点组类型。</p><p>枚举值：</p><ul><li>VIRTUAL： 自定义终端节点组</li><li>DEFAULT： 默认终端节点组</li></ul>
 * @method EndpointGroupConfiguration getEndpointGroupConfiguration() 获取<p>终端节点组配置。</p>
 * @method void setEndpointGroupConfiguration(EndpointGroupConfiguration $EndpointGroupConfiguration) 设置<p>终端节点组配置。</p>
 */
class CreateEndpointGroupRequest extends AbstractModel
{
    /**
     * @var string <p>全球加速实例ID。</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>监听器ID。</p>
     */
    public $ListenerId;

    /**
     * @var string <p>终端节点组类型。</p><p>枚举值：</p><ul><li>VIRTUAL： 自定义终端节点组</li><li>DEFAULT： 默认终端节点组</li></ul>
     */
    public $EndpointGroupType;

    /**
     * @var EndpointGroupConfiguration <p>终端节点组配置。</p>
     */
    public $EndpointGroupConfiguration;

    /**
     * @param string $GlobalAcceleratorId <p>全球加速实例ID。</p>
     * @param string $ListenerId <p>监听器ID。</p>
     * @param string $EndpointGroupType <p>终端节点组类型。</p><p>枚举值：</p><ul><li>VIRTUAL： 自定义终端节点组</li><li>DEFAULT： 默认终端节点组</li></ul>
     * @param EndpointGroupConfiguration $EndpointGroupConfiguration <p>终端节点组配置。</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("EndpointGroupType",$param) and $param["EndpointGroupType"] !== null) {
            $this->EndpointGroupType = $param["EndpointGroupType"];
        }

        if (array_key_exists("EndpointGroupConfiguration",$param) and $param["EndpointGroupConfiguration"] !== null) {
            $this->EndpointGroupConfiguration = new EndpointGroupConfiguration();
            $this->EndpointGroupConfiguration->deserialize($param["EndpointGroupConfiguration"]);
        }
    }
}
