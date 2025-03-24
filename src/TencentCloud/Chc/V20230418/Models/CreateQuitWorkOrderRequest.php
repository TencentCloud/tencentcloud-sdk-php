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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateQuitWorkOrder请求参数结构体
 *
 * @method integer getIdcId() 获取机房id
 * @method void setIdcId(integer $IdcId) 设置机房id
 * @method string getDeviceType() 获取设备类型，server, netDevice, otherDevice
 * @method void setDeviceType(string $DeviceType) 设置设备类型，server, netDevice, otherDevice
 * @method string getStuffOption() 获取下架选择 1.自行解决 2.由腾讯IDC负责 3.不涉及下架，如：其他设备退出
 * @method void setStuffOption(string $StuffOption) 设置下架选择 1.自行解决 2.由腾讯IDC负责 3.不涉及下架，如：其他设备退出
 * @method string getIsPowerOffConfirm() 获取关电确认 1.授权时关电 2.关电前需要确认
 * @method void setIsPowerOffConfirm(string $IsPowerOffConfirm) 设置关电确认 1.授权时关电 2.关电前需要确认
 * @method array getDeviceSnList() 获取设备sn列表
 * @method void setDeviceSnList(array $DeviceSnList) 设置设备sn列表
 * @method string getHandoverMethod() 获取交接方式 1.物流上门收货 2.客户上门自提
 * @method void setHandoverMethod(string $HandoverMethod) 设置交接方式 1.物流上门收货 2.客户上门自提
 * @method SelfOperation getSelfOperationInfo() 获取自行解决必填
 * @method void setSelfOperationInfo(SelfOperation $SelfOperationInfo) 设置自行解决必填
 * @method PowerOffConfirm getPowerOffConfirmInfo() 获取关电前需要确认时必填
 * @method void setPowerOffConfirmInfo(PowerOffConfirm $PowerOffConfirmInfo) 设置关电前需要确认时必填
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method LogisticsReceipt getLogisticsReceipt() 获取物流上门收货必传
 * @method void setLogisticsReceipt(LogisticsReceipt $LogisticsReceipt) 设置物流上门收货必传
 * @method CustomerReceipt getCustomerReceipt() 获取客户上门自提必传
 * @method void setCustomerReceipt(CustomerReceipt $CustomerReceipt) 设置客户上门自提必传
 */
class CreateQuitWorkOrderRequest extends AbstractModel
{
    /**
     * @var integer 机房id
     */
    public $IdcId;

    /**
     * @var string 设备类型，server, netDevice, otherDevice
     */
    public $DeviceType;

    /**
     * @var string 下架选择 1.自行解决 2.由腾讯IDC负责 3.不涉及下架，如：其他设备退出
     */
    public $StuffOption;

    /**
     * @var string 关电确认 1.授权时关电 2.关电前需要确认
     */
    public $IsPowerOffConfirm;

    /**
     * @var array 设备sn列表
     */
    public $DeviceSnList;

    /**
     * @var string 交接方式 1.物流上门收货 2.客户上门自提
     */
    public $HandoverMethod;

    /**
     * @var SelfOperation 自行解决必填
     */
    public $SelfOperationInfo;

    /**
     * @var PowerOffConfirm 关电前需要确认时必填
     */
    public $PowerOffConfirmInfo;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var LogisticsReceipt 物流上门收货必传
     */
    public $LogisticsReceipt;

    /**
     * @var CustomerReceipt 客户上门自提必传
     */
    public $CustomerReceipt;

    /**
     * @param integer $IdcId 机房id
     * @param string $DeviceType 设备类型，server, netDevice, otherDevice
     * @param string $StuffOption 下架选择 1.自行解决 2.由腾讯IDC负责 3.不涉及下架，如：其他设备退出
     * @param string $IsPowerOffConfirm 关电确认 1.授权时关电 2.关电前需要确认
     * @param array $DeviceSnList 设备sn列表
     * @param string $HandoverMethod 交接方式 1.物流上门收货 2.客户上门自提
     * @param SelfOperation $SelfOperationInfo 自行解决必填
     * @param PowerOffConfirm $PowerOffConfirmInfo 关电前需要确认时必填
     * @param string $Remark 备注
     * @param LogisticsReceipt $LogisticsReceipt 物流上门收货必传
     * @param CustomerReceipt $CustomerReceipt 客户上门自提必传
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
        if (array_key_exists("IdcId",$param) and $param["IdcId"] !== null) {
            $this->IdcId = $param["IdcId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("StuffOption",$param) and $param["StuffOption"] !== null) {
            $this->StuffOption = $param["StuffOption"];
        }

        if (array_key_exists("IsPowerOffConfirm",$param) and $param["IsPowerOffConfirm"] !== null) {
            $this->IsPowerOffConfirm = $param["IsPowerOffConfirm"];
        }

        if (array_key_exists("DeviceSnList",$param) and $param["DeviceSnList"] !== null) {
            $this->DeviceSnList = $param["DeviceSnList"];
        }

        if (array_key_exists("HandoverMethod",$param) and $param["HandoverMethod"] !== null) {
            $this->HandoverMethod = $param["HandoverMethod"];
        }

        if (array_key_exists("SelfOperationInfo",$param) and $param["SelfOperationInfo"] !== null) {
            $this->SelfOperationInfo = new SelfOperation();
            $this->SelfOperationInfo->deserialize($param["SelfOperationInfo"]);
        }

        if (array_key_exists("PowerOffConfirmInfo",$param) and $param["PowerOffConfirmInfo"] !== null) {
            $this->PowerOffConfirmInfo = new PowerOffConfirm();
            $this->PowerOffConfirmInfo->deserialize($param["PowerOffConfirmInfo"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("LogisticsReceipt",$param) and $param["LogisticsReceipt"] !== null) {
            $this->LogisticsReceipt = new LogisticsReceipt();
            $this->LogisticsReceipt->deserialize($param["LogisticsReceipt"]);
        }

        if (array_key_exists("CustomerReceipt",$param) and $param["CustomerReceipt"] !== null) {
            $this->CustomerReceipt = new CustomerReceipt();
            $this->CustomerReceipt->deserialize($param["CustomerReceipt"]);
        }
    }
}
