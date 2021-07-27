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
namespace TencentCloud\Market\V20191010\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 线下产品订单
 *
 * @method string getProductCode() 获取产品标签
 * @method void setProductCode(string $ProductCode) 设置产品标签
 * @method string getSubProductCode() 获取子产品标签
 * @method void setSubProductCode(string $SubProductCode) 设置子产品标签
 * @method string getBillingItemCode() 获取计费项
 * @method void setBillingItemCode(string $BillingItemCode) 设置计费项
 * @method string getSubBillingItemCode() 获取计费细项
 * @method void setSubBillingItemCode(string $SubBillingItemCode) 设置计费细项
 * @method float getUnitPrice() 获取单价（单位：分）
 * @method void setUnitPrice(float $UnitPrice) 设置单价（单位：分）
 * @method float getDosage() 获取用量
 * @method void setDosage(float $Dosage) 设置用量
 * @method string getDosageUnit() 获取用量单位
 * @method void setDosageUnit(string $DosageUnit) 设置用量单位
 * @method float getTimeSpan() 获取商品的时间大小，当TimeUnit 是package时，timeSpan 只能传1。当TimeUnit是year；month；day；hour；minute；second，传具体时长。
 * @method void setTimeSpan(float $TimeSpan) 设置商品的时间大小，当TimeUnit 是package时，timeSpan 只能传1。当TimeUnit是year；month；day；hour；minute；second，传具体时长。
 * @method string getTimeUnit() 获取商品的时间单位：year:年；month:月；day:日；hour:小时；minute:分钟；second:秒; package:与价格无关,一次性购买的产品传package
 * @method void setTimeUnit(string $TimeUnit) 设置商品的时间单位：year:年；month:月；day:日；hour:小时；minute:分钟；second:秒; package:与价格无关,一次性购买的产品传package
 * @method integer getOriginPrice() 获取原价 （单位：分）OriginPrice=round(UnitPrice * Dosage * TimeSpan)
 * @method void setOriginPrice(integer $OriginPrice) 设置原价 （单位：分）OriginPrice=round(UnitPrice * Dosage * TimeSpan)
 * @method float getDiscount() 获取折扣百分比，传入0-100的值
 * @method void setDiscount(float $Discount) 设置折扣百分比，传入0-100的值
 * @method integer getFee() 获取最终扣费金额（单位：分）Fee=round(OriginPrice*Discount/100)
 * @method void setFee(integer $Fee) 设置最终扣费金额（单位：分）Fee=round(OriginPrice*Discount/100)
 */
class OfflineProductDeal extends AbstractModel
{
    /**
     * @var string 产品标签
     */
    public $ProductCode;

    /**
     * @var string 子产品标签
     */
    public $SubProductCode;

    /**
     * @var string 计费项
     */
    public $BillingItemCode;

    /**
     * @var string 计费细项
     */
    public $SubBillingItemCode;

    /**
     * @var float 单价（单位：分）
     */
    public $UnitPrice;

    /**
     * @var float 用量
     */
    public $Dosage;

    /**
     * @var string 用量单位
     */
    public $DosageUnit;

    /**
     * @var float 商品的时间大小，当TimeUnit 是package时，timeSpan 只能传1。当TimeUnit是year；month；day；hour；minute；second，传具体时长。
     */
    public $TimeSpan;

    /**
     * @var string 商品的时间单位：year:年；month:月；day:日；hour:小时；minute:分钟；second:秒; package:与价格无关,一次性购买的产品传package
     */
    public $TimeUnit;

    /**
     * @var integer 原价 （单位：分）OriginPrice=round(UnitPrice * Dosage * TimeSpan)
     */
    public $OriginPrice;

    /**
     * @var float 折扣百分比，传入0-100的值
     */
    public $Discount;

    /**
     * @var integer 最终扣费金额（单位：分）Fee=round(OriginPrice*Discount/100)
     */
    public $Fee;

    /**
     * @param string $ProductCode 产品标签
     * @param string $SubProductCode 子产品标签
     * @param string $BillingItemCode 计费项
     * @param string $SubBillingItemCode 计费细项
     * @param float $UnitPrice 单价（单位：分）
     * @param float $Dosage 用量
     * @param string $DosageUnit 用量单位
     * @param float $TimeSpan 商品的时间大小，当TimeUnit 是package时，timeSpan 只能传1。当TimeUnit是year；month；day；hour；minute；second，传具体时长。
     * @param string $TimeUnit 商品的时间单位：year:年；month:月；day:日；hour:小时；minute:分钟；second:秒; package:与价格无关,一次性购买的产品传package
     * @param integer $OriginPrice 原价 （单位：分）OriginPrice=round(UnitPrice * Dosage * TimeSpan)
     * @param float $Discount 折扣百分比，传入0-100的值
     * @param integer $Fee 最终扣费金额（单位：分）Fee=round(OriginPrice*Discount/100)
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
        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("BillingItemCode",$param) and $param["BillingItemCode"] !== null) {
            $this->BillingItemCode = $param["BillingItemCode"];
        }

        if (array_key_exists("SubBillingItemCode",$param) and $param["SubBillingItemCode"] !== null) {
            $this->SubBillingItemCode = $param["SubBillingItemCode"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("Dosage",$param) and $param["Dosage"] !== null) {
            $this->Dosage = $param["Dosage"];
        }

        if (array_key_exists("DosageUnit",$param) and $param["DosageUnit"] !== null) {
            $this->DosageUnit = $param["DosageUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("OriginPrice",$param) and $param["OriginPrice"] !== null) {
            $this->OriginPrice = $param["OriginPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("Fee",$param) and $param["Fee"] !== null) {
            $this->Fee = $param["Fee"];
        }
    }
}
