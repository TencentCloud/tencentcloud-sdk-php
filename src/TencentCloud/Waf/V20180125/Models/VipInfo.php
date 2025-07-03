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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vip信息
 *
 * @method string getVip() 获取VIP地址
 * @method void setVip(string $Vip) 设置VIP地址
 * @method string getInstanceId() 获取waf实例id
 * @method void setInstanceId(string $InstanceId) 设置waf实例id
 * @method string getInstanceCreateTime() 获取创建时间
 * @method void setInstanceCreateTime(string $InstanceCreateTime) 设置创建时间
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method string getISP() 获取ip运营商类型
 * @method void setISP(string $ISP) 设置ip运营商类型
 * @method string getVipType() 获取ip类型
 * @method void setVipType(string $VipType) 设置ip类型
 * @method string getAddressName() 获取域名信息
 * @method void setAddressName(string $AddressName) 设置域名信息
 */
class VipInfo extends AbstractModel
{
    /**
     * @var string VIP地址
     */
    public $Vip;

    /**
     * @var string waf实例id
     */
    public $InstanceId;

    /**
     * @var string 创建时间
     */
    public $InstanceCreateTime;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var string ip运营商类型
     */
    public $ISP;

    /**
     * @var string ip类型
     */
    public $VipType;

    /**
     * @var string 域名信息
     */
    public $AddressName;

    /**
     * @param string $Vip VIP地址
     * @param string $InstanceId waf实例id
     * @param string $InstanceCreateTime 创建时间
     * @param string $Region 地域
     * @param integer $RegionId 地域ID
     * @param string $ISP ip运营商类型
     * @param string $VipType ip类型
     * @param string $AddressName 域名信息
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceCreateTime",$param) and $param["InstanceCreateTime"] !== null) {
            $this->InstanceCreateTime = $param["InstanceCreateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }
    }
}
