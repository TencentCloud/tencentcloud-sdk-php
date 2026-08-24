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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 复制对价格信息
 *
 * @method float getUnitPrice() 获取后付费每小时原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPrice(float $UnitPrice) 设置后付费每小时原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnitPriceHigh() 获取高精度后付费每小时原价，单位：元（字符串形式，避免精度丢失）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceHigh(string $UnitPriceHigh) 设置高精度后付费每小时原价，单位：元（字符串形式，避免精度丢失）
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPriceDiscount() 获取后付费每小时折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) 设置后付费每小时折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnitPriceDiscountHigh() 获取高精度后付费每小时折扣价，单位：元（字符串形式，避免精度丢失）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscountHigh(string $UnitPriceDiscountHigh) 设置高精度后付费每小时折扣价，单位：元（字符串形式，避免精度丢失）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiscount() 获取折扣，100 表示无折扣，80 表示 8 折
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscount(integer $Discount) 设置折扣，100 表示无折扣，80 表示 8 折
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeUnit() 获取计价单元，固定为 HOUR（按小时计费）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeUnit(string $ChargeUnit) 设置计价单元，固定为 HOUR（按小时计费）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetailPrices() 获取计费项目明细列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailPrices(array $DetailPrices) 设置计费项目明细列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class CopyPairPrice extends AbstractModel
{
    /**
     * @var float 后付费每小时原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPrice;

    /**
     * @var string 高精度后付费每小时原价，单位：元（字符串形式，避免精度丢失）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceHigh;

    /**
     * @var float 后付费每小时折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscount;

    /**
     * @var string 高精度后付费每小时折扣价，单位：元（字符串形式，避免精度丢失）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscountHigh;

    /**
     * @var integer 折扣，100 表示无折扣，80 表示 8 折
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Discount;

    /**
     * @var string 计价单元，固定为 HOUR（按小时计费）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeUnit;

    /**
     * @var array 计费项目明细列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailPrices;

    /**
     * @param float $UnitPrice 后付费每小时原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnitPriceHigh 高精度后付费每小时原价，单位：元（字符串形式，避免精度丢失）
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPriceDiscount 后付费每小时折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnitPriceDiscountHigh 高精度后付费每小时折扣价，单位：元（字符串形式，避免精度丢失）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Discount 折扣，100 表示无折扣，80 表示 8 折
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeUnit 计价单元，固定为 HOUR（按小时计费）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DetailPrices 计费项目明细列表
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

        if (array_key_exists("UnitPriceHigh",$param) and $param["UnitPriceHigh"] !== null) {
            $this->UnitPriceHigh = $param["UnitPriceHigh"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("UnitPriceDiscountHigh",$param) and $param["UnitPriceDiscountHigh"] !== null) {
            $this->UnitPriceDiscountHigh = $param["UnitPriceDiscountHigh"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("DetailPrices",$param) and $param["DetailPrices"] !== null) {
            $this->DetailPrices = [];
            foreach ($param["DetailPrices"] as $key => $value){
                $obj = new CopyPairPriceDetail();
                $obj->deserialize($value);
                array_push($this->DetailPrices, $obj);
            }
        }
    }
}
