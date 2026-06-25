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
 * DeleteCloudNativeAPIGatewayLLMModelAPI请求参数结构体
 *
 * @method string getGatewayId() 获取网关 id。
 * @method void setGatewayId(string $GatewayId) 设置网关 id。
 * @method string getModelAPIId() 获取模型 API ID，全局唯一标识。
 * @method void setModelAPIId(string $ModelAPIId) 设置模型 API ID，全局唯一标识。
 */
class DeleteCloudNativeAPIGatewayLLMModelAPIRequest extends AbstractModel
{
    /**
     * @var string 网关 id。
     */
    public $GatewayId;

    /**
     * @var string 模型 API ID，全局唯一标识。
     */
    public $ModelAPIId;

    /**
     * @param string $GatewayId 网关 id。
     * @param string $ModelAPIId 模型 API ID，全局唯一标识。
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

        if (array_key_exists("ModelAPIId",$param) and $param["ModelAPIId"] !== null) {
            $this->ModelAPIId = $param["ModelAPIId"];
        }
    }
}
