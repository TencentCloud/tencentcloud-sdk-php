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
 * 设备基础信息
 *
 * @method string getDeviceId() 获取<p>设备ID</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备ID</p>
 * @method string getAppVersion() 获取<p>App版本信息</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>App版本信息</p>
 * @method string getBrand() 获取<p>品牌</p>
 * @method void setBrand(string $Brand) 设置<p>品牌</p>
 * @method string getClientIp() 获取<p>客户端IP</p>
 * @method void setClientIp(string $ClientIp) 设置<p>客户端IP</p>
 * @method string getModel() 获取<p>机型</p>
 * @method void setModel(string $Model) 设置<p>机型</p>
 * @method string getNetworkType() 获取<p>网络类型</p>
 * @method void setNetworkType(string $NetworkType) 设置<p>网络类型</p>
 * @method string getPackageName() 获取<p>应用包名</p>
 * @method void setPackageName(string $PackageName) 设置<p>应用包名</p>
 * @method string getPlatform() 获取<p>平台</p><p>枚举值：</p><ul><li>2： Android</li><li>3： IOS</li><li>4： H5</li><li>5： 微信小程序</li></ul>
 * @method void setPlatform(string $Platform) 设置<p>平台</p><p>枚举值：</p><ul><li>2： Android</li><li>3： IOS</li><li>4： H5</li><li>5： 微信小程序</li></ul>
 * @method string getSystemVersion() 获取<p>系统版本</p>
 * @method void setSystemVersion(string $SystemVersion) 设置<p>系统版本</p>
 * @method string getSdkBuildVersion() 获取<p>SDK版本</p>
 * @method void setSdkBuildVersion(string $SdkBuildVersion) 设置<p>SDK版本</p>
 */
class Device extends AbstractModel
{
    /**
     * @var string <p>设备ID</p>
     */
    public $DeviceId;

    /**
     * @var string <p>App版本信息</p>
     */
    public $AppVersion;

    /**
     * @var string <p>品牌</p>
     */
    public $Brand;

    /**
     * @var string <p>客户端IP</p>
     */
    public $ClientIp;

    /**
     * @var string <p>机型</p>
     */
    public $Model;

    /**
     * @var string <p>网络类型</p>
     */
    public $NetworkType;

    /**
     * @var string <p>应用包名</p>
     */
    public $PackageName;

    /**
     * @var string <p>平台</p><p>枚举值：</p><ul><li>2： Android</li><li>3： IOS</li><li>4： H5</li><li>5： 微信小程序</li></ul>
     */
    public $Platform;

    /**
     * @var string <p>系统版本</p>
     */
    public $SystemVersion;

    /**
     * @var string <p>SDK版本</p>
     */
    public $SdkBuildVersion;

    /**
     * @param string $DeviceId <p>设备ID</p>
     * @param string $AppVersion <p>App版本信息</p>
     * @param string $Brand <p>品牌</p>
     * @param string $ClientIp <p>客户端IP</p>
     * @param string $Model <p>机型</p>
     * @param string $NetworkType <p>网络类型</p>
     * @param string $PackageName <p>应用包名</p>
     * @param string $Platform <p>平台</p><p>枚举值：</p><ul><li>2： Android</li><li>3： IOS</li><li>4： H5</li><li>5： 微信小程序</li></ul>
     * @param string $SystemVersion <p>系统版本</p>
     * @param string $SdkBuildVersion <p>SDK版本</p>
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("SystemVersion",$param) and $param["SystemVersion"] !== null) {
            $this->SystemVersion = $param["SystemVersion"];
        }

        if (array_key_exists("SdkBuildVersion",$param) and $param["SdkBuildVersion"] !== null) {
            $this->SdkBuildVersion = $param["SdkBuildVersion"];
        }
    }
}
