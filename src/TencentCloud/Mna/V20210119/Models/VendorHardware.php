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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 厂商硬件详细信息
 *
 * @method string getHardwareId() 获取硬件id
 * @method void setHardwareId(string $HardwareId) 设置硬件id
 * @method string getSN() 获取硬件序列号
 * @method void setSN(string $SN) 设置硬件序列号
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getStatus() 获取激活状态， 空：全部； 1:待激活； 2:已激活
 * @method void setStatus(integer $Status) 设置激活状态， 空：全部； 1:待激活； 2:已激活
 * @method string getActiveTime() 获取激活时间
 * @method void setActiveTime(string $ActiveTime) 设置激活时间
 * @method string getDescription() 获取厂商备注
 * @method void setDescription(string $Description) 设置厂商备注
 * @method string getDeviceId() 获取设备id
 * @method void setDeviceId(string $DeviceId) 设置设备id
 * @method integer getLicenseChargingMode() 获取license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注：设备为租户付费且未激活（未选择月付还是永久付费）时，此参数返回1，仅代表租户付费。后续将废弃此参数，新接入请使用LicensePayMode和Payer
 * @method void setLicenseChargingMode(integer $LicenseChargingMode) 设置license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注：设备为租户付费且未激活（未选择月付还是永久付费）时，此参数返回1，仅代表租户付费。后续将废弃此参数，新接入请使用LicensePayMode和Payer
 * @method string getLastOnlineTime() 获取最后在线时间
 * @method void setLastOnlineTime(string $LastOnlineTime) 设置最后在线时间
 * @method integer getLicensePayMode() 获取license授权有效期
0：月度授权
1：永久授权
-1：未知
 * @method void setLicensePayMode(integer $LicensePayMode) 设置license授权有效期
0：月度授权
1：永久授权
-1：未知
 * @method integer getPayer() 获取付费方
0：客户付费
1：厂商付费
 * @method void setPayer(integer $Payer) 设置付费方
0：客户付费
1：厂商付费
 */
class VendorHardware extends AbstractModel
{
    /**
     * @var string 硬件id
     */
    public $HardwareId;

    /**
     * @var string 硬件序列号
     */
    public $SN;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 激活状态， 空：全部； 1:待激活； 2:已激活
     */
    public $Status;

    /**
     * @var string 激活时间
     */
    public $ActiveTime;

    /**
     * @var string 厂商备注
     */
    public $Description;

    /**
     * @var string 设备id
     */
    public $DeviceId;

    /**
     * @var integer license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注：设备为租户付费且未激活（未选择月付还是永久付费）时，此参数返回1，仅代表租户付费。后续将废弃此参数，新接入请使用LicensePayMode和Payer
     */
    public $LicenseChargingMode;

    /**
     * @var string 最后在线时间
     */
    public $LastOnlineTime;

    /**
     * @var integer license授权有效期
0：月度授权
1：永久授权
-1：未知
     */
    public $LicensePayMode;

    /**
     * @var integer 付费方
0：客户付费
1：厂商付费
     */
    public $Payer;

    /**
     * @param string $HardwareId 硬件id
     * @param string $SN 硬件序列号
     * @param string $CreateTime 创建时间
     * @param integer $Status 激活状态， 空：全部； 1:待激活； 2:已激活
     * @param string $ActiveTime 激活时间
     * @param string $Description 厂商备注
     * @param string $DeviceId 设备id
     * @param integer $LicenseChargingMode license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注：设备为租户付费且未激活（未选择月付还是永久付费）时，此参数返回1，仅代表租户付费。后续将废弃此参数，新接入请使用LicensePayMode和Payer
     * @param string $LastOnlineTime 最后在线时间
     * @param integer $LicensePayMode license授权有效期
0：月度授权
1：永久授权
-1：未知
     * @param integer $Payer 付费方
0：客户付费
1：厂商付费
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
        if (array_key_exists("HardwareId",$param) and $param["HardwareId"] !== null) {
            $this->HardwareId = $param["HardwareId"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("LicenseChargingMode",$param) and $param["LicenseChargingMode"] !== null) {
            $this->LicenseChargingMode = $param["LicenseChargingMode"];
        }

        if (array_key_exists("LastOnlineTime",$param) and $param["LastOnlineTime"] !== null) {
            $this->LastOnlineTime = $param["LastOnlineTime"];
        }

        if (array_key_exists("LicensePayMode",$param) and $param["LicensePayMode"] !== null) {
            $this->LicensePayMode = $param["LicensePayMode"];
        }

        if (array_key_exists("Payer",$param) and $param["Payer"] !== null) {
            $this->Payer = $param["Payer"];
        }
    }
}
