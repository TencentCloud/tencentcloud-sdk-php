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
 * AssociateIPv6Address请求参数结构体
 *
 * @method string getIPv6AddressId() 获取弹性公网IPv6唯一ID，EIPv6 唯一 ID 形如：eipv6-11112222。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
 * @method void setIPv6AddressId(string $IPv6AddressId) 设置弹性公网IPv6唯一ID，EIPv6 唯一 ID 形如：eipv6-11112222。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
 * @method string getInstanceId() 获取要绑定的实例 ID。实例 ID 形如：ins-djflxkvi。可通过登录控制台查询，也可通过 DescribeInstances 接口返回值中的InstanceId获取。
 * @method void setInstanceId(string $InstanceId) 设置要绑定的实例 ID。实例 ID 形如：ins-djflxkvi。可通过登录控制台查询，也可通过 DescribeInstances 接口返回值中的InstanceId获取。
 * @method string getNetworkInterfaceId() 获取要绑定的弹性网卡 ID。 弹性网卡 ID 形如：eni-11112222。NetworkInterfaceId 与 InstanceId 不可同时指定。弹性网卡 ID 可通过登录[控制台](https://console.cloud.tencent.com/vpc/eni?rid=1)查询，也可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/api/215/15817)接口返回值中的networkInterfaceId获取。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置要绑定的弹性网卡 ID。 弹性网卡 ID 形如：eni-11112222。NetworkInterfaceId 与 InstanceId 不可同时指定。弹性网卡 ID 可通过登录[控制台](https://console.cloud.tencent.com/vpc/eni?rid=1)查询，也可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/api/215/15817)接口返回值中的networkInterfaceId获取。
 * @method string getPrivateIPv6Address() 获取要绑定的内网 IPv6。如果指定了 NetworkInterfaceId 则也必须指定 PrivateIPv6Address ，表示将 EIP 绑定到指定弹性网卡的指定内网 IP 上。同时要确保指定的 PrivateIPv6Address 是指定的 NetworkInterfaceId 上的一个内网 IPv6。指定弹性网卡的内网 IPv6 可通过登录[控制台](https://console.cloud.tencent.com/vpc/eni?rid=1)查询，也可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/api/215/15817)接口返回值中的Ipv6AddressSet.Address获取。
 * @method void setPrivateIPv6Address(string $PrivateIPv6Address) 设置要绑定的内网 IPv6。如果指定了 NetworkInterfaceId 则也必须指定 PrivateIPv6Address ，表示将 EIP 绑定到指定弹性网卡的指定内网 IP 上。同时要确保指定的 PrivateIPv6Address 是指定的 NetworkInterfaceId 上的一个内网 IPv6。指定弹性网卡的内网 IPv6 可通过登录[控制台](https://console.cloud.tencent.com/vpc/eni?rid=1)查询，也可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/api/215/15817)接口返回值中的Ipv6AddressSet.Address获取。
 */
class AssociateIPv6AddressRequest extends AbstractModel
{
    /**
     * @var string 弹性公网IPv6唯一ID，EIPv6 唯一 ID 形如：eipv6-11112222。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
     */
    public $IPv6AddressId;

    /**
     * @var string 要绑定的实例 ID。实例 ID 形如：ins-djflxkvi。可通过登录控制台查询，也可通过 DescribeInstances 接口返回值中的InstanceId获取。
     */
    public $InstanceId;

    /**
     * @var string 要绑定的弹性网卡 ID。 弹性网卡 ID 形如：eni-11112222。NetworkInterfaceId 与 InstanceId 不可同时指定。弹性网卡 ID 可通过登录[控制台](https://console.cloud.tencent.com/vpc/eni?rid=1)查询，也可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/api/215/15817)接口返回值中的networkInterfaceId获取。
     */
    public $NetworkInterfaceId;

    /**
     * @var string 要绑定的内网 IPv6。如果指定了 NetworkInterfaceId 则也必须指定 PrivateIPv6Address ，表示将 EIP 绑定到指定弹性网卡的指定内网 IP 上。同时要确保指定的 PrivateIPv6Address 是指定的 NetworkInterfaceId 上的一个内网 IPv6。指定弹性网卡的内网 IPv6 可通过登录[控制台](https://console.cloud.tencent.com/vpc/eni?rid=1)查询，也可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/api/215/15817)接口返回值中的Ipv6AddressSet.Address获取。
     */
    public $PrivateIPv6Address;

    /**
     * @param string $IPv6AddressId 弹性公网IPv6唯一ID，EIPv6 唯一 ID 形如：eipv6-11112222。可以使用[DescribeIPv6Addresses](https://cloud.tencent.com/document/api/215/113677)接口获取IPv6AddressId。
     * @param string $InstanceId 要绑定的实例 ID。实例 ID 形如：ins-djflxkvi。可通过登录控制台查询，也可通过 DescribeInstances 接口返回值中的InstanceId获取。
     * @param string $NetworkInterfaceId 要绑定的弹性网卡 ID。 弹性网卡 ID 形如：eni-11112222。NetworkInterfaceId 与 InstanceId 不可同时指定。弹性网卡 ID 可通过登录[控制台](https://console.cloud.tencent.com/vpc/eni?rid=1)查询，也可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/api/215/15817)接口返回值中的networkInterfaceId获取。
     * @param string $PrivateIPv6Address 要绑定的内网 IPv6。如果指定了 NetworkInterfaceId 则也必须指定 PrivateIPv6Address ，表示将 EIP 绑定到指定弹性网卡的指定内网 IP 上。同时要确保指定的 PrivateIPv6Address 是指定的 NetworkInterfaceId 上的一个内网 IPv6。指定弹性网卡的内网 IPv6 可通过登录[控制台](https://console.cloud.tencent.com/vpc/eni?rid=1)查询，也可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/api/215/15817)接口返回值中的Ipv6AddressSet.Address获取。
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
        if (array_key_exists("IPv6AddressId",$param) and $param["IPv6AddressId"] !== null) {
            $this->IPv6AddressId = $param["IPv6AddressId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("PrivateIPv6Address",$param) and $param["PrivateIPv6Address"] !== null) {
            $this->PrivateIPv6Address = $param["PrivateIPv6Address"];
        }
    }
}
