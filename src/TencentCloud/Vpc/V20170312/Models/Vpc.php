<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getVpcName() 获取Vpc名称。
 * @method void setVpcName(string $VpcName) 设置Vpc名称。
 * @method string getVpcId() 获取VPC实例ID，例如：vpc-azd4dt1c。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID，例如：vpc-azd4dt1c。
 * @method string getCidrBlock() 获取VPC的cidr，只能为10.0.0.0/16，172.16.0.0/12，192.168.0.0/16这三个内网网段内。
 * @method void setCidrBlock(string $CidrBlock) 设置VPC的cidr，只能为10.0.0.0/16，172.16.0.0/12，192.168.0.0/16这三个内网网段内。
 * @method boolean getIsDefault() 获取是否默认VPC。
 * @method void setIsDefault(boolean $IsDefault) 设置是否默认VPC。
 * @method boolean getEnableMulticast() 获取是否开启组播。
 * @method void setEnableMulticast(boolean $EnableMulticast) 设置是否开启组播。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 */

/**
 *私有网络(VPC)对象。
 */
class Vpc extends AbstractModel
{
    /**
     * @var string Vpc名称。
     */
    public $VpcName;

    /**
     * @var string VPC实例ID，例如：vpc-azd4dt1c。
     */
    public $VpcId;

    /**
     * @var string VPC的cidr，只能为10.0.0.0/16，172.16.0.0/12，192.168.0.0/16这三个内网网段内。
     */
    public $CidrBlock;

    /**
     * @var boolean 是否默认VPC。
     */
    public $IsDefault;

    /**
     * @var boolean 是否开启组播。
     */
    public $EnableMulticast;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;
    /**
     * @param string $VpcName Vpc名称。
     * @param string $VpcId VPC实例ID，例如：vpc-azd4dt1c。
     * @param string $CidrBlock VPC的cidr，只能为10.0.0.0/16，172.16.0.0/12，192.168.0.0/16这三个内网网段内。
     * @param boolean $IsDefault 是否默认VPC。
     * @param boolean $EnableMulticast 是否开启组播。
     * @param string $CreatedTime 创建时间。
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
        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("EnableMulticast",$param) and $param["EnableMulticast"] !== null) {
            $this->EnableMulticast = $param["EnableMulticast"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
