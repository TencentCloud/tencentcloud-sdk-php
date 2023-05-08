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
 * 二手车销售统一发票
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method integer getQRCodeMark() 获取是否存在二维码（0：没有，1：有）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（0：没有，1：有）
 * @method string getCode() 获取发票代码
 * @method void setCode(string $Code) 设置发票代码
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getTotal() 获取价税合计（小写）
 * @method void setTotal(string $Total) 设置价税合计（小写）
 * @method string getTotalCn() 获取价税合计（大写）
 * @method void setTotalCn(string $TotalCn) 设置价税合计（大写）
 * @method string getSeller() 获取销货单位名称
 * @method void setSeller(string $Seller) 设置销货单位名称
 * @method string getSellerTel() 获取销售方电话
 * @method void setSellerTel(string $SellerTel) 设置销售方电话
 * @method string getSellerTaxID() 获取销售方单位代码/个人身份证号
 * @method void setSellerTaxID(string $SellerTaxID) 设置销售方单位代码/个人身份证号
 * @method string getSellerAddress() 获取销售方地址
 * @method void setSellerAddress(string $SellerAddress) 设置销售方地址
 * @method string getBuyer() 获取购买方名称
 * @method void setBuyer(string $Buyer) 设置购买方名称
 * @method string getBuyerID() 获取购买方单位代码/个人身份证号
 * @method void setBuyerID(string $BuyerID) 设置购买方单位代码/个人身份证号
 * @method string getBuyerAddress() 获取购买方地址
 * @method void setBuyerAddress(string $BuyerAddress) 设置购买方地址
 * @method string getBuyerTel() 获取购买方电话
 * @method void setBuyerTel(string $BuyerTel) 设置购买方电话
 * @method string getCompanyName() 获取二手车市场
 * @method void setCompanyName(string $CompanyName) 设置二手车市场
 * @method string getCompanyTaxID() 获取二手车市场纳税人识别号
 * @method void setCompanyTaxID(string $CompanyTaxID) 设置二手车市场纳税人识别号
 * @method string getCompanyBankAccount() 获取二手车市场开户银行和账号
 * @method void setCompanyBankAccount(string $CompanyBankAccount) 设置二手车市场开户银行和账号
 * @method string getCompanyTel() 获取二手车市场电话
 * @method void setCompanyTel(string $CompanyTel) 设置二手车市场电话
 * @method string getCompanyAddress() 获取二手车市场地址
 * @method void setCompanyAddress(string $CompanyAddress) 设置二手车市场地址
 * @method string getTransferAdministrationName() 获取转入地车辆管理所名称
 * @method void setTransferAdministrationName(string $TransferAdministrationName) 设置转入地车辆管理所名称
 * @method string getLicensePlate() 获取车牌号
 * @method void setLicensePlate(string $LicensePlate) 设置车牌号
 * @method string getRegistrationNumber() 获取登记证号
 * @method void setRegistrationNumber(string $RegistrationNumber) 设置登记证号
 * @method string getVIN() 获取车辆识别代码
 * @method void setVIN(string $VIN) 设置车辆识别代码
 * @method string getVehicleModel() 获取厂牌型号
 * @method void setVehicleModel(string $VehicleModel) 设置厂牌型号
 * @method string getKind() 获取发票消费类型
 * @method void setKind(string $Kind) 设置发票消费类型
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取市
 * @method void setCity(string $City) 设置市
 * @method string getVehicleType() 获取车辆类型
 * @method void setVehicleType(string $VehicleType) 设置车辆类型
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getFormType() 获取发票联次
 * @method void setFormType(string $FormType) 设置发票联次
 * @method string getFormName() 获取发票联名
 * @method void setFormName(string $FormName) 设置发票联名
 * @method integer getCompanySealMark() 获取是否有公司印章（0：没有，1：有）
 * @method void setCompanySealMark(integer $CompanySealMark) 设置是否有公司印章（0：没有，1：有）
 */
class UsedCarPurchaseInvoice extends AbstractModel
{
    /**
     * @var string 发票名称
     */
    public $Title;

    /**
     * @var integer 是否存在二维码（0：没有，1：有）
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
     * @var string 价税合计（小写）
     */
    public $Total;

    /**
     * @var string 价税合计（大写）
     */
    public $TotalCn;

    /**
     * @var string 销货单位名称
     */
    public $Seller;

    /**
     * @var string 销售方电话
     */
    public $SellerTel;

    /**
     * @var string 销售方单位代码/个人身份证号
     */
    public $SellerTaxID;

    /**
     * @var string 销售方地址
     */
    public $SellerAddress;

    /**
     * @var string 购买方名称
     */
    public $Buyer;

    /**
     * @var string 购买方单位代码/个人身份证号
     */
    public $BuyerID;

    /**
     * @var string 购买方地址
     */
    public $BuyerAddress;

    /**
     * @var string 购买方电话
     */
    public $BuyerTel;

    /**
     * @var string 二手车市场
     */
    public $CompanyName;

    /**
     * @var string 二手车市场纳税人识别号
     */
    public $CompanyTaxID;

    /**
     * @var string 二手车市场开户银行和账号
     */
    public $CompanyBankAccount;

    /**
     * @var string 二手车市场电话
     */
    public $CompanyTel;

    /**
     * @var string 二手车市场地址
     */
    public $CompanyAddress;

    /**
     * @var string 转入地车辆管理所名称
     */
    public $TransferAdministrationName;

    /**
     * @var string 车牌号
     */
    public $LicensePlate;

    /**
     * @var string 登记证号
     */
    public $RegistrationNumber;

    /**
     * @var string 车辆识别代码
     */
    public $VIN;

    /**
     * @var string 厂牌型号
     */
    public $VehicleModel;

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
     * @var string 车辆类型
     */
    public $VehicleType;

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
     * @var integer 是否有公司印章（0：没有，1：有）
     */
    public $CompanySealMark;

    /**
     * @param string $Title 发票名称
     * @param integer $QRCodeMark 是否存在二维码（0：没有，1：有）
     * @param string $Code 发票代码
     * @param string $Number 发票号码
     * @param string $Date 开票日期
     * @param string $Total 价税合计（小写）
     * @param string $TotalCn 价税合计（大写）
     * @param string $Seller 销货单位名称
     * @param string $SellerTel 销售方电话
     * @param string $SellerTaxID 销售方单位代码/个人身份证号
     * @param string $SellerAddress 销售方地址
     * @param string $Buyer 购买方名称
     * @param string $BuyerID 购买方单位代码/个人身份证号
     * @param string $BuyerAddress 购买方地址
     * @param string $BuyerTel 购买方电话
     * @param string $CompanyName 二手车市场
     * @param string $CompanyTaxID 二手车市场纳税人识别号
     * @param string $CompanyBankAccount 二手车市场开户银行和账号
     * @param string $CompanyTel 二手车市场电话
     * @param string $CompanyAddress 二手车市场地址
     * @param string $TransferAdministrationName 转入地车辆管理所名称
     * @param string $LicensePlate 车牌号
     * @param string $RegistrationNumber 登记证号
     * @param string $VIN 车辆识别代码
     * @param string $VehicleModel 厂牌型号
     * @param string $Kind 发票消费类型
     * @param string $Province 省
     * @param string $City 市
     * @param string $VehicleType 车辆类型
     * @param string $Remark 备注
     * @param string $FormType 发票联次
     * @param string $FormName 发票联名
     * @param integer $CompanySealMark 是否有公司印章（0：没有，1：有）
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

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("SellerTel",$param) and $param["SellerTel"] !== null) {
            $this->SellerTel = $param["SellerTel"];
        }

        if (array_key_exists("SellerTaxID",$param) and $param["SellerTaxID"] !== null) {
            $this->SellerTaxID = $param["SellerTaxID"];
        }

        if (array_key_exists("SellerAddress",$param) and $param["SellerAddress"] !== null) {
            $this->SellerAddress = $param["SellerAddress"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("BuyerID",$param) and $param["BuyerID"] !== null) {
            $this->BuyerID = $param["BuyerID"];
        }

        if (array_key_exists("BuyerAddress",$param) and $param["BuyerAddress"] !== null) {
            $this->BuyerAddress = $param["BuyerAddress"];
        }

        if (array_key_exists("BuyerTel",$param) and $param["BuyerTel"] !== null) {
            $this->BuyerTel = $param["BuyerTel"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("CompanyTaxID",$param) and $param["CompanyTaxID"] !== null) {
            $this->CompanyTaxID = $param["CompanyTaxID"];
        }

        if (array_key_exists("CompanyBankAccount",$param) and $param["CompanyBankAccount"] !== null) {
            $this->CompanyBankAccount = $param["CompanyBankAccount"];
        }

        if (array_key_exists("CompanyTel",$param) and $param["CompanyTel"] !== null) {
            $this->CompanyTel = $param["CompanyTel"];
        }

        if (array_key_exists("CompanyAddress",$param) and $param["CompanyAddress"] !== null) {
            $this->CompanyAddress = $param["CompanyAddress"];
        }

        if (array_key_exists("TransferAdministrationName",$param) and $param["TransferAdministrationName"] !== null) {
            $this->TransferAdministrationName = $param["TransferAdministrationName"];
        }

        if (array_key_exists("LicensePlate",$param) and $param["LicensePlate"] !== null) {
            $this->LicensePlate = $param["LicensePlate"];
        }

        if (array_key_exists("RegistrationNumber",$param) and $param["RegistrationNumber"] !== null) {
            $this->RegistrationNumber = $param["RegistrationNumber"];
        }

        if (array_key_exists("VIN",$param) and $param["VIN"] !== null) {
            $this->VIN = $param["VIN"];
        }

        if (array_key_exists("VehicleModel",$param) and $param["VehicleModel"] !== null) {
            $this->VehicleModel = $param["VehicleModel"];
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

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
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

        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }
    }
}
