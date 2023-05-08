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
 * 机动车销售统一发票
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method string getCode() 获取发票代码
 * @method void setCode(string $Code) 设置发票代码
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getPretaxAmount() 获取税前金额
 * @method void setPretaxAmount(string $PretaxAmount) 设置税前金额
 * @method string getTotal() 获取价税合计（小写）
 * @method void setTotal(string $Total) 设置价税合计（小写）
 * @method string getTotalCn() 获取价税合计（大写）
 * @method void setTotalCn(string $TotalCn) 设置价税合计（大写）
 * @method string getSeller() 获取销售方名称
 * @method void setSeller(string $Seller) 设置销售方名称
 * @method string getSellerTaxID() 获取销售方单位代码
 * @method void setSellerTaxID(string $SellerTaxID) 设置销售方单位代码
 * @method string getSellerTel() 获取销售方电话
 * @method void setSellerTel(string $SellerTel) 设置销售方电话
 * @method string getSellerAddress() 获取销售方地址
 * @method void setSellerAddress(string $SellerAddress) 设置销售方地址
 * @method string getSellerBank() 获取销售方开户行
 * @method void setSellerBank(string $SellerBank) 设置销售方开户行
 * @method string getSellerBankAccount() 获取销售方银行账号
 * @method void setSellerBankAccount(string $SellerBankAccount) 设置销售方银行账号
 * @method string getBuyer() 获取购买方名称
 * @method void setBuyer(string $Buyer) 设置购买方名称
 * @method string getBuyerTaxID() 获取购买方纳税人识别号
 * @method void setBuyerTaxID(string $BuyerTaxID) 设置购买方纳税人识别号
 * @method string getBuyerID() 获取购买方身份证号码/组织机构代码
 * @method void setBuyerID(string $BuyerID) 设置购买方身份证号码/组织机构代码
 * @method string getTaxAuthorities() 获取主管税务机关
 * @method void setTaxAuthorities(string $TaxAuthorities) 设置主管税务机关
 * @method string getTaxAuthoritiesCode() 获取主管税务机关代码
 * @method void setTaxAuthoritiesCode(string $TaxAuthoritiesCode) 设置主管税务机关代码
 * @method string getVIN() 获取车辆识别代码
 * @method void setVIN(string $VIN) 设置车辆识别代码
 * @method string getVehicleModel() 获取厂牌型号
 * @method void setVehicleModel(string $VehicleModel) 设置厂牌型号
 * @method string getVehicleEngineCode() 获取发动机号码
 * @method void setVehicleEngineCode(string $VehicleEngineCode) 设置发动机号码
 * @method string getCertificateNumber() 获取合格证号
 * @method void setCertificateNumber(string $CertificateNumber) 设置合格证号
 * @method string getInspectionNumber() 获取商检单号
 * @method void setInspectionNumber(string $InspectionNumber) 设置商检单号
 * @method string getMachineID() 获取机器编号
 * @method void setMachineID(string $MachineID) 设置机器编号
 * @method string getVehicleType() 获取车辆类型
 * @method void setVehicleType(string $VehicleType) 设置车辆类型
 * @method string getKind() 获取发票消费类型
 * @method void setKind(string $Kind) 设置发票消费类型
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取市
 * @method void setCity(string $City) 设置市
 * @method string getTax() 获取合计税额
 * @method void setTax(string $Tax) 设置合计税额
 * @method string getTaxRate() 获取税率
 * @method void setTaxRate(string $TaxRate) 设置税率
 * @method integer getCompanySealMark() 获取是否有公司印章（0：没有，1：有）
 * @method void setCompanySealMark(integer $CompanySealMark) 设置是否有公司印章（0：没有，1：有）
 * @method string getTonnage() 获取吨位
 * @method void setTonnage(string $Tonnage) 设置吨位
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getFormType() 获取发票联次
 * @method void setFormType(string $FormType) 设置发票联次
 * @method string getFormName() 获取发票联名
 * @method void setFormName(string $FormName) 设置发票联名
 * @method string getIssuer() 获取开票人
 * @method void setIssuer(string $Issuer) 设置开票人
 * @method string getTaxNum() 获取完税凭证号码
 * @method void setTaxNum(string $TaxNum) 设置完税凭证号码
 * @method string getMaxPeopleNum() 获取限乘人数
 * @method void setMaxPeopleNum(string $MaxPeopleNum) 设置限乘人数
 * @method string getOrigin() 获取产地
 * @method void setOrigin(string $Origin) 设置产地
 * @method string getMachineCode() 获取机打发票代码
 * @method void setMachineCode(string $MachineCode) 设置机打发票代码
 * @method string getMachineNumber() 获取机打发票号码
 * @method void setMachineNumber(string $MachineNumber) 设置机打发票号码
 * @method integer getQRCodeMark() 获取是否存在二维码（1：有，0：无）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（1：有，0：无）
 */
class MotorVehicleSaleInvoice extends AbstractModel
{
    /**
     * @var string 发票名称
     */
    public $Title;

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
     * @var string 销售方名称
     */
    public $Seller;

    /**
     * @var string 销售方单位代码
     */
    public $SellerTaxID;

    /**
     * @var string 销售方电话
     */
    public $SellerTel;

    /**
     * @var string 销售方地址
     */
    public $SellerAddress;

    /**
     * @var string 销售方开户行
     */
    public $SellerBank;

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
     * @var string 购买方身份证号码/组织机构代码
     */
    public $BuyerID;

    /**
     * @var string 主管税务机关
     */
    public $TaxAuthorities;

    /**
     * @var string 主管税务机关代码
     */
    public $TaxAuthoritiesCode;

    /**
     * @var string 车辆识别代码
     */
    public $VIN;

    /**
     * @var string 厂牌型号
     */
    public $VehicleModel;

    /**
     * @var string 发动机号码
     */
    public $VehicleEngineCode;

    /**
     * @var string 合格证号
     */
    public $CertificateNumber;

    /**
     * @var string 商检单号
     */
    public $InspectionNumber;

    /**
     * @var string 机器编号
     */
    public $MachineID;

    /**
     * @var string 车辆类型
     */
    public $VehicleType;

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
     * @var string 合计税额
     */
    public $Tax;

    /**
     * @var string 税率
     */
    public $TaxRate;

    /**
     * @var integer 是否有公司印章（0：没有，1：有）
     */
    public $CompanySealMark;

    /**
     * @var string 吨位
     */
    public $Tonnage;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 发票联次
     */
    public $FormType;

    /**
     * @var string 发票联名
     */
    public $FormName;

    /**
     * @var string 开票人
     */
    public $Issuer;

    /**
     * @var string 完税凭证号码
     */
    public $TaxNum;

    /**
     * @var string 限乘人数
     */
    public $MaxPeopleNum;

    /**
     * @var string 产地
     */
    public $Origin;

    /**
     * @var string 机打发票代码
     */
    public $MachineCode;

    /**
     * @var string 机打发票号码
     */
    public $MachineNumber;

    /**
     * @var integer 是否存在二维码（1：有，0：无）
     */
    public $QRCodeMark;

    /**
     * @param string $Title 发票名称
     * @param string $Code 发票代码
     * @param string $Number 发票号码
     * @param string $Date 开票日期
     * @param string $PretaxAmount 税前金额
     * @param string $Total 价税合计（小写）
     * @param string $TotalCn 价税合计（大写）
     * @param string $Seller 销售方名称
     * @param string $SellerTaxID 销售方单位代码
     * @param string $SellerTel 销售方电话
     * @param string $SellerAddress 销售方地址
     * @param string $SellerBank 销售方开户行
     * @param string $SellerBankAccount 销售方银行账号
     * @param string $Buyer 购买方名称
     * @param string $BuyerTaxID 购买方纳税人识别号
     * @param string $BuyerID 购买方身份证号码/组织机构代码
     * @param string $TaxAuthorities 主管税务机关
     * @param string $TaxAuthoritiesCode 主管税务机关代码
     * @param string $VIN 车辆识别代码
     * @param string $VehicleModel 厂牌型号
     * @param string $VehicleEngineCode 发动机号码
     * @param string $CertificateNumber 合格证号
     * @param string $InspectionNumber 商检单号
     * @param string $MachineID 机器编号
     * @param string $VehicleType 车辆类型
     * @param string $Kind 发票消费类型
     * @param string $Province 省
     * @param string $City 市
     * @param string $Tax 合计税额
     * @param string $TaxRate 税率
     * @param integer $CompanySealMark 是否有公司印章（0：没有，1：有）
     * @param string $Tonnage 吨位
     * @param string $Remark 备注
     * @param string $FormType 发票联次
     * @param string $FormName 发票联名
     * @param string $Issuer 开票人
     * @param string $TaxNum 完税凭证号码
     * @param string $MaxPeopleNum 限乘人数
     * @param string $Origin 产地
     * @param string $MachineCode 机打发票代码
     * @param string $MachineNumber 机打发票号码
     * @param integer $QRCodeMark 是否存在二维码（1：有，0：无）
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

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
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

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("SellerTaxID",$param) and $param["SellerTaxID"] !== null) {
            $this->SellerTaxID = $param["SellerTaxID"];
        }

        if (array_key_exists("SellerTel",$param) and $param["SellerTel"] !== null) {
            $this->SellerTel = $param["SellerTel"];
        }

        if (array_key_exists("SellerAddress",$param) and $param["SellerAddress"] !== null) {
            $this->SellerAddress = $param["SellerAddress"];
        }

        if (array_key_exists("SellerBank",$param) and $param["SellerBank"] !== null) {
            $this->SellerBank = $param["SellerBank"];
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

        if (array_key_exists("BuyerID",$param) and $param["BuyerID"] !== null) {
            $this->BuyerID = $param["BuyerID"];
        }

        if (array_key_exists("TaxAuthorities",$param) and $param["TaxAuthorities"] !== null) {
            $this->TaxAuthorities = $param["TaxAuthorities"];
        }

        if (array_key_exists("TaxAuthoritiesCode",$param) and $param["TaxAuthoritiesCode"] !== null) {
            $this->TaxAuthoritiesCode = $param["TaxAuthoritiesCode"];
        }

        if (array_key_exists("VIN",$param) and $param["VIN"] !== null) {
            $this->VIN = $param["VIN"];
        }

        if (array_key_exists("VehicleModel",$param) and $param["VehicleModel"] !== null) {
            $this->VehicleModel = $param["VehicleModel"];
        }

        if (array_key_exists("VehicleEngineCode",$param) and $param["VehicleEngineCode"] !== null) {
            $this->VehicleEngineCode = $param["VehicleEngineCode"];
        }

        if (array_key_exists("CertificateNumber",$param) and $param["CertificateNumber"] !== null) {
            $this->CertificateNumber = $param["CertificateNumber"];
        }

        if (array_key_exists("InspectionNumber",$param) and $param["InspectionNumber"] !== null) {
            $this->InspectionNumber = $param["InspectionNumber"];
        }

        if (array_key_exists("MachineID",$param) and $param["MachineID"] !== null) {
            $this->MachineID = $param["MachineID"];
        }

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
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

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }

        if (array_key_exists("Tonnage",$param) and $param["Tonnage"] !== null) {
            $this->Tonnage = $param["Tonnage"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("FormType",$param) and $param["FormType"] !== null) {
            $this->FormType = $param["FormType"];
        }

        if (array_key_exists("FormName",$param) and $param["FormName"] !== null) {
            $this->FormName = $param["FormName"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("TaxNum",$param) and $param["TaxNum"] !== null) {
            $this->TaxNum = $param["TaxNum"];
        }

        if (array_key_exists("MaxPeopleNum",$param) and $param["MaxPeopleNum"] !== null) {
            $this->MaxPeopleNum = $param["MaxPeopleNum"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("MachineCode",$param) and $param["MachineCode"] !== null) {
            $this->MachineCode = $param["MachineCode"];
        }

        if (array_key_exists("MachineNumber",$param) and $param["MachineNumber"] !== null) {
            $this->MachineNumber = $param["MachineNumber"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }
    }
}
