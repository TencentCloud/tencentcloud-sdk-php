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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了后付费计费项的价格信息
 *
 * @method float getDiscount() 获取折扣，如20.0代表2折。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscount(float $Discount) 设置折扣，如20.0代表2折。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPrice() 获取单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPrice(float $UnitPrice) 设置单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPriceDiscount() 获取折扣单价，单位:元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) 设置折扣单价，单位:元。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PostPayPriceInfo extends AbstractModel
{
    /**
     * @var float 折扣，如20.0代表2折。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Discount;

    /**
     * @var float 单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPrice;

    /**
     * @var float 折扣单价，单位:元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscount;

    /**
     * @param float $Discount 折扣，如20.0代表2折。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPrice 单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPriceDiscount 折扣单价，单位:元。
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
        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }
    }
}
