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
 * 私有网络(VPC)对象。
 *
 * @method string getVpcName() 获取<p><code>VPC</code>名称。</p>
 * @method void setVpcName(string $VpcName) 设置<p><code>VPC</code>名称。</p>
 * @method string getVpcId() 获取<p><code>VPC</code>实例<code>ID</code>，例如：vpc-azd4dt1c。</p>
 * @method void setVpcId(string $VpcId) 设置<p><code>VPC</code>实例<code>ID</code>，例如：vpc-azd4dt1c。</p>
 * @method string getCidrBlock() 获取<p><code>VPC</code>的<code>IPv4</code> <code>CIDR</code>。</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p><code>VPC</code>的<code>IPv4</code> <code>CIDR</code>。</p>
 * @method boolean getIsDefault() 获取<p>是否默认<code>VPC</code>。</p>
 * @method void setIsDefault(boolean $IsDefault) 设置<p>是否默认<code>VPC</code>。</p>
 * @method boolean getEnableMulticast() 获取<p>是否开启组播。</p>
 * @method void setEnableMulticast(boolean $EnableMulticast) 设置<p>是否开启组播。</p>
 * @method string getCreatedTime() 获取<p>创建时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。</p>
 * @method array getDnsServerSet() 获取<p><code>DNS</code>列表。</p>
 * @method void setDnsServerSet(array $DnsServerSet) 设置<p><code>DNS</code>列表。</p>
 * @method string getDomainName() 获取<p><code>DHCP</code>域名选项值。</p>
 * @method void setDomainName(string $DomainName) 设置<p><code>DHCP</code>域名选项值。</p>
 * @method string getDhcpOptionsId() 获取<p><code>DHCP</code>选项集<code>ID</code>。</p>
 * @method void setDhcpOptionsId(string $DhcpOptionsId) 设置<p><code>DHCP</code>选项集<code>ID</code>。</p>
 * @method boolean getEnableDhcp() 获取<p>是否开启<code>DHCP</code>。</p>
 * @method void setEnableDhcp(boolean $EnableDhcp) 设置<p>是否开启<code>DHCP</code>。</p>
 * @method string getIpv6CidrBlock() 获取<p><code>VPC</code>的<code>IPv6</code> <code>CIDR</code>。</p>
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置<p><code>VPC</code>的<code>IPv6</code> <code>CIDR</code>。</p>
 * @method array getTagSet() 获取<p>标签键值对</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签键值对</p>
 * @method array getAssistantCidrSet() 获取<p>辅助CIDR</p>
 * @method void setAssistantCidrSet(array $AssistantCidrSet) 设置<p>辅助CIDR</p>
 * @method boolean getEnableRouteVpcPublish() 获取<p>vpc关联云联网时路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时,请通过工单加入白名单</p>
 * @method void setEnableRouteVpcPublish(boolean $EnableRouteVpcPublish) 设置<p>vpc关联云联网时路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时,请通过工单加入白名单</p>
 * @method array getIpv6CidrBlockSet() 获取<p>返回多运营商IPv6 Cidr Block</p>
 * @method void setIpv6CidrBlockSet(array $Ipv6CidrBlockSet) 设置<p>返回多运营商IPv6 Cidr Block</p>
 * @method boolean getEnableRouteVpcPublishIpv6() 获取<p>vpc关联云联网时IPv6类型路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时，请通过工单加入白名单。</p>
 * @method void setEnableRouteVpcPublishIpv6(boolean $EnableRouteVpcPublishIpv6) 设置<p>vpc关联云联网时IPv6类型路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时，请通过工单加入白名单。</p>
 */
class Vpc extends AbstractModel
{
    /**
     * @var string <p><code>VPC</code>名称。</p>
     */
    public $VpcName;

    /**
     * @var string <p><code>VPC</code>实例<code>ID</code>，例如：vpc-azd4dt1c。</p>
     */
    public $VpcId;

    /**
     * @var string <p><code>VPC</code>的<code>IPv4</code> <code>CIDR</code>。</p>
     */
    public $CidrBlock;

    /**
     * @var boolean <p>是否默认<code>VPC</code>。</p>
     */
    public $IsDefault;

    /**
     * @var boolean <p>是否开启组播。</p>
     */
    public $EnableMulticast;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedTime;

    /**
     * @var array <p><code>DNS</code>列表。</p>
     */
    public $DnsServerSet;

    /**
     * @var string <p><code>DHCP</code>域名选项值。</p>
     */
    public $DomainName;

    /**
     * @var string <p><code>DHCP</code>选项集<code>ID</code>。</p>
     */
    public $DhcpOptionsId;

    /**
     * @var boolean <p>是否开启<code>DHCP</code>。</p>
     */
    public $EnableDhcp;

    /**
     * @var string <p><code>VPC</code>的<code>IPv6</code> <code>CIDR</code>。</p>
     */
    public $Ipv6CidrBlock;

    /**
     * @var array <p>标签键值对</p>
     */
    public $TagSet;

    /**
     * @var array <p>辅助CIDR</p>
     */
    public $AssistantCidrSet;

    /**
     * @var boolean <p>vpc关联云联网时路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时,请通过工单加入白名单</p>
     */
    public $EnableRouteVpcPublish;

    /**
     * @var array <p>返回多运营商IPv6 Cidr Block</p>
     */
    public $Ipv6CidrBlockSet;

    /**
     * @var boolean <p>vpc关联云联网时IPv6类型路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时，请通过工单加入白名单。</p>
     */
    public $EnableRouteVpcPublishIpv6;

    /**
     * @param string $VpcName <p><code>VPC</code>名称。</p>
     * @param string $VpcId <p><code>VPC</code>实例<code>ID</code>，例如：vpc-azd4dt1c。</p>
     * @param string $CidrBlock <p><code>VPC</code>的<code>IPv4</code> <code>CIDR</code>。</p>
     * @param boolean $IsDefault <p>是否默认<code>VPC</code>。</p>
     * @param boolean $EnableMulticast <p>是否开启组播。</p>
     * @param string $CreatedTime <p>创建时间。</p>
     * @param array $DnsServerSet <p><code>DNS</code>列表。</p>
     * @param string $DomainName <p><code>DHCP</code>域名选项值。</p>
     * @param string $DhcpOptionsId <p><code>DHCP</code>选项集<code>ID</code>。</p>
     * @param boolean $EnableDhcp <p>是否开启<code>DHCP</code>。</p>
     * @param string $Ipv6CidrBlock <p><code>VPC</code>的<code>IPv6</code> <code>CIDR</code>。</p>
     * @param array $TagSet <p>标签键值对</p>
     * @param array $AssistantCidrSet <p>辅助CIDR</p>
     * @param boolean $EnableRouteVpcPublish <p>vpc关联云联网时路由发布策略， true：开启cidr路由发布，false：开启subnet子网路由发布。创建vpc时默认为子网路由发布，当选择cidr路由发布时,请通过工单加入白名单</p>
     * @param array $Ipv6CidrBlockSet <p>返回多运营商IPv6 Cidr Block</p>
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("EnableMulticast",$param) and $param["EnableMulticast"] !== null) {
            $this->EnableMulticast = $param["EnableMulticast"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DnsServerSet",$param) and $param["DnsServerSet"] !== null) {
            $this->DnsServerSet = $param["DnsServerSet"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("DhcpOptionsId",$param) and $param["DhcpOptionsId"] !== null) {
            $this->DhcpOptionsId = $param["DhcpOptionsId"];
        }

        if (array_key_exists("EnableDhcp",$param) and $param["EnableDhcp"] !== null) {
            $this->EnableDhcp = $param["EnableDhcp"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("AssistantCidrSet",$param) and $param["AssistantCidrSet"] !== null) {
            $this->AssistantCidrSet = [];
            foreach ($param["AssistantCidrSet"] as $key => $value){
                $obj = new AssistantCidr();
                $obj->deserialize($value);
                array_push($this->AssistantCidrSet, $obj);
            }
        }

        if (array_key_exists("EnableRouteVpcPublish",$param) and $param["EnableRouteVpcPublish"] !== null) {
            $this->EnableRouteVpcPublish = $param["EnableRouteVpcPublish"];
        }

        if (array_key_exists("Ipv6CidrBlockSet",$param) and $param["Ipv6CidrBlockSet"] !== null) {
            $this->Ipv6CidrBlockSet = [];
            foreach ($param["Ipv6CidrBlockSet"] as $key => $value){
                $obj = new ISPIPv6CidrBlock();
                $obj->deserialize($value);
                array_push($this->Ipv6CidrBlockSet, $obj);
            }
        }

        if (array_key_exists("EnableRouteVpcPublishIpv6",$param) and $param["EnableRouteVpcPublishIpv6"] !== null) {
            $this->EnableRouteVpcPublishIpv6 = $param["EnableRouteVpcPublishIpv6"];
        }
    }
}
