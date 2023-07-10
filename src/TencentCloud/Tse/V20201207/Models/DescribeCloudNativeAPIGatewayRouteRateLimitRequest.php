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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewayRouteRateLimit请求参数结构体
 *
 * @method string getGatewayId() 获取网关Id
 * @method void setGatewayId(string $GatewayId) 设置网关Id
 * @method string getId() 获取路由Id，或路由名称。
不支持“未命名”
 * @method void setId(string $Id) 设置路由Id，或路由名称。
不支持“未命名”
 */
class DescribeCloudNativeAPIGatewayRouteRateLimitRequest extends AbstractModel
{
    /**
     * @var string 网关Id
     */
    public $GatewayId;

    /**
     * @var string 路由Id，或路由名称。
不支持“未命名”
     */
    public $Id;

    /**
     * @param string $GatewayId 网关Id
     * @param string $Id 路由Id，或路由名称。
不支持“未命名”
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
