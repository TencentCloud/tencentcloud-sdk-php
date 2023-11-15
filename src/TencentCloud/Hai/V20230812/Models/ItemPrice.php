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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐价格
 *
 * @method float getUnitPrice() 获取原单价
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPrice(float $UnitPrice) 设置原单价
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscountUnitPrice() 获取折扣后单价
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscountUnitPrice(float $DiscountUnitPrice) 设置折扣后单价
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscount() 获取折扣
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscount(float $Discount) 设置折扣
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeUnit() 获取单位：时

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeUnit(string $ChargeUnit) 设置单位：时

注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAmount() 获取商品数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmount(integer $Amount) 设置商品数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class ItemPrice extends AbstractModel
{
    /**
     * @var float 原单价
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPrice;

    /**
     * @var float 折扣后单价
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscountUnitPrice;

    /**
     * @var float 折扣
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Discount;

    /**
     * @var string 单位：时

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeUnit;

    /**
     * @var integer 商品数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Amount;

    /**
     * @param float $UnitPrice 原单价
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DiscountUnitPrice 折扣后单价
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Discount 折扣
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeUnit 单位：时

注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Amount 商品数量
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
    }
}
