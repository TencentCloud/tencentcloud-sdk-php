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
 * AssignIpv6SubnetCidrBlock请求参数结构体
 *
 * @method string getVpcId() 获取子网所在私有网络`ID`。形如：`vpc-f49l6u0z`。
 * @method void setVpcId(string $VpcId) 设置子网所在私有网络`ID`。形如：`vpc-f49l6u0z`。
 * @method array getIpv6SubnetCidrBlocks() 获取分配 `IPv6` 子网段列表。
 * @method void setIpv6SubnetCidrBlocks(array $Ipv6SubnetCidrBlocks) 设置分配 `IPv6` 子网段列表。
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 */
class AssignIpv6SubnetCidrBlockRequest extends AbstractModel
{
    /**
     * @var string 子网所在私有网络`ID`。形如：`vpc-f49l6u0z`。
     */
    public $VpcId;

    /**
     * @var array 分配 `IPv6` 子网段列表。
     */
    public $Ipv6SubnetCidrBlocks;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     */
    public $ClientToken;

    /**
     * @param string $VpcId 子网所在私有网络`ID`。形如：`vpc-f49l6u0z`。
     * @param array $Ipv6SubnetCidrBlocks 分配 `IPv6` 子网段列表。
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

        if (array_key_exists("Ipv6SubnetCidrBlocks",$param) and $param["Ipv6SubnetCidrBlocks"] !== null) {
            $this->Ipv6SubnetCidrBlocks = [];
            foreach ($param["Ipv6SubnetCidrBlocks"] as $key => $value){
                $obj = new Ipv6SubnetCidrBlock();
                $obj->deserialize($value);
                array_push($this->Ipv6SubnetCidrBlocks, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
