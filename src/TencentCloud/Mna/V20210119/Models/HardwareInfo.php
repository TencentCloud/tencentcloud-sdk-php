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
 * 硬件信息
 *
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getActiveTime() 获取激活时间
 * @method void setActiveTime(string $ActiveTime) 设置激活时间
 * @method string getLastOnlineTime() 获取最后在线时间
 * @method void setLastOnlineTime(string $LastOnlineTime) 设置最后在线时间
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method string getVendorDescription() 获取厂商备注
 * @method void setVendorDescription(string $VendorDescription) 设置厂商备注
 * @method integer getLicenseChargingMode() 获取license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注：后续将废弃此参数，新接入请使用LicensePayMode和Payer
 * @method void setLicenseChargingMode(integer $LicenseChargingMode) 设置license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注：后续将废弃此参数，新接入请使用LicensePayMode和Payer
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getSN() 获取硬件序列号
 * @method void setSN(string $SN) 设置硬件序列号
 * @method integer getLicensePayMode() 获取license授权有效期 
0：月度授权 
1：永久授权
 * @method void setLicensePayMode(integer $LicensePayMode) 设置license授权有效期 
0：月度授权 
1：永久授权
 * @method integer getPayer() 获取付费方 
0：客户付费 
1：厂商付费
 * @method void setPayer(integer $Payer) 设置付费方 
0：客户付费 
1：厂商付费
 * @method string getGroupId() 获取设备分组ID
 * @method void setGroupId(string $GroupId) 设置设备分组ID
 * @method string getGroupName() 获取设备分组名称
 * @method void setGroupName(string $GroupName) 设置设备分组名称
 * @method integer getFlowTrunc() 获取设备无流量包处理方式，0: 按量付费，1: 截断加速	
 * @method void setFlowTrunc(integer $FlowTrunc) 设置设备无流量包处理方式，0: 按量付费，1: 截断加速	
 */
class HardwareInfo extends AbstractModel
{
    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 激活时间
     */
    public $ActiveTime;

    /**
     * @var string 最后在线时间
     */
    public $LastOnlineTime;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var string 厂商备注
     */
    public $VendorDescription;

    /**
     * @var integer license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注：后续将废弃此参数，新接入请使用LicensePayMode和Payer
     */
    public $LicenseChargingMode;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 硬件序列号
     */
    public $SN;

    /**
     * @var integer license授权有效期 
0：月度授权 
1：永久授权
     */
    public $LicensePayMode;

    /**
     * @var integer 付费方 
0：客户付费 
1：厂商付费
     */
    public $Payer;

    /**
     * @var string 设备分组ID
     */
    public $GroupId;

    /**
     * @var string 设备分组名称
     */
    public $GroupName;

    /**
     * @var integer 设备无流量包处理方式，0: 按量付费，1: 截断加速	
     */
    public $FlowTrunc;

    /**
     * @param string $DeviceId 设备ID
     * @param string $DeviceName 设备名称
     * @param string $ActiveTime 激活时间
     * @param string $LastOnlineTime 最后在线时间
     * @param string $Description 备注
     * @param string $VendorDescription 厂商备注
     * @param integer $LicenseChargingMode license计费模式： 1，租户月付费 2，厂商月付费 3，license永久授权
注：后续将废弃此参数，新接入请使用LicensePayMode和Payer
     * @param string $CreateTime 创建时间
     * @param string $SN 硬件序列号
     * @param integer $LicensePayMode license授权有效期 
0：月度授权 
1：永久授权
     * @param integer $Payer 付费方 
0：客户付费 
1：厂商付费
     * @param string $GroupId 设备分组ID
     * @param string $GroupName 设备分组名称
     * @param integer $FlowTrunc 设备无流量包处理方式，0: 按量付费，1: 截断加速	
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

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("LastOnlineTime",$param) and $param["LastOnlineTime"] !== null) {
            $this->LastOnlineTime = $param["LastOnlineTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VendorDescription",$param) and $param["VendorDescription"] !== null) {
            $this->VendorDescription = $param["VendorDescription"];
        }

        if (array_key_exists("LicenseChargingMode",$param) and $param["LicenseChargingMode"] !== null) {
            $this->LicenseChargingMode = $param["LicenseChargingMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("LicensePayMode",$param) and $param["LicensePayMode"] !== null) {
            $this->LicensePayMode = $param["LicensePayMode"];
        }

        if (array_key_exists("Payer",$param) and $param["Payer"] !== null) {
            $this->Payer = $param["Payer"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("FlowTrunc",$param) and $param["FlowTrunc"] !== null) {
            $this->FlowTrunc = $param["FlowTrunc"];
        }
    }
}
