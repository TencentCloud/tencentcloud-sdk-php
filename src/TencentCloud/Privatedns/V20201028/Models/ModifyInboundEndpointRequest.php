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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInboundEndpoint请求参数结构体
 *
 * @method string getEndpointId() 获取终端节点ID
 * @method void setEndpointId(string $EndpointId) 设置终端节点ID
 * @method string getEndpointName() 获取终端节点名称
 * @method void setEndpointName(string $EndpointName) 设置终端节点名称
 */
class ModifyInboundEndpointRequest extends AbstractModel
{
    /**
     * @var string 终端节点ID
     */
    public $EndpointId;

    /**
     * @var string 终端节点名称
     */
    public $EndpointName;

    /**
     * @param string $EndpointId 终端节点ID
     * @param string $EndpointName 终端节点名称
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
        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }

        if (array_key_exists("EndpointName",$param) and $param["EndpointName"] !== null) {
            $this->EndpointName = $param["EndpointName"];
        }
    }
}
