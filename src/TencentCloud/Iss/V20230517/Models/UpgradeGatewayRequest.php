<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeGateway请求参数结构体
 *
 * @method string getGatewayId() 获取网关索引ID（从获取网关列表ListGateways接口中获取）
 * @method void setGatewayId(string $GatewayId) 设置网关索引ID（从获取网关列表ListGateways接口中获取）
 */
class UpgradeGatewayRequest extends AbstractModel
{
    /**
     * @var string 网关索引ID（从获取网关列表ListGateways接口中获取）
     */
    public $GatewayId;

    /**
     * @param string $GatewayId 网关索引ID（从获取网关列表ListGateways接口中获取）
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
    }
}
