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
 * ModifyCloudNativeAPIGatewayMCPRouteStatus请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关ID</p>
 * @method string getRouteId() 获取<p>路由ID</p>
 * @method void setRouteId(string $RouteId) 设置<p>路由ID</p>
 * @method string getServerId() 获取<p>MCP Server ID</p>
 * @method void setServerId(string $ServerId) 设置<p>MCP Server ID</p>
 * @method string getStatus() 获取<p>启用/禁用状态</p><p>枚举值：</p><ul><li>Enabled： 启用</li><li>Disabled： 禁用</li></ul>
 * @method void setStatus(string $Status) 设置<p>启用/禁用状态</p><p>枚举值：</p><ul><li>Enabled： 启用</li><li>Disabled： 禁用</li></ul>
 */
class ModifyCloudNativeAPIGatewayMCPRouteStatusRequest extends AbstractModel
{
    /**
     * @var string <p>网关ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>路由ID</p>
     */
    public $RouteId;

    /**
     * @var string <p>MCP Server ID</p>
     */
    public $ServerId;

    /**
     * @var string <p>启用/禁用状态</p><p>枚举值：</p><ul><li>Enabled： 启用</li><li>Disabled： 禁用</li></ul>
     */
    public $Status;

    /**
     * @param string $GatewayId <p>网关ID</p>
     * @param string $RouteId <p>路由ID</p>
     * @param string $ServerId <p>MCP Server ID</p>
     * @param string $Status <p>启用/禁用状态</p><p>枚举值：</p><ul><li>Enabled： 启用</li><li>Disabled： 禁用</li></ul>
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

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
