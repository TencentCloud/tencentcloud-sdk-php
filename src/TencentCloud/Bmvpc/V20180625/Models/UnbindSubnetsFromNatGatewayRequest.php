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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindSubnetsFromNatGateway请求参数结构体
 *
 * @method string getNatId() 获取NAT网关ID，例如：nat-kdm476mp
 * @method void setNatId(string $NatId) 设置NAT网关ID，例如：nat-kdm476mp
 * @method string getVpcId() 获取私有网络ID，例如：vpc-kd7d06of
 * @method void setVpcId(string $VpcId) 设置私有网络ID，例如：vpc-kd7d06of
 * @method array getSubnetIds() 获取子网ID列表，子网不区分加入NAT网关的转发方式
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID列表，子网不区分加入NAT网关的转发方式
 */
class UnbindSubnetsFromNatGatewayRequest extends AbstractModel
{
    /**
     * @var string NAT网关ID，例如：nat-kdm476mp
     */
    public $NatId;

    /**
     * @var string 私有网络ID，例如：vpc-kd7d06of
     */
    public $VpcId;

    /**
     * @var array 子网ID列表，子网不区分加入NAT网关的转发方式
     */
    public $SubnetIds;

    /**
     * @param string $NatId NAT网关ID，例如：nat-kdm476mp
     * @param string $VpcId 私有网络ID，例如：vpc-kd7d06of
     * @param array $SubnetIds 子网ID列表，子网不区分加入NAT网关的转发方式
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
        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }
    }
}
