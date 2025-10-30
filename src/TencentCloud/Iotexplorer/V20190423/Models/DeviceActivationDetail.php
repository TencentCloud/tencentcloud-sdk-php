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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备激活详情信息
 *
 * @method integer getTotalDeviceNum() 获取可注册设备数
 * @method void setTotalDeviceNum(integer $TotalDeviceNum) 设置可注册设备数
 * @method integer getUsedDeviceNum() 获取已注册设备数
 * @method void setUsedDeviceNum(integer $UsedDeviceNum) 设置已注册设备数
 * @method integer getTotalNormalLicense() 获取设备授权数
 * @method void setTotalNormalLicense(integer $TotalNormalLicense) 设置设备授权数
 * @method integer getUsedNormalLicense() 获取已使用设备授权数
 * @method void setUsedNormalLicense(integer $UsedNormalLicense) 设置已使用设备授权数
 * @method integer getTotalBluetoothLicense() 获取蓝牙授权数
 * @method void setTotalBluetoothLicense(integer $TotalBluetoothLicense) 设置蓝牙授权数
 * @method integer getUsedBluetoothLicense() 获取已使用蓝牙授权数
 * @method void setUsedBluetoothLicense(integer $UsedBluetoothLicense) 设置已使用蓝牙授权数
 * @method integer getTotalFreeLicense() 获取可免费注册设备数
 * @method void setTotalFreeLicense(integer $TotalFreeLicense) 设置可免费注册设备数
 * @method integer getUsedFreeLicense() 获取已使用注册设备数
 * @method void setUsedFreeLicense(integer $UsedFreeLicense) 设置已使用注册设备数
 */
class DeviceActivationDetail extends AbstractModel
{
    /**
     * @var integer 可注册设备数
     */
    public $TotalDeviceNum;

    /**
     * @var integer 已注册设备数
     */
    public $UsedDeviceNum;

    /**
     * @var integer 设备授权数
     */
    public $TotalNormalLicense;

    /**
     * @var integer 已使用设备授权数
     */
    public $UsedNormalLicense;

    /**
     * @var integer 蓝牙授权数
     */
    public $TotalBluetoothLicense;

    /**
     * @var integer 已使用蓝牙授权数
     */
    public $UsedBluetoothLicense;

    /**
     * @var integer 可免费注册设备数
     */
    public $TotalFreeLicense;

    /**
     * @var integer 已使用注册设备数
     */
    public $UsedFreeLicense;

    /**
     * @param integer $TotalDeviceNum 可注册设备数
     * @param integer $UsedDeviceNum 已注册设备数
     * @param integer $TotalNormalLicense 设备授权数
     * @param integer $UsedNormalLicense 已使用设备授权数
     * @param integer $TotalBluetoothLicense 蓝牙授权数
     * @param integer $UsedBluetoothLicense 已使用蓝牙授权数
     * @param integer $TotalFreeLicense 可免费注册设备数
     * @param integer $UsedFreeLicense 已使用注册设备数
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
        if (array_key_exists("TotalDeviceNum",$param) and $param["TotalDeviceNum"] !== null) {
            $this->TotalDeviceNum = $param["TotalDeviceNum"];
        }

        if (array_key_exists("UsedDeviceNum",$param) and $param["UsedDeviceNum"] !== null) {
            $this->UsedDeviceNum = $param["UsedDeviceNum"];
        }

        if (array_key_exists("TotalNormalLicense",$param) and $param["TotalNormalLicense"] !== null) {
            $this->TotalNormalLicense = $param["TotalNormalLicense"];
        }

        if (array_key_exists("UsedNormalLicense",$param) and $param["UsedNormalLicense"] !== null) {
            $this->UsedNormalLicense = $param["UsedNormalLicense"];
        }

        if (array_key_exists("TotalBluetoothLicense",$param) and $param["TotalBluetoothLicense"] !== null) {
            $this->TotalBluetoothLicense = $param["TotalBluetoothLicense"];
        }

        if (array_key_exists("UsedBluetoothLicense",$param) and $param["UsedBluetoothLicense"] !== null) {
            $this->UsedBluetoothLicense = $param["UsedBluetoothLicense"];
        }

        if (array_key_exists("TotalFreeLicense",$param) and $param["TotalFreeLicense"] !== null) {
            $this->TotalFreeLicense = $param["TotalFreeLicense"];
        }

        if (array_key_exists("UsedFreeLicense",$param) and $param["UsedFreeLicense"] !== null) {
            $this->UsedFreeLicense = $param["UsedFreeLicense"];
        }
    }
}
