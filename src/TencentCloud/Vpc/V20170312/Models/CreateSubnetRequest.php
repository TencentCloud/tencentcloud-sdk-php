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
 * @method string getVpcId() 获取待操作的VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method void setVpcId(string $VpcId) 设置待操作的VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method string getSubnetName() 获取子网名称，最大长度不能超过60个字节。
 * @method void setSubnetName(string $SubnetName) 设置子网名称，最大长度不能超过60个字节。
 * @method string getCidrBlock() 获取子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠。
 * @method void setCidrBlock(string $CidrBlock) 设置子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠。
 * @method string getZone() 获取子网所在的可用区ID，不同子网选择不同可用区可以做跨可用区灾备。
 * @method void setZone(string $Zone) 设置子网所在的可用区ID，不同子网选择不同可用区可以做跨可用区灾备。
 */

/**
 *CreateSubnet请求参数结构体
 */
class CreateSubnetRequest extends AbstractModel
{
    /**
     * @var string 待操作的VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     */
    public $VpcId;

    /**
     * @var string 子网名称，最大长度不能超过60个字节。
     */
    public $SubnetName;

    /**
     * @var string 子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠。
     */
    public $CidrBlock;

    /**
     * @var string 子网所在的可用区ID，不同子网选择不同可用区可以做跨可用区灾备。
     */
    public $Zone;
    /**
     * @param string $VpcId 待操作的VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     * @param string $SubnetName 子网名称，最大长度不能超过60个字节。
     * @param string $CidrBlock 子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠。
     * @param string $Zone 子网所在的可用区ID，不同子网选择不同可用区可以做跨可用区灾备。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
