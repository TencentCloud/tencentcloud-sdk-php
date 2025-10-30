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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络设备收货详情
 *
 * @method string getDeviceSn() 获取设备sn
 * @method void setDeviceSn(string $DeviceSn) 设置设备sn
 * @method string getModelVersion() 获取设备型号-版本
 * @method void setModelVersion(string $ModelVersion) 设置设备型号-版本
 * @method string getHardwareMemo() 获取硬件备注
 * @method void setHardwareMemo(string $HardwareMemo) 设置硬件备注
 * @method string getManufacturer() 获取厂商
 * @method void setManufacturer(string $Manufacturer) 设置厂商
 */
class NetReceivingInfo extends AbstractModel
{
    /**
     * @var string 设备sn
     */
    public $DeviceSn;

    /**
     * @var string 设备型号-版本
     */
    public $ModelVersion;

    /**
     * @var string 硬件备注
     */
    public $HardwareMemo;

    /**
     * @var string 厂商
     */
    public $Manufacturer;

    /**
     * @param string $DeviceSn 设备sn
     * @param string $ModelVersion 设备型号-版本
     * @param string $HardwareMemo 硬件备注
     * @param string $Manufacturer 厂商
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
        if (array_key_exists("DeviceSn",$param) and $param["DeviceSn"] !== null) {
            $this->DeviceSn = $param["DeviceSn"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("HardwareMemo",$param) and $param["HardwareMemo"] !== null) {
            $this->HardwareMemo = $param["HardwareMemo"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }
    }
}
