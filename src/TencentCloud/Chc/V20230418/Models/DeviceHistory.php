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
 * 工单的设备信息
 *
 * @method string getSn() 获取设备sn
 * @method void setSn(string $Sn) 设置设备sn
 * @method string getDeviceType() 获取设备类型
 * @method void setDeviceType(string $DeviceType) 设置设备类型
 * @method string getRackName() 获取机架名
 * @method void setRackName(string $RackName) 设置机架名
 * @method integer getPositionCode() 获取机位号
 * @method void setPositionCode(integer $PositionCode) 设置机位号
 * @method integer getIdcId() 获取机房id
 * @method void setIdcId(integer $IdcId) 设置机房id
 * @method string getIdcName() 获取机房名称
 * @method void setIdcName(string $IdcName) 设置机房名称
 * @method integer getIdcUnitId() 获取机房管理单元id
 * @method void setIdcUnitId(integer $IdcUnitId) 设置机房管理单元id
 * @method string getIdcUnitName() 获取机房管理单元名称
 * @method void setIdcUnitName(string $IdcUnitName) 设置机房管理单元名称
 * @method string getAssetId() 获取固资号
 * @method void setAssetId(string $AssetId) 设置固资号
 * @method string getModelVersion() 获取设备型号-版本，只有收货单详情返回
 * @method void setModelVersion(string $ModelVersion) 设置设备型号-版本，只有收货单详情返回
 * @method string getDeviceHeight() 获取设备高度，只有收货单详情返回
 * @method void setDeviceHeight(string $DeviceHeight) 设置设备高度，只有收货单详情返回
 * @method string getNeed10GbSlot() 获取需要万兆机位，只有收货单详情返回
 * @method void setNeed10GbSlot(string $Need10GbSlot) 设置需要万兆机位，只有收货单详情返回
 * @method string getNeedDCPower() 获取需要直流电，只有收货单详情返回
 * @method void setNeedDCPower(string $NeedDCPower) 设置需要直流电，只有收货单详情返回
 * @method string getNeedExtranet() 获取需要外网，只有收货单详情返回
 * @method void setNeedExtranet(string $NeedExtranet) 设置需要外网，只有收货单详情返回
 * @method string getNeedVirtualization() 获取需要虚拟化，只有收货单详情返回
 * @method void setNeedVirtualization(string $NeedVirtualization) 设置需要虚拟化，只有收货单详情返回
 * @method string getManufacturer() 获取厂商,只有收货单详情返回
 * @method void setManufacturer(string $Manufacturer) 设置厂商,只有收货单详情返回
 * @method string getHardwareMemo() 获取硬件备注
 * @method void setHardwareMemo(string $HardwareMemo) 设置硬件备注
 * @method string getDstRackName() 获取目标机架
 * @method void setDstRackName(string $DstRackName) 设置目标机架
 * @method string getDstPositionCode() 获取目标机位
 * @method void setDstPositionCode(string $DstPositionCode) 设置目标机位
 * @method string getDstIp() 获取目标ip
 * @method void setDstIp(string $DstIp) 设置目标ip
 * @method string getTypeName() 获取设备子类型, 其他设备/线材用
 * @method void setTypeName(string $TypeName) 设置设备子类型, 其他设备/线材用
 * @method integer getQuantity() 获取线材-数量，只有收货单详情返回
 * @method void setQuantity(integer $Quantity) 设置线材-数量，只有收货单详情返回
 * @method string getUnit() 获取计量单位，，只有收货单详情返回，'箱', '卷', '套'
 * @method void setUnit(string $Unit) 设置计量单位，，只有收货单详情返回，'箱', '卷', '套'
 * @method string getReceiptNumber() 获取线材-收货凭证号，只有收货单详情返回
 * @method void setReceiptNumber(string $ReceiptNumber) 设置线材-收货凭证号，只有收货单详情返回
 */
class DeviceHistory extends AbstractModel
{
    /**
     * @var string 设备sn
     */
    public $Sn;

    /**
     * @var string 设备类型
     */
    public $DeviceType;

    /**
     * @var string 机架名
     */
    public $RackName;

    /**
     * @var integer 机位号
     */
    public $PositionCode;

    /**
     * @var integer 机房id
     */
    public $IdcId;

    /**
     * @var string 机房名称
     */
    public $IdcName;

    /**
     * @var integer 机房管理单元id
     */
    public $IdcUnitId;

    /**
     * @var string 机房管理单元名称
     */
    public $IdcUnitName;

    /**
     * @var string 固资号
     */
    public $AssetId;

    /**
     * @var string 设备型号-版本，只有收货单详情返回
     */
    public $ModelVersion;

    /**
     * @var string 设备高度，只有收货单详情返回
     */
    public $DeviceHeight;

    /**
     * @var string 需要万兆机位，只有收货单详情返回
     */
    public $Need10GbSlot;

    /**
     * @var string 需要直流电，只有收货单详情返回
     */
    public $NeedDCPower;

    /**
     * @var string 需要外网，只有收货单详情返回
     */
    public $NeedExtranet;

    /**
     * @var string 需要虚拟化，只有收货单详情返回
     */
    public $NeedVirtualization;

    /**
     * @var string 厂商,只有收货单详情返回
     */
    public $Manufacturer;

    /**
     * @var string 硬件备注
     */
    public $HardwareMemo;

    /**
     * @var string 目标机架
     */
    public $DstRackName;

    /**
     * @var string 目标机位
     */
    public $DstPositionCode;

    /**
     * @var string 目标ip
     */
    public $DstIp;

    /**
     * @var string 设备子类型, 其他设备/线材用
     */
    public $TypeName;

    /**
     * @var integer 线材-数量，只有收货单详情返回
     */
    public $Quantity;

    /**
     * @var string 计量单位，，只有收货单详情返回，'箱', '卷', '套'
     */
    public $Unit;

    /**
     * @var string 线材-收货凭证号，只有收货单详情返回
     */
    public $ReceiptNumber;

    /**
     * @param string $Sn 设备sn
     * @param string $DeviceType 设备类型
     * @param string $RackName 机架名
     * @param integer $PositionCode 机位号
     * @param integer $IdcId 机房id
     * @param string $IdcName 机房名称
     * @param integer $IdcUnitId 机房管理单元id
     * @param string $IdcUnitName 机房管理单元名称
     * @param string $AssetId 固资号
     * @param string $ModelVersion 设备型号-版本，只有收货单详情返回
     * @param string $DeviceHeight 设备高度，只有收货单详情返回
     * @param string $Need10GbSlot 需要万兆机位，只有收货单详情返回
     * @param string $NeedDCPower 需要直流电，只有收货单详情返回
     * @param string $NeedExtranet 需要外网，只有收货单详情返回
     * @param string $NeedVirtualization 需要虚拟化，只有收货单详情返回
     * @param string $Manufacturer 厂商,只有收货单详情返回
     * @param string $HardwareMemo 硬件备注
     * @param string $DstRackName 目标机架
     * @param string $DstPositionCode 目标机位
     * @param string $DstIp 目标ip
     * @param string $TypeName 设备子类型, 其他设备/线材用
     * @param integer $Quantity 线材-数量，只有收货单详情返回
     * @param string $Unit 计量单位，，只有收货单详情返回，'箱', '卷', '套'
     * @param string $ReceiptNumber 线材-收货凭证号，只有收货单详情返回
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
        if (array_key_exists("Sn",$param) and $param["Sn"] !== null) {
            $this->Sn = $param["Sn"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("RackName",$param) and $param["RackName"] !== null) {
            $this->RackName = $param["RackName"];
        }

        if (array_key_exists("PositionCode",$param) and $param["PositionCode"] !== null) {
            $this->PositionCode = $param["PositionCode"];
        }

        if (array_key_exists("IdcId",$param) and $param["IdcId"] !== null) {
            $this->IdcId = $param["IdcId"];
        }

        if (array_key_exists("IdcName",$param) and $param["IdcName"] !== null) {
            $this->IdcName = $param["IdcName"];
        }

        if (array_key_exists("IdcUnitId",$param) and $param["IdcUnitId"] !== null) {
            $this->IdcUnitId = $param["IdcUnitId"];
        }

        if (array_key_exists("IdcUnitName",$param) and $param["IdcUnitName"] !== null) {
            $this->IdcUnitName = $param["IdcUnitName"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("DeviceHeight",$param) and $param["DeviceHeight"] !== null) {
            $this->DeviceHeight = $param["DeviceHeight"];
        }

        if (array_key_exists("Need10GbSlot",$param) and $param["Need10GbSlot"] !== null) {
            $this->Need10GbSlot = $param["Need10GbSlot"];
        }

        if (array_key_exists("NeedDCPower",$param) and $param["NeedDCPower"] !== null) {
            $this->NeedDCPower = $param["NeedDCPower"];
        }

        if (array_key_exists("NeedExtranet",$param) and $param["NeedExtranet"] !== null) {
            $this->NeedExtranet = $param["NeedExtranet"];
        }

        if (array_key_exists("NeedVirtualization",$param) and $param["NeedVirtualization"] !== null) {
            $this->NeedVirtualization = $param["NeedVirtualization"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("HardwareMemo",$param) and $param["HardwareMemo"] !== null) {
            $this->HardwareMemo = $param["HardwareMemo"];
        }

        if (array_key_exists("DstRackName",$param) and $param["DstRackName"] !== null) {
            $this->DstRackName = $param["DstRackName"];
        }

        if (array_key_exists("DstPositionCode",$param) and $param["DstPositionCode"] !== null) {
            $this->DstPositionCode = $param["DstPositionCode"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("ReceiptNumber",$param) and $param["ReceiptNumber"] !== null) {
            $this->ReceiptNumber = $param["ReceiptNumber"];
        }
    }
}
