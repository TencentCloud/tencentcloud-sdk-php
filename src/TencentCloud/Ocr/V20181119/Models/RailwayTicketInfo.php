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
 * 铁路电子客票信息
 *
 * @method string getTypeOfVoucher() 获取电子发票类型
 * @method void setTypeOfVoucher(string $TypeOfVoucher) 设置电子发票类型
 * @method string getElectronicTicketNum() 获取电子客票号
 * @method void setElectronicTicketNum(string $ElectronicTicketNum) 设置电子客票号
 * @method string getDateOfIssue() 获取开票日期
 * @method void setDateOfIssue(string $DateOfIssue) 设置开票日期
 * @method string getTypeOfBusiness() 获取售票或退票类型
 * @method void setTypeOfBusiness(string $TypeOfBusiness) 设置售票或退票类型
 * @method string getDepartureStation() 获取始发站
 * @method void setDepartureStation(string $DepartureStation) 设置始发站
 * @method string getPhonicsOfDepartureStation() 获取始发站英文
 * @method void setPhonicsOfDepartureStation(string $PhonicsOfDepartureStation) 设置始发站英文
 * @method string getDestinationStation() 获取到达站
 * @method void setDestinationStation(string $DestinationStation) 设置到达站
 * @method string getPhonicsOfDestinationStation() 获取到达站英文
 * @method void setPhonicsOfDestinationStation(string $PhonicsOfDestinationStation) 设置到达站英文
 * @method string getTrainNumber() 获取火车号
 * @method void setTrainNumber(string $TrainNumber) 设置火车号
 * @method string getTravelDate() 获取火车出发日期
 * @method void setTravelDate(string $TravelDate) 设置火车出发日期
 * @method string getDepartureTime() 获取始发时间
 * @method void setDepartureTime(string $DepartureTime) 设置始发时间
 * @method string getAirConditioningCharacteristics() 获取空调特点
 * @method void setAirConditioningCharacteristics(string $AirConditioningCharacteristics) 设置空调特点
 * @method string getSeatLevel() 获取座位类型
 * @method void setSeatLevel(string $SeatLevel) 设置座位类型
 * @method string getCarriage() 获取火车第几车
 * @method void setCarriage(string $Carriage) 设置火车第几车
 * @method string getSeat() 获取座位号
 * @method void setSeat(string $Seat) 设置座位号
 * @method string getFare() 获取票价
 * @method void setFare(string $Fare) 设置票价
 * @method string getElectronicInvoiceRailwayETicketNumber() 获取发票号码
 * @method void setElectronicInvoiceRailwayETicketNumber(string $ElectronicInvoiceRailwayETicketNumber) 设置发票号码
 * @method string getIdNumber() 获取身份证号
 * @method void setIdNumber(string $IdNumber) 设置身份证号
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getTotalAmountExcludingTax() 获取金额
 * @method void setTotalAmountExcludingTax(string $TotalAmountExcludingTax) 设置金额
 * @method string getTaxRate() 获取税率
 * @method void setTaxRate(string $TaxRate) 设置税率
 * @method string getTaxAmount() 获取税额
 * @method void setTaxAmount(string $TaxAmount) 设置税额
 * @method string getNameOfPurchaser() 获取购买方名称
 * @method void setNameOfPurchaser(string $NameOfPurchaser) 设置购买方名称
 * @method string getUnifiedSocialCreditCodeOfPurchaser() 获取统一社会信用代码
 * @method void setUnifiedSocialCreditCodeOfPurchaser(string $UnifiedSocialCreditCodeOfPurchaser) 设置统一社会信用代码
 * @method string getNumberOfOriginalInvoice() 获取原发票号码
 * @method void setNumberOfOriginalInvoice(string $NumberOfOriginalInvoice) 设置原发票号码
 */
class RailwayTicketInfo extends AbstractModel
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
    public $DateOfIssue;

    /**
     * @var string 售票或退票类型
     */
    public $TypeOfBusiness;

    /**
     * @var string 始发站
     */
    public $DepartureStation;

    /**
     * @var string 始发站英文
     */
    public $PhonicsOfDepartureStation;

    /**
     * @var string 到达站
     */
    public $DestinationStation;

    /**
     * @var string 到达站英文
     */
    public $PhonicsOfDestinationStation;

    /**
     * @var string 火车号
     */
    public $TrainNumber;

    /**
     * @var string 火车出发日期
     */
    public $TravelDate;

    /**
     * @var string 始发时间
     */
    public $DepartureTime;

    /**
     * @var string 空调特点
     */
    public $AirConditioningCharacteristics;

    /**
     * @var string 座位类型
     */
    public $SeatLevel;

    /**
     * @var string 火车第几车
     */
    public $Carriage;

    /**
     * @var string 座位号
     */
    public $Seat;

    /**
     * @var string 票价
     */
    public $Fare;

    /**
     * @var string 发票号码
     */
    public $ElectronicInvoiceRailwayETicketNumber;

    /**
     * @var string 身份证号
     */
    public $IdNumber;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 金额
     */
    public $TotalAmountExcludingTax;

    /**
     * @var string 税率
     */
    public $TaxRate;

    /**
     * @var string 税额
     */
    public $TaxAmount;

    /**
     * @var string 购买方名称
     */
    public $NameOfPurchaser;

    /**
     * @var string 统一社会信用代码
     */
    public $UnifiedSocialCreditCodeOfPurchaser;

    /**
     * @var string 原发票号码
     */
    public $NumberOfOriginalInvoice;

    /**
     * @param string $TypeOfVoucher 电子发票类型
     * @param string $ElectronicTicketNum 电子客票号
     * @param string $DateOfIssue 开票日期
     * @param string $TypeOfBusiness 售票或退票类型
     * @param string $DepartureStation 始发站
     * @param string $PhonicsOfDepartureStation 始发站英文
     * @param string $DestinationStation 到达站
     * @param string $PhonicsOfDestinationStation 到达站英文
     * @param string $TrainNumber 火车号
     * @param string $TravelDate 火车出发日期
     * @param string $DepartureTime 始发时间
     * @param string $AirConditioningCharacteristics 空调特点
     * @param string $SeatLevel 座位类型
     * @param string $Carriage 火车第几车
     * @param string $Seat 座位号
     * @param string $Fare 票价
     * @param string $ElectronicInvoiceRailwayETicketNumber 发票号码
     * @param string $IdNumber 身份证号
     * @param string $Name 姓名
     * @param string $TotalAmountExcludingTax 金额
     * @param string $TaxRate 税率
     * @param string $TaxAmount 税额
     * @param string $NameOfPurchaser 购买方名称
     * @param string $UnifiedSocialCreditCodeOfPurchaser 统一社会信用代码
     * @param string $NumberOfOriginalInvoice 原发票号码
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

        if (array_key_exists("DateOfIssue",$param) and $param["DateOfIssue"] !== null) {
            $this->DateOfIssue = $param["DateOfIssue"];
        }

        if (array_key_exists("TypeOfBusiness",$param) and $param["TypeOfBusiness"] !== null) {
            $this->TypeOfBusiness = $param["TypeOfBusiness"];
        }

        if (array_key_exists("DepartureStation",$param) and $param["DepartureStation"] !== null) {
            $this->DepartureStation = $param["DepartureStation"];
        }

        if (array_key_exists("PhonicsOfDepartureStation",$param) and $param["PhonicsOfDepartureStation"] !== null) {
            $this->PhonicsOfDepartureStation = $param["PhonicsOfDepartureStation"];
        }

        if (array_key_exists("DestinationStation",$param) and $param["DestinationStation"] !== null) {
            $this->DestinationStation = $param["DestinationStation"];
        }

        if (array_key_exists("PhonicsOfDestinationStation",$param) and $param["PhonicsOfDestinationStation"] !== null) {
            $this->PhonicsOfDestinationStation = $param["PhonicsOfDestinationStation"];
        }

        if (array_key_exists("TrainNumber",$param) and $param["TrainNumber"] !== null) {
            $this->TrainNumber = $param["TrainNumber"];
        }

        if (array_key_exists("TravelDate",$param) and $param["TravelDate"] !== null) {
            $this->TravelDate = $param["TravelDate"];
        }

        if (array_key_exists("DepartureTime",$param) and $param["DepartureTime"] !== null) {
            $this->DepartureTime = $param["DepartureTime"];
        }

        if (array_key_exists("AirConditioningCharacteristics",$param) and $param["AirConditioningCharacteristics"] !== null) {
            $this->AirConditioningCharacteristics = $param["AirConditioningCharacteristics"];
        }

        if (array_key_exists("SeatLevel",$param) and $param["SeatLevel"] !== null) {
            $this->SeatLevel = $param["SeatLevel"];
        }

        if (array_key_exists("Carriage",$param) and $param["Carriage"] !== null) {
            $this->Carriage = $param["Carriage"];
        }

        if (array_key_exists("Seat",$param) and $param["Seat"] !== null) {
            $this->Seat = $param["Seat"];
        }

        if (array_key_exists("Fare",$param) and $param["Fare"] !== null) {
            $this->Fare = $param["Fare"];
        }

        if (array_key_exists("ElectronicInvoiceRailwayETicketNumber",$param) and $param["ElectronicInvoiceRailwayETicketNumber"] !== null) {
            $this->ElectronicInvoiceRailwayETicketNumber = $param["ElectronicInvoiceRailwayETicketNumber"];
        }

        if (array_key_exists("IdNumber",$param) and $param["IdNumber"] !== null) {
            $this->IdNumber = $param["IdNumber"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TotalAmountExcludingTax",$param) and $param["TotalAmountExcludingTax"] !== null) {
            $this->TotalAmountExcludingTax = $param["TotalAmountExcludingTax"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("TaxAmount",$param) and $param["TaxAmount"] !== null) {
            $this->TaxAmount = $param["TaxAmount"];
        }

        if (array_key_exists("NameOfPurchaser",$param) and $param["NameOfPurchaser"] !== null) {
            $this->NameOfPurchaser = $param["NameOfPurchaser"];
        }

        if (array_key_exists("UnifiedSocialCreditCodeOfPurchaser",$param) and $param["UnifiedSocialCreditCodeOfPurchaser"] !== null) {
            $this->UnifiedSocialCreditCodeOfPurchaser = $param["UnifiedSocialCreditCodeOfPurchaser"];
        }

        if (array_key_exists("NumberOfOriginalInvoice",$param) and $param["NumberOfOriginalInvoice"] !== null) {
            $this->NumberOfOriginalInvoice = $param["NumberOfOriginalInvoice"];
        }
    }
}
