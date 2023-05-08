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
 * 通用机打发票
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method integer getQRCodeMark() 获取是否存在二维码（1：有，0：无）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（1：有，0：无）
 * @method string getCode() 获取发票代码
 * @method void setCode(string $Code) 设置发票代码
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getTime() 获取时间
 * @method void setTime(string $Time) 设置时间
 * @method string getCheckCode() 获取校验码
 * @method void setCheckCode(string $CheckCode) 设置校验码
 * @method string getCiphertext() 获取密码区
 * @method void setCiphertext(string $Ciphertext) 设置密码区
 * @method string getCategory() 获取种类
 * @method void setCategory(string $Category) 设置种类
 * @method string getPretaxAmount() 获取税前金额
 * @method void setPretaxAmount(string $PretaxAmount) 设置税前金额
 * @method string getTotal() 获取价税合计（小写）
 * @method void setTotal(string $Total) 设置价税合计（小写）
 * @method string getTotalCn() 获取价税合计（大写）
 * @method void setTotalCn(string $TotalCn) 设置价税合计（大写）
 * @method string getTax() 获取合计税额
 * @method void setTax(string $Tax) 设置合计税额
 * @method string getIndustryClass() 获取行业分类
 * @method void setIndustryClass(string $IndustryClass) 设置行业分类
 * @method string getSeller() 获取销售方名称
 * @method void setSeller(string $Seller) 设置销售方名称
 * @method string getSellerTaxID() 获取销售方纳税人识别号
 * @method void setSellerTaxID(string $SellerTaxID) 设置销售方纳税人识别号
 * @method string getSellerAddrTel() 获取销售方地址电话
 * @method void setSellerAddrTel(string $SellerAddrTel) 设置销售方地址电话
 * @method string getSellerBankAccount() 获取销售方银行账号
 * @method void setSellerBankAccount(string $SellerBankAccount) 设置销售方银行账号
 * @method string getBuyer() 获取购买方名称
 * @method void setBuyer(string $Buyer) 设置购买方名称
 * @method string getBuyerTaxID() 获取购买方纳税人识别号
 * @method void setBuyerTaxID(string $BuyerTaxID) 设置购买方纳税人识别号
 * @method string getBuyerAddrTel() 获取购买方地址电话
 * @method void setBuyerAddrTel(string $BuyerAddrTel) 设置购买方地址电话
 * @method string getBuyerBankAccount() 获取购买方银行账号
 * @method void setBuyerBankAccount(string $BuyerBankAccount) 设置购买方银行账号
 * @method string getKind() 获取发票消费类型
 * @method void setKind(string $Kind) 设置发票消费类型
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取市
 * @method void setCity(string $City) 设置市
 * @method integer getCompanySealMark() 获取是否有公司印章（0：没有，1：有）
 * @method void setCompanySealMark(integer $CompanySealMark) 设置是否有公司印章（0：没有，1：有）
 * @method integer getElectronicMark() 获取是否为浙江/广东通用机打发票（0：没有，1：有）
 * @method void setElectronicMark(integer $ElectronicMark) 设置是否为浙江/广东通用机打发票（0：没有，1：有）
 * @method string getIssuer() 获取开票人
 * @method void setIssuer(string $Issuer) 设置开票人
 * @method string getReceiptor() 获取收款人
 * @method void setReceiptor(string $Receiptor) 设置收款人
 * @method string getReviewer() 获取复核人
 * @method void setReviewer(string $Reviewer) 设置复核人
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getPaymentInfo() 获取经办人支付信息
 * @method void setPaymentInfo(string $PaymentInfo) 设置经办人支付信息
 * @method string getTicketPickupUser() 获取经办人取票用户
 * @method void setTicketPickupUser(string $TicketPickupUser) 设置经办人取票用户
 * @method string getMerchantNumber() 获取经办人商户号
 * @method void setMerchantNumber(string $MerchantNumber) 设置经办人商户号
 * @method string getOrderNumber() 获取经办人订单号
 * @method void setOrderNumber(string $OrderNumber) 设置经办人订单号
 * @method array getGeneralMachineItems() 获取条目
 * @method void setGeneralMachineItems(array $GeneralMachineItems) 设置条目
 */
class MachinePrintedInvoice extends AbstractModel
{
    /**
     * @var string 发票名称
     */
    public $Title;

    /**
     * @var integer 是否存在二维码（1：有，0：无）
     */
    public $QRCodeMark;

    /**
     * @var string 发票代码
     */
    public $Code;

    /**
     * @var string 发票号码
     */
    public $Number;

    /**
     * @var string 开票日期
     */
    public $Date;

    /**
     * @var string 时间
     */
    public $Time;

    /**
     * @var string 校验码
     */
    public $CheckCode;

    /**
     * @var string 密码区
     */
    public $Ciphertext;

    /**
     * @var string 种类
     */
    public $Category;

    /**
     * @var string 税前金额
     */
    public $PretaxAmount;

    /**
     * @var string 价税合计（小写）
     */
    public $Total;

    /**
     * @var string 价税合计（大写）
     */
    public $TotalCn;

    /**
     * @var string 合计税额
     */
    public $Tax;

    /**
     * @var string 行业分类
     */
    public $IndustryClass;

    /**
     * @var string 销售方名称
     */
    public $Seller;

    /**
     * @var string 销售方纳税人识别号
     */
    public $SellerTaxID;

    /**
     * @var string 销售方地址电话
     */
    public $SellerAddrTel;

    /**
     * @var string 销售方银行账号
     */
    public $SellerBankAccount;

    /**
     * @var string 购买方名称
     */
    public $Buyer;

    /**
     * @var string 购买方纳税人识别号
     */
    public $BuyerTaxID;

    /**
     * @var string 购买方地址电话
     */
    public $BuyerAddrTel;

    /**
     * @var string 购买方银行账号
     */
    public $BuyerBankAccount;

    /**
     * @var string 发票消费类型
     */
    public $Kind;

    /**
     * @var string 省
     */
    public $Province;

    /**
     * @var string 市
     */
    public $City;

    /**
     * @var integer 是否有公司印章（0：没有，1：有）
     */
    public $CompanySealMark;

    /**
     * @var integer 是否为浙江/广东通用机打发票（0：没有，1：有）
     */
    public $ElectronicMark;

    /**
     * @var string 开票人
     */
    public $Issuer;

    /**
     * @var string 收款人
     */
    public $Receiptor;

    /**
     * @var string 复核人
     */
    public $Reviewer;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 经办人支付信息
     */
    public $PaymentInfo;

    /**
     * @var string 经办人取票用户
     */
    public $TicketPickupUser;

    /**
     * @var string 经办人商户号
     */
    public $MerchantNumber;

    /**
     * @var string 经办人订单号
     */
    public $OrderNumber;

    /**
     * @var array 条目
     */
    public $GeneralMachineItems;

    /**
     * @param string $Title 发票名称
     * @param integer $QRCodeMark 是否存在二维码（1：有，0：无）
     * @param string $Code 发票代码
     * @param string $Number 发票号码
     * @param string $Date 开票日期
     * @param string $Time 时间
     * @param string $CheckCode 校验码
     * @param string $Ciphertext 密码区
     * @param string $Category 种类
     * @param string $PretaxAmount 税前金额
     * @param string $Total 价税合计（小写）
     * @param string $TotalCn 价税合计（大写）
     * @param string $Tax 合计税额
     * @param string $IndustryClass 行业分类
     * @param string $Seller 销售方名称
     * @param string $SellerTaxID 销售方纳税人识别号
     * @param string $SellerAddrTel 销售方地址电话
     * @param string $SellerBankAccount 销售方银行账号
     * @param string $Buyer 购买方名称
     * @param string $BuyerTaxID 购买方纳税人识别号
     * @param string $BuyerAddrTel 购买方地址电话
     * @param string $BuyerBankAccount 购买方银行账号
     * @param string $Kind 发票消费类型
     * @param string $Province 省
     * @param string $City 市
     * @param integer $CompanySealMark 是否有公司印章（0：没有，1：有）
     * @param integer $ElectronicMark 是否为浙江/广东通用机打发票（0：没有，1：有）
     * @param string $Issuer 开票人
     * @param string $Receiptor 收款人
     * @param string $Reviewer 复核人
     * @param string $Remark 备注
     * @param string $PaymentInfo 经办人支付信息
     * @param string $TicketPickupUser 经办人取票用户
     * @param string $MerchantNumber 经办人商户号
     * @param string $OrderNumber 经办人订单号
     * @param array $GeneralMachineItems 条目
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

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
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

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("Ciphertext",$param) and $param["Ciphertext"] !== null) {
            $this->Ciphertext = $param["Ciphertext"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("PretaxAmount",$param) and $param["PretaxAmount"] !== null) {
            $this->PretaxAmount = $param["PretaxAmount"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("IndustryClass",$param) and $param["IndustryClass"] !== null) {
            $this->IndustryClass = $param["IndustryClass"];
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("SellerTaxID",$param) and $param["SellerTaxID"] !== null) {
            $this->SellerTaxID = $param["SellerTaxID"];
        }

        if (array_key_exists("SellerAddrTel",$param) and $param["SellerAddrTel"] !== null) {
            $this->SellerAddrTel = $param["SellerAddrTel"];
        }

        if (array_key_exists("SellerBankAccount",$param) and $param["SellerBankAccount"] !== null) {
            $this->SellerBankAccount = $param["SellerBankAccount"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("BuyerTaxID",$param) and $param["BuyerTaxID"] !== null) {
            $this->BuyerTaxID = $param["BuyerTaxID"];
        }

        if (array_key_exists("BuyerAddrTel",$param) and $param["BuyerAddrTel"] !== null) {
            $this->BuyerAddrTel = $param["BuyerAddrTel"];
        }

        if (array_key_exists("BuyerBankAccount",$param) and $param["BuyerBankAccount"] !== null) {
            $this->BuyerBankAccount = $param["BuyerBankAccount"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }

        if (array_key_exists("ElectronicMark",$param) and $param["ElectronicMark"] !== null) {
            $this->ElectronicMark = $param["ElectronicMark"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Receiptor",$param) and $param["Receiptor"] !== null) {
            $this->Receiptor = $param["Receiptor"];
        }

        if (array_key_exists("Reviewer",$param) and $param["Reviewer"] !== null) {
            $this->Reviewer = $param["Reviewer"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PaymentInfo",$param) and $param["PaymentInfo"] !== null) {
            $this->PaymentInfo = $param["PaymentInfo"];
        }

        if (array_key_exists("TicketPickupUser",$param) and $param["TicketPickupUser"] !== null) {
            $this->TicketPickupUser = $param["TicketPickupUser"];
        }

        if (array_key_exists("MerchantNumber",$param) and $param["MerchantNumber"] !== null) {
            $this->MerchantNumber = $param["MerchantNumber"];
        }

        if (array_key_exists("OrderNumber",$param) and $param["OrderNumber"] !== null) {
            $this->OrderNumber = $param["OrderNumber"];
        }

        if (array_key_exists("GeneralMachineItems",$param) and $param["GeneralMachineItems"] !== null) {
            $this->GeneralMachineItems = [];
            foreach ($param["GeneralMachineItems"] as $key => $value){
                $obj = new GeneralMachineItem();
                $obj->deserialize($value);
                array_push($this->GeneralMachineItems, $obj);
            }
        }
    }
}
