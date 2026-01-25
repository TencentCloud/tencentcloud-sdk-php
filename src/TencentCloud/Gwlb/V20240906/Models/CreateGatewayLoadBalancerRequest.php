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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGatewayLoadBalancer请求参数结构体
 *
 * @method string getVpcId() 获取<p>网关负载均衡后端目标设备所属的私有网络 ID，如vpc-azd4dt1c，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>  接口获取。</p>
 * @method void setVpcId(string $VpcId) 设置<p>网关负载均衡后端目标设备所属的私有网络 ID，如vpc-azd4dt1c，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>  接口获取。</p>
 * @method string getSubnetId() 获取<p>网关负载均衡后端目标设备所属的私有网络的子网ID。可通过<a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a>接口获取。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>网关负载均衡后端目标设备所属的私有网络的子网ID。可通过<a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a>接口获取。</p>
 * @method string getLoadBalancerName() 获取<p>网关负载均衡实例名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。不填写时默认自动生成。</p>
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置<p>网关负载均衡实例名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。不填写时默认自动生成。</p>
 * @method integer getNumber() 获取<p>创建网关负载均衡的个数，默认值为 1。批量创建数量最大支持10个。</p>
 * @method void setNumber(integer $Number) 设置<p>创建网关负载均衡的个数，默认值为 1。批量创建数量最大支持10个。</p>
 * @method array getTags() 获取<p>购买网关负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。</p>
 * @method void setTags(array $Tags) 设置<p>购买网关负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。</p>
 * @method string getLBChargeType() 获取<p>网关负载均衡实例计费类型，当前只支持传POSTPAID_BY_HOUR（按量计费），默认是POSTPAID_BY_HOUR。</p>
 * @method void setLBChargeType(string $LBChargeType) 设置<p>网关负载均衡实例计费类型，当前只支持传POSTPAID_BY_HOUR（按量计费），默认是POSTPAID_BY_HOUR。</p>
 */
class CreateGatewayLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string <p>网关负载均衡后端目标设备所属的私有网络 ID，如vpc-azd4dt1c，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>  接口获取。</p>
     */
    public $VpcId;

    /**
     * @var string <p>网关负载均衡后端目标设备所属的私有网络的子网ID。可通过<a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a>接口获取。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>网关负载均衡实例名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。不填写时默认自动生成。</p>
     */
    public $LoadBalancerName;

    /**
     * @var integer <p>创建网关负载均衡的个数，默认值为 1。批量创建数量最大支持10个。</p>
     */
    public $Number;

    /**
     * @var array <p>购买网关负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。</p>
     */
    public $Tags;

    /**
     * @var string <p>网关负载均衡实例计费类型，当前只支持传POSTPAID_BY_HOUR（按量计费），默认是POSTPAID_BY_HOUR。</p>
     */
    public $LBChargeType;

    /**
     * @param string $VpcId <p>网关负载均衡后端目标设备所属的私有网络 ID，如vpc-azd4dt1c，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>  接口获取。</p>
     * @param string $SubnetId <p>网关负载均衡后端目标设备所属的私有网络的子网ID。可通过<a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a>接口获取。</p>
     * @param string $LoadBalancerName <p>网关负载均衡实例名称。命名规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。不填写时默认自动生成。</p>
     * @param integer $Number <p>创建网关负载均衡的个数，默认值为 1。批量创建数量最大支持10个。</p>
     * @param array $Tags <p>购买网关负载均衡的同时，给负载均衡打上标签，最大支持20个标签键值对。</p>
     * @param string $LBChargeType <p>网关负载均衡实例计费类型，当前只支持传POSTPAID_BY_HOUR（按量计费），默认是POSTPAID_BY_HOUR。</p>
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
