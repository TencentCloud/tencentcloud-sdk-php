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
 * 电子发票返回值
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getPretaxAmount() 获取税前金额
 * @method void setPretaxAmount(string $PretaxAmount) 设置税前金额
 * @method string getTax() 获取合计税额
 * @method void setTax(string $Tax) 设置合计税额
 * @method string getTotal() 获取价税合计（小写）
 * @method void setTotal(string $Total) 设置价税合计（小写）
 * @method string getTotalCn() 获取价税合计（大写）
 * @method void setTotalCn(string $TotalCn) 设置价税合计（大写）
 * @method string getSeller() 获取销售方名称
 * @method void setSeller(string $Seller) 设置销售方名称
 * @method string getSellerTaxID() 获取销售方纳税人识别号
 * @method void setSellerTaxID(string $SellerTaxID) 设置销售方纳税人识别号
 * @method string getBuyer() 获取购买方名称
 * @method void setBuyer(string $Buyer) 设置购买方名称
 * @method string getBuyerTaxID() 获取购买方纳税人识别号
 * @method void setBuyerTaxID(string $BuyerTaxID) 设置购买方纳税人识别号
 * @method string getIssuer() 获取开票人
 * @method void setIssuer(string $Issuer) 设置开票人
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getSubTotal() 获取小计金额
 * @method void setSubTotal(string $SubTotal) 设置小计金额
 * @method string getSubTax() 获取小计税额
 * @method void setSubTax(string $SubTax) 设置小计税额
 * @method array getVatElectronicItems() 获取电子发票详细条目信息
 * @method void setVatElectronicItems(array $VatElectronicItems) 设置电子发票详细条目信息
 */
class VatElectronicInfo extends AbstractModel
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
     * @var string 开票日期
     */
    public $Date;

    /**
     * @var string 税前金额
     */
    public $PretaxAmount;

    /**
     * @var string 合计税额
     */
    public $Tax;

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
     * @var string 开票人
     */
    public $Issuer;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 小计金额
     */
    public $SubTotal;

    /**
     * @var string 小计税额
     */
    public $SubTax;

    /**
     * @var array 电子发票详细条目信息
     */
    public $VatElectronicItems;

    /**
     * @param string $Title 发票名称
     * @param string $Number 发票号码
     * @param string $Date 开票日期
     * @param string $PretaxAmount 税前金额
     * @param string $Tax 合计税额
     * @param string $Total 价税合计（小写）
     * @param string $TotalCn 价税合计（大写）
     * @param string $Seller 销售方名称
     * @param string $SellerTaxID 销售方纳税人识别号
     * @param string $Buyer 购买方名称
     * @param string $BuyerTaxID 购买方纳税人识别号
     * @param string $Issuer 开票人
     * @param string $Remark 备注
     * @param string $SubTotal 小计金额
     * @param string $SubTax 小计税额
     * @param array $VatElectronicItems 电子发票详细条目信息
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

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("PretaxAmount",$param) and $param["PretaxAmount"] !== null) {
            $this->PretaxAmount = $param["PretaxAmount"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
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

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("BuyerTaxID",$param) and $param["BuyerTaxID"] !== null) {
            $this->BuyerTaxID = $param["BuyerTaxID"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SubTotal",$param) and $param["SubTotal"] !== null) {
            $this->SubTotal = $param["SubTotal"];
        }

        if (array_key_exists("SubTax",$param) and $param["SubTax"] !== null) {
            $this->SubTax = $param["SubTax"];
        }

        if (array_key_exists("VatElectronicItems",$param) and $param["VatElectronicItems"] !== null) {
            $this->VatElectronicItems = [];
            foreach ($param["VatElectronicItems"] as $key => $value){
                $obj = new VatElectronicItemInfo();
                $obj->deserialize($value);
                array_push($this->VatElectronicItems, $obj);
            }
        }
    }
}
