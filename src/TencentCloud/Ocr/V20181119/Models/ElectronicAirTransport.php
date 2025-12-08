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
 * 全电发票（航空运输电子客票行程单）
 *
 * @method string getCode() 获取发票代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置发票代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNumber() 获取发票号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumber(string $Number) 设置发票号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDate() 获取开票日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置开票日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAmount() 获取金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmount(string $Amount) 设置金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckCode() 获取校验码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckCode(string $CheckCode) 设置校验码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotal() 获取价税合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(string $Total) 设置价税合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeductionMark() 获取抵扣标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeductionMark(string $DeductionMark) 设置抵扣标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStateCode() 获取发票状态代码，0正常 1 未更新  2作废 3已红冲
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStateCode(string $StateCode) 设置发票状态代码，0正常 1 未更新  2作废 3已红冲
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuyerTaxCode() 获取购方识别号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyerTaxCode(string $BuyerTaxCode) 设置购方识别号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuyerName() 获取购方名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyerName(string $BuyerName) 设置购方名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTax() 获取合计税额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTax(string $Tax) 设置合计税额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomesticInternationalMark() 获取国内国际标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomesticInternationalMark(string $DomesticInternationalMark) 设置国内国际标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassengerName() 获取旅客姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassengerName(string $PassengerName) 设置旅客姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassengerNo() 获取有效身份证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassengerNo(string $PassengerNo) 设置有效身份证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getElectronicNumber() 获取电子客票号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElectronicNumber(string $ElectronicNumber) 设置电子客票号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getElectronicAirTransportDetails() 获取全电发票（航空运输电子客票行程单）详细信息


注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElectronicAirTransportDetails(array $ElectronicAirTransportDetails) 设置全电发票（航空运输电子客票行程单）详细信息


注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFare() 获取票价
 * @method void setFare(string $Fare) 设置票价
 * @method string getFuelSurcharge() 获取燃油附加费
 * @method void setFuelSurcharge(string $FuelSurcharge) 设置燃油附加费
 * @method string getTaxAmount() 获取增值税税额
 * @method void setTaxAmount(string $TaxAmount) 设置增值税税额
 * @method string getDevelopmentFund() 获取民航发展基金
 * @method void setDevelopmentFund(string $DevelopmentFund) 设置民航发展基金
 */
class ElectronicAirTransport extends AbstractModel
{
    /**
     * @var string 发票代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

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
     * @var string 金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Amount;

    /**
     * @var string 校验码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckCode;

    /**
     * @var string 价税合计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var string 抵扣标志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeductionMark;

    /**
     * @var string 发票状态代码，0正常 1 未更新  2作废 3已红冲
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StateCode;

    /**
     * @var string 购方识别号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuyerTaxCode;

    /**
     * @var string 购方名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuyerName;

    /**
     * @var string 合计税额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tax;

    /**
     * @var string 国内国际标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomesticInternationalMark;

    /**
     * @var string 旅客姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassengerName;

    /**
     * @var string 有效身份证件号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassengerNo;

    /**
     * @var string 电子客票号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElectronicNumber;

    /**
     * @var array 全电发票（航空运输电子客票行程单）详细信息


注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElectronicAirTransportDetails;

    /**
     * @var string 票价
     */
    public $Fare;

    /**
     * @var string 燃油附加费
     */
    public $FuelSurcharge;

    /**
     * @var string 增值税税额
     */
    public $TaxAmount;

    /**
     * @var string 民航发展基金
     */
    public $DevelopmentFund;

    /**
     * @param string $Code 发票代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Number 发票号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Date 开票日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Amount 金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckCode 校验码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Total 价税合计
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeductionMark 抵扣标志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StateCode 发票状态代码，0正常 1 未更新  2作废 3已红冲
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuyerTaxCode 购方识别号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuyerName 购方名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tax 合计税额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomesticInternationalMark 国内国际标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassengerName 旅客姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassengerNo 有效身份证件号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ElectronicNumber 电子客票号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ElectronicAirTransportDetails 全电发票（航空运输电子客票行程单）详细信息


注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Fare 票价
     * @param string $FuelSurcharge 燃油附加费
     * @param string $TaxAmount 增值税税额
     * @param string $DevelopmentFund 民航发展基金
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("DeductionMark",$param) and $param["DeductionMark"] !== null) {
            $this->DeductionMark = $param["DeductionMark"];
        }

        if (array_key_exists("StateCode",$param) and $param["StateCode"] !== null) {
            $this->StateCode = $param["StateCode"];
        }

        if (array_key_exists("BuyerTaxCode",$param) and $param["BuyerTaxCode"] !== null) {
            $this->BuyerTaxCode = $param["BuyerTaxCode"];
        }

        if (array_key_exists("BuyerName",$param) and $param["BuyerName"] !== null) {
            $this->BuyerName = $param["BuyerName"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("DomesticInternationalMark",$param) and $param["DomesticInternationalMark"] !== null) {
            $this->DomesticInternationalMark = $param["DomesticInternationalMark"];
        }

        if (array_key_exists("PassengerName",$param) and $param["PassengerName"] !== null) {
            $this->PassengerName = $param["PassengerName"];
        }

        if (array_key_exists("PassengerNo",$param) and $param["PassengerNo"] !== null) {
            $this->PassengerNo = $param["PassengerNo"];
        }

        if (array_key_exists("ElectronicNumber",$param) and $param["ElectronicNumber"] !== null) {
            $this->ElectronicNumber = $param["ElectronicNumber"];
        }

        if (array_key_exists("ElectronicAirTransportDetails",$param) and $param["ElectronicAirTransportDetails"] !== null) {
            $this->ElectronicAirTransportDetails = [];
            foreach ($param["ElectronicAirTransportDetails"] as $key => $value){
                $obj = new ElectronicAirTransportDetail();
                $obj->deserialize($value);
                array_push($this->ElectronicAirTransportDetails, $obj);
            }
        }

        if (array_key_exists("Fare",$param) and $param["Fare"] !== null) {
            $this->Fare = $param["Fare"];
        }

        if (array_key_exists("FuelSurcharge",$param) and $param["FuelSurcharge"] !== null) {
            $this->FuelSurcharge = $param["FuelSurcharge"];
        }

        if (array_key_exists("TaxAmount",$param) and $param["TaxAmount"] !== null) {
            $this->TaxAmount = $param["TaxAmount"];
        }

        if (array_key_exists("DevelopmentFund",$param) and $param["DevelopmentFund"] !== null) {
            $this->DevelopmentFund = $param["DevelopmentFund"];
        }
    }
}
