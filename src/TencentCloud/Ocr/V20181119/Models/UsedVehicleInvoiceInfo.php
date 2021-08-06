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
 * 二手车销售统一发票信息
 *
 * @method string getTaxBureau() 获取所属税局
 * @method void setTaxBureau(string $TaxBureau) 设置所属税局
 * @method string getBuyer() 获取买方单位/个人
 * @method void setBuyer(string $Buyer) 设置买方单位/个人
 * @method string getBuyerNo() 获取买方单位代码/身份证号码
 * @method void setBuyerNo(string $BuyerNo) 设置买方单位代码/身份证号码
 * @method string getBuyerAddress() 获取买方单位/个人地址
 * @method void setBuyerAddress(string $BuyerAddress) 设置买方单位/个人地址
 * @method string getBuyerTel() 获取买方单位电话
 * @method void setBuyerTel(string $BuyerTel) 设置买方单位电话
 * @method string getSeller() 获取卖方单位/个人
 * @method void setSeller(string $Seller) 设置卖方单位/个人
 * @method string getSellerNo() 获取卖方单位代码/身份证号码
 * @method void setSellerNo(string $SellerNo) 设置卖方单位代码/身份证号码
 * @method string getSellerAddress() 获取卖方单位/个人地址
 * @method void setSellerAddress(string $SellerAddress) 设置卖方单位/个人地址
 * @method string getSellerTel() 获取卖方单位电话
 * @method void setSellerTel(string $SellerTel) 设置卖方单位电话
 * @method string getVehicleLicenseNo() 获取车牌照号
 * @method void setVehicleLicenseNo(string $VehicleLicenseNo) 设置车牌照号
 * @method string getRegisterNo() 获取登记证号
 * @method void setRegisterNo(string $RegisterNo) 设置登记证号
 * @method string getVehicleIdentifyNo() 获取车架号/车辆识别代码
 * @method void setVehicleIdentifyNo(string $VehicleIdentifyNo) 设置车架号/车辆识别代码
 * @method string getManagementOffice() 获取转入地车辆管理所名称
 * @method void setManagementOffice(string $ManagementOffice) 设置转入地车辆管理所名称
 * @method string getVehicleTotalPrice() 获取车价合计
 * @method void setVehicleTotalPrice(string $VehicleTotalPrice) 设置车价合计
 * @method string getAuctioneer() 获取经营、拍卖单位
 * @method void setAuctioneer(string $Auctioneer) 设置经营、拍卖单位
 * @method string getAuctioneerAddress() 获取经营、拍卖单位地址
 * @method void setAuctioneerAddress(string $AuctioneerAddress) 设置经营、拍卖单位地址
 * @method string getAuctioneerTaxpayerNum() 获取经营、拍卖单位纳税人识别号
 * @method void setAuctioneerTaxpayerNum(string $AuctioneerTaxpayerNum) 设置经营、拍卖单位纳税人识别号
 * @method string getAuctioneerBankAccount() 获取经营、拍卖单位开户银行、账号
 * @method void setAuctioneerBankAccount(string $AuctioneerBankAccount) 设置经营、拍卖单位开户银行、账号
 * @method string getAuctioneerTel() 获取经营、拍卖单位电话
 * @method void setAuctioneerTel(string $AuctioneerTel) 设置经营、拍卖单位电话
 * @method string getMarket() 获取二手车市场
 * @method void setMarket(string $Market) 设置二手车市场
 * @method string getMarketTaxpayerNum() 获取二手车市场纳税人识别号
 * @method void setMarketTaxpayerNum(string $MarketTaxpayerNum) 设置二手车市场纳税人识别号
 * @method string getMarketAddress() 获取二手车市场地址
 * @method void setMarketAddress(string $MarketAddress) 设置二手车市场地址
 * @method string getMarketBankAccount() 获取二手车市场开户银行账号
 * @method void setMarketBankAccount(string $MarketBankAccount) 设置二手车市场开户银行账号
 * @method string getMarketTel() 获取二手车市场电话
 * @method void setMarketTel(string $MarketTel) 设置二手车市场电话
 */
class UsedVehicleInvoiceInfo extends AbstractModel
{
    /**
     * @var string 所属税局
     */
    public $TaxBureau;

    /**
     * @var string 买方单位/个人
     */
    public $Buyer;

    /**
     * @var string 买方单位代码/身份证号码
     */
    public $BuyerNo;

    /**
     * @var string 买方单位/个人地址
     */
    public $BuyerAddress;

    /**
     * @var string 买方单位电话
     */
    public $BuyerTel;

    /**
     * @var string 卖方单位/个人
     */
    public $Seller;

    /**
     * @var string 卖方单位代码/身份证号码
     */
    public $SellerNo;

    /**
     * @var string 卖方单位/个人地址
     */
    public $SellerAddress;

    /**
     * @var string 卖方单位电话
     */
    public $SellerTel;

    /**
     * @var string 车牌照号
     */
    public $VehicleLicenseNo;

    /**
     * @var string 登记证号
     */
    public $RegisterNo;

    /**
     * @var string 车架号/车辆识别代码
     */
    public $VehicleIdentifyNo;

    /**
     * @var string 转入地车辆管理所名称
     */
    public $ManagementOffice;

    /**
     * @var string 车价合计
     */
    public $VehicleTotalPrice;

    /**
     * @var string 经营、拍卖单位
     */
    public $Auctioneer;

    /**
     * @var string 经营、拍卖单位地址
     */
    public $AuctioneerAddress;

    /**
     * @var string 经营、拍卖单位纳税人识别号
     */
    public $AuctioneerTaxpayerNum;

    /**
     * @var string 经营、拍卖单位开户银行、账号
     */
    public $AuctioneerBankAccount;

    /**
     * @var string 经营、拍卖单位电话
     */
    public $AuctioneerTel;

    /**
     * @var string 二手车市场
     */
    public $Market;

    /**
     * @var string 二手车市场纳税人识别号
     */
    public $MarketTaxpayerNum;

    /**
     * @var string 二手车市场地址
     */
    public $MarketAddress;

    /**
     * @var string 二手车市场开户银行账号
     */
    public $MarketBankAccount;

    /**
     * @var string 二手车市场电话
     */
    public $MarketTel;

    /**
     * @param string $TaxBureau 所属税局
     * @param string $Buyer 买方单位/个人
     * @param string $BuyerNo 买方单位代码/身份证号码
     * @param string $BuyerAddress 买方单位/个人地址
     * @param string $BuyerTel 买方单位电话
     * @param string $Seller 卖方单位/个人
     * @param string $SellerNo 卖方单位代码/身份证号码
     * @param string $SellerAddress 卖方单位/个人地址
     * @param string $SellerTel 卖方单位电话
     * @param string $VehicleLicenseNo 车牌照号
     * @param string $RegisterNo 登记证号
     * @param string $VehicleIdentifyNo 车架号/车辆识别代码
     * @param string $ManagementOffice 转入地车辆管理所名称
     * @param string $VehicleTotalPrice 车价合计
     * @param string $Auctioneer 经营、拍卖单位
     * @param string $AuctioneerAddress 经营、拍卖单位地址
     * @param string $AuctioneerTaxpayerNum 经营、拍卖单位纳税人识别号
     * @param string $AuctioneerBankAccount 经营、拍卖单位开户银行、账号
     * @param string $AuctioneerTel 经营、拍卖单位电话
     * @param string $Market 二手车市场
     * @param string $MarketTaxpayerNum 二手车市场纳税人识别号
     * @param string $MarketAddress 二手车市场地址
     * @param string $MarketBankAccount 二手车市场开户银行账号
     * @param string $MarketTel 二手车市场电话
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
    }
}
