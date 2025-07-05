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
 * 财务票据查验返回结果
 *
 * @method string getCode() 获取票据代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置票据代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNumber() 获取票据号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumber(string $Number) 设置票据号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuyerTaxID() 获取缴款人纳税识别号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyerTaxID(string $BuyerTaxID) 设置缴款人纳税识别号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckCode() 获取校验码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckCode(string $CheckCode) 设置校验码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuyer() 获取缴款人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyer(string $Buyer) 设置缴款人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDate() 获取开票日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置开票日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSellerCompany() 获取收款单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSellerCompany(string $SellerCompany) 设置收款单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReviewer() 获取复核人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReviewer(string $Reviewer) 设置复核人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeller() 获取收款人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeller(string $Seller) 设置收款人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取票据名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置票据名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotal() 获取金额合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(string $Total) 设置金额合计
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalCn() 获取金额合计中文大写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCn(string $TotalCn) 设置金额合计中文大写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRushRedStateCode() 获取冲红
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRushRedStateCode(string $RushRedStateCode) 设置冲红
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRushRedDate() 获取冲红日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRushRedDate(string $RushRedDate) 设置冲红日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRushRedTime() 获取冲红时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRushRedTime(string $RushRedTime) 设置冲红时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRushRedReason() 获取冲红原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRushRedReason(string $RushRedReason) 设置冲红原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFinancialBillItems() 获取项目明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinancialBillItems(array $FinancialBillItems) 设置项目明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFinancialBillItemDetails() 获取项目清单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinancialBillItemDetails(array $FinancialBillItemDetails) 设置项目清单
注意：此字段可能返回 null，表示取不到有效值。
 */
class FinancialBill extends AbstractModel
{
    /**
     * @var string 票据代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 票据号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Number;

    /**
     * @var string 缴款人纳税识别号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuyerTaxID;

    /**
     * @var string 校验码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckCode;

    /**
     * @var string 缴款人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Buyer;

    /**
     * @var string 开票日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var string 收款单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SellerCompany;

    /**
     * @var string 复核人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reviewer;

    /**
     * @var string 收款人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seller;

    /**
     * @var string 票据名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 金额合计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var string 金额合计中文大写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCn;

    /**
     * @var string 冲红
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RushRedStateCode;

    /**
     * @var string 冲红日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RushRedDate;

    /**
     * @var string 冲红时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RushRedTime;

    /**
     * @var string 冲红原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RushRedReason;

    /**
     * @var array 项目明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinancialBillItems;

    /**
     * @var array 项目清单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinancialBillItemDetails;

    /**
     * @param string $Code 票据代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Number 票据号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuyerTaxID 缴款人纳税识别号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckCode 校验码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Buyer 缴款人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Date 开票日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SellerCompany 收款单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reviewer 复核人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Seller 收款人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 票据名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Total 金额合计
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalCn 金额合计中文大写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RushRedStateCode 冲红
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RushRedDate 冲红日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RushRedTime 冲红时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RushRedReason 冲红原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FinancialBillItems 项目明细
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FinancialBillItemDetails 项目清单
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("BuyerTaxID",$param) and $param["BuyerTaxID"] !== null) {
            $this->BuyerTaxID = $param["BuyerTaxID"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("Buyer",$param) and $param["Buyer"] !== null) {
            $this->Buyer = $param["Buyer"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("SellerCompany",$param) and $param["SellerCompany"] !== null) {
            $this->SellerCompany = $param["SellerCompany"];
        }

        if (array_key_exists("Reviewer",$param) and $param["Reviewer"] !== null) {
            $this->Reviewer = $param["Reviewer"];
        }

        if (array_key_exists("Seller",$param) and $param["Seller"] !== null) {
            $this->Seller = $param["Seller"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("RushRedStateCode",$param) and $param["RushRedStateCode"] !== null) {
            $this->RushRedStateCode = $param["RushRedStateCode"];
        }

        if (array_key_exists("RushRedDate",$param) and $param["RushRedDate"] !== null) {
            $this->RushRedDate = $param["RushRedDate"];
        }

        if (array_key_exists("RushRedTime",$param) and $param["RushRedTime"] !== null) {
            $this->RushRedTime = $param["RushRedTime"];
        }

        if (array_key_exists("RushRedReason",$param) and $param["RushRedReason"] !== null) {
            $this->RushRedReason = $param["RushRedReason"];
        }

        if (array_key_exists("FinancialBillItems",$param) and $param["FinancialBillItems"] !== null) {
            $this->FinancialBillItems = [];
            foreach ($param["FinancialBillItems"] as $key => $value){
                $obj = new FinancialBillItem();
                $obj->deserialize($value);
                array_push($this->FinancialBillItems, $obj);
            }
        }

        if (array_key_exists("FinancialBillItemDetails",$param) and $param["FinancialBillItemDetails"] !== null) {
            $this->FinancialBillItemDetails = [];
            foreach ($param["FinancialBillItemDetails"] as $key => $value){
                $obj = new FinancialBillItemDetails();
                $obj->deserialize($value);
                array_push($this->FinancialBillItemDetails, $obj);
            }
        }
    }
}
