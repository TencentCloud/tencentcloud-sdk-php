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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了工作空间VPC相关信息，包括子网，IP信息等
 *
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取私有网络子网ID
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网ID
 * @method boolean getAsVpcGateway() 获取是否用作公网网关
 * @method void setAsVpcGateway(boolean $AsVpcGateway) 设置是否用作公网网关
 * @method array getPrivateIpAddresses() 获取私有网络子网 IP 数组
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置私有网络子网 IP 数组
 * @method integer getIpv6AddressCount() 获取为弹性网卡指定随机生成
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) 设置为弹性网卡指定随机生成
 */
class SpaceVirtualPrivateCloud extends AbstractModel
{
    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 私有网络子网ID
     */
    public $SubnetId;

    /**
     * @var boolean 是否用作公网网关
     */
    public $AsVpcGateway;

    /**
     * @var array 私有网络子网 IP 数组
     */
    public $PrivateIpAddresses;

    /**
     * @var integer 为弹性网卡指定随机生成
     */
    public $Ipv6AddressCount;

    /**
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 私有网络子网ID
     * @param boolean $AsVpcGateway 是否用作公网网关
     * @param array $PrivateIpAddresses 私有网络子网 IP 数组
     * @param integer $Ipv6AddressCount 为弹性网卡指定随机生成
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

        if (array_key_exists("AsVpcGateway",$param) and $param["AsVpcGateway"] !== null) {
            $this->AsVpcGateway = $param["AsVpcGateway"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }
    }
}
