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
 * CreateVpcEndPoint请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
 * @method string getSubnetId() 获取子网实例ID。可通过[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)接口获取。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID。可通过[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)接口获取。
 * @method string getEndPointName() 获取终端节点名称。限制为60个字符。
 * @method void setEndPointName(string $EndPointName) 设置终端节点名称。限制为60个字符。
 * @method string getEndPointServiceId() 获取终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
 * @method string getEndPointVip() 获取终端节点VIP，可以指定IP申请。
 * @method void setEndPointVip(string $EndPointVip) 设置终端节点VIP，可以指定IP申请。
 * @method string getSecurityGroupId() 获取安全组ID。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组ID。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method string getIpAddressType() 获取协议类型，支持 Ipv4，Ipv6，默认 Ipv4
 * @method void setIpAddressType(string $IpAddressType) 设置协议类型，支持 Ipv4，Ipv6，默认 Ipv4
 */
class CreateVpcEndPointRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
     */
    public $VpcId;

    /**
     * @var string 子网实例ID。可通过[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)接口获取。
     */
    public $SubnetId;

    /**
     * @var string 终端节点名称。限制为60个字符。
     */
    public $EndPointName;

    /**
     * @var string 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
     */
    public $EndPointServiceId;

    /**
     * @var string 终端节点VIP，可以指定IP申请。
     */
    public $EndPointVip;

    /**
     * @var string 安全组ID。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。
     */
    public $SecurityGroupId;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     */
    public $Tags;

    /**
     * @var string 协议类型，支持 Ipv4，Ipv6，默认 Ipv4
     */
    public $IpAddressType;

    /**
     * @param string $VpcId VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
     * @param string $SubnetId 子网实例ID。可通过[DescribeSubnets](https://cloud.tencent.com/document/product/215/15784)接口获取。
     * @param string $EndPointName 终端节点名称。限制为60个字符。
     * @param string $EndPointServiceId 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
     * @param string $EndPointVip 终端节点VIP，可以指定IP申请。
     * @param string $SecurityGroupId 安全组ID。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     * @param string $IpAddressType 协议类型，支持 Ipv4，Ipv6，默认 Ipv4
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

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointVip",$param) and $param["EndPointVip"] !== null) {
            $this->EndPointVip = $param["EndPointVip"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IpAddressType",$param) and $param["IpAddressType"] !== null) {
            $this->IpAddressType = $param["IpAddressType"];
        }
    }
}
