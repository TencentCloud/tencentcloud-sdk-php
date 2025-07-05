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
 * CreateReceivingWorkOrder请求参数结构体
 *
 * @method integer getIdcId() 获取机房id
 * @method void setIdcId(integer $IdcId) 设置机房id
 * @method string getDeviceType() 获取设备类型，server, netDevice, wire, otherDevice
 * @method void setDeviceType(string $DeviceType) 设置设备类型，server, netDevice, wire, otherDevice
 * @method string getEntryTime() 获取进入时间
 * @method void setEntryTime(string $EntryTime) 设置进入时间
 * @method string getReceivingOperation() 获取1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
 * @method void setReceivingOperation(string $ReceivingOperation) 设置1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
 * @method boolean getIsExpressDelivery() 获取是否快递寄件
 * @method void setIsExpressDelivery(boolean $IsExpressDelivery) 设置是否快递寄件
 * @method ExpressDelivery getExpressInfo() 获取快递寄件信息,快递寄件必填
 * @method void setExpressInfo(ExpressDelivery $ExpressInfo) 设置快递寄件信息,快递寄件必填
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getServerDeviceList() 获取服务器收货列表。最大值：200
 * @method void setServerDeviceList(array $ServerDeviceList) 设置服务器收货列表。最大值：200
 * @method array getNetDeviceList() 获取网络设备收货列表
 * @method void setNetDeviceList(array $NetDeviceList) 设置网络设备收货列表
 * @method array getWireDeviceList() 获取线材收货列表
 * @method void setWireDeviceList(array $WireDeviceList) 设置线材收货列表
 * @method array getOtherDeviceList() 获取其他设备收货列表
 * @method void setOtherDeviceList(array $OtherDeviceList) 设置其他设备收货列表
 * @method boolean getWithRackOn() 获取收货后自动上架。此参数为true时，后台会自动提设备上架单
 * @method void setWithRackOn(boolean $WithRackOn) 设置收货后自动上架。此参数为true时，后台会自动提设备上架单
 * @method array getDeviceRackOnList() 获取设备上架信息。当WithRackOn为true此参数必传，且sn需要和收货的列表一致
 * @method void setDeviceRackOnList(array $DeviceRackOnList) 设置设备上架信息。当WithRackOn为true此参数必传，且sn需要和收货的列表一致
 * @method string getStuffOption() 获取上架人员 1.自行解决 2.由腾讯IDC负责
 * @method void setStuffOption(string $StuffOption) 设置上架人员 1.自行解决 2.由腾讯IDC负责
 * @method SelfOperation getSelfOperationInfo() 获取自行解决信息。当StuffOption为1时，此参数必填
 * @method void setSelfOperationInfo(SelfOperation $SelfOperationInfo) 设置自行解决信息。当StuffOption为1时，此参数必填
 * @method boolean getWithPowerOn() 获取上架后自动开电。此参数为true时，后台会自动提设备开电单
 * @method void setWithPowerOn(boolean $WithPowerOn) 设置上架后自动开电。此参数为true时，后台会自动提设备开电单
 */
class CreateReceivingWorkOrderRequest extends AbstractModel
{
    /**
     * @var integer 机房id
     */
    public $IdcId;

    /**
     * @var string 设备类型，server, netDevice, wire, otherDevice
     */
    public $DeviceType;

    /**
     * @var string 进入时间
     */
    public $EntryTime;

    /**
     * @var string 1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
     */
    public $ReceivingOperation;

    /**
     * @var boolean 是否快递寄件
     */
    public $IsExpressDelivery;

    /**
     * @var ExpressDelivery 快递寄件信息,快递寄件必填
     */
    public $ExpressInfo;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var array 服务器收货列表。最大值：200
     */
    public $ServerDeviceList;

    /**
     * @var array 网络设备收货列表
     */
    public $NetDeviceList;

    /**
     * @var array 线材收货列表
     */
    public $WireDeviceList;

    /**
     * @var array 其他设备收货列表
     */
    public $OtherDeviceList;

    /**
     * @var boolean 收货后自动上架。此参数为true时，后台会自动提设备上架单
     */
    public $WithRackOn;

    /**
     * @var array 设备上架信息。当WithRackOn为true此参数必传，且sn需要和收货的列表一致
     */
    public $DeviceRackOnList;

    /**
     * @var string 上架人员 1.自行解决 2.由腾讯IDC负责
     */
    public $StuffOption;

    /**
     * @var SelfOperation 自行解决信息。当StuffOption为1时，此参数必填
     */
    public $SelfOperationInfo;

    /**
     * @var boolean 上架后自动开电。此参数为true时，后台会自动提设备开电单
     */
    public $WithPowerOn;

    /**
     * @param integer $IdcId 机房id
     * @param string $DeviceType 设备类型，server, netDevice, wire, otherDevice
     * @param string $EntryTime 进入时间
     * @param string $ReceivingOperation 1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
     * @param boolean $IsExpressDelivery 是否快递寄件
     * @param ExpressDelivery $ExpressInfo 快递寄件信息,快递寄件必填
     * @param string $Remark 备注
     * @param array $ServerDeviceList 服务器收货列表。最大值：200
     * @param array $NetDeviceList 网络设备收货列表
     * @param array $WireDeviceList 线材收货列表
     * @param array $OtherDeviceList 其他设备收货列表
     * @param boolean $WithRackOn 收货后自动上架。此参数为true时，后台会自动提设备上架单
     * @param array $DeviceRackOnList 设备上架信息。当WithRackOn为true此参数必传，且sn需要和收货的列表一致
     * @param string $StuffOption 上架人员 1.自行解决 2.由腾讯IDC负责
     * @param SelfOperation $SelfOperationInfo 自行解决信息。当StuffOption为1时，此参数必填
     * @param boolean $WithPowerOn 上架后自动开电。此参数为true时，后台会自动提设备开电单
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

        if (array_key_exists("EntryTime",$param) and $param["EntryTime"] !== null) {
            $this->EntryTime = $param["EntryTime"];
        }

        if (array_key_exists("ReceivingOperation",$param) and $param["ReceivingOperation"] !== null) {
            $this->ReceivingOperation = $param["ReceivingOperation"];
        }

        if (array_key_exists("IsExpressDelivery",$param) and $param["IsExpressDelivery"] !== null) {
            $this->IsExpressDelivery = $param["IsExpressDelivery"];
        }

        if (array_key_exists("ExpressInfo",$param) and $param["ExpressInfo"] !== null) {
            $this->ExpressInfo = new ExpressDelivery();
            $this->ExpressInfo->deserialize($param["ExpressInfo"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ServerDeviceList",$param) and $param["ServerDeviceList"] !== null) {
            $this->ServerDeviceList = [];
            foreach ($param["ServerDeviceList"] as $key => $value){
                $obj = new ServerReceivingInfo();
                $obj->deserialize($value);
                array_push($this->ServerDeviceList, $obj);
            }
        }

        if (array_key_exists("NetDeviceList",$param) and $param["NetDeviceList"] !== null) {
            $this->NetDeviceList = [];
            foreach ($param["NetDeviceList"] as $key => $value){
                $obj = new NetReceivingInfo();
                $obj->deserialize($value);
                array_push($this->NetDeviceList, $obj);
            }
        }

        if (array_key_exists("WireDeviceList",$param) and $param["WireDeviceList"] !== null) {
            $this->WireDeviceList = [];
            foreach ($param["WireDeviceList"] as $key => $value){
                $obj = new WireReceivingInfo();
                $obj->deserialize($value);
                array_push($this->WireDeviceList, $obj);
            }
        }

        if (array_key_exists("OtherDeviceList",$param) and $param["OtherDeviceList"] !== null) {
            $this->OtherDeviceList = [];
            foreach ($param["OtherDeviceList"] as $key => $value){
                $obj = new OtherDevReceivingInfo();
                $obj->deserialize($value);
                array_push($this->OtherDeviceList, $obj);
            }
        }

        if (array_key_exists("WithRackOn",$param) and $param["WithRackOn"] !== null) {
            $this->WithRackOn = $param["WithRackOn"];
        }

        if (array_key_exists("DeviceRackOnList",$param) and $param["DeviceRackOnList"] !== null) {
            $this->DeviceRackOnList = [];
            foreach ($param["DeviceRackOnList"] as $key => $value){
                $obj = new DeviceRackOn();
                $obj->deserialize($value);
                array_push($this->DeviceRackOnList, $obj);
            }
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
    }
}
