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
 * AddDevice请求参数结构体
 *
 * @method string getDeviceName() 获取新建设备的名称
 * @method void setDeviceName(string $DeviceName) 设置新建设备的名称
 * @method string getRemark() 获取新建设备的备注
 * @method void setRemark(string $Remark) 设置新建设备的备注
 * @method string getDataKey() 获取新建设备的base64密钥字符串，非必选，如果不填写则由系统自动生成
 * @method void setDataKey(string $DataKey) 设置新建设备的base64密钥字符串，非必选，如果不填写则由系统自动生成
 * @method boolean getEncrypted() 获取是否设置预置密钥。
true：设置预置密钥；
false：不设置预置密钥。
 * @method void setEncrypted(boolean $Encrypted) 设置是否设置预置密钥。
true：设置预置密钥；
false：不设置预置密钥。
 * @method integer getAccessScope() 获取接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。
具体含义：
公有云网关：即该设备只能接入公有云网关（就近接入）
自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入）
公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
 * @method void setAccessScope(integer $AccessScope) 设置接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。
具体含义：
公有云网关：即该设备只能接入公有云网关（就近接入）
自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入）
公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
 * @method integer getLicensePayMode() 获取license付费方式： 
0，月度授权 
1，永久授权 
若不传则默认为月度授权，永久授权设备需要调用OrderPerLicense接口支付授权费，否则设备无法使用
 * @method void setLicensePayMode(integer $LicensePayMode) 设置license付费方式： 
0，月度授权 
1，永久授权 
若不传则默认为月度授权，永久授权设备需要调用OrderPerLicense接口支付授权费，否则设备无法使用
 * @method string getGroupName() 获取设备分组名称，非必选，预留参数，需要分组时传入GroupId
 * @method void setGroupName(string $GroupName) 设置设备分组名称，非必选，预留参数，需要分组时传入GroupId
 * @method string getGroupId() 获取设备分组ID，非必选，如果不填写则默认设备无分组
 * @method void setGroupId(string $GroupId) 设置设备分组ID，非必选，如果不填写则默认设备无分组
 * @method integer getFlowTrunc() 获取设备无流量包处理方式，0: 按量付费，1: 截断加速
 * @method void setFlowTrunc(integer $FlowTrunc) 设置设备无流量包处理方式，0: 按量付费，1: 截断加速
 */
class AddDeviceRequest extends AbstractModel
{
    /**
     * @var string 新建设备的名称
     */
    public $DeviceName;

    /**
     * @var string 新建设备的备注
     */
    public $Remark;

    /**
     * @var string 新建设备的base64密钥字符串，非必选，如果不填写则由系统自动生成
     */
    public $DataKey;

    /**
     * @var boolean 是否设置预置密钥。
true：设置预置密钥；
false：不设置预置密钥。
     */
    public $Encrypted;

    /**
     * @var integer 接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。
具体含义：
公有云网关：即该设备只能接入公有云网关（就近接入）
自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入）
公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
     */
    public $AccessScope;

    /**
     * @var integer license付费方式： 
0，月度授权 
1，永久授权 
若不传则默认为月度授权，永久授权设备需要调用OrderPerLicense接口支付授权费，否则设备无法使用
     */
    public $LicensePayMode;

    /**
     * @var string 设备分组名称，非必选，预留参数，需要分组时传入GroupId
     */
    public $GroupName;

    /**
     * @var string 设备分组ID，非必选，如果不填写则默认设备无分组
     */
    public $GroupId;

    /**
     * @var integer 设备无流量包处理方式，0: 按量付费，1: 截断加速
     */
    public $FlowTrunc;

    /**
     * @param string $DeviceName 新建设备的名称
     * @param string $Remark 新建设备的备注
     * @param string $DataKey 新建设备的base64密钥字符串，非必选，如果不填写则由系统自动生成
     * @param boolean $Encrypted 是否设置预置密钥。
true：设置预置密钥；
false：不设置预置密钥。
     * @param integer $AccessScope 接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。
具体含义：
公有云网关：即该设备只能接入公有云网关（就近接入）
自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入）
公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
     * @param integer $LicensePayMode license付费方式： 
0，月度授权 
1，永久授权 
若不传则默认为月度授权，永久授权设备需要调用OrderPerLicense接口支付授权费，否则设备无法使用
     * @param string $GroupName 设备分组名称，非必选，预留参数，需要分组时传入GroupId
     * @param string $GroupId 设备分组ID，非必选，如果不填写则默认设备无分组
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DataKey",$param) and $param["DataKey"] !== null) {
            $this->DataKey = $param["DataKey"];
        }

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }

        if (array_key_exists("LicensePayMode",$param) and $param["LicensePayMode"] !== null) {
            $this->LicensePayMode = $param["LicensePayMode"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("FlowTrunc",$param) and $param["FlowTrunc"] !== null) {
            $this->FlowTrunc = $param["FlowTrunc"];
        }
    }
}
