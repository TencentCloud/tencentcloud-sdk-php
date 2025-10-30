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
 * 已注册通信类型信息
 *
 * @method integer getNormalDeviceNum() 获取普通设备数
 * @method void setNormalDeviceNum(integer $NormalDeviceNum) 设置普通设备数
 * @method integer getBluetoothDeviceNum() 获取蓝牙设备数
 * @method void setBluetoothDeviceNum(integer $BluetoothDeviceNum) 设置蓝牙设备数
 */
class RegisteredDeviceNetTypeInfo extends AbstractModel
{
    /**
     * @var integer 普通设备数
     */
    public $NormalDeviceNum;

    /**
     * @var integer 蓝牙设备数
     */
    public $BluetoothDeviceNum;

    /**
     * @param integer $NormalDeviceNum 普通设备数
     * @param integer $BluetoothDeviceNum 蓝牙设备数
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
        if (array_key_exists("NormalDeviceNum",$param) and $param["NormalDeviceNum"] !== null) {
            $this->NormalDeviceNum = $param["NormalDeviceNum"];
        }

        if (array_key_exists("BluetoothDeviceNum",$param) and $param["BluetoothDeviceNum"] !== null) {
            $this->BluetoothDeviceNum = $param["BluetoothDeviceNum"];
        }
    }
}
