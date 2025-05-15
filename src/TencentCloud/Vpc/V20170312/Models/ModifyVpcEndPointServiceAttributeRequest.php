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
 * ModifyVpcEndPointServiceAttribute请求参数结构体
 *
 * @method string getEndPointServiceId() 获取终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。

 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。

 * @method string getVpcId() 获取VPC唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
 * @method void setVpcId(string $VpcId) 设置VPC唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
 * @method string getEndPointServiceName() 获取终端节点服务名称。长度不超过60个字符。
 * @method void setEndPointServiceName(string $EndPointServiceName) 设置终端节点服务名称。长度不超过60个字符。
 * @method boolean getAutoAcceptFlag() 获取是否自动接受终端节点的连接请求。<ul><li>true：自动接受</li><li>false：不自动接受</li></ul>
 * @method void setAutoAcceptFlag(boolean $AutoAcceptFlag) 设置是否自动接受终端节点的连接请求。<ul><li>true：自动接受</li><li>false：不自动接受</li></ul>
 * @method string getServiceInstanceId() 获取后端服务的ID，比如lb-p1hiksdg。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；
MYSQL可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；
CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；
GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取

 * @method void setServiceInstanceId(string $ServiceInstanceId) 设置后端服务的ID，比如lb-p1hiksdg。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；
MYSQL可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；
CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；
GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取

 * @method string getIpAddressType() 获取协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
 * @method void setIpAddressType(string $IpAddressType) 设置协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
 */
class ModifyVpcEndPointServiceAttributeRequest extends AbstractModel
{
    /**
     * @var string 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。

     */
    public $EndPointServiceId;

    /**
     * @var string VPC唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
     */
    public $VpcId;

    /**
     * @var string 终端节点服务名称。长度不超过60个字符。
     */
    public $EndPointServiceName;

    /**
     * @var boolean 是否自动接受终端节点的连接请求。<ul><li>true：自动接受</li><li>false：不自动接受</li></ul>
     */
    public $AutoAcceptFlag;

    /**
     * @var string 后端服务的ID，比如lb-p1hiksdg。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；
MYSQL可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；
CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；
GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取

     */
    public $ServiceInstanceId;

    /**
     * @var string 协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
     */
    public $IpAddressType;

    /**
     * @param string $EndPointServiceId 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。

     * @param string $VpcId VPC唯一ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
     * @param string $EndPointServiceName 终端节点服务名称。长度不超过60个字符。
     * @param boolean $AutoAcceptFlag 是否自动接受终端节点的连接请求。<ul><li>true：自动接受</li><li>false：不自动接受</li></ul>
     * @param string $ServiceInstanceId 后端服务的ID，比如lb-p1hiksdg。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；
MYSQL可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；
CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；
GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取

     * @param string $IpAddressType 协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
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
        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("EndPointServiceName",$param) and $param["EndPointServiceName"] !== null) {
            $this->EndPointServiceName = $param["EndPointServiceName"];
        }

        if (array_key_exists("AutoAcceptFlag",$param) and $param["AutoAcceptFlag"] !== null) {
            $this->AutoAcceptFlag = $param["AutoAcceptFlag"];
        }

        if (array_key_exists("ServiceInstanceId",$param) and $param["ServiceInstanceId"] !== null) {
            $this->ServiceInstanceId = $param["ServiceInstanceId"];
        }

        if (array_key_exists("IpAddressType",$param) and $param["IpAddressType"] !== null) {
            $this->IpAddressType = $param["IpAddressType"];
        }
    }
}
