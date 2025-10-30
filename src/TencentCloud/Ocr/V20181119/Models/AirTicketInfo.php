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
 * 航空运输电子客票行程单信息
 *
 * @method string getPassengerName() 获取旅客姓名
 * @method void setPassengerName(string $PassengerName) 设置旅客姓名
 * @method string getValidIdNumber() 获取有效身份证件号码
 * @method void setValidIdNumber(string $ValidIdNumber) 设置有效身份证件号码
 * @method string getEndorsement() 获取签注
 * @method void setEndorsement(string $Endorsement) 设置签注
 * @method string getNumberOfGPOrder() 获取GP单号
 * @method void setNumberOfGPOrder(string $NumberOfGPOrder) 设置GP单号
 * @method string getElectronicInvoiceAirTransportReceiptNumber() 获取发票号码
 * @method void setElectronicInvoiceAirTransportReceiptNumber(string $ElectronicInvoiceAirTransportReceiptNumber) 设置发票号码
 * @method array getDetailInformationOfAirTicketTuple() 获取机票详细信息元组
 * @method void setDetailInformationOfAirTicketTuple(array $DetailInformationOfAirTicketTuple) 设置机票详细信息元组
 * @method string getFare() 获取票价
 * @method void setFare(string $Fare) 设置票价
 * @method string getFuelSurcharge() 获取燃油附加费
 * @method void setFuelSurcharge(string $FuelSurcharge) 设置燃油附加费
 * @method string getVatRate() 获取增值税税率
 * @method void setVatRate(string $VatRate) 设置增值税税率
 * @method string getVatTaxAmount() 获取增值税税额
 * @method void setVatTaxAmount(string $VatTaxAmount) 设置增值税税额
 * @method string getCivilAviationDevelopmentFund() 获取民航发展基金
 * @method void setCivilAviationDevelopmentFund(string $CivilAviationDevelopmentFund) 设置民航发展基金
 * @method string getOtherTaxes() 获取其他税费
 * @method void setOtherTaxes(string $OtherTaxes) 设置其他税费
 * @method string getTotalAmount() 获取合计
 * @method void setTotalAmount(string $TotalAmount) 设置合计
 * @method string getElectronicTicketNum() 获取电子客票号码
 * @method void setElectronicTicketNum(string $ElectronicTicketNum) 设置电子客票号码
 * @method string getVerificationCode() 获取验证码
 * @method void setVerificationCode(string $VerificationCode) 设置验证码
 * @method string getPromptInformation() 获取提示信息
 * @method void setPromptInformation(string $PromptInformation) 设置提示信息
 * @method string getInsurance() 获取保险费
 * @method void setInsurance(string $Insurance) 设置保险费
 * @method string getAgentCode() 获取销售网点代号
 * @method void setAgentCode(string $AgentCode) 设置销售网点代号
 * @method string getIssueParty() 获取填开单位
 * @method void setIssueParty(string $IssueParty) 设置填开单位
 * @method string getIssueDate() 获取填开时间
 * @method void setIssueDate(string $IssueDate) 设置填开时间
 * @method string getIssuingStatus() 获取开具状态
 * @method void setIssuingStatus(string $IssuingStatus) 设置开具状态
 * @method string getMarkingOfDomesticOrInternational() 获取国内国际标识
 * @method void setMarkingOfDomesticOrInternational(string $MarkingOfDomesticOrInternational) 设置国内国际标识
 * @method string getNameOfPurchaser() 获取购买方名称
 * @method void setNameOfPurchaser(string $NameOfPurchaser) 设置购买方名称
 * @method string getNameOfSeller() 获取销售方名称
 * @method void setNameOfSeller(string $NameOfSeller) 设置销售方名称
 * @method string getUnifiedSocialCreditCodeOfPurchaser() 获取统一社会信用代码
 * @method void setUnifiedSocialCreditCodeOfPurchaser(string $UnifiedSocialCreditCodeOfPurchaser) 设置统一社会信用代码
 */
class AirTicketInfo extends AbstractModel
{
    /**
     * @var string 旅客姓名
     */
    public $PassengerName;

    /**
     * @var string 有效身份证件号码
     */
    public $ValidIdNumber;

    /**
     * @var string 签注
     */
    public $Endorsement;

    /**
     * @var string GP单号
     */
    public $NumberOfGPOrder;

    /**
     * @var string 发票号码
     */
    public $ElectronicInvoiceAirTransportReceiptNumber;

    /**
     * @var array 机票详细信息元组
     */
    public $DetailInformationOfAirTicketTuple;

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
    public $VatRate;

    /**
     * @var string 增值税税额
     */
    public $VatTaxAmount;

    /**
     * @var string 民航发展基金
     */
    public $CivilAviationDevelopmentFund;

    /**
     * @var string 其他税费
     */
    public $OtherTaxes;

    /**
     * @var string 合计
     */
    public $TotalAmount;

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
     * @var string 销售网点代号
     */
    public $AgentCode;

    /**
     * @var string 填开单位
     */
    public $IssueParty;

    /**
     * @var string 填开时间
     */
    public $IssueDate;

    /**
     * @var string 开具状态
     */
    public $IssuingStatus;

    /**
     * @var string 国内国际标识
     */
    public $MarkingOfDomesticOrInternational;

    /**
     * @var string 购买方名称
     */
    public $NameOfPurchaser;

    /**
     * @var string 销售方名称
     */
    public $NameOfSeller;

    /**
     * @var string 统一社会信用代码
     */
    public $UnifiedSocialCreditCodeOfPurchaser;

    /**
     * @param string $PassengerName 旅客姓名
     * @param string $ValidIdNumber 有效身份证件号码
     * @param string $Endorsement 签注
     * @param string $NumberOfGPOrder GP单号
     * @param string $ElectronicInvoiceAirTransportReceiptNumber 发票号码
     * @param array $DetailInformationOfAirTicketTuple 机票详细信息元组
     * @param string $Fare 票价
     * @param string $FuelSurcharge 燃油附加费
     * @param string $VatRate 增值税税率
     * @param string $VatTaxAmount 增值税税额
     * @param string $CivilAviationDevelopmentFund 民航发展基金
     * @param string $OtherTaxes 其他税费
     * @param string $TotalAmount 合计
     * @param string $ElectronicTicketNum 电子客票号码
     * @param string $VerificationCode 验证码
     * @param string $PromptInformation 提示信息
     * @param string $Insurance 保险费
     * @param string $AgentCode 销售网点代号
     * @param string $IssueParty 填开单位
     * @param string $IssueDate 填开时间
     * @param string $IssuingStatus 开具状态
     * @param string $MarkingOfDomesticOrInternational 国内国际标识
     * @param string $NameOfPurchaser 购买方名称
     * @param string $NameOfSeller 销售方名称
     * @param string $UnifiedSocialCreditCodeOfPurchaser 统一社会信用代码
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
        if (array_key_exists("PassengerName",$param) and $param["PassengerName"] !== null) {
            $this->PassengerName = $param["PassengerName"];
        }

        if (array_key_exists("ValidIdNumber",$param) and $param["ValidIdNumber"] !== null) {
            $this->ValidIdNumber = $param["ValidIdNumber"];
        }

        if (array_key_exists("Endorsement",$param) and $param["Endorsement"] !== null) {
            $this->Endorsement = $param["Endorsement"];
        }

        if (array_key_exists("NumberOfGPOrder",$param) and $param["NumberOfGPOrder"] !== null) {
            $this->NumberOfGPOrder = $param["NumberOfGPOrder"];
        }

        if (array_key_exists("ElectronicInvoiceAirTransportReceiptNumber",$param) and $param["ElectronicInvoiceAirTransportReceiptNumber"] !== null) {
            $this->ElectronicInvoiceAirTransportReceiptNumber = $param["ElectronicInvoiceAirTransportReceiptNumber"];
        }

        if (array_key_exists("DetailInformationOfAirTicketTuple",$param) and $param["DetailInformationOfAirTicketTuple"] !== null) {
            $this->DetailInformationOfAirTicketTuple = [];
            foreach ($param["DetailInformationOfAirTicketTuple"] as $key => $value){
                $obj = new DetailInformationOfAirTicketTupleList();
                $obj->deserialize($value);
                array_push($this->DetailInformationOfAirTicketTuple, $obj);
            }
        }

        if (array_key_exists("Fare",$param) and $param["Fare"] !== null) {
            $this->Fare = $param["Fare"];
        }

        if (array_key_exists("FuelSurcharge",$param) and $param["FuelSurcharge"] !== null) {
            $this->FuelSurcharge = $param["FuelSurcharge"];
        }

        if (array_key_exists("VatRate",$param) and $param["VatRate"] !== null) {
            $this->VatRate = $param["VatRate"];
        }

        if (array_key_exists("VatTaxAmount",$param) and $param["VatTaxAmount"] !== null) {
            $this->VatTaxAmount = $param["VatTaxAmount"];
        }

        if (array_key_exists("CivilAviationDevelopmentFund",$param) and $param["CivilAviationDevelopmentFund"] !== null) {
            $this->CivilAviationDevelopmentFund = $param["CivilAviationDevelopmentFund"];
        }

        if (array_key_exists("OtherTaxes",$param) and $param["OtherTaxes"] !== null) {
            $this->OtherTaxes = $param["OtherTaxes"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
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

        if (array_key_exists("AgentCode",$param) and $param["AgentCode"] !== null) {
            $this->AgentCode = $param["AgentCode"];
        }

        if (array_key_exists("IssueParty",$param) and $param["IssueParty"] !== null) {
            $this->IssueParty = $param["IssueParty"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("IssuingStatus",$param) and $param["IssuingStatus"] !== null) {
            $this->IssuingStatus = $param["IssuingStatus"];
        }

        if (array_key_exists("MarkingOfDomesticOrInternational",$param) and $param["MarkingOfDomesticOrInternational"] !== null) {
            $this->MarkingOfDomesticOrInternational = $param["MarkingOfDomesticOrInternational"];
        }

        if (array_key_exists("NameOfPurchaser",$param) and $param["NameOfPurchaser"] !== null) {
            $this->NameOfPurchaser = $param["NameOfPurchaser"];
        }

        if (array_key_exists("NameOfSeller",$param) and $param["NameOfSeller"] !== null) {
            $this->NameOfSeller = $param["NameOfSeller"];
        }

        if (array_key_exists("UnifiedSocialCreditCodeOfPurchaser",$param) and $param["UnifiedSocialCreditCodeOfPurchaser"] !== null) {
            $this->UnifiedSocialCreditCodeOfPurchaser = $param["UnifiedSocialCreditCodeOfPurchaser"];
        }
    }
}
