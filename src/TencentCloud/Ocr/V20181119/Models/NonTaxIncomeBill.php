<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 非税收入
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getCode() 获取发票代码
 * @method void setCode(string $Code) 设置发票代码
 * @method string getCheckCode() 获取校验码
 * @method void setCheckCode(string $CheckCode) 设置校验码
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getTotal() 获取价税合计（小写）
 * @method void setTotal(string $Total) 设置价税合计（小写）
 * @method string getTotalCn() 获取价税合计（大写）
 * @method void setTotalCn(string $TotalCn) 设置价税合计（大写）
 * @method string getBuyer() 获取交款人名称
 * @method void setBuyer(string $Buyer) 设置交款人名称
 * @method string getBuyerTaxID() 获取交款人纳税人识别号
 * @method void setBuyerTaxID(string $BuyerTaxID) 设置交款人纳税人识别号
 * @method string getSeller() 获取收款人名称
 * @method void setSeller(string $Seller) 设置收款人名称
 * @method string getSellerCompany() 获取收款单位名称
 * @method void setSellerCompany(string $SellerCompany) 设置收款单位名称
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getCurrencyCode() 获取币种
 * @method void setCurrencyCode(string $CurrencyCode) 设置币种
 * @method string getReviewer() 获取复核人
 * @method void setReviewer(string $Reviewer) 设置复核人
 * @method integer getQRCodeMark() 获取是否存在二维码（1：有，0：无）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（1：有，0：无）
 * @method string getOtherInfo() 获取其他信息
 * @method void setOtherInfo(string $OtherInfo) 设置其他信息
 * @method string getPaymentCode() 获取缴款码
 * @method void setPaymentCode(string $PaymentCode) 设置缴款码
 * @method string getReceiveUnitCode() 获取执收单位编码
 * @method void setReceiveUnitCode(string $ReceiveUnitCode) 设置执收单位编码
 * @method string getReceiver() 获取执收单位名称
 * @method void setReceiver(string $Receiver) 设置执收单位名称
 * @method string getOperator() 获取经办人
 * @method void setOperator(string $Operator) 设置经办人
 * @method string getPayerAccount() 获取付款人账号
 * @method void setPayerAccount(string $PayerAccount) 设置付款人账号
 * @method string getPayerBank() 获取付款人开户银行
 * @method void setPayerBank(string $PayerBank) 设置付款人开户银行
 * @method string getReceiverAccount() 获取收款人账号
 * @method void setReceiverAccount(string $ReceiverAccount) 设置收款人账号
 * @method string getReceiverBank() 获取收款人开户银行
 * @method void setReceiverBank(string $ReceiverBank) 设置收款人开户银行
 * @method array getNonTaxItems() 获取条目
 * @method void setNonTaxItems(array $NonTaxItems) 设置条目
 */
class NonTaxIncomeBill extends AbstractModel
{
    /**
     * @var string 发票名称
     */
    public $Title;

    /**
     * @var string 发票号码
     */
    public $Number;

    /**
     * @var string 发票代码
     */
    public $Code;

    /**
     * @var string 校验码
     */
    public $CheckCode;

    /**
     * @var string 开票日期
     */
    public $Date;

    /**
     * @var string 价税合计（小写）
     */
    public $Total;

    /**
     * @var string 价税合计（大写）
     */
    public $TotalCn;

    /**
     * @var string 交款人名称
     */
    public $Buyer;

    /**
     * @var string 交款人纳税人识别号
     */
    public $BuyerTaxID;

    /**
     * @var string 收款人名称
     */
    public $Seller;

    /**
     * @var string 收款单位名称
     */
    public $SellerCompany;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 币种
     */
    public $CurrencyCode;

    /**
     * @var string 复核人
     */
    public $Reviewer;

    /**
     * @var integer 是否存在二维码（1：有，0：无）
     */
    public $QRCodeMark;

    /**
     * @var string 其他信息
     */
    public $OtherInfo;

    /**
     * @var string 缴款码
     */
    public $PaymentCode;

    /**
     * @var string 执收单位编码
     */
    public $ReceiveUnitCode;

    /**
     * @var string 执收单位名称
     */
    public $Receiver;

    /**
     * @var string 经办人
     */
    public $Operator;

    /**
     * @var string 付款人账号
     */
    public $PayerAccount;

    /**
     * @var string 付款人开户银行
     */
    public $PayerBank;

    /**
     * @var string 收款人账号
     */
    public $ReceiverAccount;

    /**
     * @var string 收款人开户银行
     */
    public $ReceiverBank;

    /**
     * @var array 条目
     */
    public $NonTaxItems;

    /**
     * @param string $Title 发票名称
     * @param string $Number 发票号码
     * @param string $Code 发票代码
     * @param string $CheckCode 校验码
     * @param string $Date 开票日期
     * @param string $Total 价税合计（小写）
     * @param string $TotalCn 价税合计（大写）
     * @param string $Buyer 交款人名称
     * @param string $BuyerTaxID 交款人纳税人识别号
     * @param string $Seller 收款人名称
     * @param string $SellerCompany 收款单位名称
     * @param string $Remark 备注
     * @param string $CurrencyCode 币种
     * @param string $Reviewer 复核人
     * @param integer $QRCodeMark 是否存在二维码（1：有，0：无）
     * @param string $OtherInfo 其他信息
     * @param string $PaymentCode 缴款码
     * @param string $ReceiveUnitCode 执收单位编码
     * @param string $Receiver 执收单位名称
     * @param string $Operator 经办人
     * @param string $PayerAccount 付款人账号
     * @param string $PayerBank 付款人开户银行
     * @param string $ReceiverAccount 收款人账号
     * @param string $ReceiverBank 收款人开户银行
     * @param array $NonTaxItems 条目
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("BuyerTaxID",$param) and $param["BuyerTaxID"] !== null) {
            $this->BuyerTaxID = $param["BuyerTaxID"];
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("SellerCompany",$param) and $param["SellerCompany"] !== null) {
            $this->SellerCompany = $param["SellerCompany"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CurrencyCode",$param) and $param["CurrencyCode"] !== null) {
            $this->CurrencyCode = $param["CurrencyCode"];
        }

        if (array_key_exists("Reviewer",$param) and $param["Reviewer"] !== null) {
            $this->Reviewer = $param["Reviewer"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("OtherInfo",$param) and $param["OtherInfo"] !== null) {
            $this->OtherInfo = $param["OtherInfo"];
        }

        if (array_key_exists("PaymentCode",$param) and $param["PaymentCode"] !== null) {
            $this->PaymentCode = $param["PaymentCode"];
        }

        if (array_key_exists("ReceiveUnitCode",$param) and $param["ReceiveUnitCode"] !== null) {
            $this->ReceiveUnitCode = $param["ReceiveUnitCode"];
        }

        if (array_key_exists("Receiver",$param) and $param["Receiver"] !== null) {
            $this->Receiver = $param["Receiver"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("PayerAccount",$param) and $param["PayerAccount"] !== null) {
            $this->PayerAccount = $param["PayerAccount"];
        }

        if (array_key_exists("PayerBank",$param) and $param["PayerBank"] !== null) {
            $this->PayerBank = $param["PayerBank"];
        }

        if (array_key_exists("ReceiverAccount",$param) and $param["ReceiverAccount"] !== null) {
            $this->ReceiverAccount = $param["ReceiverAccount"];
        }

        if (array_key_exists("ReceiverBank",$param) and $param["ReceiverBank"] !== null) {
            $this->ReceiverBank = $param["ReceiverBank"];
        }

        if (array_key_exists("NonTaxItems",$param) and $param["NonTaxItems"] !== null) {
            $this->NonTaxItems = [];
            foreach ($param["NonTaxItems"] as $key => $value){
                $obj = new NonTaxItem();
                $obj->deserialize($value);
                array_push($this->NonTaxItems, $obj);
            }
        }
    }
}
