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
 * CreateVpc请求参数结构体
 *
 * @method string getVpcName() 获取<p>vpc名称，最大长度不能超过60个字节。</p>
 * @method void setVpcName(string $VpcName) 设置<p>vpc名称，最大长度不能超过60个字节。</p>
 * @method string getStackType() 获取<p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
 * @method void setStackType(string $StackType) 设置<p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
 * @method string getCidrBlock() 获取<p>vpc的cidr，仅能在10.0.0.0/12，172.16.0.0/12，192.168.0.0/16这三个内网网段内。</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>vpc的cidr，仅能在10.0.0.0/12，172.16.0.0/12，192.168.0.0/16这三个内网网段内。</p>
 * @method string getIpv6CidrBlock() 获取<p><code>VPC</code>的<code>IPv6</code> <code>CIDR</code>。</p>
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置<p><code>VPC</code>的<code>IPv6</code> <code>CIDR</code>。</p>
 * @method string getAddressType() 获取<p>IPv6网段类型</p><p>枚举值：</p><ul><li>GUA： 全球单播地址</li><li>ULA： 唯一本地地址</li></ul>
 * @method void setAddressType(string $AddressType) 设置<p>IPv6网段类型</p><p>枚举值：</p><ul><li>GUA： 全球单播地址</li><li>ULA： 唯一本地地址</li></ul>
 * @method string getEnableMulticast() 获取<p>是否开启组播。true: 开启, false: 不开启。</p>
 * @method void setEnableMulticast(string $EnableMulticast) 设置<p>是否开启组播。true: 开启, false: 不开启。</p>
 * @method array getDnsServers() 获取<p>DNS地址，最多支持4个。</p>
 * @method void setDnsServers(array $DnsServers) 设置<p>DNS地址，最多支持4个。</p>
 * @method string getDomainName() 获取<p>DHCP使用的域名。</p>
 * @method void setDomainName(string $DomainName) 设置<p>DHCP使用的域名。</p>
 * @method array getTags() 获取<p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
 * @method void setTags(array $Tags) 设置<p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
 * @method boolean getEnableRouteVpcPublish() 获取<p>vpc关联云联网时路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时,请通过工单加入白名单</p>
 * @method void setEnableRouteVpcPublish(boolean $EnableRouteVpcPublish) 设置<p>vpc关联云联网时路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时,请通过工单加入白名单</p>
 * @method boolean getEnableRouteVpcPublishIpv6() 获取<p>vpc关联云联网时IPv6类型路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时，请通过工单加入白名单。</p>
 * @method void setEnableRouteVpcPublishIpv6(boolean $EnableRouteVpcPublishIpv6) 设置<p>vpc关联云联网时IPv6类型路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时，请通过工单加入白名单。</p>
 */
class CreateVpcRequest extends AbstractModel
{
    /**
     * @var string <p>vpc名称，最大长度不能超过60个字节。</p>
     */
    public $VpcName;

    /**
     * @var string <p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
     */
    public $StackType;

    /**
     * @var string <p>vpc的cidr，仅能在10.0.0.0/12，172.16.0.0/12，192.168.0.0/16这三个内网网段内。</p>
     */
    public $CidrBlock;

    /**
     * @var string <p><code>VPC</code>的<code>IPv6</code> <code>CIDR</code>。</p>
     */
    public $Ipv6CidrBlock;

    /**
     * @var string <p>IPv6网段类型</p><p>枚举值：</p><ul><li>GUA： 全球单播地址</li><li>ULA： 唯一本地地址</li></ul>
     */
    public $AddressType;

    /**
     * @var string <p>是否开启组播。true: 开启, false: 不开启。</p>
     */
    public $EnableMulticast;

    /**
     * @var array <p>DNS地址，最多支持4个。</p>
     */
    public $DnsServers;

    /**
     * @var string <p>DHCP使用的域名。</p>
     */
    public $DomainName;

    /**
     * @var array <p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
     */
    public $Tags;

    /**
     * @var boolean <p>vpc关联云联网时路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时,请通过工单加入白名单</p>
     */
    public $EnableRouteVpcPublish;

    /**
     * @var boolean <p>vpc关联云联网时IPv6类型路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时，请通过工单加入白名单。</p>
     */
    public $EnableRouteVpcPublishIpv6;

    /**
     * @param string $VpcName <p>vpc名称，最大长度不能超过60个字节。</p>
     * @param string $StackType <p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
     * @param string $CidrBlock <p>vpc的cidr，仅能在10.0.0.0/12，172.16.0.0/12，192.168.0.0/16这三个内网网段内。</p>
     * @param string $Ipv6CidrBlock <p><code>VPC</code>的<code>IPv6</code> <code>CIDR</code>。</p>
     * @param string $AddressType <p>IPv6网段类型</p><p>枚举值：</p><ul><li>GUA： 全球单播地址</li><li>ULA： 唯一本地地址</li></ul>
     * @param string $EnableMulticast <p>是否开启组播。true: 开启, false: 不开启。</p>
     * @param array $DnsServers <p>DNS地址，最多支持4个。</p>
     * @param string $DomainName <p>DHCP使用的域名。</p>
     * @param array $Tags <p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
     * @param boolean $EnableRouteVpcPublish <p>vpc关联云联网时路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时,请通过工单加入白名单</p>
     * @param boolean $EnableRouteVpcPublishIpv6 <p>vpc关联云联网时IPv6类型路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时，请通过工单加入白名单。</p>
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
        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
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

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("EnableMulticast",$param) and $param["EnableMulticast"] !== null) {
            $this->EnableMulticast = $param["EnableMulticast"];
        }

        if (array_key_exists("DnsServers",$param) and $param["DnsServers"] !== null) {
            $this->DnsServers = $param["DnsServers"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnableRouteVpcPublish",$param) and $param["EnableRouteVpcPublish"] !== null) {
            $this->EnableRouteVpcPublish = $param["EnableRouteVpcPublish"];
        }

        if (array_key_exists("EnableRouteVpcPublishIpv6",$param) and $param["EnableRouteVpcPublishIpv6"] !== null) {
            $this->EnableRouteVpcPublishIpv6 = $param["EnableRouteVpcPublishIpv6"];
        }
    }
}
