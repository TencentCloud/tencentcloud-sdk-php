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
 * CreateVpcEndPointService请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
 * @method string getEndPointServiceName() 获取终端节点服务名称。
 * @method void setEndPointServiceName(string $EndPointServiceName) 设置终端节点服务名称。
 * @method boolean getAutoAcceptFlag() 获取是否自动接受。
 * @method void setAutoAcceptFlag(boolean $AutoAcceptFlag) 设置是否自动接受。
 * @method string getServiceInstanceId() 获取后端服务ID，比如lb-p1hiksdg。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；CDB可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取。

 * @method void setServiceInstanceId(string $ServiceInstanceId) 设置后端服务ID，比如lb-p1hiksdg。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；CDB可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取。

 * @method boolean getIsPassService() 获取~~是否是PassService类型。该字段已废弃，请不要使用该字段。~~
 * @method void setIsPassService(boolean $IsPassService) 设置~~是否是PassService类型。该字段已废弃，请不要使用该字段。~~
 * @method string getServiceType() 获取挂载的PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡）。不填默认挂载为CLB。
 * @method void setServiceType(string $ServiceType) 设置挂载的PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡）。不填默认挂载为CLB。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method string getIpAddressType() 获取协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
 * @method void setIpAddressType(string $IpAddressType) 设置协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
 */
class CreateVpcEndPointServiceRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
     */
    public $VpcId;

    /**
     * @var string 终端节点服务名称。
     */
    public $EndPointServiceName;

    /**
     * @var boolean 是否自动接受。
     */
    public $AutoAcceptFlag;

    /**
     * @var string 后端服务ID，比如lb-p1hiksdg。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；CDB可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取。

     */
    public $ServiceInstanceId;

    /**
     * @var boolean ~~是否是PassService类型。该字段已废弃，请不要使用该字段。~~
     */
    public $IsPassService;

    /**
     * @var string 挂载的PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡）。不填默认挂载为CLB。
     */
    public $ServiceType;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     */
    public $Tags;

    /**
     * @var string 协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
     */
    public $IpAddressType;

    /**
     * @param string $VpcId VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/1108/43663)接口获取。
     * @param string $EndPointServiceName 终端节点服务名称。
     * @param boolean $AutoAcceptFlag 是否自动接受。
     * @param string $ServiceInstanceId 后端服务ID，比如lb-p1hiksdg。CLB可通过[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)接口获取；CDB可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/240/38568)接口获取；CRS可通过[DescribeInstances](https://cloud.tencent.com/document/product/239/20018)接口获取；GWLB可通过[DescribeGatewayLoadBalancers](https://cloud.tencent.com/document/product/1782/111683)接口获取。

     * @param boolean $IsPassService ~~是否是PassService类型。该字段已废弃，请不要使用该字段。~~
     * @param string $ServiceType 挂载的PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡）。不填默认挂载为CLB。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
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

        if (array_key_exists("IsPassService",$param) and $param["IsPassService"] !== null) {
            $this->IsPassService = $param["IsPassService"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
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
