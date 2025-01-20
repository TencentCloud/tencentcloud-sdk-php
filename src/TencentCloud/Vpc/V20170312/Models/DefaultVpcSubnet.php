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
 * 默认VPC和子网
 *
 * @method string getVpcId() 获取默认VpcId。
 * @method void setVpcId(string $VpcId) 设置默认VpcId。
 * @method string getSubnetId() 获取默认SubnetId。
 * @method void setSubnetId(string $SubnetId) 设置默认SubnetId。
 * @method string getVpcName() 获取默认Vpc名字。
 * @method void setVpcName(string $VpcName) 设置默认Vpc名字。
 * @method string getSubnetName() 获取默认Subnet名字。
 * @method void setSubnetName(string $SubnetName) 设置默认Subnet名字。
 * @method string getCidrBlock() 获取默认子网网段。
 * @method void setCidrBlock(string $CidrBlock) 设置默认子网网段。
 */
class DefaultVpcSubnet extends AbstractModel
{
    /**
     * @var string 默认VpcId。
     */
    public $VpcId;

    /**
     * @var string 默认SubnetId。
     */
    public $SubnetId;

    /**
     * @var string 默认Vpc名字。
     */
    public $VpcName;

    /**
     * @var string 默认Subnet名字。
     */
    public $SubnetName;

    /**
     * @var string 默认子网网段。
     */
    public $CidrBlock;

    /**
     * @param string $VpcId 默认VpcId。
     * @param string $SubnetId 默认SubnetId。
     * @param string $VpcName 默认Vpc名字。
     * @param string $SubnetName 默认Subnet名字。
     * @param string $CidrBlock 默认子网网段。
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

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }
    }
}
