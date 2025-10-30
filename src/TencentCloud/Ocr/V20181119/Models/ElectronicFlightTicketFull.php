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
 * 电子发票（机票行程单）
 *
 * @method string getUserName() 获取旅客姓名
 * @method void setUserName(string $UserName) 设置旅客姓名
 * @method string getUserID() 获取有效身份证件号码
 * @method void setUserID(string $UserID) 设置有效身份证件号码
 * @method string getEndorsement() 获取签注
 * @method void setEndorsement(string $Endorsement) 设置签注
 * @method string getGPOrder() 获取GP单号
 * @method void setGPOrder(string $GPOrder) 设置GP单号
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getFare() 获取票价
 * @method void setFare(string $Fare) 设置票价
 * @method string getFuelSurcharge() 获取燃油附加费
 * @method void setFuelSurcharge(string $FuelSurcharge) 设置燃油附加费
 * @method string getTaxRate() 获取增值税税率
 * @method void setTaxRate(string $TaxRate) 设置增值税税率
 * @method string getTax() 获取增值税税额
 * @method void setTax(string $Tax) 设置增值税税额
 * @method string getDevelopmentFund() 获取民航发展基金
 * @method void setDevelopmentFund(string $DevelopmentFund) 设置民航发展基金
 * @method string getOtherTax() 获取其他税费
 * @method void setOtherTax(string $OtherTax) 设置其他税费
 * @method string getTotal() 获取合计
 * @method void setTotal(string $Total) 设置合计
 * @method string getElectronicTicketNum() 获取电子客票号码
 * @method void setElectronicTicketNum(string $ElectronicTicketNum) 设置电子客票号码
 * @method string getVerificationCode() 获取验证码
 * @method void setVerificationCode(string $VerificationCode) 设置验证码
 * @method string getPromptInformation() 获取提示信息
 * @method void setPromptInformation(string $PromptInformation) 设置提示信息
 * @method string getInsurance() 获取保险费
 * @method void setInsurance(string $Insurance) 设置保险费
 * @method string getIssuer() 获取填开单位
 * @method void setIssuer(string $Issuer) 设置填开单位
 * @method string getDate() 获取填开时间
 * @method void setDate(string $Date) 设置填开时间
 * @method string getDomesticInternationalTag() 获取国内国际标识
 * @method void setDomesticInternationalTag(string $DomesticInternationalTag) 设置国内国际标识
 * @method string getBuyer() 获取购买方名称
 * @method void setBuyer(string $Buyer) 设置购买方名称
 * @method string getSeller() 获取销售方名称
 * @method void setSeller(string $Seller) 设置销售方名称
 * @method string getBuyerTaxID() 获取统一社会信用代码
 * @method void setBuyerTaxID(string $BuyerTaxID) 设置统一社会信用代码
 * @method array getFlightItems() 获取机票详细信息元组
 * @method void setFlightItems(array $FlightItems) 设置机票详细信息元组
 * @method string getInvoiceStatus() 获取机票开具状态
 * @method void setInvoiceStatus(string $InvoiceStatus) 设置机票开具状态
 */
class ElectronicFlightTicketFull extends AbstractModel
{
    /**
     * @var string 旅客姓名
     */
    public $UserName;

    /**
     * @var string 有效身份证件号码
     */
    public $UserID;

    /**
     * @var string 签注
     */
    public $Endorsement;

    /**
     * @var string GP单号
     */
    public $GPOrder;

    /**
     * @var string 发票号码
     */
    public $Number;

    /**
     * @var string 票价
     */
    public $Fare;

    /**
     * @var string 燃油附加费
     */
    public $FuelSurcharge;

    /**
     * @var string 增值税税率
     */
    public $TaxRate;

    /**
     * @var string 增值税税额
     */
    public $Tax;

    /**
     * @var string 民航发展基金
     */
    public $DevelopmentFund;

    /**
     * @var string 其他税费
     */
    public $OtherTax;

    /**
     * @var string 合计
     */
    public $Total;

    /**
     * @var string 电子客票号码
     */
    public $ElectronicTicketNum;

    /**
     * @var string 验证码
     */
    public $VerificationCode;

    /**
     * @var string 提示信息
     */
    public $PromptInformation;

    /**
     * @var string 保险费
     */
    public $Insurance;

    /**
     * @var string 填开单位
     */
    public $Issuer;

    /**
     * @var string 填开时间
     */
    public $Date;

    /**
     * @var string 国内国际标识
     */
    public $DomesticInternationalTag;

    /**
     * @var string 购买方名称
     */
    public $Buyer;

    /**
     * @var string 销售方名称
     */
    public $Seller;

    /**
     * @var string 统一社会信用代码
     */
    public $BuyerTaxID;

    /**
     * @var array 机票详细信息元组
     */
    public $FlightItems;

    /**
     * @var string 机票开具状态
     */
    public $InvoiceStatus;

    /**
     * @param string $UserName 旅客姓名
     * @param string $UserID 有效身份证件号码
     * @param string $Endorsement 签注
     * @param string $GPOrder GP单号
     * @param string $Number 发票号码
     * @param string $Fare 票价
     * @param string $FuelSurcharge 燃油附加费
     * @param string $TaxRate 增值税税率
     * @param string $Tax 增值税税额
     * @param string $DevelopmentFund 民航发展基金
     * @param string $OtherTax 其他税费
     * @param string $Total 合计
     * @param string $ElectronicTicketNum 电子客票号码
     * @param string $VerificationCode 验证码
     * @param string $PromptInformation 提示信息
     * @param string $Insurance 保险费
     * @param string $Issuer 填开单位
     * @param string $Date 填开时间
     * @param string $DomesticInternationalTag 国内国际标识
     * @param string $Buyer 购买方名称
     * @param string $Seller 销售方名称
     * @param string $BuyerTaxID 统一社会信用代码
     * @param array $FlightItems 机票详细信息元组
     * @param string $InvoiceStatus 机票开具状态
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("Endorsement",$param) and $param["Endorsement"] !== null) {
            $this->Endorsement = $param["Endorsement"];
        }

        if (array_key_exists("GPOrder",$param) and $param["GPOrder"] !== null) {
            $this->GPOrder = $param["GPOrder"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Fare",$param) and $param["Fare"] !== null) {
            $this->Fare = $param["Fare"];
        }

        if (array_key_exists("FuelSurcharge",$param) and $param["FuelSurcharge"] !== null) {
            $this->FuelSurcharge = $param["FuelSurcharge"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("DevelopmentFund",$param) and $param["DevelopmentFund"] !== null) {
            $this->DevelopmentFund = $param["DevelopmentFund"];
        }

        if (array_key_exists("OtherTax",$param) and $param["OtherTax"] !== null) {
            $this->OtherTax = $param["OtherTax"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("ElectronicTicketNum",$param) and $param["ElectronicTicketNum"] !== null) {
            $this->ElectronicTicketNum = $param["ElectronicTicketNum"];
        }

        if (array_key_exists("VerificationCode",$param) and $param["VerificationCode"] !== null) {
            $this->VerificationCode = $param["VerificationCode"];
        }

        if (array_key_exists("PromptInformation",$param) and $param["PromptInformation"] !== null) {
            $this->PromptInformation = $param["PromptInformation"];
        }

        if (array_key_exists("Insurance",$param) and $param["Insurance"] !== null) {
            $this->Insurance = $param["Insurance"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("DomesticInternationalTag",$param) and $param["DomesticInternationalTag"] !== null) {
            $this->DomesticInternationalTag = $param["DomesticInternationalTag"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("BuyerTaxID",$param) and $param["BuyerTaxID"] !== null) {
            $this->BuyerTaxID = $param["BuyerTaxID"];
        }

        if (array_key_exists("FlightItems",$param) and $param["FlightItems"] !== null) {
            $this->FlightItems = [];
            foreach ($param["FlightItems"] as $key => $value){
                $obj = new FlightItemInfo();
                $obj->deserialize($value);
                array_push($this->FlightItems, $obj);
            }
        }

        if (array_key_exists("InvoiceStatus",$param) and $param["InvoiceStatus"] !== null) {
            $this->InvoiceStatus = $param["InvoiceStatus"];
        }
    }
}
