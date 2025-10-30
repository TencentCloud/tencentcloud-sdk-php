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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUserVpcConnection请求参数结构体
 *
 * @method string getEngineNetworkId() 获取引擎网络ID
 * @method void setEngineNetworkId(string $EngineNetworkId) 设置引擎网络ID
 * @method string getUserVpcEndpointId() 获取终端节点ID
 * @method void setUserVpcEndpointId(string $UserVpcEndpointId) 设置终端节点ID
 */
class DeleteUserVpcConnectionRequest extends AbstractModel
{
    /**
     * @var string 引擎网络ID
     */
    public $EngineNetworkId;

    /**
     * @var string 终端节点ID
     */
    public $UserVpcEndpointId;

    /**
     * @param string $EngineNetworkId 引擎网络ID
     * @param string $UserVpcEndpointId 终端节点ID
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
        if (array_key_exists("EngineNetworkId",$param) and $param["EngineNetworkId"] !== null) {
            $this->EngineNetworkId = $param["EngineNetworkId"];
        }

        if (array_key_exists("UserVpcEndpointId",$param) and $param["UserVpcEndpointId"] !== null) {
            $this->UserVpcEndpointId = $param["UserVpcEndpointId"];
        }
    }
}
