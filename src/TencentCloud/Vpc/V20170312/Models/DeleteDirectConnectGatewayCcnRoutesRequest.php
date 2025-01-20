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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDirectConnectGatewayCcnRoutes请求参数结构体
 *
 * @method string getDirectConnectGatewayId() 获取专线网关ID，形如：dcg-prpqlmg1
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) 设置专线网关ID，形如：dcg-prpqlmg1
 * @method array getRouteIds() 获取路由ID。形如：ccnr-f49l6u0z。
 * @method void setRouteIds(array $RouteIds) 设置路由ID。形如：ccnr-f49l6u0z。
 * @method string getAddressType() 获取地址类型，支持：IPv4、IPv6。默认IPv4。
 * @method void setAddressType(string $AddressType) 设置地址类型，支持：IPv4、IPv6。默认IPv4。
 */
class DeleteDirectConnectGatewayCcnRoutesRequest extends AbstractModel
{
    /**
     * @var string 专线网关ID，形如：dcg-prpqlmg1
     */
    public $DirectConnectGatewayId;

    /**
     * @var array 路由ID。形如：ccnr-f49l6u0z。
     */
    public $RouteIds;

    /**
     * @var string 地址类型，支持：IPv4、IPv6。默认IPv4。
     */
    public $AddressType;

    /**
     * @param string $DirectConnectGatewayId 专线网关ID，形如：dcg-prpqlmg1
     * @param array $RouteIds 路由ID。形如：ccnr-f49l6u0z。
     * @param string $AddressType 地址类型，支持：IPv4、IPv6。默认IPv4。
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
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("RouteIds",$param) and $param["RouteIds"] !== null) {
            $this->RouteIds = $param["RouteIds"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }
    }
}
