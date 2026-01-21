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
 * UpgradeNatGatewayProductVersion请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method string getNatGatewayId() 获取NAT网关的ID，形如：`nat-ig8xpno8`。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关的ID，形如：`nat-ig8xpno8`。
 * @method integer getForce() 获取是否热迁移。1表示冷迁移，0表示热迁移，默认值是0。
 * @method void setForce(integer $Force) 设置是否热迁移。1表示冷迁移，0表示热迁移，默认值是0。
 * @method boolean getCheckOnlyMode() 获取是否仅校验迁移可能性。true表示仅校验能否迁移，不做实际迁移。false表示正常迁移。默认值为false。
仅校验模式，不报错表示校验迁移成功。
 * @method void setCheckOnlyMode(boolean $CheckOnlyMode) 设置是否仅校验迁移可能性。true表示仅校验能否迁移，不做实际迁移。false表示正常迁移。默认值为false。
仅校验模式，不报错表示校验迁移成功。
 */
class UpgradeNatGatewayProductVersionRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     */
    public $VpcId;

    /**
     * @var string NAT网关的ID，形如：`nat-ig8xpno8`。
     */
    public $NatGatewayId;

    /**
     * @var integer 是否热迁移。1表示冷迁移，0表示热迁移，默认值是0。
     */
    public $Force;

    /**
     * @var boolean 是否仅校验迁移可能性。true表示仅校验能否迁移，不做实际迁移。false表示正常迁移。默认值为false。
仅校验模式，不报错表示校验迁移成功。
     */
    public $CheckOnlyMode;

    /**
     * @param string $VpcId VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     * @param string $NatGatewayId NAT网关的ID，形如：`nat-ig8xpno8`。
     * @param integer $Force 是否热迁移。1表示冷迁移，0表示热迁移，默认值是0。
     * @param boolean $CheckOnlyMode 是否仅校验迁移可能性。true表示仅校验能否迁移，不做实际迁移。false表示正常迁移。默认值为false。
仅校验模式，不报错表示校验迁移成功。
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

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }

        if (array_key_exists("CheckOnlyMode",$param) and $param["CheckOnlyMode"] !== null) {
            $this->CheckOnlyMode = $param["CheckOnlyMode"];
        }
    }
}
