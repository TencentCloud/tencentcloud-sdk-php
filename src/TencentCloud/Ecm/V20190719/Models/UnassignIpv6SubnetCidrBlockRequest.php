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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnassignIpv6SubnetCidrBlock请求参数结构体
 *
 * @method string getVpcId() 获取子网所在私有网络`ID`。形如：`vpc-f49l6u0z`。	
 * @method void setVpcId(string $VpcId) 设置子网所在私有网络`ID`。形如：`vpc-f49l6u0z`。	
 * @method array getIpv6SubnetCidrBlocks() 获取`IPv6` 子网段列表。	
 * @method void setIpv6SubnetCidrBlocks(array $Ipv6SubnetCidrBlocks) 设置`IPv6` 子网段列表。	
 * @method string getEcmRegion() 获取ECM地域。
 * @method void setEcmRegion(string $EcmRegion) 设置ECM地域。
 */
class UnassignIpv6SubnetCidrBlockRequest extends AbstractModel
{
    /**
     * @var string 子网所在私有网络`ID`。形如：`vpc-f49l6u0z`。	
     */
    public $VpcId;

    /**
     * @var array `IPv6` 子网段列表。	
     */
    public $Ipv6SubnetCidrBlocks;

    /**
     * @var string ECM地域。
     */
    public $EcmRegion;

    /**
     * @param string $VpcId 子网所在私有网络`ID`。形如：`vpc-f49l6u0z`。	
     * @param array $Ipv6SubnetCidrBlocks `IPv6` 子网段列表。	
     * @param string $EcmRegion ECM地域。
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

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }
    }
}
