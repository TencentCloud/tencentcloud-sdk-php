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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专用通道路由
 *
 * @method string getRouteId() 获取专用通道路由ID
 * @method void setRouteId(string $RouteId) 设置专用通道路由ID
 * @method string getDestinationCidrBlock() 获取网段CIDR
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置网段CIDR
 * @method string getRouteType() 获取路由类型：BGP/STATIC路由
 * @method void setRouteType(string $RouteType) 设置路由类型：BGP/STATIC路由
 * @method string getStatus() 获取ENABLE：路由启用，DISABLE：路由禁用
 * @method void setStatus(string $Status) 设置ENABLE：路由启用，DISABLE：路由禁用
 * @method array getASPath() 获取ASPath信息
 * @method void setASPath(array $ASPath) 设置ASPath信息
 * @method string getNextHop() 获取路由下一跳IP
 * @method void setNextHop(string $NextHop) 设置路由下一跳IP
 * @method string getUpdateTime() 获取路由更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置路由更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getApplyOnTunnelEnable() 获取是否配置在通道上
 * @method void setApplyOnTunnelEnable(boolean $ApplyOnTunnelEnable) 设置是否配置在通道上
 */
class DirectConnectTunnelRoute extends AbstractModel
{
    /**
     * @var string 专用通道路由ID
     */
    public $RouteId;

    /**
     * @var string 网段CIDR
     */
    public $DestinationCidrBlock;

    /**
     * @var string 路由类型：BGP/STATIC路由
     */
    public $RouteType;

    /**
     * @var string ENABLE：路由启用，DISABLE：路由禁用
     */
    public $Status;

    /**
     * @var array ASPath信息
     */
    public $ASPath;

    /**
     * @var string 路由下一跳IP
     */
    public $NextHop;

    /**
     * @var string 路由更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var boolean 是否配置在通道上
     */
    public $ApplyOnTunnelEnable;

    /**
     * @param string $RouteId 专用通道路由ID
     * @param string $DestinationCidrBlock 网段CIDR
     * @param string $RouteType 路由类型：BGP/STATIC路由
     * @param string $Status ENABLE：路由启用，DISABLE：路由禁用
     * @param array $ASPath ASPath信息
     * @param string $NextHop 路由下一跳IP
     * @param string $UpdateTime 路由更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ApplyOnTunnelEnable 是否配置在通道上
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

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ASPath",$param) and $param["ASPath"] !== null) {
            $this->ASPath = $param["ASPath"];
        }

        if (array_key_exists("NextHop",$param) and $param["NextHop"] !== null) {
            $this->NextHop = $param["NextHop"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ApplyOnTunnelEnable",$param) and $param["ApplyOnTunnelEnable"] !== null) {
            $this->ApplyOnTunnelEnable = $param["ApplyOnTunnelEnable"];
        }
    }
}
