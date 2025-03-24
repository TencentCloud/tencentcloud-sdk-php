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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 其他设备收货信息
 *
 * @method string getDeviceSn() 获取设备sn
 * @method void setDeviceSn(string $DeviceSn) 设置设备sn
 * @method string getTypeName() 获取'USB', '移动硬盘', '网络设备板卡', '网络设备模块', '服务器硬盘', '服务器内存', '其他'
 * @method void setTypeName(string $TypeName) 设置'USB', '移动硬盘', '网络设备板卡', '网络设备模块', '服务器硬盘', '服务器内存', '其他'
 * @method string getManufacturer() 获取厂商
 * @method void setManufacturer(string $Manufacturer) 设置厂商
 * @method string getHardwareMemo() 获取硬件备注
 * @method void setHardwareMemo(string $HardwareMemo) 设置硬件备注
 */
class OtherDevReceivingInfo extends AbstractModel
{
    /**
     * @var string 设备sn
     */
    public $DeviceSn;

    /**
     * @var string 'USB', '移动硬盘', '网络设备板卡', '网络设备模块', '服务器硬盘', '服务器内存', '其他'
     */
    public $TypeName;

    /**
     * @var string 厂商
     */
    public $Manufacturer;

    /**
     * @var string 硬件备注
     */
    public $HardwareMemo;

    /**
     * @param string $DeviceSn 设备sn
     * @param string $TypeName 'USB', '移动硬盘', '网络设备板卡', '网络设备模块', '服务器硬盘', '服务器内存', '其他'
     * @param string $Manufacturer 厂商
     * @param string $HardwareMemo 硬件备注
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

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("HardwareMemo",$param) and $param["HardwareMemo"] !== null) {
            $this->HardwareMemo = $param["HardwareMemo"];
        }
    }
}
