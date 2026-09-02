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
 * 非税收入
 *
 * @method string getTitle() 获取<p>发票名称</p>
 * @method void setTitle(string $Title) 设置<p>发票名称</p>
 * @method string getNumber() 获取<p>发票号码</p>
 * @method void setNumber(string $Number) 设置<p>发票号码</p>
 * @method string getCode() 获取<p>发票代码</p>
 * @method void setCode(string $Code) 设置<p>发票代码</p>
 * @method string getCheckCode() 获取<p>校验码</p>
 * @method void setCheckCode(string $CheckCode) 设置<p>校验码</p>
 * @method string getDate() 获取<p>开票日期</p>
 * @method void setDate(string $Date) 设置<p>开票日期</p>
 * @method string getTotal() 获取<p>价税合计（小写）</p>
 * @method void setTotal(string $Total) 设置<p>价税合计（小写）</p>
 * @method string getTotalCn() 获取<p>价税合计（大写）</p>
 * @method void setTotalCn(string $TotalCn) 设置<p>价税合计（大写）</p>
 * @method string getBuyer() 获取<p>交款人名称</p>
 * @method void setBuyer(string $Buyer) 设置<p>交款人名称</p>
 * @method string getBuyerTaxID() 获取<p>交款人纳税人识别号</p>
 * @method void setBuyerTaxID(string $BuyerTaxID) 设置<p>交款人纳税人识别号</p>
 * @method string getSeller() 获取<p>收款人名称</p>
 * @method void setSeller(string $Seller) 设置<p>收款人名称</p>
 * @method string getSellerCompany() 获取<p>收款单位名称</p>
 * @method void setSellerCompany(string $SellerCompany) 设置<p>收款单位名称</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getCurrencyCode() 获取<p>币种</p>
 * @method void setCurrencyCode(string $CurrencyCode) 设置<p>币种</p>
 * @method string getReviewer() 获取<p>复核人</p>
 * @method void setReviewer(string $Reviewer) 设置<p>复核人</p>
 * @method integer getQRCodeMark() 获取<p>是否存在二维码（1：有，0：无）</p>
 * @method void setQRCodeMark(integer $QRCodeMark) 设置<p>是否存在二维码（1：有，0：无）</p>
 * @method string getOtherInfo() 获取<p>其他信息</p>
 * @method void setOtherInfo(string $OtherInfo) 设置<p>其他信息</p>
 * @method string getPaymentCode() 获取<p>缴款码</p>
 * @method void setPaymentCode(string $PaymentCode) 设置<p>缴款码</p>
 * @method string getReceiveUnitCode() 获取<p>执收单位编码</p>
 * @method void setReceiveUnitCode(string $ReceiveUnitCode) 设置<p>执收单位编码</p>
 * @method string getReceiver() 获取<p>执收单位名称</p>
 * @method void setReceiver(string $Receiver) 设置<p>执收单位名称</p>
 * @method string getOperator() 获取<p>经办人</p>
 * @method void setOperator(string $Operator) 设置<p>经办人</p>
 * @method string getPayerAccount() 获取<p>付款人账号</p>
 * @method void setPayerAccount(string $PayerAccount) 设置<p>付款人账号</p>
 * @method string getPayerBank() 获取<p>付款人开户银行</p>
 * @method void setPayerBank(string $PayerBank) 设置<p>付款人开户银行</p>
 * @method string getReceiverAccount() 获取<p>收款人账号</p>
 * @method void setReceiverAccount(string $ReceiverAccount) 设置<p>收款人账号</p>
 * @method string getReceiverBank() 获取<p>收款人开户银行</p>
 * @method void setReceiverBank(string $ReceiverBank) 设置<p>收款人开户银行</p>
 * @method array getNonTaxItems() 获取<p>条目</p>
 * @method void setNonTaxItems(array $NonTaxItems) 设置<p>条目</p>
 * @method string getBillName() 获取<p>票据名称</p>
 * @method void setBillName(string $BillName) 设置<p>票据名称</p>
 */
class NonTaxIncomeBill extends AbstractModel
{
    /**
     * @var string <p>发票名称</p>
     */
    public $Title;

    /**
     * @var string <p>发票号码</p>
     */
    public $Number;

    /**
     * @var string <p>发票代码</p>
     */
    public $Code;

    /**
     * @var string <p>校验码</p>
     */
    public $CheckCode;

    /**
     * @var string <p>开票日期</p>
     */
    public $Date;

    /**
     * @var string <p>价税合计（小写）</p>
     */
    public $Total;

    /**
     * @var string <p>价税合计（大写）</p>
     */
    public $TotalCn;

    /**
     * @var string <p>交款人名称</p>
     */
    public $Buyer;

    /**
     * @var string <p>交款人纳税人识别号</p>
     */
    public $BuyerTaxID;

    /**
     * @var string <p>收款人名称</p>
     */
    public $Seller;

    /**
     * @var string <p>收款单位名称</p>
     */
    public $SellerCompany;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>币种</p>
     */
    public $CurrencyCode;

    /**
     * @var string <p>复核人</p>
     */
    public $Reviewer;

    /**
     * @var integer <p>是否存在二维码（1：有，0：无）</p>
     */
    public $QRCodeMark;

    /**
     * @var string <p>其他信息</p>
     */
    public $OtherInfo;

    /**
     * @var string <p>缴款码</p>
     */
    public $PaymentCode;

    /**
     * @var string <p>执收单位编码</p>
     */
    public $ReceiveUnitCode;

    /**
     * @var string <p>执收单位名称</p>
     */
    public $Receiver;

    /**
     * @var string <p>经办人</p>
     */
    public $Operator;

    /**
     * @var string <p>付款人账号</p>
     */
    public $PayerAccount;

    /**
     * @var string <p>付款人开户银行</p>
     */
    public $PayerBank;

    /**
     * @var string <p>收款人账号</p>
     */
    public $ReceiverAccount;

    /**
     * @var string <p>收款人开户银行</p>
     */
    public $ReceiverBank;

    /**
     * @var array <p>条目</p>
     */
    public $NonTaxItems;

    /**
     * @var string <p>票据名称</p>
     */
    public $BillName;

    /**
     * @param string $Title <p>发票名称</p>
     * @param string $Number <p>发票号码</p>
     * @param string $Code <p>发票代码</p>
     * @param string $CheckCode <p>校验码</p>
     * @param string $Date <p>开票日期</p>
     * @param string $Total <p>价税合计（小写）</p>
     * @param string $TotalCn <p>价税合计（大写）</p>
     * @param string $Buyer <p>交款人名称</p>
     * @param string $BuyerTaxID <p>交款人纳税人识别号</p>
     * @param string $Seller <p>收款人名称</p>
     * @param string $SellerCompany <p>收款单位名称</p>
     * @param string $Remark <p>备注</p>
     * @param string $CurrencyCode <p>币种</p>
     * @param string $Reviewer <p>复核人</p>
     * @param integer $QRCodeMark <p>是否存在二维码（1：有，0：无）</p>
     * @param string $OtherInfo <p>其他信息</p>
     * @param string $PaymentCode <p>缴款码</p>
     * @param string $ReceiveUnitCode <p>执收单位编码</p>
     * @param string $Receiver <p>执收单位名称</p>
     * @param string $Operator <p>经办人</p>
     * @param string $PayerAccount <p>付款人账号</p>
     * @param string $PayerBank <p>付款人开户银行</p>
     * @param string $ReceiverAccount <p>收款人账号</p>
     * @param string $ReceiverBank <p>收款人开户银行</p>
     * @param array $NonTaxItems <p>条目</p>
     * @param string $BillName <p>票据名称</p>
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

        if (array_key_exists("BillName",$param) and $param["BillName"] !== null) {
            $this->BillName = $param["BillName"];
        }
    }
}
