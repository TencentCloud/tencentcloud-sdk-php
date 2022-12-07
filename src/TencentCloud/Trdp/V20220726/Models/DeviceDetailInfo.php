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
namespace TencentCloud\Trdp\V20220726\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备详情	
 *
 * @method string getMacAddress() 获取mac地址或唯一设备标识
 * @method void setMacAddress(string $MacAddress) 设置mac地址或唯一设备标识
 * @method string getModel() 获取手机型号
 * @method void setModel(string $Model) 设置手机型号
 * @method string getOsSystem() 获取操作系统(unknown，android，ios，windows)
 * @method void setOsSystem(string $OsSystem) 设置操作系统(unknown，android，ios，windows)
 * @method string getOsSystemVersion() 获取操作系统版本
 * @method void setOsSystemVersion(string $OsSystemVersion) 设置操作系统版本
 * @method integer getBidFloor() 获取竞价底价
 * @method void setBidFloor(integer $BidFloor) 设置竞价底价
 * @method string getDeviceVersion() 获取设备版本
 * @method void setDeviceVersion(string $DeviceVersion) 设置设备版本
 * @method string getMaker() 获取设备制造商
 * @method void setMaker(string $Maker) 设置设备制造商
 * @method string getDeviceType() 获取设备类型（PHONE,TABLET）
 * @method void setDeviceType(string $DeviceType) 设置设备类型（PHONE,TABLET）
 * @method string getCarrier() 获取运营商；-1: 获取失败，0: 其他，1: 移动，2: 联通，3: 电信，4: 铁通
 * @method void setCarrier(string $Carrier) 设置运营商；-1: 获取失败，0: 其他，1: 移动，2: 联通，3: 电信，4: 铁通
 * @method string getAccessMode() 获取入网方式(wifi,5g,4g,3g,2g)
 * @method void setAccessMode(string $AccessMode) 设置入网方式(wifi,5g,4g,3g,2g)
 * @method string getPhoneChipInfo() 获取手机芯片信息
 * @method void setPhoneChipInfo(string $PhoneChipInfo) 设置手机芯片信息
 * @method string getCpuModel() 获取CPU 型号
 * @method void setCpuModel(string $CpuModel) 设置CPU 型号
 * @method string getCpuCore() 获取CPU 核数
 * @method void setCpuCore(string $CpuCore) 设置CPU 核数
 * @method string getMemory() 获取内存容量，单位转换为 GB
 * @method void setMemory(string $Memory) 设置内存容量，单位转换为 GB
 * @method string getLanguage() 获取系统语言
 * @method void setLanguage(string $Language) 设置系统语言
 * @method string getVolume() 获取手机音量
 * @method void setVolume(string $Volume) 设置手机音量
 * @method string getBatteryPower() 获取电池电量
 * @method void setBatteryPower(string $BatteryPower) 设置电池电量
 * @method integer getResolutionWidth() 获取屏幕分辨率宽，保留整数
 * @method void setResolutionWidth(integer $ResolutionWidth) 设置屏幕分辨率宽，保留整数
 * @method integer getResolutionHeight() 获取屏幕分辨率高，保留整数
 * @method void setResolutionHeight(integer $ResolutionHeight) 设置屏幕分辨率高，保留整数
 * @method string getUa() 获取浏览器类型
 * @method void setUa(string $Ua) 设置浏览器类型
 * @method string getApp() 获取客户端应用
 * @method void setApp(string $App) 设置客户端应用
 * @method string getAppPackageName() 获取应用包名
 * @method void setAppPackageName(string $AppPackageName) 设置应用包名
 * @method string getSerialNumber() 获取设备序列号
Android设备
 * @method void setSerialNumber(string $SerialNumber) 设置设备序列号
Android设备
 * @method string getMobileCountryAndNetworkCode() 获取netOperator MCC+MNC
Android设备
 * @method void setMobileCountryAndNetworkCode(string $MobileCountryAndNetworkCode) 设置netOperator MCC+MNC
Android设备
 * @method string getVendorId() 获取设备品牌 “华为”“oppo”“小米”
Android设备
 * @method void setVendorId(string $VendorId) 设置设备品牌 “华为”“oppo”“小米”
Android设备
 * @method string getAndroidApiLevel() 获取Android API等级
Android设备
 * @method void setAndroidApiLevel(string $AndroidApiLevel) 设置Android API等级
Android设备
 * @method string getBrightness() 获取屏幕亮度
Android设备
 * @method void setBrightness(string $Brightness) 设置屏幕亮度
Android设备
 * @method string getBluetoothAddress() 获取蓝牙地址
Android设备
 * @method void setBluetoothAddress(string $BluetoothAddress) 设置蓝牙地址
Android设备
 * @method string getBaseBandVersion() 获取基带版本
Android设备
 * @method void setBaseBandVersion(string $BaseBandVersion) 设置基带版本
Android设备
 * @method string getKernelVersion() 获取kernel 版本
Android设备
 * @method void setKernelVersion(string $KernelVersion) 设置kernel 版本
Android设备
 * @method string getStorage() 获取存储容量，单位转换为 GB
Android设备
 * @method void setStorage(string $Storage) 设置存储容量，单位转换为 GB
Android设备
 * @method string getPackageName() 获取软件包名
Android设备
 * @method void setPackageName(string $PackageName) 设置软件包名
Android设备
 * @method string getAppVersion() 获取app 版本号
Android设备
 * @method void setAppVersion(string $AppVersion) 设置app 版本号
Android设备
 * @method string getAppName() 获取app 显示名称
Android设备
 * @method void setAppName(string $AppName) 设置app 显示名称
Android设备
 * @method string getIsDebug() 获取是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
Android设备
 * @method void setIsDebug(string $IsDebug) 设置是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
Android设备
 * @method string getIsRoot() 获取是否越狱；0 为正常，1 为越狱；其他值无效
Android设备
 * @method void setIsRoot(string $IsRoot) 设置是否越狱；0 为正常，1 为越狱；其他值无效
Android设备
 * @method string getIsProxy() 获取是否启动代理；0 为未开启，1 为开启；其他值无效
Android设备
 * @method void setIsProxy(string $IsProxy) 设置是否启动代理；0 为未开启，1 为开启；其他值无效
Android设备
 * @method string getIsEmulator() 获取是否模拟器；0 为未开启，1 为开启；其他值无效
Android设备
 * @method void setIsEmulator(string $IsEmulator) 设置是否模拟器；0 为未开启，1 为开启；其他值无效
Android设备
 * @method string getChargeStatus() 获取充电状态；1-不在充电，2-USB充电，3-电源充电
Android设备
 * @method void setChargeStatus(string $ChargeStatus) 设置充电状态；1-不在充电，2-USB充电，3-电源充电
Android设备
 * @method string getNetworkType() 获取网络类型：2G/3G/4G/5G/Wi-Fi/WWAN/other
Android设备
 * @method void setNetworkType(string $NetworkType) 设置网络类型：2G/3G/4G/5G/Wi-Fi/WWAN/other
Android设备
 * @method string getWifiMac() 获取Wi-Fi MAC地址
Android设备
 * @method void setWifiMac(string $WifiMac) 设置Wi-Fi MAC地址
Android设备
 * @method string getDeviceName() 获取设备名称 "xxx 的 iPhone"，"xxx's IPhone" 等等
IOS设备
 * @method void setDeviceName(string $DeviceName) 设置设备名称 "xxx 的 iPhone"，"xxx's IPhone" 等等
IOS设备
 * @method string getStartupTime() 获取开机时间
IOS设备
 * @method void setStartupTime(string $StartupTime) 设置开机时间
IOS设备
 * @method string getLon() 获取所在经度
 * @method void setLon(string $Lon) 设置所在经度
 * @method string getLat() 获取所在纬度
 * @method void setLat(string $Lat) 设置所在纬度
 */
class DeviceDetailInfo extends AbstractModel
{
    /**
     * @var string mac地址或唯一设备标识
     */
    public $MacAddress;

    /**
     * @var string 手机型号
     */
    public $Model;

    /**
     * @var string 操作系统(unknown，android，ios，windows)
     */
    public $OsSystem;

    /**
     * @var string 操作系统版本
     */
    public $OsSystemVersion;

    /**
     * @var integer 竞价底价
     */
    public $BidFloor;

    /**
     * @var string 设备版本
     */
    public $DeviceVersion;

    /**
     * @var string 设备制造商
     */
    public $Maker;

    /**
     * @var string 设备类型（PHONE,TABLET）
     */
    public $DeviceType;

    /**
     * @var string 运营商；-1: 获取失败，0: 其他，1: 移动，2: 联通，3: 电信，4: 铁通
     */
    public $Carrier;

    /**
     * @var string 入网方式(wifi,5g,4g,3g,2g)
     */
    public $AccessMode;

    /**
     * @var string 手机芯片信息
     */
    public $PhoneChipInfo;

    /**
     * @var string CPU 型号
     */
    public $CpuModel;

    /**
     * @var string CPU 核数
     */
    public $CpuCore;

    /**
     * @var string 内存容量，单位转换为 GB
     */
    public $Memory;

    /**
     * @var string 系统语言
     */
    public $Language;

    /**
     * @var string 手机音量
     */
    public $Volume;

    /**
     * @var string 电池电量
     */
    public $BatteryPower;

    /**
     * @var integer 屏幕分辨率宽，保留整数
     */
    public $ResolutionWidth;

    /**
     * @var integer 屏幕分辨率高，保留整数
     */
    public $ResolutionHeight;

    /**
     * @var string 浏览器类型
     */
    public $Ua;

    /**
     * @var string 客户端应用
     */
    public $App;

    /**
     * @var string 应用包名
     */
    public $AppPackageName;

    /**
     * @var string 设备序列号
Android设备
     */
    public $SerialNumber;

    /**
     * @var string netOperator MCC+MNC
Android设备
     */
    public $MobileCountryAndNetworkCode;

    /**
     * @var string 设备品牌 “华为”“oppo”“小米”
Android设备
     */
    public $VendorId;

    /**
     * @var string Android API等级
Android设备
     */
    public $AndroidApiLevel;

    /**
     * @var string 屏幕亮度
Android设备
     */
    public $Brightness;

    /**
     * @var string 蓝牙地址
Android设备
     */
    public $BluetoothAddress;

    /**
     * @var string 基带版本
Android设备
     */
    public $BaseBandVersion;

    /**
     * @var string kernel 版本
Android设备
     */
    public $KernelVersion;

    /**
     * @var string 存储容量，单位转换为 GB
Android设备
     */
    public $Storage;

    /**
     * @var string 软件包名
Android设备
     */
    public $PackageName;

    /**
     * @var string app 版本号
Android设备
     */
    public $AppVersion;

    /**
     * @var string app 显示名称
Android设备
     */
    public $AppName;

    /**
     * @var string 是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
Android设备
     */
    public $IsDebug;

    /**
     * @var string 是否越狱；0 为正常，1 为越狱；其他值无效
Android设备
     */
    public $IsRoot;

    /**
     * @var string 是否启动代理；0 为未开启，1 为开启；其他值无效
Android设备
     */
    public $IsProxy;

    /**
     * @var string 是否模拟器；0 为未开启，1 为开启；其他值无效
Android设备
     */
    public $IsEmulator;

    /**
     * @var string 充电状态；1-不在充电，2-USB充电，3-电源充电
Android设备
     */
    public $ChargeStatus;

    /**
     * @var string 网络类型：2G/3G/4G/5G/Wi-Fi/WWAN/other
Android设备
     */
    public $NetworkType;

    /**
     * @var string Wi-Fi MAC地址
Android设备
     */
    public $WifiMac;

    /**
     * @var string 设备名称 "xxx 的 iPhone"，"xxx's IPhone" 等等
IOS设备
     */
    public $DeviceName;

    /**
     * @var string 开机时间
IOS设备
     */
    public $StartupTime;

    /**
     * @var string 所在经度
     */
    public $Lon;

    /**
     * @var string 所在纬度
     */
    public $Lat;

    /**
     * @param string $MacAddress mac地址或唯一设备标识
     * @param string $Model 手机型号
     * @param string $OsSystem 操作系统(unknown，android，ios，windows)
     * @param string $OsSystemVersion 操作系统版本
     * @param integer $BidFloor 竞价底价
     * @param string $DeviceVersion 设备版本
     * @param string $Maker 设备制造商
     * @param string $DeviceType 设备类型（PHONE,TABLET）
     * @param string $Carrier 运营商；-1: 获取失败，0: 其他，1: 移动，2: 联通，3: 电信，4: 铁通
     * @param string $AccessMode 入网方式(wifi,5g,4g,3g,2g)
     * @param string $PhoneChipInfo 手机芯片信息
     * @param string $CpuModel CPU 型号
     * @param string $CpuCore CPU 核数
     * @param string $Memory 内存容量，单位转换为 GB
     * @param string $Language 系统语言
     * @param string $Volume 手机音量
     * @param string $BatteryPower 电池电量
     * @param integer $ResolutionWidth 屏幕分辨率宽，保留整数
     * @param integer $ResolutionHeight 屏幕分辨率高，保留整数
     * @param string $Ua 浏览器类型
     * @param string $App 客户端应用
     * @param string $AppPackageName 应用包名
     * @param string $SerialNumber 设备序列号
Android设备
     * @param string $MobileCountryAndNetworkCode netOperator MCC+MNC
Android设备
     * @param string $VendorId 设备品牌 “华为”“oppo”“小米”
Android设备
     * @param string $AndroidApiLevel Android API等级
Android设备
     * @param string $Brightness 屏幕亮度
Android设备
     * @param string $BluetoothAddress 蓝牙地址
Android设备
     * @param string $BaseBandVersion 基带版本
Android设备
     * @param string $KernelVersion kernel 版本
Android设备
     * @param string $Storage 存储容量，单位转换为 GB
Android设备
     * @param string $PackageName 软件包名
Android设备
     * @param string $AppVersion app 版本号
Android设备
     * @param string $AppName app 显示名称
Android设备
     * @param string $IsDebug 是否 debug；0 为正常模式，1 为 debug 模式；其他值无效
Android设备
     * @param string $IsRoot 是否越狱；0 为正常，1 为越狱；其他值无效
Android设备
     * @param string $IsProxy 是否启动代理；0 为未开启，1 为开启；其他值无效
Android设备
     * @param string $IsEmulator 是否模拟器；0 为未开启，1 为开启；其他值无效
Android设备
     * @param string $ChargeStatus 充电状态；1-不在充电，2-USB充电，3-电源充电
Android设备
     * @param string $NetworkType 网络类型：2G/3G/4G/5G/Wi-Fi/WWAN/other
Android设备
     * @param string $WifiMac Wi-Fi MAC地址
Android设备
     * @param string $DeviceName 设备名称 "xxx 的 iPhone"，"xxx's IPhone" 等等
IOS设备
     * @param string $StartupTime 开机时间
IOS设备
     * @param string $Lon 所在经度
     * @param string $Lat 所在纬度
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
        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("OsSystem",$param) and $param["OsSystem"] !== null) {
            $this->OsSystem = $param["OsSystem"];
        }

        if (array_key_exists("OsSystemVersion",$param) and $param["OsSystemVersion"] !== null) {
            $this->OsSystemVersion = $param["OsSystemVersion"];
        }

        if (array_key_exists("BidFloor",$param) and $param["BidFloor"] !== null) {
            $this->BidFloor = $param["BidFloor"];
        }

        if (array_key_exists("DeviceVersion",$param) and $param["DeviceVersion"] !== null) {
            $this->DeviceVersion = $param["DeviceVersion"];
        }

        if (array_key_exists("Maker",$param) and $param["Maker"] !== null) {
            $this->Maker = $param["Maker"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Carrier",$param) and $param["Carrier"] !== null) {
            $this->Carrier = $param["Carrier"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("PhoneChipInfo",$param) and $param["PhoneChipInfo"] !== null) {
            $this->PhoneChipInfo = $param["PhoneChipInfo"];
        }

        if (array_key_exists("CpuModel",$param) and $param["CpuModel"] !== null) {
            $this->CpuModel = $param["CpuModel"];
        }

        if (array_key_exists("CpuCore",$param) and $param["CpuCore"] !== null) {
            $this->CpuCore = $param["CpuCore"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("BatteryPower",$param) and $param["BatteryPower"] !== null) {
            $this->BatteryPower = $param["BatteryPower"];
        }

        if (array_key_exists("ResolutionWidth",$param) and $param["ResolutionWidth"] !== null) {
            $this->ResolutionWidth = $param["ResolutionWidth"];
        }

        if (array_key_exists("ResolutionHeight",$param) and $param["ResolutionHeight"] !== null) {
            $this->ResolutionHeight = $param["ResolutionHeight"];
        }

        if (array_key_exists("Ua",$param) and $param["Ua"] !== null) {
            $this->Ua = $param["Ua"];
        }

        if (array_key_exists("App",$param) and $param["App"] !== null) {
            $this->App = $param["App"];
        }

        if (array_key_exists("AppPackageName",$param) and $param["AppPackageName"] !== null) {
            $this->AppPackageName = $param["AppPackageName"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("MobileCountryAndNetworkCode",$param) and $param["MobileCountryAndNetworkCode"] !== null) {
            $this->MobileCountryAndNetworkCode = $param["MobileCountryAndNetworkCode"];
        }

        if (array_key_exists("VendorId",$param) and $param["VendorId"] !== null) {
            $this->VendorId = $param["VendorId"];
        }

        if (array_key_exists("AndroidApiLevel",$param) and $param["AndroidApiLevel"] !== null) {
            $this->AndroidApiLevel = $param["AndroidApiLevel"];
        }

        if (array_key_exists("Brightness",$param) and $param["Brightness"] !== null) {
            $this->Brightness = $param["Brightness"];
        }

        if (array_key_exists("BluetoothAddress",$param) and $param["BluetoothAddress"] !== null) {
            $this->BluetoothAddress = $param["BluetoothAddress"];
        }

        if (array_key_exists("BaseBandVersion",$param) and $param["BaseBandVersion"] !== null) {
            $this->BaseBandVersion = $param["BaseBandVersion"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("IsDebug",$param) and $param["IsDebug"] !== null) {
            $this->IsDebug = $param["IsDebug"];
        }

        if (array_key_exists("IsRoot",$param) and $param["IsRoot"] !== null) {
            $this->IsRoot = $param["IsRoot"];
        }

        if (array_key_exists("IsProxy",$param) and $param["IsProxy"] !== null) {
            $this->IsProxy = $param["IsProxy"];
        }

        if (array_key_exists("IsEmulator",$param) and $param["IsEmulator"] !== null) {
            $this->IsEmulator = $param["IsEmulator"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("WifiMac",$param) and $param["WifiMac"] !== null) {
            $this->WifiMac = $param["WifiMac"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("StartupTime",$param) and $param["StartupTime"] !== null) {
            $this->StartupTime = $param["StartupTime"];
        }

        if (array_key_exists("Lon",$param) and $param["Lon"] !== null) {
            $this->Lon = $param["Lon"];
        }

        if (array_key_exists("Lat",$param) and $param["Lat"] !== null) {
            $this->Lat = $param["Lat"];
        }
    }
}
