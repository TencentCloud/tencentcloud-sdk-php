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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源连接的网络信息
 *
 * @method string getVpcId() 获取数据连接所在Vpc实例Id，如“vpc-azd4dt1c”。
 * @method void setVpcId(string $VpcId) 设置数据连接所在Vpc实例Id，如“vpc-azd4dt1c”。
 * @method string getVpcCidrBlock() 获取Vpc的IPv4 CIDR
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置Vpc的IPv4 CIDR
 * @method string getSubnetId() 获取数据连接所在子网的实例Id，如“subnet-bthucmmy”
 * @method void setSubnetId(string $SubnetId) 设置数据连接所在子网的实例Id，如“subnet-bthucmmy”
 * @method string getSubnetCidrBlock() 获取Subnet的IPv4 CIDR
 * @method void setSubnetCidrBlock(string $SubnetCidrBlock) 设置Subnet的IPv4 CIDR
 */
class DatasourceConnectionLocation extends AbstractModel
{
    /**
     * @var string 数据连接所在Vpc实例Id，如“vpc-azd4dt1c”。
     */
    public $VpcId;

    /**
     * @var string Vpc的IPv4 CIDR
     */
    public $VpcCidrBlock;

    /**
     * @var string 数据连接所在子网的实例Id，如“subnet-bthucmmy”
     */
    public $SubnetId;

    /**
     * @var string Subnet的IPv4 CIDR
     */
    public $SubnetCidrBlock;

    /**
     * @param string $VpcId 数据连接所在Vpc实例Id，如“vpc-azd4dt1c”。
     * @param string $VpcCidrBlock Vpc的IPv4 CIDR
     * @param string $SubnetId 数据连接所在子网的实例Id，如“subnet-bthucmmy”
     * @param string $SubnetCidrBlock Subnet的IPv4 CIDR
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

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetCidrBlock",$param) and $param["SubnetCidrBlock"] !== null) {
            $this->SubnetCidrBlock = $param["SubnetCidrBlock"];
        }
    }
}
