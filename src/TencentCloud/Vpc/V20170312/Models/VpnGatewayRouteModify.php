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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改VPN状态参数
 *
 * @method string getRouteId() 获取VPN网关路由ID。
 * @method void setRouteId(string $RouteId) 设置VPN网关路由ID。
 * @method string getStatus() 获取VPN网关状态, ENABLE 启用, DISABLE禁用。
 * @method void setStatus(string $Status) 设置VPN网关状态, ENABLE 启用, DISABLE禁用。
 * @method string getDescription() 获取VPN路由备注
 * @method void setDescription(string $Description) 设置VPN路由备注
 */
class VpnGatewayRouteModify extends AbstractModel
{
    /**
     * @var string VPN网关路由ID。
     */
    public $RouteId;

    /**
     * @var string VPN网关状态, ENABLE 启用, DISABLE禁用。
     */
    public $Status;

    /**
     * @var string VPN路由备注
     */
    public $Description;

    /**
     * @param string $RouteId VPN网关路由ID。
     * @param string $Status VPN网关状态, ENABLE 启用, DISABLE禁用。
     * @param string $Description VPN路由备注
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
        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
