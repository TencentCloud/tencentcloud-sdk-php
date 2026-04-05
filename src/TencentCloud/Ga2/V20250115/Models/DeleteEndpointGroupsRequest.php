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
 * DeleteEndpointGroups请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取全球加速实例ID。
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置全球加速实例ID。
 * @method string getListenerId() 获取监听器ID。
 * @method void setListenerId(string $ListenerId) 设置监听器ID。
 * @method array getEndpointGroupIds() 获取终端节点组ID。
 * @method void setEndpointGroupIds(array $EndpointGroupIds) 设置终端节点组ID。
 */
class DeleteEndpointGroupsRequest extends AbstractModel
{
    /**
     * @var string 全球加速实例ID。
     */
    public $GlobalAcceleratorId;

    /**
     * @var string 监听器ID。
     */
    public $ListenerId;

    /**
     * @var array 终端节点组ID。
     */
    public $EndpointGroupIds;

    /**
     * @param string $GlobalAcceleratorId 全球加速实例ID。
     * @param string $ListenerId 监听器ID。
     * @param array $EndpointGroupIds 终端节点组ID。
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

        if (array_key_exists("EndpointGroupIds",$param) and $param["EndpointGroupIds"] !== null) {
            $this->EndpointGroupIds = $param["EndpointGroupIds"];
        }
    }
}
