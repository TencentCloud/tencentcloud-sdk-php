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
 * 二手车销售统一发票信息
 *
 * @method string getTaxBureau() 获取<p>所属税局</p>
 * @method void setTaxBureau(string $TaxBureau) 设置<p>所属税局</p>
 * @method string getBuyer() 获取<p>买方单位/个人</p>
 * @method void setBuyer(string $Buyer) 设置<p>买方单位/个人</p>
 * @method string getBuyerNo() 获取<p>买方单位代码/身份证号码</p>
 * @method void setBuyerNo(string $BuyerNo) 设置<p>买方单位代码/身份证号码</p>
 * @method string getBuyerAddress() 获取<p>买方单位/个人地址</p>
 * @method void setBuyerAddress(string $BuyerAddress) 设置<p>买方单位/个人地址</p>
 * @method string getBuyerTel() 获取<p>买方单位电话</p>
 * @method void setBuyerTel(string $BuyerTel) 设置<p>买方单位电话</p>
 * @method string getSeller() 获取<p>卖方单位/个人</p>
 * @method void setSeller(string $Seller) 设置<p>卖方单位/个人</p>
 * @method string getSellerNo() 获取<p>卖方单位代码/身份证号码</p>
 * @method void setSellerNo(string $SellerNo) 设置<p>卖方单位代码/身份证号码</p>
 * @method string getSellerAddress() 获取<p>卖方单位/个人地址</p>
 * @method void setSellerAddress(string $SellerAddress) 设置<p>卖方单位/个人地址</p>
 * @method string getSellerTel() 获取<p>卖方单位电话</p>
 * @method void setSellerTel(string $SellerTel) 设置<p>卖方单位电话</p>
 * @method string getVehicleLicenseNo() 获取<p>车牌照号</p>
 * @method void setVehicleLicenseNo(string $VehicleLicenseNo) 设置<p>车牌照号</p>
 * @method string getRegisterNo() 获取<p>登记证号</p>
 * @method void setRegisterNo(string $RegisterNo) 设置<p>登记证号</p>
 * @method string getVehicleIdentifyNo() 获取<p>车架号/车辆识别代码</p>
 * @method void setVehicleIdentifyNo(string $VehicleIdentifyNo) 设置<p>车架号/车辆识别代码</p>
 * @method string getManagementOffice() 获取<p>转入地车辆管理所名称</p>
 * @method void setManagementOffice(string $ManagementOffice) 设置<p>转入地车辆管理所名称</p>
 * @method string getVehicleTotalPrice() 获取<p>车价合计</p>
 * @method void setVehicleTotalPrice(string $VehicleTotalPrice) 设置<p>车价合计</p>
 * @method string getAuctioneer() 获取<p>经营、拍卖单位</p>
 * @method void setAuctioneer(string $Auctioneer) 设置<p>经营、拍卖单位</p>
 * @method string getAuctioneerAddress() 获取<p>经营、拍卖单位地址</p>
 * @method void setAuctioneerAddress(string $AuctioneerAddress) 设置<p>经营、拍卖单位地址</p>
 * @method string getAuctioneerTaxpayerNum() 获取<p>经营、拍卖单位纳税人识别号</p>
 * @method void setAuctioneerTaxpayerNum(string $AuctioneerTaxpayerNum) 设置<p>经营、拍卖单位纳税人识别号</p>
 * @method string getAuctioneerBankAccount() 获取<p>经营、拍卖单位开户银行、账号</p>
 * @method void setAuctioneerBankAccount(string $AuctioneerBankAccount) 设置<p>经营、拍卖单位开户银行、账号</p>
 * @method string getAuctioneerTel() 获取<p>经营、拍卖单位电话</p>
 * @method void setAuctioneerTel(string $AuctioneerTel) 设置<p>经营、拍卖单位电话</p>
 * @method string getMarket() 获取<p>二手车市场</p>
 * @method void setMarket(string $Market) 设置<p>二手车市场</p>
 * @method string getMarketTaxpayerNum() 获取<p>二手车市场纳税人识别号</p>
 * @method void setMarketTaxpayerNum(string $MarketTaxpayerNum) 设置<p>二手车市场纳税人识别号</p>
 * @method string getMarketAddress() 获取<p>二手车市场地址</p>
 * @method void setMarketAddress(string $MarketAddress) 设置<p>二手车市场地址</p>
 * @method string getMarketBankAccount() 获取<p>二手车市场开户银行账号</p>
 * @method void setMarketBankAccount(string $MarketBankAccount) 设置<p>二手车市场开户银行账号</p>
 * @method string getMarketTel() 获取<p>二手车市场电话</p>
 * @method void setMarketTel(string $MarketTel) 设置<p>二手车市场电话</p>
 * @method string getVehicleTotalPriceCN() 获取<p>车价合计中文大写</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVehicleTotalPriceCN(string $VehicleTotalPriceCN) 设置<p>车价合计中文大写</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInvoiceRiskLevel() 获取<p>发票风险等级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvoiceRiskLevel(string $InvoiceRiskLevel) 设置<p>发票风险等级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCarType() 获取<p>车辆类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCarType(string $CarType) 设置<p>车辆类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlateModel() 获取<p>厂牌型号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlateModel(string $PlateModel) 设置<p>厂牌型号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAbandonerName() 获取<p>作废人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbandonerName(string $AbandonerName) 设置<p>作废人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAbandonDate() 获取<p>作废日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbandonDate(string $AbandonDate) 设置<p>作废日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIssuerType() 获取<p>开票方类型：1 经营单位，2 拍卖单位，03 二手车市场。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssuerType(string $IssuerType) 设置<p>开票方类型：1 经营单位，2 拍卖单位，03 二手车市场。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIssuerTaxCode() 获取<p>开票方纳税人识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssuerTaxCode(string $IssuerTaxCode) 设置<p>开票方纳税人识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomCode() 获取<p>自行编码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomCode(string $CustomCode) 设置<p>自行编码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaxClassifyCode() 获取<p>商品编码</p>
 * @method void setTaxClassifyCode(string $TaxClassifyCode) 设置<p>商品编码</p>
 * @method string getZeroTaxRateMark() 获取<p>零税率标识：空：非零税率，0：出口零税，1：免税，2：不征税，3 普通零税率</p>
 * @method void setZeroTaxRateMark(string $ZeroTaxRateMark) 设置<p>零税率标识：空：非零税率，0：出口零税，1：免税，2：不征税，3 普通零税率</p>
 */
class UsedVehicleInvoiceInfo extends AbstractModel
{
    /**
     * @var string <p>所属税局</p>
     */
    public $TaxBureau;

    /**
     * @var string <p>买方单位/个人</p>
     */
    public $Buyer;

    /**
     * @var string <p>买方单位代码/身份证号码</p>
     */
    public $BuyerNo;

    /**
     * @var string <p>买方单位/个人地址</p>
     */
    public $BuyerAddress;

    /**
     * @var string <p>买方单位电话</p>
     */
    public $BuyerTel;

    /**
     * @var string <p>卖方单位/个人</p>
     */
    public $Seller;

    /**
     * @var string <p>卖方单位代码/身份证号码</p>
     */
    public $SellerNo;

    /**
     * @var string <p>卖方单位/个人地址</p>
     */
    public $SellerAddress;

    /**
     * @var string <p>卖方单位电话</p>
     */
    public $SellerTel;

    /**
     * @var string <p>车牌照号</p>
     */
    public $VehicleLicenseNo;

    /**
     * @var string <p>登记证号</p>
     */
    public $RegisterNo;

    /**
     * @var string <p>车架号/车辆识别代码</p>
     */
    public $VehicleIdentifyNo;

    /**
     * @var string <p>转入地车辆管理所名称</p>
     */
    public $ManagementOffice;

    /**
     * @var string <p>车价合计</p>
     */
    public $VehicleTotalPrice;

    /**
     * @var string <p>经营、拍卖单位</p>
     */
    public $Auctioneer;

    /**
     * @var string <p>经营、拍卖单位地址</p>
     */
    public $AuctioneerAddress;

    /**
     * @var string <p>经营、拍卖单位纳税人识别号</p>
     */
    public $AuctioneerTaxpayerNum;

    /**
     * @var string <p>经营、拍卖单位开户银行、账号</p>
     */
    public $AuctioneerBankAccount;

    /**
     * @var string <p>经营、拍卖单位电话</p>
     */
    public $AuctioneerTel;

    /**
     * @var string <p>二手车市场</p>
     */
    public $Market;

    /**
     * @var string <p>二手车市场纳税人识别号</p>
     */
    public $MarketTaxpayerNum;

    /**
     * @var string <p>二手车市场地址</p>
     */
    public $MarketAddress;

    /**
     * @var string <p>二手车市场开户银行账号</p>
     */
    public $MarketBankAccount;

    /**
     * @var string <p>二手车市场电话</p>
     */
    public $MarketTel;

    /**
     * @var string <p>车价合计中文大写</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VehicleTotalPriceCN;

    /**
     * @var string <p>发票风险等级</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvoiceRiskLevel;

    /**
     * @var string <p>车辆类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CarType;

    /**
     * @var string <p>厂牌型号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlateModel;

    /**
     * @var string <p>作废人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbandonerName;

    /**
     * @var string <p>作废日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbandonDate;

    /**
     * @var string <p>开票方类型：1 经营单位，2 拍卖单位，03 二手车市场。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IssuerType;

    /**
     * @var string <p>开票方纳税人识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IssuerTaxCode;

    /**
     * @var string <p>自行编码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomCode;

    /**
     * @var string <p>商品编码</p>
     */
    public $TaxClassifyCode;

    /**
     * @var string <p>零税率标识：空：非零税率，0：出口零税，1：免税，2：不征税，3 普通零税率</p>
     */
    public $ZeroTaxRateMark;

    /**
     * @param string $TaxBureau <p>所属税局</p>
     * @param string $Buyer <p>买方单位/个人</p>
     * @param string $BuyerNo <p>买方单位代码/身份证号码</p>
     * @param string $BuyerAddress <p>买方单位/个人地址</p>
     * @param string $BuyerTel <p>买方单位电话</p>
     * @param string $Seller <p>卖方单位/个人</p>
     * @param string $SellerNo <p>卖方单位代码/身份证号码</p>
     * @param string $SellerAddress <p>卖方单位/个人地址</p>
     * @param string $SellerTel <p>卖方单位电话</p>
     * @param string $VehicleLicenseNo <p>车牌照号</p>
     * @param string $RegisterNo <p>登记证号</p>
     * @param string $VehicleIdentifyNo <p>车架号/车辆识别代码</p>
     * @param string $ManagementOffice <p>转入地车辆管理所名称</p>
     * @param string $VehicleTotalPrice <p>车价合计</p>
     * @param string $Auctioneer <p>经营、拍卖单位</p>
     * @param string $AuctioneerAddress <p>经营、拍卖单位地址</p>
     * @param string $AuctioneerTaxpayerNum <p>经营、拍卖单位纳税人识别号</p>
     * @param string $AuctioneerBankAccount <p>经营、拍卖单位开户银行、账号</p>
     * @param string $AuctioneerTel <p>经营、拍卖单位电话</p>
     * @param string $Market <p>二手车市场</p>
     * @param string $MarketTaxpayerNum <p>二手车市场纳税人识别号</p>
     * @param string $MarketAddress <p>二手车市场地址</p>
     * @param string $MarketBankAccount <p>二手车市场开户银行账号</p>
     * @param string $MarketTel <p>二手车市场电话</p>
     * @param string $VehicleTotalPriceCN <p>车价合计中文大写</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InvoiceRiskLevel <p>发票风险等级</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CarType <p>车辆类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlateModel <p>厂牌型号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AbandonerName <p>作废人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AbandonDate <p>作废日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IssuerType <p>开票方类型：1 经营单位，2 拍卖单位，03 二手车市场。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IssuerTaxCode <p>开票方纳税人识别号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomCode <p>自行编码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaxClassifyCode <p>商品编码</p>
     * @param string $ZeroTaxRateMark <p>零税率标识：空：非零税率，0：出口零税，1：免税，2：不征税，3 普通零税率</p>
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
        if (array_key_exists("TaxBureau",$param) and $param["TaxBureau"] !== null) {
            $this->TaxBureau = $param["TaxBureau"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("BuyerNo",$param) and $param["BuyerNo"] !== null) {
            $this->BuyerNo = $param["BuyerNo"];
        }

        if (array_key_exists("BuyerAddress",$param) and $param["BuyerAddress"] !== null) {
            $this->BuyerAddress = $param["BuyerAddress"];
        }

        if (array_key_exists("BuyerTel",$param) and $param["BuyerTel"] !== null) {
            $this->BuyerTel = $param["BuyerTel"];
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("SellerNo",$param) and $param["SellerNo"] !== null) {
            $this->SellerNo = $param["SellerNo"];
        }

        if (array_key_exists("SellerAddress",$param) and $param["SellerAddress"] !== null) {
            $this->SellerAddress = $param["SellerAddress"];
        }

        if (array_key_exists("SellerTel",$param) and $param["SellerTel"] !== null) {
            $this->SellerTel = $param["SellerTel"];
        }

        if (array_key_exists("VehicleLicenseNo",$param) and $param["VehicleLicenseNo"] !== null) {
            $this->VehicleLicenseNo = $param["VehicleLicenseNo"];
        }

        if (array_key_exists("RegisterNo",$param) and $param["RegisterNo"] !== null) {
            $this->RegisterNo = $param["RegisterNo"];
        }

        if (array_key_exists("VehicleIdentifyNo",$param) and $param["VehicleIdentifyNo"] !== null) {
            $this->VehicleIdentifyNo = $param["VehicleIdentifyNo"];
        }

        if (array_key_exists("ManagementOffice",$param) and $param["ManagementOffice"] !== null) {
            $this->ManagementOffice = $param["ManagementOffice"];
        }

        if (array_key_exists("VehicleTotalPrice",$param) and $param["VehicleTotalPrice"] !== null) {
            $this->VehicleTotalPrice = $param["VehicleTotalPrice"];
        }

        if (array_key_exists("Auctioneer",$param) and $param["Auctioneer"] !== null) {
            $this->Auctioneer = $param["Auctioneer"];
        }

        if (array_key_exists("AuctioneerAddress",$param) and $param["AuctioneerAddress"] !== null) {
            $this->AuctioneerAddress = $param["AuctioneerAddress"];
        }

        if (array_key_exists("AuctioneerTaxpayerNum",$param) and $param["AuctioneerTaxpayerNum"] !== null) {
            $this->AuctioneerTaxpayerNum = $param["AuctioneerTaxpayerNum"];
        }

        if (array_key_exists("AuctioneerBankAccount",$param) and $param["AuctioneerBankAccount"] !== null) {
            $this->AuctioneerBankAccount = $param["AuctioneerBankAccount"];
        }

        if (array_key_exists("AuctioneerTel",$param) and $param["AuctioneerTel"] !== null) {
            $this->AuctioneerTel = $param["AuctioneerTel"];
        }

        if (array_key_exists("Market",$param) and $param["Market"] !== null) {
            $this->Market = $param["Market"];
        }

        if (array_key_exists("MarketTaxpayerNum",$param) and $param["MarketTaxpayerNum"] !== null) {
            $this->MarketTaxpayerNum = $param["MarketTaxpayerNum"];
        }

        if (array_key_exists("MarketAddress",$param) and $param["MarketAddress"] !== null) {
            $this->MarketAddress = $param["MarketAddress"];
        }

        if (array_key_exists("MarketBankAccount",$param) and $param["MarketBankAccount"] !== null) {
            $this->MarketBankAccount = $param["MarketBankAccount"];
        }

        if (array_key_exists("MarketTel",$param) and $param["MarketTel"] !== null) {
            $this->MarketTel = $param["MarketTel"];
        }

        if (array_key_exists("VehicleTotalPriceCN",$param) and $param["VehicleTotalPriceCN"] !== null) {
            $this->VehicleTotalPriceCN = $param["VehicleTotalPriceCN"];
        }

        if (array_key_exists("InvoiceRiskLevel",$param) and $param["InvoiceRiskLevel"] !== null) {
            $this->InvoiceRiskLevel = $param["InvoiceRiskLevel"];
        }

        if (array_key_exists("CarType",$param) and $param["CarType"] !== null) {
            $this->CarType = $param["CarType"];
        }

        if (array_key_exists("PlateModel",$param) and $param["PlateModel"] !== null) {
            $this->PlateModel = $param["PlateModel"];
        }

        if (array_key_exists("AbandonerName",$param) and $param["AbandonerName"] !== null) {
            $this->AbandonerName = $param["AbandonerName"];
        }

        if (array_key_exists("AbandonDate",$param) and $param["AbandonDate"] !== null) {
            $this->AbandonDate = $param["AbandonDate"];
        }

        if (array_key_exists("IssuerType",$param) and $param["IssuerType"] !== null) {
            $this->IssuerType = $param["IssuerType"];
        }

        if (array_key_exists("IssuerTaxCode",$param) and $param["IssuerTaxCode"] !== null) {
            $this->IssuerTaxCode = $param["IssuerTaxCode"];
        }

        if (array_key_exists("CustomCode",$param) and $param["CustomCode"] !== null) {
            $this->CustomCode = $param["CustomCode"];
        }

        if (array_key_exists("TaxClassifyCode",$param) and $param["TaxClassifyCode"] !== null) {
            $this->TaxClassifyCode = $param["TaxClassifyCode"];
        }

        if (array_key_exists("ZeroTaxRateMark",$param) and $param["ZeroTaxRateMark"] !== null) {
            $this->ZeroTaxRateMark = $param["ZeroTaxRateMark"];
        }
    }
}
