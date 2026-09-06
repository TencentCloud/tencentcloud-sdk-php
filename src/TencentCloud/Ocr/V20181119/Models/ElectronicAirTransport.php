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
 * @method string getCode() 获取<p>发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置<p>发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNumber() 获取<p>发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumber(string $Number) 设置<p>发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDate() 获取<p>开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置<p>开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAmount() 获取<p>金额</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmount(string $Amount) 设置<p>金额</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckCode() 获取<p>校验码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckCode(string $CheckCode) 设置<p>校验码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotal() 获取<p>价税合计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(string $Total) 设置<p>价税合计</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeductionMark() 获取<p>抵扣标志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeductionMark(string $DeductionMark) 设置<p>抵扣标志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStateCode() 获取<p>发票状态代码，0正常 1 未更新  2作废 3已红冲</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStateCode(string $StateCode) 设置<p>发票状态代码，0正常 1 未更新  2作废 3已红冲</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuyerTaxCode() 获取<p>购方识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyerTaxCode(string $BuyerTaxCode) 设置<p>购方识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuyerName() 获取<p>购方名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyerName(string $BuyerName) 设置<p>购方名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTax() 获取<p>合计税额</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTax(string $Tax) 设置<p>合计税额</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomesticInternationalMark() 获取<p>国内国际标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomesticInternationalMark(string $DomesticInternationalMark) 设置<p>国内国际标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassengerName() 获取<p>旅客姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassengerName(string $PassengerName) 设置<p>旅客姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassengerNo() 获取<p>有效身份证件号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassengerNo(string $PassengerNo) 设置<p>有效身份证件号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getElectronicNumber() 获取<p>电子客票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElectronicNumber(string $ElectronicNumber) 设置<p>电子客票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getElectronicAirTransportDetails() 获取<p>全电发票（航空运输电子客票行程单）详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElectronicAirTransportDetails(array $ElectronicAirTransportDetails) 设置<p>全电发票（航空运输电子客票行程单）详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFare() 获取<p>票价</p>
 * @method void setFare(string $Fare) 设置<p>票价</p>
 * @method string getFuelSurcharge() 获取<p>燃油附加费</p>
 * @method void setFuelSurcharge(string $FuelSurcharge) 设置<p>燃油附加费</p>
 * @method string getTaxAmount() 获取<p>增值税税额</p>
 * @method void setTaxAmount(string $TaxAmount) 设置<p>增值税税额</p>
 * @method string getDevelopmentFund() 获取<p>民航发展基金</p>
 * @method void setDevelopmentFund(string $DevelopmentFund) 设置<p>民航发展基金</p>
 */
class ElectronicAirTransport extends AbstractModel
{
    /**
     * @var string <p>发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string <p>发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Number;

    /**
     * @var string <p>开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var string <p>金额</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Amount;

    /**
     * @var string <p>校验码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckCode;

    /**
     * @var string <p>价税合计</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var string <p>抵扣标志</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeductionMark;

    /**
     * @var string <p>发票状态代码，0正常 1 未更新  2作废 3已红冲</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StateCode;

    /**
     * @var string <p>购方识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuyerTaxCode;

    /**
     * @var string <p>购方名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuyerName;

    /**
     * @var string <p>合计税额</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tax;

    /**
     * @var string <p>国内国际标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomesticInternationalMark;

    /**
     * @var string <p>旅客姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassengerName;

    /**
     * @var string <p>有效身份证件号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassengerNo;

    /**
     * @var string <p>电子客票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElectronicNumber;

    /**
     * @var array <p>全电发票（航空运输电子客票行程单）详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElectronicAirTransportDetails;

    /**
     * @var string <p>票价</p>
     */
    public $Fare;

    /**
     * @var string <p>燃油附加费</p>
     */
    public $FuelSurcharge;

    /**
     * @var string <p>增值税税额</p>
     */
    public $TaxAmount;

    /**
     * @var string <p>民航发展基金</p>
     */
    public $DevelopmentFund;

    /**
     * @param string $Code <p>发票代码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Number <p>发票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Date <p>开票日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Amount <p>金额</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckCode <p>校验码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Total <p>价税合计</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeductionMark <p>抵扣标志</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StateCode <p>发票状态代码，0正常 1 未更新  2作废 3已红冲</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuyerTaxCode <p>购方识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuyerName <p>购方名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tax <p>合计税额</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomesticInternationalMark <p>国内国际标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassengerName <p>旅客姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassengerNo <p>有效身份证件号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ElectronicNumber <p>电子客票号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ElectronicAirTransportDetails <p>全电发票（航空运输电子客票行程单）详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Fare <p>票价</p>
     * @param string $FuelSurcharge <p>燃油附加费</p>
     * @param string $TaxAmount <p>增值税税额</p>
     * @param string $DevelopmentFund <p>民航发展基金</p>
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
