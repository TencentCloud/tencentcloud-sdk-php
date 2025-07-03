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
 * CreateNetworkInterface请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
 * @method string getNetworkInterfaceName() 获取弹性网卡名称，最大长度不能超过60个字节。
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) 设置弹性网卡名称，最大长度不能超过60个字节。
 * @method string getSubnetId() 获取弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。可通过[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)接口获取。
 * @method void setSubnetId(string $SubnetId) 设置弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。可通过[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)接口获取。
 * @method string getNetworkInterfaceDescription() 获取弹性网卡描述，可任意命名，但不得超过60个字符。
 * @method void setNetworkInterfaceDescription(string $NetworkInterfaceDescription) 设置弹性网卡描述，可任意命名，但不得超过60个字符。
 * @method integer getSecondaryPrivateIpAddressCount() 获取新申请的内网IP地址个数，内网IP地址个数总和不能超过配额数。
配额数查询：[DescribeVpcLimits](https://cloud.tencent.com/document/api/215/42942)。
 * @method void setSecondaryPrivateIpAddressCount(integer $SecondaryPrivateIpAddressCount) 设置新申请的内网IP地址个数，内网IP地址个数总和不能超过配额数。
配额数查询：[DescribeVpcLimits](https://cloud.tencent.com/document/api/215/42942)。
 * @method string getQosLevel() 获取IP服务质量等级，和SecondaryPrivateIpAddressCount配合使用，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。
 * @method void setQosLevel(string $QosLevel) 设置IP服务质量等级，和SecondaryPrivateIpAddressCount配合使用，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。
 * @method array getSecurityGroupIds() 获取指定绑定的安全组，例如：['sg-1dd51d']。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。

 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置指定绑定的安全组，例如：['sg-1dd51d']。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。

 * @method array getPrivateIpAddresses() 获取指定的内网IP信息，单次最多指定10个。
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置指定的内网IP信息，单次最多指定10个。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method string getTrunkingFlag() 获取网卡trunking模式设置，Enable-开启，Disable--关闭，默认关闭。
 * @method void setTrunkingFlag(string $TrunkingFlag) 设置网卡trunking模式设置，Enable-开启，Disable--关闭，默认关闭。
 * @method boolean getIsRdma() 获取是否创建RDMA弹性网卡，true:创建rdma弹性网卡，false:普通弹性网卡。不填默认为false
 * @method void setIsRdma(boolean $IsRdma) 设置是否创建RDMA弹性网卡，true:创建rdma弹性网卡，false:普通弹性网卡。不填默认为false
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。	
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。	
 */
class CreateNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
     */
    public $VpcId;

    /**
     * @var string 弹性网卡名称，最大长度不能超过60个字节。
     */
    public $NetworkInterfaceName;

    /**
     * @var string 弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。可通过[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)接口获取。
     */
    public $SubnetId;

    /**
     * @var string 弹性网卡描述，可任意命名，但不得超过60个字符。
     */
    public $NetworkInterfaceDescription;

    /**
     * @var integer 新申请的内网IP地址个数，内网IP地址个数总和不能超过配额数。
配额数查询：[DescribeVpcLimits](https://cloud.tencent.com/document/api/215/42942)。
     */
    public $SecondaryPrivateIpAddressCount;

    /**
     * @var string IP服务质量等级，和SecondaryPrivateIpAddressCount配合使用，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。
     */
    public $QosLevel;

    /**
     * @var array 指定绑定的安全组，例如：['sg-1dd51d']。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。

     */
    public $SecurityGroupIds;

    /**
     * @var array 指定的内网IP信息，单次最多指定10个。
     */
    public $PrivateIpAddresses;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @var string 网卡trunking模式设置，Enable-开启，Disable--关闭，默认关闭。
     */
    public $TrunkingFlag;

    /**
     * @var boolean 是否创建RDMA弹性网卡，true:创建rdma弹性网卡，false:普通弹性网卡。不填默认为false
     */
    public $IsRdma;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。	
     */
    public $ClientToken;

    /**
     * @param string $VpcId VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口获取。
     * @param string $NetworkInterfaceName 弹性网卡名称，最大长度不能超过60个字节。
     * @param string $SubnetId 弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。可通过[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)接口获取。
     * @param string $NetworkInterfaceDescription 弹性网卡描述，可任意命名，但不得超过60个字符。
     * @param integer $SecondaryPrivateIpAddressCount 新申请的内网IP地址个数，内网IP地址个数总和不能超过配额数。
配额数查询：[DescribeVpcLimits](https://cloud.tencent.com/document/api/215/42942)。
     * @param string $QosLevel IP服务质量等级，和SecondaryPrivateIpAddressCount配合使用，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。
     * @param array $SecurityGroupIds 指定绑定的安全组，例如：['sg-1dd51d']。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。

     * @param array $PrivateIpAddresses 指定的内网IP信息，单次最多指定10个。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     * @param string $TrunkingFlag 网卡trunking模式设置，Enable-开启，Disable--关闭，默认关闭。
     * @param boolean $IsRdma 是否创建RDMA弹性网卡，true:创建rdma弹性网卡，false:普通弹性网卡。不填默认为false
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。	
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

        if (array_key_exists("NetworkInterfaceDescription",$param) and $param["NetworkInterfaceDescription"] !== null) {
            $this->NetworkInterfaceDescription = $param["NetworkInterfaceDescription"];
        }

        if (array_key_exists("SecondaryPrivateIpAddressCount",$param) and $param["SecondaryPrivateIpAddressCount"] !== null) {
            $this->SecondaryPrivateIpAddressCount = $param["SecondaryPrivateIpAddressCount"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = [];
            foreach ($param["PrivateIpAddresses"] as $key => $value){
                $obj = new PrivateIpAddressSpecification();
                $obj->deserialize($value);
                array_push($this->PrivateIpAddresses, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TrunkingFlag",$param) and $param["TrunkingFlag"] !== null) {
            $this->TrunkingFlag = $param["TrunkingFlag"];
        }

        if (array_key_exists("IsRdma",$param) and $param["IsRdma"] !== null) {
            $this->IsRdma = $param["IsRdma"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
