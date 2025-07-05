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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全电发票（铁路电子客票）
 *
 * @method string getBuyerName() 获取购方名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyerName(string $BuyerName) 设置购方名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuyerTaxCode() 获取购方识别号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyerTaxCode(string $BuyerTaxCode) 设置购方识别号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNumber() 获取发票号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumber(string $Number) 设置发票号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDate() 获取开票日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置开票日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalCN() 获取价税合计（中文大写）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCN(string $TotalCN) 设置价税合计（中文大写）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTax() 获取税额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTax(string $Tax) 设置税额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceType() 获取业务类型，0：退票，1:售票
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceType(string $ServiceType) 设置业务类型，0：退票，1:售票
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeGetOn() 获取出发时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeGetOn(string $TimeGetOn) 设置出发时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainNumber() 获取车次
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainNumber(string $TrainNumber) 设置车次
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCode() 获取发票代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置发票代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeatType() 获取席别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeatType(string $SeatType) 设置席别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDateGetOn() 获取乘车日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDateGetOn(string $DateGetOn) 设置乘车日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrainCabin() 获取车厢
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainCabin(string $TrainCabin) 设置车厢
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStationGetOn() 获取出发站
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStationGetOn(string $StationGetOn) 设置出发站
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getElectronicNumber() 获取电子客票号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElectronicNumber(string $ElectronicNumber) 设置电子客票号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassengerName() 获取姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassengerName(string $PassengerName) 设置姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassengerNo() 获取证件号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassengerNo(string $PassengerNo) 设置证件号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAmount() 获取金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmount(string $Amount) 设置金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStationGetOff() 获取到达站
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStationGetOff(string $StationGetOff) 设置到达站
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaxRate() 获取税率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaxRate(string $TaxRate) 设置税率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeat() 获取席位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeat(string $Seat) 设置席位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotal() 获取价税合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(string $Total) 设置价税合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckCode() 获取校验码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckCode(string $CheckCode) 设置校验码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStateCode() 获取发票状态代码，0正常 1 未更新  2作废 3已红冲
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStateCode(string $StateCode) 设置发票状态代码，0正常 1 未更新  2作废 3已红冲
注意：此字段可能返回 null，表示取不到有效值。
 */
class ElectronicTrainTicket extends AbstractModel
{
    /**
     * @var string 购方名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuyerName;

    /**
     * @var string 购方识别号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuyerTaxCode;

    /**
     * @var string 发票号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Number;

    /**
     * @var string 开票日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var string 价税合计（中文大写）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCN;

    /**
     * @var string 税额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tax;

    /**
     * @var string 业务类型，0：退票，1:售票
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceType;

    /**
     * @var string 出发时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeGetOn;

    /**
     * @var string 车次
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainNumber;

    /**
     * @var string 发票代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 席别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SeatType;

    /**
     * @var string 乘车日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DateGetOn;

    /**
     * @var string 车厢
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainCabin;

    /**
     * @var string 出发站
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StationGetOn;

    /**
     * @var string 电子客票号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElectronicNumber;

    /**
     * @var string 姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassengerName;

    /**
     * @var string 证件号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassengerNo;

    /**
     * @var string 金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Amount;

    /**
     * @var string 到达站
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StationGetOff;

    /**
     * @var string 税率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaxRate;

    /**
     * @var string 席位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seat;

    /**
     * @var string 价税合计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var string 校验码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckCode;

    /**
     * @var string 发票状态代码，0正常 1 未更新  2作废 3已红冲
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StateCode;

    /**
     * @param string $BuyerName 购方名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuyerTaxCode 购方识别号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Number 发票号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Date 开票日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalCN 价税合计（中文大写）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tax 税额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceType 业务类型，0：退票，1:售票
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeGetOn 出发时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainNumber 车次
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Code 发票代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SeatType 席别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DateGetOn 乘车日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrainCabin 车厢
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StationGetOn 出发站
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ElectronicNumber 电子客票号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassengerName 姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassengerNo 证件号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Amount 金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StationGetOff 到达站
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaxRate 税率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Seat 席位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Total 价税合计
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckCode 校验码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StateCode 发票状态代码，0正常 1 未更新  2作废 3已红冲
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("BuyerName",$param) and $param["BuyerName"] !== null) {
            $this->BuyerName = $param["BuyerName"];
        }

        if (array_key_exists("BuyerTaxCode",$param) and $param["BuyerTaxCode"] !== null) {
            $this->BuyerTaxCode = $param["BuyerTaxCode"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("TotalCN",$param) and $param["TotalCN"] !== null) {
            $this->TotalCN = $param["TotalCN"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("TimeGetOn",$param) and $param["TimeGetOn"] !== null) {
            $this->TimeGetOn = $param["TimeGetOn"];
        }

        if (array_key_exists("TrainNumber",$param) and $param["TrainNumber"] !== null) {
            $this->TrainNumber = $param["TrainNumber"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("SeatType",$param) and $param["SeatType"] !== null) {
            $this->SeatType = $param["SeatType"];
        }

        if (array_key_exists("DateGetOn",$param) and $param["DateGetOn"] !== null) {
            $this->DateGetOn = $param["DateGetOn"];
        }

        if (array_key_exists("TrainCabin",$param) and $param["TrainCabin"] !== null) {
            $this->TrainCabin = $param["TrainCabin"];
        }

        if (array_key_exists("StationGetOn",$param) and $param["StationGetOn"] !== null) {
            $this->StationGetOn = $param["StationGetOn"];
        }

        if (array_key_exists("ElectronicNumber",$param) and $param["ElectronicNumber"] !== null) {
            $this->ElectronicNumber = $param["ElectronicNumber"];
        }

        if (array_key_exists("PassengerName",$param) and $param["PassengerName"] !== null) {
            $this->PassengerName = $param["PassengerName"];
        }

        if (array_key_exists("PassengerNo",$param) and $param["PassengerNo"] !== null) {
            $this->PassengerNo = $param["PassengerNo"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("StationGetOff",$param) and $param["StationGetOff"] !== null) {
            $this->StationGetOff = $param["StationGetOff"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("Seat",$param) and $param["Seat"] !== null) {
            $this->Seat = $param["Seat"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("StateCode",$param) and $param["StateCode"] !== null) {
            $this->StateCode = $param["StateCode"];
        }
    }
}
