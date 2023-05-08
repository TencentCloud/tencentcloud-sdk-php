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
 * 增值税普通发票(卷票)
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method string getCode() 获取发票代码
 * @method void setCode(string $Code) 设置发票代码
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getNumberConfirm() 获取机打发票号码
 * @method void setNumberConfirm(string $NumberConfirm) 设置机打发票号码
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getCheckCode() 获取校验码
 * @method void setCheckCode(string $CheckCode) 设置校验码
 * @method string getSeller() 获取销售方名称
 * @method void setSeller(string $Seller) 设置销售方名称
 * @method string getSellerTaxID() 获取销售方纳税人识别号
 * @method void setSellerTaxID(string $SellerTaxID) 设置销售方纳税人识别号
 * @method string getBuyer() 获取购买方名称
 * @method void setBuyer(string $Buyer) 设置购买方名称
 * @method string getBuyerTaxID() 获取购买方纳税人识别号
 * @method void setBuyerTaxID(string $BuyerTaxID) 设置购买方纳税人识别号
 * @method string getCategory() 获取种类
 * @method void setCategory(string $Category) 设置种类
 * @method string getTotal() 获取价税合计（小写）
 * @method void setTotal(string $Total) 设置价税合计（小写）
 * @method string getTotalCn() 获取价税合计（大写）
 * @method void setTotalCn(string $TotalCn) 设置价税合计（大写）
 * @method string getKind() 获取发票消费类型
 * @method void setKind(string $Kind) 设置发票消费类型
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取市
 * @method void setCity(string $City) 设置市
 * @method integer getCompanySealMark() 获取是否有公司印章（0：没有，1：有）
 * @method void setCompanySealMark(integer $CompanySealMark) 设置是否有公司印章（0：没有，1：有）
 * @method integer getQRCodeMark() 获取是否存在二维码（1：有，0：无）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（1：有，0：无）
 * @method string getServiceName() 获取服务类型
 * @method void setServiceName(string $ServiceName) 设置服务类型
 * @method string getCompanySealContent() 获取公司印章内容
 * @method void setCompanySealContent(string $CompanySealContent) 设置公司印章内容
 * @method string getTaxSealContent() 获取税务局章内容
 * @method void setTaxSealContent(string $TaxSealContent) 设置税务局章内容
 * @method array getVatRollItems() 获取条目
 * @method void setVatRollItems(array $VatRollItems) 设置条目
 */
class VatInvoiceRoll extends AbstractModel
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
     * @var string 机打发票号码
     */
    public $NumberConfirm;

    /**
     * @var string 开票日期
     */
    public $Date;

    /**
     * @var string 校验码
     */
    public $CheckCode;

    /**
     * @var string 销售方名称
     */
    public $Seller;

    /**
     * @var string 销售方纳税人识别号
     */
    public $SellerTaxID;

    /**
     * @var string 购买方名称
     */
    public $Buyer;

    /**
     * @var string 购买方纳税人识别号
     */
    public $BuyerTaxID;

    /**
     * @var string 种类
     */
    public $Category;

    /**
     * @var string 价税合计（小写）
     */
    public $Total;

    /**
     * @var string 价税合计（大写）
     */
    public $TotalCn;

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
     * @var integer 是否存在二维码（1：有，0：无）
     */
    public $QRCodeMark;

    /**
     * @var string 服务类型
     */
    public $ServiceName;

    /**
     * @var string 公司印章内容
     */
    public $CompanySealContent;

    /**
     * @var string 税务局章内容
     */
    public $TaxSealContent;

    /**
     * @var array 条目
     */
    public $VatRollItems;

    /**
     * @param string $Title 发票名称
     * @param string $Code 发票代码
     * @param string $Number 发票号码
     * @param string $NumberConfirm 机打发票号码
     * @param string $Date 开票日期
     * @param string $CheckCode 校验码
     * @param string $Seller 销售方名称
     * @param string $SellerTaxID 销售方纳税人识别号
     * @param string $Buyer 购买方名称
     * @param string $BuyerTaxID 购买方纳税人识别号
     * @param string $Category 种类
     * @param string $Total 价税合计（小写）
     * @param string $TotalCn 价税合计（大写）
     * @param string $Kind 发票消费类型
     * @param string $Province 省
     * @param string $City 市
     * @param integer $CompanySealMark 是否有公司印章（0：没有，1：有）
     * @param integer $QRCodeMark 是否存在二维码（1：有，0：无）
     * @param string $ServiceName 服务类型
     * @param string $CompanySealContent 公司印章内容
     * @param string $TaxSealContent 税务局章内容
     * @param array $VatRollItems 条目
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

        if (array_key_exists("NumberConfirm",$param) and $param["NumberConfirm"] !== null) {
            $this->NumberConfirm = $param["NumberConfirm"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("SellerTaxID",$param) and $param["SellerTaxID"] !== null) {
            $this->SellerTaxID = $param["SellerTaxID"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("BuyerTaxID",$param) and $param["BuyerTaxID"] !== null) {
            $this->BuyerTaxID = $param["BuyerTaxID"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
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

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("CompanySealContent",$param) and $param["CompanySealContent"] !== null) {
            $this->CompanySealContent = $param["CompanySealContent"];
        }

        if (array_key_exists("TaxSealContent",$param) and $param["TaxSealContent"] !== null) {
            $this->TaxSealContent = $param["TaxSealContent"];
        }

        if (array_key_exists("VatRollItems",$param) and $param["VatRollItems"] !== null) {
            $this->VatRollItems = [];
            foreach ($param["VatRollItems"] as $key => $value){
                $obj = new VatRollItem();
                $obj->deserialize($value);
                array_push($this->VatRollItems, $obj);
            }
        }
    }
}
