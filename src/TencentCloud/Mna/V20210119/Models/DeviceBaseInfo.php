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
 * 设备的基本信息
 *
 * @method string getDeviceId() 获取设备唯一ID
 * @method void setDeviceId(string $DeviceId) 设置设备唯一ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getCreateTime() 获取设备创建的时间，单位：ms
 * @method void setCreateTime(string $CreateTime) 设置设备创建的时间，单位：ms
 * @method string getLastTime() 获取设备最后在线时间，单位：ms
 * @method void setLastTime(string $LastTime) 设置设备最后在线时间，单位：ms
 * @method string getRemark() 获取设备的备注
 * @method void setRemark(string $Remark) 设置设备的备注
 * @method integer getAccessScope() 获取接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
 * @method void setAccessScope(integer $AccessScope) 设置接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
 * @method integer getLicensePayMode() 获取license授权有效期 0：月度授权 1：永久授权
 * @method void setLicensePayMode(integer $LicensePayMode) 设置license授权有效期 0：月度授权 1：永久授权
 * @method integer getPayer() 获取付费方 0：厂商付费 1：客户付费
 * @method void setPayer(integer $Payer) 设置付费方 0：厂商付费 1：客户付费
 * @method string getGroupId() 获取设备分组ID
 * @method void setGroupId(string $GroupId) 设置设备分组ID
 * @method string getGroupName() 获取设备分组名称
 * @method void setGroupName(string $GroupName) 设置设备分组名称
 * @method integer getFlowTrunc() 获取设备无流量包处理方式，0: 按量付费，1: 截断加速
 * @method void setFlowTrunc(integer $FlowTrunc) 设置设备无流量包处理方式，0: 按量付费，1: 截断加速
 * @method string getSn() 获取设备sn
 * @method void setSn(string $Sn) 设置设备sn
 * @method string getVendor() 获取厂商
 * @method void setVendor(string $Vendor) 设置厂商
 */
class DeviceBaseInfo extends AbstractModel
{
    /**
     * @var string 设备唯一ID
     */
    public $DeviceId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备创建的时间，单位：ms
     */
    public $CreateTime;

    /**
     * @var string 设备最后在线时间，单位：ms
     */
    public $LastTime;

    /**
     * @var string 设备的备注
     */
    public $Remark;

    /**
     * @var integer 接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
     */
    public $AccessScope;

    /**
     * @var integer license授权有效期 0：月度授权 1：永久授权
     */
    public $LicensePayMode;

    /**
     * @var integer 付费方 0：厂商付费 1：客户付费
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
     * @var string 设备sn
     */
    public $Sn;

    /**
     * @var string 厂商
     */
    public $Vendor;

    /**
     * @param string $DeviceId 设备唯一ID
     * @param string $DeviceName 设备名称
     * @param string $CreateTime 设备创建的时间，单位：ms
     * @param string $LastTime 设备最后在线时间，单位：ms
     * @param string $Remark 设备的备注
     * @param integer $AccessScope 接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
     * @param integer $LicensePayMode license授权有效期 0：月度授权 1：永久授权
     * @param integer $Payer 付费方 0：厂商付费 1：客户付费
     * @param string $GroupId 设备分组ID
     * @param string $GroupName 设备分组名称
     * @param integer $FlowTrunc 设备无流量包处理方式，0: 按量付费，1: 截断加速
     * @param string $Sn 设备sn
     * @param string $Vendor 厂商
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
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

        if (array_key_exists("Sn",$param) and $param["Sn"] !== null) {
            $this->Sn = $param["Sn"];
        }

        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }
    }
}
