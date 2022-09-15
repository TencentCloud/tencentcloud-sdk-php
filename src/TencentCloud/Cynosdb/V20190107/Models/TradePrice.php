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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费询价结果
 *
 * @method integer getTotalPrice() 获取预付费模式下资源总价，不包含优惠，单位:分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPrice(integer $TotalPrice) 设置预付费模式下资源总价，不包含优惠，单位:分
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscount() 获取总的折扣，100表示100%不打折
 * @method void setDiscount(float $Discount) 设置总的折扣，100表示100%不打折
 * @method integer getTotalPriceDiscount() 获取预付费模式下的优惠后总价, 单位: 分,例如用户享有折扣 =TotalPrice × Discount
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPriceDiscount(integer $TotalPriceDiscount) 设置预付费模式下的优惠后总价, 单位: 分,例如用户享有折扣 =TotalPrice × Discount
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnitPrice() 获取后付费模式下的单位资源价格，不包含优惠，单位:分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPrice(integer $UnitPrice) 设置后付费模式下的单位资源价格，不包含优惠，单位:分
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnitPriceDiscount() 获取优惠后后付费模式下的单位资源价格, 单位: 分,例如用户享有折扣=UnitPricet × Discount
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscount(integer $UnitPriceDiscount) 设置优惠后后付费模式下的单位资源价格, 单位: 分,例如用户享有折扣=UnitPricet × Discount
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeUnit() 获取计费价格单位
 * @method void setChargeUnit(string $ChargeUnit) 设置计费价格单位
 */
class TradePrice extends AbstractModel
{
    /**
     * @var integer 预付费模式下资源总价，不包含优惠，单位:分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPrice;

    /**
     * @var float 总的折扣，100表示100%不打折
     */
    public $Discount;

    /**
     * @var integer 预付费模式下的优惠后总价, 单位: 分,例如用户享有折扣 =TotalPrice × Discount
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPriceDiscount;

    /**
     * @var integer 后付费模式下的单位资源价格，不包含优惠，单位:分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPrice;

    /**
     * @var integer 优惠后后付费模式下的单位资源价格, 单位: 分,例如用户享有折扣=UnitPricet × Discount
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscount;

    /**
     * @var string 计费价格单位
     */
    public $ChargeUnit;

    /**
     * @param integer $TotalPrice 预付费模式下资源总价，不包含优惠，单位:分
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Discount 总的折扣，100表示100%不打折
     * @param integer $TotalPriceDiscount 预付费模式下的优惠后总价, 单位: 分,例如用户享有折扣 =TotalPrice × Discount
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnitPrice 后付费模式下的单位资源价格，不包含优惠，单位:分
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnitPriceDiscount 优惠后后付费模式下的单位资源价格, 单位: 分,例如用户享有折扣=UnitPricet × Discount
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeUnit 计费价格单位
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
        if (array_key_exists("TotalPrice",$param) and $param["TotalPrice"] !== null) {
            $this->TotalPrice = $param["TotalPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("TotalPriceDiscount",$param) and $param["TotalPriceDiscount"] !== null) {
            $this->TotalPriceDiscount = $param["TotalPriceDiscount"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }
    }
}
