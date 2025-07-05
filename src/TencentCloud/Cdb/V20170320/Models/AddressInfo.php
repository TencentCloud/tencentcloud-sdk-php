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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例地址信息
 *
 * @method string getResourceId() 获取地址的资源id标识。
 * @method void setResourceId(string $ResourceId) 设置地址的资源id标识。
 * @method string getUniqVpcId() 获取地址所在的vpc。
 * @method void setUniqVpcId(string $UniqVpcId) 设置地址所在的vpc。
 * @method string getUniqSubnetId() 获取地址所在的子网。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置地址所在的子网。
 * @method string getVip() 获取地址的vip。
 * @method void setVip(string $Vip) 设置地址的vip。
 * @method integer getVPort() 获取地址的端口。
 * @method void setVPort(integer $VPort) 设置地址的端口。
 * @method string getWanDomain() 获取外网地址域名。
 * @method void setWanDomain(string $WanDomain) 设置外网地址域名。
 * @method integer getWanPort() 获取外网地址端口。
 * @method void setWanPort(integer $WanPort) 设置外网地址端口。
 */
class AddressInfo extends AbstractModel
{
    /**
     * @var string 地址的资源id标识。
     */
    public $ResourceId;

    /**
     * @var string 地址所在的vpc。
     */
    public $UniqVpcId;

    /**
     * @var string 地址所在的子网。
     */
    public $UniqSubnetId;

    /**
     * @var string 地址的vip。
     */
    public $Vip;

    /**
     * @var integer 地址的端口。
     */
    public $VPort;

    /**
     * @var string 外网地址域名。
     */
    public $WanDomain;

    /**
     * @var integer 外网地址端口。
     */
    public $WanPort;

    /**
     * @param string $ResourceId 地址的资源id标识。
     * @param string $UniqVpcId 地址所在的vpc。
     * @param string $UniqSubnetId 地址所在的子网。
     * @param string $Vip 地址的vip。
     * @param integer $VPort 地址的端口。
     * @param string $WanDomain 外网地址域名。
     * @param integer $WanPort 外网地址端口。
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

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }
    }
}
