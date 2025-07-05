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
 * 电子发票（火车票）
 *
 * @method string getTypeOfVoucher() 获取电子发票类型
 * @method void setTypeOfVoucher(string $TypeOfVoucher) 设置电子发票类型
 * @method string getElectronicTicketNum() 获取电子客票号
 * @method void setElectronicTicketNum(string $ElectronicTicketNum) 设置电子客票号
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getStationGetOn() 获取始发站
 * @method void setStationGetOn(string $StationGetOn) 设置始发站
 * @method string getStationGetOff() 获取到达站
 * @method void setStationGetOff(string $StationGetOff) 设置到达站
 * @method string getTrainNumber() 获取火车号
 * @method void setTrainNumber(string $TrainNumber) 设置火车号
 * @method string getDateGetOn() 获取乘车日期
 * @method void setDateGetOn(string $DateGetOn) 设置乘车日期
 * @method string getTimeGetOn() 获取始发时间
 * @method void setTimeGetOn(string $TimeGetOn) 设置始发时间
 * @method string getSeat() 获取座位类型
 * @method void setSeat(string $Seat) 设置座位类型
 * @method string getSeatNumber() 获取座位号
 * @method void setSeatNumber(string $SeatNumber) 设置座位号
 * @method string getFare() 获取票价
 * @method void setFare(string $Fare) 设置票价
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getUserID() 获取身份证号
 * @method void setUserID(string $UserID) 设置身份证号
 * @method string getUserName() 获取乘车人姓名
 * @method void setUserName(string $UserName) 设置乘车人姓名
 * @method string getTotal() 获取金额
 * @method void setTotal(string $Total) 设置金额
 * @method string getTaxRate() 获取税率
 * @method void setTaxRate(string $TaxRate) 设置税率
 * @method string getTax() 获取税额
 * @method void setTax(string $Tax) 设置税额
 * @method string getBuyer() 获取购买方名称
 * @method void setBuyer(string $Buyer) 设置购买方名称
 * @method string getBuyerTaxID() 获取统一社会信用代码
 * @method void setBuyerTaxID(string $BuyerTaxID) 设置统一社会信用代码
 * @method string getOriginalNumber() 获取原发票号码
 * @method void setOriginalNumber(string $OriginalNumber) 设置原发票号码
 * @method string getIDInfo() 获取标识信息
 * @method void setIDInfo(string $IDInfo) 设置标识信息
 */
class ElectronicTrainTicketFull extends AbstractModel
{
    /**
     * @var string 电子发票类型
     */
    public $TypeOfVoucher;

    /**
     * @var string 电子客票号
     */
    public $ElectronicTicketNum;

    /**
     * @var string 开票日期
     */
    public $Date;

    /**
     * @var string 始发站
     */
    public $StationGetOn;

    /**
     * @var string 到达站
     */
    public $StationGetOff;

    /**
     * @var string 火车号
     */
    public $TrainNumber;

    /**
     * @var string 乘车日期
     */
    public $DateGetOn;

    /**
     * @var string 始发时间
     */
    public $TimeGetOn;

    /**
     * @var string 座位类型
     */
    public $Seat;

    /**
     * @var string 座位号
     */
    public $SeatNumber;

    /**
     * @var string 票价
     */
    public $Fare;

    /**
     * @var string 发票号码
     */
    public $Number;

    /**
     * @var string 身份证号
     */
    public $UserID;

    /**
     * @var string 乘车人姓名
     */
    public $UserName;

    /**
     * @var string 金额
     */
    public $Total;

    /**
     * @var string 税率
     */
    public $TaxRate;

    /**
     * @var string 税额
     */
    public $Tax;

    /**
     * @var string 购买方名称
     */
    public $Buyer;

    /**
     * @var string 统一社会信用代码
     */
    public $BuyerTaxID;

    /**
     * @var string 原发票号码
     */
    public $OriginalNumber;

    /**
     * @var string 标识信息
     */
    public $IDInfo;

    /**
     * @param string $TypeOfVoucher 电子发票类型
     * @param string $ElectronicTicketNum 电子客票号
     * @param string $Date 开票日期
     * @param string $StationGetOn 始发站
     * @param string $StationGetOff 到达站
     * @param string $TrainNumber 火车号
     * @param string $DateGetOn 乘车日期
     * @param string $TimeGetOn 始发时间
     * @param string $Seat 座位类型
     * @param string $SeatNumber 座位号
     * @param string $Fare 票价
     * @param string $Number 发票号码
     * @param string $UserID 身份证号
     * @param string $UserName 乘车人姓名
     * @param string $Total 金额
     * @param string $TaxRate 税率
     * @param string $Tax 税额
     * @param string $Buyer 购买方名称
     * @param string $BuyerTaxID 统一社会信用代码
     * @param string $OriginalNumber 原发票号码
     * @param string $IDInfo 标识信息
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
        if (array_key_exists("TypeOfVoucher",$param) and $param["TypeOfVoucher"] !== null) {
            $this->TypeOfVoucher = $param["TypeOfVoucher"];
        }

        if (array_key_exists("ElectronicTicketNum",$param) and $param["ElectronicTicketNum"] !== null) {
            $this->ElectronicTicketNum = $param["ElectronicTicketNum"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("StationGetOn",$param) and $param["StationGetOn"] !== null) {
            $this->StationGetOn = $param["StationGetOn"];
        }

        if (array_key_exists("StationGetOff",$param) and $param["StationGetOff"] !== null) {
            $this->StationGetOff = $param["StationGetOff"];
        }

        if (array_key_exists("TrainNumber",$param) and $param["TrainNumber"] !== null) {
            $this->TrainNumber = $param["TrainNumber"];
        }

        if (array_key_exists("DateGetOn",$param) and $param["DateGetOn"] !== null) {
            $this->DateGetOn = $param["DateGetOn"];
        }

        if (array_key_exists("TimeGetOn",$param) and $param["TimeGetOn"] !== null) {
            $this->TimeGetOn = $param["TimeGetOn"];
        }

        if (array_key_exists("Seat",$param) and $param["Seat"] !== null) {
            $this->Seat = $param["Seat"];
        }

        if (array_key_exists("SeatNumber",$param) and $param["SeatNumber"] !== null) {
            $this->SeatNumber = $param["SeatNumber"];
        }

        if (array_key_exists("Fare",$param) and $param["Fare"] !== null) {
            $this->Fare = $param["Fare"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("BuyerTaxID",$param) and $param["BuyerTaxID"] !== null) {
            $this->BuyerTaxID = $param["BuyerTaxID"];
        }

        if (array_key_exists("OriginalNumber",$param) and $param["OriginalNumber"] !== null) {
            $this->OriginalNumber = $param["OriginalNumber"];
        }

        if (array_key_exists("IDInfo",$param) and $param["IDInfo"] !== null) {
            $this->IDInfo = $param["IDInfo"];
        }
    }
}
