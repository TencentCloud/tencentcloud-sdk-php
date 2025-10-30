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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSpeciallyQuitWorkOrder请求参数结构体
 *
 * @method integer getIdcId() 获取机房id
 * @method void setIdcId(integer $IdcId) 设置机房id
 * @method string getDeviceType() 获取设备类型：otherDevice。此接口只支持其他设备
 * @method void setDeviceType(string $DeviceType) 设置设备类型：otherDevice。此接口只支持其他设备
 * @method string getHandoverMethod() 获取交接方式 1.物流上门收货 2.客户上门自提
 * @method void setHandoverMethod(string $HandoverMethod) 设置交接方式 1.物流上门收货 2.客户上门自提
 * @method LogisticsReceipt getLogisticsReceipt() 获取物流上门收货必传
 * @method void setLogisticsReceipt(LogisticsReceipt $LogisticsReceipt) 设置物流上门收货必传
 * @method CustomerReceipt getCustomerReceipt() 获取客户上门自提必传
 * @method void setCustomerReceipt(CustomerReceipt $CustomerReceipt) 设置客户上门自提必传
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method array getOtherDeviceList() 获取当设备类型为otherDevice，此参数必传
 * @method void setOtherDeviceList(array $OtherDeviceList) 设置当设备类型为otherDevice，此参数必传
 */
class CreateSpeciallyQuitWorkOrderRequest extends AbstractModel
{
    /**
     * @var integer 机房id
     */
    public $IdcId;

    /**
     * @var string 设备类型：otherDevice。此接口只支持其他设备
     */
    public $DeviceType;

    /**
     * @var string 交接方式 1.物流上门收货 2.客户上门自提
     */
    public $HandoverMethod;

    /**
     * @var LogisticsReceipt 物流上门收货必传
     */
    public $LogisticsReceipt;

    /**
     * @var CustomerReceipt 客户上门自提必传
     */
    public $CustomerReceipt;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var array 当设备类型为otherDevice，此参数必传
     */
    public $OtherDeviceList;

    /**
     * @param integer $IdcId 机房id
     * @param string $DeviceType 设备类型：otherDevice。此接口只支持其他设备
     * @param string $HandoverMethod 交接方式 1.物流上门收货 2.客户上门自提
     * @param LogisticsReceipt $LogisticsReceipt 物流上门收货必传
     * @param CustomerReceipt $CustomerReceipt 客户上门自提必传
     * @param string $Remark 备注信息
     * @param array $OtherDeviceList 当设备类型为otherDevice，此参数必传
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

        if (array_key_exists("HandoverMethod",$param) and $param["HandoverMethod"] !== null) {
            $this->HandoverMethod = $param["HandoverMethod"];
        }

        if (array_key_exists("LogisticsReceipt",$param) and $param["LogisticsReceipt"] !== null) {
            $this->LogisticsReceipt = new LogisticsReceipt();
            $this->LogisticsReceipt->deserialize($param["LogisticsReceipt"]);
        }

        if (array_key_exists("CustomerReceipt",$param) and $param["CustomerReceipt"] !== null) {
            $this->CustomerReceipt = new CustomerReceipt();
            $this->CustomerReceipt->deserialize($param["CustomerReceipt"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("OtherDeviceList",$param) and $param["OtherDeviceList"] !== null) {
            $this->OtherDeviceList = [];
            foreach ($param["OtherDeviceList"] as $key => $value){
                $obj = new OtherDevReceivingInfo();
                $obj->deserialize($value);
                array_push($this->OtherDeviceList, $obj);
            }
        }
    }
}
