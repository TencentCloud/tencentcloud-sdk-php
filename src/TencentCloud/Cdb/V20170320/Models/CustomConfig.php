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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * proxy配置
 *
 * @method string getDevice() 获取设备
 * @method void setDevice(string $Device) 设置设备
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getDeviceType() 获取设备类型
 * @method void setDeviceType(string $DeviceType) 设置设备类型
 * @method integer getMemory() 获取内存
 * @method void setMemory(integer $Memory) 设置内存
 * @method integer getCpu() 获取核数
 * @method void setCpu(integer $Cpu) 设置核数
 */
class CustomConfig extends AbstractModel
{
    /**
     * @var string 设备
     */
    public $Device;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 设备类型
     */
    public $DeviceType;

    /**
     * @var integer 内存
     */
    public $Memory;

    /**
     * @var integer 核数
     */
    public $Cpu;

    /**
     * @param string $Device 设备
     * @param string $Type 类型
     * @param string $DeviceType 设备类型
     * @param integer $Memory 内存
     * @param integer $Cpu 核数
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
        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }
    }
}
