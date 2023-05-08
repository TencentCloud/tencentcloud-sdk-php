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
 * 增值税发票返回值
 *
 * @method string getCheckCode() 获取校验码
 * @method void setCheckCode(string $CheckCode) 设置校验码
 * @method string getFormType() 获取发票联次
 * @method void setFormType(string $FormType) 设置发票联次
 * @method string getTravelTax() 获取车船税
 * @method void setTravelTax(string $TravelTax) 设置车船税
 * @method string getBuyerAddrTel() 获取购买方地址电话
 * @method void setBuyerAddrTel(string $BuyerAddrTel) 设置购买方地址电话
 * @method string getBuyerBankAccount() 获取购买方银行账号
 * @method void setBuyerBankAccount(string $BuyerBankAccount) 设置购买方银行账号
 * @method string getCompanySealContent() 获取公司印章内容
 * @method void setCompanySealContent(string $CompanySealContent) 设置公司印章内容
 * @method string getTaxSealContent() 获取税务局章内容
 * @method void setTaxSealContent(string $TaxSealContent) 设置税务局章内容
 * @method string getServiceName() 获取服务类型
 * @method void setServiceName(string $ServiceName) 设置服务类型
 * @method string getCity() 获取市
 * @method void setCity(string $City) 设置市
 * @method integer getQRCodeMark() 获取是否存在二维码（0：没有，1：有）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（0：没有，1：有）
 * @method integer getAgentMark() 获取是否有代开标记（0：没有，1：有）
 * @method void setAgentMark(integer $AgentMark) 设置是否有代开标记（0：没有，1：有）
 * @method integer getTransitMark() 获取是否有通行费标记（0：没有，1：有）
 * @method void setTransitMark(integer $TransitMark) 设置是否有通行费标记（0：没有，1：有）
 * @method integer getOilMark() 获取是否有成品油标记（0：没有，1：有）
 * @method void setOilMark(integer $OilMark) 设置是否有成品油标记（0：没有，1：有）
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method string getKind() 获取发票消费类型
 * @method void setKind(string $Kind) 设置发票消费类型
 * @method string getCode() 获取发票代码
 * @method void setCode(string $Code) 设置发票代码
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getNumberConfirm() 获取机打发票号码
 * @method void setNumberConfirm(string $NumberConfirm) 设置机打发票号码
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getTotal() 获取价税合计（小写）
 * @method void setTotal(string $Total) 设置价税合计（小写）
 * @method string getTotalCn() 获取价税合计（大写）
 * @method void setTotalCn(string $TotalCn) 设置价税合计（大写）
 * @method string getPretaxAmount() 获取税前金额
 * @method void setPretaxAmount(string $PretaxAmount) 设置税前金额
 * @method string getTax() 获取合计税额
 * @method void setTax(string $Tax) 设置合计税额
 * @method string getMachineCode() 获取机器编号
 * @method void setMachineCode(string $MachineCode) 设置机器编号
 * @method string getCiphertext() 获取密码区
 * @method void setCiphertext(string $Ciphertext) 设置密码区
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
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
 * @method integer getCompanySealMark() 获取是否有公司印章（0：没有，1：有）
 * @method void setCompanySealMark(integer $CompanySealMark) 设置是否有公司印章（0：没有，1：有）
 * @method string getIssuer() 获取开票人
 * @method void setIssuer(string $Issuer) 设置开票人
 * @method string getReviewer() 获取复核人
 * @method void setReviewer(string $Reviewer) 设置复核人
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method array getVatInvoiceItemInfos() 获取增值税发票项目信息
 * @method void setVatInvoiceItemInfos(array $VatInvoiceItemInfos) 设置增值税发票项目信息
 * @method string getCodeConfirm() 获取机打发票代码
 * @method void setCodeConfirm(string $CodeConfirm) 设置机打发票代码
 * @method string getReceiptor() 获取收款人
 * @method void setReceiptor(string $Receiptor) 设置收款人
 */
class VatInvoiceInfo extends AbstractModel
{
    /**
     * @var string 校验码
     */
    public $CheckCode;

    /**
     * @var string 发票联次
     */
    public $FormType;

    /**
     * @var string 车船税
     */
    public $TravelTax;

    /**
     * @var string 购买方地址电话
     */
    public $BuyerAddrTel;

    /**
     * @var string 购买方银行账号
     */
    public $BuyerBankAccount;

    /**
     * @var string 公司印章内容
     */
    public $CompanySealContent;

    /**
     * @var string 税务局章内容
     */
    public $TaxSealContent;

    /**
     * @var string 服务类型
     */
    public $ServiceName;

    /**
     * @var string 市
     */
    public $City;

    /**
     * @var integer 是否存在二维码（0：没有，1：有）
     */
    public $QRCodeMark;

    /**
     * @var integer 是否有代开标记（0：没有，1：有）
     */
    public $AgentMark;

    /**
     * @var integer 是否有通行费标记（0：没有，1：有）
     */
    public $TransitMark;

    /**
     * @var integer 是否有成品油标记（0：没有，1：有）
     */
    public $OilMark;

    /**
     * @var string 发票名称
     */
    public $Title;

    /**
     * @var string 发票消费类型
     */
    public $Kind;

    /**
     * @var string 发票代码
     */
    public $Code;

    /**
     * @var string 发票号码
     */
    public $Number;

    /**
     * @var string 机打发票号码
     */
    public $NumberConfirm;

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
     * @var string 税前金额
     */
    public $PretaxAmount;

    /**
     * @var string 合计税额
     */
    public $Tax;

    /**
     * @var string 机器编号
     */
    public $MachineCode;

    /**
     * @var string 密码区
     */
    public $Ciphertext;

    /**
     * @var string 备注
     */
    public $Remark;

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
     * @var integer 是否有公司印章（0：没有，1：有）
     */
    public $CompanySealMark;

    /**
     * @var string 开票人
     */
    public $Issuer;

    /**
     * @var string 复核人
     */
    public $Reviewer;

    /**
     * @var string 省
     */
    public $Province;

    /**
     * @var array 增值税发票项目信息
     */
    public $VatInvoiceItemInfos;

    /**
     * @var string 机打发票代码
     */
    public $CodeConfirm;

    /**
     * @var string 收款人
     */
    public $Receiptor;

    /**
     * @param string $CheckCode 校验码
     * @param string $FormType 发票联次
     * @param string $TravelTax 车船税
     * @param string $BuyerAddrTel 购买方地址电话
     * @param string $BuyerBankAccount 购买方银行账号
     * @param string $CompanySealContent 公司印章内容
     * @param string $TaxSealContent 税务局章内容
     * @param string $ServiceName 服务类型
     * @param string $City 市
     * @param integer $QRCodeMark 是否存在二维码（0：没有，1：有）
     * @param integer $AgentMark 是否有代开标记（0：没有，1：有）
     * @param integer $TransitMark 是否有通行费标记（0：没有，1：有）
     * @param integer $OilMark 是否有成品油标记（0：没有，1：有）
     * @param string $Title 发票名称
     * @param string $Kind 发票消费类型
     * @param string $Code 发票代码
     * @param string $Number 发票号码
     * @param string $NumberConfirm 机打发票号码
     * @param string $Date 开票日期
     * @param string $Total 价税合计（小写）
     * @param string $TotalCn 价税合计（大写）
     * @param string $PretaxAmount 税前金额
     * @param string $Tax 合计税额
     * @param string $MachineCode 机器编号
     * @param string $Ciphertext 密码区
     * @param string $Remark 备注
     * @param string $Seller 销售方名称
     * @param string $SellerTaxID 销售方纳税人识别号
     * @param string $SellerAddrTel 销售方地址电话
     * @param string $SellerBankAccount 销售方银行账号
     * @param string $Buyer 购买方名称
     * @param string $BuyerTaxID 购买方纳税人识别号
     * @param integer $CompanySealMark 是否有公司印章（0：没有，1：有）
     * @param string $Issuer 开票人
     * @param string $Reviewer 复核人
     * @param string $Province 省
     * @param array $VatInvoiceItemInfos 增值税发票项目信息
     * @param string $CodeConfirm 机打发票代码
     * @param string $Receiptor 收款人
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
        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("FormType",$param) and $param["FormType"] !== null) {
            $this->FormType = $param["FormType"];
        }

        if (array_key_exists("TravelTax",$param) and $param["TravelTax"] !== null) {
            $this->TravelTax = $param["TravelTax"];
        }

        if (array_key_exists("BuyerAddrTel",$param) and $param["BuyerAddrTel"] !== null) {
            $this->BuyerAddrTel = $param["BuyerAddrTel"];
        }

        if (array_key_exists("BuyerBankAccount",$param) and $param["BuyerBankAccount"] !== null) {
            $this->BuyerBankAccount = $param["BuyerBankAccount"];
        }

        if (array_key_exists("CompanySealContent",$param) and $param["CompanySealContent"] !== null) {
            $this->CompanySealContent = $param["CompanySealContent"];
        }

        if (array_key_exists("TaxSealContent",$param) and $param["TaxSealContent"] !== null) {
            $this->TaxSealContent = $param["TaxSealContent"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("AgentMark",$param) and $param["AgentMark"] !== null) {
            $this->AgentMark = $param["AgentMark"];
        }

        if (array_key_exists("TransitMark",$param) and $param["TransitMark"] !== null) {
            $this->TransitMark = $param["TransitMark"];
        }

        if (array_key_exists("OilMark",$param) and $param["OilMark"] !== null) {
            $this->OilMark = $param["OilMark"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("NumberConfirm",$param) and $param["NumberConfirm"] !== null) {
            $this->NumberConfirm = $param["NumberConfirm"];
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

        if (array_key_exists("PretaxAmount",$param) and $param["PretaxAmount"] !== null) {
            $this->PretaxAmount = $param["PretaxAmount"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }

        if (array_key_exists("Ciphertext",$param) and $param["Ciphertext"] !== null) {
            $this->Ciphertext = $param["Ciphertext"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
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

        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Reviewer",$param) and $param["Reviewer"] !== null) {
            $this->Reviewer = $param["Reviewer"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("VatInvoiceItemInfos",$param) and $param["VatInvoiceItemInfos"] !== null) {
            $this->VatInvoiceItemInfos = [];
            foreach ($param["VatInvoiceItemInfos"] as $key => $value){
                $obj = new VatInvoiceItemInfo();
                $obj->deserialize($value);
                array_push($this->VatInvoiceItemInfos, $obj);
            }
        }

        if (array_key_exists("CodeConfirm",$param) and $param["CodeConfirm"] !== null) {
            $this->CodeConfirm = $param["CodeConfirm"];
        }

        if (array_key_exists("Receiptor",$param) and $param["Receiptor"] !== null) {
            $this->Receiptor = $param["Receiptor"];
        }
    }
}
