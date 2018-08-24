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
 * @method string getDirectConnectGatewayId() 获取专线网关ID
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) 设置专线网关ID
 * @method string getDirectConnectGatewayName() 获取专线网关名称
 * @method void setDirectConnectGatewayName(string $DirectConnectGatewayName) 设置专线网关名称
 * @method string getVpcId() 获取VPC实例ID
 * @method void setVpcId(string $VpcId) 设置VPC实例ID
 * @method string getNetworkType() 获取关联网络类型，可选值：
<li>VPC - 私有网络</li>
<li>CCN - 云联网</li>
 * @method void setNetworkType(string $NetworkType) 设置关联网络类型，可选值：
<li>VPC - 私有网络</li>
<li>CCN - 云联网</li>
 * @method string getNetworkInstanceId() 获取<li>NetworkType 为 VPC 时，这里传值为私有网络实例ID</li>
<li>NetworkType 为 NAT 时，这里传值为云联网实例ID</li>
 * @method void setNetworkInstanceId(string $NetworkInstanceId) 设置<li>NetworkType 为 VPC 时，这里传值为私有网络实例ID</li>
<li>NetworkType 为 NAT 时，这里传值为云联网实例ID</li>
 * @method string getGatewayType() 获取网关类型，可选值：
<li>NORMAL - （默认）标准型，注：云联网只支持标准型</li>
<li>NAT - NAT型</li>NAT类型支持网络地址转换配置，类型确定后不能修改；一个私有网络可以创建一个NAT类型的专线网关和一个非NAT类型的专线网关
 * @method void setGatewayType(string $GatewayType) 设置网关类型，可选值：
<li>NORMAL - （默认）标准型，注：云联网只支持标准型</li>
<li>NAT - NAT型</li>NAT类型支持网络地址转换配置，类型确定后不能修改；一个私有网络可以创建一个NAT类型的专线网关和一个非NAT类型的专线网关
 * @method integer getDirectConnectTunnelCount() 获取专线通道数
 * @method void setDirectConnectTunnelCount(integer $DirectConnectTunnelCount) 设置专线通道数
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */

/**
 *专线网关对象。
 */
class DirectConnectGateway extends AbstractModel
{
    /**
     * @var string 专线网关ID
     */
    public $DirectConnectGatewayId;

    /**
     * @var string 专线网关名称
     */
    public $DirectConnectGatewayName;

    /**
     * @var string VPC实例ID
     */
    public $VpcId;

    /**
     * @var string 关联网络类型，可选值：
<li>VPC - 私有网络</li>
<li>CCN - 云联网</li>
     */
    public $NetworkType;

    /**
     * @var string <li>NetworkType 为 VPC 时，这里传值为私有网络实例ID</li>
<li>NetworkType 为 NAT 时，这里传值为云联网实例ID</li>
     */
    public $NetworkInstanceId;

    /**
     * @var string 网关类型，可选值：
<li>NORMAL - （默认）标准型，注：云联网只支持标准型</li>
<li>NAT - NAT型</li>NAT类型支持网络地址转换配置，类型确定后不能修改；一个私有网络可以创建一个NAT类型的专线网关和一个非NAT类型的专线网关
     */
    public $GatewayType;

    /**
     * @var integer 专线通道数
     */
    public $DirectConnectTunnelCount;

    /**
     * @var string 创建时间
     */
    public $CreateTime;
    /**
     * @param string $DirectConnectGatewayId 专线网关ID
     * @param string $DirectConnectGatewayName 专线网关名称
     * @param string $VpcId VPC实例ID
     * @param string $NetworkType 关联网络类型，可选值：
<li>VPC - 私有网络</li>
<li>CCN - 云联网</li>
     * @param string $NetworkInstanceId <li>NetworkType 为 VPC 时，这里传值为私有网络实例ID</li>
<li>NetworkType 为 NAT 时，这里传值为云联网实例ID</li>
     * @param string $GatewayType 网关类型，可选值：
<li>NORMAL - （默认）标准型，注：云联网只支持标准型</li>
<li>NAT - NAT型</li>NAT类型支持网络地址转换配置，类型确定后不能修改；一个私有网络可以创建一个NAT类型的专线网关和一个非NAT类型的专线网关
     * @param integer $DirectConnectTunnelCount 专线通道数
     * @param string $CreateTime 创建时间
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("DirectConnectGatewayName",$param) and $param["DirectConnectGatewayName"] !== null) {
            $this->DirectConnectGatewayName = $param["DirectConnectGatewayName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("DirectConnectTunnelCount",$param) and $param["DirectConnectTunnelCount"] !== null) {
            $this->DirectConnectTunnelCount = $param["DirectConnectTunnelCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
