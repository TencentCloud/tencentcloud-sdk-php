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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeployResource请求参数结构体
 *
 * @method string getResourceId() 获取需要开通服务的资源ID
 * @method void setResourceId(string $ResourceId) 设置需要开通服务的资源ID
 * @method string getApCode() 获取需要开通服务的地域
 * @method void setApCode(string $ApCode) 设置需要开通服务的地域
 * @method string getZone() 获取子网所在可用区
 * @method void setZone(string $Zone) 设置子网所在可用区
 * @method string getVpcId() 获取需要开通服务的VPC
 * @method void setVpcId(string $VpcId) 设置需要开通服务的VPC
 * @method string getSubnetId() 获取需要开通服务的子网ID
 * @method void setSubnetId(string $SubnetId) 设置需要开通服务的子网ID
 * @method string getCidrBlock() 获取需要开通服务的子网网段
 * @method void setCidrBlock(string $CidrBlock) 设置需要开通服务的子网网段
 * @method string getVpcName() 获取需要开通服务的VPC名称
 * @method void setVpcName(string $VpcName) 设置需要开通服务的VPC名称
 * @method string getVpcCidrBlock() 获取需要开通服务的VPC对应的网段
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置需要开通服务的VPC对应的网段
 * @method string getSubnetName() 获取需要开通服务的子网名称
 * @method void setSubnetName(string $SubnetName) 设置需要开通服务的子网名称
 */
class DeployResourceRequest extends AbstractModel
{
    /**
     * @var string 需要开通服务的资源ID
     */
    public $ResourceId;

    /**
     * @var string 需要开通服务的地域
     */
    public $ApCode;

    /**
     * @var string 子网所在可用区
     */
    public $Zone;

    /**
     * @var string 需要开通服务的VPC
     */
    public $VpcId;

    /**
     * @var string 需要开通服务的子网ID
     */
    public $SubnetId;

    /**
     * @var string 需要开通服务的子网网段
     */
    public $CidrBlock;

    /**
     * @var string 需要开通服务的VPC名称
     */
    public $VpcName;

    /**
     * @var string 需要开通服务的VPC对应的网段
     */
    public $VpcCidrBlock;

    /**
     * @var string 需要开通服务的子网名称
     */
    public $SubnetName;

    /**
     * @param string $ResourceId 需要开通服务的资源ID
     * @param string $ApCode 需要开通服务的地域
     * @param string $Zone 子网所在可用区
     * @param string $VpcId 需要开通服务的VPC
     * @param string $SubnetId 需要开通服务的子网ID
     * @param string $CidrBlock 需要开通服务的子网网段
     * @param string $VpcName 需要开通服务的VPC名称
     * @param string $VpcCidrBlock 需要开通服务的VPC对应的网段
     * @param string $SubnetName 需要开通服务的子网名称
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ApCode",$param) and $param["ApCode"] !== null) {
            $this->ApCode = $param["ApCode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }
    }
}
