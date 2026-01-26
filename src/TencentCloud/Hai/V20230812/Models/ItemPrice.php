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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐价格
 *
 * @method float getUnitPrice() 获取原单价，元
 * @method void setUnitPrice(float $UnitPrice) 设置原单价，元
 * @method float getDiscountUnitPrice() 获取折扣后单价，元
 * @method void setDiscountUnitPrice(float $DiscountUnitPrice) 设置折扣后单价，元
 * @method float getDiscount() 获取折扣
 * @method void setDiscount(float $Discount) 设置折扣
 * @method string getChargeUnit() 获取单位：时/月

 * @method void setChargeUnit(string $ChargeUnit) 设置单位：时/月

 * @method integer getAmount() 获取商品数量
 * @method void setAmount(integer $Amount) 设置商品数量
 * @method float getOriginPrice() 获取原价
 * @method void setOriginPrice(float $OriginPrice) 设置原价
 * @method float getDiscountPrice() 获取折扣价
 * @method void setDiscountPrice(float $DiscountPrice) 设置折扣价
 */
class ItemPrice extends AbstractModel
{
    /**
     * @var float 原单价，元
     */
    public $UnitPrice;

    /**
     * @var float 折扣后单价，元
     */
    public $DiscountUnitPrice;

    /**
     * @var float 折扣
     */
    public $Discount;

    /**
     * @var string 单位：时/月

     */
    public $ChargeUnit;

    /**
     * @var integer 商品数量
     */
    public $Amount;

    /**
     * @var float 原价
     */
    public $OriginPrice;

    /**
     * @var float 折扣价
     */
    public $DiscountPrice;

    /**
     * @param float $UnitPrice 原单价，元
     * @param float $DiscountUnitPrice 折扣后单价，元
     * @param float $Discount 折扣
     * @param string $ChargeUnit 单位：时/月

     * @param integer $Amount 商品数量
     * @param float $OriginPrice 原价
     * @param float $DiscountPrice 折扣价
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
        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("DiscountUnitPrice",$param) and $param["DiscountUnitPrice"] !== null) {
            $this->DiscountUnitPrice = $param["DiscountUnitPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("OriginPrice",$param) and $param["OriginPrice"] !== null) {
            $this->OriginPrice = $param["OriginPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }
    }
}
