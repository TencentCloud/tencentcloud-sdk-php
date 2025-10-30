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
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getInstanceType() 获取实例类型
 * @method void setInstanceType(integer $InstanceType) 设置实例类型
 * @method DeviceActivationDetail getDeviceActivationDetails() 获取设备激活信息
 * @method void setDeviceActivationDetails(DeviceActivationDetail $DeviceActivationDetails) 设置设备激活信息
 * @method RegisteredDeviceTypeInfo getRegisteredDeviceType() 获取已注册设备类型信息
 * @method void setRegisteredDeviceType(RegisteredDeviceTypeInfo $RegisteredDeviceType) 设置已注册设备类型信息
 * @method RegisteredDeviceNetTypeInfo getRegisteredDeviceNetType() 获取已注册设备通信类型信息
 * @method void setRegisteredDeviceNetType(RegisteredDeviceNetTypeInfo $RegisteredDeviceNetType) 设置已注册设备通信类型信息
 */
class ActivateDeviceInfo extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 实例类型
     */
    public $InstanceType;

    /**
     * @var DeviceActivationDetail 设备激活信息
     */
    public $DeviceActivationDetails;

    /**
     * @var RegisteredDeviceTypeInfo 已注册设备类型信息
     */
    public $RegisteredDeviceType;

    /**
     * @var RegisteredDeviceNetTypeInfo 已注册设备通信类型信息
     */
    public $RegisteredDeviceNetType;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $InstanceType 实例类型
     * @param DeviceActivationDetail $DeviceActivationDetails 设备激活信息
     * @param RegisteredDeviceTypeInfo $RegisteredDeviceType 已注册设备类型信息
     * @param RegisteredDeviceNetTypeInfo $RegisteredDeviceNetType 已注册设备通信类型信息
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DeviceActivationDetails",$param) and $param["DeviceActivationDetails"] !== null) {
            $this->DeviceActivationDetails = new DeviceActivationDetail();
            $this->DeviceActivationDetails->deserialize($param["DeviceActivationDetails"]);
        }

        if (array_key_exists("RegisteredDeviceType",$param) and $param["RegisteredDeviceType"] !== null) {
            $this->RegisteredDeviceType = new RegisteredDeviceTypeInfo();
            $this->RegisteredDeviceType->deserialize($param["RegisteredDeviceType"]);
        }

        if (array_key_exists("RegisteredDeviceNetType",$param) and $param["RegisteredDeviceNetType"] !== null) {
            $this->RegisteredDeviceNetType = new RegisteredDeviceNetTypeInfo();
            $this->RegisteredDeviceNetType->deserialize($param["RegisteredDeviceNetType"]);
        }
    }
}
