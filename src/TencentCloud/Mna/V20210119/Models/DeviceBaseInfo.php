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
 * @method string getDeviceId() 获取<p>设备唯一ID</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备唯一ID</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getCreateTime() 获取<p>设备创建的时间，单位：ms</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>设备创建的时间，单位：ms</p>
 * @method string getLastTime() 获取<p>设备最后在线时间，单位：ms</p>
 * @method void setLastTime(string $LastTime) 设置<p>设备最后在线时间，单位：ms</p>
 * @method string getRemark() 获取<p>设备的备注</p>
 * @method void setRemark(string $Remark) 设置<p>设备的备注</p>
 * @method integer getAccessScope() 获取<p>接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）</p>
 * @method void setAccessScope(integer $AccessScope) 设置<p>接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）</p>
 * @method integer getLicensePayMode() 获取<p>license授权有效期 0：月度授权 1：永久授权</p>
 * @method void setLicensePayMode(integer $LicensePayMode) 设置<p>license授权有效期 0：月度授权 1：永久授权</p>
 * @method integer getPayer() 获取<p>付费方 0：厂商付费 1：客户付费</p>
 * @method void setPayer(integer $Payer) 设置<p>付费方 0：厂商付费 1：客户付费</p>
 * @method string getGroupId() 获取<p>设备分组ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>设备分组ID</p>
 * @method string getGroupName() 获取<p>设备分组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>设备分组名称</p>
 * @method integer getFlowTrunc() 获取<p>设备无流量包处理方式，0: 按量付费，1: 截断加速</p>
 * @method void setFlowTrunc(integer $FlowTrunc) 设置<p>设备无流量包处理方式，0: 按量付费，1: 截断加速</p>
 * @method string getSn() 获取<p>设备sn</p>
 * @method void setSn(string $Sn) 设置<p>设备sn</p>
 * @method string getVendor() 获取<p>厂商</p>
 * @method void setVendor(string $Vendor) 设置<p>厂商</p>
 * @method array getAllowedRegions() 获取<p>可接入地域列表。</p>
 * @method void setAllowedRegions(array $AllowedRegions) 设置<p>可接入地域列表。</p>
 */
class DeviceBaseInfo extends AbstractModel
{
    /**
     * @var string <p>设备唯一ID</p>
     */
    public $DeviceId;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>设备创建的时间，单位：ms</p>
     */
    public $CreateTime;

    /**
     * @var string <p>设备最后在线时间，单位：ms</p>
     */
    public $LastTime;

    /**
     * @var string <p>设备的备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）</p>
     */
    public $AccessScope;

    /**
     * @var integer <p>license授权有效期 0：月度授权 1：永久授权</p>
     */
    public $LicensePayMode;

    /**
     * @var integer <p>付费方 0：厂商付费 1：客户付费</p>
     */
    public $Payer;

    /**
     * @var string <p>设备分组ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>设备分组名称</p>
     */
    public $GroupName;

    /**
     * @var integer <p>设备无流量包处理方式，0: 按量付费，1: 截断加速</p>
     */
    public $FlowTrunc;

    /**
     * @var string <p>设备sn</p>
     */
    public $Sn;

    /**
     * @var string <p>厂商</p>
     */
    public $Vendor;

    /**
     * @var array <p>可接入地域列表。</p>
     */
    public $AllowedRegions;

    /**
     * @param string $DeviceId <p>设备唯一ID</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $CreateTime <p>设备创建的时间，单位：ms</p>
     * @param string $LastTime <p>设备最后在线时间，单位：ms</p>
     * @param string $Remark <p>设备的备注</p>
     * @param integer $AccessScope <p>接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）</p>
     * @param integer $LicensePayMode <p>license授权有效期 0：月度授权 1：永久授权</p>
     * @param integer $Payer <p>付费方 0：厂商付费 1：客户付费</p>
     * @param string $GroupId <p>设备分组ID</p>
     * @param string $GroupName <p>设备分组名称</p>
     * @param integer $FlowTrunc <p>设备无流量包处理方式，0: 按量付费，1: 截断加速</p>
     * @param string $Sn <p>设备sn</p>
     * @param string $Vendor <p>厂商</p>
     * @param array $AllowedRegions <p>可接入地域列表。</p>
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

        if (array_key_exists("AllowedRegions",$param) and $param["AllowedRegions"] !== null) {
            $this->AllowedRegions = $param["AllowedRegions"];
        }
    }
}
