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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关于Lighthouse Instance实例的价格信息
 *
 * @method float getOriginalBundlePrice() 获取套餐单价原价。
 * @method void setOriginalBundlePrice(float $OriginalBundlePrice) 设置套餐单价原价。
 * @method float getOriginalPrice() 获取原价。
 * @method void setOriginalPrice(float $OriginalPrice) 设置原价。
 * @method float getDiscount() 获取折扣。
 * @method void setDiscount(float $Discount) 设置折扣。
 * @method float getDiscountPrice() 获取折后价。
 * @method void setDiscountPrice(float $DiscountPrice) 设置折后价。
 * @method string getCurrency() 获取价格货币单位。取值范围CNY:人民币。USD:美元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrency(string $Currency) 设置价格货币单位。取值范围CNY:人民币。USD:美元。
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstancePrice extends AbstractModel
{
    /**
     * @var float 套餐单价原价。
     */
    public $OriginalBundlePrice;

    /**
     * @var float 原价。
     */
    public $OriginalPrice;

    /**
     * @var float 折扣。
     */
    public $Discount;

    /**
     * @var float 折后价。
     */
    public $DiscountPrice;

    /**
     * @var string 价格货币单位。取值范围CNY:人民币。USD:美元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Currency;

    /**
     * @param float $OriginalBundlePrice 套餐单价原价。
     * @param float $OriginalPrice 原价。
     * @param float $Discount 折扣。
     * @param float $DiscountPrice 折后价。
     * @param string $Currency 价格货币单位。取值范围CNY:人民币。USD:美元。
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
        if (array_key_exists("OriginalBundlePrice",$param) and $param["OriginalBundlePrice"] !== null) {
            $this->OriginalBundlePrice = $param["OriginalBundlePrice"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }
    }
}
