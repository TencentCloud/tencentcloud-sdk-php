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
 * 子网对象
 *
 * @method string getSubnetName() 获取<p>子网名称。</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>子网名称。</p>
 * @method string getZone() 获取<p>可用区。形如：<code>ap-guangzhou-2</code>。</p>
 * @method void setZone(string $Zone) 设置<p>可用区。形如：<code>ap-guangzhou-2</code>。</p>
 * @method string getStackType() 获取<p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
 * @method void setStackType(string $StackType) 设置<p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
 * @method string getCidrBlock() 获取<p>子网的<code>CIDR</code>。</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>子网的<code>CIDR</code>。</p>
 * @method string getIpv6CidrBlock() 获取<p>子网的 <code>IPv6</code> <code>CIDR</code>。</p>
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置<p>子网的 <code>IPv6</code> <code>CIDR</code>。</p>
 * @method string getRouteTableId() 获取<p>指定关联路由表，形如：<code>rtb-3ryrwzuu</code>。</p>
 * @method void setRouteTableId(string $RouteTableId) 设置<p>指定关联路由表，形如：<code>rtb-3ryrwzuu</code>。</p>
 */
class SubnetInput extends AbstractModel
{
    /**
     * @var string <p>子网名称。</p>
     */
    public $SubnetName;

    /**
     * @var string <p>可用区。形如：<code>ap-guangzhou-2</code>。</p>
     */
    public $Zone;

    /**
     * @var string <p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
     */
    public $StackType;

    /**
     * @var string <p>子网的<code>CIDR</code>。</p>
     */
    public $CidrBlock;

    /**
     * @var string <p>子网的 <code>IPv6</code> <code>CIDR</code>。</p>
     */
    public $Ipv6CidrBlock;

    /**
     * @var string <p>指定关联路由表，形如：<code>rtb-3ryrwzuu</code>。</p>
     */
    public $RouteTableId;

    /**
     * @param string $SubnetName <p>子网名称。</p>
     * @param string $Zone <p>可用区。形如：<code>ap-guangzhou-2</code>。</p>
     * @param string $StackType <p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
     * @param string $CidrBlock <p>子网的<code>CIDR</code>。</p>
     * @param string $Ipv6CidrBlock <p>子网的 <code>IPv6</code> <code>CIDR</code>。</p>
     * @param string $RouteTableId <p>指定关联路由表，形如：<code>rtb-3ryrwzuu</code>。</p>
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
        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("StackType",$param) and $param["StackType"] !== null) {
            $this->StackType = $param["StackType"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }
    }
}
