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
 * 激活设备
 *
 * @method string getVendor() 获取厂商名称
 * @method void setVendor(string $Vendor) 设置厂商名称
 * @method string getSN() 获取设备SN序列号
 * @method void setSN(string $SN) 设置设备SN序列号
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method string getDataKey() 获取设备密钥
 * @method void setDataKey(string $DataKey) 设置设备密钥
 * @method integer getAccessScope() 获取接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
 * @method void setAccessScope(integer $AccessScope) 设置接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
 * @method integer getLicensePayMode() 获取当付费方为租户时，可选择租户license付费方式：
0，月度授权
1，永久授权
若不传则默认为月度授权。
当付费方为厂商时，此参数无效

 * @method void setLicensePayMode(integer $LicensePayMode) 设置当付费方为租户时，可选择租户license付费方式：
0，月度授权
1，永久授权
若不传则默认为月度授权。
当付费方为厂商时，此参数无效

 * @method string getGroupId() 获取设备分组ID
 * @method void setGroupId(string $GroupId) 设置设备分组ID
 * @method string getGroupName() 获取设备分组名称，预留参数，需要分组时传入GroupId
 * @method void setGroupName(string $GroupName) 设置设备分组名称，预留参数，需要分组时传入GroupId
 * @method integer getFlowTrunc() 获取设备无流量包处理方式，0: 按量付费，1: 截断加速
 * @method void setFlowTrunc(integer $FlowTrunc) 设置设备无流量包处理方式，0: 按量付费，1: 截断加速
 * @method string getDeviceId() 获取激活后的设备ID
 * @method void setDeviceId(string $DeviceId) 设置激活后的设备ID
 */
class ActivateHardware extends AbstractModel
{
    /**
     * @var string 厂商名称
     */
    public $Vendor;

    /**
     * @var string 设备SN序列号
     */
    public $SN;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var string 设备密钥
     */
    public $DataKey;

    /**
     * @var integer 接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
     */
    public $AccessScope;

    /**
     * @var integer 当付费方为租户时，可选择租户license付费方式：
0，月度授权
1，永久授权
若不传则默认为月度授权。
当付费方为厂商时，此参数无效

     */
    public $LicensePayMode;

    /**
     * @var string 设备分组ID
     */
    public $GroupId;

    /**
     * @var string 设备分组名称，预留参数，需要分组时传入GroupId
     */
    public $GroupName;

    /**
     * @var integer 设备无流量包处理方式，0: 按量付费，1: 截断加速
     */
    public $FlowTrunc;

    /**
     * @var string 激活后的设备ID
     */
    public $DeviceId;

    /**
     * @param string $Vendor 厂商名称
     * @param string $SN 设备SN序列号
     * @param string $DeviceName 设备名称
     * @param string $Description 备注
     * @param string $DataKey 设备密钥
     * @param integer $AccessScope 接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
     * @param integer $LicensePayMode 当付费方为租户时，可选择租户license付费方式：
0，月度授权
1，永久授权
若不传则默认为月度授权。
当付费方为厂商时，此参数无效

     * @param string $GroupId 设备分组ID
     * @param string $GroupName 设备分组名称，预留参数，需要分组时传入GroupId
     * @param integer $FlowTrunc 设备无流量包处理方式，0: 按量付费，1: 截断加速
     * @param string $DeviceId 激活后的设备ID
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DataKey",$param) and $param["DataKey"] !== null) {
            $this->DataKey = $param["DataKey"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }

        if (array_key_exists("LicensePayMode",$param) and $param["LicensePayMode"] !== null) {
            $this->LicensePayMode = $param["LicensePayMode"];
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

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }
    }
}
