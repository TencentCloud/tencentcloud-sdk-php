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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGatewayLoadBalancer请求参数结构体
 *
 * @method string getVpcId() 获取网关负载均衡后端目标设备所属的私有网络 ID，如vpc-azd4dt1c，可以通过 [DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)  接口获取。
 * @method void setVpcId(string $VpcId) 设置网关负载均衡后端目标设备所属的私有网络 ID，如vpc-azd4dt1c，可以通过 [DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)  接口获取。
 * @method string getSubnetId() 获取网关负载均衡后端目标设备所属的私有网络的子网ID。
 * @method void setSubnetId(string $SubnetId) 设置网关负载均衡后端目标设备所属的私有网络的子网ID。
 * @method string getLoadBalancerName() 获取网关负载均衡实例名称。可支持输入1-60个字符。不填写时默认自动生成。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置网关负载均衡实例名称。可支持输入1-60个字符。不填写时默认自动生成。
 * @method integer getNumber() 获取创建网关负载均衡的个数，默认值为 1。批量创建数量最大支持10个。
 * @method void setNumber(integer $Number) 设置创建网关负载均衡的个数，默认值为 1。批量创建数量最大支持10个。
 * @method array getTags() 获取购买网关负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。
 * @method void setTags(array $Tags) 设置购买网关负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。
 * @method string getLBChargeType() 获取网关负载均衡实例计费类型，当前只支持传POSTPAID_BY_HOUR，默认是POSTPAID_BY_HOUR。
 * @method void setLBChargeType(string $LBChargeType) 设置网关负载均衡实例计费类型，当前只支持传POSTPAID_BY_HOUR，默认是POSTPAID_BY_HOUR。
 */
class CreateGatewayLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 网关负载均衡后端目标设备所属的私有网络 ID，如vpc-azd4dt1c，可以通过 [DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)  接口获取。
     */
    public $VpcId;

    /**
     * @var string 网关负载均衡后端目标设备所属的私有网络的子网ID。
     */
    public $SubnetId;

    /**
     * @var string 网关负载均衡实例名称。可支持输入1-60个字符。不填写时默认自动生成。
     */
    public $LoadBalancerName;

    /**
     * @var integer 创建网关负载均衡的个数，默认值为 1。批量创建数量最大支持10个。
     */
    public $Number;

    /**
     * @var array 购买网关负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。
     */
    public $Tags;

    /**
     * @var string 网关负载均衡实例计费类型，当前只支持传POSTPAID_BY_HOUR，默认是POSTPAID_BY_HOUR。
     */
    public $LBChargeType;

    /**
     * @param string $VpcId 网关负载均衡后端目标设备所属的私有网络 ID，如vpc-azd4dt1c，可以通过 [DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)  接口获取。
     * @param string $SubnetId 网关负载均衡后端目标设备所属的私有网络的子网ID。
     * @param string $LoadBalancerName 网关负载均衡实例名称。可支持输入1-60个字符。不填写时默认自动生成。
     * @param integer $Number 创建网关负载均衡的个数，默认值为 1。批量创建数量最大支持10个。
     * @param array $Tags 购买网关负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。
     * @param string $LBChargeType 网关负载均衡实例计费类型，当前只支持传POSTPAID_BY_HOUR，默认是POSTPAID_BY_HOUR。
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

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LBChargeType",$param) and $param["LBChargeType"] !== null) {
            $this->LBChargeType = $param["LBChargeType"];
        }
    }
}
