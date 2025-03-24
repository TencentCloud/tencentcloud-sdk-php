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
 * 设备类工单的基础历史入参信息
 *
 * @method integer getIdcId() 获取机房id
 * @method void setIdcId(integer $IdcId) 设置机房id
 * @method string getIdcName() 获取机房名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdcName(string $IdcName) 设置机房名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceType() 获取设备类型
 * @method void setDeviceType(string $DeviceType) 设置设备类型
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getReceivingOperation() 获取1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
 * @method void setReceivingOperation(string $ReceivingOperation) 设置1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
 * @method string getEntryTime() 获取设备收货-进入时间
 * @method void setEntryTime(string $EntryTime) 设置设备收货-进入时间
 * @method boolean getIsExpressDelivery() 获取设备收货-是否快递寄件
 * @method void setIsExpressDelivery(boolean $IsExpressDelivery) 设置设备收货-是否快递寄件
 * @method ExpressDelivery getExpressInfo() 获取设备收货-快递寄件信息
 * @method void setExpressInfo(ExpressDelivery $ExpressInfo) 设置设备收货-快递寄件信息
 * @method string getStuffOption() 获取上/下架人员 1.自行解决 2.由腾讯IDC负责
 * @method void setStuffOption(string $StuffOption) 设置上/下架人员 1.自行解决 2.由腾讯IDC负责
 * @method SelfOperation getSelfOperationInfo() 获取上/下架自行解决信息
 * @method void setSelfOperationInfo(SelfOperation $SelfOperationInfo) 设置上/下架自行解决信息
 * @method boolean getWithPowerOn() 获取上架后开电
 * @method void setWithPowerOn(boolean $WithPowerOn) 设置上架后开电
 * @method string getIsPowerOffConfirm() 获取关电确认 1.授权时关电 2.关电前需要确认
 * @method void setIsPowerOffConfirm(string $IsPowerOffConfirm) 设置关电确认 1.授权时关电 2.关电前需要确认
 * @method PowerOffConfirm getPowerOffConfirmInfo() 获取关电前需要确认信息
 * @method void setPowerOffConfirmInfo(PowerOffConfirm $PowerOffConfirmInfo) 设置关电前需要确认信息
 * @method string getHandoverMethod() 获取退出交接方式 1.物流上门收货 2.客户上门自提
 * @method void setHandoverMethod(string $HandoverMethod) 设置退出交接方式 1.物流上门收货 2.客户上门自提
 * @method CustomerReceipt getCustomerReceipt() 获取客户上门自提信息
 * @method void setCustomerReceipt(CustomerReceipt $CustomerReceipt) 设置客户上门自提信息
 * @method LogisticsReceipt getLogisticsReceipt() 获取物流上门收货信息
 * @method void setLogisticsReceipt(LogisticsReceipt $LogisticsReceipt) 设置物流上门收货信息
 */
class DeviceOrderBaseInfo extends AbstractModel
{
    /**
     * @var integer 机房id
     */
    public $IdcId;

    /**
     * @var string 机房名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdcName;

    /**
     * @var string 设备类型
     */
    public $DeviceType;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
     */
    public $ReceivingOperation;

    /**
     * @var string 设备收货-进入时间
     */
    public $EntryTime;

    /**
     * @var boolean 设备收货-是否快递寄件
     */
    public $IsExpressDelivery;

    /**
     * @var ExpressDelivery 设备收货-快递寄件信息
     */
    public $ExpressInfo;

    /**
     * @var string 上/下架人员 1.自行解决 2.由腾讯IDC负责
     */
    public $StuffOption;

    /**
     * @var SelfOperation 上/下架自行解决信息
     */
    public $SelfOperationInfo;

    /**
     * @var boolean 上架后开电
     */
    public $WithPowerOn;

    /**
     * @var string 关电确认 1.授权时关电 2.关电前需要确认
     */
    public $IsPowerOffConfirm;

    /**
     * @var PowerOffConfirm 关电前需要确认信息
     */
    public $PowerOffConfirmInfo;

    /**
     * @var string 退出交接方式 1.物流上门收货 2.客户上门自提
     */
    public $HandoverMethod;

    /**
     * @var CustomerReceipt 客户上门自提信息
     */
    public $CustomerReceipt;

    /**
     * @var LogisticsReceipt 物流上门收货信息
     */
    public $LogisticsReceipt;

    /**
     * @param integer $IdcId 机房id
     * @param string $IdcName 机房名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceType 设备类型
     * @param string $Remark 备注
     * @param string $ReceivingOperation 1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
     * @param string $EntryTime 设备收货-进入时间
     * @param boolean $IsExpressDelivery 设备收货-是否快递寄件
     * @param ExpressDelivery $ExpressInfo 设备收货-快递寄件信息
     * @param string $StuffOption 上/下架人员 1.自行解决 2.由腾讯IDC负责
     * @param SelfOperation $SelfOperationInfo 上/下架自行解决信息
     * @param boolean $WithPowerOn 上架后开电
     * @param string $IsPowerOffConfirm 关电确认 1.授权时关电 2.关电前需要确认
     * @param PowerOffConfirm $PowerOffConfirmInfo 关电前需要确认信息
     * @param string $HandoverMethod 退出交接方式 1.物流上门收货 2.客户上门自提
     * @param CustomerReceipt $CustomerReceipt 客户上门自提信息
     * @param LogisticsReceipt $LogisticsReceipt 物流上门收货信息
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

        if (array_key_exists("IdcName",$param) and $param["IdcName"] !== null) {
            $this->IdcName = $param["IdcName"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ReceivingOperation",$param) and $param["ReceivingOperation"] !== null) {
            $this->ReceivingOperation = $param["ReceivingOperation"];
        }

        if (array_key_exists("EntryTime",$param) and $param["EntryTime"] !== null) {
            $this->EntryTime = $param["EntryTime"];
        }

        if (array_key_exists("IsExpressDelivery",$param) and $param["IsExpressDelivery"] !== null) {
            $this->IsExpressDelivery = $param["IsExpressDelivery"];
        }

        if (array_key_exists("ExpressInfo",$param) and $param["ExpressInfo"] !== null) {
            $this->ExpressInfo = new ExpressDelivery();
            $this->ExpressInfo->deserialize($param["ExpressInfo"]);
        }

        if (array_key_exists("StuffOption",$param) and $param["StuffOption"] !== null) {
            $this->StuffOption = $param["StuffOption"];
        }

        if (array_key_exists("SelfOperationInfo",$param) and $param["SelfOperationInfo"] !== null) {
            $this->SelfOperationInfo = new SelfOperation();
            $this->SelfOperationInfo->deserialize($param["SelfOperationInfo"]);
        }

        if (array_key_exists("WithPowerOn",$param) and $param["WithPowerOn"] !== null) {
            $this->WithPowerOn = $param["WithPowerOn"];
        }

        if (array_key_exists("IsPowerOffConfirm",$param) and $param["IsPowerOffConfirm"] !== null) {
            $this->IsPowerOffConfirm = $param["IsPowerOffConfirm"];
        }

        if (array_key_exists("PowerOffConfirmInfo",$param) and $param["PowerOffConfirmInfo"] !== null) {
            $this->PowerOffConfirmInfo = new PowerOffConfirm();
            $this->PowerOffConfirmInfo->deserialize($param["PowerOffConfirmInfo"]);
        }

        if (array_key_exists("HandoverMethod",$param) and $param["HandoverMethod"] !== null) {
            $this->HandoverMethod = $param["HandoverMethod"];
        }

        if (array_key_exists("CustomerReceipt",$param) and $param["CustomerReceipt"] !== null) {
            $this->CustomerReceipt = new CustomerReceipt();
            $this->CustomerReceipt->deserialize($param["CustomerReceipt"]);
        }

        if (array_key_exists("LogisticsReceipt",$param) and $param["LogisticsReceipt"] !== null) {
            $this->LogisticsReceipt = new LogisticsReceipt();
            $this->LogisticsReceipt->deserialize($param["LogisticsReceipt"]);
        }
    }
}
