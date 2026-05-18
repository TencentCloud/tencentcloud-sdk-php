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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了VPC相关信息，包括子网，IP信息等
 *
 * @method string getVpcId() 获取<p>私有网络ID，形如<code>vpc-xxx</code>。有效的VpcId可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> ，从接口返回中的<code>VpcId</code>字段获取。若在创建子机时VpcId与SubnetId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID，形如<code>vpc-xxx</code>。有效的VpcId可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> ，从接口返回中的<code>VpcId</code>字段获取。若在创建子机时VpcId与SubnetId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
 * @method string getSubnetId() 获取<p>私有网络子网ID，形如<code>subnet-xxx</code>。有效的私有网络子网ID可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">控制台</a>查询；也可以调用接口  <a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a> ，从接口返回中的<code>SubnetId</code>字段获取。若在创建子机时SubnetId与VpcId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络子网ID，形如<code>subnet-xxx</code>。有效的私有网络子网ID可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">控制台</a>查询；也可以调用接口  <a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a> ，从接口返回中的<code>SubnetId</code>字段获取。若在创建子机时SubnetId与VpcId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
 * @method boolean getAsVpcGateway() 获取<p>是否用作公网网关。公网网关只有在实例拥有公网IP以及处于私有网络下时才能正常使用。取值范围：<li>true：表示用作公网网关</li><li>false：表示不作为公网网关</li>默认取值：false。</p>
 * @method void setAsVpcGateway(boolean $AsVpcGateway) 设置<p>是否用作公网网关。公网网关只有在实例拥有公网IP以及处于私有网络下时才能正常使用。取值范围：<li>true：表示用作公网网关</li><li>false：表示不作为公网网关</li>默认取值：false。</p>
 * @method array getPrivateIpAddresses() 获取<p>私有网络子网 IP 数组，在创建实例、修改实例vpc属性操作中可使用此参数。当前仅批量创建多台实例时支持传入相同子网的多个 IP。</p>
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置<p>私有网络子网 IP 数组，在创建实例、修改实例vpc属性操作中可使用此参数。当前仅批量创建多台实例时支持传入相同子网的多个 IP。</p>
 * @method integer getIpv6AddressCount() 获取<p>为弹性网卡指定随机生成的 IPv6 地址数量。</p>
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置<p>为弹性网卡指定随机生成的 IPv6 地址数量。</p>
 */
class VirtualPrivateCloud extends AbstractModel
{
    /**
     * @var string <p>私有网络ID，形如<code>vpc-xxx</code>。有效的VpcId可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> ，从接口返回中的<code>VpcId</code>字段获取。若在创建子机时VpcId与SubnetId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络子网ID，形如<code>subnet-xxx</code>。有效的私有网络子网ID可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">控制台</a>查询；也可以调用接口  <a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a> ，从接口返回中的<code>SubnetId</code>字段获取。若在创建子机时SubnetId与VpcId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
     */
    public $SubnetId;

    /**
     * @var boolean <p>是否用作公网网关。公网网关只有在实例拥有公网IP以及处于私有网络下时才能正常使用。取值范围：<li>true：表示用作公网网关</li><li>false：表示不作为公网网关</li>默认取值：false。</p>
     */
    public $AsVpcGateway;

    /**
     * @var array <p>私有网络子网 IP 数组，在创建实例、修改实例vpc属性操作中可使用此参数。当前仅批量创建多台实例时支持传入相同子网的多个 IP。</p>
     */
    public $PrivateIpAddresses;

    /**
     * @var integer <p>为弹性网卡指定随机生成的 IPv6 地址数量。</p>
     */
    public $Ipv6AddressCount;

    /**
     * @param string $VpcId <p>私有网络ID，形如<code>vpc-xxx</code>。有效的VpcId可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> ，从接口返回中的<code>VpcId</code>字段获取。若在创建子机时VpcId与SubnetId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
     * @param string $SubnetId <p>私有网络子网ID，形如<code>subnet-xxx</code>。有效的私有网络子网ID可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">控制台</a>查询；也可以调用接口  <a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a> ，从接口返回中的<code>SubnetId</code>字段获取。若在创建子机时SubnetId与VpcId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
     * @param boolean $AsVpcGateway <p>是否用作公网网关。公网网关只有在实例拥有公网IP以及处于私有网络下时才能正常使用。取值范围：<li>true：表示用作公网网关</li><li>false：表示不作为公网网关</li>默认取值：false。</p>
     * @param array $PrivateIpAddresses <p>私有网络子网 IP 数组，在创建实例、修改实例vpc属性操作中可使用此参数。当前仅批量创建多台实例时支持传入相同子网的多个 IP。</p>
     * @param integer $Ipv6AddressCount <p>为弹性网卡指定随机生成的 IPv6 地址数量。</p>
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AsVpcGateway",$param) and $param["AsVpcGateway"] !== null) {
            $this->AsVpcGateway = $param["AsVpcGateway"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }
    }
}
