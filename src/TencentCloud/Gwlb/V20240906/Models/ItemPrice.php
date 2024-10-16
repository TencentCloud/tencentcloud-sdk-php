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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了单项的价格信息
 *
 * @method float getUnitPrice() 获取后付费单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPrice(float $UnitPrice) 设置后付费单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeUnit() 获取后付费计价单元，可取值范围： HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：实例按小时后付费（POSTPAID_BY_HOUR）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeUnit(string $ChargeUnit) 设置后付费计价单元，可取值范围： HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：实例按小时后付费（POSTPAID_BY_HOUR）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getOriginalPrice() 获取预支费用的原价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalPrice(float $OriginalPrice) 设置预支费用的原价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscountPrice() 获取预支费用的折扣价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscountPrice(float $DiscountPrice) 设置预支费用的折扣价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPriceDiscount() 获取后付费的折扣单价，单位:元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) 设置后付费的折扣单价，单位:元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscount() 获取折扣，如20.0代表2折。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscount(float $Discount) 设置折扣，如20.0代表2折。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ItemPrice extends AbstractModel
{
    /**
     * @var float 后付费单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPrice;

    /**
     * @var string 后付费计价单元，可取值范围： HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：实例按小时后付费（POSTPAID_BY_HOUR）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeUnit;

    /**
     * @var float 预支费用的原价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalPrice;

    /**
     * @var float 预支费用的折扣价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscountPrice;

    /**
     * @var float 后付费的折扣单价，单位:元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscount;

    /**
     * @var float 折扣，如20.0代表2折。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Discount;

    /**
     * @param float $UnitPrice 后付费单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeUnit 后付费计价单元，可取值范围： HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：实例按小时后付费（POSTPAID_BY_HOUR）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $OriginalPrice 预支费用的原价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DiscountPrice 预支费用的折扣价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPriceDiscount 后付费的折扣单价，单位:元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Discount 折扣，如20.0代表2折。
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

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }
    }
}
