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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 堡垒机实例部署的可用区
 *
 * @method string getVpcId() 获取<p>部署堡垒机的VpcId</p>
 * @method void setVpcId(string $VpcId) 设置<p>部署堡垒机的VpcId</p>
 * @method string getVpcName() 获取<p>部署堡垒机vpc的名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>部署堡垒机vpc的名称</p>
 * @method string getVpcCidrBlock() 获取<p>部署堡垒机vpc的cidr</p>
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置<p>部署堡垒机vpc的cidr</p>
 * @method string getSubnetId() 获取<p>部署堡垒机的子网Id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>部署堡垒机的子网Id</p>
 * @method string getSubnetName() 获取<p>部署堡垒机的子网名称</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>部署堡垒机的子网名称</p>
 * @method string getSubnetCidrBlock() 获取<p>子网cidr</p>
 * @method void setSubnetCidrBlock(string $SubnetCidrBlock) 设置<p>子网cidr</p>
 * @method string getRegion() 获取<p>部署堡垒机的地域</p>
 * @method void setRegion(string $Region) 设置<p>部署堡垒机的地域</p>
 * @method string getZone() 获取<p>部署堡垒机的可用区</p>
 * @method void setZone(string $Zone) 设置<p>部署堡垒机的可用区</p>
 * @method string getSubnetUsageType() 获取<p>子网的作用场景</p><p>枚举值：</p><ul><li>DEPLOY： 部署堡垒机的子网</li><li>INTERNAL： 开通内网访问的子网</li></ul>
 * @method void setSubnetUsageType(string $SubnetUsageType) 设置<p>子网的作用场景</p><p>枚举值：</p><ul><li>DEPLOY： 部署堡垒机的子网</li><li>INTERNAL： 开通内网访问的子网</li></ul>
 */
class ResourceDeployZone extends AbstractModel
{
    /**
     * @var string <p>部署堡垒机的VpcId</p>
     */
    public $VpcId;

    /**
     * @var string <p>部署堡垒机vpc的名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>部署堡垒机vpc的cidr</p>
     */
    public $VpcCidrBlock;

    /**
     * @var string <p>部署堡垒机的子网Id</p>
     */
    public $SubnetId;

    /**
     * @var string <p>部署堡垒机的子网名称</p>
     */
    public $SubnetName;

    /**
     * @var string <p>子网cidr</p>
     */
    public $SubnetCidrBlock;

    /**
     * @var string <p>部署堡垒机的地域</p>
     */
    public $Region;

    /**
     * @var string <p>部署堡垒机的可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>子网的作用场景</p><p>枚举值：</p><ul><li>DEPLOY： 部署堡垒机的子网</li><li>INTERNAL： 开通内网访问的子网</li></ul>
     */
    public $SubnetUsageType;

    /**
     * @param string $VpcId <p>部署堡垒机的VpcId</p>
     * @param string $VpcName <p>部署堡垒机vpc的名称</p>
     * @param string $VpcCidrBlock <p>部署堡垒机vpc的cidr</p>
     * @param string $SubnetId <p>部署堡垒机的子网Id</p>
     * @param string $SubnetName <p>部署堡垒机的子网名称</p>
     * @param string $SubnetCidrBlock <p>子网cidr</p>
     * @param string $Region <p>部署堡垒机的地域</p>
     * @param string $Zone <p>部署堡垒机的可用区</p>
     * @param string $SubnetUsageType <p>子网的作用场景</p><p>枚举值：</p><ul><li>DEPLOY： 部署堡垒机的子网</li><li>INTERNAL： 开通内网访问的子网</li></ul>
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

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("SubnetCidrBlock",$param) and $param["SubnetCidrBlock"] !== null) {
            $this->SubnetCidrBlock = $param["SubnetCidrBlock"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetUsageType",$param) and $param["SubnetUsageType"] !== null) {
            $this->SubnetUsageType = $param["SubnetUsageType"];
        }
    }
}
