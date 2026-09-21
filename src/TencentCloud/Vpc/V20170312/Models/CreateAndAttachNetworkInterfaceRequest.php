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
 * CreateAndAttachNetworkInterface请求参数结构体
 *
 * @method string getVpcId() 获取<p>VPC实例ID。可通过<a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>接口获取。</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC实例ID。可通过<a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>接口获取。</p>
 * @method string getNetworkInterfaceName() 获取<p>弹性网卡名称，最大长度不能超过60个字符。</p>
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) 设置<p>弹性网卡名称，最大长度不能超过60个字符。</p>
 * @method string getSubnetId() 获取<p>弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。可通过<a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a>接口获取。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。可通过<a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a>接口获取。</p>
 * @method string getInstanceId() 获取<p>云服务器实例ID。可通过<a href="https://cloud.tencent.com/document/product/213/15728">DescribeInstances</a>接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>云服务器实例ID。可通过<a href="https://cloud.tencent.com/document/product/213/15728">DescribeInstances</a>接口获取。</p>
 * @method array getPrivateIpAddresses() 获取<p>指定的内网IP信息，单次最多指定10个。</p>
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置<p>指定的内网IP信息，单次最多指定10个。</p>
 * @method integer getSecondaryPrivateIpAddressCount() 获取<p>新申请的内网IP地址个数，内网IP地址个数总和不能超过配额数。</p>
 * @method void setSecondaryPrivateIpAddressCount(integer $SecondaryPrivateIpAddressCount) 设置<p>新申请的内网IP地址个数，内网IP地址个数总和不能超过配额数。</p>
 * @method array getIpv6Addresses() 获取<p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。</p>
 * @method void setIpv6Addresses(array $Ipv6Addresses) 设置<p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。</p>
 * @method integer getIpv6AddressCount() 获取<p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。</p><p>取值范围：[1, 10]</p><p>单位：个</p>
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置<p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。</p><p>取值范围：[1, 10]</p><p>单位：个</p>
 * @method string getQosLevel() 获取<p>IP服务质量等级，和SecondaryPrivateIpAddressCount配合使用，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p>
 * @method void setQosLevel(string $QosLevel) 设置<p>IP服务质量等级，和SecondaryPrivateIpAddressCount配合使用，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p>
 * @method array getSecurityGroupIds() 获取<p>指定绑定的安全组，例如：[&#39;sg-1dd51d&#39;]。可通过<a href="https://cloud.tencent.com/document/product/215/15808">DescribeSecurityGroups</a>接口获取。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>指定绑定的安全组，例如：[&#39;sg-1dd51d&#39;]。可通过<a href="https://cloud.tencent.com/document/product/215/15808">DescribeSecurityGroups</a>接口获取。</p>
 * @method string getNetworkInterfaceDescription() 获取<p>弹性网卡描述，可任意命名，但不得超过60个字符。</p>
 * @method void setNetworkInterfaceDescription(string $NetworkInterfaceDescription) 设置<p>弹性网卡描述，可任意命名，但不得超过60个字符。</p>
 * @method array getTags() 获取<p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
 * @method void setTags(array $Tags) 设置<p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
 * @method integer getAttachType() 获取<p>绑定类型：0 标准型 1 扩展型。</p>
 * @method void setAttachType(integer $AttachType) 设置<p>绑定类型：0 标准型 1 扩展型。</p>
 * @method boolean getIsRdma() 获取<p>是否创建RDMA弹性网卡，true:创建rdma弹性网卡，false:普通弹性网卡。不填默认为false。</p>
 * @method void setIsRdma(boolean $IsRdma) 设置<p>是否创建RDMA弹性网卡，true:创建rdma弹性网卡，false:普通弹性网卡。不填默认为false。</p>
 * @method string getClientToken() 获取<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method boolean getTerminationProtection() 获取<p>删除保护。</p>
 * @method void setTerminationProtection(boolean $TerminationProtection) 设置<p>删除保护。</p>
 * @method boolean getTrafficProtection() 获取<p>流量保护。</p>
 * @method void setTrafficProtection(boolean $TrafficProtection) 设置<p>流量保护。</p>
 */
class CreateAndAttachNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string <p>VPC实例ID。可通过<a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>接口获取。</p>
     */
    public $VpcId;

    /**
     * @var string <p>弹性网卡名称，最大长度不能超过60个字符。</p>
     */
    public $NetworkInterfaceName;

    /**
     * @var string <p>弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。可通过<a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a>接口获取。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>云服务器实例ID。可通过<a href="https://cloud.tencent.com/document/product/213/15728">DescribeInstances</a>接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var array <p>指定的内网IP信息，单次最多指定10个。</p>
     */
    public $PrivateIpAddresses;

    /**
     * @var integer <p>新申请的内网IP地址个数，内网IP地址个数总和不能超过配额数。</p>
     */
    public $SecondaryPrivateIpAddressCount;

    /**
     * @var array <p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。</p>
     */
    public $Ipv6Addresses;

    /**
     * @var integer <p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。</p><p>取值范围：[1, 10]</p><p>单位：个</p>
     */
    public $Ipv6AddressCount;

    /**
     * @var string <p>IP服务质量等级，和SecondaryPrivateIpAddressCount配合使用，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p>
     */
    public $QosLevel;

    /**
     * @var array <p>指定绑定的安全组，例如：[&#39;sg-1dd51d&#39;]。可通过<a href="https://cloud.tencent.com/document/product/215/15808">DescribeSecurityGroups</a>接口获取。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>弹性网卡描述，可任意命名，但不得超过60个字符。</p>
     */
    public $NetworkInterfaceDescription;

    /**
     * @var array <p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
     */
    public $Tags;

    /**
     * @var integer <p>绑定类型：0 标准型 1 扩展型。</p>
     */
    public $AttachType;

    /**
     * @var boolean <p>是否创建RDMA弹性网卡，true:创建rdma弹性网卡，false:普通弹性网卡。不填默认为false。</p>
     */
    public $IsRdma;

    /**
     * @var string <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     */
    public $ClientToken;

    /**
     * @var boolean <p>删除保护。</p>
     */
    public $TerminationProtection;

    /**
     * @var boolean <p>流量保护。</p>
     */
    public $TrafficProtection;

    /**
     * @param string $VpcId <p>VPC实例ID。可通过<a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>接口获取。</p>
     * @param string $NetworkInterfaceName <p>弹性网卡名称，最大长度不能超过60个字符。</p>
     * @param string $SubnetId <p>弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。可通过<a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a>接口获取。</p>
     * @param string $InstanceId <p>云服务器实例ID。可通过<a href="https://cloud.tencent.com/document/product/213/15728">DescribeInstances</a>接口获取。</p>
     * @param array $PrivateIpAddresses <p>指定的内网IP信息，单次最多指定10个。</p>
     * @param integer $SecondaryPrivateIpAddressCount <p>新申请的内网IP地址个数，内网IP地址个数总和不能超过配额数。</p>
     * @param array $Ipv6Addresses <p>指定的<code>IPv6</code>地址列表，单次最多指定10个。与入参<code>Ipv6AddressCount</code>合并计算配额。</p>
     * @param integer $Ipv6AddressCount <p>自动分配<code>IPv6</code>地址个数，内网IP地址个数总和不能超过配额数。与入参<code>Ipv6Addresses</code>合并计算配额。</p><p>取值范围：[1, 10]</p><p>单位：个</p>
     * @param string $QosLevel <p>IP服务质量等级，和SecondaryPrivateIpAddressCount配合使用，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。</p>
     * @param array $SecurityGroupIds <p>指定绑定的安全组，例如：[&#39;sg-1dd51d&#39;]。可通过<a href="https://cloud.tencent.com/document/product/215/15808">DescribeSecurityGroups</a>接口获取。</p>
     * @param string $NetworkInterfaceDescription <p>弹性网卡描述，可任意命名，但不得超过60个字符。</p>
     * @param array $Tags <p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
     * @param integer $AttachType <p>绑定类型：0 标准型 1 扩展型。</p>
     * @param boolean $IsRdma <p>是否创建RDMA弹性网卡，true:创建rdma弹性网卡，false:普通弹性网卡。不填默认为false。</p>
     * @param string $ClientToken <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     * @param boolean $TerminationProtection <p>删除保护。</p>
     * @param boolean $TrafficProtection <p>流量保护。</p>
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

        if (array_key_exists("NetworkInterfaceName",$param) and $param["NetworkInterfaceName"] !== null) {
            $this->NetworkInterfaceName = $param["NetworkInterfaceName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = [];
            foreach ($param["PrivateIpAddresses"] as $key => $value){
                $obj = new PrivateIpAddressSpecification();
                $obj->deserialize($value);
                array_push($this->PrivateIpAddresses, $obj);
            }
        }

        if (array_key_exists("SecondaryPrivateIpAddressCount",$param) and $param["SecondaryPrivateIpAddressCount"] !== null) {
            $this->SecondaryPrivateIpAddressCount = $param["SecondaryPrivateIpAddressCount"];
        }

        if (array_key_exists("Ipv6Addresses",$param) and $param["Ipv6Addresses"] !== null) {
            $this->Ipv6Addresses = [];
            foreach ($param["Ipv6Addresses"] as $key => $value){
                $obj = new Ipv6Address();
                $obj->deserialize($value);
                array_push($this->Ipv6Addresses, $obj);
            }
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("NetworkInterfaceDescription",$param) and $param["NetworkInterfaceDescription"] !== null) {
            $this->NetworkInterfaceDescription = $param["NetworkInterfaceDescription"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AttachType",$param) and $param["AttachType"] !== null) {
            $this->AttachType = $param["AttachType"];
        }

        if (array_key_exists("IsRdma",$param) and $param["IsRdma"] !== null) {
            $this->IsRdma = $param["IsRdma"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("TerminationProtection",$param) and $param["TerminationProtection"] !== null) {
            $this->TerminationProtection = $param["TerminationProtection"];
        }

        if (array_key_exists("TrafficProtection",$param) and $param["TrafficProtection"] !== null) {
            $this->TrafficProtection = $param["TrafficProtection"];
        }
    }
}
