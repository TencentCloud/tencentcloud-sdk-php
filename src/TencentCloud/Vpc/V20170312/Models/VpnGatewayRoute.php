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
 * VPN网关目的路由
 *
 * @method string getDestinationCidrBlock() 获取目的端IDC网段。
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置目的端IDC网段。
 * @method string getInstanceType() 获取下一跳类型（关联实例类型）可选值："VPNCONN"（VPN通道）， "CCN"（CCN实例）。
 * @method void setInstanceType(string $InstanceType) 设置下一跳类型（关联实例类型）可选值："VPNCONN"（VPN通道）， "CCN"（CCN实例）。
 * @method string getInstanceId() 获取下一跳实例ID。
 * @method void setInstanceId(string $InstanceId) 设置下一跳实例ID。
 * @method integer getPriority() 获取优先级，可选值：0，100。
 * @method void setPriority(integer $Priority) 设置优先级，可选值：0，100。
 * @method string getStatus() 获取启用状态，可选值："ENABLE"（启用），"DISABLE"  (禁用)。
 * @method void setStatus(string $Status) 设置启用状态，可选值："ENABLE"（启用），"DISABLE"  (禁用)。
 * @method string getRouteId() 获取路由条目ID。
 * @method void setRouteId(string $RouteId) 设置路由条目ID。
 * @method string getType() 获取路由类型，可选值："VPC"（VPC路由），"CCN"（云联网传播路由），"Static"（静态路由），"BGP"（BGP路由）。
 * @method void setType(string $Type) 设置路由类型，可选值："VPC"（VPC路由），"CCN"（云联网传播路由），"Static"（静态路由），"BGP"（BGP路由）。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 */
class VpnGatewayRoute extends AbstractModel
{
    /**
     * @var string 目的端IDC网段。
     */
    public $DestinationCidrBlock;

    /**
     * @var string 下一跳类型（关联实例类型）可选值："VPNCONN"（VPN通道）， "CCN"（CCN实例）。
     */
    public $InstanceType;

    /**
     * @var string 下一跳实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 优先级，可选值：0，100。
     */
    public $Priority;

    /**
     * @var string 启用状态，可选值："ENABLE"（启用），"DISABLE"  (禁用)。
     */
    public $Status;

    /**
     * @var string 路由条目ID。
     */
    public $RouteId;

    /**
     * @var string 路由类型，可选值："VPC"（VPC路由），"CCN"（云联网传播路由），"Static"（静态路由），"BGP"（BGP路由）。
     */
    public $Type;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @param string $DestinationCidrBlock 目的端IDC网段。
     * @param string $InstanceType 下一跳类型（关联实例类型）可选值："VPNCONN"（VPN通道）， "CCN"（CCN实例）。
     * @param string $InstanceId 下一跳实例ID。
     * @param integer $Priority 优先级，可选值：0，100。
     * @param string $Status 启用状态，可选值："ENABLE"（启用），"DISABLE"  (禁用)。
     * @param string $RouteId 路由条目ID。
     * @param string $Type 路由类型，可选值："VPC"（VPC路由），"CCN"（云联网传播路由），"Static"（静态路由），"BGP"（BGP路由）。
     * @param string $CreateTime 创建时间。
     * @param string $UpdateTime 更新时间。
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
        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
