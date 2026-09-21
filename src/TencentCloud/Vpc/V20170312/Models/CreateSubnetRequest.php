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
 * CreateSubnet请求参数结构体
 *
 * @method string getVpcId() 获取<p>待操作的VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。</p>
 * @method void setVpcId(string $VpcId) 设置<p>待操作的VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。</p>
 * @method string getSubnetName() 获取<p>子网名称，最大长度不能超过60个字节。</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>子网名称，最大长度不能超过60个字节。</p>
 * @method string getZone() 获取<p>子网所在的可用区ID，不同子网选择不同可用区可以做跨可用区灾备。</p>
 * @method void setZone(string $Zone) 设置<p>子网所在的可用区ID，不同子网选择不同可用区可以做跨可用区灾备。</p>
 * @method string getStackType() 获取<p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
 * @method void setStackType(string $StackType) 设置<p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
 * @method string getCidrBlock() 获取<p>子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠。</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠。</p>
 * @method string getIpv6CidrBlock() 获取<p>IPv6网段</p>
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置<p>IPv6网段</p>
 * @method array getTags() 获取<p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]</p>
 * @method void setTags(array $Tags) 设置<p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]</p>
 * @method string getCdcId() 获取<p>CDC实例ID。</p>
 * @method void setCdcId(string $CdcId) 设置<p>CDC实例ID。</p>
 */
class CreateSubnetRequest extends AbstractModel
{
    /**
     * @var string <p>待操作的VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网名称，最大长度不能超过60个字节。</p>
     */
    public $SubnetName;

    /**
     * @var string <p>子网所在的可用区ID，不同子网选择不同可用区可以做跨可用区灾备。</p>
     */
    public $Zone;

    /**
     * @var string <p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
     */
    public $StackType;

    /**
     * @var string <p>子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠。</p>
     */
    public $CidrBlock;

    /**
     * @var string <p>IPv6网段</p>
     */
    public $Ipv6CidrBlock;

    /**
     * @var array <p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]</p>
     */
    public $Tags;

    /**
     * @var string <p>CDC实例ID。</p>
     */
    public $CdcId;

    /**
     * @param string $VpcId <p>待操作的VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。</p>
     * @param string $SubnetName <p>子网名称，最大长度不能超过60个字节。</p>
     * @param string $Zone <p>子网所在的可用区ID，不同子网选择不同可用区可以做跨可用区灾备。</p>
     * @param string $StackType <p>协议栈类型</p><p>枚举值：</p><ul><li>DualStack： IPv4和IPv6双栈</li><li>IPv6Only： IPv6单栈</li></ul>
     * @param string $CidrBlock <p>子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠。</p>
     * @param string $Ipv6CidrBlock <p>IPv6网段</p>
     * @param array $Tags <p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]</p>
     * @param string $CdcId <p>CDC实例ID。</p>
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

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
