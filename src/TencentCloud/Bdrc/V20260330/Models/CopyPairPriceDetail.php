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
 * 复制对价格明细项
 *
 * @method string getPriceName() 获取计费项目标识名称。取值：InstanceCount（容灾CVM实例数）、InstanceDataCapacity（容灾CVM实例数据量）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriceName(string $PriceName) 设置计费项目标识名称。取值：InstanceCount（容灾CVM实例数）、InstanceDataCapacity（容灾CVM实例数据量）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPriceTitle() 获取计费项目展示名称（跟随语言环境翻译）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriceTitle(string $PriceTitle) 设置计费项目展示名称（跟随语言环境翻译）
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPrice() 获取该计费项每小时原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPrice(float $UnitPrice) 设置该计费项每小时原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPriceDiscount() 获取该计费项每小时折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) 设置该计费项每小时折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiscount() 获取该计费项的折扣，100 表示无折扣
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscount(integer $Discount) 设置该计费项的折扣，100 表示无折扣
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeUnit() 获取计价单元，固定为 HOUR
 * @method void setChargeUnit(string $ChargeUnit) 设置计价单元，固定为 HOUR
 */
class CopyPairPriceDetail extends AbstractModel
{
    /**
     * @var string 计费项目标识名称。取值：InstanceCount（容灾CVM实例数）、InstanceDataCapacity（容灾CVM实例数据量）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PriceName;

    /**
     * @var string 计费项目展示名称（跟随语言环境翻译）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PriceTitle;

    /**
     * @var float 该计费项每小时原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPrice;

    /**
     * @var float 该计费项每小时折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscount;

    /**
     * @var integer 该计费项的折扣，100 表示无折扣
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Discount;

    /**
     * @var string 计价单元，固定为 HOUR
     */
    public $ChargeUnit;

    /**
     * @param string $PriceName 计费项目标识名称。取值：InstanceCount（容灾CVM实例数）、InstanceDataCapacity（容灾CVM实例数据量）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PriceTitle 计费项目展示名称（跟随语言环境翻译）
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPrice 该计费项每小时原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPriceDiscount 该计费项每小时折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Discount 该计费项的折扣，100 表示无折扣
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeUnit 计价单元，固定为 HOUR
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
        if (array_key_exists("PriceName",$param) and $param["PriceName"] !== null) {
            $this->PriceName = $param["PriceName"];
        }

        if (array_key_exists("PriceTitle",$param) and $param["PriceTitle"] !== null) {
            $this->PriceTitle = $param["PriceTitle"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }
    }
}
