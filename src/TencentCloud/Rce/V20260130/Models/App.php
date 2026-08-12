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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用程序信息
 *
 * @method string getOS() 获取<p>应用程序运行的移动设备的操作系统类型</p>
 * @method void setOS(string $OS) 设置<p>应用程序运行的移动设备的操作系统类型</p>
 * @method string getOSVersion() 获取<p>应用程序运行的移动设备的操作系统版本</p>
 * @method void setOSVersion(string $OSVersion) 设置<p>应用程序运行的移动设备的操作系统版本</p>
 * @method string getDeviceManufacturer() 获取<p>应用程序运行的移动设备的生产厂商</p>
 * @method void setDeviceManufacturer(string $DeviceManufacturer) 设置<p>应用程序运行的移动设备的生产厂商</p>
 * @method string getDeviceModel() 获取<p>应用程序运行的移动设备的型号</p>
 * @method void setDeviceModel(string $DeviceModel) 设置<p>应用程序运行的移动设备的型号</p>
 * @method string getDeviceId() 获取<p>应用程序运行的移动设备的唯一ID，对于iOS为IFV标识，对于Android为Android ID</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>应用程序运行的移动设备的唯一ID，对于iOS为IFV标识，对于Android为Android ID</p>
 * @method string getAppName() 获取<p>应用程序名称</p>
 * @method void setAppName(string $AppName) 设置<p>应用程序名称</p>
 * @method string getAppVersion() 获取<p>应用程序版本</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>应用程序版本</p>
 * @method string getClientLanguage() 获取<p>应用程序提供的语言</p>
 * @method void setClientLanguage(string $ClientLanguage) 设置<p>应用程序提供的语言</p>
 */
class App extends AbstractModel
{
    /**
     * @var string <p>应用程序运行的移动设备的操作系统类型</p>
     */
    public $OS;

    /**
     * @var string <p>应用程序运行的移动设备的操作系统版本</p>
     */
    public $OSVersion;

    /**
     * @var string <p>应用程序运行的移动设备的生产厂商</p>
     */
    public $DeviceManufacturer;

    /**
     * @var string <p>应用程序运行的移动设备的型号</p>
     */
    public $DeviceModel;

    /**
     * @var string <p>应用程序运行的移动设备的唯一ID，对于iOS为IFV标识，对于Android为Android ID</p>
     */
    public $DeviceId;

    /**
     * @var string <p>应用程序名称</p>
     */
    public $AppName;

    /**
     * @var string <p>应用程序版本</p>
     */
    public $AppVersion;

    /**
     * @var string <p>应用程序提供的语言</p>
     */
    public $ClientLanguage;

    /**
     * @param string $OS <p>应用程序运行的移动设备的操作系统类型</p>
     * @param string $OSVersion <p>应用程序运行的移动设备的操作系统版本</p>
     * @param string $DeviceManufacturer <p>应用程序运行的移动设备的生产厂商</p>
     * @param string $DeviceModel <p>应用程序运行的移动设备的型号</p>
     * @param string $DeviceId <p>应用程序运行的移动设备的唯一ID，对于iOS为IFV标识，对于Android为Android ID</p>
     * @param string $AppName <p>应用程序名称</p>
     * @param string $AppVersion <p>应用程序版本</p>
     * @param string $ClientLanguage <p>应用程序提供的语言</p>
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
        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }

        if (array_key_exists("OSVersion",$param) and $param["OSVersion"] !== null) {
            $this->OSVersion = $param["OSVersion"];
        }

        if (array_key_exists("DeviceManufacturer",$param) and $param["DeviceManufacturer"] !== null) {
            $this->DeviceManufacturer = $param["DeviceManufacturer"];
        }

        if (array_key_exists("DeviceModel",$param) and $param["DeviceModel"] !== null) {
            $this->DeviceModel = $param["DeviceModel"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("ClientLanguage",$param) and $param["ClientLanguage"] !== null) {
            $this->ClientLanguage = $param["ClientLanguage"];
        }
    }
}
